<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:40:"template/hdbee_bak/html/gbook/index.html";i:1544256668;s:57:"/var/www/html/template/hdbee_bak/html/public/include.html";i:1544256664;s:54:"/var/www/html/template/hdbee_bak/html/public/head.html";i:1544284764;s:56:"/var/www/html/template/hdbee_bak/html/public/paging.html";i:1544256664;s:54:"/var/www/html/template/hdbee_bak/html/public/foot.html";i:1544256662;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width ,initial-scale = 1,minimum-scale = 1,maximum-scale = 1,user-scalable =no,"/>
    <title>留言板 - <?php echo $maccms['site_name']; ?></title>
    <script type='text/javascript' src='<?php echo $maccms['path_tpl']; ?>js/jquery.js?ver=1.1'></script>
<script src="http://cdn.staticfile.org/jquery/2.1.4/jquery.min.js"></script>
<script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel='stylesheet' id='style-css' href='http://apps.bdimg.com/libs/fontawesome/4.4.0/css/font-awesome.min.css' type='text/css' media=''/>
<link type="text/css" media="all" href="<?php echo $maccms['path_tpl']; ?>css/<?php if($maccms['aid']=="14"): ?>detail.css<?php else: if($maccms['aid']=="15"): ?>play.css<?php else: ?>style.css<?php endif; endif; ?>" rel="stylesheet"/>
<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
<script src="<?php echo $maccms['path']; ?>static/js/home.js"></script>


    <script>
        $(function(){
            MAC.Gbook.Login = <?php echo $gbook['login']; ?>;
            MAC.Gbook.Verify = <?php echo $gbook['verify']; ?>;
            MAC.Gbook.Init();
        });
    </script>
</head>
<link href="<?php echo $maccms['path']; ?>static/css/home.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript">var chenxing ="";</script>
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

 <div class="main">
   <div class="main_inner">
    <div class="main_left" style="width:100%">
     <div class="item_title">
      <h1> 留言求片</h1>
      <div class="single-cat"> 
       <span>发布时间：</span> 2017-4-20
      </div>
     </div>
     <div class="content">
      <div class="content_left">
       <p style="text-align: center;"><a href="http://<?php echo $maccms['site_url']; ?>"><span style="color: #ff0000;"><strong><?php echo $maccms['site_name']; ?></strong></span></a>开通会员屏蔽广告咯</p>
       <p style="text-align: center;">每日签到送积分，每日评论送积分，首次注册送积分</p>
       <p style="text-align: center;">积分可兑换会员，会员可屏蔽全站广告！</p>
       <p style="text-align: center;">查看<a href="<?php echo mac_url('label/wangpan'); ?>">积分规则</a></p>
       <p style="text-align: center;">感谢大家对电影蜜蜂的支持</p>
       <p style="text-align: center;">如有任何意见或者建议，欢迎大家留言，或者加入影迷交流群<a href="#QQ群链接" target="_blank" rel="nofollow"></a><a class="image_cx_cont" data-lightbox="example-set" href="//pub.idqqimg.com/wpa/images/group.png" title="留言求片"><img class="aligncenter" title="电影蜜蜂-影迷交流群" src="//pub.idqqimg.com/wpa/images/group.png" alt="电影蜜蜂-影迷交流群" border="0" /></a></p>
       <div class="dtpost-like cl">
        <a href="javascript:;" data-action="ding" data-id="14428" class="favorite"><i class="fa fa-thumbs-up"></i><span class="count"><em class="ct_ding" style="color: #F58282;">79</em>个赞 </span></a>
