<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:39:"template/youku_pc/html/index/index.html";i:1538148802;s:56:"/var/www/html/template/youku_pc/html/public/include.html";i:1538148802;s:53:"/var/www/html/template/youku_pc/html/public/head.html";i:1538148804;s:54:"/var/www/html/template/youku_pc/html/public/slide.html";i:1538148804;s:53:"/var/www/html/template/youku_pc/html/public/foot.html";i:1538148804;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title><?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>" />
    <meta name="ascription" content="<?php echo $maccms['site_ascription']; ?>" />
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
 


 <div class="yk-container"> 
   <div class="yk-row"> 
<div class="yk-guide clearfix"> 
<ul class="nav-guide">
		<li class="nav-group">
				 
 	<span class="channel yk-dsj"><a href="/dy" target="_self">电影</a>
		<dl class="channel-layer"> 
   <span class="arrow"></span> 
   <dt> 
    <a title="进入电影" href="/dy">进入电影 &gt;</a> 
   </dt> 
   <dd class="col-left"> 
     <?php $__TAG__ = '{"order":"asc","by":"rnd","num":"4","type":"1","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
    <a title="<?php echo $vo['vod_name']; ?>" href="<?php echo mac_url_vod_detail($vo); ?> "  ><?php echo $vo['vod_name']; ?></a>
     <?php endforeach; endif; else: echo "" ;endif; ?>
    	</dd>
          <dd > 
     <?php $__TAG__ = '{"order":"asc","by":"hits","num":"4","type":"1","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
    <a title="<?php echo $vo['vod_name']; ?>" href="<?php echo mac_url_vod_detail($vo); ?> "  ><?php echo $vo['vod_name']; ?></a>
     <?php endforeach; endif; else: echo "" ;endif; ?>
    	</dd> 
  </dl>
  </span>	
  
 
 	<span class="channel yk-dsj"><a href="/tv" target="_self">连续剧</a>
		<dl class="channel-layer"> 
   <span class="arrow"></span> 
   <dt> 
    <a title="进入连续剧" href="/tv">进入连续剧 &gt;</a> 
   </dt> 
    <dd class="col-left"> 
     <?php $__TAG__ = '{"order":"asc","by":"rnd","num":"4","type":"2","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
    <a title="<?php echo $vo['vod_name']; ?>" href="<?php echo mac_url_vod_detail($vo); ?> "  ><?php echo $vo['vod_name']; ?></a>
     <?php endforeach; endif; else: echo "" ;endif; ?>
    	</dd>
          <dd > 
     <?php $__TAG__ = '{"order":"asc","by":"hits","num":"4","type":"2","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
    <a title="<?php echo $vo['vod_name']; ?>" href="<?php echo mac_url_vod_detail($vo); ?> "  ><?php echo $vo['vod_name']; ?></a>
     <?php endforeach; endif; else: echo "" ;endif; ?>
    	</dd> 
  </dl>
  </span>	
  
 
 	<span class="channel yk-dsj"><a href="/zy" target="_self">综艺</a>
		<dl class="channel-layer"> 
   <span class="arrow"></span> 
   <dt> 
    <a title="进入综艺" href="/zy">进入综艺 &gt;</a> 
   </dt> 
    <dd class="col-left"> 
     <?php $__TAG__ = '{"order":"asc","by":"rnd","num":"4","type":"3","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
    <a title="<?php echo $vo['vod_name']; ?>" href="<?php echo mac_url_vod_detail($vo); ?> "  ><?php echo $vo['vod_name']; ?></a>
     <?php endforeach; endif; else: echo "" ;endif; ?>
    	</dd>
          <dd > 
     <?php $__TAG__ = '{"order":"asc","by":"hits","num":"4","type":"3","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
    <a title="<?php echo $vo['vod_name']; ?>" href="<?php echo mac_url_vod_detail($vo); ?> "  ><?php echo $vo['vod_name']; ?></a>
     <?php endforeach; endif; else: echo "" ;endif; ?>
    	</dd> 
  </dl>
  </span>	
  </br>
 
 	<span class="channel yk-dsj"><a href="/dm" target="_self">动漫</a>
		<dl class="channel-layer"> 
   <span class="arrow"></span> 
   <dt> 
    <a title="进入动漫" href="/dm">进入动漫 &gt;</a> 
   </dt> 
    <dd class="col-left"> 
     <?php $__TAG__ = '{"order":"asc","by":"rnd","num":"4","type":"4","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
    <a title="<?php echo $vo['vod_name']; ?>" href="<?php echo mac_url_vod_detail($vo); ?> "  ><?php echo $vo['vod_name']; ?></a>
     <?php endforeach; endif; else: echo "" ;endif; ?>
    	</dd>
          <dd > 
     <?php $__TAG__ = '{"order":"asc","by":"hits","num":"4","type":"4","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
    <a title="<?php echo $vo['vod_name']; ?>" href="<?php echo mac_url_vod_detail($vo); ?> "  ><?php echo $vo['vod_name']; ?></a>
     <?php endforeach; endif; else: echo "" ;endif; ?>
    	</dd> 
  </dl>
  </span>
  	<span class="channel yk-dsj"><a href="/mv" target="_self">音乐</a>
		 
  </span>
 
		</li>
		 
        <li class="nav-group">
        <span class="channel"><a href="/movie/7.html">喜剧片</a></span>
        <span class="channel"><a href="/movie/8.html">动作片</a></span>
        <span class="channel"><a href="/movie/9.html">爱情片</a></span>
        <span class="channel"><a href="/movie/10.html">科幻片</a></span></br>
        <span class="channel"><a href="/movie/11.html">恐怖片</a></span>
        <span class="channel"><a href="/movie/12.html">剧情片</a></span>
        <span class="channel"><a href="/movie/13.html">战争片</a></span>
        <span class="channel"><a href="/movie/14.html">伦理片</a></span>
        </li>
        <li class="nav-group">
        <span class="channel"><a href="/movie/15.html">国产剧</a></span>
        <span class="channel"><a href="/movie/16.html">港台剧</a></span></br>
        <span class="channel"><a href="/movie/17.html">日韩剧</a></span>
        <span class="channel"><a href="/movie/18.html">欧美剧</a></span>
        </li> 
        <li class="nav-group">
        <span class="channel"><a href="/search/-------------.html?wd=霍建华">霍建华</a></span>
        <span class="channel"><a href="/search/-------------.html?wd=徐峥">徐峥</a></span>
        <span class="channel"><a href="/search/-------------.html?wd=胡歌">胡歌</a></span></br>
        <span class="channel"><a href="/search/-------------.html?wd=刘德华">刘德华</a></span>
        <span class="channel"><a href="/search/-------------.html?wd=聂远">聂远</a></span>
        <span class="channel"><a href="/search/-------------.html?wd=黄渤">黄渤</a></span>
        </li>                   
				   
              
            
		  <li class="nav-group nav-group-icon">
		<span class="channel-icon channel-list">
		<a href="/map.html"  >最新片库</a>	
		</span>    
		<span class="colx channel-icon channel-index">
			<a href="/label/top.html"  >热搜榜</a>
		</span>   
		<span class="colx channel-icon  channel-dayu">
			<a href="show/1--hits---------.html" target="_self">热门精选</a>		</span>                   
		<span class="channel-icon channel-download">
			<a href="/topic/" target="_self">影视专题</a>		</span>                 
	</li>    
 </ul>	
