<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
    <h1></h1>
    <div class="tool">
        <a href="index.php?do=app&&view=task_list" class="here">免费任务</a>
    </div>
</div>
<div class="box search p_relative">
    <div class="title">
        <h2>搜索</h2>
    </div>
    <div class="detail">
        <form method="post" action="index.php?do=app&view=task_list" id="frm_art_search">
        <input type="hidden" name="page" value="1">
        <table cellspacing="0" cellpadding="0">
         <tbody>
           <tr>
             <th>ID</th>
              <td>
                <input type="text" size='10' class="txt" name="space[id]" value="" onkeyup="clearstr(this);">
              </td>
     <th>标题</th>
              <td>
                <input type="text" size='10' class="txt" name="space[title]" value="" onkeyup="clearspecial(this);">
              </td>
             <th>描述</th>
              <td>
                <input type="text" size='10' class="txt" name="space[desc]" value="" onkeyup="clearspecial(this);">
              </td>
            </tr>
             <tr>
                 <th>结果排序</th>
                  <td>
             		<select name="ord[]">
                           <option value="task_id"  selected="selected">默认排序</option>
                           	
                      </select>
                         <select name="ord[]">
                            <option selected="selected"  value="desc">递减</option>
                            <option  value="asc">递增</option>
                      </select>
                   </td>
              <th>
                       显示结果
               </th>
                   <td>
                     <select name="page_size">
                          <option value="10" selected="selected">每页显示10</option>
                          <option value="20" >每页显示20</option>
                          <option value="30" >每页显示30</option>
                     </select>
 <button class="pill" type="submit" value="搜索" name="sbt_search"><span class="icon magnifier">&nbsp;</span>搜索</button>
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
 	   <h2></h2></div>
  <div class="detail">
  	 <form method="post" action="index.php?do=app&view=task_list" id="frm_list">
  	 	<input type="hidden" name="page_size" value="10">
<input type="hidden" name="page" value="1">
<div  id="ajax_dom">
<table cellpadding="0" cellspacing="0">
               <tbody>
               	<tr>
               		<th>ID</th>
<th>用户姓名</th>
<th>标题</th>
<th>描述</th>
<th>时间</th>
                    <th width="130">操作</th>
</tr>

                	<tr class="item">
               		<td><input type="checkbox" name="ckb[]" class="checkbox" value="3">3</td>
<td>admin</td>
<td>45798798798</td>
<td>4465465465465465465</td>
               		<td>
               			2014-12-22 13:46:32&nbsp;
</td>
<td>
<a class="button dbl_target" href="index.php?do=app&view=task_edit&op=edit&pro_id=3"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=app&view=task_list&op=del&pro_id=3" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td> 
</tr>
               	<tr class="item">
               		<td><input type="checkbox" name="ckb[]" class="checkbox" value="2">2</td>
<td>admin</td>
<td>12112</td>
<td>123456</td>
               		<td>
               			2014-12-22 13:39:38&nbsp;
</td>
<td>
<a class="button dbl_target" href="index.php?do=app&view=task_edit&op=edit&pro_id=2"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=app&view=task_list&op=del&pro_id=2" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td> 
</tr>
               	<tr class="item">
               		<td><input type="checkbox" name="ckb[]" class="checkbox" value="1">1</td>
<td>admin</td>
<td>454</td>
<td>121321</td>
               		<td>
               			2014-12-20 11:03:39&nbsp;
</td>
<td>
<a class="button dbl_target" href="index.php?do=app&view=task_edit&op=edit&pro_id=1"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=app&view=task_list&op=del&pro_id=1" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td> 
</tr>
	
<tr>
                	<td colspan="8">
                	                    <div class="clearfix">
                            <input type="checkbox" id="checkbox" onclick="checkall();" class="checkbox" >
<label for="checkbox">全选</label>　
<input type="hidden" name="sbt_action" class="sbt_action"/>
<button type="submit" name="sbt_action" value="批量删除" onclick="return batch_act(this,'frm_list')" class="pill negative">
<span class="trash icon"></span>批量删除</button>&nbsp;&nbsp;
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
<script type="text/javascript" src="../../lang/cn/script/lang.js"></script>
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
var c = "你确认删除操作？";
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
var c = "你确认删除操作？";
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
d.confirm("确定" + c + '?', function() {
$(".sbt_action").val(c);
$("#" + frm).submit();
});
} else {
d.alert("您没有选择任何操作项");
}
return false;
}
</script>
</body>
</html>
