<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>网站设置</title>
	<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/rightmain.css">
    <script src="{{asset('js/uploadpreview.js')}}" type="text/javascript"></script><!-- 单张图片上传 -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/fxk.css')}}">


    <link href="{{asset('css/css.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/selectpick/cui.css')}}" rel="stylesheet" type="text/css"><!--美化下拉框插件-->
<script src="{{asset('js/jquery.js')}}"></script><!-- 统一调用js -->
<link href="{{asset('css/banner-switch/lrtk.css')}}" rel="stylesheet"><!-- banner切换 -->
<script src="{{asset('js/banner-switch/jquery.superslide.2.1.1.js')}}"></script><!-- banner切换 -->
<link href="{{asset('css/SuperSlide/style.css')}}" rel="stylesheet"><!--标签切换，滚动 -->
<script type="text/javascript" src="{{asset('js/script.js')}}"></script><!-- 筛选 -->
<link rel="stylesheet" type="text/css" href="{{asset('css/select.css')}}"><!-- 筛选 -->
<link href="{{asset('css/diyupload/css/webuploader.css')}}" rel="stylesheet"><!-- 9.1 多张图片批量上传 -->
<link href="{{asset('css/diyupload/css/diyUpload.css')}}" rel="stylesheet"><!-- 9.1 多张图片批量上传 -->
<script src="{{asset('css/diyupload/js/webuploader.html5only.min.js')}}"></script><!-- 9.1 多张图片批量上传 -->
<script src="{{asset('css/diyupload/js/diyUpload.js')}}"></script><!-- 9.1 多张图片批量上传 -->



</head>
<body>
		@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<script>
   window.onload = function () { 
        new uploadPreview({ UpBtn: "up_img", DivShow: "imgdiv", ImgShow: "imgShow" });
    }
