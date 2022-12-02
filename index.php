
<?php






include("head.php");
   
function get_real_ip(){
    $ip=false;
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ips=explode (', ', $_SERVER['HTTP_X_FORWARDED_FOR']);
        if($ip){ array_unshift($ips, $ip); $ip=FALSE; }
        for ($i=0; $i < count($ips); $i++){
            if(!eregi ('^(10│172.16│192.168).', $ips[$i])){
                $ip=$ips[$i];
                break;
            }
        }
    }
    return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
}


$ip=get_real_ip();

 /**      <?php echo $sss ?></div>    */




$data = file_get_contents("http://588688.llos.fun/sjtx.php?format=1");
$json = $data;

  

// 将JSON数据解码为PHP关联数组

$arr = json_decode($json, true);

$sss=$arr["images"];  // Output: 65




$file = "./icon/".$ip;

 

if(file_exists($file))

{

   // echo "当前目录中，文件".$file."存在";
   
   
  $file_path = "./icon/".$ip;
if(file_exists($file_path)){
$fp = fopen($file_path,"r");
$str = fread($fp,filesize($file_path));//指定读取大小，这里把整个文件内容读取出来
 $sss = str_replace("\r\n","<br />",$str);

 
}


   
   
   
   

}

else

{

   //  echo "当前目录中，文件".$file."不存在";
     
     $myfile = fopen( "./icon/".$ip, "w") or die("Unable to open file!");



fwrite($myfile, $sss);


}




  




fclose($myfile);

?>






<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>YiQQ</title>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; minimum-scale=1.0; maximum-scale=1.0">
<link rel="shortcut icon" href="favicon.ico"/>
        <script>
        function httpGet(theUrl)
        {
            var xmlHttp = new XMLHttpRequest();
            xmlHttp.open( "GET", theUrl, false );
            xmlHttp.send( null );
            return xmlHttp.responseText;
        }
    </script>
    <style>
          .background {
            margin: 0 auto;
            max-width: 800px;
            min-width: 320px;
            padding-bottom: 0.1px;
            padding-top: 56px;
        }

        body {
            margin: 0;
            background: #eee;
        }

        .top {
            background: #00A600;
            color: #FFFFFF;
            height: 30px;
            width: 100%;
            line-height: 56px;
            font-size: 17px;
            padding-left: 10px;
            box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
            position: fixed;
        }

         .card {
            box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
            background: #fff;
            margin: 10px;
            padding: 10px;
        }

        .title {
            font-size: 14px;
            color: #000000;
        }

        input {
            border: none;
            border-bottom: solid;
            border-bottom-width: 0px;
            margin-top: 0px;
            width: 0;
            height: 0;
            outline: none;
            
            //上区
        }

        input:focus {
            outline: none;
            border-color: #000000;
            border-bottom-color: #00A600;
        }

         textarea {
            border: none;
            border-bottom: solid;
            border-bottom-width: 1px;
            margin-top: 5px;
            width: 100%;
            height: 100px;
            outline: none;
           font-size: 30px;
           
           //输入框
            
            //内框
        }


        textarea:focus {
            outline: none;
            border-color: #00A600;
            border-bottom-color: #00A600;
        }

        button {
            margin-top: 15px;
            color: #ffffff;
            background: #00A600;
            width: 210px;
            height: 60px;
            border-top-left-radius: 0.5em;
            border-top-right-radius: 0.5em;
            border-bottom-left-radius: 0.5em;
            border-bottom-right-radius: 0.5em;
            border-top-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-left-width: 0px;
            cursor: pointer;
            box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>


<div class="background">
       

            <input type="text" disabled="true"  readonly="readonly"   value=<?php echo $sss ?>  id="title"/>
        </div>
      
            <textarea type="text" id="content"/> </textarea>
      
     
      
         </div>
          
        
        
         
        <div align="center">
            <button onclick="alert(httpGet('send.php?title='+document.getElementById('title').value+'&content='+document.getElementById('content').value))">发送</button>
        </div>



</div>








</div>

<!-- 头部导航 -->


</div>



<div class="copyright">

<!-- 统计代码 -->


</body>
</html>



</body>

</html>

