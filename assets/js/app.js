$(document).ready(function(){
$online__access__tag = '/lbook_green/';
lid="";
cid="";
 var href = $(location).attr('href');  
 var index = href.lastIndexOf("/");
 var controller = href.substring(index+1);
 fromSales=false;
 loanprod=0;
 
if(!sessionStorage.getItem('status')){
        window.location = $online__access__tag + "auth";
}else if(sessionStorage.getItem('id') === ''||sessionStorage.getItem('id').length === 0){
        window.location = $online__access__tag + "auth";
}else{
      
    //calculateStaffCommission(); 

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

 function scrollSmoothToBottom (elementId) {
   const scrollIntoViewOptions = { behavior: "smooth", block: "center" };   document.getElementById(elementId).scrollIntoView(scrollIntoViewOptions);
 }
 
 
 const money = function convMoney(x){
  return x.toLocaleString('us', {minimumFractionDigits: 2, maximumFractionDigits: 2});
 };


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

  

     if(sessionStorage.getItem('role') == '1'){
      $("#btnUpdateDep").prop("disabled", false);
    }
    
    
    $("#dependant").on('change', function(e) {
        $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''));
    });
    
    $("#dependant").on('keypress', function(e) {
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

     $("#idDenNo200").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });

     $("#idDenNo100").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });

     $("#idDenNo50").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });

     $("#idDenNo20").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });


     $("#idDenNo10").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
    $("#idDenNo5").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
    $("#idDenNo2").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });

    $("#idDenNo1").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });

    $("#idDenNoC").on('keypress', function(e) {
      keys = ['0','1','2','3','4','5','6','7','8','9','.'];
      return keys.indexOf(event.key) > -1;
    });
    
    
   
