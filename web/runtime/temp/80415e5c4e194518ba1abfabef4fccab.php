<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:54:"/var/www/html/application/admin/view/addon/config.html";i:1525338890;s:53:"/var/www/html/application/admin/view/public/head.html";i:1522628860;s:53:"/var/www/html/application/admin/view/public/foot.html";i:1526021730;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title; ?> - 苹果CMS</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <link rel="stylesheet" href="/static/css/admin_style.css">
    <script type="text/javascript" src="/static/js/jquery.js"></script>
    <script type="text/javascript" src="/static/layui/layui.js"></script>
    <script>
        var ROOT_PATH="",ADMIN_PATH="<?php echo $_SERVER['SCRIPT_NAME']; ?>", MAC_VERSION='v10';
    </script>
</head>
<body>
<div class="page-container p10">
    <div class="showpic" style="display:none;"><img class="showpic_img" width="120" height="160"></div>

    <form class="layui-form layui-form-pane" method="post" action="">
        <input id="admin_id" name="name" type="hidden" value="<?php echo $info['name']; ?>">

        <?php foreach($config as $item): ?>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo $item['title']; ?>：</label>

                <?php switch($item['type']): case "string": ?>
                <div class="layui-input-inline w500 ">
                <input type="text" name="row[<?php echo $item['name']; ?>]" value="<?php echo $item['value']; ?>" class="layui-input" data-rule="<?php echo $item['rule']; ?>" data-tip="<?php echo $item['tip']; ?>" <?php echo $item['extend']; ?> />
                </div>
            <?php break; case "text": ?>
                <div class="layui-input-inline w500 ">
                <textarea name="row[<?php echo $item['name']; ?>]" class="layui-input" data-rule="<?php echo $item['rule']; ?>" rows="5" data-tip="<?php echo $item['tip']; ?>" <?php echo $item['extend']; ?>><?php echo $item['value']; ?></textarea>
                </div>
                <?php break; case "array": if(is_array($item['value']) || $item['value'] instanceof \think\Collection || $item['value'] instanceof \think\Paginator): if( count($item['value'])==0 ) : echo "" ;else: foreach($item['value'] as $key=>$vo): ?>

            <div class="layui-input-block">
                <?php echo $key; ?>:<input type="text" name="row[<?php echo $item['name']; ?>][<?php echo $key; ?>]" value="<?php echo $vo; ?>" class="layui-input w500"  />
            </div>
                <?php endforeach; endif; else: echo "" ;endif; break; case "datetime": ?>
            <div class="layui-input-inline w500 ">
                <input type="text" name="row[<?php echo $item['name']; ?>]" value="<?php echo $item['value']; ?>" class="layui-input datetimepicker" data-tip="<?php echo $item['tip']; ?>" data-rule="<?php echo $item['rule']; ?>" <?php echo $item['extend']; ?> />
                </div>
                <?php break; case "number": ?>
            <div class="layui-input-inline  w500">
                <input type="number" name="row[<?php echo $item['name']; ?>]" value="<?php echo $item['value']; ?>" class="layui-input" data-tip="<?php echo $item['tip']; ?>" data-rule="<?php echo $item['rule']; ?>" <?php echo $item['extend']; ?> />
                </div>
                <?php break; case "checkbox": ?>
            <div class="layui-input-block  ">
                <?php if(is_array($item['content']) || $item['content'] instanceof \think\Collection || $item['content'] instanceof \think\Paginator): if( count($item['content'])==0 ) : echo "" ;else: foreach($item['content'] as $key=>$vo): ?>
                <input id="row[<?php echo $item['name']; ?>][]-<?php echo $key; ?>" name="row[<?php echo $item['name']; ?>][]" type="checkbox" value="<?php echo $key; ?>" data-tip="<?php echo $item['tip']; ?>" title="<?php echo $vo; ?>" <?php if(in_array(($key), is_array($item['value'])?$item['value']:explode(',',$item['value']))): ?>checked<?php endif; ?> />
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <?php break; case "radio": ?>
            <div class="layui-input-block  ">
                <?php if(is_array($item['content']) || $item['content'] instanceof \think\Collection || $item['content'] instanceof \think\Paginator): if( count($item['content'])==0 ) : echo "" ;else: foreach($item['content'] as $key=>$vo): ?>
                <input id="row[<?php echo $item['name']; ?>]-<?php echo $key; ?>" name="row[<?php echo $item['name']; ?>]" type="radio" value="<?php echo $key; ?>" data-tip="<?php echo $item['tip']; ?>" title="<?php echo $vo; ?>" <?php if(in_array(($key), is_array($item['value'])?$item['value']:explode(',',$item['value']))): ?>checked<?php endif; ?> />
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <?php break; case "select": case "selects": ?>
            <div class="layui-input-block  ">
                <select name="row[<?php echo $item['name']; ?>]<?php echo $item['type']=='selects'?'[]':''; ?>" class="layui-input selectpicker" data-tip="<?php echo $item['tip']; ?>" <?php echo $item['type']=='selects'?'multiple':''; ?>>
                    <?php if(is_array($item['content']) || $item['content'] instanceof \think\Collection || $item['content'] instanceof \think\Paginator): if( count($item['content'])==0 ) : echo "" ;else: foreach($item['content'] as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($item['value'])?$item['value']:explode(',',$item['value']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                </div>
                <?php break; case "image": case "images": ?>
            <div class="layui-input-inline w500 ">
                <input id="c-<?php echo $item['name']; ?>" class="layui-input upload-input upload-img" size="37" name="row[<?php echo $item['name']; ?>]" type="text" value="<?php echo $item['value']; ?>" data-tip="<?php echo $item['tip']; ?>">
                </div>
            <div class="layui-input-inline ">
                <button type="button" class="layui-btn layui-upload" lay-data="{data:{thumb:0,thumb_class:''}}" >上传</button>
                </div>

                <?php break; case "file": case "files": ?>
            <div class="layui-input-inline w500 ">
                <input id="c-<?php echo $item['name']; ?>" class="layui-input upload-input" size="37" name="row[<?php echo $item['name']; ?>]" type="text" value="<?php echo $item['value']; ?>" data-tip="<?php echo $item['tip']; ?>">
            </div>
            <div class="layui-input-inline ">
                <button type="button" class="layui-btn layui-upload" lay-data="{data:{thumb:0,thumb_class:''}}" >上传</button>
            </div>

                <?php break; case "bool": ?>
            <div class="layui-input-block">
                <input id="row[<?php echo $item['name']; ?>]-yes" name="row[<?php echo $item['name']; ?>]" type="radio" value="1" <?php echo !empty($item['value'])?'checked':''; ?> data-tip="<?php echo $item['tip']; ?>" title="是"/>
                <input id="row[<?php echo $item['name']; ?>]-no" name="row[<?php echo $item['name']; ?>]" type="radio" value="0" <?php echo !empty($item['value'])?'':'checked'; ?> data-tip="<?php echo $item['tip']; ?>" title="否"/>
                </div>
                <?php break; endswitch; ?>
            </div>
        <?php endforeach; ?>

        <div class="layui-form-item center">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit" data-child="true">保 存</button>
                <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
            </div>
        </div>
    </form>

</div>
<script type="text/javascript" src="/static/js/admin_common.js"></script>

<script type="text/javascript">
    layui.use(['form','upload', 'layer'], function () {
        // 操作对象
        var form = layui.form
                , layer = layui.layer
                , $ = layui.jquery, upload = layui.upload;;

        upload.render({
            elem: '.layui-upload'
            ,url: "<?php echo url('upload/upload'); ?>?flag=addon"
            ,method: 'post'
            ,before: function(input) {
                layer.msg('文件上传中...', {time:3000000});
            },done: function(res, index, upload) {
                var obj = this.item;
                if (res.code == 0) {
                    layer.msg(res.msg);
                    return false;
                }
                layer.closeAll();
                var input = $(obj).parent().parent().find('.upload-input');
                if ($(obj).attr('lay-type') == 'image') {
                    input.siblings('img').attr('src', res.data.file).show();
                }
                input.val(res.data.file);

            }
        });


        $('.upload-img').hover(function (e){
            var e = window.event || e;
            var imgsrc = $(this).val();
            if(imgsrc.trim()==""){ return; }
            var left = e.clientX+document.body.scrollLeft+20;
            var top = e.clientY+document.body.scrollTop+20;
            $(".showpic").css({left:left,top:top,display:""});
            if(imgsrc.indexOf('://')<0){ imgsrc = ROOT_PATH + '/' + imgsrc;	} else{ imgsrc = imgsrc.replace('mac:','http:'); }
            $(".showpic_img").attr("src", imgsrc);
        },function (e){
            $(".showpic").css("display","none");
        });

    });

</script>

</body>
</html>