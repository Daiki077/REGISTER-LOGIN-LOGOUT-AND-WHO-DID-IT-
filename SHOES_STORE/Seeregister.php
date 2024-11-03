<?php
require_once "core/function.php";
require_once "core/dbconfig.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #121212;
    color: #f4f4f4; 
    padding: 20px;
}

h3 {
    color: #e0e0e0; 
    text-align: center;
}

form {
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #1e1e1e;
}

th {
    padding: 10px;
    border: 1px solid #333;
    text-align: center;
    background-color: #4CAF50; 
    color: white; 
}

tr:nth-child(even) {
    background-color: #2a2a2a; 
}

tr:nth-child(odd) {
    background-color: #1e1e1e; 
}

a {
    text-decoration: none;
    color: #90caf9; 
    margin: 0 5px;
}

a:hover {
    color: #4CAF50; 
}
    </style>
</head>
<body>
<table>
    <h3>THIS ALL OF THE ADMIN</h3>
        <tr>
            <th>User_ID</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        <?php 
        $getAllusers = getAllusers($pdo); 
        foreach ($getAllusers as $row) { ?>
            <tr>
                <td><?php echo $row['User_ID']; ?></td>
                <td><?php echo $row['Username']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
            </tr>
        <?php } ?>
</body>
</html>