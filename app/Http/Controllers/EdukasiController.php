<?php

namespace App\Http\Controllers;

use App\Models\Edukasi;
use Illuminate\Http\Request;

class EdukasiController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'SHeRise';
        $data['educations'] = Edukasi::paginate(4);
        return view('edukasi',$data);
    }
}
