<?php keke_tpl_class::checkrefresh('tpl/default/user/user_index', '1418790526' );?><?php if($_K['inajax']) { ?>
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
<?php keke_loaddata_class::ad_show('GLOBAL_TOP_BANNER','user','') ?>
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
<!--contain start-->
<div class="wrapper">
  <div class="container_24">
    <link href="<?php echo SKIN_PATH;?>/css/user_center.css" rel="stylesheet" type="text/css">
<header class="page_title clearfix  Anchor">
    <div class="grid_17">
        <h2 class="title pt_5"><?php echo $_lang['user_center'];?></h2>
    </div>
    <div class="grid_7 hidden">
        <div class="user_info">
            <div class="fl_l mr_10">
                <p>
                    <?php echo  keke_user_class::get_user_pic($uid,small) ?>
                </p>
            </div>
            <ul class="intor">
                <li>
                    <?php echo $_lang['welcome'];?><?php echo $username;?>
                </li>
                <li>
                    <strong class="cf60"><?php echo $_lang['currency'];?><?php echo $user_info['balance'];?></strong>
                  <?php echo $_lang['cash'];?> | <strong><a href="index.php?do=user&view=message"><?php echo $messagecount;?> <?php echo $_lang['tiao_news'];?></a></strong>
                </li>
            </ul>
        </div>
    </div>
</header>
<div class="grid_24">
<nav class="primary_nav box clearfix">

    <a name="userCenter"></a>
    <ul>
        <?php if(is_array($nav)) { foreach($nav as $k => $v) { ?>
        <li>
            <a href="index.php?do=user&view=<?php echo $k;?>" <?php if($view==$k) { ?>class="selected"<?php } ?>><span class="icon32 <?php echo $v['1'];?>"><?php echo $v['0'];?></span><em><?php echo $v['0'];?></em><?php if($k=='message' && $messagecount) { ?><strong class="badge"><?php echo $messagecount;?></strong><?php } ?></a>
        </li>
        <?php } } ?>
    </ul>
    
    
</nav>

</div>
<div class="clear"></div>
     <!--main start-->
     <section class="clearfix section">		   
<div class="grid_6 mb_10">
<div class="box default">
<div class="inner">
<div class="user_info_con clearfix pt_10 pb_5 pl_10">
<a href="index.php?do=space&member_id=<?php echo $uid;?>" class="fl_l mt_5" title="<?php echo $user_info['username'];?>" ><?php echo  keke_user_class::get_user_pic($uid,big) ?></a>	
<div class="grid_4 clearfix pl_5 omega">
<ul class="font14">
<li><a href="index.php?do=space&member_id=<?php echo $uid;?>" class="font14b"><?php echo $username;?></a></li>
<?php $user_leve=unserialize($user_info['seller_level']) ?>
<li><?php echo $_lang['user_level'];?><?php echo $_lang['zh_mh'];?><?php echo $user_leve['pic'];?></li>
<li><?php echo $_lang['ability_value'];?><?php echo $_lang['zh_mh'];?><?php echo $user_info['seller_credit'];?></li>
<li><?php echo $_lang['credit_value'];?><?php echo $_lang['zh_mh'];?><?php echo $user_info['buyer_credit'];?></li>
<li>
<div class="font14 auth">
<?php echo $_lang['auth_info'];?><?php echo $_lang['zh_mh'];?>
<?php if(is_array($auth_item)) { foreach($auth_item as $k => $v) { ?>
<?php if($v['auth_open']==1) { ?>
<?php if($k!=$un_code) { ?>
<?php if($auth_info[$k]['auth_status']==1) { ?>

<img class="mar0" src="<?php echo $v['auth_small_ico'];?>" width="16px" height="16px" alt="" title="<?php echo $v['auth_title'];?>">
<?php } else { ?>
<a href="index.php?do=user&view=payitem&op=auth&auth_code=<?php echo $v['auth_code'];?>#userCenter"><img class="mar0" src="<?php echo $v['auth_small_n_ico'];?>" width="16px" height="16px" alt="" title="<?php echo $v['auth_title'];?>"></a>
<?php } ?>	
<?php } ?>					
<?php } ?>			
<?php } } ?>
</div>
</li>
</ul>
</div>
<div class="clear"></div>
<div class="c333"><?php echo $_lang['last_login_time'];?><?php echo $_lang['zh_mh'];?><?php echo date('Y-m-d H:i:s',$user_info['last_login_time']) ?></div>
</div>
</div>
</div>		



  <!--账户余额-->
<div class="box default mt_10">
<div class="inner">
<header class="box_header clearfix">
<h2 class="title"><?php echo $_lang['account_balance'];?></h2>
</header>
<div class="box_detail">
<div class="font14">
<?php echo $_lang['cash'];?><?php echo $_lang['zh_mh'];?>
<a class="font12"><?php  echo keke_curren_class::output(floatval($user_info['balance']),-1);  ?></a>
</div>
<div class="font14">
<?php echo CREDIT_NAME;?><?php echo $_lang['zh_mh'];?>
<a class="font12"><?php echo $user_info['credit'];?></a>
</div>
<div class=" mt_10 mb_20 t_c">
<a href="index.php?do=user&view=finance&op=recharge" class="button btn_width mr_5" title="<?php echo $_lang['recharge'];?>"><?php echo $_lang['recharge'];?></a>
<a href="index.php?do=user&view=finance&op=withdraw" class="button btn_width" title="<?php echo $_lang['withdraw'];?>"><?php echo $_lang['withdraw'];?></a>
</div>
</div>	
</div>
</div>
<!--end 账户余额-->

<!--账户安全信息-->
<div class="box default mt_10">
<div class="inner">
<header class="box_header clearfix">
<h2 class="title"><?php echo $_lang['account_safe_info'];?></h2>
</header>
<div class="box_detail clearfix">

<!--安全设置-->

<div class="t_c pb_20">
<a class="button btn_width mr_5 mt_5" href="index.php?do=user&view=setting&op=safe" class="mr_10"><?php echo $_lang['update_password'];?></a>
<a class="button btn_width mt_5" href="index.php?do=user&view=setting&op=safe&opp=sec_code" class="mr_10"><?php echo $_lang['update_safe_code'];?></a>	

<div class="mt_5">											
<a class="button btn_width mr_5 mt_5" href="index.php?do=user&view=setting&op=basic"><?php echo $_lang['improving_the_personal_data'];?></a>										
<a class="button btn_width mt_5" href="index.php?do=user&view=payitem&op=auth"><?php echo $_lang['auth_center'];?></a>
</div>
</div>


</div>	
</div>
</div>
<!--end 账户安全信息-->

<!--快捷导航-->
<div class="box default mt_10 hidden">
<div class="inner">
<header class="box_header clearfix">
<h2 class="title"><?php echo $_lang['quick_nav'];?></h2>
</header>
<div class="mb_20 t_c">
<?php if($task_open) { ?>
<a href="index.php?do=release" class="button btn_width mr_5" title="<?php echo $_lang['pub_task'];?>"><?php echo $_lang['pub_task'];?></a>
<a href="index.php?do=task_list" class="button btn_width" title="<?php echo $_lang['join_task'];?>"><?php echo $_lang['join_task'];?></a>
<?php } ?>
<?php if($shop_open) { ?>
<a href="index.php?do=shop_release" class="button btn_width mr_5 mt_10" title="<?php echo $_lang['sell_goods'];?>"><?php echo $_lang['sell_goods'];?></a>
<a href="index.php?do=shop_list" class="button btn_width mt_10" title="<?php echo $_lang['buy_goods'];?>"><?php echo $_lang['buy_goods'];?></a>
<?php } ?>
<a href="index.php?do=user&view=setting&op=space" class="button btn_width mr_5 mt_10" title="<?php echo $_lang['shop_set'];?>"><?php echo $_lang['shop_set'];?></a>
<a href="index.php?do=space&member_id=<?php echo $user_info['uid'];?>" class="button btn_width mt_10" title="<?php echo $_lang['enter_space'];?>"><?php echo $_lang['enter_space'];?></a>
</div>
</div>	
</div>
<!--end 快捷导航-->

<!--公告栏 -->
<div class="box default mt_10 hidden">
<div class="inner">
        	<div class="pb_20">
         <!--公告头部-->
         <header class="box_header clearfix">
          	<nav class="box_nav clearfix">
               <ul>
                  <li id="ul_plac_1" onclick="swaptab('plac','backLava','',3,1)"><a href="javascript:void(0);" title="<?php echo $_lang['announcement'];?>">网站资讯</a></li>
                  <li id="ul_plac_2" onclick="swaptab('plac','backLava','',3,2,{ajax:1,url:'index.php?do=user&view=index&ajax=bid_notice'})"><a href="javascript:void(0);" title="中标通知">中标通知</a></li>
                  <li id="ul_plac_3" onclick="swaptab('plac','backLava','',3,3,{ajax:1,url:'index.php?do=user&view=index&ajax=withdraw'})"><a href="javascript:void(0);" title="提现公告">提现公告</a></li>
                 <!-- <li id="ul_plac_4" onclick="swaptab('plac','backLava','',4,4,{ajax:1,url:'index.php?do=user&view=index&ajax=safe'})"><a href="javascript:void(0);" title="<?php echo $_lang['safe'];?>"><?php echo $_lang['safe'];?></a></li>-->
               </ul>
            </nav>
            <div class="clear"></div>
         </header>
        <!--end 公告头部 -->
                            
        <!--公告detail内容-->
         <article class="box_detail" id="div_plac_1">
           <ul class="smaller_list">
              <?php if(is_array($art_notice_arr)) { foreach($art_notice_arr as $v) { ?>
<li><a href="index.php?do=article&view=article_info&art_id=<?php echo $v['art_id'];?>"><?php echo $v['art_title'];?></a></li>
 <?php } } ?>
           </ul>
         </article>
        <article class="box_detail" id="div_plac_2" style="display:none;">
        </article>
        <article class="box_detail" id="div_plac_3" style="display:none;">
        </article>
       
        <!--end 公告detail内容-->
</div>
</div>
</div>
<!--end 公告栏 -->

<!--新手指南-->
<div class="box default mt_10 hidden">
<div class="inner">
<header class="box_header clearfix">
<h2 class="title"><?php echo $_lang['novice_guide'];?></h2>
</header>
<div class="box_detail clearfix">
<ul class="smaller_list pb_10">
<?php if(is_array($new_help)) { foreach($new_help as $value) { ?>
<li><a href="index.php?do=help&fpid=294&spid=<?php echo $value['art_cat_id'];?>#pageTop"><span><?php echo $value['art_title'];?></span></a></li>
<?php } } ?>
</ul>
<a href="index.php?do=help" class="button mb_10 block t_c" title="<?php echo $_lang['enter_help_center'];?>"><?php echo $_lang['enter_help_center'];?></a>
</div>	
</div>
</div>
<!--end 新手指南-->

</div>

<div class="grid_18 mb_10 omega">
<!--用户信息-->
<div class="box default hidden">
<div class="inner">
<div class="user_info_con clearfix pt_10 pb_5 pl_10 pr_10">
    				<a href="index.php?do=space&member_id=<?php echo $uid;?>" class="fl_l" title="<?php echo $user_info['username'];?>" ><?php echo  keke_user_class::get_user_pic($uid,big) ?></a>							
<div class="grid_7 pl_10">
<ul class="font14">
<li><a href="index.php?do=space&member_id=<?php echo $uid;?>" class="font14b"><?php echo $username;?></a></li>
<?php $user_leve=unserialize($user_info['seller_level']) ?>
<li><?php echo $_lang['user_level'];?><?php echo $_lang['zh_mh'];?><?php echo $user_leve['pic'];?></li>
<li><?php echo $_lang['ability_value'];?><?php echo $_lang['zh_mh'];?><?php echo $user_info['seller_credit'];?></li>
<li><?php echo $_lang['credit_value'];?><?php echo $_lang['zh_mh'];?><?php echo $user_info['buyer_credit'];?></li>
<li><?php echo $_lang['last_login_time'];?><?php echo $_lang['zh_mh'];?><?php echo date('Y-m-d H:i:s',$user_info['last_login_time']) ?></li>
</ul>
</div>
<div class="fl_l mt_10">
<div class="font14 auth">
<?php echo $_lang['auth_info'];?><?php echo $_lang['zh_mh'];?>
<?php if(is_array($auth_item)) { foreach($auth_item as $k => $v) { ?>
<?php if($k!=$un_code) { ?>
<?php if($auth_info[$k]['auth_status']==1) { ?>
<img src="<?php echo $v['auth_small_ico'];?>" alt="" title="<?php echo $v['auth_title'];?>">
<?php } else { ?>
<a href="index.php?do=user&view=payitem&op=auth&auth_code=<?php echo $v['auth_code'];?>#userCenter"><img src="<?php echo $v['auth_small_n_ico'];?>" alt="" title="<?php echo $v['auth_title'];?>"></a>
<?php } ?>	
<?php } ?>								
<?php } } ?>

</div>
<ul class="trading mt_20">
<?php if($task_open) { ?>
 <li>
<?php echo $_lang['task_trans_remind'];?><?php echo $_lang['zh_mh'];?>
<span><a href="index.php?do=user&view=employer&op=task"><?php echo $_lang['wait_pay'];?>(<?php echo $wait_task;?>)</a></span>|
<span><a href="index.php?do=user&view=employer&op=task"><?php echo $_lang['wait_choose'];?>(<?php echo $xg_task;?>)</a></span>
 </li>
<?php } ?>
<?php if($shop_open) { ?>
<li>
<?php echo $_lang['goods_trans_remind'];?><?php echo $_lang['zh_mh'];?>
<span><a href="index.php?do=user&view=finance&op=order&obj_type=service"><?php echo $_lang['wait_pay'];?>(<?php echo $wait_shop;?>)</a></span>|
<span><a href="index.php?do=user&view=finance&op=order&obj_type=service"><?php echo $_lang['wait_confirm_pay'];?>(<?php echo $confirm_service;?>)</a></span>
</li>
<?php } ?>
</ul>
</div>
</div>
</div>
    </div>
<!--end 用户信息-->

<!--工具箱-->
<?php if($task_open||$shop_open) { ?>
<div class="box default model_bord mt_10 hidden">
<div class="inner">
<header class="box_header clearfix">
<h2 class="title"><?php echo $_lang['toolbox'];?></h2>
</header>
<div class="box_detail po_re">
<div class="pt_10 pb_5">
<div class="toolbox clearfix">
<ul>
<?php if(is_array($payitem_list)) { foreach($payitem_list as $v) { ?>
<?php if(item_show($v['item_type'])) { ?>
<li>
<a href="index.php?do=user&view=payitem&op=toolbox&show=buy&item_code=<?php echo $v['item_code'];?>#userCenter">
<img src="<?php echo $v['big_pic'];?>" alt="<?php echo $v['item_name'];?>" title="<?php echo $v['item_name'];?>" width="48" height="48">
<div><?php echo $v['item_name'];?></div>
</a>	
</li>		
<?php } ?>							
<?php } } ?>	
</ul>
</div>
</div>
</div>
</div>
</div>
<?php } ?>
   		<!--end 工具箱 -->

<!--雇主交易面板-->
<?php if($task_open||$shop_open) { ?>
<div class="box default model_bord ">
<div class="inner">
<header class="box_header clearfix">
<h2 class="title grid_3"><?php echo $_lang['employer_trans_panel'];?></h2>
<nav class="box_nav clearfix grid_7">
<ul>
<?php if($task_open) { ?>
<li><a href="javascript:void(0);" onclick="swaptab('pub','backLava','',2,1);show_none('more1','more2');"><?php echo $_lang['task_manage'];?>[<?php echo intval(sizeof($pub_task)); ?>]</a></li>
<?php } ?>
<?php if($shop_open) { ?>
<?php $s_count = intval(sizeof($pub_service)) ?>
<li><a href="javascript:void(0);" onclick="swaptab('pub','backLava','',2,2);show_none('more2','more1');"><?php echo $_lang['goods_trans'];?>[<?php echo intval(sizeof($buy_service)); ?>]</a></li>
<?php } ?>
</ul>
</nav>	
    					<a id='more1'  class="pt_5 fl_r" href="<?php echo $_K['siteurl'];?>/index.php?do=user&view=employer"><?php echo $_lang['more_employer_trans'];?><span class="font_simsun">>></span></a>


    					<a id='more2' style="display:none;" class="pt_5 fl_r" href="<?php echo $_K['siteurl'];?>/index.php?do=user&view=employer&op=shop"><?php echo $_lang['more_employer_trans'];?><span class="font_simsun">>></span></a>

</header>
<?php if($task_open) { ?>
<div class="box_detail pad0" id="div_pub_1">
<div class="list">
                <dl>
                  <dt><?php echo $_lang['employer_trans'];?></dt>
                  <dd class="tags">
                    <ul>
                        <li><?php echo $_lang['task_id'];?></li>
<li><?php echo $_lang['task_type'];?></li>
                        <li class="w2 t_l"><?php echo $_lang['task_title'];?></li>
                        <li class="w2"><?php echo $_lang['task_money'];?></li>
                        <li><?php echo $_lang['pub_time'];?></li>
                        <li class="w2">交易<?php echo $_lang['status'];?></li>
<li><?php echo $_lang['operate'];?></li>
                    </ul>
                  </dd>
  <?php if($pub_task) { ?>
  <?php if(is_array($pub_task)) { foreach($pub_task as $v) { ?> 
                  <dd class="clearfix">
                    <ul>
                        <li><?php echo $v['task_id'];?></li>
<li><?php echo $model_list[$v['model_id']]['model_name'];?></li>	
                        <li class="w2  t_l">
                        	<a href="index.php?do=task&task_id=<?php echo $v['task_id'];?>" title="<?php echo $v['task_title'];?>" class="fl_l">
                        		<?php $time = time(); ?>
                        		<?php if($v['top']>$time) { ?> <img src="<?php echo $_K['siteurl'];?>/<?php echo $payitem_list['2']['small_pic'];?>" alt="<?php echo $_lang['top'];?>" title="<?php echo $_lang['top'];?>"><?php } ?>  
                                        <?php if($v['urgent']>$time) { ?><img src="<?php echo $_K['siteurl'];?>/<?php echo $payitem_list['3']['small_pic'];?>" alt="<?php echo $_lang['hurry_up'];?>" title="<?php echo $_lang['hurry_up'];?>"><?php } ?>				                        		
<?php echo $v['task_title'];?>
</a>
</li>
                        <li class="w2"><?php if($v['task_cash_coverage']) { ?><?php  echo keke_curren_class::output(floatval($task_cove[$v['task_cash_coverage']]['start_cove']),-1);  ?>-<?php  echo keke_curren_class::output(floatval($task_cove[$v['task_cash_coverage']]['end_cove']),-1);  ?><?php } else { ?><?php  echo keke_curren_class::output(floatval($v['task_cash']),-1);  ?><?php } ?></li>
                        <li><?php echo date('Y-m-d',$v['start_time']) ?></li>
                        <li class="w2">
                        	<?php $task_status = call_user_func(array($model_list[$v['model_id']]['model_code'].'_task_class','get_task_status')); ?>
                        	 <?php echo $task_status[$v['task_status']]?>
</li>
<li>
<?php $opera = master_opera($v['model_id'],$v['task_id'],$origin_url,$v['task_cash']); ?>
  <?php if(is_array($opera)) { foreach($opera as $v1) { ?>
  	<a href="<?php echo $v1['href'];?>" <?php if($v1['click']) { ?>onclick="<?php echo $v1['click'];?>"<?php } ?>>
  		<?php echo $v1['desc'];?>
  	</a>
  <?php } } ?>
</li>
                    </ul>
                  </dd>
  <?php } } ?>
  <?php } else { ?> 
   <dd class="clearfix">
   	 <ul>				                    	
                        <li class="t_c w0">	<?php echo $_lang['norecord'];?></li>
</ul>
   	  </dd>
  <?php } ?>
                </dl>
            </div>
</div>
<?php } ?>
<?php if($shop_open) { ?>
<div class="box_detail pad0" id="div_pub_2" <?php if($task_open) { ?>style="display:none;"<?php } ?>>
<div class="list">
                <dl>
                  <dt><?php echo $_lang['employer_trans'];?></dt>
                  <dd class="tags">
                    <ul>
                        <li><?php echo $_lang['goods_id'];?></li>
<li><?php echo $_lang['service_type'];?></li>
                        <li class="w2 t_l"><?php echo $_lang['goods_name'];?></li>
                        <li class="w2"><?php echo $_lang['service_price'];?></li>
                        <li><?php echo $_lang['pub_time'];?></li>
                        <li class="w2">交易<?php echo $_lang['status'];?></li>
<li><?php echo $_lang['operate'];?></li>
                    </ul>
                  </dd>
  <?php if($buy_service) { ?>
  <?php if(is_array($buy_service)) { foreach($buy_service as $k => $v) { ?>
  <?php if($k<6&&$v['service_id']) { ?>
  <dd class="clearfix">				                  	
                    <ul>				                    	
                        <li><?php echo $v['service_id'];?></li>
<li><?php echo $model_list[$v['model_id']]['model_name'];?></li>	
                        <li class="w2  t_l">
                        	<a href="index.php?do=service&sid=<?php echo $v['service_id'];?>" title="<?php echo $v['task_title'];?>" class="fl_l">
                        		<?php $time = time(); ?>
                        		<?php if($v['top']>$time) { ?> <img src="<?php echo $_K['siteurl'];?>/<?php echo $item_config['2']['small_pic'];?>" alt="<?php echo $_lang['top'];?>" title="<?php echo $_lang['top'];?>"><?php } ?>  
                                        <?php if($v['urgent']>$time) { ?><img src="<?php echo $_K['siteurl'];?>/<?php echo $item_config['3']['small_pic'];?>" alt="<?php echo $_lang['hurry_up'];?>" title="<?php echo $_lang['hurry_up'];?>"><?php } ?>				                        		
<?php echo $v['title'];?>
</a>
</li>
                        <li class="w2"><?php  echo keke_curren_class::output(floatval($v['price']),-1);  ?>/<?php echo $v['unite_price'];?></li>
                        
  <li><?php echo date('Y-m-d',$v['on_time']) ?></li>
                        <li class="w2">
<?php $class_name =	$model_list[$v['model_id']]['model_code']."_shop_class"; ?>
<?php $arr = call_user_func(array($class_name,'get_order_status')) ?>
<?php echo $arr[$v['order_status']]; ?>
</li>
<li>
<?php $process_arr = call_user_func(array($class_name,'process_action'),2,$v['order_status']); ?>
   							<?php $mark_info = get_mark_info($v['order_id'],$v['obj_id'],$v['order_uid'],$v['seller_uid']); ?>
<?php if($v['order_status']=='confirm') { ?>
    					<?php if($mark_info['mark_status']!=1&&$mark_info['mark_count']<2) { ?>						
<a href="javascript:void(0);" onclick="orderMark('<?php echo $mark_info['mark_count'];?>','<?php echo $v['model_id'];?>','<?php echo $v['order_id'];?>','<?php echo $v['obj_id'];?>','<?php echo $v['order_uid'];?>',2);"><?php echo $_lang['each_mark']?></a>							
<?php } ?>
<?php } ?>
                    						<?php if($process_arr['trans']) { ?>
                    							<?php if(is_array($process_arr['trans'])) { foreach($process_arr['trans'] as $k2 => $v2) { ?>
<a href="javascript:void(0);"  onclick="process('<?php echo $k2;?>','<?php echo $v2;?>','<?php echo $v['order_id'];?>','<?php echo $v['model_id'];?>','<?php echo $v['obj_id'];?>','<?php echo $model_list[$v['model_id']]['model_code'];?>','<?php echo $v['seller_uid'];?>')"><?php echo $v2;?></a><br>
<?php } } ?>							
<?php } ?>
</li>
                    </ul>
                  </dd>
  <?php } ?>
  <?php } } ?>
   <?php } else { ?>
  	<dd class="clearfix">
   	 <ul>				                    	
                        <li class="t_c w0">	<?php echo $_lang['norecord'];?></li>
</ul>
   	  </dd>
  
  <?php } ?>							  
                </dl>
            </div>
</div>
<?php } ?>
</div>
</div>
<?php } ?>
   		<!--end 雇主交易面板-->

<!--威客交易面板-->
<?php if($task_open||$shop_open) { ?>
<div class="box default model_bord mt_10 ">
<div class="inner">
<header class="box_header clearfix">
<h2 class="title grid_3"><?php echo $_lang['witkey_trans_panel'];?></h2>
<nav class="box_nav clearfix grid_7">
<ul>
<?php if($task_open) { ?>
<li><a href="javascript:void(0);" onclick="swaptab('join','backLava','',2,1);show_none('more3','more4');"><?php echo $_lang['task_manage'];?>[<?php echo intval(sizeof($join_task)) ?>]</a></li>
<?php } ?>
<?php if($shop_open) { ?>
<li><a href="javascript:void(0);" onclick="swaptab('join','backLava','',2,2);show_none('more4','more3');"><?php echo $_lang['goods_trans'];?>[<?php echo intval(sizeof($pub_service)) ?>]</a></li>
<?php } ?>
</ul>
</nav>

<a id="more3" class="pt_5 fl_r" href="index.php?do=user&view=witkey"><?php echo $_lang['more_witkey_trans'];?><span class="font_simsun">>></span></a>
<a id="more4" style="display:none" class="pt_5 fl_r" href="index.php?do=user&view=witkey&op=shop"><?php echo $_lang['more_witkey_trans'];?><span class="font_simsun">>></span></a>

</header>
<?php if($task_open) { ?>
<div class="box_detail pad0" id="div_join_1">
<div class="list">
                <dl>
                  <dt><?php echo $_lang['employer_trans'];?></dt>
                  <dd class="tags">
                    <ul>
                        <li><?php echo $_lang['task_id'];?></li>
<li><?php echo $_lang['order_type'];?></li>
                        <li class="w2 t_l"><?php echo $_lang['task_title'];?></li>
                        <li class="w2"><?php echo $_lang['task_money'];?></li>
                        <li><?php echo $_lang['pub_time'];?></li>
                        <li class="w2">交易<?php echo $_lang['status'];?></li>
<li><?php echo $_lang['operate'];?></li>
                    </ul>
                  </dd>
  <?php if($join_task) { ?>
                  <?php if(is_array($join_task)) { foreach($join_task as $v) { ?>
                  <dd class="clearfix">
                    <ul>				                    	
                        <li><?php echo $v['task_id'];?></li>
<li><?php echo $model_list[$v['model_id']]['model_name'];?></li>	
                        <li class="w2 t_l">
                        	<a href="index.php?do=task&task_id=<?php echo $v['task_id'];?>" title="<?php echo $v['task_title'];?>" class="fl_l">
                        		<?php $time = time(); ?>
                        		<?php if($v['top']>$time) { ?> <img src="<?php echo $_K['siteurl'];?>/<?php echo $payitem_list['2']['small_pic'];?>" alt="<?php echo $_lang['top'];?>" title="<?php echo $_lang['top'];?>"><?php } ?>  
                                        <?php if($v['urgent']>$time) { ?><img src="<?php echo $_K['siteurl'];?>/<?php echo $payitem_list['3']['small_pic'];?>" alt="<?php echo $_lang['hurry_up'];?>" title="<?php echo $_lang['hurry_up'];?>"><?php } ?>				                        		
<?php echo(kekezu::cutstr($v['task_title'],28)); ?>
</a>
</li>
                        <li class="w2"><?php if($v['task_cash_coverage']) { ?><?php  echo keke_curren_class::output(floatval($task_cove[$v['task_cash_coverage']]['start_cove']),-1);  ?>-<?php  echo keke_curren_class::output(floatval($task_cove[$v['task_cash_coverage']]['end_cove']),-1);  ?><?php } else { ?><?php  echo keke_curren_class::output(floatval($v['task_cash']),-1);  ?><?php } ?></li>
                        <li><?php echo date('Y-m-d',$v['start_time']) ?></li>
                        <li class="w2">
                        	<?php $task_status = call_user_func(array($model_list[$v['model_id']]['model_code'].'_task_class','get_task_status')); ?>
                        	<?php echo $task_status[$v['task_status']]?>
</li>
<li>
<?php $opera = wiki_opera($v['model_id'],$v['task_id'],$v['work_id'],$url); ?>

  <?php if(is_array($opera)) { foreach($opera as $k => $v) { ?>
  	<a href="<?php echo $v['href'];?>" <?php if($v['click']) { ?>onclick="<?php echo $v['click'];?>"<?php } ?>>
  		<?php echo $v['desc'];?>
  	</a>
  <?php } } ?>
</li>	  
                    </ul>
                  </dd>
  <?php } } ?>
  <?php } else { ?>
  	<dd class="clearfix">
   	 <ul>				                    	
                        <li class="t_c w0">	<?php echo $_lang['norecord'];?></li>
</ul>
   	  </dd>
  
  <?php } ?>
                </dl>
            </div>
</div>
<?php } ?>
<?php if($shop_open) { ?>
<div class="box_detail pad0" id="div_join_2" <?php if($task_open) { ?>style="display:none;"<?php } ?>>
<div class="list">
                <dl>
                  <dt><?php echo $_lang['employer_trans'];?></dt>
                  <dd class="tags">
                    <ul>
                        <li><?php echo $_lang['goods_id'];?></li>
<li><?php echo $_lang['order_type'];?></li>
                        <li class="w2 t_l"><?php echo $_lang['goods_name'];?></li>
                        <li class="w2"><?php echo $_lang['service_price'];?></li>
                        <li><?php echo $_lang['pub_time'];?></li>
                        <li class="w2">交易<?php echo $_lang['status'];?></li>
<li><?php echo $_lang['operate'];?></li>
                    </ul>
                  </dd>
  
  <?php if($pub_service) { ?>
  <?php if(is_array($pub_service)) { foreach($pub_service as $k => $v) { ?>
  <?php if($k<6&&$v['service_id']) { ?>
  <dd class="clearfix">				                  	
                    <ul>				                    	
                        <li><?php echo $v['service_id'];?></li>
<li><?php echo $model_list[$v['model_id']]['model_name'];?></li>	
                        <li class="w2  t_l">
                        	<a href="index.php?do=service&sid=<?php echo $v['service_id'];?>" title="<?php echo $v['task_title'];?>" class="fl_l">
                        		<?php $time = time(); ?>
                        		<?php if($v['top']>$time) { ?> <img src="<?php echo $_K['siteurl'];?>/<?php echo $payitem_list['2']['small_pic'];?>" alt="<?php echo $_lang['top'];?>" title="<?php echo $_lang['top'];?>"><?php } ?>  
                                                <?php if($v['urgent']>$time) { ?><img src="<?php echo $_K['siteurl'];?>/<?php echo $payitem_list['3']['small_pic'];?>" alt="<?php echo $_lang['hurry_up'];?>" title="<?php echo $_lang['hurry_up'];?>"><?php } ?>				                        		
<?php echo $v['title'];?>
</a>
</li>
                        <li class="w2" ><?php  echo keke_curren_class::output(floatval($v['price']),-1);  ?>/<?php echo $v['unite_price'];?></li>
                        <li ><?php echo date('Y-m-d',$v['on_time']) ?></li>
<li class="w2">
<?php $class_name =	$model_list[$v['model_id']]['model_code']."_shop_class"; ?>
<?php $arr = call_user_func(array($class_name,'get_order_status')) ?>
<?php echo $arr[$v['order_status']]; ?>
</li>
                        <li>
<?php $process_arr = call_user_func(array($class_name,'process_action'),1,$v['order_status']); ?>
   							<?php $mark_info = get_mark_info($v['order_id'],$v['obj_id'],$v['order_uid'],$v['seller_uid']); ?>
<?php if($v['order_status']=='confirm') { ?>
    					<?php if($mark_info['mark_status']!=1&&$mark_info['mark_count']<2) { ?>						
<a href="javascript:void(0);" onclick="orderMark('<?php echo $mark_info['mark_count'];?>','<?php echo $v['model_id'];?>','<?php echo $v['order_id'];?>','<?php echo $v['obj_id'];?>','<?php echo $v['seller_uid'];?>',1);"><?php echo $_lang['each_mark']?></a>							
<?php } ?>
<?php } ?>
            						<?php if($process_arr['trans']) { ?>
            							<?php if(is_array($process_arr['trans'])) { foreach($process_arr['trans'] as $k2 => $v2) { ?>
<a href="javascript:void(0);"  onclick="process('<?php echo $k2;?>','<?php echo $v2;?>','<?php echo $v['order_id'];?>','<?php echo $v['model_id'];?>','<?php echo $v['obj_id'];?>','<?php echo $model_list[$v['model_id']]['model_code'];?>','<?php echo $v['order_uid'];?>')"><?php echo $v2;?></a><br>
<?php } } ?>							
<?php } ?>
</li>
                    </ul>
                  </dd>
  <?php } ?>
  <?php } } ?>
  <?php } else { ?>
    <dd class="clearfix">
   	 <ul>				                    	
                        <li class="t_c w0">	<?php echo $_lang['norecord'];?></li>
</ul>
   	  </dd>
  
  
  	<?php } ?>							  
                </dl>
            </div>
</div>
<?php } ?>

</div>
</div>
<?php } ?>
   		<!--end 威客交易面板-->

   </div>
</section>
        <!--main end-->
    </div>
</div>
<script type="text/javascript">
In.add('Carousel',{path:"resource/js/others/Infinite Carousel.js",type:'js'});  
In('Carousel');

    function show_none(id1,id2)
    {
    	document.getElementById(id1).style.display='block';
    	document.getElementById(id2).style.display='none';    	
    }
//延期加价
function taskDelay(url){
console.log(url);
var url = url+'&op=taskdelay';
showWindow('taskdelay',url,'get',0);return false;

}
//赏金托管
function task_pay(url){
showWindow('hosted_amount',url,'get',0);return false;
}
//确认工作
function work_over(url){
showWindow("work_hand",url,"get",'0');
return false; 
}
function del(obj){
        var url = obj.href;
        showDialog("<?php echo $_lang['confirm_delete_ma']?>", "confirm", "<?php echo $_lang['operate_notice'];?>", function(){

           //location.href = url;
   formSub(url,'url',false);
        });
        return false;
    }
function pay(obj,pay_cash,order_id){

var url = obj.href;
var user_balance = parseInt(<?php echo $user_info['balance']?>)+0;
var user_credit = parseInt(<?php echo $user_info['credit']?>)+0;
var is_allow_credit = <?php echo $basic_config['credit_is_allow']?>;
//alert(user_balance);
if(is_allow_credit==2){
user_credit=0;
}		
if((user_credit+user_balance)>=pay_cash){
 formSub(url,'url',false);
 return false;
}else{	
    location.href= "index.php?do=pay&order_id="+order_id;
return false;	
}         		          
       return false;
    }
    
    //弹框描述
    function task_payitem(task_id, payitem, payitem_time){
        var task_id = task_id;
        var payitem = payitem;
        var payitem_time = payitem_time;
        var url = "index.php?do=user&view=employer&op=task&ajax=get_task_desc&task_id=" + task_id + '&payitem=' + payitem + '&payitem_time=' + payitem_time;
        $.post(url, function(json){
            if (json.status == 1) {
                showDialog(json.data, "confirm", "<?php echo $_lang['task_top'];?>", "set_payitem('" + task_id + "','" + payitem + "','" + payitem_time + "');", 1)
            }
        }, 'json')
    }
    
    //增值服务 
    function set_payitem(task_id, payitem, payitem_time){
        var task_id = task_id;
        var payitem = payitem;
        var payitem_time = payitem_time;
        var url = "index.php?do=user&view=employer&op=task&ajax=set_task_payitem&task_id=" + task_id + '&payitem=' + payitem + '&payitem_time=' + payitem_time;
        $.post(url, function(json){
            if (json.status == 1) {
                showDialog(json.msg, 'right', "<?php echo $_lang['friendly_notice'];?>");
                return false;
            }
        }, 'json');
        
    }
//确认工作
function work_over(url){
showWindow("work_hand",url,"get",'0');
return false; 
}
    function del(obj){
        var url = obj.href;
        showDialog("<?php echo $_lang['confirm_delete_ma']?>", "confirm", "<?php echo $_lang['operate_notice'];?>", function(){
           formSub(url,'url',false);
        });
        return false;
    }
function share(t_id){
var url = "<?php echo $_K['siteurl'];?>/index.php?do=ajax&view=share&op=center&task_id="+t_id;
showWindow('share',url,'get','0');return false;
}
function process(action,desc,order_id,model_id,obj_id,model_code,to_uid){

if(check_user_login()){
 
if(action){
switch(action){
case "download":
download(obj_id,model_id);
break;
case "arbitral":
orderRreport(order_id);//订单发起维权
break;
default:	
showDialog(desc+"<?php echo $_lang['ma'];?>?","confirm","<?php echo $_lang['operate_notice'];?>","confirm('"+action+"','"+order_id+"','"+model_id+"','"+model_code+"')");return false;
break;
}
  }
}
}
/**
 * 操作提交
 * @param <?php echo Object;?> ac
 * @param <?php echo Object;?> order_id
 * @param <?php echo Object;?> model_id
 */
function confirm(ac,order_id,model_id){
var url="index.php?do=user&view=finance&op=order";
$.post(url,{ac:ac,order_id:order_id,model_id:model_id},function(json){
if(json.status=='1'){
if(ac=='delete'){
$(".order_"+order_id).slideUp(600).remove();
}
var jump_url = url+"&obj_type=<?php echo $obj_type;?>&role=<?php echo $role;?>&order_id="+order_id+"#userCenter";					
showDialog(json.data,'notice',json.msg,"winRload()");return false;
}else{
showDialog(json.data,'alert',json.msg);return false;
}
},'json')
}
/**
 * 操作提交
 * @param <?php echo Object;?> ac
 * @param <?php echo Object;?> order_id
 * @param <?php echo Object;?> model_id
 */
function confirm(ac,order_id,model_id){
  //alert(ac+order_id+','+model_id);return false;
var url="index.php?do=user&view=finance&op=order";
$.post(url,{ac:ac,order_id:order_id,model_id:model_id},function(json){
if(json.status=='1'){
if(ac=='delete'){
$(".order_"+order_id).slideUp(600).remove();
}
var jump_url = url+"&obj_type=<?php echo $obj_type;?>&role=<?php echo $role;?>&order_id="+order_id+"#userCenter";					
showDialog(json.data,'notice',json.msg,"winRload()");return false;
}else{
showDialog(json.data,'alert',json.msg);return false;
}
},'json')
}
/**
 * 下载
 * @param <?php echo Object;?> obj_id
 */
function download(obj_id,model_id){
var basic_url="<?php echo $basic_url;?>&download=1&model_id="+model_id+"&sid="+obj_id;
showWindow('filedown',basic_url,'get',0);return false;
}
function winRload(){
  document.location.reload();
}
</script>
<!--contain end-->
<!--jQuery调用--> 
<script type="text/javascript">
$(function(){
var Is = location.href.search('&op=');
if(Is>-1){
$("html,body").animate({scrollTop:$(".Anchor").offset().top});
}
})
function check(obj){
return checkForm(document.getElementById(obj));
}
In.add('jscolor',{path:"resource/js/others/jscolor.js",type:'js'}); 
In('calendar'); 

$(function(){
$(".togg_u").focus(function(){
        	 this.value = '';
        }).blur(function(){
                this.value == '' ? this.value = $(this).attr(this.title ? 'title' : 'original-title') : '';
        })
}) 	
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
<?php } ?>
<?php keke_tpl_class::ob_out();?>