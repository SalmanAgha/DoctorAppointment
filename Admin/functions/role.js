

function tblrole(){
 
   $("#datatable").DataTable({
        "ajax": "api/Tblrole.php",
        "columns": [
         { "data": "Empty"},
           { "data": "rolename"} ,{ "data": "date"} 
          
        ],
      });

}


$(document).ready(function()
    {

 tblrole(); 

$(document).on("click", ".edit-modal", function(){

       
         $("#id2").val($(this).attr("id"));$("#rolename1").val($(this).data("rolename"));$("#date1").val($(this).data("date"));
     
      });



 });


function Addrole(){
 
var rolename = $("#rolename").val(); 

 var date = $("#date").val(); 

 
    
  if(rolename == "" ){

     $("#1v").css("display", "block");
      $("#1v").text("Invalid rolename."); 
         $("#rolename").css("border-color", "red");
         $("#rolename").focus();
        

    } else if(date == "" ){

     $("#2v").css("display", "block");
      $("#2v").text("Invalid date."); 
         $("#date").css("border-color", "red");
         $("#date").focus();
        

    }
    else 
    {   

 
         Swal.fire({
  title: "Are you sure?",
  text: "You want to add New role!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
    $.ajax( {
            url: "api/Addrole.php",
            method: "POST",
            data: {
 
                rolename:rolename,date:date
               
              
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result;
                if ( result == "Inserted" )
                {
                       Swal.fire({
            title: "role Added Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 


 $("#btncancel").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblrole();
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




function Updaterole() {

  var id = $("#id2").val();

var rolename1 = $("#rolename1").val(); 

 var date1 = $("#date1").val(); 

 
    
  if(rolename1 == "" ){

     $("#1v1").css("display", "block");
      $("#1v1").text("Invalid rolename."); 
         $("#rolename1").css("border-color", "red");
         $("#rolename1").focus();
        

    } else if(date1 == "" ){

     $("#2v1").css("display", "block");
      $("#2v1").text("Invalid date."); 
         $("#date1").css("border-color", "red");
         $("#date1").focus();
        

    }
    else 
    { 
 
        Swal.fire({
  title: "Are you sure?",
  text: "You want to update this role!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
        $.ajax( {
            url: "api/Updaterole.php",
            method: "POST",
            data: {id:id,
                 rolename1:rolename1,date1:date1
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result; 
                if ( result == "Done" )
                { 
                      Swal.fire({
            title: "role Updated Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 

$("#btncancel1").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblrole();

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




