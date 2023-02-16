<?php

class dbConnect {
    
    function __construct(){
        require_once('confic.php');
        $conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
        // mysql_select_db(DATABASE, $conn);
        if(!$conn){
            die("Cannot connect the Database");
        }
        return $conn;
    }
}

?>