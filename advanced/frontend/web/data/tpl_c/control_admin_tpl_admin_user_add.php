<?php keke_tpl_class::checkrefresh('control/admin/tpl/admin_user_add', '1418787056' );?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    	<h1><?php echo $_lang['user_manage'];?></h1>
        <div class="tool">
            <a href="index.php?do=user&view=list" ><?php echo $_lang['user_manage'];?></a>
            <a href="index.php?do=user&view=add" class="here"><?php if($edituid) { ?><?php echo $_lang['edit'];?><?php } else { ?><?php echo $_lang['add'];?><?php } ?><?php echo $_lang['user'];?></a>
    	    <a href="index.php?do=user&view=charge"><?php echo $_lang['charge'];?></a>
    	</div>
    </div>
<div class="box post">
        <div class="tabcon">
        	<div class="title"><h2><?php if($edituid) { ?><?php echo $_lang['edit_member_info'];?><?php } else { ?><?php echo $_lang['add_member_info'];?><?php } ?></h2></div>
            <div class="detail">
               <form action="index.php?do=user&view=add&edituid=<?php echo $edituid?>" method="post" name="frm_add" id="frm_add">
                    <input type="hidden" value="<?php echo $edituid;?>" name="edituid">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody>
                      <tr>
                        <th scope="row" width="130"><?php echo $_lang['username'];?><?php echo $_lang['zh_mh'];?></th>
                        <td>
                       <input type="text" class="txt" style=" width:260px;" <?php if($edituid) { ?>disabled="disabled" ignore="true"<?php } ?> value="<?php echo $member_arr['username'];?>" name="fds[username]" id="txt_username" maxlength="50" title="<?php echo $_lang['please_input_limit_char_username'];?>" limit="required:true;len:2-20" msg="<?php echo $_lang['please_input_limit_char_username'];?>" ajax="../../index.php?do=register&check_username=" msgArea="txt_username_msg" valid="1"/><b style="color:red"> *</b><span id="txt_username_msg"></span>

  </td>
                      </tr>
                      <tr>
                        <th scope="row"><?php echo $_lang['password'];?><?php echo $_lang['zh_mh'];?></th>
                        <td> <input type="password" class="txt" style="width:260px;" name="fds[password]" id="password"limit="<?php if(!$edituid) { ?>required:true;len:6-20<?php } else { ?>len:6-20<?php } ?>" title="<?php echo $_lang['please_input_password'];?>..." msg="<?php echo $_lang['password_limit'];?>" msgArea="pwd_pwd_msg"  class="input_t"/><?php if(!$edituid) { ?><b style="color:red">*</b><?php } ?><span id="pwd_pwd_msg"></span>
</td>

                      </tr>
 
  <tr>
                       <th scope="row"><?php echo $_lang['email'];?><?php echo $_lang['zh_mh'];?></th>
                        <td> <input type="text" class="txt" style="width:260px;" name="fds[email]" id="email"limit="required:true;type:email" value="<?php echo $member_arr['email'];?>" msg="<?php echo $_lang['format_error'];?>" title="<?php echo $_lang['please_input_right_email'];?>..." msgArea="txt_email_msg"/><b style="color:red"> *</b><span id="txt_email_msg"></span></td>
                      </tr>
  <?php if($edituid&&$shop_open) { ?>
 					   <tr>
                        <th scope="row"><?php echo $_lang['is_recommend'];?><?php echo $_lang['zh_mh'];?></th>
                        <td>
                          <p>
                             
                           <label for="rdo_0">
                              <input type="radio" name="fds[recommend]" id="rdo_0" value="1"  <?php if($member_arr['recommend']==1) { ?>checked=checked<?php } ?>>
  <?php echo $_lang['yes'];?></label>
                            <label for="rdo_1">
                              <input type="radio" name="fds[recommend]" id="rdo_1" value="0" <?php if(!$member_arr['recommend']) { ?>checked=checked<?php } ?>>
   <?php echo $_lang['no'];?></label>
                            <br/>
                        </p></td>
                      </tr>
  <tr>
                        <th scope="row"><?php echo $_lang['is_disable'];?><?php echo $_lang['zh_mh'];?></th>
                        <td>
                          <p>
                             
                           <label for="rdo_0">
                              <input type="radio" name="fds[status]" id="rdo_0" value="2"  <?php if($member_arr['static']==2) { ?>checked=checked<?php } ?>>
  <?php echo $_lang['yes'];?></label>
                            <label for="rdo_1">
                              <input type="radio" name="fds[status]" id="rdo_1" value="1" <?php if($member_arr['static']!=2) { ?>checked=checked<?php } ?>>
   <?php echo $_lang['no'];?></label>
                            <br/>
                        </p></td>
                      </tr>
   
  <?php } ?>
  <?php if($member_arr['uid']!=1) { ?>
  <tr>
 						 <th scope="row"><?php echo $_lang['user_group'];?><?php echo $_lang['zh_mh'];?></th>
                        <td> 

  <select name="fds[group_id]">
  	 <option value="0" <?php if($member_arr['group_id']<0) { ?> selected="selected"<?php } ?>><?php echo $_lang['ordinary_user'];?></option>
   <?php if(is_array($member_group_arr)) { foreach($member_group_arr as $k => $v) { ?>
  	 <option value="<?php echo $v['group_id'];?>" <?php if($member_arr['group_id']== $v['group_id']) { ?>selected="selected"<?php } ?>><?php echo $v['groupname']?></option>
   <?php } } ?>
   </select><b style="color:red">*</b>
   
                      </td>
                      </tr>
  <?php } ?>
 </tbody>
 <tfoot>
                      <tr>
                        <th scope="row">&nbsp;</th>
                        <td>
                            <div class="clearfix padt10">
                            	<input type="hidden" name="is_submit" value="1">
                                <button class="positive primary pill button" type="submit" value="<?php echo $_lang['submit'];?>" onclick="return checkForm(document.getElementById('frm_add'));"><span class="check icon"></span><?php echo $_lang['submit'];?></button>
                              
                            </div>
                        </td>
                      </tr>
 </tfoot>
                    </table>
                    
                </form>
        </div>
        
        
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