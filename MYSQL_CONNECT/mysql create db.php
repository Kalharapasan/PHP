<?php
    $servername='localhost';
    $dbusername='root';
    $dbpassword='';
    
    //create connection
    $conn=new mysqli($servername,$dbusername,$dbpassword); 
    //check connection
    if($conn->connect_error){
        die('connection failed:-'.$conn->conect_error);
    } 
    //Create database
    $sql="CREATE DATABASE mydb";
    if($conn->query($sql)==TRUE){
        echo"Database Create successfully";
    } 
    else{
        echo "Error Create Database :-".$conn->error;
    }
    
    $conn->close();
?>