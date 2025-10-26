<?php
    $servername='localhost';
    $dbusername='root';
    $dbpassword='';
    $dbname='mydb';
    
    //create connection
    $conn=new mysqli($servername,$dbusername,$dbpassword,  $dbname); 
    //check connection
    if($conn->connect_error){
        die('connection failed:-'.$conn->conect_error);
    } 
    //Create table
    $sql="CREATE TABLE MYGuests(
        id INT(6)  PRIMARY KEY NOT NULL ,
        Frist_name VARCHAR(30) NOT NULL,
        Last_name VARCHAR(30) NOT NULL,
        Email VARCHAR(30) NOT NULL,
        reg_data TIMESTAMP
        )";
    if($conn->query($sql)==TRUE){
        echo"Create Table successfully";
    } 
    else{
        echo "Error Create Table :-".$conn->error;
    }
    
    $conn->close();
?>