<?php
//从bing获取数据
$str = file_get_contents('https://cn.bing.com/HPImageArchive.aspx?idx=0&n=1');

if (preg_match("/\<url\>(.+?)<\/url>/ies", $str, $matches)) {
    //正则匹配抓取图片url
    $imgurl = 'https://cn.bing.com' . $matches[1];
} else {
    //使用默认的图像
    $imgurl = 'assets/css/img/bg.jpg';
}
header("Location: $imgurl");
?>
