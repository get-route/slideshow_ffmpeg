<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexCabinetController extends Controller
{
    public function index(){
        $user = Auth::user();
        $path = "storage/user/$user->id";
        if (file_exists($path)){
            //quantity stat in cabinet users ready_metriks
            $quantity_metrik = scandir($path);
            $quantity_metrik = array_splice($quantity_metrik, 3);
            $quantity = count($quantity_metrik);
        }else{
            $quantity = 0;
        }


        return view('cabinet.index',compact('user','quantity'));
    }
}
