<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Metric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{

    public function index(){
        return view('index');
    }

}
