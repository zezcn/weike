
    <body id="square">

<div class="blue_style" id="wrapper">

        <div id="append_parent">
        </div>
        <div id="ajaxwaitid">
        	<div>
        	<img src="tpl/default/theme/blue/img/system/loading.gif" alt="loading"/>
请求处理中...</div>
</div>
 
<!--无刷新临时替换层-->
        <div id="noflushwarper">
        	<div id="noflushwarper_sub"></div>
        </div>
 	
<!--body start-->


<!--顶部广告位 start-->
<div class="t_c site_messages">
</div>
<!--顶部广告位-->




   
    <div class="clear"></div>
<div class="wrapper">
<div class="mt_20">
<div class="container_24 clearfix">
<div class="box clearfix">
<!-- index_left start  -->
<div class="index_left clearfix">
<div class="left_nav clearfix">
    <dl>
    	<dd><a href="index.php?do=square"  class="selected" ><span class="icon16 home mr_5 "></span> 广场首页</a></dd>
</dl>
</div>
</div>
<!-- index_left end  -->
<div class="core clearfix">
<!-- core_top start  -->
<div class="core_top clearfix">
<div class="core_header">
<img src="tpl/default/img/square/tell.png">
</div>
<div class="core_center clearfix">
<form id="free_form" name="free_form" action="index.php?do=square&view=index" method="post">
<input type="hidden" name="formhash" value="ce9abd">
<input type="hidden" name="pub_type" id="pub_type">
<div class="core_com clearfix">
<div class="core_com_up">
<div class="drop_down" id="pub_select">
<a href="javascript:void(0);" class="selected" rel="free_task"><span>免费需求</span>▼</a>
<a href="javascript:void(0);"  class="hidden" rel="free_task">免费需求</a>
<a href="javascript:void(0);"  class="hidden" rel="free_service">免费服务</a>
</div> 
<input type="text" id="txt_title" class="togg_a" name="txt_title" onkeydown="checkTitleLen()" value="需求设计标志、取名、开发网站、写策划案..." rel="需求设计标志、取名、开发网站、写策划案...">
</div>
<div class="core_com_down" id="upload_tip">
<textarea class="togg_b" name="tar_content" id="tar_content" onkeydown="checkTitleLen()" rel="说出你的需求   >    让众多威客来帮你   >   讨论和评价">说出你的需求   >    让众多威客来帮你   >   讨论和评价</textarea>
</div>
</div>
<div class="core_footer mt_10 clearfix">
<ul >
<li class="clearfix">
<a href="javascript:void(0)" id="add_file" ><span class="icon16 round-plus "></span><span class="arrow_t"></span></a>
<div class="add_des" style="display:none">

                                                 <!--上传内容-->
<div class="grid_10 po_re">
                <input type="file" class="file" name="file_upload_i" id="file_upload_i">
                      <div class="po_ab" style="left:150px;top:5px;">
                            <span class="mr_20">5个附件</span>
                              <a href="javascript:void();" class="file_type" title="<ol class='t_l'><li>1M.</li><li>*.rar;*.zip*;.xls;*.doc;*.ppt</li></ol>">无法上传?</a>
                         </div>
                            <input type="hidden" name="file_path_2" id="file_path_2">
             </div> 

<script type="text/javascript">
             				var max_filecount = "";
max_filecount?'':max_filecount=5;
$(function(){
uploadify({
auto:true,
size:"1MB",
exts:'*.rar;*.zip;*.xls;*.doc;*.ppt',
file:'file_upload_i',

limit:max_filecount},
{
fileType:'att',
objType:'service'
});
})
</script>
            <!--end 上传内容-->
</div>
</li>
<li class="clearfix">
<a href="javascript:void(0)" id="add_pic" ><span class="icon16 picture "></span><span class="arrow_t"></span></a>
<div class="add_des" style="display:none">

 <div class="rowElem clearfix ">
                          
                            <!--上传内容-->
                            <div class="grid_10 po_re">
                                <input type="file" class="file" name="upload" id="upload">
                                <div class="po_ab" style="left:150px;top:5px;">
                                    <span class="mr_20">最多可添加5个附件</span>
                                    <a href="javascript:void();" class="file_type" title="<ol class='t_l'><li>1M.</li><li>*.jpg;*.jpeg;*.gif;*.png;*.bmp</li></ol>">无法上传?</a>
                                </div>
                                    <input type="hidden" name="file_ids" id="file_ids">
                            </div> 
                  
