<?php
require_once "core/function.php";
require_once "core/dbconfig.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOES</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #f4f4f4;
            padding: 20px;
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

        th, td {
            padding: 10px;
            border: 1px solid #333;
            text-align: center;
        }

        th {
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
        }

        a:hover {
            color: #4CAF50;
        }

        input[type="text"], input[type="number"], input[type="submit"] {
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
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <a href="index.php">Return to main</a>
    <?php 
    $getuserid = getuserid($pdo, $_GET['Customer_ID']); 
    ?>
    <h1>WELCOME <?php echo $getuserid['first_name']; ?></h1>
    <h3>FILL UP THE SHOES  THAT YOU WANT</h3>
    
    <form action="core/handleforms.php?Customer_ID=<?php echo $_GET['Customer_ID']; ?>" method="POST">
        <p><label for="name_shoes">Shoes name:</label><input type="text" name="name_shoes"></p>
        <p><label for="brand_shoes">Brand shoes:</label><input type="text" name="brand_shoes"></p>
        <p><label for="size_shoes">Size shoes:</label><input type="number" name="size_shoes"></p>
        <p><label for="color_shoes">Color shoes:</label><input type="text" name="color_shoes"></p>
        <input type="submit" name="viewsbmtbtn" value="Submit">
    </form>
<table>
        <tr>
            <th>Shoes_ID</th>
            <th>Shoes name</th>
            <th>Brand shoes</th>
            <th>Size shoes</th>
            <th>Color shoes</th>
            <th>Customer</th>
            <th>Time/Date</th>
            <th>edit/delete</th>
        </tr>
        <?php 
        $getshoess = getshoes($pdo, $_GET['Customer_ID']); 
        foreach ($getshoess as $row) { 
        ?>
        <tr>
            <td><?php echo $row['Shoes_ID']; ?></td>
            <td><?php echo $row['name_shoes']; ?></td>
            <td><?php echo $row['brand_shoes']; ?></td>
            <td><?php echo $row['size_shoes']; ?></td>
            <td><?php echo $row['color_shoes']; ?></td>
            <td><?php echo $row['customer']; ?></td>
            <td><?php echo $row['date_added']; ?></td>
            <td>
                <a href="editshoes.php?Shoes_ID=<?php echo $row['Shoes_ID']; ?>&Customer_ID=<?php echo $_GET['Customer_ID']; ?>">Edit</a>
                <a href="deleteshoes.php?Shoes_ID=<?php echo $row['Shoes_ID']; ?>&Customer_ID=<?php echo $_GET['Customer_ID']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>

        </tr>
</table>
</body>
</html>
