
    <body id="release">


    <div class="clear"></div>

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
                                <div class="step step1 ">
                    <span class="icon32 pub">1</span>
                    <strong>选择任务模型</strong>
                    选择模型来确定任务进行的方式                </div>
                                <div class="step step2 selected">
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
                <!--向前 向后-->

                                <div class="clearfix border_b_c pad5">
                	<a href="index.php?do=release&pub_mode=professional&t_id=&model_id=1&r_step=step2&r_step=step1" class="ml_10"><span class="icon16 arrow-left" title="返回">返回</span></a>
<a href="javascript:void(0);" class="grey ml_10"><span class="icon16  arrow-right" title="前进">前进</span></a>
<a href="index.php?do=user&view=employer&op=task&model_id=1" class="ml_10 button fl_r">查看我发布的任务</a>
</div>
                 
                 
<!--end 向前 向后-->
<!--end 任务模式-->
                <!--任务模式下部内容-->
                <div class="clearfix">
                    <!--内容部分-->
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

    <div class="pad10">
        <!--from表单 start-->
        <div class="form_box clearfix box border_n">
         <form action="index.php?do=release&pub_mode=professional&t_id=&model_id=1&r_step=step2" method="post" name="frm_step2" id="frm_step2">
  	<input type="hidden" name="step2" value="step2">
  	<input type="hidden" name="formhash" value="679ee3">

                <div class="rowElem clearfix">
                    <label class="grid_7">
                        <strong>行业分类：</strong>
                    </label>
                   <div class="grid_16">
                    <select name="indus_pid" id="indus_pid" title="请选择分类"  onchange="change()" limit = "required:true;between:5-10" msg = '行业分类未选择' msgArea="span_indus">
                            <option value="">请选择分类</option>
                            <?php foreach($data['indu'] as $key=>$val){?>
                      		 <option value="<?php echo $val['indus_id']?>" ><?php echo $val["indus_name"]?></option>
                           <?php }?>
 
 
</select>
 
                    <span  id="reload_indus">
                        <select name="indus_id" id="indus_id"  limit = "required:true;between:5-10" msg='行业子分类未选择' title='请选择子分类' msgArea="span_indus"><span id="span_indus"></span>
                            <option value="">请选择子分类</option>
                        </select>
                    </span>
<span class="cc00 ml_5 mr_5">*</span>
<span id="span_indus"></span>
</div>
                </div>
                <div class="rowElem  clearfix">
                            <label class="grid_7">
                                <strong>标题名称：</strong>
                            </label>
                            <div class="grid_16">
                                <input name="txt_title" id="txt_title" type="text" value="" title="任务标题不得为空,5-50字符" size="34" msgArea="span_title"
                                limit="required:true;len:5-50" msg="任务标题填写错误,5-50字符" maxlength="50" style="width:375px" class="mr_5"/>
<span class="cc00 mr_5">*</span>
                                <span id="span_title">任务标题最多50字符</span>
                            </div>
                            
                    </div>
               
<div class="rowElem clearfix">
                    <label class="grid_7">
                        <strong>需求描述：</strong>
                    </label>
                    <div class="grid_10 ">
                        <textarea style="width:100%" rows="12" name="tar_content" title="任务需求描述;50-1000字" id="tar_content" msgArea="msg_content" 
class="xheditor {tools:'Bold,Fontface,FontColor,Italic,Underline,Strikethrough,Align,List,Outdent,Indent,Link,Unlink,Table',skin:'nostyle'}"></textarea>
                       
<script type="text/javascript" src="resource/js/xheditor/xheditor.js"></script>
<script type="text/javascript">
 $(function(){
 	editor = $("#tar_content").xheditor();
 })
</script>
                    </div>
<div class="grid_6">
<span class="cc00 mr_5">*</span>
<span id="msg_content"></span>
</div>
                </div>
               
