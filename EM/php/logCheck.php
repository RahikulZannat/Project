<?php
	session_start();

		$uname = $_POST['uname'];
		$password =  $_POST['password'];


include('../service/functions.php');

	//if( isset($_REQUEST['submit'])){
	//	$uname = $_REQUEST['uname'];
	//	$password =  $_REQUEST['password'];


		if(empty(trim($uname)) || empty(trim($password))){
			echo "Null submission found!";
		}

		else{

	    	$user = validate($uname, $password);

				if(count($user) > 0 ){
				$_SESSION['uname'] = $uname;
				$_SESSION['pass'] = $password;

				header("location: ../views/Admininterface.php");
			}else{
				echo "invalid uname/password";
			}
		}

	//}
?>