</div>

    <div class="yk-pannel clearfix"> 
     <div class="yk-pannel-box"> 
      <div class="yk-pannel_hd"> 
       <div class="yk-pannel_head clearfix"> 
        <a class="icon_hyh text-muted pull-right right" href="#myCarousel" role="button" data-slide="next">换一换</a> 
        <h3 class="title">最新懂你</h3> 
		        <span class="tips">看得越多，推荐的内容越符合你的口味哟~</span>       </div> 
      </div> 
      <div class="yk-pannel_bd clearfix"> 
	  	  <div id="myCarousel" class="carousel slide1">
	  <div class="carousel-inner">
	  
       <div class="yk-vodlist clearfix item active"> 
	   <?php $__TAG__ = '{"order":"asc","by":"hits","num":"12","paging":"false","ids":"all","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>	
	    <li class="yk-pack"> 
          <div class="p-thumb"> 
           <a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ></a> 
           <img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" /> 
           <span class="playshow"><?php echo $vo['vod_remarks']; ?></span> 
          </div> 
          <ul class="info-list"> 
           <li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li> 
           <li><span><?php echo $vo['vod_hits']; ?>次播放</span></li> 
          </ul> 
		  </li> 
		  <?php endforeach; endif; else: echo "" ;endif; ?>
		   </li>  
       </div >
	   
	    <div class="yk-vodlist clearfix item"> 
		
         <?php $__TAG__ = '{"order":"asc","by":"rnd","num":"12","paging":"false","ids":"all","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>	
	    <li class="yk-pack"> 
          <div class="p-thumb"> 
           <a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ></a> 
           <img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" /> 
           <span class="playshow"><?php echo $vo['vod_remarks']; ?></span> 
          </div> 
          <ul class="info-list"> 
           <li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li> 
           <li><span><?php echo $vo['vod_hits']; ?>次播放</span></li> 
          </ul> 
		  </li> 
		  <?php endforeach; endif; else: echo "" ;endif; ?>
		    </div > 
      </div> 
     </div> 
    </div>
  </div> 
 </div>
