<?php
include("../../connect.php");
// Prepare array

$mysql_data = array();
$result="";
$message="";
if($connect)
{

    $query = mysqli_query($connect,"SELECT Laboratoryid,testname,testid,price FROM `Laboratory`");
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
      $Action="<td><a  id=".$row["Laboratoryid"]." data-testname=".$row["testname"]." data-testid=".$row["testid"]." data-price=".$row["price"]."  class='mr-2 edit-modal' data-toggle='modal' data-animation='bounce' data-target='.edit-modal1' ><i class='fas fa-edit text-info font-16'></i> </a>";
        $mysql_data[] = array
        (
          "Empty"     => $Action,
          "testname" => $row["testname"],"testid" => $row["testid"],"price" => $row["price"]
          
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