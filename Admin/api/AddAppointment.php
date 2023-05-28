
<?php
if(isset($_POST["doc"]) && isset($_POST["doctorid"]) && isset($_POST["patientid"]) && isset($_POST["adminid"]) && isset($_POST["status"]) && isset($_POST["description"]) )
{   

 
$doc = filter_var(($_POST["doc"])); 
$doctorid = filter_var(($_POST["doctorid"])); 
$patientid = filter_var(($_POST["patientid"])); 
$adminid = filter_var(($_POST["adminid"])); 
$status = filter_var(($_POST["status"])); 
$description = filter_var(($_POST["description"])); 

   
  $result="";
  include("../../connect.php");
  if(!$connect){
    $result = "Server Connection Error";
    
  }
  else{
    $stmt = $connect->prepare("insert into Appointment (doc,doctorid,patientid,adminid,status,description) values (?,?,?,?,?,?)");
    $stmt->bind_param('ssssss', $doc,$doctorid,$patientid,$adminid,$status,$description); 
    $stmt->execute();
    if ($stmt == true) 
    {
      $result="Inserted";
    }
    else{
      $result="Not Inserted";
    }
  
  }
  
   


  $data ["result"] = $result;
    echo json_encode($data);

}
?>