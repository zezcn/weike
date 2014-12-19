<?php keke_tpl_class::checkrefresh('control/admin/tpl/admin_user_charge', '1418787055' );?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
            <a href="index.php?do=user&view=add"><?php if($edituid) { ?><?php echo $_lang['edit'];?><?php } else { ?><?php echo $_lang['add'];?><?php } ?><?php echo $_lang['user'];?></a>
    		<a href="index.php?do=user&view=charge" class="here"><?php echo $_lang['charge'];?></a>
</div>
    </div>
<div class="box post">
        <div class="tabcon">
        	<div class="title"><h2><?php echo $_lang['charge'];?></h2></div>
            <div class="detail">
               <form action="#" method="post" name="frm_cash" id="frm_cash">
                    <input type="hidden" name="view" value="<?php echo $view;?>">
<input type="hidden" name="valid" id="valid">
<input type="hidden" name="maxCash" id="maxCash">
<input type="hidden" name="maxCredit" id="maxCredit">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody>
                      <tr>
                        <th scope="row" width='100'><?php echo $_lang['uid'];?><?php echo $_lang['zh_mh'];?></th>
                        <td>
                       		<input type="text" class="txt" style=" width:260px;" name="user"
id="txt_user" title="<?php echo $_lang['please_input_limit'];?>"
limit="required:true" msgArea="txt_user_msg"
  	msg="<?php echo $_lang['username_uid_can_not_null'];?>"/>
<b style="color:red"> *</b><span id="txt_user_msg"></span><?php echo $_lang['user_tips'];?>
<a class="button dbl_target" href="javascript:void(0);" onclick="validUser();">
<span class="chat icon"></span>
<?php echo $_lang['valid'];?>
</a>
<div class="box tip clearfix p_relative" style="width:310px;display:none;" id="man_tips">
    	<div class="title"><h2><?php echo $_lang['account_info'];?></h2></div>
        <div class="detail pad10">
        	<span class="pad10" id="ucash"></span></br>
<span class="pad10" id="ucredit"></span>
        </div>
</div>
   </td>
                      </tr>
                      <tr>
                        <th scope="row"><?php echo $_lang['exisits_cash'];?><?php echo $_lang['zh_mh'];?></th>
                        <td>
                        	<select name="cash_type" id="cash_type">
                        		<option value="1"><?php echo $_lang['recharge']?></option>
                        		<option value="0"><?php echo $_lang['deduct']?></option>
                        	</select>
                        	 <input type="text" class="txt" style="width:260px;"
  name="cash" id="cash" 
  limit="type:float;between:0-999999999999"
  title="<?php echo $_lang['please_input_cash'];?>..."
  msg="<?php echo $_lang['cash_can_not_null'];?>"
      msgArea="cash_msg"  class="input_t"/>
 <span id="cash_msg"></span>
