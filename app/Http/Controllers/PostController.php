<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function calc(Request $request){
//        echo $request->nummer1 + $request->nummer2;
        $uitkomst = $request->nummer1 + $request->nummer2;

        return view('form',['uitkomst'=>$uitkomst]);

//        nummer1 = $request->nummer1;
//        nummer2= $request->nummer2;

    }

//    public function ShowData(Request $request){
//        return view('PostData',['data'=>$request->nummer1]);
//    }
}
