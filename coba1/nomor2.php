<?php
function is_username_valid($username){
	if(preg_match('/^[a-z _]{8}$/', $username)){
		return $username;
	}else{
		return "Password Does Not Meet Requirements";
	}
}

function is_password_valid($password){
	if(preg_match('/^(?=.\d)(?=.[A-Za-z])[0-9A-Za-z!@#$%]{8}$/', $password)) {
		return $password;
	}else{
		return "Password Does Not Meet Requirements";
	}
}

function validation(){
	$username = is_username_valid("isi");
	$password = is_password_valid("isi");
	echo "username : ".$username."<br>Password : ".$password;
}

validation();
?>