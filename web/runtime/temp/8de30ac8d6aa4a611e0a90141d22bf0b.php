<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:38:"template/hdbee_bak/html/user/favs.html";i:1544256672;s:57:"/var/www/html/template/hdbee_bak/html/public/include.html";i:1544256664;s:54:"/var/www/html/template/hdbee_bak/html/public/head.html";i:1544284764;s:54:"/var/www/html/template/hdbee_bak/html/public/foot.html";i:1544256662;}*/ ?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="initial-scale=1.0,user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
	<title>我的收藏 - 会员中心 - <?php echo $maccms['site_name']; ?></title>
	<meta name="keywords" content="">
	<meta name="description" content="">
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
       <li class="active"><a href="<?php echo url('user/favs'); ?>"><i class="iconfont"></i>我的收藏</a></li>       
       <li><a href="<?php echo url('user/buy'); ?>"><i class="iconfont"></i>积分管理</a></li>      
       <li><a href="<?php echo url('user/upgrade'); ?>"><i class="iconfont"></i>会员服务</a></li>
       <li><a href="<?php echo url('user/orders'); ?>"><i class="iconfont"></i>我的订单</a></li>
       <li><a href="<?php echo url('user/info'); ?>"><i class="iconfont"></i>修改资料</a></li>
       <li><a href="<?php echo url('user/logout'); ?>"><i class="iconfont"></i>退出登录</a></li>
      </ul>
     </div>
    </aside>
     <div class="user-right">
		   <div class="user_contentr">
      <div class="setting_header"> 
       <a class="sh_1"> 我的收藏 </a>
      </div>
            <div class="settin">
       <div class="header_tips">
       	<i class="iconfont"></i>共收藏了 <?php echo $__PAGING__['record_total']; ?> 篇文章
       </div>

		<table width="770" border="0" cellspacing="1" cellpadding="0" class="table">
		  <tr>

			<td width="66" height="36" align="center" valign="middle" bgcolor="#f7f7f7">选择</td>
			<td width="80" align="center" valign="middle" bgcolor="#f7f7f7">编号</td>
			<td width="539" align="center" valign="middle" bgcolor="#f7f7f7">名称</td>
			<td width="80" align="center" valign="middle" bgcolor="#f7f7f7">操作</td>
		  </tr>
		  <form id="form1" name="form1" method="post">
			  <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['ulog_mid'] == 1): ?>
		  <tr>
			<td height="36" align="center" valign="middle" bgcolor="#FFFFFF">
			<input type="checkbox" name="ids[]" id="checkbox" value="<?php echo $vo['ulog_id']; ?>"/></td>
			<td align="center" valign="middle" bgcolor="#FFFFFF"><?php echo $vo['ulog_id']; ?></td>
			<td align="left" valign="middle" bgcolor="#FFFFFF" class="pad">
				<?php if($vo['ulog_mid'] == 1): ?>
				<a target="_blank" href="<?php echo $vo['data']['link']; ?>">[<?php echo $vo['data']['type']['type_name']; ?>] <?php echo $vo['data']['name']; ?></a>
				<?php elseif($vo['ulog_mid'] == 2): ?>
				<a target="_blank" href="<?php echo $vo['data']['link']; ?>">[<?php echo $vo['data']['type']['type_name']; ?>] <?php echo $vo['data']['name']; ?></a>
				<?php elseif($vo['ulog_mid'] == 3): ?>
				<a target="_blank" href="<?php echo $vo['data']['link']; ?>"><?php echo $vo['data']['name']; ?></a>
				<?php endif; ?>
			</td>
			<td align="center" valign="middle" bgcolor="#FFFFFF"><a href="javascript:;" onclick="delData(<?php echo $vo['ulog_id']; ?>,0)" class="delete">删除</a></td>
		  </tr>
		  <?php endif; endforeach; endif; else: echo "" ;endif; ?>
		  </form>
		  <tr>

			<td width="60" height="36" align="center" valign="middle" bgcolor="#f7f7f7"><a href="javascript:;" onClick="MAC.CheckBox.All('ids[]');">全选</a></td>
			<td width="60" align="center" valign="middle" bgcolor="#f7f7f7"><a href="javascript:;" onClick="MAC.CheckBox.Other('ids[]');">反选</a></td>
			<td width="60" align="center" valign="middle" bgcolor="#f7f7f7"><a href="javascript:;" id="btnDel">删除</a></td>
			<td width="60" align="center" valign="middle" bgcolor="#f7f7f7"><a href="javascript:;" id="btnClear">清空</a></td>
		  </tr>
		</table>
		        
		
		
		
		<div class="member-page" style="margin: 0 auto;text-align: center;">
			
			<a class="page_link" href="<?php echo str_replace('PAGELINK',1,$__PAGING__['page_url']); ?>" title="首页">首页</a>
			<a class="page_link" href="<?php echo str_replace('PAGELINK',$__PAGING__['page_prev'],$__PAGING__['page_url']); ?>" title="上一页">上一页</a>
			<?php if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): $i = 0; $__LIST__ = $__PAGING__['page_num'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$num): $mod = ($i % 2 );++$i;if($__PAGING__['page_current'] == $num): ?>
			<a class="page_link page_current" href="javascript:;" title="第<?php echo $num; ?>页"><?php echo $num; ?></a>
			<?php else: ?>
			<a class="page_link" href="<?php echo str_replace('PAGELINK',$num,$__PAGING__['page_url']); ?>" title="第<?php echo $num; ?>页" ><?php echo $num; ?></a>
			<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			<a class="page_link" href="<?php echo str_replace('PAGELINK',$__PAGING__['page_next'],$__PAGING__['page_url']); ?>" title="下一页">下一页</a>
			<a class="page_link" href="<?php echo str_replace('PAGELINK',$__PAGING__['page_total'],$__PAGING__['page_url']); ?>" title="尾页">尾页</a>

		</div>
    </div>
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


<script>
	function delData(ids,all){
		var msg ='删除';
		if(all==1){
			msg='清空';
		}
		if(confirm('确定要'+msg+'记录吗')){
			$.post("<?php echo url('user/ulog_del'); ?>",{ids:ids,type:2,all:all},function(data) {
				if (data.code == '1') {
					alert('删除成功');
					location.reload();
				}else {
					alert('删除失败：' + data.msg);
				}
			}, 'json')
		}
	}
	$("#btnClear").click(function(){
		delData('',1);
	});
	$("#btnDel").click(function(){
		var ids = MAC.CheckBox.Ids('ids[]');
		if(ids==''){
			alert("请至少选择一个数据");
			return;
		}
		delData(ids,0);
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