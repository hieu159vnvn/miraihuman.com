<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Banner;
use App\Models\Tintuc;
use App\User;

class GiayPhepController extends Controller
{
    public function index()
    {
        $logo = DB::table('zm_logos')->take(1)->orderBy('id','desc')->get();
        $dclienhe = DB::table('zm_dclienhes')->where('stt','=','1')->orderBy('id','desc')->get();
        $tintuc = DB::table('zm_tintucs')->where('stt','=','1')->take(1)->orderBy('id','desc')->get();
        $tintucorther = DB::table('zm_tintucs')->where('stt','=','1')->skip(1)->take(4)->orderBy('id','desc')->get();
        $mxh = DB::table('zm_mxhs')->where('stt','=','1')->orderBy('id','desc')->get();
        $fbfooter = DB::table('zm_fbfooter')->where('stt', '=', '1')->orderBy('id','desc')->get();
        $menu1 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','asc')->take(4)->get();
        $menu2 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','desc')->take(4)->get();
        return view('giayphep',[
            'logo'=>$logo,
            'dclienhe'=>$dclienhe,
            'tintuc'=>$tintuc,
            'tintucorther'=>$tintucorther,
            'mxh'=>$mxh,
            'fbfooter'=>$fbfooter,
            'menu1'=>$menu1,
            'menu2'=>$menu2,
            ]);
    }
    public function getidnews($id){
        $newsdetail = Tintuc::find($id);
        return view('giayphep',['newsdetail'  => $newsdetail]);
        // $idnews=DB::table('zm_tintucs')->get();
        // print_r($idnews);
    }
}