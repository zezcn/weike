
<div class="wrapper">
    <!--页面头部-->
    <header class="clearfix page_header">
        <div class="container_24 clearfix">
            <!--面包屑-->
            <div class="breadcrumbs clearfix">
                <a href="index.php">首页</a> &gt; <a href="javascript:void(0);">任务发布</a>
            </div>
            <!--end 面包屑-->
            <div class="clear">
            </div>
            <!--页面子导航-->
            <!--<nav class="clearfix page_nav po_re">
                <ul>
                    <li class="selected">
                        <a href="index.php?do=release&pub_mode=professional" title="专业模式">专业模式</a>
                    </li>
                 
                    <li >
                        <a href="index.php?do=release&pub_mode=onekey&target_task=" class="一键发布">一键发布</a>
                    </li>
                </ul>
            </nav> -->
            <!--end 页面子导航-->
            <div class="clear">
            </div>
        </div>
    </header>
    <!--end 页面头部--><!--详细内容区-->
    <section class="content box">
        <!--布局框-->
        <div class="container_24">
        <div class="content_d">
            <!--step步骤 start-->
            <div class="step_progress clearfix">
                                <div class="step step1 selected">
                    <span class="icon32 pub">1</span>
                    <strong>选择任务模型</strong>
                    选择模型来确定任务进行的方式                </div>
                                <div class="step step2 ">
                    <span class="icon32 pub">2</span>
                    <strong>填写需求</strong>
                    填写完成事项的具体需求                </div>
                                <div class="step step3 ">
                    <span class="icon32 pub">3</span>
                    <strong>确认清单并支付</strong>
                    列表清单并支付任务赏金                </div>
                                <div class="step step4 ">
                    <span class="icon32 pub">4</span>
                    <strong>发布成功</strong>
                    完成发布，开始任务                </div>
                            </div>
            <!--step步骤 end--> 
            <!--提示信息-->
            <div class="messages m_infor">
                <span class="icon16"></span>
                <span>如在发布任务时遇到麻烦，请联系客服。</span>
                <span>电话：027-87733922</span>
            </div>
            <!--end 提示信息-->
           
        
            <!--步骤下所有内容-->
            <div class="step1_detail">
                <!--任务模式-->
                <nav class="primary_nav primary_nav1 clearfix border_b_c">
                    <ul>
                                                <li>
                            <a href="index.php?r=task/taskadd1" class="selected"><span class="icon32 task_model">单人悬赏</span><em>单人悬赏</em><span class="arrow_b"></span></a>
                        </li>
                                                <li>
                            <a href="index.php?r=task/taskadd2" ><span class="icon32 task_model">计件悬赏</span><em>计件悬赏</em><span class="arrow_b"></span></a>
                        </li>
                                                <li>
                            <a href="index.php?r=task/taskadd3" ><span class="icon32 task_model">多人悬赏</span><em>多人悬赏</em><span class="arrow_b"></span></a>
                        </li>
                                            
                    </ul>
                    <div class="clear">
                    </div>
                </nav>
<!--向前 向后-->

                 
                 
<!--end 向前 向后-->
<!--end 任务模式-->
                <!--任务模式下部内容-->
                <div class="clearfix">
                     <!--左边部分-->
 <!--  帮助 start -->
    <div class="help_center" >
     	
     	<div id="help_center" class="help_detail hidden">
     		<h3>什么是单人悬赏？</h3>
        <p><p>&nbsp;&nbsp;&nbsp;&nbsp;<strong> 单人悬赏常用于发布一些时间短，需要创意型的任务，例如给宝宝起名，店铺起名，设计网站logo，贺卡设计，找人排队跑腿，写广告语，策划活动等等是的吧</strong></p></p>
      	</div>
  
      	<div class="help_down ">
<a href="#" class="action_show">任务说明<span class="arrow_b"></span></a>
</div>
</div>
 <!--  帮助 end -->
 <!--提示信息-->
   <!-- <div class="messages m_infor">
     <span class="icon16">info</span>单人悬赏常用于发布一些时间短，需要创意型的任务，例如给宝宝起名，店铺起名，设计网站logo，贺卡设计       <a href="javascript:;" class="close">&times;</a>
   </div> -->
   
  <!--end 提示信息-->
  <!--from表单 start-->
   <div class="form_box clearfix border_n">
   <!--  <div class="form_tip">
        <h5 class="font14b t_c" style="color:#7caf22">单人悬赏任务流程图</h5>-->
        <!--单人悬赏-single-->
 <!--<div class="min_step all_8 step_orange mb_10 ml_30">
