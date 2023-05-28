
<?php
if(isset($_POST["fullname"]) && isset($_POST["email"]) && isset($_POST["mobileno"]) && isset($_POST["address"]) && isset($_POST["age"]) && isset($_POST["sex"]) && isset($_POST["previoushistory"]) && isset($_POST["doc"]) )
{   

 
$fullname = filter_var(($_POST["fullname"])); 
$email = filter_var(($_POST["email"])); 
$mobileno = filter_var(($_POST["mobileno"])); 
$address = filter_var(($_POST["address"])); 
$age = filter_var(($_POST["age"])); 
$sex = filter_var(($_POST["sex"])); 
$previoushistory = filter_var(($_POST["previoushistory"])); 
$doc = filter_var(($_POST["doc"])); 

   
  $result="";
  include("../../connect.php");
  if(!$connect){
    $result = "Server Connection Error";
    
  }
  else{
    $stmt = $connect->prepare("insert into Patient (fullname,email,mobileno,address,age,sex,previoushistory,doc) values (?,?,?,?,?,?,?,?)");
    $stmt->bind_param('ssssssss', $fullname,$email,$mobileno,$address,$age,$sex,$previoushistory,$doc); 
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