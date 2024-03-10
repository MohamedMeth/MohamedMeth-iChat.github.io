<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\iChat;
class DashboardController extends Controller
{
    public function index()
    {
        // $ichat = new iChat([
        //     'content' => 'Hello there!',    "for testing!!!"
        // ]);

        // $ichat->save();


        // dump(ichat::all());
        return view('dashboard',[
            'ichats'=> ichat::orderBy('created_at','DESC')->get()
        ]);
    }
    public function terms()
    {
        return view('terms');
    }

    

}
