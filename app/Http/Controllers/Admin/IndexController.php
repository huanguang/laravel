<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
}
