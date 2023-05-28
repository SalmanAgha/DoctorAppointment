

function tblInvProdct(){
 
   $("#datatable").DataTable({
        "ajax": "api/TblInvProdct.php",
        "columns": [
         { "data": "Empty"},
           { "data": "productname"} ,{ "data": "productcode"} ,{ "data": "productstatus"} 
          
        ],
      });

}


$(document).ready(function()
    {

 tblInvProdct(); 

$(document).on("click", ".edit-modal", function(){

       
         $("#id2").val($(this).attr("id"));$("#productname1").val($(this).data("productname"));$("#productcode1").val($(this).data("productcode"));$("#productstatus1").val($(this).data("productstatus"));
     
      });



 });


function AddInvProdct(){
 
var productname = $("#productname").val(); 

 var productcode = $("#productcode").val(); 

 var productstatus = $("#productstatus").val(); 

 
    
  if(productname == "" ){

     $("#1v").css("display", "block");
      $("#1v").text("Invalid productname."); 
         $("#productname").css("border-color", "red");
         $("#productname").focus();
        

    } else if(productcode == "" ){

     $("#2v").css("display", "block");
      $("#2v").text("Invalid productcode."); 
         $("#productcode").css("border-color", "red");
         $("#productcode").focus();
        

    } else if(productstatus == "" ){

     $("#3v").css("display", "block");
      $("#3v").text("Invalid productstatus."); 
         $("#productstatus").css("border-color", "red");
         $("#productstatus").focus();
        

    }
    else 
    {   

 
         Swal.fire({
  title: "Are you sure?",
  text: "You want to add New InvProdct!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
    $.ajax( {
            url: "api/AddInvProdct.php",
            method: "POST",
            data: {
 
                productname:productname,productcode:productcode,productstatus:productstatus
               
              
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result;
                if ( result == "Inserted" )
                {
                       Swal.fire({
            title: "InvProdct Added Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 


 $("#btncancel").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblInvProdct();
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




function UpdateInvProdct() {

  var id = $("#id2").val();

var productname1 = $("#productname1").val(); 

 var productcode1 = $("#productcode1").val(); 

 var productstatus1 = $("#productstatus1").val(); 

 
    
  if(productname1 == "" ){

     $("#1v1").css("display", "block");
      $("#1v1").text("Invalid productname."); 
         $("#productname1").css("border-color", "red");
         $("#productname1").focus();
        

    } else if(productcode1 == "" ){

     $("#2v1").css("display", "block");
      $("#2v1").text("Invalid productcode."); 
         $("#productcode1").css("border-color", "red");
         $("#productcode1").focus();
        

    } else if(productstatus1 == "" ){

     $("#3v1").css("display", "block");
      $("#3v1").text("Invalid productstatus."); 
         $("#productstatus1").css("border-color", "red");
         $("#productstatus1").focus();
        

    }
    else 
    { 
 
        Swal.fire({
  title: "Are you sure?",
  text: "You want to update this InvProdct!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
        $.ajax( {
            url: "api/UpdateInvProdct.php",
            method: "POST",
            data: {id:id,
                 productname1:productname1,productcode1:productcode1,productstatus1:productstatus1
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result; 
                if ( result == "Done" )
                { 
                      Swal.fire({
            title: "InvProdct Updated Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 

$("#btncancel1").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblInvProdct();

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




