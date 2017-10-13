<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:45:"./application/admin/view2/user\ajaxmlist.html";i:1507715598;}*/ ?>
<div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
    <table>
        <tbody>
        <?php if(is_array($userList) || $userList instanceof \think\Collection || $userList instanceof \think\Paginator): $i = 0; $__LIST__ = $userList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
            <tr data-id="<?php echo $list['user_id']; ?>">
                <td class="sign">
                    <div style="width: 24px;"><i class="ico-check"></i></div>
                </td>
                <td align="left" class="">
                    <div style="text-align: center; width: 40px;"><?php echo $list['user_id']; ?></div>
                </td>
                <td align="left" class="">
                    <div style="text-align: center; width: 150px;"><?php echo $list['nickname']; ?></div>
                </td>
                <td align="left" class="">
                    <div style="text-align: center; width: 50px;"><?php echo $level[$list[level]]; ?></div>
                </td>

                <td align="left" class="">
                    <div style="text-align: center; width: 150px;"><?php echo $list['mobile']; if(($list['mobile_validated'] == 0) AND ($list['mobile'])): ?>
                            (未验证)
                        <?php endif; ?>
                    </div>
                </td>

                <td align="left" class="">
                    <div style="text-align: center; width: 200px;"><?php echo $list['email']; if(($list['email_validated'] == 0) AND ($list['email'])): ?>
                            (未验证)
                        <?php endif; ?>
                    </div>
                </td>


                <td align="center" class="handle">
                    <div style="text-align: center; width: 170px; max-width:250px;">
                        <a class="btn blue" href="<?php echo U('Admin/user/authdetail',array('id'=>$list['user_id'])); ?>"><i class="fa fa-pencil-square-o"></i>详情</a>
                    </div>
                </td>
                <td align="" class="" style="width: 100%;">
                    <div>&nbsp;</div>
                </td>
            </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</div>
<!--分页位置-->
<?php echo $page; ?>
<script>
    $(".pagination  a").click(function(){
        var page = $(this).data('p');
        ajax_get_table('search-form2',page);
    });
    $(document).ready(function(){
        // 表格行点击选中切换
        $('#flexigrid >table>tbody>tr').click(function(){
            $(this).toggleClass('trSelected');
        });
        $('#user_count').empty().html("<?php echo $pager->totalRows; ?>");
    });
    function delfun(obj) {
        // 删除按钮
        layer.confirm('确认删除？', {
            btn: ['确定', '取消'] //按钮
        }, function () {
            $.ajax({
                type: 'post',
                url: $(obj).attr('data-url'),
                data: {id : $(obj).attr('data-id')},
                dataType: 'json',
                success: function (data) {
                    layer.closeAll();
                    if (data.status == 1) {
                        $(obj).parent().parent().parent().remove();
                    } else {
                        layer.alert(data.msg, {icon: 2});
                    }
                }
            })
        }, function () {
        });
    }
</script>