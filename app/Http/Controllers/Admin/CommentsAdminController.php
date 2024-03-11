<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Comment\OnOFFCommentRequest;
use App\Http\Requests\Admin\Comment\ReplyCommentRequest;
use App\Http\Requests\Admin\Comment\UpdateCommentRequest;
use App\Models\Comment;
use App\Models\Metric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.comments.comments_index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReplyCommentRequest $request)
    {
        $data = $request->validated();
        $reply_admin = Comment::create([
            'text'=>$request->text,
            'name'=>$request->name,
            'email'=>$request->email,
            'metric_id'=>$request->metric_id,
            'parent_id'=>$request->parent_id,
            'public'=>"ДА",
        ]);
        return $reply_admin;
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $comments_all = Comment::with('metrics')->orderBy('metric_id','ASC')->get();
        return response()->json($comments_all);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(OnOFFCommentRequest $request, $id)
    {
        $public_comment = DB::table('comments')->where('id','=',$id)->update([
            'public'=>$request->public,
        ]);
        return $public_comment;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommentRequest $request, $id)
    {
        $data = $request->validated();
        $updated_comment = DB::table('comments')->where('id','=',$id)->update(
          [
              'name'=>$request->name,
              'text'=>$request->text,
              'email'=>$request->email,
          ]
        );
        return $updated_comment;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_comment =DB::table('comments')->where('id','=',$id)->delete();
        return $delete_comment;
    }
}
