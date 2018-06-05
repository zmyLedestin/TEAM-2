<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>转转二手书</title>


<link rel="stylesheet" type="text/css" href="css/index.css" />

<link type="text/css" href="css/default.css" rel="stylesheet" />

<link rel="stylesheet" href="css/pagination.css" />

<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

</head>

<body>
<br>
<br>
<div class="nav">
<a href="#" class="tc">登录/注册</a>
<div id="gray"></div>
<div class="popup" id="popup">
  <div class="top_nav" id='top_nav'>
    <div align="center">
      <i></i>
      <span>登录账号</span>
      <a class="guanbi"></a>
    </div>
  </div>
  
  <div class="min">
    <div class="tc_login">
      <div class="left">
        <h4 align="center">手机扫描，赞助一下</h4>
        <div align="center"><img src="images/zfb_2yuan.jpg" width="150" height="150" /></div>
        <dd>
          <div align="center">自愿赞助我们 <span style="font-family: 'microsoft yahei'; color: #F60; font-size: 18px;">2</span> 元</div>
        </dd>
      </div>  
      <div class="right">
        <form method="POST" name="form_login" target="_top">
          <div align="center">
            <a href="">短信快捷登录</a>
            <i class="icon-mobile-phone"></i>
            <input type="text" name="name" id="name" required="required" placeholder="用户名" autocomplete="off" class="input_yh">
            <input type="password" name="pass" id="pass" required="required" placeholder="密码" autocomplete="off" class="input_mm">
          </div>
          <dd>
            <div align="center"><a href="">遇到登录问题</a></div>
          </dd>
          <div align="center">
            <input type="submit" class="button" title="Sign In" value="登录">
          </div>
        </form>   
        <dd>
          <div align="center"><a href="#" target="_blank">立即注册</a></div>
        </dd>
        <hr align="center" />
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
//窗口效果
//点击登录class为tc 显示
$(".tc").click(function(){
  $("#gray").show();
  $("#popup").show();//查找ID为popup的DIV show()显示#gray
  tc_center();
});
//点击关闭按钮
$("a.guanbi").click(function(){
  $("#gray").hide();
  $("#popup").hide();//查找ID为popup的DIV hide()隐藏
})

//窗口水平居中
$(window).resize(function(){
  tc_center();
});

function tc_center(){
  var _top=($(window).height()-$(".popup").height())/2;
  var _left=($(window).width()-$(".popup").width())/2;
  
  $(".popup").css({top:_top,left:_left});
} 
</script>

<script type="text/javascript">
$(document).ready(function(){ 

  $(".top_nav").mousedown(function(e){ 
    $(this).css("cursor","move");//改变鼠标指针的形状 
    var offset = $(this).offset();//DIV在页面的位置 
    var x = e.pageX - offset.left;//获得鼠标指针离DIV元素左边界的距离 
    var y = e.pageY - offset.top;//获得鼠标指针离DIV元素上边界的距离 
    $(document).bind("mousemove",function(ev){ //绑定鼠标的移动事件，因为光标在DIV元素外面也要有效果，所以要用doucment的事件，而不用DIV元素的事件 
    
      $(".popup").stop();//加上这个之后 
      
      var _x = ev.pageX - x;//获得X轴方向移动的值 
      var _y = ev.pageY - y;//获得Y轴方向移动的值 
    
      $(".popup").animate({left:_x+"px",top:_y+"px"},10); 
    }); 

  }); 

  $(document).mouseup(function() { 
    $(".popup").css("cursor","default"); 
    $(this).unbind("mousemove"); 
  });
}) 
</script>



<a href="">我的购物车</a> 
<a href="">我要卖书</a> 
<a href="">联系我们</a>
</div>
<div class="nav0"><img src="images/logo.png"/>

<div class='form1'>
<form method="POST" action="">
<p>
<input type="text" name="pmovie" required/>
<input type="submit"  class="button" value="搜索">
</p>
</form>
</div>

