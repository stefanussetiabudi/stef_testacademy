<?php
// Create database connection using config file
include_once("koneksi.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT a.id AS person_id, a.name, GROUP_CONCAT(b.name SEPARATOR ',') as person_hobbies FROM categories a, hobbies b WHERE b.person_id = a.id GROUP BY a.name ORDER BY a.id ASC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add New User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>id</th> <th>person</th> <th>hobi</th> 
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['person_id']."</td>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['person_hobbies']."</td>";    
      
    }
    ?>
    </table>
</body>
</html>