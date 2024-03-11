<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Metric\CreateRequest;
use App\Http\Requests\Admin\Metric\ImgMetricRequest;
use App\Http\Requests\Admin\Metric\UpdateMetricRequest;
use App\Models\Metric;
use App\Models\Relationships\TagMetric;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use function League\Flysystem\has;

class MetricsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.metrics.metrics_index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( CreateRequest $request)
    {
        $data = $request->validated();
        //returns ID new post
        $createMetric = DB::table('metrics')->insertGetId([
            'title'=> $request->title,
            'photo'=> $request->photo,
            'description'=> $request->description,
            'text'=> $request->text,
            'prise'=> $request->prise,
            'h1'=>$request->h1,
            'url'=>Str::slug($request->title),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]

        );
        //returns Id new posts and add new relationships for tags
        foreach ($request->tags as $tag){
            $relationship_tag = TagMetric::create([
                'tag_id'=>$tag,
                'metric_id'=>$createMetric,
                ]);
        }
        return response($createMetric);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploads(ImgMetricRequest $request)
    {
        if ($request->hasFile('image')){
            $filename = $request->file('image')->getClientOriginalName();
            //Function download image in storage
            $newMetric = $request->file('image')->storeAs("public/metric",$filename);
            //Function thumbnail in for metric
            $path = Storage::path('public/metric/'.$filename);
            $thumbnail = Image::make($path);
            $thumbnail->resize(300,300);
            $thumbnail->save(Storage::path("public/thumbnail/thumbnail-".$filename));
        }
        return response($thumbnail);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $all_metrics = Metric::with('tags')->orderBy('updated_at','ASC')->get(['id','title','photo','prise','url','public']);
        return response($all_metrics);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_tags()
    {
        $all_tags = Tag::all();
        return response()->json($all_tags);

    }
    //File manager storage images for metric
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function directive()
    {
        $directive_img = scandir('storage/metric');
        $directive_img = array_splice($directive_img, 2);
        return response($directive_img);

    }
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dirdelete($image)
    {
        //Delete storage metric images
        $delete_directory= Storage::disk('public')->delete("metric/$image");
        //Delete thumbnail for metric images
        $delete_thumbnail = Storage::disk('public')->delete("thumbnail/thumbnail-$image");
        return response($delete_directory);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $metric_edit = Metric::with('tags')->where('id','=',$id)->get();
        return response($metric_edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMetricRequest $request, $id)
    {
        $data = $request->validated();
        //returns ID new post
        $updateMetric = DB::table('metrics')->where('id','=',$id)->update([
                'title'=> $request->title,
                'photo'=> $request->photo,
                'description'=> $request->description,
                'text'=> $request->text,
                'prise'=> $request->prise,
                'h1'=>$request->h1,
                'url'=>Str::slug($request->title),
            ]

        );
        //pre-delete relationships for metric
        $tag_relationship = DB::table('tag_metric')->where('metric_id','=',$id)->delete();


        //returns Id new posts and add new relationships for tags
        foreach ($request->tags as $tag){
            $relationship_tag = TagMetric::create([
                'tag_id'=>$tag,
                'metric_id'=>$id,
            ]);
        }
        return response($updateMetric);
    }

 /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     */
    public function onpublic(Request $request, $id)
    {

        //returns ID new post
        $updateMetric = DB::table('metrics')->where('id','=',$id)->update(['public'=> $request->publicON,]
        );
        //pre-delete relationships for metric
        return response($updateMetric);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $metric_del = Metric::find($id)->delete();
        $tag_relationship = DB::table('tag_metric')->where('metric_id','=',$id)->delete();
        $comment_relationship = DB::table('comments')->where('metric_id','=',$id)->delete();
    }
}
