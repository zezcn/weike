<?php
use yii\widgets\LinkPager;
?>
</head>
    <body id="prom">

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




  
</div>
                <div class="clear"></div>
        </div>

    </nav>
    <div class="clear"></div>
<div class="wrapper">
 	<div class="container_24 clearfix">
<div class="mt_30 mb_30 clearfix">
<!-- 左边内容 start -->
<div class="grid_20 clearfix">
<div class="simple_step clearfix all_4">
        <div class="step step1"> </div>
        <div class="step step2">
        <div class="get_code">
         获取推广代码
   		</div>
       </div>
        <div class="step step3">
            <div class="get_sys">
               推广客客专业威客系统
   			</div>
        </div>
        <div class="step step4">
            <div>
              获得丰厚收益
   			</div>
        </div>
                	
</div>
           
            <div class="prom_border box mt_10 mb_10 clearfix">
            	<div class="box_header">
            	<div class="inner">
            		<h2 class="title">任务推广</h2>
            	</div>
            </div>
            	<div class="prom_detail border_t_c">
            		<div class="pad20">
            			<div class="rowElem clearfix ">
            			<label class="grid_2 t_c pt_10"><img src="tpl/default/img/style/tui.png"></label>
            			<div class="grid_15">
            				<div>	
            					
            					            						成功推荐好友做任务并成功中标
计件悬赏    等任务，获得有效任务金额
            					<span class="cf60">20%</span>提成



            				</div>
            				<div class="font14b cf60">你的收益＝悬赏金额×20%
            				</div>
            				<div>
            					指用户通过推广链接\代码承接任务并中标，任务成功结束即为推广有效，推广员能获得任务金额<span class="cf60">20%</span>的提成。
            					
            				</div>
            				<div> <span class="font14b cf60">比如：</span> 悬赏金额<span class="cf60">10000</span>元，你能获得现金提成<span class="cf60">200</span>元!</div>
            			</div>
</div>
            		</div>
            	</div>
            	<div style="" id="task_list" class="data_list"><!--用户中心推广数据加载-->
<div id="ajax_list">
<table cellspacing="0" cellpadding="0" class="data_table">
  <thead>
    <tr>
    	    <th class="t_c" scope="col">所属模型</th>
       		<th class="t_c" scope="col">任务标题</th>
       		<th class="t_c" scope="col">任务金额</th>
       		<th class="t_c" scope="col">推广总金(元)</th>
     
    </tr>
     <?php foreach ($data as $key => $value)  {

    ?>
    <tr>
          <td><?php echo $value['model_name']?></td>
          <td><?php echo $value['task_title']?></td>
          <td><?php echo $value['real_cash']?></td>
          <td><?php echo $value['task_cash']?></td>
    </tr>
    <?php }?>
  </thead>
  <tbody>
  	       </tbody>
       <tr>
  <td colspan="5">
    <div class="page clearfix"><span class="t_r"> 
      <?= LinkPager::widget(['pagination' => $pages]); ?>
</span>
    </div>
</td>
  </tr>
</table>
</div>
</div>
                   
                   
            </div>
        </div>
        <!-- 左边内容 end  -->
           
            <div class="grid_4 clearfix">
<div class="prom_border box  mb_10 clearfix">
<div class="box_header backLava">
            	<div class="inner">
            		<strong class="title">赚钱工具</strong>
            		<p class="pl_10">选择你习惯的推广方式</p>
            	</div>
            </div>
            <div class="prom_detail clearfix">
            	<div class="prom_list">
            	<ul>
            	<li> <a href="index.php?r=prom/prom_new" >新手任务</a></li>
            	<li> <a href="index.php?r=prom/prom_task"  class="selected">任务推广</a></li>
            	<li> <a href="index.php?r=prom/prom" >商品推广</a></li>
            	</ul>
</div>
            </div>
        </div>
        <div class="prom_border box  mb_10 clearfix">
        	<div class="box_header border_b_c">
            	<div class="inner">
            		<h2 class="title">推广动态</h2>
</div>
            </div>
            <div class="prom_detail">
            <div class="pl_10 pr_10 pb_10">
            	<div class="prom_rel">
            	<ul>
            		暂时还没有动态
            	</ul>
            	</div>
            </div>
        	</div>
        </div>
</div>
        </div>
</div>
</div>

<script type="text/javascript">
function promLink(promCode,l,o,promText){
if(check_user_login()){
var url = "index.php?do=ajax&view=prom&ajax=prom_11&prom_code="+promCode;
o?url+="&o="+o:"";
l?url+="&l="+l:"";
promText?url+="&promtext="+promText:"";
showWindow("promink",url);return false;
}
}
function getList(obj,promCode){
if($.trim($("#"+obj).html()).length==0){
var url = "index.php?do=ajax&view=prom&ajax=prom_list&prom_code="
+promCode;
$("#"+obj).load(url).show();
$("html,body").animate({scrollTop:$("#"+obj).offset().top})
}
}
</script>

</div>
<script type="text/javascript">
var uid='1';
var xyq = "q876ovs2evpnqouq377du6bhs7";
$(function(){
   $.get('js.php?op=time&r='+Math.random());	
})
 //js异步加载
In('header_top','custom','lavalamp','tipsy','autoIMG','slides');




</script>

<!--[if IE 6]></div><![endif]-->
<!--[if IE 7]></div><![endif]-->
<!--[if IE 8]></div><![endif]-->
</body>
</html>
