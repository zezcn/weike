<body id='index'>
               <div class="clear"></div>
        </div>
    </nav>
    <div class="clear"></div>
<script type="text/javascript" src="resource/js/jqplugins/slides.min.jquery.js"></script>
<script type="text/javascript" src="resource/js/jqplugins/easySlider1.5.js"></script>
<script type="text/javascript" src="tpl/default/js/index.js"></script>
 <!--内容区 satrt-->
  <div class="wrapper clearfix">
    <div class="container_24 clearfix"> 
   <div class="pt_10"></div>


<div class="grid_18 mb_10">
   <div class="box default clearfix">
     <div class="inner">
      <!--切换广告 start-->
       <div class="banner po_re">
         <div id="slides">
          <!--图片内容区域 start-->
              <div class="slides_container">
                   <a href="http://www.kppw.cn" target="_blank" title="震撼上市1"><img src="data/uploads/sys/ad/banner1.jpg" width="710" height="320" alt="震撼上市1"></a><a href="data/uploads/sys/ad/banner2.jpg" target="_blank" title="首页_顶部幻灯广告123"><img src="data/uploads/sys/ad/banner2.jpg" width="710" height="320" alt="首页_顶部幻灯广告123"></a><a href="http://www.kppw.cn" target="_blank" title="震撼上市4"><img src="data/uploads/sys/ad/banner4.jpg" width="710" height="320" alt="震撼上市4"></a><a href="http://ww.baidu.com" target="_blank" title="震撼上市"><img src="data/uploads/sys/ad/banner1.jpg" width="710" height="320" alt="震撼上市"></a><a href="http://www.kppw.cn" target="_blank" title="震撼上市3"><img src="data/uploads/sys/ad/banner3.jpg" width="710" height="320" alt="震撼上市3"></a>              </div>
          <!--图片内容区域 end-->

         </div>
       </div>
      <!--切换广告 end-->
     </div>
    </div>
</div>


  <div class="grid_6 mb_10  clearfix">

    <div class="box model">
      <div class="inner post">
          <table>
            <tbody>
              <tr>
                <td>
                   <h2>海量服务商提交稿件，任您选！</h2>
                    <p><a href="index.php?do=release" class="submit block mar10">发布任务</a></p>
                    <p>客客出品专业威客系统</p>
                </td>
              </tr>
            </tbody>
          </table>
             
      </div>
  <!--公告 start-->
  <div class="inner notice">
  <!--公告头部 start-->
  <header class="box_header clearfix">
            <nav class="box_nav">
               <ul class="ov_hide block clearfix">
                  <li id="ul_plac_1" onclick="swaptab('plac','backLava','',3,1)"><a href="javascript:void(0);" title="公告">公告</a></li>
                  <li id="ul_plac_2" onclick="swaptab('plac','backLava','',3,2,{ajax:1,url:'index.php?ajax=bid_notice'})"><a href="javascript:void(0);" title="中标通告">中标通告</a></li>
                  <li id="ul_plac_3" onclick="swaptab('plac','backLava','',3,3,{ajax:1,url:'index.php?ajax=withdraw'})"><a href="javascript:void(0);" title="提现">提现</a></li>
                  <!--<li id="ul_plac_4" onclick="swaptab('plac','backLava','',4,4,{ajax:1,url:'index.php?ajax=safe'})"><a href="javascript:void(0);" title=""></a></li>-->
               </ul>
            </nav>
      </header>
  <!--公告头部 end-->
 <!--公告detail内容 start-->
         <article class="box_detail" id="div_plac_1">
           <ul>
              <li><a href="index.php?do=single&art_id=308"></a></li>
 <li><a href="index.php?do=single&art_id=304">震撼上线4</a></li>
 <li><a href="index.php?do=single&art_id=303">震撼上线3</a></li>
 <li><a href="index.php?do=single&art_id=302">震撼上线2</a></li>
            </ul>
         </article>
        <article class="box_detail hidden" id="div_plac_2">
          
        </article>
        <article class="box_detail hidden" id="div_plac_3">
          
        </article>

  </div>
   <!--公告 end-->
    </div>
   
                
  <div class="clear"></div>
                
  
  </div>
   
     
     <div class="clear"></div>
                <!-- {ad_show(HOME_CENTAL_ONE,首页_中部一栏广告)} -->
