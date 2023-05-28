
<?php


if(isset($_POST["id"]) && isset($_POST["doc1"]) && isset($_POST["doctorid1"]) && isset($_POST["patientid1"]) && isset($_POST["adminid1"]) && isset($_POST["status1"]) && isset($_POST["description1"]) )
{
	
 $id = filter_var(($_POST["id"])); 
 $doc = filter_var(($_POST["doc1"])); 
$doctorid = filter_var(($_POST["doctorid1"])); 
$patientid = filter_var(($_POST["patientid1"])); 
$adminid = filter_var(($_POST["adminid1"])); 
$status = filter_var(($_POST["status1"])); 
$description = filter_var(($_POST["description1"])); 

	include("../../connect.php");    
	 
 		$plot_approving="UPDATE `Appointment` SET `doc`='$doc',`doctorid`='$doctorid',`patientid`='$patientid',`adminid`='$adminid',`status`='$status',`description`='$description' WHERE `Appointmentid`=$id ";
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
