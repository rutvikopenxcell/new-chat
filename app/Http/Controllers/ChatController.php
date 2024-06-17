<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class ChatController extends Controller
{
    public function index(Request $request){

        Session::put('name', $request->name);
        return view('home');
    }

    public function home(){
        return view('homepage');
    }

    public function contact(){
        dd('enter');
    }
}
