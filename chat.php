<?php
include("config.php");
$title='易聊';
include 'head.php';



?>


<?php



   
 


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




 /**      <?php echo $sss ?></div>    */


   


?>


 </section>
   
</section>
</body>
<script type="text/javascript" src="static/js/jquery-1.11.1.min.js"></script>
</html>




<!-- 头部导航 -->

<section class="aui-flexView">
    <header class="aui-navBar aui-navBar-fixed">
        <a href="javascript:;" class="aui-navBar-item">
            <i class="icon icon-return"></i>
        </a>
        <div class="aui-center">
            <span class="aui-center-title">消息</span>
        </div>
        <a href="javascript:;" class="aui-navBar-item">
            <i class="icon icon-more"></i>
        </a>
    </header>
<p style="color: #29AE63; margin-left: 20px">服務已连接...
</p>



<?php
$html = file_get_contents("YiQQ.php");
 
  echo $html;
 

?>
