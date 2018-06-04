

<?php
$con = mysql_connect("IP","name","password");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("my_db", $con);
$sql="INSERT INTO person (book name,book price,book introduce,book label,transaction mode,school,num)
VALUES
('$_POST[book name]','$_POST[book price]','$_POST[book introduce]','$_POST[book label]','$_POST[transaction mode]','$_POST[school]','$_POST[num]','$_POST[num]','$_POST[email]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "书本名称：".$_POST["book name"]."<br/>";
echo "书本价格：".$_POST["book price"]."<br/>";
echo "书本介绍：".$_POST["book introduce"]."<br/>";
echo "书本标签：".$_POST["book label"]."<br/>";
echo "交易方式：".$_POST["transaction mode"]."<br/>";
echo "您的学校：".$_POST["school"]."<br/>";
echo "您的楼栋：".$_POST["num"]."<br/>";
echo "QQ：".$_POST["num"]."<br/>";
echo "email：".$_POST["email"]."<br/>";
mysql_close($con);
?>