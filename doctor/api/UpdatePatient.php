
<?php


if(isset($_POST["id"]) && isset($_POST["fullname1"]) && isset($_POST["email1"]) && isset($_POST["mobileno1"]) && isset($_POST["address1"]) && isset($_POST["age1"]) && isset($_POST["sex1"]) && isset($_POST["previoushistory1"]) && isset($_POST["doc1"]) )
{
	
	$id = filter_var(($_POST["id"])); 
	$fullname = filter_var(($_POST["fullname1"])); 
	$email = filter_var(($_POST["email1"])); 
	$mobileno = filter_var(($_POST["mobileno1"])); 
	$address = filter_var(($_POST["address1"])); 
	$age = filter_var(($_POST["age1"])); 
	$sex = filter_var(($_POST["sex1"])); 
	$previoushistory = filter_var(($_POST["previoushistory1"])); 
	$doc = filter_var(($_POST["doc1"])); 

	include("../connect.php");    

	$plot_approving="UPDATE `Patient` SET `fullname`='$fullname',`email`='$email',`mobileno`='$mobileno',`address`='$address',`age`='$age',`sex`='$sex',`previoushistory`='$previoushistory',`doc`='$doc' WHERE `Patientid`=$id ";
	$run_querry=mysqli_query($connect,$plot_approving);
	mysqli_close($connect);


	if( $run_querry == "True"){

		session_start();
		$_SESSION['Patientid'] = $id;
		$_SESSION['fullname1'] = $fullname;
		$_SESSION['age1'] = $age; 
		$_SESSION['sex1'] = $sex; 

		$data["result"] = "Done";
		echo json_encode($data);
	}
	else
	{

		$data["result"] = "error";
		echo json_encode($data);


	}


}

?>
