<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:46:"./application/admin/view2/user\authdetail.html";i:1507806147;s:44:"./application/admin/view2/public\layout.html";i:1506391050;}*/ ?>
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


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
    td{height:40px;line-height:40px; padding-left:20px;}
    .span_1{
        float:left;
        margin-left:0px;
        height:130px;
        line-height:130px;
    }
    .span_1 ul{list-style:none;padding:0px;}
    .span_1 ul li{
        border:1px solid #CCC;
        height:40px;
        padding:0px 10px;
        margin-left:-1px;
        margin-top:-1px;
        line-height:40px;
    }


    /*自适应圆角投影*/
    .round_shade_box{width:1px; height:1px; font-size:0; display:none; _background:white; _border:1px solid #cccccc;}
    .round_shade_top{margin:0 12px 0 10px; background:url(../image/zxx_round_shade.png) repeat-x -20px -40px; _background:white; zoom:1;}
    .round_shade_topleft{width:11px; height:10px; background:url(../image/zxx_round_shade.png) no-repeat 0 0; _background:none; float:left; margin-left:-11px; position:relative;}
    .round_shade_topright{width:12px; height:10px; background:url(../image/zxx_round_shade.png) no-repeat -29px 0; _background:none; float:right; margin-right:-12px; position:relative;}
    .round_shade_centerleft{background:url(../image/zxx_round_shade.png) no-repeat 0 -1580px; _background:none;}
    .round_shade_centerright{background:url(../image/zxx_round_shade.png) no-repeat right -80px; _background:none;}
    .round_shade_center{font-size:14px; margin:0 12px 0 10px; padding:10px; background:white; letter-spacing:1px; line-height:1.5;}
    .round_shade_bottom{margin:0 12px 0 11px; background:url(../image/zxx_round_shade.png) repeat-x -20px bottom; _background:white; zoom:1;}
    .round_shade_bottomleft{width:11px; height:10px; background:url(../image/zxx_round_shade.png) no-repeat 0 -30px; _background:none; float:left; margin-left:-11px; position:relative;}
    .round_shade_bottomright{width:12px; height:10px; background:url(../image/zxx_round_shade.png) no-repeat -29px -30px; _background:none; float:right; margin-right:-12px; position:relative;}
    .round_shade_top:after,.round_shade_bottom:after,.zxx_zoom_box:after{display:block; content:"."; height:0; clear:both; overflow:hidden; visibility:hidden;}
    .round_box_close{padding:2px 5px; font-size:12px; color:#ffffff; text-decoration:none; border:1px solid #cccccc; -moz-border-radius:4px; -webkit-border-radius:4px; background:#000000; opacity:0.8; filter:alpha(opacity=80); position:absolute; right:-5px; top:-5px;}
    .round_box_close:hover{opacity:0.95; filter:alpha(opacity=95);}
    /*自适应圆角投影结束*/
    .zxx_zoom_left{width:45%; float:left; margin-top:20px; border-right:1px solid #dddddd;}
    .zxx_zoom_left h4{margin:5px 0px 15px 5px; font-size:1.1em;}
    .small_pic{display:inline-block; width:48%; height:150px; font-size:120px; text-align:center; *display:inline; zoom:1; vertical-align:middle;}
    .small_pic img{padding:3px; background:#ffffff; border:1px solid #cccccc; vertical-align:middle;}
    .zxx_zoom_right{width:50%; float:left; margin-top:20px; padding-left:2%;}
    .zxx_zoom_right h4{margin:5px 0px; font-size:1.1em;}
    .zxx_zoom_right p.zxx_zoom_word{line-height:1.5; font-size:1.05em; letter-spacing:1px; margin:0 0 35px; padding-top:5px;}
</style>


<body style="background-color: #FFF; overflow: auto;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
    <div class="fixed-bar">
        <div class="item-title"><a class="back" href="javascript:history.back();" title="返回列表"><i class="fa fa-arrow-circle-o-left"></i></a>
            <div class="subject">
                <h3>认证管理 - 认证信息</h3>
                <h5>网站系统会员认证管理</h5>
            </div>
        </div>
    </div>
    <form class="form-horizontal" id="user_form" method="post">
        <div class="ncap-form-default">


            <dl class="row">
                <dt class="tit">
                    <label>驾驶证：</label>
                </dt>
                <dd class="opt">
                    <img   id="img11" src="<?php echo $idata['license']; ?>"    />
                </dd>
            </dl>


            <dl class="row">
                <dt class="tit">
                    <label>身份证正面照：</label>
                </dt>
                <dd class="opt">
                    <img   id="img12" src="<?php echo $idata['identi_front']; ?>"    />
                </dd>
            </dl>


            <dl class="row">
                <dt class="tit">
                    <label>身份证反面照：</label>
                </dt>
                <dd class="opt">
                    <img   id="img13" src="<?php echo $idata['identi_back']; ?>"   />
                </dd>
            </dl>

            <dl class="row">
                <dt class="tit">
                    <label>银行卡正面照：</label>
                </dt>
                <dd class="opt">
                    <img   id="img14" src="<?php echo $idata['credit_back']; ?>"   />
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>银行卡反面照：</label>
                </dt>
                <dd class="opt">
                    <img   id="img15" src="<?php echo $idata['credit_back']; ?>"    />
                </dd>
            </dl>

            <input  hidden="hidden" name="user_id" value="<?php echo $idata['user_id']; ?>">
            <div class="bot"><a href="JavaScript:void(0);" onclick="AgreeCheck()" class="ncap-btn-big ncap-btn-green">审核通过</a></div>
        </div>
    </form>
</div>


<script type="text/javascript">
//    var  record = false ;


    function  AgreeCheck(){
         var  uid =   $('input[name=user_id]').val() ;

        layer.confirm('您确定要通过审核？', {
            btn: ['确定','取消'] //按钮
        }, function(){
//            layer.close();
            layer.closeAll() ;
//            layer.msg('的确很重要', {icon: 1});
            $.ajax({
                dataType:'json' ,
                url:'/Admin/User/agreeCheck',
                data:{'id' : uid},
                type:'get',
                success:function (data) {
                    if(data.status == 0){
                        layer.close();
//                        opener.location.reload() ;
//                        layer.alert(data.msg, {icon: 6});
//                        location.reload() ;

                        window.location.href = '/Admin/User/memberAuth' ;
                    }else if (data.status == 1){
                        layer.alert(data.msg, {icon: 5});
                    }else{
                        layer.alert(data.msg, {icon: 5});
                    }
                }
            });
        }, function(){
               //取消
        });
    }

//    function  imgClic(obj){
//         var img_id = obj.id ;
//        //调用我写好的方法，只需要传入一个id
//        ChangeImg(img_id) ;
//    }

//    function  ChangeImg(img_id){
//
//        var  width =  $("#"+img_id).width() ;
//        var  height =  $("#"+img_id).height() ;
//
//        var b_width = $("#"+img_id).width() * 1.5 ;
//        var b_height = $("#"+img_id).height() * 1.5 ;
//
//
//
//        if(b_width > width){
//
//                $("#"+img_id).attr('width', b_width) ;
//
//
//            b_width = width ;
//            record = true ;
//        }else{
//
//                $("#"+img_id).attr('width', width) ;
//                $("#"+img_id).attr('height', height) ;
//
//            b_width = width * 1.5 ;
//            record = false ;
//        }
//    }

    $(function () {
        //先获取到原图片宽高
         var width =  $('#img11').width()    ;
         var height =  $('#img11').height() ;
         //设置到图片属性中
        var b_width = $('#img11').width() * 1.5 ;
        var b_height = $('#img11').height() * 1.5 ;

        var width =  $('#img12').width()    ;
        var height =  $('#img12').height() ;
        //设置到图片属性中
        var b_width = $('#img12').width() * 1.5 ;
        var b_height = $('#img12').height() * 1.5 ;

        var width =  $('#img13').width()    ;
        var height =  $('#img13').height() ;
        //设置到图片属性中
        var b_width = $('#img13').width() * 1.5 ;
        var b_height = $('#img13').height() * 1.5 ;

        var width =  $('#img14').width()    ;
        var height =  $('#img14').height() ;
        //设置到图片属性中
        var b_width = $('#img14').width() * 1.5 ;
        var b_height = $('#img14').height() * 1.5 ;

        var width =  $('#img15').width()    ;
        var height =  $('#img15').height() ;
        //设置到图片属性中
        var b_width = $('#img15').width() * 1.5 ;
        var b_height = $('#img15').height() * 1.5 ;

        $('#img11').click(function () {
            //点击的时候获取到当前的宽高，然后再将其放大
                    if(b_width > width){
                        $('#img11').attr('width', b_width) ;
                        $('#img11').attr('height', b_height) ;
                        b_width = width ;
                    }else{
                        $('#img11').attr('width', width) ;
                        $('#img11').attr('height', height) ;
                        b_width = width * 1.5 ;
                    }
        });

        $('#img12').click(function () {
            //点击的时候获取到当前的宽高，然后再将其放大
            if(b_width > width){
                $('#img12').attr('width', b_width) ;
                $('#img12').attr('height', b_height) ;
                b_width = width ;
            }else{
                $('#img12').attr('width', width) ;
                $('#img12').attr('height', height) ;
                b_width = width * 1.5 ;
            }
        });

        $('#img13').click(function () {
            //点击的时候获取到当前的宽高，然后再将其放大
            if(b_width > width){
                $('#img13').attr('width', b_width) ;
                $('#img13').attr('height', b_height) ;
                b_width = width ;
            }else{
                $('#img13').attr('width', width) ;
                $('#img13').attr('height', height) ;
                b_width = width * 1.5 ;
            }
        });

        $('#img14').click(function () {
            //点击的时候获取到当前的宽高，然后再将其放大
            if(b_width > width){
                $('#img14').attr('width', b_width) ;
                $('#img14').attr('height', b_height) ;
                b_width = width ;
            }else{
                $('#img14').attr('width', width) ;
                $('#img14').attr('height', height) ;
                b_width = width * 1.5 ;
            }
        });

        $('#img15').click(function () {
            //点击的时候获取到当前的宽高，然后再将其放大
            if(b_width > width){
                $('#img15').attr('width', b_width) ;
                $('#img15').attr('height', b_height) ;
                b_width = width ;
            }else{
                $('#img15').attr('width', width) ;
                $('#img15').attr('height', height) ;
                b_width = width * 1.5 ;
            }
        });

    });
</script>
</body>
</html>