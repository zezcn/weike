<?php keke_tpl_class::checkrefresh('tpl/default/shop_list', '1418787158' );?><?php if($_K['inajax']) { ?>
     <?php if(!isset($ajaxmenu)) { ?>
<h3 class="flb"><em><?php echo $title;?></em><span><a href="javascript:;" class="flbc" onClick="hideWindow('<?php echo $handlekey?>');" title="close"><?php echo $_lang['close'];?></a></span></h3>
<?php } ?>
<?php } else { ?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html dir="ltr" lang="zh-cn" id="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="zh-cn" id="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="zh-cn" id="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="zh-cn"> <!--<![endif]-->
<head>
<meta charset="<?php echo $_K['charset'];?>">
<title><?php echo $page_title;?></title>
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE,chrome=1">
<meta name="keywords" content="<?php echo $page_keyword;?>">
<meta name="description" content="<?php echo $page_description;?>">
<meta name="generator" content="<?php echo $_lang['keke_pub'];?> <?php echo KEKE_VERSION;?>" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style” content=black" /> 
<meta name="author" content="kekezu" />
<meta name="copyright" content="<?php echo $basic_config['copyright'];?>" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="apple-touch-icon" href="favicon.ico"/>
<script type="text/javascript">
var SITEURL= "<?php echo $_K['siteurl'];?>",
    SKIN_PATH = '<?php echo SKIN_PATH;?>',
LANG       = '<?php echo $language;?>',
    INDEX      = '<?php echo $do;?>',
    CHARSET    = "<?php echo $_K['charset'];?>";
</script>
<link href="resource/css/reset.css" rel="stylesheet" charset="utf-8">
<!--公用样式-->
<link href="resource/css/base.css" rel="stylesheet" charset="utf-8">
<!--布局样式-->

<link rel="stylesheet" media="all" href="resource/css/layout/960.min.css" charset="utf-8">


<!--box样式-->
<link href="resource/css/box.css" rel="stylesheet" charset="utf-8">

<link href="resource/css/animate.css" rel="stylesheet" charset="utf-8">
<link href="<?php echo SKIN_PATH;?>/css/common.css" rel="stylesheet" charset="utf-8">
<link href="<?php echo SKIN_PATH;?>/theme/<?php echo $_K['theme'];?>/css/<?php echo $_K['theme'];?>_style.css" rel="stylesheet" charset="utf-8">
<link href="resource/js/jqplugins/tipsy/tipsy.css" rel="stylesheet">
<link href="resource/css/button/stylesheets/css3buttons.css" rel="stylesheet" charset="utf-8">
<!--[if lt IE 9]>
<script src="resource/js/system/html5.js" type="text/javascript"></script>
<![endif]-->


<!--jQuery1.4.4库-->
<script src="resource/js/jquery.js" type="text/javascript"></script>
<script src="lang/<?php echo $language;?>/script/lang.js" type="text/javascript"></script>
<script src="resource/js/system/keke.js" type="text/javascript"></script>
<script src="resource/js/in.js" type="text/javascript"></script>
<script type="text/javascript">
 //js异步加载预定义
 	In.add('mouseDelay',{path:"resource/js/jqplugins/jQuery.mouseDelay.js",type:'js'});
In.add('waypoints',{path:"resource/js/jqplugins/waypoints/waypoints.min.js",type:'js'});
In.add('custom',{path:"resource/js/system/custom.js",type:'js',rely:['waypoints']});
 	In.add('form',{path:"resource/js/system/form_and_validation.js",type:'js'});
In.add('print',{path:"resource/js/jqplugins/jquery.print.js",type:'js'});
In.add('task',{path:"resource/js/system/task.js",type:'js'});
 	In.add('calendar',{path:"resource/js/system/script_calendar.js",type:'js'}); 
In.add('xheditor',{path:"resource/js/xheditor/xheditor.js",type:'js'});  
 	In.add('script_city',{path:"resource/js/system/script_city.js",type:'js'}); 
In.add('lavalamp',{path:"resource/js/jqplugins/lavalamp/jquery.lavalamp-1.3.5.min.js",type:'js'});
In.add('tipsy',{path:"resource/js/jqplugins/tipsy/jquery.tipsy.js",type:'js'});
In.add('autoIMG',{path:"resource/js/jqplugins/autoimg/jQuery.autoIMG.min.js",type:'js'});
 	In.add('slides',{path:"resource/js/jqplugins/slides.min.jquery.js",type:'js'});
In.add('ajaxfileupload',{path:"resource/js/system/ajaxfileupload.js",type:'js'});
In.add('header_top',{path:"resource/js/system/header_top.js",type:'js',rely:['mouseDelay']}); 
In.add('lazy',{path:"resource/js/system/lazy.js",type:'js'});
In.add('pcas',{path:"resource/js/system/PCASClass.js",type:'js'});
  		

</script>



</head>
    <body id="<?php echo $do;?>">

<div class="<?php echo $_K['theme'];?>_style" id="wrapper">

        <div id="append_parent">
        </div>
        <div id="ajaxwaitid">
        	<div>
        	<img src="<?php echo SKIN_PATH;?>/theme/<?php echo $_K['theme'];?>/img/system/loading.gif" alt="loading"/>
<?php echo $_lang['request_processing'];?>
</div>
</div>
 
<!--无刷新临时替换层-->
        <div id="noflushwarper">
        	<div id="noflushwarper_sub"></div>
        </div>
 	
<!--body start-->


<!--顶部广告位 start-->
<div class="t_c site_messages">
<?php keke_loaddata_class::ad_show('GLOBAL_TOP_BANNER','shop_list','') ?>
</div>
<!--顶部广告位-->




    <!--头部 start-->
    <header class="header" id="pageTop">
        <div class="container_24 clearfix">
        	<!--logo start-->
            <hgroup class="grid_7 logo">
             	 <h1><a href="index.php">
             	 	<?php if(isset($custom_logo)) { ?>
<img src="<?php echo $basic_config['web_logo'];?>"
<?php } else { ?>
<img src="<?php echo SKIN_PATH;?>/theme/<?php echo $_K['theme'];?>/img/style/<?php echo $basic_config['web_logo'];?>"
<?php } ?>
 title="<?php echo $_K['html_title'];?>" alt="<?php echo $_K['html_title'];?>"></a></h1>
            </hgroup>
            <!--logo end-->
            
            <div id="search" class="grid_12 m_h">
            	
            	<?php if($task_open||$shop_open) { ?>

            	<!--主搜索 start-->
                <div class="search clearfix po_re">
                    <!--搜索框和选项 start-->
                    <form action="" method="post" id="frm_search" class="clearfix fl_l">
                    <div class="search_box">
                        <div class="fl_l search_selcecter">
                        	<div id="search_select" class="search_options">
                        	<?php if($task_open) { ?>
                           		 <a href="javascript:void(0);" class="selected" rel="task_list"><span><?php echo $_lang['task'];?></span>▼</a>
                            <?php } elseif(!$task_open&&$shop_open) { ?>
 <a href="javascript:void(0);" class="selected" rel="shop_list"><span><?php echo $_lang['goods'];?></span>▼</a>
                            <?php } ?>
<?php if($task_open) { ?>
   		 <a href="javascript:void(0);" class="hidden"   rel="task_list"><?php echo $_lang['task'];?></a>
<?php } ?>
<?php if($shop_open) { ?>
                           	 	<a href="javascript:void(0);" class="hidden"   rel="shop_list"><?php echo $_lang['goods'];?></a>
 <?php } ?>
                            </div>
                        </div>
<input type="text" name="search_key" onkeydown="search_keydown(event);" id="search_key" class="fl_l search_input txt_input togg c999"
 value="<?php echo $_lang['input'];?><?php if($task_open) { ?><?php echo $_lang['task'];?><?php } ?><?php if($task_open&&$shop_open) { ?>/<?php } ?><?php if($shop_open) { ?><?php echo $_lang['goods'];?><?php } ?>" 
   x-webkit-speech x-webkit-grammar="bUIltin:search" lang="zh-CN">
                    </div>
</form>
                    <!--搜索框和选项 end-->
                    <!--搜索提交 start-->
                    <div class="fl_l header_btn">
                    	<button class="search_btn" id="search_btn" type="button" onclick="topSearch();"><span class="icon magnifier"></span><?php echo $_lang['search'];?></button>
                    </div>
                    <!--搜索提交 end-->
                </div>
                <!--主搜索 end-->
<?php } else { ?>
&nbsp;
<?php } ?>

            </div>
            


          
            	<!--用户登录注册 start-->
            	<div class="user_box clearfix grid_5">
                	<!--注册登录按钮 start-->
                  	<ul id="login_sub" class="user_login <?php if($uid) { ?>hidden<?php } ?>">
                        <li><a href="index.php?do=register" class="m_h"><?php echo $_lang['free_register'];?></a></li>
                        <li><a href="index.php?do=login"><?php echo $_lang['login'];?></a></li>
                    </ul>
                    <!--注册登录按钮 end--> 
<div class="clear"></div>




                    <!--登录成功 start-->
                    <div id="logined" class="<?php if(!$uid) { ?>hidden<?php } ?>">
                    	<!--用户登录后内容 start-->
                        <ul class="user_logined clearfix">
                            <li id="avatar">
                            	<a href="index.php?do=user" title="<?php echo $username;?>" rel="user_menu">
                            		<?php echo  keke_user_class::get_user_pic($uid,'small') ?>
                                    <span class="user_named m_h"><?php echo $username;?></span>
                            	</a>
<!--用户登录后导航菜单 start-->
                    <div id="user_menu" class="user_nav_pop grid_5 alpha omega hidden m_h">
                        <ul class="nav_list clearfix">
                                    	<li class="clearfix"><a href="index.php?do=user&view=finance&op=detail" title="<?php echo $_lang['money'];?> | <?php echo CREDIT_NAME;?>" id="money"> <div class="icon16 cur-yen reverse"></div><?php  echo keke_curren_class::output(floatval($user_info['balance']),-1);  ?>| <?php  echo keke_curren_class::output(floatval($user_info['credit']),-1);  ?></a></li>
                                        <?php if($task_open) { ?>
<li class="clearfix"><a href="index.php?do=release" title="<?php echo $_lang['pub_task'];?>" class="selected" ><div class="icon16 doc-new reverse"></div><?php echo $_lang['pub_task'];?></a></li>
<?php } ?>
<?php if($shop_open) { ?>
<li class="clearfix"><a href="index.php?do=shop_release" title="<?php echo $_lang['pub_goods'];?>" class="selected"><div class="icon16 doc-new reverse"></div><?php echo $_lang['pub_goods'];?></a></li>
<?php } ?>
<li class="clearfix <?php if($uid ==ADMIN_UID || $user_info['group_id']>0) { ?><?php } else { ?>hidden<?php } ?>" id="manage_center"><a href="control/admin/index.php" title="<?php echo $_lang['manage_center'];?>" ><div class="icon16 key reverse"></div><?php echo $_lang['manage_center'];?></a></li>
<li class="clearfix"><a href="index.php?do=user&view=index" title="<?php echo $_lang['user_center'];?>"><div class="icon16 cog reverse"></div><?php echo $_lang['user_center'];?></a></li>
<?php if($space_config==1) { ?>
<li class="clearfix"><a href="<?php echo kekezu::build_space_url($uid); ?>" title="<?php echo $_lang['my_space'];?>" id="space"><div class="icon16 compass reverse"></div><?php echo $_lang['my_space'];?></a></li>
<?php } ?>
<!--<li class="clearfix"><a href="index.php?do=user&view=message" title="<?php echo $_lang['website_msg'];?>"><div class="icon16 mail reverse"></div><?php echo $_lang['website_msg'];?></a></li>-->
<li class="clearfix"><a onclick="showWindow('out','index.php?do=logout');return false;" title="<?php echo $_lang['logout'];?>" href="index.php?do=logout"><?php echo $_lang['logout'];?></a></li>
                         </ul>
                    </div>
                    <!--用户登录后导航菜单 end-->
</li>
                            <li class="line m_h"></li>
                            <li class="logout m_h"><a title="<?php echo $_lang['website_msg'];?>" href="index.php?do=user&view=message"><?php echo $_lang['website_msg'];?></a></li>
                            <li class="clear"></li>
                        </ul>
                        <!--用户登录后内容 end-->


                    </div>
                    <!--登录成功 end-->
                    
                    
                    <div class="clear"></div>
                </div>
                <!--用户登录注册 end-->
      
            <!--移动端菜单-->
<div class="m_ctrl">
<a class="icon32 zoom reverse" href="#" rel="search"></a>
            <a class="icon32 align-just reverse" href="#" rel="nav"></a>
</div>
            <!--移动端菜单 end-->

            

        </div>
    </header>
    <!--头部 end-->
        <!--tool_E-->
 <nav id="nav" class="nav m_h">
        <div class="container_24" >
        	<div class="menu grid_24 clearfix">
                <ul class="clearfix">
                	<?php if(is_array($nav_arr)) { foreach($nav_arr as $k => $v) { ?>
                   		<li>
                   			<a href="<?php echo $v['nav_url'];?>" <?php if(isset($nav_active_index) && $v['nav_style']==$nav_active_index) { ?>class="selected"<?php } ?> <?php if($v['newwindow']) { ?>target="_blank"<?php } ?>>
                   			<span><?php echo $v['nav_title'];?></span></a>
</li>
<li class="line"></li>
<?php } } ?>
                </ul>
                <!---->
                  <div class="operate po_ab">
                    	<a href="index.php?do=help" target="_blank" title="<?php echo $_lang['help_center'];?>">
                        	<span class="icon16 help reverse"></span>
<?php echo $_lang['help_center'];?>
                        </a>
                   </div>
                <!---->
</div>
                <div class="clear"></div>
        </div>
    </nav>
    <div class="clear"></div>
<?php } ?>
<div class="wrapper">      
        <!--页面头部-->
        <header class="clearfix page_header">
        	<div class="container_24">
        	
