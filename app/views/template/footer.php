<?php 

  if($page_parse == 'activation'||$page_parse == 'auth'||$page_parse == "reset-passwd"||$page_parse == "code-verification"||$page_parse == "reauth"){

      load_jquery_plugin('login/jquery-3.6.0.min.js');
      load_jquery_plugin('login/common_scripts.js');
      load_jquery_plugin('login/main.js');
      load_jquery_plugin('login/validate.js');
      load_jquery_plugin('login.js');

    }else{

       if($page_parse=="home"||$page_parse=="contact"||$page_parse=="about"||$page_parse == "onboard"||$page_parse == "pricing"){

        ?>
          <footer>
        <div class="footer__area theme-bg-1">
            <div class="container">
                <div class="footer__main-1">
                    <div class="row gy-50">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5 col-sm-12">
                            <div class="footer__widget-1-1">
                                <div class="footer__logo mb-30">
                                    <a href="home">
                                        <img src="assets/img/logo-display.png" alt="image bnot found">
                                    </a>
                                </div>
                                <div class="footer__content">
                                    <p>Easy-to-use cloud & offline based Financial Technology (FINTECH) developed to improve and streamline various financial processes</p>
                                    <div class="footer__social">
                                        <a href="https://facebook.com/linkseng"><i class="fa-brands fa-facebook"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-4">
                            <div class="footer__widget-1-2">
                                <div class="footer__widget-title">
                                    <h5>Products</h5>
                                </div>
                                <div class="footer__link">
                                    <ul>
                                        <li><a href="about">About</a></li>
                                        <li><a href="https://linksengineering.net/privacy-policy">Terms</a></li>
                                        <li><a href="contact">Contact us</a></li>
                                        <li><a href="pricing">Pricing</a></li>
                                        <li><a href="register">Register</a></li>
                                        <li><a href="auth">Sign In</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-4">
                            <div class="footer__widget-1-3">
                                <div class="footer__widget-title">
                                    <h5>Recommended</h5>
                                </div>
                                <div class="footer__link">
                                    <ul>
                                        <li><a href="auth">SUSU</a></li>
                                        <li><a href="auth">Savings & Loan</a></li>
                                        <li><a href="auth">Hire Purchase</a></li>
                                        <li><a href="auth">Credit Union</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-5 col-sm-4">
                            <div class="footer__widget-1-4">
                                <div class="footer__widget-title">
                                    <h5>Other sites</h5>
                                </div>
                                <div class="footer__link">
                                    <ul>
                                        <li><a href="https://pos.linksengineering.net">POS Software</a></li>
                                        <li><a href="https://sendquicksms.com">Bulk SMS</a></li>
                                        <li><a href="https://linksengineering.net/edu">School Management</a></li>
                                        <li><a href="https://lskillhub.com">L-Skill Hub</a></li>
                                        <li><a href="https://linksengineering.net/shop">Links Shop</a></li>
                                        <li><a href="https://wilmartit.com/training">Microsoft Partner university</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="footer__widget-1-5 justify-content-lg-end">
                                <div class="footer__widget-title">
                                    <h5>Download App</h5>
                                </div>
                                <div class="footer__app">
                                    <a class="footer__app-item" href="https://play.google.com/store/apps/details?id=app.linksengineering.net">
                                        <img src="assets/landing/images/paly-store-dark.png" alt="image not found">
                                    </a>
                                    <a class="footer__app-item" href="https://play.google.com/store/apps/details?id=app.linksengineering.net">
                                        <img src="assets/landing/images/apple-store-dark.png" alt="image not found">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="footer__bottom">
                            <div class="footer__copyright">
                                <p>Copyright © 2023 <a href="https://linksengineering.net">L-Book, developed by Links Engineering Ltd</a></p>
                            </div>
                            <div class="footer__conditions">
                                <ul>
                                    <li><a href="https://linksengineering.net/privacy-policy">Privacy Policy</a></li>
                                    <li><a href="https://linksengineering.net/contact">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        <?php

          load_jquery_plugin_direct('landing/js/jquery-3.6.0.min.js');
          load_jquery_plugin_direct('landing/js/waypoints.min.js');
          load_jquery_plugin_direct('landing/js/bootstrap.bundle.min.js');
          load_jquery_plugin_direct('landing/js/meanmenu.min.js');
          load_jquery_plugin_direct('landing/js/swiper.min.js');
          load_jquery_plugin_direct('landing/js/slick.min.js');
          load_jquery_plugin_direct('landing/js/wow.js');
          load_jquery_plugin_direct('landing/js/magnific-popup.min.js');
          load_jquery_plugin_direct('landing/js/type.js');
          load_jquery_plugin_direct('landing/js/counterup.js');
          load_jquery_plugin_direct('landing/js/nice-select.min.js');
          load_jquery_plugin_direct('landing/js/jquery-ui.min.js');
          load_jquery_plugin_direct('landing/js/parallax-scroll.js');
          load_jquery_plugin_direct('landing/js/ajax-form.js');
          load_jquery_plugin_direct('landing/js/login.js');
          load_jquery_plugin_direct('landing/js/main.js');
      }else{
        ?>
      <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © <?= date("Y"); ?> <a style="color:yellow" href="https://linksengineering.net">Links Engineering LTD</a> - Ashongman Estate, Accra - Ghana</small>
        </div>
      </div>
    </footer>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <?php
      load_jquery_plugin_direct('vendor/jquery/jquery.min.js');
      load_jquery_plugin_direct('vendor/bootstrap/js/bootstrap.bundle.min.js');
      load_jquery_plugin_direct('vendor/jquery-easing/jquery.easing.min.js');
      
      if($page_parse!=="register"){
        load_jquery_plugin_direct('vendor/chart.js/Chart.js');
        load_jquery_plugin_direct('vendor/datatables/jquery.dataTables.js');
        load_jquery_plugin_direct('vendor/datatables/dataTables.bootstrap4.js');
          
        load_jquery_plugin_direct("vendors/datatables.net-buttons/js/dataTables.buttons.min.js");
        load_jquery_plugin_direct("vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js");
        load_jquery_plugin_direct("vendors/datatables.net-buttons/js/buttons.flash.min.js");
        load_jquery_plugin_direct("vendors/datatables.net-buttons/js/buttons.html5.min.js");
        load_jquery_plugin_direct("vendors/datatables.net-buttons/js/buttons.print.min.js");
        load_jquery_plugin_direct("vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js");
        load_jquery_plugin_direct("vendors/datatables.net-keytable/js/dataTables.keyTable.min.js");
        load_jquery_plugin_direct("vendors/datatables.net-responsive/js/dataTables.responsive.min.js");
        load_jquery_plugin_direct("vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js");
        load_jquery_plugin_direct("vendors/datatables.net-scroller/js/dataTables.scroller.min.js");
        load_jquery_plugin_direct("vendors/jszip/dist/jszip.min.js");
        load_jquery_plugin_direct("vendors/pdfmake/build/pdfmake.min.js");
        load_jquery_plugin_direct("vendors/pdfmake/build/vfs_fonts.js"); 
      }

      if($page_parse!=="register"){
      load_jquery_plugin_direct('vendor/jquery.selectbox-0.2.js');
      load_jquery_plugin_direct('vendor/retina-replace.min.js');
      load_jquery_plugin_direct('vendor/jquery.magnific-popup.min.js');
      
      load_jquery_plugin('admin.js');
      load_jquery_plugin('admin-charts.js');
      load_jquery_plugin('html2pdf.bundle.min.js');
      }
      
      load_jquery_plugin('main.js');
      load_jquery_plugin('sweetalert.min.js');
      load_jquery_plugin('upload_image.js');
      load_jquery_plugin('app.js');
      load_jquery_plugin('sync.js');
       }
    } 
 ?>