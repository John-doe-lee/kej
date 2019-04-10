<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:38:"template/hdbee_bak/html/user/bind.html";i:1544256672;s:57:"/var/www/html/template/hdbee_bak/html/public/include.html";i:1544256664;s:54:"/var/www/html/template/hdbee_bak/html/public/head.html";i:1544284764;s:54:"/var/www/html/template/hdbee_bak/html/public/foot.html";i:1544256662;}*/ ?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="initial-scale=1.0,user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
	<title>修改资料 - 会员中心 - <?php echo $maccms['site_name']; ?></title>
	<meta name="keywords" content="会员中心">
	<meta name="description" content="会员中心">
	<script type='text/javascript' src='<?php echo $maccms['path_tpl']; ?>js/jquery.js?ver=1.1'></script>
<script src="http://cdn.staticfile.org/jquery/2.1.4/jquery.min.js"></script>
<script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel='stylesheet' id='style-css' href='http://apps.bdimg.com/libs/fontawesome/4.4.0/css/font-awesome.min.css' type='text/css' media=''/>
<link type="text/css" media="all" href="<?php echo $maccms['path_tpl']; ?>css/<?php if($maccms['aid']=="14"): ?>detail.css<?php else: if($maccms['aid']=="15"): ?>play.css<?php else: ?>style.css<?php endif; endif; ?>" rel="stylesheet"/>
<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
<script src="<?php echo $maccms['path']; ?>static/js/home.js"></script>


  <link type="text/css" media="all" href="<?php echo $maccms['path_tpl']; ?>css/user_index.css" rel="stylesheet" />
<script src="/template/default_pc/js/formValidator-4.0.1.js" type="text/javascript"></script>
<script src="/static/js/jquery.imageupload.js"></script>

</head>
<style type="text/css">

#btn_bind_email{
    position: absolute;
    top: 20px;
    padding: 5px 0;
    color: #fbf7f7;
    font-size: 1.2em;
    background-color: #f66;
    left: 290px;
    border-radius: 5px;	
}
@media screen and (max-width:800px){
#btn_bind_email {
    position: absolute;
    top: 10px;
    padding: 5px 0;
    color: #fbf7f7;
    font-size: 1.2em;
    background-color: #f66;
    left: 275px;
    border-radius: 5px;
}
}
</style>
<body>
<?php 
preg_match('|label/(.*?)\.html|',$_SERVER['PHP_SELF'],$ary);
 ?>
<div class="index_header">
	<div class="header_inner">
		<div class="logo">
			<a href="http://<?php echo $maccms['site_url']; ?>"><img src="<?php echo $maccms['path_tpl']; ?>images/logo.png" alt="<?php echo $maccms['site_name']; ?>"/></a>
		</div>
		<div class="header_menu">
			<ul>
		<li id="menu-item-7095" <?php if($maccms['aid'] == 1): ?> class="current-post-ancestor"<?php endif; ?>><a href="<?php echo $maccms['path']; ?>">影院首页</a></li>
        <?php $__TAG__ = '{"ids":"1","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <li id="menu-item-10"<?php if(($vo['type_id'] == MAC_TYPE_ID || $vo['type_id'] == MAC_TYPE_PID)): ?> class="current-post-ancestor" <?php endif; ?>><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
		<ul class="sub-menu">

        <?php $__TAG__ = '{"parent":"1","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <li id="menu-item-51456"><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		</li>

        <?php $__TAG__ = '{"ids":"2","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <li id="menu-item-10"<?php if(($vo['type_id'] == MAC_TYPE_ID || $vo['type_id'] == MAC_TYPE_PID)): ?> class="current-post-ancestor" <?php endif; ?>><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>

		<ul class="sub-menu">
        <?php $__TAG__ = '{"parent":"2","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <li id="menu-item-51456"><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		</li>
		<li class="nav-item mac_user"></li>
		<li id="menu-item-14430" <?php if($maccms['aid'] == 4): ?> class="current-post-ancestor"<?php endif; ?>><a href="<?php echo mac_url('gbook/index'); ?>">留言求片</a></li>
		<li id="menu-item-15632" <?php if($ary['1'] == "new"): ?> class="current-post-ancestor"<?php endif; ?>><a href="<?php echo mac_url('label/new'); ?>">最近更新</a></li>
        <?php $__TAG__ = '{"ids":"20","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <li id="menu-item-10"<?php if(($vo['type_id'] == MAC_TYPE_ID || $vo['type_id'] == MAC_TYPE_PID)): ?> class="current-post-ancestor" <?php endif; ?>><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
		<li id="menu-item-52696" <?php if($ary['1'] == "vip"): ?> class="current-post-ancestor"<?php endif; ?>><a href="<?php echo mac_url('label/vip'); ?>">全网vip解析</a></li>
        			</ul>
		</div>

