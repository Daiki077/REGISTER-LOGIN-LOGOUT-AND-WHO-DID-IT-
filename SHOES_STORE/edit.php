<?php
require_once "core/function.php";
require_once "core/dbconfig.php";
?>

    </style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        h3 {
            color: #333;
            text-align: center;
        }
        form {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php $getuserid = getuserid ($pdo, $_GET['Customer_ID']);?>
    <form action="core/handleforms.php?Customer_ID=<?php echo $_GET['Customer_ID']; ?>" method = "POST" >
    <p><label for="first_name">First Name:</label><input type="text" name="first_name" value="<?php echo $getuserid['first_name']?>"></p>
    <p><label for="last_name">Last Name:</label><input type="text" name="last_name" value="<?php echo $getuserid['last_name']?>"></p>
    <p><label for="gender">Gender:</label><input type="text" name="gender"value="<?php echo $getuserid['gender']?>"></p>
    <p><label for="age">Age:</label><input type="number" name="age"value="<?php echo $getuserid['age']?>"></p>
    <p><label for="emailaddress">Email Address:</label><input type="email" name="emailaddress"value="<?php echo $getuserid['emailaddress']?>"></p>
        <input type="submit" name="Editstudentbtn">
        </form>
</body>
</html>