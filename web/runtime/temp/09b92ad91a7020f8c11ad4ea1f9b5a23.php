<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:39:"template/hdbee_bak/html/vod/detail.html";i:1544256676;s:57:"/var/www/html/template/hdbee_bak/html/public/include.html";i:1544256664;s:54:"/var/www/html/template/hdbee_bak/html/public/head.html";i:1555034888;s:54:"/var/www/html/template/hdbee_bak/html/public/foot.html";i:1555034951;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1.0,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>2018<?php echo $obj['type']['type_name']; ?>《<?php echo $obj['vod_name']; ?>》在线播放_全集完整版_高清影视剧集720P|1080P资源 – <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['vod_name']; ?>在线播放,<?php echo $obj['vod_name']; ?>完整版,<?php echo $obj['vod_name']; ?>百度云,<?php echo $obj['vod_name']; ?>高清影视,<?php echo $obj['vod_name']; ?>电影,<?php echo $obj['vod_name']; ?>中文版,2018<?php echo $obj['vod_name']; ?>"/>
<meta name="description" content="<?php echo $maccms['site_name']; ?>免费高清2018<?php echo $obj['vod_name']; ?>在线影院和全集完整版<?php echo $obj['vod_name']; ?>高清资源,在这里您可以免费获得<?php echo $obj['vod_name']; ?>剧情介绍,在线观看的快感 <?php echo $obj['vod_name']; ?> 导演：<?php echo $obj['vod_director']; ?>"/>
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


<link href="<?php echo $maccms['path']; ?>static/css/home.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript">var chenxing ="";</script>
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
  <div class="main">
   <div class="main_inner">
    <div class="main_left single_mian">
     <div class="announcer announcer-above-content announcer-style11" style="" data-effect="none" data-effdur="1000" data-pos="above-content" data-id="3">
      <div class="announcer-content">
       【公告】<?php echo $maccms['site_name']; ?>奇热影院唯一官方指定域名，
       <font color="#ED9205"><?php echo $maccms['site_url']; ?></font>请大家相互转告及时收藏！
      </div>
     </div>
     <div class="item_title">
      <div class="single-cat">
       <div itemscope="" itemtype="http://schema.org/WebPage" id="crumbs">
        <span class="delimiter"><i class="fa fa-forumbee"></i></span>
        <a itemprop="breadcrumb" href="<?php echo $maccms['path']; ?>">首页</a> 
        <span class="delimiter">/</span> 
        <a itemprop="breadcrumb" href="<?php echo mac_url_type($obj['type_1']); ?>"><?php echo $obj['type_1']['type_name']; ?></a> 
        <span class="delimiter">/</span> 
        <a itemprop="breadcrumb" href="<?php echo mac_url_type($obj['type']); ?>"><?php echo $obj['type']['type_name']; ?></a> 
        <span class="delimiter">/</span> 
        <span class="current">2018<?php echo $obj['type']['type_name']; ?>《<?php echo $obj['vod_name']; ?>在线点播》高清影视_中文完整版_最新720P|1080P资源</span>
       </div>
      </div>
     </div>
     <div class="item_info cl">
      <div style="float:left;"> 
       <i class="fa fa-video-camera"></i> 
       <span class="mac_hits hits cx-views" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" data-type="hits"></span> 播放
      </div>
      <div class="post_au">
       <div class="bdsharebuttonbox"> 
        <a href="#" class="bds_more" data-cmd="more"></a> 
        <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a> 
        <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a> 
        <a href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a> 
        <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a> 
        <a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a> 
        <a class="bds_count" data-cmd="count"></a>
       </div> 
       <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script> 
      </div>
     </div>
     <div class="content" id="content">
      <div class="content_left">
       <p class="ititle"><?php echo $maccms['site_name']; ?>免费提供2018<?php echo $obj['vod_name']; ?>迅雷下载和中文完整版<?php echo $obj['vod_name']; ?>百度云网盘资源,在这里您可以免费获得<?php echo $obj['vod_name']; ?>剧情介绍,剧照和高清迅雷下载地址</p>
       <div class="row">
        <div class="col-xs-4 padding-right-0"> 
         <a class="image_cx_cont" data-lightbox="example-set"  title="2018<?php echo $obj['type']['type_name']; ?>《<?php echo $obj['vod_name']; ?>》迅雷下载_中文完整版_百度云网盘720P|1080P资源"><img class="img-thumbnail" src="<?php echo mac_url_img($obj['vod_pic']); ?>" alt="2018<?php echo $obj['type']['type_name']; ?>《<?php echo $obj['vod_name']; ?>》迅雷下载_中文完整版_百度云网盘720P|1080P资源" width="100%" /></a>
        </div>
        <p></p>
        <div class="col-xs-8">
         <div class="movie-meta">
          <h1><?php echo $obj['vod_name']; ?><span class="year">(<?php echo $obj['vod_year']; ?>)</span></h1>
          <p><span class="info-label">导演：</span><?php echo $obj['vod_director']; ?></p>
          <p><span class="info-label">编剧：</span><?php echo $obj['vod_writer']; ?></p>
          <p><span class="info-label">主演：</span><?php echo $obj['vod_actor']; ?></p>
          <p><span class="info-label">类型：</span><?php echo $obj['vod_class']; ?></p>
          <p><span class="info-label">制片地区：</span><?php echo $obj['vod_area']; ?></p>
          <p><span class="info-label">语言：</span><?php echo $obj['vod_lang']; ?></p>
          <p><span class="info-label">上映时间：</span><?php echo $obj['vod_pubdate']; ?></p>
          <p><span class="info-label">片长：</span><?php echo $obj['vod_duration']; ?></p>
          <p><span class="info-label">又名：</span><?php echo $obj['vod_en']; ?></p>
          <p><span class="info-label">评分：</span><a class="score" href="https://movie.douban.com/subject/<?php echo $obj['vod_douban_id']; ?>/" target="_blank" rel="nofollow">豆瓣 <?php echo $obj['vod_score']; ?></a> </p>
         </div>
        </div>
       </div>
       <div class="row" style="margin-top: 5px;">
        <div class="col-xs-12">
         <h2><?php echo $obj['vod_name']; ?>剧情介绍</h2>
        </div>
        <div class="col-xs-12">
         <div class="movie-introduce">
          <p> <?php echo $obj['vod_content']; ?></p>
         </div>
        </div>
       </div>

       <div class="row">

 <div class="col-xs-12">
 <h2><?php echo $obj['vod_name']; ?>在线播放</h2>