<div class="grid_24 mb_10">
<div class="box model blue">
<!--任务列表 start-->
<div class="task clearfix">
<!--头部 start-->
<header class="box_header clearfix">
<div class="grid_4 alpha">
<!--标题 start-->
<h1 class="box_title"><span>任务</span>Task</h1>
<!--标题 end-->
</div>
<!--按钮区域 start-->
<div class="btns">
  <a href="index.php?do=release" class="button primary"><span class="plus icon"></span>发布任务</a><a href="index.php?do=task_list" class="button"><span class="rightarrow icon"></span>进入任务大厅</a>
</div>
<!--按钮区域 end-->
</header>
<!--头部 end-->
<!--任务推荐-->

<article class="box_detail clearfix">
<div class="grid_5 alpha">
<div class="category">
<ul class="indus_list">	
<?php foreach($data["TastType"] as $key=>$val):?>
<li>
 <a href="index.php?do=task_list&path=A441" target="_blank"><?php echo $val["indus_name"]?></a>
 <?php //print_r($val);?>
 <div class="s_nav hidden">
<div class="indus">	
<?php foreach($val as $k=>$v):?>
<?php if(is_array($v)):?>
    
    <a href="index.php?r=task/search&indus_id=<?php echo $v['indus_id']?>&small=0&is_auto=0&task_status=0&is_top=0"><?php echo $v["indus_name"];?></a>
<?php endif;?>
<?php endforeach;?>

</div>
</li>
<?php endforeach;?>
<p class="all_list" style="line-height:50px;">
	   <a href="index.php?r=task/index" target="_blank" class="button">更多任务分类&gt;&gt;</a>
   </p>
</div>
           </div>
   
<div class="grid_19 alpha omega ">

           
<!--顶部推荐3条任务内容 start-->


<!--列表 start-->

<ul class=" tops clearfix">
<li class="col3">
<!--单条内容 start-->
<div class="item">
<!--任务金额 start-->
<strong class="money">
￥100 ~ 1000元            			</strong>
<!--任务金额 end-->
<!--任务标题 start-->
<h2 class="task_title"><a href="index.php?do=task&task_id=29" title="交友网站制作" target="_blank">交友网站制作</a></h2>
<!--任务标题 end-->
<!--任务发布者 start-->
<span class="publisher"><a href="http://www.dashixun.com/one/weike/index.php?do=space&member_id=3" title="樱桃小丸子" target="_blank">樱桃小丸子</a></span>
<!--任务发布者 end-->
<!--任务模型 start-->
<span class="task_mode">订金招标</span>
<!--任务模型 end-->

</div>
<!--单条内容 end-->
</li>

<li class="line"></li>
<li class="col3">
<!--单条内容 start-->
<div class="item">
<!--任务金额 start-->
<strong class="money">
￥1 ~ 1000元            			</strong>
<!--任务金额 end-->
<!--任务标题 start-->
<h2 class="task_title"><a href="index.php?do=task&task_id=27" title="棋牌类伪原创，能写的来" target="_blank">棋牌类伪原创，能写的来</a></h2>
<!--任务标题 end-->
<!--任务发布者 start-->
<span class="publisher"><a href="http://www.dashixun.com/one/weike/index.php?do=space&member_id=2" title="猪八戒" target="_blank">猪八戒</a></span>
<!--任务发布者 end-->
<!--任务模型 start-->
<span class="task_mode">普通招标</span>
<!--任务模型 end-->

</div>
<!--单条内容 end-->
</li>

