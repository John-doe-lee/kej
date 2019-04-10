<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:38:"template/youku_pc/html/vod/detail.html";i:1538148802;s:56:"/var/www/html/template/youku_pc/html/public/include.html";i:1538148802;s:54:"/var/www/html/template/youku_pc/html/public/heada.html";i:1538148804;s:53:"/var/www/html/template/youku_pc/html/public/foot.html";i:1538148804;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
     <title><?php echo $obj['vod_name']; ?> - <?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="<?php echo $obj['vod_name']; ?>,<?php echo $obj['vod_name']; ?>在线观看,<?php echo $obj['vod_name']; ?>全集,电视剧<?php echo $obj['vod_name']; ?>,<?php echo $obj['vod_name']; ?>下载,<?php echo $obj['vod_name']; ?>主题曲,<?php echo $obj['vod_name']; ?>剧情,<?php echo $obj['vod_name']; ?>演员表">
<meta name="description" content="<?php echo $obj['vod_name']; ?> <?php echo $obj['vod_name']; ?>在线观看 <?php echo $obj['vod_name']; ?>全集 电视剧<?php echo $obj['vod_name']; ?>；<?php echo $obj['vod_name']; ?>">

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
<div class="top-main channel-top-main" id="main-bg">	<div class="test"></div>
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
                          <img src="<?php echo $maccms['path_tpl']; ?>youku/images/user.png" title="未登录"> </a>			                  </div>
                </div>	
		     </div>
			</div>
        </div>
      </div>
<!--顶部结束-->


<!--顶部结束--> 


<div class="c-top">
        <div class="c-top-main-wrap">
            <div class="c-top-main">
    <div class="s-top g-clear">
    <div class="s-top-left">
        <div class="s-cover playlike">

    <a href="<?php echo mac_url_vod_play($obj,['sid'=>1,'nid'=>1]); ?>" class="g-playicon s-cover-img">
        <img class="ff-img" data-original="<?php echo mac_url_img($obj['vod_pic']); ?>"src="<?php echo mac_url_img($obj['vod_pic']); ?>">
	<span class="playicon"></span>
            </a>
		</div>  
  </div>
    <div class="s-top-right">
        <div class="s-top-info">
            <div class="s-top-info-title">
                <div class="title-left g-clear">
                    <h1><?php echo $obj['vod_name']; ?></h1>
					<div class="video_score">
			<div class="score_v"><span class="score"><?php echo $obj['vod_score']; ?> </span><span class="f">分</span></div>
			<div class="score_db" title="豆瓣评分：<?php echo $obj['vod_score']; ?> "><span class="db">豆</span><span class="score"><?php echo $vo['vod_score']; ?> </span></div>
					</div>
				</div>
                <p class="tag"><?php echo $obj['vod_remarks']; ?>  </p></div>
            <div class="s-top-info-detail g-clear">
                <div class="g-clear item-wrap">
                    <p class="item"><span>地区：</span><?php echo $obj['vod_area']; ?></p>
                    <p class="item item-actor"><span>年代：</span><?php echo $obj['vod_year']; ?>  </p>
					<p style="clear:both"></p>
                    <p class="item item-director">
                        <span>类型：</span><?php echo $obj['vod_class']; ?> </p>
                    <p class="item item-actor">
                        <span>导演：</span> <?php echo $obj['vod_director']; ?>  </p>
                   <p class="item item-type"><span>演员：</span> <?php echo $obj['vod_actor']; ?>  </p>
                </div>
                <p class="item-desc js-open-wrap"><span class="desc">简介：</span><span id="cText"><?php echo $obj['vod_content']; ?> 