<div class="rowElem clearfix lit_form mb_10 border_n ">
                            <label class="grid_7">
                                <strong>上传附件：</strong>
                            </label>
                            <!--上传内容-->
                            <div class="grid_16 po_re">
                                <input type="file" class="file" name="upload" id="upload">
                                <div class="po_ab" style="left:150px;top:5px;">
                                    <span style="line-height:15px;" class="ws_prewrap mr_20">最多可添加5个附件</span>
                                    <a href="javascript:void();" class="file_type" title="<ol class='t_l'><li>最多可添加5个附件，每个大小不超过1M.</li><li>上传文件格式 .pdf .doc .docx .xls .ppt .wps .zip .rar .txt .jpg .jpeg .gif .bmp .swf .png .lsp</li></ol>">无法上传?</a>
                                </div>
                                    <input type="hidden" name="file_ids" id="file_ids">
                            </div> 
                           
                            <script type="text/javascript">
                                    $(function(){
                                        uploadify({
                                                auto:true,
                                                size:"1MB",
                                                exts:'*.pdf;*.doc;*.docx;*.xls;*.ppt;*.wps;*.zip;*.rar;*.txt;*.jpg;*.jpeg;*.gif;*.bmp;*.swf;*.png;*.lsp',
                                                limit:5}
                                            );
                                    })
                            </script>
                            <script src="resource/js/uploadify/jquery.uploadify-3.1.min.js" type="text/javascript"></script>
<link href="resource/js/uploadify/uploadify.css" rel="stylesheet">
                            <!--end 上传内容-->
                    </div> 
              
 <div class="rowElem clearfix">
                    <label class="grid_7">
                        <strong>联系方式：</strong>
                    </label>
                    <div class="grid_16">
                        <input name="txt_mobile" id="contact_mobile" type="text" value="13871479840" 
 title="填写您的常用手机号码,必填" size="34" msgArea="span_mobile"
limit="required:true;type:mobileCn" msg="请填写正确的手机号码" maxlength="50"  class="mr_5"/>
                       <span class="cc00" id="span_mobile">*</span>
                    </div>
                     <input type="hidden" id="t_id" value="<?php echo $data['task_id']?>">
                </div>			
            </form>
        </div><!--from表单 end-->
        <div class="step_button">
            <button type="submit" name="is_submit" onclick="addtwo();" class="big button">下一步</button>
            <span class="block"><input type="checkbox" name="agreement" id="agreement" checked>
                <label>
                    同意《<a href="" target="_blank" class="agreement_link">发布协议</a>》
                </label>
            </span>
        </div>
    </div>
<div class="agreement_part clearfix" style="display:none;">
  <p>任务发布协议<br /></p>
</div>

<!--end 内容部分-->
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
    var model_id = parseInt("1") + 0;
    var uid = parseInt("1") + 0;
    var r_step = "step2";
    var basic_url = "index.php?do=release&pub_mode=professional&t_id=&model_id=1&r_step=step2";
    var min_day = parseInt("2");

In('ajaxfileupload','form');
</script>
<script>
    function change(){
        var indus_pid = $("#indus_pid").val();
        $.ajax({
        url:"index.php?r=task/indus&indus_pid="+indus_pid,
        type:"get",
        success:function(e){
            $("#indus_id").html(e);
        }
      })
    }
</script>
<script>
    function addtwo(){
        var t_id = $("#t_id").val();
        var indus_pid = $("#indus_pid").val();
        var indus_id = $("#indus_id").val();
        var title = $("#txt_title").val();
        var content = $("#tar_content").val();
        var mobile = $("#contact_mobile").val();
        $.ajax({
        url:"index.php?r=task/addtwopro",
        type:"get",
        data:{"t_id":t_id,"indus_pid":indus_pid,"indus_id":indus_id,"title":title,"content":content,"mobile":mobile},
        success:function(e){
              var task_id = e;
              if(e!=2){
                  location.href="index.php?r=task/addthree&task_id="+task_id;
              }
          }
        })
    }
</script>

<!--页脚 satrt-->

