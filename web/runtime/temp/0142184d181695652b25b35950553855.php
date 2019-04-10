<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:36:"template/youku_pc/html/vod/type.html";i:1538148802;s:56:"/var/www/html/template/youku_pc/html/public/include.html";i:1538148802;s:53:"/var/www/html/template/youku_pc/html/public/head.html";i:1538148804;s:54:"/var/www/html/template/youku_pc/html/public/slide.html";i:1538148804;s:55:"/var/www/html/template/youku_pc/html/public/paging.html";i:1538148804;s:53:"/var/www/html/template/youku_pc/html/public/foot.html";i:1538148804;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
     <title><?php echo $obj['type_title']; ?> - <?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="<?php echo $obj['type_key']; ?>" />
    <meta name="description" content="<?php echo $obj['type_des']; ?>" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="<?php echo $maccms['path_tpl']; ?>youku/css/bass.css"/>
<link rel="stylesheet" href="<?php echo $maccms['path_tpl']; ?>youku/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $maccms['path_tpl']; ?>youku/css/system.css" />
<script type="text/javascript" src="<?php echo $maccms['path']; ?>static/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>youku/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>youku/js/system.js"></script>  
<script type="text/javascript" src="<?php echo $maccms['path']; ?>static/js/jquery.autocomplete.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>youku/js/jquery.SuperSlide.js"></script>
<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
 
</head>
<body>
<!-- 页头 -->

<div class="top-main channel-top-main">
	<div class="test"></div>
        <div class="newhead">
          <div class="newhead-main">
            <div class="hd-logo"><a title="<?php echo $maccms['site_name']; ?>" href="<?php echo $maccms['path']; ?>" target="_self" rel="nofollow"></a></div>
            <div class="newhead-small-nav">
				<li id="nav-index"><a href="/" target="_self">首页</a></li>
				            <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li id="nav-<?php echo $vo['type_en']; ?>"><a href="<?php echo mac_url_type($vo); ?>" target="_self"><?php echo $vo['type_name']; ?></a></li>
				   <?php endforeach; endif; else: echo "" ;endif; ?>	
				<li class="top-nav-more-large"><a href="javascript:void(0);" class="ico-list"></a>
					<ul>
                    <li class="arrow"></li>
					<li><div class="top-nav-more-content">
                            <dl class="top-nav-channel">
                                <dt>其他</dt>
                                <dd>
				<a href="<?php echo mac_url('actor/index'); ?>" target="_self" id="nav-rank">明星</a>
				<a href="<?php echo mac_url('gbook/index'); ?>" target="_self" id="nav-gbook">留言</a>
				<a href="<?php echo mac_url_topic_index(); ?>" target="_self" id="nav-topic">专题</a> 
                               
	                             </dd>
							</dl>
                      <dl class="top-nav-channel">
                                <dt>客户端</dt>
                                <dd>
				<a href="#" target="_blank">移动APP</a> 
                <a href="#" target="_blank">PC客户端</a> 
                               
	                             </dd>
							</dl>
				    </div>
				</ul>
				</li>
              
			</li>
            </div>
			<script>$("#nav<?php echo $obj['type_en']; ?>").addClass("cur");</script>


          
          <div id="searchbar" class="search-main " areacode="search">
              <div class="head-search pull-left">
			   		<div id="_js_search_form" class="head-search-box ">
	         <form class="search-form ff-search" id="search" name="search"  action="<?php echo mac_url('vod/search'); ?>" method="post" autocomplete="off">
			<input type="text" name="wd" class="form-control ff-wd mac_wd"  value="" placeholder="请在此处输入影片名或演员名称">
				<a class="head-search-top" href="/label/top.html"  ></a>
				<button type="submit" id="searchbutton" class="search-button mac_search">搜剧</button>
								</form>
			   		</div>
			   	</div>
				</div>
			<div class="g-ucenter" id="uerCenter">
                <div class="u-vip"><div class="handle"><a href="javascript:;"  ><i class="ico-vip"></i>VIP</a></div></div>
                <div class="u-sub"><div class="handle"><a href="javascript:;" onclick="addFavorite(this);"><i class="ico-sub"></i>订阅</a></div></div>
                <div class="u-record">
                    <div class="dropdown" id="u-record">
                       <div class="handle  mac_history"> <a class="ff-record-get" href="javascript:;"> <i class="ico-urecord"></i>记录</a></div>
                        
                    </div>
                </div>
                <div class="u-upload">
                    <div class="dropdown">
                        <div class="handle"><a href="javascript:;"  ><i class="ico-upload"></i>上传</a></div>
                    </div>
                </div>
                <div class="u-app">
                  <div class="dropdown" id="u-app">
                      <div class="handle"><a href="javascript:;"  ><i class="ico-app"></i>客户端</a> </div>
					  <div class="panel"><i class="arrow"></i>
                          <div class="content"><div class="g-nav-app-intro">
						<a href="javascript:;"   class="g-nav-iku">
						<img src="<?php echo $maccms['path_tpl']; ?>youku/images/xiazai1.png" width="64">
						<h3>最新客户端</h3>
						<span>快速·稳定的观看体验</span>
						</a><a href="javascript:;"   class="g-nav-app">
						<img src="<?php echo $maccms['path_tpl']; ?>youku/images/xiazai2.jpg" width="64">
						<h3>微信公众号</h3>
						<span>全网独播尽在手中</span>
						</a>

						</div>
					   </div>
                     </div>
                  </div>
                </div> 
			<div class="u-login">
                  <div class="login-after dropdown" id="u-login"> 
					      <a class="text-muted ff-user user-login-modal mac_user" href="javascript:;">
                          <img src="<?php echo $maccms['path_tpl']; ?>youku/images/user.png" title="未登录"> </a>							                  </div>
                </div>	
		     </div>
			</div>
        </div>
      </div>
