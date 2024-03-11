<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTagRequest;
use App\Http\Requests\Admin\TagRequest;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Cviebrock\EloquentSluggable\Services\SlugService;


class TagsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tags.tags_index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTagRequest $request)
    {
        $data = $request->validated();
        $createTag = Tag::create(['title'=>$request->title, 'text'=>$request->text, 'h1'=>$request->h1,'description'=>$request->description]);
        return $createTag;
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $tags_all = DB::table('tags')->get();
        return response()->json($tags_all);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagRequest $request, $id)
    {
        $data = $request->validated();
        $update_tag = DB::table('tags')->where('id','=',$id)->update(['title'=>$request->title,'text'=>$request->text, 'h1'=>$request->h1,'description'=>$request->description]);
        return response()->json($update_tag);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteTag = Tag::find($id)->delete();
        $tag_relationship = DB::table('tag_metric')->where('tag_id','=',$id)->delete();
    }
}