<li class="line"></li>
<li class="col3">
<!--单条内容 start-->
<div class="item">
<!--任务金额 start-->
<strong class="money">
￥100 ~ 1000元            			</strong>
<!--任务金额 end-->
<!--任务标题 start-->
<h2 class="task_title"><a href="index.php?do=task&task_id=26" title="化妆工作室取名" target="_blank">化妆工作室取名</a></h2>
<!--任务标题 end-->
<!--任务发布者 start-->
<span class="publisher"><a href="http://www.dashixun.com/one/weike/index.php?do=space&member_id=2" title="猪八戒" target="_blank">猪八戒</a></span>
<!--任务发布者 end-->
<!--任务模型 start-->
<span class="task_mode">订金招标</span>
<!--任务模型 end-->

</div>
<!--单条内容 end-->
</li>

<li class="line"></li>
</ul>


<!--列表 end-->


<!--顶部推荐3条任务内容 end-->
                        
      <!--detail内容 start-->

         <!--列表内容 33条 start-->
           <ul class="small_list clearfix">
		    <?php foreach ($data["task"] as $k=>$v):?>
             <li class="col3 clearfix">
             <!--单条内容 start-->
            
                <div class="item clearfix">
                  <a href="index.php?do=task&task_id=77" title="sadasdasd" target="_blank">&nbsp;    
        <!--任务标题 start-->
                   <strong class="money">
                    <?php echo $v["task_title"]?> 
                   </strong>
      <!--任务金额 start-->
                 <strong class="money">
                    ￥<?php echo $v["task_cash"]?>.00元 
                   </strong>
     <!--任务金额 end-->
  
    <!--任务标题 end-->
        </a>
                 </div>
             
              <!--单条内容 end-->
              </li>
			  <?php  endforeach;?>
                      </ul>
       <!--列表内容 33条 end-->

  
</div>
<!--任务推荐 end-->


   </div>

   </article> 
  </div>
 </div>
         <div class='adv'><img src="data/uploads/sys/ad/adv.jpg" /></div>   <div class="grid_24 mb_10">
       <div class="box model purple">
       <!--商城内容 start-->
         <div class="shop">
           <!--头部 satrt-->
             <header class="box_header clearfix">
               <div class="grid_4 alpha">
                 <!--商城标题 start-->
                  <h1 class="box_title"><span>商城</span>Shop</h1>
                 <!--商城标题 end-->
               </div>

                <div>
                <!--商城按钮 start-->
                    <div class="btns">
                      <a href="index.php?do=shop_release" class="button primary"><span class="plus icon"></span>发布商品</a><a href="index.php?do=shop_list" class="button"><span class="rightarrow icon"></span>进入商城</a>
                    </div>
                <!--商城按钮 end-->
                </div>
               <div class="clear"></div>
          </header>
          <!--头部 end-->
           
   
   <!--任务推荐-->

<article class="box_detail clearfix">
<div class="grid_5 alpha">
<div class="category">
<ul class="indus_list">	
<?php foreach($data["TastType"] as $key=>$val):?>
<li>
 <a href="index.php?do=task_list&path=A441" target="_blank"><?php echo $val["indus_name"]?></a>
 <?php //print_r($val);?>
 <div class="s_nav hidden">
<div class="indus">	
<?php foreach($val as $k=>$v):?>
<?php if(is_array($v)):?>
    <a href="index.php?r=shop/search&indus_id=<?php echo $v['indus_id']?>"><?php echo $v["indus_name"];?></a>
<?php endif;?>
<?php endforeach;?>

</div>
</li>
<?php endforeach;?>
   <p class="all_list">
	   <a href="index.php?do=shop" target="_blank" class="button">更多商城分类&gt;&gt;</a>
   </p>
   
  
</div>
</div>  
         <!--detail内容 start-->
 
             <!--商城列表 12条 start-->
             <ul class="small_list clearfix">
                 <!--第一条商品 start--><!--第一条商品 end-->
                  
