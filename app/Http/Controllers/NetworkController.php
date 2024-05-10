<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Network;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class NetworkController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'SHeRise - Network';
        $data['events'] = Event::paginate(1);
        $data['networks'] = Network::orderBy('created_at', 'desc')->take(3)->get();
        return view('network',$data);
    }
    public function indexTopic()
    {
        $data['page_title'] = 'SHeRise - Topic';
        $data['topics'] = Network::paginate(4);
        return view('network_topic',$data);
    }

    public function indexForm()
    {
        $data['page_title'] = 'SHeRise';
        return view('network_topic_form',$data);
    }

    public function indexDetail($id)
    {
        $data['page_title'] = 'SHeRise';
        $data['topic'] = Network::findOrFail($id);
        return view('network_topic_detail', $data);
    }

    public function storeTopics(Request $request){
        $user = Auth::user();

        $newData = new Network(); 
        $newData->title = $request->title;
        $description = $request->description;
        $newData->description = nl2br($description);
        $content = $request->content;
        $newData->content = nl2br($content);
        
        $newData->user_id = $user->id;

        $image = $request->file('image');
        $img = $request->title . '.' . $image->getClientOriginalExtension();
        $destinationPath_image = public_path('data/topic');
        $image->move($destinationPath_image, $img);

        $newData->image = $img;
        $newData->save();

        //$this->sendWhatsAppMessage($request->name, $userPhoneNumber);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Topik berhasil disimpan!');
    }
}
