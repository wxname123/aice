<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:37:"./template/pc/rainbow/user\Check.html";i:1507622953;s:40:"./template/pc/rainbow/public\layout.html";i:1506391050;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link href="__PUBLIC__/static/css/main.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/static/css/page.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/static/font/css/font-awesome.min.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="__PUBLIC__/static/font/css/font-awesome-ie7.min.css">
<![endif]-->
<link href="__PUBLIC__/static/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="__PUBLIC__/static/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css"/>
<style type="text/css">html, body { overflow: visible;}</style>
<script type="text/javascript" src="__PUBLIC__/static/js/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/layer/layer.js"></script><!-- 弹窗js 参考文档 http://layer.layui.com/-->
<script type="text/javascript" src="__PUBLIC__/static/js/admin.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/common.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/jquery.mousewheel.js"></script>
<script src="__PUBLIC__/js/myFormValidate.js"></script>
<script src="__PUBLIC__/js/myAjax2.js"></script>
<script src="__PUBLIC__/js/global.js"></script>
    <script type="text/javascript">
    function delfunc(obj){
    	layer.confirm('确认删除？', {
    		  btn: ['确定','取消'] //按钮
    		}, function(){
    		    // 确定
   				$.ajax({
   					type : 'post',
   					url : $(obj).attr('data-url'),
   					data : {act:'del',del_id:$(obj).attr('data-id')},
   					dataType : 'json',
   					success : function(data){
						layer.closeAll();
   						if(data==1){
   							layer.msg('操作成功', {icon: 1});
   							$(obj).parent().parent().parent().remove();
   						}else{
   							layer.msg(data, {icon: 2,time: 2000});
   						}
   					}
   				})
    		}, function(index){
    			layer.close(index);
    			return false;// 取消
    		}
    	);
    }
    
    function selectAll(name,obj){
    	$('input[name*='+name+']').prop('checked', $(obj).checked);
    }   
    
    function get_help(obj){
        layer.open({
            type: 2,
            title: '帮助手册',
            shadeClose: true,
            shade: 0.3,
            area: ['70%', '80%'],
            content: $(obj).attr('data-url'), 
        });
    }
    
    function delAll(obj,name){
    	var a = [];
    	$('input[name*='+name+']').each(function(i,o){
    		if($(o).is(':checked')){
    			a.push($(o).val());
    		}
    	})
    	if(a.length == 0){
    		layer.alert('请选择删除项', {icon: 2});
    		return;
    	}
    	layer.confirm('确认删除？', {btn: ['确定','取消'] }, function(){
    			$.ajax({
    				type : 'get',
    				url : $(obj).attr('data-url'),
    				data : {act:'del',del_id:a},
    				dataType : 'json',
    				success : function(data){
						layer.closeAll();
    					if(data == 1){
    						layer.msg('操作成功', {icon: 1});
    						$('input[name*='+name+']').each(function(i,o){
    							if($(o).is(':checked')){
    								$(o).parent().parent().remove();
    							}
    						})
    					}else{
    						layer.msg(data, {icon: 2,time: 2000});
    					}
    				}
    			})
    		}, function(index){
    			layer.close(index);
    			return false;// 取消
    		}
    	);	
    }
</script>  

</head>

<script src="__PUBLIC__/js/pc_common.js"></script>

<!--物流配置 css -start-->
<style>
    ul.group-list {
        width: 96%;min-width: 1000px; margin: auto 5px;list-style: disc outside none;
    }
    ul.group-list li {
        white-space: nowrap;float: left;
        width: 150px; height: 25px;
        padding: 3px 5px;list-style-type: none;
        list-style-position: outside;border: 0px;margin: 0px;
    }
    .row .table-bordered td .btn,.row .table-bordered td img{
        vertical-align: middle;
    }
    .row .table-bordered td{
        padding: 8px;
        line-height: 1.42857143;
    }
    .table-bordered{
        width: 100%
    }
    .table-bordered tr td{
        border: 1px solid #f4f4f4;
    }
    .btn-success {
        color: #fff;background-color: #449d44;border-color: #398439 solid 1px;
    }
    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
    }
    .col-xs-8 {
        width: 66.66666667%;
    }
    .col-xs-4 {
        width: 33.33333333%;
    }
    .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
        float: left;
    }
    .row .tab-pane h4{
        padding: 10px 0;
    }
    .row .tab-pane h4 input{
        vertical-align: middle;
    }
    .table-striped>tbody>tr:nth-of-type(odd) {
        background-color: #f9f9f9;
    }
    .ncap-form-default .title{
        border-bottom: 0
    }
    .ncap-form-default dl.row, .ncap-form-all dd.opt{
        /*border-color: #F0F0F0;*/
        border: none;
    }
    .ncap-form-default dl.row:hover, .ncap-form-all dd.opt:hover{
        border: none;box-shadow: inherit;
    }
    .addprine{display: inline; }
    .alisth{margin-top: 10px}
    .p_plus strong{cursor: pointer;margin-left: 4px;}
