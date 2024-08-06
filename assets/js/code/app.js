$(document).ready(function(){
$online__access__tag = '/';

 var href = $(location).attr('href');  
 var index = href.lastIndexOf("/");
 var controller = href.substring(index+1);

if(sessionStorage.getItem('status') != '1'){
        window.location = $online__access__tag + "auth";
}if(sessionStorage.getItem('id') === ''||sessionStorage.getItem('id').length === 0){
        window.location = $online__access__tag + "auth";
}else{
      

    var isCustomerValid = false, isGuarantor1Valid = false, isGuarantor2Valid = false, isAmountValide= false;

    var smsSource='', account_status, product;
    var idleTime;
   //Increment the idle time counter every minute.
    var idleInterval = setInterval(timerIncrement, 60000); // 1 minute

    //Zero the idle timer on mouse movement.
    $(this).mousemove(function (e) {
        idleTime = 0;
    });
    $(this).keypress(function (e) {
        idleTime = 0;
    });


function isNetwork()
  {
    var online = navigator.onLine;
    return online;
  }


    function timerIncrement() {
        idleTime = idleTime + 1;
        if (idleTime > 20) { // 20 minutes
         window.location = $online__access__tag + "auth"
        }
    }

  
       function post_lsyc(){
         check_server();
        }

        function check_server(api) {
        $.ajax({
              url:""+$online__access__tag+"processor/check_server_exist",
              type:"POST",
              contentType: false,       
              cache: false,
              // dataType:'json', 
              processData:false,
              beforeSend:function()
              {
            
              },
              success:function(data)
            {
               if(data==="connect"){
                 $(".btnSyncNow > i").removeClass().addClass("fa fa-spinner fa-spin");
                 $(".btnSyncNow").prop("disabled", true);
                 $(".btnSyncNow").css("cursor", "no-drop");
                 $(".btnSyncNow").html("Syncing.....")
                 $("#syncPic").hide();
                 $("#syncGif").show();
                   
                    syncAccount();

               }else{
                    swal("Server could not be reached! Please Check your Internet")
               }
            },
            error: function(err) {
                //alert(err.responseText)
            }
        });
    }



       var syncAccount = function api_account(){
        $.ajax({
              url:""+$online__access__tag+"processor/api_account",
              type:"POST",
              contentType: false,       
              cache: false,
              dataType:'json', 
              processData:false,
              beforeSend:function()
              {
            
              },
              success:function(data)
            {
 
             syncActivate();
              
            },
            error: function(err) {
                syncActivate();
            }
        });
    }
    
    
       var syncActivate = function api_activation(){
        $.ajax({
              url:""+$online__access__tag+"processor/api_activation",
              type:"POST",
              contentType: false,       
              cache: false,
              dataType:'json', 
              processData:false,
              beforeSend:function()
              {
            
              },
              success:function(data)
            {
              syncAdmin();
            },
            error: function(err) {
               syncAdmin();
            }
        });
    }
    
    
       var syncAdmin = function api_admin(){
        $.ajax({
              url:""+$online__access__tag+"processor/api_admin",
              type:"POST",
              contentType: false,       
              cache: false,
              dataType:'json', 
              processData:false,
              beforeSend:function()
              {
            
              },
              success:function(data)
            {
              syncCharge();
            },
            error: function(err) {
               syncCharge();
            }
        });
    }
    
    
    var syncCharge = function api_charge(){
        $.ajax({
              url:""+$online__access__tag+"processor/api_charge",
              type:"POST",
              contentType: false,       
              cache: false,
              dataType:'json', 
              processData:false,
              beforeSend:function()
              {
            
              },
              success:function(data)
            {
              syncBalance();
            },
            error: function(err) {
              syncBalance();
            }
        });
    }
    
    
        var syncBalance = function api_balance(){
        $.ajax({
              url:""+$online__access__tag+"processor/api_balance",
              type:"POST",
              contentType: false,       
              cache: false,
              dataType:'json', 
              processData:false,
              beforeSend:function()
              {
            
              },
              success:function(data)
            {
              syncCheck();
            },
            error: function(err) {
               syncCheck();
            }
        });
    }
    
    
        var syncCheck = function api_check(){
        $.ajax({
              url:""+$online__access__tag+"processor/api_check",
              type:"POST",
              contentType: false,       
              cache: false,
              dataType:'json', 
              processData:false,
              beforeSend:function()
              {
            
              },
              success:function(data)
            {
              syncClient();
            },
            error: function(err) {
              syncClient();
            }
        });
    }
    
        var syncClient = function api_client(){
        $.ajax({
              url:""+$online__access__tag+"processor/api_client",
              type:"POST",
              contentType: false,       
              cache: false,
              dataType:'json', 
              processData:false,
              beforeSend:function()
              {
            
              },
              success:function(data)
            {
              syncDeposit();
            },
            error: function(err) {
                // alert(err.responseText)
               syncDeposit();
            }
        });
    }
    
    
        var syncDeposit = function api_deposit(){
        $.ajax({
              url:""+$online__access__tag+"processor/api_deposit",
              type:"POST",
              contentType: false,       
              cache: false,
              dataType:'json', 
              processData:false,
              beforeSend:function()
              {
            
              },
              success:function(data)
            {
              syncFee();
            },
            error: function(err) {
               syncFee();
            }
        });
    }
    
    
        var syncFee = function api_fee(){
        $.ajax({
              url:""+$online__access__tag+"processor/api_fee",
              type:"POST",
              contentType: false,       
              cache: false,
              dataType:'json', 
              processData:false,
              beforeSend:function()
              {
            
              },
              success:function(data)
            {
              syncProduct();
            },
            error: function(err) {
               syncProduct();
            }
        });
    }
    
    
    
     
        var syncProduct = function api_product(){
        $.ajax({
              url:""+$online__access__tag+"processor/api_product",
              type:"POST",
              contentType: false,       
              cache: false,
              dataType:'json', 
              processData:false,
              beforeSend:function()
              {
            
              },
              success:function(data)
            {
              syncSubscription();
            },
            error: function(err) {
               syncSubscription();
            }
        });
    }
    
    
        var syncSubscription = function api_subscription(){
        $.ajax({
              url:""+$online__access__tag+"processor/api_subscription",
              type:"POST",
              contentType: false,       
              cache: false,
              dataType:'json', 
              processData:false,
              beforeSend:function()
              {
            
              },
              success:function(data)
            {
              syncWithdrawal();
            },
            error: function(err) {
              syncWithdrawal();
            }
        });
    }
    
    
       var syncWithdrawal = function api_withdrawal(){
        $.ajax({
              url:""+$online__access__tag+"processor/api_withdrawal",
              type:"POST",
              contentType: false,       
              cache: false,
              dataType:'json', 
              processData:false,
              beforeSend:function()
              {
            
              },
              success:function(data)
            {
              syncDelete();
            },
            error: function(err) {
                syncDelete();
            }
        });
    }



        var syncDelete = function api_delete(){
        $.ajax({
              url:""+$online__access__tag+"processor/api_delete",
              type:"POST",
              contentType: false,       
              cache: false,
              dataType:'json', 
              processData:false,
              beforeSend:function()
              {
            
              },
              success:function(data)
            {
              syncServer();
            },
            error: function(err) {
                syncServer();
            }
        });
    }




         var syncServer = function server_api(){
          $.ajax({
          url:""+$online__access__tag+"processor/server_account_tb",
          type:"POST",
          contentType: false,       
          cache: false, 
         dataType: "JSON",            
          processData:false,
          beforeSend:function()
          {
                              
          },
          success:function(data)
          {
            if(data.status === "Done"){
                $("#syncPic").show();
                $("#syncGif").hide();
                $(".btnSyncNow > i").removeClass().addClass("");
                $(".btnSyncNow").prop("disabled", false);
                $(".btnSyncNow").css("cursor", "");
                $(".btnSyncNow").html("Sync Complete");
                setTimeout(function() {
                $(".btnSyncNow").html("Sync Now");
               }, 5000); 
                $("#idLastSync").html("Last Sync: "+data.date+" "+data.time+"");
            }else{
                swal(JSON.stringify(data));
            }
           },
            error: function(err) {
            }
           });   
        }




     if(sessionStorage.getItem('role') == '1'){
      $("#btnUpdateDep").prop("disabled", false);
    }
    
    
     $("#idAmount").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#idAmount").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
    
    $("#idDepAmount").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#idDepAmount").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
    
    $("#idAmountWithdraw").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#idAmountWithdraw").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
    
    $("#idContact1").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#idContact1").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
    
       
    $("#idClientContact").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#idClientContact").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
    
    $("#idMinAmount").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#idMinAmount").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
    
    $("#idMaxAmount").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#idMaxAmount").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
    $("#idBalMin").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#idBalMin").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
    $("#idBalMax").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#idBalMax").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
    
    $("#idInterestRate").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#idInterestRate").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
    $("#idEntryFee").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#idEntryFee").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
    $("#idWithdrawalFee").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#idWithdrawalFee").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });

     $("#idMinAmountupdate").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#idMinAmountupdate").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
    $("#idMaxAmountupdate").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#idMaxAmountupdate").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
     $("#idBalMinupdate").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#idBalMinupdate").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
      $("#idBalMaxupdate").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#idBalMaxupdate").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
     $("#idEntryFeeupdate").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#idEntryFeeupdate").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
    $("#idWithdrawalFeeupdate").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#idWithdrawalFeeupdate").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
    
    $("#idUserContact").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#idUserContact").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
    
    $("#idUserContactupdate").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#idUserContactupdate").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
    
     $("#idAmount").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#idAmount").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
    $("#idAmountWithdraw").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#idAmountWithdraw").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
    $("#loanMinAmnt").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#loanMinAmnt").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
    $("#loanMaxnAmnt").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#loanMaxnAmnt").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
      $("#loanFormFee").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#loanFormFee").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
    $("#loanProcessFee").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#loanProcessFee").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
    $("#loanInterest").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#loanInterest").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
   // alert(sessionStorage.getItem('role'));
    
    // if(sessionStorage.getItem('role') != '1'){
    //     $("#idProductIcon").css("display", "none");
    //     $("#idAccountIcon").css("display", "none");
    //     $("#idManagementIcon").css("display", "none");
   //     $("#idTransactionIcon").css("display", "none");
    //     $("#idClientIcon").css("display", "none");
    //     $("#idLoanIcon").css("display", "none");
    //    $("#idReportIcon").css("display", "none");
    // }
   
var code='';

    /* Initialization */
    if(controller.includes('clients')){
      loadClients();  
    }else if(controller.includes('product')){
        loadProduct();
    }else if(controller.includes('openaccount')){
        //loadInterestCalc();
        loadNoAccount();
    }else if(controller.includes('deposit')){
        loadDeposits();
    }else if(controller.includes('withdrawal')){
        loadWithdrawals();
    }else if(controller.includes('savings')){
        //  loadInterestCalc();
        //  checkAccount();
        //  chargeSMS();
        //  calculateBalancesAll();
        loadSavings();
    }else if(controller.includes('search')){
        //  loadInterestCalc();
        //  checkAccount();
        //  chargeSMS();
        //  calculateBalancesAll();
        loadSavings();
    }else if(controller.includes('management')){
        loadManagement();
    }else if(controller === 'products'){
        loadLoanProducts();
    }else if(controller === 'fees'){
        loadFees();
    }else if(controller === 'report'){
         calculateBalancesAll();
         loadReportDefault();
         loadLatestUpdate();
    }else if(controller === 'interest'){
           calculateBalancesAll();
         loadInterestCalc();
         checkAccount();
         loadInterest();
    }else if(controller === 'sms'){
         loadSMS();
    }else if(controller === 'matured'){
        fetchMatured();
    }else if(controller == 'daily-record'){
        
        if(sessionStorage.getItem('origin')== 'dashboard'){
               $('#modalAddMomo').modal();
               
                sessionStorage.removeItem('origin');
        }
        
        loadMomoTrans();
    }else if(controller === 'deduction'){
        fetchDeduction();
    }else if(controller === 'contribution'){
        populateDeduction();
        fetchContribution();
    }else if(window.location === 'staff-commission'){
         calculateStaffCommission();
         loadStaffCommission();
    
    }else if(controller === 'momo-commission'){
         calculateStaffCommission();
         loadMomoCommission();
    }else if(controller === 'payroll'){
        populateDeduction();
         calculateStaffCommission();
    }else if(controller === 'chart'){
       calculateBalancesAll();
        populateGraph();
    }else if(controller.includes("register")){
      fetchAreaList();
    }else if(controller.includes("cust-account")){
      loadProduct();
      loadNewClient();
    }else if(controller.includes("acc-manage")){
      $("#idAccNoClient").html(sessionStorage.getItem("accno"));
      fetchDetails(sessionStorage.getItem("accno"));
    }else if(controller.includes("settings")){
      validatePage();
    }


    function validatePage(){
     if($('.clWelcomeSMS').val()==="0"){
       $(".clWMess").show();
     }else{
        $(".clWMess").hide();
     } 

       if($('.clDepositSMS').val()==="0"){
       $(".clDMess").show();
     }else{
        $(".clDMess").hide();
     }


     if($('.clWithdrawalSMS').val()==="0"){
       $(".clWithMess").show();
     }else{
        $(".clWithMess").hide();
     }

     if($('.clTransferSMS').val()==="0"){
       $(".clTMess").show();
     }else{
        $(".clTMess").hide();
     }

    }

    
    $('.clWelcomeSMS').change(function(){
       var selected = $('option:selected',this).val();  
        if(selected === '0'){
           $(".clWMess").show();
        }else{
          $(".clWMess").hide();  
        }
    });


     $('.clDepositSMS').change(function(){
       var selected = $('option:selected',this).val();  
        if(selected === '0'){
           $(".clDMess").show();
        }else{
          $(".clDMess").hide();  
        }
    });


     $('.clWithdrawalSMS').change(function(){
       var selected = $('option:selected',this).val();  
        if(selected === '0'){
           $(".clWithMess").show();
        }else{
          $(".clWithMess").hide();  
        }
    });

    $('.clTransferSMS').change(function(){
       var selected = $('option:selected',this).val();  
        if(selected === '0'){
           $(".clTMess").show();
        }else{
          $(".clTMess").hide();  
        }
    });




     $(document).on('click', "#btnSMSChanges", function(){
        var welcome_sms = $(".clWelcomeSMS").val();
        var deposit_sms = $(".clDepositSMS").val();
        var withdrawal_sms = $(".clWithdrawalSMS").val();
        var transfer_sms = $(".clTransferSMS").val();

        var welcome_mess = $("#idWelcomeMess").val();
        var deposit_mess = $("#idDepositMess").val();
        var withdrawal_mess = $("#idWithMess").val();
        var transfer_mess = $("#idTransferMess").val();
        
        if(welcome_sms==="0"&&!welcome_mess){
            field_required_prompter('#idWelcomeMess',5000);
        }else if(deposit_sms==="0"&&!deposit_mess){
            field_required_prompter('#idDepositMess',5000);
        }else if(withdrawal_sms==="0"&&!withdrawal_mess){
            field_required_prompter('#idWithMess',5000);
        }else if(transfer_sms==="0"&&!transfer_mess){
            field_required_prompter('#idTransferMess',5000);
        }else{
            var setclause = "WELCOME_SMS = "+welcome_sms+", DEPOSIT_SMS = "+deposit_sms+", WITHDRAWAL_SMS = "+withdrawal_sms+", TRANSFER_SMS = "+transfer_sms+", WELCOME_MESS = '"+welcome_mess+"', DEPOSIT_MESS = '"+deposit_mess+"', WITHDRAWAL_MESS = '"+withdrawal_mess+"', TRANSFER_MESS = '"+transfer_mess+"', POSTED_BY = "+sessionStorage.getItem("id")+"";
            updateRecord("sms_settings", 'none', setclause, "#btnSMSChanges", "Apply Changes"); 
        }
     });



      $(document).on('click', "#btnUserChanges", function(){
        var teller_id = $(".3").val();
        var mobile_id = $(".5").val();

        var registerTeller = $(".register3").val();
        var depositTeller = $(".deposit3").val();
        var withdrawalTeller = $(".withdrawal3").val();
        var transferTeller = $(".transfer3").val();
        var historyTeller = $(".history3").val();
        var loanTeller = $(".loan3").val();

        var registerMobile = $(".register5").val();
        var depositMobile = $(".deposit5").val();
        var withdrawalMobile = $(".withdrawal5").val();
        var transferMobile = $(".transfer5").val();
        var historyMobile = $(".history5").val();
        var loanMobile = $(".loan5").val();


         var whereclause1 = "ROLE = "+teller_id+"";
         var setclause1 = "REGISTER = "+registerTeller+", DEPOSIT = "+depositTeller+", WITHDRAWAL = "+withdrawalTeller+", TRANSFER = "+transferTeller+", HISTORY = '"+historyTeller+"', LOAN = '"+loanTeller+"', POSTED_BY = "+sessionStorage.getItem("id")+"";
         updateRecord("role_settings", whereclause1, setclause1, "#btnUserChanges", "Apply Changes"); 

         var whereclause = "ROLE = "+mobile_id+"";
         var setclause = "REGISTER = "+registerMobile+", DEPOSIT = "+depositMobile+", WITHDRAWAL = "+withdrawalMobile+", TRANSFER = "+transferMobile+", HISTORY = '"+historyMobile+"', LOAN = '"+loanMobile+"', POSTED_BY = "+sessionStorage.getItem("id")+"";
         updateRecord("role_settings", whereclause, setclause, "#btnUserChanges", "Apply Changes");
     });


        
    function fetchBalInfo(accno){
    var fd = new FormData();
    fd.append("accno", accno);
    $.ajax({
          url:""+$online__access__tag+"processor/fetchAccInfo",
          type:"POST",
          data: fd,
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          beforeSend:function()
          {
            $("#clLoad").show();
          },
          success:function(data)
          { 
            $("#clLoad").hide();
            $("#idbalance").html(data[0].balance);
            $("#idDep").html(data[0].lastdeposit);
            $("#idDepDate").html(data[0].lastdeposit_date);
            $("#idWith").html(data[0].lastwithdrawal);
            $("#idWithDate").html(data[0].lastwithdrawal_date);
            $("#idDepPost").html(data[0].ldepost);
            $("#idWithPost").html(data[0].lwithpost);

            sessionStorage.setItem("oldbal",data[0].balance);
          },
           error: function(err) {
            console.log(err);
        }
    });
}


    function fetchDetails(accno){
    var fd = new FormData();
    fd.append("accno", accno);
    $.ajax({
          url:""+$online__access__tag+"processor/fetchAccDetails",
          type:"POST",
          data: fd,
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          beforeSend:function()
          {
            $("#preloader").show();
          },
          success:function(data)
          {
            $("#preloader").hide();
            $("#idImage2").empty();
            
            if(data!=="none"){

            if(data[0].photo){
              $("#idImage2").append("<img src='upload/"+data[0].photo+"' width='160' height='160'>");
            }else{
               $("#idImage2").append("<img src='upload/"+data[0].photo+"' width='160' height='160'>");
            }
           
            $("#clCode").val(data[0].code);
            $("#idAccName").html(data[0].fullname); 
            $("#idAccProduct").html(data[0].product);
            $("#clPhone").val(data[0].phone);
            $("#clIDNo").val(data[0].idno); 
            $("#idbalance").html(data[0].balance);
            $("#idDep").html(data[0].lastdeposit);
            $("#idDepDate").html(data[0].lastdeposit_date);
            $("#idWith").html(data[0].lastwithdrawal);
            $("#idWithDate").html(data[0].lastwithdrawal_date);
            $("#idDepPost").html(data[0].ldepost);
            $("#idWithPost").html(data[0].lwithpost);
            $("#idAccDate").html(data[0].date_created);
            if(data[0].product === "SAVINGS ACCOUNT"){
                $("#idAccSub").html(data[0].subscription).show();
            }
            sessionStorage.setItem("oldbal",data[0].balance);
            sessionStorage.setItem("client_id",data[0].id); 
            sessionStorage.setItem("acc_status",data[0].acc_status);
            sessionStorage.setItem("product",data[0].product);

            }else{
                $("#exampleModalLabel").html("Invalid Account #")
                $(".modal-body").html("<h3>Records Not Found</h3>");
                $(".clModalSuccess").modal(
                {
                backdrop: 'static',
                keyboard: false
                });
                setTimeout(function() {
                $(".clClose").click();
                window.history.back();
               }, 2000);

                $(".cust-body").hide();
            }
          },
           error: function(err) {
            console.log(err);
          alert(err.responseText);
        }
    });
}
    

    function fetchAreaList(){
         $.ajax({
          url:""+$online__access__tag+"processor/fetchArea",
          type:"POST",
          dataType:"JSON",
          contentType: false,       
          cache: false,           
          processData:false,
          beforeSend:function()
          {
  
          },
          success:function(data)
          {
              var dropdown = $("#idResidence");
               $(dropdown).empty();
                    dropdown.append($("<option />").val("").text("Select Area").prop('selected',true).prop('disabled',true));
                    dropdown.append($("<option />").val("new").text("Add New Area"));
                   for(var i=0;i<data.length; i++){
                    dropdown.append($("<option />").val(data[i].area).text(data[i].area));
                   }
         },
        error: function(err) {
        }
    });
    }

    
    $("#idCompany").html(sessionStorage.getItem('company'));
    
function field_required_prompter(key,timeout)
  {
    var dataValid = true;
    var status = false;

    $(key).each(function()
    {
        var cur = $(this);
         if ($.trim(cur.val()) == '')
         { 
        //   cur.after('<span class="text_red">Field is required</span>');
           cur.css('border-color','red');

           setTimeout(function() {
            cur.parent().find('span').remove();
              cur.css('border-color','');
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





  var list = [];
  var list2 = [];
  var list3 = [];
  var list4 = [];
  var list5 = [];
  var list6 = [];
  var list7 = [];
  var list8 = [];
  var list9 = [];
  var list10 = [];
  var list11 = [];

  $(document).on('click', 'input[type=checkbox]', function(e){
  var dt = $("#dataTable").DataTable();
  var data = dt.cells($(this).closest('td').siblings().eq(0)).data();
  var one = dt.cells($(this).closest('td').siblings().eq(1)).data();
  var two = dt.cells($(this).closest('td').siblings().eq(2)).data();
  var three = dt.cells($(this).closest('td').siblings().eq(3)).data();
  var four = dt.cells($(this).closest('td').siblings().eq(4)).data();
  var five = dt.cells($(this).closest('td').siblings().eq(5)).data();
  var six = dt.cells($(this).closest('td').siblings().eq(6)).data();
  var seven = dt.cells($(this).closest('td').siblings().eq(7)).data();
  var eight = dt.cells($(this).closest('td').siblings().eq(8)).data();
  var nine = dt.cells($(this).closest('td').siblings().eq(9)).data();
  var ten = dt.cells($(this).closest('td').siblings().eq(10)).data();
  
              if(!list.includes(data[0])){
                list.push(data[0]);
                list2.push(one[0]);
                list3.push(two[0]);
                list4.push(three[0]);
                list5.push(four[0]);
                list6.push(five[0]);
                list7.push(six[0]);
                list8.push(seven[0]);
                list9.push(eight[0]);
                list10.push(nine[0]);
                list11.push(ten[0]);
              }else{
            
                  for(var count=0; count<list.length; count++){
                    if(list[count] === data[0]){
                      list.splice(count, 1); 
                      list2.splice(count, 1); 
                      list3.splice(count, 1); 
                      list4.splice(count, 1); 
                      list5.splice(count, 1); 
                      list6.splice(count, 1);
                      list7.splice(count, 1); 
                      list8.splice(count, 1);  
                      list9.splice(count, 1); 
                      list10.splice(count, 1); 
                  count--; 
                      }
                     }
                  }
                  
          });



function updateAdminUser(){
  if(list == ''){
      alert('Please select record');
    }else if(list2.length > 1){
        alert('Select only one record');
          list = [];
          list2 = [];
          list3 = [];
          list4 = [];
          list5 = [];
          list6 = [];
          list7 = [];
          list8 = [];
          list9 = [];
          list10 = [];
    }else {
      sessionStorage.setItem("edit-user", list);   
     sessionStorage.setItem("fullname", list4);
     sessionStorage.setItem("contact", list5);
     sessionStorage.setItem("username", list2);
     sessionStorage.setItem("password", list3);
     sessionStorage.setItem("role", list6);
    window.location = $online__access__tag + "edit-user";
    }
}


 if(controller.includes("edit-user")){
    var fullname = sessionStorage.getItem("fullname");
    var contact = sessionStorage.getItem("contact");
    var username = sessionStorage.getItem("username");
    var password = sessionStorage.getItem("password");
   
      $('#idFullnameupdate').val(fullname);
      $('#idUserContactupdate').val(contact);
      $('#idUsernameupdate').val(username);
      $('#idPasswordupdate').val(password);

      fetchPopRole();
 }



    function fetchPopRole(){
    $.ajax({
          url:""+$online__access__tag+"processor/fetchRole",
          type:"POST",
          contentType: false,       
          cache: false, 
          processData:false,
          dataType:'JSON',
          beforeSend:function()
        {
        },
          success:function(data)
        {
            var role = sessionStorage.getItem("role");
            var rolv = "";
            if(role === "Administrator"){
              rolv = "1";
            }else if(role === "Loans officer"){
              rolv = "2";
            }else if(role === "Teller"){
              rolv = "3";
            }else if(role === "Clerk"){
              rolv = "4";
            }else if(role === "Mobile banker"){
              rolv = "5";
            }else if(role === "MOMO Agent"){
              rolv = "6";
            }

            $("#idRoleupdate").empty();
             var dropdown = $("#idRoleupdate");
             dropdown.append($("<option />").val(rolv).text(role)).prop('selected',true);
            if(data !== "none"){
             for(var i=0;i<data.length; i++){
              dropdown.append($("<option />").val(data[i].id).text(data[i].role))
             }
            }
           
        },
        error: function(err) {
         // alert(err.responseText);
        }
    });
}





    function updateDailyRecord(){
  if(list == ''){
      swal('Alert', 'Please select record', 'error');
    }else if(list2.length > 1){
        swal('Alert', 'Please select only one record', 'error');
          list = [];
          list2 = [];
          list3 = [];
          list4 = [];
          list5 = [];
          list6 = [];
          list7 = [];
          list8 = [];
          list9 = [];
          list10 = [];
    }else {
      $('#momoDate1').val(list2);
      $('#momoDeposit1').val(list3);
      $('#momoCashout1').val(list5);

      $('#modaluptrecord').modal();
    }
}


function updateDeposit(){
  if(list == ''){
      alert('Please select record');
    }else if(list2.length > 1){
        alert('Select only one record');
          list = [];
          list2 = [];
          list3 = [];
          list4 = [];
          list5 = [];
          list6 = [];
          list7 = [];
          list8 = [];
          list9 = [];
          list10 = [];
    }else {
      $('#idDepDate').val(list2);
      $('#idDepClient').val(list3);
      $('#idDepAccNo').val(list4);
      $('#idDepAmount').val(list5);
      $('#idDepPosted').val(list7);
      
      $('#modalDepositUpdate').modal();
    }
}





var path = false;

function updateClient(){
  if(list == ''){
      alert('Please select record');
    }else if(list2.length > 1){
        alert('Select only one record');
          list = [];
          list2 = [];
          list3 = [];
          list4 = [];
          list5 = [];
          list6 = [];
          list7 = [];
          list8 = [];
          list9 = [];
          list10 = [];
    }else {
        sessionStorage.setItem("id", list2);
        sessionStorage.setItem("name", list3);
        sessionStorage.setItem("dob", list5);
        sessionStorage.setItem("contact", list6);
        sessionStorage.setItem("nok", list7);
        sessionStorage.setItem("nokc", list8);
        sessionStorage.setItem("city", list9);
        sessionStorage.setItem("area", list10);
        sessionStorage.setItem("occupation", list11);
        sessionStorage.setItem("photo", list4);
        
        window.location = $online__access__tag + "edclient";
    }
}


 if(controller.includes("edclient")){
    if(sessionStorage.getItem("photo")){
        $("#idImage2").append("<img src='upload/"+sessionStorage.getItem("photo")+"' width='160' height='160'>") 
    }else{
       $("#idImage2").append("<img src='assets/img/no-pic.png' width='160' height='160'>");  
    }

    var names = sessionStorage.getItem("name").split(" ");

    $("#idSurname").val(names[0]);
    $("#idOthername").val(names[1]); 
    $("#idClientContact").val(sessionStorage.getItem("contact"));
    $("#idNextofKin").val(sessionStorage.getItem("nok"));
    $("#idNextofKinContact").val(sessionStorage.getItem("nokc"));
    $("#idCity").val(sessionStorage.getItem("city"));
    $("#idArea").val(sessionStorage.getItem("area"));
    $("#idOccupation").val(sessionStorage.getItem("occupation"));

 }


  function updateDeduction(){
  if(list == ''){
      swal('Alert', 'Please select record', 'error');
    }else if(list2.length > 1){
    swal('Alert', 'Please select only one record', 'error');
          list = [];
          list2 = [];
          list3 = [];
          list4 = [];
          list5 = [];
          list6 = [];
          list7 = [];
          list8 = [];
          list9 = [];
          list10 = [];
    }else {
      $('#idStaffDeduct').val(list2);
      $('#idStafftype').val(list3);
      $('#idDedAmount').val(list4);
      $('#idDistribution').val(list5);
      $('#modalDeductionUpdate').modal();
  
    }
}




    $("#btnDailyRecord").click(function(e){
    e.preventDefault();
        if(field_required_prompter('.form-up',5000)==true)
      {
          postDailyRecordUpdate();
      }
      
      else
      {
        
      }
    });


function reactivate(){
  if(list == ''){
      alert('Please select record');
    }else if(list2.length > 1){
        alert('Select only one record');
          list = [];
          list2 = [];
          list3 = [];
          list4 = [];
          list5 = [];
          list6 = [];
          list7 = [];
          list8 = [];
          list9 = [];
          list10 = [];
    }else {
      $('#idAccname1').val(list3);
      $('#idAccNo1').val(list2);
      $('#idSubscribed').val(list4);

      $('#modalMatured').modal();
    }
}


   $("#btnUpdateWithdrawal").click(function(e){
        updateWithdrawal();
    });
    
    
    
     $("#btnMomoRecord").click(function(e){
       e.preventDefault();
      if(field_required_prompter('.form-momo',5000)==true)
      {
        
        postMomo();
         
      }
      
      else
      {
              
      }
    });
    
    
     $("#btnDeductionUpdate").click(function(e){
       e.preventDefault();
      if(field_required_prompter('.form-staffup', 5000)==true)
      {
        
        postDeductionUpdate();
         
      }
      
      else
      {
              
      }
    });
    
    
    

  function updateWithdrawal(){
  if(list == ''){
      alert('Please select record');
    }else if(list2.length > 1){
        alert('Select only one record');
          list = [];
          list2 = [];
          list3 = [];
          list4 = [];
          list5 = [];
          list6 = [];
          list7 = [];
          list8 = [];
          list9 = [];
          list10 = [];
          list11 = [];
    }else {
      $('#idWithDate').val(list2);
      $('#idWithClient').val(list3);
      $('#idWithAccNo').val(list4);
      $('#idWithAmount').val(list5);
      $('#idWithPosted').val(list7);
     
      $('#modalWithdrawalUpdate').modal();
    }
}



   $("#momoAddRecord").click(function(e){
           $('#modalAddMomo').modal();
    });
    
    $("#iduptrecord").click(function(e){
        updateDailyRecord();
    });



  $("#btnStatement").click(function(e){
    e.preventDefault();
        if(field_required_prompter('.accno',5000)==true)
      {
           var accno =  $("#idaccno").val();
            var idDate1 = $("#idDate1").val();
            var idDate2 = $("#idDate2").val();
            var today = new Date().toISOString().slice(0, 10);

            if(accno !=null&&idDate1==""&&idDate2==""){
               routeAccount();
            }else{
                if(idDate1!=""&&idDate2==""){
                    alert('Select date2');
                 }else if(idDate2!=""&&idDate1==""){
                    alert('Select date1');
                 }else if(accno !=null&&idDate1!=""&&idDate2!=""){
                    routeAccountFull(accno, idDate1, idDate2);
                 }
            }
                
      }
      
      else
      {

      }
    });



 function updateProduct(){
  if(list == ''){
      alert('Please select record');
    }else if(list2.length > 1){
        alert('Select only one record');
          list = [];
          list2 = [];
          list3 = [];
          list4 = [];
          list5 = [];
          list6 = [];
          list7 = [];
          list8 = [];
          list9 = [];
          list10 = [];
          list11 = [];
    }else {

      sessionStorage.setItem("product_id",list);
      sessionStorage.setItem("pname",list2);
      sessionStorage.setItem("pcode",list3);
      sessionStorage.setItem("minamount",list4);
      sessionStorage.setItem("maxamount",list5);
      sessionStorage.setItem("balmin",list6);
      sessionStorage.setItem("intrate",list7);
      sessionStorage.setItem("intperiod",list8);
      sessionStorage.setItem("entfee",list9);
      sessionStorage.setItem("withfee",list10);

      window.location = $online__access__tag + "edit-product";
    }
}


 if(controller.includes("edit-product")){
      $('#idProductNameupdate').val(sessionStorage.getItem("pname"));
      $('#idProductCodeupdate').val(sessionStorage.getItem("pcode"));
      $('#idMinAmountupdate').val(sessionStorage.getItem("minamount"));
      $('#idMaxAmountupdate').val(sessionStorage.getItem("maxamount"));
      $('#idBalMinupdate').val(sessionStorage.getItem("balmin"));
      $('#idInterestupdate').val(sessionStorage.getItem("intrate"));
      $('#idPeriodupdate').val(sessionStorage.getItem("intperiod"));
      $('#idEntryFeeupdate').val(sessionStorage.getItem("entfee"));
      $('#idWithdrawalFeeupdate').val(sessionStorage.getItem("withfee"));
 }

    
    
  function updateContribution(){
  if(list == ''){
      swal('Alert', 'Please select record', 'error');
    }else if(list2.length > 1){
      swal('Alert', 'Please select only one record', 'error');
          list = [];
          list2 = [];
          list3 = [];
          list4 = [];
          list5 = [];
          list6 = [];
          list7 = [];
          list8 = [];
          list9 = [];
          list10 = [];
          list11 = [];
    }else {
      $('#idContClient').val(list2);
      $('#iduptSsnitEmployee').val(list3);
      $('#iduptSsnitEmployer').val(list4);
      $('#iduptWelfCont').val(list5);
      $('#iduptBonusCont').val(list6);
      $('#iduptDedCont').val(list7);

      $('#modaluptContribution').modal();
    }
}




    $("#btnNewLoan").click(function(e){
     $('#modalNewLoan').modal();
    });
    
    $("#idNewCont").click(function(e){
     $('#modalAddContribution').modal();
    });
    
    

    $("#idUpdateClient").click(function(e){
        updateClient();
    });
    
    $(document).on('click', ".btnUpdateProd", function(e) {
    e.preventDefault();
        updateProduct();
    });


    
   $(document).on('click', ".btnSyncNow", function(e) {
     e.preventDefault();
        post_lsyc();
    });
    
    $("#idReactive").click(function(e){
        reactivate();
    });
    
    

     $("#idPostClientUpdate").click(function(e){
        postClientUpdate();
    });
    
    
 $("#btnSubmitRegistration").click(function(e){
    e.preventDefault();
        if(field_required_prompter('.form',5000)==true)
      {
          postRegistration();
      }
      
      else
      {
        alert("Please input all required fields");
      }
    });
    
    
      $("#btnReactive").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.form-rec',5000)==true)
      {
        postReactivation();
      }
      
      else
      {
  
      }
     });
    
    
    
  $("#btnPostUserUpdate").click(function(e){
    e.preventDefault();
        if(field_required_prompter('.upd',5000)==true)
      {
          postAccountUpdate();
      }
      
      else
      {
        
      }
    });
    
    
  $("#idDeleteProduct").click(function(e){
    e.preventDefault();
    if(list == ''){
      alert('Record(s) is not selected');
    }else{
         swal({   
            title: "Confirm!",   
            text: "Are you sure you want to remove?",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, Remove",   
            closeOnConfirm: true 
        }, function(){   
          deleteFunction(list3, "product_tb");  
        });
    }
  });
  
  
  
  $("#deleteDeposit").click(function(e){
    e.preventDefault();
    if(list == ''){
      alert('Record(s) is not selected');
    }else{
     swal({   
            title: "Confirm!",   
            text: "Are you sure you want to remove?",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, Remove",   
            closeOnConfirm: true 
        }, function(){   
          deleteFunction(list, "deposit_tb");  
        }); 
    }
  });
  
  
  
  
    
    
  $("#idDeleteClient").click(function(e){
    e.preventDefault();
    if(list2 == ''){
      alert('Record(s) is not selected');
    }else{
     $('#modalConfirm').modal({
         backdrop: 'static',
         keyboard: false
     });
    }
  });
  
  $("#idDeleteAccount").click(function(e){
    e.preventDefault();
    if(list == ''){
      alert('Record(s) is not selected');
    }else{
       swal({   
            title: "Confirm!",   
            text: "Are you sure you want to remove?",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, Remove",   
            closeOnConfirm: true 
        }, function(){   
          deleteFunction(list, "admin_tb");  
        });     
    }
  });
  


  
    $("#yes").click(function(e){
       deleteClient(list2);
    });
    
    $("#yesProduct").click(function(e){
       deleteProduct(list);
    });
    
      $("#yesDeposit").click(function(e){
       deleteDeposit(list);
    });
    
    $("#newLoanProduct").click(function(e){
          $('#modalNewLoan').modal();
    });
    
    
    $("#yesDelAcc").click(function(e){
       deleteAccount(list);
    });
    
    
    $("#idUpdateDeduction").click(function(e){
         updateDeduction();
    });
    

     $("#idDailyRecordIcon").click(function(e){
       sessionStorage.setItem('origin', 'dashboard');
    });
    
  
    $("#btnNewAccount").click(function(e){
       e.preventDefault();
      if(field_required_prompter('.opacc',5000)==true)
      {
        var client_id = sessionStorage.getItem('client_id');
        openNewAccount(client_id); 
      }
      
      else
      {
              
      }
    
    });
    
    
      $("#btnPostLoan").click(function(e){
       e.preventDefault();
      if(field_required_prompter('.form-ln',5000)==true)
      {
        postLoanProduct(); 
      }
      
      else
      {
              
      }
    
    });
    
    
     $("#btnDepositUpdate").click(function(e){
       e.preventDefault();
      if(field_required_prompter('.updDeposit',5000)==true)
      {
          postDepositUpdate();
      }
      
      else
      {
              
      }
    
    });
    
    
    
     $("#btnWithUpdate").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.updWithdrawal',5000)==true)
          {
            postWithdrawalUpdate();
          }else
          {
      
          }
    });
    
    

    $("#idUpdateUser").click(function(e){
        updateAdminUser();
    });
    
    $("#btnUpdateDep").click(function(e){
        updateDeposit();
    });
    
    
    $("#idPayRollIcon").click(function(e){
         calculateStaffCommission();
         window.location = $online__access__tag + "payroll";
    });
    
    
    
    $("#idNewDeduction").click(function(e){
        $('#modalDeduction').modal();
    });
  
    
     $("#btnAccounts").click(function(e){
        $('#popAccounts').modal();
    });
    
     $("#idSignout").click(function(e){
        sessionStorage.setItem('status', '');
    });
    
    
     $("#idNewUser").click(function(e){
        $('#modalUser').modal();
    });
    
      $("#idAddDeposit").click(function(e){
         var search = sessionStorage.getItem('search');
         calculateBalances(search);
    });
    
    var fromAdd = false;
      $("#idAddDepositWithdrawal").click(function(e){
         calculateBalancesAll();
         fromAdd = true;
    });
    
    $("#idBack").click(function(e){
        location.reload();
    });
    

    $("#idAddDepositSavings").click(function(e){
         calculateBalancesAll();
         fromAdd = true;
    });
    
    
    $("#idAnotherNewUser").click(function(e){
         location.reload();
    });
    

    $("#idAddFristDeposit").click(function(e){
         var search = sessionStorage.getItem('search');
         calculateBalances(search);
    });
    
    $("#newProduct").click(function(e){
      $('#modalNewProduct').modal();
    });
    

     $("#btnSearch").click(function(e){
       e.preventDefault();
       if(field_required_prompter('#search',5000)==true)
      {
        var search = $("#search").val();
        sessionStorage.setItem('search', search);
        
        loadInterestCalc();
        calculateBalances(search);
      }
      
      else
      {
  
      }
    });
    
    
     $("#btnPostUser").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.col',5000)==true)
      {
        postNewUser();
      }
      
      else
      {
  
      }
    });
    
    
     $("#btnLoanAmount").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.form-loan',5000)==true)
          {
            postNewLoan();
          }else
          {
      
          }
    });
    
     $('#idLoanPeriod').change(function(){
       var selected = $('option:selected',this).val();  
        if(selected != ''){
            if(isCustomerValid && isGuarantor1Valid && isGuarantor2Valid && isAmountValide){
               $('#btnLoanAmount').removeAttr('disabled');
            }
        }
    });



    $('.clprod').change(function(){
       var selected = $('option:selected',this).val();  
        if(selected.length>0){
           if($('option:selected',this).text()==="SAVINGS ACCOUNT"){
            $(".clShowSubscribe").show();
             $(".clSubscribe").addClass("opacc").prop("required", true); 
           }else if(selected==="addprod"){
            window.location = $online__access__tag + "new-product";
           }else{
            $(".clShowSubscribe").hide();
            $(".clSubscribe").removeClass("opacc").prop("required", false);
           }
        }
    });
    
    
    
      var today = new Date();
        $("#pick-date2").prop("max", `${today.getUTCFullYear()}-${(today.getUTCMonth() + 1).toString().padStart(2, "0")}-${today.getUTCDate().toString().padStart(2, "0")}`);
        
        
        
        
     $("#btnStaffFilter").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.filter-report',5000)==true)
          {
            var date = $("#reportDate").val();
            var user = sessionStorage.getItem('id');
            var today = new Date().toISOString().slice(0, 10);

                filterReport(date, '0', user);
                loadFilterLatest(date, '0', user);
                    
             $("#hello").html("");
             $("#hello2").html("");
             
            
            
          }else
          {
      
          }
    });


     $(document).on('click', ".btnAccountDetail", function() {
         sessionStorage.setItem("accno", $(this).attr("accno"));
          window.location = $online__access__tag + "acc-manage";
      });


     $(".btnSearchCust").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.chksearch',5000)==true)
          {
           var accno = $(".search-top").val().trim();
           sessionStorage.setItem("accno",accno);
           window.location = $online__access__tag + "acc-manage";
          }
      });


       
    $(document).on('click', "#accStatusRadio1", function() {
         var whereclause = "ACCOUNT_NO = '"+sessionStorage.getItem("accno")+"'";
         var setclause = "ACC_STATUS = 0";
         updateRecord("account_tb", whereclause, setclause, "", "none");
    });

      $(document).on('click', "#accStatusRadio2", function() {
         var whereclause = "ACCOUNT_NO = '"+sessionStorage.getItem("accno")+"'";
         var setclause = "ACC_STATUS = 1";
         updateRecord("account_tb", whereclause, setclause, "", "none");
    });


    $(document).on('click', "#smsStatusRadio1", function() {
         var whereclause = "ACCOUNT_NO = '"+sessionStorage.getItem("accno")+"'";
         var setclause = "SMS_STATUS = 0";
         updateRecord("account_tb", whereclause, setclause, "", "none");
    });

      $(document).on('click', "#smsStatusRadio2", function() {
         var whereclause = "ACCOUNT_NO = '"+sessionStorage.getItem("accno")+"'";
         var setclause = "SMS_STATUS = 1";
         updateRecord("account_tb", whereclause, setclause, "", "none");
    });



    function updateRecord(table, whereclause, setclause, btn, btext){
      var fd = new FormData();
      fd.append("table", table);
      if(whereclause !== 'none'){
      fd.append("whereclause", whereclause);
      }
      fd.append("setclause", setclause);  
    $.ajax({
          url:""+$online__access__tag+"processor/updateFunction",
          type:"POST",
          data: fd,
          contentType: false, 
          dataType:'json',      
          cache: false, 
          processData:false,
          beforeSend:function()
          {
            $(btn+" > i").removeClass().addClass("fa fa-spinner fa-spin");
            $(btn).prop("disabled", true);
            $(btn).css("cursor", "no-drop");
            $(btn).html("Saving Changes.....");
          },
          success:function(data)
          {
            $(btn+" > i").removeClass().addClass("");
            $(btn).prop("disabled", false);
            $(btn).css("cursor", "");
            
          if(btext!=="none"){
            $(btn).html("Saved Successfully");
              setTimeout(function() {
               $(btn).html(btext);
              }, 4000);   
            }
          },
            error: function(err) {
              //alert(err.responseText)
            }
         });
       }


      $(document).on('click', "#pills-settings-tab-fill", function() {
        fetchAccountSettings(sessionStorage.getItem("accno"));
      });
      
      $(document).on('click', "#pills-history-tab-fill", function() {
        fetchHistory(sessionStorage.getItem("accno"));
      });

    
     $("#btnFilter").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.filter',5000)==true)
          {
            $('#graphCanvas').remove(); 
            var user = $("#idUser").val(); 
            var date = $("#pick-date").val();
            var date2 = $("#pick-date2").val();
            var today = new Date().toISOString().slice(0, 10);

             if(user==null&&date==''){
                   alert('Choose an option to filter');
             }else{
                if(date!=""&&date2==""){
                    alert('Select date2');
                 }else if(date2!=""&&date==""){
                    alert('Select date1');
                 }else if(date!=""&&date2!=""&&user==null){
                     if(date2>today){
                         alert("Invalid date2 selected");
                     }else{
                      calculateBalancesAll();
                      loadReportDefault2(date, date2);
                      loadLatestUpdate2(date, date2); 
                     }
                      
                 }else{
                      if(date2>today){
                         alert("Invalid date2 selected");
                     }else{
                        filterReport(date, date2, user);
                        loadFilterLatest(date, date2, user);
                     }
                 }
                 
             $("#hello").html("");
             $("#hello2").html("");
             }
            
            
          }else
          {
      
          }
    });
    

    $("#btnDeleteWithdrawal").click(function(e){
    e.preventDefault();
      if(list == ''){
      alert('Please select record');
    }else {
          swal({   
            title: "Confirm!",   
            text: "Are you sure you want to remove?",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, Remove",   
            closeOnConfirm: true 
        }, function(){   
          deleteFunction(list, "withdrawal_tb");  
        }); 
    }
  });
  
  
   $("#yesWithdrawal").click(function(e){
      deleteWithdrawal(list);
    });
    
    
    function deleteWithdrawal(ids) {
    var fd = new FormData();
    fd.append("ids", ids);
      
    $.ajax({
          url:""+$online__access__tag+"processor/deleteWithdrawal",
          data:fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          processData:false,
          success:function(data)
        {
            if(data== 'success'){
                swal('Done', 'Record deleted successfully', 'success');
               location.reload();
            }else if(data == 'failed'){
                 swal('Error', 'Sorry, record cannot be deleted', 'error');
              location.reload();
            }
        },
        error: function(err) {
          console.log(err);
        }
    });
}
  
    


    $('#idResidence').change(function(){
       var selected = $('option:selected',this).val();  
       if(selected == 'new'){
          $('#modalNewResidence').modal({
                backdrop: 'static',
                keyboard: false
            });
       }
       selected = "";
    });
    
    
    $('#idOccupation').change(function(){
       var selected = $('option:selected',this).val();  
       if(selected == 'new'){
          $('#modalNewOccupation').modal();
       }
       selected = "";
    });


    
      $('.clSelType').change(function(){
       var selected = $('option:selected',this).val();  
       if(selected == 'withdrawal'){
         $("#btnDeposit").hide();
         $("#btnWithdraw").show();
         $(".clTo").html(" to Withdraw");
       }else{
        $("#btnDeposit").show();
         $("#btnWithdraw").hide();
         $(".clTo").html(" to Deposit");
       }
       selected = "";
    });
    
    
    
    $("#idSubscription").hide();
    
     $('#idProduct').change(function(){
       var selected = $('option:selected',this).val();  
       if(selected == '2'){
           $("#idSubscription").show();
       }else{
           $("#idSubscription").hide();
       }
       selected = "";
    });
    
    
    
    $("#btnPostNewOccupation").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.colocc',5000)==true)
      {
       
       postOccupation();
        $('#modalNewOccupation'). modal('hide');
       
      }
      
      else
      {
  
      }
    });
    
    
    
       $("#btnContributionRecord").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.form-contr',5000)==true)
      {
       
       postContribution();
       
      }
      
      else
      {
  
      }
    });
    
    
    
    
     $(".btnCompChange").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.compc',5000)==true)
      {
        var setclause = "COMPANY = '"+$("#idComp").val()+"', PHONE = '"+$("#idCompPhone").val()+"', EMAIL = '"+$("#idCompEmail").val()+"'";
        updateRecord("company_tb", 'none', setclause, ".btnCompChange", "Apply Changes");
        updateRecord("account_number_tb", 'none', "FORMATION = '"+$("#idCompString").val()+"'", ".btnCompChange", "Apply Changes");    
      }
      
      else
      {

      }
    });

    
    
    
     $("#btnAPIChanges").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.api',5000)==true)
      {
        var setclause = "APIKEY = '"+$("#idApiKey").val()+"', SID = '"+$("#idSenderID").val()+"', POSTED_BY = "+sessionStorage.getItem("id")+"";
        updateRecord("sms_settings", 'none', setclause, "#btnAPIChanges", "Apply Changes");   
      }
      
      else
      {

      }
    });

    
     $("#btnDeductionRecord").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.form-staff',5000)==true)
      {
       
       postDeduction();
       
      }
      
      else
      {

      }
    });
    
    
    
     $("#btnPostProductUpdate").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.produpd',5000)==true)
      {
       postProductUpdate();
      }
      
      else
      {

      }
    });
    
    
    
    
            
     $("#btnPayroll").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.form-pay',5000)==true)
       {
          
       generatePayroll();
       }
      
      else
      {

      }
    });
    
    
    
    
     $("#btnPostNew").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.colone',5000)==true)
      {
       postResidence();  
      }
      
      else
      {
  
      }
    });
    
    
    
 
    $("#btnUpdateContinue").click(function(e){
       location.reload();
    });
    
     $("#btnUpdateContinue").click(function(e){
       location.reload();
    });
    
    $("#idUpdateCont").click(function(e){
      updateContribution();
    });
    
    
    
    $("#idHomeClose").click(function(e){
       location.reload();
    });
    
    
      
    $("#idDeleteDeduction").click(function(e){
     if(list == ''){
      swal('Error', 'Please select record(s)', 'error');
    }else{
     deleteDeduction(list);
    }
        
    });
    
 
    
     $("#btnDeleteContinue").click(function(e){
       location.reload();
    });
    
    $("#btnSwitchDash").click(function(e){
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        window.location = $online__access__tag + "dashboard";
        }else{
         window.location = $online__access__tag + "dashboard2";
     }
    });
    
    
    $(".idOpenAccount").click(function(e){
           window.location = $online__access__tag + "openaccount";
    });
    
    $(".idAnother").click(function(e){
           window.location = $online__access__tag + "register";
    });
    
    $("#idHome").click(function(e){
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        window.location = $online__access__tag + "dashboard";
        }else{
         window.location = $online__access__tag + "dashboard2";
     }
    });
    
     $("#idAnotherProduct").click(function(e){
           window.location = $online__access__tag + "product";
    });
    
    
      $("#idWithdrawalAnotherSavings").click(function(e){
           calculateBalancesAll();
           fromAdd = true;
    });
    
       $("#idWithdrawAnother").click(function(e){
           var search = sessionStorage.getItem('search');
           calculateBalances(search);
    });
    
    
   $("#dataTable tbody").on('click', '#btnOpen', function(e){ 
        e.preventDefault();
          var dt = $('#dataTable').DataTable();
          var data = dt.cells($(this).closest('td').siblings().eq(0)).data();
          code = dt.cells($(this).closest('td').siblings().eq(1)).data();
          var name = dt.cells($(this).closest('td').siblings().eq(2)).data();
          sessionStorage.setItem("client_id",code[0]);
          window.location = $online__access__tag + "cust-account";
     });
     
    $("#dataTable tbody").on('click', '#btnView', function(e){ 
        e.preventDefault();
          var dt = $('#dataTable').DataTable();
          var id = dt.cells($(this).closest('td').siblings().eq(2)).data();
          var name = dt.cells($(this).closest('td').siblings().eq(3)).data();
          fetchImagePath(id[0], name[0]);
     });
    
        var id, oldBalance;
     $("#dataTable tbody").on('click', '#btnDeposit', function(e){ 
        e.preventDefault();
          var dt = $('#dataTable').DataTable();
           id = dt.cells($(this).closest('td').siblings().eq(0)).data();
          var name = dt.cells($(this).closest('td').siblings().eq(1)).data();
          var acc_number = dt.cells($(this).closest('td').siblings().eq(2)).data();
          product = dt.cells($(this).closest('td').siblings().eq(3)).data();
           oldBalance = dt.cells($(this).closest('td').siblings().eq(9)).data();
        account_status = dt.cells($(this).closest('td').siblings().eq(12)).data();
        
       $('#idAccountName').val(name[0]);
       $('#idAccountNumber').val(acc_number[0]);
       $('#idProduct').val(product[0]);
       
      fetchInitial(product[0], oldBalance[0]);
     });
     
   
   
    var minBalance = 0;
    function fetchMinimumBalance(product){
    var fd = new FormData();
    fd.append("product", product);
    $.ajax({
          url:""+$online__access__tag+"processor/fetchMinimumBalance",
          type:"POST",
          data: fd,
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          beforeSend:function()
          {
                $("#btnApplicant > i").removeClass().addClass("fa fa-spinner fa-spin");
                $("#btnApplicant").prop("disabled", true);
                $("#btnApplicant").css("cursor", "no-drop");
          },
          success:function(data)
          {
            postWithdrawal(data.min_bal);
        },
        error: function(err) {
            console.log(err);
        alert(err.responseText);
        }
    });
}
     
    
        
    var minAmount, maxAmount;
    function fetchInitial(product, oldbal){
    var fd = new FormData();
    fd.append("product", product);
    $.ajax({
          url:""+$online__access__tag+"processor/fetchMinimumAmount",
          type:"POST",
          data: fd,
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          beforeSend:function()
          {
                $("#btnApplicant > i").removeClass().addClass("fa fa-spinner fa-spin");
                $("#btnApplicant").prop("disabled", true);
                $("#btnApplicant").css("cursor", "no-drop");
          },
          success:function(data)
          {
            minAmount = data[0].initial_min;
            maxAmount = data[0].initial_max;
            
            $("#idInitial").html("Min deposit: GH¢"+data[0].initial_min);
            $("#idInitialMax").html("Max deposit: GH¢"+data[0].initial_max);
            $("#idAccBalance").html("Balance: GH¢"+oldbal);
            $('#modalDeposit').modal();
        },
        error: function(err) {
            console.log(err);
        //  alert(err.responseText);
        }
    });
}


    
     function postDailyRecordUpdate(){
    var date =  $("#momoDate1").val();
    var deposit =  $("#momoDeposit1").val();
    var cashout =  $("#momoCashout1").val();
    
    var fd = new FormData();
    fd.append("id", list[0]);
    fd.append("date", date);
    fd.append("deposit", deposit);
    fd.append("cashout", cashout);
    $.ajax({
          url:""+$online__access__tag+"processor/updateDailyRecord",
          type:"POST",
          data: fd,
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
                $("#btnDailyRecord > i").removeClass().addClass("fa fa-spinner fa-spin");
                $("#btnDailyRecord").prop("disabled", true);
                $("#btnDailyRecord").css("cursor", "no-drop");
          },
          success:function(data)
          {

              if(data == '0'){
                swal('Done','Record updated successfully','success');
                 setTimeout(function() {
                    location.reload();
              }, 2000); 
              }else{
                 swal('Error','Record updated failed','error'); 
                 
                   $("#btnDailyRecord > i").removeClass().addClass("");
                $("#btnDailyRecord").prop("disabled", false);
                $("#btnDailyRecord").css("cursor", "");
              }
            
        },
        error: function(err) {
            console.log(err);
        }
    });
}
    


    function postReactivation() {
    var accno = $("#idAccNo1").val();
    var subscribed = $("#idSubscribed").val();
    var newsub = $("#idNew").val();
    var period = '';
    
   
    var fd = new FormData();
     if(newsub != '' || newsub != null){
        fd.append("subscribed", newsub); 
     }else{
        fd.append("subscribed", subscribed); 
     }
    fd.append("accno", accno);

    $.ajax({
          url:""+$online__access__tag+"processor/postReactivation",
          type:"POST",
          data: fd,
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
                $("#btnReactive > i").removeClass().addClass("fa fa-spinner fa-spin");
                $("#btnReactive").prop("disabled", true);
                $("#btnReactive").css("cursor", "no-drop");
          },
          success:function(data)
          {
          if(data == "success"){
               
                swal('Done', 'Account reactivated successfully', 'success');
                 setTimeout(function() {
                  location.reload();
                }, 2000); 
           
          }else{
               
              swal('Error', 'Account reactivated failed', 'error');
               $("#btnReactive > i").removeClass().addClass("");
               $("#btnReactive").prop("disabled", false);
               $("#btnReactive").css("cursor", "");
          }
        },
        error: function(err) {
            console.log(err);
        //  alert(err.responseText);
        }
    });
}
    


    function checkAccount() {
    $.ajax({
          url:""+$online__access__tag+"processor/checkAccount",
          type:"POST",
          contentType: false,       
          cache: false, 
          processData:false,
          success:function(data)
        {
            //alert(data);
        },
        error: function(err) {
           // alert(err.responseText);
          //console.log(err);
        }
    });
}

    
    
    function postNewLoan(){
        
     var idAccNo = $("#idAccNo").val();
     var idProduct = $("#idProduct").val();
     var idLoanAmount = $("#idLoanAmount").val();
     var idGuarantor1 = $("#idGuarantor1").val();
     var idGuarantor2 = $("#idGuarantor2").val();
     var idLoanPeriod = $("#idLoanPeriod").val();

    var fd = new FormData();
    fd.append("idAccNo", idAccNo);
    fd.append("idProduct", idProduct);
    fd.append("idLoanAmount", idLoanAmount);
    fd.append("idGuarantor1", idGuarantor1);
    fd.append("idGuarantor2", idGuarantor2);
    fd.append("idLoanPeriod", idLoanPeriod);
   
   
   //Check Account number 
        $.ajax({
                      url:""+$online__access__tag+"processor/postNewLoan",
                      type:"POST",
                      data: fd,
                      contentType: false,       
                      cache: false, 
                      processData:false,
                      beforeSend:function()
                      {
                            $("#btnLoanAmount > i").removeClass().addClass("fa fa-spinner fa-spin");
                            $("#btnLoanAmount").prop("disabled", true);
                            $("#btnLoanAmount").css("cursor", "no-drop");
                      },
                      success:function(data)
                      {
                       if(data == "success"){
                              swal('Done', 'Loan created successfully', 'success');
                            location.reload();
                      }else if(data == 'noexist'){
                         swal('Error', 'Account does not exist', 'error');
                         
                        $("#btnLoanAmount > i").removeClass().addClass("");
                        $("#btnLoanAmount").prop("disabled", false);
                        $("#btnLoanAmount").css("cursor", "");
                      }else if(data == 'max'){
                         swal('Error', 'Amount is more than maximum loan threshold', 'error');
                         
                        $("#btnLoanAmount > i").removeClass().addClass("");
                        $("#btnLoanAmount").prop("disabled", false);
                        $("#btnLoanAmount").css("cursor", "");
                      }else if(data == 'min'){
                         swal('Error', 'Amount is below minimum loan threshold', 'error');
                         
                        $("#btnLoanAmount > i").removeClass().addClass("");
                        $("#btnLoanAmount").prop("disabled", false);
                        $("#btnLoanAmount").css("cursor", "");
                      }else if(data == 'notqualified'){
                         swal('Error', 'Customer is not qualified for Loan', 'error');
                        $("#btnLoanAmount > i").removeClass().addClass("");
                        $("#btnLoanAmount").prop("disabled", false);
                        $("#btnLoanAmount").css("cursor", "");
                      }
                    },
                    error: function(err) {
                        alert(err.responseText);
                        console.log(err);
                    }
                });
        }
    
    
    
    
    
    function postDeduction(){

     var id = $("#idStaff").val();
     var type = $("#idType").val();
     var amount = $("#idDeduction").val();
     var distribution = $("#idDist").val();


    var fd = new FormData();
    fd.append("id", id);
    fd.append("type", type);
    fd.append("amount", amount);
    fd.append("distribution", distribution);
    $.ajax({
          url:""+$online__access__tag+"processor/postDeduction",
          type:"POST",
          data: fd,
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
                $("#btnDeductionRecord > i").removeClass().addClass("fa fa-spinner fa-spin");
                $("#btnDeductionRecord").prop("disabled", true);
                $("#btnDeductionRecord").css("cursor", "no-drop");
          },
          success:function(data)
          {
            if(data != ''|| data !=null){
                swal('Done', 'Deduction has been added successfully', 'success');
              setTimeout(function() {
                location.reload();
               }, 2000);
                
            }else{
                swal('Error', 'Deduction failed... Try again', 'error');
                
                $("#btnDeductionRecord > i").removeClass().addClass("");
                $("#btnDeductionRecord").prop("disabled", false);
                $("#btnDeductionRecord").css("cursor", "");
            }    
         },
        error: function(err) {
            console.log(err);
          //alert(err.responseText);
        }
    });
}

    
    
    
     function postLoanProduct(){
     var loanName = $("#loanName").val();
     var loanCode = $("#loanCode").val();
     var loanMinAmnt = $("#loanMinAmnt").val();
     var loanMaxnAmnt = $("#loanMaxnAmnt").val();
     var loanFormFee = $("#loanFormFee").val();
     var loanProcessFee = $("#loanProcessFee").val();
     var loanInterest = $("#loanInterest").val();

    var fd = new FormData();
    fd.append("loanName", loanName);
    fd.append("loanCode", loanCode);
    fd.append("loanMinAmnt", loanMinAmnt);
    fd.append("loanMaxnAmnt", loanMaxnAmnt);
    fd.append("loanFormFee", loanFormFee);
    fd.append("loanProcessFee", loanProcessFee);
    fd.append("loanInterest", loanInterest);
    $.ajax({
          url:""+$online__access__tag+"processor/postLoanProduct",
          type:"POST",
          data: fd,
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
                $("#btnPostLoan > i").removeClass().addClass("fa fa-spinner fa-spin");
                $("#btnPostLoan").prop("disabled", true);
                $("#btnPostLoan").css("cursor", "no-drop");
          },
          success:function(data)
          {
              if(data == "success"){
               $("#modalProductUpdate").hide();
               swal('Done', 'Product created successfully', 'success');
                location.reload();
              }else{
                 swal('Done', 'Product created failed', 'success');
              }
        },
        error: function(err) {
            console.log(err);
          //alert(err.responseText);
        }
    });
}




     function postContribution(){
     var id = $("#idStaffCont").val();
     var idSsnitEmployee = $("#idSsnitEmployee").val();
     var idSsnitEmployer = $("#idSsnitEmployer").val();
     var idWelfCont = $("#idWelfCont").val();
     var idBonusCont = $("#idBonusCont").val();
     var idDedCont = $("#idDedCont").val();

    var fd = new FormData();
    fd.append("id", id);
    fd.append("idSsnitEmployer", idSsnitEmployer);
    fd.append("idSsnitEmployee", idSsnitEmployee);
    fd.append("idWelfCont", idWelfCont);
    fd.append("idBonusCont", idBonusCont);
    fd.append("idDedCont", idDedCont);
    $.ajax({
          url:""+$online__access__tag+"processor/postContribution",
          type:"POST",
          data: fd,
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
                $("#btnContributionRecord > i").removeClass().addClass("fa fa-spinner fa-spin");
                $("#btnContributionRecord").prop("disabled", true);
                $("#btnContributionRecord").css("cursor", "no-drop");
          },
          success:function(data)
          {
             if(data != ''||data !=null){
                swal('Done', 'Contribution added successfully', 'success');
                setTimeout(function() {
                  location.reload();
                }, 2000);
             }else{
                 swal('Error', 'Failed to add contribution', 'error');
                $("#btnContributionRecord > i").removeClass().addClass("");
                $("#btnContributionRecord").prop("disabled", false);
                $("#btnContributionRecord").css("cursor", "");
             }
        },
        error: function(err) {
            console.log(err);
          //alert(err.responseText);
        }
    });
}




     function postDeductionUpdate(){
     var amount = $("#idDedAmount").val();
     var distribution = $("#idDistribution").val();

    var fd = new FormData();
    fd.append("id", list[0]);
    fd.append("amount", amount);
    fd.append("distribution", distribution);

    $.ajax({
          url:""+$online__access__tag+"processor/updateDeduction",
          type:"POST",
          data: fd,
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
                $("#btnDeductionUpdate > i").removeClass().addClass("fa fa-spinner fa-spin");
                $("#btnDeductionUpdate").prop("disabled", true);
                $("#btnDeductionUpdate").css("cursor", "no-drop");
          },
          success:function(data)
          {
              if(data == "0"){
                swal('Done', 'Record updated successfully', 'success');
                setTimeout(function() {
                  location.reload();
                }, 2000); 
              }else{
                swal('Error', 'Update failed', 'error');
                $("#btnDeductionUpdate > i").removeClass().addClass("fa fa-spinner fa-spin");
                $("#btnDeductionUpdate").prop("disabled", true);
                $("#btnDeductionUpdate").css("cursor", "no-drop");
              }
        },
        error: function(err) {
            console.log(err);
          //alert(err.responseText);
        }
    });
}


      
     function postProductUpdate(){
     var idProductNameupdate = $("#idProductNameupdate").val();
     var idProductCodeupdate = $("#idProductCodeupdate").val();
     var idMinAmountupdate = $("#idMinAmountupdate").val();
     var idMaxAmountupdate = $("#idMaxAmountupdate").val();
     var idBalMinupdate = $("#idBalMinupdate").val();
     var idBalMaxupdate = $("#idBalMaxupdate").val();
     var idInterestupdate = $("#idInterestupdate").val();
     var idPeriodupdate = $("#idPeriodupdate").val();
     var idEntryFeeupdate = $("#idEntryFeeupdate").val();
     var idWithdrawalFeeupdate = $("#idWithdrawalFeeupdate").val();

    var fd = new FormData();
    fd.append("id", sessionStorage.getItem("product_id"));
    fd.append("idProductNameupdate", idProductNameupdate);
    fd.append("idProductCodeupdate", idProductCodeupdate);
    fd.append("idMinAmountupdate", idMinAmountupdate);
    fd.append("idMaxAmountupdate", idMaxAmountupdate);
    fd.append("idBalMinupdate", idBalMinupdate);
    fd.append("idBalMaxupdate", idBalMaxupdate);
    fd.append("idInterestupdate", idInterestupdate);
    fd.append("idPeriodupdate", idPeriodupdate);
    fd.append("idEntryFeeupdate", idEntryFeeupdate);
    fd.append("idWithdrawalFeeupdate", idWithdrawalFeeupdate);
    $.ajax({
          url:""+$online__access__tag+"processor/updateProduct",
          type:"POST",
          data: fd,
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
                $("#btnPostProductUpdate > i").removeClass().addClass("fa fa-spinner fa-spin");
                $("#btnPostProductUpdate").prop("disabled", true);
                $("#btnPostProductUpdate").css("cursor", "no-drop");
          },
          success:function(data)
          {
             $("#btnPostProductUpdate > i").removeClass().addClass("");
             $("#btnPostProductUpdate").prop("disabled", false);
             $("#btnPostProductUpdate").css("cursor", "");

                $(".modal-body").html("<h3>"+data.message+"</h3>");
                $(".clModalSuccess").modal(
                {
                backdrop: 'static',
                keyboard: false
                });

                setTimeout(function() {
                $(".clClose").click();
                window.history.back();
               }, 1000); 
          
          },
        error: function(err) {
            console.log(err);
        }
    });
}




    function deleteDeduction(ids) {
    var fd = new FormData();
    fd.append("ids", ids);
      
    $.ajax({
          url:""+$online__access__tag+"processor/deleteDeduction",
          data:fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          processData:false,
          success:function(data)
        {
            if(data== 'success'){
            
                swal('Done', 'Record deleted successfully', 'success');
                location.reload();
            
            }else{
                    swal('Error', 'Deletion failed', 'error'); 
            }
            
        },
        error: function(err) {
          console.log(err);
        }
    });
} 




   function deleteDeposit(ids) {
    var fd = new FormData();
    fd.append("ids", ids);
      
    $.ajax({
          url:""+$online__access__tag+"processor/deleteDeposit",
          data:fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          processData:false,
          success:function(data)
        {
            if(data== 'success'){
            
                swal('Done', 'Record deleted successfully', 'success');
                location.reload();
            
            }else{
                    swal('Error', 'Deletion failed', 'error'); 
            }
            
        },
        error: function(err) {
          console.log(err);
        }
    });
} 



    function postMomo(){
    var momoDate = $("#momoDate").val();
    var momoDeposit = $("#momoDeposit").val();
    var momoCashout = $("#momoCashout").val();
    
    var fd = new FormData();
    fd.append("momoDeposit", momoDeposit);
    fd.append("momoCashout", momoCashout);
    fd.append("momoDate", momoDate);
    
    $.ajax({
          url:""+$online__access__tag+"processor/postMomo",
          type:"POST",
          data: fd,
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
                $("#btnMomoRecord > i").removeClass().addClass("fa fa-spinner fa-spin");
                $("#btnMomoRecord").prop("disabled", true);
                $("#btnMomoRecord").css("cursor", "no-drop");
          },
          success:function(data)
          {

           if(data !=''|| data != null){
               swal('Done', 'Record saved successfully. Enjoy the day', 'success');
               
             setTimeout(function() {
                location.reload();
               }, 2000); 
               
           }else{
                swal('Sorry', 'Record failed. Try again', 'error'); 
           }
        },
        error: function(err) {
            console.log(err);
        //  alert(err.responseText);
        }
    });
}        



    function validationDate(date_start)
    {
    const inputDate = new Date(date_start);
    
    const yearFromImputDate = inputDate.getFullYear();
    const now = new Date();
    const currentyear = now.getFullYear();

    if(yearFromImputDate != currentyear) {        
        return false;
    }else{
        return true;
    }
  }
    



    function postSavings(){   
     if(!validationDate($("#idDate").val())){
       swal("Please Enter a Valid date");
     }else{
     var userId = sessionStorage.getItem('id');
     var idDate = $("#idDate").val();
     
     var account = sessionStorage.getItem("accno");
     var amount = $("#idAmount").val();
     amount = removeCommas(amount);
     
     var amt = parseFloat(amount);
     var min = parseFloat(minAmount);
     var balanceOld = parseFloat(removeCommas(sessionStorage.getItem("oldbal")));
     
     if(amt < min){
         alert('Amount cannot be less than Minimum deposit');
     }else{
        var fd = new FormData();
    fd.append("idDate", idDate);
    fd.append("account", account);
    fd.append("amount", amount);
    fd.append("id", sessionStorage.getItem("client_id")); 
    fd.append("account_status", sessionStorage.getItem("acc_status"));  
    fd.append("product", sessionStorage.getItem("product"));
    $.ajax({
          url:""+$online__access__tag+"processor/postSavings",
          type:"POST",
          data: fd,
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
            $("#postSavings > i").removeClass().addClass("fa fa-spinner fa-spin");
            $("#postSavings").prop("disabled", true);
            $("#postSavings").css("cursor", "no-drop");
          },
          success:function(data)
          {
            $("#postSavings > i").addClass("fa fa-spinner fa-spin");
            $("#postSavings").prop("disabled", false);
            $("#postSavings").css("cursor", "");

              if(data.status==="success"){
                $(".modal-body").html("<h3>"+data.message+"</h3>");
                $(".clModalSuccess").modal(
                {
                backdrop: 'static',
                keyboard: false
                });

                setTimeout(function() {
                $(".clClose").click();
               }, 2000); 

               fetchBalInfo(account);
              }else{
                swal('Error', 'Deposit failed', 'error');
              }
        },
        error: function(err) {
           //alert(err.responseText)
        }
    });
     } 
    }
}


    function checkSMS(accountno, amount, newbalance, source) {
    var fd = new FormData();
    fd.append("accountno", accountno);
      
    $.ajax({
          url:""+$online__access__tag+"processor/checkSMS",
          data:fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          processData:false,
          success:function(data)
        {
            if(data != ''){
              if(source == 'deposit'){
                deposit_sms(data, amount, newbalance, accountno);  
              }else if(source == 'withdrawal'){
                withdrawal_sms(data, amount, newbalance, accountno); 
            }
          }
        },
        error: function(err) {
          console.log(err);
        }
    });
} 
    


   function deposit_sms(contact, amount, newbalance, accountno){
            var isCheck = false;
            var title = "SBST";
            var message =  "An amount of GHS "+amount+".00 has been deposited into your account by STEP BY STEP TELECOM. Your new balance is GHS "+newbalance+".00";

    const Http = new XMLHttpRequest();
    const url="https://api.smsglobal.com/http-api.php?action=sendsms&user=t4e756q2&password=waLASRNa&from="+title+"&to="+contact+"&text="+message+"";
    Http.open("GET", url);
    Http.send();
    
    Http.onreadystatechange = (e) => {
          var response = Http.responseText;
            if(response.includes('OK')){
                if(!isCheck){
                    post_sms(contact, message, accountno);
                    isCheck = true;
                }
                
            }
        }
      }
      
      
      
      
    function withdrawal_sms(contact, amount, newbalance, accountno){
            var isCheck = false;
            var title = "SBST";
            var message =  "An amount of GHS "+amount+".00 has been withdrawn from your account by STEP BY STEP TELECOM. Your new balance is GHS "+newbalance+".00";

    const Http = new XMLHttpRequest();
    const url="https://api.smsglobal.com/http-api.php?action=sendsms&user=t4e756q2&password=waLASRNa&from="+title+"&to="+contact+"&text="+message+"";
    Http.open("GET", url);
    Http.send();
    
    Http.onreadystatechange = (e) => {
          var response = Http.responseText;
            if(response.includes('OK')){
                if(!isCheck){
                    post_sms(contact, message, accountno);
                    isCheck = true;
                }
                
            }
        }
      }
      


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




    function postWithdrawalUpdate(){
     var idDate = $("#idWithDate").val();
     var amount = $("#idWithAmount").val();

    var fd = new FormData();
    fd.append("id", list[0]);
    fd.append("accountno", list4[0]);
    fd.append("idDate", idDate);
    fd.append("amount", amount);
    $.ajax({
          url:""+$online__access__tag+"processor/updateWithdrawal",
          type:"POST",
          data: fd,
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
                $("#btnWithUpdate > i").removeClass().addClass("fa fa-spinner fa-spin");
                $("#btnWithUpdate").prop("disabled", true);
                $("#btnWithUpdate").css("cursor", "no-drop");
          },
          success:function(data)
          {
               $(".modal-body").html("<h3>"+data.message+"</h3>");
                $(".clModalSuccess").modal(
                {
                backdrop: 'static',
                keyboard: false
                });

                $(".clCloseUpdt").click();

                setTimeout(function() {
                $(".clClose").click();
               }, 1000); 

               if(data.status === "success"){
                loadWithdrawals();
               }
        },
        error: function(err) {
            swal('Error', 'Record update failed', 'error');
            console.log(err);
        }
    });
}




     
     function deleteProduct(ids) {
    var fd = new FormData();
    fd.append("ids", ids);
      
    $.ajax({
          url:""+$online__access__tag+"processor/deleteProduct",
          data:fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          processData:false,
          success:function(data)
        {
            if(data== 'success'){
            
                    swal('Done', 'Record deleted successfully', 'success');
                location.reload();
            
            }else{
                    swal('Error', 'Deletion failed', 'error'); 
            }
            
        },
        error: function(err) {
          console.log(err);
        }
    });
}      


     function postClientUpdate(){
     var idClientName = $("#idSurname").val()+" "+$("#idOthername").val();
     var idClientDob = $("#idClientDob").val();
     var idClientContact = $("#idClientContact").val();
     var idNextofKin = $("#idNextofKin").val();
     var idNextofKinContact = $("#idNextofKinContact").val();
     var idCity = $("#idCity").val();
     var idArea = $("#idArea").val();
     var idOccupation = $("#idOccupation").val();
     var path = sessionStorage.getItem('path');

    var fd = new FormData();
    fd.append("id", sessionStorage.getItem("id"));
    fd.append("idClientName", idClientName);
    fd.append("idClientDob", idClientDob);
    fd.append("idClientContact", idClientContact);
    fd.append("idNextofKin", idNextofKin);
    fd.append("idNextofKinContact", idNextofKinContact);
    fd.append("idCity", idCity);
    fd.append("idArea", idArea);
    fd.append("idOccupation", idOccupation);
    fd.append("path", path);

    $.ajax({
          url:""+$online__access__tag+"processor/updateClient",
          type:"POST",
          data: fd,
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
                $("#idPostClientUpdate > i").removeClass().addClass("fa fa-spinner fa-spin");
                $("#idPostClientUpdate").prop("disabled", true);
                $("#idPostClientUpdate").css("cursor", "no-drop");
                $("#idPostClientUpdate").html("Please wait....");
          },
          success:function(data)
          {
                $("#idPostClientUpdate > i").removeClass().addClass("");
                $("#idPostClientUpdate").prop("disabled", false);
                $("#idPostClientUpdate").css("cursor", "");
                $("#idPostClientUpdate").html("Save Changes");

                    var path = sessionStorage.setItem('path', '');
                    $('.clModalSuccess').modal({
                    backdrop: 'static',
                    keyboard: false
                });
                $(".modal-body").html(data.message);
              
        },
        error: function(err) {
            console.log(err);
          //alert(err.responseText);
        }
    });
}


      var today = new Date();
        $("#idDate40").prop("max", `${today.getUTCFullYear()}-${(today.getUTCMonth() + 1).toString().padStart(2, "0")}-${today.getUTCDate().toString().padStart(2, "0")}`);
        
        

    function formatNumberWithCommas(x) {
                    return x.toString().replace(/B(?=(d{3})+(?!d))/g, ",");
              }


    function removeCommas(str) {
        while (str.search(",") >= 0) {
            str = (str + "").replace(',', '');
        }
        return str;
    };


      var today = new Date();
        $("#idDate30").prop("max", `${today.getUTCFullYear()}-${(today.getUTCMonth() + 1).toString().padStart(2, "0")}-${today.getUTCDate().toString().padStart(2, "0")}`);
     
     

    function postWithdrawal(minBalance){    
    if(!validationDate($("#idDate30").val())){
       swal("Please Enter a Valid date");
     }else{

     $("#btnPostWithdrawal > i").removeClass().addClass("fa fa-spinner fa-spin");
     $("#btnPostWithdrawal").prop("disabled", true);
     $("#btnPostWithdrawal").css("cursor", "no-drop");
        
     var idDate = $("#idDate30").val();
     var userId = sessionStorage.getItem('id');
     var account = sessionStorage.getItem("accno");
     var amount = $("#idAmountWithdraw").val();
     var conv_amount = parseFloat(amount);
     var fee = 0;
     
     if(sessionStorage.getItem("product")=="SUSU ACCOUNT"){
           if((1 <= conv_amount) && (conv_amount <= 50)){
                     fee = 2;
                }else if( (51 <= conv_amount) && (conv_amount <= 100)){
                     fee = '3';
                }else if( (101<= conv_amount) && (conv_amount <= 200)){
                     fee = '5';
                }else if( (201<= conv_amount) && (conv_amount <= 300)){
                     fee = '10';
                }else if( (301<= conv_amount) && (conv_amount <= 400)){
                     fee = '12';
                }else if( (401<= conv_amount) && (conv_amount <= 500)){
                     fee = '15';
                }else if( (501<= conv_amount) && (conv_amount <= 600)){
                     fee = '18';
                }else if( (601<= conv_amount) && (conv_amount <= 700)){
                     fee = '20';
                }else if( (701<= conv_amount) && (conv_amount <= 800)){
                     fee = 25;
                }else if( (801<= conv_amount) && (conv_amount <= 900)){
                     fee = 30;
                }else if((901<= conv_amount) && (conv_amount <= 1000)){
                     fee = 35;
                }else if((1001<= conv_amount) && (conv_amount <= 1100)){
                     fee = 40;
                }else if((1101<= conv_amount) && (conv_amount <= 1500)){
                  fee = 45;
                }else if(conv_amount > 1500){
                    fee = 50;
                }
        }
                
     var amt = parseFloat(amount);
     var minBal = parseFloat(minBalance);
     var bal = parseFloat(sessionStorage.getItem("oldbal"));

     if(bal <= minBal){
         swal('Low balance in account! Withdrawal Failed');
            $("#btnPostWithdrawal > i").removeClass();
            $("#btnPostWithdrawal").prop("disabled", false);
            $("#btnPostWithdrawal").css("cursor", "");
    }else{
    var remain = bal - amt - fee;
    if(remain < minBal){
         swal('Low balance in account. Withdrawal Failed');
            $("#btnPostWithdrawal > i").removeClass();
            $("#btnPostWithdrawal").prop("disabled", false);
            $("#btnPostWithdrawal").css("cursor", "");
    }else{

    var fd = new FormData();
    fd.append("idDate", idDate);
    fd.append("account", account);
    fd.append("amount", amount);
    fd.append("id", sessionStorage.getItem("client_id"));
    $.ajax({
          url:""+$online__access__tag+"processor/postWithdrawal",
          type:"POST",
          data: fd,
          contentType: false,       
          cache: false, 
          dataType: 'json',            
          processData:false,
          beforeSend:function()
          {

          },
          success:function(data)
          {
            $("#btnPostWithdrawal > i").removeClass();
            $("#btnPostWithdrawal").prop("disabled", false);
            $("#btnPostWithdrawal").css("cursor", "");
              
            if(data.status === "success"){
               $(".modal-body").html("<h3>"+data.message+"</h3>");
                $(".clModalSuccess").modal(
                {
                backdrop: 'static',
                keyboard: false
                });

                setTimeout(function() {
                $(".clClose").click();
               }, 2000); 
               fetchBalInfo(account);
            }
        },
        error: function(err) {
            console.log(err);
         // alert(err.responseText);
          }
        });
      }
    }
 }
}
    
    
    
    
    
      $("#btnPostWithdrawal").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.checkWith',5000)==true)
      {
        fetchMinimumBalance(sessionStorage.getItem("product"));
      }
      
      else
      {
        //alert("Input date and amount")
      }
    });


        
        
        
      $("#btnPostProduct").click(function(e){
       e.preventDefault();
         if(field_required_prompter('.col',5000)==true)
      {
         postProduct();
      }
      
      else
      {
  
      }
    });


      $("#btnPostSavings").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.checkDep',5000)==true)
      {
        postSavings();
      }
      
      else
      {
        // alert("Please choose date");
      }
    });
    
    
    $('#idStaffCont').on('blur', function() {
    var fd = new FormData();
    fd.append("staffid", $("#idStaffCont").val());
      
    $.ajax({
          url:""+$online__access__tag+"processor/fetchStaffDeduction",
          data:fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          processData:false,
          success:function(data)
        {
            $("#idDedCont").val(data); 
        },
        error: function(err) {
          console.log(err);
        }
    });
        
    });
    
    
    $('#idAmountWithdraw').on('blur', function() {
     var amount = $("#idAmountWithdraw").val();
     amount = removeCommas(amount);
     var conv_amount = parseFloat(amount);
      var fee = 0;
     
     if(sessionStorage.getItem("product")==="SUSU ACCOUNT"){
           if((1 <= conv_amount) && (conv_amount <= 50)){
                     fee = 2;
                }else if( (51 <= conv_amount) && (conv_amount <= 100)){
                     fee = '3';
                }else if( (101<= conv_amount) && (conv_amount <= 200)){
                     fee = '5';
                }else if( (201<= conv_amount) && (conv_amount <= 300)){
                     fee = '10';
                }else if( (301<= conv_amount) && (conv_amount <= 400)){
                     fee = '12';
                }else if( (401<= conv_amount) && (conv_amount <= 500)){
                     fee = '15';
                }else if( (501<= conv_amount) && (conv_amount <= 600)){
                     fee = '18';
                }else if( (601<= conv_amount) && (conv_amount <= 700)){
                     fee = '20';
                }else if( (701<= conv_amount) && (conv_amount <= 800)){
                     fee = 25;
                }else if( (801<= conv_amount) && (conv_amount <= 900)){
                     fee = 30;
                }else if((901<= conv_amount) && (conv_amount <= 1000)){
                     fee = 35;
                }else if((1001<= conv_amount) && (conv_amount <= 1100)){
                     fee = 40;
                }else if((1101<= conv_amount) && (conv_amount <= 1500)){
                     fee = 45;
                }else if(conv_amount > 1500){
                     fee = 50;
                }
        }

        $('#idWithdrawalFee').html("Fee: GH¢"+fee);
    });
    
    
    var fromGuarantor1=false;
    $('#idGuarantor1').on('blur', function() {
      var idAccNo = $("#idAccNo").val();
      var accNumber = $("#idGuarantor1").val();
      if(accNumber===''){
        isGuarantor1Valid = false;
        $("#idGua1").html("Enter guarantor account number"); 
        $('#idGuarantor1').css('border-color','red');
      }else{
        $("#idGua1").html(""); 
        $('#idGuarantor1').css('border-color',''); 
      if(idAccNo === accNumber){
        $("#idGua1").html(idAccNo+" can't be used");
        isGuarantor1Valid = false;
      }else{
        fromGuarantor1=true;
        calculateBalancesLoan(accNumber);  
        isGuarantor1Valid = true;
      }
     }
    });
    
    
    
    var fromGuarantor2=false;
    $('#idGuarantor2').on('blur', function() {
      var idAccNo = $("#idAccNo").val();
      var accNumber = $("#idGuarantor2").val();
      if(accNumber===''){
        $("#idGua2").html("Enter guarantor account number"); 
        $('#idGuarantor2').css('border-color','red');
        isGuarantor2Valid = false;
      }else{
        $("#idGua2").html(""); 
        $('#idGuarantor2').css('border-color',''); 
          isGuarantor2Valid = false;
      if(idAccNo === accNumber){
        $("#idGua2").html(idAccNo+" can't be used");
          isGuarantor2Valid = false;
      }else{
        isGuarantor2Valid = true;
        fromGuarantor2=true;
        calculateBalancesLoan(accNumber);  
      }
     }
    });
    
    
    $('#idAccNo').on('blur', function() {
      var accNumber = $("#idAccNo").val();
      if(accNumber === ''){
        $('#idAccNo').css('border-color','red');
        isCustomerValid = false;
      }else{
          $('#idAccNo').css('border-color','');
          calculateBalancesLoan(accNumber); 
          isCustomerValid = true;
      }
      
     
    });
    
    var loanAmount = 0;
     $('#idLoanAmount').on('blur', function() {
       loanAmount = $("#idLoanAmount").val();
      var amt = parseFloat(loanAmount);
      if(amt<200){
          isAmountValide = false;
        $('#idLoanAmount').css('border-color','red');
      }else if(amt>5000){
          isAmountValide = false;
        $('#idLoanAmount').css('border-color','red');
      }else{
            isAmountValide = true;
        $('#idLoanAmount').css('border-color',''); 
      }
    });
    
   


    // $('#amount').on('blur', function() {
    //   var amount = $("#idAmount").val();
       
    //   if(amount < minAmount){
    //     $("#amount").after("<p id='eng' style='color:red'>Amount cannot be less than minimum balance. Use different contact</p>");
    //     $( ".form-control" ).prop( "disabled", true );
    //     $( "#amount" ).prop( "disabled", false );
           
    //   }else{
    //           $("#amount").remove();
    //           $( ".form-control" ).prop( "disabled", false );
    //           $("#contact1" ).prop( "disabled", false );
    //   }
       
       
    // });
     