<!-- 横幅广告开始index_1400 -->
<script type="text/javascript" src="<?php echo $maccms['path_ads']; ?>index-1400.js" charset="utf-8"></script><!--广告END-->
 <!-- 为你推荐推荐值4 -->
 <div class="yk-pannel clearfix"> 
   <div class="yk-pannel-box"> 
    <div class="yk-pannel_hd"> 
     <div class="yk-pannel_head clearfix"> 
      <h3 class="title">为你推荐</h3> 
     </div> 
    </div> 
    <div class="yk-pannel_bd clearfix"> 
     <ul class="index-list-1 active clearfix">

	 <?php $__TAG__ = '{"num":"12","order":"desc","by":"time","type":"all","level":"1,2,3,5,6,7","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
	 <li class="yk-pack">
		<div class="p-thumb">
		<a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ></a>
		<img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>">
		<div class="p-thumb-tagrt" style="left:0;"><span class="red"><?php echo $vo['vod_remarks']; ?> </span></div>
          <div class="p-thumb-tagrt" style="left:0;top:calc(100% - 20px);"><span class="red" style="background: linear-gradient(to left,#ff0202 0,#6e00ff 100%);"><?php echo $vo['type']['type_name']; ?></span></div>
		<span class="figure_mask"></span>
		<span class="figure_thermometer _animate0">
		<i class="icon_thermometer"> 
		<i class="icon_thermometer_ball"></i> 
		<i class="icon_thermometer_progress" style="height:83%;"> </i> </i> 
		<span class="thermometer_info"> 
		<span class="txt">播放指数</span> 
		<span class="txt"><?php echo $vo['vod_up']; ?></span> </span> 
		</div>
		<ul class="info-list">
		<li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li>
		<span>主演：<?php echo $vo['vod_actor']; ?> </span>
		</ul>
		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		 </ul>
		 
    </div> 
   </div> 
  </div>
<div class="yk-pannel clearfix"> 
     <div class="yk-pannel-box"> 
      <div class="yk-pannel_hd"> 
       <div class="yk-pannel_head clearfix"> 
        <a class="more text-muted pull-right" href="#">更多</a> 
        <h3 class="title"><a href="#">精彩专题</a></h3> 
       </div> 
      </div> 
            <div class="yk-pannel_bd clearfix"> 
	  	  <div id="myCarousel" class="carousel slide1">
	  <div class="carousel-inner">
        <div class="yk-vodlist clearfix item active"> 
          
           <?php $__TAG__ = '{"order":"desc","by":"time","num":"6","id":"vo","key":"key"}';$__LIST__ = model("Topic")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>	
	    <li class="yk-pack"> 
          <div class="p-thumb"> 
           <a href="<?php echo mac_url_topic_detail($vo); ?>" title="<?php echo $vo['topic_name']; ?>"  ></a> 
           <img class="quic ff-img" data-original="<?php echo $vo['topic_pic']; ?>" src="<?php echo $vo['topic_pic']; ?>" alt="<?php echo $vo['topic_name']; ?>" /> 
           <span class="playshow"><?php echo $vo['topic_remarks']; ?></span> 
          </div> 
          <ul class="info-list"> 
           <li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['topic_name']; ?></a></li> 
           <li><span><?php echo $vo['topic_hits']; ?>次播放</span></li> 
          </ul> 
		  </li> 
		  <?php endforeach; endif; else: echo "" ;endif; ?>
       </div > 
       </div > 
      </div> 
     </div> 
    </div>
 </div> 
  <!-- 分类列表 -->
