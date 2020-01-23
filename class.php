<?php 
echo "load_test";
class isvalidpassword{
function check($password) {
  $response = "OK";
        if(strlen($password) < 8){
            $response = "Password must be at least 8 characters";
    } else if(is_numeric($password)){
            $response = "Password must contain at least one letter";
	} else if(!preg_match('#[0-9]#', $password)){
	    $response = "Password must contain at least one number";
	} else if(!preg_match('@[A-Z]@', $password)){
	    $response = "Password must contain one capital letter";
	} else if(!preg_match('@[a-z]@', $password)){
	    $response = "Password must contain at least one small letter";
	} else if(!preg_match('@[^\w]@', $password)){
	    $response = "Password must contain at least one symbol";
	} else if(!preg_match('@[^\w]@', $password)){
	    $response = "Password cant be the word password";
	}
	return $response;
}
}
 ?>