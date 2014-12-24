<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>keke admin</title>


<link href="tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href="./resource/css/buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href="tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="./resource/js/jquery.js"></script>
<script type="text/javascript" src="./resource/js/system/keke.js"></script>
<script type="text/javascript" src="./resource/js/in.js"></script>
</head>
<body class="frame_body">
<div class="frame_content">
<div id="append_parent"></div>
<div class="page_title">
    	<h1>全局配置</h1>
         <div class="tool">         
            <a href="index.php?do=config&view=basic&op=info" class="here" > 站点配置</a>
            <a href="index.php?do=config&view=basic&op=conf"  >	基本配置</a>
<a href="index.php?do=config&view=basic&op=seo"  >SEO配置</a>
<a href="index.php?do=config&view=mail"  >邮箱配置</a>
    	</div>
</div>

<div class="box post">
        <div class="tabcon">
        	<div class="title"><h2>站点配置</h2></div>
            <div class="detail">
                 <form name="frm_config_basic" id="frm_config_basic" action="index.php?do=config&view=basic&op=info" method="post" accept-charset="utf-8" enctype='multipart/form-data'>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                       <tr>
                        <th scope="row" width="130"> 网站名称：</th>
                        <td>
<input type="text" size="50" class="txt" name="website_name"  
 value="客客出品专业威客系统" maxlength="100" 
 limit="required:true;len:3-100;general:false" 
 msg="网站名称不能为空，长度为3-100" title='请输入网站名称'
 msgArea="web_name_msg" />
                    	<span id="web_name_msg"></span>
<br/>&nbsp;&nbsp;网站名称并非网站标题,仅在页底显示及发送邮件等处使用 
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">网站URL：</th>
                        <td><input type="text" size="50" name="website_url"  value="http://www.yii.com/weike" maxlength="100" limit="required:true;len:3-100;general:false" msg="网站地址不正确，长度3-100" msgArea="web_url_msg" class="txt"/>
                    <span id="web_url_msg"></span><br/>&nbsp;&nbsp;填写您站点的完整域名。例如: http://www.kekezu.com，不要以斜杠结尾 (“/”) </td>
                      </tr>
                      
                     <tr>
         <th scope="row">
                    网站logo：                </th>
                <td>
                    <input type="text" size="50" name="web_logo" id="fle_web_logo" class="txt" value="logo.png"><br/>&nbsp;&nbsp;logo高65px 宽300px 图片类型:jpeg,gif,png 
                </td>
            </tr>
            <tr>
                <th scope="row">
                    公司名称：                </th>
                <td>
                    <input type="text" size="50" name="company" value="武汉客客信息技术有限公司" limit="len:3-100" msg="公司名称长度：3-100,不能有特殊字符" msgArea="txt_company_msg" class="txt"/><span id="txt_company_msg"></span><br/>&nbsp;&nbsp;将显示在页面底部的联系方式处                </td>
            </tr>
            <tr>
                <th scope="row">
                    联系地址：                </th>
                <td>
                    <input type="text" size="50" maxlength="200" name="address" value="湖北省武汉市" limit="len:3-200;general:false" msg="联系地址长度：3-200" msgArea="txt_address_msg" class="txt"/><span id="txt_address_msg"></span><br/>&nbsp;&nbsp;将显示在页面底部的联系方式处                </td>
            </tr>
            <tr>
                <th scope="row">
                    联系电话：                </th>
                <td>
                    <input type="text" size="50" maxlength="20" name="phone" value="18971533922" class="txt"/><br/>&nbsp;&nbsp;将显示在页面底部的联系方式处                </td>
            </tr>
            <tr>
                <th scope="row">
                    客服电话：                </th>
                <td>
                    <input type="text" size="50" maxlength="100" name="kf_phone" value="027-87733922" class="txt"/><br/>&nbsp;&nbsp;（多个以逗号隔开）将显示在页面底部的联系方式处                </td>
            </tr>
            <tr>
                <th scope="row">
                    邮编：                </th>
                <td>
                    <input type="text" size="50" name="postcode" value="430001" limit="len:0-10" msg="邮编不正确" msgArea="txt_post_msg" class="txt"/><span id="txt_post_msg"></span><br/>&nbsp;&nbsp;将显示在页面底部的联系方式处                </td>
            </tr>

            <tr>
                <th scope="row">
                    网站备案号：                </th>
                <td>
                    <input type="text" size="50" name="filing" value="" limit="len:3-20;general:false" msg="备案号长度3-20" msgArea="txt_filing_msg" class="txt"/><span id="txt_filing_msg"></span><br/>&nbsp;&nbsp;如果网站已备案，输入您的备案信息，页面底部将显示 ICP备案信息                </td>
            </tr>
            <tr>
                <th scope="row">
                    网站默认语言：                </th>
                <td>
                <select name="lang">
                                	<option value="cn" selected>简体中文</option>
                                </select>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    第三方统计代码：                </th>
                <td>
                    <textarea cols="50" name="stats_code" msg="第三方统计代码长度3-500" msgArea="txt_stats_code_msg" rows="3" class="textarea"></textarea>
                    <span id="txt_stats_code_msg"></span><br/>&nbsp;&nbsp;填写第三方流量统计JS代码                </td>
            </tr>
            <tr>
                <th scope="row">
                    网站是否关闭：                </th>
                <td>
                    <label for="checkclose1">
                        <input type="radio" id="checkclose1" name="is_close"  value="1" />关闭                    </label>
                    <label for="checkclose2">
                        <input type="radio" id="checkclose2" name="is_close" checked="checked" value="2" />开启                    </label>
                </td>
            </tr>
            <tr id="close_true" style="display:none;">
                <th scope="row">
                    网站关闭的原因：                </th>
                <td>
                    <textarea cols="52" name="close_reason" rows="3" class="textarea">网站正在升级维护中，预计于2012年12月21日开放，请耐心等待！期间您如果有任何疑问，请联系网站站长或者客服。</textarea>
                </td>
            </tr>
<th scope="row">&nbsp;</th>
<td>
<div class="clearfix padt10">
                                <button class="positive pill primary button" type="submit" name='submit' value="提交"><span class="check icon"></span>提交</button>
                                
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
                    alert("文件类型不对")
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
src="./resource/js/artdialog/artDialog.js"></script>
<script type="text/javascript"
src="./resource/js/artdialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript"
src="./resource/js/artdialog/artDialog.iframeTools.source.js"></script>
<script type="text/javascript" src="./lang/cn/script/lang.js"></script>
<script type="text/javascript">
In.add('form_and_validation', {
path : "./resource/js/system/form_and_validation.js",
type : 'js'
});
In.add('xheditor', {
path : "./resource/js/xheditor/xheditor.js",
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
path : "./resource/js/system/script_calendar.js"
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