<?php if($user['group_id']=="1"): ?>
		<div class="login_text pc">
			<a class="rlogin reg_hre_btn" href="<?php echo mac_url('user/reg'); ?>">注册</a>
			<a class="rlogin login_hre_btn logint" href="<?php echo mac_url('user/login'); ?>">登录</a>
		</div>
<?php else: ?>
 <div class="login_text pc"> 
     <a class="rlogin reg_hre_btn" href="javascript:;" onclick="return false"><i class="vip_icon"><img src="<?php echo $maccms['path_tpl']; ?>images/vip_no.svg" alt="非会员" width="128" height="128" /></i><?php echo $user['user_name']; ?> <i class="iconfont"></i></a>
     <div class="nav_user"> 
      <span class="nav_user_jb"> <i class="iconfont"></i> </span>
      <div class="user-id-wrap">
       <div class="avatar-wrap"> 
        <img src="<?php echo $maccms['path_tpl']; ?>images/vip_no.svg" class="avatar" width="100" height="100" />
       </div>
       <div class="opearation-info">
        <p><i class="iconfont" style="margin-right: 3px"></i><?php echo $user['user_name']; ?></p>
        <p>编号：<span class="baotu-id"><?php echo $user['user_id']; ?></span></p>
       </div>
      </div>
      <?php if($user['group_id']!="3"): ?>
      <div class="header_vip_div"> 
       <i class="vip_icon"><img src="<?php echo $maccms['path_tpl']; ?>images/vip-three.svg" alt="年费会员" width="128" height="128" /></i>
       <p>您还不是VIP会员用户！</p>
       <p> <a href="<?php echo mac_url('user/upgrade'); ?>">开通VIP会员</a></p>
      </div>
      <?php endif; ?>
      <ul class="header_usermenu cl">
  
       <li><a href="<?php echo mac_url('user/favs'); ?>"><i class="iconfont"></i>我的收藏</a></li>
       <li><a href="<?php echo mac_url('user/info'); ?>"><i class="iconfont"></i>修改资料</a></li>
       <li><a href="<?php echo mac_url('user/cards'); ?>"><i class="iconfont"></i>我的订单</a></li>
      </ul>
      <div class="header_user_tab"> 
       <a href="<?php echo mac_url('user/index'); ?>" title="我的主页"><i class="iconfont"></i></a> 
       <a href="<?php echo mac_url('user/info'); ?>" title="个人资料"><i class="iconfont"></i></a> 
       <a href="<?php echo url('user/logout'); ?>" title="退出帐号"><i class="iconfont"></i></a>
      </div>
     </div>
    </div>

<?php endif; ?>


		<div class="login_text mobie">
			<a href="javascript:;" class="slide-menu"><i class="fa fa-list-ul"></i></a>
		</div>
		<div class="header_search_bar">
			<form id="search" name="search" method="POST" action="<?php echo mac_url('vod/search'); ?>" onSubmit="return qrsearch();">
				<button class="search_bar_btn" type="submit"><i class="fa fa-search"></i></button><input class="search_bar_input" type="text" name="wd" placeholder="电影名称/明星/导演/年份">
			</form>
		</div>
	</div>
</div>
<div class="slide-mask">
</div>
<nav class="slide-wrapper">
<?php if($user['group_id']=="1"): ?>
<div class="header-info">
	<div class="header-logo">
		<a href="<?php echo mac_url('user/login'); ?>"><img src="<?php echo $maccms['path_tpl']; ?>images/avatar.jpg" alt="默认头像"/></a>
	</div>
	<div class="header-info-content">
		<a href="<?php echo mac_url('user/login'); ?>">登 陆</a>
	</div>
