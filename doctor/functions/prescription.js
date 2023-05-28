

function tblprescription(){
 
   $("#datatable").DataTable({
        "ajax": "api/Tblprescription.php",
        "columns": [
         { "data": "Empty"},
           { "data": "patientid"} ,{ "data": "name"} ,{ "data": "age"} ,{ "data": "sex"} ,{ "data": "monileno"} ,{ "data": "address"} ,{ "data": "chiefcomplainte"} ,{ "data": "diagnosis"} ,{ "data": "serialno"} ,{ "data": "prescription"} ,{ "data": "dose"} ,{ "data": "direction"} ,{ "data": "duration"} 
          
        ],
      });

}


$(document).ready(function()
    {

 tblprescription(); 

$(document).on("click", ".edit-modal", function(){

       
         $("#id2").val($(this).attr("id"));$("#patientid1").val($(this).data("patientid"));$("#name1").val($(this).data("name"));$("#age1").val($(this).data("age"));$("#sex1").val($(this).data("sex"));$("#monileno1").val($(this).data("monileno"));$("#address1").val($(this).data("address"));$("#chiefcomplainte1").val($(this).data("chiefcomplainte"));$("#diagnosis1").val($(this).data("diagnosis"));$("#serialno1").val($(this).data("serialno"));$("#prescription1").val($(this).data("prescription"));$("#dose1").val($(this).data("dose"));$("#direction1").val($(this).data("direction"));$("#duration1").val($(this).data("duration"));
     
      });



 });