<li class="item clearfix">
<a href="index.php?do=service&sid=13" title="[图兰朵]婚纱摄影重磅推出 黄金路线启动">
<img src="data/uploads/2013/04/09/210_2282751640079d7d50.jpg" alt="[图兰朵]婚纱摄影重磅推出 黄金路线启动" onerror="this.src='tpl/default/img/shop/shop_default.gif'">
<span class="shop_item_info">
<strong class="money">￥2,000.00元/个</strong>
<strong class="title">
[图兰朵]婚纱摄影重磅推出 黄金路线启动
</strong>                
 </span>
 </a>
</li>
                                 
  
   <li class="item clearfix">
                        <a href="javascript:void(0);" title="暂无商品"><img name="lazyImg" src="tpl/default/img/shop/shop_default_big.jpg" onerror="this.src='tpl/default/img/shop/shop_default.gif'" alt="暂无商品"></a>
                  </li>
                                  <li class="item clearfix">
                        <a href="javascript:void(0);" title="暂无商品"><img name="lazyImg" src="tpl/default/img/shop/shop_default_big.jpg" onerror="this.src='tpl/default/img/shop/shop_default.gif'" alt="暂无商品"></a>
                  </li>
                                  <li class="item clearfix">
                        <a href="javascript:void(0);" title="暂无商品"><img name="lazyImg" src="tpl/default/img/shop/shop_default_big.jpg" onerror="this.src='tpl/default/img/shop/shop_default.gif'" alt="暂无商品"></a>
                  </li>
                              </ul>
             <!--商城列表 26条 end-->

             
                                  <ul class="tops clearfix">
                                          <li class="clearfix">
                         <div class="item">
                             <div class=" fl_l mr_10">
                                 <a href=" index.php?do=space&member_id=10" title="晓茜"><img src=' data/avatar/system/15_small.jpg' uid='10' class='pic_small'></a>
                             </div>
                             <div class="shoper_info">
                                 <ul>
                                     <li>
                                         <a href=" index.php?do=space&member_id=10" class="font14" title="最具个性化的店铺，值得一看哦"><strong>最具个性化的店铺，值得</strong></a>
                                     </li>
                                     <li>
                                         好评率：<span class="cc00">0%</span>
                                     </li>
                                     <li>
                                         行业：<span>网游服务 | 评测报告 </span>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </li>
                                          <li class="clearfix">
                         <div class="item">
                             <div class=" fl_l mr_10">
                                 <a href=" index.php?do=space&member_id=9" title="墨客"><img src=' data/avatar/system/2_small.jpg' uid='9' class='pic_small'></a>
                             </div>
                             <div class="shoper_info">
                                 <ul>
                                     <li>
                                         <a href=" index.php?do=space&member_id=9" class="font14" title="想要漂亮小玩具吗，专业制作手工玩具"><strong>想要漂亮小玩具吗，专业</strong></a>
                                     </li>
                                     <li>
                                         好评率：<span class="cc00">0%</span>
                                     </li>
                                     <li>
                                         行业：<span>网游服务 | 评测报告 </span>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </li>
                                          <li class="clearfix">
                         <div class="item">
                             <div class=" fl_l mr_10">
                                 <a href=" index.php?do=space&member_id=8" title="红客"><img src=' data/avatar/system/7_small.jpg' uid='8' class='pic_small'></a>
                             </div>
                             <div class="shoper_info">
                                 <ul>
                                     <li>
                                         <a href=" index.php?do=space&member_id=8" class="font14" title="我就是我，就在这里"><strong>我就是我，就在这里</strong></a>
                                     </li>
                                     <li>
                                         好评率：<span class="cc00">0%</span>
                                     </li>
                                     <li>
                                         行业：<span>建筑/装修 | 园林景观 </span>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </li>
                                          <li class="clearfix">
                         <div class="item">
                             <div class=" fl_l mr_10">
                                 <a href=" index.php?do=space&member_id=6" title="丸美弹力"><img src=' data/avatar/system/16_small.jpg' uid='6' class='pic_small'></a>
                             </div>
                             <div class="shoper_info">
                                 <ul>
                                     <li>
                                         <a href=" index.php?do=space&member_id=6" class="font14" title="我的完美店铺"><strong>我的完美店铺</strong></a>
                                     </li>
                                     <li>
                                         好评率：<span class="cc00">0%</span>
                                     </li>
                                     <li>
                                         行业：<span>建筑/装修 | 园林景观 </span>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </li>
                                          <li class="clearfix">
                         <div class="item">
                             <div class=" fl_l mr_10">
                                 <a href=" index.php?do=space&member_id=4" title="shangk"><img src=' data/avatar/000/00/00/04_avatar_small.jpg' uid='4' class='pic_small'></a>
                             </div>
                             <div class="shoper_info">
                                 <ul>
                                     <li>
                                         <a href=" index.php?do=space&member_id=4" class="font14" title="SHANGK"><strong>SHANGK</strong></a>
                                     </li>
                                     <li>
                                         好评率：<span class="cc00">100.00%</span>
                                     </li>
                                     <li>
                                         行业：<span>网站开发 | 网站模板 </span>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </li>
                                          <li class="clearfix">
                         <div class="item">
                             <div class=" fl_l mr_10">
                                 <a href=" index.php?do=space&member_id=2" title="猪八戒"><img src=' data/avatar/system/2_small.jpg' uid='2' class='pic_small'></a>
                             </div>
                             <div class="shoper_info">
                                 <ul>
                                     <li>
                                         <a href=" index.php?do=space&member_id=2" class="font14" title="猪八戒的店铺"><strong>猪八戒的店铺</strong></a>
                                     </li>
                                     <li>
                                         好评率：<span class="cc00">100.00%</span>
                                     </li>
                                     <li>
                                         行业：<span>网站开发 | 网站广告 </span>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </li>
                                      </ul>
                             

