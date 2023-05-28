<?php
include("../../connect.php");
// Prepare array

$mysql_data = array();
$result="";
$message="";
if($connect)
{

    $query = mysqli_query($connect,"SELECT Appointmentid,doc,doctorid,patientid,adminid,status,description FROM `Appointment`");
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
      $Action="<td><a  id=".$row["Appointmentid"]." data-doc=".$row["doc"]." data-doctorid=".$row["doctorid"]." data-patientid=".$row["patientid"]." data-adminid=".$row["adminid"]." data-status=".$row["status"]." data-description=".$row["description"]."  class='mr-2 edit-modal' data-toggle='modal' data-animation='bounce' data-target='.edit-modal1' ><i class='fas fa-edit text-info font-16'></i> </a>";
        $mysql_data[] = array
        (
          "Empty"     => $Action,
          "doc" => $row["doc"],"doctorid" => $row["doctorid"],"patientid" => $row["patientid"],"adminid" => $row["adminid"],"status" => $row["status"],"description" => $row["description"]
          
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