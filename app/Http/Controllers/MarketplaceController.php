<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class MarketplaceController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'SHeRise';
        return view('marketplace',$data);
    }
}
