<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:40:"template/hdbee_bak/html/index/index.html";i:1544256662;s:57:"/var/www/html/template/hdbee_bak/html/public/include.html";i:1544256664;s:54:"/var/www/html/template/hdbee_bak/html/public/head.html";i:1544284764;s:54:"/var/www/html/template/hdbee_bak/html/public/foot.html";i:1544256662;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1.0,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title><?php echo $maccms['site_name']; ?>-最新电视剧,最新电影,电视剧大全,电视剧排行榜,最新好看的综艺</title>
<meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>"/>
<meta name="description" content="<?php echo $maccms['site_description']; ?>"/>
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


</head>
<body class="home blog" id="body-header-top" data-js="bottom">
<div class="body_rgba">
</div>
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
<div class="carousel-wrap">
<!-------------------------------------幻灯开始---------------------------------------------->
	<div class="wrappter">
		<div class="wrp_left">
			<ul class="bxslider tow_slider">
<?php $__TAG__ = '{"num":"3","paging":"no","type":"all","level":"9","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<li><a target="_blank" href="<?php echo mac_url_vod_detail($vo); ?>"><img src="<?php echo mac_url_img($vo['vod_pic_slide']); ?>" alt="<?php echo $vo['vod_name']; ?>" width="100%"/></a></li>
<?php endforeach; endif; else: echo "" ;endif; ?>

			</ul>
		</div>
		<div class="wrp_right">
			<ul>
<?php $__TAG__ = '{"num":"2","paging":"no","type":"all","level":"1","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>			
				<li><a target="_blank" href="<?php echo mac_url_vod_detail($vo); ?>"><img src="<?php echo mac_url_img($vo['vod_pic_slide']); ?>" alt="<?php echo $vo['vod_name']; ?>迅雷下载" width="100%"/>
				<div class="cx_title">
					<span>站内精选</span>
					<p>
						<?php echo $vo['vod_name']; ?>
					</p>
				</div>
				</a></li>
<?php endforeach; endif; else: echo "" ;endif; ?>				
				
			</ul>
		</div>
	</div>
	<div class="kz_indexcms_sidebar">
		<li id="text-3" class="widget widget_text">
		<div class="textwidget">
			<p>
				<i class="fa fa-forumbee"></i> ： 加入<?php echo $maccms['site_name']; ?>交流群与大家分享观影心得：<a href="https://jq.qq.com/?_wv=1027&k=5annj09" target="_blank" rel="nofollow"><img title="<?php echo $maccms['site_name']; ?>-影迷交流群" src="http://pub.idqqimg.com/wpa/images/group.png" alt="<?php echo $maccms['site_name']; ?>-影迷交流群" border="0" rel="nofollow"/></a>    <i class="fa fa-forumbee"></i> ：长时间无法播放请更换播放器，本站支持多种解析播放！
			</p>
		</div>
		</li>
<!-------------------------------------幻灯结束---------------------------------------------->