<script type="text/javascript">
$(function(){
uploadify({
auto:true,
size:"1MB",
exts:'*.jpg;*.jpeg;*.gif;*.png;*.bmp',
limit:5}
,{
fileType:'service',
objType:'service'
});
})
</script>
<script src="resource/js/uploadify/jquery.uploadify-3.1.min.js" type="text/javascript"></script>
<link href="resource/js/uploadify/uploadify.css" rel="stylesheet">
<!--end 上传内容-->
</div>
</li>
</ul>

<a href="javascript:void(0);" onclick="freeSub();" id="sub_button" class="submit fl_r" disabled="disabled" >发布</a>
</div>
</form>
</div>
</div>
<!-- core_top end  -->
<!-- core_down start  -->
<div class="core_down clearfix">
<h2>最新动态</h2>
<div class="core_down_nav ml_20 mr_20">
<a href="index.php?do=square&view=index" class="selected">所有</a>
<a href="index.php?do=square&view=index&t=free_task" >免费需求</a>
<a href="index.php?do=square&view=index&t=task" >赏金任务</a>
<a href="index.php?do=square&view=index&t=free_service" >免费服务</a>
<a href="index.php?do=square&view=index&t=service" >付费商品</a>
</div>
<input type="hidden" value="11" id="last_id">
<input type="hidden" value="" id="last_time">
<div class="msg msg_need block ml_20 mr_20 hidden" id="show_new" >
<a href="#"  class="block" >有15条新动态，点击查看</a>
</div>
<div class="core_down_info mt_10 mb_10 clearfix" >
<ul id="data_contain">

<li class="clearfix frame">
<div class="info_van clearfix">
<a href="index.php?do=space&member_id=2" target="_blank">
<img src='http://localhost/yii2.0/data/avatar/system/2_small.jpg' uid='2' class='pic_small'><p class="c999">猪八戒</p>
</a>
</div>
<div class="info_body clearfix">
<div>
<span class="sale mr_5">出售 </span>
<a href="index.php?do=service&sid=11"  class="task_info" target="_blank">【创意】著作权（版权）登记</a>

<span class="ml_5 mr_5 c999">1年8个月12天13小时38分前</span>
<a href="index.php?do=space&member_id=6" target="_blank">丸美弹力</a><span class="c999">购买</span>
</div>
<div>售价：<span class="mr_5 org">
￥100.00元</span>来自：<span>威客服务</span>
</div>
<div class="info_talk clearfix">
<a href="javascript:void(0);" class="border_r_c"><span>0</span>留言</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>收藏</a>
<a href="javascript:void(0)" class="border_r_c"><span>1</span>售出</a>
</div>
</div>
</li>

<li class="clearfix frame">
<div class="info_van clearfix">
<a href="index.php?do=space&member_id=2" target="_blank">
<img src='http://localhost/yii2.0/data/avatar/system/2_small.jpg' uid='2' class='pic_small'><p class="c999">猪八戒</p>
</a>
</div>
<div class="info_body clearfix">
<div>
<span class="sale mr_5">出售 </span>
<a href="index.php?do=service&sid=11"  class="task_info" target="_blank">【创意】著作权（版权）登记</a>

<span class="ml_5 mr_5 c999">1年8个月12天13小时38分前</span>
<a href="index.php?do=space&member_id=6" target="_blank">丸美弹力</a><span class="c999">购买</span>
</div>
<div>售价：<span class="mr_5 org">
￥100.00元</span>来自：<span>威客服务</span>
</div>
<div class="info_talk clearfix">
<a href="javascript:void(0);" class="border_r_c"><span>0</span>留言</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>收藏</a>
<a href="javascript:void(0)" class="border_r_c"><span>1</span>售出</a>
</div>
</div>
</li>

