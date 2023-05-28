

function tbldoctor(){
 
   $("#datatable").DataTable({
        "ajax": "api/Tbldoctor.php",
        "columns": [
         { "data": "Empty"},
           { "data": "name"} ,{ "data": "email"} ,{ "data": "mobileno"} ,{ "data": "address"} ,{ "data": "validmlr"} ,{ "data": "speciality"} ,{ "data": "experience"} ,{ "data": "doc"} 
          
        ],
      });

}


$(document).ready(function()
    {

 tbldoctor(); 

$(document).on("click", ".edit-modal", function(){

       
         $("#id2").val($(this).attr("id"));$("#name1").val($(this).data("name"));$("#email1").val($(this).data("email"));$("#mobileno1").val($(this).data("mobileno"));$("#address1").val($(this).data("address"));$("#validmlr1").val($(this).data("validmlr"));$("#speciality1").val($(this).data("speciality"));$("#experience1").val($(this).data("experience"));$("#doc1").val($(this).data("doc"));
     
      });



 });


function Adddoctor(){
 
var name = $("#name").val(); 

 var email = $("#email").val(); 

 var mobileno = $("#mobileno").val(); 

 var address = $("#address").val(); 

 var validmlr = $("#validmlr").val(); 

 var speciality = $("#speciality").val(); 

 var experience = $("#experience").val(); 

 var doc = $("#doc").val(); 

 
    
  if(name == "" ){

     $("#1v").css("display", "block");
      $("#1v").text("Invalid name."); 
         $("#name").css("border-color", "red");
         $("#name").focus();
        

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
        

    } else if(validmlr == "" ){

     $("#5v").css("display", "block");
      $("#5v").text("Invalid validmlr."); 
         $("#validmlr").css("border-color", "red");
         $("#validmlr").focus();
        

    } else if(speciality == "" ){

     $("#6v").css("display", "block");
      $("#6v").text("Invalid speciality."); 
         $("#speciality").css("border-color", "red");
         $("#speciality").focus();
        

    } else if(experience == "" ){

     $("#7v").css("display", "block");
      $("#7v").text("Invalid experience."); 
         $("#experience").css("border-color", "red");
         $("#experience").focus();
        

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
  text: "You want to add New doctor!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
    $.ajax( {
            url: "api/Adddoctor.php",
            method: "POST",
            data: {
 
                name:name,email:email,mobileno:mobileno,address:address,validmlr:validmlr,speciality:speciality,experience:experience,doc:doc
               
              
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result;
                if ( result == "Inserted" )
                {
                       Swal.fire({
            title: "doctor Added Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 


 $("#btncancel").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tbldoctor();
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




function Updatedoctor() {

  var id = $("#id2").val();

var name1 = $("#name1").val(); 

 var email1 = $("#email1").val(); 

 var mobileno1 = $("#mobileno1").val(); 

 var address1 = $("#address1").val(); 

 var validmlr1 = $("#validmlr1").val(); 

 var speciality1 = $("#speciality1").val(); 

 var experience1 = $("#experience1").val(); 

 var doc1 = $("#doc1").val(); 

 
    
  if(name1 == "" ){

     $("#1v1").css("display", "block");
      $("#1v1").text("Invalid name."); 
         $("#name1").css("border-color", "red");
         $("#name1").focus();
        

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
        

    } else if(validmlr1 == "" ){

     $("#5v1").css("display", "block");
      $("#5v1").text("Invalid validmlr."); 
         $("#validmlr1").css("border-color", "red");
         $("#validmlr1").focus();
        

    } else if(speciality1 == "" ){

     $("#6v1").css("display", "block");
      $("#6v1").text("Invalid speciality."); 
         $("#speciality1").css("border-color", "red");
         $("#speciality1").focus();
        

    } else if(experience1 == "" ){

     $("#7v1").css("display", "block");
      $("#7v1").text("Invalid experience."); 
         $("#experience1").css("border-color", "red");
         $("#experience1").focus();
        

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
  text: "You want to update this doctor!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
        $.ajax( {
            url: "api/Updatedoctor.php",
            method: "POST",
            data: {id:id,
                 name1:name1,email1:email1,mobileno1:mobileno1,address1:address1,validmlr1:validmlr1,speciality1:speciality1,experience1:experience1,doc1:doc1
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result; 
                if ( result == "Done" )
                { 
                      Swal.fire({
            title: "doctor Updated Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 

$("#btncancel1").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tbldoctor();

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