<!--顶部结束-->

 

 

<div class="lunhuan" id="carousel1">
    <div id="lunhuanback">
      <?php $__TAG__ = '{"order":"desc","by":"time","num":"10","paging":"false","ids":"all","type":"all","level":"9","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
	<a style="background-image:url(<?php echo $vo['vod_pic_slide']; ?>);opacity: 1;display: block;background-color:rgb(<?php echo $vo['vod_version']; ?>);" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"></a>
      <?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
	<div class="slider_nav" id='lunbonum'>
        <?php $__TAG__ = '{"order":"desc","by":"time","num":"10","paging":"false","ids":"all","type":"all","level":"9","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		<a href="<?php echo mac_url_vod_detail($vo); ?>"  ><div class="tit"><?php echo $vo['vod_name']; ?></div><div class="txt"><?php echo $vo['vod_sub']; ?> </div></a>	
        <?php endforeach; endif; else: echo "" ;endif; ?>
</div>
		<div class="slider_mask"></div>
</div></div>
 
<!-- 搜索条件 -->
<div class="column">

			<div class="le_screen">
				<div class="nav_box nav_box1">
					 
					<ul>
                <li><a <?php if($param['class'] == ''): ?> class="current" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>'','order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>">全部</a></li>
                <?php if(empty($obj['type_extend']['area']) || (($obj['type_extend']['area'] instanceof \think\Collection || $obj['type_extend']['area'] instanceof \think\Paginator ) && $obj['type_extend']['area']->isEmpty())): $_5cad33154ddc0=explode(',',$obj['parent']['type_extend']['class']); if(is_array($_5cad33154ddc0) || $_5cad33154ddc0 instanceof \think\Collection || $_5cad33154ddc0 instanceof \think\Paginator): if( count($_5cad33154ddc0)==0 ) : echo "" ;else: foreach($_5cad33154ddc0 as $key2=>$vo2): ?>
                <li><a <?php if($param['class'] == $vo2): ?> class="current" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$vo2,'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; else: $_5cad33154dcf3=explode(',',$obj['type_extend']['class']); if(is_array($_5cad33154dcf3) || $_5cad33154dcf3 instanceof \think\Collection || $_5cad33154dcf3 instanceof \think\Paginator): if( count($_5cad33154dcf3)==0 ) : echo "" ;else: foreach($_5cad33154dcf3 as $key2=>$vo2): ?>
                <li><a <?php if($param['class'] == $vo2): ?> class="current" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$vo2,'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </ul>
				</div>
				</volist>
				<div class="nav_box nav_box1">
					 
            <ul>
                <li><a <?php if($param['area'] == ''): ?> class="current" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>'','lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>">全部</a></li>
                <?php if(empty($obj['type_extend']['area']) || (($obj['type_extend']['area'] instanceof \think\Collection || $obj['type_extend']['area'] instanceof \think\Paginator ) && $obj['type_extend']['area']->isEmpty())): $_5cad33154dc36=explode(',',$obj['parent']['type_extend']['area']); if(is_array($_5cad33154dc36) || $_5cad33154dc36 instanceof \think\Collection || $_5cad33154dc36 instanceof \think\Paginator): if( count($_5cad33154dc36)==0 ) : echo "" ;else: foreach($_5cad33154dc36 as $key2=>$vo2): ?>
                    <li><a <?php if($param['area'] == $vo2): ?> class="current" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$vo2,'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; else: $_5cad33154db7b=explode(',',$obj['type_extend']['area']); if(is_array($_5cad33154db7b) || $_5cad33154db7b instanceof \think\Collection || $_5cad33154db7b instanceof \think\Paginator): if( count($_5cad33154db7b)==0 ) : echo "" ;else: foreach($_5cad33154db7b as $key2=>$vo2): ?>
                    <li><a <?php if($param['area'] == $vo2): ?> class="current" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$vo2,'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </ul>
				</div>
				</volist>
				<div class="nav_box nav_box1">
					 
            <ul>
                <li><a <?php if($param['lang'] == ''): ?> class="current" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>'','year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>">全部</a></li>
                <?php if(empty($obj['type_extend']['lang']) || (($obj['type_extend']['lang'] instanceof \think\Collection || $obj['type_extend']['lang'] instanceof \think\Paginator ) && $obj['type_extend']['lang']->isEmpty())): $_5cad33154daa7=explode(',',$obj['parent']['type_extend']['lang']); if(is_array($_5cad33154daa7) || $_5cad33154daa7 instanceof \think\Collection || $_5cad33154daa7 instanceof \think\Paginator): if( count($_5cad33154daa7)==0 ) : echo "" ;else: foreach($_5cad33154daa7 as $key2=>$vo2): ?>
                    <li><a <?php if($param['area'] == $vo2): ?> class="current" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$vo2,'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; else: $_5cad33154d9f8=explode(',',$obj['type_extend']['lang']); if(is_array($_5cad33154d9f8) || $_5cad33154d9f8 instanceof \think\Collection || $_5cad33154d9f8 instanceof \think\Paginator): if( count($_5cad33154d9f8)==0 ) : echo "" ;else: foreach($_5cad33154d9f8 as $key2=>$vo2): ?>
                    <li><a <?php if($param['lang'] == $vo2): ?> class="current" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$vo2,'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </ul>
				</div>
				</volist>
				<div class="nav_box nav_box2">
					 
            <ul>
                <li><a <?php if($param['year'] == ''): ?> class="current"<?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>'','level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>">全部</a></li>
                <?php if(empty($obj['type_extend']['year']) || (($obj['type_extend']['year'] instanceof \think\Collection || $obj['type_extend']['year'] instanceof \think\Paginator ) && $obj['type_extend']['year']->isEmpty())): $_5cad33154d91f=explode(',',$obj['parent']['type_extend']['year']); if(is_array($_5cad33154d91f) || $_5cad33154d91f instanceof \think\Collection || $_5cad33154d91f instanceof \think\Paginator): if( count($_5cad33154d91f)==0 ) : echo "" ;else: foreach($_5cad33154d91f as $key2=>$vo2): ?>
                    <li><a <?php if($param['area'] == $vo2): ?> class="current" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$vo2,'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; else: $_5cad33154d86d=explode(',',$obj['type_extend']['year']); if(is_array($_5cad33154d86d) || $_5cad33154d86d instanceof \think\Collection || $_5cad33154d86d instanceof \think\Paginator): if( count($_5cad33154d86d)==0 ) : echo "" ;else: foreach($_5cad33154d86d as $key2=>$vo2): ?>
                    <li><a <?php if($param['year'] == $vo2): ?> class="current" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$vo2,'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
           </ul>
				</div>
				</volist>
			</div></br>
			
		</div>
 <div class="yk-container">
 
   <div class="yk-row"> 
   <script type="text/javascript" src="<?php echo $maccms['path_ads']; ?>list-1400-1.js" charset="utf-8"></script> 
