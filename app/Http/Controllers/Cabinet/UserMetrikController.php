<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class UserMetrikController extends Controller
{


    public function uploads_cabinet(Request $request){

        //expload base64 images is canvas vue.js
       $imagesUser = explode('base64,',$request->images);

       //Download images in storage user
       $filename = "user-$request->path-".Str::random(20).".jpg";
       Storage::disk('user')->put("$request->path/$filename",base64_decode($imagesUser[1]));

            //created new thumbnail file
            $path = Storage::path("public/user/$request->path/$filename");
            $directory = Storage::makeDirectory("public/user/$request->path/thumbnail");
            $thumbnail = Image::make($path);
            $thumbnail->resize(300,424);
            $thumbnail->save(Storage::path("public/user/$request->path/thumbnail/thumbnail-".$filename));
        }
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function table_cabinet(Request $request)
    {
        $path = "storage/user/$request->auth";
        if (file_exists($path)){
            $directive_img = scandir($path);
            $directive_img = array_splice($directive_img, 3);
        }else{
            $directive_img = 0;
        }

        return $directive_img;
    }
    public function incr_stat(Request $request){
        $update_params = $request->update;
        $user_auth = User::find($request->auth);
        $user_auth->$update_params+=1;
        $user_auth->update();
    }

    public function destroy_metrik($user,$image)
    {
        //Delete storage metric images in cabinet
        $delete_directory= Storage::disk('user')->delete("$user/$image");
        //Delete thumbnail for metric images in cabinet
        $delete_thumbnail = Storage::disk('user')->delete("$user/thumbnail/thumbnail-$image");
        return response($delete_directory);

    }



}