<?php keke_loaddata_class::ad_show('SHOPLIST_HEAD','shop_list','威客商城_头部广告') ?>
  
            <!--页面导航-->
            <div class="breadcrumbs clearfix">
                <a href="index.php"><?php echo $_lang['home'];?></a> &gt; <span><?php if($search_key) { ?><?php echo $search_key?><?php } else { ?><?php echo $_lang['shop_hall'];?><?php } ?></span>
              </div>
            <!--end 页面导航-->
          </div>
        </header> 
        <!--end 页面标题-->
        
        
        
        
        
        
        <!--主内容-->
        <section class="clearfix content">
            <div class="container_24">
            	
    	<div class="clear"></div>

  <!--大厅列表_头部二栏广告 start-->
 		 <?php keke_loaddata_class::ad_show('LIST_HEAD_TWO','shop_list','') ?>
  <!--大厅列表_头部二栏广告 end-->
<div class="clear"></div>
                <div class="box mb_10 clearfix">
                	<div class="grid_24">
                    <!--筛选条件-->
                    <div class="filter box normal po_re">
                    	<div class="inner">
                      <!--条件列表-->
                      <div class="condition_list pad10" > 
                        <!--分类-->
                        <dl class="condition clearfix">
                            <dt class="grid_2 omega">
                                <?php echo $_lang['shop_classify'];?>
                            </dt>
                            <dd class="grid_21">
                                <?php $exist = stristr($path, "A"); ?>
