<?php 
class is_valid_password{
function is_valid_password($password) {
  $response = "OK";
        if(strlen($password) < 8){
            $response = "Password must be at least 8 characters";
        } else if(is_numeric($password)){
            $response = "Password must contain at least one letter";
	} else if(!preg_match('#[0-9]#', $password)){
	    $response = "Password must contain at least one number";
	}
}
}
 ?>