</article>
           <!--detail内容 end-->
     
        <!--商城内容 end-->
     </div>
    </div>
  </div>
    
  
  

  <!--首页_中部三栏广告 start-->
    <div class='adv'><a href='http://www.kppw.cn' target='_blank' title='adv'><img src='data/uploads/sys/ad/adv.jpg' width='' height='' alt='adv' title='adv'></a></div>  <!--首页_中部三栏广告 end-->
  
  
 
            
     <div class="grid_16 mb_10 m_h">
      <div class="box model yellow">
       <div class="inner">
        <!--案例  start-->
          <div class="case">
            <!--头部 start-->
           <header class="box_header clearfix">
             <div class="grid_5 alpha omega">
               <h1 class="box_title"><span>成功案例</span>Case</h1>
             </div>
 <div class="btns">
                    <a href="index.php?do=case" class="button" title="更多信息">更多信息&raquo;</a>
              </div>
           </header>
         <!--头部 end-->
         <!--detail内容 start-->
         <article class="box_detail no_bottom clearfix">
            <!--列表内容 start-->
              <ul class="small_list  clearfix">
                 <!--头条 start-->
   
                    <li class="first">
                        <div class="main_img">
                          <a href="index.php?do=task&task_id=28"  title="彩票站宣传单设计">
                            
                              <img  src="data/uploads/2013/04/09/30035163facda9a3b.jpg" alt="彩票站宣传单设计"/>
  
                          </a>
            </div>
                        <div class="main_title clearfix">
                           <a href="index.php?do=task&task_id=28" >
                            <span class="cc00 mr_10">￥80.00元</span>彩票站宣传单设计             </a>
            </div>
                    </li>
  
                    <li class="first">
                        <div class="main_img">
                          <a href="index.php?do=task&task_id=34"  title="淘宝网店推广 10元1稿 简单快捷">
                            
                              <img  src="data/uploads/2013/04/09/104565163fad6c36a2.jpg" alt="淘宝网店推广 10元1稿 简单快捷"/>
  
                          </a>
            </div>
                        <div class="main_title clearfix">
                           <a href="index.php?do=task&task_id=34" >
                            <span class="cc00 mr_10">￥120.00元</span>淘宝网店推广 10元1稿 简单快捷             </a>
            </div>
                    </li>
  
                    <li class="first">
                        <div class="main_img">
                          <a href="index.php?do=task&task_id=35"  title="淘宝网店推广">
                            
                              <img  src="data/uploads/2013/04/09/256495163fae065bd5.jpg" alt="淘宝网店推广"/>
  
                          </a>
            </div>
                        <div class="main_title clearfix">
                           <a href="index.php?do=task&task_id=35" >
                            <span class="cc00 mr_10">￥150.00元</span>淘宝网店推广             </a>
            </div>
                    </li>
  
                    <li class="first">
                        <div class="main_img">
                          <a href="index.php?do=task&task_id=46"  title="轻松下载每个可得钱">
                            
                              <img  src="data/uploads/2013/04/09/181985163fae9caa73.jpg" alt="轻松下载每个可得钱"/>
  
                          </a>
            </div>
                        <div class="main_title clearfix">
                           <a href="index.php?do=task&task_id=46" >
                            <span class="cc00 mr_10">￥90.00元</span>轻松下载每个可得钱             </a>
            </div>
                    </li>
  
                    <li class="first">
                        <div class="main_img">
                          <a  href="index.php?do=service&sid=3" title="【创意】著作权（版权）登记">
                            
                              <img  src="data/uploads/2013/04/09/81285163e55b16b4d.jpg" alt="【创意】著作权（版权）登记"/>
  
                          </a>
            </div>
                        <div class="main_title clearfix">
                           <a  href="index.php?do=service&sid=3">
                            <span class="cc00 mr_10">￥20.00元</span>【创意】著作权（版权）登记             </a>
            </div>
                    </li>
  
                    <li class="first">
                        <div class="main_img">
                          <a  href="index.php?do=service&sid=1" title="【创意】海报设计">
                            
                              <img  src="data/uploads/2013/04/09/314595163e47017e15.jpg" alt="【创意】海报设计"/>
  
                          </a>
            </div>
                        <div class="main_title clearfix">
                           <a  href="index.php?do=service&sid=1">
                            <span class="cc00 mr_10">￥1,000.00元</span>【创意】海报设计             </a>
            </div>
                    </li>
                  
            </ul>

           <!--列表内容 end-->
         <div class="clear"></div>
       </article>
      <!--detail内容 end-->
   </div>
   <!--案例 end-->
  </div>
 </div>