<a href="<?php echo $check_all['A']?>"  <?php if(!$exist) { ?>  class='selected' <?php } ?>><?php echo $_lang['all'];?> </a>
                                <?php if(is_array($check_url_arr['A'])) { foreach($check_url_arr['A'] as $k => $v) { ?>
<a href="<?php echo $v['url']?>" <?php if($v['selected']) { ?>  class="selected" <?php } ?>><?php echo $v['indus_name']?></a>
                                <?php } } ?> 
                            </dd>
                        </dl>
                         <!--end 分类-->
                       
                      	  <!--条件1-->
                          <dl class="condition clearfix">
                            <dt class="grid_2 omega"><?php echo $_lang['goods_kinds'];?></dt>
                            <dd class="grid_21">
                            	<?php $exist = stristr($path, "C"); ?>
                                <a href="<?php echo $check_all['C']?>" <?php if(!$exist) { ?> class="selected" <?php } ?>><?php echo $_lang['all'];?></a> 
<?php if(is_array($check_url_arr['C'])) { foreach($check_url_arr['C'] as $k => $v) { ?>
    
    <a href="<?php echo $v['url']?>"  <?php if($v['selected']) { ?> class="selected" <?php } ?>><?php echo $v['name']?></a> 
                                <?php } } ?>
                                </dd>
                           </dl>
   
                           <div id="condition_list" style="display:none;">
                           <!--条件2-->
                           <dl class="condition clearfix">
                            <dt class="grid_2 omega"><?php echo $_lang['goods_money'];?></dt>
                            <dd class="grid_21">
                                        <span id="general_search" <?php if($_COOKIE['kekeshop_list_search_cash']) { ?>  style="display:none;" <?php } ?>>
                                        	<?php $exist = stristr($path, "B"); ?>
