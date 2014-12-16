<?php
function get_extensionName($url){
    return array_pop(explode(".", strtolower($url)));//返回小写的文件扩展名
}
echo get_extensionName("http://eladies.sina.com.cn/qg/2013/0811/06461231319.shtml");
?>