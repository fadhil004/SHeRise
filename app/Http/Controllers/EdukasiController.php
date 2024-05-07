<?php

namespace App\Http\Controllers;

use App\Models\Event;//sementara
use App\Models\Edukasi;
use Illuminate\Http\Request;

class EdukasiController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'SHeRise';
        $data['educations'] = Event::paginate(4);//sementara
        return view('edukasi',$data);
    }
}
