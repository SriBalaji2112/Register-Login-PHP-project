<?php

require_once('dbConnect.php');
require_once('confic.php');
session_start();
class dbFunction{
    function __construct(){
        $db = new dbConnect();
        require_once('confic.php');
        $conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    }

    public function UserRegister($username, $emailid, $password){
        $conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
        $password = ($password);
        $qr = mysqli_query($conn,"INSERT INTO users(username, emailid, password) values('".$username."', '".$emailid."', '".$password."')") or die(mysql_error());
        return $qr;
    }

    public function Login($emailid, $password){
        $conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
        $res = mysqli_query($conn, "SELECT * FROM users WHERE emailid = '".$emailid."' AND password = '".$password."'");
        $userData = mysqli_fetch_array($res);
        $no_rows = mysqli_num_rows($res);

        if($no_rows == 1){
            $_SESSION['login'] = true;
            $_SESSION['uid'] = $userData['id'];
            $_SESSION['username'] = $userData['username'];
            $_SESSION['email'] = $userData['emailid'];
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    public function isUserExist($emailid){
        $conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
        $qr = mysqli_query($conn, "SELECT * FROM users WHERE emailid = '".$emailid."'");

        echo $row = mysqli_num_rows($qr);

        if($row > 0){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
}

?>