</span><script language="javascript"> var conText = ""; hideText("cText", 110, "", ""); </script></p>
            </div>
			
			 <div class="s-top-info-detail g-clear"><div class="item-desc js-open-wrap"><span class="ff-desc">分享给朋友：</span>
               <div class="ff-share"><div class="bdsharebuttonbox bdshare-button-style0-24">
			    
              <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
      <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
      <a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
      <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
      <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
      <a href="#" class="bds_tqf" data-cmd="tqf" title="分享到腾讯朋友"></a>
      <a href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a>
      <a href="#" class="bds_fbook" data-cmd="fbook" title="分享到Facebook"></a>
      <a href="#" class="bds_kaixin001" data-cmd="kaixin001" title="分享到复制网址"></a>
      <a href="#" class="bds_twi" data-cmd="twi" title="分享到复制网址"></a>
      <a class="bds_more" data-cmd="more" title="更多"></a>
	  <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"32"},"share": [{"bdSize": 32,bdCustomStyle: '<?php echo $maccms['path_tpl']; ?>youku/css/share.css'}]};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)]; </script>
     
                 </div>
				 
				 </div>
                </div>
			 <div class="s-top-info-detail g-clear">
			 
			 <div class="playBtnCon clearfix">

			 			 <a href="<?php echo mac_url_vod_play($obj,['sid'=>1,'nid'=>1]); ?>"   class="v_blue_btn latestBtn">
						 <i class="iconfont"></i>立即播放</a>
									<div class="playSource">
                     <span class="sTit">来源：</span>
					 <span class="ea-site ea-site-<?php echo $obj['vod_play_from']; ?>">
					 <a href="<?php echo mac_url_vod_play($obj,['sid'=>1,'nid'=>1]); ?>">
                       <?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>
					   <?php echo $vo['player_info']['show']; ?> 
					   <span class="c-gray">（免费）</span><?php endforeach; endif; else: echo "" ;endif; ?></a></span>                          </div>					</div>
				</div>
			</div>
			</div>
		  </div>
		 </div>
		</div>
		</div>
	</div>
 
  
<div class="main-box"> 
 <script type="text/javascript" src="<?php echo $maccms['path_ads']; ?>list-1400-1.js" charset="utf-8"></script> 
		<div class="c-body-left">
			<div class="d-play-mod d-play-top">
						<div class="s-top-list">
			 <div class="s-top-list-ji">
				<h2 class="title g-clear">全部剧集</h2>
			<div class="s-playsite">
			<em>当前选择：</em>
              <div class="js-current s-playsite-current">
              <?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>
			 <span class="ea-site ea-site-<?php echo $vo['player_info']['from']; ?>" <?php if($key == '1'): ?>style="display:block"<?php else: ?>style="display:none"<?php endif; ?> ><?php echo $vo['player_info']['show']; ?></span>
<?php endforeach; endif; else: echo "" ;endif; ?>
                  </div>
			<div class="sites">
					<div class="sites-inner">
						<p class="arrow"></p>
						<ul class="js-list">
                          
                        <?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>
                          <li <?php if($key == '1'): ?>class="cur"<?php else: endif; ?>><span class="ea-site ea-site-<?php echo $vo['player_info']['from']; ?>"><?php echo $vo['player_info']['show']; ?></span></li>
                           <?php endforeach; endif; else: echo "" ;endif; ?>	
                      </ul>
					</div>
				</div> 
		  </div>
        <div class="num-tab js-tabs">
	          <?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>
                   <div class="num-tab-main g-clear js-tab  <?php if($key == '1'): ?>cur<?php else: endif; ?>">
                     <?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key2=>$vo2): ?>
                     <a href="<?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>$vo2['nid']]); ?>"><?php echo $key2; ?></a>
                     <?php endforeach; endif; else: echo "" ;endif; ?>
          </div> 
            <?php endforeach; endif; else: echo "" ;endif; ?>
   </div>
   </div>
</div>

		
	

<div class="d-play-side">
<!-- 预告花絮 -->
	<div class="d-play-hd">
	<div class="d-play-title">
		<h2 class="title">猜您喜欢</h2>
			<div class="d-play-showmore">
			<a class="d-play-link" href="#"><span class="icon_text">更多</span><i class="icon_sm icon_right_sm"></i></a>	</div>				
  </div>
	<div class="d-play-default">
	
<?php $__TAG__ = '{"order":"desc","by":"rnd","num":"10","paging":"false","ids":"all","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>	
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
 </div>
