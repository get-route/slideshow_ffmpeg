<?php

namespace App\Http\Controllers\Frontend\Metrik;

use App\Http\Controllers\Controller;
use App\Models\Metric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Termwind\li;

class IndexMetricController extends Controller
{
    public function index($url_metric){
        $metrika = Metric::with(['tags','comments'])->where('url','=',$url_metric)->get();
        $random_metrik = Metric::all('title','url','views','public','photo')->where('public','=','Да')->random(6);
        $parent_comment = $reply_comment = [];

        foreach ($metrika[0]->comments as $comment_param){
            if (!$comment_param->parent_id){
                $parent_comment[]= $comment_param;
            }else{
                $reply_comment[] = $comment_param;
            }
        }
        //Count view increment
        $metrika[0]->views +=1;
        $metrika[0]->update();
        $user = Auth::user();
        return view('frontend.metrika.index',compact('metrika','user','reply_comment','parent_comment','random_metrik'));
    }
//    public function comments_metrik($url_metrik){
//        $metrika_comments = Metric::with(['comments'])->where('url','=',$url_metrik)->get();
//
//        return $metrika_comments;
//    }
}
