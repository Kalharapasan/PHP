<?php
    $link=mysqli_connect("localhost","root","Mydb");
    if ($link === false){
        die("ERROR:Could not Connect.".mysqli_connect_error());
    }
    $sql="SELECT * FROM data LIMIT 2";
        if($res=mysqli_num_rows($res)>0){
            echo "<table>";
            echo "<tr>";
            echo "<th>Fristname</th>";
            echo "<th>Lastname</th>";
            echo "<th>AGE</th>";
            echo "</tr>";
        
        
            while($res=mysqli_fetch_array($res)){
                echo "<tr>";
                echo "<th>Fristname".$row['Frist_name']."</th>";
                echo "<th>Lastname".$row['Lasat_name']."</th>";
                echo "<th>AGE".$row['Age']."</th>";
                echo "</tr>";

            }
            echo"</table>";mysqli_free_result($res);
        }
        else{
            echo "No Matching Records Are Found.";
        }
    else{
        echo "ERROR:-Could not able to execute $sql .".mysqli_error($link);
    }
    mysqli_close($link);
?>