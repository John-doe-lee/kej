<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:41:"template/hdbee_bak/html/comment/ajax.html";i:1544256668;}*/ ?>
    <?php $__TAG__ = '{"num":"5","paging":"yes","order":"desc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Comment")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;endforeach; endif; else: echo "" ;endif; ?>
  <h2>评论(<?php echo intval($__PAGING__['record_total']); ?>)</h2>
    <!--评论开始-->
    <form class="comment_form cmt_form clearfix"  >
        <input type="hidden" name="comment_pid" value="0">
        <!--评论框-->
         <div class="single-post-comment__form cf">
          
             <textarea class="textarea form-control" data-widearea="enable" id="comment" name="comment_content" placeholder="你怎么看？"></textarea>
        </div>
               
                <div class="smt fr clearfix">
                        <span style="display: none;">
                            <span></span>
                        </span>
                    <?php if($comment['verify'] == 1): ?>
                    验证码:<input class="mac_verify cmt_text" type="text" id="verify" name="verify" />
                    <?php endif; ?>
                    <input class="comment_submit cmt_post" type="button" value="发布">
                </div>
            </div>
        </div>

    </form>

    <div class="cmt_wrap" >

            <?php if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ?>

     <ul>
       <hr />
       <li class="comment even thread-even depth-1" id="comment-1419">
        <div class="comment cf comment_details">
         <div class="avatar left"> 
          <a href="javascript:void(0)"> <img src="/static/images/home/duface.png" class="avatar" width="100" height="100" /> </a>
         </div>
         <div id="div-comment-1419" class="commenttext">
          <div class="comment-wrapper">
           <div class="postmeta"> 
            <a class="user_info_name" href="javascript:void(0)"><?php echo $vo['comment_name']; ?></a> 
            <time class="timeago" datetime="2018-05-03 下午5:09"> <?php echo date('Y-m-d H:i:s',$vo['comment_time']); ?></time> 
            <a style="float: right;" data-id="<?php echo $vo['comment_id']; ?>" rel="nofollow" class="comment_reply"  aria-label="回复给乐乐">回复</a>
            
           </div>
           <div class="commemt-main">
            <p><?php echo mac_em_replace($vo['comment_content']); ?></p>
           </div>
          </div>
         </div>
        </div></li>
      </ul>  









                    <?php if(is_array($vo['sub']) || $vo['sub'] instanceof \think\Collection || $vo['sub'] instanceof \think\Paginator): if( count($vo['sub'])==0 ) : echo "" ;else: foreach($vo['sub'] as $key=>$child): ?>
                    <div class="cmt_item clearfix">
                        <a class="face_wrap fl" href="javascript:;"><img class="face" src="/static/images/home/duface.png"></a>
                        <div class="item_con fl">
                            <p class="top">
                                <a class="name" href="javascript:;"><?php echo $child['comment_name']; ?></a>
                                (<a target="_blank">(<?php echo long2ip($child['comment_ip']); ?>)</a>)
                            </p>
                            <p class="con"><?php echo mac_em_replace($child['comment_content']); ?></p>
                        </div>
                        <div class="gw-action">
                        <span class="click-ding-gw">
                            <a class="comment_digg" data-id="<?php echo $child['comment_id']; ?>" data-type="up" href="javascript:;">
                                <i class="icon-ding"></i>
                                <em class="icon-num"><?php echo $child['comment_up']; ?></em>
                            </a>
                            <a class="comment_digg" data-id="<?php echo $child['comment_id']; ?>" data-type="down" href="javascript:;">
                                <i class="icon-dw"></i>
                                <em class="icon-num"><?php echo $child['comment_down']; ?></em>
                            </a>
                        </span>
                            <a class="comment_report" data-id="<?php echo $child['comment_id']; ?>" href="javascript:;">举报</a>
                        </div>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>

        </div>
    <!--评论结束-->
    <div class="mac_pages" >
        <div class="page_tip">共<?php echo $__PAGING__['record_total']; ?>条数据,当前<?php echo $__PAGING__['page_current']; ?>/<?php echo $__PAGING__['page_total']; ?>页</div>
        <div class="page_info">
            <a class="page_link" href="javascript:void(0);" onclick="MAC.Comment.Show(1)" title="首页">首页</a>
            <a class="page_link" href="javascript:void(0);" onclick="MAC.Comment.Show({'$__PAGING__.page_prev}')" title="上一页">上一页</a>
            <?php if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): if($__PAGING__['page_current'] == $num): ?>
            <a class="page_link page_current" href="javascript:;" title="第<?php echo $num; ?>页"><?php echo $num; ?></a>
            <?php else: ?>
            <a class="page_link" href="javascript:void(0)" onclick="MAC.Comment.Show('<?php echo $num; ?>')" title="第<?php echo $num; ?>页" ><?php echo $num; ?></a>
            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            <a class="page_link" href="javascript:void(0)" onclick="MAC.Comment.Show('<?php echo $__PAGING__['page_next']; ?>')" title="下一页">下一页</a>
            <a class="page_link" href="javascript:void(0)" onclick="MAC.Comment.Show('<?php echo $__PAGING__['page_total']; ?>')" title="尾页">尾页</a>

            <input class="page_input" type="text" placeholder="页码" id="page" autocomplete="off" style="width:40px">
            <button class="page_btn" type="button"  onclick="MAC.Comment.Show($('#page').val())">GO</button>
        </div>
    </div>
