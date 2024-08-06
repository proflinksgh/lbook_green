$(document).ready(function(){
  $online__access__tag = '/';
  
  var href = $(location).attr('href');  
 var index = href.lastIndexOf("/");
 var controller = href.substring(index+1);
 var debug_status = false;
 sessionStorage.removeItem("ucode");
sessionStorage.removeItem("reference");


    function sendLog(errlog, origin){
    if(networkchecker_script()){    
    $.ajax({
    type: "GET",
    dataType:"JSON",
    url: 'https://linksengineering.net/apilinks/public/api/logerr?error='+errlog+'&origin='+origin+'', 
      });
     }
    }
    
  


  function field_required_prompter(key,timeout)
  { 
   var dataValid = true;
    $(key).each(function()
    {
        var cur = $(this);
         if ($.trim(cur.val()) == '')
         { 
          cur.css('border-color','red');
           
          setTimeout(function() {
              cur.css('border-color','');
          }, timeout); 
       
         dataValid = false;
         }
      });
    
      if(dataValid)
      {
         return true
      }
      else
      {
          return false;
      }
  }
      
 
 
  $('.sortby').change(function(){
    var selected = $(this).val();
    initMachine(selected);
  });
  
  
    $(".btnSearchProd").click(function(e){
     e.preventDefault();
    if(field_required_prompter('.searchcl',5000)===true)
      {
        initMachine($(".searchcl").val()); 
      }
  });
  
  
    $(".searchcl").on("keyup",function(){
       initMachine($(".searchcl").val()); 
    });
    
    
      $("#chPhoneNumber").on('change', function(e) {
          $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
      });
      
      $("#chPhoneNumber").on('keypress', function(e) {
        keys = ['0','1','2','3','4','5','6','7','8','9','.'];
        return keys.indexOf(event.key) > -1;
      });
      
      
      $("#chWhatsAppNumber").on('change', function(e) {
          $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
      });
      
      $("#chWhatsAppNumber").on('keypress', function(e) {
        keys = ['0','1','2','3','4','5','6','7','8','9','.'];
        return keys.indexOf(event.key) > -1;
      });
      
     
     $("#idDomWhatsapp").on('change', function(e) {
          $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
      });
      
      $("#idDomWhatsapp").on('keypress', function(e) {
        keys = ['0','1','2','3','4','5','6','7','8','9','.'];
        return keys.indexOf(event.key) > -1;
      });
      
      
      $("#idDomPhone").on('change', function(e) {
          $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
      });
      
      $("#idDomPhone").on('keypress', function(e) {
        keys = ['0','1','2','3','4','5','6','7','8','9','.'];
        return keys.indexOf(event.key) > -1;
      });


      $("#idPhoneNumber").on('change', function(e) {
          $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
      });
      
      $("#idPhoneNumber").on('keypress', function(e) {
        keys = ['0','1','2','3','4','5','6','7','8','9','.'];
        return keys.indexOf(event.key) > -1;
      });

       $("#idWhatsApp").on('change', function(e) {
          $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
      });
      
      $("#idWhatsApp").on('keypress', function(e) {
        keys = ['0','1','2','3','4','5','6','7','8','9','.'];
        return keys.indexOf(event.key) > -1;
      });
  

    

     $(document).on('click','.subWhatNumber',function(e){
       e.preventDefault();
        if(field_required_prompter('.what',5000)==true)
          {
            var wnumber = $("#idPhoneWhat").val();
             postWhatNote(wnumber);   
          }
          else
          {

          }
      });
      
      
    $(".btnApplicant").click(function(e){
     e.preventDefault();
    if(field_required_prompter('.subapp',5000)===true)
      {
        post_applicant();    
      }
      else
      {
       alert("All fields marked * is compulsory")
      }
  });
  

  
  function post_applicant() {
    var gender = $("#gender").val().trim();
    var rotator = $("#rotator").val().trim();
    var lastname =  $("#lname").val().trim();
    var firstname = $("#fname").val().trim();
    var contact = $("#contact").val().trim();
    var email = $("#email").val().trim();
    var region = $("#region3").val().trim();
    var city = $("#city").val().trim();  
    var level = $("#level").val().trim();   
    var reason = $("#reason").val().trim();
    var course = $("#course").val().trim(); 
    var dob = $("#dob").val().trim();
    var whatsapp = $("#whatsapp").val().trim();
    var code = Math.floor(100000 + Math.random() * 900000);

    var fd = new FormData();
    fd.append("rotator", rotator);
    fd.append("lastname", lastname);
    fd.append("firstname", firstname);
    fd.append("gender", gender);
    fd.append("dob", dob);
    fd.append("contact", contact);
    fd.append("email", email);
    fd.append("region", region);
    fd.append("city", city);
    fd.append("level", level);
    fd.append("reason", reason);
    fd.append("course", course);
    fd.append("whatsapp", whatsapp);
    fd.append("code", code);
     $.ajax({
          url:""+$online__access__tag+"processor/postRecord",
          type:"POST",
          data: fd,
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          beforeSend:function()
          {
            $(".btnApplicant > i").removeClass().addClass("fa fa-spinner fa-spin");
            $(".btnApplicant").prop("disabled", true);
            $(".btnApplicant").css("cursor", "no-drop");
          },
          success:function(data)
          {
            $(".btnApplicant > i").removeClass().addClass("fa fa-pencil-square-o");
            $(".btnApplicant").prop("disabled", false);
            $(".btnApplicant").css("cursor", "default");

          if(data.status==="success"){
             swal("Thank you. Your Application has been received successfully. We will respond to your Email shortly");
                setTimeout(function() {
                 window.location = "https://learn.linksengineering.net";
                }, 5000);
             
          }else{
              swal("Failed submitting application! Please try again");
          }
        },
        error: function(err) {
          sendLog(err.responseText, "postRecord - Learning application");
        }
    });
}
      
      
      
    function postWhatNote(phone){
      var fd = new FormData();
      fd.append("phone", phone);
      $.ajax({
          url:""+$online__access__tag+"processor/postwNote",
          type:"POST",
          dataType:'json',
          data:fd,
          contentType: false,       
          cache: false,           
          processData:false,
          beforeSend:function()
          {
             $(".subWhatNumber").prop("disabled", true);
             $(".subWhatNumber").css("cursor", "no-drop");
             $(".subWhatNumber").html("Please wait!");
          },
          success: function(data){
             $(".subWhatNumber").prop("disabled", false);
             $(".subWhatNumber").css("cursor", "");
           if(data.status==="success"){
             $(".subWhatNumber").html("Submitted Successfully!");  
              setTimeout(function() {
                 $(".closePop").click();
                }, 2000);
           }else{
             $(".subWhatNumber").html("Failed to Submit! Please try again");  
           }
          },
        error: function(err) {
          //alert(err.responseText);
        }
    });
    }


   $(document).on('click','.btnReviewSite',function(e){
       e.preventDefault();
        if(field_required_prompter('.reviewcl',5000)==true)
          {
            var fname = $("#idRevName").val();
             var email = $("#idRevEmail").val();
             var phone = $("#idRevPhone").val();
             var message = $("#idRevMessage").val();
             postReview(fname, email, phone, message);   
          }
          else
          {

          }
      });
      
      
    $("#btnSendMsg").click(function(e){
    e.preventDefault();
        if(field_required_prompter('.checkmess',5000)===true)
      {
        if(networkchecker_script()){
            
        var username = $("#idUsername").val();
        var email = $("#idEmail").val();
        var phone = $("#idPhone").val();
        var subject = $("#idSubject").val();   
        var message =  $("#idMessage").val()
 
        if(isEmail(email)){
         storeMessage(username, email, phone, subject, message);
        }else{
            $("#idSublab").html("Invalid email entered");
         }
        }else{  
        $("#idSublab").show();
        $("#idSublab").html("No Internet connection");
        setTimeout(function() {
         $("#idSublab").hide();
        }, 5000);
         // swal("No Internet","Please connect Internet","error")
        }
    }
});


   



    function storeMessage(username, email, phone, subject, message){
        var fd = new FormData();
        fd.append("username",  username);
        fd.append("email",  email);
        fd.append("message",  message);
        fd.append("subject",  subject);
        fd.append("phone",  phone);
             $.ajax({
              url:""+$online__access__tag+"processor/storeMessage",
              type:"POST",
              data:fd,
              dataType:'json',
              contentType: false,       
              cache: false,           
              processData:false,
              beforeSend:function()
          {
            $("#btnSendMsg > i").removeClass().addClass("fa fa-spinner fa-spin");
            $("#btnSendMsg").prop("disabled", true);
            $("#btnSendMsg").css("cursor", "no-drop");            
          },
          success:function(data)
          {
              
            $("#btnSendMsg > i").removeClass().addClass("fa fa-spinner");
            $("#btnSendMsg").prop("disabled", false);
            $("#btnSendMsg").css("cursor", "");
         
          if(data.status == "success"){
              $('.modal-mess').modal({
                    backdrop: 'static',
                    keyboard: false
              });
              $('.modal-mess').modal("show");
          }else{
               alert("Failed to send message. Please try again");
           }
        },
        error: function(err) {
         alert(err.responseText)
           }
        });
    }
      
      
      function fetchReview(){
      $.ajax({
          url:""+$online__access__tag+"processor/fetchReview",
          type:"POST",
          dataType:'json',
          contentType: false,       
          cache: false,           
          processData:false,
          success:function(data)
          {
            if(data !=="none"){
            $(".appCaroul div").remove();
             for(var i=0;i<data.length;i++){
             var cont='<div class="testimonial-block">'+
               '<div class="inner-box" style="background-image: url(assets/images/background/pattern-4.png)">'+
                  '<div class="upper-box">'+
                     '<div class="icon">'+
                        '<img src="assets/images/gallery/'+data[i].image+'" alt="image" />'+
                     '</div>'+
                     '<h4>'+data[i].fullname+'</h4>'+
                     '<div class="designation">L-book</div>'+
                  '</div>'+
                  '<div class="text">'+data[i].comment+'</div>'+
               '</div>'+
            '</div>';
             $(".appCaroul").append(cont);
            }
            }
          },
        error: function(err) {
          //alert(err.responseText);
        }
    });
    }
      
      
      function postReview(fullname, email, phone, message){
      var fd = new FormData();
      fd.append("fullname", fullname);
      fd.append("email", email);
      fd.append("phone", phone);
      fd.append("review", message);
      $.ajax({
          url:""+$online__access__tag+"processor/postsitereview",
          type:"POST",
          data:fd,
          dataType:'json',
          contentType: false,       
          cache: false,           
          processData:false,
          success:function(data)
          {
            if(data.status === "success"){
                swal("Your comment has been submitted successfully. Thank you!");
            }else{
              swal("Failed to submit your comment. Please try again!");  
            }
          },
        error: function(err) {
        }
    });
    }


    function pushpost(status) {
    var fd = new FormData();
    fd.append("status", status);
    fd.append("token", sessionStorage.getItem("token"));
    $.ajax({
          url:""+$online__access__tag+"processor/pushAccept",
          type:"POST",
          data: fd,
          contentType: false,       
          cache: false, 
          processData:false,
        //   success:function(data)
        //   {
        //   alert(data)
        //  },
        // error: function(err) {
        //  alert(err.responseText);
        // }
    });
}
   

  
  
  
    function formatNumberWithCommas(x) {
                    return x.toString().replace(/B(?=(d{3})+(?!d))/g, ",");
              }
              


    $(".btnSubTrial").click(function(e){
    e.preventDefault();
    if(field_required_prompter('.lreg',5000)===true&&$("#idType").val()!=="Business type"&&$("#idEmployees").val()!=="No. of Employees")
    {
    if(networkchecker_script()){
    var fd = new FormData();
    fd.append("fullname", $("#idFullame").val());
    fd.append("company", $("#idCompanyname").val());
    fd.append("type", $("#idType").val());
    fd.append("email", $("#idEmail").val());
    fd.append("phone", $("#idPhoneNumber").val());  
    fd.append("whatsapp", $("#idWhatsApp").val());
    fd.append("employee", $("#idEmployees").val());
    $.ajax({
          url:""+$online__access__tag+"processor/postLbook",
          type:"POST",
          data: fd,
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
             $(".btnSubTrial").prop("disabled", true);
             $(".btnSubTrial").css("cursor", "no-drop");
             $(".btnSubTrial").css("background-color","#dc3545");
             $(".btnSubTrial").html("Please wait!").css("color","white");
             $("#idLoaderSp").show();
          },
          success: function(data){
             $(".btnSubTrial").prop("disabled", false);
             $(".btnSubTrial").css("cursor", "");
             $(".btnSubTrial").html("Submit");
             $("#idLoaderSp").hide();
             if(data.status === "success"){
                 if($("#idType").val()==="Hire"){
                    $(".clOpenApp").attr("href", "https://hbook.linksengineering.net");
                 }else{
                    $(".clOpenApp").attr("href", "https://lbook.linksengineering.net/auth"); 
                 }
                 $("#idDemoPass").html(data.password);
                var code = data.code;
                  $('.modal-success').modal({
                    backdrop: 'static',
                    keyboard: false
              });
              $('.modal-success').modal("show");
             }else{
                alert("Please check your email for Login credentials or contact +233247058668 for support");
             }
          },
          error: function(error){
              alert("Please check your email for Login credentials or contact +233247058668 for support");
              console.log(error);
             }
        });
         }else{
        alert("No Internet Connection");
         }
        }else{
        alert("Fields marked * is compulsory");
       }
 });
      

  

    if(controller === "register"){
    var telInput = $("#idPhoneVo");
    telInput.intlTelInput({
      initialCountry: "auto",
          geoIpLookup: function(callback) {
            $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
              var countryCode = (resp && resp.country) ? resp.country : "gh";
              sessionStorage.setItem("country", resp.country);
              callback(countryCode);
            });
          }, 
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
        });
    }
    
    



  