</div>
    <div class="grid_8 mb_10 m_h">
    <div class="box model rose">
      <div class="inner">
        <!--新闻资讯 start-->
          <div class="news">
           <header class="box_header clearfix">
             <div class="grid_5 alpha omega">
               <!--标题 start-->
                <h1 class="box_title"><span>资讯</span>News</h1>
               <!--标题 end-->
             </div>
           
               <div class="btns">
                <a href="index.php?do=article" class="button" title="更多信息">更多信息&raquo;</a>
               </div>
             </header>
                          
             <!--detail内容 start-->
            <article class="box_detail no_bottom clearfix" id="div_news_1">
               <!--列表内容 start-->
                <ul class="small_list clearfix">
                                                    <li>
                    <!--头条图片 start-->
                       <div class="main_img">
                          <a href="index.php?do=article&view=article_info&art_id=227" title="警惕交易诈骗，注意帐户安全">
                            <img name="lazyImg" src="tpl/default/img/style/new_default.gif" alt="警惕交易诈骗，注意帐户安全" title="警惕交易诈骗，注意帐户安全"/>
              </a>
                       </div>
                    <!--头条图片 end-->
                    <!--头条标题 start-->
                     <div class="main_title clearfix">
                       <a href="index.php?do=article&view=article_info&art_id=227" title="警惕交易诈骗，注意帐户安全">警惕交易诈骗，注意帐户安全</a>
                      <span class="date">2012-02-17</span>
                     </div>
                  </li>
                                                   <li>
                     <div class="item">
                         <a href="index.php?do=article&view=article_info&art_id=225" title="唯冠召开iPad维权发布会：起诉苹果是维权">唯冠召开iPad维权发布会：起诉苹果是维权</a>
                            <span class="date">2012-02-17</span>
                     </div>
                     <div class="clear"></div>
                 </li>
                                                     <li>
                     <div class="item">
                         <a href="index.php?do=article&view=article_info&art_id=250" title="中金香港直销Facebook股权：初定100万股门槛">中金香港直销Facebook股权：初定100万股门槛</a>
                            <span class="date">2012-02-17</span>
                     </div>
                     <div class="clear"></div>
                 </li>
                                                     <li>
                     <div class="item">
                         <a href="index.php?do=article&view=article_info&art_id=249" title="依法诚信纳税共建和谐社会">依法诚信纳税共建和谐社会</a>
                            <span class="date">2012-02-17</span>
                     </div>
                     <div class="clear"></div>
                 </li>
                                                     <li>
                     <div class="item">
                         <a href="index.php?do=article&view=article_info&art_id=248" title="诚信体系之诚信保障">诚信体系之诚信保障</a>
                            <span class="date">2012-02-17</span>
                     </div>
                     <div class="clear"></div>
                 </li>
                                                     <li>
                     <div class="item">
                         <a href="index.php?do=article&view=article_info&art_id=246" title="威客营销的成功之路及潜在危机分析">威客营销的成功之路及潜在危机分析</a>
                            <span class="date">2012-02-17</span>
                     </div>
                     <div class="clear"></div>
                 </li>
                                                     <li>
                     <div class="item">
                         <a href="index.php?do=article&view=article_info&art_id=247" title="拥有梦想的快乐威客">拥有梦想的快乐威客</a>
                            <span class="date">2012-02-17</span>
                     </div>
                     <div class="clear"></div>
                 </li>
                                                     <li>
                     <div class="item">
                         <a href="index.php?do=article&view=article_info&art_id=244" title="什么是威客？">什么是威客？</a>
                            <span class="date">2012-02-17</span>
                     </div>
                     <div class="clear"></div>
                 </li>
                                                     <li>
                     <div class="item">
                         <a href="index.php?do=article&view=article_info&art_id=243" title="威客必看：发帖任务参与须知">威客必看：发帖任务参与须知</a>
                            <span class="date">2012-02-17</span>
                     </div>
                     <div class="clear"></div>
                 </li>
                                     
                </ul>

               <!--列表内容 end-->

            </article>
           <!--detail内容 end-->
         </div>
       <!--新闻资讯 end-->
      </div>
      </div>
     </div>    
     <div class="clear"></div>      
     <div class="box default m_h">
    <div class="inner">
  <!--  网站统计 start -->
    <div class="site_stats po_re">

      <div id="slider" class="box_detail">
    <!--   注册用户 start -->
       <ul>
          <li>
            <p>
              <span>注册用户数[个]</span><span><strong class="num goup" >12</strong></span>
            </p>
    <!--  任务统计 start -->
                <p>
            <span>任务交易额[元]</span><span><strong class="num godown" >233.99</strong></span>
          </p>
          <p>
            <span>任务数量[个]</span><span><strong class="num goup" >80</strong></span>
          </p>
             <!-- 任务统计 end -->
    </li>
     <!--    认证统计 start -->
     <li>
        <p>
          <span>认证统计数[个]</span><span><strong class="num gouspan" >1</strong></span>
        </p>
 
      <!-- 认证统计 end -->
    <!--  商城统计 start -->
                  <p>
            <span>商城交易额[元]  </span><span><strong class="num  godown " >2,057.00</strong></span>
          </p>
          <span>商品数量[个] </span><span><strong class="num godown " >9</strong></span>
            </li>
        </ul>
   <!--    商城统计 end -->
    </div>
   <!--  网站统计 end -->
     </div>
    </div>
  </div>
  
    <div class="clear"></div>      
  
  <!--首页_中部四栏广告 start-->
     <div class='adv'><a href='http://www.kppw.cn' target='_blank' title='adv'><img src='data/uploads/sys/ad/adv.jpg' width='' height='' alt='adv' title='adv'></a></div>  <!--首页_中部四栏广告end-->
  <div class="clear"></div>
   </div>
 </div>