</style>
<!--物流配置 css -end-->
<!--以下是在线编辑器 代码 -->
<!--<script type="text/javascript" src="__ROOT__/public/plugins/Ueditor/ueditor.config.js"></script>-->
<!--<script type="text/javascript" src="__ROOT__/public/plugins/Ueditor/ueditor.all.min.js"></script>-->
<!--<script type="text/javascript" charset="utf-8" src="__ROOT__/public/plugins/Ueditor/lang/zh-cn/zh-cn.js"></script>-->
<!--以上是在线编辑器 代码  end-->
<body style="background-color: #FFF; overflow: auto;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">

    <!-- 操作说明 -->
    <div class="explanation" id="explanation">
        <div class="title" id="checkZoom"><i class="fa fa-lightbulb-o"></i>
            <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
            <span id="explanationZoom" title="收起提示"></span> </div>
        <ul>
            <li>请务必正确按照正确方式添加图片</li>
        </ul>
    </div>
    <!--表单数据-->
    <form method="post"  action="<?php echo U('User/aticleHandle'); ?>" id="addEditGoodsForm">
        <input type="hidden" value="<?php echo \think\Request::instance()->param('is_distribut'); ?>" name="is_distribut" class="input-txt"/>
        <input type="hidden" value="<?php echo $good_id; ?>" name="good_id" class="input-txt"/>
        <!--通用信息-->
        <!--驾驶证上传-->
        <div class="ncap-form-default tab_div_1">

            <dl class="row">
                <dt class="tit">
                    <label>驾驶证上传</label>
                </dt>
                <dd class="opt">
                    <div class="input-file-show">
            <span class="show">
                <a id="img_a" target="_blank" class="nyroModal" rel="gal" href="<?php echo $info['license']; ?>">
                    <i id="img_input_a" class="fa fa-picture-o" onMouseOver="layer.tips('<img src=<?php echo $info['license']; ?>>',this,{tips: [1, '#fff']});" onMouseOut="layer.closeAll();"></i>
                </a>
            </span>
                        <span class="type-file-box">
                <input type="text" id="license" name="license" value="<?php echo $info['license']; ?>" class="type-file-text">
                <input type="button" name="button" id="button1" value="选择上传..." class="type-file-button">
                <input class="type-file-file" onClick="GetUploadify(1,'','image','img_call_back')" size="30" hidefocus="true" nc_type="change_site_logo" title="点击前方预览图可查看大图，点击按钮选择文件并提交表单后上传生效">
            </span>
                    </div>
                    <span class="err"></span>
                    <p class="notic">请上传图片格式文件</p>
                </dd>
            </dl>
        </div>


        <!--身份证上传-->
        <div class="ncap-form-default tab_div_1">
        <dl class="row">
            <dt class="tit">
                <label>身份证正面上传</label>
            </dt>

            <dd class="opt">
                <div class="input-file-show">
            <span class="show">
                <a id="img_b" target="_blank" class="nyroModal" rel="gal" href="<?php echo $info['identi_front']; ?>">
                    <i id="img_input_b" class="fa fa-picture-o" onMouseOver="layer.tips('<img src=<?php echo $info['identi_front']; ?>>',this,{tips: [1, '#fff']});" onMouseOut="layer.closeAll();"></i>
                </a>
            </span>
                    <span class="type-file-box">
                <input type="text" id="identi_front" name="identi_front" value="<?php echo $info['identi_front']; ?>" class="type-file-text">
                <input type="button" name="button" id="button1-b" value="选择上传..." class="type-file-button">
                <input class="type-file-file" onClick="GetUploadify(1,'','image','img_call_back_b')" size="30" hidefocus="true" nc_type="change_site_logo" title="点击前方预览图可查看大图，点击按钮选择文件并提交表单后上传生效">
            </span>
                </div>
                <span class="err"></span>
                <p class="notic">请上传图片格式文件</p>
            </dd>
        </dl>