<script id="w2898_5211">(function () {var zy = document.createElement("script");var flowExchange = window.location.protocol.split(":")[0];var http = flowExchange === "https"?"https":"http";zy.src = http+"://exchange.2898.com/index/flowexchange/getGoods?id=5211&sign=a8313d5cd17c8738736fc693af1df121";var s = document.getElementsByTagName("script");for(var i=0;i< s.length;i++){if(s[i].id){if(s[i].id == "w2898_5211"){s[i].parentNode.insertBefore(zy, s[i]);continue;}}}})();</script>
<!-------------------------------------本站热播---------------------------------------------->
		<div class="recent-article cl">
			<div class="mod-tit">
				<span class="tit"><a target="_blank">本站热播/<span class="zm">POSTTOP</span></a></span>
			</div>
			<ul class="update_area_lists cl">
				<?php $__TAG__ = '{"num":"6","type":"all","order":"desc","by":"host","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="i_list list_n2"><a target="_blank" class="user_list_kz" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img class="waitpic" src="<?php echo $maccms['path_tpl']; ?>images/thumb_1.png" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" width="270" height="370" alt="<?php echo $vo['vod_name']; ?>"><span style="background-color:rgba(243,152,0,0.85)" class="pay">高清</span><span class="dbpf"><?php echo $vo['vod_score']; ?></span></a>
				<div class="user_list_kz_meta">
					<h2><?php echo $vo['vod_name']; ?></h2>
					<div class="otherinfo">
						类型：
	<?php $_5cacb6045cd54=explode(',',$vo['vod_class']); if(is_array($_5cacb6045cd54) || $_5cacb6045cd54 instanceof \think\Collection || $_5cacb6045cd54 instanceof \think\Paginator): if( count($_5cacb6045cd54)==0 ) : echo "" ;else: foreach($_5cacb6045cd54 as $key2=>$vo2): ?>
    <a  href="<?php echo mac_url_type($vo,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$vo2,'order'=>$param['order'],'by'=>$param['by'],'id'=>$param['type_id'] ],'show'); ?>"><?php echo $vo2; ?></a>
    <?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
				</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>	
			</ul>
		</div>
<!-------------------------------------最新电影---------------------------------------------->
		<div class="recent-article cl">
			<div class="mod-tit">
				<span class="tit"><a target="_blank">最新电影/<span class="zm">NewMovie</span></a></span>
			</div>
			<ul class="update_area_lists cl">
				<?php $__TAG__ = '{"num":"6","type":"1","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="i_list list_n2"><a target="_blank" class="user_list_kz" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img class="waitpic" src="<?php echo $maccms['path_tpl']; ?>images/thumb_1.png" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" width="270" height="370" alt="<?php echo $vo['vod_name']; ?>"><span style="background-color:rgba(243,152,0,0.85)" class="pay">高清</span><span class="dbpf"><?php echo $vo['vod_score']; ?></span></a>
				<div class="user_list_kz_meta">
					<h2><?php echo $vo['vod_name']; ?></h2>
					<div class="otherinfo">
						类型：
		<?php $_5cacb6045ca91=explode(',',$vo['vod_class']); if(is_array($_5cacb6045ca91) || $_5cacb6045ca91 instanceof \think\Collection || $_5cacb6045ca91 instanceof \think\Paginator): if( count($_5cacb6045ca91)==0 ) : echo "" ;else: foreach($_5cacb6045ca91 as $key2=>$vo2): ?>
    <a  href="<?php echo mac_url_type($vo,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$vo2,'order'=>$param['order'],'by'=>$param['by'],'id'=>$param['type_id'] ],'show'); ?>"><?php echo $vo2; ?></a>
    <?php endforeach; endif; else: echo "" ;endif; ?>					
					</div>
				</div>
				</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>	
				
			</ul>
		</div>	
<!-------------------------------------最新电视---------------------------------------------->
		<div class="recent-article cl">
			<div class="mod-tit">
				<span class="tit"><a target="_blank">最新电视/<span class="zm">NewTv</span></a></span>
			</div>
			<ul class="update_area_lists cl">
				<?php $__TAG__ = '{"num":"6","type":"2","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="i_list list_n2"><a target="_blank" class="user_list_kz" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img class="waitpic" src="<?php echo $maccms['path_tpl']; ?>images/thumb_1.png" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" width="270" height="370" alt="<?php echo $vo['vod_name']; ?>"><span style="background-color:rgba(243,152,0,0.85)" class="pay">高清</span><span class="dbpf"><?php echo $vo['vod_score']; ?></span></a>
				<div class="user_list_kz_meta">
					<h2><?php echo $vo['vod_name']; ?></h2>
					<div class="otherinfo">
						类型：
	<?php $_5cacb6045c95e=explode(',',$vo['vod_class']); if(is_array($_5cacb6045c95e) || $_5cacb6045c95e instanceof \think\Collection || $_5cacb6045c95e instanceof \think\Paginator): if( count($_5cacb6045c95e)==0 ) : echo "" ;else: foreach($_5cacb6045c95e as $key2=>$vo2): ?>
    <a  href="<?php echo mac_url_type($vo,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$vo2,'order'=>$param['order'],'by'=>$param['by'],'id'=>$param['type_id'] ],'show'); ?>"><?php echo $vo2; ?></a>
    <?php endforeach; endif; else: echo "" ;endif; ?>						
					</div>
				</div>
				</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>	
				
			</ul>
		</div>