<li class="clearfix frame">
<div class="info_van clearfix">
<a href="index.php?do=space&member_id=6" target="_blank">
<img src='http://localhost/yii2.0/data/avatar/system/16_small.jpg' uid='6' class='pic_small'><p class="c999">丸美弹力</p>
</a>
</div>
<div class="info_body clearfix">
<div>
<span class="needs mr_5">需求 </span>
<a href="index.php?do=task&task_id=34"  class="task_info" target="_blank">淘宝网店推广 10元1稿 简单快捷</a>

<span class="ml_5 mr_5 c999">1年8个月12天13小时38分前</span>
<a href="index.php?do=space&member_id=4" target="_blank">shangk</a><span class="c999">投稿</span>
</div>
<div>赏金：<span class="mr_5 org">
￥120.00元</span>来自：<span>计件悬赏</span>
</div>
<div class="info_talk clearfix">
<a href="javascript:void(0);" class="border_r_c"><span>1</span>投标</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>留言</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>收藏</a>
</div>
</div>
</li>

<li class="clearfix frame">
<div class="info_van clearfix">
<a href="index.php?do=space&member_id=2" target="_blank">
<img src='http://localhost/yii2.0/data/avatar/system/2_small.jpg' uid='2' class='pic_small'><p class="c999">猪八戒</p>
</a>
</div>
<div class="info_body clearfix">
<div>
<span class="needs mr_5">需求 </span>
<a href="index.php?do=task&task_id=28"  class="task_info" target="_blank">彩票站宣传单设计</a>

<span class="ml_5 mr_5 c999">1年8个月12天13小时39分前</span>
<a href="index.php?do=space&member_id=1" target="_blank">admin</a><span class="c999">投稿</span>
</div>
<div>赏金：<span class="mr_5 org">
￥80.00元</span>来自：<span>计件悬赏</span>
</div>
<div class="info_talk clearfix">
<a href="javascript:void(0);" class="border_r_c"><span>1</span>投标</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>留言</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>收藏</a>
</div>
</div>
</li>

<li class="clearfix frame">
<div class="info_van clearfix">
<a href="index.php?do=space&member_id=6" target="_blank">
<img src='http://localhost/yii2.0/data/avatar/system/16_small.jpg' uid='6' class='pic_small'><p class="c999">丸美弹力</p>
</a>
</div>
<div class="info_body clearfix">
<div>
<span class="needs mr_5">需求 </span>
<a href="index.php?do=task&task_id=35"  class="task_info" target="_blank">淘宝网店推广</a>

<span class="ml_5 mr_5 c999">1年8个月12天13小时40分前</span>
<a href="index.php?do=space&member_id=4" target="_blank">shangk</a><span class="c999">投稿</span>
</div>
<div>赏金：<span class="mr_5 org">
￥150.00元</span>来自：<span>计件悬赏</span>
</div>
<div class="info_talk clearfix">
<a href="javascript:void(0);" class="border_r_c"><span>1</span>投标</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>留言</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>收藏</a>
</div>
</div>
</li>

<li class="clearfix frame">
<div class="info_van clearfix">
<a href="index.php?do=space&member_id=2" target="_blank">
<img src='http://localhost/yii2.0/data/avatar/system/2_small.jpg' uid='2' class='pic_small'><p class="c999">猪八戒</p>
</a>
</div>
<div class="info_body clearfix">
<div>
<span class="sale mr_5">出售 </span>
<a href="index.php?do=service&sid=13"  class="task_info" target="_blank">[图兰朵]婚纱摄影重磅推出 黄金路线启动</a>

<span class="ml_5 mr_5 c999">1年8个月12天13小时42分前</span>
<a href="index.php?do=space&member_id=6" target="_blank">丸美弹力</a><span class="c999">购买</span>
</div>
<div>售价：<span class="mr_5 org">
￥2,000.00元</span>来自：<span>威客作品</span>
</div>
<div class="info_talk clearfix">
<a href="javascript:void(0);" class="border_r_c"><span>0</span>留言</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>收藏</a>
<a href="javascript:void(0)" class="border_r_c"><span>1</span>售出</a>
</div>
</div>
</li>