</div>
<div class="box_20ov cl"></div>
<div class="layout" id="floor_1">
<div class="carousel slide" id="carousel_news" data-unit-config="{'onclass':'active', 'offclass':'', 'pause_on_act':'click', 'interval':10000, 'position':'left'}">
   <div class="carousel-panel">
    <ul>
      <li class="item1">热门书单</li>
      <li class="item0">教育教辅</li>
      <li class="item2">经济管理</li>
      <li class="item3">科技生活</li>
      <li class="item4">人文社科</li>
      <li class="item5">华中师范</li>
      <li class="item7">武汉理工</li>
      <li class="item6">武汉大学</li>
    </ul>
  </div>

  <div class="carousel-inner">
    <div class="carousel-pos">
      
      

<!--1111111111111111111111111111111111111111111111111111111111111111111111111111111111111-->

      <div class="f_out style01">
        <ul>
          <li> <span class="cinemaTag"></span> <a class="mtitle" href="" target="_blank" title="《人性的弱点》：不朽真理">《人性的弱点》：不朽真理</a> <a target="_blank" href=""><img alt="《人性的弱点》：不朽真理" src="images/wikness.png" width="230" height="353"></a> </li>
          
          <li> <span class="payTag"></span> <a class="mtitle" href="" target="_blank" title="《红星照耀中国》：抗战史诗">《红星照耀中国》：抗战史诗</a> <a target="_blank" href=""><img alt="《红星照耀中国》：抗战史诗" src="images/redstar.png" width="230" height="353"></a> </li>
          
          <li> <span class="HDTag"></span> <a class="mtitle" href="" target="_blank" title="《从你的全世界路过》：过客">《《从你的全世界路过》：过客</a> <a target="_blank" href=""><img alt="《从你的全世界路过》：过客" src="images/worldbyyou.png" width="230" height="353"></a> </li>
          
          <li> <span class="HDTag"></span> <a class="mtitle" href="" target="_blank" title="《十年》：改变电视语态">《十年》：改变电视语态</a> <a target="_blank" href=""><img alt="《十年》：改变电视语态" src="images/tenyears.png" width="230" height="353"></a> </li>
        </ul>
      </div>

<!--222222222222222222222222222222222222222222222222222222222222222222222222222222222222-->

       <div class="f_out style01">
       <div class="clear"></div>
       <div id="model" class="model">
       <div class="title">
       <h2>教育教辅</h2>
       <a id="total_jiaoyu_us" class="total"></a></div>
       <div class="clear"></div>   
<?php
include_once 'config/database.php';
include_once 'objects/product.php';

$database = new Database();
$db = $database->getConnection();
$product = new Product($db);
$stmt = $product->readBytype1();
$num = $stmt->rowCount();

// 如果数据库有数据就展示数据 
if($num>0){
  echo "<ul id='htcList_jiaoyu_us'></ul>";
  echo "<div class='clear'>"."</div>";
  echo "<div class='pagination' id='pagination_jiaoyu_us'> </div>";  
  //这里的class=pagination存在css样式请不要改动  
  echo "<ul id='Searchresult_jiaoyu_us' class='Searchresult' style='display:none;'>";
  //当循环将数据库里的数据取出
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            echo "<li id ='$id' class = 'jiaoyu_us'>";
            //注意这里的class，其实也应该是特有的，因为后面要利用这个class出现的次数计算页面分页的值
                echo "{$image}";
                echo "<a href='index?id=$id'>";//可实现ID的传值
                echo "《{$book_name}》";echo "</a>"; //zhangjinhang按：注意，这里可能存在js文件渲染问题具体不清楚，故将链接加在了图片或者书名上面，加在li上是无法实现的！！
                echo "¥{$price}<br>";
                echo "{$description}";
            echo "</li>";
        }
  echo "</ul>";  
}
// 这是没有数据的时候显示的内容
else{
    echo "<div class='alert alert-info'>No products found.</div>";
}
?>
</div><div style="text-align:center;clear:both"></div></div>


