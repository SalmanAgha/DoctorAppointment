
<?php
if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) )
{   

 
$name = filter_var(($_POST["name"])); 
$email = filter_var(($_POST["email"])); 
$password = filter_var(($_POST["password"])); 

   
  $result="";
  include("../connect.php");
  if(!$connect){
    $result = "Server Connection Error";
    
  }
  else{
    $stmt = $connect->prepare("insert into user (name,email,password) values (?,?,?)");
    $stmt->bind_param('sss', $name,$email,$password); 
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