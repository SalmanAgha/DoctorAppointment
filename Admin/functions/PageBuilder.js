
function Pagebuilder() {
  
 var PageName=$('#PageName').val();
 var totalfields=parseInt($('#totalfields').val());

 var Fields=[];
 var Name=[];
 var Id=[];
 var Placeholder=[];
 var Numbersonly=[];
 var Length=[];
 
 for (var i = 1; i < totalfields+1; i++) {
//fileds ka data save krny k liye, ta ky ajax me bhejsakeen. 
Name[i]=$('#field_'+i+'_name').val();
Id[i]=$('#field_'+i+'_id').val();
Placeholder[i]=$('#field_'+i+'_placeholder').val();
Length[i]=parseInt($('#field_'+i+'_length').val());
//numberonlys check ko yes & no kerny k liye 
if($('#field_'+i+'_numbersonly').prop("checked") == true){
  Numbersonly[i]='Yes';
}else{
  Numbersonly[i]='No';
}
};


if(PageName==""){
alert('Page is empty');
}
else{

   html_file(PageName,totalfields,Name,Id,Placeholder,Numbersonly); 
     tblrecord_api_file(PageName,totalfields,Name,Id,Placeholder,Numbersonly); 
    js_file(PageName,totalfields,Name,Id,Placeholder,Numbersonly);
    addrecord_api_file(PageName,totalfields,Name,Id,Placeholder,Numbersonly);
    updaterecord_api_file(PageName,totalfields,Name,Id,Placeholder,Numbersonly);
  generatetbl_api_file(PageName,totalfields,Name,Id,Placeholder,Numbersonly,Length);
}
  
 
}



function tblrecord_api_file(PageName1,totalfields,Name,Id,Placeholder,Numbersonly) {
  var PageName=PageName1;
 var htotalfields = totalfields;
 var hName=Name;
 var hId=Id;
 var hPlaceholder=Placeholder;
 var hNumbersonly=Numbersonly;

  

 $.ajax({
  url: "api/PageBuilderFortbl.php",
  method: "POST",
  data: {
   PageName :PageName,
    htotalfields :htotalfields, 
    hName :hName,
    hId :hId,
    hPlaceholder :hPlaceholder,
    hNumbersonly :hNumbersonly 
  },
  dataType: "JSON",
  success: function (data) 
  {
    result = data.result; 
    alert(result); 

    return data;
  }
});

 
}



function generatetbl_api_file(PageName1,totalfields,Name,Id,Placeholder,Numbersonly,Length) {
  var PageName=PageName1;
 var htotalfields = totalfields;
 var hName=Name;
 var hId=Id;
 var hPlaceholder=Placeholder;
 var hNumbersonly=Numbersonly;
 var Length=Length;

  

 $.ajax({
  url: "api/PageBuilderFortblgenerate.php",
  method: "POST",
  data: {
   PageName :PageName,
    htotalfields :htotalfields, 
    hName :hName,
    hId :hId,
    hPlaceholder :hPlaceholder,
    hNumbersonly :hNumbersonly,
    Length :Length 
  },
  dataType: "JSON",
  success: function (data) 
  {
    result = data.result; 
    alert(result); 

    return data;
  }
});

 
}









function html_file(PageName1,totalfields,Name,Id,Placeholder,Numbersonly) {
  var PageName=PageName1;
 var htotalfields = totalfields;
 var hName=Name;
 var hId=Id;
 var hPlaceholder=Placeholder;
 var hNumbersonly=Numbersonly;
 

 if(1==1){
 $.ajax({
  url: "api/PageBuilderForHtml.php",
  method: "POST",
  data: {
    PageName :PageName,
    htotalfields :htotalfields, 
    hName :hName,
    hId :hId,
    hPlaceholder :hPlaceholder,
    hNumbersonly :hNumbersonly 
  },
  dataType: "JSON",
  success: function (data) 
  {
    result = data.result; 
    alert(result); 

    return data;
  }
});

 }

 

}


function js_file(PageName1,totalfields,Name,Id,Placeholder,Numbersonly) {
  var PageName=PageName1;
 var htotalfields = totalfields;
 var hName=Name;
 var hId=Id;
 var hPlaceholder=Placeholder;
 var hNumbersonly=Numbersonly;
 
 $.ajax({
  url: "api/PageBuilderForJs.php",
  method: "POST",
  data: {
   PageName :PageName,
    htotalfields :htotalfields, 
    hName :hName,
    hId :hId,
    hPlaceholder :hPlaceholder,
    hNumbersonly :hNumbersonly
  },
  dataType: "JSON",
  success: function (data) 
  {
    result = data.result; 
    alert(result); 

    return data;
  }
});

}


function updaterecord_api_file(PageName1,totalfields,Name,Id,Placeholder,Numbersonly) {
  var PageName=PageName1;
 var htotalfields = totalfields;
 var hName=Name;
 var hId=Id;
 var hPlaceholder=Placeholder;
 var hNumbersonly=Numbersonly;
 
 $.ajax({
  url: "api/PageBuilderForUpdateRecord.php",
  method: "POST",
  data: {
    PageName :PageName,
    htotalfields :htotalfields, 
    hName :hName,
    hId :hId,
    hPlaceholder :hPlaceholder,
    hNumbersonly :hNumbersonly
  },
  dataType: "JSON",
  success: function (data) 
  {
    result = data.result; 
    alert(result); 

    return data;
  }
});

}

function addrecord_api_file(PageName1,totalfields,Name,Id,Placeholder,Numbersonly) {
  var PageName=PageName1;
 var htotalfields = totalfields;
 var hName=Name;
 var hId=Id;
 var hPlaceholder=Placeholder;
 var hNumbersonly=Numbersonly;
 
 $.ajax({
  url: "api/PageBuilderForAddRecord.php",
  method: "POST",
  data: {
   PageName :PageName,
    htotalfields :htotalfields, 
    hName :hName,
    hId :hId,
    hPlaceholder :hPlaceholder,
    hNumbersonly :hNumbersonly
  },
  dataType: "JSON",
  success: function (data) 
  {
    result = data.result; 
    alert(result); 

    return data;
  }
});

}
