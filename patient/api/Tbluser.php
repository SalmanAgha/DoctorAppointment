<?php
include("../connect.php");
// Prepare array

$mysql_data = array();
$result="";
$message="";
if($connect)
{

    $query = mysqli_query($connect,"SELECT userid,name,email,password FROM `user`");
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
      $Action="<td><a  id=".$row["userid"]." data-name=".$row["name"]." data-email=".$row["email"]." data-password=".$row["password"]."  class='mr-2 edit-modal' data-toggle='modal' data-animation='bounce' data-target='.edit-modal1' ><i class='fas fa-edit text-info font-16'></i> </a>";
        $mysql_data[] = array
        (
          "Empty"     => $Action,
          "name" => $row["name"],"email" => $row["email"],"password" => $row["password"]
          
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