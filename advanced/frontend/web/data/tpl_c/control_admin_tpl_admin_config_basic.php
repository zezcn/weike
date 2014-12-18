<?php keke_tpl_class::checkrefresh('control/admin/tpl/admin_config_basic', '1418787114' );?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    	<h1><?php echo $_lang['global_config'];?></h1>
         <div class="tool">         
            <a href="index.php?do=config&view=basic&op=info" <?php if($op == 'info') { ?>class="here"<?php } ?> > <?php echo $_lang['website_config'];?></a>
            <a href="index.php?do=config&view=basic&op=conf" <?php if($op == 'conf') { ?>class="here"<?php } ?> >	<?php echo $_lang['basic_config'];?></a>
<a href="index.php?do=config&view=basic&op=seo" <?php if($op == 'seo') { ?>class="here"<?php } ?> ><?php echo $_lang['seo_config'];?></a>
<a href="index.php?do=config&view=mail" <?php if($view == 'mail') { ?>class="here"<?php } ?> ><?php echo $_lang['mail_config'];?></a>
    	</div>
</div>

<div class="box post">
        <div class="tabcon">
        	<div class="title"><h2><?php if($op == 'info') { ?><?php echo $_lang['website_config'];?><?php } elseif($op == 'conf') { ?><?php echo $_lang['basic_config'];?><?php } ?></h2></div>
            <div class="detail">
                 <form name="frm_config_basic" id="frm_config_basic" action="index.php?do=config&view=basic&op=<?php echo $op;?>" method="post" accept-charset="<?php echo $_K['charset'];?>" enctype='multipart/form-data'>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                     <?php if($op=='info') { ?>
  <tr>
                        <th scope="row" width="130"> <?php echo $_lang['site_name'];?><?php echo $_lang['zh_mh'];?></th>
                        <td>
<input type="text" size="50" class="txt" name="website_name"  
 value="<?php echo $config_arr['website_name']?>" maxlength="100" 
 limit="required:true;len:3-100;general:false" 
 msg="<?php echo $_lang['site_name_cannot_be_empty'];?><?php echo $_lang['zh_dh'];?><?php echo $_lang['length_3_100'];?>" title='<?php echo $_lang['please_input_the_website_name'];?>'
 msgArea="web_name_msg" />
                    	<span id="web_name_msg"></span>
<br/>&nbsp;&nbsp;<?php echo $_lang['site_name_description'];?> 
                        </td>
                      </tr>
                      <tr>
                        <th scope="row"><?php echo $_lang['website_URL'];?><?php echo $_lang['zh_mh'];?></th>
                        <td><input type="text" size="50" name="website_url"  value="<?php echo $config_arr['website_url']?>" maxlength="100" limit="required:true;len:3-100;general:false" msg="<?php echo $_lang['website_address_error'];?><?php echo $_lang['zh_dh'];?><?php echo $_lang['length'];?>3-100" msgArea="web_url_msg" class="txt"/>
                    <span id="web_url_msg"></span><br/>&nbsp;&nbsp;<?php echo $_lang['fill_in_your_site_complete_domain_name'];?><?php echo $_lang['zh_jh'];?><?php echo $_lang['for_example'];?>: http://www.kekezu.com<?php echo $_lang['zh_dh'];?><?php echo $_lang['not_slash_at_the_end_of'];?> (“/”) </td>
                      </tr>
                      
                     <tr>
         <th scope="row">
                    <?php echo $_lang['website_logo'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <input type="text" size="50" name="web_logo" id="fle_web_logo" class="txt" value="<?php echo $config_arr['web_logo']?>"><br/>&nbsp;&nbsp;logo<?php echo $_lang['height'];?>65px <?php echo $_lang['width'];?>300px <?php echo $_lang['map_type'];?>:jpeg,gif,png 
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo $_lang['company_name'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <input type="text" size="50" name="company" value="<?php echo $config_arr['company'];?>" limit="len:3-100" msg="<?php echo $_lang['company_name'];?><?php echo $_lang['length'];?><?php echo $_lang['zh_mh'];?>3-100,<?php echo $_lang['no_special_characters'];?>" msgArea="txt_company_msg" class="txt"/><span id="txt_company_msg"></span><br/>&nbsp;&nbsp;<?php echo $_lang['bottom_show_contact'];?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo $_lang['contact_address'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <input type="text" size="50" maxlength="200" name="address" value="<?php echo $config_arr['address'];?>" limit="len:3-200;general:false" msg="<?php echo $_lang['contact_address'];?><?php echo $_lang['length'];?><?php echo $_lang['zh_mh'];?>3-200" msgArea="txt_address_msg" class="txt"/><span id="txt_address_msg"></span><br/>&nbsp;&nbsp;<?php echo $_lang['bottom_show_contact'];?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo $_lang['contact_tel'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <input type="text" size="50" maxlength="20" name="phone" value="<?php echo $config_arr['phone'];?>" class="txt"/><br/>&nbsp;&nbsp;<?php echo $_lang['bottom_show_contact'];?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo $_lang['customer_service_phone'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <input type="text" size="50" maxlength="100" name="kf_phone" value="<?php echo $config_arr['kf_phone'];?>" class="txt"/><br/>&nbsp;&nbsp;（<?php echo $_lang['plurality_comma_separated'];?>）<?php echo $_lang['bottom_show_contact'];?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo $_lang['zip_code'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <input type="text" size="50" name="postcode" value="<?php echo $config_arr['postcode'];?>" limit="len:0-10" msg="<?php echo $_lang['zip_code_error'];?>" msgArea="txt_post_msg" class="txt"/><span id="txt_post_msg"></span><br/>&nbsp;&nbsp;<?php echo $_lang['bottom_show_contact'];?>
                </td>
            </tr>

            <tr>
                <th scope="row">
                    <?php echo $_lang['zip_the_website_registration'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <input type="text" size="50" name="filing" value="<?php echo $config_arr['filing'];?>" limit="len:3-20;general:false" msg="<?php echo $_lang['record_number_length'];?>3-20" msgArea="txt_filing_msg" class="txt"/><span id="txt_filing_msg"></span><br/>&nbsp;&nbsp;<?php echo $_lang['icp_info'];?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo $_lang['default_lang'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                <select name="lang">
                <?php if(is_array($lang_arr)) { foreach($lang_arr as $k => $v) { ?>
                	<option value="<?php echo $k;?>" <?php if($config_arr['lang']==$k) { ?>selected<?php } ?>><?php echo $v;?></option>
                <?php } } ?>
                </select>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo $_lang['third_party_code_statistics'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <textarea cols="50" name="stats_code" msg="<?php echo $_lang['third_party_code_statistics'];?><?php echo $_lang['length'];?>3-500" msgArea="txt_stats_code_msg" rows="3" class="textarea"><?php echo $config_arr['stats_code']?></textarea>
                    <span id="txt_stats_code_msg"></span><br/>&nbsp;&nbsp;<?php echo $_lang['js_code'];?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo $_lang['is_close'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <label for="checkclose1">
                        <input type="radio" id="checkclose1" name="is_close" <?php if($config_arr['is_close']==1) { ?>checked="checked"<?php } ?> value="1" /><?php echo $_lang['close'];?>
                    </label>
                    <label for="checkclose2">
                        <input type="radio" id="checkclose2" name="is_close" <?php if($config_arr['is_close']==2) { ?>checked="checked"<?php } ?> value="2" /><?php echo $_lang['open'];?>
                    </label>
                </td>
            </tr>
            <tr id="close_true" style="display:none;">
                <th scope="row">
                    <?php echo $_lang['website_close_reason'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <textarea cols="52" name="close_reason" rows="3" class="textarea"><?php echo $config_arr['close_reason'];?></textarea>
                </td>
            </tr>
<?php } elseif($op=='conf') { ?>

            <tr>
                <th scope="row">
                    <?php echo $_lang['voucher_is_enabled'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <label for="rdo_credit_is_allow">
                        <input type="radio" id="rdo_credit_is_allow" onclick="if(this.checked){$('#sp_inp_credit_rename').hide();}else{$('#sp_inp_credit_rename').show()}" name="credit_is_allow" <?php if($config_arr['credit_is_allow']==2) { ?>checked="checked" <?php } ?> value="2"><?php echo $_lang['close'];?>
                    </label>
                    <label for="rdo_crdeit_is_allow2">
                        <input type="radio" id="rdo_crdeit_is_allow2" onclick="if(this.checked){$('#sp_inp_credit_rename').show();}else{$('#sp_inp_credit_rename').hide()}" name="credit_is_allow" <?php if($config_arr['credit_is_allow']==1) { ?>checked="checked" <?php } ?> value="1"><?php echo $_lang['open'];?>
                    </label><b style="font-weight:normal;" id="sp_inp_credit_rename" <?php if($credit_is_allow==2) { ?>style="display:none;"<?php } ?>><?php echo $_lang['vouchers_renamed'];?><?php echo $_lang['zh_mh'];?>  <input type="text"  class="txt" name="credit_rename" id="inp_credit_rename" value="<?php echo $config_arr['credit_rename']?>">(<?php echo $_lang['default_please_leave_blank'];?>)</b>
                </td>
            </tr>
<tr>
                <th scope="row">
                    <?php echo $_lang['attachment_cap'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <input type="text" size="50" name="max_size" value="<?php echo $config_arr['max_size'];?>" limit="required:true;type:int;len:1-2" value="2" msg="<?php echo $_lang['attachment_cap'];?>" msgArea="txt_max_size_msg" class="txt"/><b style="color:red">*</b>
                    <span id="txt_max_size_msg"></span><?php echo $_lang['attachment_cap_notice'];?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo $_lang['attachment_format'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <input type="text" size="50" name="file_type" value="<?php echo $config_arr['file_type'];?>" limit="required:true;len:3-100;general:false" msg="<?php echo $_lang['attachment_format_msg'];?><?php echo $_lang['zh_mh'];?>3-100" msgArea="txt_file_type_msg" class="txt"/><b style="color:red">*</b>
                    <span id="txt_file_type_msg"></span><?php echo $_lang['attachment_format_notice'];?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo $_lang['user_disable_keyword'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <textarea cols="50" name="ban_users" rows="3" class="textarea"><?php echo $config_arr['ban_users'];?></textarea>
                   <?php echo $_lang['user_disable_keyword_msg'];?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo $_lang['content_disable_keyword'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <textarea cols="50" name="ban_content" rows="3" class="textarea"><?php echo $config_arr['ban_content'];?></textarea>
                   <?php echo $_lang['content_disable_keyword_msg'];?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo $_lang['register_time_limit'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <input type="text" size="51" name="reg_limit" value="<?php echo $config_arr['reg_limit'];?>" limit="type:int" msg="<?php echo $_lang['register_time_limit_msg'];?>" msgArea="txt_reg_limit_msg" class="txt"/><span id="txt_reg_limit_msg"></span><?php echo $_lang['register_time_limit_notice'];?>
                </td>
            </tr>
<tr>
                <th scope="row">
                   <?php echo $_lang['user_email_active'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                	<label for="red_reg">
                        <input type="radio" id="rdo_reg" name="allow_reg_action" <?php if($config_arr['allow_reg_action']==1) { ?>checked="checked" <?php } ?>value="1" /><?php echo $_lang['open'];?>
                    </label>
                    <label for="rdo_reg2">
                        <input type="radio" id="rdo_reg2" name="allow_reg_action" <?php if($config_arr['allow_reg_action']==0) { ?>checked="checked" <?php } ?>value="0" /><?php echo $_lang['close'];?>
                    </label>
<?php echo $_lang['user_email_active_notice'];?>
               
                </td>
            </tr>
<?php } elseif($op=='seo') { ?>
<tr>
               <th scope="row">
            <?php echo $_lang['is_pseudo_static'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <label for="rdo_is_rewrite_1">
                        <input type="radio" id="rdo_is_rewrite_1" name="is_rewrite" <?php if($config_arr['is_rewrite']==0||!$config_arr['is_rewrite']) { ?> checked="checked" <?php } ?> value="0" /><?php echo $_lang['close'];?>
                    </label>
                    <label for="rdo_is_rewrite_2">
                        <input type="radio" id="rdo_is_rewrite_2" name="is_rewrite" <?php if($config_arr['is_rewrite']==1) { ?> checked="checked" <?php } ?> value="1" /><?php echo $_lang['open'];?>
                    </label>
                    <a href ="index.php?do=config&view=basic&op=seo&ac=get_url_rule"><?php echo $_lang['view_rewrite_rule'];?></a>
                </td>
            </tr>

<tr>
               <th scope="row">
            <?php echo $_lang['second_domain'];?>
                </th>
                <td>
                    <label for="rdo_second_domain_1">
                        <input type="radio" id="rdo_second_domain_1" name="second_domain" <?php if($config_arr['second_domain']==0||!$config_arr['second_domain']) { ?> checked="checked" <?php } ?> value="0" /><?php echo $_lang['close'];?>
                    </label>
                    <label for="rdo_second_domain_2">
                        <input type="radio" id="rdo_second_domain_2" name="second_domain" <?php if($config_arr['second_domain']==1) { ?> checked="checked" <?php } ?> value="1" /><?php echo $_lang['open'];?>
                    </label>
<span id="t_domain" style='display:none;'>
<input type="text" size="20" name="top_domain" id="top_domain" value="<?php echo $config_arr['top_domain'];?>"
 class="txt"><b style="color:red">*</b><?php echo $_lang['top_domain_desc'];?>
              		</span>
<div>(<?php echo $_lang['pan_analytic'];?>)</div>
   </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo $_lang['website_title'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <input type="text" size="50" name="seo_title" value="<?php echo $config_arr['seo_title'];?>" limit="required:true;len:3-100;general:false" msg="<?php echo $_lang['website_title_msg'];?>" msgArea="seo_title_msg" maxlength="100" class="txt"/><b style="color:red">*</b>
                    <span id="seo_title_msg"></span><?php echo $_lang['website_title_notice'];?>
                </td>
            </tr>
<tr>
                <th scope="row">
                    <?php echo $_lang['meta_keywords'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <input type="text" size="50" name="seo_keyword" value="<?php echo $config_arr['seo_keyword'];?>" limit="required:true;len:3-500;general:false" msg="<?php echo $_lang['meta_keywords_msg'];?>" msgArea = "txt_seo_keywords_msg" class="txt"/>
                    <span id="txt_seo_keywords_msg"></span><?php echo $_lang['meta_keywords_notice'];?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo $_lang['meta_description'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <textarea cols="50" rows="8" name="seo_desc" limit="required:true;len:3-500;general:false" msg="<?php echo $_lang['meta_description_msg'];?>" msgArea = "seo_description_msg" rows="3" class="textarea"><?php echo $config_arr['seo_desc'];?></textarea>
                    <span id="seo_description_msg"></span><?php echo $_lang['meta_description_notice'];?>
                </td>
            	</tr>
<?php } ?>
<th scope="row">&nbsp;</th>
<td>
<div class="clearfix padt10">
                                <button class="positive pill primary button" type="submit" name='submit' value="<?php echo $_lang['submit'];?>"><span class="check icon"></span><?php echo $_lang['submit'];?></button>
                                
                </div>
</td>
                    
                    </table>
                    
                      
                    
        </form>
            </div>
        </div>
        
        
    </div>


<script type="text/javascript">
    $(function(){
    	$("#rdo_second_domain_2").click(function(){
$("#t_domain").show();
})
if($("#rdo_second_domain_2").is(":checked")){
$("#t_domain").show();
}
    	$("#rdo_second_domain_1").click(function(){
$("#t_domain").hide();
})
        $("#frm_config_basic").submit(function(){
            var value = $("#fle_web_logo").val();
            if (value) {
                s = value.lastIndexOf(".");
                lastname = value.substring(s, value.length);
                if (lastname.toLowerCase() != ".gif" && lastname.toLowerCase() != ".jpg" && lastname.toLowerCase() != ".png" && lastname.toLowerCase() != ".jpeg") {
                    alert("<?php echo $_lang['file_type_error'];?>")
                    $(this).focus();
                    return false;
                }
                else {
                    return true;
                }
            }
            
            
        })
        if ($("#checkclose1").attr("checked")) {
            $("#close_true").show();
        }
        else {
            $("#close_true").hide();
        }
        $("#checkclose1").click(function(){
            $("#close_true").show();
        })
        $("#checkclose2").click(function(){
            $("#close_true").hide();
        })
        
        
        
    })
</script>
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