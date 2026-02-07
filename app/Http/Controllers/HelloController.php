<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function index(){
        $drink = [
            [
                'id'=>1,
                'name'=>'coffee',
                'price'=>4000,
                'stock'=>10
            ]
        ];
        return view('list',compact('drink'));
    }
}