<a href="<?php echo $check_all['B']?>" <?php if(!$exist) { ?>  class="selected" <?php } ?>><?php echo $_lang['all'];?></a>
<?php if(is_array($check_url_arr['B'])) { foreach($check_url_arr['B'] as $k => $v) { ?>
 
<a href="<?php echo $v['url']?>" <?php if($v['selected']) { ?>  class="selected" <?php } ?> ><?php echo $v['name']?> </a>
<?php } } ?>

<a class="button" style="" onclick="custom_search_cash('shop_list_search_cash')">
                                        		<span class="icon cog"></span><?php echo $_lang['user_defined'];?></a>
</span>
                                        <div id="cool_search" <?php if(!$_COOKIE['kekeshop_list_search_cash']) { ?>  style="display:none;" <?php } ?>>
                                            <div class="grid_12">
                                            	<div class="pr_30">
                                                <div id="slider-range" class="mr_5">
                                                	
                                                </div>
<div class="clear"></div>
<ul class="range-num">
<li >0</li>
                                                	<li>1000</li>
<li>2000</li>
<li >3000</li>
<li class="lasts">4000</li>
<li class="lasts">5000</li>
</ul>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="pt_10">
                                                <label for="amount1">
                                                  	  <?php echo $_lang['price'];?>:
                                                </label>

                                                <input type="text" id="amount1" class="txt_input" size="5"/> -
<input type="text" id="amount2" class="txt_input" size="5"/> <?php echo $_lang['yuan'];?>
<a class="button" style="" onclick="search_task_cash()"><span class="magnifier icon"></span><?php echo $_lang['search'];?></a>
                                            		
</div>
</div>
<div class="grid_8"><a class="button" style="" onclick="task_cash_reset('shop_list_search_cash')"><span class="icon reload"></span><?php echo $_lang['return'];?></a></div>

                                        </div>
                                    </dd>
                           </dl>
  <form id="cash_frm" name="cash_frm" action="index.php?do=shop_list" method="get">  
<input type="hidden" name="do" value="shop_list">
<input type="hidden" name="path" value="<?php if($path) { ?><?php echo $path?><?php } ?>">
<input type="hidden" name="min" id="min">
<input type="hidden" name="max" id="max">
<input type="hidden" name="page_size" id="page_size" value="<?php echo $page_size?>">
  </form>
  
 <form id="cash_frm_fh" name="cash_frm_fh"  action="index.php?do=shop_list" method="post"> 
<input type="hidden" name="do" value="shop_list">
<input type="hidden" name="path" value="<?php if($path) { ?><?php echo $path?><?php } else { ?>;<?php } ?>"> 
<input type="hidden" name="page_size" id="page_size" value="<?php echo $page_size?>">

 </form>
                           <!--end 条件2-->
                       
                           <!--条件4-->
                           <dl class="condition clearfix">
                            <dt class="grid_2 omega"><?php echo $_lang['pub_time'];?></dt>
                            <dd class="grid_21">
                            	<?php $exist = stristr($path, "D"); ?>
                                <a href="<?php echo $check_all['D']?>" <?php if(!$exist) { ?> class="selected" <?php } ?>><?php echo $_lang['all'];?></a> 
<?php if(is_array($check_url_arr['D'])) { foreach($check_url_arr['D'] as $k => $v) { ?>
  
    <a href="<?php echo $v['url']?>"  <?php if($v['selected']) { ?> class="selected" <?php } ?> ><?php echo $v['name']?></a> 
                                <?php } } ?>
                                </dd>
                           </dl>
                           <!--end 条件4-->
   <!--条件5-->
                                    <dl class="condition clearfix border_n">
                                        <dt class="grid_2 omega">
                                         地区搜索
                                        </dt>
                                        <dd class="grid_21">
                                        	<a href="index.php?do=shop_list&path=<?php echo $path?>&max=<?php echo $max?>&min=<?php echo $min?>" <?php if(!$province&&!$city&&!$area) { ?>  class="selected" <?php } ?>><?php echo $_lang['all'];?> </a>
                                           <select name="province" id="province"></select><select name="city" id="city"></select><select name="area" id="area"></select>
   <a class="button" style="" onclick="search_address()"><span class="magnifier icon"></span><?php echo $_lang['search'];?>　</a>
                                        </dd>
                                    </dl>
                                    <!--end 条件5-->
</div>
<!--工具栏-->
                            <div class="operate po_ab">
                                <a href="javascript:show_hide()" id="tool_show" title="<?php echo $_lang['unfold'];?>"><span class="icon16 sq-plus"></span></a>
                                <a href="javascript:show_hide()" id="tool_hide" style="display:none" title="<?php echo $_lang['fold'];?>"><span class="icon16 sq-minus"></span></a>
                            </div>
                            <!--end 工具栏-->
                       </div>
                       <!--end 条件列表-->
                       
                       
                       <!--已选条件-->
                       <div class="select_condition clearfix pad10 m_h">
                       
                           <div class="grid_2 omega">
                           		<h3 class="title"><?php echo $_lang['selected_terms'];?></h3>
                           </div>
                        
                        	<div class="grid_21">
                            		<!--当无选择条件时显示span标记-->
                                    
