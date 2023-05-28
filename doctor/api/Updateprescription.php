
<?php


if(isset($_POST["id"]) && isset($_POST["patientid1"]) && isset($_POST["name1"]) && isset($_POST["age1"]) && isset($_POST["sex1"]) && isset($_POST["monileno1"]) && isset($_POST["address1"]) && isset($_POST["chiefcomplainte1"]) && isset($_POST["diagnosis1"]) && isset($_POST["serialno1"]) && isset($_POST["prescription1"]) && isset($_POST["dose1"]) && isset($_POST["direction1"]) && isset($_POST["duration1"]) )
{
	
 $id = filter_var(($_POST["id"])); 
 $patientid = filter_var(($_POST["patientid1"])); 
$name = filter_var(($_POST["name1"])); 
$age = filter_var(($_POST["age1"])); 
$sex = filter_var(($_POST["sex1"])); 
$monileno = filter_var(($_POST["monileno1"])); 
$address = filter_var(($_POST["address1"])); 
$chiefcomplainte = filter_var(($_POST["chiefcomplainte1"])); 
$diagnosis = filter_var(($_POST["diagnosis1"])); 
$serialno = filter_var(($_POST["serialno1"])); 
$prescription = filter_var(($_POST["prescription1"])); 
$dose = filter_var(($_POST["dose1"])); 
$direction = filter_var(($_POST["direction1"])); 
$duration = filter_var(($_POST["duration1"])); 

	include("connect.php");    
	 
 		$plot_approving="UPDATE `prescription` SET `patientid`='$patientid',`name`='$name',`age`='$age',`sex`='$sex',`monileno`='$monileno',`address`='$address',`chiefcomplainte`='$chiefcomplainte',`diagnosis`='$diagnosis',`serialno`='$serialno',`prescription`='$prescription',`dose`='$dose',`direction`='$direction',`duration`='$duration' WHERE `prescriptionid`=$id ";
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