<!-------------------------------------最新综艺---------------------------------------------->
		<div class="recent-article cl">
			<div class="mod-tit">
				<span class="tit"><a target="_blank">最新综艺/<span class="zm">NewVariety</span></a></span>
			</div>
			<ul class="update_area_lists cl">
				<?php $__TAG__ = '{"num":"6","type":"3","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="i_list list_n2"><a target="_blank" class="user_list_kz" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img class="waitpic" src="<?php echo $maccms['path_tpl']; ?>images/thumb_1.png" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" width="270" height="370" alt="<?php echo $vo['vod_name']; ?>"><span style="background-color:rgba(243,152,0,0.85)" class="pay">高清</span><span class="dbpf"><?php echo $vo['vod_score']; ?></span></a>
				<div class="user_list_kz_meta">
					<h2><?php echo $vo['vod_name']; ?></h2>
					<div class="otherinfo">
						类型：
	<?php $_5cacb6045c82d=explode(',',$vo['vod_class']); if(is_array($_5cacb6045c82d) || $_5cacb6045c82d instanceof \think\Collection || $_5cacb6045c82d instanceof \think\Paginator): if( count($_5cacb6045c82d)==0 ) : echo "" ;else: foreach($_5cacb6045c82d as $key2=>$vo2): ?>
    <a  href="<?php echo mac_url_type($vo,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$vo2,'order'=>$param['order'],'by'=>$param['by'],'id'=>$param['type_id'] ],'show'); ?>"><?php echo $vo2; ?></a>
    <?php endforeach; endif; else: echo "" ;endif; ?>						
					</div>
				</div>
				</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>	
				
			</ul>
		</div>
<!-------------------------------------热门推荐---------------------------------------------->
		<div class="recent-article cl">
			<div class="mod-tit">
				<span class="tit"><a target="_blank">最新动漫/<span class="zm">NewCartoon</span></a></span>
			</div>
			<ul class="update_area_lists cl">
				<?php $__TAG__ = '{"num":"6","type":"4","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="i_list list_n2"><a target="_blank" class="user_list_kz" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img class="waitpic" src="<?php echo $maccms['path_tpl']; ?>images/thumb_1.png" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" width="270" height="370" alt="<?php echo $vo['vod_name']; ?>"><span style="background-color:rgba(243,152,0,0.85)" class="pay">高清</span><span class="dbpf"><?php echo $vo['vod_score']; ?></span></a>
				<div class="user_list_kz_meta">
					<h2><?php echo $vo['vod_name']; ?></h2>
					<div class="otherinfo">
						类型：
	<?php $_5cacb6045c6e9=explode(',',$vo['vod_class']); if(is_array($_5cacb6045c6e9) || $_5cacb6045c6e9 instanceof \think\Collection || $_5cacb6045c6e9 instanceof \think\Paginator): if( count($_5cacb6045c6e9)==0 ) : echo "" ;else: foreach($_5cacb6045c6e9 as $key2=>$vo2): ?>
    <a  href="<?php echo mac_url_type($vo,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$vo2,'order'=>$param['order'],'by'=>$param['by'],'id'=>$param['type_id'] ],'show'); ?>"><?php echo $vo2; ?></a>
    <?php endforeach; endif; else: echo "" ;endif; ?>						
					</div>
				</div>
				</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>	
				
			</ul>
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
</div>
<script type='text/javascript' src='<?php echo $maccms['path_tpl']; ?>js/script.js?ver=1.5'></script>
</body>
</html>	