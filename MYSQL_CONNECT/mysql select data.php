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
    
    $sql="SELECT id,Frist_name,Last_name FORM MYGuests";
    $result=$conn->query($sql);
    
    if($result->num_rows>0){
        
        //output data of each row
        while($row=$result->fetch_assoc())
        {
            echo "id :-".$row["id"],"Name:-".$row["Frist_name"]."".$row["Last_name"]."<br>";
        }

    } 
    else
    {
        echo "0 results";
    }
    
    $conn->close();
?>