<!--333333333333333333333333333333333333333333333333333333333333333333333333333333333333-->

      <div class="f_out style01">
       <div class="clear"></div>
       <div id="model" class="model">
       <div class="title">
       <h2>经济管理</h2>
       <a id="total_jingji_us" class="total"></a></div>
       <div class="clear"></div>   
<?php
include_once 'config/database.php';
include_once 'objects/product.php';

$database = new Database();
$db = $database->getConnection();
$product = new Product($db);
$stmt = $product->readBytype2();
$num = $stmt->rowCount();

// 如果数据库有数据就展示数据 
if($num>0){
  echo "<ul id='htcList_jingji_us'></ul>";
  echo "<div class='clear'>"."</div>";
  echo "<div class='pagination' id='pagination_jingji_us'> </div>";  
  //这里的class=pagination存在css样式请不要改动  
  echo "<ul id='Searchresult_jingji_us' class='Searchresult' style='display:none;'>";
  //当循环将数据库里的数据取出
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            echo "<li id ='$id' class = 'jingji_us'>";
            //注意这里的class，其实也应该是特有的，因为后面要利用这个class出现的次数计算页面分页的值
                echo "{$image}";
                echo "<a href='index?id=$id'>";//可实现ID的传值
                echo "《{$book_name}》";echo "</a>"; //zhangjinhang按：注意，这里可能存在js文件渲染问题具体不清楚，故将链接加在了图片或者书名上面，加在li上是无法实现的！！
                echo "¥{$price}<br>";
                echo "{$description}";
            echo "</li>";
        }
  echo "</ul>";  
}
// 这是没有数据的时候显示的内容
else{
    echo "<div class='alert alert-info'>No products found.</div>";
}
?>
</div><div style="text-align:center;clear:both"></div></div>


<!--444444444444444444444444444444444444444444444444444444444444444444444444444444444444-->

      <div class="f_out style01">
       <div class="clear"></div>
       <div id="model" class="model">
       <div class="title">
       <h2>科技生活</h2>
       <a id="total_keji_us" class="total"></a></div>
       <div class="clear"></div>   
<?php
include_once 'config/database.php';
include_once 'objects/product.php';

$database = new Database();
$db = $database->getConnection();
$product = new Product($db);
$stmt = $product->readBytype3();
$num = $stmt->rowCount();

// 如果数据库有数据就展示数据 
if($num>0){
  echo "<ul id='htcList_keji_us'></ul>";
  echo "<div class='clear'>"."</div>";
  echo "<div class='pagination' id='pagination_keji_us'> </div>";  
  //这里的class=pagination存在css样式请不要改动  
  echo "<ul id='Searchresult_keji_us' class='Searchresult' style='display:none;'>";
  //当循环将数据库里的数据取出
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            echo "<li id ='$id' class = 'keji_us'>";
            //注意这里的class，其实也应该是特有的，因为后面要利用这个class出现的次数计算页面分页的值
                echo "{$image}";
                echo "<a href='index?id=$id'>";//可实现ID的传值
                echo "《{$book_name}》";echo "</a>"; //zhangjinhang按：注意，这里可能存在js文件渲染问题具体不清楚，故将链接加在了图片或者书名上面，加在li上是无法实现的！！
                echo "¥{$price}<br>";
                echo "{$description}";
            echo "</li>";
        }
  echo "</ul>";  
}
// 这是没有数据的时候显示的内容
else{
    echo "<div class='alert alert-info'>No products found.</div>";
}
?>
</div><div style="text-align:center;clear:both"></div></div>



