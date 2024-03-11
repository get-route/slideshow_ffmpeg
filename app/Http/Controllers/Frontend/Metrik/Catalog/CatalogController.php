<?php

namespace App\Http\Controllers\Frontend\Metrik\Catalog;

use App\Http\Controllers\Controller;
use App\Models\Metric;
use App\Models\Tag;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(){
        return view('frontend.metrika.catalog');
    }

    public function catalog(){
        $all_metrik = Metric::with('tags')->OrderBy('views','DESC')->where('public','=','Да')->get();
        return response()->json($all_metrik);
    }
    public function tags(){
        $all_tags = Tag::with('metric')->get();
        return response()->json($all_tags);
    }
}
