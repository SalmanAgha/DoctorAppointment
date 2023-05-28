

function tbluser(){
 
   $("#datatable").DataTable({
        "ajax": "api/Tbluser.php",
        "columns": [
         { "data": "Empty"},
           { "data": "name"} ,{ "data": "email"} ,{ "data": "password"} 
          
        ],
      });

}


$(document).ready(function()
    {

 tbluser(); 

$(document).on("click", ".edit-modal", function(){

       
         $("#id2").val($(this).attr("id"));$("#name1").val($(this).data("name"));$("#email1").val($(this).data("email"));$("#password1").val($(this).data("password"));
     
      });



 });


function Adduser(){
 
var name = $("#name").val(); 

 var email = $("#email").val(); 

 var password = $("#password").val(); 

 
    
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
        

    } else if(password == "" ){

     $("#3v").css("display", "block");
      $("#3v").text("Invalid password."); 
         $("#password").css("border-color", "red");
         $("#password").focus();
        

    }
    else 
    {   

 
         Swal.fire({
  title: "Are you sure?",
  text: "You want to add New user!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
    $.ajax( {
            url: "api/Adduser.php",
            method: "POST",
            data: {
 
                name:name,email:email,password:password
               
              
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result;
                if ( result == "Inserted" )
                {
                       Swal.fire({
            title: "user Added Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 


 $("#btncancel").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tbluser();
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




function Updateuser() {

  var id = $("#id2").val();

var name1 = $("#name1").val(); 

 var email1 = $("#email1").val(); 

 var password1 = $("#password1").val(); 

 
    
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
        

    } else if(password1 == "" ){

     $("#3v1").css("display", "block");
      $("#3v1").text("Invalid password."); 
         $("#password1").css("border-color", "red");
         $("#password1").focus();
        

    }
    else 
    { 
 
        Swal.fire({
  title: "Are you sure?",
  text: "You want to update this user!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
        $.ajax( {
            url: "api/Updateuser.php",
            method: "POST",
            data: {id:id,
                 name1:name1,email1:email1,password1:password1
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result; 
                if ( result == "Done" )
                { 
                      Swal.fire({
            title: "user Updated Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 

$("#btncancel1").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tbluser();

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




