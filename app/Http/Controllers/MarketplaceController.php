<?php

namespace App\Http\Controllers;

use App\Models\Market;
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

class MarketplaceController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'SHeRise';
        $data['items'] = Market::paginate(3);
        return view('marketplace',$data);
    }

    public function indexForm()
    {
        $data['page_title'] = 'SHeRise';
        return view('marketplace_form',$data);
    }

    public function storeItems(Request $request){
        $user = Auth::user();

        $newData = new Market(); 
        $newData->name = $request->name;
        $newData->category = $request->category;
        $description = $request->description;
        $newData->description = nl2br($description);
        $newData->location = $request->location;
        $newData->price = $request->price;

        $image = $request->file('image');
        $img = $request->name . '.' . $image->getClientOriginalExtension();
        $destinationPath_image = public_path('data/item');
        $image->move($destinationPath_image, $img);

        $newData->user_id = $user->id;

        $newData->image = $img;
        $newData->save();

        //$this->sendWhatsAppMessage($request->name, $userPhoneNumber);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Items berhasil disimpan!');
    }
}