<li class="clearfix frame">
<div class="info_van clearfix">
<a href="index.php?do=space&member_id=2" target="_blank">
<img src='http://localhost/yii2.0/data/avatar/system/2_small.jpg' uid='2' class='pic_small'><p class="c999">猪八戒</p>
</a>
</div>
<div class="info_body clearfix">
<div>
<span class="sale mr_5">出售 </span>
<a href="index.php?do=service&sid=13"  class="task_info" target="_blank">[图兰朵]婚纱摄影重磅推出 黄金路线启动</a>

<span class="ml_5 mr_5 c999">1年8个月12天13小时42分前</span>
<a href="index.php?do=space&member_id=6" target="_blank">丸美弹力</a><span class="c999">购买</span>
</div>
<div>售价：<span class="mr_5 org">
￥2,000.00元</span>来自：<span>威客作品</span>
</div>
<div class="info_talk clearfix">
<a href="javascript:void(0);" class="border_r_c"><span>0</span>留言</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>收藏</a>
<a href="javascript:void(0)" class="border_r_c"><span>1</span>售出</a>
</div>
</div>
</li>

<li class="clearfix frame">
<div class="info_van clearfix">
<a href="index.php?do=space&member_id=6" target="_blank">
<img src='http://localhost/yii2.0/data/avatar/system/16_small.jpg' uid='6' class='pic_small'><p class="c999">丸美弹力</p>
</a>
</div>
<div class="info_body clearfix">
<div>
<span class="needs mr_5">需求 </span>
<a href="index.php?do=task&task_id=46"  class="task_info" target="_blank">轻松下载每个可得钱</a>

<span class="ml_5 mr_5 c999">1年8个月12天13小时42分前</span>
<a href="index.php?do=space&member_id=4" target="_blank">shangk</a><span class="c999">投稿</span>
</div>
<div>赏金：<span class="mr_5 org">
￥90.00元</span>来自：<span>计件悬赏</span>
</div>
<div class="info_talk clearfix">
<a href="javascript:void(0);" class="border_r_c"><span>3</span>投标</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>留言</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>收藏</a>
</div>
</div>
</li>

<li class="clearfix frame">
<div class="info_van clearfix">
<a href="index.php?do=space&member_id=6" target="_blank">
<img src='http://localhost/yii2.0/data/avatar/system/16_small.jpg' uid='6' class='pic_small'><p class="c999">丸美弹力</p>
</a>
</div>
<div class="info_body clearfix">
<div>
<span class="needs mr_5">需求 </span>
<a href="index.php?do=task&task_id=43"  class="task_info" target="_blank">希望女友收到来自各地的祝福短信</a>

<span class="ml_5 mr_5 c999">1年8个月12天13小时43分前</span>
<a href="index.php?do=space&member_id=4" target="_blank">shangk</a><span class="c999">投稿</span>
</div>
<div>赏金：<span class="mr_5 org">
￥300.00元</span>来自：<span>计件悬赏</span>
</div>
<div class="info_talk clearfix">
<a href="javascript:void(0);" class="border_r_c"><span>3</span>投标</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>留言</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>收藏</a>
</div>
</div>
</li>

<li class="clearfix frame">
<div class="info_van clearfix">
<a href="index.php?do=space&member_id=6" target="_blank">
<img src='http://localhost/yii2.0/data/avatar/system/16_small.jpg' uid='6' class='pic_small'><p class="c999">丸美弹力</p>
</a>
</div>
<div class="info_body clearfix">
<div>
<span class="needs mr_5">需求 </span>
<a href="index.php?do=task&task_id=57"  class="task_info" target="_blank">进驻商场&企业生活馆餐饮店的竞标报告</a>

<span class="ml_5 mr_5 c999">1年8个月12天13小时44分前</span>
<a href="index.php?do=space&member_id=1" target="_blank">admin</a><span class="c999">投稿</span>
</div>
<div>赏金：<span class="mr_5 org">
￥100.00元</span>来自：<span>计件悬赏</span>
</div>
<div class="info_talk clearfix">
<a href="javascript:void(0);" class="border_r_c"><span>3</span>投标</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>留言</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>收藏</a>
</div>
</div>
</li>