<script type="text/javascript" src="<?php echo $maccms['path_ads']; ?>index-1400-1.js" charset="utf-8"></script>
 <!-- 分类列表 -->
  <?php $__TAG__ = '{"order":"asc","by":"sort","ids":"1","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>  
<div class="yk-pannel clearfix"> 
   <div class="yk-pannel-box"> 
    <div class="yk-pannel_hd"> 
     <div class="yk-pannel_head clearfix"> 
	 <h3 class="title"><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?>  </a></h3> 
	  <div id="statetab1">
	  <ul class="t_tab">
        <li class="active"><a href="<?php echo mac_url_type($vo); ?>">最新</a></li>

			<?php $__TAG__ = '{"num":"8","parent":"1","order":"asc","by":"sort","mid":"vod","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<li><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a> </li>
			<?php endforeach; endif; else: echo "" ;endif; ?> 
		</ul>
     </div> 
    </div> 
	</div>
	 
     
	  <div class="yk-pannel_bd statetab1 clearfix"> 
        
   <ul class="index-list-1 tabcon clearfix active">
<?php $__TAG__ = '{"num":"12","ids":"all","type":"1","order":"asc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<li class="yk-pack"><div class="p-thumb"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ></a><img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" style="display: inline;"><span class="playshow"><?php echo $vo['vod_remarks']; ?></span></div><ul class="info-list"><li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li><span>主演：	<?php echo $vo['vod_actor']; ?></span></ul></li> 
<?php endforeach; endif; else: echo "" ;endif; ?>
   </ul>
<ul class="index-list-1 tabcon clearfix">
<?php $__TAG__ = '{"num":"12","ids":"all","type":"7","order":"asc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<li class="yk-pack"><div class="p-thumb"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ></a><img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" style="display: inline;"><span class="playshow"><?php echo $vo['vod_remarks']; ?></span></div><ul class="info-list"><li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li><span>主演：	<?php echo $vo['vod_actor']; ?></span></ul></li> 
<?php endforeach; endif; else: echo "" ;endif; ?>
   </ul> 
<ul class="index-list-1 tabcon clearfix">
<?php $__TAG__ = '{"num":"12","ids":"all","type":"8","order":"asc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<li class="yk-pack"><div class="p-thumb"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ></a><img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" style="display: inline;"><span class="playshow"><?php echo $vo['vod_remarks']; ?></span></div><ul class="info-list"><li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li><span>主演：	<?php echo $vo['vod_actor']; ?></span></ul></li> 
<?php endforeach; endif; else: echo "" ;endif; ?>
   </ul> 
<ul class="index-list-1 tabcon clearfix">
<?php $__TAG__ = '{"num":"12","ids":"all","type":"9","order":"asc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<li class="yk-pack"><div class="p-thumb"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ></a><img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" style="display: inline;"><span class="playshow"><?php echo $vo['vod_remarks']; ?></span></div><ul class="info-list"><li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li><span>主演：	<?php echo $vo['vod_actor']; ?></span></ul></li> 
<?php endforeach; endif; else: echo "" ;endif; ?>
   </ul> 
<ul class="index-list-1 tabcon clearfix">
<?php $__TAG__ = '{"num":"12","ids":"all","type":"10","order":"asc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<li class="yk-pack"><div class="p-thumb"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ></a><img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" style="display: inline;"><span class="playshow"><?php echo $vo['vod_remarks']; ?></span></div><ul class="info-list"><li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li><span>主演：	<?php echo $vo['vod_actor']; ?></span></ul></li> 
<?php endforeach; endif; else: echo "" ;endif; ?>
   </ul> 
<ul class="index-list-1 tabcon clearfix">
<?php $__TAG__ = '{"num":"12","ids":"all","type":"11","order":"asc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<li class="yk-pack"><div class="p-thumb"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ></a><img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" style="display: inline;"><span class="playshow"><?php echo $vo['vod_remarks']; ?></span></div><ul class="info-list"><li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li><span>主演：	<?php echo $vo['vod_actor']; ?></span></ul></li> 
<?php endforeach; endif; else: echo "" ;endif; ?>
   </ul> 
