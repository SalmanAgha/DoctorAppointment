

function tblAppointment(){
 
   $("#datatable").DataTable({
        "ajax": "api/TblAppointment.php",
        "columns": [
         { "data": "Empty"},
           { "data": "doc"} ,{ "data": "doctorid"} ,{ "data": "patientid"} ,{ "data": "adminid"} ,{ "data": "status"} ,{ "data": "description"} 
          
        ],
      });

}


$(document).ready(function()
    {

 tblAppointment(); 

$(document).on("click", ".edit-modal", function(){

       
         $("#id2").val($(this).attr("id"));$("#doc1").val($(this).data("doc"));$("#doctorid1").val($(this).data("doctorid"));$("#patientid1").val($(this).data("patientid"));$("#adminid1").val($(this).data("adminid"));$("#status1").val($(this).data("status"));$("#description1").val($(this).data("description"));
     
      });



 });


function AddAppointment(){
 
var doc = $("#doc").val(); 

 var doctorid = $("#doctorid").val(); 

 var patientid = $("#patientid").val(); 

 var adminid = $("#adminid").val(); 

 var status = $("#status").val(); 

 var description = $("#description").val(); 

 
    
  if(doc == "" ){

     $("#1v").css("display", "block");
      $("#1v").text("Invalid doc."); 
         $("#doc").css("border-color", "red");
         $("#doc").focus();
        

    } else if(doctorid == "" ){

     $("#2v").css("display", "block");
      $("#2v").text("Invalid doctorid."); 
         $("#doctorid").css("border-color", "red");
         $("#doctorid").focus();
        

    } else if(patientid == "" ){

     $("#3v").css("display", "block");
      $("#3v").text("Invalid patientid."); 
         $("#patientid").css("border-color", "red");
         $("#patientid").focus();
        

    } else if(adminid == "" ){

     $("#4v").css("display", "block");
      $("#4v").text("Invalid adminid."); 
         $("#adminid").css("border-color", "red");
         $("#adminid").focus();
        

    } else if(status == "" ){

     $("#5v").css("display", "block");
      $("#5v").text("Invalid status."); 
         $("#status").css("border-color", "red");
         $("#status").focus();
        

    } else if(description == "" ){

     $("#6v").css("display", "block");
      $("#6v").text("Invalid description."); 
         $("#description").css("border-color", "red");
         $("#description").focus();
        

    }
    else 
    {   

 
         Swal.fire({
  title: "Are you sure?",
  text: "You want to add New Appointment!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
    $.ajax( {
            url: "api/AddAppointment.php",
            method: "POST",
            data: {
 
                doc:doc,doctorid:doctorid,patientid:patientid,adminid:adminid,status:status,description:description
               
              
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result;
                if ( result == "Inserted" )
                {
                       Swal.fire({
            title: "Appointment Added Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 


 $("#btncancel").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblAppointment();
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




function UpdateAppointment() {

  var id = $("#id2").val();

var doc1 = $("#doc1").val(); 

 var doctorid1 = $("#doctorid1").val(); 

 var patientid1 = $("#patientid1").val(); 

 var adminid1 = $("#adminid1").val(); 

 var status1 = $("#status1").val(); 

 var description1 = $("#description1").val(); 

 
    
  if(doc1 == "" ){

     $("#1v1").css("display", "block");
      $("#1v1").text("Invalid doc."); 
         $("#doc1").css("border-color", "red");
         $("#doc1").focus();
        

    } else if(doctorid1 == "" ){

     $("#2v1").css("display", "block");
      $("#2v1").text("Invalid doctorid."); 
         $("#doctorid1").css("border-color", "red");
         $("#doctorid1").focus();
        

    } else if(patientid1 == "" ){

     $("#3v1").css("display", "block");
      $("#3v1").text("Invalid patientid."); 
         $("#patientid1").css("border-color", "red");
         $("#patientid1").focus();
        

    } else if(adminid1 == "" ){

     $("#4v1").css("display", "block");
      $("#4v1").text("Invalid adminid."); 
         $("#adminid1").css("border-color", "red");
         $("#adminid1").focus();
        

    } else if(status1 == "" ){

     $("#5v1").css("display", "block");
      $("#5v1").text("Invalid status."); 
         $("#status1").css("border-color", "red");
         $("#status1").focus();
        

    } else if(description1 == "" ){

     $("#6v1").css("display", "block");
      $("#6v1").text("Invalid description."); 
         $("#description1").css("border-color", "red");
         $("#description1").focus();
        

    }
    else 
    { 
 
        Swal.fire({
  title: "Are you sure?",
  text: "You want to update this Appointment!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
        $.ajax( {
            url: "api/UpdateAppointment.php",
            method: "POST",
            data: {id:id,
                 doc1:doc1,doctorid1:doctorid1,patientid1:patientid1,adminid1:adminid1,status1:status1,description1:description1
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result; 
                if ( result == "Done" )
                { 
                      Swal.fire({
            title: "Appointment Updated Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 

$("#btncancel1").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblAppointment();

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




