

function tblMarine_Category(){
 
   $("#datatable").DataTable({
        "ajax": "api/TblMarine_Category.php",
        "columns": [
         { "data": "Empty"},
           { "data": "Category"} ,{ "data": "TransitType"} ,{ "data": "MarineRate"} ,{ "data": "WarAndStrikeRate"} 
          
        ],
      });

}


$(document).ready(function()
    {

 tblMarine_Category(); 

$(document).on("click", ".edit-modal", function(){

       
         $("#id2").val($(this).attr("id"));$("#Category1").val($(this).data("Category"));$("#TransitType1").val($(this).data("TransitType"));$("#MarineRate1").val($(this).data("MarineRate"));$("#WarAndStrikeRate1").val($(this).data("WarAndStrikeRate"));
     
      });



 });


function AddMarine_Category(){
 
var Category = $("#Category").val(); 

 var TransitType = $("#TransitType").val(); 

 var MarineRate = $("#MarineRate").val(); 

 var WarAndStrikeRate = $("#WarAndStrikeRate").val(); 

 
    
  if(Category == "" ){

     $("#1v").css("display", "block");
      $("#1v").text("Invalid Category."); 
         $("#Category").css("border-color", "red");
         $("#Category").focus();
        

    } else if(TransitType == "" ){

     $("#2v").css("display", "block");
      $("#2v").text("Invalid TransitType."); 
         $("#TransitType").css("border-color", "red");
         $("#TransitType").focus();
        

    } else if(MarineRate == "" ){

     $("#3v").css("display", "block");
      $("#3v").text("Invalid MarineRate."); 
         $("#MarineRate").css("border-color", "red");
         $("#MarineRate").focus();
        

    } else if(WarAndStrikeRate == "" ){

     $("#4v").css("display", "block");
      $("#4v").text("Invalid WarAndStrikeRate."); 
         $("#WarAndStrikeRate").css("border-color", "red");
         $("#WarAndStrikeRate").focus();
        

    }
    else 
    {   

 
         Swal.fire({
  title: "Are you sure?",
  text: "You want to add New Marine_Category!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
    $.ajax( {
            url: "api/AddMarine_Category.php",
            method: "POST",
            data: {
 
                Category:Category,TransitType:TransitType,MarineRate:MarineRate,WarAndStrikeRate:WarAndStrikeRate
               
              
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result;
                if ( result == "Inserted" )
                {
                       Swal.fire({
            title: "Marine_Category Added Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 


 $("#btncancel").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblMarine_Category();
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




function UpdateMarine_Category() {

  var id = $("#id2").val();

var Category1 = $("#Category1").val(); 

 var TransitType1 = $("#TransitType1").val(); 

 var MarineRate1 = $("#MarineRate1").val(); 

 var WarAndStrikeRate1 = $("#WarAndStrikeRate1").val(); 

 
    
  if(Category1 == "" ){

     $("#1v1").css("display", "block");
      $("#1v1").text("Invalid Category."); 
         $("#Category1").css("border-color", "red");
         $("#Category1").focus();
        

    } else if(TransitType1 == "" ){

     $("#2v1").css("display", "block");
      $("#2v1").text("Invalid TransitType."); 
         $("#TransitType1").css("border-color", "red");
         $("#TransitType1").focus();
        

    } else if(MarineRate1 == "" ){

     $("#3v1").css("display", "block");
      $("#3v1").text("Invalid MarineRate."); 
         $("#MarineRate1").css("border-color", "red");
         $("#MarineRate1").focus();
        

    } else if(WarAndStrikeRate1 == "" ){

     $("#4v1").css("display", "block");
      $("#4v1").text("Invalid WarAndStrikeRate."); 
         $("#WarAndStrikeRate1").css("border-color", "red");
         $("#WarAndStrikeRate1").focus();
        

    }
    else 
    { 
 
        Swal.fire({
  title: "Are you sure?",
  text: "You want to update this Marine_Category!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
        $.ajax( {
            url: "api/UpdateMarine_Category.php",
            method: "POST",
            data: {id:id,
                 Category1:Category1,TransitType1:TransitType1,MarineRate1:MarineRate1,WarAndStrikeRate1:WarAndStrikeRate1
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result; 
                if ( result == "Done" )
                { 
                      Swal.fire({
            title: "Marine_Category Updated Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 

$("#btncancel1").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblMarine_Category();

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




