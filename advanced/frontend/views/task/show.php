
    <body id="task">
    <div class="clear"></div>
<!--公用样式-->

 <!--页面内容区-->
 <div class="wrapper">
  <!--页面头部-->
  <header class="clearfix page_header">
  <div class="container_24 clearfix">
   <div class="clearfix po_re" >
   <!--面包屑-->
     <div class="breadcrumbs clearfix">
      <a href="index.php">首页</a> &gt;
  <a href="index.php?do=task_list&path=B3">任务大厅</a> &gt;
  <a href="index.php?do=task_list&path=A3B3">文案写作</a> &gt;
  <a href="index.php?do=task_list&path=A3B3">撰写报告</a>
   </div>
  <!--end 面包屑-->
<div class="grid_19" id="taskScroll">
<div class="mre_l_con clearfix">

  <div id="taskScroll">
   <div class="page_title ws_break clearfix">
   	<div class=" fl_l pt_15 mr_10 mb_5 hidden">
   		<img src="data/uploads/sys/ad/95164f3dc640dfd7b.jpg" alt="dsfds" class="pic_small">
   </div>
   
    <h2 class="title">
    	<strong class="red mr_10">￥<?php echo $data["task_cash"]?>元</strong>
<a href="index.php?do=task&task_id=57"><?php echo $data["task_title"]?></a>
    </h2>
    <div class="page_sub_title c666 mb_10">
       <span>任务发布时间：<?php echo date("Y-m-d H:i:s",$data["sub_time"])?></span>
   <span class="border_l_c mar10">&nbsp;</span>
       <a class="mre_task_kind c333" href="javascript:void(0);" title="方案中标发放赏金，所需稿件3个，稿件单价￥30.00元，已交稿件3个，已中标3个">计件悬赏模式<span>&nbsp;</span></a>
       <span class="border_l_c mar10">&nbsp;</span>
       <span>编号：#<?php echo $data["task_id"]?></span>
   <span class="border_l_c mar10">&nbsp;</span>
       <span>5 人关注</span>
       <span class="border_l_c mar10">&nbsp;</span>
   <span></span>
</div>
    </div>
</div>
</div>
</div>
<div class="grid_5">
<div class="mre_r_con clearfix">
<div class="control clearfix">
      <!--start提交稿件-->
     	  <!--end 提交稿件-->
  <!--start延期加价-->
     	  <!--end 延期加价--> 
      <!--start发起投票-->
     	  <!--end 发起投票-->

  <div class="clearfix mt_5">
  	  <!--
  <div class="msg msg_ok block ">
  	状态：结束  </div>-->
  <div class="msg msg_ok block ">
  	任务已圆满结束，恭喜中标威客  </div>
  <div>
  	<span class="c333"></span>
    <span class="red d_time" ed="" title=""></span>
  </div>
                 
  </div>
     </div>
</div>
</div>
</div>
   
   
   <div class="clear"></div>
    <!--页面子导航-->
<div id="header_nav" class="po_re grid_19">
     <nav class="clearfix page_nav po_re" id="top_nav">
       <ul>
         <li class="selected"><a href="index.php?do=task&task_id=57" title="描述"><span class="icon16 notepad-2 mr_5"></span>描述</a></li>
         <li ><a href="index.php?do=task&task_id=57&view=work" title="稿件"><span class="icon16 spechbubble-sq-line mr_5"></span>稿件 <span class="c999">[<span id="work_num">3</span>]</span></a></li>		 
         <li ><a href="index.php?do=task&task_id=57&view=comment" class="留言"><span class="icon16 spechbubble-2 mr_5"></span>留言 <span class="c999">[0]</span></a></a></li>
         <li ><a href="index.php?do=task&task_id=57&view=mark" title="评价"><span class="icon16 cert mr_5"></span>评价<span class="c999">[6]</span></a></a></li>
         	         
<!--  <li class="border_n"><a href="javascript:void(0);" class="" title="停靠在左侧"><span class="icon16 arrow-bottom-left block" id="arrow-bottom-left">停靠在左边</span></a></li> -->
       </ul>
 </nav>
 <!--工具栏-->
        <div class="operate po_ab hidden">
                  <a href="javascript:setfontsize();" class="" title="文字大小"><div class="icon16 text-letter-t">文字大小</div></a>
          <a href="javascript:setprint('details');" class="" title="打印"><div class="icon16 print">打印</div></a>
       </div>
      <!--end 工具栏-->
     <div class="clear"></div> 
</div>
    <!--end 页面子导航-->
   <div class="clear"></div>
  </div> 
 </header>
 <!--end 页面头部-->
 <!--详细内容区-->
  <section class="content">
  <!--布局框-->  
  <div class="container_24">
  	<!--章节1-->
   <section class="clearfix section">
  	<!--左边导航 start-->