<ul class="index-list-1 tabcon clearfix">
<?php $__TAG__ = '{"num":"12","ids":"all","type":"12","order":"asc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<li class="yk-pack"><div class="p-thumb"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ></a><img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" style="display: inline;"><span class="playshow"><?php echo $vo['vod_remarks']; ?></span></div><ul class="info-list"><li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li><span>主演：	<?php echo $vo['vod_actor']; ?></span></ul></li> 
<?php endforeach; endif; else: echo "" ;endif; ?>
   </ul> 
<ul class="index-list-1 tabcon clearfix">
<?php $__TAG__ = '{"num":"12","ids":"all","type":"13","order":"asc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<li class="yk-pack"><div class="p-thumb"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ></a><img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" style="display: inline;"><span class="playshow"><?php echo $vo['vod_remarks']; ?></span></div><ul class="info-list"><li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li><span>主演：	<?php echo $vo['vod_actor']; ?></span></ul></li> 
<?php endforeach; endif; else: echo "" ;endif; ?>
   </ul> 
<ul class="index-list-1 tabcon clearfix">
<?php $__TAG__ = '{"num":"12","ids":"all","type":"14","order":"asc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<li class="yk-pack"><div class="p-thumb"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ></a><img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" style="display: inline;"><span class="playshow"><?php echo $vo['vod_remarks']; ?></span></div><ul class="info-list"><li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li><span>主演：	<?php echo $vo['vod_actor']; ?></span></ul></li> 
<?php endforeach; endif; else: echo "" ;endif; ?>
   </ul> 
    </div> 
   </div> 
  </div>
 
<?php endforeach; endif; else: echo "" ;endif; $__TAG__ = '{"order":"asc","by":"sort","ids":"2","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>  
<div class="yk-pannel clearfix"> 
   <div class="yk-pannel-box"> 
    <div class="yk-pannel_hd"> 
     <div class="yk-pannel_head clearfix"> 
	 <h3 class="title"><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?>  </a></h3> 
	  <div id="statetab">
	  <ul class="t_tab">
        <li class="active"><a href="<?php echo mac_url_type($vo); ?>">最新</a></li>
			<?php $__TAG__ = '{"num":"7","parent":"2","order":"asc","by":"sort","mid":"vod","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<li><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a> </li>
			<?php endforeach; endif; else: echo "" ;endif; ?> 
		</ul>
     </div> 
    </div> 
	</div>
	 
     
	  <div class="yk-pannel_bd statetab clearfix"> 

<ul class="index-list-1 tabcon clearfix active">
<?php $__TAG__ = '{"num":"12","ids":"all","type":"2","order":"asc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<li class="yk-pack"><div class="p-thumb"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ></a><img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" style="display: inline;"><span class="playshow"><?php echo $vo['vod_remarks']; ?></span></div><ul class="info-list"><li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li><span>主演：	<?php echo $vo['vod_actor']; ?></span></ul></li> 
<?php endforeach; endif; else: echo "" ;endif; ?>
     </ul> 
<ul class="index-list-1 tabcon clearfix">
<?php $__TAG__ = '{"num":"12","ids":"all","type":"15","order":"asc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<li class="yk-pack"><div class="p-thumb"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ></a><img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" style="display: inline;"><span class="playshow"><?php echo $vo['vod_remarks']; ?></span></div><ul class="info-list"><li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li><span>主演：	<?php echo $vo['vod_actor']; ?></span></ul></li> 
<?php endforeach; endif; else: echo "" ;endif; ?>
     </ul>   
<ul class="index-list-1 tabcon clearfix">
<?php $__TAG__ = '{"num":"12","ids":"all","type":"16","order":"asc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<li class="yk-pack"><div class="p-thumb"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ></a><img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" style="display: inline;"><span class="playshow"><?php echo $vo['vod_remarks']; ?></span></div><ul class="info-list"><li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li><span>主演：	<?php echo $vo['vod_actor']; ?></span></ul></li> 
<?php endforeach; endif; else: echo "" ;endif; ?>
     </ul>    
