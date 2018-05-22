<?php
include '../connection/db.php';


function check_email(){
	GLOBAL $db;
	if(isset($_POST['check_email'])){
		$email =$_POST['check_email'];
		$Query =$db->prepare("SELECT email FROM users WHERE email= ?");
		$Query-> execute(array($email)); //assignt this to        ? 
		if($Query-> rowCount() == 0){  //if e mail does not exist in db
			echo json_encode(array('error' => 'email_success'));
		}else{
			echo json_encode(array('error' => 'email_fail','message' =>'Sorry this email is already exist'));
		}
	}
}

check_email();

function signup_submit(){
	GLOBAL $db;
	//GET BECAUSE OF URL : ?SIGNUP = TRUE
	if(isset($_GET['signup']) && $_GET['signup']=='true'){  //if signup is true, than name is name!
		 $name		= $_POST['name'];
		 $email 	= $_POST['email'];
		 $password 	= password_hash($_POST['password'], PASSWORD_DEFAULT); //encrypt the password with password_hash method
		 $Query  	= $db->prepare("INSERT INTO users (name,email,password) VALUES (?,?,?)");
		 $Query 	->execute([$name, $email, $password]);  //this 3 will be applied to users(name,email,pass)
		 if($Query){
		 	$_SESSION['user_name'] = $name; //welcome Aykut
		 	echo json_encode(['error' => 'success', 'msg'=>'success.php']);
		 }

		 
		
	}
}

signup_submit();







?>