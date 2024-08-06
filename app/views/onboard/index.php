 <div class="glow__area">
        <div class="body__color-glow"></div>
        <div class="body__color-glow glow-2"></div>
    </div>
        <main>
        <div class="intro-style section-space-top">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper section__title-space text-center">
                            <h2 class="section__title">Sign Up for Free Trial</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact form area start -->
        <div class="contact__area section-space-bottom">
            <div class="container">
                <div class="row gy-50 align-items-center wow fadeIn" data-wow-delay=".3s">
                    <div class="col-xxl-6 col-xl-6 col-lg-7 mx-auto">
                        <div class="contact__wrapper">
                            <div class="contact__form">
                                <form id="contact-form" action="assets/mail.php" method="POST">
                                    <div class="contact__input-wrapper">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <div class="contact__input-box mb-15">
                                                    <div class="contact__input-title">
                                                        <label for="name">Fullname<span>*</span></label>
                                                    </div>
                                                    <div class="contact__input">
                                                        <input type="text" class="lreg" id="idFullame" placeholder="Fullname">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <div class="contact__input-box mb-15">
                                                    <div class="contact__input-title">
                                                        <label for="lname">Email<span>*</span></label>
                                                    </div>
                                                    <div class="contact__input">
                                                         <input type="email" id="idEmail" class="lreg" placeholder="Email address">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <div class="contact__input-box mb-15">
                                                    <div class="contact__input-title">
                                                        <label for="name">Phone number<span>*</span></label>
                                                    </div>
                                                    <div class="contact__input">
                                                         <input type="tel" class="lreg" id="idPhoneNumber" placeholder="Phone number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <div class="contact__input-box mb-15">
                                                    <div class="contact__input-title">
                                                        <label for="pnumber">WhatsApp number</label>
                                                    </div>
                                                    <div class="contact__input">
                                                         <input type="tel" id="idWhatsApp" placeholder="WhatsApp number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="contact__input-box mb-15">
                                                    <div class="contact__input-title">
                                                        <label for="cname">Company name<span>*</span></label>
                                                    </div>
                                                    <div class="contact__input">
                                                        <input type="text" class="lreg" id="idCompanyname" placeholder="Business name">
                                                    </div>
                                                </div>
                                            </div>


                          

                                            <div class="col-lg-12">
                                                <div class="contact__input-box mb-15 mb-20">
                                                    <div class="contact__input-title">
                                                        <label>Business Type<span>*</span></label>
                                                    </div>
                                                    <div class="contact__select">
                                                           <select id="idType">
                                                           <option disabled selected>Business type</option>  
                                                           <option value="SUSU">SUSU</option>
                                                           <option value="Savings & Loans">Savings & Loans</option>
                                                           <option value="Credit Union">Credit Union</option>
                                                           <option value="MicroFinance">MicroFinance</option>
                                                           <option value="Hire">Hire Purchase</option>
                                                           </select> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="contact__input-box mb-15 mb-20">
                                                    <div class="contact__input-title">
                                                        <label>Number of employees<span>*</span></label>
                                                    </div>
                                                    <div class="contact__select">
                                                        <select id="idEmployees">
                                                            <option selected disabled>No. of Employees</option>
                                                            <option value="Self-employed">Self-employed</option>
                                                            <option value="1-10 employees">1-10 employees</option>
                                                            <option value="11-50 employees">11-50 employees</option>
                                                            <option value="51-200 employees">51-200 employees</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact__btn">
                                        <button class="bd-gradient-btn w-100 btnSubTrial" type="button">Sign Up <i class="spinner"></i></button>
                                    </div>
                                    <div class="log__not-account" align="center" style="margin-top:20px">
                                    <p>Already have an account?<a href="auth"> Login</a></p>
                                </div>
                                </form>
                                <p class="ajax-response"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact form area end -->
    </main>

                        <div class="modal fade modal-success" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color:#1c2c52;">
                                                <h5 class="modal-title" style="color:white;font-weight:bold">L-Book v2.0 Trial</h5>
                                            </div>
                                            <div class="modal-body">
                                                <div class="success-message">
                                                    <div class="item-icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <h3 class="item-title" id="idSetTitle"></h3>
                                                    <h4><b>Thank you for Signing up!</b></h4><br><br>
                                                    <h5>Find your Login Credentials below:</h5><br>
                                                    <p>Username: <span style="font-weight:bold">Admin</span></p>
                                                    <p>Password: <span style="font-weight:bold" id="idDemoPass"></span></p><br>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a class="bd-gradient-btn clOpenApp" href="#">Proceed to Login</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

