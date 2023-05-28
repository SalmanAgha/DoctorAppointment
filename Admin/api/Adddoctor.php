
<?php
if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["mobileno"]) && isset($_POST["address"]) && isset($_POST["validmlr"]) && isset($_POST["speciality"]) && isset($_POST["experience"]) && isset($_POST["doc"]) )
{   

 
$name = filter_var(($_POST["name"])); 
$email = filter_var(($_POST["email"])); 
$mobileno = filter_var(($_POST["mobileno"])); 
$address = filter_var(($_POST["address"])); 
$validmlr = filter_var(($_POST["validmlr"])); 
$speciality = filter_var(($_POST["speciality"])); 
$experience = filter_var(($_POST["experience"])); 
$doc = filter_var(($_POST["doc"])); 

   
  $result="";
  include("../../connect.php");
  if(!$connect){
    $result = "Server Connection Error";
    
  }
  else{
    $stmt = $connect->prepare("insert into doctor (name,email,mobileno,address,validmlr,speciality,experience,doc) values (?,?,?,?,?,?,?,?)");
    $stmt->bind_param('ssssssss', $name,$email,$mobileno,$address,$validmlr,$speciality,$experience,$doc); 
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