<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:38:"template/hdbee_bak/html/label/vip.html";i:1544284110;s:57:"/var/www/html/template/hdbee_bak/html/public/include.html";i:1544256664;s:54:"/var/www/html/template/hdbee_bak/html/public/head.html";i:1544284764;s:54:"/var/www/html/template/hdbee_bak/html/public/foot.html";i:1544256662;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1.0,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>免费观看全网VIP电影电视剧-在线解析 –  <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['type_key']; ?>"/>
<meta name="description" content="<?php echo $obj['type_des']; ?>"/>
<link rel="canonical" href="http://<?php echo $maccms['site_url']; ?>"/>
<link rel="icon" href="<?php echo $maccms['path_tpl']; ?>cropped-dybee-32x32.png" sizes="32x32"/>
<link rel="icon" href="<?php echo $maccms['path_tpl']; ?>cropped-dybee-192x192.png" sizes="192x192"/>
<link rel="apple-touch-icon-precomposed" href="<?php echo $maccms['path_tpl']; ?>images/cropped-dybee-180x180.png"/>
<meta name="msapplication-TileImage" content="<?php echo $maccms['path_tpl']; ?>images/cropped-dybee-270x270.png"/>
<script type='text/javascript' src='<?php echo $maccms['path_tpl']; ?>js/jquery.js?ver=1.1'></script>
<script src="http://cdn.staticfile.org/jquery/2.1.4/jquery.min.js"></script>
<script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel='stylesheet' id='style-css' href='http://apps.bdimg.com/libs/fontawesome/4.4.0/css/font-awesome.min.css' type='text/css' media=''/>
<link type="text/css" media="all" href="<?php echo $maccms['path_tpl']; ?>css/<?php if($maccms['aid']=="14"): ?>detail.css<?php else: if($maccms['aid']=="15"): ?>play.css<?php else: ?>style.css<?php endif; endif; ?>" rel="stylesheet"/>
<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
<script src="<?php echo $maccms['path']; ?>static/js/home.js"></script>


  <link type="text/css" media="all" href="<?php echo $maccms['path_tpl']; ?>css/new.css" rel="stylesheet" />