<!-- <div class="second_menu container_24 po_ab hidden" id="left_nav">
        <div class="suffix_23 pull_1">
            <nav class="minor_nav box">
                <ul class="nav_group">
                   <li >
         	<a href="index.php?do=task&task_id=57" title="描述" class="selected">
            	<div class="icon16 notepad-2 mr_5 block">描</div>
            </a>
         </li>
         <li>
         	<a href="index.php?do=task&task_id=57&view=work" title="稿件[3]" >
            	<div class="icon16 spechbubble-sq-line mr_5 block">稿</div>
            </a>
         </li>
         <li >
         	<a href="index.php?do=task&task_id=57&view=comment" title="留言[0]" >
            	<div class="icon16 spechbubble-2 mr_5 block">留</div>
            </a>
         </li>
        <li>
        	<a href="index.php?do=task&task_id=57&view=mark" title="评价[6]" >
            <div class="icon16 cert mr_5 block">评</div>
            </a>
         </li>
                        </ul>
                <ul class="nav_group">
<li>
         	<a href="javascript:void(0);" class="" title="停靠在顶部">
            	<div class="icon16 arrow-top-right block" id="arrow-top-right">停止</div>
            </a>
         </li>
                </ul>
            </nav>
        </div>
    </div> -->
  	<!--左边导航 end-->
 
   
    <!---->
    <div class="show_panel container_24 ">
        <div class="grid_19">
 <div class="panel clearfix box">
      <!--布局 左-->
       <div class="clearfix">
        <!--布局 内边距-->
         <div class="pad20">
          <!--标题头部-->
         <header class="hidden">
          <div class="pad5 border_b_c po_re clearfix">
            <h2>说明</h2>
          </div>  
        </header>
       <!--end 标题头部-->
       <!--任务地图-->
<!--end任务地图-->
       <!--内容1-->
       <details open class="mb_20 " id="details">
       <!--标题-->
        <summary  class="fontb">需求</summary>
         <!--内容-->
      
<pre class="ws_prewrap ws_break" ><div><?php echo strip_tags($data['task_desc'])?></div></pre> 
      </details>
      <!--end 内容1-->
  <!--start补充需求-->
     	  <!--end 补充需求-->
      <!--任务补充需求-->
       <!--end 任务补充需求-->

     <!--任务附件-->
     <!--end 任务附件-->

   </div>
   <!--end 布局 内边距-->
  </div>
  <!--end 布局 左-->
  
  <!--工具栏-->
          <div class="operate fl_r mt_10 hidden">
 
            <a href="index.php" class="" title="返回首页"><div class="icon16 home">返回首页</div></a>
 
            <a href="javascript:void(0)" class="scrollTop" title="返回顶部"><div class="icon16 arrow-top">返回顶部</div></a>
          </div>
        <!--end 工具栏-->
  </div>
  </div>
  
  <div class="grid_5  clearfix mre_btns">
 	<!--作者信息-->
            	<div class="shop_author box normal2 clearfix mb_10">
            	<div class="inner">
            		<div class="box_header">
                	<h2 class="title">雇主信息</h2>
                </div>
<div class="pad5 clearfix border_b_c">
<div class="clearfix">
                        <div class="t_c fl_l mr_10">
                                <img src='http://www.wk.com/data/avatar/system/16_small.jpg' uid='6' class='pic_small'>                         </div>
<p class="shop_sign fl_l">
                            <a href="index.php?do=space&member_id=6" class="font14b block" target="_blank">丸美弹力</a>
<img src="data/uploads/sys/mark/262274f3b086f5cbfe.gif?fid=2074" align="absmiddle" title="头衔 ：五级雇主&#13;&#10;信誉值：2859&#13;&#10;等级：5">                        </p>
</div>
                    <p>
                    	<!--卖家的认证信息-->
                                            </p>
<p  class="clearfix"><span class="fl_l">好评率：0%</span>
<a href="javascript:void(0);" class="fl_r" onclick="add_follow('add_focus','6');"  id="add_follow_6">加关注</a></p>
</p>
<p><span>付款及时性<em class="cc00">5.0分</em></span><span class="stars a5 s5"><span class="star_selected"></span></span></p></span><p><span>合作愉快度<em class="cc00">5.0分</em></span><span class="stars a5 s5"><span class="star_selected"></span></span></p></span>        
            	</div>
<div class="shop_author_link clearfix">
<a href="index.php?do=space&member_id=6" target="_blank" class="fl_l">查看店铺空间</a>
<a href="javascript:void(0)" onclick="sendMessage(6,'丸美弹力')" class="fl_r">发送站内信</a>
</div>
</div>
</div>	
            <!--end 作者信息-->
