
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
                            <a href="index.php?r=task/taskadd1" ><span class="icon32 task_model">单人悬赏</span><em>单人悬赏</em><span class="arrow_b"></span></a>
                        </li>
                                                <li>
                            <a href="index.php?r=task/taskadd2" class="selected"><span class="icon32 task_model">计件悬赏</span><em>计件悬赏</em><span class="arrow_b"></span></a>
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
     		<h3>什么是计件悬赏？</h3>
        <p>计件悬赏任务的一般流程是：<br />1、雇主发布任务将任务金额托管到网站平台<br />2、众多威客参与并提交方案<br />3、雇主选择满意方案，设置方案中标状态<br />4、方案中标发放赏金<br /></p>
      	</div>
  
      	<div class="help_down ">
<a href="#" class="action_show">任务说明<span class="arrow_b"></span></a>
</div>
</div>
 <!--  帮助 end -->

  
  <!--from表单 start-->
   <div class="form_box clearfix box border_n">
      <!-- <div class="form_tip">
        <h5 class="font14b t_c" style="color:#7caf22">计件悬赏任务流程图</h5>
       <!--计件悬赏-single-->
<!-- <div class="min_step all_6 step_orange mb_10 ml_30">
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
<span>互评</span>
</li>

<li class="last">
<div class="icon"></div>
<span>结束</span>
</li>

</ul>
</div> 
      </div> -->
  <form action="index.php?do=release&pub_mode=professional&t_id=&model_id=3&r_step=step1" method="post" name="frm_step1" id="frm_step1">
  	<input type="hidden" name="step1" value="step1">
<input type="hidden" name="min" value="2014-12-23" id="min">
<input type="hidden" name="max" value="" id="max">
  	<input type="hidden" name="formhash" value="679ee3">
        <div class="rowElem clearfix po_re">
          <label class="grid_8"><strong>您的预算：</strong></label>
           <div class="grid_13">
              <input class="" name="txt_task_cash" value="80" type="text" id="txt_task_cash" msgArea="span_task_cash"  title="任务预算,不支持小数,最小金额为80元" onkeyup="clearstr(this)"
    limit="required:true;type:int;between:80-" msg="任务预算不得为空,最小金额为80元" onblur="getMaxDday(this.value)"/> 
<span class="ml_5 ">元</span>
<span id="span_task_cash" class="ml_5"></span>
           </div>
        </div>

      <div class="rowElem clearfix po_re">
          <label class="grid_8"><strong>交稿截止日期：</strong></label>
            <div class="grid_13">
       
               <input name="txt_task_day"   onclick="showcalendar(event, this, 0)" size="20" value="2014-12-24" type="text" id="end_time" title="预计的任务持续天数,当前预算允许最小天数为:2天,最大截止时间：" msgArea="span_task_day" onkeyup="clearstr(this)"
   	limit="required:true;type:date;than:min;less:max" msg="任务时间周期不在许可范围内" max=""  min_day="2"/> 
            	<span class="ml_5">年-月-日</span>
 <span id="span_task_day"  class="ml_5"></span>
 
</div>
        </div>

<div class="rowElem clearfix po_re">
           <label class="grid_8"><strong>所需稿件：</strong></label>
             <div class="grid_13">
             	<input name="txt_work_count" value="1" type="text" id="txt_work_count" title="任务所需要的稿件数，稿件最小允许稿件数为：1" msgArea="span_work_count" onkeyup="clearstr(this)"
   	limit="required:true;type:int;between:1-" msg="任务所需稿件数填写错误"/>
<span class="ml_5 ">个</span>
            	<span id="span_work_count"  class="ml_5"></span>
             </div>
        </div>
        <div class="rowElem clearfix po_re">
           <label class="grid_8"><strong>稿件单价：</strong></label>
             <div class="grid_13">
             	<input name="txt_single_cash" value="{if 80}{/if}" type="text" id="txt_single_cash" title="每个稿件的单价" msgArea="span_single_cash"
limit="required:true;type:float" msg="任务赏金分配不正确" readonly="readonly"/>
<span class="ml_5">元</span>
<span id="span_single_cash"  class="ml_5"></span>
             </div>
        </div>
     </form>
    </div>
    <!--from表单 end-->
    <div class="step_button"> <button type="submit" name="is_submit" onclick="add2()" class="big button">下一步</button></div>
 <script type="text/javascript">
function add2(){
  var price=$("#txt_task_cash").val();

  var end_time=$("#end_time").val();

  var num = $("#txt_work_count").val();

  var gprice = $("#txt_single_cash").val();
  $.ajax({
    url:"index.php?r=task/taskadd2pro&price="+price+"&end_time="+end_time+"&num="+num+"&gprice="+gprice+"&model_id="+2,
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
<!--右边部分-->
  <!-- <div class="grid_7 omega alpha">
     <div class=" prefix_1 suffix_1 pt_20">
       <h3 class="font14b">什么是计件悬赏？ </h3>
         <p>{eval echo kekezu::filter_input(计件悬赏任务的一般流程是：&lt;br /&gt;1、雇主发布任务将任务金额托管到网站平台&lt;br /&gt;2、众多威客参与并提交方案&lt;br /&gt;3、雇主选择满意方案，设置方案中标状态&lt;br /&gt;4、方案中标发放赏金&lt;br /&gt;)}</p>
     </div>
    </div>-->
<!--end 右边部分-->
<script type="text/javascript">
$(function(){
check_single_cash();	
$("#txt_task_cash").keyup(function(){
check_single_cash();
});	
$("#txt_work_count").keyup(function(){
check_single_cash();
})
})

function check_single_cash(){
var totle_cash = Number($("#txt_task_cash").val())+0;
var work_count = Number($("#txt_work_count").val())+0;
var single_cash = 0;
if(work_count){
single_cash = parseFloat(totle_cash/work_count);
single_cash = formatnumber(single_cash,2);			
}
$("#txt_single_cash").val(single_cash);
}

function formatnumber(value,num){
var a,b,c,i
a = value.toString();
b = a.indexOf('.');
c = a.length;
if(b!=-1){
if(num>0){
a = a.substring(0,b+num+1);
for (i=c;i<=b+num;i++){
a = a + "0";
}				
}else{
a = a + ".";
for (i=1;i<=num;i++){
a = a + "0";
}				
}
}		
return Number(a);
}
</script>
<script type="text/javascript" >
In('calendar');
</script>
                    <!--end 任务模式下部内容-->
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
    var model_id = parseInt("3") + 0;
    var uid = parseInt("1") + 0;
    var r_step = "step1";
    var basic_url = "index.php?do=release&pub_mode=professional&t_id=&model_id=3&r_step=step1";
    var min_day = parseInt("2");

In('ajaxfileupload','form');
</script>


<!--页脚 satrt-->
