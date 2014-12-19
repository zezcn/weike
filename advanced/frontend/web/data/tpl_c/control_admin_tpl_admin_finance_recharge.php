<?php keke_tpl_class::checkrefresh('control/admin/tpl/admin_finance_recharge', '1418787054' );?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    <h1><?php echo $_lang['financial_model'];?></h1>
    <div class="tool">
    	<a href="index.php?do=<?php echo $do;?>&view=revenue">财务概况</a>
<a href="index.php?do=<?php echo $do;?>&view=all"><?php echo $_lang['flow_record'];?></a>
    <a href="index.php?do=<?php echo $do;?>&view=report"><?php echo $_lang['graphic_report'];?></a>
    
    <a href="index.php?do=<?php echo $do;?>&view=recharge" class="here"><?php echo $_lang['recharge_audit'];?></a>
   <a href="index.php?do=<?php echo $do;?>&view=withdraw"><?php echo $_lang['withdraw_audit'];?></a>
    </div>
</div>
<div class="box search p_relative">
    <div class="title">
        <h2><?php echo $_lang['search'];?></h2>
    </div>
    <div class="detail" id="detail">
        <form action="#" method="post" id=frm_user_search>
        	<input type="hidden" value="<?php echo $page;?>" name="page">
        	 <table cellspacing="0" cellpadding="0">
        	 	
                <tbody>
                    <tr>
                    	 <th>
                           <?php echo $_lang['recharge_single_num'];?>
                        </th>
                        <td>
                            <input type="text" value="<?php echo $w['order_id'];?>" name="w[order_id]" class="txt" onkeyup="clearstr(this);"/>
                        </td>
 <th>
                            <?php echo $_lang['username'];?>*
                        </th>
                        <td>
                            <input type="text" value="<?php echo $w['username'];?>" name="w[username]" class="txt"/>
                        </td>
<th>
                            <?php echo $_lang['order_type'];?>
                        </th>
                        <td>
                            <select name="w[order_type]">
                            		<option value="">---<?php echo $_lang['please_choose'];?>---</option>
                            	<?php if(is_array($charge_type_arr)) { foreach($charge_type_arr as $k => $v) { ?>

 	<option <?php if($w['order_type']==$k) { ?>selected="selected" <?php } ?>  value="<?php echo $k;?>"><?php echo $v;?></option>
<?php } } ?>
                            </select>
                       </td>
   
</tr>
<tr>
                        <th>
                            <?php echo $_lang['result_order'];?>
                        </th>
                        <td>
                       <select name="w[ord][]">
                           <option value="order_id" <?php if($w['ord']['0']=='order_id' or !isset($w['ord']['0'])) { ?> selected="selected"<?php } ?>><?php echo $_lang['default'];?><?php echo $_lang['order'];?></option>
                           <option value="pay_time" <?php if($w['ord']['0']=='pay_time' ) { ?> selected="selected"<?php } ?>><?php echo $_lang['recharge_time'];?></option>
                      </select>
                      <select name="w[ord][]">
                            <option <?php if($w['ord']['1']=='desc' or !isset($w['ord']['1'])) { ?>selected="selected" <?php } ?> value="desc"><?php echo $_lang['desc'];?></option>
                            <option <?php if($w['ord']['1']=='asc') { ?>selected="selected" <?php } ?> value="asc"><?php echo $_lang['asc'];?></option>
                      </select>
                       </td>
                        <th>
                                                    <?php echo $_lang['list_result'];?>
                         </th>
                        <td>
                            <select name="w[page_size]">
                               <option value="10" <?php if($w['page_size']=='10') { ?>selected="selected"<?php } ?>><?php echo $_lang['page_size'];?>10</option>
                               <option value="20" <?php if($w['page_size']=='20') { ?>selected="selected"<?php } ?>><?php echo $_lang['page_size'];?>20</option>
                               <option value="30" <?php if($w['page_size']=='30') { ?>selected="selected"<?php } ?>><?php echo $_lang['page_size'];?>30</option>
                             </select>
                             <button class="pill" type="submit" value="<?php echo $_lang['search'];?>" name="sbt_search">
                                <span class="icon magnifier">&nbsp;</span><?php echo $_lang['search'];?>
                              </button>
                           </td>
   
<th>&nbsp;</th>
                     <td>&nbsp;</td>
                        </tr>
                  </tbody>
            </table>
        </form>
    </div>
 </div>
