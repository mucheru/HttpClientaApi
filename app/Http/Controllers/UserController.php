<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //

    public function index()
    {
        $data= Http::get("https://reqres.in/api/users?page=1");
        return view('users',["datas"=>$data['data']]);
       
    }

    public function post_data()
    {
        $response = Http::post('http://example.com/users', [
            'name' => 'Steve',
            'role' => 'Network Administrator',
        ]);
        return $response->status();
    }

}