<ul class="clearfix">
<li class>
<div class="icon"></div>
<span>发布</span>
</li>

<li>
<div class="icon"></div>
<span>审核</span>
</li>

<li>
<div class="icon"></div>
<span>投稿</span>
</li>

<li>
<div class="icon"></div>
<span>选稿</span>
</li>

<li>
<div class="icon"></div>
<span>公示</span>
</li>

<li>
<div class="icon"></div>
<span>交付</span>
</li>

<li>
<div class="icon"></div>
<span>互评</span>
</li>

<li class="last">
<div class="icon"></div>
<span>结束</span>
</li>

</ul>
</div>
      </div>-->
     
 
  <form action="index.php?do=release&pub_mode=professional&t_id=&model_id=1&r_step=step1" method="post" name="frm_step1" id="frm_step1">
  	<input type="hidden" name="step1" value="step1">
<input type="hidden" name="min" value="2014-12-23" id="min">
<input type="hidden" name="max" value="" id="max">
  	<input type="hidden" name="formhash" value="679ee3">

       <div class="rowElem clearfix">
          <label class="grid_8"><strong>您的预算：</strong></label>
           <div class="grid_12">
              <input name="txt_task_cash" size="30" value="80" type="text" id="txt_task_cash" msgArea="span_task_cash"  title="任务预算,不支持小数,最小金额为80元" onkeyup="clearstr(this)"
    limit="required:true;type:float;between:80-" msg="任务预算不得为空,最小金额为80元" onblur="getMaxDday(this.value)" />
<span class="ml_5">元</span>
<span id="span_task_cash" class="ml_5"></span>
           </div>
        </div>

        <div class="rowElem clearfix">
          <label class="grid_8"><strong>交稿截止日期：</strong></label>
            <div class="grid_12">

<input name="txt_task_day" onclick="showcalendar(event, this, 0)"
size="30"
value="2014-12-23"
type="text" id="end_time" min_day="2"
title="预计的任务持续天数,当前预算允许最小天数为:2天,最大截止时间："
msgArea="span_task_day" onkeyup="clearstr(this)"
limit="required:true;type:date;than:min;less:max"
msg="任务时间周期不在许可范围内" max="" /><span class="ml_5">年-月-日</span> <span id="span_task_day" class="ml_5"></span>

</div>
        </div>
<div class="rowElem clearfix po_re">
           <label class="grid_8"><strong>赏金分配：</strong></label>
             <div class="grid_6"><strong>单人中标</strong></div>
        </div>
     </form>
    </div>
    <!--from表单 end-->
    <div class="step_button"> <button type="submit" name="is_submit" onclick="release();" class="big button">下一步</button></div>
   
<script type="text/javascript">
function release(){
  var price=$("#txt_task_cash").val();
  var end_time=$("#end_time").val();
  $.ajax({
    url:"index.php?r=task/taskadd1pro&price="+price+"&end_time="+end_time+"&model_id="+1,
    type:"get",
    success:function(e){
        var task_id = e;
        if(e!=2){
            location.href="index.php?r=task/addtwo&task_id="+task_id;
        }
    }
  })
}
In('calendar');
</script>
<!--end 左边部分-->

   
<script type="text/javascript">
In('calendar');
</script>                    <!--end 任务模式下部内容-->
                </div>
                <!--end 步骤下所有内容-->
            </div>
        </div>
        <!--end 布局框-->
    
    <!--end 详细内容区-->
</div>
</section>
</div>
<script type="text/javascript" src="resource/js/system/release.js"></script>
<script type="text/javascript">
    var model_id = parseInt("1") + 0;
    var uid = parseInt("1") + 0;
    var r_step = "step1";
    var basic_url = "index.php?do=release&pub_mode=professional&t_id=&model_id=1&r_step=step1";
    var min_day = parseInt("2");

In('ajaxfileupload','form');
</script>


<!--页脚 satrt-->