</div>
<!-- 相关推荐 -->
 <div class="summary-expend">
	 <div class="module-title"><h2>相关推荐</h2></div>
		<div class="play-actor">
		<div id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
		<div class="index-list-1 item active">
 <?php $__TAG__ = '{"num":"10","type":"current","level":"all","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			
			
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

            
            <?php endforeach; endif; else: echo "" ;endif; ?>		</div>
	</div>
	<a class="mbtn btnprev" href="#myCarousel" role="button" data-slide="prev"><span class="chevron-left" aria-hidden="true"></span></a>
		<a class="mbtn btnnext" href="#myCarousel" role="button" data-slide="next"><span class="chevron-right" aria-hidden="true"></span></a>	</div>
	</div>
	</div>
		</div>
	</div>
 </div> 

   <div class="c-body-right">
   <div class="d-play-mod d-play-top" id="guideSlider">
	<div class="module-title"><h2><?php echo $obj['type']['type_name']; ?> 榜单</h2></div>
   <ul class="m-top-toplist guide-list">
   <?php $__TAG__ = '{"type":"current","num":"20","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if($key < 4): ?>
     <li class="guide ">	
  <p class="txt"><em class="on"><?php echo $key; ?> </em><span><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></span></p>
			<p class="con">
				<span class="screenshot playlike">
					<a href="<?php echo mac_url_vod_detail($vo); ?>"  >
					<img class="ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>">
					<span class="playicon"></span><span class="playshow"><span class="p-num"><?php echo $vo['vod_score']; ?> </span></span>
					</a>
				</span>
				<span class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ><?php echo $vo['vod_name']; ?></a></span>
				<span class="play"><em>年代：</em><?php echo $vo['vod_year']; ?> </span>
				<span class="play"><em>地区：</em><?php echo $vo['vod_area']; ?> </span>
				<span class="name"><em>导演：</em><?php echo $vo['vod_director']; ?> </span>
				<span class="name"><em>主演：</em><?php echo $vo['vod_actor']; ?></span>
				<span class="tent"><em>简介：</em>	<?php echo $vo['vod_content']; ?> </span>
			</p>
		</li>
       
<?php if($key == 1): endif; else: ?>
<li class="guide ">	
  <p class="txt"><em ><?php echo $key; ?> </em><span><a href="<?php echo mac_url_vod_detail($vo); ?>"  ><?php echo $vo['vod_name']; ?></a></span></p>
			<p class="con">
				<span class="screenshot playlike">
					<a href="<?php echo mac_url_vod_detail($vo); ?>"  >
					<img class="ff-img" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>" src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>">
					<span class="playicon"></span><span class="playshow"><span class="p-num"><?php echo $vo['vod_score']; ?> </span></span>
					</a>
				</span>
				<span class="title"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"  ><?php echo $vo['vod_name']; ?></a></span>
				<span class="play"><em>年代：</em><?php echo $vo['vod_year']; ?> </span>
				<span class="play"><em>地区：</em><?php echo $vo['vod_area']; ?> </span>
				<span class="name"><em>导演：</em><?php echo $vo['vod_director']; ?> </span>
				<span class="name"><em>主演：</em><?php echo $vo['vod_actor']; ?></span>
				<span class="tent"><em>简介：</em>	<?php echo $vo['vod_content']; ?> </span>
			</p>
		</li>
		<?php endif; endforeach; endif; else: echo "" ;endif; ?>			</ul>
		</div>

	   </div>
     </div>
   </div>
 

<script>
function series(a, b, c) {
	var f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, d = a.find("a").length,
		e = WidthScreen ? b : c;
		if (d > 45) {
		for (g = c + 24; d - (b / 2 - 2) / 2 > g; g++) a.find("a").eq(g).addClass("Hide");
		u = "<a target='_self' href='javascript:void(0)' class='more' id='playurlmore' title='展开'>......</a>", a.find("a").eq(c + 24).after(u), v = a.find(".more"), w = !1, v.click(function() {
			w ? (a.find(".Hide").hide(), 
			$(this).html("......"), 
			$(this).append(''), 
			$(this).insertAfter(a.find("a").eq(c + 24)), w = !1) : (a.find(".Hide").show(), 
			$(this).html("收起"), $(this).append(''), $(this).insertAfter(a.find("a:last")), w = !0)
		})
	}
}(jQuery), WidthScreen = !0, $(document).ready(function() {
	
});var $guideSlider = $("#guideSlider").eq(0);
$guideSlider.find(".guide-list .guide").hover(function() {
$(this).addClass("sel").siblings().removeClass("sel");
});


</script>
 
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