<li class="clearfix frame">
<div class="info_van clearfix">
<a href="index.php?do=space&member_id=2" target="_blank">
<img src='http://localhost/yii2.0/data/avatar/system/2_small.jpg' uid='2' class='pic_small'><p class="c999">猪八戒</p>
</a>
</div>
<div class="info_body clearfix">
<div>
<span class="sale mr_5">出售 </span>
<a href="index.php?do=service&sid=12"  class="task_info" target="_blank">商务|贸易|通用PPT模板</a>

<span class="ml_5 mr_5 c999">1年8个月12天14小时12分前</span>
<a href="index.php?do=space&member_id=2" target="_blank">猪八戒</a><span class="c999">发布</span>
</div>
<div>售价：<span class="mr_5 org">
￥100.00元</span>来自：<span>威客作品</span>
</div>
<div class="info_talk clearfix">
<a href="javascript:void(0);" class="border_r_c"><span>0</span>留言</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>收藏</a>
<a href="javascript:void(0)" class="border_r_c"><span>0</span>售出</a>
<a href="index.php?do=service&sid=12" class="border_r_c">举报</a>
</div>
</div>
</li>

<li class="clearfix frame">
<div class="info_van clearfix">
<a href="index.php?do=space&member_id=5" target="_blank">
<img src='http://localhost/yii2.0/data/avatar/system/10_small.jpg' uid='5' class='pic_small'><p class="c999">mxc123</p>
</a>
</div>
<div class="info_body clearfix">
<div>
<span class="needs mr_5">需求 </span>
<a href="index.php?do=task&task_id=70"  class="task_info" target="_blank">男宝宝起名</a>

<span class="ml_5 mr_5 c999">1年8个月12天14小时38分前</span>
<a href="index.php?do=space&member_id=5" target="_blank">mxc123</a><span class="c999">发布</span>
</div>
<div>赏金：<span class="mr_5 org">
￥8,000.00元</span>来自：<span>单人悬赏</span>
</div>
<div class="info_talk clearfix">
<a href="javascript:void(0);" class="border_r_c"><span>0</span>投标</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>留言</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>收藏</a>
<a href="index.php?do=task&task_id=70" class="border_r_c">举报</a>
</div>
</div>
</li>

<li class="clearfix frame">
<div class="info_van clearfix">
<a href="index.php?do=space&member_id=5" target="_blank">
<img src='http://localhost/yii2.0/data/avatar/system/10_small.jpg' uid='5' class='pic_small'><p class="c999">mxc123</p>
</a>
</div>
<div class="info_body clearfix">
<div>
<span class="needs mr_5">需求 </span>
<a href="index.php?do=task&task_id=69"  class="task_info" target="_blank">用于淘宝和拍拍的广告</a>

<span class="ml_5 mr_5 c999">1年8个月12天14小时42分前</span>
<a href="index.php?do=space&member_id=5" target="_blank">mxc123</a><span class="c999">发布</span>
</div>
<div>赏金：<span class="mr_5 org">
￥80.00元</span>来自：<span>单人悬赏</span>
</div>
<div class="info_talk clearfix">
<a href="javascript:void(0);" class="border_r_c"><span>0</span>投标</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>留言</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>收藏</a>
<a href="index.php?do=task&task_id=69" class="border_r_c">举报</a>
</div>
</div>
</li>

<li class="clearfix frame">
<div class="info_van clearfix">
<a href="index.php?do=space&member_id=2" target="_blank">
<img src='http://localhost/yii2.0/data/avatar/system/2_small.jpg' uid='2' class='pic_small'><p class="c999">猪八戒</p>
</a>
</div>
<div class="info_body clearfix">
<div>
<span class="sale mr_5">出售 </span>
<a href="index.php?do=service&sid=10"  class="task_info" target="_blank">【创意】企业（个人）法律咨询</a>

<span class="ml_5 mr_5 c999">1年8个月12天14小时43分前</span>
<a href="index.php?do=space&member_id=2" target="_blank">猪八戒</a><span class="c999">发布</span>
</div>
<div>售价：<span class="mr_5 org">
￥1,000.00元</span>来自：<span>威客服务</span>
</div>
<div class="info_talk clearfix">
<a href="javascript:void(0);" class="border_r_c"><span>0</span>留言</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>收藏</a>
<a href="javascript:void(0)" class="border_r_c"><span>0</span>售出</a>
<a href="index.php?do=service&sid=10" class="border_r_c">举报</a>
</div>
</div>
</li>

