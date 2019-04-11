<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:37:"template/hdbee_bak/html/vod/type.html";i:1544256678;s:57:"/var/www/html/template/hdbee_bak/html/public/include.html";i:1544256664;s:54:"/var/www/html/template/hdbee_bak/html/public/head.html";i:1544284764;s:56:"/var/www/html/template/hdbee_bak/html/public/paging.html";i:1544256664;s:54:"/var/www/html/template/hdbee_bak/html/public/foot.html";i:1544256662;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1.0,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title><?php echo $obj['type_title']; ?> - <?php echo $maccms['site_name']; ?></title>
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
  <div class="fl">
   <div class="fl_title">
    <div class="fl01">
      <?php echo $obj['type_name']; ?>
    </div>
   </div>
   <div class="row">
    <div class="filter-wrap" id="filter-wrap-category">
     <div class="filter-tag">
      <div class="fl_list">
       <span>制片地区:</span>
       <ul class="afc1"> 
       	<a class="fl_link tag-linked" href="javascript:;" data-tag="0">不限</a>
       	<?php if(empty($obj['type_extend']['area']) || (($obj['type_extend']['area'] instanceof \think\Collection || $obj['type_extend']['area'] instanceof \think\Paginator ) && $obj['type_extend']['area']->isEmpty())): $_5cae92bb8892f=explode(',',$obj['parent']['type_extend']['area']); if(is_array($_5cae92bb8892f) || $_5cae92bb8892f instanceof \think\Collection || $_5cae92bb8892f instanceof \think\Paginator): if( count($_5cae92bb8892f)==0 ) : echo "" ;else: foreach($_5cae92bb8892f as $key=>$vo): ?>
        <a class="fl_link" href="<?php echo mac_url_type($obj,['area'=>$vo],'show'); ?>" data-cat="1"><?php echo $vo; ?></a>
         <?php endforeach; endif; else: echo "" ;endif; else: $_5cae92bb8885d=explode(',',$obj['type_extend']['area']); if(is_array($_5cae92bb8885d) || $_5cae92bb8885d instanceof \think\Collection || $_5cae92bb8885d instanceof \think\Paginator): if( count($_5cae92bb8885d)==0 ) : echo "" ;else: foreach($_5cae92bb8885d as $key=>$vo): ?>
        <a class="fl_link" href="<?php echo mac_url_type($obj,['area'=>$vo],'show'); ?>" data-cat="56"><?php echo $vo; ?></a>
          <?php endforeach; endif; else: echo "" ;endif; endif; ?>


       </ul>
      </div>
      <div class="fl_list">
       <span>影视类型:</span>
       <a class="fl_link tag-linked" href="javascript:;" data-tag="0">不限</a>
   

        <?php if(empty($obj['type_extend']['class']) || (($obj['type_extend']['class'] instanceof \think\Collection || $obj['type_extend']['class'] instanceof \think\Paginator ) && $obj['type_extend']['class']->isEmpty())): $_5cae92bb887a2=explode(',',$obj['parent']['type_extend']['class']); if(is_array($_5cae92bb887a2) || $_5cae92bb887a2 instanceof \think\Collection || $_5cae92bb887a2 instanceof \think\Paginator): if( count($_5cae92bb887a2)==0 ) : echo "" ;else: foreach($_5cae92bb887a2 as $key=>$vo): ?>
          
        <a class="fl_link" href="<?php echo mac_url_type($obj,['class'=>$vo],'show'); ?>" data-tag="22"><?php echo $vo; ?></a>
        <?php endforeach; endif; else: echo "" ;endif; else: $_5cae92bb886f7=explode(',',$obj['type_extend']['class']); if(is_array($_5cae92bb886f7) || $_5cae92bb886f7 instanceof \think\Collection || $_5cae92bb886f7 instanceof \think\Paginator): if( count($_5cae92bb886f7)==0 ) : echo "" ;else: foreach($_5cae92bb886f7 as $key=>$vo): ?>
       <a class="fl_link" href="<?php echo mac_url_type($obj,['class'=>$vo],'show'); ?>" data-tag="22"><?php echo $vo; ?></a>
        
        <?php endforeach; endif; else: echo "" ;endif; endif; ?>


      </div>


      <div class="fl_list">
       <span>影视年代:</span>
       <a class="fl_link tag-linked" href="javascript:;" data-tag="0">不限</a>
   
                <?php if(empty($obj['type_extend']['year']) || (($obj['type_extend']['year'] instanceof \think\Collection || $obj['type_extend']['year'] instanceof \think\Paginator ) && $obj['type_extend']['year']->isEmpty())): $_5cae92bb88636=explode(',',$obj['parent']['type_extend']['year']); if(is_array($_5cae92bb88636) || $_5cae92bb88636 instanceof \think\Collection || $_5cae92bb88636 instanceof \think\Paginator): if( count($_5cae92bb88636)==0 ) : echo "" ;else: foreach($_5cae92bb88636 as $key=>$vo): ?>
                    <a class="fl_link" href="<?php echo mac_url_type($obj,['year'=>$vo],'show'); ?>" data-tag="22"><?php echo $vo; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; else: $_5cae92bb88563=explode(',',$obj['type_extend']['year']); if(is_array($_5cae92bb88563) || $_5cae92bb88563 instanceof \think\Collection || $_5cae92bb88563 instanceof \think\Paginator): if( count($_5cae92bb88563)==0 ) : echo "" ;else: foreach($_5cae92bb88563 as $key=>$vo): ?>
                    <a class="fl_link" href="<?php echo mac_url_type($obj,['year'=>$vo],'show'); ?>" data-tag="22"><?php echo $vo; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>

      </div>


      <div class="fl_list">
       <span>影视排序:</span> 
