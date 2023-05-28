
<?php


if(isset($_POST["id"]) && isset($_POST["name1"]) && isset($_POST["email1"]) && isset($_POST["password1"]) )
{
	
 $id = filter_var(($_POST["id"])); 
 $name = filter_var(($_POST["name1"])); 
$email = filter_var(($_POST["email1"])); 
$password = filter_var(($_POST["password1"])); 

	include("../connect.php");    
	 
 		$plot_approving="UPDATE `user` SET `name`='$name',`email`='$email',`password`='$password' WHERE `userid`=$id ";
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
