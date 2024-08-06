$(function() {
var href = $(location).attr('href');  
var index = href.lastIndexOf("/");
var controller = href.substring(index+1);

    $("#uploadfile").click(function(){
      $("#file").click();
    });

    $("#file").change(function(){
        var fd = new FormData();
        var files = $('#file')[0].files[0];
        fd.append('file',files);
        if($("#lid").val()){
         fd.append("lid", $("#lid").val());
         fd.append("cid", $("#cid").val());
         uploadData(fd);
        }else{
         if(shrinkSize("#file")){
          uploadData(fd);
         }
       }
        
        
    });

function uploadData(formdata){
    $.ajax({
        url:""+$online__access__tag+"processor/upload_file",
        type: 'post',
        data: formdata,
        contentType: false,
        processData: false,
        dataType: 'json',
         beforeSend:function()
          {
             $("#idImageLabel").html("Uploading image.... please wait");
          },
           success: function(response){
            if($("#lid").val()){
                swal("Successful","Document uploaded successfully","success");
                setTimeout(function() {
                 location.reload();
                }, 2000);
            }else{
            sessionStorage.setItem('path', response.name);
            $("#idImageLabel").html("Image upload successful");
             if(sessionStorage.getItem('source')=='update'){
                addThumbnailUpdate(response);
                }else{
                 addThumbnail(response); 
             } 
            }
          },
         error: function(err) {
          alert(err.responseText)
        }
    });
}



// Added thumbnail
function addThumbnail(data){
    $("#uploadfile h1").remove(); 
    var len = $("#uploadfile div.thumbnail").length;
    var num = Number(len);
    num = num + 1;
    var name = data.name;
    var size = convertSize(data.size);
    var src = data.src;
    // Creating an thumbnail
    $("#idImage2").append('<div id="idImage2'+num+'" class="thumbnail"></div>');
    $("#idImage2").html('<img src="' + src + '" width="300" height="250"/>');
}



function addThumbnailUpdate(data){
    $("#idImage2 h1").remove(); 
    var len = $("#idImage2 div.thumbnail").length;

    var num = Number(len);
    num = num + 1;

    var name = data.name;
    var size = convertSize(data.size);
    var src = data.src;

    // Creating an thumbnail
    $("#idImage2").append('<div id="idImage2'+num+'" class="thumbnail"></div>');
    $("#idImage2").html('<img src="' + src + '" width="300" height="250"/>');

}


function shrinkSize(imgId){
    $(imgId).each(function() {
    var maxWidth = 160; 
    var maxHeight = 160;    
    var ratio = 0; 
    var width = $(this).width();   
    var height = $(this).height();  

    if(width > maxWidth){
        ratio = maxWidth / width;   
        $(this).css("width", maxWidth); 
        $(this).css("height", height * ratio);  
        height = height * ratio;   
    }

    if(height > maxHeight){
        ratio = maxHeight / height; 
        $(this).css("height", maxHeight);  
        $(this).css("width", width * ratio);  
        width = width * ratio;    
    }
   return true; 
});
return true;
}


// Bytes conversion
function convertSize(size) {
    var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
    if (size == 0) return '0 Byte';
    var i = parseInt(Math.floor(Math.log(size) / Math.log(1024)));
    return Math.round(size / Math.pow(1024, i), 2) + ' ' + sizes[i];
}
});