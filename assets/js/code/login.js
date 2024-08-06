$(document).ready(function(){
  var $online__access__tag = '/';
  var debug_status = false;
  var userType = '';
  
  
                         sessionStorage.removeItem('status');
                         sessionStorage.removeItem('role');
                         sessionStorage.removeItem('id');
                         sessionStorage.removeItem('surname');
                         sessionStorage.removeItem('othername');
                         sessionStorage.removeItem('company');



  function field_required_prompter(key,timeout)
  {
    var dataValid = true;
    var status = false;
    $(key).each(function()
    {
        var cur = $(this);
         if ($.trim(cur.val()) == '')
         { 
           // cur.after('<span class="text_red">Field is required</span>');
           cur.css('border-color','red');
           setTimeout(function() {
            // cur.parent().find('span').remove();
              cur.css('border-color','black');
           }, timeout); 
        
         dataValid = false;
         status = true;
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

       if (status) {
          $(".text_red").html("");
       } else {
          status = false;
       }
  }

  
 function networkchecker_script()
  {
    var online = navigator.onLine;
    return online;
  }


    $("#btnActivate").click(function(e){
    e.preventDefault();
      if(field_required_prompter('.act',5000)==true)
      {
        if(networkchecker_script()){
        var code =  $("#prodcode").val();
        if(code.length<16){
           $(this).html("Invalid activation code entered");
            setTimeout(function(){
            $("#btnActivate").html("Activate Account");
           },3000);
          }else{
           postActivate(code);  
          }
       }else{
        alert("No Internet Connection");
       }
     }
  });
  

  
    function detectLocation(){
     var geocoder;
    if (navigator.geolocation) {
        
                var $this = $(".login");
                $state = $this.find('button > .state');
                $this.addClass('loading');
                $state.html('Authenticating Please wait');
        
        var location_timeout = setTimeout(5000);
    
        navigator.geolocation.getCurrentPosition(function(position) {
            clearTimeout(location_timeout);
    
            var lat = position.coords.latitude;
            var lng = position.coords.longitude;
             
             authenticate(lat, lng);
             //recapture(lat, lng);
        }, function(error) {
                  swal('Alert', 'Please allow location to proceed', 'error');
            clearTimeout(location_timeout);
        });
        } else {
           swal('Alert', 'Please allow location to proceed', 'error');
        }
    }


    function postActivate(code){
    var fd = new FormData();
    var codeInput = [];
    codeInput = code.split("-");     
    var period = parseInt(codeInput[1], 2);
    fd.append("code", codeInput[0]);
    fd.append("period", period);
    $.ajax({
          url:""+$online__access__tag+"processor/activate",
          type:"POST",
          data: fd,
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
             $("#btnActivate > i").removeClass().addClass("fa fa-spinner fa-spin");
             $("#btnActivate").prop("disabled", true);
             $("#btnActivate").css("cursor", "no-drop");
             $("#btnActivate").html("Activating.... Please wait!");
          },
          success:function(data)
          {
             $("#btnActivate > i").removeClass().addClass("");
             $("#btnActivate").prop("disabled", false);
             $("#btnActivate").css("cursor", "");
             if(data.status === "success"){
              $("#btnActivate").html(data.message);
                 setTimeout(function() {
                  $(".logSession").show();
                  $(".expSession").hide();
              }, 4000);
           }else{
              $("#btnActivate").html(data.message);
                 setTimeout(function() {
               $("#btnActivate").html("Activate Account");  
              }, 4000); 
           }
        },
        error: function(err) {
          alert(err.responseText)
            console.log(err);
        }
    });
  }


  
  
  function authenticate(lat, lng){
   if(networkchecker_script())
        {
        var formdata = new FormData();
        formdata.append("user",$("#user").val());
        formdata.append("pass",$("#pass").val());
        formdata.append("cordinate", lat+", "+lng);
        $.ajax({
              url:""+$online__access__tag+"processor/processLogin",
              type:"POST",
              data:formdata,
              cache:false,
              contentType:false,
              processData:false,
               dataType: 'JSON',
              beforeSend:function()
              {
                  $("#btnLogin > i").removeClass().addClass("fa fa-spinner fa-spin");
                  $("#btnLogin").prop("disabled", true);
                  $("#btnLogin").css("cursor", "no-drop");
                  $("#btnLogin").html("Logging In.... Please wait!");
              },
              success:function(data)
              { 
                  setTimeout(function() {
                  $("#btnLogin > i").removeClass().addClass("");
                  $("#btnLogin").prop("disabled", false);
                  $("#btnLogin").css("cursor", "");
                  $("#btnLogin").html("Login to L-BOOK");
                  },3000);

                  if(data.status !== "expire"){
                   if(data[0].status === "failed"){
                    $("#btnLogin").html("Invalid Username or Password");
                     setTimeout(function(){
                    $("#btnLogin").html("Login to L-BOOK");
                    },5000);      
                  }else if(data[0].status === "success"){
                         sessionStorage.setItem('status', '1');
                         sessionStorage.setItem('role', data[0].role);
                         sessionStorage.setItem('id', data[0].id);
                         sessionStorage.setItem('surname', data[0].surname);
                         sessionStorage.setItem('othername', data[0].othername);
                         sessionStorage.setItem('company', data[0].company);
                         
                         window.location = $online__access__tag + "dashboard2";
                  }
                }else{
                  $(".logSession").hide();
                  $(".expSession").show();
                }
              },
              error:function(err){
                //alert(err.responseText)
              }
      });
    }else{
      alert("No Internet connection");
    }
  }


    $("#btnLogin").click(function(e){
    e.preventDefault();
       if(field_required_prompter('.log',5000)==true)
      {
         authenticate('000', '000');   
      }
      else
      {
  
      }
    });



  $("#idGetKey").click(function(e){
    e.preventDefault();
    if(networkchecker_script()){
       $.ajax({
              url:""+$online__access__tag+"processor/buyactivate",
              type:"POST",
              cache:false,
              dataType:'json',
              contentType:false,
              processData:false,
              success:function(data)
              {
                 window.location = 'https://pay.linksengineering.net?company='+data.company+'&email='+data.email+'&contact='+data.contact+'&product='+data.product+'';
              },
               error:function(data){
                alert(data.responseText);
              }
      });
    }else{
      swal("No Internet","Please connect Internet","error")
    }
  });
    
    
    
    $("#btnReset").click(function(e){
    e.preventDefault();
      var username = $("#user").val();
      window.location = $online__access__tag + "reset-passwd?username="+username;
     
    });
    
    
        $("#btnVercode").click(function(e){
          if(field_required_prompter('.res',5000)==true)
              {
                var user =  $("#idUser").val().trim();
                checkUser(user);
                }
              
              else
              {
                      
            
              }
        });
        

          $("#btnNext").click(function(e){
          if(field_required_prompter('.resLog',5000)==true)
              {
                 $("#btnNext > i").removeClass().addClass("fa fa-spinner fa-spin");
                $("#btnNext").prop("disabled", true);
                $("#btnNext").css("cursor", "no-drop");
                 
                var code =  $("#verCode").val().trim();
                if(code == sessionStorage.getItem('reset')){
                    window.location = $online__access__tag + "reauth";
                }else{
        
                    $("#btnNext > i").removeClass().addClass("");
                    $("#btnNext").prop("disabled", false);
                    $("#btnNext").css("cursor", "default");
                    
                    swal("Error", "Invalid code entered", "error");
                }
            }
        });
        
        
        
        
        
        
        
        
          $("#btnConfirm").click(function(e){
          if(field_required_prompter('.logRes',5000)==true)
              {
                var idPass =  $("#idPass").val();
                var idConf =  $("#idConf").val();
                
                if(idPass == idConf){
                    updatePassword(idPass, sessionStorage.getItem('user'));
                }else{
                    swal("Error", "Password do not match", "error"); 
                }
              }
              
              else
              {
                      
              }
        });
        
        
    
    
    function updatePassword(pass, user){        
    var formdata = new FormData();
    formdata.append("user", user);
    formdata.append("pass", pass);
    $.ajax({
              url:""+$online__access__tag+"processor/updatePassword",
              type:"POST",
              data:formdata,
              cache:false,
              contentType:false,
              processData:false,
              beforeSend:function()
              {
                $("#btnConfirm > i").removeClass().addClass("fa fa-spinner fa-spin");
                $("#btnConfirm").prop("disabled", true);
                $("#btnConfirm").css("cursor", "no-drop");
              },
              success:function(data)
              { 
                  if(data == 'success'){
                    $("#btnConfirm > i").removeClass().addClass("");
                    $("#btnConfirm").prop("disabled", false);
                    $("#btnConfirm").css("cursor", "default");
                    swal("Done", "Password reset successful", "success");
                    window.location = $online__access__tag + "auth";
                  }else{
                      swal("Error", "Password reset failed", "error");
                  }
              },
               error:function(data){
                alert(data.responseText);
              }
      });
  }
        

    
   function checkUser(user){
    var formdata = new FormData();
    formdata.append("user", user);
    
    sessionStorage.setItem('user', user);

      $.ajax({
              url:""+$online__access__tag+"processor/checkUser",
              type:"POST",
              data:formdata,
              cache:false,
              contentType:false,
              processData:false,
              beforeSend:function()
              {
                $("#btnVercode > i").removeClass().addClass("fa fa-spinner fa-spin");
                $("#btnVercode").prop("disabled", true);
                $("#btnVercode").css("cursor", "no-drop");
              },
              success:function(data)
              { 
                  if(data == ''){
                    $("#btnVercode > i").removeClass().addClass("");
                    $("#btnVercode").prop("disabled", false);
                    $("#btnVercode").css("cursor", "default");
                       swal("Error", "Username not found", "error");
                
                  }else{
                    sendVerificationCode(data);
                  }
              },
               error:function(data){
                alert(data.responseText);
              }
      });
  }


    
        $("#verCode").on('change', function(e) {
            $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
        });
        
        $("#verCode").on('keypress', function(e) {
          keys = ['0','1','2','3','4','5','6','7','8','9','.'];
          return keys.indexOf(event.key) > -1;
        });


        function sendVerificationCode(contact){
        var code = Math.floor(100000 + Math.random() * 900000);
        var gencode = code;
        sessionStorage.setItem('reset', gencode);
        sessionStorage.setItem('vercont', contact)
        var title = 'Password Reset';
        var message =  'Your reset code is '+gencode;
        const Http = new XMLHttpRequest();
        const url="https://api.smsglobal.com/http-api.php?action=sendsms&user=t4e756q2&password=waLASRNa&from="+title+"&to="+contact+"&text="+message+"";
        Http.open("GET", url);
        Http.send();
        Http.onreadystatechange = (e) => {
            
              var response = Http.responseText;
              
              setTimeout(function(){ 
              if(response.includes('OK: 0; Sent queued message ID:')){
                    post_sms(contact, message, "reset");
                     window.location = $online__access__tag + "code-verification";
                }else{
                    
                }
              }, 3000);
            }
          }

    
        $('#idVer').html('Reset verification code has been sent to: '+sessionStorage.getItem('vercont'));
        
    
    function post_sms(contact, message, accountno) {
    var fd = new FormData();
    fd.append("accountno", accountno);
    fd.append("contact", contact);
    fd.append("message", message);
      
    $.ajax({
          url:""+$online__access__tag+"processor/postSMS",
          data:fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          processData:false,
          success:function(data)
        {
            console.log(data);
        },
        error: function(err) {
          console.log(err);
        }
    });
} 
        


  function recapture(lat, lng){
   if(networkchecker_script())
    {
      var formdata = new FormData();
      formdata.append("token",$("#g-recaptcha-response").val());
      $.ajax({
              url:""+$online__access__tag+"processor/recaptcha",
              type:"POST",
              data:formdata,
              cache:false,
              contentType:false,
              processData:false,
              dataType: 'json',
              beforeSend:function()
              {
          
              },
              success:function(data)
              { 

                if(data.success&&data.score > 0.5){
                    authenticate(lat, lng);
                }else{
                
                swal("Error", "Sorry, we suspect you\'re a robot", "error");
                location.reload();   
                }
              },
              error:function(data){
                alert(data.responseText);
              }
      });
    }else{
      alert("No Internet connection");
    }
  }
    
    
    
    

  $("#pending").click(function(e){
    e.preventDefault();
    alert("Hello world");
    //window.location.href = "pending";
  });
  
  
  // Create earn user  from Dashoboard
   $("#btnRegister").click(function(e){
          e.preventDefault();
          
          if(field_required_prompter('.input2',5000)==true)
              {

                register();
                 
              }
              
              else
              {
          
              }
          
        });
  
    function register(){
        
    var rotator = $("#rotator").val().trim();  
    var fname = $("#fname").val().trim();
    var lname =  $("#lname").val().trim();
    var name = fname +" "+ lname;
    var contact =  $("#regContact").val().trim();
    var password = $("#regPassword").val().trim();
  

    var formdata = new FormData();
    formdata.append("name", name);
    formdata.append("password", password);
    formdata.append("contact", contact);
    formdata.append("rotator", rotator);
    
     
      $.ajax({
      
              url:""+$online__access__tag+"processor/postRecord",
              type:"POST",
              data:formdata,
              cache:false,
              contentType:false,
              processData:false,
              dataType: 'json',
              beforeSend:function()
              {
                $("#btnRegister > i").removeClass().addClass("fa fa-spinner fa-spin");
                $("#btnRegister").prop("disabled", true);
                $("#btnRegister").css("cursor", "no-drop");
                
              },
              success:function(data)
              { 
                  
                $("#btnRegister > i").removeClass().addClass("fa fa-pencil-square-o");
                $("#btnRegister").prop("disabled", false);
                $("#btnRegister").css("cursor", "default");
                  
                 if(data == 'exist'){
                     
                        $("#errorRegister").after("<p id='eng' style='color:red;text-align: center' >Phone number already exist</p>");
                        
                        setTimeout(function(){
                            $("#eng").remove();
                         }, 5000);

                  }else if(data == 'success'){
                      
                      sessionStorage.setItem('contact', contact);
                      
                        $("#errorRegister").after("<p id='eng' style='color:green;text-align: center' >Registration successful... Redirecting to Login</p>");
                        
                            $("#btnRegister").prop("disabled", true);
                            $("#btnRegister").css("cursor", "no-drop");
                        
                        setTimeout(function(){
                            $("#eng").remove();
                             
                             window.location = $online__access__tag + "auth?contact="+contact;
                            
                         }, 3000);
                      
                  }
                  
             
  
              },
               error:function(data){
                alert(data.responseText);
              }
            
      });
  }
  
  

     grecaptcha.ready(function(){
      grecaptcha.execute('6Lfz-N4ZAAAAAGsZE3tO3hmJkqmr8LIxkcyHEUQl', {action: 'homepage'}) 
      .then(function(token){
          $("#g-recaptcha-response").val(token);
      });
    });
  
});