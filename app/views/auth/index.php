<h1>Welcome here</h1>
<style>
    #login_bg{
  background: url(assets/img/lbook.jpg) center center no-repeat fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  min-height: 100vh;
  width: 100%;
}
</style>
<body id="login_bg">
<!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v14.0&appId=613548730135457&autoLogAppEvents=1" nonce="AEPVDIOo"></script> -->
    <div data-loader="circle-side"></div>
  </div>
<div id="login">
    <aside>
      <figure>
        <a href="https://linksengineering.net"><img src="assets/img/logo1.png" width="149" height="42" alt=""></a>
      </figure>
        <form class="was-validated logSession" autocomplete="off">
                <?php 
                        $db=$data["initiator"];
                        $ipaddress = getenv("REMOTE_ADDR");
                        if($db->get_data_here_value("SELECT ID FROM activity_tb WHERE IPADDRESS = '$ipaddress'","ID")>0){
                            ?>
                            <div class="text-center"><h2>Welcome back,</h2></div>
                            <?php
                        }else{
                            ?>
                            <div class="text-center"><h3>Sign In,</h3></div>
                            <?php  
                        }
                        ?>
        <div style="margin-top:20%"></div>
        <div class="form-group">
          <div class="col-md-10">
            <input type="text" class="is-invalid form-control log" placeholder="Username" id="user" value="BERLYNDA" required>
          </div>
        </div>
        <div class="form-group">
            <div class="col-md-10">
            <input type="password" class="is-invalid form-control log" placeholder="Password" value="inner5" id="pass" required>
          </div>
          <small><a href="#0">Forgot password?</a></small>
        </div>
        <a href="#0" class="btn_1 rounded full-width add_top_60" id="btnLogin"><i class="spinner"></i> Login to L-BOOK</a>
        <div class="text-center add_top_10">New to L-Book? <strong><a href="https://linksengineering.net/l-book">Sign up!</a></strong></div>
         <div style="margin-top:2%" align="center"><div class="fb-like" data-href="https://m.facebook.com/linksengpage" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div></div>
         <div align="center"><a href="home">Go Home</a></div>
      </form>
       <form class="was-validated expSession" autocomplete="off" style="display: none;">
        <div class="text-center"><h2>Product Activation</h2></div>
        <div style="margin-top:20%"></div>
        <div class="form-group">
          <div class="col-md-10">
            <label>Enter Activation code</label>
            <input type="text" class="is-invalid form-control act" id="prodcode"  placeholder="xxxxxxxxxxxxx" id="idActivation" required>
          </div>
        </div>
        <a href="#0" class="btn_1 rounded full-width add_top_60" id="btnActivate"><i class="spinner"></i> Activate Account</a>
            <div class="fb-like" data-href="https://m.facebook.com/linksengpage" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
         <div align="center" style="margin-top:10%"><i class="fa fa-key"></i><a style="color:#480048" href="#" id="idGetKey" class="spinner">Get Activation Code here</a></div>
      </form>
      <div class="copy"><a href="https://linksengineering.net" style="color:black">© <?= date("Y"); ?> Links Engineering. All rights reserved</a></div>
    </aside>
  </div>
</body>