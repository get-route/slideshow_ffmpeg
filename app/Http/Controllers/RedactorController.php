<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedactorController extends Controller
{
    public function index(){
        return view('frontend.redactor.index');
    }
}