var code='';

    if(controller.includes('clients')){
      loadClients();  
    }else if(controller.includes("loan-products")){
     fetchLoanProduct(); 
    }else if(controller.includes('product')){
        loadProduct();
    }else if(controller.includes('pending')){
        loadPending();
    }else if(controller.includes('decaccount')){
        loadDecline();
    }else if(controller.includes('daily-sales')){
        fetchSales();  
    }else if(controller.includes('evd')){  
        fetchEvd();
    }else if(controller.includes('mdeposit')){  
        fetchMassDeposit();
    }else if(controller.includes('clerk')){  
        fetchClerk();
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
    }else if(controller==='report'||controller==='report#'){
          calculateBalancesAll();
          loadReportDefault();
          loadLatestUpdate();
    }else if(controller === 'interest'){
         loadInterest();
    }else if(controller === 'sms'){
         loadSMS();
    }else if(controller === 'matured'){
        fetchMatured();
    }else if(controller.includes('daily-record')){
        
        if(sessionStorage.getItem('origin')== 'dashboard'){
          $('#modalAddMomo').modal();     
          sessionStorage.removeItem('origin');
        }
        
        loadMomoTrans();
    }else if(controller.includes('deduction')){
        fetchDeduction();
    }else if(controller.includes('contribution')){
        populateDeduction();
        fetchContribution();
    }else if(controller.includes('staff-commission')){
         calculateStaffCommission();
         loadStaffCommission();
    }else if(controller.includes('momo-commission')){
         calculateStaffCommission();
         loadMomoCommission();
    }else if(controller.includes('payroll')){
        populateDeduction();
         calculateStaffCommission();
    }else if(controller.includes('chart')){
       calculateBalancesAll();
        populateGraph();
    }else if(controller.includes("register")){
      fetchAreaList();
    }else if(controller.includes("cust-account")){
      loadProduct();
      loadNewClient();
    }else if(controller.includes("acc-manage")||controller==="acc-manage#"){
      $("#idAccNoClient").html(sessionStorage.getItem("accno"));
      fetchDetails(sessionStorage.getItem("accno"));
    }else if(controller.includes("settings")){
      validatePage();
    }else if(controller.includes("attcomm")){
      fetchAttComm();
    }else if(controller.includes('atreport')){
      genAtList("current", "none", "none", "year"); 
    }else if(controller.includes("susu-comm")){
     fetchSusuComm();
    }else if(controller.includes("mcustomers")){
     fetchMomoCustomers();
    }else if(controller.includes("e-cash")){
     fetchEReport();
     fetchECash();
    }else if(controller.includes("e-form")){
     fetchEReqReport();
     fetchReq();
    }else if(controller.includes("cashpay")){
      fetchCash();
      fetchCashReport();    
    }else if(controller.includes("btransfer")){
     fetchBulkCash();
     fetchBulkReport(); 
    }else if(controller.includes("ledger")){
     fetchOReq();
    if(sessionStorage.getItem("role")==="1"){
        fetchOReport("0", "0",null);
     }else{
       fetchOReport("0", "0", $("#idUser").val()); 
     }
    }else if(controller.includes("loan_members")){
     fetchLoanMembers(); 
    }else if(controller.includes("create_loan")){
     fetchLoan(); 
    }else if(controller.includes("repayment")){
     fetchRepayment(); 
    }else if(controller.includes("penalty")){
     fetchPenalty(); 
    }else if(controller.includes("finloan")){
     fetchFinLoan(); 
    }else if(controller.includes("formfee")){
     fetchFormFee(); 
    }

    
    
   function genAtList(year, month, week, param){
    var fd = new FormData();
    fd.append("rotator", $("#rotator").val());
    fd.append("year", year);
    fd.append("month", month);
    fd.append("week", week);
    fd.append("param", param);
    sessionStorage.setItem("param",param);
    sessionStorage.setItem("year",year);
    sessionStorage.setItem("month",month);
    sessionStorage.setItem("week",week);
    $.ajax({
         url:""+$online__access__tag+"processor/fetchAtReport",
          type:"POST",
          data: fd,
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
           $("#idGenHead").html("Generating report.... Please wait!").css("color","green");
          },
          success:function(data)
          {
            if(param==="year"){
            if(year==="current"){
              $("#idGenHead").html("ATTENDANCE REPORT - <span style='color:green'>THIS YEAR</span>").css("color","blue"); 
            }else{
             $("#idGenHead").html("ATTENDANCE REPORT FOR <span style='color:green'>"+year+"</span>").css("color","blue");  
            }
            var dropdown = $("#idAtMonth");
            dropdown.empty();
            dropdown.append($("<option />").val("").text("-- Choose Month --"));
            dropdown.append($("<option />").val("01").text("January"));
            dropdown.append($("<option />").val("02").text("February"));
            dropdown.append($("<option />").val("03").text("March"));
            dropdown.append($("<option />").val("04").text("April"));
            dropdown.append($("<option />").val("05").text("May"));
            dropdown.append($("<option />").val("06").text("June"));
            dropdown.append($("<option />").val("07").text("July"));
            dropdown.append($("<option />").val("08").text("August"));
            dropdown.append($("<option />").val("09").text("September"));
            dropdown.append($("<option />").val("10").text("October"));
            dropdown.append($("<option />").val("11").text("November"));
            dropdown.append($("<option />").val("12").text("December"));

            var dropdown1 = $("#idAtWeek");
            dropdown1.empty();
            dropdown1.append($("<option />").val("").text("-- Choose Week --"));
            dropdown1.append($("<option />").val("1").text("Week 1"));
            dropdown1.append($("<option />").val("2").text("Week 2"));
            dropdown1.append($("<option />").val("3").text("Week 3"));
            dropdown1.append($("<option />").val("4").text("Week 4"));
          }else if(param==="month"){
             $("#idGenHead").html("ATTENDANCE REPORT FOR <span style='color:green'>"+fMonth(month)+" "+year+"</span>").css("color","blue"); 
            var dropdown1 = $("#idAtWeek");
            dropdown1.empty();
            dropdown1.append($("<option />").val("").text("-- Choose Week --"));
            dropdown1.append($("<option />").val("1").text("Week 1"));
            dropdown1.append($("<option />").val("2").text("Week 2"));
            dropdown1.append($("<option />").val("3").text("Week 3"));
            dropdown1.append($("<option />").val("4").text("Week 4"));
          }else if(param==="week"){
            if(week==="1"){
              $("#idGenHead").html("ATTENDANCE REPORT FOR <span style='color:green'>"+fMonth(month)+" "+year+" - WEEK 1</span>").css("color","blue");  
            }else if(week==="2"){
              $("#idGenHead").html("ATTENDANCE REPORT FOR <span style='color:green'>"+fMonth(month)+" "+year+" - WEEK 2</span>").css("color","blue");  
            }else if(week==="3"){
              $("#idGenHead").html("ATTENDANCE REPORT FOR <span style='color:green'>"+fMonth(month)+" "+year+" - WEEK 3</span>").css("color","blue");  
            }else if(week==="4"){
              $("#idGenHead").html("ATTENDANCE REPORT FOR <span style='color:green'>"+fMonth(month)+" "+year+" - WEEK 4</span>").css("color","blue");  
            }
          }
            dataTblAtt(data);
         },
        error: function(err) {
          //sendLog(err.responseText, "Links-Edu"); 
          alert("In error: "+err.responseText)
        }
    });
   }
   
   
    $(document).on('click','.btnDetAtt',function(e){
    e.preventDefault();
     var userid = $(this).attr('userid');
     fetchCustLog(userid);
    });


    $(document).on('click','.btnLoanDetail',function(e){
    e.preventDefault();
     cid = $(this).attr('cid');
     window.location=$online__access__tag+"edloanacc?key="+cid+"";
    });
    
    
   function fetchCustLog(userid){
   var fd = new FormData();
    fd.append("userid", userid);
    fd.append("param", sessionStorage.getItem("param"));
    fd.append("year", sessionStorage.getItem("year"));

    if(sessionStorage.getItem("month")!=="none"){
     fd.append("month", sessionStorage.getItem("month")); 
    }
    if(sessionStorage.getItem("week")!=="none"){
     fd.append("week", sessionStorage.getItem("week")); 
    }
    
    $.ajax({
          url:""+$online__access__tag+"processor/fetchDetAtt",
          type:"POST",
          data: fd,
          dataType:'json',
          contentType: false,     
          cache: false, 
          processData:false,
          beforeSend:function()
          {
                // $("#btnSaveNote > i").removeClass().addClass("fa fa-spinner fa-spin");
                // $("#btnSaveNote").prop("disabled", true);
                // $("#btnSaveNote").css("cursor", "no-drop");
          },
          success:function(data)
          {
            if(data!=="none"){
               $("#shAttLogs").show();

          if(sessionStorage.getItem("param")==="year"){
            if(sessionStorage.getItem("year")==="current"){
              $("#idUserLog").html("ATTENDANCE LOGS FOR "+data[0].name+" (THIS YEAR)").css("color","green"); 
            }else{
             $("#idUserLog").html("ATTENDANCE LOGS FOR "+data[0].name+" ("+sessionStorage.getItem("year")+")").css("color","green");  
            }

          }else if(sessionStorage.getItem("param")==="month"){
            $("#idUserLog").html("ATTENDANCE LOGS FOR "+data[0].name+" ("+fMonth(sessionStorage.getItem("month"))+" "+sessionStorage.getItem("year")+")").css("color","green"); 
          }else if(sessionStorage.getItem("param")==="week"){
            if(sessionStorage.getItem("week")==="1"){
               $("#idUserLog").html("ATTENDANCE LOGS FOR "+data[0].name+" (WEEK 1 - "+fMonth(sessionStorage.getItem("month"))+" "+sessionStorage.getItem("year")+")").css("color","green");  
            }else if(sessionStorage.getItem("week")==="2"){
               $("#idUserLog").html("ATTENDANCE LOGS FOR "+data[0].name+" (WEEK 2 - "+fMonth(sessionStorage.getItem("month"))+" "+sessionStorage.getItem("year")+")").css("color","green");   
            }else if(sessionStorage.getItem("week")==="3"){
               $("#idUserLog").html("ATTENDANCE LOGS FOR "+data[0].name+" (WEEK 3 - "+fMonth(sessionStorage.getItem("month"))+" "+sessionStorage.getItem("year")+")").css("color","green");  
            }else if(sessionStorage.getItem("week")==="4"){
               $("#idUserLog").html("ATTENDANCE LOGS FOR "+data[0].name+" (WEEK 4 - "+fMonth(sessionStorage.getItem("month"))+" "+sessionStorage.getItem("year")+")").css("color","green");   
            }
          }
              fetchLogDet(data);
              scrollSmoothToBottom("shAttLogs");
            }
          },
        error: function(err) {
            //sendLog(err.responseText, "Links-Edu"); 
          //alert(err.responseText)
        }
    });
  }



         
         function scrollSmoothToBottom (elementId) {
            const scrollIntoViewOptions = { behavior: "smooth", block: "center" };   document.getElementById(elementId).scrollIntoView(scrollIntoViewOptions);
          }

          function fetchLogDet(data){
                  $(".data-table-log").DataTable().destroy();
                   table = $(".data-table-log").DataTable({
                    buttons: [ 'copy', 'csv', 'excel', 'pdf'],
                    data:data, 
                    dom: 'Blfrtip',
                    retrieve: true,
                    columns:[
                            // {'data': 'id'},
                            {'data': 'date'},
                            {'data': 'name'},
                            {'data': 'state'},
                            {'data': 'time'},
                    ],
                    'order': [[0, 'desc']]
                  });  
                }
    
   
    function dataTblAtt(data){
                  $(".data-table-main").DataTable().destroy();
                   table = $(".data-table-main").DataTable({
                    buttons: [ 'copy', 'csv', 'excel', 'pdf'],
                    data:data, 
                    dom: 'Blfrtip',
                    retrieve: true,
                    columns:[
                            {'data': 'count'},
                            {'data': 'userid'},
                            {'data': 'name'},
                            {'data': 'countat'},
                            {'data': 'userid', render: function(data,type,row){
                            return "<a href='#' class='btn_1 medium btnDetAtt' userid="+row.userid+">Detail</a>";
                                },
                            },

                    ],
                  });  
                }


  function fMonth(param){
    if(param==="01") return "JANUARY";
    if(param==="02") return "FEBRUARY";
    if(param==="03") return "MARCH";
    if(param==="04") return "APRIL";
    if(param==="05") return "MAY";
    if(param==="06") return "JUNE";
    if(param==="07") return "JULY";
    if(param==="08") return "AUGUST";
    if(param==="09") return "SEPTEMBER";
    if(param==="10") return "OCTOBER";
    if(param==="11") return "NOVEMBER";
    if(param==="12") return "DECEMBER";
  }

    
    $('#idAtYear').change(function(){
       var selected = $('option:selected',this).val();
       genAtList(selected, "none", "none", "year");    
    });
    

    $('#idAtMonth').change(function(){
       var year = $("#idAtYear").val();
       var selected = $('option:selected',this).val();
       genAtList(year, selected, "none", "month");    
    });

    
    $(document).on('change', "#idEStatus", function(e){
        e.preventDefault();
        selected = $('option:selected',this).val();
        setclause = "PAYMENT_STATUS = "+selected+"";
        whereclause="ID = "+$(this).attr("cid")+"";
        updateRecord("ecash_tb", whereclause, setclause, "", ""); 
    });


    
    $('#idMomoCat').change(function(){
       var selected = $('option:selected',this).val();  
       if(selected=="1"){
        $("#shAgent").show();
        $("#shAgentName").show();
        $("#shAgentCust").hide();
        $("#idAgentNo").addClass("momo"); 
        $("#idAgentName").addClass("momo");
        $("#idMomoCust").removeClass("momo");
        $("#shEvd").hide();
        $("#idEvdNo").removeClass("momo");
       }else if(selected=="3"){
        $("#shEvd").show();
        $("#idEvdNo").addClass("momo");
        $("#shAgent").hide();
        $("#shAgentName").hide();
        $("#shAgentCust").hide();
        $("#idAgentName").removeClass("momo");
        $("#idAgentNo").removeClass("momo"); 
        $("#idMomoCust").removeClass("momo");
       }else{
        $("#shAgent").show();
        $("#shAgentName").show();
        $("#shAgentCust").show();
        $("#idAgentName").addClass("momo");
        $("#idAgentNo").addClass("momo"); 
        $("#idMomoCust").addClass("momo");
        $("#shEvd").hide();
        $("#idEvdNo").removeClass("momo");
       }
    });


    
    $('#custCat').change(function(){
       var selected = $('option:selected',this).val();  
       if(selected=="1"){
        $("#agentCSh").show();
        $("#shCust").hide();
        $("#idCashAgentCust").addClass("pay"); 
        $("#idPayCust").removeClass("pay");

        $("#shCustOther").hide();
        $("#pCName").removeClass("pay");

       }else if(selected=="2"){
        $("#agentCSh").hide();
        $("#shCust").show();
        $("#shAgentCust").show();
        $("#idPayCust").addClass("pay");
        $("#idCashAgentCust").removeClass("pay"); 

        $("#shCustOther").hide();
        $("#pCName").removeClass("pay");

       }else if(selected=="3"){

        $("#shCustOther").show();
        $("#pCName").addClass("pay");

        $("#agentCSh").hide();
        $("#shCust").hide();
        $("#shAgentCust").hide();
        $("#idPayCust").removeClass("pay");
        $("#idCashAgentCust").removeClass("pay"); 
       }
    });



    $('#custCatSel').change(function(){
       var selected = $('option:selected',this).val();  
       if(selected=="1"){
        $("#agentCShSel").show();
        $("#shCustSel").hide();
        $("#idCashAgentCustSel").addClass("pay"); 
        $("#idPayCustSel").removeClass("pay");

        $("#shCustOtherSel").hide();
        $("#pCNameSel").removeClass("pay");
        $("#idEvdCust").val("");

       }else if(selected=="2"){
        $("#agentCShSel").hide();
        $("#shCustSel").show();
        $("#shAgentCustSel").show();
        $("#idPayCustSel").addClass("pay");
        $("#idCashAgentCustSel").removeClass("pay"); 

        $("#shCustOtherSel").hide();
        $("#pCNameSel").removeClass("pay");

       }else if(selected=="3"){

        $("#shCustOtherSel").show();
        $("#pCNameSel").addClass("pay");

        $("#agentCShSel").hide();
        $("#shCustSel").hide();
        $("#shAgentCustSel").hide();
        $("#idPayCustSel").removeClass("pay");
        $("#idCashAgentCustSel").removeClass("pay"); 
        $("#idEvdCust").val("");
       }
    });


    $('#pPaid').change(function(){
       var selected = $('option:selected',this).val();  
       if(selected=="1"){
        $("#shPaid").show();
        $("#pOName").addClass("pay");
       }else{
         $("#shPaid").hide();
         $("#pOName").removeClass("pay");
       }
    });


     $('#emptype').change(function(){
       var selected = $('option:selected',this).val();  
       if(selected=="1"){
        $("#shEmployer").show();
        $("#employer").val("");
        $("#position").val("");
        $("#employertel").val("");
        $("#netsalary").val("");
        $("#shDirect").html("*").show();
        $("#bdirection").addClass("form");
       }else{
        $("#shEmployer").hide();
        $("#employer").val("None");
        $("#position").val("None");
        $("#employertel").val("None");
        $("#netsalary").val("None");
        $("#shDirect").hide();
        $("#bdirection").val("None");
        $("#bdirection").removeClass("form");
       }
    });


    if(controller.includes("edloanacc")){
     selected=$("#emptype").val();
     if(selected=="1"){
        $("#shEmployer").show();
        $("#employer").val("");
        $("#position").val("");
        $("#employertel").val("");
        $("#netsalary").val("");
       }else{
        $("#shEmployer").hide();
        $("#employer").val("None");
        $("#position").val("None");
        $("#employertel").val("None");
        $("#netsalary").val("None");
       }
    }

    
    $('#idPayCustSel').change(function(){
       var selected = $('option:selected',this).val();  
       selected==="addnew"?window.location=$online__access__tag+"momo-cust?key=evd":"";
       $("#shEVD").show();
       $("#idEvdCust").val($('option:selected',this).data('value'));
    });


    if(controller.includes("momo-cust?key=evd")){
        $("#idMomoCat").prepend("<option value='3' selected='selected'>EVD</option>");  
        $("#shEvd").show();
        $("#idEvdNo").addClass("momo");
        $("#shAgent").hide();
        $("#shAgentName").hide();
        $("#shAgentCust").hide();
        $("#idAgentName").removeClass("momo");
        $("#idAgentNo").removeClass("momo"); 
        $("#idMomoCust").removeClass("momo");
    }


    $('#pRec').change(function(){
       var selected = $('option:selected',this).val();  
       if(selected=="1"){
        $("#shRec").show();
        $("#pRName").addClass("pay");
       }else{
         $("#shRec").hide();
         $("#pRName").removeClass("pay");
       }
    });


     $('#idAtWeek').change(function(){
       var year = $("#idAtYear").val();
       var month = $("#idAtMonth").val();
       var selected = $('option:selected',this).val();
       genAtList(year, month, selected, "week");    
    });


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


     $('#idSearchFilter').change(function(){
       var selected = $('option:selected',this).val();  
        if(selected === 'agent'){
          $("#showAgent").show();
          $("#showText").hide();
        }else if(selected === 'accno'){
          $("#showAgent").hide();
          $("#showText").show();
          $("#inpType").html("#Enter Account number");
        }else if(selected === 'amount'){
          $("#showAgent").hide();
          $("#showText").show();
          $("#inpType").html("#Enter Amount");
        }else{
          $("#showText").show();   
          $("#showAgent").hide();  
        }
    });


    $(".btnSearchWith").click(function(e){
    e.preventDefault();
        if(field_required_prompter('.depsearch',5000)==true)
      {
        if($('#idSearchFilter').val() === 'agent'){
        fetchCustWith($('#idSearchFilter').val(), $("#idAdmin").val());
        }else{
          fetchCustWith($('#idSearchFilter').val(), $("#idInpString").val());
        }
      }
      else
      {

      }
    });
 
  $(".btnSearchDep").click(function(e){
    e.preventDefault();
        if(field_required_prompter('.depsearch',5000)==true)
      {
        if($('#idSearchFilter').val() === 'agent'){
        fetchCustDeposit($('#idSearchFilter').val(), $("#idAdmin").val());
        }else{
          fetchCustDeposit($('#idSearchFilter').val(), $("#idInpString").val());
        }
      }
      else
      {

      }
    });
    
    
    $(".edProfile").click(function(e){
    e.preventDefault();
     sessionStorage.setItem("surl",controller);
     fetchUserDetail(sessionStorage.getItem("accno"));
    });
    
    
    
    function fetchUserDetail(accno){
    var fd = new FormData();
    fd.append("accno", accno);
    $.ajax({
          url:""+$online__access__tag+"processor/fetchUserDetail",
          data:fd,
          type:"POST",
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          success:function(data)
          {
            sessionStorage.setItem("id", data.code);
            sessionStorage.setItem("name", data.name);
            sessionStorage.setItem("firstname", data.firstname);
            sessionStorage.setItem("lastname", data.lastname);
            sessionStorage.setItem("othername", data.othername);
            sessionStorage.setItem("dob", data.dob);
            sessionStorage.setItem("contact", data.contact);
            sessionStorage.setItem("nok", data.nok);
            sessionStorage.setItem("nokc", data.nokc);
            sessionStorage.setItem("city", data.city);
            sessionStorage.setItem("area", data.area);
            sessionStorage.setItem("occupation", data.occupation);
            sessionStorage.setItem("photo", data.photo);
        
            window.location = $online__access__tag + "edclient";
          },
          error: function(err) {
          //alert(err.responseText)
          console.log(err);
        }
    });
    $(".loader_container_sector").hide();
    }
    


    
    function fetchCash(date, date2, user){
    var fd = new FormData();
    if(date){
     fd.append("date", date);
    }
     if(date2){
     fd.append("date2", date2);
    }
    if(user){
     fd.append("user", user);
    }
     $.ajax({
          url:""+$online__access__tag+"processor/fetchCash",
          type:"POST",
          dataType:'json',
          data:fd,
          contentType: false,       
          cache: false, 
          processData:false,
          success:function(data)
          {
            if(data!=="none"){
              $(".table-responsive").show();
              dataTblCash(data);
            }else{
              $(".table-responsive").hide();
            }
          },
          error: function(err) {
          console.log(err);
        }
      }); 
    }
    


    function fetchOReq(date, date2){
    var fd = new FormData();
    if(date){
     fd.append("date", date);
    }
     if(date2){
     fd.append("date2", date2);
    }
     $.ajax({
          url:""+$online__access__tag+"processor/fetchOReq",
          type:"POST",
          dataType:'json',
          data:fd,
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {

          },
          success:function(data)
          {
            if(data!=="none"){
                if(data[0].status.includes("btn btn-primary btnApproveLedger")){
                if(sessionStorage.getItem("role")==="1"){
                $(".clShowAlert").show();
                $(".clAlerts").html(data[0].count+" Overs/Shortage");
                playWalkAudio();
                if(data[0].count > 0){
                  $(".clAppRev a").remove();
                  for(var i=0;i<data[0].count;i++){
                      var docTbl = '<a class="dropdown-item btnReviewEx" href="ledger">'+
                        '<span class="text-success">'+
                        '<strong>'+
                        '<i class="fa fa-user fa-fw"></i>'+data[0].postedby+'</strong>'+
                        '</span>'+
                        '<span class="small float-right text-muted">'+data[0].category+'</span>'+
                        '<div class="dropdown-message small">Review</div>'+
                        '</a>';
                      $(".clAppRev").append(docTbl);
                  }
                }
               }
              }
              if(controller.includes("ledger")){
                dataTblOReq(data);
              }
            }
          },
          error: function(err) {
            alert(err.responseText)
          console.log(err);
        }
      }); 
    }

    function fetchReq(date, date2){
    var fd = new FormData();
    if(date){
     fd.append("date", date);
    }
     if(date2){
     fd.append("date2", date2);
    }
     $.ajax({
          url:""+$online__access__tag+"processor/fetchEReq",
          type:"POST",
          dataType:'json',
          data:fd,
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {

          },
          success:function(data)
          {
            if(data!=="none"){
              $(".clEvdToday").html("GHS "+data[0].commtoday);
              $(".clComm").html("GHS "+data[0].totcom);
              $(".clEvdOverral").html("GHS "+data[0].overall)
              $(".clEvdOveralcomm").html("GHS "+data[0].overcomm) 
              dataTblEReq(data);
            }
          },
          error: function(err) {
          console.log(err);
        }
      }); 
    }
    
    

   
    function fetchBulkCash(date, date2){
    var fd = new FormData();
    if(date){
     fd.append("date", date);
    }
     if(date2){
     fd.append("date2", date2);
    }
     $.ajax({
          url:""+$online__access__tag+"processor/fetchBulkCash",
          type:"POST",
          dataType:'json',
          data:fd,
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {

          },
          success:function(data)
          {
            if(data!=="none"){
              $(".table-responsive").show(); 
              dataTblBulkcash(data);
            }else{
              $(".table-responsive").hide();    
            }
          },
          error: function(err) {
            alert(err.responseText)
          console.log(err);
        }
      }); 
    }



    function send_sms_loan(lid, mtype, amount=null){
    var fd = new FormData();
     fd.append("lid", lid);
     fd.append("mtype", mtype);
     if(mtype==="payment"){
      fd.append("amount", amount);  
     }
     $.ajax({
          url:""+$online__access__tag+"processor/send_sms_loan",
          type:"POST",
          dataType:'json',
          data:fd,
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {

          },
          success:function(data)
          {
            //alert(JSON.stringify(data))
          },
          error: function(err) {
            //alert(err.responseText)
          //console.log(err);
        }
      }); 
    }

    function fetchECash(date, date2){
    var fd = new FormData();
    if(date){
     fd.append("date", date);
    }
     if(date2){
     fd.append("date2", date2);
    }
     $.ajax({
          url:""+$online__access__tag+"processor/fetchECash",
          type:"POST",
          dataType:'json',
          data:fd,
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {

          },
          success:function(data)
          {
            if(data!=="none"){
              $(".clEvdToday").html("GHS "+data[0].commtoday);
              $(".clComm").html("GHS "+data[0].totcom);
              $(".clEvdOverral").html("GHS "+data[0].overall)
              $(".clEvdOveralcomm").html("GHS "+data[0].overcomm) 
              dataTblEcash(data);
            }
          },
          error: function(err) {
          console.log(err);
        }
      }); 
    }


    function fetchLoanProduct(){
     $.ajax({
          url:""+$online__access__tag+"processor/fetchLoanProduct",
          type:"POST",
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {

          },
          success:function(data)
          {
            if(data!=="none"){
              loadProductDataTbl(data);
            }
          },
          error: function(err) {
            //alert(err.responseText)
          console.log(err);
        }
      }); 
    }


    
     function fetchFormFee(){
     $.ajax({
          url:""+$online__access__tag+"processor/fetchFormFee",
          type:"POST",
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {

          },
          success:function(data)
          {
            //alert(JSON.stringify(data))
            if(data!=="none"){
              dataTblFormFee(data);
            }
          },
          error: function(err){
            //alert(err.responseText)
          console.log(err);
        }
      }); 
    }

    
    function fetchRepayment(){
     $.ajax({
          url:""+$online__access__tag+"processor/fetchRepayment",
          type:"POST",
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {

          },
          success:function(data)
          {
            if(data!=="none"){
              dataTblRepay(data);
            }
          },
          error: function(err){
          console.log(err);
        }
      }); 
    }


    function fetchPenalty(){
     $.ajax({
          url:""+$online__access__tag+"processor/fetchPenalty",
          type:"POST",
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {

          },
          success:function(data)
          {
            if(data!=="none"){
              dataTblPenalty(data);
            }
          },
          error: function(err){
          console.log(err);
        }
      }); 
    }


    function fetchFinLoan(){
      $.ajax({
          url:""+$online__access__tag+"processor/fetchFinLoan",
          type:"POST",
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {

          },
          success:function(data)
          {
            if(data!=="none"){
              dataTbFinlLoan(data);
            }
          },
          error: function(err){
          //alert(err.responseText)
          console.log(err);
        }
      });
    }

    function fetchLoan(){
     $.ajax({
          url:""+$online__access__tag+"processor/fetchLoan",
          type:"POST",
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {

          },
          success:function(data)
          {
            //alert(JSON.stringify(data))
            if(data!=="none"){
              $("#dataTable").show();
              dataTblLoan(data);
            }else{
              $("#dataTable").hide();
            }
          },
          error: function(err){
            alert(err.responseText)
          console.log(err);
        }
      }); 
    }


     function fetchLoanMembers(){
     $.ajax({
          url:""+$online__access__tag+"processor/fetchLoanMembers",
          type:"POST",
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {

          },
          success:function(data)
          {
            if(data!=="none"){
              dataTblLoanMember(data);
            }
          },
          error: function(err) {
            alert(err.responseText)
          console.log(err);
        }
      }); 
    }
    

    
        function dataTblPenalty(data){
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
                  {'data': 'id'},
                  {'data': 'date'},
                  {'data': 'customer'},
                  {'data': 'image'},
                  {'data': 'accno'},
                  {'data': 'code'},
                  {'data': 'balance'},
                  {'data': 'amount'},
          ],
         'columnDefs': [{
         'targets': 0,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
         'render': function (data,type,row){
            return '<input type="checkbox" class="form-checkbox" name="id[]" value="'+$('<div/>').text(data).html()+'">';
            }
          }],
          //'order': [[0, 'desc']]
        });  
      }
    

    
    
     function dataTblFormFee(data){
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
                  {'data': 'id'},
                  {'data': 'date'},
                  {'data': 'customer'},
                  {'data': 'image'},
                  {'data': 'accno'},
                  {'data': 'code'},
                  {'data': 'amount'},
                  {'data': 'postedby'},
          ],
         'columnDefs': [{
         'targets': 0,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
         'render': function (data,type,row){
            return '<input name="'+row.customer+'" accno='+row.accno+'  cid='+row.id+' type="checkbox" class="form-checkbox" name="id[]" value="'+$('<div/>').text(data).html()+'">';
            }
          }],
          //'order': [[0, 'desc']]
        });  
      }


     function dataTblRepay(data){
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
                  {'data': 'id'},
                  {'data': 'date'},
                  {'data': 'customer'},
                  {'data': 'image'},
                  {'data': 'accno'},
                  {'data': 'code'},
                  {'data': 'amount'},
                  {'data': 'postedby'},
          ],
         'columnDefs': [{
         'targets': 0,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
         'render': function (data,type,row){
            return '<input name="'+row.customer+'" accno='+row.accno+'  cid='+row.id+' type="checkbox" class="form-checkbox" name="id[]" value="'+$('<div/>').text(data).html()+'">';
            }
          }],
          //'order': [[0, 'desc']]
        });  
      }

     
      
        function dataTbFinlLoan(data){
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
                  {'data': 'id'},
                  {'data': 'date'},
                  {'data': 'date_modified'},
                  {'data': 'customer'},
                  {'data': 'accno'},
                  {'data': 'capacity'},
                  {'data': 'amount'},
                  {'data': 'period'},
                  {'data': 'interest'},
                  {'data': 'topay'},
                  {'data': 'penalty'},
                  {'data': 'payment'},
                  {'data': 'balance'},
                  {'data': 'status'},
          ],
         'columnDefs': [{
         'targets': 0,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
         'render': function (data,type,row){
            return '<input name="'+row.rname+'" accno='+row.accno+'  cid='+row.id+' type="checkbox" class="form-checkbox" name="id[]" value="'+$('<div/>').text(data).html()+'">';
            }
          }],
          //'order': [[0, 'desc']]
        });  
      }


     function dataTblLoan(data){
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
                  {'data': 'id'},
                  {'data': 'date'},
                  {'data': 'customer'},
                  {'data': 'accno'},
                  {'data': 'code'},
                  {'data': 'capacity'},
                  {'data': 'amount'},
                  {'data': 'period'},
                  {'data': 'days_left'},
                  {'data': 'interest'},
                  {'data': 'topay'},
                  {'data': 'payment'},
                  {'data': 'penalty'},
                  {'data': 'balance'},
                  {'data': 'status'},
          ],
         'columnDefs': [{
         'targets': 0,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
         'render': function (data,type,row){
            return '<input name="'+row.rname+'" accno='+row.accno+'  cid='+row.id+' type="checkbox" class="form-checkbox" name="id[]" value="'+$('<div/>').text(data).html()+'">';
            }
          }],
          //'order': [[0, 'desc']]
        });  
      }


        function dataTblLoanMember(data){
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
                  {'data': 'id'},
                  {'data': 'date'},
                  {'data': 'regtype'},
                  {'data': 'fullname'},
                  {'data': 'image'},
                  {'data': 'code'},
                  {'data': 'phone'},
                  {'data': 'gender'},
                  {'data': 'dob'},
                  {'data': 'dependant'},
                  {'data': 'idtype'},
                  {'data': 'idno'},
                  {'data': '', render: function(data,type,row){
                     return "<a href='#' class='btn_1 medium btnLoanDetail' cid='"+row.id+"'>Detail</a>";
                    }
                  }, 
          ],
             'columnDefs': [{
             'targets': 0,
             'searchable': false,
             'orderable': false,
             'className': 'dt-body-center',
             'render': function (data,type,row){
               return '<input type="checkbox" class="form-checkbox" name="id[]" value="'+$('<div/>').text(data).html()+'">';
             }
            }],

          //'order': [[0, 'desc']]
        });  
      }



    function fetchMomoCustomers(){
     $.ajax({
          url:""+$online__access__tag+"processor/fetchMomoCust",
          type:"POST",
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {

          },
          success:function(data)
          {
            if(data!=="none"){
              dataTblMomoCust(data);
            }
          },
          error: function(err) {
            alert(err.responseText)
          console.log(err);
        }
      }); 
    }

    
    function fetchSusuComm(){
     $.ajax({
          url:""+$online__access__tag+"processor/fetchSusucomm",
          type:"POST",
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {

          },
          success:function(data)
          {
            if(data!=="none"){
              $(".clSalesToday").html("GHS "+data[0].commtoday);
              $(".clComm").html("GHS "+data[0].totcom);
              $(".clOverral").html("GHS "+data[0].overall)
              $(".clOveralcomm").html("GHS "+data[0].overcomm)
              dataTblSusuComm(data);
            }
          },
          error: function(err) {
          console.log(err);
        }
      }); 
    }

    
    function fetchAttComm(){
     $.ajax({
          url:""+$online__access__tag+"processor/fetchAttComm",
          type:"POST",
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
      
          },
          success:function(data)
          {
            if(data!=="none"){
              dataTblCommAtt(data);
            }
          },
          error: function(err) {
          console.log(err);
        }
      }); 
    }
    
    function fetchMassDeposit(){
    $.ajax({
          url:""+$online__access__tag+"processor/fetchMassDeposit",
          type:"POST",
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
      
          },
          success:function(data)
          {
            if(data!=="none"){
              $(".clMassToday").html("GHS "+data[0].commtoday);
              $(".clComm").html("GHS "+data[0].totcom);
              $(".clOverral").html("GHS "+data[0].overall)
              $(".clOveralcomm").html("GHS "+data[0].overcomm)
              dataTblMass(data);
            }else{
              if(fromSales){
                 location.reload();
                 fromSales=false;
              }
            }
          },
          error: function(err) {
          console.log(err);
        }
      });
    }
    
    function fetchClerk(){
    $.ajax({
          url:""+$online__access__tag+"processor/fetchClerk",
          type:"POST",
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
      
          },
          success:function(data)
          {
            if(data!=="none"){
              $(".clClerkToday").html("GHS "+data[0].commtoday);
              $(".clComm").html("GHS "+data[0].totcom);
              $(".clOverral").html("GHS "+data[0].overall)
              $(".clOveralcomm").html("GHS "+data[0].overcomm)
              dataTblClerk(data);
            }else{
              if(fromSales){
                 location.reload();
                 fromSales=false;
              }
            }
          },
          error: function(err) {
          console.log(err);
        }
      });
    }
    
    function fetchEvd(){
    $.ajax({
          url:""+$online__access__tag+"processor/fetchEvd",
          type:"POST",
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
      
          },
          success:function(data)
          {
            if(data!=="none"){
              $(".clEvdToday").html("GHS "+data[0].commtoday);
              $(".clComm").html("GHS "+data[0].totcom);
              $(".clEvdOverral").html("GHS "+data[0].overall)
              $(".clEvdOveralcomm").html("GHS "+data[0].overcomm)
              dataTblEvd(data);
            }else{
              if(fromSales){
                 location.reload();
                 fromSales=false;
              }
            }
          },
          error: function(err) {
          console.log(err);
        }
      });
    }

    function fetchSales(){
    $.ajax({
          url:""+$online__access__tag+"processor/fetchSales",
          type:"POST",
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
      
          },
          success:function(data)
          {
            if(data!=="none"){
              $(".clSalesToday").html("GHS "+data[0].sales);
              $(".clComm").html("GHS "+data[0].totcom);
              $(".clOverral").html("GHS "+data[0].overall)
              $(".clOveralcomm").html("GHS "+data[0].overcomm)
              dataTblSales(data);
            }else{
              if(fromSales){
                 location.reload();
                 fromSales=false;
              }
            }
          },
          error: function(err) {
          console.log(err);
        }
      });
    }


   function fetchCustDeposit(inptype, key){
    var fd = new FormData();
    fd.append("inptype", inptype);
    fd.append("key", key);
    $.ajax({
          url:""+$online__access__tag+"processor/fetchDeposits",
          data:fd,
          type:"POST",
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
            $(".btnSearchDep > i").removeClass().addClass("fa fa-spinner fa-spin");
            $(".btnSearchDep").prop("disabled", true);
            $(".btnSearchDep").css("cursor", "no-drop");  
            $(".btnSearchDep").html("Fetching data.......");
            $(".shFound").html("Fetching data..... Please relax!").css("color","red").show();
          },
          success:function(data)
          {
            $(".btnSearchDep > i").removeClass().addClass("");
            $(".btnSearchDep").prop("disabled", false);
            $(".btnSearchDep").css("cursor", ""); 
            $(".btnSearchDep").html("Search Complete");

            setTimeout(function() {
             $(".btnSearchDep").html("Search");   
             $(".shFound").hide();
            }, 10000);

            if(data==="none"){
             $(".shTable").hide();
             swal("No data found"); 
             $(".shFound").html("No data found").css("color","green").show();
            }else if(data==='expire'){
             window.location = $online__access__tag + "auth";
            }else{
             $(".shTable").show();   
             depositsDataTbl(data); 
             scrollSmoothToBottom("searchBox");
             $(".shFound").html("Search Complete! "+data.length+" entries found").css("color","green").show();
            }
        },
        error: function(err) {
            //alert(err.responseText)
          console.log(err);
        }
    });
    $(".loader_container_sector").hide();
    }




    function fetchCustWith(inptype, key){
    var fd = new FormData();
    fd.append("inptype", inptype);
    fd.append("key", key);
    $.ajax({
          url:""+$online__access__tag+"processor/fetchWithdrawals",
          data:fd,
          type:"POST",
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
            $(".btnSearchWith > i").removeClass().addClass("fa fa-spinner fa-spin");
            $(".btnSearchWith").prop("disabled", true);
            $(".btnSearchWith").css("cursor", "no-drop");  
            $(".btnSearchWith").html("Fetching data.......");
            $(".shFound").html("Fetching data..... Please relax!").css("color","red").show();
          },
          success:function(data)
          {
            $(".btnSearchWith > i").removeClass().addClass("");
            $(".btnSearchWith").prop("disabled", false);
            $(".btnSearchWith").css("cursor", ""); 
            $(".btnSearchWith").html("Search Complete");
           
            setTimeout(function(){
             $(".btnSearchWith").html("Search");   
             $(".shFound").hide();
            }, 10000);

            if(data==="none"){
              $(".shTable").hide();
              swal("No data found");
              $(".shFound").html("No data found").css("color","green").show();
            }else if(data==="expire"){
              window.location = $online__access__tag + "auth"; 
            }else{
             $(".shTable").show();
             withdrawalDataTbl(data); 
             scrollSmoothToBottom("searchBox"); 
             $(".shFound").html("Search Complete! "+data.length+" entries found").css("color","green").show();
            }
        },
        error: function(err) {
          console.log(err);
        }
    });
    $(".loader_container_sector").hide();
    }



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
        var teller_id = $(".6").val();
        var mobile_id = $(".5").val();

        var registerTeller = $(".register6").val();
        var depositTeller = $(".deposit6").val();
        var withdrawalTeller = $(".withdrawal6").val();
        var transferTeller = $(".transfer6").val();
        var historyTeller = $(".history6").val();
        var loanTeller = $(".loan6").val();

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
            $("#idbalance").html(money(parseFloat(data[0].balance)));
            $("#idDep").html(money(parseFloat(data[0].lastdeposit)));
            $("#idDepDate").html(data[0].lastdeposit_date);
            $("#idWith").html(money(parseFloat(data[0].lastwithdrawal)));
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
            
            if(data==="none"){
                $("#exampleModalLabel").html("Invalid Account #")
                $(".modal-body").html("<h3>Records Not Found</h3>");
                $(".clModalSuccess").modal(
                {
                backdrop: 'static',
                keyboard: false
                });
                setTimeout(function() {
                $(".clClose").click();
                window.location = $online__access__tag + "dashboard2";
               }, 2000);

                $(".cust-body").hide();
                
            }else if(data==="expire"){
               alert("Session has expire");
               window.location = $online__access__tag + "auth"; 
            }else{

            if(data[0].photo){
            if(data[0].photo.length>20){
             $("#idImage2").append("<img src='https://drive.google.com/thumbnail?id="+data[0].photo+"' width='160' height='160'>");
            }else{
             $("#idImage2").append("<img src='https://greenedis.org/stupload/"+data[0].photo+"' width='160' height='160'>");
                }
            }

            if(controller.includes("acc-manage?sid1")){
               $("#dispImage").show();
               $("#uplPhoto").attr("src","https://drive.google.com/thumbnail?id="+$("#sid1").val());
               $("#pills-profile-tab-fill").click();
            }
           
            $("#clCode").val(data[0].code);
            $("#idAccName").html(data[0].fullname); 
            $("#idAccProduct").html(data[0].product);
            $("#clPhone").val(data[0].phone);
            $("#clIDNo").val(data[0].idno); 
            $("#idbalance").html(money(parseFloat(data[0].balance)));
            $("#idDep").html(money(parseFloat(data[0].lastdeposit)));
            $("#idDepDate").html(data[0].lastdeposit_date);
            $("#idWith").html(money(parseFloat(data[0].lastwithdrawal)));
            $("#idWithDate").html(data[0].lastwithdrawal_date);
            $("#idDepPost").html(data[0].ldepost);
            $("#idWithPost").html(data[0].lwithpost);
            $("#idAccDate").html(data[0].date_created);
            if(data[0].product === "SAVINGS ACCOUNT"){
                $("#idAccSub").html(data[0].subscription).show();
            }

            if(data[0].acc_status==="1"){
            $(".clShowAct").hide();
            $(".clShowBtn").show();
            $(".shAccStatus").show();
            }
             
            sessionStorage.setItem("oldbal",data[0].balance);
            sessionStorage.setItem("client_id",data[0].id); 
            sessionStorage.setItem("acc_status",data[0].acc_status);
            sessionStorage.setItem("product",data[0].product);

            }
          },
           error: function(err) {
            console.log(err);
            //alert(err.responseText);
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


 if(controller.includes("edclient")){    
    if(controller.includes("edclient?sid1")){
      $("#idImage2").append("<img src='https://drive.google.com/thumbnail?id="+$("#sid1").val()+"' width='160' height='160'>");
    }else{
     if(sessionStorage.getItem("photo")){
     if(sessionStorage.getItem("photo").length>20){
       $("#idImage2").append("<img src='https://drive.google.com/thumbnail?id="+sessionStorage.getItem("photo")+"' width='160' height='160'>");
      }else{
       $("#idImage2").append("<img src='https://greenedis.org/stupload/"+sessionStorage.getItem("photo")+"' width='160' height='160'>");
        }
     }  
    }
    $("#idSurname").val(sessionStorage.getItem("lastname"));
    $("#idOthername").val(sessionStorage.getItem("othername")); 
    $("#idFirstname").val(sessionStorage.getItem("firstname"));
    $("#idClientContact").val(sessionStorage.getItem("contact"));
    $("#idNextofKin").val(sessionStorage.getItem("nok"));
    $("#idNextofKinContact").val(sessionStorage.getItem("nokc"));
    $("#idCity").val(sessionStorage.getItem("city"));
    $("#idArea").val(sessionStorage.getItem("area"));
    $("#idOccupation").val(sessionStorage.getItem("occupation"));
    $("#idClientDob").val(sessionStorage.getItem("dob"));
 }


      $(document).on('click','#idUpdateDeduction',function(e){
       e.preventDefault();
          var selected = [];
           $("input:checkbox[class=form-checkbox]:checked").each(function () {
             selected.push($(this).val());
             name=$(this).attr("name");
             stype=$(this).attr("stype");
             amount=$(this).attr("amount");
             distribution=$(this).attr("distribution");
             date=$(this).attr("date");
           });
          if(selected.length == 0){
              alert('Please select record');
           }else if(selected.length > 1){
                alert('Select only one record');
           }else {
            $('#idStaffDeduct').val(name);
            $('#idStafftype').val(stype);
            $('#idDedAmount').val(amount);
            $('#idDistribution').val(distribution);
            $('#modalDeductionUpdate').modal();
           }
      });


      
      $(document).on('click','.btnRepayLoan',function(e){
       e.preventDefault();
          var selected = [];
           $("input:checkbox[class=form-checkbox]:checked").each(function () {
             selected.push($(this).val());
             name=$(this).attr("name");
             accno=$(this).attr("accno");
           });
          if(selected.length == 0){
              alert('Please select record');
           }else if(selected.length > 1){
                alert('Select only one record');
           }else{
            check_amt_topay(selected, accno);
            $("#loanid").val(selected);
            $("#idAppLoan").val(selected);
            $('#appName').val(name);
            $('#regNo').val(accno);
           }
      });


      
      $(document).on('click','.btnViewDetail',function(e){
       e.preventDefault();
        cid=$(this).attr("cid");
        accno=$(this).attr("loanid");
        window.location=$online__access__tag+"edloanacc?key="+cid+"&lid="+accno+"";
      });
      
      
      
       $(document).on('click','#iduptsales',function(e){
       e.preventDefault();
          var selected = [];
           $("input:checkbox[class=form-checkbox]:checked").each(function () {
             selected.push($(this).val());
             date=$(this).attr("date");
             amount=$(this).attr("amount");
             product=$(this).attr("product");
             quantity=$(this).attr("quantity");
             sprice=$(this).attr("sprice");
             cname=$(this).attr("cname");
             gcard=$(this).attr("gcard");
             cnumber=$(this).attr("cnumber");
             cpin=$(this).attr("cpin");
           });
          if(selected.length == 0){
              alert('Please select record');
           }else if(selected.length > 1){
                alert('Select only one record');
           }else {
            $('#edSaleId').val(selected);
            $('#edSaleDate').val(date);
            $('#edSaleProd').val(product);
            $("#edSalePrice").val(sprice);
            $('#edSaleQty').val(quantity);  
            $('#edsalName').val(cname);
            $("#edsalGCard").val(gcard);
            $('#edsalNumber').val(cnumber);
            $('#edsalPin').val(cpin);
            $('#modalEditSales').modal();
           }
      });



    
       $(document).on('click','.updtCust',function(e){
       e.preventDefault();
          var selected = [];
           $("input:checkbox[class=form-checkbox]:checked").each(function () {
             selected.push($(this).val());
             category=$(this).attr("category");
             fullname=$(this).attr("fullname");
             agentno=$(this).attr("agentno");
             agentcust=$(this).attr("agentcust");
             phone=$(this).attr("phone");
             agentname=$(this).attr("agentname");
             city=$(this).attr("city");
             custid=$(this).attr("custid");
             if(custid==="1"){
              $("#shAgent").show();
              $("#shAgentName").show();
              $("#shAgentCust").hide();
             }else{
              $("#shAgent").show();
              $("shAgentName").show();
              $("#shAgentCust").show();  
             }
           });
          if(selected.length == 0){
              alert('Please select record');
           }else if(selected.length > 1){
                alert('Select only one record');
           }else {
            $('#idMomoId').val(selected);
            $('#idMomoName').val(fullname);
            $('#idMomoPhone').val(phone);
            $("#idMomoTown").val(city);  
            $("#idAgentNo").val(agentno);
            $("#idAgentName").val(agentname);
            $("#idMomoCust").val(agentcust);
            $("#idMomoCat").prepend("<option value="+custid+" selected='selected'>"+category+"</option>");  
            $('.modalEditMCustomer').modal();
           }
      });




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


    $(".btnNewLoan").click(function(){
     $('.modalLoanProduct').modal({
      backdrop: 'static',
      keyboard: false
     });
    });

   
    $(".addShort").click(function(){
     $('.modalShortage').modal({
      backdrop: 'static',
      keyboard: false
     });
    });

   
    $(".addOvers").click(function(){
     $('.modalOvers').modal({
      backdrop: 'static',
      keyboard: false
     });
    });

    
    $(".addSales").click(function(){
     $('.modalSales').modal({
      backdrop: 'static',
      keyboard: false
     });
    });

    
    $(".addBulk").click(function(){
     $('.modalBulk').modal({
      backdrop: 'static',
      keyboard: false
     });
    });

    
    $(".addCashPay").click(function(){
     $('.modalCashPay').modal({
      backdrop: 'static',
      keyboard: false
     });
    });


      $(document).on('click','.edComm',function(e){
       e.preventDefault();
          cid=$(this).attr("cid");
          amount=$(this).attr("amount");
          fullname=$(this).attr("fullname");
          date=$(this).attr("date");
          time=$(this).attr("time");
          $("#idEdComm").val(cid);
          $("#idStname").val(fullname)
          $("#idLogDate").val(date);
          $("#idLogTime").val(time);
          $("#idLogAmt").val(amount);
          $('.modalEditComm').modal({
          backdrop: 'static',
          keyboard: false
         });
     });

    
    
    $(".addReq").click(function(){
     $('.modalReq').modal({
      backdrop: 'static',
      keyboard: false
     });
    });


    
     $(".addECash").click(function(){
     $('.modalE-Cash').modal({
      backdrop: 'static',
      keyboard: false
     });
    });
    
    
    $(".addMass").click(function(){
     $('.modalMass').modal({
      backdrop: 'static',
      keyboard: false
     });
    });
    
    
    $(".addClerk").click(function(){
     $('.modalClerk').modal({
      backdrop: 'static',
      keyboard: false
     });
    });
    
    
    $(".addEvd").click(function(){
     $('.modalEvd').modal({
      backdrop: 'static',
      keyboard: false
     });
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


     
     $(".btnSubmitOvers").click(function(e){
       e.preventDefault();
      if(field_required_prompter('.over',5000)==true)
      {
        postOvers("1");  
      }else{
              
      }
    });


     
     $(".btnSubmitShortage").click(function(e){
       e.preventDefault();
      if(field_required_prompter('.short',5000)==true)
      {
        postOvers("2");  
      }
      
      else
      {
          alert("All fields required");    
      }
    });


     
     $(".btnSubmitReq").click(function(e){
       e.preventDefault();
      if(field_required_prompter('.ereq',5000)==true)
      {
        postERequisition();  
      }
      
      else
      {
          alert("All fields required");    
      }
    });


     

     $(".btnSubmitBulk").click(function(e){
       e.preventDefault();
      if(field_required_prompter('.pay',5000)==true)
      {
        postBulk();  
      }
      
      else
      {
          alert("All fields required");    
      }
    });



     
     $(".btnSubmitCash").click(function(e){
      e.preventDefault();
      if(field_required_prompter('.pay',5000)==true)
      {
        postCashPay();  
      }else{
          alert("All fields required");    
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
     var selected = [];
      $("input:checkbox[class=form-checkbox]:checked").each(function () {
        selected.push($(this).val());
        date=$(this).attr("date");
        name=$(this).attr("name");
        accno=$(this).attr("accno");
        amount=$(this).attr("amount");
        bal=$(this).attr("bal");
        posted=$(this).attr("posted");
      });  
      if(selected.length == 0){
         alert('Please select record');
      }else if(selected.length > 1){
         alert('Select only one record');
      }else{
       $("#idCount").val(selected);
       $('#idWithDate').val(date);
       $('#idWithClient').val(name);
       $('#idWithAccNo').val(accno);
       $('#idWithAmount').val(amount);
       $('#idWithPosted').val(posted);
      $('#modalWithdrawalUpdate').modal();
      }
  }



   $("#momoAddRecord").click(function(e){
           $('#modalAddMomo').modal();
    });
    
    // $("#iduptrecord").click(function(e){
    //     updateDailyRecord();
    // });


     $(document).on('click','#iduptrecord',function(e){
       e.preventDefault();
          var selected = [];
           $("input:checkbox[class=form-checkbox]:checked").each(function () {
             selected.push($(this).val());
             date=$(this).attr("date");
             deposit=$(this).attr("deposit");
             cashout=$(this).attr("cashout");
           });
          if(selected.length == 0){
              alert('Please select record');
           }else if(selected.length > 1){
                alert('Select only one record');
           }else {
            $('#momoDate1').val(date);
            $('#momoDeposit1').val(deposit);
            $('#momoCashout1').val(cashout);
            $('#modaluptrecord').modal();
           }
      });



    $(document).on('click','.delLoanProd',function(e){
       e.preventDefault();
          var selected = [];
           $("input:checkbox[class=form-checkbox]:checked").each(function () {
             selected.push($(this).val());
           });
          if(selected.length == 0){
              alert('Please select record');
           }else {
             swal({   
            title: "Confirm removal",   
            text: "Are you Sure you want to delete record(s)",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, Remove",   
            closeOnConfirm: true 
         }, function(){
             deleteFunction(selected, "loan_product_tb");
         });    
        }
      });


     
    $(document).on('click','.delExCash',function(e){
       e.preventDefault();
          var selected = [];
           $("input:checkbox[class=form-checkbox]:checked").each(function () {
             selected.push($(this).val());
           });
          if(selected.length == 0){
              alert('Please select record');
           }else {
             swal({   
            title: "Confirm removal",   
            text: "Are you Sure you want to delete record(s)",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, Remove",   
            closeOnConfirm: true 
         }, function(){
             deleteFunction(selected, "excess_tb");
         });    
        }
      });


    
    $(document).on('click','#idevddelsales',function(e){
       e.preventDefault();
          var selected = [];
           $("input:checkbox[class=form-checkbox]:checked").each(function () {
             selected.push($(this).val());
           });
          if(selected.length == 0){
              alert('Please select record');
           }else {
             swal({   
            title: "Confirm removal",   
            text: "Are you Sure you want to delete EVD record(s)",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, Remove",   
            closeOnConfirm: true 
         }, function(){
           deleteFunction(selected, "evd_tb");
         });    
        }
      });


    
     $(document).on('click','.delCashReq',function(e){
       e.preventDefault();
          var selected = [];
           $("input:checkbox[class=form-checkbox]:checked").each(function () {
             selected.push($(this).val());
           });
          if(selected.length == 0){
              alert('Please select record');
           }else {
             swal({   
            title: "Confirm removal",   
            text: "Are you Sure you want to delete record(s)",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, Remove",   
            closeOnConfirm: true 
         }, function(){
           deleteFunction(selected, "cashpay_tb");
         });    
        }
      });


     
       $(document).on('click','.delBulk',function(e){
       e.preventDefault();
          var selected = [];
           $("input:checkbox[class=form-checkbox]:checked").each(function () {
             selected.push($(this).val());
           });
          if(selected.length == 0){
              alert('Please select record');
           }else {
             swal({   
            title: "Confirm removal",   
            text: "Are you Sure you want to delete record(s)",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, Remove",   
            closeOnConfirm: true 
         }, function(){
           deleteFunction(selected, "btransfer_tb");
         });    
        }
      });

    
      $(document).on('click','.delEReq',function(e){
       e.preventDefault();
          var selected = [];
           $("input:checkbox[class=form-checkbox]:checked").each(function () {
             selected.push($(this).val());
           });
          if(selected.length == 0){
              alert('Please select record');
           }else {
             swal({   
            title: "Confirm removal",   
            text: "Are you Sure you want to delete record(s)",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, Remove",   
            closeOnConfirm: true 
         }, function(){
           deleteFunction(selected, "ereq_tb");
         });    
        }
      });


    
       $(document).on('click','.delCust',function(e){
       e.preventDefault();
          var selected = [];
           $("input:checkbox[class=form-checkbox]:checked").each(function () {
             selected.push($(this).val());
           });
          if(selected.length == 0){
              alert('Please select record');
           }else {
             swal({   
            title: "Confirm removal",   
            text: "Are you Sure you want to delete record(s)",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, Remove",   
            closeOnConfirm: true 
         }, function(){
           deleteFunction(selected, "mcustomer_tb");
         });    
        }
      });

       
    $(document).on('click','.delECash',function(e){
       e.preventDefault();
          var selected = [];
           $("input:checkbox[class=form-checkbox]:checked").each(function () {
             selected.push($(this).val());
           });
          if(selected.length == 0){
              alert('Please select record');
           }else {
             swal({   
            title: "Confirm removal",   
            text: "Are you Sure you want to delete record(s)",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, Remove",   
            closeOnConfirm: true 
         }, function(){
           deleteFunction(selected, "ecash_tb");
         });    
        }
      });
      
    
     $(document).on('click','.btnDelComm',function(e){
       e.preventDefault();
       cid=$(this).attr("cid");
        swal({   
            title: "Confirm removal",   
            text: "Do you want to remove?",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, Remove",   
            closeOnConfirm: true 
         }, function(){
           deleteFunction(cid, "calc_comm");
         });    
      });



    $(document).on('click','.delUser',function(e){
       e.preventDefault();
          var selected = [];
           $("input:checkbox[class=form-checkbox]:checked").each(function () {
             selected.push($(this).val());
           });
          if(selected.length == 0){
              alert('Please select record');
           }else {
             swal({   
            title: "Confirm removal",   
            text: "Deleting record(s) will also affect related data. Do you want to proceed?",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, Remove",   
            closeOnConfirm: true 
         }, function(){
           deleteFunction(selected, "loanreg_tb");
         });    
        }
      });


     
      $(document).on('click','.btnApproveLedger',function(e){
       e.preventDefault();
       cid=$(this).attr("cid");
        swal({   
            title: "Confirm Approval",   
            text: "Do you want to Approve this record?",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#198754",   
            confirmButtonText: "Yes, Approve",   
            closeOnConfirm: true 
         }, function(){
           setclause = "status = 0";
           whereclause = "id = "+cid+"";
           updateRecord("excess_tb", whereclause, setclause, ".btnApproveLedger", "Approve");
         });    
      });


      
    $(document).on('click','.btnApproveLoan',function(e){
       e.preventDefault();
       lid=$(this).attr("lid");
       cid=$(this).attr("cid");
       mature=$(this).attr("mature");
        swal({   
            title: "Confirm Approval",   
            text: "Do you want to Approve this Loan Request?",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#198754",   
            confirmButtonText: "Yes, Approve",   
            closeOnConfirm: true 
         }, function(){
            date=$("#cdate").val();
            const newdate = new Date(date); 
            newdate.setDate(newdate.getDate() + parseInt(mature));
            mature=newdate.getFullYear()+"-"+(parseInt(newdate.getMonth())+1)+"-"+newdate.getDate();
            setclause = "STATUS = 0, DATE_APPROVE='"+date+"', DATE_MATURE='"+mature+"'";
            whereclause = "id = "+lid+"";
            checkAgreement(cid, lid, "loan_tb", whereclause, setclause, ".btnApproveLoan", "Approve");
         });    
      });


      function checkAgreement(cid, lid, table, whereclause, setclause, btn, stext){
            var fd = new FormData();
            fd.append("lid", lid);
            $.ajax({
                  url:""+$online__access__tag+"processor/check_form",
                  type:"POST",
                  data: fd,
                  dataType:'json',
                  contentType: false,       
                  cache: false, 
                  processData:false,
                  success:function(data)
                  {
                    if(data.status==="exist"){
                      updateRecord(table, whereclause, setclause, btn, stext);  
                    }else{
                      $(".btnUplAgree").attr("href",$online__access__tag+"edloanacc?key="+cid+"&lid="+lid+"");
                         $('.modalLoadApp').modal(
                           {
                             backdrop: 'static',
                             keyboard: false
                           }
                         );
                    }
                  },
                  error: function(err){
                   $("#payAmt").val("0");
                   alert("In error: "+err.responseText);
                }
            });
      }


    
      $(document).on('click','.btnDeclineLoan',function(e){
       e.preventDefault();
       lid=$(this).attr("lid");
        swal({   
            title: "Confirm Decline",   
            text: "Do you want to Decline this Loan Request?",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#dc3545",   
            confirmButtonText: "Yes, Decline",   
            closeOnConfirm: true 
         }, function(){
           setclause = "status = 2";
           whereclause = "id = "+lid+"";
           updateRecord("loan_tb", whereclause, setclause, ".btnDeclineLoan", "Decline");
         });    
      });



     $(document).on('click','.btnDeclineLedger',function(e){
       e.preventDefault();
       cid=$(this).attr("cid");
        swal({   
            title: "Confirm Decline",   
            text: "Do you want to Decline this record?",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#dc3545",   
            confirmButtonText: "Yes, Decline",   
            closeOnConfirm: true 
         }, function(){
           setclause = "status = 2";
           whereclause = "id = "+cid+"";
           updateRecord("excess_tb", whereclause, setclause, ".btnDeclineLedger", "Decline");
         });    
      });


      
    $(document).on('click','#iddelrecord',function(e){
       e.preventDefault();
          var selected = [];
           $("input:checkbox[class=form-checkbox]:checked").each(function () {
             selected.push($(this).val());
           });
          if(selected.length == 0){
              alert('Please select record');
           }else {
             swal({   
            title: "Confirm removal",   
            text: "Are you Sure you want to delete Paymant record(s)",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, Remove",   
            closeOnConfirm: true 
         }, function(){
           deleteFunction(selected, "momo_trans_tb");
         });    
        }
      });


      $(document).on('click','.btnDeleteLoan',function(e){
       e.preventDefault();
          var selected = [];
           $("input:checkbox[class=form-checkbox]:checked").each(function () {
             selected.push($(this).val());
           });
          if(selected.length == 0){
              alert('Please select record');
           }else {
             swal({   
            title: "Confirm removal",   
            text: "Do you want to remove Loan and related records?",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, Remove",   
            closeOnConfirm: true 
         }, function(){
           deleteFunction(selected, "loan_tb");
         });    
        }
      });
      
    
   
    $(document).on('click','#iddelmass',function(e){
       e.preventDefault();
          var selected = [];
           $("input:checkbox[class=form-checkbox]:checked").each(function () {
             selected.push($(this).val());
           });
          if(selected.length == 0){
              alert('Please select record');
           }else {
             swal({   
            title: "Confirm removal",   
            text: "Do you want to delete selected record(s)",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, Remove",   
            closeOnConfirm: true 
         }, function(){
           deleteFunction(selected, "mass_tb");
         });    
        }
      });
  
   $(document).on('click','#iddelclerk',function(e){
       e.preventDefault();
          var selected = [];
           $("input:checkbox[class=form-checkbox]:checked").each(function () {
             selected.push($(this).val());
           });
          if(selected.length == 0){
              alert('Please select record');
           }else {
             swal({   
            title: "Confirm removal",   
            text: "Do you want to delete selected record(s)",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, Remove",   
            closeOnConfirm: true 
         }, function(){
           deleteFunction(selected, "clertk_tb");
         });    
        }
      });
  
  $(document).on('click','#iddelsales',function(e){
       e.preventDefault();
          var selected = [];
           $("input:checkbox[class=form-checkbox]:checked").each(function () {
             selected.push($(this).val());
           });
          if(selected.length == 0){
              alert('Please select record');
           }else {
             swal({   
            title: "Confirm removal",   
            text: "Do you want to delete selected record(s)",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, Remove",   
            closeOnConfirm: true 
         }, function(){
           deleteFunction(selected, "sales_tb");
         });    
        }
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
     $('#modalNewLoan').modal(
       {
         backdrop: 'static',
         keyboard: false
       }
     );
    });
    
    $("#idNewCont").click(function(e){
     $('#modalAddContribution').modal();
    });
    
    

    $(document).on('click','#idUpdateClient',function(e){
       e.preventDefault();
        sessionStorage.setItem("surl",controller);
          var selected = [];
           $("input:checkbox[class=form-checkbox]:checked").each(function () {
             selected.push($(this).val());
             dob=$(this).attr("dob");
             contact=$(this).attr("contact");
             city=$(this).attr("city");
             area=$(this).attr("area");
             occupation=$(this).attr("occupation");
             identification=$(this).attr("identification");
             idnumber=$(this).attr("idnumber");
             next_of_kin=$(this).attr("next_of_kin");
             next_of_kin_contact=$(this).attr("next_of_kin_contact");
             fname=$(this).attr("fname");
             lname=$(this).attr("lname");
             oname=$(this).attr("oname");
             photo=$(this).attr("photo");
           });
          if(selected.length == 0){
              alert('Please select record');
           }else if(selected.length > 1){
                alert('Select only one record');
           }else{
            sessionStorage.setItem("id", selected);
            sessionStorage.setItem("firstname", fname);
            sessionStorage.setItem("lastname", lname);
            sessionStorage.setItem("othername", oname);
            sessionStorage.setItem("dob", dob);
            sessionStorage.setItem("contact", contact);
            sessionStorage.setItem("nok", next_of_kin);
            sessionStorage.setItem("nokc", next_of_kin_contact);
            sessionStorage.setItem("city", city);
            sessionStorage.setItem("area", area);
            sessionStorage.setItem("occupation", occupation);
            sessionStorage.setItem("photo", photo);
            window.location = $online__access__tag + "edclient";
           }
      });
      


    $(document).on('click','.btnUpdateLoanProd',function(e){
       e.preventDefault();
          var selected = [];
           $("input:checkbox[class=form-checkbox]:checked").each(function () {
             selected.push($(this).val());
             name=$(this).attr("name");
             code=$(this).attr("code");
             min_amount=$(this).attr("min_amount");
             max_amount=$(this).attr("max_amount");
             form_fee=$(this).attr("form_fee");
             processing_fee=$(this).attr("processing_fee");
             interest=$(this).attr("interest");
             penalty=$(this).attr("penalty");
           });
          if(selected.length == 0){
              alert('Please select record');
           }else if(selected.length > 1){
                alert('Select only one record');
           }else {
            $("#prodcode").val(code);
            $('#edloanName').val(name);
            $('#edloanMinAmnt').val(min_amount);
            $('#edloanMaxnAmnt').val(max_amount);
            $("#edloanFormFee").val(form_fee);
            $('#edloanProcessFee').val(processing_fee);  
            $('#edloanInterest').val(interest);
            $("#edloanPenalty").val(penalty);
            $('.modalLoanEdProduct').modal();
           }
      });

    
    $("#idReactive").click(function(e){
        reactivate();
    });
    
    

     $("#idPostClientUpdate").click(function(e){
       e.preventDefault(); 
      if(field_required_prompter('.clupdate',5000)==true)
      {
        postClientUpdate();
      }else{
        swal("Missing input","Please input all required fields","error");
      }
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


  
  $(".btnSubmitMomoCust").click(function(e){
    e.preventDefault();
        if(field_required_prompter('.momo',5000)==true)
      {
          postMomoCust();
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
    
    
      $(".btnPostLoan").click(function(e){
       e.preventDefault();
      if(field_required_prompter('.form-loan',5000)==true)
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
    

    
     $(".btnSubmitLoanReq").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.lreq',5000)==true)
          {
            postNewLoan();
          }else
          {
            alert("Fields marked * is mandatory");
          }
    });

    
     $(".btnSubmitECash").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.ecash',5000)==true)
          {
            postECash();
          }else
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


     
    $('#applicant').change(function(){
       selected = $('option:selected',this).val();  
       regtype=$('option:selected',this).data("id"); 
       code=$('option:selected',this).data("value");
       image=$('option:selected',this).data("image");
       $("#reqamt").prop("disabled",false);
       $("#dispImg").attr("src","https://drive.google.com/thumbnail?id="+image+"").show();
       $(".shLoanCode").show();
       $(".shRegType").show();
       $("#loancode").val(code);
       if(regtype===1){
        $("#lprod").val("Business Loan");
        loanprod="1000";
       }else if(regtype===2){
        $("#lprod").val("Group Loan");
        loanprod="1001";
       }
    });


    
     $('#pstatus').change(function(){
       selected = $('option:selected',this).val();  
       $(".shPayAmt").show();
       if(selected==="1"){
        $("#amtpaid").val("250");
       }else{
        $("#amtpaid").val("0");
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

    
     $('#idCashCust').change(function(){
       var selected = $('option:selected',this).val();  
        if(selected==="add"){
         window.location = $online__access__tag + "momo-cust";
        }else{
         $("#shAgentNo").show();
         $("#idAgentNo").val($('option:selected',this).attr("data-value")); 
        }
    });
    

    
     $('#idCashCat').change(function(){
       var selected = $('option:selected',this).val();  
       $("#cashAmt").val("0");
       $("#amtPayable").val("0");
        if(selected==="1"){
         $("#agentSh").show();
         $("#custSh").hide();
         $("#idCashAgent").addClass("ecash");
         $("#idCashCust").removeClass("ecash");
         $("#cashFee").val("0.003");
        }else{
         $("#agentSh").hide();
         $("#custSh").show();    
         $("#idCashAgent").removeClass("ecash");
         $("#idCashCust").addClass("ecash");
         $("#cashFee").val("0.003");
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

            if($(this).attr("role")==="7"){
              filterMOMO(date, '0', user); 
            }else{
              //calcComm(user);
              filterReport(date, '0', user);
              loadFilterLatest(date, '0', user);   
            }
                
             $("#hello").html("");
             $("#hello2").html("");
          }else
          {
      
          }
    });


     $(document).on('click', ".btnAccountDetail", function() {
         sessionStorage.setItem("accno", $(this).attr("accno"));
         checkAccountSingle($(this).attr("accno"));
      });


    
    function check_amt_topay(loanid, accno){
    var fd = new FormData();
    fd.append("loanid", loanid);
    fd.append("accno", accno);
    $.ajax({
          url:""+$online__access__tag+"processor/check_amt_topay",
          type:"POST",
          data: fd,
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          success:function(data)
          {
            if(data.amount==="pending"){
              alert("Sorry, Loan is still pending approval");
            }else{
             $("#payAmt").val(data.amount);
             sessionStorage.setItem("amttopay", data.amount);
             $('.modalRepay').modal();
            }
          },
          error: function(err){
            console.log(err)
           $("#payAmt").val("0");
        }
    });
}


    function checkAccountSingle(accountno){
    var fd = new FormData();
    fd.append("accountno", accountno);
    $.ajax({
          url:""+$online__access__tag+"processor/checkAccountSingle",
          type:"POST",
          data: fd,
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
            $(".btnAccountDetail > i").removeClass().addClass("fa fa-spinner fa-spin");
            $(".btnAccountDetail").prop("disabled", true);
            $(".btnAccountDetail").css("cursor", "no-drop");
          },
          success:function(data)
          {
            $(".btnAccountDetail > i").removeClass().addClass("");
            $(".btnAccountDetail").prop("disabled", false);
            $(".btnAccountDetail").css("cursor", "");  
            if(data.status==="success"){
              window.location = $online__access__tag + "acc-manage";
            }
          },
          error: function(err) {
            console.log(err);
            window.location = $online__access__tag + "acc-manage";
          //alert(err.responseText);
        }
    });
}




     $(".btnSearchCust").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.chksearch',5000)==true)
          {
           var accno = $(".search-top").val().trim();
           sessionStorage.setItem("accno",accno);
           checkAccountSingle(accno);
          }
      });


       
    $(document).on('click', "#accStatusRadio1", function() {
         var whereclause = "ACCOUNT_NO = '"+sessionStorage.getItem("accno")+"'";
         var setclause = "ACC_STATUS = 0";
         updateRecord("account_tb", whereclause, setclause, "", "status");
    });

      $(document).on('click', "#accStatusRadio2", function() {
         var whereclause = "ACCOUNT_NO = '"+sessionStorage.getItem("accno")+"'";
         var setclause = "ACC_STATUS = 1";
         updateRecord("account_tb", whereclause, setclause, "", "status");
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
                if(btext==="status"){
                  location.reload();  
                }
               $(btn).html(btext);
               $(".closePop").click();
              }, 1000);  
              if(controller.includes("daily-sales")){
                   fetchSales();
               }
               
               if(controller.includes("revclient")){
                  setTimeout(function() {
                    window.location = $online__access__tag + "pending"; 
                 }, 1000); 
               }

               if(controller.includes("mcustomers")){
                fetchMomoCustomers();
               }

               if(controller.includes("e-cash")){
                swal("Payment status updated successfully");
                fetchECash();
                fetchEReport();
               }

               if(controller.includes("attcomm")){
                fetchAttComm();
               }

              if(controller.includes("create_loan")){
                if(btext==="Approve"){
                 swal("Loan Approved","Loan has been approved successfully! Thank you.","success");
                 send_sms_loan(lid, "approve");
                }else{
                 send_sms_loan(lid, "decline");
                 swal("Loan Declined","Loan request has been declined. Thank you!","success");
                }
                fetchLoan();
               }

              if(controller.includes("loan-products")){
                swal("Loan Product updated successfully");
                fetchLoanProduct();               
              }

               if(controller.includes("ledger")){
                swal("Record updated successfully");
                fetchOReq();
               if(sessionStorage.getItem("role")==="1"){
                    fetchOReport("0", "0",null);
                }else{
                   fetchOReport("0", "0", $("#idUser").val()); 
                 }
                    setTimeout(function() {
                     location.reload() 
                 }, 1000);
               }
            }
          },
            error: function(err) {
              alert(err.responseText)
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
                      //calculateBalancesAll();
                      
                      if(userRole=="7"){
                         filterMOMO(date, date2);
                      }else{
                        loadReportDefault2(date, date2);
                        loadLatestUpdate2(date, date2);   
                      }
                     }
                      
                 }else{
                      if(date2>today){
                         alert("Invalid date2 selected");
                     }else{
                         
                      if(userRole=="7"){
                        filterMOMO(date, date2, user); 
                      }else{
                        //calcComm(user);
                        filterReport(date, date2, user); 
                      }
                      //loadFilterLatest(date, date2, user);
                     }
                 }
             $("#hello").html("");
             $("#hello2").html("");
             }
            
            
          }else
          {
      
          }
    });


       $(".btnGenFilterBulk").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.filtCash',5000)==true)
          {
            var date = $("#pick-date").val();
            var date2 = $("#pick-date2").val();

            if(date!=""&&date2==""){
                    alert('Select date2');
                 }else if(date2!=""&&date==""){
                    alert('Select date1');
                 }else{
                      if(date2>today){
                         alert("Invalid date2 selected");
                     }else{
                        fetchBulkCash(date, date2);
                        fetchBulkReport(date, date2); 
                     }
                 }
             }
    });



    
      $(".btnGenFilterOver").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.genfilt',5000)==true)
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
                 }else{
                      if(date2>today){
                         alert("Invalid date2 selected");
                     }else{
                        fetchOReq(date, date2);
                        fetchOReport(date, date2, user); 
                     }
                 }
             } 
          }else
          {
      
          }
    });


     
      $(".btnGenFilter").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.genfilt',5000)==true)
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
                 }else{
                      if(date2>today){
                         alert("Invalid date2 selected");
                     }else{
                        fetchECash(date, date2);
                        fetchEReport(date, date2); 
                     }
                 }
             // $("#hello").html("");
             // $("#hello2").html("");
             } 
          }else
          {
      
          }
    });



      
      $(".btnGenFilterCash").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.filtCash',5000)==true)
          {
            $('#graphCanvas').remove(); 
            var user = $("#idUser").val(); 
            var date = $("#pick-date").val();
            var date2 = $("#pick-date2").val();
            var user = $("#idCashAgent").val();
            var today = new Date().toISOString().slice(0, 10);

             if(user==null&&date==''){
                   alert('Choose an option to filter');
             }else{
                if(date!=""&&date2==""){
                    alert('Select date2');
                 }else if(date2!=""&&date==""){
                    alert('Select date1');
                 }else{
                      if(date2>today){
                         alert("Invalid date2 selected");
                     }else{
                        fetchCash(date, date2, user);
                        fetchCashReport(date, date2, user); 
                     }
                 }
             } 
          }else
          {
      
          }
    });
    
      $(".btnGenFilterReq").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.genfilt',5000)==true)
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
                 }else{
                      if(date2>today){
                         alert("Invalid date2 selected");
                     }else{
                        fetchReq(date, date2);
                        fetchEReqReport(date, date2); 
                     }
                 }
             // $("#hello").html("");
             // $("#hello2").html("");
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
    
    
    
    function calcComm(user) {
    var fd = new FormData();
    fd.append("user", user);
    $.ajax({
          url:""+$online__access__tag+"processor/calcCommAgent",
          data:fd,
          dataType:'json',
          type:"POST",
          contentType: false,       
          cache: false, 
          processData:false,
        //   success:function(data)
        // {
        //   alert(JSON.stringify(data))
        // },
        // error: function(err) {
        //     alert(err.responseText)
        //   console.log(err);
        // }
    });
}
    
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
  
    
   
     $('#idUser').change(function(){
       var selected = $('option:selected',this).val();  
       userRole=$('option:selected',this).attr("data-value");
    });

    $('#idResidence').change(function(){
       var selected = $('option:selected',this).val();  
       if(selected == 'new'){
          $('#modalNewResidence').modal(

          {
                backdrop: 'static',
                keyboard: false
            }
            );
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


       
      $(".btnPayLoan").click(function(e){
      e.preventDefault();
      if(field_required_prompter('.lpay',5000)==true)
      {
       postPayLoan();
      }
      
      else
      {
  
      }
    });

    
    
    
     $(".btnSale").click(function(e){
      e.preventDefault();
      if(field_required_prompter('.form-sal',5000)==true)
      {
        postSales();
      }else
      {
  
      }
    });


     
      $(".btnCreateLoan").click(function(e){
      e.preventDefault();
      if(field_required_prompter('.form',5000)==true)
      {
        postCreateLoanAccount();
      }else
      {
        alert("Please input all required fields (*)");
      }
    });


      
    $(".btnSaveLoanAcc").click(function(e){
      e.preventDefault();
      if(field_required_prompter('.form',5000)==true)
      {
        postUpdateLoanAcc();
      }else
      {
        alert("All fields marked * is compulsory")
      }
    });
    
    
     $(".btnMass").click(function(e){
      e.preventDefault();
      if(field_required_prompter('.form-mass',5000)==true)
      {
        postMassDeposit();
      }else
      {
  
      }
    });
    
    
    
    
     $(".btnClerk").click(function(e){
      e.preventDefault();
      if(field_required_prompter('.form-clk',5000)==true)
      {
        postClerk();
      }else
      {
  
      }
    });
    
    
    
     $(".btnEvd").click(function(e){
      e.preventDefault();
      if(field_required_prompter('.form-evd',5000)==true)
      {
        postEvd();
      }else
      {
  
      }
    });
    

    $(".btnPostEdLoan").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.eform-loan',5000)==true)
      {
        setclause = "NAME = '"+$("#edloanName").val().trim()+"', MIN_AMOUNT = "+$("#edloanMinAmnt").val().trim()+", MAX_AMOUNT = "+$("#edloanMaxnAmnt").val().trim()+", FORM_FEE = "+$("#edloanFormFee").val().trim()+", PROCESSING_FEE = "+$("#edloanProcessFee").val().trim()+", INTEREST = "+$("#edloanInterest").val().trim()+", PENALTY = "+$("#edloanPenalty").val().trim()+"";
        whereclause="CODE="+$("#prodcode").val()+"";
        updateRecord("loan_product_tb", whereclause, setclause, ".btnPostEdLoan", "Save Changes"); 
      }
    });
    
    
    
     $(".btnCompChange").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.compc',5000)==true)
      {
        var setclause = "COMPANY = '"+$("#idComp").val().trim()+"', PHONE = '"+$("#idCompPhone").val().trim()+"', EMAIL = '"+$("#idCompEmail").val().trim()+"'";
        updateRecord("company_tb", 'none', setclause, ".btnCompChange", "Apply Changes");
        updateRecord("account_number_tb", 'none', "FORMATION = '"+$("#idCompString").val().trim()+"'", ".btnCompChange", "Apply Changes");    
      }
      
      else
      {

      }
    });


     
     $(".btnEdMomoCust").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.momo',5000)==true)
      {
        var setclause = "FULLNAME = '"+$("#idMomoName").val().trim()+"', PHONE = '"+$("#idMomoPhone").val().trim()+"', CITY = '"+$("#idMomoTown").val().trim()+"', CATEGORY = '"+$("#idMomoCat").val().trim()+"', AGENT_NAME = '"+$("#idAgentName").val().trim()+"', AGENTID = '"+$("#idAgentNo").val().trim()+"', AGENTCUST = '"+$("#idMomoCust").val()+"'";
        whereclause="ID = "+$("#idMomoId").val()+"";
        updateRecord("mcustomer_tb", whereclause, setclause, ".btnEdMomoCust", "Save Changes");    
      }
      
      else
      {

      }
    });
    
    
     
        $(".btnDecline").click(function(){
         cid=$(this).attr("cid");
         swal({   
            title: "Confirm!",   
            text: "Do you want to Decline this request?",   
            type: "info",   
            showCancelButton: true,   
            confirmButtonColor: "#392779",   
            confirmButtonText: "Yes, Decline",   
            closeOnConfirm: true 
        }, function(){   
           setclause = "ACCOUNT_STATUS = 4";
           whereclause = "ID = "+cid+"";
           updateRecord("client_tb", whereclause, setclause, ".btnDecline", "Decline");
        });
    });
    
      $(".btnApprove").click(function(){
         cid=$(this).attr("cid");
         swal({   
            title: "Confirm!",   
            text: "Do you want to Approve this request?",   
            type: "info",   
            showCancelButton: true,   
            confirmButtonColor: "#392779",   
            confirmButtonText: "Yes, Approve",   
            closeOnConfirm: true 
        }, function(){   
           setclause = "ACCOUNT_STATUS = 2";
           whereclause = "ID = "+cid+"";
           updateRecord("client_tb", whereclause, setclause, ".btnApprove", "Approve");
        });
    });

    
      $(".btnEditSale").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.form-ed',5000)==true)
      {
        amount = parseFloat($("#edSaleQty").val())*parseFloat($("#edSalePrice").val());
        var whereclause = "ID = "+$("#edSaleId").val()+"";
        var setclause = "QUANTITY = '"+$("#edSaleQty").val().trim()+"', CNAME = '"+$("#edsalName").val().trim()+"',  GCARD = '"+$("#edsalGCard").val().trim()+"', CNUMBER = '"+$("#edsalNumber").val().trim()+"', CPIN = '"+$("#edsalPin").val().trim()+"', DATE_CREATED = '"+$("#edSaleDate").val().trim()+"', AMOUNT="+amount+", POSTED_BY = "+sessionStorage.getItem("id")+"";
        updateRecord("sales_tb", whereclause, setclause, ".btnEditSale", "Save Changes");   
      }
      
      else
      {

      }
    });
    
     $("#btnAPIChanges").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.api',5000)==true)
      {
        var setclause = "APIKEY = '"+$("#idApiKey").val().trim()+"', SID = '"+$("#idSenderID").val().trim()+"', POSTED_BY = "+sessionStorage.getItem("id")+"";
        updateRecord("sms_settings", 'none', setclause, "#btnAPIChanges", "Apply Changes");   
      }
      
      else
      {

      }
    });


      $(".btnSavEdComm").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.comm',5000)==true)
      {
        setclause = "AMOUNT = "+$("#idLogAmt").val().trim()+"";
        whereclause = "ID = "+$("#idEdComm").val()+"";
        updateRecord("calc_comm", whereclause, setclause, ".btnSavEdComm", "Save Changes");    
      }else
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
          if(list.length == 0){
              alert('Please select record');
           }else {
             swal({   
            title: "Confirm removal",   
            text: "Do you want to remove record(s)",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, Remove",   
            closeOnConfirm: true 
         }, function(){
           deleteDeduction(list);
         });    
        }
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
        //alert(err.responseText);
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


    
    function postEvd(){
    var fd = new FormData();
    fd.append("newdate", $("#evdDate").val());
    fd.append("amount", $("#evdAmount").val());
    $.ajax({
          url:""+$online__access__tag+"processor/postEvd",
          type:"POST",
          data: fd,
          dataType: 'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
           $(".btnEvd > i").removeClass().addClass("fa fa-spinner fa-spin");
           $(".btnEvd").prop("disabled", true);
           $(".btnEvd").css("cursor", "no-drop");
          },
          success:function(data)
          {
           $(".btnEvd > i").removeClass().addClass("");
           $(".btnEvd").prop("disabled", false);
           $(".btnEvd").css("cursor", "");
           if(data.status==="success"){
             swal("Successful","Record saved successfully","success");
             $(".closePop").click();  
             fetchEvd();
           }else if(data.status==="expire"){
             window.location = $online__access__tag + "auth";  
           }else{
             swal("Error","Failed to save record. Please try again!","error");  
           }
        },
        error: function(err) {
            console.log(err);
        }
    });
}

    
    
    function postUpdateLoanAcc(){
    var fd = new FormData();
    fd.append("cid", $("#cid").val());
    if($("#sid1").val()!=="none"){
     fd.append("image", $("#sid1").val());   
    }
    fd.append("title", $("#title").val());
    fd.append("gender", $("#gender").val());
    fd.append("surname", $("#surname").val());
    fd.append("othername", $("#othername").val());
    fd.append("phone", $("#phone").val());
    fd.append("dob", $("#dob").val());
    fd.append("dependant", $("#dependant").val());
    fd.append("identification", $("#identification").val());
    fd.append("idno", $("#idno").val());
    fd.append("dateofissue", $("#dateofissue").val());
    fd.append("expiry", $("#expiry").val());
    fd.append("namebusiness", $("#namebusiness").val());
    fd.append("address", $("#address").val());
    fd.append("location", $("#location").val());
    fd.append("telno", $("#telno").val());
    fd.append("noofyears", $("#noofyears").val());
    fd.append("emptype", $("#emptype").val());
    fd.append("employer", $("#employer").val());
    fd.append("position", $("#position").val());
    fd.append("employertel", $("#employertel").val());
    fd.append("netsalary", $("#netsalary").val());
    fd.append("bdirection", $("#bdirection").val());
    fd.append("rdirection", $("#rdirection").val());
    $.ajax({
          url:""+$online__access__tag+"processor/postUpdateLoanAcc",
          type:"POST",
          data: fd,
          dataType: 'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
           $(".btnSaveLoanAcc > i").removeClass().addClass("fa fa-spinner fa-spin");
           $(".btnSaveLoanAcc").prop("disabled", true);
           $(".btnSaveLoanAcc").css("cursor", "no-drop");
          },
          success:function(data)
          {
           $(".btnSaveLoanAcc > i").removeClass().addClass("");
           $(".btnSaveLoanAcc").prop("disabled", false);
           $(".btnSaveLoanAcc").css("cursor", "");
           if(data.status==="success"){
             swal("Successful","Record has been updated successfully","success");
           }else if(data.status==="expire"){
             window.location = $online__access__tag + "auth";  
           }else{
             swal("Error","Record update failed. Please try again!","error");  
           }
        },
        error: function(err) {
           alert(err.responseText)
           console.log(err);
           $(".btnSaveLoanAcc > i").removeClass().addClass("");
           $(".btnSaveLoanAcc").prop("disabled", false);
           $(".btnSaveLoanAcc").css("cursor", "");
        }
    });
}

    
    function postCreateLoanAccount(){
    var fd = new FormData();
    fd.append("appdate", $("#appdate").val());
    fd.append("newdate", $("#massDate").val());
    fd.append("image", $("#sid1").val());
    fd.append("title", $("#title").val());
    fd.append("category", $("#category").val());
    fd.append("gender", $("#gender").val());
    fd.append("surname", $("#surname").val());
    fd.append("othername", $("#othername").val());
    fd.append("phone", $("#phone").val());
    fd.append("dob", $("#dob").val());
    fd.append("dependant", $("#dependant").val());
    fd.append("identification", $("#identification").val());
    fd.append("idno", $("#idno").val());
    fd.append("dateofissue", $("#dateofissue").val());
    fd.append("expiry", $("#expiry").val());
    fd.append("namebusiness", $("#namebusiness").val());
    fd.append("address", $("#address").val());
    fd.append("location", $("#location").val());
    fd.append("telno", $("#telno").val());
    fd.append("noofyears", $("#noofyears").val());
    fd.append("emptype", $("#emptype").val());
    fd.append("employer", $("#employer").val());
    fd.append("position", $("#position").val());
    fd.append("employertel", $("#employertel").val());
    fd.append("netsalary", $("#netsalary").val());
    fd.append("bdirection", $("#bdirection").val());
    fd.append("rdirection", $("#rdirection").val());
    $.ajax({
          url:""+$online__access__tag+"processor/postRegisterLoan",
          type:"POST",
          data: fd,
          dataType: 'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
           $(".btnCreateLoan > i").removeClass().addClass("fa fa-spinner fa-spin");
           $(".btnCreateLoan").prop("disabled", true);
           $(".btnCreateLoan").css("cursor", "no-drop");
          },
          success:function(data)
          {
           $(".btnCreateLoan > i").removeClass().addClass("");
           $(".btnCreateLoan").prop("disabled", false);
           $(".btnCreateLoan").css("cursor", "");
           if(data.status==="success"){
             swal("Successful","Applicant registered successfully","success");

            $("#title").val("");
            $("#gender").val("");
            $("#surname").val("");
            $("#othername").val("");
            $("#phone").val("");
            $("#dob").val("");
            $("#dependant").val("");
            $("#identification").val("");
            $("#idno").val("");
            $("#dateofissue").val("");
            $("#expiry").val("");
            $("#namebusiness").val("");
            $("#address").val("");
            $("#location").val("");
            $("#telno").val("");
            $("#noofyears").val("");
            $("#employer").val("");
            $("#position").val("");
            $("#employertel").val("");
            $("#netsalary").val("");
            $("#bdirection").val("");
            $("#rdirection").val("");

           }else if(data.status==="exist"){
             swal("Exist!","Applicant already exist!","error"); 
           }else if(data.status==="expire"){
             window.location = $online__access__tag + "auth";  
           }else{
             swal("Error","Failed to save record. Please try again!","error");  
           }
        },
        error: function(err) {
           alert(err.responseText)
           console.log(err);
           $(".btnCreateLoan > i").removeClass().addClass("");
           $(".btnCreateLoan").prop("disabled", false);
           $(".btnCreateLoan").css("cursor", "");
        }
    });
}
    
    
    function postMassDeposit(){
    var fd = new FormData();
    fd.append("newdate", $("#massDate").val());
    fd.append("amount", $("#massAmount").val());
    $.ajax({
          url:""+$online__access__tag+"processor/postMassDeposit",
          type:"POST",
          data: fd,
          dataType: 'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
           $(".btnMass > i").removeClass().addClass("fa fa-spinner fa-spin");
           $(".btnMass").prop("disabled", true);
           $(".btnMass").css("cursor", "no-drop");
          },
          success:function(data)
          {
           $(".btnMass > i").removeClass().addClass("");
           $(".btnMass").prop("disabled", false);
           $(".btnMass").css("cursor", "");
           if(data.status==="success"){
             swal("Successful","Record saved successfully","success");
             $(".closePop").click();  
             fetchMassDeposit();
           }else if(data.status==="exist"){
             swal("Exist!","Entry already exist for today","error");
             $(".closePop").click();  
           }else if(data.status==="expire"){
             window.location = $online__access__tag + "auth";  
           }else{
             swal("Error","Failed to save record. Please try again!","error");  
           }
        },
        error: function(err) {
            console.log(err);
        }
    });
}
  
    function postClerk(){
    var fd = new FormData();
    fd.append("newdate", $("#clDate").val());
    fd.append("amount", $("#clkAmount").val());
    $.ajax({
          url:""+$online__access__tag+"processor/postClerk",
          type:"POST",
          data: fd,
          dataType: 'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
           $(".btnClerk > i").removeClass().addClass("fa fa-spinner fa-spin");
           $(".btnClerk").prop("disabled", true);
           $(".btnClerk").css("cursor", "no-drop");
          },
          success:function(data)
          {
           $(".btnClerk > i").removeClass().addClass("");
           $(".btnClerk").prop("disabled", false);
           $(".btnClerk").css("cursor", "");
           if(data.status==="success"){
             swal("Successful","Record saved successfully","success");
             $(".closePop").click();  
             fetchClerk();
           }else if(data.status==="expire"){
             window.location = $online__access__tag + "auth";  
           }else{
             swal("Error","Failed to save record. Please try again!","error");  
           }
        },
        error: function(err) {
            console.log(err);
        }
    });
}

    function postSales(){
    var pcode =  $("#salProduct").val().trim();
    var quantity =  $("#salQuantity").val().trim();
    var fd = new FormData();
    fd.append("newdate", $("#salDate").val());
    fd.append("pcode", pcode);
    fd.append("quantity", quantity);
    fd.append("name", $("#salName").val());
    fd.append("gcard", $("#salGCard").val());
    fd.append("number", $("#salNumber").val());
    fd.append("pin", $("#salPin").val());
    $.ajax({
          url:""+$online__access__tag+"processor/postSale",
          type:"POST",
          data: fd,
          dataType: 'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
           $(".btnSale > i").removeClass().addClass("fa fa-spinner fa-spin");
           $(".btnSale").prop("disabled", true);
           $(".btnSale").css("cursor", "no-drop");
          },
          success:function(data)
          {
           $(".btnSale > i").removeClass().addClass("");
           $(".btnSale").prop("disabled", false);
           $(".btnSale").css("cursor", "");
           if(data.status==="success"){
             swal("Successful","Record saved successfully","success");
             $(".closePop").click();  
             fetchSales();
           }else if(data.status==="expire"){
             window.location = $online__access__tag + "auth";  
           }else{
             swal("Error","Failed to save record. Please try again!","error");  
           }
        },
        error: function(err) {
            //alert(err.responseText)
            console.log(err);
        }
    });
}

    function postDailyRecordUpdate(){
    var date =  $("#momoDate1").val().trim();
    var deposit =  $("#momoDeposit1").val().trim();
    var cashout =  $("#momoCashout1").val().trim();
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
    var accno = $("#idAccNo1").val().trim();
    var subscribed = $("#idSubscribed").val().trim();
    var newsub = $("#idNew").val().trim();
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



    
               function postPayLoan(){
                var fd = new FormData();
                fd.append("paydate", $("#paydate").val());
                fd.append("loanid", $("#idAppLoan").val());
                fd.append("accno", $("#regNo").val().trim());
                fd.append("amount", $("#payAmt").val());
                $.ajax({
                      url:""+$online__access__tag+"processor/postLoanPayment",
                      type:"POST",
                      data: fd,
                      dataType:'json',
                      contentType: false,       
                      cache: false, 
                      processData:false,
                      beforeSend:function()
                      {
                        $(".btnPayLoan > i").removeClass().addClass("fa fa-spinner fa-spin");
                        $(".btnPayLoan").prop("disabled", true);
                        $(".btnPayLoan").css("cursor", "no-drop");
                      },
                      success:function(data)
                      {
                       $(".btnPayLoan > i").removeClass().addClass("");
                       $(".btnPayLoan").prop("disabled", false);
                       $(".btnPayLoan").css("cursor", "");
                       
                       if(data.status == "success"){
                        send_sms_loan($("#idAppLoan").val(), "payment", $("#payAmt").val());
                         $(".closePop").click();
                       if(data.repay_status==="complete"){
                        swal('Success', 'Payment is successful! Loan Repayment is completed.','success');
                       }else{
                        swal('Success', 'Payment is successful!','success');
                       }
                         fetchLoan();
                      }else if(data.status == 'failed'){
                         swal('Error', 'Failed to submit Loan. Please try again!', 'error');
                      }else if(data.status == 'expire'){
                         alert("Session has expired. Click Ok to Login");
                         window.location = $online__access__tag + "auth"; 
                      }
                    },
                    error: function(err) {
                       $(".btnPayLoan > i").removeClass().addClass("");
                       $(".btnPayLoan").prop("disabled", false);
                       $(".btnPayLoan").css("cursor", "");
                       console.log(err);
                    }
                });
        }
    
    
                function postNewLoan(){
                if($("#pstatus").val()==="1"){
                var fd = new FormData();
                fd.append("crdate", $("#crdate").val());
                fd.append("accno", $("#loancode").val().trim());
                fd.append("product", loanprod);
                fd.append("amount", $("#reqamt").val());
                fd.append("formfee", $("#amtpaid").val());
                fd.append("colat", $("#colat").val());
                fd.append("maturity", $("#maturity").val().trim());
                fd.append("capacity", $("#capacity").val());
                 $.ajax({
                      url:""+$online__access__tag+"processor/postNewLoan",
                      type:"POST",
                      data: fd,
                      dataType:'json',
                      contentType: false,       
                      cache: false, 
                      processData:false,
                      beforeSend:function()
                      {
                        $(".btnSubmitLoanReq > i").removeClass().addClass("fa fa-spinner fa-spin");
                        $(".btnSubmitLoanReq").prop("disabled", true);
                        $(".btnSubmitLoanReq").css("cursor", "no-drop");
                      },
                      success:function(data)
                      {
                       $(".btnSubmitLoanReq > i").removeClass().addClass("");
                       $(".btnSubmitLoanReq").prop("disabled", false);
                       $(".btnSubmitLoanReq").css("cursor", "");
                       
                       if(data.status == "success"){
                         $(".closePop").click();
                         swal('Done', 'Loan Request submitted successfully', 'success');
                         fetchLoan();
                      }else if(data.status == 'failed'){
                         swal('Error', 'Failed to submit Loan. Please try again!', 'error');
                      }else if(data.status == 'exist'){
                         swal('Request Failed', 'Sorry! This Applicant has an Active Loan. Request Failed!', 'error');
                      }else if(data.status == 'expire'){
                         alert("Session has expired. Click Ok to Login");
                         window.location = $online__access__tag + "auth"; 
                      }
                    },
                    error: function(err) {
                       alert(err.responseText);
                       $(".btnSubmitLoanReq > i").removeClass().addClass("");
                       $(".btnSubmitLoanReq").prop("disabled", false);
                       $(".btnSubmitLoanReq").css("cursor", "");
                       console.log(err);
                    }
                });
            }else{
             alert("Please pay Form & Processing Fee");
            }
        }
    
    
    
    
    
    function postCashPay(){
    var fd = new FormData();
    fd.append("date", $("#pDate").val());
    fd.append("category", $("#pCategory").val());
    fd.append("denomination", amText);
    fd.append("amount", $("#pAmount").val());
    
    if($("#pPaid").val()==="1"){ 
     fd.append("paid", $("#pOName").val());   
    }else{
     fd.append("paid", $("#pPaid").val());  
    }

    if($("#pRec").val()==="1"){ 
     fd.append("recby", $("#pRName").val());   
    }else{
     fd.append("recby", $("#pRec").val());
    }

    if($("#custCat").val()==="1"){
     fd.append("customer", $("#idCashAgentCust").val()); 
    }else if($("#custCat").val()==="2"){
     fd.append("customer", $("#idPayCust").val()); 
    }else if($("#custCat").val()==="3"){
     fd.append("customer", $("#pCName").val()); 
    }
        
    $.ajax({
          url:""+$online__access__tag+"processor/postCashPay",
          type:"POST",
          data: fd,
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
            $(".btnSubmitCash > i").removeClass().addClass("fa fa-spinner fa-spin");
            $(".btnSubmitCash").prop("disabled", true);
            $(".btnSubmitCash").css("cursor", "no-drop");
          },
          success:function(data)
          {
            $(".btnSubmitCash > i").removeClass().addClass("");
            $(".btnSubmitCash").prop("disabled", false);
            $(".btnSubmitCash").css("cursor", "");
            if(data.status==="success"){
              $("#pDate").val("");
              $("#idPayCust").val("");
              $("#pCategory").val("");
              $("#pAmount").val("");
              $("#pPaid").val("");
              $("#pRec").val("");
              $(".closePop").click();

               $("#idDenNo200").val("0");
               $("#idDenNo100").val("0");
               $("#idDenNo50").val("0");
               $("#idDenNo20").val("0");
               $("#idDenNo10").val("0");
               $("#idDenNo5").val("0");
               $("#idDenNo2").val("0");
               $("#idDenNo1").val("0");
               $("#idDenNoC").val("0");

               $("#idAmt200").html("");
               $("#idAmt100").html("");
               $("#idAmt50").html("");
               $("#idAmt20").html("");
               $("#idAmt10").html("");
               $("#idAmt5").html("");
               $("#idAmt2").html("");
               $("#idAmt1").html("");
               $("#idAmtC").html("");

               $("#custCat").val("");
               $("#idCashAgentCust").val("");
               $("#idPayCust").val("");
               $("#pCName").val("");

              fetchCash();
              fetchCashReport();
              swal("Successful","Transaction recorded successfully","success");  
            }else if(data.status==="failed"){
               swal("Failed","Failed recording data","error");    
            }else{
              window.location = $online__access__tag + "auth";   
            }
          },
        error: function(err) {
            alert(err.responseText)
            $(".btnSubmitCash > i").removeClass().addClass("");
            $(".btnSubmitCash").prop("disabled", false);
            $(".btnSubmitCash").css("cursor", "");
            console.log(err);
        }
    });
}




    function postOvers(ttype){
    var fd = new FormData();
    if(ttype==="1"){
    fd.append("date", $("#oDate").val());
    fd.append("type", $("#oType").val());
    fd.append("excess", $("#oAmount").val());
    fd.append("amount", $("#oOrigAmount").val());
    fd.append("remark", $("#oRemark").val());
    fd.append("check", $("#oCheck").val());
    }else{
    fd.append("date", $("#sDate").val());
    fd.append("type", $("#sType").val()); 
    fd.append("excess", $("#sAmount").val());
    fd.append("amount", $("#sOrigAmount").val());
    fd.append("remark", $("#sRemark").val());
    fd.append("check", $("#sCheck").val());   
    }
    fd.append("ttype", ttype);
    $.ajax({
          url:""+$online__access__tag+"processor/postOvers",
          type:"POST",
          data: fd,
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
            $(".btnSubmitOvers > i").removeClass().addClass("fa fa-spinner fa-spin");
            $(".btnSubmitOvers").prop("disabled", true);
            $(".btnSubmitOvers").css("cursor", "no-drop");
          },
          success:function(data)
          {
            $(".btnSubmitOvers > i").removeClass().addClass("");
            $(".btnSubmitOvers").prop("disabled", false);
            $(".btnSubmitOvers").css("cursor", "");
            if(data.status==="success"){
             if(ttype==="1"){
              $("#oDate").val("");
              $("#oType").val("");
              $("#oAmount").val("");
              $("#oRemark").val("");
             }else{
              $("#sDate").val("");
              $("#sType").val("");
              $("#sAmount").val("");
              $("#sRemark").val("");
             }
              $(".closePop").click();
              fetchOReq();
               if(sessionStorage.getItem("role")==="1"){
                    fetchOReport("0", "0",null);
                }else{
                   fetchOReport("0", "0", $("#idUser").val()); 
              }
              if(sessionStorage.getItem("status")==="1"){
                swal("Successful","Transaction recorded successfully","success"); 
            }else{
                swal("Thank you.","Record has been submitted to Administrator for Approval","success"); 
             }
               
            }else if(data.status==="failed"){
               swal("Failed","Failed recording data","error");    
            }else{
              window.location = $online__access__tag + "auth";   
            }
          },
        error: function(err) {
            alert(err.responseText)
            $(".btnSubmitOvers > i").removeClass().addClass("");
            $(".btnSubmitOvers").prop("disabled", false);
            $(".btnSubmitOvers").css("cursor", "");
            console.log(err);
        }
    });
}
    
    function postERequisition(){
    var fd = new FormData();
    fd.append("date", $("#eDate").val());
    fd.append("amount", $("#eAmount").val());
    fd.append("purchaser", $("#ePurchaser").val());
    fd.append("bank", $("#eBank").val());
    fd.append("token", $("#ideToken").val());
    fd.append("transport", $("#eTransport").val())
    $.ajax({
          url:""+$online__access__tag+"processor/postEReq",
          type:"POST",
          data: fd,
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
            $(".btnSubmitReq > i").removeClass().addClass("fa fa-spinner fa-spin");
            $(".btnSubmitReq").prop("disabled", true);
            $(".btnSubmitReq").css("cursor", "no-drop");
          },
          success:function(data)
          {
            $(".btnSubmitReq > i").removeClass().addClass("");
            $(".btnSubmitReq").prop("disabled", false);
            $(".btnSubmitReq").css("cursor", "");
            if(data.status==="success"){
              $("#eDate").val("");
              $("#eAmount").val("");
              $("#ideToken").val("");
              $("#eTransport").val("");
              $(".closePop").click();
              fetchReq();
              fetchEReqReport();
              swal("Successful","Transaction recorded successfully","success");  
            }else if(data.status==="failed"){
               swal("Failed","Failed recording data","error");    
            }else{
              window.location = $online__access__tag + "auth";   
            }
          },
        error: function(err) {
            $(".btnSubmitReq > i").removeClass().addClass("");
            $(".btnSubmitReq").prop("disabled", false);
            $(".btnSubmitReq").css("cursor", "");
            console.log(err);
        }
    });
}




    function postBulk(){
    var fd = new FormData();
    fd.append("date", $("#bDate").val());
    fd.append("amount", $("#bAmount").val());
    fd.append("fee", $("#bFee").val());
    fd.append("procby", $("#bProcBy").val());
    fd.append("evdno", $("#idEvdCust").val());

    if($("#custCatSel").val()==="1"){
     fd.append("customer", $("#idCashAgentCustSel").val()); 
     fd.append("category", "1");
    }else if($("#custCatSel").val()==="2"){
     fd.append("customer", $("#idPayCustSel").val()); 
     fd.append("category", "2");
    }else if($("#custCatSel").val()==="3"){
     fd.append("customer", $("#pCNameSel").val()); 
     fd.append("category", "3");
    }
    if($("#custCat").val()==="1"){
     fd.append("paidin", $("#idCashAgentCust").val()); 
    }else if($("#custCat").val()==="2"){
     fd.append("paidin", $("#idPayCust").val()); 
    }else if($("#custCat").val()==="3"){
     fd.append("paidin", $("#pCName").val()); 
    }
    $.ajax({
          url:""+$online__access__tag+"processor/postBulk",
          type:"POST",
          data: fd,
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
            $(".btnSubmitBulk > i").removeClass().addClass("fa fa-spinner fa-spin");
            $(".btnSubmitBulk").prop("disabled", true);
            $(".btnSubmitBulk").css("cursor", "no-drop");
          },
          success:function(data)
          {
            $(".btnSubmitBulk > i").removeClass().addClass("");
            $(".btnSubmitBulk").prop("disabled", false);
            $(".btnSubmitBulk").css("cursor", "");
            if(data.status==="success"){
              $("#idBulkCust").val("");
              $("#bAgentNo").val("");
              $("#bAgentCust").val("");
              $("#bAmount").val("");
              $("#bFee").val("");
              $("#bAgentCust").val("");
              $("#idCashAgentCust").val("");
              $("#idPayCust").val("");
              $("#pCName").val("");
              $("#bOName").val("");
              $("#bProcBy").val("");
              $("#custCat").val("");
              $(".closePop").click();
              $("#idEvdCust").val("");
              $("#custCatSel").val("");
              $("#bDate").val("");
              $("#idPayCustSel").val("");
              $("#idCashAgentCustSel").val("");
              $("#pCNameSel").val("");
              fetchBulkCash();
              fetchBulkReport();
              swal("Successful","Transaction recorded successfully","success");  
            }else if(data.status==="failed"){
               swal("Failed","Failed recording data","error");    
            }else{
              window.location = $online__access__tag + "auth";   
            }
          },
        error: function(err) {
            $(".btnSubmitBulk > i").removeClass().addClass("");
            $(".btnSubmitBulk").prop("disabled", false);
            $(".btnSubmitBulk").css("cursor", "");
            console.log(err);
            alert(err.responseText);
        }
    });
}

    
     function postECash(){
     var category = $("#idCashCat").val();
     if(category==="1"){
       agentid=$("#idCashAgent").val(); 
     }else{
        agentid=$("#idCashCust").val();
     }
    var fd = new FormData();
    fd.append("date", $("#cashDate").val());
    fd.append("category", category);
    fd.append("agentid", agentid);
    fd.append("amount", $("#cashAmt").val());
    fd.append("fee", cfee);
    fd.append("payable", removeCommas($("#amtPayable").val()));
    fd.append("pstatus", $("#idCashStatus").val());
    $.ajax({
          url:""+$online__access__tag+"processor/postECash",
          type:"POST",
          data: fd,
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
            $(".btnSubmitECash > i").removeClass().addClass("fa fa-spinner fa-spin");
            $(".btnSubmitECash").prop("disabled", true);
            $(".btnSubmitECash").css("cursor", "no-drop");
          },
          success:function(data)
          {
            $(".btnSubmitECash > i").removeClass().addClass("");
            $(".btnSubmitECash").prop("disabled", false);
            $(".btnSubmitECash").css("cursor", "");
            if(data.status==="success"){
              $("#cashAmt").val("");
              $("#cashFee").val("");
              $("#amtPayable").val("");
              $(".closePop").click();
              fetchECash();
              fetchEReport();
              swal("Successful","Transaction recorded successfully","success");  
               setTimeout(function() {
                  location.reload();
                }, 3000);
            }else if(data.status==="failed"){
               swal("Failed","Failed recording data","error");    
            }else{
              window.location = $online__access__tag + "auth";   
            }
          },
        error: function(err) {
            $(".btnSubmitECash > i").removeClass().addClass("");
            $(".btnSubmitECash").prop("disabled", false);
            $(".btnSubmitECash").css("cursor", "");
            console.log(err);
            alert(err.responseText);
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
                $(".clCloseUpdt").click();
                fetchDeduction();
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
     var loanPenalty = $("#loanPenalty").val();

    var fd = new FormData();
    fd.append("loanName", loanName);
    fd.append("loanCode", loanCode);
    fd.append("loanMinAmnt", loanMinAmnt);
    fd.append("loanMaxnAmnt", loanMaxnAmnt);
    fd.append("loanFormFee", loanFormFee);
    fd.append("loanProcessFee", loanProcessFee);
    fd.append("loanInterest", loanInterest);
    fd.append("loanPenalty", loanPenalty);
    $.ajax({
          url:""+$online__access__tag+"processor/postLoanProduct",
          type:"POST",
          data: fd,
          dataType:"json",
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
                $(".btnPostLoan > i").removeClass().addClass("fa fa-spinner fa-spin");
                $(".btnPostLoan").prop("disabled", true);
                $(".btnPostLoan").css("cursor", "no-drop");
          },
          success:function(data)
          {
               $(".btnPostLoan > i").removeClass().addClass("");
               $(".btnPostLoan").prop("disabled", false);
               $(".btnPostLoan").css("cursor", "");
              if(data.status === "success"){
               $(".closePop").click();
               swal('Success', 'Loan Product created successfully', 'success');
               fetchLoanProduct();
              }else if(data.status === "exist"){
               $(".closePop").click();
               swal('Product Exist!', 'Loan Product already Exist', 'info');
              }else{
                 swal('Error', 'Failed adding product. Please try again!', 'success');
           }
        },
        error: function(err) {
            $(".btnPostLoan > i").removeClass().addClass("");
            $(".btnPostLoan").prop("disabled", false);
            $(".btnPostLoan").css("cursor", "");
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
              $("#btnDeductionUpdate > i").removeClass().addClass("fa fa-spinner fa-spin");
              $("#btnDeductionUpdate").prop("disabled", true);
              $("#btnDeductionUpdate").css("cursor", "no-drop");

              if(data == "0"){
                swal('Done', 'Record updated successfully', 'success');
                $(".clCloseUpdt").click();
                fetchDeduction();
              }else{
                swal('Error', 'Update failed', 'error');
              }
        },
        error: function(err) {
            $("#btnDeductionUpdate > i").removeClass().addClass("fa fa-spinner fa-spin");
            $("#btnDeductionUpdate").prop("disabled", true);
            $("#btnDeductionUpdate").css("cursor", "no-drop");
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
    //  if(!validationDate($("#idDate").val())){
    //   swal("Please Enter a Valid date");
    //  }else{
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
                $("#idAmount").val("");
                $(".clModalSuccess").modal(
                {
                backdrop: 'static',
                keyboard: false
                });

                setTimeout(function() {
                $(".clClose").click();
               }, 2000); 
               fetchBalInfo(account);
              }else if(data.status==="expire"){
                alert("Page expired! Click OK to Login");
                window.location = $online__access__tag + "auth"; 
              }else{
                swal('Error', 'Deposit failed', 'error');
              }
        },
        error: function(err) {
           alert(err.responseText)
        }
    });
     } 
    //}
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



  
    function postMomoCust(){
    var fd = new FormData();
    fd.append("fullname", $("#idMomoName").val());
    fd.append("phone", $("#idMomoPhone").val());
    fd.append("city", $("#idMomoTown").val());
    fd.append("category", $("#idMomoCat").val());
    if($("#idMomoCat").val()==="3"){
      fd.append("agentno", $("#idEvdNo").val());  
    }else{
      fd.append("agentno", $("#idAgentNo").val());  
    }
    fd.append("agentname", $("#idAgentName").val());
    fd.append("tcust", $("#idMomoCust").val());
    $.ajax({
          url:""+$online__access__tag+"processor/postMomoCust",
          type:"POST",
          data: fd,
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
                $(".btnSubmitMomoCust > i").removeClass().addClass("fa fa-spinner fa-spin");
                $(".btnSubmitMomoCust").prop("disabled", true);
                $(".btnSubmitMomoCust").css("cursor", "no-drop");
          },
          success:function(data)
          {
                $(".btnSubmitMomoCust > i").removeClass().addClass("");
                $(".btnSubmitMomoCust").prop("disabled", false);
                $(".btnSubmitMomoCust").css("cursor", ""); 
            if(data.status==="success"){
                $("#idMomoName").val("");
                $("#idMomoPhone").val("");
                $("#idMomoTown").val("");
                $("#idAgentNo").val("");
                $("#idMomoCust").val("");
                $("#idAgentName").val("");
                swal("Successful","MOMO Customer registration is successful","success");
            }else if(data.status==="failed"){
                swal("Failed","Failed to register MOMO customer","success");
            }else{
                window.location = $online__access__tag + "auth";  
            }
          },
          error: function(err) {
            $(".btnSubmitMomoCust > i").removeClass().addClass("");
                $(".btnSubmitMomoCust").prop("disabled", false);
                $(".btnSubmitMomoCust").css("cursor", "");
            swal('Error', 'Record update failed', 'error');
            console.log(err);
        }
    });
}



    function postWithdrawalUpdate(){
     var idDate = $("#idWithDate").val();
     var amount = $("#idWithAmount").val();
    var fd = new FormData();
    fd.append("id", $("#idCount").val());
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
     var idClientDob = $("#idClientDob").val();
     var idClientContact = $("#idClientContact").val();
     var idNextofKin = $("#idNextofKin").val();
     var idNextofKinContact = $("#idNextofKinContact").val();
     var idCity = $("#idCity").val();
     var idArea = $("#idArea").val();
     var idOccupation = $("#idOccupation").val();

    var fd = new FormData();
    fd.append("id", sessionStorage.getItem("id"));
    fd.append("firstname", $("#idFirstname").val());
    fd.append("lastname", $("#idSurname").val());
    fd.append("othername", $("#idOthername").val())
    fd.append("idClientDob", idClientDob);
    fd.append("idClientContact", idClientContact);
    fd.append("idNextofKin", idNextofKin);
    fd.append("idNextofKinContact", idNextofKinContact);
    fd.append("idCity", idCity);
    fd.append("idArea", idArea);
    fd.append("idOccupation", idOccupation);
    fd.append("image", $("#sid1").val());
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
                 setTimeout(function(){
                   window.location = $online__access__tag + sessionStorage.getItem("surl"); 
                 }, 2000); 
                 $(".modal-body").html(data.message);
         },
        error: function(err) {
                $("#idPostClientUpdate > i").removeClass().addClass("");
                $("#idPostClientUpdate").prop("disabled", false);
                $("#idPostClientUpdate").css("cursor", "");
                $("#idPostClientUpdate").html("Save Changes");
                swal("Error ocurred!","Something went wrong. Please report to sysem administrator","error");
        }
    });
}


      var today = new Date();
        $("#idDate40").prop("max", `${today.getUTCFullYear()}-${(today.getUTCMonth() + 1).toString().padStart(2, "0")}-${today.getUTCDate().toString().padStart(2, "0")}`);
        
        

     function formatNumberWithCommas(x) {
        return x.toLocaleString('us', {minimumFractionDigits: 2, maximumFractionDigits: 2});
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
    // if(!validationDate($("#idDate30").val())){
    //   swal("Please Enter a Valid date");
    //  }else{

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
    fd.append("image", $("#sid1").val());
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
               $("#idAmountWithdraw").val("");
               $("#idWithdrawalFee").html("");
                $(".clModalSuccess").modal(
                {
                backdrop: 'static',
                keyboard: false
                });

                setTimeout(function() {
                $(".clClose").click();
               }, 2000); 
               fetchBalInfo(account);
               sessionStorage.removeItem("custimage");
               $("#dispImage").hide();
            }else if(data.status === "expired"){
              window.location = $online__access__tag + "auth";  
            }else{
               swal("An error occured. Please contact System administrator");    
            }
        },
        error: function(err) {
            console.log(err);
            //alert(err.responseText);
          }
        });
      }
    }
 //}
}
    
    
    
    
    
      $("#btnPostWithdrawal").click(function(e){
       e.preventDefault();
       if(field_required_prompter('.checkWith',5000)==true)
      {
        custimage=$("#sid1").val();
        //if(custimage!=="none"){
         fetchMinimumBalance(sessionStorage.getItem("product"));
        // }else{
        //  alert("Please upload Customer Photo");
        // }
      }else{
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
    
    
    $("#idAmountWithdraw").keyup(function(){
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

        $('#idWithdrawalFee').html(" | Fee: GH¢"+fee).css("color","red").show();
    });


    $("#cashAmt").keyup(function(){
      amount=parseFloat($(this).val());
      rate=parseFloat($("#cashFee").val());
      cfee=amount*rate;
      if(amount){
      $("#amtPayable").val(money((amount*rate)+amount));
      }else{
       $("#amtPayable").val("");   
      }
    });

    
    $("#reqamt").keyup(function(){
     if($(this).val()){
      amount=parseFloat($(this).val());
      if(amount!==0){
       //fetchMinAmt(amount, loanprod);
      }
     }else{
        $("#shAmtErr").hide();
     }
    });
    
    
     $("#payAmt").keyup(function(){
      amount=$(this).val();
      regno=$("#regNo").val();
      loanid=$("#idAppLoan").val();
      if(parseFloat(amount)<parseFloat(sessionStorage.getItem("amttopay"))){
        $("#shExceed").html("Sorry, you can't pay less than GHS "+(money(parseFloat(sessionStorage.getItem("amttopay"))))+"").css("color","red").show();
        $(".btnPayLoan").prop("disabled",true); 
      }else{
        checkBalance(amount, regno, loanid);  
        $("#shExceed").hide();
        $(".btnPayLoan").prop("disabled",false); 
      }
    });

    
    function checkBalance(amount, regno, loanid){
    var fd = new FormData();
    fd.append("amount", amount);
    fd.append("accno", regno);
    fd.append("loanid", loanid);
    $.ajax({
          url:""+$online__access__tag+"processor/checkBalance",
          type:"POST",
          data:fd,
          contentType: false,       
          cache: false, 
           dataType: 'JSON',            
          processData:false,
          success:function(data)
        {
           if(data.status==="exceed"){
             $("#shExceed").html("Sorry amount cannot exceed the loan balance").css("color","red").show();
             $(".btnPayLoan").prop("disabled",true);
            }else{
             $("#shExceed").html("Sorry amount cannot exceed the loan balance").css("color","red").hide();
             $(".btnPayLoan").prop("disabled",false);  
            }
        },
        error: function(err) {
          //alert(err.responseText);
        }
    });
  }
    
    function fetchMinAmt(amount, code){
    var fd = new FormData();
    fd.append("accno", $("#loancode").val());
    fd.append("amount", amount);
    fd.append("code", code);
    $.ajax({
          url:""+$online__access__tag+"processor/fetchLoanProdDet",
          type:"POST",
          data:fd,
          contentType: false,       
          cache: false, 
           dataType: 'JSON',            
          processData:false,
          success:function(data)
        {
         if(data.min_amount!=="0"){
          if(amount < parseFloat(data.min_amount)){
            $("#shAmtErr").html("Amount must be GHS "+money(parseFloat(data.min_amount))+" or more").css('color','red').show();
            $(".btnSubmitLoanReq").prop("disabled", true);
          }else{
            $("#shAmtErr").hide();
            $(".btnSubmitLoanReq").prop("disabled", false);
           }
          }
          if(data.max_amount!=="0"){
            if(amount>parseFloat(data.max_amount)){
             $("#shAmtErr").html("Amount must not be more than "+money(parseFloat(data.max_amount))+"").css("color","red").show();   
             $(".btnSubmitLoanReq").prop("disabled", true);
            }else{
             $("#shAmtErr").hide();
             $(".btnSubmitLoanReq").prop("disabled", false);
            }
          }

            if(parseFloat(data.endamt)>2000){
            if(parseFloat(amount)>parseFloat(data.endamt)){
             $("#shAmtErr").html("Amount must not be more than "+money(parseFloat(data.endamt))+"").css("color","red").show();   
             $(".btnSubmitLoanReq").prop("disabled", true);  
            }else{
              $("#shAmtErr").hide();
              $(".btnSubmitLoanReq").prop("disabled", false);  
             }
            }else if(parseFloat(data.endamt)===2000 && parseFloat(amount)===2000){
             if(amount < parseFloat(data.min_amount)){
             $("#shAmtErr").html("Amount must be GHS "+money(parseFloat(data.min_amount))+" or more").css('color','red').show();
             $(".btnSubmitLoanReq").prop("disabled", true);
             }else{
             $("#shAmtErr").hide();
             $(".btnSubmitLoanReq").prop("disabled", false);
             }
            }else if(parseFloat(data.endamt)===2000 && parseFloat(amount)<2000){
             if(amount < parseFloat(data.min_amount)){
             $("#shAmtErr").html("Amount must be GHS "+money(parseFloat(data.min_amount))+" or more").css('color','red').show();
             $(".btnSubmitLoanReq").prop("disabled", true);
             }else{
             $("#shAmtErr").hide();
             $(".btnSubmitLoanReq").prop("disabled", false);
             }  
            }else{
             $("#shAmtErr").html("Amount must not be more than "+money(parseFloat(data.endamt))+"").css("color","red").show();   
             $(".btnSubmitLoanReq").prop("disabled", true);  
          }
        },
        error: function(err) {
          //alert(err.responseText);
        }
    });
}




    $("#idDenNo200").keyup(function(e){
      e.preventDefault();
      f200=200*parseFloat($("#idDenNo200").val());
      f100=100*parseFloat($("#idDenNo100").val());
      f50=50*parseFloat($("#idDenNo50").val());
      f20=20*parseFloat($("#idDenNo20").val());
      f10=10*parseFloat($("#idDenNo10").val());
      f5=5*parseFloat($("#idDenNo5").val());
      f2=2*parseFloat($("#idDenNo2").val());
      f1=1*parseFloat($("#idDenNo1").val());
      f0=1*parseFloat($("#idDenNoC").val());
      $("#idAmt200").html(money(200*$(this).val()));
      f200=f200?f200:0;
      f100=f100?f100:0;
      f50=f50?f50:0;
      f20=f20?f20:0;
      f10=f10?f10:0;
      f5=f5?f5:0;
      f2=f2?f2:0;
      f1=f1?f1:0;
      f0=f0?f0:0;
      total=f200+f100+f50+f20+f10+f5+f2+f1+f0;
      $("#pAmount").val(money(total));
      
         amtText1=""+$("#idDenNo200").val()!=="0"?"GHS 200 x "+$("#idDenNo200").val()+"<br>":"";
         amText2=$("#idDenNo100").val()!=="0"?"GHS 100 x "+$("#idDenNo100").val()+"<br>":"";
         amText3=$("#idDenNo50").val()!=="0"?"GHS 50 x "+$("#idDenNo50").val()+"<br>":"";
         amText4=$("#idDenNo20").val()!=="0"?"GHS 20 x "+$("#idDenNo20").val()+"<br>":"";
         amText5=$("#idDenNo10").val()!=="0"?"GHS 10 x "+$("#idDenNo10").val()+"<br>":"";
         amText6=$("#idDenNo5").val()!=="0"?"GHS 5 x "+$("#idDenNo5").val()+"<br>":"";
         amText7=$("#idDenNo1").val()!=="0"?"GHS 1 x "+$("#idDenNo1").val()+"<br>":"";
         amText0=$("#idDenNoC").val()!=="0"?"Coins GHS "+$("#idDenNoC").val()+"<br>":"";

         amText = amtText1+amText2+amText3+amText4+amText5+amText6+amText7+amText0;
    });

    


    $("#idDenNo100").keyup(function(e){
      e.preventDefault();
      f200=200*parseFloat($("#idDenNo200").val());
      f100=100*parseFloat($("#idDenNo100").val());
      f50=50*parseFloat($("#idDenNo50").val());
      f20=20*parseFloat($("#idDenNo20").val());
      f10=10*parseFloat($("#idDenNo10").val());
      f5=5*parseFloat($("#idDenNo5").val());
      f2=2*parseFloat($("#idDenNo2").val());
      f1=1*parseFloat($("#idDenNo1").val());
      f0=1*parseFloat($("#idDenNoC").val());
      $("#idAmt100").html(money(100*$(this).val()));
      f200=f200?f200:0;
      f100=f100?f100:0;
      f50=f50?f50:0;
      f20=f20?f20:0;
      f10=f10?f10:0;
      f5=f5?f5:0;
      f2=f2?f2:0;
      f1=f1?f1:0;
      f0=f0?f0:0;
      total=f200+f100+f50+f20+f10+f5+f2+f1+f0;
      $("#pAmount").val(money(total));
      
         amtText1=""+$("#idDenNo200").val()!=="0"?"GHS 200 x "+$("#idDenNo200").val()+"<br>":"";
         amText2=$("#idDenNo100").val()!=="0"?"GHS 100 x "+$("#idDenNo100").val()+"<br>":"";
         amText3=$("#idDenNo50").val()!=="0"?"GHS 50 x "+$("#idDenNo50").val()+"<br>":"";
         amText4=$("#idDenNo20").val()!=="0"?"GHS 20 x "+$("#idDenNo20").val()+"<br>":"";
         amText5=$("#idDenNo10").val()!=="0"?"GHS 10 x "+$("#idDenNo10").val()+"<br>":"";
         amText6=$("#idDenNo5").val()!=="0"?"GHS 5 x "+$("#idDenNo5").val()+"<br>":"";
         amText7=$("#idDenNo1").val()!=="0"?"GHS 1 x "+$("#idDenNo1").val()+"<br>":"";
         amText0=$("#idDenNoC").val()!=="0"?"Coins GHS "+$("#idDenNoC").val()+"<br>":"";

         amText = amtText1+amText2+amText3+amText4+amText5+amText6+amText7+amText0;
    });


      $("#idDenNo50").keyup(function(e){
      e.preventDefault();
      f200=200*parseFloat($("#idDenNo200").val());
      f100=100*parseFloat($("#idDenNo100").val());
      f50=50*parseFloat($("#idDenNo50").val());
      f20=20*parseFloat($("#idDenNo20").val());
      f10=10*parseFloat($("#idDenNo10").val());
      f5=5*parseFloat($("#idDenNo5").val());
      f2=2*parseFloat($("#idDenNo2").val());
      f1=1*parseFloat($("#idDenNo1").val());
      f0=1*parseFloat($("#idDenNoC").val());
      $("#idAmt50").html(money(50*$(this).val()));
      f200=f200?f200:0;
      f100=f100?f100:0;
      f50=f50?f50:0;
      f20=f20?f20:0;
      f10=f10?f10:0;
      f5=f5?f5:0;
      f2=f2?f2:0;
      f1=f1?f1:0;
      f0=f0?f0:0;
      total=f200+f100+f50+f20+f10+f5+f2+f1+f0;
      $("#pAmount").val(money(total));
      
         amtText1=""+$("#idDenNo200").val()!=="0"?"GHS 200 x "+$("#idDenNo200").val()+"<br>":"";
         amText2=$("#idDenNo100").val()!=="0"?"GHS 100 x "+$("#idDenNo100").val()+"<br>":"";
         amText3=$("#idDenNo50").val()!=="0"?"GHS 50 x "+$("#idDenNo50").val()+"<br>":"";
         amText4=$("#idDenNo20").val()!=="0"?"GHS 20 x "+$("#idDenNo20").val()+"<br>":"";
         amText5=$("#idDenNo10").val()!=="0"?"GHS 10 x "+$("#idDenNo10").val()+"<br>":"";
         amText6=$("#idDenNo5").val()!=="0"?"GHS 5 x "+$("#idDenNo5").val()+"<br>":"";
         amText7=$("#idDenNo1").val()!=="0"?"GHS 1 x "+$("#idDenNo1").val()+"<br>":"";
         amText0=$("#idDenNoC").val()!=="0"?"Coins GHS "+$("#idDenNoC").val()+"<br>":"";

         amText = amtText1+amText2+amText3+amText4+amText5+amText6+amText7+amText0;
    });


      $("#idDenNo20").keyup(function(e){
      e.preventDefault();
      f200=200*parseFloat($("#idDenNo200").val());
      f100=100*parseFloat($("#idDenNo100").val());
      f50=50*parseFloat($("#idDenNo50").val());
      f20=20*parseFloat($("#idDenNo20").val());
      f10=10*parseFloat($("#idDenNo10").val());
      f5=5*parseFloat($("#idDenNo5").val());
      f2=2*parseFloat($("#idDenNo2").val());
      f1=1*parseFloat($("#idDenNo1").val());
      f0=1*parseFloat($("#idDenNoC").val());
      $("#idAmt20").html(money(20*$(this).val()));
      f200=f200?f200:0;
      f100=f100?f100:0;
      f50=f50?f50:0;
      f20=f20?f20:0;
      f10=f10?f10:0;
      f5=f5?f5:0;
      f2=f2?f2:0;
      f1=f1?f1:0;
      f0=f0?f0:0;
      total=f200+f100+f50+f20+f10+f5+f2+f1+f0;
      $("#pAmount").val(money(total));
      
         amtText1=""+$("#idDenNo200").val()!=="0"?"GHS 200 x "+$("#idDenNo200").val()+"<br>":"";
         amText2=$("#idDenNo100").val()!=="0"?"GHS 100 x "+$("#idDenNo100").val()+"<br>":"";
         amText3=$("#idDenNo50").val()!=="0"?"GHS 50 x "+$("#idDenNo50").val()+"<br>":"";
         amText4=$("#idDenNo20").val()!=="0"?"GHS 20 x "+$("#idDenNo20").val()+"<br>":"";
         amText5=$("#idDenNo10").val()!=="0"?"GHS 10 x "+$("#idDenNo10").val()+"<br>":"";
         amText6=$("#idDenNo5").val()!=="0"?"GHS 5 x "+$("#idDenNo5").val()+"<br>":"";
         amText7=$("#idDenNo1").val()!=="0"?"GHS 1 x "+$("#idDenNo1").val()+"<br>":"";
         amText0=$("#idDenNoC").val()!=="0"?"Coins GHS "+$("#idDenNoC").val()+"<br>":"";

         amText = amtText1+amText2+amText3+amText4+amText5+amText6+amText7+amText0;
    });


    $("#idDenNo10").keyup(function(e){
      e.preventDefault();
      f200=200*parseFloat($("#idDenNo200").val());
      f100=100*parseFloat($("#idDenNo100").val());
      f50=50*parseFloat($("#idDenNo50").val());
      f20=20*parseFloat($("#idDenNo20").val());
      f10=10*parseFloat($("#idDenNo10").val());
      f5=5*parseFloat($("#idDenNo5").val());
      f2=2*parseFloat($("#idDenNo2").val());
      f1=1*parseFloat($("#idDenNo1").val());
      f0=1*parseFloat($("#idDenNoC").val());
      $("#idAmt10").html(money(10*$(this).val()));
       f200=f200?f200:0;
      f100=f100?f100:0;
      f50=f50?f50:0;
      f20=f20?f20:0;
      f10=f10?f10:0;
      f5=f5?f5:0;
      f2=f2?f2:0;
      f1=f1?f1:0;
      f0=f0?f0:0;
      total=f200+f100+f50+f20+f10+f5+f2+f1+f0;
      $("#pAmount").val(money(total));
      
         amtText1=""+$("#idDenNo200").val()!=="0"?"GHS 200 x "+$("#idDenNo200").val()+"<br>":"";
         amText2=$("#idDenNo100").val()!=="0"?"GHS 100 x "+$("#idDenNo100").val()+"<br>":"";
         amText3=$("#idDenNo50").val()!=="0"?"GHS 50 x "+$("#idDenNo50").val()+"<br>":"";
         amText4=$("#idDenNo20").val()!=="0"?"GHS 20 x "+$("#idDenNo20").val()+"<br>":"";
         amText5=$("#idDenNo10").val()!=="0"?"GHS 10 x "+$("#idDenNo10").val()+"<br>":"";
         amText6=$("#idDenNo5").val()!=="0"?"GHS 5 x "+$("#idDenNo5").val()+"<br>":"";
         amText7=$("#idDenNo1").val()!=="0"?"GHS 1 x "+$("#idDenNo1").val()+"<br>":"";
         amText0=$("#idDenNoC").val()!=="0"?"Coins GHS "+$("#idDenNoC").val()+"<br>":"";

         amText = amtText1+amText2+amText3+amText4+amText5+amText6+amText7+amText0;
    });

     $("#idDenNo5").keyup(function(e){
        e.preventDefault();
      f200=200*parseFloat($("#idDenNo200").val());
      f100=100*parseFloat($("#idDenNo100").val());
      f50=50*parseFloat($("#idDenNo50").val());
      f20=20*parseFloat($("#idDenNo20").val());
      f10=10*parseFloat($("#idDenNo10").val());
      f5=5*parseFloat($("#idDenNo5").val());
      f2=2*parseFloat($("#idDenNo2").val());
      f1=1*parseFloat($("#idDenNo1").val());
      f0=1*parseFloat($("#idDenNoC").val());
      $("#idAmt5").html(money(5*$(this).val()));
       f200=f200?f200:0;
      f100=f100?f100:0;
      f50=f50?f50:0;
      f20=f20?f20:0;
      f10=f10?f10:0;
      f5=f5?f5:0;
      f2=f2?f2:0;
      f1=f1?f1:0;
      f0=f0?f0:0;
      total=f200+f100+f50+f20+f10+f5+f2+f1+f0;
      $("#pAmount").val(money(total));
      
         amtText1=""+$("#idDenNo200").val()!=="0"?"GHS 200 x "+$("#idDenNo200").val()+"<br>":"";
         amText2=$("#idDenNo100").val()!=="0"?"GHS 100 x "+$("#idDenNo100").val()+"<br>":"";
         amText3=$("#idDenNo50").val()!=="0"?"GHS 50 x "+$("#idDenNo50").val()+"<br>":"";
         amText4=$("#idDenNo20").val()!=="0"?"GHS 20 x "+$("#idDenNo20").val()+"<br>":"";
         amText5=$("#idDenNo10").val()!=="0"?"GHS 10 x "+$("#idDenNo10").val()+"<br>":"";
         amText6=$("#idDenNo5").val()!=="0"?"GHS 5 x "+$("#idDenNo5").val()+"<br>":"";
         amText7=$("#idDenNo1").val()!=="0"?"GHS 1 x "+$("#idDenNo1").val()+"<br>":"";
         amText0=$("#idDenNoC").val()!=="0"?"Coins GHS "+$("#idDenNoC").val()+"<br>":"";

         amText = amtText1+amText2+amText3+amText4+amText5+amText6+amText7+amText0;
    });


    $("#idDenNo2").keyup(function(e){
        e.preventDefault();
      f200=200*parseFloat($("#idDenNo200").val());
      f100=100*parseFloat($("#idDenNo100").val());
      f50=50*parseFloat($("#idDenNo50").val());
      f20=20*parseFloat($("#idDenNo20").val());
      f10=10*parseFloat($("#idDenNo10").val());
      f5=5*parseFloat($("#idDenNo5").val());
      f2=2*parseFloat($("#idDenNo2").val());
      f1=1*parseFloat($("#idDenNo1").val());
      f0=1*parseFloat($("#idDenNoC").val());
      $("#idAmt2").html(money(2*$(this).val()));
       f200=f200?f200:0;
      f100=f100?f100:0;
      f50=f50?f50:0;
      f20=f20?f20:0;
      f10=f10?f10:0;
      f5=f5?f5:0;
      f2=f2?f2:0;
      f1=f1?f1:0;
      f0=f0?f0:0;
      total=f200+f100+f50+f20+f10+f5+f2+f1+f0;
      $("#pAmount").val(money(total));
      
         amtText1=""+$("#idDenNo200").val()!=="0"?"GHS 200 x "+$("#idDenNo200").val()+"<br>":"";
         amText2=$("#idDenNo100").val()!=="0"?"GHS 100 x "+$("#idDenNo100").val()+"<br>":"";
         amText3=$("#idDenNo50").val()!=="0"?"GHS 50 x "+$("#idDenNo50").val()+"<br>":"";
         amText4=$("#idDenNo20").val()!=="0"?"GHS 20 x "+$("#idDenNo20").val()+"<br>":"";
         amText5=$("#idDenNo10").val()!=="0"?"GHS 10 x "+$("#idDenNo10").val()+"<br>":"";
         amText6=$("#idDenNo5").val()!=="0"?"GHS 5 x "+$("#idDenNo5").val()+"<br>":"";
         amText7=$("#idDenNo1").val()!=="0"?"GHS 1 x "+$("#idDenNo1").val()+"<br>":"";
         amText0=$("#idDenNoC").val()!=="0"?"Coins GHS "+$("#idDenNoC").val()+"<br>":"";

         amText = amtText1+amText2+amText3+amText4+amText5+amText6+amText7+amText0;
    });

     $("#idDenNo1").keyup(function(e){
      e.preventDefault();
      f200=200*parseFloat($("#idDenNo200").val());
      f100=100*parseFloat($("#idDenNo100").val());
      f50=50*parseFloat($("#idDenNo50").val());
      f20=20*parseFloat($("#idDenNo20").val());
      f10=10*parseFloat($("#idDenNo10").val());
      f5=5*parseFloat($("#idDenNo5").val());
      f2=2*parseFloat($("#idDenNo2").val());
      f1=1*parseFloat($("#idDenNo1").val());
      f0=1*parseFloat($("#idDenNoC").val());
      $("#idAmt1").html(money(1*$(this).val()));
       f200=f200?f200:0;
      f100=f100?f100:0;
      f50=f50?f50:0;
      f20=f20?f20:0;
      f10=f10?f10:0;
      f5=f5?f5:0;
      f2=f2?f2:0;
      f1=f1?f1:0;
      f0=f0?f0:0;
      total=f200+f100+f50+f20+f10+f5+f2+f1+f0;
      $("#pAmount").val(money(total));
      
         amtText1=""+$("#idDenNo200").val()!=="0"?"GHS 200 x "+$("#idDenNo200").val()+"<br>":"";
         amText2=$("#idDenNo100").val()!=="0"?"GHS 100 x "+$("#idDenNo100").val()+"<br>":"";
         amText3=$("#idDenNo50").val()!=="0"?"GHS 50 x "+$("#idDenNo50").val()+"<br>":"";
         amText4=$("#idDenNo20").val()!=="0"?"GHS 20 x "+$("#idDenNo20").val()+"<br>":"";
         amText5=$("#idDenNo10").val()!=="0"?"GHS 10 x "+$("#idDenNo10").val()+"<br>":"";
         amText6=$("#idDenNo5").val()!=="0"?"GHS 5 x "+$("#idDenNo5").val()+"<br>":"";
         amText7=$("#idDenNo1").val()!=="0"?"GHS 1 x "+$("#idDenNo1").val()+"<br>":"";
         amText0=$("#idDenNoC").val()!=="0"?"Coins GHS "+$("#idDenNoC").val()+"<br>":"";

         amText = amtText1+amText2+amText3+amText4+amText5+amText6+amText7+amText0;
    });



     $("#idDenNoC").keyup(function(e){
      e.preventDefault();
      f200=200*parseFloat($("#idDenNo200").val());
      f100=100*parseFloat($("#idDenNo100").val());
      f50=50*parseFloat($("#idDenNo50").val());
      f20=20*parseFloat($("#idDenNo20").val());
      f10=10*parseFloat($("#idDenNo10").val());
      f5=5*parseFloat($("#idDenNo5").val());
      f2=2*parseFloat($("#idDenNo2").val());
      f1=1*parseFloat($("#idDenNo1").val());
      f0=1*parseFloat($("#idDenNoC").val());
      $("#idAmtC").html(money(1*$(this).val()));
      f200=f200?f200:0;
      f100=f100?f100:0;
      f50=f50?f50:0;
      f20=f20?f20:0;
      f10=f10?f10:0;
      f5=f5?f5:0;
      f2=f2?f2:0;
      f1=f1?f1:0;
      f0=f0?f0:0;
      total=f200+f100+f50+f20+f10+f5+f2+f1+f0;
      $("#pAmount").val(money(total));
      
         amtText1=""+$("#idDenNo200").val()!=="0"?"GHS 200 x "+$("#idDenNo200").val()+"<br>":"";
         amText2=$("#idDenNo100").val()!=="0"?"GHS 100 x "+$("#idDenNo100").val()+"<br>":"";
         amText3=$("#idDenNo50").val()!=="0"?"GHS 50 x "+$("#idDenNo50").val()+"<br>":"";
         amText4=$("#idDenNo20").val()!=="0"?"GHS 20 x "+$("#idDenNo20").val()+"<br>":"";
         amText5=$("#idDenNo10").val()!=="0"?"GHS 10 x "+$("#idDenNo10").val()+"<br>":"";
         amText6=$("#idDenNo5").val()!=="0"?"GHS 5 x "+$("#idDenNo5").val()+"<br>":"";
         amText7=$("#idDenNo1").val()!=="0"?"GHS 1 x "+$("#idDenNo1").val()+"<br>":"";
         amText0=$("#idDenNoC").val()!=="0"?"Coins GHS "+$("#idDenNoC").val()+"<br>":"";

         amText = amtText1+amText2+amText3+amText4+amText5+amText6+amText7+amText0;
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
            if(data.fee_array[0]!=='none'){
             historyDatableF(data.fee_array);   
            }
            if(data.interest_array[0]!=='none'){
             historyDatableI(data.interest_array);   
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
             $("#idBalance").html("Balance: "+money(parseFloat(data[0].balance))); 
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
    fd.append("client_id", client_id);
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
              console.log(data)
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
            console.log(err)
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


    // if(controller.includes("register")){
    //   $('#modalReg').modal(
    //   {
    //     backdrop: 'static',
    //     keyboard: false
    //     }
    //   );
    // }
    

    // setInterval(function() {
    //  if(sessionStorage.getItem("role")==="1"){
    //      if(!controller.includes("revclient")&&!controller.includes("pending")){
    //       loadPending();  
    //      }
    //      //fetchOReq();
    //  }else{
    //     if(controller.includes("register")){
    //       if(sessionStorage.getItem("client_id")){
    //       if(sessionStorage.getItem("active")){
    //          //checkPending(sessionStorage.getItem("client_id"));  
    //       }
    //       }
    //     }
    //  } 
    // }, 2 * 5000);


    async function playWalkAudio() {
      var audio = new Audio('https://linksengineering.net/audio/sound.mp3');  
      audio.type = 'audio/mp3';
      try {
        await audio.play();
      } catch (err) {
        console.log('Failed to play...' + err);
      }
    }
    
    
    
    function loadDecline(){
    $.ajax({
          url:""+$online__access__tag+"processor/fetchDecline",
          type:"POST",
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
          },
          success:function(data)
          {
            if(data!=="none"){
              dataTblDecline(data);
            }
          },
          error: function(err) {
          //alert(err.responseText)
          console.log(err);
        }
    });
   }



    
    function loadPending(){
    $.ajax({
          url:""+$online__access__tag+"processor/fetchPending",
          type:"POST",
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
          },
          success:function(data)
          {
            if(data!=="none"){
              if(sessionStorage.getItem("role")==="1"){
                $(".clShowAlert").show();
                $(".clAlerts").html(data[0].count+" Registration");
                playWalkAudio();
                
                if(data.length > 0){
                  $(".clAppRev a").remove();
                  for(var i=0;i<data.length;i++){
                      var docTbl = '<a class="dropdown-item btnReview" href="revclient?key='+data[0].id+'">'+
                        '<span class="text-success">'+
                        '<strong>'+
                        '<i class="fa fa-user fa-fw"></i>'+data[0].id+'</strong>'+
                        '</span>'+
                        '<span class="small float-right text-muted">'+data[0].client+'</span>'+
                        '<div class="dropdown-message small">Review</div>'+
                        '</a>';
                      $(".clAppRev").append(docTbl);
                  }
                }
               }    
              dataTblPending(data);
            }
          },
          error: function(err) {
          console.log(err);
        }
    });
    $(".loader_container_sector").hide();
    }
   
   
   function checkPending(client_id){
    var fd = new FormData();
    fd.append("client_id", client_id);
    $.ajax({
          url:""+$online__access__tag+"processor/checkReview",
          type:"POST",
          data: fd,
          dataType:'json',
          contentType: false,       
          cache: false, 
          processData:false,
          success:function(data)
          {
          if(data.status==="approve"){
            $(".closePendPop").click(); 
            $('#popRegister').modal({
             backdrop: 'static',
             keyboard: false
            });  
            sessionStorage.removeItem("active");
          }else if(data.status==="disapprove"){
            sessionStorage.removeItem("active");
            $(".closePendPop").click();
            swal("Unsuccessful","Application was rejected","error");
          }
        },
        error: function(err) {
            //alert(err.responseText)
            console.log(err);
        }
    });
}

    
   function postRegistration() {
    var idFirstname = $("#idFirstname").val().trim();
    var idLastname =  $("#idLastname").val().trim();
    var idOthername = $("#idOthername").val();
    var idDob = $("#idDob").val();
    var idGender =  $("#idGender").val();
    var idContact1 =  $("#idContact1").val();
    var idNextofKin =  $("#idNextofKin").val();
    var idNextofKinContact =  $("#idNextofKinContact").val();
    var idCountry =  $("#idCountry").val();
    var idRegion =  $("#idRegion").val();
    var idCity =  $("#idCity").val().trim();
    var email =  $("#idEmail").val();
    var education =  $("#idEducation").val();
    var idResidence =  $("#idResidence").val();
    var idOccupation =  $("#idOccupation").val();
    var idIdentification =  $("#idIdentification").val();
    var idIdnumber =  $("#idIdnumber").val();
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
    fd.append("email", email);
    fd.append("education", education);
    fd.append("idResidence", idResidence);
    fd.append("idOccupation", idOccupation);
    fd.append("idIdentification", idIdentification);
    fd.append("idIdnumber", idIdnumber);
    fd.append("image", $("#sid1").val());
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
              sessionStorage.setItem("active","yes");
              sessionStorage.setItem("client_id",data.client_id);
              
                 $('#popRegister').modal(
                  {
                    backdrop: 'static',
                    keyboard: false
                    }
                  ); 
              
           }else if(data.status == "failed"){
             swal('Registration failed! Please try again');
           }else{

           }
        },
        error: function(err) {
            console.log(err);
          alert(err.responseText);
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
           //alert(err.responseText)
        }
    });
}



  
   $(document).on('change','#idCustPhoto',function(e){
     var fd = new FormData();
     var files = $('#idCustPhoto')[0].files[0];
     fd.append('file',files);
     uploadCustImage(fd);
    });


   
    function uploadCustImage(formdata){
    $.ajax({
        url:""+$online__access__tag+"processor/upload_file_img",
        type: 'post',
        data: formdata,
        contentType: false,
        processData: false,
        dataType: 'json',
        beforeSend:function()
        {
          $("#idPhotoProgress").html("Loading image.... Please wait!").css("color","red").show();
        },
        success: function(response){
        $("#idPhotoProgress").html("Image upload completed").css("color","green");
          setTimeout(function() {
            $("#idPhotoProgress").hide();       
          }, 4000);
          sessionStorage.setItem("custimage", response.name);
          addThumbnail(response);  
        },
         error: function(err) {
            $("#idPhotoProgress").html("An error occured while uploading file.").css("color","red");
            setTimeout(function() {
            $("#idPhotoProgress").hide();       
          }, 3000);
        }
    });
}


 function addThumbnail(data){
    var name = data.name;
    var src = data.src;
    $("#dispImage").show();
    $("#uplPhoto").attr("src", src);
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
              }else if(controller.includes("loan_members")){
                 fetchLoanMembers();
              }else if(controller.includes("mdeposit")){
                 fetchMassDeposit();
              }else if(controller.includes("deposit")){
                 loadDeposits();
              }else if(controller.includes("withdrawal")){
                 loadWithdrawals();
              }else if(controller.includes("loan-products")){
                 fetchLoanProduct();
              }else if(controller.includes("product")){
                 loadProduct();
              }else if(controller.includes("daily-record")){
                 loadMomoTrans();
              }else if(controller.includes("daily-sales")){
                 fromSales=true;
                 fetchSales();
              }else if(controller.includes("evd")){
                 fetchEvd();
              }else if(controller.includes("clerk")){
                 fetchClerk();
              }else if(controller.includes("attcomm")){
                 fetchAttComm();
              }else if(controller.includes("susu-comm")){
                 fetchSusuComm();
              }else if(controller.includes("mcustomers")){
                 fetchMomoCustomers();
              }else if(controller.includes("e-cash")){
                 fetchECash();
                 fetchEReport();
              }else if(controller.includes("e-form")){
                 fetchReq();
                 fetchEReqReport();
              }else if(controller.includes("cashpay")){
                 fetchCash();
                 fetchCashReport();
              }else if(controller.includes("btransfer")){
                 fetchBulkCash();
                 fetchBulkReport();
              }else if(controller.includes("create_loan")){
                 fetchLoan();
              }else if(controller.includes("ledger")){
                 fetchOReq();
               if(sessionStorage.getItem("role")==="1"){
                    fetchOReport("0", "0",null);
                }else{
                   fetchOReport("0", "0", $("#idUser").val()); 
                }
              }
            }
        },
        error: function(err) {
          alert(err.responseText)
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
          //alert(err.responseText);
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
            //alert(JSON.stringify(data))
            if(data != '0'){
                $(".loader_container_sector").hide();
               contributionDataTbl(data); 
            }else{
                  $(".loader_container_sector").hide();
            }
          
        },
        error: function(err) {
            //alert(err.responseText)
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

          },
          success:function(data)
          {
            if(data != "none"){
               deductionDataTbl(data); 
            }else{
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
            //alert(err.responseText)
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
                if(data!=="none"){
                  withdrawalDataTbl(data);   
                }    
            }
        },
        error: function(err) {
            //alert(err.responseText)
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
             $("#idTotalDeposit").html("Deposits: &emsp;&emsp;"+"GH¢"+formatNumberWithCommas(parseFloat(data[0].totaldeposit)));
             if(data[0].totalinterest !== "0"){
              $("#idTotalInterest").html("Interest: "+"GH¢"+formatNumberWithCommas(parseFloat(data[0].totalinterest))).show();
             }
             $("#idTotalWithdrawal").html("Withdrawals: "+"(GH¢"+formatNumberWithCommas(parseFloat(data[0].totalwithdrawal+")")));
             
            var fees = 0;
            if(data[0].sms_charge){
            fees = parseFloat(data[0].entryfee)+parseFloat(data[0].withfee)+parseFloat(data[0].sms_charge);
            }else{
             fees = parseFloat(data[0].entryfee)+parseFloat(data[0].withfee);  
            }
             $("#idTotFee").html("Fees: "+"(GH¢"+fees+")");
             
            $("#idAccName").html(data[0].name);
            $("#idAccnumber").html(accno);
            $("#idProduct").html(data[0].prodname);
            $("#idAccBal").html("Acc. Bal: &emsp;<b>"+data[0].balance+"</b>");
            
            
             sessionStorage.setItem('accname', data[0].name);
             sessionStorage.setItem('accno', accno);
             sessionStorage.setItem('accbal', data[0].balance);

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
            
      
            if(date1==date2){
                $("#idState").html("STATEMENT OF ACCOUNT AS AT "+date1); 
                state = "STATEMENT OF ACCOUNT AS AT "+date1;
                
            }else{
                $("#idState").html("STATEMENT OF ACCOUNT AS AT "+date1+" to "+date2);  
                state = "STATEMENT OF ACCOUNT AS AT "+date1+" to "+date2;
            }
            
            sessionStorage.setItem('state', state);
            
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
              
             $("#idTotalDeposit").html("Deposits: &emsp;&emsp;"+"GH¢"+formatNumberWithCommas(parseFloat(data[0].totaldeposit)));
             if(data[0].totalinterest !== "0"){
                $("#idTotalInterest").html("Interest: "+"GH¢"+formatNumberWithCommas(parseFloat(data[0].totalinterest))).show();
             }
             $("#idTotalWithdrawal").html("Withdrawals: "+"(GH¢"+formatNumberWithCommas(parseFloat(data[0].totalwithdrawal))+")");
             sessionStorage.setItem('accbal', data[0].balance);
            $("#idAccBal").html("Acc. Bal: &emsp;<b>"+formatNumberWithCommas(parseFloat(data[0].balance))+"</b>");
            
            var fees = 0;
            if(data[0].sms_charge){
            fees = parseFloat(data[0].entryfee)+parseFloat(data[0].withfee)+parseFloat(data[0].sms_charge);
            }else{
             fees = parseFloat(data[0].entryfee)+parseFloat(data[0].withfee);  
            }
            $("#idTotFee").html("Fees: "+"(GH¢"+fees+")");
             
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
            
        
             sessionStorage.setItem('accname', data[0].name);
             sessionStorage.setItem('accno', accno);
             
            
             $("#idState").html("STATEMENT OF ACCOUNT AS AT "+today); 
             sessionStorage.setItem('state', "STATEMENT OF ACCOUNT AS AT "+today );
   
         
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
            if(data[0].photo.length>20){
             $("#idImage2").append("<img src='https://drive.google.com/thumbnail?id="+data[0].photo+"' width='160' height='160'>");
            }else{
             $("#idImage2").append("<img src='https://greenedis.org/stupload/"+data[0].photo+"' width='160' height='160'>");
            }
            

            $("#clCode").val(data[0].code);
            $("#clFullname").val(data[0].fullname);
            $("#clPhone").val(data[0].phone);
            $("#clIDNo").val(data[0].idno);
           }
        },
        error: function(err) {
          //alert(err.responseText)
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
        //   beforeSend:function()
        // {
        // },
        //   success:function(data)
        // {
        //   alert(data)
        // },
        // error: function(err) {
        //     alert(err.responseText)
        //   console.log(err);
        // }
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



    function calculateBalancesAll(){
    $.ajax({
          url:""+$online__access__tag+"processor/calculateBalancesAll",
          type:"POST",
          contentType: false,       
          cache: false, 
          processData:false,
          beforeSend:function()
          {
            $('#preloader').show();
          },
          success:function(data)
         {
            $('#preloader').hide();
            if(fromAdd){
            location.reload();
         }
        },
        error: function(err) {
         $('#preloader').hide();
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
          if(data!=="none"){
            interestDataTbl(data);
          }
        },
        error: function(err) {
            //alert(err.responseText)
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
            //alert(err.responseText)
          console.log(err);
        }
    });
}



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
              $(".clSearch").html("REPORT FROM "+date+" TO "+date2+"");
              $(".loader_container_sector").hide();
              $("#hello").html("");
              var len = data.length;
              $("#conti").css("display", "block");
         
                var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>DEPOSITS:</b></td><td style='font-size:18px'>" + data[0].deposits + "</td></tr>" +
                  "<tr><td colspan='6'><b>INTERESTS:</b></td><td style='font-size:18px'>" + data[0].interests + "</td></tr>" +
                  "<tr><td colspan='6'><b>WITHDRAWALS:</b></td><td style='color:red;font-size:18px'>" + data[0].withdrawals + "</td></tr>" +
                   "<tr><td colspan='6'><b>FEES:</b></td><td style='color:red;font-size:18px'>" + data[0].fees + "</td></tr>" +
                  "<tr><td colspan='6'><b>BALANCE:</b></td><td style='color:green;font-size:18px'>" + data[0].balance + "</td></tr>" +
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
          $(".clSearch").html("Loading... Please wait!").css('color','red');
          $('#preloader').show();
        },
          success:function(data)
         {
            $(".clSearch").html("REPORT TILL DATE");
            $("#hello").html("");
              var len = data.length;
              $("#conti").css("display", "block");
                var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'>DEPOSITS:</b></td><td><strong>" + data[0].deposits + "</strong></td></tr>" +
                  "<tr><td colspan='6'>INTERESTS:</b></td><td><strong>" + data[0].interests + "</strong></td></tr>" +
                  "<tr><td colspan='6'>WITHDRAWALS: </b></td><td><strong>" + data[0].withdrawals + "</strong></td></tr>" +
                   "<tr><td colspan='6'>FEES:</b></td><td style='color:red'><strong>" + data[0].fees + "</strong></td></tr>" +
                  "<tr><td colspan='6'>BALANCE:</td><td style='color:green'><strong>" + data[0].balance + "</strong></td></tr>" +
                  "</table>";
                   $('#hello').append(html);
                   
                    var label = ["Total deposits", "Total Interests", "Total Withdrawals", "Total Fees", "Total balance"];
                    var values = [data[0].deposits1, data[0].interests1, data[0].withdrawals1, data[0].fees1, data[0].balance1];
                   
                    generateGraph2(label, values);
                    $('#preloader').hide();
        },
        error: function(err) {
          $('#preloader').hide();
          //alert(err.responseText);
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
                var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6' style='background:#ffc107;color:black'><b>LATEST RECORD</b></td></tr>" +
                  "<tr><td colspan='6'><b>Date:</b></td><td style='font-size:15px'>" + data[0].deposit_date + "</td></tr>" +
                  "<tr><td colspan='6'><b>DEPOSIT:</b></td><td style='font-size:15px'>" + data[0].deposit + "</td></tr>" +
                  "<tr><td colspan='6'><b>Posted by:</b></td><td style='font-size:15px'>" + data[0].deposit_by + "</td></tr>" +
                  "<tr><td colspan='6'><b>Date:</b></td><td style='font-size:15px'>" + data[0].withdrawal_date + "</td></tr>" +
                  "<tr><td colspan='6'><b>WITHDRAWAL:</b></td><td style='font-size:15px'>" + data[0].withdrawal + "</td></tr>" +
                 "<tr><td  colspan='6'><b>Withdrawal by:</b></td><td style='font-size:15px'>" + data[0].withdrawal_by + "</td></tr>" +
                  "</table>";
                   $('#hello2').append(html);
                
        },
        error: function(err) {
         //alert(err.responseText);
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
          beforeSend:function()
          {
            $('#preloader').show();
          },
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
                  $('#preloader').hide();
                
        },
        error: function(err) {
          $('#preloader').hide();
          //alert(err.responseText);
        }
    });
}



   
 function filterMOMO(date, date2, user) {
    var fd = new FormData();
    fd.append("date", date);
    fd.append("date2", date2);
    fd.append("user", user);
    $.ajax({
          url:""+$online__access__tag+"processor/filterMomo",
          data: fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          beforeSend:function()
          {
            $(".clSearch").html("Generating MOMO report... Please wait!").css("color","red");
            $("#btnFilter > i").removeClass().addClass("fa fa-spinner fa-spin");
            $("#btnFilter").prop("disabled", true);
            $("#btnFilter").css("cursor", "no-drop");
          },
          success:function(data)
          {  
            $(".shBoxSearch").show();
            $(".shChatSearch").show();
            
            $(".loader_container_sector").hide();
            $("#btnFilter > i").removeClass();
            $("#btnFilter").prop("disabled", false);
            $("#btnFilter").css("cursor", "");
              
              $("#hello").html("");
              var len = data.length;
              $("#conti").css("display", "block");
                if(date==''||date==null){
                  $(".clSearch").html("REPORT TILL DATE").css("color","green");
                  var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>CASH IN:</b></td><td> GHS " + data[0].deposit + "</td></tr>" +
                  "<tr><td colspan='6'><b>CASH IN COMMISSION:</b></td><td> GHS " + data[0].deposit_comm + "</td></tr>" +
                  "<tr><td colspan='6'><b>CASH OUT:</b></td><td style='color:red'> GHS " + data[0].cashout + "</td></tr>" +
                  "<tr><td colspan='6'><b>CASH OUT COMMISSION:</b></td><td style='color:red'> GHS " + data[0].cashout_comm + "</td></tr>" +
                //   "<tr><td colspan='6'><b>Officer:</b></td><td>" + data[0].name + "</td></tr>" +
                //   "<tr><td colspan='6'><b>Role:</b></td><td>" + data[0].role + "</td></tr>" +
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>SALES:</b></td><td> GHS " + data[0].sales + "</td></tr>" +
                  "<tr><td colspan='6'><b>SALES COMMISSION:</b></td><td> GHS " + data[0].sales_comm + "</td></tr>" +
                  "<tr><td colspan='6'><b>EVD FEE:</b></td><td> GHS " + data[0].evd + "</td></tr>" +
                  "<tr><td colspan='6'><b>EVD COMMISSION:</b></td><td> GHS " + data[0].evd_comm + "</td></tr>" +
                  "<tr><td colspan='6'><b>CLERK:</b></td><td> GHS " + data[0].clerk + "</td></tr>" +
                  "<tr><td colspan='6'><b>CLERK COMMISSION:</b></td><td> GHS " + data[0].clerk_comm + "</td></tr>" +
                  "<tr><td colspan='6'><b>MASS:</b></td><td> GHS " + data[0].mass + "</td></tr>" +
                  "<tr><td colspan='6'><b>MASS COMMISSION:</b></td><td> GHS " + data[0].mass_comm + "</td></tr>"+
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL EARNINGS:</b></td><td> GHS " + data[0].tot_earn + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL COMMISSION:</b></td><td> GHS " + data[0].tot_comm + "</td></tr>"+
                  "<tr><td colspan='6' style='color:red'><b>ATTENDANCE DED/COMM:</b></td><td> GHS " + data[0].attcomm + "</td></tr>"+
                  "<tr><td colspan='6'><b>NET COMMISSION:</b></td><td> GHS " + data[0].overral_comm + "</td></tr>"+
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>Officer:</b></td><td>" + data[0].name + "</td></tr>" +
                  "<tr><td colspan='6'><b>Role:</b></td><td>" + data[0].role + "</td></tr>" +
                  "</table>";
                  
                   $('#hello').append(html);
                }else if(date==date2){
                  $(".clSearch").html("REPORT FROM <b>"+convertDate(date)+"</b>").css("color","green");
                  var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>CASH IN:</b></td><td> GHS " + data[0].deposit + "</td></tr>" +
                  "<tr><td colspan='6'><b>CASH IN COMMISSION:</b></td><td> GHS" + data[0].deposit_comm + "</td></tr>" +
                  "<tr><td colspan='6'><b>CASH OUT:</b></td><td style='color:red'> GHS" + data[0].cashout + "</td></tr>" +
                  "<tr><td colspan='6'><b>CASH OUT COMMISSION:</b></td><td style='color:red'> GHS" + data[0].cashout_comm + "</td></tr>" +
                //   "<tr><td colspan='6'><b>Officer:</b></td><td>" + data[0].name + "</td></tr>" +
                //   "<tr><td colspan='6'><b>Role:</b></td><td>" + data[0].role + "</td></tr>" +
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>SALES:</b></td><td> GHS " + data[0].sales + "</td></tr>" +
                  "<tr><td colspan='6'><b>SALES COMMISSION:</b></td><td> GHS " + data[0].sales_comm + "</td></tr>" +
                  "<tr><td colspan='6'><b>EVD FEE:</b></td><td> GHS " + data[0].evd + "</td></tr>" +
                  "<tr><td colspan='6'><b>EVD COMMISSION:</b></td><td> GHS " + data[0].evd_comm + "</td></tr>" +
                  "<tr><td colspan='6'><b>CLERK:</b></td><td> GHS " + data[0].clerk + "</td></tr>" +
                  "<tr><td colspan='6'><b>CLERK COMMISSION:</b></td><td> GHS " + data[0].clerk_comm + "</td></tr>" +
                  "<tr><td colspan='6'><b>MASS:</b></td><td> GHS " + data[0].mass + "</td></tr>" +
                  "<tr><td colspan='6'><b>MASS COMMISSION:</b></td><td> GHS " + data[0].mass_comm + "</td></tr>"+
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL EARNINGS:</b></td><td> GHS " + data[0].tot_earn + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL COMMISSION:</b></td><td> GHS " + data[0].tot_comm + "</td></tr>" +
                  "<tr><td colspan='6' style='color:red'><b>ATTENDANCE DED/COMM:</b></td><td> GHS " + data[0].attcomm + "</td></tr>"+
                  "<tr><td colspan='6'><b>NET COMMISSION:</b></td><td> GHS " + data[0].overral_comm + "</td></tr>"+
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>Officer:</b></td><td>" + data[0].name + "</td></tr>" +
                  "<tr><td colspan='6'><b>Role:</b></td><td>" + data[0].role + "</td></tr>" +
                  "</table>";
                  
                  
                   $('#hello').append(html);
                }else{
                  if(date2!=='0'){
                    $(".clSearch").html("REPORT AS AT <b>"+convertDate(date)+"</b> TO <b>"+convertDate(date2)+"</b>").css("color","green");  
                  }else{
                    $(".clSearch").html("REPORT AS AT <b>"+convertDate(date)+"</b>").css("color","green");  
                  }
                  var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>CASH IN:</b></td><td> GHS" + data[0].deposit + "</td></tr>" +
                  "<tr><td colspan='6'><b>CASH IN COMMISSION:</b></td><td> GHS" + data[0].deposit_comm + "</td></tr>" +
                  "<tr><td colspan='6'><b>CASH OUT:</b></td><td style='color:red'> GHS" + data[0].cashout + "</td></tr>" +
                  "<tr><td colspan='6'><b>CASH OUT COMMISSION:</b></td><td style='color:red'> GHS" + data[0].cashout_comm + "</td></tr>" +
                //   "<tr><td colspan='6'><b>Officer:</b></td><td>" + data[0].name + "</td></tr>" +
                //   "<tr><td colspan='6'><b>Role:</b></td><td>" + data[0].role + "</td></tr>" +
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>SALES:</b></td><td> GHS " + data[0].sales + "</td></tr>" +
                  "<tr><td colspan='6'><b>SALES COMMISSION:</b></td><td> GHS " + data[0].sales_comm + "</td></tr>" +
                  "<tr><td colspan='6'><b>EVD FEE:</b></td><td> GHS " + data[0].evd + "</td></tr>" +
                  "<tr><td colspan='6'><b>EVD COMMISSION:</b></td><td> GHS " + data[0].evd_comm + "</td></tr>" +
                  "<tr><td colspan='6'><b>CLERK:</b></td><td> GHS " + data[0].clerk + "</td></tr>" +
                  "<tr><td colspan='6'><b>CLERK COMMISSION:</b></td><td> GHS " + data[0].clerk_comm + "</td></tr>" +
                  "<tr><td colspan='6'><b>MASS:</b></td><td> GHS " + data[0].mass + "</td></tr>" +
                  "<tr><td colspan='6'><b>MASS COMMISSION:</b></td><td> GHS " + data[0].mass_comm + "</td></tr>"+
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL EARNINGS:</b></td><td> GHS " + data[0].tot_earn + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL COMMISSION:</b></td><td> GHS " + data[0].tot_comm + "</td></tr>" +
                  "<tr><td colspan='6' style='color:red'><b>ATTENDANCE DED/COMM:</b></td><td> GHS " + data[0].attcomm + "</td></tr>"+
                  "<tr><td colspan='6'><b>NET COMMISSION:</b></td><td> GHS " + data[0].overral_comm + "</td></tr>"+
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>Officer:</b></td><td>" + data[0].name + "</td></tr>" +
                  "<tr><td colspan='6'><b>Role:</b></td><td>" + data[0].role + "</td></tr>" +
                  "</table>";
                  
                   $('#hello').append(html);
                }
                  var label = ["Deposits", "Deposit Commission", "Cashout", "Cashout Commission"];
                  var values = [];
                  values = [data[0].deposit, data[0].deposit_comm, data[0].cashout, data[0].cashout_comm];
                  generateGraph2(label, values);
        },
        error: function(err) {
            //alert(err.responseText)
            $(".clSearch").html("NO RESULTS FOUND");
            $('#preloader').hide();
            $("#btnFilter > i").removeClass();
            $("#btnFilter").prop("disabled", false);
            $("#btnFilter").css("cursor", "");
        }
    });
}

    

    

    function fetchOReport(date, date2, user){
    var fd = new FormData();
    if(date!=="0" && date2!=="0"){
     fd.append("date", date);
     fd.append("date2", date2);
     fd.append("user", user);
    }else{
      if(sessionStorage.getItem("role")!=="1"){
       fd.append("user", user); 
      }
    }
    $.ajax({
          url:""+$online__access__tag+"processor/fetchOReport",
          data: fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          beforeSend:function()
          {
            $(".clSearch").html("Generating report... Please wait!").css("color","red");
            $(".btnGenFilter > i").removeClass().addClass("fa fa-spinner fa-spin");
            $(".btnGenFilter").prop("disabled", true);
            $(".btnGenFilter").css("cursor", "no-drop");
          },
          success:function(data)
          {
            $(".shBoxSearch").show();
            $(".shChatSearch").show();
            $(".loader_container_sector").hide();
            $(".btnGenFilter > i").removeClass();
            $(".btnGenFilter").prop("disabled", false);
            $(".btnGenFilter").css("cursor", "");
              $("#hello").html("");
              var len = data.length;
              $("#conti").css("display", "block");
                if(date!=="0"){

                  $(".clSearch").html("REPORT AS AT <b>"+convertDate(date)+"</b> TO <b>"+convertDate(date2)+"</b>");  
                  
                  if(data[0].role==="7"){
                  var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>CATEGORY</b></td><td><b>AMOUNT</b></td><td><b>AMOUNT RETRIEVED</b></td></tr>" +
                  "<tr><td colspan='6'><b>MOMO OVERS:</b></td><td> GHS " + data[0].totmomooversamt + "</td><td> GHS " + data[0].totmomoovers + "</td></tr>" +
                  "<tr><td colspan='6'><b>MOMO SHORTAGE:</b></td><td> GHS " + data[0].totmomoshortamt + "</td><td> GHS " + data[0].totmomoshort + "</td></tr>" +
                  "</table>"+
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL MOMO:</b></td><td>GHS " + money(data[0].totmomooversamt+data[0].totmomoshortamt)+ "</td><td>GHS " + money(data[0].totmomoovers+data[0].totmomoshort)+ "</td></tr>" +
                  "</table>";  
                  }else if(data[0].role==="6"){
                  var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>CATEGORY</b></td><td><b>AMOUNT</b></td><td><b>AMOUNT RETRIEVED</b></td></tr>" +
                  "<tr><td colspan='6'><b>SUSU WITHDRAWAL OVERS:</b></td><td> GHS " + data[0].totsuswithoversamt + "</td><td> GHS " + data[0].totsuswithovers + "</td></tr>" +
                  "<tr><td colspan='6'><b>SUSU WITHDRAWAL SHORTAGE:</b></td><td> GHS " + data[0].totsuswithshortamt + "</td><td> GHS " + data[0].totsuswithshort + "</td></tr>" +
                  "</table>"+
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL SUSU AMOUNT:</b></td><td>GHS " + money(data[0].totsuswithoversamt+data[0].totsuswithshortamt)+ "</td><td>GHS " + money(data[0].totsuswithovers+data[0].totsuswithshort)+ "</td></tr>" +
                  "</table>";  
                  }else if(data[0].role==="5"){
                  var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>CATEGORY</b></td><td><b>AMOUNT</b></td><td><b>AMOUNT RETRIEVED</b></td></tr>" +
                  "<tr><td colspan='6'><b>SUSU OVERS:</b></td><td> GHS " + data[0].totsusuoversamt + "</td><td> GHS " + data[0].totsusuovers + "</td></tr>" +
                  "<tr><td colspan='6'><b>SUSU SHORTAGE:</b></td><td> GHS " + data[0].totsusushort + "</td><td> GHS " + data[0].totsusushort + "</td></tr>" +
                  "</table>"+
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL:</b></td><td>GHS " + money(data[0].totsusuoversamt+data[0].totsusushortamt)+ "</td><td>GHS " + money(data[0].totsusuovers+data[0].totsusushort)+ "</td></tr>" +
                  "</table>";  
                  }else{
                  var html = "<h2><strong>OVERS</strong></h2><br><table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>CATEGORY</b></td><td><b>AMOUNT</b></td><td><b>AMOUNT RETRIEVED</b></td></tr>" +
                  "<tr><td colspan='6'><b>MOMO OVERS:</b></td><td> GHS " + data[0].totmomooversamt + "</td><td> GHS " + data[0].totmomoovers + "</td></tr>" +
                  "<tr><td colspan='6'><b>SUSU OVERS:</b></td><td> GHS " + data[0].totsusuoversamt + "</td><td> GHS " + data[0].totsusuovers + "</td></tr>" +
                  "<tr><td colspan='6'><b>E-CASH OVERS:</b></td><td> GHS " + data[0].totecashoversamt + "</td></td><td> GHS " + data[0].totecashovers + "</td></tr>" +
                 "<tr><td colspan='6'><b>SALES OVERS:</b></td><td> GHS " + data[0].totsalesoversamt + "</td><td> GHS " + data[0].totsalesovers + "</td></tr>" +
                  "<tr><td colspan='6'><b>EVD TRANSFER OVERS:</b></td><td> GHS " + data[0].totevdoversamt + "</td><td> GHS " + data[0].totevdovers + "</td></tr>" +
                  "<tr><td colspan='6'><b>SUSU WITHDRAWAL OVERS:</b></td><td> GHS " + data[0].totsuswithoversamt + "</td><td> GHS " + data[0].totsuswithovers + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL OVERS:</b></td><td> GHS " + data[0].totoversamt + "</td><td> GHS " + data[0].totovers + "</td></tr>" +
                  "</table>"+

                  "<h2><strong>SHORTAGE</strong></h2><br><table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>MOMO SHORTAGE:</b></td><td> GHS " + data[0].totmomoshortamt + "</td><td> GHS " + data[0].totmomoshort + "</td></tr>" +
                  "<tr><td colspan='6'><b>SUSU SHORTAGE:</b></td><td> GHS " + data[0].totsusushortamt + "</td><td> GHS " + data[0].totsusushort + "</td></tr>" +
                  "<tr><td colspan='6'><b>E-CASH SHORTAGE:</b></td><td> GHS " + data[0].totecashshortamt + "</td><td> GHS " + data[0].totecashshort + "</td></tr>" +
                  "<tr><td colspan='6'><b>SALES OVERS:</b></td><td> GHS " + data[0].totsalesshortamt + "</td><td> GHS " + data[0].totsalesshort + "</td></tr>" +
                  "<tr><td colspan='6'><b>EVD TRANSFER SHORTAGE:</b></td><td> GHS " + data[0].totevdshortamt + "</td><td> GHS " + data[0].totevdshort + "</td></tr>" +
                  "<tr><td colspan='6'><b>SUSU WITHDRAWAL SHORTAGE:</b></td><td> GHS " + data[0].totsusshortamt + "</td><td> GHS " + data[0].totsuswithshort + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL SHORTAGE:</b></td><td> GHS " + data[0].totshortamt + "</td><td> GHS " + data[0].totshort + "</td></tr>" +
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL OVERS & SHORTAGE:</b></td><td>GHS " + data[0].totoverandshortageamt + "</td><td>GHS " + data[0].totoverandshortage + "</td></tr>" +
                  "</table>";  
                  }                 
                  $('#hello').append(html);
                }else{
                  if(user){
                  $(".clSearch").html("OVERS & SHORTAGE REPORT TILL DATE"); 
                  if(data[0].role==="7"){
                  var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td><b>CATEGORY</b></td><td><b>AMOUNT</b></td><td><b>AMOUNT RETRIEVED</b></td></tr>" +
                  "<tr><td><b>MOMO OVERS:</b></td><td> GHS " + data[0].totmomooversamt + "</td><td> GHS " + data[0].totmomoovers + "</td></tr>" +
                  "<tr><td><b>MOMO SHORTAGE:</b></td><td> GHS " + data[0].totmomoshortamt + "</td><td> GHS " + data[0].totmomoshort + "</td></tr>" +
                  "</table>"+
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td><b>TOTAL MOMO:</b></td><td>GHS " + money(data[0].totmomooversamt+data[0].totmomoshortamt)+ "</td><td>GHS " + money(data[0].totmomoovers+data[0].totmomoshort)+ "</td></tr>" +
                  "</table>";  
                  }else if(data[0].role==="6"){
                  var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>CATEGORY</b></td><td><b>AMOUNT</b></td><td><b>AMOUNT RETRIEVED</b></td></tr>" +
                  "<tr><td colspan='6'><b>SUSU WITHDRAWAL OVERS:</b></td><td> GHS " + data[0].totsuswithoversamt + "</td><td> GHS " + data[0].totsuswithovers + "</td></tr>" +
                  "<tr><td colspan='6'><b>SUSU WITHDRAWAL SHORTAGE:</b></td><td> GHS " + data[0].totsusshortamt + "</td><td> GHS " + data[0].totsuswithshort + "</td></tr>" +
                  "</table>"+
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL SUSU:</b></td><td>GHS " + money(data[0].totsusshortamt+data[0].totsuswithshortamt)+ "</td><td>GHS " + money(data[0].totsuswithovers+data[0].totsuswithshort)+ "</td></tr>" +
                  "</table>";  
                  }else if(data[0].role==="5"){
                  var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td><b>CATEGORY</b></td><td><b>AMOUNT</b></td><td><b>AMOUNT RETRIEVED</b></td></tr>" +
                  "<tr><td><b>SUSU OVERS:</b></td><td> GHS " + data[0].totsusuoversamt + "</td><td> GHS " + data[0].totsusuovers + "</td></tr>" +
                  "<tr><td><b>SUSU SHORTAGE:</b></td><td> GHS " + data[0].totsusushort + "</td><td> GHS " + data[0].totsusushort + "</td></tr>" +
                  "</table>"+
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td><b>TOTAL SUSU:</b></td><td>GHS " + money(data[0].totsusuoversamt+data[0].totsusushortamt)+ "</td><td>GHS " + money(data[0].totsusuovers+data[0].totsusushort)+ "</td></tr>" +
                  "</table>";  
                  }else{
                  var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>CATEGORY</b></td><td><b>AMOUNT</b></td><td><b>AMOUNT RETRIEVED</b></td></tr>" +
                  "<tr><td colspan='6'><b>MOMO OVERS:</b></td><td> GHS " + data[0].totmomooversamt + "</td><td> GHS " + data[0].totmomoovers + "</td></tr>" +
                  "<tr><td colspan='6'><b>SUSU OVERS:</b></td><td> GHS " + data[0].totsusuoversamt + "</td><td> GHS " + data[0].totsusuovers + "</td></tr>" +
                  "<tr><td colspan='6'><b>E-CASH OVERS:</b></td><td> GHS " + data[0].totecashoversamt + "</td></td><td> GHS " + data[0].totecashovers + "</td></tr>" +
                 "<tr><td colspan='6'><b>SALES OVERS:</b></td><td> GHS " + data[0].totsalesoversamt + "</td><td> GHS " + data[0].totsalesovers + "</td></tr>" +
                  "<tr><td colspan='6'><b>EVD TRANSFER OVERS:</b></td><td> GHS " + data[0].totevdoversamt + "</td><td> GHS " + data[0].totevdovers + "</td></tr>" +
                  "<tr><td colspan='6'><b>SUSU WITHDRAWAL OVERS:</b></td><td> GHS " + data[0].totsuswithoversamt + "</td><td> GHS " + data[0].totsuswithovers + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL OVERS:</b></td><td> GHS " + data[0].totoversamt + "</td><td> GHS " + data[0].totovers + "</td></tr>" +
                  "</table>"+

                  "<h2><strong>SHORTAGE</strong></h2><br><table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>MOMO SHORTAGE:</b></td><td> GHS " + data[0].totmomoshortamt + "</td><td> GHS " + data[0].totmomoshort + "</td></tr>" +
                  "<tr><td colspan='6'><b>SUSU SHORTAGE:</b></td><td> GHS " + data[0].totsusushortamt + "</td><td> GHS " + data[0].totsusushort + "</td></tr>" +
                  "<tr><td colspan='6'><b>E-CASH SHORTAGE:</b></td><td> GHS " + data[0].totecashshortamt + "</td><td> GHS " + data[0].totecashshort + "</td></tr>" +
                  "<tr><td colspan='6'><b>SALES OVERS:</b></td><td> GHS " + data[0].totsalesshortamt + "</td><td> GHS " + data[0].totsalesshort + "</td></tr>" +
                  "<tr><td colspan='6'><b>EVD TRANSFER SHORTAGE:</b></td><td> GHS " + data[0].totevdshortamt + "</td><td> GHS " + data[0].totevdshort + "</td></tr>" +
                  "<tr><td colspan='6'><b>SUSU WITHDRAWAL SHORTAGE:</b></td><td> GHS " + data[0].totsusshortamt + "</td><td> GHS " + data[0].totsuswithshort + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL SHORTAGE:</b></td><td> GHS " + data[0].totshortamt + "</td><td> GHS " + data[0].totshort + "</td></tr>" +
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL OVERS & SHORTAGE:</b></td><td>GHS " + data[0].totoverandshortageamt + "</td><td>GHS " + data[0].totoverandshortage + "</td></tr>" +
                  "</table>";  
                  }      
                 
                   $('#hello').append(html);
                }else{
                  $(".clSearch").html("STAFF LEDGER TILL DATE");
                  var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>CATEGORY</b></td><td><b>AMOUNT</b></td><td><b>AMOUNT RETRIEVED</b></td></tr>" +
                  "<tr><td colspan='6'><b>MOMO OVERS:</b></td><td> GHS " + data[0].totmomooversamt + "</td><td> GHS " + data[0].totmomoovers + "</td></tr>" +
                  "<tr><td colspan='6'><b>SUSU OVERS:</b></td><td> GHS " + data[0].totsusuoversamt + "</td><td> GHS " + data[0].totsusuovers + "</td></tr>" +
                  "<tr><td colspan='6'><b>E-CASH OVERS:</b></td><td> GHS " + data[0].totecashoversamt + "</td><td> GHS " + data[0].totecashovers + "</td></tr>" +
                  "<tr><td colspan='6'><b>SALES OVERS:</b></td><td> GHS " + data[0].totsalesoversamt + "</td><td> GHS " + data[0].totsalesovers + "</td></tr>" +
                  "<tr><td colspan='6'><b>EVD TRANSFER OVERS:</b></td><td> GHS " + data[0].totevdoversamt + "</td><td> GHS " + data[0].totevdovers + "</td></tr>" +
                  "<tr><td colspan='6'><b>SUSU WITHDRAWAL OVERS:</b></td><td> GHS " + data[0].totsuswithoversamt + "</td><td> GHS " + data[0].totsuswithovers + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL OVERS:</b></td><td> GHS " + data[0].totoversamt + "</td><td> GHS " + data[0].totovers + "</td></tr>" +
                  // "</tbody"+
                  "</table>"+

                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>MOMO SHORTAGE:</b></td><td> GHS " + data[0].totmomoshortamt + "</td><td> GHS " + data[0].totmomoshort + "</td></tr>" +
                  "<tr><td colspan='6'><b>SUSU SHORTAGE:</b></td><td> GHS " + data[0].totsusushortamt + "</td><td> GHS " + data[0].totsusushort + "</td></tr>" +
                  "<tr><td colspan='6'><b>E-CASH SHORTAGE:</b></td><td> GHS " + data[0].totecashshortamt + "</td><td> GHS " + data[0].totecashshort + "</td></tr>" +
                  "<tr><td colspan='6'><b>SALES OVERS:</b></td><td> GHS " + data[0].totsalesshortamt + "</td><td> GHS " + data[0].totsalesshort + "</td></tr>" +
                  "<tr><td colspan='6'><b>EVD TRANSFER SHORTAGE:</b></td><td> GHS " + data[0].totevdshortamt + "</td><td> GHS " + data[0].totevdshort + "</td></tr>" +
                  "<tr><td colspan='6'><b>SUSU WITHDRAWAL SHORTAGE:</b></td><td> GHS " + data[0].totsusshortamt + "</td><td> GHS " + data[0].totsuswithshort + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL SHORTAGE:</b></td><td> GHS " + data[0].totshortamt + "</td><td> GHS " + data[0].totshort + "</td></tr>" +
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL OVERS & SHORTAGE:</b></td><td>GHS " + data[0].totoverandshortageamt + "</td><td>GHS " + data[0].totoverandshortage + "</td></tr>" +
                  "</table>";      
                 
                  $('#hello').append(html);
                }
            }
        },
        error: function(err) {
            alert(err.responseText)
            $(".clSearch").html("NO RESULTS FOUND");
            $('#preloader').hide();
            $("#btnGenFilterBulk > i").removeClass();
            $("#btnGenFilterBulk").prop("disabled", false);
            $("#btnGenFilterBulk").css("cursor", "");
        }
    });
}

  
    function fetchBulkReport(date, date2) {
    var fd = new FormData();
    if(date && date2){
     fd.append("date", date);
     fd.append("date2", date2);
    }
    $.ajax({
          url:""+$online__access__tag+"processor/fetchBulkReport",
          data: fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          beforeSend:function()
          {
            $(".clSearch").html("Generating report... Please wait!").css("color","red");
            $(".btnGenFilterBulk > i").removeClass().addClass("fa fa-spinner fa-spin");
            $(".btnGenFilterBulk").prop("disabled", true);
            $(".btnGenFilterBulk").css("cursor", "no-drop");
          },
          success:function(data)
          {
            $(".shBoxSearch").show();
            $(".shChatSearch").show();
            $(".loader_container_sector").hide();
            $(".btnGenFilterBulk > i").removeClass();
            $(".btnGenFilterBulk").prop("disabled", false);
            $(".btnGenFilterBulk").css("cursor", "");
              
              $("#hello").html("");
              var len = data.length;
              $("#conti").css("display", "block");
                if(date==''||date==null){
                  $(".clSearch").html("REPORT TILL DATE");
                  var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL AGENT EVD:</b></td><td> GHS " + data[0].totagent + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL CUSTOMER EVD:</b></td><td> GHS " + data[0].totevd + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL OTHER EVD:</b></td><td> GHS " + data[0].totother + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL EVD BULK:</b></td><td> GHS " + data[0].totecash + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL EVD COMMISSION:</b></td><td> GHS " + data[0].fee + "</td></tr>" +
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>Officer:</b></td><td>Administrator</td></tr>" +
                  "</table>";      
                 
                   $('#hello').append(html);
                }else if(date==date2){
                  $(".clSearch").html("REPORT FROM <b>"+convertDate(date)+"</b>");
                 var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL AGENT EVD:</b></td><td> GHS " + data[0].totagent + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL CUSTOMER EVD:</b></td><td> GHS " + data[0].totevd + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL OTHER EVD:</b></td><td> GHS " + data[0].totother + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL EVD BULK:</b></td><td> GHS " + data[0].totecash + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL EVD COMMISSION:</b></td><td> GHS " + data[0].fee + "</td></tr>" +
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>Officer:</b></td><td>Administrator</td></tr>" +
                  "</table>";
                   $('#hello').append(html);
                }else{
                  if(date2!=='0'){
                    $(".clSearch").html("REPORT AS AT <b>"+convertDate(date)+"</b> TO <b>"+convertDate(date2)+"</b>");  
                  }else{
                    $(".clSearch").html("REPORT AS AT <b>"+convertDate(date)+"</b>");  
                  }
                  
                   var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL AGENT EVD:</b></td><td> GHS " + data[0].totagent + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL CUSTOMER EVD:</b></td><td> GHS " + data[0].totevd + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL OTHER EVD:</b></td><td> GHS " + data[0].totother + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL EVD BULK:</b></td><td> GHS " + data[0].totecash + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL EVD COMMISSION:</b></td><td> GHS " + data[0].fee + "</td></tr>" +
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>Officer:</b></td><td>Administrator</td></tr>" +
                  "</table>";
                   $('#hello').append(html);
                }
        },
        error: function(err) {
            alert(err.responseText)
            $(".clSearch").html("NO RESULTS FOUND");
            $('#preloader').hide();
            $("#btnGenFilterBulk > i").removeClass();
            $("#btnGenFilterBulk").prop("disabled", false);
            $("#btnGenFilterBulk").css("cursor", "");
        }
    });
}



   function fetchCashReport(date, date2, user) {
    var fd = new FormData();
    if(date && date2){
     fd.append("date", date);
     fd.append("date2", date2);
     fd.append("user", user);   
    }
    $.ajax({
          url:""+$online__access__tag+"processor/fetchCashReport",
          data: fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          beforeSend:function()
          {
            $(".clSearch").html("Generating report... Please wait!").css("color","red");
            $(".btnGenFilterCash > i").removeClass().addClass("fa fa-spinner fa-spin");
            $(".btnGenFilterCash").prop("disabled", true);
            $(".btnGenFilterCash").css("cursor", "no-drop");
          },
          success:function(data)
          {  
            $(".shBoxSearch").show();
            $(".shChatSearch").show();
            $(".loader_container_sector").hide();
            $(".btnGenFilterCash > i").removeClass();
            $(".btnGenFilterCash").prop("disabled", false);
            $(".btnGenFilterCash").css("cursor", "");
              
              $("#hello").html("");
              var len = data.length;
              $("#conti").css("display", "block");
                if(date==''||date==null){
                  $(".clSearch").html("REPORT TILL DATE");
                  var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>MOMO:</b></td><td> GHS " + data[0].momo + "</td></tr>" +
                  "<tr><td colspan='6'><b>E-CASH:</b></td><td> GHS " + data[0].ecash + "</td></tr>" +
                  "<tr><td colspan='6'><b>OTHER:</b></td><td> GHS " + data[0].other + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL:</b></td><td> GHS " + data[0].totecash + "</td></tr>" +
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>Officer:</b></td><td>" + data[0].user + "</td></tr>" +
                  "</table>";      
                 
                   $('#hello').append(html);
                }else if(date==date2){
                  $(".clSearch").html("REPORT FROM <b>"+convertDate(date)+"</b>");
                  var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>MOMO:</b></td><td> GHS " + data[0].momo + "</td></tr>" +
                  "<tr><td colspan='6'><b>E-CASH:</b></td><td> GHS " + data[0].ecash + "</td></tr>" +
                  "<tr><td colspan='6'><b>OTHER:</b></td><td> GHS " + data[0].other + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL:</b></td><td> GHS " + data[0].totecash + "</td></tr>" +
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                   "<tr><td colspan='6'><b>Officer:</b></td><td>" + data[0].user + "</td></tr>" +
                  "</table>"; 
                  
                   $('#hello').append(html);
                }else{
                  if(date2!=='0'){
                    $(".clSearch").html("REPORT AS AT <b>"+convertDate(date)+"</b> TO <b>"+convertDate(date2)+"</b>");  
                  }else{
                    $(".clSearch").html("REPORT AS AT <b>"+convertDate(date)+"</b>");  
                  }
                  
                  var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>MOMO:</b></td><td> GHS " + data[0].momo + "</td></tr>" +
                  "<tr><td colspan='6'><b>E-CASH:</b></td><td> GHS " + data[0].ecash + "</td></tr>" +
                  "<tr><td colspan='6'><b>OTHER:</b></td><td> GHS " + data[0].other + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL:</b></td><td> GHS " + data[0].totecash + "</td></tr>" +
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                   "<tr><td colspan='6'><b>Officer:</b></td><td>" + data[0].user + "</td></tr>" +
                  "</table>";   
                   $('#hello').append(html);
                }
        },
        error: function(err) {
            alert(err.responseText)
            $(".clSearch").html("NO RESULTS FOUND");
            $('#preloader').hide();
            $("#btnFilter > i").removeClass();
            $("#btnFilter").prop("disabled", false);
            $("#btnFilter").css("cursor", "");
        }
    });
}