//     function postLoanProduct() {
//     var idProductName = $("#idProductName").val();
//     var idProductCode = $("#idProductCode").val();
//     var idMinAmount = $("#idMinAmount").val();
//     var idMaxAmount = $("#idMaxAmount").val();
//     var idFormFee = $("#idFormFee").val();
//     var idProcFee = $("#idProcFee").val();
//     var idInterestRate = $("#idInterestRate").val();
//     var idPeriod = $("#intPeriod").val();

//     var fd = new FormData();
//     fd.append("idProductName", idProductName);
//     fd.append("idProductCode", idProductCode);
//     fd.append("idMinAmount", idMinAmount);
//     fd.append("idMaxAmount", idMaxAmount);
//     fd.append("idFormFee", idFormFee);
//     fd.append("idProcFee", idProcFee);
//     fd.append("idInterestRate", idInterestRate);
//     fd.append("idPeriod", idPeriod);
//     $.ajax({
//           url:""+$online__access__tag+"processor/postLoanProduct",
//           type:"POST",
//           data: fd,
//           contentType: false,       
//           cache: false, 
//           processData:false,
//           beforeSend:function()
//           {
//                 $("#btnApplicant > i").removeClass().addClass("fa fa-spinner fa-spin");
//                 $("#btnApplicant").prop("disabled", true);
//                 $("#btnApplicant").css("cursor", "no-drop");
//           },
//           success:function(data)
//           {
//           if(data == "success"){
               
