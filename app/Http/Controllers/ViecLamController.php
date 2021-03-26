<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Banner;
use App\User;

class ViecLamController extends Controller
{
    public function index()
    {
        $thuctap = DB::table('donhangs')->join('nganhnghes', 'donhangs.nganhnghe_id', '=', 'nganhnghes.id')->where([['stt', '=', '1'],['tendonhang','=','THỰC TẬP SINH']])->select('donhangs.*','nganhnghes.nganhnghe_vn as nganhnghe_vn')->orderBy('donhangs.id','desc')->paginate(50);
        $kysu = DB::table('donhangs')->join('nganhnghes', 'donhangs.nganhnghe_id', '=', 'nganhnghes.id')->where([['stt', '=', '1'],['tendonhang','=','KỸ SƯ']])->select('donhangs.*','nganhnghes.nganhnghe_vn as nganhnghe_vn')->orderBy('donhangs.id','desc')->paginate(50);
        $dieuduong = DB::table('donhangs')->join('nganhnghes', 'donhangs.nganhnghe_id', '=', 'nganhnghes.id')->where([['stt', '=', '1'],['tendonhang','=','ĐIỀU DƯỠNG']])->select('donhangs.*','nganhnghes.nganhnghe_vn as nganhnghe_vn')->orderBy('donhangs.id','desc')->paginate(50);
        $dacdinh = DB::table('donhangs')->join('nganhnghes', 'donhangs.nganhnghe_id', '=', 'nganhnghes.id')->where([['stt', '=', '1'],['tendonhang','=','ĐẶC ĐỊNH']])->select('donhangs.*','nganhnghes.nganhnghe_vn as nganhnghe_vn')->orderBy('donhangs.id','desc')->paginate(50);
        $thongtinlienlac = DB::table('zm_dclienhes')->where('ten','=','TRUNG TÂM ĐÀO TẠO')->take(1)->get();
        $fbfooter = DB::table('zm_fbfooter')->where('stt', '=', '1')->orderBy('id','desc')->get();
        $menu1 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','asc')->take(4)->get();
        $menu2 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','desc')->take(4)->get();
        $bannerpage = DB::table('zm_bannerpage')->where('page', '=', 'Đơn hàng')->first();

        return view('ordersdetail', compact('thuctap','kysu','dieuduong','thongtinlienlac','fbfooter','menu1','menu2','dacdinh','bannerpage'));
    }
    public function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $thuctap = DB::table('donhangs')->join('nganhnghes', 'donhangs.nganhnghe_id', '=', 'nganhnghes.id')->where([['stt', '=', '1'],['tendonhang','=','THỰC TẬP SINH']])->select('donhangs.*','nganhnghes.nganhnghe_vn as nganhnghe_vn')->orderBy('donhangs.id','desc')->paginate(50);
        return $thuctap;
        }
    }
}