function fetchEReqReport(date, date2) {
    var fd = new FormData();
    if(date && date2){
     fd.append("date", date);
     fd.append("date2", date2);   
    }
    $.ajax({
          url:""+$online__access__tag+"processor/fetchReqReport",
          data: fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          beforeSend:function()
          {
            $(".clSearch").html("Generating report... Please wait!").css("color","red");
            $(".btnGenFilter > i").removeClass().addClass("fa fa-spinner fa-spin");
            $(".btnGenFilter").prop("disabled", true);
            $(".btnGenFilter").css("cursor", "no-drop");
          },
          success:function(data)
          {  
            $(".shBoxSearch").show();
            $(".shChatSearch").show();
            $(".loader_container_sector").hide();
            $(".btnGenFilter > i").removeClass();
            $(".btnGenFilter").prop("disabled", false);
            $(".btnGenFilter").css("cursor", "");
              
              $("#hello").html("");
              var len = data.length;
              $("#conti").css("display", "block");
                if(date==''||date==null){
                  $(".clSearch").html("REPORT TILL DATE");
                  var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL E-CASH:</b></td><td> GHS " + data[0].totecash + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOKEN:</b></td><td> GHS " + data[0].token + "</td></tr>" +
                  "<tr><td colspan='6'><b>TRANSPORT:</b></td><td> GHS " + data[0].transport + "</td></tr>" +
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>Officer:</b></td><td>Administrator</td></tr>" +
                  "<tr><td colspan='6'><b>Role:</b></td><td>Administrator</td></tr>" +
                  "</table>";      
                 
                   $('#hello').append(html);
                }else if(date==date2){
                  $(".clSearch").html("REPORT FROM <b>"+convertDate(date)+"</b>");
                 var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL E-CASH:</b></td><td> GHS " + data[0].totecash + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOKEN:</b></td><td> GHS " + data[0].token + "</td></tr>" +
                  "<tr><td colspan='6'><b>TRANSPORT:</b></td><td> GHS " + data[0].transport + "</td></tr>" +
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>Officer:</b></td><td>Administrator</td></tr>" +
                  "<tr><td colspan='6'><b>Role:</b></td><td>Administrator</td></tr>" +
                  "</table>"; 
                  
                   $('#hello').append(html);
                }else{
                  if(date2!=='0'){
                    $(".clSearch").html("REPORT AS AT <b>"+convertDate(date)+"</b> TO <b>"+convertDate(date2)+"</b>");  
                  }else{
                    $(".clSearch").html("REPORT AS AT <b>"+convertDate(date)+"</b>");  
                  }
                       var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL E-CASH:</b></td><td> GHS " + data[0].totecash + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOKEN:</b></td><td> GHS " + data[0].token + "</td></tr>" +
                  "<tr><td colspan='6'><b>TRANSPORT:</b></td><td> GHS " + data[0].transport + "</td></tr>" +
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>Officer:</b></td><td>Administrator</td></tr>" +
                  "<tr><td colspan='6'><b>Role:</b></td><td>Administrator</td></tr>" +
                  "</table>";   
                   $('#hello').append(html);
                }
        },
        error: function(err) {
            alert(err.responseText)
            $(".clSearch").html("NO RESULTS FOUND");
            $('#preloader').hide();
            $("#btnFilter > i").removeClass();
            $("#btnFilter").prop("disabled", false);
            $("#btnFilter").css("cursor", "");
        }
    });
}


