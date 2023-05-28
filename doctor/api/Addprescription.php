
<?php
if(isset($_POST["patientid"]) && isset($_POST["name"]) && isset($_POST["age"]) && isset($_POST["sex"]) && isset($_POST["monileno"]) && isset($_POST["address"]) && isset($_POST["chiefcomplainte"]) && isset($_POST["diagnosis"]) && isset($_POST["serialno"]) && isset($_POST["prescription"]) && isset($_POST["dose"]) && isset($_POST["direction"]) && isset($_POST["duration"]) )
{   

 
$patientid = filter_var(($_POST["patientid"])); 
$name = filter_var(($_POST["name"])); 
$age = filter_var(($_POST["age"])); 
$sex = filter_var(($_POST["sex"])); 
$monileno = filter_var(($_POST["monileno"])); 
$address = filter_var(($_POST["address"])); 
$chiefcomplainte = filter_var(($_POST["chiefcomplainte"])); 
$diagnosis = filter_var(($_POST["diagnosis"])); 
$serialno = filter_var(($_POST["serialno"])); 
$prescription = filter_var(($_POST["prescription"])); 
$dose = filter_var(($_POST["dose"])); 
$direction = filter_var(($_POST["direction"])); 
$duration = filter_var(($_POST["duration"])); 

   
  $result="";
  include("connect.php");
  if(!$connect){
    $result = "Server Connection Error";
    
  }
  else{
    $stmt = $connect->prepare("insert into prescription (patientid,name,age,sex,monileno,address,chiefcomplainte,diagnosis,serialno,prescription,dose,direction,duration) values (?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param('ssisisssissss', $patientid,$name,$age,$sex,$monileno,$address,$chiefcomplainte,$diagnosis,$serialno,$prescription,$dose,$direction,$duration); 
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