<?php if(is_array($select_arr)) { foreach($select_arr as $k => $v) { ?>
                                    <a href="<?php echo $v['url']?>" class="selected" ><span><?php echo $v['name']?> <span class="close">&times;</span></a> 
<?php } } ?>
<?php if($province&&$city&&$area) { ?><a href="index.php?do=task_list&path=<?php echo $path;?>&min=<?php echo $min;?>&max=<?php echo $max;?>" class="selected"><?php echo $province;?>,<?php echo $city;?>,<?php echo $area;?> <span class="close">&times;</span></a><?php } ?>
<?php if($max) { ?><a href="index.php?do=shop_list&path=<?php echo $path;?>&province=<?php echo $province;?>&city=<?php echo $city;?>&area=<?php echo $area;?>" class="selected"><?php echo $min;?>-<?php echo $max;?>元 <span class="close">&times;</span></a><?php } ?>
<?php if($select_arr||$max||$province) { ?>

<a href="index.php?do=shop_list" class="button"><span class="icon reload"></span><?php echo $_lang['reset'];?>　</a>
<a href="javascript:save_cookie()" class="button"><span class="icon check"></span><?php echo $_lang['save_search_terms'];?></a>

<div class="success" style="color:#2f55a0;display:none" id="success">
                                        <?php echo $_lang['save_suc'];?>
                                    </div>
<?php } else { ?>
<span><?php echo $_lang['no_selected_terms'];?></span> 
<?php } ?>
                            </div>
                       </div>
   	

                       <!--end 已选条件-->
   </div>
                    </div>
                     <!--end 筛选条件-->
                    </div>
                </div>
            
            
                <section class="clearfix section"> 
                    <div class="second_menu container_24 po_ab m_h">
                        <div class="suffix_23 pull_1">
                            <nav class="minor_nav box">
                                <ul class="nav_group clearfix">                                	
                                    <li>
                                    	<a href="index.php?do=help&fpid=291" title="<?php echo $_lang['help_center'];?>"><span class="icon16 help"></span></a>
</li>
<li>
<a href="index.php?do=shop_map" title="<?php echo $_lang['shop_map'];?>"><span class="icon16  globe-2"></span></a> 
</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    
                    <div class="show_panel container_24 po_re">
                        <div class="po_re clearfix box">
                                  
                                <!--左边内容-->
                                <div class="grid_20">
                                    <div class="box normal clearfix">
                                        <!--左内容头-->
                                    	<div class="border_b_c clearfix hidden">
                                    	<div class="grid_5 omega">
                                            <div class="sum clearfix">
                                                <p><?php echo $_lang['total_find'];?><span class="cc00"> <?php echo $count?> </span><?php echo $_lang['tiao_result'];?></p>
                                             </div>
                                        </div>
                                         <div class="grid_15 alpha omega m_h"> 
                                              <!--列表项数量-->
                                              <div class="page_count fl_r">
                                                  <a href="index.php?do=shop_list&path=<?php echo $path?>&min=<?php echo $min?>&max=<?php echo $max?>&page_size=20" <?php if($page_size==20||!$page_size) { ?> class="selected" <?php } ?>>20</a>
                                                  <a href="index.php?do=shop_list&path=<?php echo $path?>&min=<?php echo $min?>&max=<?php echo $max?>&page_size=40" <?php if($page_size==40) { ?> class="selected" <?php } ?>>40</a>
                                                  <a href="index.php?do=shop_list&path=<?php echo $path?>&min=<?php echo $min?>&max=<?php echo $max?>&page_size=60" <?php if($page_size==60) { ?> class="selected" <?php } ?>>60</a>
                                                  <a href="index.php?do=shop_list&path=<?php echo $path?>&min=<?php echo $min?>&max=<?php echo $max?>&page_size=80" <?php if($page_size==80) { ?> class="selected" <?php } ?>>80</a>
                                              </div>
                                              <!--end 列表项数量-->
  <!--小翻页-->
                                              <div class="min_page  fl_l pl_10">
                                                <p class="clearfix">
                                                         <?php echo $pages['page']?>
                                                  </p>
                                                  <div class="clear"></div>
                                              </div>
                                              <!--end 小翻页-->
                                          </div>
  </div>
                                          <!--end 左内容头-->
                                        
                                        <!--列表主内容-->
                                        <div class="list">
                                            <dl>
                                              <dt><?php echo $_lang['reward_goods'];?></dt>
                                              <dd class="tags clearfix">
                                                <ul> 
                                                    <li class="w5 info"><?php echo $_lang['goods_info'];?></li>
                                                    <li class="w3 describe"><?php echo $_lang['author_description'];?></li> 
                                                    <li class="w2 price">
<a href="index.php?do=shop_list&path=<?php echo $path?>&min=<?php echo $min?>&max=<?php echo $max?>&page_size=<?php echo $page_size?>&ord=2" <?php if(!$ord||$ord==2) { ?> style="display:none" <?php } ?>  title="<?php echo $_lang['low_price_former'];?>"><?php echo $_lang['has_sell_or_price'];?> ▲</a> 
<a href="index.php?do=shop_list&path=<?php echo $path?>&min=<?php echo $min?>&max=<?php echo $max?>&page_size=<?php echo $page_size?>&ord=1" <?php if($ord==1) { ?> style="display:none" <?php } ?>  title="<?php echo $_lang['high_price_former'];?>"><?php echo $_lang['has_sell_or_price'];?> ▼</a>