</div>
 <div id="link-box" class="col-xs-12">
<ul id="movieTabs" class="nav nav-tabs">        
<?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>
 <li <?php if($key=="1"): ?> class="active"<?php endif; ?>><a id="playershow<?php echo $key; ?>-tab" href="#playershow<?php echo $key; ?>" data-toggle="tab"><?php echo $vo['player_info']['show']; ?></a></li>
 <?php endforeach; endif; else: echo "" ;endif; ?>
 </ul>

 <div id="movieTabContent" class="tab-content">
<?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>        
          <div id="playershow<?php echo $key; ?>" class="tab-pane<?php if($key=="1"): ?> active<?php endif; ?>">
           <div class="panel panel-default resource-list">
 

        <div class="kzvideo_page" style="display: block;background: none;">
         <ul class="page_ullist cl">
          <?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key=>$vo2): ?>  
          <li><a href="<?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>$vo2['nid']]); ?>"><?php echo $vo2['name']; ?></a></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
         </ul>
        </div>

 </div>
  </div>
<?php endforeach; endif; else: echo "" ;endif; ?>  
  </div>

 </div>
   </div>
<!--
       <div class="row">
        <div class="col-xs-12">
         <h2><?php echo $obj['vod_name']; ?>下载</h2>
        </div>
        <div id="link-box" class="col-xs-12">
         <ul id="movieTabs" class="nav nav-tabs">
          
          <li class="active"><a id="normalDown-tab" href="#normalDown" data-toggle="tab">迅雷下载 </a></li>


         </ul>
         <div id="movieTabContent" class="tab-content">
          <div id="normalDown" class="tab-pane active">
           <div class="panel panel-default resource-list">
            <div class="panel-heading">
            <?php if($obj['vod_down_url']!=""): ?>
             <strong id="down"><?php echo $obj['vod_name']; ?>迅雷下载</strong>
            <?php else: ?>
            <strong id="down">暂无相关下载资源</strong>
            <?php endif; ?>
            </div>

            <table class="table table-hover" style="margin-bottom: 0;">
             <tbody>


<?php if(is_array($obj['vod_down_list']) || $obj['vod_down_list'] instanceof \think\Collection || $obj['vod_down_list'] instanceof \think\Paginator): if( count($obj['vod_down_list'])==0 ) : echo "" ;else: foreach($obj['vod_down_list'] as $key=>$vo): if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key=>$vo2): if($vo['player_info']['from']=="baidu"): ?>            
              <tr>
               <td align="center" width="40"><span class="magnet-icon" title="<?php echo $obj['vod_name']; ?>百度云网盘资源">网盘</span></td>
               <td class="text-break" style="padding: 8px 0;">
                <div style="line-height: 1.5; overflow: hidden;">
                 <a title="<?php echo $obj['vod_name']; ?>百度云网盘资源" href="<?php echo $vo2['url']; ?>" target="_blank" rel="nofollow"> <?php echo $obj['vod_name']; ?>– 百度云，网盘资源，密码：</a>
                 <strong style="color: red;"><?php echo $vo2['name']; ?></strong>
                </div></td>
              </tr>
