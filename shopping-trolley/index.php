<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>转转二手书</title>

<link rel="stylesheet" type="text/css" href="css/base.min.css" />
<!--<link rel="stylesheet" type="text/css" href="css/index.css" />

<link type="text/css" href="css/default.css" rel="stylesheet" />-->


</head>

<body>
    <div class="nav">
        <a>Buy more books</a><br>
        <a>Sell my books</a>
    </div>




<?php

// page given in URL parameter, default page is one
$page = isset($_GET['page']) ? $_GET['page'] : 1;
 
// set number of records per page
$records_per_page = 5;
 
// calculate for the query LIMIT clause
$from_record_num = ($records_per_page * $page) - $records_per_page;

// get ID of the product to be read
//$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
 
// include database and object files
include_once 'config/database.php';
include_once 'objects/product.php';
//include_once 'objects/category.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare objects
$product = new Product($db);
//$category = new Category($db);
 
// set ID property of product to be read
//$product->id = $id;
 
// read the details of product to be read

$stmt = $product->readAll($from_record_num, $records_per_page);
$num = $stmt->rowCount();


// set page headers
$page_title = "One's buy trolley";


include_once "layout_header.php";


// HTML table for displaying a product details
 echo "<table class='table table-hover table-responsive table-bordered'>";
        echo "<tr>";
            echo "<th>Product</th>";
            echo "<th>Price</th>";
            echo "<th>Description</th>";
             echo "<th>Actions</th>";
     
        echo "</tr>";
 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
 
            extract($row);
   
            echo "<tr>";
                echo "<td>{$book_name}</td>";
                echo "<td>{$price}</td>";
                echo "<td>{$description}</td>";
             echo "<td>";   

             echo "<a href='read_one.php?id={$id}' class='btn btn-primary left-margin'>";
             echo "<span class='glyphicon glyphicon-list'></span> Read";
             echo "</a>";
            

             echo "<a delete-id='{$id}' class='btn btn-danger delete-object'>";
             echo "<span class='glyphicon glyphicon-remove'></span> Delete";
             echo "</a>";


             echo "</td>";








            echo "</tr>";    
       
             



            }


 
echo "</table>";



include_once "layout_footer.php";

// the page where this paging is used
$page_url = "index.php?";
 
// count all products in the database to calculate total pages
$total_rows = $product->countAll();
 
// paging buttons here
include_once 'paging.php';

?>



</body>

 

</html>