</li> 
                                                </ul>
                                              </dd>
                            
 
 <?php if(is_array($service_arr)) { foreach($service_arr as $k => $v) { ?>
                                           <dd class="po_re clearfix 
   <?php if($v['pay_item'] == '2' ) { ?>
   		app_top
   <?php } elseif($v['pay_item'] == '3') { ?>
   		app_urgent
   <?php } elseif($v['pay_item'] == '1') { ?>
   		app_hide
   <?php } elseif($v['is_top'] == '1') { ?>
app_recmd
   <?php } elseif($v['task_union'] == '1') { ?>
app_union
   <?php } elseif($v['is_delay'] == '1') { ?>
app_delay
   <?php } ?>
   "
   >
                                                <ul class="clearfix pt_10">
                                                    <li class="w5 info">
                                                        <div class="img_box">
                                                        	<a href="index.php?do=service&sid=<?php echo $v['service_id']?>"><img src="<?php echo keke_shop_class::output_pics($v['pic'],100,1); ?>" onerror='$(this).attr("src","tpl/default/img/shop/shop_default.gif")' title="<?php echo $v['title']?>"></a>
                                                        </div>
                                                        
                                                    	<div class="img_des">
                                                    	
                                                        	<a href="index.php?do=service&sid=<?php echo $v['service_id']?>" class="font14b list_small_title" title="<?php echo $v['title']?>"><?php echo $v['title']?></a>
                                                            <p class="models">
                                                              <?php echo $_lang['goods_type'];?><?php echo $_lang['zh_mh'];?>
                                                                <?php if($v['model_id']==6) { ?>
                                                                  <strong class="c393"><?php echo $_lang['works'];?></strong>
                                                                <?php } elseif($v['model_id']==7) { ?>
                                                                  <strong class="c939"><?php echo $_lang['service'];?></strong>
                                                                <?php } ?>
                                                              
                                                            </p>
                                                            <p class="block">
                                                            <?php echo $_lang['goods_class'];?><?php echo $_lang['zh_mh'];?>	
<?php if($v['indus_id']) { ?><?php echo $indus_all_arr[$v['indus_pid']]['indus_name']?> / <?php echo $indus_all_arr[$v['indus_id']]['indus_name']?><?php } ?>
</p> 
<?php $time=time(); ?>
                                                        	<?php if($v['top_time']>$time&&$item_config['2']['small_pic']) { ?>
<img src="<?php echo $_K['siteurl'];?>/<?php echo $item_config['2']['small_pic'];?>" alt="<?php echo $_lang['top'];?>" title="<?php echo $_lang['top'];?>">

<?php } ?>
<?php if($v['urgent_time']>$time&&$item_config['3']['small_pic']) { ?><img src="<?php echo $_K['siteurl'];?>/<?php echo $item_config['3']['small_pic'];?>" alt="<?php echo $_lang['hurry_up'];?>" title="<?php echo $_lang['hurry_up'];?>"><?php } ?>
                                                     	   <?php if(stristr($v['pay_item'],'4')&&$item_config['4']['small_pic']) { ?><img src="<?php echo $_K['siteurl'];?>/<?php echo $item_config['4']['small_pic'];?>" alt="<?php echo $_lang['map'];?>" title="<?php echo $_lang['map'];?>"><?php } ?>
   <?php if($v['is_top'] == '1') { ?><img src="<?php echo $_K['siteurl'];?>/resource/img/ico/tj.png" alt="<?php echo $_lang['recommend'];?>" title="<?php echo $_lang['recommend'];?>"><?php } ?>
                                                        </div>
                                                    </li>
                                                    <li class="w3 describe ws_break">
                                                    	<a href="index.php?do=space&member_id=<?php echo $v['uid']?>"><?php echo $v['username']?></a>
                                                        <p>&nbsp;<?php echo kekezu::cutstr(strip_tags(htmlspecialchars_decode($v['content'])), 100); ?></p>
                                                    </li>
                                                    <li class="w2 price">
                                                    	<p class="cc00 font14b">&nbsp; <?php  echo keke_curren_class::output(floatval($v['price']),-1);  ?> </p>
                                                        <?php if($v['sale_num']>0) { ?><span><?php echo $_lang['selled'];?> <?php echo $v['sale_num']?> <?php echo $_lang['records'];?></span><?php } ?>
                                                    </li>
                                                    
                                                </ul>
                                                <div class="clear"></div>
<!--
                                                <div class="operate clearfix ">
                                                    <a href="javascript:favor('service_id','service','<?php echo $model_list[$v['model_id']]['model_code'];?>','<?php echo $v['uid'];?>','<?php echo $v['service_id'];?>','<?php echo $v['title'];?>','<?php echo $v['service_id'];?>')" original-title="<?php echo $_lang['favorit'];?>" ><span class="icon16 star-fav-empty"><?php echo $_lang['favorit'];?></span> </a>
                                                    <a href="index.php?do=service&sid=<?php echo $v['service_id']?>" target="_blank" original-title="<?php echo $_lang['new_window_open'];?>"><span class="icon16 expand"><?php echo $_lang['new_window_open'];?></span></a>
                                                   <a class="" href="index.php?do=ajax&view=share&oid=<?php echo $k?>&title=<?php echo $v['title'];?>" id="share<?php echo $k?>" onclick="return false;" onmouseover="share(this);return false;" title="<?php echo $_lang['share'];?>"><span class="icon16 share"><?php echo $_lang['share'];?></span></a></a>
                                                </div>-->
                                              </dd>
  <?php } } ?> 
                                            </dl>    
                                        </div>
                                        <!--end 列表主内容-->
