<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Tuyendung;
use App\User;
use Illuminate\Support\Facades\File;
class DonhangdetailController extends Controller
{
    public function index()
    {
    
    }
    public function getiddonhang($id){
        $donhangdetail = DB::table('donhangs')
            ->join('nganhnghes', 'donhangs.nganhnghe_id', '=', 'nganhnghes.id')
            ->where('donhangs.id','=',$id)
            ->first();
        $fbfooter = DB::table('zm_fbfooter')->where('stt', '=', '1')->orderBy('id','desc')->get();
        $menu1 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','asc')->take(4)->get();
        $menu2 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','desc')->take(4)->get();
        $bannerpage = DB::table('zm_bannerpage')->where('page', '=', 'Đơn hàng')->first();
        return view('donhangdetail',[
            'donhangdetail' => $donhangdetail,
            'fbfooter' => $fbfooter, 
            'menu1'=>$menu1,
            'menu2'=>$menu2,
            'bannerpage'=>$bannerpage,
        ]);
    }
    public function uploadh(Request $request)
    {
        $item = new Tuyendung;
        $item->hovaten=$request->hovaten;
        $item->email=$request->email;
        $item->tieude=$request->tieude;
        $item->sodienthoai=$request->sodienthoai;
        $item->noidung=$request->noidung;
        $item->tendonhang=$request->tendonhang;
        $item->created_at = date("Y-m-d H:i:s");
        $item->tinhtrang=0;
        // $item->thumb=$request->thumb;
        if ($request->hasFile('thumb')) {
            $file = $request->file('thumb');
            $duoi = $file->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg') {
                // return redirect('vhn-admin/post/add')->with('notification','You just selected the image file');
            }
            $name = $file->getClientOriginalName();
            $thumb = str_random(4)."_".$name;
            while (file_exists("upload/thumbpost/".$thumb)) {
                $thumb = str_random(4)."_".$name;
            }
            $file->move("upload/thumbpost",$thumb);
            $item->thumb = $thumb;
        }
        else{
            $item->thumb = "No file";
        }
        $item->save();
        return redirect('/')->with('message','Gửi thành công');
    }
}