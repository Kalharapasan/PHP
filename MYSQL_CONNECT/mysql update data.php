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
    
    $sql="UPDATE MYGuests SET Last_name='doe' WHERE id=4";
    
    
    if($conn->query($sql)===TRUE){
        echo "Record Update Successfully";
    } 
    else
    {
        echo "ERROR Update record:-".$conn->error;
    }
    
    $conn->close();
?>