<!--右下角的返回顶部--
                                        <div class="operate mt_10 fl_r">
                                                    <a href="index.php" class="" title="<?php echo $_lang['return_home'];?>"><span class="icon16 home"></span><span class="return_word"><?php echo $_lang['return_home'];?></span></a>
                                                    <a href="#" class="" title="<?php echo $_lang['return_top'];?>"><span class="icon16 arrow-top"></span><span class="return_word"><?php echo $_lang['return_top'];?></span></a>
                                        </div>
                                        <!--end右下角的返回顶部-->      
                                    </div>
                                     
                                    <!--page 翻页 start-->
                                    <div class="page">
                                        <p class="clearfix">
                                            <span class="stats"><?php echo $_lang['total'];?> <?php echo $count?> <?php echo $_lang['tiao'];?> </span>
                                           <?php echo $pages['page']?>
                                        </p>
                                        <div class="clear"></div>
                                    </div>
                                    <!--page 翻页 end-->
                                    <div class="clear"></div>
                                         
                                </div>
                                <!--end 左边部分-->
                                
                                <!--右边部分-->
                                <div class="grid_4 m_h">
                                        
<div class="mb_10">
   	<a href="<?php echo $_K['siteurl'];?>/index.php?do=shop_release" class="submit block">发布商品</a>
   </div>
<div class="box normal2">
                                        <!--任务动态-->
                                        <div class="inner">
                                        	<div class="box_header">
                                                <h3 class="title"><?php echo $_lang['shop_dt'];?></h3>
</div>
                                                <div class=" pl_10 pr_10 pb_10">
                                                
                                                   <ul id="history_collect ">
                                                	<?php if(is_array($dynamic_arr)) { foreach($dynamic_arr as $k => $v) { ?>
                                                    <li class="border_b_c ws_break">
                                                    	<p><a href="<?php echo $v['feed_username']['url']?>"><?php echo $v['feed_username']['content']?></a> <?php echo $v['action']['content']?></p>  
<p><a href="<?php echo $v['event']['url']?>"><?php echo $v['event']['content']?></a></p>
<p><?php echo kekezu::feed_time ($v['feed_time'] ); ?></p>
</li>
                                                   <?php } } ?>
                                                </ul>
</div>
                                        </div>
                                    	</div>
                                        
<div class="clear"></div>
<!--威客商城_右侧广告-->
<div style="margin:0 -5px;">
<?php keke_loaddata_class::ad_show('SHOPLIST_CENTAL_RIGHT','shop_list','') ?>
</div>
<div class="clear"></div>
                                        
                                    </div>
                                
                                <!--end 右边部分-->         
                            
                        </div>
                    </div>
                                    
                </section>    
<div class="clear"></div>
 
 		 <?php keke_loaddata_class::ad_show('SHOPLIST_BOTTOM','shop_list','威客商城_底部广告') ?>

<div class="clear"></div>                
            </div>  
        </section> 
</div>  
        <!--end 主内容--> 

<script type="text/javascript">
/** 检查用户是否登陆 */
var uid = parseInt('<?php echo $uid;?>')+0; 

function check_user_login() {
if (isNaN(uid) || uid == 0) {
showDialog("<?php echo $_lang['if_now_login'];?>", 'confirm', "<?php echo $_lang['login_notice'];?>", 'user_login()', 0);
return false;
} else {
return true;
}
}


/** 用户登陆 */

function user_login() {
showWindow('user_login', 'index.php?do=login', 'get');
return false;
} 
//页面加载，判断搜索条件是现实还是隐藏
        $(function(){
            var show_cookie = getcookie('show_cookie');
            
            if (show_cookie == 1) {
                $("#condition_list").show();
                $("#tool_hide").show();
                $("#tool_show").hide();
            }
        });
        
        //搜索条件现实 /隐藏
        function show_hide(){
            $("#condition_list").toggle(0, function(){
                if ($("#tool_show").is(":hidden")) {
                    setcookie('show_cookie', '');
                    $("#tool_show").show();
                    $("#tool_hide").hide();
                }
                else {
                    setcookie('show_cookie', 1,3600);
                    $("#tool_hide").show();
                    $("#tool_show").hide();
                }
            });
        }	


 
//收藏
function taskFavor(type,obj_id) {
if (check_user_login()) {
var url="index.php?do=task&task_id="+obj_id+"&op=taskfavor";
$.getJSON(url,{keep_type:type,obj_id:obj_id},function(json){
showDialog(json.data,'notice',json.msg);return false;
})
}
}
//分享
var share=function(obj,title){
CHARSET.toLowerCase()=='utf-8'?obj.href = encodeURI(obj.href):'';
ajaxmenu(obj,250,'1','2','43');
return false;
}
//进度条
    function task_bar(){
        var min = Number(<?php echo $min?>);
        var max = Number(<?php echo $max?>);
        
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 5000,
            values: [min, max],
            slide: function(event, ui){
                $("#amount1").val(ui.values['0']);
$("#amount2").val(ui.values['1']);
            }
        });
        //$("#amount").val('$' + $("#slider-range").slider("values", 0) + ' - $' + $("#slider-range").slider("values", 1));
