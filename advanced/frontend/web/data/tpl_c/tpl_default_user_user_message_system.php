<?php keke_tpl_class::checkrefresh('tpl/default/user/user_message_system', '1418790524' );?><?php if($_K['inajax']) { ?>
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
            <!--用户中心样式-->
<div class="second_menu container_24 po_ab clearfix">
    <div class="suffix_21">
        <nav class="minor_nav box clearfix">
           <!--子导航开始-->
<?php if(is_array($sub_nav)) { foreach($sub_nav as $val) { ?>
       <ul class="nav_group clearfix">
<?php if(is_array($val)) { foreach($val as $k => $v) { ?>
<?php if($k!='auth'||($k=='auth'&&$auth_item_list)) { ?>
             <li>
                 <a href="index.php?do=user&view=<?php echo $view;?>&op=<?php echo $k;?>" title="<?php echo $_lang['enter'];?><?php echo $v['0'];?>" <?php if($k==$op) { ?>class="selected"<?php } ?>>
                   <div class="icon16 <?php echo $v['1'];?>">icon</div><strong><?php echo $v['0'];?></strong>
     </a>
             </li>
 <?php } ?>
<?php } } ?>
       </ul>
<?php } } ?>
<!--子导航结束-->
        </nav>
    </div>
</div>
            <div class="show_panel container_24 po_re">
                <div class="prefix_3 grid_21">
                    <div class="panel clearfix box">
                        <!--main content-->
                        <div class="">
                            <!--header内容头部 start-->
                            <header class="clearfix box_header">
                                <h2 class="grid_4 alpha omega box_title t_c"><?php if($op=='inbox') { ?><?php echo $_lang['inbox'];?><?php } else { ?><?php echo $_lang['outbox'];?><?php } ?></h2>
                                <div class="grid_17 alpha omega">
                                    <nav class="box_nav">
                                        <ul>
                                            <li <?php if($msg_type =='system') { ?>  class="selectedLava" <?php } ?>>
                                                <a href="index.php?do=<?php echo $do?>&view=<?php echo $view?>&op=inbox&msg_type=system" original-title="<?php echo $_lang['system_msg'];?>"><?php echo $_lang['system_msg'];?>(<?php echo $count_system;?>)</a>
                                            </li>
 <li <?php if($msg_type=='accept') { ?>  class="selectedLava" <?php } ?>>
                                                <a href="index.php?do=<?php echo $do?>&view=<?php echo $view?>&op=inbox&msg_type=accept" original-title="<?php echo $_lang['private_message'];?>"><?php echo $_lang['private_message'];?>(<?php echo $count_accept;?>)</a>
                                            </li>
 <li <?php if($msg_type=='output') { ?>  class="selectedLava" <?php } ?>>
                                                <a href="index.php?do=<?php echo $do?>&view=<?php echo $view?>&op=output&msg_type=output" original-title="<?php echo $_lang['private_message'];?>"><?php echo $_lang['sms_has_been_sent'];?>(<?php echo $count_output;?>)</a>
                                            </li>
 <li <?php if($msg_type=='write') { ?>  class="selectedLava" <?php } ?>>
                                                <a href="index.php?do=<?php echo $do?>&view=<?php echo $view?>&op=send&msg_type=write" original-title="<?php echo $_lang['private_message'];?>"><?php echo $_lang['write_message'];?></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="clear">
                                </div>
                            </header>
                            <!--header内容头部 end-->
                            <div class="data_list mar10" style="margin-bottom:0;">
                                <form method="post" id="frm_msg" action="index.php?do=<?php echo $do;?>&view=<?php echo $view;?>&msg_type=<?php echo $msg_type;?>">
                                	<input type="hidden" name="op" value="<?php echo $op;?>" id="op">
                                	<input type="hidden" name="page" value="<?php echo $page;?>" id="page">	
                                    <table class="data_table">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                  <?php if($msg_type!='output') { ?><?php echo $_lang['status'];?><?php } ?>
                                                </th>
                                                <th scope="col" colspan="3" width="250">
                                                    <?php echo $_lang['title'];?>
                                                </th>
                                                <th scope="col">
                                                    <?php if($msg_type=='output') { ?><?php echo $_lang['send'];?><?php } else { ?><?php echo $_lang['from_user'];?><?php } ?>
                                                </th>
                                                <th scope="col">
                                                    <?php echo $_lang['time'];?>
                                                </th>
                                                <th scope="col" colspan="1" width="120">
                                                    <?php echo $_lang['operate'];?>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php if($data) { ?>
                                            <?php if(is_array($data)) { foreach($data as $k => $v) { ?>

                                            <tr class="odd">
                                                <td>
                                                    <input type="checkbox" value="<?php echo $v['msg_id']?>,<?php echo $v['msg_status']?>" id="cbk_selected" name="ckb[]">
<?php if($msg_type!='output') { ?>
                                                   		 <?php if($uid==$v['to_uid']&&!$v['view_status']) { ?><?php echo $_lang['unread'];?><?php } else { ?><?php echo $_lang['already_read'];?><?php } ?>
    <?php } ?>
                                                </td>
                                                <td colspan="3">
                                                	<?php if($v['uid']){$type='inbox';}else{$type="system";} ?>
                                                    <a <?php if($v['view_status']!=1&&$msg_type!='output') { ?>style="font-weight: bold"<?php } ?> title="<?php echo $v['title']?>"
 href="index.php?do=<?php echo $do?>&view=<?php echo $view?>&op=views&ac=view&msg_id=<?php echo $v['msg_id']?>&msg_type=<?php echo $msg_type?>">
<?php echo $v['title']?> </a>
                                                </td>
                                                <td>
                                                	<?php if($msg_type!='output') { ?>
                                                		<?php if(!$v['username']) { ?><?php echo $_lang['system_msg'];?><?php } else { ?><?php echo $v['username'];?><?php } ?>
<?php } else { ?>
<?php echo $v['to_username']?>
<?php } ?>
                                                </td>
                                                <td>
                                                    <?php if($v['on_time']){echo date('Y-m-d',$v['on_time']); } ?>
                                                </td>
                                                <td colspan="1">
                                                    <a class="button" href="index.php?do=<?php echo $do?>&view=<?php echo $view?>&op=views&ac=view&msg_id=<?php echo $v['msg_id']?>&msg_type=<?php echo $msg_type?>"><span class="book icon"></span><?php echo $_lang['view'];?></a>
<a class="button" href="index.php?do=<?php echo $do?>&view=<?php echo $view?>&op=del&msg_id=<?php echo $v['msg_id']?>&msg_status=<?php echo $v['msg_status']?>&page=<?php echo $page?>&msg_type=<?php echo $msg_type?>"
 onclick="return del(this);"><span class="trash icon"></span><?php echo $_lang['delete'];?></a>
                                                </td>
                                            </tr>
                                            <?php } } ?>

                                        </tbody>
                                    <tfoot>
                                      <tr>
                                         <td colspan="7">
                                       	<div class="clearfix pad10">   
<a href="javascript:;" value="0" id="checkbox" onclick="checkall(this.id)"><?php echo $_lang['select_all'];?></a>
                                      	 	<button onclick="return mulit_del();" value="<?php echo $_lang['delete_selected'];?>" type="button" name="sbt_action"><span class="icon trash"></span><?php echo $_lang['delete_selected'];?></button>
<?php if($msg_type!='output') { ?>
<button onclick="return mulit_views();" value="<?php echo $_lang['biao_already'];?>" type="button"  name="sbt_action"><span class="icon hand-1"></span><?php echo $_lang['biao_already'];?></button>
<?php } ?>
</div>
                                        </td>
                                  </tr> 
                               </tfoot>
   	<?php } else { ?>
<tr>	
<td colspan="8" class="t_c">
<?php echo $_lang['norecord'];?>
</td> 
</tr>
<?php } ?>
                           </table>
                         </form>
                       </div>
                     <div class="page"><?php echo $pages['page'];?><div class="clear"></div></div>
                   </div>
                 <!--main content end -->
              <div class="clear"></div>
           </div>
         </div>
       </section>
      <!--main end-->
    </div>
  </div>
  <!--contain end-->
  <script type="text/javascript">
  	In('form');
  function del(obj){
var url = obj.href;
showDialog("<?php echo $_lang['confirm_delete'];?>",'confirm',"<?php echo $_lang['operate_notice'];?>","formSub('"+url+"','url',false);");return false;		
}

function mulit_del(){
$("#op").val("mulit_del");
var conf = $(":checkbox[name='ckb[]']:checked").length;
if(conf>0){
formSub('frm_msg','form',false);
}else{
showDialog('您没有选择任何操作项','alert','提示');
}
return false;
}
function mulit_views(){
$("#op").val("mulit_views");
var conf = $(":checkbox[name='ckb[]']:checked").length;
if(conf>0){
formSub('frm_msg','form',false);
}else{
showDialog('您没有选择任何操作项','alert','提示');
}
return false;
}


   </script>
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
<?php } ?><?php keke_tpl_class::ob_out();?>