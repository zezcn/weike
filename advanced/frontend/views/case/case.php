<?php
use yii\widgets\LinkPager;
?>

<body id="case">

<div class="blue_style" id="wrapper">

        <div id="append_parent">
        </div>
        <div id="ajaxwaitid">
        	<div>
        	<img src="tpl/default/theme/blue/img/system/loading.gif" alt="loading"/>
请求处理中...</div>
</div>
 

    <div class="clear"></div>
<div class="wrapper">
<!--页面头部-->
<header class="clearfix page_header">
    	<div class="container_24">
    	
        <!--页面导航-->
         <div class='adv'><a href='http://www.kppw.cn' target='_blank' title='adv'><img src='data/uploads/sys/ad/adv.jpg' width='' height='' alt='adv' title='adv'></a></div>            <!--页面导航-->
        	<div class="breadcrumbs clearfix">
            	<a href="#">首页</a> &gt; <span>成功案例</span>
        	</div>
        <!--end 页面导航-->

<!--页面标题(搜索前)-
        	<div class="page_title clearfix">
            	<div class="grid_20">
                	<h2 class="title">成功案例</h2>
            	</div>   
        	</div>
        <!--end 页面标题-->
     
    	</div>
</header>
<!--end 页面标题-->           
        <!--页面内容-->
<section class="content clearfix">
        <div class="container_24 clearfix">
           

<div class="case pb_10 clearfix">
<div id="container" class="  clearfix ">
<!--eval 0 = 0+1;-->
<?php foreach ($data['list'] as $key => $v) {

?>
<div class="box case_box clearfix">

<div class="case_con clearfix">

<a  href="index.php?do=service&sid=5"  ><img src="<?php echo $v['case_img']?>" 
onerror="this.src='resource/img/style/shop_default_big.jpg'" alt="【创意】网络视频" title="【创意】网络视频"></a>

<div class="mt_5 img_title clearfix">
<a  href="index.php?do=service&sid=5" class="case_name" title="【创意】网络视频"><span class="font14 cc00 mr_5">￥<?php echo $v['case_price']?>元</span><?php echo $v['case_title']?></a>
</div>

<div class="clearfix">
<span style="color:#2f549f;">影视/配音/歌词 / 影视制作</span>

<div class="clear"></div>
<span class="fl_l">关注：0 </span>
<span class="fl_r">销量：0 </span> 
<div class="clear"></div>
<span class="fl_l">案例类型：<?php echo $v['obj_type']?> </span>
<a  href="index.php?r=case/detail&id=<?php echo $v['case_id']?>"  class="fl_r">查看详情<span class="font_simsun">>></span></a>								
</div>
</div>
</div>
<?php }?>
<!--eval 1 = 1+1;-->

</div>	
</div>

    <div class="page">
  
        <?= LinkPager::widget(['pagination' => $pages]); ?>
 
     </div>
</div>
                                      	
         
</div>	
        </section>
<!--end 页面内容-->
</div>
<script type="text/javascript" src="resource/js/jqplugins/jquery.masonry.min.js"></script>
<script type="text/javascript" src="resource/js/jqplugins/jquery.imagesloaded.js"></script>
<script type="text/javascript" src="tpl/default/js/masonry_img.js"></script>

