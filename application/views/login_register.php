<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Sumon Rahman">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Dimdee App Landing Template</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" type="assets/image/ico" href="assets/images/DimDee logo.png" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    <!-- Preloader-content -->
    <div class="preloader">
        <span><i class="lnr lnr-sun"></i></span>
    </div>
    <!-- MainMenu-Area -->
    <nav class="mainmenu-area" data-spy="affix" data-offset-top="200">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index"><img src="assets/images/DimDee logo.png" alt="Logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="primary_menu">
                <ul class="nav navbar-nav mainmenu">
                    <li class="active"><a href="#home_page">Home</a></li>
                    <li><a href="index#about_page">About</a></li>
                    <li><a href="index#features_page">Features</a></li>
                    <li><a href="index#gallery_page">Gallery</a></li>
                    <li><a href="index#questions_page">FAQ</a></li>
                    <li><a href="index#contact_page">Contacts</a></li>
                    <li><a href="manage_event">Manage Event</a></li>
                </ul>
                <div class="right-button hidden-xs">
                    <a href="login_register">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- MainMenu-Area-End -->
    <!-- Home-Area -->
    <header class="home-area overlay" style="background-image: url('assets/images/header-bg.jpg')" id="home_page" >
        <div class="container">
            <div class="row" >
                  <div class="cont_login">
                    <div class="cont_info_log_sign_up">
                      <div class="col_md_login">
                        <div class="cont_ba_opcitiy">
                          <h2>LOGIN</h2>  
                          <p>Input your Username and Password</p> 
                          <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
                        </div>
                      </div>
                      <div class="col_md_sign_up">
                        <div class="cont_ba_opcitiy">
                          <h2>SIGN UP</h2>    
                          <p>Input your Username and Email. We'll send link to your valid email.</p>
                          <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
                        </div>
                      </div>
                    </div>

                      
                      <div class="cont_back_info">
                         <div class="cont_img_back_grey">
                         <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
                         </div>
                      </div>
                      <div class="cont_forms" >
                          <div class="cont_img_back_">
                             <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
                             </div>
                          <div class="cont_form_login">
                            <a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
                               <h2>LOGIN</h2>
                             <input type="text" placeholder="Email" />
                            <input type="password" placeholder="Password" />
                            <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
                          </div>
                          
                           <div class="cont_form_sign_up">
                              <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
                                   <h2>SIGN UP</h2>
                              <input type="text" placeholder="User" />
                              <input type="text" placeholder="Email" />
                              <!-- <input type="password" placeholder="Password" />
                              <input type="password" placeholder="Confirm Password" /> -->
                              <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
    </header>
    <!-- Home-Area-End -->

    <!-- Footer-Area -->
    <footer class="footer-area" id="contact_page">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title text-center">
                            <h5 class="title">Contact US</h5>
                            <h3 class="dark-color">Find Us By Bellow Details</h3>
                            <div class="space-60"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-map-marker"></span>
                            </div>
                            <p>
                                Sekolah Vokasi Universitas Gadjah Mada<br />Sekip Unit 1 Catur Tunggal Depok Sleman Yogyakarta, Indonesia. 55281
                            </p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-phone-handset"></span>
                            </div>
                            <p>+65 93901336 <br /> +65 93901337</p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-envelope"></span>
                            </div>
                            <p>dimdee.app@gmail.com <br /> winter_is_coming@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-Bootom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-5">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <span>Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script> 
                | Web by Social Team Application Project KOMSI 18
                | This template is made 
                by
                <a href="https://colorlib.com" target="_blank">Colorlib
                </a> , Pesaton , & eventasia
            </span>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-md-7">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#about_page">About</a></li>
                                <li><a href="#gallery_page>Services</a></li>
                                <li><a href="#features_page">Features</a></li>
                                <!-- <li><a href="#">Pricing</a></li> -->
                                <!-- <li><a href="#">Testimonial</a></li> -->
                                <li><a href="#contact_page">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-Bootom-End -->
    </footer>
    <!-- Footer-Area-End -->
         <!--Vendor-JS-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/contact-form.js"></script>
    <script src="assets/js/ajaxchimp.js"></script>
    <script src="assets/js/scrollUp.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/index.js"></script>
</body>

</html>
