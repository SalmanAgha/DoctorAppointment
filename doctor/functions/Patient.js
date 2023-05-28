

function tblPatient(){
 
   $("#datatable").DataTable({
        "ajax": "api/TblPatient.php",
        "columns": [
         { "data": "Empty"},
           { "data": "fullname"} ,{ "data": "email"} ,{ "data": "mobileno"} ,{ "data": "address"} ,{ "data": "age"} ,{ "data": "sex"} ,{ "data": "previoushistory"} ,{ "data": "doc"} 
          
        ],
      });

}


$(document).ready(function()
    {

 tblPatient(); 

$(document).on("click", ".edit-modal", function(){

       
         $("#id2").val($(this).attr("id"));$("#fullname1").val($(this).data("fullname"));$("#email1").val($(this).data("email"));$("#mobileno1").val($(this).data("mobileno"));$("#address1").val($(this).data("address"));$("#age1").val($(this).data("age"));$("#sex1").val($(this).data("sex"));$("#previoushistory1").val($(this).data("previoushistory"));$("#doc1").val($(this).data("doc"));
     
      });



 });


function AddPatient(){
 
var fullname = $("#fullname").val(); 

 var email = $("#email").val(); 

 var mobileno = $("#mobileno").val(); 

 var address = $("#address").val(); 

 var age = $("#age").val(); 

 var sex = $("#sex").val(); 

 var previoushistory = $("#previoushistory").val(); 

 var doc = $("#doc").val(); 

 
    
  if(fullname == "" ){

     $("#1v").css("display", "block");
      $("#1v").text("Invalid fullname."); 
         $("#fullname").css("border-color", "red");
         $("#fullname").focus();
        

    } else if(email == "" ){

     $("#2v").css("display", "block");
      $("#2v").text("Invalid email."); 
         $("#email").css("border-color", "red");
         $("#email").focus();
        

    } else if(mobileno == "" ){

     $("#3v").css("display", "block");
      $("#3v").text("Invalid mobileno."); 
         $("#mobileno").css("border-color", "red");
         $("#mobileno").focus();
        

    } else if(address == "" ){

     $("#4v").css("display", "block");
      $("#4v").text("Invalid address."); 
         $("#address").css("border-color", "red");
         $("#address").focus();
        

    } else if(age == "" ){

     $("#5v").css("display", "block");
      $("#5v").text("Invalid age."); 
         $("#age").css("border-color", "red");
         $("#age").focus();
        

    } else if(sex == "" ){

     $("#6v").css("display", "block");
      $("#6v").text("Invalid sex."); 
         $("#sex").css("border-color", "red");
         $("#sex").focus();
        

    } else if(previoushistory == "" ){

     $("#7v").css("display", "block");
      $("#7v").text("Invalid previoushistory."); 
         $("#previoushistory").css("border-color", "red");
         $("#previoushistory").focus();
        

    } else if(doc == "" ){

     $("#8v").css("display", "block");
      $("#8v").text("Invalid doc."); 
         $("#doc").css("border-color", "red");
         $("#doc").focus();
        

    }
    else 
    {   

 
         Swal.fire({
  title: "Are you sure?",
  text: "You want to add New Patient!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
    $.ajax( {
            url: "api/AddPatient.php",
            method: "POST",
            data: {
 
                fullname:fullname,email:email,mobileno:mobileno,address:address,age:age,sex:sex,previoushistory:previoushistory,doc:doc
               
              
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result;
                if ( result == "Inserted" )
                {
                       Swal.fire({
            title: "Patient Added Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 


 $("#btncancel").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblPatient();
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




function UpdatePatient() {

  var id = $("#id2").val();

var fullname1 = $("#fullname1").val(); 

 var email1 = $("#email1").val(); 

 var mobileno1 = $("#mobileno1").val(); 

 var address1 = $("#address1").val(); 

 var age1 = $("#age1").val(); 

 var sex1 = $("#sex1").val(); 

 var previoushistory1 = $("#previoushistory1").val(); 

 var doc1 = $("#doc1").val(); 

 
    
  if(fullname1 == "" ){

     $("#1v1").css("display", "block");
      $("#1v1").text("Invalid fullname."); 
         $("#fullname1").css("border-color", "red");
         $("#fullname1").focus();
        

    } else if(email1 == "" ){

     $("#2v1").css("display", "block");
      $("#2v1").text("Invalid email."); 
         $("#email1").css("border-color", "red");
         $("#email1").focus();
        

    } else if(mobileno1 == "" ){

     $("#3v1").css("display", "block");
      $("#3v1").text("Invalid mobileno."); 
         $("#mobileno1").css("border-color", "red");
         $("#mobileno1").focus();
        

    } else if(address1 == "" ){

     $("#4v1").css("display", "block");
      $("#4v1").text("Invalid address."); 
         $("#address1").css("border-color", "red");
         $("#address1").focus();
        

    } else if(age1 == "" ){

     $("#5v1").css("display", "block");
      $("#5v1").text("Invalid age."); 
         $("#age1").css("border-color", "red");
         $("#age1").focus();
        

    } else if(sex1 == "" ){

     $("#6v1").css("display", "block");
      $("#6v1").text("Invalid sex."); 
         $("#sex1").css("border-color", "red");
         $("#sex1").focus();
        

    } else if(previoushistory1 == "" ){

     $("#7v1").css("display", "block");
      $("#7v1").text("Invalid previoushistory."); 
         $("#previoushistory1").css("border-color", "red");
         $("#previoushistory1").focus();
        

    } else if(doc1 == "" ){

     $("#8v1").css("display", "block");
      $("#8v1").text("Invalid doc."); 
         $("#doc1").css("border-color", "red");
         $("#doc1").focus();
        

    }
    else 
    { 
 
        Swal.fire({
  title: "Are you sure?",
  text: "You want to update this Patient!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
        $.ajax( {
            url: "api/UpdatePatient.php",
            method: "POST",
            data: {id:id,
                 fullname1:fullname1,email1:email1,mobileno1:mobileno1,address1:address1,age1:age1,sex1:sex1,previoushistory1:previoushistory1,doc1:doc1
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result; 
                if ( result == "Done" )
                { 
                      Swal.fire({
            title: "Patient Updated Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 

$("#btncancel1").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblPatient();

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