<!--搜索结束-->
<div class="box list">
    <div class="title">
        <h2><?php echo $_lang['statistics_info'];?></h2>
    </div>
     <div class="detail">
        <form action="index.php?do=<?php echo $do;?>&view=recharge" method="post" id=frm_art_action>
 	<input type="hidden" value="<?php echo $page;?>" name="page">
<input type="hidden" name="w[page_size]" value="<?php echo $page_size;?>">
<div id="ajax_dom"><input type="hidden" value="<?php echo $page;?>" name="page">
  <table cellpadding="0" cellspacing="0">
             <tbody>
               <tr>
               		<th>
               			<input type="checkbox" id="checkbox" onclick="checkall();" class="checkbox" >ID
               		</th>
                    
   <th>
                        <?php echo $_lang['order_type'];?>
                    </th>
                    <th>
                        <?php echo $_lang['collection_type'];?>
                    </th>
                    <th>
                        <?php echo $_lang['recharge_er'];?>
                    </th>
                    <th>
                        <?php echo $_lang['recharge_cash'];?>
                    </th>
                    <th>
                        <?php echo $_lang['recharge_time'];?>
 </th>
                    <th>
                        <?php echo $_lang['recharge_status'];?>
                    </th>
                    <th>
                       <?php echo $_lang['operate'];?>
                    </th>
                </tr>
  				 <?php if(is_array($recharge_arr)) { foreach($recharge_arr as $k => $v) { ?>
                <tr class='item'>
                	<td>
                		<input type="checkbox" name="ckb[]" class="checkbox" value="<?php echo $v['order_id'];?>"><?php echo $v['order_id'];?>
                	
</td>
                   
                    <td>
                    	<?php echo $charge_type_arr[$v['order_type']];?>
                    </td>
                    <td>
                        <font color="red">
                          <?php if($v['order_type']=='offline_charge') { ?>
<?php echo $bank_arr[$v['pay_type']];?>
  <?php } else { ?>
<?php echo $v['pay_type'];?>
  <?php } ?>
</font>
                    </td>
                    <td>
                        <?php echo $v['username'];?>
                    </td>
<td>
                        <font color=red><?php  echo keke_curren_class::output(floatval($v['pay_money']),-1);  ?></font>
                    </td>
 <td>
                        <?php if($v['pay_time']){echo date('Y-m-d H:i:s',$v['pay_time']); } ?>
                    </td>
                    <td>
                    	<?php echo $status_arr[$v['order_status']]?>
                    </td>
                    <td>
                    	<?php if($v['order_status']=='wait'&&$offline_pay[$v['pay_type']]) { ?>
                    		<a href="index.php?do=<?php echo $do;?>&view=<?php echo $view;?>&ac=pass&order_id=<?php echo $v['order_id'];?>" onclick="return cdel(this,'<div style=width:300px;word-wrap:break-word;word-break:normal><?php if($v['pay_info']) { ?><?php echo $_lang['user_recharge_att_info'];?>：<?php echo $v['pay_info']?><?php } else { ?><?php echo $_lang['user_does_not_charge_info'];?><?php } ?></div><?php echo $_lang['confirm_cashin'];?>？');" class="button"><span class="cog icon"></span><?php echo $_lang['confirm_of_payment'];?>？</a>
                       		<a href="index.php?do=<?php echo $do;?>&view=<?php echo $view;?>&ac=del&order_id=<?php echo $v['order_id'];?>" onclick="return cdel(this);" class="button"><span class="trash icon"></span><?php echo $_lang['delete'];?></a>
                    	<?php } ?>
</td>
                  
                </tr><?php } } ?>
                    <tr>
                    <td colspan="9">
                               
                           <div class="clearfix">
                           	 
<label for="checkbox"><?php echo $_lang['select_all'];?></label>　
<input type="hidden" name="sbt_action" class="sbt_action"/>   
                           		<button name="sbt_action" type="submit" value="<?php echo $_lang['mulit_delete'];?>" onclick="return batch_act(this,'frm_art_action');" class="pill negative">
                                      <span class="icon trash"></span><?php echo $_lang['mulit_delete'];?>
                                 </button>
  </div>
                    </td>
                  </tr>
                </tbody>
              </table>
  <div class="page"><?php echo $pages['page'];?></div>
</div>
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