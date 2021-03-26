<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Banner;
use App\Models\Hinhanh;
use App\User;

class HinhAnhController extends Controller
{
    public function index()
    {
        $logo = DB::table('zm_logos')->take(1)->orderBy('id','desc')->get();
        $dclienhe = DB::table('zm_dclienhes')->where('stt','=','1')->orderBy('id','desc')->get();
        $mxh = DB::table('zm_mxhs')->where('stt','=','1')->orderBy('id','desc')->get();
        $fbfooter = DB::table('zm_fbfooter')->where('stt', '=', '1')->orderBy('id','desc')->get();
        $menu1 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','asc')->take(4)->get();
        $menu2 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','desc')->take(4)->get();
        $hinhanh = DB::table('zm_hinhanhs')->where('stt','=','1')->orderBy('id','desc')->get();
        return view('hinhanhalbum',[
            'fbfooter'=>$fbfooter,
            'logo'=>$logo,
            'dclienhe'=>$dclienhe,
            'mxh'=>$mxh,
            'fbfooter'=>$fbfooter,
            'menu1'=>$menu1,
            'menu2'=>$menu2,
            'hinhanh'=>$hinhanh,
            ]);  
    }
    public function getidhinhanh($slug){
        $logo = DB::table('zm_logos')->take(1)->orderBy('id','desc')->get();
        $dclienhe = DB::table('zm_dclienhes')->where('stt','=','1')->orderBy('id','desc')->get();
        $mxh = DB::table('zm_mxhs')->where('stt','=','1')->orderBy('id','desc')->get();
        $fbfooter = DB::table('zm_fbfooter')->where('stt', '=', '1')->orderBy('id','desc')->get();
        $menu1 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','asc')->take(4)->get();
        $menu2 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','desc')->take(4)->get();
        $imgdetail = Hinhanh::where('slug', '=', $slug)->first();
        return view('hinhanh',[
            'fbfooter'=>$fbfooter,
            'logo'=>$logo,
            'dclienhe'=>$dclienhe,
            'mxh'=>$mxh,
            // 'donhang'=>$donhang,
            'fbfooter'=>$fbfooter,
            'imgdetail' => $imgdetail,
            'menu1'=>$menu1,
            'menu2'=>$menu2,
            ]);  
    }
}