<!--55555555555555555555555555555555555555555555555555555555555555555555555555555555-->

      <div class="f_out style01">
       <div class="clear"></div>
       <div id="model" class="model">
       <div class="title">
       <h2>人文社科</h2>
       <a id="total_renwen_us" class="total"></a></div>
       <div class="clear"></div>   
<?php
include_once 'config/database.php';
include_once 'objects/product.php';

$database = new Database();
$db = $database->getConnection();
$product = new Product($db);
$stmt = $product->readBytype4();
$num = $stmt->rowCount();

// 如果数据库有数据就展示数据 
if($num>0){
  echo "<ul id='htcList_renwen_us'></ul>";
  echo "<div class='clear'>"."</div>";
  echo "<div class='pagination' id='pagination_renwen_us'> </div>";  
  //这里的class=pagination存在css样式请不要改动  
  echo "<ul id='Searchresult_renwen_us' class='Searchresult' style='display:none;'>";
  //当循环将数据库里的数据取出
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            echo "<li id ='$id' class = 'renwen_us'>";
            //注意这里的class，其实也应该是特有的，因为后面要利用这个class出现的次数计算页面分页的值
                echo "{$image}";
                echo "<a href='index?id=$id'>";//可实现ID的传值
                echo "《{$book_name}》";echo "</a>"; //zhangjinhang按：注意，这里可能存在js文件渲染问题具体不清楚，故将链接加在了图片或者书名上面，加在li上是无法实现的！！
                echo "¥{$price}<br>";
                echo "{$description}";
            echo "</li>";
        }
  echo "</ul>";  
}
// 这是没有数据的时候显示的内容
else{
    echo "<div class='alert alert-info'>No products found.</div>";
}
?>
</div><div style="text-align:center;clear:both"></div></div>


<!--66666666666666666666666666666666666666666666666666666666666666666666666666666666-->

      <div class="f_out style01">
       <div class="clear"></div>
       <div id="model" class="model">
       <div class="title">
       <h2>华中师范</h2>
       <a id="total_huashi_us" class="total"></a></div>
       <div class="clear"></div>   
<?php
include_once 'config/database.php';
include_once 'objects/product.php';

$database = new Database();
$db = $database->getConnection();
$product = new Product($db);
$stmt = $product->readByplace1();
$num = $stmt->rowCount();

// 如果数据库有数据就展示数据 
if($num>0){
  echo "<ul id='htcList_huashi_us'></ul>";
  echo "<div class='clear'>"."</div>";
  echo "<div class='pagination' id='pagination_huashi_us'> </div>";  
  //这里的class=pagination存在css样式请不要改动  
  echo "<ul id='Searchresult_huashi_us' class='Searchresult' style='display:none;'>";
  //当循环将数据库里的数据取出
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            echo "<li id ='$id' class = 'huashi_us'>";
            //注意这里的class，其实也应该是特有的，因为后面要利用这个class出现的次数计算页面分页的值
                echo "{$image}";
                echo "<a href='index?id=$id'>";//可实现ID的传值
                echo "《{$book_name}》";echo "</a>"; //zhangjinhang按：注意，这里可能存在js文件渲染问题具体不清楚，故将链接加在了图片或者书名上面，加在li上是无法实现的！！
                echo "¥{$price}<br>";
                echo "{$description}";
            echo "</li>";
        }
  echo "</ul>";  
}
// 这是没有数据的时候显示的内容
else{
    echo "<div class='alert alert-info'>No products found.</div>";
}
?>
</div><div style="text-align:center;clear:both"></div></div>

<!--777777777777777777777777777777777777777777777777777777777777777777777777777777-->
      <div class="f_out style01">
       <div class="clear"></div>
       <div id="model" class="model">
       <div class="title">
       <h2>武汉理工</h2>
       <a id="total_wuli_us" class="total"></a></div>
       <div class="clear"></div>   
<?php
include_once 'config/database.php';
include_once 'objects/product.php';

$database = new Database();
$db = $database->getConnection();
$product = new Product($db);
$stmt = $product->readByplace2();
$num = $stmt->rowCount();

