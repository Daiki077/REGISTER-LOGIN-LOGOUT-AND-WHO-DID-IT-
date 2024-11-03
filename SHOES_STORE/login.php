<?php  
require_once 'core/function.php'; 
require_once 'core/handleforms.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in </title>
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

input[type="text"],
input[type="password"],
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
    <h3>LOG IN FIRST</h3>
    <form action="core/handleforms.php"method= "POST">
        <P>
            <label for="Username">Username</label>
            <input type="text" name = "Username">
        </P>
        <P>
            <label for="Pass_word">Password</label>
            <input type="password" name = "Pass_word">
            <input type="submit" name = "Loginbtn">
        </P>
    </form>
    <p>IF YOU DO NOT HAVE ACCOUNT REGISTER <a href="Register.php"> HERE </a></p>
</body>
</html>