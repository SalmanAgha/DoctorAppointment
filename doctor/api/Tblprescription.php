<?php
include("connect.php");
// Prepare array

$mysql_data = array();
$result="";
$message="";
if($connect)
{

    $query = mysqli_query($connect,"SELECT prescriptionid,patientid,name,age,sex,monileno,address,chiefcomplainte,diagnosis,serialno,prescription,dose,direction,duration FROM `prescription`");
    if (!$query
  )  {


      $result  = "error";
      $message = "query error";
    }
    else
    {
      $result  = "success";
      $message = "query success";
      $empty="";
      while ($row = mysqli_fetch_array($query))
      {
      $Action="<td><a  id=".$row["prescriptionid"]." data-patientid=".$row["patientid"]." data-name=".$row["name"]." data-age=".$row["age"]." data-sex=".$row["sex"]." data-monileno=".$row["monileno"]." data-address=".$row["address"]." data-chiefcomplainte=".$row["chiefcomplainte"]." data-diagnosis=".$row["diagnosis"]." data-serialno=".$row["serialno"]." data-prescription=".$row["prescription"]." data-dose=".$row["dose"]." data-direction=".$row["direction"]." data-duration=".$row["duration"]."  class='mr-2 edit-modal' data-toggle='modal' data-animation='bounce' data-target='.edit-modal1' ><i class='fas fa-edit text-info font-16'></i> </a>";
        $mysql_data[] = array
        (
          "Empty"     => $Action,
          "patientid" => $row["patientid"],"name" => $row["name"],"age" => $row["age"],"sex" => $row["sex"],"monileno" => $row["monileno"],"address" => $row["address"],"chiefcomplainte" => $row["chiefcomplainte"],"diagnosis" => $row["diagnosis"],"serialno" => $row["serialno"],"prescription" => $row["prescription"],"dose" => $row["dose"],"direction" => $row["direction"],"duration" => $row["duration"]
          
        );
      }
    }
  // Close database connection
  mysqli_close($connect);
}
// Prepare data
$data = array(
  "result"  => $result,
  "message" => $message,
  "data"    => $mysql_data
);
// Convert PHP array to JSON array
$json_data = json_encode($data);
print $json_data;
?>