$("#amount1").val($("#slider-range").slider("values", 0));
$("#amount2").val($("#slider-range").slider("values", 1));
    }
    
    
    //赏金搜索 
    function search_task_cash(){
        var url = window.location.href;
        var min = $("#amount1").val();
        var max =  $("#amount2").val();

        $("#min").val(min);
        $("#max").val(max); 
        $("#cash_frm").submit();
    }
       //地区搜索
   function search_address(){
     	var province = $("#province").val();
        var city = $("#city").val();
var area = $("#area").val();
if(province&&city&&area){
window.location.href = "index.php?do=task_list&path=<?php echo $path?>&max=<?php echo $max?>&min=<?php echo $min?>&province="+province+"&city="+city+"&area="+area;
}
   }
  
            
 
</script>		
<script type="text/javascript"> 
 In('form','pcas',function(){
  			  new PCAS("province","city","area","<?php echo $province;?>","<?php echo $city;?>","<?php echo $area;?>");
});
    In.config('serial',true);
In.add('ui_core',{path:"resource/js/others/ui.core.js",type:'js'});
In.add('ui_slider',{path:"resource/js/others/ui.slider.js",type:'js',rely:['ui_core']});
In.add('search',{path:"<?php echo $style_path;?>/js/search.js",type:'js'});
In('search','ui_slider','lazy',function(){task_bar();loadPics();});
 
</script>
<?php if(!isset($inajax)) { ?>

<!--页脚 satrt-->
<footer class="footer clearfix">
<!--网站链接以及语言栏 关注我们 搜索 start-->






            <!--网站版权声明 start-->
            <section class="site_copyright clearfix">
            	<div class="container_24 clearfix ">
            		
            		
                    	 	<dl>
<dt>
                    	 		<?php echo $_lang['company'];?><?php echo $basic_config['company'];?><span class="pad10"><?php echo $_lang['address'];?><?php echo $basic_config['address'];?></span><?php echo $_lang['contact_phone'];?><?php echo $basic_config['phone'];?>
</dt>
<dd>
                    	 	<?php echo P_NAME;?><?php echo KEKE_VERSION;?> <?php echo $basic_config['copyright'];?><a href="http://icp.valu.cn/" target="_blank"><?php echo $basic_config['filing'];?></a>
<?php if(KEKE_DEBUG) { ?>
<span>
Querys: <?php echo db_factory::create()->get_query_num() ?>
 &nbsp;
Times:<?php echo kekezu::execute_time() ?>
</span>			
<?php } ?>
</dd>  
                    	 	</dl>
 <div class="clear"></div>


<!--语言栏 关注我们 搜索 start-->

                    <div class="site_attach clearfix">
<?php if($attent_api_open) { ?>

                        	<div class="social">
                            	<?php echo $_lang['about_us_'];?>
                            	
                                <?php if(is_array($attent_api_open)) { foreach($attent_api_open as $k => $v) { ?>
<?php if($attent_list[$k]['v']) { ?>

<?php $i = explode("_", $k);$i = $i['0'];$j=($attent_list[$k]); ?> 
<a href="index.php?do=wb&focus=<?php echo $j?>&wb_type=<?php echo $i?>"><img src="resource/img/ico/<?php echo $i;?>_t.gif" title="<?php echo $attent_list[$k]?>"></a> 

<?php } ?>
<?php } } ?>

                            </div>
     
<?php } ?>

                        <div class="lan_box">
                            <form action="" method="post" id="lan_bottom">
                                <div class="clearfix">
                                     <label><?php echo $_lang['language'];?></label>
                                     <select id="lan" name="lan" style="width:100px" onchange="setLang(this)">
  <?php if(is_array($lang_list)) { foreach($lang_list as $k => $v) { ?>
    <option value="<?php echo $k;?>" c="<?php echo $curr_list[$k]['0'];?>" <?php if($k==$language) { ?>selected<?php } ?>><?php echo $v;?></option>
  <?php } } ?>
                                     </select>
                                
                           
                               
                                     <label> <?php echo $_lang['currency'];?><?php echo $_lang['zh_mh'];?></label>
                                     <select  style="width:100px" onchange="setCurr(this.value,1);">
  <?php if(is_array($f_c_list)) { foreach($f_c_list as $k => $v) { ?>
    <option value="<?php echo $k;?>" id="<?php echo $k;?>" <?php if($currency==$k) { ?>selected<?php } ?>><?php echo $v['title'];?></option>
  <?php } } ?>
                                     </select>
                                 </div>
                            </form>
</div>	
                        

</div>

                  
                    <!--语言栏 关注我们 搜索 end-->


                </div>
   				<div class="clearfix"><?php echo htmlspecialchars_decode($basic_config['stats_code']) ?></div>
            </section>
            <!--网站版权声明 end-->
            
            <!--返回顶部 start-->

        	<a class="top animated hidden" href="javascript:void(0);" title="<?php echo $_lang['return_top'];?>"><em>&diams;</em>Top</a>
              
            <!--返回顶部 end-->
    </footer>
    <!--页脚 end-->
</div>
<?php if($uid) { ?>
<?php kekezu::update_oltime($uid,$username) ?>
<?php } ?>
<script type="text/javascript">
var uid='<?php echo $uid;?>';
var xyq = "<?php echo $xyq = session_id(); ?>";
<?php if($exec_time_traver) { ?>
$(function(){
   $.get('js.php?op=time&r='+Math.random());	
})
<?php } ?>
 //js异步加载
In('header_top','custom','lavalamp','tipsy','autoIMG','slides');




</script>

<!--[if IE 6]></div><![endif]-->
<!--[if IE 7]></div><![endif]-->
<!--[if IE 8]></div><![endif]-->
</body>
</html>
<?php } ?><?php keke_tpl_class::ob_out();?>