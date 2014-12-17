<?php keke_tpl_class::checkrefresh('control/admin/tpl/admin_app_weibo_list', '1418787063' );?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_K['charset'];?>">
<title>keke admin</title>


<link href="tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href="../../resource/css/buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href="tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="../../resource/js/jquery.js"></script>
<script type="text/javascript" src="../../resource/js/system/keke.js"></script>
<script type="text/javascript" src="../../resource/js/in.js"></script>
</head>
<body class="frame_body">
<div class="frame_content">
<div id="append_parent"></div>
<div class="page_title">
    <h1><?php echo $_lang['prom_relation_manage'];?></h1>
    <div class="tool">
        <a href="index.php?do=<?php echo $do;?>&&view=<?php echo $view;?>" class="here">微博</a>
    </div>
</div>
<div class="box search p_relative">
    <div class="title">
        <h2><?php echo $_lang['search'];?></h2>
    </div>
    <div class="detail">
        <form method="post" action="index.php?do=<?php echo $do;?>&view=<?php echo $view;?>" id="frm_art_search">
        <input type="hidden" name="page" value="<?php echo $page;?>">
        <table cellspacing="0" cellpadding="0">
         <tbody>
           <tr>
             <th>ID</th>
              <td>
                <input type="text" size='10' class="txt" name="space[id]" value="<?php echo $space['id'];?>" onkeyup="clearstr(this);">
              </td>
     <th>标题</th>
              <td>
                <input type="text" size='10' class="txt" name="space[title]" value="<?php echo $space['title'];?>" onkeyup="clearspecial(this);">
              </td>
             <th>类型</th>
              <td>
                <input type="text" size='10' class="txt" name="space[type]" value="<?php echo $space['type'];?>" onkeyup="clearspecial(this);">
              </td>
            </tr>
             <tr>
                 <th>结果排序</th>
                  <td>
             		<select name="ord[]">
                           <option value="weibo_id" <?php if($ord['0']=='weibo_id' or !isset($ord['0'])) { ?> selected="selected"<?php } ?>><?php echo $_lang['default'];?><?php echo $_lang['order'];?></option>
                           	
                      </select>
                         <select name="ord[]">
                            <option <?php if($ord['1']=='desc' or !isset($ord['1'])) { ?>selected="selected" <?php } ?> value="desc"><?php echo $_lang['desc'];?></option>
                            <option <?php if($ord['1']=='asc') { ?>selected="selected" <?php } ?> value="asc"><?php echo $_lang['asc'];?></option>
                      </select>
                   </td>
              <th>
                       显示结果
               </th>
                   <td>
                     <select name="page_size">
                          <option value="10" <?php if($page_size=='10') { ?>selected="selected"<?php } ?>><?php echo $_lang['page_size'];?>10</option>
                          <option value="20" <?php if($page_size=='20') { ?>selected="selected"<?php } ?>><?php echo $_lang['page_size'];?>20</option>
                          <option value="30" <?php if($page_size=='30') { ?>selected="selected"<?php } ?>><?php echo $_lang['page_size'];?>30</option>
                     </select>
 <button class="pill" type="submit" value="<?php echo $_lang['search'];?>" name="sbt_search"><span class="icon magnifier">&nbsp;</span><?php echo $_lang['search'];?></button>
                   </td>
                <th>
                   &nbsp;
                </th>
                 <td>
                 	&nbsp;
                 </td>
             </tr>
          </tbody>
        </table>　
     </form>
   </div>
</div>
 <div class="box list">
 	<div class="title">
 	   <h2><?php echo $_lang['prom_relation_manage'];?></h2></div>
  <div class="detail">
  	 <form method="post" action="index.php?do=<?php echo $do;?>&view=<?php echo $view;?>" id="frm_list">
  	 	<input type="hidden" name="w[page_size]" value="<?php echo $page_size;?>">
<input type="hidden" name="page" value="<?php echo $page;?>">
<div  id="ajax_dom">
<table cellpadding="0" cellspacing="0">
               <tbody>
               	<tr>
               		<th>ID</th>
<th>对象用户姓名</th>
<th>操作人名称姓名</th>
<th>标题</th>
<th>类型</th>
<th>留言数</th>
<th>收藏数</th>
<th>时间</th>
                    <th width="130">操作</th>
