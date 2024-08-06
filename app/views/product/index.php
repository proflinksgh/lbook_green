    <body class="fixed-nav sticky-footer" id="page-top">
  <div class="content-wrapper">
     <input type="hidden" id="rotator" name="rotator" value="34" />
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Products</li>
      </ol>  
      <div class="card mb-3">
        <div class="card-header">        
          <i class="fa fa-table"></i> All Product</div>
            <div align="right" style="margin-top:1%">
           <a href="new-product" class="btn btn-primary medium"><i class="fa fa-user-plus"></i> New Product</a> 
           <a href="#" class="btn btn-success medium btnUpdateProd"><i class="fa fa-pencil-square-o"></i> Edit</a>
           <a href="#" class="btn btn-danger medium" id="idDeleteProduct"><i class="fa fa-remove"></i> Delete</a>
           </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                    <th>#</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Min Amount</th>
                    <th>Max Amount</th>
                    <th>Min Bal</th>
                    <th>Interest rate</th>
                    <th>Period</th>
                    <th>Entry Fee</th>
                    <th>Withdrawal Fee</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                   <th>#</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Min Amount</th>
                    <th>Max Amount</th>
                    <th>Min Bal</th>
                    <th>Interest rate</th>
                    <th>Period</th>
                    <th>Entry Fee</th>
                    <th>Withdrawal Fee</th>
                </tr>
              </tfoot>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
</body>






          


<form action="" method="POST" id="modal-form">
<div class="container">  
<div class="modal fade" id="modalNewProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">New savings product</p>
      </div>

      <!--Body-->
      <div class="modal-body">

                 
                         <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idProductName" class="form-control col" type="text" placeholder= "Name" name="name" required="required">
                            </div>
                          </div>


                             <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                              <input id="idProductCode" class="form-control col" type="text" placeholder= "Code" name="code" required="required">
                            </div>
                          </div>
                          
                          
                         <div class="form-group row">
                             <div class="col-md-6 col-sm-6 ">
                                 <h6>Initial Min Amount</h6>
                            <input id="idMinAmount" class="form-control col" value="0" name="init_min_amnt" required="required"> 
                            </div>
                          </div>
                          
                          
                        <div class="form-group row">
                         <div class="col-md-6 col-sm-6 ">
                             <h6>Initial Max Amount</h6>
                            <input id="idMaxAmount" class="form-control col"  value="0" name="init_max_amnt" required="required">
                        </div>
                     </div>
                    
                      <div class="form-group row">
                         <div class="col-md-6 col-sm-6 ">
                             <h6>Balance Min</h6>
                            <input id="idBalMin" class="form-control col"  value="0" name="bal_min" required="required">
                        </div>
                     </div>
                     
                    <div class="form-group row">
                         <div class="col-md-6 col-sm-6 ">
                             <h6>Balance Max</h6>
                            <input id="idBalMax" class="form-control col"  value="0" name="bal_max" required="required">
                        </div>
                     </div>
                     
                      <div class="form-group row">
                         <div class="col-md-6 col-sm-6 ">
                             <h6>Interest Rate</h6>
                            <input id="idInterestRate" class="form-control col"  value="0" name="init_rate" required="required">
                        </div>
                     </div>
                     
                      <div class="form-group row">
                         <div class="col-md-6 col-sm-6 ">
                             <h6>Interest Period</h6>
                            <select name="intPeriod" id="intPeriod" class="form-control">
                                <option disabled="disabled" selected="selected">Select interest</option>
                                    <option value="0">  Not applicable</option>
                                    <option value="7">  Weekly</option>
                                    <option value="30"> Monthly</option>
                                    <option value="356">Yearly</option>
                            </select>
                        </div>
                     </div>
                     <div class="form-group row">
                       <div class="col-md-6 col-sm-6 ">
                             <h6>Entry fee</h6>
                            <input id="idEntryFee" class="form-control col"  value="0" name="entry_fee" required="required">
                        </div>
                     </div>
                     
                        <div class="form-group row">
                       <div class="col-md-6 col-sm-6 ">
                             <h6>Withdrawal fee</h6>
                            <input id="idWithdrawalFee" class="form-control col"  value="0" name="withdrawal_fee" required="required">
                        </div>
                     </div>

      </div>
      <div class="modal-footer flex-center">
        <a id = "btnPostProduct" class="btn btn-success">Create</a>
      </div>
    </div>
  </div>
</div>
</div>
</form>