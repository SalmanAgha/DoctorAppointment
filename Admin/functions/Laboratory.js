

function tblLaboratory(){
 
   $("#datatable").DataTable({
        "ajax": "api/TblLaboratory.php",
        "columns": [
         { "data": "Empty"},
           { "data": "testname"} ,{ "data": "testid"} ,{ "data": "price"} 
          
        ],
      });

}


$(document).ready(function()
    {

 tblLaboratory(); 

$(document).on("click", ".edit-modal", function(){

       
         $("#id2").val($(this).attr("id"));$("#testname1").val($(this).data("testname"));$("#testid1").val($(this).data("testid"));$("#price1").val($(this).data("price"));
     
      });



 });


function AddLaboratory(){
 
var testname = $("#testname").val(); 

 var testid = $("#testid").val(); 

 var price = $("#price").val(); 

 
    
  if(testname == "" ){

     $("#1v").css("display", "block");
      $("#1v").text("Invalid testname."); 
         $("#testname").css("border-color", "red");
         $("#testname").focus();
        

    } else if(testid == "" ){

     $("#2v").css("display", "block");
      $("#2v").text("Invalid testid."); 
         $("#testid").css("border-color", "red");
         $("#testid").focus();
        

    } else if(price == "" ){

     $("#3v").css("display", "block");
      $("#3v").text("Invalid price."); 
         $("#price").css("border-color", "red");
         $("#price").focus();
        

    }
    else 
    {   

 
         Swal.fire({
  title: "Are you sure?",
  text: "You want to add New Laboratory!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
    $.ajax( {
            url: "api/AddLaboratory.php",
            method: "POST",
            data: {
 
                testname:testname,testid:testid,price:price
               
              
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result;
                if ( result == "Inserted" )
                {
                       Swal.fire({
            title: "Laboratory Added Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 


 $("#btncancel").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblLaboratory();
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




function UpdateLaboratory() {

  var id = $("#id2").val();

var testname1 = $("#testname1").val(); 

 var testid1 = $("#testid1").val(); 

 var price1 = $("#price1").val(); 

 
    
  if(testname1 == "" ){

     $("#1v1").css("display", "block");
      $("#1v1").text("Invalid testname."); 
         $("#testname1").css("border-color", "red");
         $("#testname1").focus();
        

    } else if(testid1 == "" ){

     $("#2v1").css("display", "block");
      $("#2v1").text("Invalid testid."); 
         $("#testid1").css("border-color", "red");
         $("#testid1").focus();
        

    } else if(price1 == "" ){

     $("#3v1").css("display", "block");
      $("#3v1").text("Invalid price."); 
         $("#price1").css("border-color", "red");
         $("#price1").focus();
        

    }
    else 
    { 
 
        Swal.fire({
  title: "Are you sure?",
  text: "You want to update this Laboratory!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
        $.ajax( {
            url: "api/UpdateLaboratory.php",
            method: "POST",
            data: {id:id,
                 testname1:testname1,testid1:testid1,price1:price1
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result; 
                if ( result == "Done" )
                { 
                      Swal.fire({
            title: "Laboratory Updated Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 

$("#btncancel1").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblLaboratory();

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




