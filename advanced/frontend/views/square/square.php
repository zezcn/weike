<?php
    use yii\widgets\LinkPager;
?>
    <body id="square">


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
<dd><h2>我的</h2></dd>
        <dd><a href="index.php?do=square&view=demand" ><span class="icon16 notepad-2 mr_5 "></span>需求</a></dd>
        <dd><a href="index.php?do=square&view=goods" ><span class="icon16 case mr_5 "></span>服务</a></dd>
        <!--<dd><a href="index.php?do=square&view=manuscript" ><span class="icon16 clipboard-copy mr_5"></span>稿件</a></dd>-->
        <dd><a href="index.php?do=square&view=message" ><span class="icon16 spechbubble-sq-line mr_5"></span>留言</a></dd>
        <dd><a href="index.php?do=square&view=favor" ><span class="icon16 star-fav-empty mr_5"></span>收藏</a></dd>
        <dd><a href="index.php?do=square&view=focus" ><span class="icon16 user mr_5"></span>关注</a></dd>
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
<input type="hidden" name="formhash" value="679ee3">
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
<input type="hidden" value="85" id="last_id">
<input type="hidden" value="" id="last_time">
<div class="msg msg_need block ml_20 mr_20 hidden" id="show_new" >
<a href="#"  class="block" >有15条新动态，点击查看</a>
</div>
<div class="core_down_info mt_10 mb_10 clearfix" >
<ul id="data_contain">

<?php foreach($data["list"] as $key=>$val){?>
<li class="clearfix frame">
<div class="info_van clearfix">
<a href="index.php?do=space&member_id=7" target="_blank">
<img src='./data/avatar/default/man_small.jpg' uid='7' class='pic_small'><p class="c999"><?php echo $val["obj_username"]?></p>
</a>
</div>
<div class="info_body clearfix">
<div>
<span class="needs mr_5">需求 </span>
<a href="index.php?do=task&task_id=47"  class="task_info" target="_blank"><?php echo $val["obj_title"]?></a>

<span class="ml_5 mr_5 c999"><?php echo date("Y年m个月d天 H小时i分",time()-$val['on_time'])?></span>
<a href="index.php?do=space&member_id=7" target="_blank"><?php echo $val["op_username"]?></a><span class="c999">发布</span>
</div>
<div>赏金：<span class="mr_5 org">
￥50,000.00元-￥60,000.00元</span>来自：<span>普通招标</span>
</div>
<div class="info_talk clearfix">
<a href="javascript:void(0);" class="border_r_c"><span>0</span>投标</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>留言</a>
<a href="javascript:void(0);" class="border_r_c"><span>0</span>收藏</a>
<a href="index.php?do=task&task_id=47" class="border_r_c">举报</a>
</div>
</div>
</li>
<?php }?>

</ul>

<!--翻页-->
      <div class="page">
        <p class="clearfix">
            <span class="fl_l"><?=LinkPager::widget([    'pagination' => @$pages,    ]);?></span>
        </p>
          <div class="clear"></div>
      </div>
                                                                    <!--end 翻页-->
                                  
</div>
</div>
<!-- core_down end -->
</div>
<div class="index_right clearfix">
                      <div class="person_info clearfix">
<img src='http://www.wk.com/data/avatar/default/man_middle.jpg' uid='1' class='pic_middle'></div>
<div class="name_box">
<p><a href="index.php?do=space&member_id=1" target="_blank">admin</a></p>
<p class="mb_10"><img src="data/uploads/sys/mark/28624f3b088d957db.gif?fid=2077" align="absmiddle" title="头衔 ：六级威客&#13;&#10;能力值：47478&#13;&#10;等级：6"></p>
<p></p>
</div>  
<div class="clear"></div>
<div class="user_atten clearfix user_atten_l">
<ul>
<li>
<a href="index.php?do=square&view=demand" class="s_func1" target="_blank">
<strong>4</strong>
<span>需求</span>
</a>

</li>
<li >
<a href="index.php?do=square&view=goods" class="s_func1" target="_blank">
<strong>0</strong>
<span>商品</span>
</a>

</li>

</ul>

</div>
<div class="clear"></div>
<div class="balance weibo">
<div class="box_header clearfix">
<h2>余额</h2>
<div class="active">
<a href="index.php?do=user&view=finance&op=recharge" target="_blank">充值</a>
<a href="index.php?do=user&view=finance&op=withdraw" target="_blank">提现</a>
</div>
</div>
<div class="box_detail">
<p>现金：<span class="org">￥405,397.06元</span></p>
<p>元宝：<span class="org">￥77,529.19元</span></p>
</div>
</div>
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

<!--页脚 satrt-->

<script type="text/javascript" src="tpl/default/js/square.js"></script>
<script type="text/javascript">
In('form');
var t = 'all';
//alert(last_id);
</script>