</div>
<?php else: ?>
<div class="header-info">
	<div class="header-logo">
		<a href="<?php echo mac_url('user/index'); ?>"><img src="<?php echo $maccms['path_tpl']; ?>images/avatar.jpg" alt="默认头像"/></a>
	</div>
	<div class="header-info-content">
		<a href="<?php echo mac_url('user/index'); ?>">管 理</a>
	</div>
</div>
<?php endif; ?>
<ul class="menu_slide" nav-data="nav_273609">
	<li id="menu-item-14415"><a href="<?php echo $maccms['path']; ?>">首页</a></li>
        <?php $__TAG__ = '{"ids":"1,2,3,4","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <li id="menu-item-14417" class="current-post-ancestor"><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>



		<li id="menu-item-14430"><a href="<?php echo mac_url('gbook/index'); ?>">留言求片</a></li>
		<li id="menu-item-15632"><a href="<?php echo mac_url('label/new'); ?>">最近更新</a></li>
		<li id="menu-item-52696"><a href="<?php echo mac_url('label/vip'); ?>">全网vip解析</a></li>
</ul>
</nav>
<body class="home blog" id="body-header-top" data-js="bottom">
  <div class="body_rgba"></div>




 <div class="setting_main">
   <div class="user_tab_botting">
    <div class="setting_inner">
     <div class="user_left"> 
      <img src="<?php echo mac_url_img(mac_default($obj['user_portrait'],'static/images/touxiang.png')); ?>" class="face avatar" width="100" height="100" />
     </div>
     <div class="user_setting_data">
      <p class="name_user"><i class="iconfont"></i><?php echo $obj['user_name']; ?>（<?php echo $obj['group']['group_name']; ?>）</p>
      <p>邮箱：<?php echo $obj['user_email']; ?></p>
      <p class="binahao_user">编号：<?php echo $obj['user_id']; ?> <span><i class="iconfont"></i>注册于<?php echo mac_day($obj['user_reg_time']); ?></span></p>
     </div>
     <div class="user_setting_num">
      <p><span>积分</span><em><?php echo $obj['user_points']; ?></em></p>
     </div>
    </div>
   </div>
   <div id="sitenews-wrap" class="container"></div>
   <div class="setting_inner pagewrapper clr" id="author-page">
    <div class="yscd avatar"> 
     <i class="fa fa-angle-double-right"></i>
    </div>
    <div class="yinxsh"></div>
    <aside class="user-left">
     <div class="usermenus">
      <ul class="usermenu">
       <li><a href="<?php echo url('user/index'); ?>"><i class="iconfont"></i>个人中心</a></li>
       <li><a href="<?php echo url('user/favs'); ?>"><i class="iconfont"></i>我的收藏</a></li>       
       <li><a href="<?php echo url('user/buy'); ?>"><i class="iconfont"></i>积分管理</a></li>      
       <li><a href="<?php echo url('user/upgrade'); ?>"><i class="iconfont"></i>会员服务</a></li>
       <li><a href="<?php echo url('user/orders'); ?>"><i class="iconfont"></i>我的订单</a></li>
       <li class="active"><a href="<?php echo url('user/info'); ?>"><i class="iconfont"></i>修改资料</a></li>
       <li><a href="<?php echo url('user/logout'); ?>"><i class="iconfont"></i>退出登录</a></li>
      </ul>
     </div>
    </aside>
    <div class="user-right">
     <div class="user_contentr">
      <div class="setting_header"> 
       <a class="sh_2" href="<?php echo url('user/index'); ?>"> 个人资料 </a>
       <a class="sh_2" href="<?php echo url('user/info'); ?>"> 编辑资料 </a>
       <a class="sh_1" href="<?php echo url('user/bind'); ?>?ac=email"> 帐号绑定 </a>
      </div>
      <div class="settin">
       <div class="header_tips">
        <i class="iconfont"></i>建议绑定QQ邮箱
       </div>
  <div class="setting_form" style="padding-top:20px;">
			<form id="fm" name="fm" method="post" action="" >
			<div class="form-group height_72"> 
           <label for="display_name" class="col-sm-3 control-label">邮箱：</label>
           <div class="col-sm-9"> 
            <input type="text" class="form-control" name="to" value="">
            <input type="button" id="btn_bind_email" value="获取验证码"/></p>
           </div>

          </div>
 			<div class="form-group height_72"> 
           <label for="display_name" class="col-sm-3 control-label">验证码：</label>
           <div class="col-sm-9"> 
            <input type="text" class="form-control" name="user_pwd" value="">
           </div>
          </div>   
           
         
            <div style="text-align: center;padding-top: 30px;padding-bottom:40px;"> 
         
           <input type="button" id="btn_submit" class="edit_btn" value="保存更改">
          </div>
               
					</form>
		</div>
        </div>
       <div class="user_settin_end">
        ——— end ———
       </div>
      </div>
      <div class="ajax_load_div">
       <div class="pay-logging"></div>
      </div>
     </div>
    </div>
   </div>
  </div> 
