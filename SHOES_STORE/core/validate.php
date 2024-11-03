
<?php  

function validatePassword($Pass_word) {

	if (strlen($Pass_word) > 8) {
		$hasLower = false;
		$hasUpper = false;
		$hasNumber = false;

	    for ($i = 0; $i < strlen($Pass_word); $i++) {

	    	if (ctype_lower($Pass_word[$i])) {
	    		$hasLower = true; 
	        } 

	        elseif (ctype_upper($Pass_word[$i])) {
	            $hasUpper = true; 
	        } 

	        elseif (ctype_digit($Pass_word[$i])) {
	            $hasNumber = true;
	        }

	        if ($hasLower && $hasUpper && $hasNumber) {
	            return true; 
	        }
	    }
	}

	else {
		return false; 
	}
}

function sanitizeInput($data) {

  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}

?>
