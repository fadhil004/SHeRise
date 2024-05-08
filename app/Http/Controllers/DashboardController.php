<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Edukasi;
use App\Models\Network;
use App\Models\Market;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'SHeRise';
        $data['educations'] = Event::paginate(4);
        return view('dashboard',$data);
    }

    public function storeEvents(Request $request){

        $newData = new Event(); 
        $newData->title = $request->title;
        $description = $request->description;
        $newData->description = nl2br($description);
        $newData->date = $request->date;
        $newData->location = $request->location;

        $image = $request->file('image');
        $img = $request->title . '.' . $image->getClientOriginalExtension();
        $destinationPath_image = public_path('data/event');
        $image->move($destinationPath_image, $img);

        $newData->image = $img;
        $newData->save();

        //$this->sendWhatsAppMessage($request->name, $userPhoneNumber);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Event berhasil disimpan!');
    }

    public function storeTopics(Request $request){

        $newData = new Network(); 
        $newData->title = $request->title;
        $description = $request->description;
        $newData->description = nl2br($description);
        $content = $request->content;
        $newData->content = nl2br($content);
        
        $newData->user_id = 1;

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

    public function storeEducations(Request $request){

        $newData = new Edukasi(); 
        $newData->title = $request->title;
        $description = $request->description;
        $newData->description = nl2br($description);
        $newData->link = $request->link;

        $image = $request->file('image');
        $img = $request->title . '.' . $image->getClientOriginalExtension();
        $destinationPath_image = public_path('data/edukasi');
        $image->move($destinationPath_image, $img);

        $newData->image = $img;
        $newData->save();

        //$this->sendWhatsAppMessage($request->name, $userPhoneNumber);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Educations berhasil disimpan!');
    }

    public function storeItems(Request $request){

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

        $newData->user_id = 1;

        $newData->image = $img;
        $newData->save();

        //$this->sendWhatsAppMessage($request->name, $userPhoneNumber);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Items berhasil disimpan!');
    }
}
