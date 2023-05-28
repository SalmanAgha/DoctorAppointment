
<?php
if(isset($_POST["testname"]) && isset($_POST["testid"]) && isset($_POST["price"]) )
{   

 
$testname = filter_var(($_POST["testname"])); 
$testid = filter_var(($_POST["testid"])); 
$price = filter_var(($_POST["price"])); 

   
  $result="";
  include("../../connect.php");
  if(!$connect){
    $result = "Server Connection Error";
    
  }
  else{
    $stmt = $connect->prepare("insert into Laboratory (testname,testid,price) values (?,?,?)");
    $stmt->bind_param('sss', $testname,$testid,$price); 
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