<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Lienhe;
use App\User;
//mail
use Illuminate\Support\Facades\Mail;
class LienHeController extends Controller
{
    public function index()
    {
        $logo = DB::table('zm_logos')->take(1)->orderBy('id','desc')->get();
        $dclienhe = DB::table('zm_dclienhes')->where('stt','=','1')->orderBy('id','desc')->get();
        $mxh = DB::table('zm_mxhs')->where('stt','=','1')->orderBy('id','desc')->get();
        $fbfooter = DB::table('zm_fbfooter')->where('stt', '=', '1')->orderBy('id','desc')->get();
        $menu1 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','asc')->take(4)->get();
        $menu2 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','desc')->take(4)->get();
        $bannerpage = DB::table('zm_bannerpage')->where('page', '=', 'Liên hệ')->first();
        return view('lienhe',[
            'logo'=>$logo,
            'dclienhe'=>$dclienhe,
            'mxh'=>$mxh,
            'fbfooter'=>$fbfooter,
            'menu1'=>$menu1,
            'menu2'=>$menu2,
            'bannerpage'=>$bannerpage,
            ]); 
    }
    public function create(){ 
        return view('lienhe');
    } 
    public function store(Request $request){
        $data = ['hovaten'=> $request->hovaten,'email'=>$request->email,'tieude'=>$request->tieude];
		$data = (object)$data;
		Mail::send('general.mail', ['data' => $data], function ($m) use ($data) {
			$m->from('vohungnghiem@gmail.com', 'Nghiêm');   	
			$m->to($data->email, 'Mirai');
			$m->subject('Register');
		}); 

        $item = new Lienhe;
        $item->hovaten=$request->hovaten;
        $item->email=$request->email;
        $item->tieude=$request->tieude;
        $item->sodienthoai=$request->sodienthoai;
        $item->noidung=$request->noidung;
        $item->created_at=$request->created_at;
        $item->tinhtrang=0;
        $item->save();
        return redirect('lienhe')->with('message','Gửi thành công');
      
     
    }   
}