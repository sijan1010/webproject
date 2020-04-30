<?php

    $server="localhost";
    $username="sijan";
    $password="localhost123";
    $database="webproject";

    $conn = new mysqli($server,$username,$password,$database);
    if($conn->connect_error){
        die("connection failed " . $conn->connect_error);
    }

    echo "Connection successful";


 $query = "SELECT id, name FROM product BY id ASC" ;
    $queryfire=mysqli_query($conn,$query);
    $userinfo  = mysqli_fetch_all($queryfire,MYSQLI_ASSOC);
    
    print_r($userinfo);

    
?>