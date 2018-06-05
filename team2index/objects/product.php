<?php
class Product{
 
    // database connection and table name
    private $conn;
    private $table_name = "books";
    private $table_name_2 = "information";
    // object properties
    public $id;
    public $std_id;
    public $book_name;
    public $description;
    public $price;
    public $image;
    public $cate;
    public $created;
    public $modified;

 
    public function __construct($db){
        $this->conn = $db;
    }
 
    // create product
    

    function readAll(){
 
    $query = "SELECT
                id, std_id, book_name, description, price, image, cate,created, modified
            FROM
                " . $this->table_name . "
            ORDER BY
                book_name ASC
            ";
 
    $stmt = $this->conn->prepare( $query );
    $stmt->execute();
 
    return $stmt;
}


//根据武大、武理、华师三个地方排序，还需要数据表books和information的连接和调试。以下三个可以封装成一个function
function readByplace3(){
 
    $query = "SELECT id, std_id, book_name, description, price, image, cate, created, modified FROM ".$this->table_name." WHERE std_id = 2";

//$query = "SELECT id, std_id, book_name, description, price, image, cate, created, modified FROM ".$this->table_name."inner join".$this->table_name_2."on".$this->table_name.".std_id=".$this->table_name_2.".id WHERE".$this->table_name_2.".place='3'";
 
    $stmt = $this->conn->prepare( $query );
    $stmt->bindParam(1, $this->id);
    $stmt->execute();
    return $stmt;
}
function readByplace2(){
 
    $query = "SELECT id, std_id, book_name, description, price, image, cate, created, modified FROM ".$this->table_name." WHERE std_id = 2";

//$query = "SELECT id, std_id, book_name, description, price, image, cate, created, modified FROM ".$this->table_name."inner join".$this->table_name_2."on".$this->table_name.".std_id=".$this->table_name_2.".id WHERE".$this->table_name_2.".place='3'";
 
    $stmt = $this->conn->prepare( $query );
    $stmt->bindParam(1, $this->id);
    $stmt->execute();
    return $stmt;
}
function readByplace1(){
 
    $query = "SELECT id, std_id, book_name, description, price, image, cate, created, modified FROM ".$this->table_name." WHERE std_id = 2";

//$query = "SELECT id, std_id, book_name, description, price, image, cate, created, modified FROM ".$this->table_name."inner join".$this->table_name_2."on".$this->table_name.".std_id=".$this->table_name_2.".id WHERE".$this->table_name_2.".place='3'";
 
    $stmt = $this->conn->prepare( $query );
    $stmt->bindParam(1, $this->id);
    $stmt->execute();
    return $stmt;
}

//数据库建议在books里加一条cate作为分类 以下四个可以封装成一个function
function readBytype4(){
 
    $query = "SELECT id, std_id, book_name, description, price, image, cate, created, modified FROM ".$this->table_name." WHERE cate = 4";

    $stmt = $this->conn->prepare( $query );
    $stmt->bindParam(1, $this->id);
    $stmt->execute();
    return $stmt;
}
function readBytype3(){
 
    $query = "SELECT id, std_id, book_name, description, price, image, cate, created, modified FROM ".$this->table_name." WHERE cate = 3";

    $stmt = $this->conn->prepare( $query );
    $stmt->bindParam(1, $this->id);
    $stmt->execute();
    return $stmt;
}
function readBytype2(){
 
    $query = "SELECT id, std_id, book_name, description, price, image, cate, created, modified FROM ".$this->table_name." WHERE cate = 2";

    $stmt = $this->conn->prepare( $query );
    $stmt->bindParam(1, $this->id);
    $stmt->execute();
    return $stmt;
}
function readBytype1(){
 
    $query = "SELECT id, std_id, book_name, description, price, image, cate, created, modified FROM ".$this->table_name." WHERE cate = 1";

    $stmt = $this->conn->prepare( $query );
    $stmt->bindParam(1, $this->id);
    $stmt->execute();
    return $stmt;
}





// used for paging products
public function countAll(){
 
    $query = "SELECT id FROM " . $this->table_name . "";
 
    $stmt = $this->conn->prepare( $query );
    $stmt->execute();
 
    $num = $stmt->rowCount();
 
    return $num;
}
}
?>