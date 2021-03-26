<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Banner;
use App\User;

class DieuDuongController extends Controller
{
    public function index()
    {
        $logo = DB::table('zm_logos')->take(1)->orderBy('id','desc')->get();
        $dclienhe = DB::table('zm_dclienhes')->where('stt','=','1')->orderBy('id','desc')->get();
        $tintuc = DB::table('zm_tintucs')->where([['stt','=','1'],['id_loaitintuc','=','3']])->orderBy('id','desc')->paginate(8);
        // $tintucorther = DB::table('zm_tintucs')->where([['stt','=','1'],['id_loaitintuc','=','3']])->skip(1)->take(4)->orderBy('id','desc')->get();
        $mxh = DB::table('zm_mxhs')->where('stt','=','1')->orderBy('id','desc')->get();
        $fbfooter = DB::table('zm_fbfooter')->where('stt', '=', '1')->orderBy('id','desc')->get();
        $menu1 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','asc')->take(4)->get();
        $menu2 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','desc')->take(4)->get();
        $bannerpage = DB::table('zm_bannerpage')->where('page', '=', 'Điều dưỡng')->first();

        return view('dieuduong',[
            'logo'=>$logo,
            'dclienhe'=>$dclienhe,
            'tintuc'=>$tintuc,
            // 'tintucorther'=>$tintucorther,
            'mxh'=>$mxh,
            'fbfooter'=>$fbfooter,
            'menu1'=>$menu1,
            'menu2'=>$menu2,
            'bannerpage'=>$bannerpage,
            ]);
    }
    public function getidnews($slug){
        $newsdetail = Tintuc::where('slug', '=', $slug)->first();
        $fbfooter = DB::table('zm_fbfooter')->where('stt', '=', '1')->orderBy('id','desc')->get();
        $menu1 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','asc')->take(4)->get();
        $menu2 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','desc')->take(4)->get();
        return view('newsdetail',['newsdetail'  => $newsdetail,'fbfooter'=>$fbfooter, 'menu1'=>$menu1,
        'menu2'=>$menu2,]);

        // $idnews=DB::table('zm_tintucs')->get();
        // print_r($idnews);
    }
}