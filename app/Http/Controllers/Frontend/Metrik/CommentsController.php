<?php

namespace App\Http\Controllers\Frontend\Metrik;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\CommentRequest;
use App\Models\Comment;
use Illuminate\Support\Facades\Request;
use function DragonCode\Support\Instances\validated;

class CommentsController extends Controller
{
    public function index(CommentRequest $request){


            $validate = $request->validated();
            $comment_add = Comment::create(
                [
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'text'=>$request->text,
                    'metric_id'=>$request->metrikId,
                    'parent_id'=>$request->parentId,
                ]
            );
        return $comment_add;
    }
}