<ul class="index-list-1 tabcon clearfix">
<?php $__TAG__ = '{"num":"12","ids":"all","type":"17","order":"asc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<li class="yk-pack"><div class="p-thumb"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ></a><img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" style="display: inline;"><span class="playshow"><?php echo $vo['vod_remarks']; ?></span></div><ul class="info-list"><li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li><span>主演：	<?php echo $vo['vod_actor']; ?></span></ul></li> 
<?php endforeach; endif; else: echo "" ;endif; ?>
     </ul>    
<ul class="index-list-1 tabcon clearfix">
<?php $__TAG__ = '{"num":"12","ids":"all","type":"18","order":"asc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<li class="yk-pack"><div class="p-thumb"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ></a><img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" style="display: inline;"><span class="playshow"><?php echo $vo['vod_remarks']; ?></span></div><ul class="info-list"><li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li><span>主演：	<?php echo $vo['vod_actor']; ?></span></ul></li> 
<?php endforeach; endif; else: echo "" ;endif; ?>
     </ul>      
    </div> 
   </div> 
  </div>
 
<?php endforeach; endif; else: echo "" ;endif; ?>

<!--列表-->
<script type="text/javascript" src="<?php echo $maccms['path_ads']; ?>index-1400-2.js" charset="utf-8"></script><!--广告END-->
<!--列表3-->
 <?php $__TAG__ = '{"order":"asc","by":"sort","ids":"3","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?> 
 <div class="yk-pannel clearfix"> 
   <div class="yk-pannel-box"> 
    <div class="yk-pannel_hd"> 
     <div class="yk-pannel_head clearfix"> 
      <h3 class="title"><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?>  </a></h3> 
	  <div class="title_action">
	 <ul class="mod_link_list">
	 <li class="item"><a href="<?php echo mac_url_type($vo); ?>"   class="link"><i class="icon_text"><?php echo $vo['type_name']; ?></i></a></li>
    </ul>
	  </div>
     </div> 
    </div> 
    <div class="yk-pannel_bd clearfix"> 
     <ul class="index-list-2 active clearfix" id="MainTab-1">
	 <?php $__TAG__ = '{"num":"1","type":"3","order":"asc","by":"time","level":"all","key":"snum","id":"vo"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $snum = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($snum % 2 );++$snum;?>
 <li class="yk-pack yk-list"><div class="p-thumb"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ></a>
 <img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" style="display: inline;">
 <span class="playshow"><?php echo date('Y-m-d',$vo['vod_time_add']); ?></span></div>
 <ul class="info-list"><li class="title">
 <a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li><span><?php echo $vo['vod_blurb']; ?> </span></ul></li> 
 
<?php endforeach; endif; else: echo "" ;endif; $__TAG__ = '{"num":"8","type":"3","order":"asc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
 <li class="yk-pack">
<div class="p-thumb">
<a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ></a>
<img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" style="display: inline;">
<span class="playshow"><?php echo $vo['vod_time_add']; ?></span>
</div>
<ul class="info-list">
<li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li>
<span><?php echo $vo['vod_actor']; ?>  </span>
</ul>
</li>  <?php endforeach; endif; else: echo "" ;endif; ?>
     </ul>
    </div> 
   </div> 
  </div>
<?php endforeach; endif; else: echo "" ;endif; ?>
<!--列表3-->

<!--列表4-->
 <?php $__TAG__ = '{"order":"asc","by":"sort","ids":"4","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?> 
 <div class="yk-pannel clearfix"> 
   <div class="yk-pannel-box"> 
    <div class="yk-pannel_hd"> 
     <div class="yk-pannel_head clearfix"> 
      <h3 class="title"><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?>  </a></h3> 
	  <div class="title_action">
	 <ul class="mod_link_list">
	 <li class="item"><a href="<?php echo mac_url_type($vo); ?>"   class="link"><i class="icon_text"><?php echo $vo['type_name']; ?></i></a></li>
    </ul>
	  </div>
     </div> 
    </div> 
    <div class="yk-pannel_bd clearfix"> 
     <ul class="index-list-2 active clearfix" id="MainTab-1">
<?php $__TAG__ = '{"num":"1","type":"4","order":"asc","by":"time","level":"all","key":"snum","id":"vo"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $snum = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($snum % 2 );++$snum;?>
 <li class="yk-pack yk-list"><div class="p-thumb"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ></a><img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" style="display: inline;"><span class="playshow"><?php echo $vo['vod_time_add']; ?></span></div><ul class="info-list"><li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li><span><?php echo $vo['vod_blurb']; ?> </span></ul></li> 
