<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Report;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class PengaduanController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'SHeRise';
        return view('pengaduan',$data);
    }

    public function storeReports(Request $request){
        $user = Auth::user();

        $newData = new Report(); 
        $newData->nama_pelapor = $request->nama_pelapor;
        $newData->kontak_pelapor = $request->kontak_pelapor;
        $description = $request->deskripsi_kejadian;
        $newData->deskripsi_kejadian = nl2br($description);
        $newData->tanggal_kejadian = $request->tanggal_kejadian;

        $image = $request->file('foto_bukti');
        $img = $request->nama_pelapor . '.' . $image->getClientOriginalExtension();
        $destinationPath_image = public_path('data/report');
        $image->move($destinationPath_image, $img);

        $newData->foto_bukti = $img;
        $newData->save();

        //$this->sendWhatsAppMessage($request->name, $userPhoneNumber);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Berhasil Lapor Pengaduan!');
    }
}