// 如果数据库有数据就展示数据 
if($num>0){
  echo "<ul id='htcList_wuli_us'></ul>";
  echo "<div class='clear'>"."</div>";
  echo "<div class='pagination' id='pagination_wuli_us'> </div>";  
  //这里的class=pagination存在css样式请不要改动  
  echo "<ul id='Searchresult_wuli_us' class='Searchresult' style='display:none;'>";
  //当循环将数据库里的数据取出
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            echo "<li id ='$id' class = 'wuli_us'>";
            //注意这里的class，其实也应该是特有的，因为后面要利用这个class出现的次数计算页面分页的值
                echo "{$image}";
                echo "<a href='index?id=$id'>";//可实现ID的传值
                echo "《{$book_name}》";echo "</a>"; //zhangjinhang按：注意，这里可能存在js文件渲染问题具体不清楚，故将链接加在了图片或者书名上面，加在li上是无法实现的！！
                echo "¥{$price}<br>";
                echo "{$description}";
            echo "</li>";
        }
  echo "</ul>";  
}
// 这是没有数据的时候显示的内容
else{
    echo "<div class='alert alert-info'>No products found.</div>";
}
?>
</div><div style="text-align:center;clear:both"></div></div>

<!--88888888888888888888888888888888888888888888888888888888888888888888888888888-->
<!--这里仍然是继承style01的css样式，后面带有_wuhan_us的id，是“武汉大学”的特有属性-->

       <div class="f_out style01">
       <div class="clear"></div>
       <div id="model" class="model">
       <div class="title">
       <h2>武汉大学</h2>
       <a id="total_wuhan_us" class="total"></a></div>
       <div class="clear"></div>   
<?php
include_once 'config/database.php';
include_once 'objects/product.php';

$database = new Database();
$db = $database->getConnection();
$product = new Product($db);
$stmt = $product->readByplace3();
$num = $stmt->rowCount();

// 如果数据库有数据就展示数据 
if($num>0){
  echo "<ul id='htcList_wuhan_us'></ul>";
  echo "<div class='clear'>"."</div>";
  echo "<div class='pagination' id='pagination_wuhan_us'> </div>";  
  //这里的class=pagination存在css样式请不要改动  
  echo "<ul id='Searchresult_wuhan_us' class='Searchresult' style='display:none;'>";
  //当循环将数据库里的数据取出
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            echo "<li id ='$id' class = 'wuhan_us'>";
            //注意这里的class，其实也应该是特有的，因为后面要利用这个class出现的次数计算页面分页的值
                echo "{$image}";
                echo "<a href='index?id=$id'>";//可实现ID的传值
                echo "《{$book_name}》";echo "</a>"; //zhangjinhang按：注意，这里可能存在js文件渲染问题具体不清楚，故将链接加在了图片或者书名上面，加在li上是无法实现的！！
                echo "¥{$price}<br>";
                echo "{$description}";
            echo "</li>";
        }
  echo "</ul>";  
}
// 这是没有数据的时候显示的内容
else{
    echo "<div class='alert alert-info'>No products found.</div>";
}
?>
</div><div style="text-align:center;clear:both"></div></div>





</div>
</div>
</div>
</div>

<footer>
<div id="efooter"><br><h1>联系客服</h1></div>

<div id="footer"><br>  
  <p>地址：湖北省武汉市洪山区珞喻路152号&nbsp;&nbsp;&nbsp;邮编：430079</p>
  <p>Copyright&copy; 版权所有：华中师范大学Team2</p> </div>
</footer>
<script src="js/jquery-edge.min.js"></script> 
<script src="js/softwhy.js"></script> 
<script src="js/index_patch.js"></script>
<script type="text/javascript" src="js/jquery.pagination.js"></script> 
<script type="text/javascript" src="js/xhdata.js"></script>

</body>
</html>
