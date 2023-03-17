<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function loadview()
    {
        $names=['swamy','patel','shiva','prasad'];
        return view('swamy',['users'=>$names]);
    }
}
