
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
                            <a href="index.php?r=task/taskadd2" ><span class="icon32 task_model">计件悬赏</span><em>计件悬赏</em><span class="arrow_b"></span></a>
                        </li>
                                                <li>
                            <a href="index.php?r=task/taskadd3" class="selected"><span class="icon32 task_model">多人悬赏</span><em>多人悬赏</em><span class="arrow_b"></span></a>
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
     		<h3>什么是多人悬赏？</h3>
        <p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 多人悬赏任务是指您在发布任务时，先将任务赏金全额托管到平台，再从交稿中选出满意的稿件任务。该任务获奖任务为雇主发布任务时设置的奖项总数目（一等奖，二等奖，三等奖的总和）,获奖者将会根据自己的奖项排名获取相应的赏金。<br /></p><p></p><strong>多人悬赏任务的一般流程是：</strong><br />1、雇主发布任务会将对应的任务金额托管到网站平台；<br />2、众多威客参与任务并提交方案，等待雇主选择方案；<br />3、雇主会根据方案的优劣，设置相应的稿件奖项排名（如：一等奖，二等奖等）；<br />4、雇主分配奖项后，如果选稿期结束该任务会进入公示期，在该时期威客可以用相应操作权限，一旦公示期结束，平台会给获奖的威客支付赏金（平台提成一定的比例），如果该任务还有多余的金额，平台会将多余的金额返还给雇主（平台提成一定的比例）。<p></p></p>
      	</div>
  
      	<div class="help_down ">
<a href="#" class="action_show">任务说明<span class="arrow_b"></span></a>
</div>
</div>
 <!--  帮助 end -->

  <!--from表单 start-->
   		<div class="form_box clearfix box border_n">
<form action="index.php?do=release&pub_mode=professional&t_id=&model_id=2&r_step=step1" method="post" name="frm_step1" id="frm_step1">
  		<input type="hidden" name="step1" value="step1">
<input type="hidden" name="min" value="2014-12-22" id="min">
<input type="hidden" name="max" value="" id="max">
  		<input type="hidden" name="formhash" value="679ee3">
        	<div class="rowElem clearfix po_re">
          		<label class="grid_8"><strong>您的赏金：</strong></label>
           		<div class="grid_13 alpha">
              	<input name="txt_task_cash" value="10" type="text" size="25" id="txt_task_cash" msgArea="span_task_cash"  title="任务预算,不支持小数,最小金额为10元" onkeyup="clearstr(this)"
    	limit="required:true;type:int;between:10-" msg="任务预算不得为空,最小金额为10元" onblur="getMaxDday(this.value)"/>
          	 	<span class="ml_5">元</span>
 	<div id="span_task_cash" class="ml_5"></div>
   		</div>
          	</div>
<div class="clearfix po_re">
        <div class="rowElem clearfix">
        	<label class="grid_8 "><strong>一等奖：</strong></label>
        	<div class="grid_13 alpha"><!--title="奖项数目,数字为正整数"-->
   	   			<input class="" name="txt_prize1_num" value="" type="text" size="3" id="txt_prize1_num" msgArea="span_prize1_cash"   onkeyup="clearstr(this)" limit="required:true;type:int;between:1-" msg="奖项数目不得为空" />
<span class="ml_5 mr_5">名，分取预算赏金中的</span>
          	    <input class="" name="txt_prize1_cash" value="" type="text" size="8" id="txt_prize1_cash" msgArea="span_prize1_cash"  title="任务预算,不支持小数" onkeyup="clearstr(this)" limit="required:true;type:int;between:0-" msg="奖项数目不得为空" />
<span class=" ml_5 mr_5">元</span>
<div id="span_prize1_cash"></div>
</div>
</div>

<div class="rowElem clearfix"  id="prize_2" style="display:none">
        	<label class="grid_8"><strong>二等奖：</strong></label>
           	<div class="grid_13 alpha">
   	   			<input class="" name="txt_prize2_num" value="" type="text" size="3" id="txt_prize2_num" msgArea="span_prize2_cash"   onkeyup="clearstr(this)"
   			 limit="required:true;type:int;between:1-" msg="奖项数目不得为空" >
 <span class=" ml_5 mr_5">名，分取预算赏金中的</span>
          		<input class="" name="txt_prize2_cash" value="" type="text" size="8" id="txt_prize2_cash" msgArea="span_prize2_cash"  title="任务预算,不支持小数" onkeyup="clearstr(this)"
    	limit="required:true;type:int;between:0-" msg="奖项数目不得为空" />
<span class=" ml_5">元</span>
<div id="span_prize2_cash"></div>
</div>
</div>
<div class="rowElem clearfix"  id="prize_3" style="display:none"{/if}>
        	<label class="grid_8"><strong>三等奖：</strong></label>
           	<div class="grid_13 alpha">
   	   			<input class="" name="txt_prize3_num" value="" type="text" size="3" id="txt_prize3_num" msgArea="span_prize3_cash"   onkeyup="clearstr(this)"
   			 limit="required:true;type:int;between:1-" msg="奖项数目不得为空" />
<span class="ml_5 mr_5">名，分取预算赏金中的</span>
          		<input class="" name="txt_prize3_cash" value="" type="text" size="8" id="txt_prize3_cash" msgArea="span_prize3_cash"  title="任务预算,不支持小数" onkeyup="clearstr(this)"
    	limit="required:true;type:int;between:0-" msg="奖项数目不得为空"/>
