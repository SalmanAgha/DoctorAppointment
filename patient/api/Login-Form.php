<?php


if(isset($_POST['email']) &&     isset($_POST['pass']) )
{
	

	$email = htmlentities($_POST["email"]);  
	$Password = htmlentities($_POST["pass"]); 
	$dbemail = '';
	$dbPassword = '';


	$result = array();
	$modules = array();
	$rights = array();

	include('../connect.php');


	$stmt = $connect -> prepare( "SELECT `userid`, `name`, `email`, `password` FROM `user` WHERE email = ?");
	$stmt -> bind_param("s", $email);

   //Executing the statement
	$stmt->execute();

   //Binding variables to resultset
	$stmt->bind_result($result[0]["userid"],$result[0]["name"],$result[0]["email"],$result[0]["password"]);
	while ($stmt->fetch()) {
		$userid = $result[0]["userid"];
		$Name = $result[0]["name"];
		$dbemail = $result[0]["email"];
		$dbPassword = $result[0]["password"];

	}


	if($dbemail == NULL)
	{
		mysqli_close($connect);
		$data["result"] = "norecord";
		echo json_encode($data);
	}	

	else if(strtoupper($dbemail) == strtoupper($email) &&  $dbPassword == $Password )
	{	
 
			session_start();
			$_SESSION['userid'] = $userid;
			$_SESSION['username'] = $Name;
			$_SESSION['email'] = $dbemail; 
 
			mysqli_close($connect);
			$data["username"] = $Name;
			$data["result"] = "successful";
			echo json_encode($data);
 

	}	
	else {
		mysqli_close($connect);
		$data["result"] = "incorrect";
		echo json_encode($data);
	}															

}

?>
