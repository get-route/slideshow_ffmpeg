<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use FFMpeg\Filters\Frame\FrameFilters;
use FFMpeg\Format\Video\X264;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use ProtoneMedia\LaravelFFMpeg\Exporters\EncodingException;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class VideoFoto extends Controller
{
    public function index(){
        //$open = FFMpeg::class;

//        FFMpeg::open('1.jpg')
//            ->export()
//            ->asTimelapseWithFramerate(1)
//            ->inFormat(new X264)
//            ->save('timelapse.mp4');
//        $filesystem = new Filesystem();
//        $file = FFMpeg::fromFilesystem($filesystem)
//            ->open('yesterday.mp3')
//            ->export()
//            ->toDisk('converted_songs')
//            ->inFormat(new \FFMpeg\Format\Audio\Aac)
//            ->save('yesterday.aac');
//    return $file;
//        Artisan::call('ffmpeg',[
//           'command'=>'ffmpeg -framerate 1/5 -i public/img%d.jpg -c:v libx264 -vf fps=25 -pix_fmt yuv420p out.mp4'
//        ]);
//        $shell = shell_exec('ffmpeg -framerate 1/5 -i public/img%d.jpg -c:v libx264 -vf fps=25 -pix_fmt yuv420p public/out.mp4');
//        return $shell;

 //       -----
//        FFMpeg::open("1/img%d.jpg")->resize(320,240);
//
//        FFMpeg::fromDisk('public')
//            ->open("1/img%d.jpg")
//            ->getFrameFromSeconds(1)
//            ->export()
//            ->addFilter(function (FrameFilters $filters) {
//                $filters->custom('scale=320:180');
//            })
//            ->toDisk('public')
//            ->save("1/img%d.jpg");
//------
        //1/5 скорость
        //new-флаг по которому берем изображение
        //user папку удалить. зачистить все с нев флагом.

            shell_exec("ffmpeg -i ../storage/app/public/1/user/img%d.jpg -vf scale=320:240 ../storage/app/public/1/img%dnew.jpg");
            shell_exec("ffmpeg -framerate 1/5 -i ../storage/app/public/1/img%dnew.jpg -i ../storage/app/public/1/user/music.mp3 -shortest -r 25 -c:v libx264 -pix_fmt yuv420p ../storage/app/public/1/outt.mp4");


            //FFMpeg::open("img%d0.jpg")
//            ->export()
//            ->asTimelapseWithFramerate(1/2)
//            ->inFormat(new X264)
//            ->resize(320,240)->save('1.mp4');

//ffmpeg -framerate 1 -i storage/app/public/img%d0.jpg -i storage/app/public/music.mp3 -shortest -r 25 -c:v libx264 -pix_fmt yuv420p storage/app/public/outt.mp4

//        $lowBitrate = (new X264)->setKiloBitrate(250);
//        $midBitrate = (new X264)->setKiloBitrate(500);
//        $highBitrate = (new X264)->setKiloBitrate(1000);
//        $superBitrate = (new X264)->setKiloBitrate(1500);
//
//        FFMpeg::open('1.mp4')
//            ->exportForHLS()
//            ->addFormat($lowBitrate, function($media) {
//                $media->addFilter('scale=640:480');
//            })
//            ->addFormat($midBitrate, function($media) {
//                $media->scale(960, 720);
//            })
//            ->addFormat($highBitrate, function ($media) {
//                $media->addFilter(function ($filters, $in, $out) {
//                    $filters->custom($in, 'scale=1920:1200', $out); // $in, $parameters, $out
//                });
//            })
//            ->addFormat($superBitrate, function($media) {
//                $media->addLegacyFilter(function ($filters) {
//                    $filters->resize(new \FFMpeg\Coordinate\Dimension(2560, 1920));
//                });
//            })
//            ->save('1.mp4');
    }
}
