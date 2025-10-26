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
    
    $sql="DELETE FROM MYGuests WHERE id=5";
    
    
    if($conn->query($sql)===TRUE){
        echo "Record Delete Successfully";
    } 
    else
    {
        echo "ERROR deleting record:-".$conn->error;
    }
    
    $conn->close();
?>