
<?php


if(isset($_POST["id"]) && isset($_POST["name1"]) && isset($_POST["email1"]) && isset($_POST["mobileno1"]) && isset($_POST["address1"]) && isset($_POST["validmlr1"]) && isset($_POST["speciality1"]) && isset($_POST["experience1"]) && isset($_POST["doc1"]) )
{
	
 $id = filter_var(($_POST["id"])); 
 $name = filter_var(($_POST["name1"])); 
$email = filter_var(($_POST["email1"])); 
$mobileno = filter_var(($_POST["mobileno1"])); 
$address = filter_var(($_POST["address1"])); 
$validmlr = filter_var(($_POST["validmlr1"])); 
$speciality = filter_var(($_POST["speciality1"])); 
$experience = filter_var(($_POST["experience1"])); 
$doc = filter_var(($_POST["doc1"])); 

	include("../../connect.php");    
	 
 		$plot_approving="UPDATE `doctor` SET `name`='$name',`email`='$email',`mobileno`='$mobileno',`address`='$address',`validmlr`='$validmlr',`speciality`='$speciality',`experience`='$experience',`doc`='$doc' WHERE `doctorid`=$id ";
 		$run_querry=mysqli_query($connect,$plot_approving);
		mysqli_close($connect);
						 

	if( $run_querry == "True"){
	 
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
