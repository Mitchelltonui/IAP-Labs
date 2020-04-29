<?php
include_once 'DBConnector.php';
include_once 'user.php';
$con = new DBConnector;
    
$res = User::readAll($con->conn);

    if(mysqli_num_rows($res) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>email</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($res)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['user_city'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
      
    } else{
        echo "No records matching your query were found.";
    }
 
?>