<?php
    $servername='localhost';
    $dbusername='root';
    $dbpassword='';
    $dbname='mydb';
    
    //create connection
    $conn=new mysqli($servername,$dbusername,$dbpassword,$dbname);
    //check connection
    if($conn->connect_error){
        die('connection failed:-'.$conn->conect_error);
    } 
    
    $sql="INSERT INTO MYGuests(id,Frist_name ,Last_name ,Email)
    VALUES ('00001','marbin','joe','marbin@exampel.com');";
    if($conn->query($sql)==TRUE){
        echo"New Record Create successfully";
    } 
    else{
        echo "Error:-".$sql."<br>".$conn->error;
    }
    
    $conn->close();
?>