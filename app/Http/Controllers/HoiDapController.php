<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Banner;
use App\User;

class HoiDapController extends Controller
{
    public function index()
    {
        $logo = DB::table('zm_logos')->take(1)->orderBy('id','desc')->get();
        $dclienhe = DB::table('zm_dclienhes')->where('stt','=','1')->orderBy('id','desc')->get();
        $nhom1 = DB::table('zm_hoidaps')->where('id_loaicauhoi','=','1')->orderBy('id','desc')->get();
        $nhom2 = DB::table('zm_hoidaps')->where('id_loaicauhoi','=','2')->orderBy('id','desc')->get();
        $nhom3 = DB::table('zm_hoidaps')->where('id_loaicauhoi','=','3')->orderBy('id','desc')->get();
        $nhom4 = DB::table('zm_hoidaps')->where('id_loaicauhoi','=','4')->orderBy('id','desc')->get();
        $nhom5 = DB::table('zm_hoidaps')->where('id_loaicauhoi','=','5')->orderBy('id','desc')->get();
        $loaihoidap = DB::table('zm_loaicauhois')->orderBy('id','asc')->take(5)->get();
        $mxh = DB::table('zm_mxhs')->where('stt','=','1')->orderBy('id','desc')->get();
        $fbfooter = DB::table('zm_fbfooter')->where('stt', '=', '1')->orderBy('id','desc')->get();
        $menu1 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','asc')->take(4)->get();
        $menu2 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','desc')->take(4)->get();
        $bannerpage = DB::table('zm_bannerpage')->where('page', '=', 'Hỏi đáp')->first();

        return view('hoidap',[
            'logo'=>$logo,
            'dclienhe'=>$dclienhe,
            'nhom1'=>$nhom1,
            'nhom2'=>$nhom2,
            'nhom3'=>$nhom3,
            'nhom4'=>$nhom4,
            'nhom5'=>$nhom5,
            'loaihoidap'=>$loaihoidap,
            'mxh'=>$mxh,
            'fbfooter'=>$fbfooter,
            'menu1'=>$menu1,
            'menu2'=>$menu2,
            'bannerpage'=>$bannerpage,
            ]);
    }
}