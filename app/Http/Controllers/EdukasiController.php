<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EdukasiController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'SHeRise';
        return view('edukasi',$data);
    }
}