function fetchEReport(date, date2) {
    var fd = new FormData();
    if(date && date2){
     fd.append("date", date);
     fd.append("date2", date2);   
    }
    $.ajax({
          url:""+$online__access__tag+"processor/fetchEReport",
          data: fd,
          type:"POST",
          contentType: false,       
          cache: false, 
          dataType: 'JSON',            
          processData:false,
          beforeSend:function()
          {
            $(".clSearch").html("Generating report... Please wait!").css("color","red");
            $(".btnGenFilter > i").removeClass().addClass("fa fa-spinner fa-spin");
            $(".btnGenFilter").prop("disabled", true);
            $(".btnGenFilter").css("cursor", "no-drop");
          },
          success:function(data)
          {  
            $(".shBoxSearch").show();
            $(".shChatSearch").show();
            $(".loader_container_sector").hide();
            $(".btnGenFilter > i").removeClass();
            $(".btnGenFilter").prop("disabled", false);
            $(".btnGenFilter").css("cursor", "");
              
              $("#hello").html("");
              var len = data.length;
              $("#conti").css("display", "block");
                if(date==''||date==null){
                  $(".clSearch").html("REPORT TILL DATE");
                  var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL UNPAID:</b></td><td> GHS " + data[0].totupaid + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL PARTIALLY PAID:</b></td><td> GHS " + data[0].totppaid + "</td></tr>" +
                   "<tr><td colspan='6'><b>TOTAL FULLY PAID:</b></td><td> GHS " + data[0].totpaid + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL E-CASH:</b></td><td> GHS " + data[0].totecash + "</td></tr>" +
                  "<tr><td colspan='6'><b>COMMISSION:</b></td><td> GHS " + data[0].ecash_comm + "</td></tr>" +
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>Officer:</b></td><td>Administrator</td></tr>" +
                  "<tr><td colspan='6'><b>Role:</b></td><td>Administrator</td></tr>" +
                  "</table>";      
                 
                   $('#hello').append(html);
                }else if(date==date2){
                  $(".clSearch").html("REPORT FROM <b>"+convertDate(date)+"</b>");
                    var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL UNPAID:</b></td><td> GHS " + data[0].totupaid + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL PARTIALLY PAID:</b></td><td> GHS " + data[0].totppaid + "</td></tr>" +
                   "<tr><td colspan='6'><b>TOTAL FULLY PAID:</b></td><td> GHS " + data[0].totpaid + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL E-CASH:</b></td><td> GHS " + data[0].totecash + "</td></tr>" +
                  "<tr><td colspan='6'><b>COMMISSION:</b></td><td> GHS " + data[0].ecash_comm + "</td></tr>" +
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>Officer:</b></td><td>Administrator</td></tr>" +
                  "<tr><td colspan='6'><b>Role:</b></td><td>Administrator</td></tr>" +
                  "</table>"; 
                  
                   $('#hello').append(html);
                }else{
                  if(date2!=='0'){
                    $(".clSearch").html("REPORT AS AT <b>"+convertDate(date)+"</b> TO <b>"+convertDate(date2)+"</b>");  
                  }else{
                    $(".clSearch").html("REPORT AS AT <b>"+convertDate(date)+"</b>");  
                  }
                  var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL UNPAID:</b></td><td> GHS " + data[0].totupaid + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL PARTIALLY PAID:</b></td><td> GHS " + data[0].totppaid + "</td></tr>" +
                   "<tr><td colspan='6'><b>TOTAL FULLY PAID:</b></td><td> GHS " + data[0].totpaid + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL E-CASH:</b></td><td> GHS " + data[0].totecash + "</td></tr>" +
                  "<tr><td colspan='6'><b>COMMISSION:</b></td><td> GHS " + data[0].ecash_comm + "</td></tr>" +
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>Officer:</b></td><td>Administrator</td></tr>" +
                  "<tr><td colspan='6'><b>Role:</b></td><td>Administrator</td></tr>" +
                  "</table>";   
                   $('#hello').append(html);
                }
        },
        error: function(err) {
            alert(err.responseText)
            $(".clSearch").html("NO RESULTS FOUND");
            $('#preloader').hide();
            $("#btnFilter > i").removeClass();
            $("#btnFilter").prop("disabled", false);
            $("#btnFilter").css("cursor", "");
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
            $(".clSearch").html("Generating report... Please wait!").css("color","red");
            $("#btnFilter > i").removeClass().addClass("fa fa-spinner fa-spin");
            $("#btnFilter").prop("disabled", true);
            $("#btnFilter").css("cursor", "no-drop");
          },
          success:function(data)
          {  
            $(".shBoxSearch").show();
            $(".shChatSearch").show();
            $(".loader_container_sector").hide();
            $("#btnFilter > i").removeClass();
            $("#btnFilter").prop("disabled", false);
            $("#btnFilter").css("cursor", "");
              
              $("#hello").html("");
              var len = data.length;
              $("#conti").css("display", "block");
                if(date==''||date==null){
                  $(".clSearch").html("REPORT TILL DATE");
                  if(data[0].wperm=="yes"){
                  var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL DEPOSIT:</b></td><td> GHS " + data[0].deposit + "</td></tr>" +
                  "<tr><td colspan='6'><b>DEPOSIT COMMISSION:</b></td><td> GHS " + data[0].dep_comm + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL WITHDRAWAL:</b></td><td style='color:red'> GHS " + data[0].withdrawal + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL WITHDRAWAL FEES:</b></td><td style='color:red'> GHS " + data[0].fees + "</td></tr>" +
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>Officer:</b></td><td>" + data[0].name + "</td></tr>" +
                  "<tr><td colspan='6'><b>Role:</b></td><td>" + data[0].role + "</td></tr>" +
                  "</table>";  
                  }else{
                  var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL DEPOSIT:</b></td><td> GHS " + data[0].deposit + "</td></tr>" +
                  "<tr><td colspan='6'><b>DEPOSIT COMMISSION:</b></td><td> GHS " + data[0].dep_comm + "</td></tr>" +
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>Officer:</b></td><td>" + data[0].name + "</td></tr>" +
                  "<tr><td colspan='6'><b>Role:</b></td><td>" + data[0].role + "</td></tr>" +
                  "</table>";      
                  }
                 
                   $('#hello').append(html);
                }else if(date==date2){
                  $(".clSearch").html("REPORT FROM <b>"+convertDate(date)+"</b>");
                  if(data[0].wperm=="yes"){
                  var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL DEPOSIT:</b></td><td> GHS " + data[0].deposit + "</td></tr>" +
                  "<tr><td colspan='6'><b>DEPOSIT COMMISSION:</b></td><td> GHS " + data[0].dep_comm + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL WITHDRAWAL:</b></td><td> GHS " + data[0].withdrawal + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL WITHDRAWAL FEES:</b></td><td style='color:red'> GHS " + data[0].fees + "</td></tr>" +
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>Officer:</b></td><td>" + data[0].name + "</td></tr>" +
                  "<tr><td colspan='6'><b>Role:</b></td><td>" + data[0].role + "</td></tr>" +
                  "</table>";
                  }else{
                  var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL DEPOSIT:</b></td><td> GHS " + data[0].deposit + "</td></tr>" +
                  "<tr><td colspan='6'><b>DEPOSIT COMMISSION:</b></td><td> GHS " + data[0].dep_comm + "</td></tr>" +
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>Officer:</b></td><td>" + data[0].name + "</td></tr>" +
                  "<tr><td colspan='6'><b>Role:</b></td><td>" + data[0].role + "</td></tr>" +
                  "</table>"; 
                  }
                  
                   $('#hello').append(html);
                }else{
                  if(date2!=='0'){
                    $(".clSearch").html("REPORT AS AT <b>"+convertDate(date)+"</b> TO <b>"+convertDate(date2)+"</b>");  
                  }else{
                    $(".clSearch").html("REPORT AS AT <b>"+convertDate(date)+"</b>");  
                  }
                  if(data[0].wperm=="yes"){
                  var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL DEPOSIT:</b></td><td> GHS " + data[0].deposit + "</td></tr>" +
                  "<tr><td colspan='6'><b>DEPOSIT COMMISSION:</b></td><td> GHS " + data[0].dep_comm + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL WITHDRAWAL:</b></td><td> GHS " + data[0].withdrawal + "</td></tr>" +
                  "<tr><td colspan='6'><b>TOTAL WITHDRAWAL FEES:</b></td><td style='color:red'> GHS " + data[0].fees + "</td></tr>" +
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>Officer:</b></td><td>" + data[0].name + "</td></tr>" +
                  "<tr><td colspan='6'><b>Role:</b></td><td>" + data[0].role + "</td></tr>" +
                  "</table>";
                  }else{
                   var html = "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>TOTAL DEPOSIT:</b></td><td> GHS " + data[0].deposit + "</td></tr>" +
                  "<tr><td colspan='6'><b>DEPOSIT COMMISSION:</b></td><td> GHS " + data[0].dep_comm + "</td></tr>" +
                  "</table>"+
                  
                  "<table class='table table-bordered' width='100%' cellspacing='0'>"+
                  "<tr><td colspan='6'><b>Officer:</b></td><td>" + data[0].name + "</td></tr>" +
                  "<tr><td colspan='6'><b>Role:</b></td><td>" + data[0].role + "</td></tr>" +
                  "</table>";   
                  }
                  
                   $('#hello').append(html);
                }
                 
                  var label = ["Total deposits", "Total Withdrawals", "Total Fees"];
                  var values = [];
                  values = [data[0].deposit1, data[0].withdrawal1, data[0].fees1];
                 
                  generateGraph2(label, values);
                
             //$('#preloader').hide();
        },
        error: function(err) {
            alert(err.responseText)
            $(".clSearch").html("NO RESULTS FOUND");
            $('#preloader').hide();
            $("#btnFilter > i").removeClass();
            $("#btnFilter").prop("disabled", false);
            $("#btnFilter").css("cursor", "");
        }
    });
}





