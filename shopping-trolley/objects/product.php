<?php
class Product{
 
    // database connection and table name
    private $conn;
    private $table_name = "shopping_trolley";
 
    // object properties
    public $id;
    public $std_id;
    public $book_name;
    public $price;
    public $description;

 
    public function __construct($db){
        $this->conn = $db;
    }
 


    function readAll($from_record_num, $records_per_page){
 
    $query = "SELECT
                id, std_id,book_name,price,description
            FROM
                " . $this->table_name . "
            ORDER BY
                book_name ASC
                    LIMIT
                {$from_record_num}, {$records_per_page}";
          
 
    $stmt = $this->conn->prepare( $query );
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

    function readOne(){
 
    $query = "SELECT std_id,book_name,price,description
        FROM " . $this->table_name . "
        WHERE id = ?
        LIMIT 0,1";
 
    $stmt = $this->conn->prepare( $query );
    $stmt->bindParam(1, $this->id);
    $stmt->execute();
 
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
    $this->std_id = $row['std_id'];
    $this->book_name = $row['book_name'];
    $this->price = $row['price'];
    $this->description = $row['description'];

}

    


    // read products by search term
    public function search($search_term, $from_record_num, $records_per_page){
 
    // select query
    $query = "SELECT
                c.name as category_name, p.id, p.name, p.description, p.price, p.category_id, p.created
            FROM
                " . $this->table_name . " p
                LEFT JOIN
                    categories c
                        ON p.category_id = c.id
            WHERE
                p.name LIKE ? OR p.description LIKE ?
            ORDER BY
                p.name ASC
            LIMIT
                ?, ?";
 
    // prepare query statement
    $stmt = $this->conn->prepare( $query );
 
    // bind variable values
    $search_term = "%{$search_term}%";
    $stmt->bindParam(1, $search_term);
    $stmt->bindParam(2, $search_term);
    $stmt->bindParam(3, $from_record_num, PDO::PARAM_INT);
    $stmt->bindParam(4, $records_per_page, PDO::PARAM_INT);
 
    // execute query
    $stmt->execute();
 
    // return values from database
    return $stmt;
    }
 
    public function countAll_BySearch($search_term){
 
    // select query
    $query = "SELECT
                COUNT(*) as total_rows
            FROM
                " . $this->table_name . " p
                LEFT JOIN
                    categories c
                        ON p.category_id = c.id
            WHERE
                p.name LIKE ?";
 
    // prepare query statement
    $stmt = $this->conn->prepare( $query );
 
    // bind variable values
    $search_term = "%{$search_term}%";
    $stmt->bindParam(1, $search_term);
 
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
    return $row['total_rows'];
    }

}
?>