$(document).ready(function(){
var $online__access__tag = '/lbook_green/';

 var href = $(location).attr('href');  
 var index = href.lastIndexOf("/");
 var controller = href.substring(index+1);


 if(controller.includes("dashboard2")){
   populateChart("today");
 }


   $('.clSel').change(function(){
       var selected = $('option:selected',this).val();  
        if(selected != ''){
          populateChart($(this).val());
        }
    });



  setInterval(function() {
      if(controller.includes("dashboard2")){
        populateChart("today");
      }
  }, 20 * 5000)


Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

function populateChart(filter){
    var searchFrom = $("#idSearchFrom").val()
    var searchTo = $("#idSearchTo").val()
    if(sessionStorage.getItem("custom")==="yes"){
     // $("#idFinanceY").html(searchFrom+" to "+searchTo);
    }
    sessionStorage.setItem("custom","");
    var fd = new FormData();
    fd.append("filter", filter);
    fd.append("searchfrom", searchFrom);
    fd.append("searchto", searchTo);       
    $.ajax({
          url:""+$online__access__tag+"processor/fetchStats",
          data:fd,
          type:"POST",
          contentType: false,       
          cache: false, 
           dataType: 'JSON',            
          processData:false,
          success:function(data)
        {
         $(".amtDeposit").html("Deposits GH¢ "+data[0].deposit);
         $(".amtWith").html("Withdrawal GH¢ "+data[0].withdrawal);
         $(".amtFees").html("Fees GH¢ "+data[0].charge);
         $(".amtInterest").html("Interests GH¢ "+data[0].interest); 
         $("#idCustomers").html(data[0].customer); 
         $("#idAccounts").html(data[0].accounts);
         $("#idProduct").html(data[0].products);
         
         var total_dep = 0;
          var deposit = parseInt(data[0].deposit_calc);
          var withdrawal = parseInt(data[0].withdrawal_calc);
          var charge = parseInt(data[0].charge_calc);

          
          if(charge>deposit&&charge>withdrawal){
           total_dep = charge;
          }else if(deposit === withdrawal){
            total_dep = deposit;
          }else if(deposit>withdrawal){
            total_dep = deposit;
          }else if(withdrawal>deposit){
            total_dep = withdrawal;
          }

          var ctx = document.getElementById("myAreaChart");
          var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
              labels: data[0].selmonth,
              datasets: [
              {
                label: "Deposit",
                lineTension: 0.3,
                backgroundColor: "rgba(2,117,216,0.2)",
                borderColor: "rgba(2,117,216,1)",
                pointRadius: 5,
                pointBackgroundColor: "rgba(2,117,216,1)",
                pointBorderColor: "rgba(255,255,255,0.8)",
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(2,117,216,1)",
                pointHitRadius: 20,
                pointBorderWidth: 2,
                data: data[0].fdeposit,
              },

            {
                label: "Withdrawal",
                lineTension: 0.3,
                backgroundColor: "rgba(2,107,200,0.2)",
                borderColor: "rgba(2,100,200,1)",
                pointRadius: 5,
                pointBackgroundColor: "rgba(2,117,216,1)",
                pointBorderColor: "rgba(255,255,255,0.8)",
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(2,117,216,1)",
                pointHitRadius: 20,
                pointBorderWidth: 2,
                data: data[0].fwithdrawal,
           },

             {
                label: "Fee",
                lineTension: 0.3,
                backgroundColor: "rgba(2,100,150,0.2)",
                borderColor: "rgba(2,100,200,1)",
                pointRadius: 5,
                pointBackgroundColor: "rgba(2,80,200,1)",
                pointBorderColor: "rgba(255,255,255,0.8)",
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(2,117,216,1)",
                pointHitRadius: 20,
                pointBorderWidth: 2,
                data: data[0].fcharges,
                  }




              ],
            },
            options: {
              scales: {
                xAxes: [{
                  time: {
                    unit: 'date'
                  },
                  gridLines: {
                    display: false
                  },
                  ticks: {
                    maxTicksLimit: 7
                  }
                }],
                yAxes: [{
                  ticks: {
                    min: 0,
                    max: total_dep,
                    maxTicksLimit: 5
                  },
                  gridLines: {
                    color: "rgba(0, 0, 0, .125)",
                  }
                }],
              },
              legend: {
                display: false
              }
            }
          });
        },
        error: function(err) {
        }
      });
  }





});