function convertDate(date_str){
  months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
  temp_date = date_str.split("-");
  return temp_date[2] + " " + months[Number(temp_date[1]) - 1] + " " + temp_date[0];
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
            $(".shBoxSearch").show();
            $(".clSearch").html("LATEST RECORD");
            $("#hello2").html("");
              var len = data.length;
              $("#conti").css("display", "block");
                var html = "<table>"+
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

        
      
        function dataTblDecline(data){
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
                  {'data': 'date'},
                  {'data': 'client'},
                  {'data': 'postedby'},
                  {'data': ''}
          ],
         'columnDefs': [{
         'targets': 4,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
         'render': function (data,type,row){
            if(sessionStorage.getItem("status")==="1"){
               return '<a href="revclient?key='+row.id+'" class="btn_1 small"><i class="fa fa-pencil-square-o"></i>Go to Approve</a>';  
             }else{
               return '<p style="color:red">Declined by Admin</p>';  
             }
            }
          }],
        });  
      }
      
      function dataTblPending(data){
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
                  {'data': 'date'},
                  {'data': 'client'},
                  {'data': 'postedby'},
                  {'data': ''}
          ],
         'columnDefs': [{
         'targets': 4,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
         'render': function (data,type,row){
         return '<a href="revclient?key='+row.id+'" class="btn_1 small"><i class="fa fa-pencil-square-o"></i> Review</a>';
            }
          }],
        });  
      }
        
       


     
     function dataTblSusuComm(data){
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
                  {'data': 'date'},
                  {'data': 'id'},
                  {'data': 'amount'},
                  {'data': 'comm'},
                  {'data': 'postedby'},
          ],
        'order': [[1, 'desc']]
        });  
      }
       
       



         function dataTblCommAtt(data){
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
                  {'data': 'code'},
                  {'data': 'user'},
                  {'data': 'date'},
                  {'data': 'time'},
                  {'data': 'amount'},
                  {'data': 'cid', render: function(data,type,row){
                     return "<a href='#' class='btn_1 medium btnDelComm' cid="+row.cid+">Delete<i class='fa fa-trash'></i></a>";
                    }
                  },
                   {'data': 'id', render: function(data,type,row){
                     return "<a href='#' class='btn_1 medium edComm' fullname='"+row.user+"' date="+row.date+" time="+row.time+" amount="+row.amount+" cid="+row.cid+">Edit<i class='fa fa-edit'></i></a>";
                    }
                  },
          ],
            // 'order': [[1, 'des']]
        });  
      }
      


      
        function dataTblOReq(data){
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
                  {'data': 'id'},
                  {'data': 'date'},
                  {'data': 'type'},
                  {'data': 'category'},
                  {'data': 'oamount'},
                  {'data': 'amount'},
                  {'data': 'remarks'},
                  {'data': 'status'},
                  {'data': 'postedby'},
                  {'data': 'checkedby'},
          ],
             'columnDefs': [{
             'targets': 0,
             'searchable': false,
             'orderable': false,
             'className': 'dt-body-center',
             'render': function (data,type,row){
               return '<input type="checkbox" class="form-checkbox" name="id[]" value="'+$('<div/>').text(data).html()+'">';
             }
            }],
            'order': [[1, 'desc']]
        });  
      }
     

      
      function dataTblEReq(data){
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
                  {'data': 'id'},
                  {'data': 'date'},
                  {'data': 'purchaser'},
                  {'data': 'bank'},
                  {'data': 'amount'},
                  {'data': 'token'},
                  {'data': 'transport'},
          ],
             'columnDefs': [{
             'targets': 0,
             'searchable': false,
             'orderable': false,
             'className': 'dt-body-center',
             'render': function (data,type,row){
               return '<input type="checkbox" class="form-checkbox" name="id[]" value="'+$('<div/>').text(data).html()+'">';
             }
            }],
            'order': [[1, 'desc']]
        });  
      }
     

     function dataTblCash(data){
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
                  {'data': 'id'},
                  {'data': 'date'},
                  {'data': 'customer'},
                  {'data': 'category'},
                  {'data': 'deno'},
                  {'data': 'amount'},
                  {'data': 'paidby'},
                  {'data': 'recby'},
                  {'data': 'postedby'},
          ],
             'columnDefs': [{
             'targets': 0,
             'searchable': false,
             'orderable': false,
             'className': 'dt-body-center',
             'render': function (data,type,row){
               return '<input type="checkbox" class="form-checkbox" name="id[]" value="'+$('<div/>').text(data).html()+'">';
             }
            }],
            'order': [[1, 'desc']]
        });  
     }


     
     function dataTblBulkcash(data){
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
                  {'data': 'id'},
                  {'data': 'date'},
                  {'data': 'custname'},
                  {'data': 'evdno'},
                  {'data': 'amount'},
                  {'data': 'fee'},
                  {'data': 'paidin'},
                  {'data': 'procby'},
                  // {'data': 'postedby'},
          ],
             'columnDefs': [{
             'targets': 0,
             'searchable': false,
             'orderable': false,
             'className': 'dt-body-center',
             'render': function (data,type,row){
               return '<input type="checkbox" class="form-checkbox" name="id[]" value="'+$('<div/>').text(data).html()+'">';
             }
            }],
            'order': [[1, 'desc']]
        });  
      }

      function dataTblEcash(data){
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
                  {'data': 'id'},
                  {'data': 'date'},
                  {'data': 'category'},
                  {'data': 'fullname'},
                  {'data': 'amount'},
                  {'data': 'comm'},
                  {'data': 'pstatus'},
                  {'data': 'postedby'},
          ],
             'columnDefs': [{
             'targets': 0,
             'searchable': false,
             'orderable': false,
             'className': 'dt-body-center',
             'render': function (data,type,row){
               return '<input type="checkbox" class="form-checkbox" name="id[]" value="'+$('<div/>').text(data).html()+'">';
             }
            }],
            'order': [[1, 'desc']]
        });  
      }

      
      function dataTblMomoCust(data){
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
                  {'data': 'id'},
                  {'data': 'fullname'},
                  {'data': 'phone'},
                  {'data': 'city'},
                  {'data': 'category'},
                  {'data': 'agentname'},
                  {'data': 'agentno'},
                  {'data': 'agentcust'},
          ],
             'columnDefs': [{
             'targets': 0,
             'searchable': false,
             'orderable': false,
             'className': 'dt-body-center',
             'render': function (data,type,row){
               return '<input type="checkbox" class="form-checkbox" agentno="'+row.agentno+'" custid='+row.custid+' fullname="'+row.fullname+'" phone='+row.phone+' catid='+row.catid+' agentname="'+row.agentname+'" agentcust="'+row.agentcust+'" city="'+row.city+'" category="'+row.category+'" name="id[]" value="'+$('<div/>').text(data).html()+'">';
             }
            }],
            // 'order': [[1, 'des']]
        });  
      }

      function dataTblMass(data){
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
                  {'data': 'id'},
                  {'data': 'date'},
                  {'data': 'amount'},
                  {'data': 'comm'},
                  {'data': 'postedby'}
          ],
             'columnDefs': [{
             'targets': 0,
             'searchable': false,
             'orderable': false,
             'className': 'dt-body-center',
             'render': function (data,type,row){
               return '<input type="checkbox" class="form-checkbox" date='+row.date+' amount='+row.amount+' comm="'+row.comm+'" name="id[]" value="'+$('<div/>').text(data).html()+'">';
             }
            }],
            // 'order': [[1, 'des']]
        });  
      }
        
      function dataTblClerk(data){
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
                  {'data': 'id'},
                  {'data': 'date'},
                  {'data': 'amount'},
                  {'data': 'comm'},
                  {'data': 'postedby'}
          ],
             'columnDefs': [{
             'targets': 0,
             'searchable': false,
             'orderable': false,
             'className': 'dt-body-center',
             'render': function (data,type,row){
               return '<input type="checkbox" class="form-checkbox" date='+row.date+' amount='+row.amount+' comm="'+row.comm+'" name="id[]" value="'+$('<div/>').text(data).html()+'">';
             }
            }],
            // 'order': [[1, 'des']]
        });  
      }
      
      function dataTblEvd(data){
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
                  {'data': 'id'},
                  {'data': 'date'},
                  {'data': 'amount'},
                  {'data': 'comm'},
                  {'data': 'postedby'}
          ],
             'columnDefs': [{
             'targets': 0,
             'searchable': false,
             'orderable': false,
             'className': 'dt-body-center',
             'render': function (data,type,row){
               return '<input type="checkbox" class="form-checkbox" date='+row.date+' amount='+row.amount+' comm="'+row.comm+'" name="id[]" value="'+$('<div/>').text(data).html()+'">';
             }
            }],
            // 'order': [[1, 'des']]
        });  
      }
        
        
      function dataTblSales(data){
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
                  {'data': 'id'},
                  {'data': 'date'},
                  {'data': 'product'},
                  {'data': 'quantity'},
                  {'data': 'sprice'},
                  {'data': 'amount'},
                  {'data': 'comm'},
                  {'data': 'cname'},
                  {'data': 'gcard'},
                  {'data': 'cnumber'},
                  {'data': 'cpin'},
                  {'data': 'postedby'}
          ],
             'columnDefs': [{
             'targets': 0,
             'searchable': false,
             'orderable': false,
             'className': 'dt-body-center',
             'render': function (data,type,row){
               return '<input type="checkbox" class="form-checkbox" date='+row.date+' gcard='+row.gcard+' product="'+row.product+'" sprice='+row.sprice+' quantity='+row.quantity+' cname="'+row.cname+'" cnumber='+row.cnumber+' cpin='+row.cpin+' name="id[]" value="'+$('<div/>').text(data).html()+'">';
             }
            }],
            // 'order': [[1, 'des']]
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
                  {'data': 'id'},
                  {'data': 'date'},
                  {'data': 'date_matured'},
                  {'data': 'customer'},
                  {'data': 'accno'},
                  {'data': 'capacity'},
                  {'data': 'amount'},
                  {'data': 'period'},
                  {'data': 'interest'},
                  {'data': 'topay'},
                  {'data': 'penalty'},
                  {'data': 'payment'},
                  {'data': 'balance'},
                  {'data': 'status'},
          ],
         'columnDefs': [{
         'targets': 0,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
         'render': function (data,type,row){
            return '<input name="'+row.rname+'" accno='+row.accno+'  cid='+row.id+' type="checkbox" class="form-checkbox" name="id[]" value="'+$('<div/>').text(data).html()+'">';
            }
          }],
          //'order': [[0, 'desc']]
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
          'order': [[1, 'desc']]  
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
         'render': function (data,type,row){
               return '<input type="checkbox" class="form-checkbox" name='+row.name+' stype='+row.type+' amount='+row.amount+' distribution='+row.distribution+' date='+row.date+' type="checkbox" name="id[]" value="'+$('<div/>').text(data).html()+'">';
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
                  {'data': 'id'},
                  {'data': 'id'},
                  {'data': 'name'},
                  {'data': 'code'},
                  {'data': 'min_amount'},
                  {'data': 'max_amount'},
                  {'data': 'form_fee'},
                  {'data': 'processing_fee'},
                  {'data': 'interest'},
                  {'data': 'penalty'},
                  {'data': 'date_created'}
          ],
         'columnDefs': [{
         'targets': 0,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
          'render': function (data,type,row){
               return '<input cid='+row.id+' code='+row.code+' min_amount='+row.min_amount+' max_amount='+row.max_amount+' form_fee='+row.form_fee+' processing_fee='+row.processing_fee+' interest='+row.interest+' penalty='+row.penalty+' name="'+row.name+'"  type="checkbox" class="form-checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
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
                  {'data': 'id'},    
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
         'render': function (data,type,row){
               return '<input date='+row.date+' deposit='+row.deposit+' cashout='+row.cashout+' type="checkbox" class="form-checkbox" name="id[]" value="'+$('<div/>').text(data).html()+'">';
             }
          }],
          'order': [[1, 'desc']]  
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
        {'data': 'date'},
        {'data': 'id'},
        {'data': 'product'},
        {'data': 'name'},
        {'data': 'accno'},
        {'data': 'amount'},
        {'data': 'year'},
        {'data': 'month'}
      ],
         //  'columnDefs': [{
         // 'targets': 0,
         // 'searchable': false,
         // 'orderable': false,
         // 'className': 'dt-body-center',
         // 'render': function (data, type, full, meta){
         //       return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
         //        }
         //    }],
      'order': [[1, 'desc']]
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
                  {'data': 'photo'},
          ],
        });  
      }


       function historyDatableF(data){
        $("#dataTableF").DataTable().destroy();
         table = $("#dataTableF").DataTable({
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
                  {'data': 'feetype'},
                  {'data': 'amount'},
          ],
        });  
      }


       function historyDatableI(data){
        $("#dataTableI").DataTable().destroy();
         table = $("#dataTableI").DataTable({
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
                  {'data': 'year'},
                  {'data': 'month'},
                  {'data': 'amount'},
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
                  {'data': 'biometric'},
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
                  {'data': 'id'},    
                  {'data': 'id'},
                  {'data': 'date'},
                  {'data': 'name'},
                  {'data': 'account_number'},
                  {'data': 'amount'},
                  {'data': 'current_balance'},
                  {'data': 'posted_by'},
                  {'data': 'photo'},
          ],

         'columnDefs': [{
         'targets': 0,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
         'render': function (data,type,row){
               return '<input class="form-checkbox" date="'+row.date+'" name="'+row.name+'" accno='+row.account_number+' amount='+row.amount+' bal='+row.current_balance+' posted="'+row.posted_by+'" type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
             }
          }],
          //'order': [[1, 'desc']]
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
          'order': [[1, 'desc']]
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
                  {'data': 'id'},
                  {'data': 'date'},
                  {'data': 'id'},
                  {'data': 'name'},
                  {'data': 'photo', render: function(data,type,row){
                   if(row.photo.length>20){
                     return "<a href='https://drive.google.com/thumbnail?id="+row.photo+"' target='_blank'><image src='https://drive.google.com/thumbnail?id="+row.photo+"' width='50' height='50'><a/>";
                    }else{
                     return "<a href='https://greenedis.org/stupload/"+row.photo+"' target='_blank'><image src='https://greenedis.org/stupload/"+row.photo+"' width='50' height='50'><a/>";
                    }
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
         'render': function (data,type,row){
               return '<input class="form-checkbox" photo='+row.photo+' dob="'+row.dob+'" contact='+row.contact1+' city="'+row.city+'" area="'+row.area+'" occupation="'+row.occupation+'" identification="'+row.identification+'" idnumber='+row.idnumber+' next_of_kin="'+row.next_of_kin+'" next_of_kin_contact="'+row.next_of_kin_contact+'" fname="'+row.firstname+'" lname="'+row.lastname+'" oname="'+row.othername+'" type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
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