function Addprescription(){
 
var patientid = $("#patientid").val(); 

 var name = $("#name").val(); 

 var age = $("#age").val(); 

 var sex = $("#sex").val(); 

 var monileno = $("#monileno").val(); 

 var address = $("#address").val(); 

 var chiefcomplainte = $("#chiefcomplainte").val(); 

 var diagnosis = $("#diagnosis").val(); 

 var serialno = $("#serialno").val(); 

 var prescription = $("#prescription").val(); 

 var dose = $("#dose").val(); 

 var direction = $("#direction").val(); 

 var duration = $("#duration").val(); 

 
    
  if(patientid == "" ){

     $("#1v").css("display", "block");
      $("#1v").text("Invalid patientid."); 
         $("#patientid").css("border-color", "red");
         $("#patientid").focus();
        

    } else if(name == "" ){

     $("#2v").css("display", "block");
      $("#2v").text("Invalid name."); 
         $("#name").css("border-color", "red");
         $("#name").focus();
        

    } else if(age == "" ){

     $("#3v").css("display", "block");
      $("#3v").text("Invalid age."); 
         $("#age").css("border-color", "red");
         $("#age").focus();
        

    } else if(sex == "" ){

     $("#4v").css("display", "block");
      $("#4v").text("Invalid sex."); 
         $("#sex").css("border-color", "red");
         $("#sex").focus();
        

    } else if(monileno == "" ){

     $("#5v").css("display", "block");
      $("#5v").text("Invalid monileno."); 
         $("#monileno").css("border-color", "red");
         $("#monileno").focus();
        

    } else if(address == "" ){

     $("#6v").css("display", "block");
      $("#6v").text("Invalid address."); 
         $("#address").css("border-color", "red");
         $("#address").focus();
        

    } else if(chiefcomplainte == "" ){

     $("#7v").css("display", "block");
      $("#7v").text("Invalid chiefcomplainte."); 
         $("#chiefcomplainte").css("border-color", "red");
         $("#chiefcomplainte").focus();
        

    } else if(diagnosis == "" ){

     $("#8v").css("display", "block");
      $("#8v").text("Invalid diagnosis."); 
         $("#diagnosis").css("border-color", "red");
         $("#diagnosis").focus();
        

    } else if(serialno == "" ){

     $("#9v").css("display", "block");
      $("#9v").text("Invalid serialno."); 
         $("#serialno").css("border-color", "red");
         $("#serialno").focus();
        

    } else if(prescription == "" ){

     $("#10v").css("display", "block");
      $("#10v").text("Invalid prescription."); 
         $("#prescription").css("border-color", "red");
         $("#prescription").focus();
        

    } else if(dose == "" ){

     $("#11v").css("display", "block");
      $("#11v").text("Invalid dose."); 
         $("#dose").css("border-color", "red");
         $("#dose").focus();
        

    } else if(direction == "" ){

     $("#12v").css("display", "block");
      $("#12v").text("Invalid direction."); 
         $("#direction").css("border-color", "red");
         $("#direction").focus();
        

    } else if(duration == "" ){

     $("#13v").css("display", "block");
      $("#13v").text("Invalid duration."); 
         $("#duration").css("border-color", "red");
         $("#duration").focus();
        

    }
    else 
    {   

 
         Swal.fire({
  title: "Are you sure?",
  text: "You want to add New prescription!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
    $.ajax( {
            url: "api/Addprescription.php",
            method: "POST",
            data: {
 
                patientid:patientid,name:name,age:age,sex:sex,monileno:monileno,address:address,chiefcomplainte:chiefcomplainte,diagnosis:diagnosis,serialno:serialno,prescription:prescription,dose:dose,direction:direction,duration:duration
               
              
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result;
                if ( result == "Inserted" )
                {
                       Swal.fire({
            title: "prescription Added Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 


 $("#btncancel").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblprescription();
                } 
                else 
                { 
                    Swal.fire({
            title: "Opps! Some Error Occured!",
            type: "error",
            text: "Please login first",
             timer: 4000,
            showConfirmButton: true,
          }).then(function () {
            window.location.href = "index.php";
          });
                }
                return data;
            }
        });

  } })
        
    }
}




function Updateprescription() {

  var id = $("#id2").val();

var patientid1 = $("#patientid1").val(); 

 var name1 = $("#name1").val(); 

 var age1 = $("#age1").val(); 

 var sex1 = $("#sex1").val(); 

 var monileno1 = $("#monileno1").val(); 

 var address1 = $("#address1").val(); 

 var chiefcomplainte1 = $("#chiefcomplainte1").val(); 

 var diagnosis1 = $("#diagnosis1").val(); 

 var serialno1 = $("#serialno1").val(); 

 var prescription1 = $("#prescription1").val(); 

 var dose1 = $("#dose1").val(); 

 var direction1 = $("#direction1").val(); 

 var duration1 = $("#duration1").val(); 

 
    
  if(patientid1 == "" ){

     $("#1v1").css("display", "block");
      $("#1v1").text("Invalid patientid."); 
         $("#patientid1").css("border-color", "red");
         $("#patientid1").focus();
        

    } else if(name1 == "" ){

     $("#2v1").css("display", "block");
      $("#2v1").text("Invalid name."); 
         $("#name1").css("border-color", "red");
         $("#name1").focus();
        

    } else if(age1 == "" ){

     $("#3v1").css("display", "block");
      $("#3v1").text("Invalid age."); 
         $("#age1").css("border-color", "red");
         $("#age1").focus();
        

    } else if(sex1 == "" ){

     $("#4v1").css("display", "block");
      $("#4v1").text("Invalid sex."); 
         $("#sex1").css("border-color", "red");
         $("#sex1").focus();
        

    } else if(monileno1 == "" ){

     $("#5v1").css("display", "block");
      $("#5v1").text("Invalid monileno."); 
         $("#monileno1").css("border-color", "red");
         $("#monileno1").focus();
        

    } else if(address1 == "" ){

     $("#6v1").css("display", "block");
      $("#6v1").text("Invalid address."); 
         $("#address1").css("border-color", "red");
         $("#address1").focus();
        

    } else if(chiefcomplainte1 == "" ){

     $("#7v1").css("display", "block");
      $("#7v1").text("Invalid chiefcomplainte."); 
         $("#chiefcomplainte1").css("border-color", "red");
         $("#chiefcomplainte1").focus();
        

    } else if(diagnosis1 == "" ){

     $("#8v1").css("display", "block");
      $("#8v1").text("Invalid diagnosis."); 
         $("#diagnosis1").css("border-color", "red");
         $("#diagnosis1").focus();
        

    } else if(serialno1 == "" ){

     $("#9v1").css("display", "block");
      $("#9v1").text("Invalid serialno."); 
         $("#serialno1").css("border-color", "red");
         $("#serialno1").focus();
        

    } else if(prescription1 == "" ){

     $("#10v1").css("display", "block");
      $("#10v1").text("Invalid prescription."); 
         $("#prescription1").css("border-color", "red");
         $("#prescription1").focus();
        

    } else if(dose1 == "" ){

     $("#11v1").css("display", "block");
      $("#11v1").text("Invalid dose."); 
         $("#dose1").css("border-color", "red");
         $("#dose1").focus();
        

    } else if(direction1 == "" ){

     $("#12v1").css("display", "block");
      $("#12v1").text("Invalid direction."); 
         $("#direction1").css("border-color", "red");
         $("#direction1").focus();
        

    } else if(duration1 == "" ){

     $("#13v1").css("display", "block");
      $("#13v1").text("Invalid duration."); 
         $("#duration1").css("border-color", "red");
         $("#duration1").focus();
        

    }
    else 
    { 
 
        Swal.fire({
  title: "Are you sure?",
  text: "You want to update this prescription!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
        $.ajax( {
            url: "api/Updateprescription.php",
            method: "POST",
            data: {id:id,
                 patientid1:patientid1,name1:name1,age1:age1,sex1:sex1,monileno1:monileno1,address1:address1,chiefcomplainte1:chiefcomplainte1,diagnosis1:diagnosis1,serialno1:serialno1,prescription1:prescription1,dose1:dose1,direction1:direction1,duration1:duration1
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result; 
                if ( result == "Done" )
                { 
                      Swal.fire({
            title: "prescription Updated Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 

$("#btncancel1").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblprescription();

                } 
                else 
                { 
                    Swal.fire({
            title: "Opps! Some Error Occured!",
            type: "error",
            text: "Please login first",
             timer: 4000,
            showConfirmButton: true,
          }).then(function () {
            window.location.href = "Home.php";
          });
                }
                return data;
            }
        });
          } })
    }
}




