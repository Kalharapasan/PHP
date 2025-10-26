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
    
    $sql="NSERT INTO MYGuests(Frist_name L,Last_name ,Email)
    VALUES ('siva','kumara','siva@exampel.com')";
    
    
    if($conn->query($sql)===TRUE){
        $last_id=$conn->insert_id;
        echo "New  Record create Successfully.Last insreted ID is:-"$last_id;
    } 
    else
    {
        echo "ERROR:-".$sql."<br>.$conn->error;
    }
    
    $conn->close();
?>