<script type="text/javascript">
	var countdown=60;
	function settime(val) {
		if (countdown == 0) {
			val.removeAttribute("disabled");
			val.value="获取验证码";
			countdown = 60;
			return true;
		} else {
			val.setAttribute("disabled", true);
			val.value="重新发送(" + countdown + ")";
			countdown--;
		}
		setTimeout(function() {settime(val) },1000)
	}

	$('#btn_bind_email').click(function(){
		var email = $('input[name="to"]').val();
		var pattern= /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
		var strEmail=pattern.test(email);
		if(!strEmail){
			alert('邮箱格式不正确');
			return;
		}
		settime(this);
		var data = $("#fm").serialize();

		$.ajax({
			url: "<?php echo url('user/bindmsg'); ?>",
			type: "post",
			dataType: "json",
			data: data,
			beforeSend: function () {
				//开启loading
			},
			success: function (r) {
				alert(r.msg);
			},
			complete: function () {
				//结束loading
			}
		});
	});

	$("#btn_submit").click(function() {
		var email = $('input[name="to"]').val();
		var pattern= /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
		var strEmail=pattern.test(email);
		if(!strEmail){
			alert('邮箱格式不正确');
			return;
		}
		var code = $('input[name="code"]').val();
		if(code==''){
			alert('请输入验证码');
			return;
		}
		var data = $("#fm").serialize();

		$.ajax({
			url: "<?php echo url('user/bind'); ?>",
			type: "post",
			dataType: "json",
			data: data,
			beforeSend: function () {
				//开启loading
				//$(".loading_box").css("display","block");
				$("#btn_submit").css("background","#fd6a6a").val("loading...");
			},
			success: function (r) {
				alert(r.msg);
				if(r.code==1){
					location.href="<?php echo url('user/info'); ?>";
				}
			},
			complete: function () {
				//结束loading
				//$(".loading_box").css("display","none");
				$("#btn_submit").css("background","#fa4646").val("提交");
			}
		});
	});

</script>



   <style type="text/css">
@media only screen and (min-width: 980px){
.container {
    max-width: 980px !important;
}
}
.footnav {
    line-height: 30px;
    font-size: 14px;
}
.container {
    max-width: 980px;
    margin: 0 auto;

}
.footnav ul {
    list-style: none;
    text-align: center;
}
.footnav ul li {
    height: 30px;
    line-height: 30px;
    display: inline;
    padding: 0 10px 0 0;
}
</style>
	<footer class="w100 cl" id="footer-boot" style="    height: 160px;">
		
	<div class="container">

		<div class="row">
			<div class="col-xs-4">
				<p>
					免责声明：
				</p>
				<p>
					本网站所有内容都是靠程序在互联网上自动搜集而来，仅供测试和学习交流。若侵犯了您的权益，请发邮件通知站长。
				</p>
			</div>
			<div class="col-xs-4">
				<p>
					联系方式QQ：<?php echo $maccms['site_qq']; ?>
				</p>
				<p>
					邮箱：<?php echo $maccms['site_email']; ?>
				</p>
			</div>
			<div class="col-xs-4">
				<em>♥ <a href="http://<?php echo $maccms['site_url']; ?>/">奇热影院</a> ·7rtv.com </em>
			</div>
		</div>
<div class="footnav">
<ul id="friendlink" class="menu">
</ul>  
</div>
	</div>
	<div class="cont">
		<p>
			免责声明：本网站将逐步删除和规避程序自动搜索采集到的不提供分享的版权影视。请大家支持正版。
		</p>
		<p>
			唯一网址：<a href="http://<?php echo $maccms['site_url']; ?>/"><?php echo $maccms['site_name']; ?></a>
		</p>
	</div>
</footer>
<div style="display: none;">
<?php echo $maccms['site_tj']; ?>
</div>
</body>
</html>