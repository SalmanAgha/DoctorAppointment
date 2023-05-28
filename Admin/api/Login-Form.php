<?php


if(isset($_POST['email']) &&  isset($_POST['name']) &&     isset($_POST['pass']) )
{
	

	$email = htmlentities($_POST["email"]);  
	$name = htmlentities($_POST["name"]);  
	$Password = htmlentities($_POST["pass"]); 
	$dbemail = '';
	$dbPassword = '';


	$result = array();
	$modules = array();
	$rights = array();

	include('../../connect.php');


	$stmt = $connect -> prepare( "SELECT `adminid`, `adminname`, `email`, `password` FROM `admin` WHERE email = ? and name = ?");
	$stmt -> bind_param("ss", $email,$name);

   //Executing the statement
	$stmt->execute();

   //Binding variables to resultset
	$stmt->bind_result($result[0]["adminid"],$result[0]["adminname"],$result[0]["email"],$result[0]["password"]);
	while ($stmt->fetch()) {
		$adminid = $result[0]["adminid"];
		$Name = $result[0]["adminname"];
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
			$_SESSION['adminid'] = $adminid;
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