<div class="comment clearfix ">
<div class="container_24 ">
<span class="icon16 spechbubble-2 mt_5 mr_5"></span>我对 客客出品专业威客系统 有意见或建议，现在就<a href="javascript:void(0);" title="投诉建议" onclick="suggest()">提交</a>！</div>
</div>
   
<!--网站地址 start-->
 <div class="sitemap clearfix m_h">
  
    <div class="container_24 clearfix">
      
    <!--推荐分类-->

                <dl>
                    <dt>推荐分类</dt>
                      <dd>
                           <ul>
                                                                        <li><a href="index.php?do=task_list&path=A441"  target="_blank">品牌设计</a></li>
                <li><a href="index.php?do=task_list&path=A249"  target="_blank">网游服务</a></li>
                <li><a href="index.php?do=task_list&path=A3"  target="_blank">文案写作</a></li>
                <li><a href="index.php?do=task_list&path=A335"  target="_blank">建筑/装修</a></li>
                <li><a href="index.php?do=task_list&path=A211"  target="_blank">头脑风暴</a></li>
                           </ul>
                      </dd>
                </dl>

 <!--任务大厅-->
    
       <dl>
         <dt>任务大厅</dt>
            <dd>
             <ul>
                <li><a href="index.php?do=release" target="_blank">发布任务</a></li>
