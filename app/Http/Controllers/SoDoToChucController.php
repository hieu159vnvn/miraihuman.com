<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Banner;
use App\User;

class SoDoToChucController extends Controller
{
    public function index()
    {
        $logo = DB::table('zm_logos')->take(1)->orderBy('id','desc')->get();
        $dclienhe = DB::table('zm_dclienhes')->where('stt','=','1')->orderBy('id','desc')->get();
	    $donhang = DB::table('donhangs')->join('nganhnghes', 'donhangs.nganhnghe_id', '=', 'nganhnghes.id')->where('donhangs.stt', '=', '1')->select('donhangs.*','nganhnghes.nganhnghe_vn as nganhnghe_vn')->orderBy('donhangs.id','desc')->take(10)->get();
        $mxh = DB::table('zm_mxhs')->where('stt','=','1')->orderBy('id','desc')->get();
        $fbfooter = DB::table('zm_fbfooter')->where('stt', '=', '1')->orderBy('id','desc')->get();
        $menu1 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','asc')->take(4)->get();
        $menu2 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','desc')->take(4)->get();
        $gioithieu = DB::table('zm_gioithieus')->where('stt', '=', '1')->orderBy('id','desc')->get();
        return view('sodotochuc',[
            'logo'=>$logo,
            'dclienhe'=>$dclienhe,
            'donhang'=>$donhang,
            'mxh'=>$mxh,
            'fbfooter'=>$fbfooter,
            'menu1'=>$menu1,
            'menu2'=>$menu2,
            'gioithieu'=>$gioithieu,
            ]);
    }
}