function networkchecker_script()
      {
         var network_status = true;
          if(debug_status==false)
          {
            if(navigator.onLine)
              {
            
                  return true;
              }
              else
              {
                  return false;
              }
          }
          else
          {
            return true;
          }
  }
  


  
  
       $("#chPayPhone").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#chPayPhone").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
  

     $("#idPhone").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#idPhone").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });


    $("#btnSend").click(function(e){
    e.preventDefault();
     if(field_required_prompter('.visit',5000)==true)
      {
        if(networkchecker_script()){
        var email = $("#idEmailVisit").val();
        var message = $("#idMessageVisit").val();
        var subject = "Enquiry from website"
        var name =  $("#idNameVisit").val()
        
        if(isEmail(email)){
            sendEmail(email, message, subject, name);
        }else{
            alert("Invalid email")
        }

        }else{
         // swal("No Internet","Please connect Internet","error")
        }
    }
  
    });
    
      
  
   
   $("#chSub").on('change', function(e) {
     
     var num = $(this).val();
     var amount = 0;
     if(num !=="1"||num !=="3"||num !=="7"){
        amount = num * 10; 
     }else{
        amount = num * 5;  
     }
    $("#chAmountPay").val(amount+".00");
   });
   

    

        // if(controller === ''||controller === 'home'||'quicksms'||'shop'){
        //     visitor()
        // }
    
        //   function visitor(){
        //       $.ajax({
        //           url:""+$online__access__tag+"processor/visitor",
        //           type:"POST",
        //           contentType: false,       
        //           cache: false,           
        //           processData:false,
 
        //     });
        // }
        

    
    function isEmail(email) { 
    return /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(email);
    }

});