<span class="ml_5">元</span>
<div id="span_prize3_cash"></div>
</div>
</div>

<div class="rowElem clearfix po_re">
        	
<div class="grid_12 prefix_8">
<a class="button" name="add_prize"  id="add_prize" onclick="add();">增加奖项</a>
<a class="button" name="del_prize"  id="del_prize" onclick="del();">删除奖项</a>
</div>
</div>

</div>	

      <div class="rowElem clearfix po_re">
          <label class="grid_8"><strong>交稿截止日期：</strong></label>
            <div class="grid_16 alpha">       
               <input name="txt_task_day"   onclick="showcalendar(event, this, 0)" size="25" value="" type="text" id="end_time" title="预计的任务持续天数,当前预算允许最小天数为:1,最大截止时间： 天" msgArea="span_task_day" onkeyup="clearstr(this)"
   	limit="required:true;type:date;than:min;less:max" msg="任务时间周期不在许可范围内" max=""    min_day = "1" class="mr_5"/>             	
<span class="ml_5">年-月-日</span>
 <span id="span_task_day"></span>
 <div class="clear"></div>				 
</div>
        </div>


        <div class="rowElem clearfix po_re">
           <label class="grid_8"><strong>赏金分配：</strong></label>
             <div class="grid_12"><strong>多人中标</strong></div>
        </div>
     </form>
    </div>
    <!--from表单 end-->
    <div class="step_button"> <button type="submit" name="is_submit" onclick="add3()" class="big button">下一步</button></div>
   
 <script type="text/javascript">
function add3(){
  var price=$("#txt_task_cash").val();
  var prize_num = $("#txt_prize1_num").val();  
  var prize_cash=$("#txt_prize1_cash").val();
  var end_time=$("#end_time").val();
  $.ajax({
    url:"index.php?r=task/taskadd3pro&price="+price+"&end_time="+end_time+"&prize_num="+prize_num+"&prize_cash="+prize_cash+"&model_id="+3,
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
  <!--  <div class="grid_7 omega alpha">
     	<div class=" prefix_1 suffix_1 pt_20">
       		<h3 class="font14b">什么是多人悬赏？ </h3>
         <p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 多人悬赏任务是指您在发布任务时，先将任务赏金全额托管到平台，再从交稿中选出满意的稿件任务。该任务获奖任务为雇主发布任务时设置的奖项总数目（一等奖，二等奖，三等奖的总和）,获奖者将会根据自己的奖项排名获取相应的赏金。<br /></p><p></p><strong>多人悬赏任务的一般流程是：</strong><br />1、雇主发布任务会将对应的任务金额托管到网站平台；<br />2、众多威客参与任务并提交方案，等待雇主选择方案；<br />3、雇主会根据方案的优劣，设置相应的稿件奖项排名（如：一等奖，二等奖等）；<br />4、雇主分配奖项后，如果选稿期结束该任务会进入公示期，在该时期威客可以用相应操作权限，一旦公示期结束，平台会给获奖的威客支付赏金（平台提成一定的比例），如果该任务还有多余的金额，平台会将多余的金额返还给雇主（平台提成一定的比例）。<p></p><!--</p>
     	</div>
    </div> -->
<script type="text/javascript"> 
$(function(){
$("#txt_prize1_cash,#txt_prize1_num,#txt_prize2_cash,#txt_prize2_num,#txt_prize3_cash,#txt_prize3_num").keyup(function(){
$("#check_cash").removeClass("valid_error").html(" ");
})
})
function add(){
if($("#prize_2").is(":hidden")){ 
$("#prize_2").show();
}else{
$("#prize_3").show();
} 
} 
function del(){
if ($("#prize_3").is(":visible")) {
$("#prize_3").hide();
$("#txt_prize3_num").val('');
$("#txt_prize3_cash").val('');
}
else {
$("#prize_2").hide();
$("#txt_prize2_num").val('');
$("#txt_prize2_cash").val('');
}
}	
function stepCheck_ext(){ 	

var prize_1_price = Number($("#txt_prize1_cash").val()); 
var total_prize =prize_1_price ;
if($("#prize_2").is(":hidden")){
//$("#prize_2").remove();  
}	 
if($("#prize_3").is(":hidden")){
//$("#prize_3").remove();  
}	 

if ($("#prize_2").is(":visible")) {
var prize_2_price = Number($("#txt_prize2_cash").val()); 
total_prize += prize_2_price;
}
 
if ($("#prize_3").is(":visible")) { 
var prize_3_price = Number($("#txt_prize3_cash").val()); 
total_prize +=prize_3_price;
}

var total_cash = $("#txt_task_cash").val();

if(total_prize != total_cash){
//$("#txt_prize1_cash").focus();
$("#span_prize2_cash").removeClass("msg msg_ok");
$("#span_prize3_cash").removeClass("msg msg_ok");
$("#span_prize1_cash").removeClass("msg msg_ok").addClass("msg msg_error").html("<i></i><span>任务赏金和奖金的和不相等</span>");			
return false;
}else{
$("#span_prize1_cash").removeClass("msg msg_error").html(" ");			
}
stepCheck();
}


</script>
<!--end 右边部分-->
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
    var model_id = parseInt("2") + 0;
    var uid = parseInt("1") + 0;
    var r_step = "step1";
    var basic_url = "index.php?do=release&pub_mode=professional&t_id=&model_id=2&r_step=step1";
    var min_day = parseInt("1");

In('ajaxfileupload','form');
</script>


<!--页脚 satrt-->

