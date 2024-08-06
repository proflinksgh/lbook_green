<!DOCTYPE html>
<?php 
if($page_parse=="home"||$page_parse=="about"||$page_parse=="contact"||$page_parse == "onboard"||$page_parse == "pricing"){
  ?>
  <html class="bd-theme-light" lang="zxx">
  <?php
}else{
  ?>
  <html>
  <?php
}
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>L-Book Fintech</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Advanced Fintech software to streamline various Financial processes">
    <meta name="author" content="linksengineering">
    <meta name="keywords" content="L-Book, Lbook, Fintech, Fintech Software, Financial Technology, Online Banking, Digital Payments, Mobile payments, Financial Innovation, Financial Software, Fintech system,  Micro-Finance, SUSU, Savings and loan, Banking, Micro Banking">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <meta property="og:url" content="https://lbook.linksengineering.net" />
    <meta property="og:description" content="Advanced Fintech software to streamline various Financial processes" />
    <meta property="og:image" content="https://lbook.linksengineering.net/assets/img/adimg.png" />
    <meta property="og:type" content="article" />
    <meta property="og:locale" content="en_GB" />
    <link rel="apple-touch-icon" type="image/x-icon" href="assets/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144-precomposed.png">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <?php if($page_parse == "auth"||$page_parse == 'activation') {
    ?>
    <script src='https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>'></script>
    <?php 
    define('SITE_KEY', '6Lfz-N4ZAAAAAGsZE3tO3hmJkqmr8LIxkcyHEUQl');
    define('SECRET_KEY', '6Lfz-N4ZAAAAAOi0sFWjOvQD3NiPwDV-UOKV3Op9');
    function getCaptcha($SecretKey){
            $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}");
            $Return = json_decode($Response);
            return $Return;
    }
    ?>
    
    <link href="assets/css/login/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/login/style.css" rel="stylesheet">
    <link href="assets/css/login/vendors.css" rel="stylesheet">
    <link href="assets/css/login/icon_fonts/css/all_icons.min.css" rel="stylesheet">
    <link href="assets/css/login/custom.css" rel="stylesheet">
    <?php
    }else{
    if($page_parse=="home"||$page_parse=="contact"||$page_parse=="about"||$page_parse=="onboard"||$page_parse == "pricing"){
      ?>
      <link rel="stylesheet" href="assets/landing/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/landing/css/animate.min.css">
      <link rel="stylesheet" href="assets/landing/css/swiper.min.css">
      <link rel="stylesheet" href="assets/landing/css/slick.css">
      <link rel="stylesheet" href="assets/landing/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/landing/css/fontawesome-pro.css">
      <link rel="stylesheet" href="assets/landing/css/flaticon_finwise.css">
      <link rel="stylesheet" href="assets/landing/css/spacing.css">
      <link rel="stylesheet" href="assets/landing/css/main.css">
      <?php
      }else{
    ?>
    <div id="preloader">
    <div data-loader="circle-side"></div>
    </div>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/login/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/login/style.css" rel="stylesheet">
    <link href="assets/css/login/vendors.css" rel="stylesheet">
    <link href="assets/css/icon_fonts/css/all_icons.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="assets/css/admin.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="assets/css/sweetalert.css" rel="stylesheet">
     <?php
      }
     } 
    ?>
</head>