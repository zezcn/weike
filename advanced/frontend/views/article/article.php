
<?php
    use yii\widgets\LinkPager;
?>
    <body id="article">

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
<!--页面头部-->
    <header class="clearfix page_header">
<div class="container_24">
<div class='adv'><a href='http://www.kppw.cn' target='_blank' title='adv'><img src='data/uploads/sys/ad/adv.jpg' width='' height='' alt='adv' title='adv'></a></div>    <!--页面导航-->
    <div class="breadcrumbs clearfix">
        <a href="index.php">首页</a> &gt;
<span>资讯中心</span>
    </div>
    <!--end 页面导航--><!--页面标题(搜索前)-
    <div class="page_title clearfix">
        <h2 class="title"><a href="index.php?do=article&view=article_index">资讯中心</a></h2>
    </div>
    <!--end 页面标题-->

</div>
</header>
<!--end 页面头部--><!--主内容-->
<section class="clearfix content">
    <div class="container_24">
    	<div class="clear"></div>
  <!--资讯_顶部通栏广告 start-->
 		   <!--资讯_顶部通栏广告 end-->
<div class="clear"></div>
        <section class="clearfix section">
            <div class="second_menu container_24 po_ab">
                <div class="suffix_23 pull_1">
                    <nav class="minor_nav box">
                        <ul class="nav_group clearfix">
                            <li>
                                <a href="index.php?do=help" title="帮助中心"><span class="icon16 help">帮助中心</span><b class="font14 ml_5 po_re" style="top:4px;">？</b></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="show_panel container_24 po_re">
                <div class="po_re clearfix">
                    <!--左边内容-->
                    <div class="grid_19 omega">
                        <div class="box normal1 clearfix bord_c">
                            <!--资讯缩略-->
                            <div class="news_list">
                                <!--新闻-->        
                      <?php foreach ($data as $key=>$val):?> 
                       


     
                                       
                                <div class="item clearfix">
                                    <div class="news_article">
                                        <h3 class="news_title ws_break">
                                        	                                        		<a title="警惕交易诈骗，注意帐户安全" href="index.php?do=article&view=article_info&art_cat_id=203&art_id=227">
                                        	                                        	<?php echo $val['art_title']?><font color="red"></font></a>
</h3>
                                        <p class="clearfix">
                                        	<span class="c999"><?php echo date("Y-m-d",time())?></span>
                                        	
                                        	                                        		<a href="index.php?do=article&view=article_list&art_cat_id=203">
                                        	[ <?php echo $val['cat_name']?> ]</a>
                                            
                                            
                                        </p>
<div class="news_img">
                                        	                                        		<a href="index.php?do=article&view=article_info&art_cat_id=203&art_id=227" class="ov_hide mt_10"></a>
                                        												
                                        	
                                    	</div>
                                        <div class="news_content">
                                            <p>
                                            	<?php echo $val['art_title']?>                                         </p>
                                        </div>
<div class="clear"></div>
<div class="m_h">

<?php echo $val['views']?>关注人数                                        	                                        		<a href="index.php?r=article/yuedu&art_id=<?php echo $val['art_id']?>">阅读全文</a>
                                        	
</div>
</div>
         </div>
   <?php endforeach;?>
                                
       </div><!--end 资讯缩略-->
                        </div>
                        <!--page 翻页 start-->
                        <div class="page">
                            <p class="clearfix">
  <?= LinkPager::widget(['pagination' => $pages]); ?>
                            
                            
                            </p>

                                
                                
                            <div class="clear">
                            </div>
                        </div>
                        <!--page 翻页 end-->         
                    </div>
                    <!--end 左边部分-->
                    <!--右边部分-->
                    <div class="grid_5 omega news_class">

        <!--分类-->
        <div class="box normal pad10">
            <h3 class="title">分类</h3>
            <div class="mt_5 news_sort">
                <ul>
                                        
                    <li class="second_sort ">                    	
                		                                                                                                                                                                                                                                                                                                                                                                                                                                                
<span class="ico"></span>
				
                           <a href="index.php?do=article&view=article_list&art_cat_id=2" class="minus">
                        		联系我们</a>
