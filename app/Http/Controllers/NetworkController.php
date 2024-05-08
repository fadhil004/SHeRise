<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Network;
use Illuminate\Http\Request;

class NetworkController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'SHeRise - Network';
        $data['events'] = Event::paginate(2);
        $data['networks'] = Event::orderBy('created_at', 'desc')->take(3)->get();
; //ganti ke Network
        return view('network',$data);
    }
    public function indexTopic()
    {
        $data['page_title'] = 'SHeRise - Topic';
        $data['topics'] = Event::paginate(4);
; //ganti ke Network
        return view('network_topic',$data);
    }
}
