<?php
    $link=mysqli_connect("localhost","root","","demo");
    //Check connection
    if ($link === false){
        die("ERROR:Could not Connect.".mysqli_connect_error());
    }
    //Perare an insret statement
    $sql="INSERT INTO MYGuests(Frist_name L,Last_name ,Email)
    VALUES (?,?,?)";
        if ($stmt =mysqli_prepare($link,$sql)){
            
            //Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt,"sss",$Frist_name,$Last_name,$Email);
            
            //Set the parameters values and execute the statement again to insert another row
            $Frist_name='Meribin';
            $Last_name='joe';
            $Email='exampel@mail.com';
            mysqli_stmt_execute($stmt);

             //Set the parameters values and execute the statement to insert another row
             $Frist_name='Ram';
            $Last_name='Kumar';
            $Email='exampel1@mail.com';
            mysqli_stmt_execute($stmt);

            echo "Recode insreted successfully";
        }
        else{
            echo "ERROR:- Could not prepare query $sql.".mysqli_error($link);
        }
        //close statement
        mysqli_stmt_close($stmt);
    //close connection
    mysqli_close($link);
?>
