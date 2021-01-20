<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Profiles extends Controller
{
    //
    public function list()
    {

        $data= http::get('https://jsonplaceholder.typicode.com/posts')->json();
        return view('profiles',['profiledata'=>$data]);
    }
}
