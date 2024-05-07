<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'SHeRise';
        return view('pengaduan',$data);
    }
}
