<?php
include("../../connect.php");
// Prepare array

$mysql_data = array();
$result="";
$message="";
if($connect)
{

    $query = mysqli_query($connect,"SELECT doctorid,name,email,mobileno,address,validmlr,speciality,experience,doc FROM `doctor`");
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
      $Action="<td><a  id=".$row["doctorid"]." data-name=".$row["name"]." data-email=".$row["email"]." data-mobileno=".$row["mobileno"]." data-address=".$row["address"]." data-validmlr=".$row["validmlr"]." data-speciality=".$row["speciality"]." data-experience=".$row["experience"]." data-doc=".$row["doc"]."  class='mr-2 edit-modal' data-toggle='modal' data-animation='bounce' data-target='.edit-modal1' ><i class='fas fa-edit text-info font-16'></i> </a>";
        $mysql_data[] = array
        (
          "Empty"     => $Action,
          "name" => $row["name"],"email" => $row["email"],"mobileno" => $row["mobileno"],"address" => $row["address"],"validmlr" => $row["validmlr"],"speciality" => $row["speciality"],"experience" => $row["experience"],"doc" => $row["doc"]
          
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