</div>

        <div class="ncap-form-default tab_div_1">
            <dl class="row">
                <dt class="tit">
                    <label>身份证反面上传</label>
                </dt>

                <dd class="opt">
                    <div class="input-file-show">
            <span class="show">
                <a id="img_c" target="_blank" class="nyroModal" rel="gal" href="<?php echo $info['identi_back']; ?>">
                    <i id="img_input_c" class="fa fa-picture-o" onMouseOver="layer.tips('<img src=<?php echo $info['identi_back']; ?>>',this,{tips: [1, '#fff']});" onMouseOut="layer.closeAll();"></i>
                </a>
            </span>
                        <span class="type-file-box">
                <input type="text" id="identi_back" name="identi_back" value="<?php echo $info['identi_back']; ?>" class="type-file-text">
                <input type="button" name="button" id="button1-c" value="选择上传..." class="type-file-button">
                <input class="type-file-file" onClick="GetUploadify(1,'','image','img_call_back_c')" size="30" hidefocus="true" nc_type="change_site_logo" title="点击前方预览图可查看大图，点击按钮选择文件并提交表单后上传生效">
            </span>
                    </div>
                    <span class="err"></span>
                    <p class="notic">请上传图片格式文件</p>
                </dd>
            </dl>
        </div>


        <!--银行卡上传-->
        <div class="ncap-form-default tab_div_1">
            <dl class="row">
                <dt class="tit">
                    <label>银行卡正面上传</label>
                </dt>

                <dd class="opt">
                    <div class="input-file-show">
            <span class="show">
                <a id="img_d" target="_blank" class="nyroModal" rel="gal" href="<?php echo $info['credit_front']; ?>">
                    <i id="img_input_d" class="fa fa-picture-o" onMouseOver="layer.tips('<img src=<?php echo $info['credit_front']; ?>>',this,{tips: [1, '#fff']});" onMouseOut="layer.closeAll();"></i>
                </a>
            </span>
                        <span class="type-file-box">
                <input type="text" id="credit_front" name="credit_front" value="<?php echo $info['credit_front']; ?>" class="type-file-text">
                <input type="button" name="button" id="button1-d" value="选择上传..." class="type-file-button">
                <input class="type-file-file" onClick="GetUploadify(1,'','image','img_call_back_d')" size="30" hidefocus="true" nc_type="change_site_logo" title="点击前方预览图可查看大图，点击按钮选择文件并提交表单后上传生效">
            </span>
                    </div>
                    <span class="err"></span>
                    <p class="notic">请上传图片格式文件</p>
                </dd>
            </dl>
        </div>

        <div class="ncap-form-default tab_div_1">
            <dl class="row">
                <dt class="tit">
                    <label>银行卡反面上传</label>
                </dt>

                <dd class="opt">
                    <div class="input-file-show">
            <span class="show">
                <a id="img_e" target="_blank" class="nyroModal" rel="gal" href="<?php echo $info['credit_back']; ?>">
                    <i id="img_input_e" class="fa fa-picture-o" onMouseOver="layer.tips('<img src=<?php echo $info['credit_back']; ?>>',this,{tips: [1, '#fff']});" onMouseOut="layer.closeAll();"></i>
                </a>
            </span>
                        <span class="type-file-box">
                <input type="text" id="credit_back" name="credit_back" value="<?php echo $info['credit_back']; ?>" class="type-file-text">
                <input type="button" name="button" id="button1-e" value="选择上传..." class="type-file-button">
                <input class="type-file-file" onClick="GetUploadify(1,'','image','img_call_back_e')" size="30" hidefocus="true" nc_type="change_site_logo" title="点击前方预览图可查看大图，点击按钮选择文件并提交表单后上传生效">
            </span>
                    </div>
                    <span class="err"></span>
                    <p class="notic">请上传图片格式文件</p>
                </dd>
            </dl>
        </div>



        <div class="ncap-form-default">
            <div class="bot">
                <input type="hidden"  name="goods_id" value="<?php echo $good_id; ?>">
                <input type="hidden"  name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" />
                <!--<a href="JavaScript:void(0);" class="ncap-btn-big ncap-btn-green" onClick="ajax_submit_form('addEditGoodsForm','<?php echo U('User/addEditImage?is_ajax=1'); ?>');">确认提交</a>-->
                <a href="JavaScript:void(0);" class="ncap-btn-big ncap-btn-green"  onclick="ConfirmClick()"><i class="sk">确认提交</i></a>

            </div>
        </div>
    </form>


    <!--表单数据-->