<div class="">
</div>

<div class="award clearfix box normal2 mb_10">
<div class="inner">
<div class="award_top  clearfix">
<div class="box_header clearfix">
<h2 class=" title">
中标者</h2>
</div>
<div class="srewar_user  clearfix">
<ul class="clearfix pad5">
<li><a href="index.php?do=space&member_id=1" title="admin"><img src='http://www.wk.com/data/avatar/default/man_small.jpg' uid='1' class='pic_small'></a></li>
</ul>
</div>
</div>
</div>

 </div>	
<a class="button block mt_10" href="javascript:void(0)"  onclick="report('task','2','57','6','丸美弹力');" title="举报">
         	<span class="icon16 hand-1"></span>
举报         	</a>
<a class="button block" href="javascript:void(0)" onclick="favor('task_id','task','preward','6','57','进驻商场&企业生活馆餐饮店的竞标报告','57')">
<span class="star-fav-empty  icon16"></span>
0 次收藏</a>
<a class="button block" href="index.php?do=ajax&view=share&oid=1&title=进驻商场&企业生活馆餐饮店的竞标报告" id="share1" onclick="return false;" onmouseover="share(this)" title="分享">
         	<span class="icon16 share"  id="test_aaa"></span>
分享 </a>



  
  
      
       <div class="clear"></div>
        
       </div>
   
   <!---->
   </section>
   <!--end 章节1-->
   <!--任务详情_底部广告-->
   <div class='adv'><a href='http://www.kppw.cn' target='_blank' title='adv'><img src='data/uploads/sys/ad/adv.jpg' width='' height='' alt='adv' title='adv'></a></div>  <!--其他推荐-->
    <aside class="clearfix mb_10">
     <div class="grid_8">
      <div class="box  normal2">
        <div class="inner">
        	<div class="box_header">
          <h3 class="title">关注<span class="c369"><a href="index.php?do=task_list&path=B3A3" target="_blank">文案写作</a></span>的人还关注了</h3>
      </div>
           <div class="clearfix box_detail">

               <ul>
               	                   <li class="t_c"><span class="c999">暂无相应记录</span></li>
               </ul>

           </div>
        </div>
      </div>
     </div>
     <div class="grid_8">
      <div class="box  normal2">
       <div class="inner">
       	<div class="box_header">
         <h3 class="title">你可能感兴趣的任务</h3>
     	</div>
         <div class="clearfix box_detail">
        <ul>
        	
               	                   <li class="t_c"><span class="c999">暂无相应记录</span></li>
          </ul>
        </div>
       </div>
      </div>
     </div>
     <div class="grid_8">
       <div class="box  normal2">
         <div class="inner">
         	<div class="box_header">
            <h3 class="title">浏览历史记录</h3>
        	</div>
              <div class="clearfix box_detail">
                <ul>
               	<li>
<div class="item clearfix">
<a href="index.php?do=task&task_id=57" target="_blank" title="进驻商场&企业生活馆餐饮店的竞标报告"><span class="c900">
￥100.00元</span> 进驻商场&企业生活馆餐饮店的竞标报告</a>
</div>
</li>	
<li>
<div class="item clearfix">
<a href="index.php?do=task&task_id=73" target="_blank" title="445646"><span class="c900">
￥80.00元</span> 445646</a>
</div>
</li>	
<li>
<div class="item clearfix">
<a href="index.php?do=task&task_id=28" target="_blank" title="彩票站宣传单设计"><span class="c900">
￥80.00元</span> 彩票站宣传单设计</a>
</div>
</li>	
</ul>
               </div>
                                    
         </div>
        </div>
     </div>
    </aside>
    <!--end 其他推荐-->
    </div>
    <!--end 布局框-->     	
   </section>
   <!--end 详细内容区-->
  </div>
<!--end 页面内容区-->

<script type="text/javascript">
var guid  	 	= parseInt(6)+0;
var task_id		= parseInt(57)+0;
var uid 		= parseInt('1')+0;
var task_status = parseInt(8)+0;
var basic_url	= "index.php?do=task&task_id=57";	
var datePrv     = "";
var username    = "admin";
var delay_count = parseInt('0')+0;
var delay_total  = parseInt('3')+0;
var if_can_hand = parseInt(1)+0;
var trust_mode  = "0";

</script>
<script src="resource/js/uploadify/jquery.uploadify-3.1.min.js" type="text/javascript"></script>
<link href="resource/js/uploadify/uploadify.css" rel="stylesheet">
<script type="text/javascript" src="resource/js/jqplugins/jQuery.mouseDelay.js"></script>
<script type="text/javascript"> 
In.add('preward_task',{path:"task/preward/tpl/default/preward_task.js",type:'js'});
In('print','task','preward_task');

</script> 
