<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlerClass extends Controller
{
    public function index(){
        return view('sambathhttp');
    }
    public function show(){
        return "Message : I Love You !";
    }
    public function no(){
        return 'no no';
    }
}
