<?php
include("../../connect.php");
// Prepare array

$mysql_data = array();
$result="";
$message="";
if($connect)
{

    $query = mysqli_query($connect,"SELECT Patientid,fullname,email,mobileno,address,age,sex,previoushistory,doc FROM `Patient`");
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
      $Action="<td><a  id=".$row["Patientid"]." data-fullname=".$row["fullname"]." data-email=".$row["email"]." data-mobileno=".$row["mobileno"]." data-address=".$row["address"]." data-age=".$row["age"]." data-sex=".$row["sex"]." data-previoushistory=".$row["previoushistory"]." data-doc=".$row["doc"]."  class='mr-2 edit-modal' data-toggle='modal' data-animation='bounce' data-target='.edit-modal1' ><i class='fas fa-edit text-info font-16'></i> </a>";
        $mysql_data[] = array
        (
          "Empty"     => $Action,
          "fullname" => $row["fullname"],"email" => $row["email"],"mobileno" => $row["mobileno"],"address" => $row["address"],"age" => $row["age"],"sex" => $row["sex"],"previoushistory" => $row["previoushistory"],"doc" => $row["doc"]
          
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