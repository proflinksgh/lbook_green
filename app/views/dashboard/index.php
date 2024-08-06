<div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     <a class="navbar-brand" href="#">
                 

                    </a>
                </div>
             
                </div>
                <span class="logout-spn" >
                  <center><a id="idSignout" href="auth" style="color:#fff;">LOGOUT<i class="fa fa-power-off fa-5x my-log"></i></a></center> 

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                
               <div class="sidebar-collapse">
              
                
           </div>      
        </div>
        </nav> 
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                       <center id="idCompany"><h3></h3></center>  
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                            <form class="search-box" action="#" style="margin:auto;max-width:400px">
                                <input type="text" id="search" placeholder="Search with account number" name="search">
                                <button type="button" id="btnSearch"><i class="fa fa-search"></i></button>
                              </form>  
                        </div>
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
                            <div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="register" >
   <i class="fa fa-user-plus fa-5x"></i>
                      <h5>Register</h5>
                      </a>
                      </div>
                     
                     
                  </div> 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square" id="idClientIcon">
                           <a href="clients" >
                      <i class="fa fa-users fa-5x"></i>
                      <h5>Clients</h5>
                      </a>
                      </div>
                  </div>

                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square" id="idProductIcon">
                           <a href="product" >
 <i class="fa fa-gift fa-5x"></i>
                      <h5>Products</h5>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square" id="idAccountIcon">
                           <a href="openaccount" >
 <i class="fa fa-pencil-square-o fa-5x"></i>
                      <h5>Accounts</h5>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square" id="idTransactionIcon">  
                           <a href="deposit" >
                     <i class="fa fa-money fa-5x"></i>
                      <h5>Transactions</h5>
                      </a>
                      </div>
                     
                     
                  </div>
                  
                 
                  
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square" id="idManagementIcon">
                           <a href="management" >
 <i class="fa fa-folder-open fa-5x"></i>
                      <h5>Management</h5>
                      </a>
                      </div>
                     
                     
                  </div>
                  
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square" id="idLoanIcon">
                           <a href="loan" >
 <i class="fa fa-dollar fa-5x"></i>
                      <h5>Loans</h5>
                      </a>
                      </div>
                     
                     
                  </div>
                  
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square" id="idReportIcon">
                           <a href="report" >
 <i class="fa fa-line-chart fa-5x"></i>
                      <h5>Report</h5>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square" id="idPayRollIcon">
                           <!--<a href="payroll">-->
 <i class="fa fa-calculator fa-5x"></i>
                      <h5>Payroll</h5>
                      </a>
                      </div>
                     
                     
                  </div>
                  
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square" id="idViewRec">
                           <a href="daily-record" >
 <i class="fa fa-list-alt fa-5x"></i>
                      <h5>Momo records</h5>
                      </a>
                      </div>
                     
                     
                  </div>
                  
              </div>
                
                   <div class="footer">
      
    
                <div class="row">
                    <div class="col-lg-12" >
                   <center> &copy;  2020 Ldevelop | L-Book 1.0.0 <a href="#" style="color:#fff;" target="_blank"></a></center>
                    </div>
                </div>
            </div>    
               		 
                  <!-- /. ROW  --> 
    </div>
    
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
        
        
<form action="" method="POST" id="modal-form">
<div class="container">  
<div class="modal fade" id="popAccounts" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    Content
    <div class="modal-content text-center">
      Header
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Success</p>
      </div>

      Body
      <div class="modal-body">
      <a id = "continueClient" class="btn btn-primary" style="color: white">Savings</a>
      <a id = "continueClient" class="btn btn-primary" style="color: white">Withdrawals</a>
      </div>   
    </div>
  </div>
</div>
</div>
</form>
        
        
        
        
   