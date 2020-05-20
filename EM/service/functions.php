<?php

	require('db.php');

	function validate($username, $password){

		$con = getConnection();
		$sql = "select * from employee  where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}


	function getAllUsers(){
		$con = getConnection();
		$sql = "select * from employee";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	
	function  getALLprojects(){ 
		$con = getConnection();
		$sql = "SELECT * FROM projects";
		$result = mysqli_query($con, $sql);
		return $result;
	}

function  getALLsalary(){ 
		$con = getConnection();
		$sql = "SELECT * FROM salary";
		$result = mysqli_query($con, $sql);
		return $result;
	}



	
    function  getEmployee(){ 
		$con = getConnection();
		$sql = "SELECT * from employee join login WHERE employee.eid=login.eid";
		$result = mysqli_query($con, $sql);
		return $result;
	}


	function deleteUser($id){
		$con = getConnection();
		$sql = "DELETE FROM employee WHERE eid = $id";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function deleteprojects($id){
		$con = getConnection();
		$sql = "DELETE FROM projects WHERE projectid = $id";
		$result = mysqli_query($con, $sql);
		return $result;
	}
	function deletesalary($id){
		$con = getConnection();
		$sql = "DELETE FROM salary WHERE eid = $id";
		$result = mysqli_query($con, $sql);
		return $result;
	}


	function getUserDataById($id){
		$con = getConnection();
		$sql = "SELECT * from employee WHERE eid = $id";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}

	function updateUserData($sql){
		$con = getConnection();
		$result = mysqli_query($con, $sql);

		return $result;
	}

	function updateUserData1($username, $password, $email, $type){
		$con = getConnection();
		$sql ="UPDATE users SET username='{$username}', password='{$password}', email='{$email}', type='{$type}' WHERE id='{$GLOBALS['id']}'";
		$result = mysqli_query($con, $sql);

		return $result;
	}

	
	
?>