</head>
 <body class="home blog" id="body-header-top" data-js="bottom">
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
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" /> 
  <script href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script> 
  <script src="https://cdn.bootcss.com/jquery/1.2.3/jquery.min.js"></script> 
  <script src="https://cdn.bootcss.com/bootstrap/1.4.0/js/bootstrap-modal.js"></script> 
  <script src="https://cdn.bootcss.com/jquery/1.7.2/jquery.min.js"></script> 
  <script type="text/javascript">eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('b a(){0 6=1.2("9").4;0 5=1.2("3");0 3=1.2("3").c;0 8=5.e[3].4;0 7=1.2("f");7.d=8+6}',16,16,'var|document|getElementById|jk|value|jkurl|diz|cljurl|jkv|url|dihejk|function|selectedIndex|src|options|player'.split('|'),0,{}))</script> 
  <script type="text/javascript" src="http://www.hdbee.net/wp-content/themes/dybee/js/jquery.form.js"></script> 
  <script type="text/javascript">$(document).ready(function(){
            $('#contact').ajaxForm(function(data) {
if (data==1){
                    $('#success').fadeIn("slow");
                    $('#bademail').fadeOut("slow");
                    $('#badserver').fadeOut("slow");
                    $('#contact').resetForm();
                }
else if (data==2){
                    $('#badserver').fadeIn("slow");
                }
else if (data==3)
                {
                    $('#bademail').fadeIn("slow");
                }
            });
        });</script> 
  <div class="main">
   <div class="col-md-12 column">
    <div class="panel panel-default">
     <div class="panel-body">
      <div class="jiathis_style_24x24" style="float: right;">
       <a class="jiathis_button_tsina"></a> 
       <a class="jiathis_button_weixin"></a> 
       <a class="jiathis_button_douban"></a> 
       <a class="jiathis_button_cqq"></a> 
       <a class="jiathis_button_qzone"></a> 
       <a href="http://www.jiathis.com/share?uid=2002901" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a> 
       <a class="jiathis_counter_style"></a>
      </div> 
      <script type="text/javascript">var jiathis_config = {data_track_clickback:'true'};</script> 
      <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=2002901" charset="utf-8"></script> 
      <span style="color: #FE8B1F;display: block;text-align:center; font-weight: bold;">目前<a href="http://www.<?php echo $maccms['site_url']; ?>/"><?php echo $maccms['site_name']; ?></a>支持免费观看：乐视VIP会员资源、爱奇艺VIP会员资源、芒果VIP会员资源、土豆VIP会员资源、优酷VIP会员资源等。<span> <span style="color: #FE8B1F;display: block;text-align:center; font-weight: bold;">复制VIP视频的地址到↓↓↓↓↓栏中点击立即播放就行了！如果不能播放请在选择接口处更改接口!<span><br /></span></span></span></span>
     </div>
    </div>
   </div>
   <div class="col-md-12 column">
    <div class="panel panel-default">
     <div id="kj" class="panel-body"> 
      <iframe src="http://api.91exp.com/svip/?url=http://v.youku.com/v_show/id_XMTM1NzI3MzE5Mg==.html" id="player" width="100%" height="680px" allowtransparency="true" frameborder="0" scrolling="no"></iframe>
     </div>
    </div>
   </div>
   <font color="#0000CD"> 
    <marquee direction="left" behavior="scroll" scrollamount="5" bgcolor="" width="100%" height="100%" scrolldelay="100%">
      （使用方法：将要播放的VIP视频网址粘贴输入框。目前支持爱奇艺、优酷、乐视、芒果、腾讯等等VIP视频解析。例如:http://www.iqiyi.com/v_19rr97y2lo.html）请勿相信或者点击任何视频广告，本服务使用完全免费！ 
    </marquee> </font>
   <br />
   <br />
   <div class="col-md-12 column">
    <form method="post" id="khname"></form>
    <div class="input-group" style="width: 100%;"> 
     <span class="input-group-addon input-lg" style="width: 80px; ">解析接口</span> 
     <select class="form-control input-lg" id="jk"><option value="http://api.xfsub.com/index.php?url=">万能接口1</option><option value="http://y.mt2t.com/lines?url=">万能接口2</option><option value="http://jiexi.071811.cc/jx2.php?url=">万能接口3</option><option value="http://www.662820.com/xnflv/index.php?url=">万能接口4</option><option value="http://api.91exp.com/svip/?url=">万能接口5</option><option value="http://player.jidiaose.com/supapi/iframe.php?v=">万能接口6</option><option value="http://www.82190555.com/index/qqvod.php?url=">腾讯视频接口1</option><option value="http://api.pucms.com/?url=">爱奇艺超清接口1</option><option value="http://api.baiyug.cn/vip/index.php?url=">爱奇艺超清接口2</option><option value="https://api.flvsp.com/?url=">爱奇艺超清接口3</option><option value="http://api.xfsub.com/index.php?url=">芒果TV超清接口</option><option value="http://65yw.2m.vc/chaojikan.php?url=">芒果TV手机接口</option><option value="http://www.82190555.com/index/qqvod.php?url=">优酷超清接口</option><option value="http://vip.jlsprh.com/index.php?url=">搜狐视频接口</option><option value="http://2gty.com/apiurl/yun.php?url=">乐视视频接口</option></select>
    </div> 
    <br />
    <div class="input-group" style="width: 100%;"> 
     <span class="input-group-addon input-lg" style="width: 80px;">播放地址</span> 
     <input class="form-control input-lg" type="search" placeholder="输入视频页面网址" id="url" />
    </div> 
    <br />
    <div> 
     <button id="bf" type="button" class="btn btn-primary btn-lg btn-block" onclick="dihejk()">点击播放</button>
    </div>
   </div>
   <table class="table table-bordered" style="background: #000">
    <tbody>
     <tr>  
     </tr>
    </tbody>
   </table>
   <div class="col-md-12 column">
    <div class="panel panel-default">
     <div class="panel-body"> 
      <span style="color: #FE8B1F;display: block;text-align:center; font-weight: bold;">因为使用本线路的人较多：如果显示不能播放，请更换一下接口！<span> <br /></span></span>
     </div>
    </div>
   </div>
  </div>
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