<!--为你推荐-->
<div class="yk-pannel clearfix"> 
   <div class="yk-pannel-box"> 
    <div class="yk-pannel_hd"> 
     <div class="yk-pannel_head clearfix"> 
      <h3 class="title">为你推荐</h3> 
     </div> 
    </div> 
    <div class="yk-pannel_bd clearfix"> 
     <ul class="index-list-1 active clearfix">
	 
            <?php $__TAG__ = '{"num":"6","type":"current","order":"asc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			
			
	<li class="yk-pack">
<div class="p-thumb">
<a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ></a>
<img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>"src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>">
<span class="playshow"><?php echo $vo['vod_remarks']; ?></span>
</div>
<ul class="info-list">
<li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li>
<span>主演：<?php echo $vo['vod_actor']; ?></span>
</ul></li>

            
            <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    </div> 
   </div> 
  </div>
 </volist> 
 
 		
	
<?php if($obj['type_name']=='直播'||$obj['parent']['type_name']=='直播'): else: if($obj['childids']): $__TAG__ = '{"ids":"current","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<div class="yk-pannel clearfix"> 
   <div class="yk-pannel-box"> 
    <div class="yk-pannel_hd"> 
     <div class="yk-pannel_head clearfix">
	  <a class="more text-muted pull-right" href="<?php echo mac_url_type($vo); ?>">更多<?php echo $vo['type_name']; ?></a> 
      <h3 class="title"><?php echo $vo['type_name']; ?></h3> 
     </div> 
    </div> 
    <div class="yk-pannel_bd clearfix"> 
     <ul class="index-list-1 active clearfix">
     
		<?php $__TAG__ = '{"num":"12","type":"'.$vo['type_id'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
	 <li class="yk-pack"> 
<div class="p-thumb">
<a href="<?php echo mac_url_vod_detail($vo); ?>" title="沙海"  ></a>
<img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>">
<span class="playshow"><?php echo $vo['vod_remarks']; ?></span>
</div>
<ul class="info-list">
<li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li>
<span>主演：<?php echo $vo['vod_actor']; ?></span>
</ul>
</li>

	 
 
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
    </div> 
   </div> 
  </div>
<?php endforeach; endif; else: echo "" ;endif; else: ?> 
<div class="yk-pannel clearfix"> 
   <div class="yk-pannel-box"> 
    <div class="yk-pannel_hd"> 
     <div class="yk-pannel_head clearfix">
	  <a class="more text-muted pull-right" href="<?php echo mac_url_type($vo); ?>">更多<?php echo $obj['type_name']; ?></a> 
      <h3 class="title"><?php echo $obj['type_name']; ?></h3> 
     </div> 
    </div> 
    <div class="yk-pannel_bd clearfix"> 
     <ul class="index-list-1 active clearfix">
     
		<?php $__TAG__ = '{"num":"42","type":"'.$vo['type_id'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
	 <li class="yk-pack"> 
<div class="p-thumb">
<a href="<?php echo mac_url_vod_detail($vo); ?>" title="沙海"  ></a>
<img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>">
<span class="playshow"><?php echo $vo['vod_remarks']; ?></span>
</div>
<ul class="info-list">
<li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li>
<span>主演：<?php echo $vo['vod_actor']; ?></span>
</ul>
</li>

	 
 
		<?php endforeach; endif; else: echo "" ;endif; ?>
	 
	</ul>
	
	
    </div> 
   </div> 
  </div><?php if($__PAGING__['record_total'] > 0): ?>
<div class="list-pager-v2">
        <li class="page-item"><a class="pagelink_a" href="<?php echo mac_url_page($__PAGING__['page_url'],1); ?>" title="首页">首页</a></li>
        <li class="page-item"><a class="pagelink_a" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_prev']); ?>" title="上一页">上一页</a></li>
        <?php if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): if($__PAGING__['page_current'] == $num): ?>
        <li class="page-item  disabled"><a class="pagelink_b" href="javascript:;" title="第<?php echo $num; ?>页"><?php echo $num; ?></a></li>
        <?php else: ?>
        <li class="page-item"><a class="pagelink_b" href="<?php echo mac_url_page($__PAGING__['page_url'],$num); ?>" title="第<?php echo $num; ?>页" ><?php echo $num; ?></a></li>
        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
       <li class="page-item"><a class="pagelink_a" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_next']); ?>" title="下一页">下一页</a></li>
        <li><a class="pagelink_a" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_total']); ?>" title="尾页">尾页</a></li>
    </div>
 
<?php else: endif; endif; endif; ?> </div>
</div>
 
<!-- 条件搜索 -->
 
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>youku/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>youku/js/layer.js"></script>
<div class="v5_footer"> 
   <div class="v5_footer_inner clearfix"> 
    <dl class="first_dl"> 
     <dt>关于我们</dt> 
     <dd><a href="/"  >关于我们</a></dd> 
     <dd><a href="/"  >版权声明</a></dd> 
     <dd><a href="/"  >招聘启事</a></dd> 
    </dl> 
    <dl> 
     <dt>商务合作</dt> 
     <dd><a href="/"  >广告合作</a></dd> 
     <dd><a href="/"  >网站地图</a></dd> 
     <dd><a href="/"  >友情链接</a>
     </dd> 
    </dl> 
    <dl> 
     <dt>联系我们</dt> 
     <dd><a href="/"  >在线客服</a></dd> 
     <dd><a href="/"  >官方微信</a></dd> 
     <dd><a href="/"  >意见反馈</a></dd> 
    </dl> 
    <div class="fl halving_line"></div> 
    <div class="fl erweima"> 
     <div class="fl app"> 
      <img src="<?php echo $maccms['path_tpl']; ?>youku/images/xiazai2.jpg" alt="" /> 
      <p>扫码下载APP</p> 
     </div> 
     <div class="fl weixin"> 
      <img src="<?php echo $maccms['path_tpl']; ?>youku/images/xiazai2.jpg" alt="" /> 
      <p>微信公众号</p> 
     </div> 
    </div> 
    <div class="fl halving_line"></div> 
    <div class="fl copyright"> 
     <p>本站所有资源均系互联网收集,仅提供页面服务,不提供影片资源存储,录制,上传,所有言论及信息不代表本站立场！</p> 
     <p>产生不良后果和法律责任与本站无关,如果侵犯了您的版权,请来信告知 <?php echo $maccms['site_email']; ?>  将及时更正和删除！</p> 
     <p>Copyright © 2008-2018 <?php echo $maccms['site_name']; ?>  All Rights Reserved <?php echo $maccms['site_icp']; ?> <?php echo $maccms['site_tj']; ?></p> 
    </div> 
   </div> 
  <div class="side-bar">
	<div class="feedback">
	<!--<a href="/forum/guestbook.html"  ></a>--></div>
	<div id="goTop"><i></i>
	</div>
  </div>
</div>
</body>
</html>