</td>
                      </tr>
  <?php if($config['credit_is_allow']==1) { ?>
                      <tr>
                        <th scope="row"><?php echo $_lang['cash_coupon'];?><?php echo $_lang['zh_mh'];?></th>
                        <td>
                        	<select name="credit_type" id="credit_type">
                        		<option value="1"><?php echo $_lang['recharge']?></option>
                        		<option value="0"><?php echo $_lang['deduct']?></option>
                        	</select>
                        	 <input type="text" class="txt" style="width:260px;"
  name="credit" id="credit" 
  limit="type:float;between:0-999999999999"
  title="<?php echo $_lang['please_input_cash'];?>..."
  msg="<?php echo $_lang['cash_can_not_null'];?>"
      msgArea="credit_msg"  class="input_t"/>
<span id="credit_msg"></span>
</td>

                      </tr>
  <?php } ?>
                      <tr>
                      	<th><?php echo $_lang['charge_reason']?></th>
                      	<td>
                      		<textarea name="charge_reason" rows="8" cols="50"></textarea>
                      	</td>
                      </tr>
                      <tr>
                        <th scope="row">&nbsp;</th>
                        <td>
                            <div class="clearfix padt10">
                            	<input type="hidden" name="is_submit" value="1">
                                <button class="positive primary pill button" type="button" value="<?php echo $_lang['submit'];?>" onclick="frm_check();"><span class="check icon"></span><?php echo $_lang['submit'];?></button>
                              
                            </div>
                        </td>
                      </tr>
  </tbody>
                    </table>
                </form>
        </div>
        
        
    </div>
 <script type="text/javascript">
 	var credit_is_allow = '<?php echo $config['credit_is_allow'];?>';
 	function validUser(){
var v   = $("#txt_user").val();
if(v<1||$("#txt_user_msg").hasClass('valid_error')){
art.dialog.tips("<?php echo $_lang['username_uid_can_not_null'];?>",1.5);
$("#man_tips").hide('slow');
$("#valid").val(0);
}else{
var url = "index.php?do=user&view=charge";
$.getJSON(url,{check_uid:v},function(json){
if(json.status==1){
$("#ucash").html("<?php echo $_lang['usefull_balance'];?>"+json.data.balance+"<?php echo $_lang['yuan'];?>");
$("#ucredit").html("<?php echo $_lang['usefull'];?><?php echo CREDIT_NAME;?>："+json.data.credit);
$("#man_tips").show('slow');
$("#maxCash").val(json.data.balance);
$("#maxCredit").val(json.data.credit);
$("#valid").val(1);
}else{
art.dialog.tips(json.msg,1.5);
$("#man_tips").hide('slow');
$("#txt_user").focus();
$("#valid").val(0);
}
});
}
}
 	function frm_check(){
var i =  checkForm(document.getElementById("frm_cash"),false);
if(i){
if($("#valid").val()==1){
var t 			= true;
var cash_type = $("#cash_type").val();
var credit_type = $("#credit_type").val();
var maxCash 	= $("#maxCash").val();
var maxCredit 	= $("#maxCredit").val();
var ca = parseFloat($("#cash").val()).toFixed(2);
isNaN(ca)?ca=0:'';
var cr = parseFloat($("#credit").val()).toFixed(2);
isNaN(cr)?cr=0:'';
if(ca<-maxCash){
art.dialog.alert("<?php echo $_lang['user_deduct_limit']?> "+maxCash+" <?php echo $_lang['yuan'];?>");
t=false;
}else if(cr<-maxCredit){
art.dialog.alert("<?php echo $_lang['user_deduct_limit']?> "+maxCredit+" <?php echo CREDIT_NAME;?>");
t=false;
}
if(t===true){
var content = '';
if(cash_type == 1){
if(credit_type == 1){
if(credit_is_allow==1){
content+="充值现金"+ca+"元;</br>"+"充值代金券"+cr+"<?php echo CREDIT_NAME;?>。";
}else{
content+="充值现金"+ca+"元;</br>";
}
}else{
if(credit_is_allow==1){
content+="充值现金"+ca+"元;</br>"+"扣除代金券"+Math.abs(cr)+"<?php echo CREDIT_NAME;?>。";
}else{
content+="充值现金"+ca+"元;</br>";
}
}
}else{
if(credit_type == 1){
if(credit_is_allow==1){
content+="扣除现金"+Math.abs(ca)+"元;</br>"+"充值代金券"+cr+"<?php echo CREDIT_NAME;?>。";
}else{
content+="扣除现金"+Math.abs(ca)+"元;</br>"
}
}else{
if(credit_is_allow==1){
content+="扣除现金"+Math.abs(ca)+"元;</br>"+"扣除代金券"+Math.abs(cr)+"<?php echo CREDIT_NAME;?>。";
}else{
content+="扣除现金"+Math.abs(ca)+"元;</br>"
}
}
}
art.dialog({
title: "<?php echo $_lang['operate_tips'];?>",
content: content,
icon: 'succeed',
yesFn: function(){$("#frm_cash").submit();},
noFn :function(){this.close();return false;}
});
}
}else{
art.dialog.tips("<?php echo $_lang['pass_validation'];?>",1.5);
}
}
}
 </script>
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