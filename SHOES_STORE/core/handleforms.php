
<?php 
require_once 'dbconfig.php'; 
require_once 'function.php';
 require_once 'validate.php';

 if (isset($_POST['entersbmtbtn'])) {
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $gender = trim($_POST['gender']);
    $age = trim($_POST['age']);
    $emailaddress = trim($_POST['emailaddress']);
    $added_by = $_SESSION['Username']; // Get the logged-in username

    if (!empty($first_name) && !empty($last_name) && !empty($gender) && !empty($age) && !empty($emailaddress)) {
        $query = getalltheuserrecords($pdo, $first_name, $last_name, $gender, $age, $emailaddress, $added_by);
        
        if ($query) {
            header("Location: ../index.php");
            exit();
        } else {
            echo "Insertion failed";
        }
    } else {
        echo "Make sure that no fields are empty";
    }
}


if (isset($_POST['Editstudentbtn'])) {
    $Customer_ID = trim ($_GET['Customer_ID']);
	$first_name = trim($_POST['first_name']);
	$last_name = trim($_POST['last_name']);
	$gender = trim($_POST['gender']);
	$age = trim($_POST['age']);
	$emailaddress = trim($_POST['emailaddress']);
    
		$query = updateEmployee($pdo, $Customer_ID,  $first_name, $last_name, $gender, $age, $emailaddress, );

		if ($query) {
			header("Location:../index.php");
		}
		else {
			echo "Update failed";
		}

}

if (isset($_POST["Deletebtn"])){
    $query = deleteEmployee ($pdo,$_GET['Customer_ID']);
    if ($query) {
        header("Location:../index.php");
    }
    else {
        echo "Delete  failed";  
}
}

if (isset($_POST['viewsbmtbtn'])){
    $query = insertshoes ($pdo,$_POST['name_shoes'],$_POST['brand_shoes'], $_POST['size_shoes'],$_POST['color_shoes'], $_GET['Customer_ID']);
    if ($query){
        header("Location:../viewstore.php?Customer_ID=".$_GET['Customer_ID']);

    }
    else{
        echo "failed";
    }

}
if (isset($_POST['editshoesbmt'])){
    $query = updateshoes ($pdo,$_POST['name_shoes'],$_POST['brand_shoes'], $_POST['size_shoes'],$_POST['color_shoes'], $_GET['Shoes_ID']);
    if ($query){
        header("Location:../viewstore.php?Customer_ID=".$_GET['Customer_ID']);

    }
    else{
        echo "edit failed";
    }
} 
if (isset($_POST['deleteshoessbmt'])){
    $query = deleteshoes ($pdo, $_GET['Shoes_ID']);
    if ($query){
        header("Location:../viewstore.php?Customer_ID=".$_GET['Customer_ID']);

    }
    else{
        echo "delete field failed";
    }
}

if (isset($_POST['registerButton'])) {
    $Username = sanitizeInput($_POST['Username']);
    $first_name = sanitizeInput($_POST['first_name']);
    $last_name = sanitizeInput($_POST['last_name']);
    $Pass_word = $_POST['Pass_word'];
    $confirm_password = $_POST['confirm_password'];

    if (!empty($Username) && !empty($first_name) && !empty($last_name) 
        && !empty($Pass_word) && !empty($confirm_password)) {

        if ($Pass_word === $confirm_password) {

            if (validatePassword($Pass_word)) {
                $hashed_password = sha1($Pass_word);
                
                $insertQuery = insertNewUser($pdo, $Username, $first_name, $last_name, $hashed_password);

                if ($insertQuery) {
                    $_SESSION['message'] = "Registration successful! Please login.";
                    header("Location:../login.php");
                    exit();
                } else {
                    header("Location:../Register.php");
                    exit();
                }
            } else {
                $_SESSION['message'] = "Password should be more than 8 characters and should contain both uppercase, lowercase, and numbers";
                header("Location:../Register.php");
                exit();
            }
        } else {
            $_SESSION['message'] = "Please check if both passwords are equal!";
            header("Location:../Register.php");
            exit();
        }
    } else {
        $_SESSION['message'] = "Please make sure the input fields are not empty for registration!";
        header("Location:../Register.php");
        exit();
    }
}

if (isset($_POST['Loginbtn'])) {
	$Username = sanitizeInput($_POST['Username']);
	$Pass_word = sha1($_POST['Pass_word']);

	if (!empty($Username) && !empty($Pass_word)) {
        try {
            $loginQuery = loginUser($pdo, $Username, $Pass_word);
            
            if ($loginQuery) {
                header("Location:../index.php");
                exit();
            } else {
                header("Location:../login.php");
                exit();
            }
        } catch (Exception $e) {
            $_SESSION['message'] = "Database error occurred. Please try again.";
            header("Location: ../login.php");
            exit();
        }
    } else {
        $_SESSION['message'] = "Please fill in all login fields";
        header("Location:../login.php");
        exit();
    }
}
if (isset($_GET['logoutuser'])) {
	unset($_SESSION['Username']);
	header('Location:../login.php');
}

?>