<a class="share-btn collect collect-no" href="javascript:void(0);" style="cursor:hand" onclick="MAC.Fav(location.href,document.name);"><i class="fa fa-star"></i><span class="count">收藏</span</a>
        <a class="share-fx" href="javascript:;"><i class="fa fa-share-alt"></i><span class="count">分享</span></a>
        <div class="myshare -mob-share-ui cl">
         <ul class="-mob-share-list" data-url="http://www.hdbee.net/gbook" data-images="//pub.idqqimg.com/wpa/images/group.png">
          <li class="-mob-share-qq" data-type="qq"></li>
          <li class="-mob-share-qzone" data-type="qzone"></li>
          <li class="-mob-share-weixin" data-type="weixin">
           <div class="weixin_qrcode">
            <a class="image_cx_cont" data-lightbox="example-set" href="//pan.baidu.com/share/qrcode?w=200&amp;h=200&amp;url=http://www.hdbee.net/gbook" title="留言求片"><img src="//pan.baidu.com/share/qrcode?w=200&amp;h=200&amp;url=http://www.hdbee.net/gbook" alt="" /></a>
            <span>微信扫码</span>
           </div></li>
          <li class="-mob-share-weibo" data-type="weibo"></li>
          <li class="-mob-share-douban" data-type="douban"></li>
         </ul>
        </div>
       </div>
      </div>
     </div>

    <section class="single-post-comment">
    <?php $__TAG__ = '{"num":"10","paging":"yes","order":"desc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Gbook")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;endforeach; endif; else: echo "" ;endif; ?>
      <h2>留言(<?php echo intval($__PAGING__['record_total']); ?>)</h2>
      <div class="single-post-comment-reply" id="respond">


            <form class="gbook_form">               
                <textarea class="textarea form-control" data-widearea="enable" id="comment" name="gbook_content" placeholder="你怎么看？"></textarea>
                <div class="msg_code">

                
                    <?php if($gbook['verify'] == 1): ?>
                    验证码：<input type="text" name="verify" style="height: 30px;" class="mac_verify">
                    <?php endif; ?>
                <input type="button" class="ladda-button comment-submit-btn gbook_submit submit_btn" value="提交留言">
               
            </form>
        </div>
      </div>

<ul>
<hr />
 <?php $__TAG__ = '{"num":"20","paging":"yes","order":"desc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Gbook")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
  <li class="comment even thread-even depth-1" id="comment-283">
   <div class="comment cf comment_details">
    <div class="avatar left"> 
     <a href="javascript:void(0)"> <img src="/static/images/home/duface.png" class="avatar" width="100" height="100" /> </a>
    </div>
    <div id="div-comment-283" class="commenttext">
     <div class="comment-wrapper">
      <div class="postmeta"> 
       <a class="user_info_name" href="javascript:void(0)"><?php echo $vo['gbook_name']; ?></a> 
       <time class="timeago" datetime="<?php echo date('Y-m-d H:i:s',$vo['gbook_time']); ?>"> <?php echo date('Y-m-d H:i:s',$vo['gbook_time']); ?></time> 
      </div>
      <div class="commemt-main">
       <p><?php echo $vo['gbook_content']; ?></p>
      </div>
     </div>
    </div>
   </div>

 <?php if($vo['gbook_reply_time'] > 0): ?>
   <ul class="children">
    <li class="comment byuser comment-author-dybee bypostauthor odd alt depth-2" id="comment-284">
     <div class="comment cf comment_details">
      <div class="avatar left"> 
       <a href="javascript:void(0)"> <img src="/static/images/home/duface.png" class="avatar" width="100" height="100" /> </a>
      </div>
      <div id="div-comment-284" class="commenttext">
       <div class="comment-wrapper">
        <div class="postmeta"> 
         <a class="user_info_name" href="javascript:void(0)">管理员回复</a> 
         <a title="博主" class="vip"></a> 
         <time class="timeago" datetime="<?php echo date('Y-m-d H:i:s',$vo['gbook_reply_time']); ?>"><?php echo date('Y-m-d H:i:s',$vo['gbook_reply_time']); ?></time> 
        </div>
        <div class="commemt-main">
         <p> <?php echo $vo['gbook_reply']; ?></p>
        </div>
       </div>
      </div>
     </div></li>
   </ul></li>
</ul>
<?php endif; endforeach; endif; else: echo "" ;endif; ?>


   
<div class="comment-pagenav"> 

    
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
   </section>
</div>
</div></div>
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
<script type='text/javascript' src='<?php echo $maccms['path_tpl']; ?>js/script.js?ver=1.5'></script>
</body>
</html>