<li><a href="index.php?do=task_list" target="_blank">参与任务</a></li>
<li><a href="index.php?do=task_list" target="_blank">任务大厅</a></li>
<li><a href="index.php?do=task_map" target="_blank">任务地图</a></li> 
              </ul>
             </dd>
        </dl>
  
    <!--威客商城-->
      
         <dl>
            <dt>威客商城</dt>
              <dd>
                 <ul>
                  <li><a href="index.php?do=shop_release" target="_blank">发布商品</a></li>
<li><a href="index.php?do=shop_release&model_id=7" target="_blank">发布服务</a></li>
                               <li><a href="index.php?do=shop_list&path=C6" target="_blank">威客作品</a></li>
                       <li><a href="index.php?do=shop_list&path=C7" target="_blank">威客服务</a></li>
  
                 </ul>
                </dd>
         </dl>
   
  <!--资讯中心-->
   
        <dl>
           <dt>资讯中心</dt>
              <dd>
                  <ul>
           <li><a href="index.php?do=article" target="_blank"><span>客客资讯</span></a></li>
                  </ul>
              </dd>
        </dl>
   
 <!--关于网站-->

<dl>
      <dt>关于网站</dt>
        <dd>
          <ul>
                                  <li><a href="index.php?do=single&art_id=300" target="_blank" title="联系我们">联系我们</a></li>
                      <li><a href="index.php?do=single&art_id=299" target="_blank" title="关于我们">关于我们</a></li>
            </ul>
        </dd>
    </dl>

 <!--帮助中心-->
    
      <dl>
          <dt>帮助中心</dt>
            <dd>
              <ul>
                 <li><a href="index.php?do=help&fpid=100" target="_blank"><span>帮助中心</span></a></li>
                </ul>
            </dd>
        </dl>
   
</div> 

</div>
<!--网站地址 end-->

 <section class="site_links clearfix m_h">
 <div class="container_24 ">
    
      <div class="links">
      <dl>
          <dt>友情链接</dt>
            <dd>
              <ul class="clearfix">
                
                 <li><a href="http://www.kppw.cn/kppw" target="_blank"><span>KPPW系统演示站点</span></a></li>
           <li><a href="http://www.kppw.cn" target="_blank"><span>客客团队演示站点</span></a></li>
           <li><a href="http://www.kekezu.com/bbs" target="_blank"><span>客客团队交流社区</span></a></li>
           <li><a href="http://www.kekezu.com" target="_blank"><span>武汉客客信息技术有限公司官网</span></a></li>
                </ul>
            </dd>
        </dl>
    </div>
   
</div>
</section>
 <!--网站链接以及语言栏 关注我们 搜索 end-->



</body>