//               $('#popProduct').modal({
//                     backdrop: 'static',
//                     keyboard: false
//                 })
           
//           }else{
               
//               alert('Product addition failed');
//           }
//         },
//         error: function(err) {
//             console.log(err);
//         //  alert(err.responseText);
//         }
//     });
// }
    
    

   function loadMomoTrans() {
    $.ajax({
          url:""+$online__access__tag+"processor/fetchMomoTrans",
          type:"POST",
          contentType: false,       
          cache: false, 
           dataType: 'JSON',            
          processData:false,
          success:function(data)
        {
                momoDataTbl(data); 
        },
        error: function(err) {
          console.log(err);
        }
    });
}



   function fetchAccountSettings(accno){
    var fd = new FormData();
    fd.append("accno", accno);
    $.ajax({
          url:""+$online__access__tag+"processor/fetchAccSettings",
          type:"POST",
          data:fd,
          contentType: false,       
          cache: false, 
           dataType: 'JSON',            
          processData:false,
          success:function(data)
        {
          if(data !== "none"){
            if(data[0].acc_status === "0"){
                $("#accStatusRadio1").attr('checked', true);
                $("#accStatusRadio2").attr('checked', false); 
            }else{
                $("#accStatusRadio1").attr('checked', false);
                $("#accStatusRadio2").attr('checked', true); 

            }

            if(data[0].sms_status === "0"){
                $("#smsStatusRadio1").attr('checked', true);
                $("#smsStatusRadio2").attr('checked', false); 
            }else{
                $("#smsStatusRadio1").attr('checked', false);
                $("#smsStatusRadio2").attr('checked', true); 
            }
          }
        },
        error: function(err) {
          //alert(err.responseText);
        }
    });
}


   function fetchHistory(accno){
    var fd = new FormData();
    fd.append("accno", accno);
    $.ajax({
          url:""+$online__access__tag+"processor/fetchHistory",
          type:"POST",
          data:fd,
          contentType: false,       
          cache: false, 
           dataType: 'JSON',            
          processData:false,
          success:function(data)
        {
          if(data !== "none"){
            if(data.dep_array[0]!=="none"){
             historyDatable(data.dep_array);   
            }
            if(data.with_array[0]!=='none'){
             historyDatableW(data.with_array);   
            }
          }
        },
        error: function(err) {
          //alert(err.responseText);
        }
    });
}


   function loadStaffCommission() {
    $.ajax({
          url:""+$online__access__tag+"processor/fetchStaffCommission",
          type:"POST",
          contentType: false,       
          cache: false, 
           dataType: 'JSON',            
          processData:false,
          success:function(data)
        {
           if(data != '0'){
              staffcommDataTbl(data);   
            }
                
        },
        error: function(err) {
          console.log(err);
        }
    });
}

    
  
    
    function fetchAccount(search) {
    var fd = new FormData();
    fd.append("search", search);
      
    $.ajax({
          url:""+$online__access__tag+"processor/fetchSearch",
          data:fd,
          type:"POST",
          contentType: false,       
          cache: false,
          dataType: 'JSON',    
          processData:false,
          success:function(data)
        {
          
           if(fromGuarantor1){
            if(data == ''){
            $("#idGua1").html("Account number not found"); 
            $('#idGuarantor1').css('border-color','red');
            }else{
             var amt = parseFloat(data[0].balance);
             var checkAmt = parseFloat(loanAmount);
             checkAmt = checkAmt/2;
             
             if(amt<checkAmt){
                 $("#idGua1").html(data[0].name+" is not qualified");
             }
               
              fromGuarantor1 = false;
            }
              
           }else if(fromGuarantor2){
            if(data == ''){
            $("#idGua2").html("Account number not found"); 
            $('#idGuarantor2').css('border-color','red');
            }else{
             var amt = parseFloat(data[0].balance);
             var checkAmt = parseFloat(loanAmount);
             checkAmt = checkAmt/2;
             
             if(amt<checkAmt){
                 $("#idGua2").html(data[0].name+" is not qualified");
             }
               
              fromGuarantor1 = false;
            }
               
           }else{
               
            if(data == ''){
                $("#idGua3").html("Account number not found"); 
                $('#idAccNo').css('border-color','red');
            }else if(parseFloat(data[0].days) < 180){
                  $("#idClientName").html(data[0].name+" don't quality for loan. Account is "+data[0].days + " day(s) old");
                
            }else{
                 $("#idGua3").html(""); 
                $('#idAccNo').css('border-color','');
                
             $("#idClientName").html(data[0].name);
             $("#idBalance").html("Balance: "+data[0].balance); 
            }
           }
        },
        error: function(err) {
            //alert('in error');
          console.log(err);
        }
    });
}

    
    
    
     function deleteAccount(ids) {
    var fd = new FormData();
    fd.append("ids", ids);
      
    $.ajax({
          url:""+$online__access__tag+"processor/deleteAccount",
          data:fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          processData:false,
          success:function(data)
        {
            if(data== 'success'){
            
                swal('Done', 'Record deleted successfully', 'success');
                location.reload();
            
            }else{
                   swal('Error', 'Deletion failed', 'error'); 
            }
            
        },
        error: function(err) {
          console.log(err);
        }
    });
}


     
     
    function postProduct() {
    var idProductName = $("#idProductName").val();
    var idProductCode = $("#idProductCode").val();
    var idMinAmount = $("#idMinAmount").val();
    var idMaxAmount = $("#idMaxAmount").val();
    var idBalMin = $("#idBalMin").val();
    var idBalMax = $("#idBalMax").val();
    var idInterestRate = $("#idInterestRate").val();
    var idPeriod = $("#intPeriod").val();
    var idEntryFee = $("#idEntryFee").val();
    var idWithdrawalFee = $("#idWithdrawalFee").val();
    
    var fd = new FormData();
    fd.append("idProductName", idProductName);
    fd.append("idProductCode", idProductCode);
    fd.append("idMinAmount", idMinAmount);
    fd.append("idMaxAmount", idMaxAmount);
    fd.append("idBalMin", idBalMin);
    fd.append("idBalMax", idBalMax);
    fd.append("idInterestRate", idInterestRate);
    fd.append("idPeriod", idPeriod);
    fd.append("idEntryFee", idEntryFee);
    fd.append("idWithdrawalFee", idWithdrawalFee);
         
    $.ajax({
          url:""+$online__access__tag+"processor/postProduct",
          type:"POST",
          data: fd,
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
                $("#btnPostProduct > i").removeClass().addClass("fa fa-spinner fa-spin");
                $("#btnPostProduct").prop("disabled", true);
                $("#btnPostProduct").css("cursor", "no-drop");
          },
          success:function(data)
          {
                $("#btnPostProduct > i").removeClass().addClass();
                $("#btnPostProduct").prop("disabled", false);
                $("#btnPostProduct").css("cursor", "");

               $(".modal-body").html("<h3>"+data.message+"</h3>");
                $(".clModalSuccess").modal(
                {
                backdrop: 'static',
                keyboard: false
                });

                setTimeout(function() {
                $(".clClose").click();
               }, 2000);
        },
        error: function(err) {
          //alert(err.responseText);
        }
    });
}

    $("#idDate").prop("max", `${today.getUTCFullYear()}-${(today.getUTCMonth() + 1).toString().padStart(2, "0")}-${today.getUTCDate().toString().padStart(2, "0")}`);

    function openNewAccount(client_id) {
    var date = $("#idDate").val().trim();
    var product = $(".clprod").val();
    var subscription = $(".clSubscribe").val();
    var description = $("#idDescription").val();
    var admin_id = sessionStorage.getItem('id');
    var fd = new FormData();
    fd.append("admin_id", admin_id);
    fd.append("date", date);
    fd.append("product", product);
    fd.append("subscription", subscription);
    fd.append("code", client_id);
    fd.append("description", description);
    $.ajax({
          url:""+$online__access__tag+"processor/postNewAccount",
          type:"POST",
          data: fd,
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
                $("#btnNewAccount").removeClass().addClass("fa fa-spinner fa-spin");
                $("#btnNewAccount").prop("disabled", true);
                $("#btnNewAccount").css("cursor", "no-drop");
                $("#btnNewAccount").html("Please wait!");
          },
          success:function(data)
          {
                $("#btnNewAccount").removeClass().addClass("");
                $("#btnNewAccount").prop("disabled", false);
                $("#btnNewAccount").css("cursor", "");
                $("#btnNewAccount").html("Open Account");

            if(data.status === "success"){
                $(".modal-body").html("<h4>Account Created Successfully! Please wait while we redirect.....</h4>");
                $('.clModalSuccess').modal({
                    backdrop: 'static',
                    keyboard: false
                });  
                sessionStorage.setItem("accno",data.accno);
             setTimeout(function() {
                window.location = $online__access__tag + "acc-manage";
              }, 2000);
            }
        },
        error: function(err) {
          //alert(err.responseText);
        }
    });
}



    function postNewUser() {
    var surname = $("#idSurname").val().trim();
    var othername = $("#idOthername").val().trim();
    var contact =  $("#idUserContact").val().trim();
    var username = $("#idUsername").val().trim();
    var password = $("#idPassword").val().trim();
    var role =  $("#idRole").val().trim();

    var fd = new FormData();
    fd.append("surname", surname);
     fd.append("othername", othername);
    fd.append("contact", contact);
    fd.append("username", username);
    fd.append("password", password);
    fd.append("role", role);
    $.ajax({
          url:""+$online__access__tag+"processor/postNewUser",
          type:"POST",
          data: fd,
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
            $("#btnPostUser > i").removeClass().addClass("fa fa-spinner fa-spin");
            $("#btnPostUser").prop("disabled", true);
            $("#btnPostUser").css("cursor", "no-drop");
          },
          success:function(data)
          {
            $("#btnPostUser > i").removeClass().addClass("");
            $("#btnPostUser").prop("disabled", false);
            $("#btnPostUser").css("cursor", "");

                $(".modal-body").html("<h3>"+data.message+"</h3>");
                $(".clModalSuccess").modal(
                {
                backdrop: 'static',
                keyboard: false
                });

                setTimeout(function() {
                $(".clClose").click();
               }, 2000); 
          
        },
        error: function(err) {
            console.log(err);
           // alert(err.responseText);
        }
    });
}


    
    
   function postRegistration() {
    var idFirstname = $("#idFirstname").val().trim();
    var idLastname =  $("#idLastname").val().trim();
    var idOthername = $("#idOthername").val().trim();
    var idDob = $("#idDob").val().trim();
    var idGender =  $("#idGender").val().trim();
    var idContact1 =  $("#idContact1").val();
    var idNextofKin =  $("#idNextofKin").val();
    var idNextofKinContact =  $("#idNextofKinContact").val();
    var idCountry =  $("#idCountry").val();
    var idRegion =  $("#idRegion").val();
    var idCity =  $("#idCity").val().trim();
    var idResidence =  $("#idResidence").val();
    var idOccupation =  $("#idOccupation").val();
    var idIdentification =  $("#idIdentification").val().trim();
    var idIdnumber =  $("#idIdnumber").val().trim();
    var fd = new FormData();
    fd.append("idFirstname", idFirstname);
    fd.append("idLastname", idLastname);
    fd.append("idOthername", idOthername);
    fd.append("idDob", idDob);
    fd.append("idGender", idGender);
    fd.append("idContact1", idContact1);
    fd.append("idNextofKin", idNextofKin);
    fd.append("idNextofKinContact", idNextofKinContact);
    fd.append("idRegion", idRegion);
    fd.append("idCity", idCity);
    fd.append("idResidence", idResidence);
    fd.append("idOccupation", idOccupation);
    fd.append("idIdentification", idIdentification);
    fd.append("idIdnumber", idIdnumber);
    $.ajax({
          url:""+$online__access__tag+"processor/postRegister",
          type:"POST",
          data: fd,
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
                $("#btnSubmitRegistration > i").removeClass().addClass("fa fa-spinner fa-spin");
                $("#btnSubmitRegistration").prop("disabled", true);
                $("#btnSubmitRegistration").css("cursor", "no-drop");
                $("#btnSubmitRegistration").html("Please wait!");
          },
          success:function(data)
          {
                $("#btnSubmitRegistration > i").removeClass().addClass("");
                $("#btnSubmitRegistration").prop("disabled", false);
                $("#btnSubmitRegistration").css("cursor", "");
                $("#btnSubmitRegistration").html("Submit")

           if(data.status == "success"){
            sessionStorage.setItem("client_id",data.client_id);
              $('#popRegister').modal({
                    backdrop: 'static',
                    keyboard: false
                })
           
           }else if(data.status == "failed"){
             swal('Registration failed! Please try again');
           }else{

           }
        },
        error: function(err) {
            console.log(err);
          //alert(err.responseText);
        }
    });
}


    
    
    
    function postDepositUpdate(){
     var idDate = $("#idDepDate").val();
     var idDeposit = $("#idDepAmount").val();

    var fd = new FormData();
    fd.append("id", list[0]);
    fd.append("idDate", idDate);
    fd.append("idDeposit", idDeposit);
    $.ajax({
          url:""+$online__access__tag+"processor/updateDeposit",
          type:"POST",
          data: fd,
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
                $("#btnDepositUpdate > i").removeClass().addClass("fa fa-spinner fa-spin");
                $("#btnDepositUpdate").prop("disabled", true);
                $("#btnDepositUpdate").css("cursor", "no-drop");
          },
          success:function(data)
          {
              $("#btnDepositUpdate > i").removeClass().addClass("");
              $("#btnDepositUpdate").prop("disabled", false);
              $("#btnDepositUpdate").css("cursor", "");

            
               $(".clCloseUpdt").click();
               $(".modal-body").html("<h3>"+data.message+"</h3>");
                $(".clModalSuccess").modal(
                {
                backdrop: 'static',
                keyboard: false
                });

                setTimeout(function() {
                $(".clClose").click();
               }, 1000);
              if(data.status === "success"){
                    loadDeposits();
               }
        },
        error: function(err) {
            console.log(err);
        }
    });
}



        function chargeSMS() {
            $.ajax({
                  url:""+$online__access__tag+"processor/chargeSMS",
                  type:"POST",
                  contentType: false,       
                  cache: false, 
                  processData:false,
                  success:function(data)
                {
                   // alert(data);
                },
                error: function(err) {
                  console.log(err);
                }
            });
        }


    function postAccountUpdate(){
     var idFullnameupdate = $("#idFullnameupdate").val();
     var idUserContactupdate = $("#idUserContactupdate").val();
     var idUsernameupdate = $("#idUsernameupdate").val();
     var idPasswordupdate = $("#idPasswordupdate").val();

    var fd = new FormData();
    fd.append("id", sessionStorage.getItem("edit-user"));
    fd.append("idFullnameupdate", idFullnameupdate);
    fd.append("idUserContactupdate", idUserContactupdate);
    fd.append("idUsernameupdate", idUsernameupdate);
    fd.append("role", $("#idRoleupdate").val());
    if(idPasswordupdate !== sessionStorage.getItem("password")){
      fd.append("idPasswordupdate", idPasswordupdate);  
    }
    $.ajax({
          url:""+$online__access__tag+"processor/updateUserAccount",
          type:"POST",
          data: fd,
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
                $("#btnPostUserUpdate > i").removeClass().addClass("fa fa-spinner fa-spin");
                $("#btnPostUserUpdate").prop("disabled", true);
                $("#btnPostUserUpdate").css("cursor", "no-drop");
          },
          success:function(data)
          {
                $("#btnPostUserUpdate > i").removeClass().addClass("");
                $("#btnPostUserUpdate").prop("disabled", false);
                $("#btnPostUserUpdate").css("cursor", "");

               $(".modal-body").html("<h3>"+data.message+"</h3>");
                $(".clModalSuccess").modal(
                {
                backdrop: 'static',
                keyboard: false
                });

                setTimeout(function() {
                $(".clClose").click();
                 window.location = $online__access__tag + "management";
               }, 2000); 
          },
        error: function(err) {
           alert(err.responseText)
        }
    });
}



    
    function fetchImagePath(id, name){
    var fd = new FormData();
    fd.append("id", id);
    $.ajax({
          url:""+$online__access__tag+"processor/fetchImage",
          data:fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          processData:false,
          success:function(data)
        {
             var href = "upload/"+data;
            if(path){
                sessionStorage.setItem('source', 'update');
                if(data == " "){
                    $("#uploadfile").html("Upload");
                }else{
                     $("#uploadfile").html("Change");
                }
                
                  $('#modalUpdateClient').modal();
                  $("#idImage2").html('<img src="' + href + '" width="160" height="160"/>');
            }else{
           
            $('#popImageModal').modal();
            
            $("#imageHead").html(name);
            $("#idImage").html('<img src="' + href + '" width="160" height="160"/>');
            }
            
           
        },
        error: function(err) {
          console.log(err);
        }
    });
    }
    
    
  function loadSearch(search) {
    var fd = new FormData();
    
    fd.append("search", search);    
    $.ajax({
          url:""+$online__access__tag+"processor/fetchSearch",
          data:fd,
          type:"POST",
          contentType: false,       
          cache: false, 
           dataType: 'JSON',            
          processData:false,
          success:function(data)
        {
                searchDataTbl(data); 
        },
        error: function(err) {
          console.log(err);
        }
    });
}


    
    function fetchMatured() {
    $.ajax({
          url:""+$online__access__tag+"processor/fetchMatured",
          type:"POST",
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          beforeSend:function()
        {
          $(".loader_container_sector").show();
        },
          success:function(data)
        {
          $(".loader_container_sector").hide();
          maturedDataTbl(data);
        },
        error: function(err) {
              $(".loader_container_sector").hide();
          console.log(err);
        }
    });
}


  
  function loadLoanProducts() {
    var fd = new FormData();
    
    fd.append("search", search);
      
    $.ajax({
          url:""+$online__access__tag+"processor/fetchLoanProduct",
          data:fd,
          type:"POST",
          contentType: false,       
          cache: false, 
           dataType: 'JSON',            
          processData:false,
          success:function(data)
        {
            loadProductDataTbl(data);
        },
        error: function(err) {
          console.log(err);
        }
    });
}



  function deleteClient(ids){
    var fd = new FormData();
    fd.append("ids", ids);
    $.ajax({
          url:""+$online__access__tag+"processor/deleteClient",
          data:fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function(){
            $("#yes > i").removeClass().addClass("fa fa-spinner fa-spin");
            $("#yes").prop("disabled", true);
            $("#yes").css("cursor", "no-drop");
            $("#yes").html("Please wait!");
          },
          success:function(data)
          {
            $("#yes > i").removeClass().addClass("");
            $("#yes").prop("disabled", false);
            $("#yes").css("cursor", "");
            $("#yes").html("Yes, Remove");
            $(".clClose2").click();

            if(data== 'success'){
                loadClients();
              $(".modal-body").html("Record(s) removed successfully");
              $('.clModalSuccess').modal({
                    backdrop: 'static',
                    keyboard: false
               })
            }else{
                   swal('Failed removing record! Please try again');  
            }
        },
        error: function(err) {
          console.log(err);
        }
    });
}



    function deleteFunction(id, table) {
    var fd = new FormData();
    fd.append("id", id);
    fd.append("table", table);
    $.ajax({
          url:""+$online__access__tag+"processor/deleteFunction",
          data:fd,
          type:"POST",
          dataType:"json",
          contentType: false,       
          cache: false, 
          processData:false,
          success:function(data)
        {
               $(".modal-body").html("<h3>"+data.message+"</h3>");
                $(".clModalSuccess").modal(
                {
                backdrop: 'static',
                keyboard: false
                });
                setTimeout(function() {
                $(".clClose").click();
               }, 2000);
             if(data.status == "success"){
                if(controller.includes("management")){
                 loadManagement();   
                }else if(controller.includes("deposit")){
                 loadDeposits();
              }else if(controller.includes("withdrawal")){
                 loadWithdrawals();
              }else if(controller.includes("product")){
                 loadProduct();
              } 
            }
        },
        error: function(err) {
          //alert(err.responseText)
        }
    });
}



     function postOccupation() {
    var occupation = $("#idNewOccupation").val();
    var fd = new FormData();
    fd.append("occupation", occupation);
      
    $.ajax({
          url:""+$online__access__tag+"processor/postOccupation",
          data:fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          processData:false,
          success:function(data)
        {
            alert('added successful');
                location.reload();
        },
        error: function(err) {
          console.log(err);
        }
    });
}



    function postResidence() {
    var residence = $("#idNewResidence").val();
    var fd = new FormData();
    fd.append("residence", residence);
    $.ajax({
          url:""+$online__access__tag+"processor/postResidence",
          data:fd,
          type:"POST",
          contentType: false, 
          dataType:'json',      
          cache: false, 
          processData:false,
          beforeSend:function(){
            $("#btnPostNew > i").removeClass().addClass("fa fa-spinner fa-spin");
            $("#btnPostNew").prop("disabled", true);
            $("#btnPostNew").css("cursor", "no-drop");
            $("#btnPostNew").html("Please wait!");
         },
          success:function(data)
         {
            $("#btnPostNew > i").removeClass().addClass("");
            $("#btnPostNew").prop("disabled", false);
            $("#btnPostNew").css("cursor", "");
            $("#btnPostNew").html("Submit");

            if(data.status === "success"){
                fetchAreaList();
                $(".clShow").html("Added successfully").css('color','green').show();
            }else if(data.status === "exist"){
                $(".clShow").html("Area already exist!").css('color','blue').show(); 
            }else{
                $(".clShow").html("Failed adding recored! Try again").css('color','red').show(); 
            }

          setTimeout(function() {
            $(".clShow").hide();
          }, 5000); 
        },
        error: function(err) {
          console.log(err);
        }
    });
}

    
  function loadSavings() {
    $.ajax({
          url:""+$online__access__tag+"processor/fetchSavings",
          type:"POST",
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          beforeSend:function()
          {
            //$("#clLoad").show();
          },
          success:function(data)
          {   
             if(data!=="none"){
               searchDataTbl(data);   
             } 
          },
        error: function(err) {
           // alert(err.responseText);
          console.log(err);
        }
    });
}



     function loadDeposits() {
    $.ajax({
          url:""+$online__access__tag+"processor/fetchDeposits",
          type:"POST",
          contentType: false,       
          cache: false, 
           dataType: 'JSON',            
          processData:false,
          beforeSend:function()
        {
        
        },
          success:function(data)
        {
            if(data != "none"){
              depositsDataTbl(data);
            }
        },
        error: function(err) {
          //alert(err.responseText)
        }
    });
}





    function fetchContribution() {
    $.ajax({
          url:""+$online__access__tag+"processor/fetchContribution",
          type:"POST",
          contentType: false,       
          cache: false, 
           dataType: 'JSON',            
          processData:false,
          beforeSend:function()
        {
          $(".loader_container_sector").show();
        },
          success:function(data)
        {
            if(data != '0'){
                $(".loader_container_sector").hide();
               contributionDataTbl(data); 
            }else{
                  $(".loader_container_sector").hide();
            }
          
        },
        error: function(err) {
          console.log(err);
        }
    });
}



    function fetchDeduction() {
    $.ajax({
          url:""+$online__access__tag+"processor/fetchDeduction",
          type:"POST",
          contentType: false,       
          cache: false, 
           dataType: 'JSON',            
          processData:false,
          beforeSend:function()
        {
          $(".loader_container_sector").show();
        },
          success:function(data)
        {
            if(data != '0'){
                $(".loader_container_sector").hide();
               deductionDataTbl(data); 
            }else{
                  $(".loader_container_sector").hide();
            }
          
        },
        error: function(err) {
          console.log(err);
        }
    });
}



    
    function loadFees() {
    $.ajax({
          url:""+$online__access__tag+"processor/fetchFees",
          type:"POST",
          contentType: false,       
          cache: false, 
           dataType: 'JSON',            
          processData:false,
          beforeSend:function()
        {
          $(".loader_container_sector").show();
        },
          success:function(data)
        {
            $(".loader_container_sector").hide();
            feesDataTbl(data); 
        },
        error: function(err) {
          console.log(err);
        }
    });
}



   function loadWithdrawals() {
    $.ajax({
          url:""+$online__access__tag+"processor/fetchWithdrawals",
          type:"POST",
          contentType: false,       
          cache: false, 
           dataType: 'JSON',            
          processData:false,
           beforeSend:function()
        {

        },
          success:function(data)
        {
            if(data == 'reset'){
                window.location = $online__access__tag + "auth";
            }else{
                withdrawalDataTbl(data);  
            }
        },
        error: function(err) {
           console.log(err);
        }
    });
}



    $(document).on('click', "#btnPrint", function(e) {
    e.preventDefault();
        $("#btnPrint > i").removeClass().addClass("fa fa-spinner fa-spin");
        $("#btnPrint").prop("disabled", true);
        $("#btnPrint").css("cursor", "no-drop");

        printForm();
    });


    function printForm() {
     var element = document.getElementById('idReport');
          var opt = {
          margin:       0.5,
          filename:     'statement.pdf',
          image:        { type: 'jpeg', quality: 0.98 },
          html2canvas:  { scale: 2 },
          jsPDF:        { unit: 'in', format: 'a4', orientation: 'portrait' }
        };
 
       html2pdf().set(opt).from(element).save();

        $("#btnPrint > i").removeClass().addClass("");
        $("#btnPrint").prop("disabled", false);
        $("#btnPrint").css("cursor", "");
    }




    function routeAccountFull(accno, date1, date2){
    var fd = new FormData();
    fd.append("accno", accno);
    fd.append("date1", date1);
    fd.append("date2", date2);
    $.ajax({
          url:""+$online__access__tag+"processor/routeAccountNoFull",
          data: fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          dataType: 'JSON',
          processData:false,
          beforeSend:function()
          {
            $(".loader_container_sector").show();
          },
          success:function(data)
        {
              var state = '';
              var total = [];
              var amt=0;
              data = _.sortBy(data, 'depdate');
              total.push(data[0].depamount);
              
                     if(data[1].activity == 'Deposit'){
                        amt = parseFloat(data[0].depamount) + parseFloat(data[1].depamount);
                        total.push(amt);
                         
                     }else{
                           amt = parseFloat(data[0].depamount) - parseFloat(data[1].depamount);
                           total.push(amt);
                     }
                     
                     for(var i=2; i<data.length; i++){
                         if(data[i].activity == 'Deposit'){
                             amt = parseFloat(total[i-1]) + parseFloat(data[i].depamount);
                             total.push(amt);
                         }else{
                             amt = parseFloat(total[i-1]) - parseFloat(data[i].depamount);
                             total.push(amt);
                         }
                     }
            
            $("#idOptions").show();
            $("#idReport").show();
            $("#idReportTop").hide();
            
            $("#idAccName").html(data[0].name);
            $("#idAccnumber").html(accno);
            $("#idProduct").html(data[0].prodname);
            $("#idAccBal").html("Acc. Bal: &emsp;<b>"+data[0].balance+"</b>");
            
            
             sessionStorage.setItem('accname', data[0].name);
             sessionStorage.setItem('accno', accno);
             sessionStorage.setItem('accbal', data[0].balance);
            
            
            if(date1==date2){
                $("#idState").html("STATEMENT OF ACCOUNT AS AT "+date1); 
                state = "STATEMENT OF ACCOUNT AS AT "+date1;
                
            }else{
                $("#idState").html("STATEMENT OF ACCOUNT AS AT "+date1+" to "+date2);  
                state = "STATEMENT OF ACCOUNT AS AT "+date1+" to "+date2;
            }
            
            
            sessionStorage.setItem('state', state);
            
            var fees = 0;
            if(data[0].sms_charge){
            fees = parseFloat(data[0].entryfee)+parseFloat(data[0].withfee)+parseFloat(data[0].sms_charge);
            }else{
             fees = parseFloat(data[0].entryfee)+parseFloat(data[0].withfee);  
            }
            
             $("#idTotalDeposit").html("Deposits: &emsp;&emsp;"+"GH¢"+formatNumberWithCommas(parseFloat(data[0].totaldeposit)));
             if(data[0].totalinterest !== "0"){
                $("#idTotalInterest").html("Interest: "+"GH¢"+data[0].totalinterest).show();
             }
             $("#idTotalWithdrawal").html("Withdrawals: "+"(GH¢"+data[0].totalwithdrawal+")");
             $("#idTotFee").html("Fees: "+"(GH¢"+fees+")");
            
            var href = "upload/"+data[0].path;
            $("#idImage2").html('<img src="' + href + '" width="160" height="160"/>');
                   
              for(var i=0; i<data.length; i++){
                if(data[i].activity === "Deposit"){
                    $("#depositTable").append("<tr><td>"+data[i].depdate+"</td><td>" + data[i].activity + "</td><td></td><td>"+ data[i].depamount +"</td><td>"+ total[i] +"</td></tr>");
                }else{
                     $("#depositTable").append("<tr><td>"+data[i].depdate+"</td><td>" + data[i].activity + "</td><td>"+ data[i].depamount +"</td><td></td><td>"+ total[i] +"</td></tr>");
                }
                
                  $("#depositTable").append("</table>");
              }
        },
        error: function(err) {
          console.log(err);
        }
    });
}
    


    function routeAccount(){
    var today = new Date().toISOString().slice(0, 10);
    var accno =  $("#idaccno").val();
    var fd = new FormData();
    fd.append("accno", accno);
    $.ajax({
          url:""+$online__access__tag+"processor/routeAccountNo",
          data: fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          dataType: 'JSON',
          processData:false,
          beforeSend:function()
          {
          $(".loader_container_sector").show();
          },
          success:function(data)
          {
              var total = [];
              var amt=0;
              data = _.sortBy(data, 'depdate');
              total.push(data[0].depamount);
              
                     if(data[1].activity == 'Deposit'){
                        amt = parseFloat(data[0].depamount) + parseFloat(data[1].depamount);
                        total.push(amt);
                         
                     }else{
                           amt = parseFloat(data[0].depamount) - parseFloat(data[1].depamount);
                           total.push(amt);
                     }
                     
                     for(var i=2; i<data.length; i++){
                         if(data[i].activity == 'Deposit'){
                             amt = parseFloat(total[i-1]) + parseFloat(data[i].depamount);
                             total.push(amt);
                         }else{
                             amt = parseFloat(total[i-1]) - parseFloat(data[i].depamount);
                             total.push(amt);
                         }
                     }
            $("#idOptions").show();
            $("#idReport").show();
            $("#idReportTop").hide();
            
            $("#idAccName").html(data[0].name);
            $("#idAccnumber").html(accno);
            $("#idProduct").html(data[0].prodname);
            $("#idAccBal").html("Acc. Bal: &emsp;<b>"+data[0].balance+"</b>");
            
             sessionStorage.setItem('accname', data[0].name);
             sessionStorage.setItem('accno', accno);
             sessionStorage.setItem('accbal', data[0].balance);
            
             $("#idState").html("STATEMENT OF ACCOUNT AS AT "+today); 
             sessionStorage.setItem('state', "STATEMENT OF ACCOUNT AS AT "+today );
   
            var fees = 0;
            if(data[0].sms_charge){
            fees = parseFloat(data[0].entryfee)+parseFloat(data[0].withfee)+parseFloat(data[0].sms_charge);
            }else{
             fees = parseFloat(data[0].entryfee)+parseFloat(data[0].withfee);  
            }
            
             $("#idTotalDeposit").html("Deposits: &emsp;&emsp;"+"GH¢"+formatNumberWithCommas(parseFloat(data[0].totaldeposit)));
             if(data[0].totalinterest !== "0"){
                $("#idTotalInterest").html("Interest: "+"GH¢"+data[0].totalinterest).show();
             }
             $("#idTotalWithdrawal").html("Withdrawals: "+"(GH¢"+data[0].totalwithdrawal+")");
             $("#idTotFee").html("Fees: "+"(GH¢"+fees+")");
              
              
            
            // var href = "upload/"+data[0].path;
            // $("#idImage2").html('<img src="' + href + '" width="300" height="250"/>');
                   
              for(var i=0; i<data.length; i++){
               if(data[i].activity === "Deposit"){
                    $("#depositTable").append("<tr><td>"+data[i].depdate+"</td><td>" + data[i].activity + "</td><td style='padding-right:100px'></td><td>"+ data[i].depamount +"</td><td>"+ total[i] +"</td></tr>");
                }else{
                     $("#depositTable").append("<tr><td>"+data[i].depdate+"</td><td>" + data[i].activity + "</td><td>"+ data[i].depamount +"</td><td></td><td>"+ total[i] +"</td></tr>");
                }                
                  $("#depositTable").append("</table>");
              }
        },
        error: function(err) {
          console.log(err);
        }
    });
}


        function loadSMS() {
        $.ajax({
          url:""+$online__access__tag+"processor/fetchSMS",
          type:"POST",
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          success:function(data)
        {
          smsDataTbl(data);
        },
        error: function(err) {
          console.log(err);
        }
    });
}



   
    function loadNewClient() {
      var fd = new FormData();
      fd.append("client_id", sessionStorage.getItem("client_id"));
    $.ajax({
          url:""+$online__access__tag+"processor/fetchNewClient",
          type:"POST",
          data:fd,
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          beforeSend:function()
        {

        },
          success:function(data)
        {
           if(data !== "none"){
            $("#idImage2").append("<img src='upload/"+data[0].photo+"' width='160' height='160'>");
            $("#clCode").val(data[0].code);
            $("#clFullname").val(data[0].fullname);
            $("#clPhone").val(data[0].phone);
            $("#clIDNo").val(data[0].idno);
           }
        },
        error: function(err) {
          alert(err.responseText)
        }
    });
}



    function loadClients() {
    $.ajax({
          url:""+$online__access__tag+"processor/fetchClients",
          type:"POST",
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          beforeSend:function()
        {

        },
          success:function(data)
        {
            if(data !== "none"){
             clientDataTbl(data);   
            }
        },
        error: function(err) {
          //alert(err.responseText)
        }
    });
}



    function loadMomoCommission() {
    $.ajax({
          url:""+$online__access__tag+"processor/fetchMomoCommission",
          type:"POST",
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          beforeSend:function()
        {
          $(".loader_container_sector").show();
        },
          success:function(data)
        {
        $(".loader_container_sector").hide();
            if(data != '0'){
                momocommissionDataTbl(data);  
            }
        
        },
        error: function(err) {
          console.log(err);
        }
    });
}



    function generatePayroll(){
      var year = $("#idYear").val();
      var month = $("#idMonth").val();
      var fd = new FormData();
      fd.append("year", year);
      fd.append("month", month);
      

      $.ajax({
        url:""+$online__access__tag+"processor/search_payroll",
        type: "POST",
        data:fd,
        cache:false,
        contentType:false,
        processData:false,
        beforeSend:function()
        {
          $(".loader_container_sector").show();
        },
        success:function(data)
        {
          $(".loader_container_sector").hide();
          //alert(data);
          $('.make_me_dynamic_checker').html(data);
          $("#nav-profile-tab").prop("disabled", false);
          $("#nav-profile-tab2").prop("disabled", false);
        }
      });
    }

      





   function populateDeduction() {
    $.ajax({
          url:""+$online__access__tag+"processor/populateDeduction",
          type:"POST",
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
        {
        },
          success:function(data)
        {
       
        },
        error: function(err) {
          console.log(err);
        }
    });
}
    

    function calculateStaffCommission() {
    $.ajax({
          url:""+$online__access__tag+"processor/calculateStaffCommission",
          type:"POST",
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
        {
        },
          success:function(data)
        {
      
        },
        error: function(err) {
          console.log(err);
        }
    });
}



    function populateGraph() {
    $.ajax({
          url:""+$online__access__tag+"processor/populateGraph",
          type:"POST",
          contentType: false,       
          cache: false, 
          processData:false,
          dataType:'JSON',
          beforeSend:function()
        {
        },
          success:function(data)
        {
               $('#graphCanvas').remove();
               generateGraph(data[0].label, data[0].value);
        
        },
        error: function(err) {
          console.log(err);
        }
    });
}



    function calculateBalancesAll() {
    $.ajax({
          url:""+$online__access__tag+"processor/calculateBalancesAll",
          type:"POST",
          contentType: false,       
          cache: false, 
          processData:false,
          success:function(data)
        {
            if(fromAdd){
                location.reload();
            }
   
        },
        error: function(err) {
          console.log(err);
        }
    });
    
    
}


        function loadInterest() {
        $.ajax({
          url:""+$online__access__tag+"processor/fetchInterest",
          type:"POST",
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          success:function(data)
        {
          interestDataTbl(data);
        },
        error: function(err) {
          console.log(err);
        }
    });
 }



    function calculateBalancesLoan(search) {
    var fd = new FormData();
    fd.append("search", search);
    $.ajax({
          url:""+$online__access__tag+"processor/calculateBalances",
          data: fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          processData:false,
          success:function(data)
        {
           fetchAccount(search);
        },
        error: function(err) {
          console.log(err);
            }
        });
    }


    

    function calculateBalances(search) {
    var fd = new FormData();
    fd.append("search", search);
    $.ajax({
          url:""+$online__access__tag+"processor/calculateBalances",
          data: fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          processData:false,
          success:function(data)
        {
            if(data=="success"){
                window.location = $online__access__tag + "search";
            }else{
              console.log(data);
            }
 
        },
        error: function(err) {
          console.log(err);
        }
    });
}



    function loadProduct() {
    $.ajax({
          url:""+$online__access__tag+"processor/fetchProduct",
          type:"POST",
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          success:function(data)
        {
          productDataTbl(data);
                if(controller === "cust-account"){
                  var dropdown = $(".clprod");
                    $(dropdown).empty();
                    dropdown.append($("<option />").val("").text("Choose Product").prop('selected',true).prop('disabled',true))
                   for(var i=0;i<data.length; i++){
                    dropdown.append($("<option />").val(data[i].code).text(data[i].name));
                   }
            } 
        },
        error: function(err) {
          console.log(err);
        }
    });
}


