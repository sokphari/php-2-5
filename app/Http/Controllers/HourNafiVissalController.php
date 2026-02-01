<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HourNafiVissalController extends Controller
{
    // public function index(){
    //     return view('admin');
    // }
    public function data(){
        $student = [
            [
                'id'=>1,
                'name'=>'nafi',
                'gender'=>'male',
                'address'=> 'pp'

            ],
            [
                'id'=>2,
                'name'=>'visal',
                'gender'=>'male',
                'address'=> 'pp'

            ],
            [
                'id'=>3,
                'name'=>'hour',
                'gender' =>'male',
                'address'=> 'pp'

            ]
        ];
        return view('admin',compact('student'));
    }
}
