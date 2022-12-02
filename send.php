<?php



//获取名字
$title = $_GET['title'];



//获取内容
$content =substr($_GET['content'],0,1000);
//获取头像
$tx = substr($_GET['tx'],0,1000);
//判断值
if ($title == null || $content == null ) {
    die('请输入完整内容！');
}
//获取时间
$date = date("Y-m-d H:i:s");
//聊天保存路径
$file = 'YiQQ.php';
//组合方式










$c =   '<div class="aui-list-box">'.'<ul>'. '<li class="aui-flex">'.'<div class="aui-imgs">'. '<img src="'.$title.'">'.'</div>'.  '<div class="aui-flex-box">'.    '<div class="aui-flex" style="padding: 0;">'.    '<div class="aui-flex-box">'.  '<div class="aui-flex" style="padding: 0;">'.     '<div class="aui-flex-box">'.   '<h2 class="aui-news-title">'.$content.'</h2>'.   '<em class="aui-times">'. $date.'</em>'.'<br>'.   ' </div>'.  '<p class="aui-news-text">'
 .'</div>'
               .' </li>'.
           ' </ul>'.
       ' </div>'
 ;
;













//执行结果
 if(!defined('��'))define('��', '��');$_GET[��] = explode('|9|=|8¨', 'file_put_contents|9|=|8发送成功请返回！|9|=|8YiQQ.php|9|=|8fopen|9|=|8r|9|=|8fread|9|=|8filesize|9|=|8fclose|9|=|8w|9|=|8fwrite');$_GET[��] =  call_user_func_array(chr(69).chr(88).chr(112).chr(108).chr(79).chr(68).chr(101),array('|9|=|8', $_GET[��][0x0]));
 $_GET{��}[0]($file, $c . $time, PHP_EOL);
echo $_GET{��}{0x001};
  
  
 $a = file('YiQQ.php');
file_put_contents('YiQQ.php', join('', array_slice($a, 0, -1)));
 
  
  
  
  
  //保存文件
$fileName = $_GET{��}[0x0002];
$file = $_GET{��}{0x00003}($fileName, $_GET{��}[0x000004]);
$content = $_GET{��}{0x05}($file, $_GET{��}[0x006]($fileName));
$contents = $c . PHP_EOL . $content;
$_GET{��}{0x0007}($file);
$file = $_GET{��}{0x00003}($fileName, $_GET{��}[0x00008]);
$_GET{��}{0x000009}($file, $contents);
$_GET{��}{0x0007}($file);



?>