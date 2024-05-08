<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;

class MarketplaceController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'SHeRise';
        $data['items'] = Market::paginate(3);
        return view('marketplace',$data);
    }
}
