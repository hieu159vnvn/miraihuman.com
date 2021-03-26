<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Banner;
use App\Models\DonHang;
use App\Models\NganhNghe;
use App\Models\Tuvan;
use App\Models\search;
use App\Models\HoSoHocVien;
use App\Models\Congty;
use App\Models\Camnhan;
use App\Models\School;
use App\User;
use Session;
use App;
class HomeController extends Controller
{
    public function index()
    {
    //     if (Session::has('locale')) {
    //         App::setLocale(Session::get('locale'));
    //    }
        
    //     if (App::getLocale() == 'en') {
    //         $gioithieuhome = DB::table('zm_gioithieuhome')->where('stt', '=', '1')->orderBy('id','asc')->get();
    //     }else{
    //         echo "tieng viet";
    //     }
    //     // exit();
        $logo = DB::table('zm_logos')->take(1)->orderBy('id','desc')->get();
        $thongtinlienlac = DB::table('zm_dclienhes')->where('ten','=','TRUNG TÂM ĐÀO TẠO')->take(1)->get();
        $nganhnghe = DB::table('nganhnghes')->orderBy('id','desc')->get();
        $donhangnoibat = DB::table('donhangs')->join('nganhnghes', 'donhangs.nganhnghe_id', '=', 'nganhnghes.id')
        ->where('stt', '=', '1')->select('donhangs.*','nganhnghes.nganhnghe_vn as nganhnghe_vn')
        ->orderBy('donhangs.id','desc')->where('stt', '=', '1')->skip(0)->take(4)->get();
        $donhang = DB::table('donhangs')->where('stt', '=', '1')->orderBy('id','desc')->get();
        $banner = DB::table('zm_banners')->where('stt', '=', '1')->orderBy('id','asc')->get();
        $dvcat = DB::table('zm_dichvucats')->where('stt','=','1')->orderBy('id','desc')->get();
        $tintuc = DB::table('zm_tintucs')->where('stt','=','1')->take(1)->orderBy('id','desc')->get();
        $tintucorther = DB::table('zm_tintucs')->where('stt','=','1')->skip(1)->take(4)->orderBy('id','desc')->get();
        $hinhanh = DB::table('zm_hinhanhs')->where('stt','=','1')->orderBy('id','desc')->get();
        $doitac = DB::table('zm_doitacs')->where('stt','=','1')->orderBy('id','desc')->get();
        $dclienhe = DB::table('zm_dclienhes')->where('stt','=','1')->orderBy('id','asc')->get();
        $mxh = DB::table('zm_mxhs')->where('stt','=','1')->orderBy('id','desc')->get();
        $thuctap = DB::table('donhangs')->join('nganhnghes', 'donhangs.nganhnghe_id', '=', 'nganhnghes.id')->where([['stt', '=', '1'],['tendonhang','=','THỰC TẬP SINH']])->select('donhangs.*','nganhnghes.nganhnghe_vn as nganhnghe_vn')->orderBy('donhangs.id','desc')->paginate(15);
        $kysu = DB::table('donhangs')->join('nganhnghes', 'donhangs.nganhnghe_id', '=', 'nganhnghes.id')->where([['stt', '=', '1'],['tendonhang','=','KỸ SƯ']])->select('donhangs.*','nganhnghes.nganhnghe_vn as nganhnghe_vn')->orderBy('donhangs.id','desc')->paginate(15);
        $dieuduong = DB::table('donhangs')->join('nganhnghes', 'donhangs.nganhnghe_id', '=', 'nganhnghes.id')->where([['stt', '=', '1'],['tendonhang','=','ĐIỀU DƯỠNG']])->select('donhangs.*','nganhnghes.nganhnghe_vn as nganhnghe_vn')->orderBy('donhangs.id','desc')->paginate(15);
        $dacdinh = DB::table('donhangs')->join('nganhnghes', 'donhangs.nganhnghe_id', '=', 'nganhnghes.id')->where([['stt', '=', '1'],['tendonhang','=','ĐẶC ĐỊNH']])->select('donhangs.*','nganhnghes.nganhnghe_vn as nganhnghe_vn')->orderBy('donhangs.id','desc')->paginate(15);
        $year=date("Y");
        $dadinhat = DB::table('hoso_hocviens')->whereYear('created_at', '=', $year)->where('tinhtrang','5')->get();
        $hocvien = DB::table('hoso_hocviens')->whereYear('created_at', '=', $year)->get();
        $congty =  DB::table('doitacs')->whereYear('created_at', '=', $year)->get();
        $camnhan = DB::table('zm_camnhanhocvien')->orderBy('id','desc')->get();
        $video = DB::table('zm_videos')->where('loai','=','youtube')->orderBy('id','desc')->get();
        $videojp = DB::table('zm_videos')->where('loai','=','JP')->orderBy('id','desc')->get();
        $truonghoc = DB::table('zm_truonghoc')->where('stt', '=', '1')->orderBy('id','desc')->get();
        $fbfooter = DB::table('zm_fbfooter')->where('stt', '=', '1')->orderBy('id','desc')->get();
        $menu1 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','asc')->take(4)->get();
        $menu2 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','desc')->take(4)->get();
        $gioithieuhome = DB::table('zm_gioithieuhome')->where('stt', '=', '1')->orderBy('id','asc')->get();
        $dichvuhome = DB::table('zm_dichvuhome')->where('stt', '=', '1')->orderBy('id','asc')->get();
        $daotaohome = DB::table('zm_daotaohome')->where('stt', '=', '1')->orderBy('id','desc')->get();
        $magazine = DB::table('zm_magazine')->orderBy('id','desc')->get();
        return view('home',[
            'logo'=>$logo,
            'thongtinlienlac'=> $thongtinlienlac,
            'nganhnghe'=>$nganhnghe,
            'donhangnoibat'=>$donhangnoibat,
            'donhang'=>$donhang,
            'banner'=>$banner, 
            'dvcat'=>$dvcat, 
            'tintuc'=>$tintuc,
            'tintucorther'=>$tintucorther,
            'hinhanh'=>$hinhanh,
            'doitac'=>$doitac,
            'dclienhe'=>$dclienhe,
            'mxh'=>$mxh,
            'thuctap'=>$thuctap,
            'kysu'=>$kysu,
            'dieuduong'=>$dieuduong,
            'dacdinh'=>$dacdinh,
            'dadinhat'=>$dadinhat,
            'hocvien'=>$hocvien,
            'congty'=>$congty,
            'camnhan'=>$camnhan,
            'video'=>$video,
            'videojp'=>$videojp,
            'truonghoc'=>$truonghoc,
            'fbfooter'=>$fbfooter,
            'fbfooter'=>$fbfooter,
            'menu1'=>$menu1,
            'menu2'=>$menu2,
            'gioithieuhome'=>$gioithieuhome,
            'dichvuhome'=>$dichvuhome,
            'daotaohome'=>$daotaohome,
            'magazine'=>$magazine,
            ]);
    }
    public function fetch_data(Request $request)
    {
     if($request->ajax())
     {
        $thuctap = DB::table('donhangs')->join('nganhnghes', 'donhangs.nganhnghe_id', '=', 'nganhnghes.id')->where([['stt', '=', '1'],['tendonhang','=','THỰC TẬP SINH']])->select('donhangs.*','nganhnghes.nganhnghe_vn as nganhnghe_vn')->orderBy('donhangs.id','desc')->paginate(15);
      
    //   return view('ordersdetail', compact('data'))->render();
    return $thuctap;
     }
    }
    //tim kiem
    public function searchByName(Request $request)
    {
        $students = DonHang::join('nganhnghes', 'donhangs.nganhnghe_id', '=', 'nganhnghes.id')->where('nganhnghe_vn', 'like', '%' . $request->value . '%')->select('donhangs.*','nganhnghes.nganhnghe_vn as nganhnghe_vn')->get();
        return response()->json($students); 
    }
    //tu van qua dien thoai
    public function store(Request $request){
        $item = new Tuvan;
        $item->hovaten=$request->hovaten;
        $item->sodienthoai=$request->sodienthoai;
        $item->created_at = date("Y-m-d H:i:s");
        $item->tinhtrang=0;
        $item->save();
        return redirect('/')->with('message','Gửi thành công');
    }  
    //language
    public function getLocale($id){
        Session::put('locale',$id);
         if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
       }
        return back();
    }
    //magazine
    public function magazine($id){
        $logo = DB::table('zm_logos')->take(1)->orderBy('id','desc')->get();
        $dclienhe = DB::table('zm_dclienhes')->where('stt','=','1')->orderBy('id','desc')->get();
        $tintuc = DB::table('zm_tintucs')->where('stt','=','1')->take(1)->orderBy('id','desc')->get();
        $tintucorther = DB::table('zm_tintucs')->where('stt','=','1')->skip(1)->take(4)->orderBy('id','desc')->get();
        $mxh = DB::table('zm_mxhs')->where('stt','=','1')->orderBy('id','desc')->get();
        $fbfooter = DB::table('zm_fbfooter')->where('stt', '=', '1')->orderBy('id','desc')->get();
        $menu1 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','asc')->take(4)->get();
        $menu2 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','desc')->take(4)->get();
        $item = DB::table('zm_magazine')->find($id);
        return view('magazine',[
            'logo'=>$logo,
            'dclienhe'=>$dclienhe,
            'tintuc'=>$tintuc,
            'tintucorther'=>$tintucorther,
            'mxh'=>$mxh,
            'fbfooter'=>$fbfooter,
            'menu1'=>$menu1,
            'menu2'=>$menu2,
            'item'=>$item
        ]);
    }
}