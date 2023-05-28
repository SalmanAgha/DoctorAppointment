
<?php


if(isset($_POST["id"]) && isset($_POST["testname1"]) && isset($_POST["testid1"]) && isset($_POST["price1"]) )
{
	
 $id = filter_var(($_POST["id"])); 
 $testname = filter_var(($_POST["testname1"])); 
$testid = filter_var(($_POST["testid1"])); 
$price = filter_var(($_POST["price1"])); 

	include("../../connect.php");    
	 
 		$plot_approving="UPDATE `Laboratory` SET `testname`='$testname',`testid`='$testid',`price`='$price' WHERE `Laboratoryid`=$id ";
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