<li class="clearfix frame">
<div class="info_van clearfix">
<a href="index.php?do=space&member_id=9" target="_blank">
<img src='http://localhost/yii2.0/data/avatar/system/2_small.jpg' uid='9' class='pic_small'><p class="c999">墨客</p>
</a>
</div>
<div class="info_body clearfix">
<div>
<span class="needs mr_5">需求 </span>
<a href="index.php?do=task&task_id=68"  class="task_info" target="_blank">屌丝一族逆袭歌词招募</a>

<span class="ml_5 mr_5 c999">1年8个月12天14小时43分前</span>
<a href="index.php?do=space&member_id=9" target="_blank">墨客</a><span class="c999">发布</span>
</div>
<div>赏金：<span class="mr_5 org">
￥1,000.00元</span>来自：<span>多人悬赏</span>
</div>
<div class="info_talk clearfix">
<a href="javascript:void(0);" class="border_r_c"><span>0</span>投标</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>留言</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>收藏</a>
<a href="index.php?do=task&task_id=68" class="border_r_c">举报</a>
</div>
</div>
</li>

<li class="clearfix frame">
<div class="info_van clearfix">
<a href="index.php?do=space&member_id=7" target="_blank">
<img src='http://localhost/yii2.0/data/avatar/default/man_small.jpg' uid='7' class='pic_small'><p class="c999">hahapa</p>
</a>
</div>
<div class="info_body clearfix">
<div>
<span class="needs mr_5">需求 </span>
<a href="index.php?do=task&task_id=67"  class="task_info" target="_blank">公司LOGO设计及VI基本部分的整套设计</a>

<span class="ml_5 mr_5 c999">1年8个月12天14小时44分前</span>
<a href="index.php?do=space&member_id=7" target="_blank">hahapa</a><span class="c999">发布</span>
</div>
<div>赏金：<span class="mr_5 org">
￥8,000.00元</span>来自：<span>单人悬赏</span>
</div>
<div class="info_talk clearfix">
<a href="javascript:void(0);" class="border_r_c"><span>0</span>投标</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>留言</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>收藏</a>
<a href="index.php?do=task&task_id=67" class="border_r_c">举报</a>
</div>
</div>
</li>

<li class="clearfix frame">
<div class="info_van clearfix">
<a href="index.php?do=space&member_id=9" target="_blank">
<img src='http://localhost/yii2.0/data/avatar/system/2_small.jpg' uid='9' class='pic_small'><p class="c999">墨客</p>
</a>
</div>
<div class="info_body clearfix">
<div>
<span class="needs mr_5">需求 </span>
<a href="index.php?do=task&task_id=66"  class="task_info" target="_blank">找人代画电路原理图和PCB版图，有现成SCH和PCB参考</a>

<span class="ml_5 mr_5 c999">1年8个月12天14小时45分前</span>
<a href="index.php?do=space&member_id=9" target="_blank">墨客</a><span class="c999">发布</span>
</div>
<div>赏金：<span class="mr_5 org">
￥100.00元</span>来自：<span>多人悬赏</span>
</div>
<div class="info_talk clearfix">
<a href="javascript:void(0);" class="border_r_c"><span>0</span>投标</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>留言</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>收藏</a>
<a href="index.php?do=task&task_id=66" class="border_r_c">举报</a>
</div>
</div>
</li>

<li class="clearfix frame">
<div class="info_van clearfix">
<a href="index.php?do=space&member_id=5" target="_blank">
<img src='http://localhost/yii2.0/data/avatar/system/10_small.jpg' uid='5' class='pic_small'><p class="c999">mxc123</p>
</a>
</div>
<div class="info_body clearfix">
<div>
<span class="needs mr_5">需求 </span>
<a href="index.php?do=task&task_id=65"  class="task_info" target="_blank">10秒20元,新手入门必做任务,最高价！10秒付款！急急急！</a>

