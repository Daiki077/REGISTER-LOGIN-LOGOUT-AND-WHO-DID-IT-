<?php
require_once "core/function.php";
require_once "core/dbconfig.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>

        <style>
body {
    font-family: Arial, sans-serif;
    background-color: #121212;
    background-image: url(); 
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

input[type="text"],
input[type="number"],
input[type="email"],
input[type="submit"] {
    background-color: #333; 
    color: #f4f4f4; 
    border: 1px solid #555; 
    padding: 10px;
    margin-top: 5px;
    width: calc(100% - 22px); 
}

input[type="submit"] {
    background-color: #4CAF50; 
    border: none; 
    color: white; 
    cursor: pointer; 
}

input[type="submit"]:hover {
    background-color: #45a049; 
}

    </style>

</head>
<body>
    <?php $getshoesID = getshoesID($pdo,$_GET['Shoes_ID']);?> 
    <h1>Are u sure you want to delete this? Click the delete button</h1>
          <h2>Shoes_Name:<?php echo $getshoesID ['name_shoes']; ?></h2>
          <h2>Brand_Shoes:<?php echo $getshoesID ['brand_shoes']; ?></h2>
          <h2>Color_Shoes:<?php echo $getshoesID ['color_shoes']; ?></h2>
          <h2>Size_Shoes:<?php echo $getshoesID ['size_shoes']; ?></h2>
          <h2>Customer:<?php echo $getshoesID ['customer']; ?></h2>
          <h2>Date added:<?php echo $getshoesID ['date_added']; ?></h2>
    <form action="core/handleforms.php?Shoes_ID=<?php  echo $_GET['Shoes_ID'];?>&Customer_ID=<?php echo $_GET['Customer_ID'];?>" method="POST">
        <input type="submit" name="deleteshoessbmt" value ="DELETE">
    </form>

</body>
</html>