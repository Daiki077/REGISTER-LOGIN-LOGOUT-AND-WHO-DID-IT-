<?php require_once 'core/dbconfig.php' ?>
<?php require_once 'core/function.php' ?>
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
<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <h3>Register now!</h3>

        <?php if (isset($_SESSION['message'])) { ?>
            <h1 style="color: green;"><?php echo $_SESSION['message']; ?></h1>
        <?php } unset($_SESSION['message']); ?>

        <form action="core/handleForms.php" method="POST">
            <label for="Username">Username:</label>
            <input type="text" name="Username" required>
            
            <label for="first_name">First name:</label>
            <input type="text" name="first_name"  required>

            <label for="last_name">Last name</label>
            <input type="text" name="last_name"  required> 

            <label for="Pass_word">Password:</label>
            <input type="password" name="Pass_word" required> 

            <label for="confirm_password">Confirm password:</label>
            <input type="password" name="confirm_password" required>

            <input type="submit" name="registerButton" value="Register account">
        </form>
        <p>RETURN TO LOG IN IF YOU HAVE ALREADY <a href="login.php"> ACCOUNT </a></p>
    </body>
</html>