<span class="ml_5 mr_5 c999">1年8个月12天14小时46分前</span>
<a href="index.php?do=space&member_id=5" target="_blank">mxc123</a><span class="c999">发布</span>
</div>
<div>赏金：<span class="mr_5 org">
￥80.00元</span>来自：<span>单人悬赏</span>
</div>
<div class="info_talk clearfix">
<a href="javascript:void(0);" class="border_r_c"><span>0</span>投标</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>留言</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>收藏</a>
<a href="index.php?do=task&task_id=65" class="border_r_c">举报</a>
</div>
</div>
</li>

<li class="clearfix frame">
<div class="info_van clearfix">
<a href="index.php?do=space&member_id=9" target="_blank">
<img src='http://localhost/yii2.0/data/avatar/system/2_small.jpg' uid='9' class='pic_small'><p class="c999">墨客</p>
</a>
</div>
<div class="info_body clearfix">
<div>
<span class="needs mr_5">需求 </span>
<a href="index.php?do=task&task_id=64"  class="task_info" target="_blank">新房装修设计，二室二厅一卫</a>

<span class="ml_5 mr_5 c999">1年8个月12天14小时47分前</span>
<a href="index.php?do=space&member_id=9" target="_blank">墨客</a><span class="c999">发布</span>
</div>
<div>赏金：<span class="mr_5 org">
￥100.00元</span>来自：<span>多人悬赏</span>
</div>
<div class="info_talk clearfix">
<a href="javascript:void(0);" class="border_r_c"><span>0</span>投标</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>留言</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>收藏</a>
<a href="index.php?do=task&task_id=64" class="border_r_c">举报</a>
</div>
</div>
</li>

<li class="clearfix frame">
<div class="info_van clearfix">
<a href="index.php?do=space&member_id=8" target="_blank">
<img src='http://localhost/yii2.0/data/avatar/system/7_small.jpg' uid='8' class='pic_small'><p class="c999">红客</p>
</a>
</div>
<div class="info_body clearfix">
<div>
<span class="needs mr_5">需求 </span>
<a href="index.php?do=task&task_id=63"  class="task_info" target="_blank">网站取名网站取名</a>

<span class="ml_5 mr_5 c999">1年8个月12天14小时47分前</span>
<a href="index.php?do=space&member_id=8" target="_blank">红客</a><span class="c999">发布</span>
</div>
<div>赏金：<span class="mr_5 org">
￥1,000.00元-￥2,000.00元</span>来自：<span>订金招标</span>
</div>
<div class="info_talk clearfix">
<a href="javascript:void(0);" class="border_r_c"><span>0</span>投标</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>留言</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>收藏</a>
<a href="index.php?do=task&task_id=63" class="border_r_c">举报</a>
</div>
</div>
</li>
</ul>

<!--翻页-->
                                  <div class="page">
                                    <p class="clearfix">
                                             <a class="selected">1</a><a href="index.php?do=square&view=index&t=&page=2">2</a> <a href="index.php?do=square&view=index&t=&page=3">3</a> <a href="index.php?do=square&view=index&t=&page=4">4</a> <a href="index.php?do=square&view=index&t=&page=5">5</a> <a href="index.php?do=square&view=index&t=&page=2">下一页>></a><span class="fl_l"> 1 / 5页</span>                                       </p>
                                      <div class="clear"></div>
                                  </div>
                                                                    <!--end 翻页-->
                                  
</div>
</div>
<!-- core_down end -->
</div>
<div class="index_right clearfix">
                      <div class="clear"></div>
<div class="notice_right weibo">
<div class="box_header clearfix">
<h2>公告</h2>
</div>
<div class="box_detail">
 <ul class="no_right_detail">
 	 	<li><a href="index.php?do=single&art_id=308" target="_blank"></a></li>
 	 	<li><a href="index.php?do=single&art_id=304" target="_blank">震撼上线4</a></li>
 	 	<li><a href="index.php?do=single&art_id=303" target="_blank">震撼上线3</a></li>
 	 	<li><a href="index.php?do=single&art_id=302" target="_blank">震撼上线2</a></li>
 	 </ul>
</div>
</div>
</div>

</div>
</div>
</div>
</div>