<a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>'time' ],'show'); ?>" class="fl_link <?php if($param['by'] == '' || $param['by'] == 'time'): ?>orderby-linked<?php endif; ?> " data-orderby="date" rel="nofollow">按时间</a>
<a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>'hits' ],'show'); ?>" class="fl_link <?php if($param['by'] == 'hits'): ?>orderby-linked<?php endif; ?>" data-orderby="date" rel="nofollow">按人气</a>
<a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>'score' ],'show'); ?>" class="fl_link <?php if($param['by'] == 'score'): ?>orderby-linked<?php endif; ?>" data-orderby="date" rel="nofollow">按评分</a>
      </div>



     </div>
    </div>
   </div>
  </div>
  <div class="update_area">
   <div class="loading_ajax">
    <img src="<?php echo $maccms['path_tpl']; ?>images/loading-bars.svg" alt="加载中..." />
    <br />请稍后...正在为您加载新内容
   </div>
   <div class="update_area_content">
    <ul class="update_area_lists cl" id="index_ajax_list">
     <?php $__TAG__ = '{"num":"24","paging":"yes","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
    	 <li class="i_list list_n2"><a target="_blank" class="user_list_kz" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"> <img class="waitpic" src="<?php echo $maccms['path_tpl']; ?>images/thumb_1.png" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" width="270" height="370" alt="<?php echo $vo['vod_name']; ?>" /><span style="background-color:rgba(243,152,0,0.85)" class="pay"><?php echo $vo['vod_remarks']; ?></span><span class="dbpf"><?php echo $vo['vod_score']; ?></span></a>
      <div class="user_list_kz_meta">
       <h2><?php echo $vo['vod_name']; ?></h2>
       <div class="otherinfo">
        类型：
	<?php $_5cae92bb8848d=explode(',',$vo['vod_class']); if(is_array($_5cae92bb8848d) || $_5cae92bb8848d instanceof \think\Collection || $_5cae92bb8848d instanceof \think\Paginator): if( count($_5cae92bb8848d)==0 ) : echo "" ;else: foreach($_5cae92bb8848d as $key2=>$vo2): ?>
    <a  href="<?php echo mac_url_type($vo,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$vo2,'order'=>$param['order'],'by'=>$param['by'],'id'=>$param['type_id'] ],'show'); ?>"><?php echo $vo2; ?></a>
    <?php endforeach; endif; else: echo "" ;endif; ?>
       </div>
      </div></li>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <div class="_ajax_paged" id="_ajax_paged"></div>
    <nav class="navigation pagination" role="navigation">
     <h2 class="screen-reader-text">文章导航</h2>
     <div class="nav-links">
   
<?php if($__PAGING__['record_total'] > 0): if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): if($__PAGING__['page_current'] == $num): ?>
             <span aria-current="page" class="page-numbers current"><span class="meta-nav screen-reader-text">第 </span><?php echo $num; ?><span class="meta-nav screen-reader-text"> 页</span></span> 
            <?php else: ?>
            <a class="page-numbers" href="<?php echo mac_url_page($__PAGING__['page_url'],$num); ?>"><span class="meta-nav screen-reader-text">第 </span><?php echo $num; ?><span class="meta-nav screen-reader-text"> 页</span></a> 

            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
    <a class="next page-numbers" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_next']); ?>"><i class="fa fa-chevron-right"></i></a>    
<?php else: ?>
<div class="wrap">
    <h1>没有找到匹配数据</h1>
</div>
<?php endif; ?>


     </div>
    </nav>
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
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/script.js?ver=1.5"></script>
  </body>
</html>      