

function tblCategory(){
 
   $("#datatable").DataTable({
        "ajax": "api/TblCategory.php",
        "columns": [
         { "data": "Empty"},
           { "data": "CategoryName"} ,{ "data": "CategoryDesc"} 
          
        ],
      });

}


$(document).ready(function()
    {

 tblCategory(); 

$(document).on("click", ".edit-modal", function(){

       
         $("#id2").val($(this).attr("id"));$("#CategoryName1").val($(this).data("CategoryName"));$("#CategoryDesc1").val($(this).data("CategoryDesc"));
     
      });



 });


function AddCategory(){
 
var CategoryName = $("#CategoryName").val(); 

 var CategoryDesc = $("#CategoryDesc").val(); 

 
    
  if(CategoryName == "" ){

     $("#1v").css("display", "block");
      $("#1v").text("Invalid CategoryName."); 
         $("#CategoryName").css("border-color", "red");
         $("#CategoryName").focus();
        

    } else if(CategoryDesc == "" ){

     $("#2v").css("display", "block");
      $("#2v").text("Invalid CategoryDesc."); 
         $("#CategoryDesc").css("border-color", "red");
         $("#CategoryDesc").focus();
        

    }
    else 
    {   

 
         Swal.fire({
  title: "Are you sure?",
  text: "You want to add New Category!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
    $.ajax( {
            url: "api/AddCategory.php",
            method: "POST",
            data: {
 
                CategoryName:CategoryName,CategoryDesc:CategoryDesc
               
              
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result;
                if ( result == "Inserted" )
                {
                       Swal.fire({
            title: "Category Added Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 


 $("#btncancel").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblCategory();
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




function UpdateCategory() {

  var id = $("#id2").val();

var CategoryName1 = $("#CategoryName1").val(); 

 var CategoryDesc1 = $("#CategoryDesc1").val(); 

 
    
  if(CategoryName1 == "" ){

     $("#1v1").css("display", "block");
      $("#1v1").text("Invalid CategoryName."); 
         $("#CategoryName1").css("border-color", "red");
         $("#CategoryName1").focus();
        

    } else if(CategoryDesc1 == "" ){

     $("#2v1").css("display", "block");
      $("#2v1").text("Invalid CategoryDesc."); 
         $("#CategoryDesc1").css("border-color", "red");
         $("#CategoryDesc1").focus();
        

    }
    else 
    { 
 
        Swal.fire({
  title: "Are you sure?",
  text: "You want to update this Category!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
        $.ajax( {
            url: "api/UpdateCategory.php",
            method: "POST",
            data: {id:id,
                 CategoryName1:CategoryName1,CategoryDesc1:CategoryDesc1
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result; 
                if ( result == "Done" )
                { 
                      Swal.fire({
            title: "Category Updated Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 

$("#btncancel1").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblCategory();

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