<?php endforeach; endif; else: echo "" ;endif; $__TAG__ = '{"num":"8","type":"4","order":"asc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
      <li class="yk-pack">
<div class="p-thumb">
<a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ></a>
<img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" style="display: inline;">
<span class="playshow"><?php echo $vo['vod_time_add']; ?></span>
</div>
<ul class="info-list">
<li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li>
<span><?php echo $vo['vod_actor']; ?>  </span>
</ul>
</li>  

<?php endforeach; endif; else: echo "" ;endif; ?>
     </ul>
    </div> 
   </div> 
  </div>
<?php endforeach; endif; else: echo "" ;endif; ?>
 <!--列表4-->
<!--
<div class="yk-pannel clearfix"> 
     <div class="yk-pannel-box"> 
      <div class="yk-pannel_hd"> 
       <div class="yk-pannel_head clearfix"> 
        <a class="more text-muted pull-right" href="#l">更多</a> 
        <h3 class="title"><a href="#">花絮·剧透</a></h3> 
       </div> 
      </div> 
      <div class="yk-pannel_bd clearfix"> 
	  	  <div id="myCarousel" class="carousel slide1">
	  <div class="carousel-inner">
       <div class="yk-vodlist clearfix item active"> 
	   
<?php $__TAG__ = '{"order":"asc","by":"rnd","num":"12","paging":"false","ids":"all","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>	
	    <li class="yk-pack"> 
          <div class="p-thumb"> 
           <a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ></a> 
           <img class="quic ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" /> 
           <span class="playshow"><?php echo $vo['vod_remarks']; ?></span> 
          </div> 
          <ul class="info-list"> 
           <li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li> 
           <li><span><?php echo $vo['vod_hits']; ?>次播放</span></li> 
          </ul> 
		  </li> 
		  <?php endforeach; endif; else: echo "" ;endif; ?>
		  
		  
       </div > 
       </div > 
      </div> 
     </div> 
    </div>
 </div> 	   
  列表4-->

<div class="yk-pannel clearfix"> 
     <div class="yk-pannel-box"> 
      <div class="yk-pannel_hd"> 
       <div class="yk-pannel_head clearfix"> 
        <a class="more text-muted pull-right" href="/movie/5.html">更多</a> 
        <h3 class="title"><a href="/movie/5.html">视频·MV</a></h3> 
       </div> 
      </div> 
      <div class="yk-pannel_bd clearfix"> 
	  	  <div id="myCarousel" class="carousel slide1">
	  <div class="carousel-inner">
       <div class="yk-vodlist clearfix item active"> 
	   
<?php $__TAG__ = '{"order":"asc","by":"time","num":"12","type":"5","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>	
	    <li class="yk-pack"> 
          <div class="p-thumb"> 
           <a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ></a> 
           <img class="quic ff-img" src="<?php echo mac_url_img($vo['vod_pic']); ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" /> 
           <span class="playshow"><?php echo $vo['vod_remarks']; ?></span> 
          </div> 
          <ul class="info-list"> 
           <li class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></li> 
           <li><span><?php echo $vo['vod_hits']; ?>次播放</span></li> 
          </ul> 
		  </li> 
		  <?php endforeach; endif; else: echo "" ;endif; ?>
		  
		  
       </div > 
       </div > 
      </div> 
     </div> 
    </div>
 </div> 
 
 
 <div class="yk-pannel clearfix"> 
     <div class="yk-pannel-box"> 
      <div class="yk-pannel_hd"> 
       <div class="yk-pannel_head clearfix"> 
        <h3 class="title">友情·链接</h3> 
       </div> 
      </div> 
      <div class="yk-pannel_bd clearfix"> 
	  	   <div class="yk-text-link">
		      <?php $__TAG__ = '{"num":"10","type":"all","order":"asc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Link")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
  <li><a href="<?php echo $vo['link_url']; ?>"  ><?php echo $vo['link_name']; ?></a></li>
     <?php endforeach; endif; else: echo "" ;endif; ?>

  </div>
     </div> 
    </div>
 </div>
</div>
</div>
	 
<!-- 友情链接 -->
 
 
 
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
