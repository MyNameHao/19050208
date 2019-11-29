<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\admin\news as nes;
use Illuminate\Support\Facades\Redis;
use DB;

class News extends Controller
{
    public function index(){

        return view('news/index');
    }
    public function save(){
        $data=DB::table('classes')->get();
        return view('news/save',['data'=>$data]);
    }
    public function create(){
        $data=request()->except('_token');
        if (request()->hasFile('n_img')) {
            $data['n_img']=$this->update('n_img');
        }
        $data['n_time']=time();
        $data['u_id']=session('user.u_id');
        $res=nes::create($data);
        if($res){
            return redirect('news/list');
        }else{
            echo"<script>alert('添加失败');window.history.go(-1);</script>";
        }
    }
    public function update($filename){
        if (request()->file($filename)->isValid()){
            $photo = request()->file($filename);
            $store_result = $photo->store('img');
            return $store_result;
        }else{
            exit('未获取到上传文件或上传过程出错');
        }

    }
    public function lists(){
        $u_id=session('user.u_id');
        $info=nes::where('u_id',$u_id)->paginate(2);
        if(request()->ajax()){
            return view('news/lists',['info'=>$info]);
        }
        return view('news/list',['info'=>$info]);
    }
    public function play($id){
        $incr=Redis::incr($id.'incr');
        $info=nes::join('user','news.u_id','=','user.u_id')->where('n_id',$id)->first();
        return view('news/play',['info'=>$info,'incr'=>$incr]);
    }
}