<?php else: ?>
                <tr>
               <td align="center" width="40"><span class="magnet-icon" title="<?php echo $obj['vod_name']; ?>磁力链接">磁力</span></td>
               <td class="text-break" style="padding: 8px 0;">
                <div style="line-height: 1.5; overflow: hidden;">
                 <a title="<?php echo $vo2['name']; ?>" href="<?php echo $vo2['url']; ?>" rel="nofollow" target="_blank"><?php echo $vo2['name']; ?></a>
                </div></td>
              </tr>
<?php endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>

             </tbody>
            </table>
           </div>
           <p></p>
          </div>
          <p></p>
         
         </div>
        </div>
       </div>
<!-------------------------------------->

       <div class="dtpost-like cl">

<a class="digg_link favorite" data-id="<?php echo $obj['vod_id']; ?><?php echo $obj['art_id']; ?><?php echo $obj['topic_id']; ?>" data-mid="<?php echo $maccms['mid']; ?>" data-type="up" href="javascript:;"><i class="fa fa-thumbs-up"></i><span class="count"><em class="digg_num" style="color: #F58282;"><?php echo $obj['vod_up']; ?><?php echo $obj['art_up']; ?><?php echo $obj['topic_up']; ?></em>个赞 </span></a>

<a href="javascript:void(0);"  class="mac_ulog share-btn collect collect-no" data-type="2" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>"><i class="fa fa-star"></i><span class="count">收藏</span></a>



        <a class="share-fx" href="javascript:;"><i class="fa fa-share-alt"></i><span class="count">分享</span></a>
        <div class="myshare -mob-share-ui cl">
         <ul class="-mob-share-list" data-url="http://<?php echo $maccms['site_url']; ?><?php echo mac_url_vod_detail($obj); ?>" data-images="http://wx2.sinaimg.cn/mw690/006Dmf39ly1fp6hxj7iqrj30hg0p0wil.jpg">
          <li class="-mob-share-qq" data-type="qq"></li>
          <li class="-mob-share-qzone" data-type="qzone"></li>
          <li class="-mob-share-weixin" data-type="weixin">
           <div class="weixin_qrcode">
            <a class="image_cx_cont" data-lightbox="example-set" href="//pan.baidu.com/share/qrcode?w=200&amp;h=200&amp;url=http://<?php echo $maccms['site_url']; ?><?php echo mac_url_vod_detail($obj); ?>" title="《<?php echo $obj['vod_name']; ?>》迅雷下载_中文完整版_百度云网盘720P|1080P资源"><img src="//pan.baidu.com/share/qrcode?w=200&amp;h=200&amp;url=http://<?php echo $maccms['site_url']; ?><?php echo mac_url_vod_detail($obj); ?>" alt="" /></a>
            <span>微信扫码</span>
           </div></li>
          <li class="-mob-share-weibo" data-type="weibo"></li>
          <li class="-mob-share-douban" data-type="douban"></li>
         </ul>
        </div>
       </div>
      </div>
     </div>
   
     <div class="content_right_title">
      电影推荐：

     </div>
     <ul class="xg_content">

 <?php $__TAG__ = '{"num":"6","ids":"'.$obj['vod_rel_vod'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>       
      <li class="i_list list_n2"><a target="_blank" class="user_list_kz" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"> <img class="waitpic" src="<?php echo $maccms['path_tpl']; ?>images/thumb_1.png" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" width="270" height="370" alt="<?php echo $vo['vod_name']; ?>" /><span style="background-color:rgba(51,199,226,0.85)" class="pay"><?php echo $obj['vod_year']; ?></span><span class="dbpf"><?php echo $obj['topic_score']; ?></span></a>
       <div class="user_list_kz_meta">
        <h2><?php echo $vo['vod_name']; ?></h2>
       </div></li>
  <?php endforeach; endif; else: echo "" ;endif; ?>   
     </ul>
     <section class="single-post-comment" id="pinglun" >
     

<div class="mac_comment" data-id="<?php echo $obj['vod_id']; ?>" data-mid="<?php echo $maccms['mid']; ?>" ></div>
    <script>
        $(function(){
            MAC.Comment.Login = <?php echo $comment['login']; ?>;
            MAC.Comment.Verify = <?php echo $comment['verify']; ?>;
            MAC.Comment.Init();
            MAC.Comment.Show(1);
        });
    </script>
     
 
     </section>
    </div>
    <div class="main_right sidebar">
<!--
     <li id="text-6" class="widget widget_text"><h2>迅雷下载失败解决方法</h2>
      <div class="textwidget">
       <p>现在迅雷屏蔽资源比较严重，是迅雷软件的问题！解决办法：<br /> 1.<a href="<?php echo mac_url('label/wangpan'); ?>" target="_blank" rel="noopener">百度网盘离线下载</a><br /> 2.<a href="https://pan.baidu.com/s/1nvT6eE1" target="_blank" rel="nofollow noopener">使用早期版本迅雷5.8下载</a> 密码: vi2g<br /> 3.<a href="https://pan.baidu.com/s/1kVQSszd" target="_blank" rel="nofollow noopener">使用utorrent下载</a> 密码: ygm3<br /> 4.使用115网盘，BitComet等软件下载。</p>
       <p style="display: none;"></p>
      </div></li>
     <li id="text-7" class="widget widget_text"><h2>奇热影院说明书</h2>
      <div class="textwidget">
       <h5>迅雷下载：</h5>
       <p>本站全平台兼容，需要迅雷支持，电脑可使用迅雷播放器直接观看，平板和手机安装迅雷APP后，点击本站链接会自动跳往迅雷（可直接观看）。</p>
       <h5>清晰度：</h5>
       <p>理论上分辨率越高（720/1024/1280），越清晰，因本站电影均来自网络，无法逐一核查，分辨率只做参考。正常情况下清晰度从低到高应是：TS-DVD-HD-BD-720P/1080P-2160p4K蓝光-原盘。</p>
       <h5>下载速度：</h5>
       <p>经测试，迅雷会员和移动端（手机、平板）下载速度优于普通电脑用户，具体情况根据片源而定，如遇下载不顺畅，可尝试本站提供的其他链接。</p>
       <h5>下载链接：</h5>
       <p>迅雷地址以“thunder:”开头，标注迅雷链接及迅雷快传，则必须安装迅雷或迅雷播放器（移动端下载迅雷APP）；电驴链接和磁力链接 magnet 则支持所有主流下载软件，如迅雷、QQ旋风、电驴工具等。</p>
       <h5>文件大小：</h5>
       <p>DVD1G以内，BD1024、BD12801G-2G，1024MKV、1280MKV2G-3G，720P4G ，推荐电视机观看；1080P和3D8G以上，推荐电视机观看；原盘一般达到20G-50G。</p>
      </div></li>
-->
     <div class="widget widgetkz_zh cl">
      <div id="tab-title">
       <div class="tab">
        <ul id="tabnav">
         <li class="selected">最新排行</li>
         <li class="">热门排行</li>
         <li>相关视频</li>
        </ul>
       </div>
       <div class="clear"></div>
      </div>
      <div id="tab-content">
       <ul class="hide" style="display: block;">
        <?php $__TAG__ = '{"num":"20","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
       </ul>
       <ul style="display: none;">
        <?php $__TAG__ = '{"num":"20","type":"current","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
       </ul>
       <ul class="hide" style="display: none;">
         <?php $__TAG__ = '{"num":"20","ids":"'.$obj['vod_rel_vod'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></li>
         <?php endforeach; endif; else: echo "" ;endif; ?>
       </ul>
      </div>
     </div> 
     <script type="text/javascript">jQuery('#tabnav li').click(function(){
            jQuery(this).addClass("selected").siblings().removeClass();
            jQuery("#tab-content > ul").eq(jQuery('#tabnav li').index(this)).fadeIn(800).siblings().hide()
        });</script> 
     <div class="widget widget_tags_num">
      <h3>电影分类</h3>
      <ul class="cl">
 <?php $__TAG__ = '{"type":"all","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
 <li> <a href="<?php echo mac_url_type($vo,[],'show'); ?>" title="<?php echo $vo['type_name']; ?>"><?php echo $vo['type_name']; ?></a></li>
   <?php endforeach; endif; else: echo "" ;endif; ?>

      </ul>
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
				<em>♥ <a href="http://<?php echo $maccms['site_url']; ?>/">邻家影院</a> ·neib.cn </em>
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
 
<script type='text/javascript' src='<?php echo $maccms['path_tpl']; ?>js/script.js?ver=1.5'></script>
  
  </body>
</html>