<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Config;

class IndexController extends Controller
{
    //验证登录才能进入后台系统
 //    public fun.ction __construct()  
	// {
	//     $this->middleware('auth');
	// }




    public function index(){
    	return view('admin/index');
    }
    //显示内容也页
    public function mian(){
    	return view('admin/mian');
    }

    //显示内容也页
    public function webset(){
    	$config = Config::where('id','1')->first();
    	
        return view('admin/webset')->with(['config'=>$config]);
    }
    //保存网站配置信息
    public function webset_config(Request $request){
    	if($request->isMethod("post")){

    	$this->validate($request, [
        	'web_title' => 'required',
	    ],[
	    	'web_title.required'=>'网站标题不能为空！',
	    ]);

    	$input = $request->all();
    	unset($input['_token']);
    	$config = Config::where('id','1')->first();
    	
    	foreach ($input as $key => $value) {
    		$config->$key = $value;
    	}
		

		$config->update();

    	//return back()->with('msg','添加成功！')->withInput();
    	return redirect()->back()->withInput()->withErrors('保存成功！');
    	}
    	

    	
    }
}