</script><!-- 单张图片上传 -->
       <div class="iframecontent">
            
            <div class="pos clearfix"><button class="btn btn-success">网站管理</button><span class="right"><button class="btn btn-info">配置项管理</button></span></div>
              
            <div class="list">
                <div class="itab" id="itab">
                    <ul class="clearfix">
                        <li class="current-item"><a href="javascript:;"><button class="btn btn-success">站点配置</button></a></li>
                        <li><a href="javascript:;"><button class="btn btn-danger">核心配置</button></a></li>
                        <li><a href="javascript:;"><button class="btn btn-warning">邮箱配置</button></a></li>
                        <li><a href="javascript:;"><button class="btn btn-info">上传配置</button></a></li>
                        <li><a href="javascript:;"><button class="btn btn-default">会员配置</button></a></li>
                        <li><a href="javascript:;"><button class="btn active">其他配置</button></a></li>
                    </ul>
                </div>
                <form action="{{ url('/webset_config') }}" method="post" name="config">
                <div class="itabcontent" id="itabcontent">
                    
                    <!--站点配置开始-->
                    <div class="itabcontentlist zdpz">
                        <dl class="clearfix">
                            <dt>网站名称：</dt>
                            <dd>
                                <input type="text" value="{{$config->web_name}}" name="web_name" />
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>网站logo：</dt>
                            <dd>
                                <div class="zjz_div fl">
                                <div class="btn3_file"><input name="web_logo" id="up_img" style="width:150%" type="file">上传logo</div>
                                    <div id="imgdiv" class="zjz_img"><img src="" name="imgShow" width="140" height="120" id="imgShow" /></div>
                                </div>
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>网站域名：</dt>
                            <dd>
                                <input type="text" value="{{$config->web_name}}" name="" />
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>网站标题：</dt>
                            <dd>
                                <input type="text" value="{{$config->web_title}}" name="web_title" />
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>站点关键词：</dt>
                            <dd>
                                <input type="text" value="{{$config->web_keyword_desc}}" name="web_keyword" />
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>站点关描述：</dt>
                            <dd>
                                <input type="text" value="{{$config->web_keyword_desc}}" name="web_keyword_desc" />
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>模板风格：</dt>
                            <dd>
                                <select name="web_default">
                                    <option @if ($config->web_default == 1) selected="selected" @endif value="1">blog</option>
                                    <option value="2" @if ($config->web_default == 2) selected="selected" @endif>default</option>
                                </select>
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>Cookie加密码：</dt>
                            <dd>
                                <input type="text" value="{{$config->web_encryption}}" name="web_encryption" />
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>网站版权信息：</dt>
                            <dd>
                                <textarea class="textarea-default" name="web_copyright">{{$config->web_copyright}}</textarea>
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>网站统计：</dt>
                            <dd>
                                <textarea class="textarea-default" name="web_statistics">{{$config->web_statistics}}</textarea>
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>网站备案号：</dt>
                            <dd>
                                <input type="text" value="{{$config->web_record_number}}" name="web_record_number" />
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>联系地址：</dt>
                            <dd>
                                <input type="text" value="{{$config->web_address}}" name="web_address" />
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>联系电话：</dt>
                            <dd>
                                <input type="text" value="{{$config->web_telephone}}" name="web_telephone" />
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt class="surebtn">保存按钮：</dt>
                            <dd>
                                <a href="javascript:;" onclick="document.config.submit();" class="btn btn-blue" />保存</a>
                            </dd>
                        </dl>
                    </div>
                    <!--站点配置结束-->
                    
                    <!--核心配置开始-->
                    <div class="itabcontentlist hxpz" style="display: none;">
                        <dl class="clearfix">
                            <dt>关闭网站：</dt>
                            <dd>
                                <span><input type="radio" name="web_is_close" value="1" />是</span>
                                <span><input type="radio" name="web_is_close" value="2" />否</span>
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>关站提示：</dt>
                            <dd>
                                <textarea class="textarea-default" name="web_close_desc">{{$config->web_close_desc}}</textarea>
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>禁用语言：</dt>
                            <dd>
                                <textarea class="textarea-default" name="web_disable_text">{{$config->web_disable_text}}</textarea>
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>允许匿名评论：</dt>
                            <dd>
                                <span><input type="radio" value="1" name="web_is_comment" />是</span>
                                <span><input type="radio" value="2"  name="web_is_comment"/>否</span>
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>开启注册验证码：</dt>
                            <dd>
                                <span><input type="radio" name="web_register_verif" value="1" />是</span>
                                <span><input type="radio" name="web_register_verif" value="2" />否</span>
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>开启登录验证码：</dt>
                            <dd>
                                <span><input type="radio" name="web_login_verif" value="1" />是</span>
                                <span><input type="radio" name="web_login_verif" value="2" />否</span>
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>开启留言板验证码：</dt>
                            <dd>
                                <span><input type="radio" name="web_board_verif" value="1" />是</span>
                                <span><input type="radio" name="web_board_verif" value="2" />否</span>
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>开启评论验证码：</dt>
                            <dd>
                                <span><input type="radio" name="web_comment_verif" value="1" />是</span>
                                <span><input type="radio" name="web_comment_verif" value="2" />否</span>
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>手机版开启：</dt>
                            <dd>
                                <span><input type="radio" name="web_is_mobile" value="1" />是</span>
                                <span><input type="radio" name="web_is_mobile" value="2" />否</span>
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>手机版风格：</dt>
                            <dd>
                                <select name="web_mobile_default">
                                    <option value="1">blog</option>
                                    <option value="2" selected="selected">default</option>
                                </select>
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt class="surebtn">保存按钮：</dt>
                            <dd>
                                <a href="javascript:;" class="btn btn-blue" />保存</a>
                            </dd>
                        </dl>
                    </div>
                    <!--核心配置结束-->
                    
                    <!--邮箱配置开始-->
                    <div class="itabcontentlist yxpz" style="display:none;">
                        <dl class="clearfix">
                            <dt>发送邮箱地址：</dt>
                            <dd>
                                <input type="text" name="web_email" value="{{$config->web_email}}" />
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>发件人名称：</dt>
                            <dd>
                                <input type="text" name="web_email_name" value="{{$config->web_email_name}}" />
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>SMTP服务器：</dt>
                            <dd>
                                <input type="text" name="web_email_smtp" value="{{$config->web_email_smtp}}" />
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>服务器端口：</dt>
                            <dd>
                                <input type="text" name="web_email_port" value="{{$config->web_email_port}}" />
                            </dd>
                        </dl>
                        
                        <dl class="clearfix">
                            <dt>邮箱密码：</dt>
                            <dd>
                                <input type="text" name="web_email_password" value="{{$config->web_email_password}}" />
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt class="surebtn">保存按钮：</dt>
                            <dd>
                                <a href="javascript:;" class="btn btn-blue" />保存</a>
                            </dd>
                        </dl>
                    </div>
                    <!--邮箱配置结束-->
                    
                    <!--上传配置开始-->
                    <div class="itabcontentlist scpz" style="display: none;">
                        <dl class="clearfix">
                            <dt>允许上传大小：</dt>
                            <dd>
                                <input type="text" name="web_upload_files" value="{{$config->web_upload_files}}" />
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>缩略图组尺寸：</dt>
                            <dd>
                                <input type="text" name="" value="300X300" />
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>缩略图生产方式：</dt>
                            <dd>
                                <span><input type="radio" name="" value="1" checked="checked" />原图等比例缩略</span>
                                <span><input type="radio" name="" value="2" />固定大小截取</span>
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>固宽缩略图组长度：</dt>
                            <dd>
                                <input type="text" name="" value="600" />
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>上传根目录：</dt>
                            <dd>
                                <input type="text" name="web_upload_catalog" value="{{$config->web_upload_catalog}}" />
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>允许附件类型：</dt>
                            <dd>
                                <textarea name="web_enclosure_type" class="textarea-default">{{$config->web_enclosure_type}}</textarea>
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>允许图片类型：</dt>
                            <dd>
                                <input name="web_img_type" type="text" value="{{$config->web_img_type}}" />
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>隐藏下载地址：</dt>
                            <dd>
                                <span><input type="radio" value="1" />是</span>
                                <span><input type="radio" value="2" checked="checked" />否</span>
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt class="surebtn">保存按钮：</dt>
                            <dd>
                                <a href="javascript:;" class="btn btn-blue" />保存</a>
                            </dd>
                        </dl>
                    </div>
                    <!--上传配置结束-->
                    
                    <!--会员配置开始-->
                    <div class="itabcontentlist hypz" style="display: none;">
                        <dl class="clearfix">
                            <dt>开启会员功能：</dt>
                            <dd>
                                <span><input name="web_is_member" type="radio" value="1" />是</span>
                                <span><input name="web_is_member" type="radio" value="2" />否</span>
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>开启邮箱验证：</dt>
                            <dd>
                                <span><input name="web_is_email" type="radio" value="1" />是</span>
                                <span><input name="web_is_email" type="radio" value="2" />否</span>
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt>允许附件类型：</dt>
                            <dd>
                                <textarea class="textarea-default">www,bbs,ftp,mail,user,users,admin,administrator,xyhcms</textarea>
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt class="surebtn">保存按钮：</dt>
                            <dd>
                                <a href="javascript:;" class="btn btn-blue" />保存</a>
                            </dd>
                        </dl>
                    </div>
                    <!--会员配置结束-->
                    
                    <!--其它配置开始-->
                    <div class="itabcontentlist qtpz" style="display: none;">
                        <dl class="clearfix">
                            <dt>开启会员功能：</dt>
                            <dd>
                                <input type="text" value="5242880" />
                            </dd>
                        </dl>
                        <dl class="clearfix">
                            <dt class="surebtn">保存按钮：</dt>
                            <dd>
                                <a href="javascript:;" class="btn btn-blue" />保存</a>
                            </dd>
                        </dl>
                    </div>
                    <!--其它配置结束-->
                    
                </div>
            </div>
            <input type="hidden" name="_token"         value="{{csrf_token()}}"/>
            </form>
        </div>
	
      <script src="./public/js/jquery-3.1.1.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="./bootstrap/js/bootstrap.min.js"></script>
      <script type="text/javascript">
      //alert($)

      $(function(){
      	 $("#itab ul li").click(function(){
                    var _id = $(this).index();

                    $(this).addClass('current-item').siblings().removeClass('current-item');
                    $('#itabcontent').children('.itabcontentlist').eq(_id).fadeIn('fast').siblings('.itabcontentlist').css('display','none');
                });
            
      })
      </script>
  </body>
</html>