</tr>
 <?php if(is_array($weibo_list)) { foreach($weibo_list as $key => $value) { ?>
               	<tr class="item">
               		<td><input type="checkbox" name="ckb[]" class="checkbox" value="<?php echo $value['weibo_id'];?>"><?php echo $value['weibo_id'];?></td>
<td><?php echo $value['obj_username'];?></td>
<td><?php echo $value['op_username'];?></td>
<td><?php echo kekezu::cutstr($value['obj_title'],20) ?></td>
<td><?php echo $value['detail_type'];?></td>
<td><?php echo $value['leave_num'];?></td>
<td><?php echo $value['focus_num'];?></td>
               		<td>
               			<?php if($value['on_time']){echo date('Y-m-d H:i:s',$value['on_time']); } ?>&nbsp;
</td>
<td>
<a class="button" href="index.php?do=<?php echo $do;?>&view=<?php echo $view;?>&op=del&pro_id=<?php echo $value['weibo_id']?>" onclick="return cdel(this);"><span class="trash icon"></span><?php echo $_lang['delete'];?></a>
</td> 
</tr>
<?php } } ?>	
<tr>
                	<td colspan="10">
                	<?php if($pages['page']) { ?><div class="page fl_right"><?php echo $pages['page'];?></div><?php } ?>
                    <div class="clearfix">
                            <input type="checkbox" id="checkbox" onclick="checkall();" class="checkbox" >
<label for="checkbox"><?php echo $_lang['select_all'];?></label>　
<input type="hidden" name="sbt_action" class="sbt_action"/>
<button type="submit" name="sbt_action" value="<?php echo $_lang['mulit_delete'];?>" onclick="return batch_act(this,'frm_list')" class="pill negative">
<span class="trash icon"></span><?php echo $_lang['mulit_delete'];?></button>&nbsp;&nbsp;
</div>
   </td>
            	 </tr>	
               </tbody>
</table>
</form>
</div>
  </div>

</div>
<script type="text/javascript"
src="../../resource/js/artdialog/artDialog.js"></script>
<script type="text/javascript"
src="../../resource/js/artdialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript"
src="../../resource/js/artdialog/artDialog.iframeTools.source.js"></script>
<script type="text/javascript" src="../../lang/<?php echo $language?>/script/lang.js"></script>
<script type="text/javascript">
In.add('form_and_validation', {
path : "../../resource/js/system/form_and_validation.js",
type : 'js'
});
In.add('xheditor', {
path : "../../resource/js/xheditor/xheditor.js",
type : 'js'
});
In.add('mousewheel', {
path : "tpl/js/jquery.mousewheel.min.js",
type : 'js'
});
//In.add('styleswitch',{path:"tpl/js/styleswitch.js",type:'js'});
In.add('table', {
path : "tpl/js/table.js",
type : 'js'
});
In.add('calendar', {
path : "../../resource/js/system/script_calendar.js"
});
In('form_and_validation', 'xheditor', 'mousewheel', 'table', 'calendar');
</script>

<script type="text/javascript">
function cdel(o, s) {
d = art.dialog;
var c = "<?php echo $_lang['you_comfirm_delete_operate'];?>";
if (s) {
c = s;
}
d.confirm(c, function() {
window.location.href = o.href;
});
return false;
}
function cpass(o, s, type) {
d = art.dialog;
if (type == 1) {
var c = "确认审核通过？";
} else {
var c = "确认审核失败？";
}
if (s) {
c = s;
}
d.confirm(c, function() {
window.location.href = o.href;
});
return false;
}
function cfreeze(o, s, type) {
d = art.dialog;
if (type == 1) {
var c = "确认冻结？";
}
if (s) {
c = s;
}
d.confirm(c, function() {
window.location.href = o.href;
});
return false;
}
function crecomm(o, s, type) {
d = art.dialog;
if (type == 1) {
var c = "确认推荐？";
} else {
var c = "确认取消推荐？";
}
if (s) {
c = s;
}
d.confirm(c, function() {
window.location.href = o.href;
});
return false;
}
function pdel(frm) {
d = art.dialog;
var frm = frm;
var c = "<?php echo $_lang['you_comfirm_delete_operate'];?>";
d.confirm(c, function() {
$("#" + frm).submit();
});
return false;
}
function batch_act(obj, frm) {
d = art.dialog;
var frm = frm;
var c = $(obj).val();
var conf = $(":checkbox[name='ckb[]']:checked").length;
if (conf > 0) {
d.confirm("<?php echo $_lang['confirm'];?>" + c + '?', function() {
$(".sbt_action").val(c);
$("#" + frm).submit();
});
} else {
d.alert("<?php echo $_lang['has_none_being_choose'];?>");
}
return false;
}
</script>
<?php if(KEKE_DEBUG) { ?>
<div
style="background-color: red; color: #fff; width: 400px; text-align: center;">
querys:
<?php echo db_factory::create()->get_query_num() ?>
&nbsp; times:
<?php echo kekezu::execute_time() ?>
</div>

<?php } ?>
</body>
</html>
<?php keke_tpl_class::ob_out();?>