<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class EloquentController extends Controller
{
    //
    public function eloquent()
    {
        $data= DB::table('members')->get();
        return view('eloquent',['data'=>$data]);
    }
}
