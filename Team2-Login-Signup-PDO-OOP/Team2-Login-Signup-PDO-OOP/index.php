<?php

  require_once("session.php");
  
  require_once("class.user.php");
  $auth_user = new USER();
  
  
  $user_id = $_SESSION['user_session'];
  
  $stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
  $stmt->execute(array(":user_id"=>$user_id));
  
  $userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>欢迎您！ - <?php print($userRow['user_name']); ?></title>

<link rel="stylesheet" type="text/css" href="css/base.min.css" />
<link rel="stylesheet" type="text/css" href="css/index.css" />

<link type="text/css" href="css/default.css" rel="stylesheet" />
<link type="text/css" href="css/flexslider.min.css?v=3" rel="stylesheet" />
<link rel="stylesheet" href="css/pagination.css" />


</head>
<body>
<br>
<br>
<div class="nav">
<a>登录/注册</a><a>我的购物车</a> <a>我要卖书</a> <a>联系我们</a><a href="logout.php?logout=true"><span class="glyphicon glyphicon-log-out"></span>&nbsp;退出登录</a>
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
      
      



      <div class="f_out style01">
        <ul>
          <li> <span class="cinemaTag"></span> <a class="mtitle" href="http://www.softwhy.com/?yx/film/c1f538140.html" target="_blank" title="《饥饿游戏2》：票房黑马续集再临">《饥饿游戏2》：票房黑马续集再临</a> <a target="_blank" href="http://www.softwhy.com/?yx/film/c1f538140.html"><img alt="《饥饿游戏2》：票房黑马续集再临" src="images/thumb_1_256_353_20131008035404898.jpg" width="256" height="353"></a> </li>
          <li> <span class="payTag"></span> <a class="mtitle" href="http://www.softwhy.com/?play/706355.shtml?utm_source=m1905&utm_medium=cps&utm_campaign=6" target="_blank" title="《残团》：可歌可泣抗日史诗">《残团》：可歌可泣抗日史诗</a> <a target="_blank" href="http://www.softwhy.com/?play/706355.shtml?utm_source=m1905&utm_medium=cps&utm_campaign=6"><img alt="《残团》：可歌可泣抗日史诗" src="images/thumb_1_256_353_20131119033225329206.jpg" width="256" height="353"></a> </li>
          <li> <span class="HDTag"></span> <a class="mtitle" href="http://www.softwhy.com/?vod/info/689905.shtml" target="_blank" title="《小小飞虎队》：四代童星合力抗日">《小小飞虎队》：四代童星合力抗日</a> <a target="_blank" href="http://www.softwhy.com/?vod/info/689905.shtml"><img alt="《小小飞虎队》：四代童星合力抗日" src="images/thumb_1_256_353_20131114090552597360.jpg" width="256" height="353"></a> </li>
        </ul>
      </div>
<!--
      <div class="f_out style01">
       <div class="clear"></div>
       <div id="model">
       <div class="title">
       <h2>教育教辅</h2>
       <a id="total"></a></div>
       <div class="clear"></div>
       <ul id="htcList">
       </ul>
       <div class="clear"></div>
       <div id="Pagination" class="pagination">--><!-- 这里显示分页 --><!--</div>
       <ul id="Searchresult" style="display:none;">
       </ul>
       </div>
       <div style="text-align:center;clear:both"></div>

      </div>
-->


       <div class="f_out style01">
       <div class="clear"></div>
       <div id="model" class="model">
       <div class="title">
       <h2>教育教辅</h2>
       <a id="total" class="total"></a></div>
       <div class="clear"></div>
       <ul id="htcList" class="htcList">
       </ul>
       <div class="clear"></div>
       <div id="pagination" class="pagination"><!-- 这里显示分页 --></div>
       <ul id="Searchresult" class="Searchresult" style="display:none;">
       </ul>
       </div>
       <div style="text-align:center;clear:both"></div>

      </div>
      <div class="f_out style01">
       <div class="clear"></div>
       <div id="model" class="model">
       <div class="title">
       <h2>经济管理</h2>
       <a id="total" class="total"></a></div>
       <div class="clear"></div>
       <ul id="htcList" class="htcList">
       </ul>
       <div class="clear"></div>
       <div id="pagination" class="pagination"><!-- 这里显示分页 --></div>
       <ul id="Searchresult" class="Searchresult" style="display:none;">
       </ul>
       </div>
       <div style="text-align:center;clear:both"></div>

      </div>
      <div class="f_out style01">
       <div class="clear"></div>
       <div id="model" class="model">
       <div class="title">
       <h2>科技生活</h2>
       <a id="total" class="total"></a></div>
       <div class="clear"></div>
       <ul id="htcList" class="htcList">
       </ul>
       <div class="clear"></div>
       <div id="pagination" class="pagination"><!-- 这里显示分页 --></div>
       <ul id="Searchresult" class="Searchresult" style="display:none;">
       </ul>
       </div>
       <div style="text-align:center;clear:both"></div>

      </div>

      <div class="f_out style01">
       <div class="clear"></div>
       <div id="model" class="model">
       <div class="title">
       <h2>人文社科</h2>
       <a id="total" class="total"></a></div>
       <div class="clear"></div>
       <ul id="htcList" class="htcList">
       </ul>
       <div class="clear"></div>
       <div id="pagination" class="pagination"><!-- 这里显示分页 --></div>
       <ul id="Searchresult" class="Searchresult" style="display:none;">
       </ul>
       </div>
       <div style="text-align:center;clear:both"></div>

      </div>
      <div class="f_out style01">
       <div class="clear"></div>
       <div id="model" class="model">
       <div class="title">
       <h2>华中师范</h2>
       <a id="total" class="total"></a></div>
       <div class="clear"></div>
       <ul id="htcList" class="htcList">
       </ul>
       <div class="clear"></div>
       <div id="pagination" class="pagination"><!-- 这里显示分页 --></div>
       <ul id="Searchresult" class="Searchresult" style="display:none;">
       </ul>
       </div>
       <div style="text-align:center;clear:both"></div>

      </div>
      <div class="f_out style01">
       <div class="clear"></div>
       <div id="model" class="model">
       <div class="title">
       <h2>武汉理工</h2>
       <a id="total" class="total"></a></div>
       <div class="clear"></div>
       <ul id="htcList" class="htcList">
       </ul>
       <div class="clear"></div>
       <div id="pagination" class="pagination"><!-- 这里显示分页 --></div>
       <ul id="Searchresult" class="Searchresult" style="display:none;">
       </ul>
       </div>
       <div style="text-align:center;clear:both"></div>

      </div>
     <div class="f_out style01">
       <div class="clear"></div>
       <div id="model" class="model">
       <div class="title">
       <h2>武汉大学</h2>
       <a id="total" class="total"></a></div>
       <div class="clear"></div>
       <ul id="htcList" class="htcList">
       </ul>
       <div class="clear"></div>
       <div id="pagination" class="pagination"><!-- 这里显示分页 --></div>
       <ul id="Searchresult" class="Searchresult" style="display:none;">
       </ul>
       </div>
       <div style="text-align:center;clear:both"></div>

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
