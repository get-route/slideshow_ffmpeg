<?php

namespace App\Http\Controllers\Frontend\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class IndexTagController extends Controller
{
    public function index($url_tag){
        $tag = Tag::with('metric')->where('url','=',$url_tag)->get();
        return view('frontend.tag.index',compact('tag'));
    }
}