</div>
<div id="goTop"> <a href="JavaScript:void(0);" id="btntop"><i class="fa fa-angle-up"></i></a><a href="JavaScript:void(0);" id="btnbottom"><i class="fa fa-angle-down"></i></a></div>
<script>


    function  ConfirmClick(){
        if($('input[name="license"]').val() == ''){
            layer.alert("请选择驾驶证图片上传！",{icon:2});
            return false;
        }

        if($('input[name="identi_front"]').val() == ''){
            layer.alert("请选择身份证正面照上传！",{icon:2});
            return false;
        }

        if($('input[name="identi_back"]').val() == ''){
            layer.alert("请选择身份证反面照上传！",{icon:2});
            return false;
        }

        if($('input[name="credit_front"]').val() == ''){
            layer.alert("请选择银行卡正面照上传！",{icon:2});
            return false;
        }

        if($('input[name="credit_back"]').val() == ''){
            layer.alert("请选择银行卡反面照上传！",{icon:2});
            return false;
        }


        good_id =  $("input[name='goods_id']").val() ;

        license = $('#license').val();
        identi_front = $('#identi_front').val();
        identi_back = $('#identi_back').val();
        credit_front = $('#credit_front').val();
        credit_back = $('#credit_back').val();


        $.ajax({
            dataType:'json' ,
            url:'/Home/User/aticleHandle',
            data:{'id':good_id ,'license':license,'identi_front':identi_front,'identi_back':identi_back,'credit_front':credit_front ,'credit_back':credit_back },
            type:'post',
            success:function (data) {
                if(data.status == 0){
//                     $.ajax({
//                         type : "POST",
////                         url:"/index.php?m=Home&c=Cart&a=cart2",
//                         url:"/Home/Cart/cart2",
////                         data : $('#buy_goods_form').serialize(),// 你的formid 搜索表单 序列化提交
//                         data : {},// 你的formid 搜索表单 序列化提交
//                         dataType:'json',
//                         success:function (data) {
                             location.href = "/index.php?m=Home&c=Cart&a=cart2";
//                         }
//                     }) ;

                }else{
                    layer.alert(data.msg, {icon:5}) ;
                }
            }
        });
    }



    /*
     * 以下是图片上传方法
     */
    // 上传商品图片成功回调函数
//    function call_back(fileurl_tmp){
//        $("#original_img").val(fileurl_tmp);
//        $("#original_img2").attr('href', fileurl_tmp);
//    }

    function img_call_back(fileurl_tmp)
    {
        $("#license").val(fileurl_tmp);
        $("#img_a").attr('href', fileurl_tmp);
        $("#img_input_a").attr('onmouseover', "layer.tips('<img src="+fileurl_tmp+">',this,{tips: [1, '#fff']});");
    }


    function img_call_back_b(fileurl_tmp)
    {
        $("#identi_front").val(fileurl_tmp);
        $("#img_b").attr('href', fileurl_tmp);
        $("#img_input_b").attr('onmouseover', "layer.tips('<img src="+fileurl_tmp+">',this,{tips: [1, '#fff']});");
    }


    function img_call_back_c(fileurl_tmp)
    {
        $("#identi_back").val(fileurl_tmp);
        $("#img_c").attr('href', fileurl_tmp);
        $("#img_input_c").attr('onmouseover', "layer.tips('<img src="+fileurl_tmp+">',this,{tips: [1, '#fff']});");
    }

    function img_call_back_d(fileurl_tmp)
    {
        $("#credit_front").val(fileurl_tmp);
        $("#img_d").attr('href', fileurl_tmp);
        $("#img_input_d").attr('onmouseover', "layer.tips('<img src="+fileurl_tmp+">',this,{tips: [1, '#fff']});");
    }


    function img_call_back_e(fileurl_tmp)
    {
        $("#credit_back").val(fileurl_tmp);
        $("#img_e").attr('href', fileurl_tmp);
        $("#img_input_e").attr('onmouseover', "layer.tips('<img src="+fileurl_tmp+">',this,{tips: [1, '#fff']});");
    }


    function checkForm(){
        if($('input[name="license"]').val() == ''){
            layer.alert("请选择驾驶证图片上传！",{icon:2});
            return false;
        }

//        if($('input[name="identi_front"]').val() == ''){
//            layer.alert("请选择身份证正面照上传！",{icon:2});
//            return false;
//        }
//
//        if($('input[name="identi_back"]').val() == ''){
//            layer.alert("请选择身份证反面照上传！",{icon:2});
//            return false;
//        }
//
//        if($('input[name="credit_front"]').val() == ''){
//            layer.alert("请选择银行卡正面照上传！",{icon:2});
//            return false;
//        }
//
//        if($('input[name="credit_back"]').val() == ''){
//            layer.alert("请选择银行卡反面照上传！",{icon:2});
//            return false;
//        }


        $('#addEditGoodsForm').submit();
    }

</script>
</body>
</html>