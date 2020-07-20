<?php
include_once 'DBConnector.php';
include_once 'user.php';
$con = new DBConnector;
    
$res = User::readAll();

    if(mysqli_num_rows($res) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>City</th>";
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