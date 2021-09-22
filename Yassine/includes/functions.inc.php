<?php

function check_login($con)
{



	if (isset($_SESSION['dates'])) {

		$id = $_SESSION['dates'];
		$query = "SELECT * from reservation where dates = '$id' limit 1";

		$result = mysqli_query($con, $query);
		if ($result && mysqli_num_rows($result) > 0) {

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

/* 	//redirect to Acceuil
	header("Location: acceuil.php");
	die; */
}




// function random_num($length)
// {

// 	$text = "";
// 	if ($length < 5) {
// 		$length = 5;
// 	}

// 	$len = rand(4, $length);

// 	for ($i = 0; $i < $len; $i++) {
// 		# code...

// 		$text .= rand(0, 9);
// 	}

// 	return $text;
// }

function emptyinputsignup($prenom,$nom,$email,$mdp,$remdp)
{
	if (empty($prenom || empty($nom) || empty($email) || empty($mdp) || empty($remdp))) 
	{
		$result = true;
	}
	else
	{
		$result = false;
	}
	return  $result;
}
function invalidemail($email)
{
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	}
	else
	{
		$result = false;
	}
	return $result;
}
function pwdmatch($mdp,$remdp)
{
	if($mdp !== $remdp)
	{
		$result = true;
	}
	else
	{
		$result = false;
	}
	return $result;
}

function emailexist($con, $email)
{
	$sql = "SELECT * FROM mydb WHERE email = ?;";
	$stmt = mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location: ../php/signup.php?error=statmentfaild");
		// die("<pre>Prepare failed:\n".mysqli_error($con)."\n$sql</pre>");
		exit();
	}
	mysqli_stmt_bind_param($stmt,"s",$email);
	mysqli_stmt_execute($stmt);
	$resultData = mysqli_stmt_get_result($stmt);
	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else
	{
		$result = false;
		return $result;
	}
	mysqli_stmt_close($stmt);
}
function creatuser($con, $prenom,$nom,$email,$mdp)
{
	$sql = "INSERT INTO mydb (prenom,nom,email,mdp) VALUES (?,?,?,?);";
	$stmt = mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location: ../php/signup.php?error=statmentfaild");
	}
	$hashedpwd = password_hash($mdp, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt,"ssss",$prenom,$nom,$email,$hashedpwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../php/login.php?error=none");
}
function emptyinputlogin($email,$mdp)
{
	if ( empty($email) || empty($mdp)) 
	{
		$result = true;
	}
	else
	{
		$result = false;
	}
	return  $result;
}
function  loginuser($con,$email,$mdp)
{
	$emailexist = emailexist($con, $email);
	if($emailexist === false)
	{
		header("location: ../php/login.php?error=wrongloging");
		exit();
	}
	$pwdhashed = $emailexist["mdp"];
	$checkpwd = password_verify($mdp, $pwdhashed);

	if($checkpwd === false)
	{
		header("location: ../php/login.php?error=wrongloging");
		exit();
	}
	else if($checkpwd === true)
	{
		session_start();
		$_SESSION["Email"] = $emailexist["email"];
		$_SESSION["Id"] = $emailexist["id"];
		header("location: ../php/acceuil.php");
		exit();
	}
}