<p class="news_secondMenu" id="art_p_2" style="display:none">                    		
                                                    </p>                        
                    </li>
              
                                        
                    <li class="second_sort ">                    	
                		                                                                                                                                                                                                                                                                                                                                                                                                                                                
<span class="ico"></span>
				
                           <a href="index.php?do=article&view=article_list&art_cat_id=5" class="minus">
                        		行业动态</a>
<p class="news_secondMenu" id="art_p_5" style="display:none">                    		
                                                    </p>                        
                    </li>
              
                                        
                    <li class="second_sort ">                    	
                		                                                                                                                                                                                                                                                                                                                                                                                                                                                
<span class="ico"></span>
				
                           <a href="index.php?do=article&view=article_list&art_cat_id=7" class="minus">
                        		媒体报导</a>
<p class="news_secondMenu" id="art_p_7" style="display:none">                    		
                                                    </p>                        
                    </li>
              
                                        
                    <li class="second_sort ">                    	
                		                                                                                                                                                                                                                                                                                                                                                                                                                                                
<span class="ico"></span>
				
                           <a href="index.php?do=article&view=article_list&art_cat_id=17" class="minus">
                        		网站公告</a>
<p class="news_secondMenu" id="art_p_17" style="display:none">                    		
                                                    </p>                        
                    </li>
              
                                        
                    <li class="second_sort ">                    	
                		                                                                                                                                                                                                                                                                                                                                                                                                                                                
<span class="ico"></span>
				
                           <a href="index.php?do=article&view=article_list&art_cat_id=202" class="minus">
                        		关于我们</a>
<p class="news_secondMenu" id="art_p_202" style="display:none">                    		
                                                    </p>                        
                    </li>
              
                                        
                    <li class="second_sort ">                    	
                		                                                                                                                                                                                                                                                                                                                                                                                                                                                
<span class="ico"></span>
				
                           <a href="index.php?do=article&view=article_list&art_cat_id=4" class="minus">
                        		政策法规</a>
<p class="news_secondMenu" id="art_p_4" style="display:none">                    		
                                                    </p>                        
                    </li>
              
                                        
                    <li class="second_sort ">                    	
                		                                                                                                                                                                                                                                                                                                                                                                                                                                                
<span class="ico"></span>
				
                           <a href="index.php?do=article&view=article_list&art_cat_id=203" class="minus">
                        		安全交易</a>
<p class="news_secondMenu" id="art_p_203" style="display:none">                    		
                                                    </p>                        
                    </li>
              
                                        
                    <li class="second_sort ">                    	
                		                                                                                                                                                                                                                                                                                                                                                                                                                                                
<span class="ico"></span>
				
                           <a href="index.php?do=article&view=article_list&art_cat_id=358" class="minus">
                        		新闻列表</a>
<p class="news_secondMenu" id="art_p_358" style="display:none">                    		
                                                    </p>                        
                    </li>
              
                                    </ul>
            </div>
        </div>
        <!--end 分类--><!--归档-->
        <div class="box normal pad10 mt_10">
            <h3 class="title">归档</h3>
            <div class="mt_5 pl_20">
                <ul>
                                        <li>
                    	                           <a href="index.php?do=article&view=article_list&year=2012">
                        2012年归档[22]</a>
                    </li>
                                        <li>
                    	                           <a href="index.php?do=article&view=article_list&year=2013">
                        2013年归档[3]</a>
                    </li>
                                    </ul>
            </div>
        </div>
        <!--end 归档-->
 
</div>
<script type="text/javascript">
    function show_hide(obj_id){
        var obj_id = obj_id;
        $("#art_p_" + obj_id).toggle(function(){
            var art_class = $("#art_span_" + obj_id).attr("class");
            if (art_class == 'icon16 sq-plus') {
                $("#art_span_" + obj_id).attr("class", "icon16 sq-minus");
            }
            else {
                $("#art_span_" + obj_id).attr("class", "icon16 sq-plus");
            }
        });
    }
</script>
                    <!--end 右边部分-->
                </div>
            </div>
        </section>
<div class='adv'><a href='http://www.kppw.cn' target='_blank' title='adv'><img src='data/uploads/sys/ad/adv.jpg' width='' height='' alt='adv' title='adv'></a></div>    </div>
</section>
<!--end 主内容-->
</div>