//         function loadWithdrawal() {
//         $.ajax({
//           url:""+$online__access__tag+"processor/fetchWithdrawal",
//           type:"POST",
//           contentType: false,       
//           cache: false, 
//           dataType: 'JSON',            
//           processData:false,
//           success:function(data)
//         {
//           productDataTbl(data);
//         },
//         error: function(err) {
//           console.log(err);
//         }
//     });
// }


    function loadNoAccount() {
        $.ajax({
          url:""+$online__access__tag+"processor/fetchNoAccount",
          type:"POST",
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          success:function(data)
        {
          noaccountDataTbl(data);
        },
        error: function(err) {
          console.log(err);
        }
    });
}


   function loadInterestCalc() {
        $.ajax({
          url:""+$online__access__tag+"processor/calcInterest",
          type:"POST",
          contentType: false,       
          cache: false, 
          processData:false,
          success:function(data)
        {
            //alert(data);
        },
        error: function(err) {
           // alert(err.responseText);
          console.log(err);
        }
    });
}

    
    
    function loadManagement() {
        $.ajax({
          url:""+$online__access__tag+"processor/fetchUsers",
          type:"POST",
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          success:function(data)
        {
          managementDataTbl(data);
        },
        error: function(err) {
          console.log(err);
        }
    });
}




   function loadReportDefault2(date, date2) {
    var fd = new FormData();
    fd.append("date", date);
    fd.append("date2", date2);

    $.ajax({
          url:""+$online__access__tag+"processor/loadReportDefault2",
          data:fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
               beforeSend:function()
        {
          $(".loader_container_sector").show();
        },
          success:function(data)
        {  
                $(".loader_container_sector").hide();
               $("#hello").html("");
              var len = data.length;
              $("#conti").css("display", "block");
         
                var html = "<table>" +
                  "<tr><td colspan='2' style='background:green;color:white'><b>REPORT FROM "+date+" TO "+date2+" </b></td></tr>" +
                  "<tr><td><b>TOTAL DEPOSITS:</b></td><td style='font-size:18px'>" + data[0].deposits + "</td></tr>" +
                  "<tr><td><b>TOTAL INTERESTS:</b></td><td style='font-size:18px'>" + data[0].interests + "</td></tr>" +
                  "<tr><td><b>TOTAL WITHDRAWALS:</b></td><td style='color:red;font-size:18px'>" + data[0].withdrawals + "</td></tr>" +
                   "<tr><td><b>TOTAL FEES:</b></td><td style='color:red;font-size:18px'>" + data[0].fees + "</td></tr>" +
                  "<tr><td><b>TOTAL BALANCE:</b></td><td style='color:green;font-size:18px'>" + data[0].balance + "</td></tr>" +
                  "</table>";
                   $('#hello').append(html);
                   
              
                var label = ["Total deposits", "Total Interests", "Total Withdrawals", "Total Fees", "Total balance"];

                var values=[];
                data = [data[0].deposits1, data[0].interests1, data[0].withdrawals1, data[0].fees1, data[0].balance1];
                   
                   generateGraph2(label, data);    
                     
        },
        error: function(err) {
          //alert(err.responseText);
        }
    });
}



  function loadReportDefault() {
    $.ajax({
          url:""+$online__access__tag+"processor/loadReportDefault",
          type:"POST",
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          beforeSend:function()
        {
          $(".loader_container_sector").show();
        },
          success:function(data)
         {
               $(".loader_container_sector").hide();
               $("#hello").html("");
              var len = data.length;
              $("#conti").css("display", "block");
         
                var html = "<table>" +
                  "<tr><td colspan='2' style='background:green;color:white'><b>REPORT TILL DATE </b></td></tr>" +
                  "<tr><td><b>TOTAL DEPOSITS:</b></td><td style='font-size:18px'>" + data[0].deposits + "</td></tr>" +
                  "<tr><td><b>TOTAL INTERESTS:</b></td><td style='font-size:18px'>" + data[0].interests + "</td></tr>" +
                  "<tr><td><b>TOTAL WITHDRAWALS:</b></td><td style='color:red;font-size:18px'>" + data[0].withdrawals + "</td></tr>" +
                   "<tr><td><b>TOTAL FEES:</b></td><td style='color:red;font-size:18px'>" + data[0].fees + "</td></tr>" +
                  "<tr><td><b>TOTAL BALANCE:</b></td><td style='color:green;font-size:18px'>" + data[0].balance + "</td></tr>" +
                  "</table>";
                   $('#hello').append(html);
                   
                    var label = ["Total deposits", "Total Interests", "Total Withdrawals", "Total Fees", "Total balance"];

                   var values = [data[0].deposits1, data[0].interests1, data[0].withdrawals1, data[0].fees1, data[0].balance1];
                   
                    generateGraph2(label, values);
        },
        error: function(err) {
          alert(err.responseText);
        }
    });
}

      
     
   function loadLatestUpdate2(date, date2) {
    var fd = new FormData();
    fd.append("date", date);
    fd.append("date2", date2);
    $.ajax({
          url:""+$online__access__tag+"processor/loadLatest2",
          data:fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          success:function(data)
        {  
              
               $("#hello2").html("");
              var len = data.length;
              $("#conti").css("display", "block");
                var html = "<table>" +
                  "<tr><td colspan='2' style='background:#ffc107;color:black'><b>LATEST RECORD</b></td></tr>" +
                  "<tr><td><b>Date:</b></td><td style='font-size:15px'>" + data[0].deposit_date + "</td></tr>" +
                  "<tr><td><b>DEPOSIT:</b></td><td style='font-size:15px'>" + data[0].deposit + "</td></tr>" +
                  "<tr><td><b>Posted by:</b></td><td style='font-size:15px'>" + data[0].deposit_by + "</td></tr>" +
                  "<tr><td><b>Date:</b></td><td style='font-size:15px'>" + data[0].withdrawal_date + "</td></tr>" +
                  "<tr><td><b>WITHDRAWAL:</b></td><td style='font-size:15px'>" + data[0].withdrawal + "</td></tr>" +
                 "<tr><td><b>Withdrawal by:</b></td><td style='font-size:15px'>" + data[0].withdrawal_by + "</td></tr>" +
                  "</table>";
                   $('#hello2').append(html);
                
        },
        error: function(err) {
         // alert(err.responseText);
        }
    });
}

       
        
        
        
        function generateGraph(label, valParams) {
        var chartdata = {
        labels: label,
        datasets : [
          {
        label: 'No. of Customers',
        backgroundColor: [
               'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
              borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
        hoverBackgroundColor: [
                'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
            ],
        hoverBorderColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],

            data: valParams
          },
        ]

      };

      $('#chart-container').append('<canvas id="graphCanvas"><canvas>');
      var ctx = $("#graphCanvas");
      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata
      });

      }

        
        
        
        
        function generateGraph2(label, valParams) {
        var chartdata = {
        labels: label,
        datasets : [
          {
        label: 'Amount(GH¢)',
        backgroundColor: [
               'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
              borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
        hoverBackgroundColor: [
                'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
            ],
        hoverBorderColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],

            data: valParams
          },
        ]

      };

      $('#chart-container').append('<canvas id="graphCanvas"><canvas>');
      var ctx = $("#graphCanvas");
      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata
      });

      }

        

  function loadLatestUpdate() {
    $.ajax({
          url:""+$online__access__tag+"processor/loadLatest",
          type:"POST",
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          success:function(data)
        {  
              
               $("#hello2").html("");
              var len = data.length;
              $("#conti").css("display", "block");
                var html = "<table>" +
                  "<tr><td colspan='2' style='background:#ffc107;color:black'><b>LATEST RECORD</b></td></tr>" +
                  "<tr><td><b>Date:</b></td><td style='font-size:15px'>" + data[0].deposit_date + "</td></tr>" +
                  "<tr><td><b>DEPOSIT:</b></td><td style='font-size:15px'>" + data[0].deposit + "</td></tr>" +
                  "<tr><td><b>Posted by:</b></td><td style='font-size:15px'>" + data[0].deposit_by + "</td></tr>" +
                  "<tr><td><b>Date:</b></td><td style='font-size:15px'>" + data[0].withdrawal_date + "</td></tr>" +
                  "<tr><td><b>WITHDRAWAL:</b></td><td style='font-size:15px'>" + data[0].withdrawal + "</td></tr>" +
                 "<tr><td><b>Withdrawal by:</b></td><td style='font-size:15px'>" + data[0].withdrawal_by + "</td></tr>" +
                  "</table>";
                   $('#hello2').append(html);
                
        },
        error: function(err) {
          alert(err.responseText);
        }
    });
}


    


function filterReport(date, date2, user) {
    var fd = new FormData();
    fd.append("date", date);
    fd.append("date2", date2);
    fd.append("user", user);
    
    $.ajax({
          url:""+$online__access__tag+"processor/loadFilterReport",
          data: fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          beforeSend:function()
          {
            $(".loader_container_sector").show();
            $("#btnFilter > i").removeClass().addClass("fa fa-spinner fa-spin");
            $("#btnFilter").prop("disabled", true);
            $("#btnFilter").css("cursor", "no-drop");
          },
          success:function(data)
          {  
            $(".loader_container_sector").hide();
            $("#btnFilter > i").removeClass();
            $("#btnFilter").prop("disabled", false);
            $("#btnFilter").css("cursor", "");
              
              $("#hello").html("");
              var len = data.length;
              $("#conti").css("display", "block");
                
                if(date==''||date==null){
                  var html = "<table>" +
                  "<tr><td colspan='2' style='background:green;color:white'><b style='font-size:20px'>REPORT TILL DATE </b></td></tr>" +
                  "<tr><td><b>TOTAL DEPOSIT:</b></td><td style='font-size:18px'>" + data[0].deposit + "</td></tr>" +
                  "<tr><td><b>TOTAL WITHDRAWAL:</b></td><td style='font-size:18px;color:red'>" + data[0].withdrawal + "</td></tr>" +
                  "<tr><td><b>TOTAL WITHDRAWAL FEES:</b></td><td style='font-size:18px;color:red'>" + data[0].fees + "</td></tr>" +
                  "<tr><td><b>Officer:</b></td><td style='font-size:18px'>" + data[0].name + "</td></tr>" +
                  "<tr><td><b>Role:</b></td><td style='font-size:18px'>" + data[0].role + "</td></tr>" +
                  "</table>";
                   $('#hello').append(html);
                }else if(date==date2){
                  var html = "<table>" +
                  "<tr><td colspan='2' style='background:green;color:white'><b>REPORT FROM "+date+" </b></td></tr>" +
                  "<tr><td><b>TOTAL DEPOSIT:</b></td><td style='font-size:18px'>" + data[0].deposit + "</td></tr>" +
                  "<tr><td><b>TOTAL WITHDRAWAL:</b></td><td style='font-size:18px'>" + data[0].withdrawal + "</td></tr>" +
                  "<tr><td><b>TOTAL WITHDRAWAL FEES:</b></td><td style='font-size:18px;color:red'>" + data[0].fees + "</td></tr>" +
                  "<tr><td><b>Officer:</b></td><td style='font-size:18px'>" + data[0].name + "</td></tr>" +
                  "<tr><td><b>Role:</b></td><td style='font-size:18px'>" + data[0].role + "</td></tr>" +
                  "</table>";
                   $('#hello').append(html);
                }else{
                  var html = "<table>" +
                  "<tr><td colspan='2' style='background:green;color:white'><b>REPORT AS AT "+date+" TO "+date2+" </b></td></tr>" +
                  "<tr><td><b>TOTAL DEPOSIT:</b></td><td style='font-size:18px'>" + data[0].deposit + "</td></tr>" +
                  "<tr><td><b>TOTAL WITHDRAWAL:</b></td><td style='font-size:18px'>" + data[0].withdrawal + "</td></tr>" +
                  "<tr><td><b>TOTAL WITHDRAWAL FEES:</b></td><td style='font-size:18px;color:red'>" + data[0].fees + "</td></tr>" +
                  "<tr><td><b>Officer:</b></td><td style='font-size:18px'>" + data[0].name + "</td></tr>" +
                  "<tr><td><b>Role:</b></td><td style='font-size:18px'>" + data[0].role + "</td></tr>" +
                  "</table>";
                   $('#hello').append(html);
                }
                
                
              
                
                var label = ["Total deposits", "Total Withdrawals", "Total Fees"];

                  var values = [];
                  values = [data[0].deposit1, data[0].withdrawal1, data[0].fees1];
                 
                  generateGraph2(label, values);
                
             
        },
        error: function(err) {
          //alert(err.responseText);
        }
    });
}

  function loadFilterLatest(date, date2, user) {
    var fd = new FormData();
    fd.append("date", date);
    fd.append("date2", date2);
    fd.append("user", user);
    $.ajax({
          url:""+$online__access__tag+"processor/loadFilterLatest",
          data:fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          success:function(data)
        {  
               $("#hello2").html("");
              var len = data.length;
              $("#conti").css("display", "block");
                var html = "<table>" +
                  "<tr><td colspan='2' style='background:#ffc107;color:black'><b>LATEST RECORD</b></td></tr>" +
                  "<tr><td><b>Date:</b></td><td style='font-size:15px'>" + data[0].deposit_date + "</td></tr>" +
                  "<tr><td><b>DEPOSIT:</b></td><td style='font-size:15px'>" + data[0].deposit + "</td></tr>" +
                  "<tr><td><b>Date:</b></td><td style='font-size:15px'>" + data[0].withdrawal_date + "</td></tr>" +
                  "<tr><td><b>WITHDRAWAL:</b></td><td style='font-size:15px;color:red'>" + data[0].withdrawal + "</td></tr>" +
                  "</table>";
                   $('#hello2').append(html);
                
        },
        error: function(err) {
         // alert(err.responseText);
        }
    });
}




        
        
        
        function feesDataTbl(data){
        $("#dataTable").DataTable().destroy();
         table = $("#dataTable").DataTable({
          data:data, 
          dom: 'Blfrtip',
          buttons: [
              'copyHtml5', 
              'excelHtml5',
              'csvHtml5',
              'pdfHtml5'

          ],
          retrieve: true,
          columns:[
                  // {'data': ''},
                  {'data': 'id'},
                  {'data': 'date'},
                  {'data': 'name'},
                  {'data': 'account_number'},
                  {'data': 'fee_type'},
                  {'data': 'amount'},
                  {'data': 'current_balance'},
         ],
         // 'columnDefs': [{
         // 'targets': 0,
         // 'searchable': false,
         // 'orderable': false,
         // 'className': 'dt-body-center',
         // 'render': function (data, type, full, meta){
         //      return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
         //     }
         //  }],
        });  
      }

        
    
      function smsDataTbl(data){
        $("#smsTable").DataTable().destroy();
         table = $("#smsTable").DataTable({
          data:data, 
          dom: 'Blfrtip',
          buttons: [
              'copyHtml5', 
              'excelHtml5',
              'csvHtml5',
              'pdfHtml5'

          ],
          retrieve: true,
          columns:[
                  {'data': 'id'},
                  {'data': 'date'},
                  {'data': 'accno'},
                  {'data': 'contact'},
                  {'data': 'message'},
                  {'data': 'type'}
          ],
            'order': [[1, 'des']]
        });  
      }

            
    function maturedDataTbl(data){
        $("#dataTable").DataTable().destroy();
         table = $("#dataTable").DataTable({
          data: data, 
          dom: 'Blfrtip',
          buttons: [
              'copyHtml5', 
              'excelHtml5',
              'csvHtml5',
              'pdfHtml5'

          ],
          retrieve: true,
          columns:[
                  {'data': ''},    
                  {'data': 'id'},
                  {'data': 'account_number'},
                  {'data': 'name'},
                  {'data': 'subscription'},
                  {'data': 'matured_date'},
                  {'data': 'product'},
          ],

         'columnDefs': [{
         'targets': 0,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
               return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
                }
            }],
        });  
      }
    

        
        
    function momocommissionDataTbl(data){
        $("#dataTable").DataTable().destroy();
         table = $("#dataTable").DataTable({
          data:data, 
          dom: 'Blfrtip',
          buttons: [
              'copyHtml5', 
              'excelHtml5',
              'csvHtml5',
              'pdfHtml5'

          ],
          retrieve: true,
          columns:[
                  {'data': ''},
                  {'data': 'id'},
                  {'data': 'name'},
                  {'data': 'month'},
                  {'data': 'year'},
                  {'data': 'depcomm'},
                  {'data': 'cashoutcomm'},
                  {'data': 'date'},
          ],
         'columnDefs': [{
         'targets': 0,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
               return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
             }
          }],
        });  
      }
        
        
    function staffcommDataTbl(data){
        $("#dataTable").DataTable().destroy();
         table = $("#dataTable").DataTable({
          data:data, 
          dom: 'Blfrtip',
          buttons: [
              'copyHtml5', 
              'excelHtml5',
              'csvHtml5',
              'pdfHtml5'

          ],
          retrieve: true,
          columns:[
                  {'data': ''},
                  {'data': 'id'},
                  {'data': 'name'},
                  {'data': 'month'},
                  {'data': 'year'},
                  {'data': 'noregist'},
                  {'data': 'regcomm'},
                  {'data': 'deposit'},
                  {'data': 'depcomm'},
                  {'data': 'date'},
          ],
         'columnDefs': [{
         'targets': 0,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
               return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
             }
          }],
        });  
      }
        
        
        
     function contributionDataTbl(data){
        $("#dataTable").DataTable().destroy();
         table = $("#dataTable").DataTable({
          data:data, 
          dom: 'Blfrtip',
          buttons: [
              'copyHtml5', 
              'excelHtml5',
              'csvHtml5',
              'pdfHtml5'

          ],
          retrieve: true,
          columns:[
                  {'data': ''},
                  {'data': 'id'},
                  {'data': 'name'},
                  {'data': 'ssnitemployer'},
                  {'data': 'ssnitemployee'},
                  {'data': 'welfare'},
                  {'data': 'bonus'},
                  {'data': 'deduction'},
                  {'data': 'date'},
          ],
         'columnDefs': [{
         'targets': 0,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
               return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
             }
          }],
        });  
      }
        
        
     function deductionDataTbl(data){
        $("#dataTable").DataTable().destroy();
         table = $("#dataTable").DataTable({
          data:data, 
          dom: 'Blfrtip',
          buttons: [
              'copyHtml5', 
              'excelHtml5',
              'csvHtml5',
              'pdfHtml5'

          ],
          retrieve: true,
          columns:[
                  {'data': ''},
                  {'data': 'id'},
                  {'data': 'name'},
                  {'data': 'type'},
                  {'data': 'amount'},
                  {'data': 'distribution'},
                  {'data': 'date'},
          ],
         'columnDefs': [{
         'targets': 0,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
               return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
             }
          }],
        });  
      }
        
        
        
    function loadProductDataTbl(data){
        $("#dataTable").DataTable().destroy();
         table = $("#dataTable").DataTable({
          data:data, 
          dom: 'Blfrtip',
          buttons: [
              'copyHtml5', 
              'excelHtml5',
              'csvHtml5',
              'pdfHtml5'

          ],
          retrieve: true,
          columns:[
                  {'data': ''},
                  {'data': 'id'},
                  {'data': 'name'},
                  {'data': 'code'},
                  {'data': 'min_amount'},
                  {'data': 'max_amount'},
                  {'data': 'form_fee'},
                  {'data': 'processing_fee'},
                  {'data': 'interest'},
                  {'data': 'date_created'}
          ],
         'columnDefs': [{
         'targets': 0,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
               return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
             }
          }],
        });  
      }




     function momoDataTbl(data){
      
        $("#dataTable").DataTable().destroy();
         table = $("#dataTable").DataTable({
          data:data, 
          dom: 'Blfrtip',
          buttons: [
              'copyHtml5', 
              'excelHtml5',
              'csvHtml5',
              'pdfHtml5'

          ],
          
          retrieve: true,
          columns:[
                  {'data': ''},    
                  {'data': 'id'},
                  {'data': 'date'},
                  {'data': 'deposit'},
                  {'data': 'depcomm'},
                  {'data': 'cashout'},
                  {'data': 'cashoutcomm'},
                  {'data': 'name'},

          ],
         'columnDefs': [{
         'targets': 0,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
               return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
             }
          }],
        });  
      }


    
  function interestDataTbl(data) {
  $("#dataTable").DataTable().destroy();
  $("#dataTable").DataTable({
    data: data,
    dom: 'Blfrtip',
    buttons: [
      'copyHtml5',
      'excelHtml5',
      'csvHtml5',
      'pdfHtml5'
    ],
    retrieve: true,
    columns: [
        {'data': ''},
        {'data': 'date'},
        {'data': 'id'},
        {'data': 'product'},
        {'data': 'name'},
        {'data': 'accno'},
        {'data': 'amount'},
        {'data': 'year'},
        {'data': 'month'}
      ],
          'columnDefs': [{
         'targets': 0,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
               return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
                }
            }],
      'order': [[1, 'asc']]
  });
}



        function historyDatableW(data){
        $("#dataTableW").DataTable().destroy();
         table = $("#dataTableW").DataTable({
          data:data, 
          dom: 'Blfrtip',
          buttons: [
              'copyHtml5', 
              'excelHtml5',
              'csvHtml5',
              'pdfHtml5'

          ],
          retrieve: true,
          columns:[
                  {'data': 'id'},
                  {'data': 'date_created'},
                  {'data': 'operation'},
                  {'data': 'amount'},
                  {'data': 'created_by'},
          ],
        });  
      }

       function historyDatable(data){
        $("#dataTable").DataTable().destroy();
         table = $("#dataTable").DataTable({
          data:data, 
          dom: 'Blfrtip',
          buttons: [
              'copyHtml5', 
              'excelHtml5',
              'csvHtml5',
              'pdfHtml5'

          ],
          retrieve: true,
          columns:[
                  {'data': 'id'},
                  {'data': 'date_created'},
                  {'data': 'operation'},
                  {'data': 'amount'},
                  {'data': 'created_by'},
          ],
        });  
      }

     function searchDataTbl(data){
        $("#dataTable").DataTable().destroy();
         table = $("#dataTable").DataTable({
          data:data, 
          dom: 'Blfrtip',
          buttons: [
              'copyHtml5', 
              'excelHtml5',
              'csvHtml5',
              'pdfHtml5'

          ],
          retrieve: true,
          columns:[
                  {'data': 'id'},
                  {'data': 'name'},
                  {'data': 'account_number'},
                  {'data': 'product_name'},
                  {'data': 'subscription'},
                  {'data': 'fees'},
                  {'data': 'deposits'},
                  {'data': 'interest'},
                  {'data': 'withdrawals',
                    "className": "withdColor"
                  },
                  {'data': 'balance',
                   "className": "balColor"
                  },

                  {'data': '', render: function(data,type,row){
                     return "<a href='#' class='btn_1 medium btnAccountDetail' accno='"+row.account_number+"'>Detail</a>";
                    }
                  }, 
          ],
          //'order': [[0, 'desc']]
        });  
      }



     $("#dataTable tbody").on('click', '.btnSMS', function(e){ 
        e.preventDefault();
          var dt = $('#dataTable').DataTable();
          id = dt.cells($(this).closest('td').siblings().eq(0)).data();
          var name = dt.cells($(this).closest('td').siblings().eq(1)).data();
           var accountno = dt.cells($(this).closest('td').siblings().eq(2)).data();
          var btvalue = $(this).text();
          
          if(btvalue == 'OFF'){
              btvalue = '0';
          }else{
              btvalue = '1';
          }
          
           updateSMS(id[0], btvalue, name[0], accountno[0]);
           $(".loader_container_sector").show();
     });
     
     
     
     function updateSMS(id, state, name, accountno) {
    var fd = new FormData();
    fd.append("id", id);
    fd.append("state", state);
    fd.append("accountno", accountno);
      
    $.ajax({
          url:""+$online__access__tag+"processor/updateSMS",
          data:fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          processData:false,
          dataType:'JSON',
          success:function(data)
        {
            if(data[0].result == 'inactive'){
                
            welcome_sms(data[0].contact, data[0].result, accountno);
                
                setTimeout(function() {
                    $(".loader_container_sector").hide();
                  swal('Done', 'SMS deactivated for '+name+' successfully', 'success');
                  location.reload();
                }, 2000); 
                
            }else if(data[0].result == 'active'){
                
               welcome_sms(data[0].contact, data[0].result, accountno);
                
                setTimeout(function() {
                      $(".loader_container_sector").hide();
                     swal('Done', 'SMS activated for '+name+' successfully', 'success');
                  location.reload();
                }, 2000); 
            }
        },
        error: function(err) {
          console.log(err);
        }
    });
}      



    function welcome_sms(contact, result, accountno){
            var isCheck = false;
            var title = 'SBST';
            var message = '';
            
            if(result == 'active'){
              message =  'Thank you for subscribing to STEP BY STEP TELECOM notification service';
            }else if(result == 'inactive'){
              message =  "Hello STEP BY STEP TELECOM notification service has been deactivated successfully";  
            }
           

    const Http = new XMLHttpRequest();
    const url="https://api.smsglobal.com/http-api.php?action=sendsms&user=t4e756q2&password=waLASRNa&from="+title+"&to="+contact+"&text="+message+"";
    Http.open("GET", url);
    Http.send();
    
    Http.onreadystatechange = (e) => {
          var response = Http.responseText;
            if(response.includes('OK')){
                if(!isCheck){
                    post_sms(contact, message, accountno);
                    isCheck = true;
                }
                
            }
        }
      }
      





     function managementDataTbl(data){
        $("#dataTable").DataTable().destroy();
         table = $("#dataTable").DataTable({
          data: data, 
          dom: 'Blfrtip',
          buttons: [
              'copyHtml5', 
              'excelHtml5',
              'csvHtml5',
              'pdfHtml5'

          ],
          retrieve: true,
          columns:[
                  {'data': ''},    
                  {'data': 'id'},
                   {'data': 'username'},
                    {'data': 'password'},
                     {'data': 'name'},
                      {'data': 'contact'},
                  {'data': 'role'},
                  {'data': 'status_id'},
                 
                  {'data': 'date'},
                  
            
              
          ],

         'columnDefs': [{
         'targets': 0,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
               return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
             }
          }],
        });  
      }






     function withdrawalDataTbl(data){
        $("#dataTable").DataTable().destroy();
         table = $("#dataTable").DataTable({
          data: data, 
          dom: 'Blfrtip',
          buttons: [
              'copyHtml5', 
              'excelHtml5',
              'csvHtml5',
              'pdfHtml5'

          ],
          retrieve: true,
          columns:[
                  {'data': ''},    
                  {'data': 'id'},
                  {'data': 'date'},
                  {'data': 'name'},
                  {'data': 'account_number'},
                  {'data': 'amount'},
                  {'data': 'current_balance'},
                  {'data': 'posted_by'},
                  
            
              
          ],

         'columnDefs': [{
         'targets': 0,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
               return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
             }
          }],
        });  
      }





    function depositsDataTbl(data){
        $("#dataTable").DataTable().destroy();
         table = $("#dataTable").DataTable({
          data: data, 
          dom: 'Blfrtip',
          buttons: [
              'copyHtml5', 
              'excelHtml5',
              'csvHtml5',
              'pdfHtml5'

          ],
          retrieve: true,
          columns:[
                  {'data': ''},    
                  {'data': 'id'},
                  {'data': 'date'},
                  {'data': 'name'},
                  {'data': 'account_number'},
                  {'data': 'amount'},
                  {'data': 'current_balance'},
                  {'data': 'posted_by'},
            
              
          ],

         'columnDefs': [{
         'targets': 0,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
               return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
             }
          }],
        });  
      }





    function clientDataTbl(data){
        $("#dataTable").DataTable().destroy();
         table = $("#dataTable").DataTable({
          data: data, 
          dom: 'Blfrtip',
          buttons: [
              'copyHtml5', 
              'excelHtml5',
              'csvHtml5',
              'pdfHtml5'

          ],
          retrieve: true,
          columns:[
                  {'data': ''},
                  {'data': 'date'},
                  {'data': 'id'},
                  {'data': 'name'},
                  {'data': 'photo', render: function(data,type,row){
                       return "<a href='upload/"+row.photo+"' target='_blank'><image src='upload/"+row.photo+"' width='50' height='50'><a/>";
                   }
                  },
                  {'data': 'dob'},
                  {'data': 'contact1'},
                  {'data': 'next_of_kin'},
                  {'data': 'next_of_kin_contact'},
                  {'data': 'city'},
                  {'data': 'area'},
                  {'data': 'occupation'},
                  {'data': 'identification'},
                  {'data': 'idnumber'},
                  {'data': 'post_by'},
                
                  
          ],
              'columnDefs': [{
         'targets': 0,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
               return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
                }
            }],
        });  
      }




  function noaccountDataTbl(data) {
  $("#dataTable").DataTable().destroy();
  $("#dataTable").DataTable({
    data: data,
    dom: 'Blfrtip',
    buttons: [
      'copyHtml5',
      'excelHtml5',
      'csvHtml5',
      'pdfHtml5'
    ],
    retrieve: true,
    columns: [
        {'data': 'date'},
        {'data': 'id'},
        {'data': 'name'},
        {'data': ''},
      ],
      'columnDefs': [{
         'targets': 3,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
             return '<a href="#" id="btnOpen" class="btn_1 small"><i class="fa fa-pencil-square-o"></i> Open Account</a>';
         }
      }],
      'order': [[1, 'asc']]
  });
}

        
     


     function productDataTbl(data){
        $("#dataTable").DataTable().destroy();
         table = $("#dataTable").DataTable({
          data: data, 
          dom: 'Blfrtip',
          buttons: [
              'copyHtml5', 
              'excelHtml5',
              'csvHtml5',
              'pdfHtml5'

          ],
          retrieve: true,
          columns:[
                  {'data': ''},    
                  {'data': 'id'},
                  {'data': 'name'},
                  {'data': 'code'},
                  {'data': 'initial_min_amount'},
                  {'data': 'initial_max_amount'},
                  {'data': 'bal_min'},
                  {'data': 'int_rate'},
                  {'data': 'int_period'},
                  {'data': 'entry_fee'},
                  {'data': 'withdrawal_fee'},
          ],

         'columnDefs': [{
         'targets': 0,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
               return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
                }
            }],
        });  
      }
    }
});