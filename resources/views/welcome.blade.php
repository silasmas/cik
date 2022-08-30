@include("pageHtml.menu.entete")

    <!-- Start Site Header Wrap -->
    <header class="tm-header3">
        <div class="tm-site-header">
            <div class="tm-header-info-wrap">
                <div class="container tm-header-info">
                    <a href="#"><i class="fa fa-phone"></i>1-800-915-6270</a>
                    <a href="#"><i class="fa fa-envelope"></i>info@trustlife.com</a>
                </div>
            </div>
            <div class="tm-header-menu">
                <div class="container tm-header-menu-container">
                    <div class="tm-site-branding">
                        <!-- For Image Logo -->
                        <a href="index.html" class="tm-logo-link">
                            <img src="assets/img/logo.png" alt="" class="tm-logo">
                        </a>
                        <!-- For Site Title -->
                        <!-- <span class="tm-site-title">
                        <a href="index.html">Trustlife</a>
                        </span> -->
                    </div>
                    <nav class="tm-primary-nav tm-onepage-nav">
                        <ul class="tm-primary-nav-list">
                            <li class="menu-item menu-item-has-children current-menu-ancestor current-menu-parent">
                                <a href="#home" class="nav-link tm-smooth-move">HOME</a>
                               @include("pageHtml.deroulant")
                            </li>
                            <li class="menu-item"><a href="#about" class="nav-link tm-smooth-move">ABOUT</a></li>
                            <li class="menu-item"><a href="#department" class="nav-link tm-smooth-move">DEPARTMENT</a></li>
                            <li class="menu-item"><a href="#doctor" class="nav-link tm-smooth-move">DOCTOR</a></li>
                            <li class="menu-item"><a href="#gallery" class="nav-link tm-smooth-move">GALLERY</a></li>
                            <li class="menu-item"><a href="#price" class="nav-link tm-smooth-move">PRICE</a></li>
                            <li class="menu-item menu-item-has-children"><a href="#blog" class="nav-link tm-smooth-move">BLOG</a>
                                <ul>
                                    <li class="menu-item"><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li class="menu-item"><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li class="menu-item"><a href="blog-full-width.html">Blog Full Width</a></li>
                                    <li class="menu-item"><a href="blog-details-right-sidebar.html">Single Blog Image Post</a></li>
                                    <li class="menu-item"><a href="blog-details-left-sidebar.html">Single Blog Slider Post</a></li>
                                    <li class="menu-item"><a href="blog-details-full-width.html">Single Blog Video Post</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="#contact" class="nav-link tm-smooth-move">CONTACT</a></li>
                            <li class="menu-item"><a href="#appointment" class="nav-link tm-smooth-move">APPOINTMENT</a></li>
                        </ul>
                    </nav>
                </div><!-- .tm-header-menu-container -->
            </div><!-- .tm-header-menu -->
        </div><!-- .tm-site-header -->
    </header>
    <!-- End Site Header Wrap -->

    <!-- Start Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="slider-text">
                <h1 class="tm-headline letters tm-rotate-text">Take The world’s <br>
                    Best Quality Medical <br>
                    Treatmen for
                    <span class="tm-words-wrapper">
                        <b class="is-visible">DENTAL</b>
                        <b>NEUROLOGY</b>
                        <b>CRUTCHES</b>
                        <b>CARDIOLOGY</b>
                        <b>PULMONARY</b>
                        <b>X-RAY</b>
                    </span>
                </h1>
                <div class="empty-space col-sm-b20 col-xs-b10"></div>
                <p>The quality of our service and the professionalism of our staff are <br>
                the reason for Trustlife Center’s success.</p>
                <div class="empty-space col-md-b55 col-sm-b35 col-xs-b25"></div>
                <div class="tm-hero-btn"><a href="#appointment" class="tm-btn1">APPOINTMENT</a></div>
            </div>
        </div><!-- .container -->
        <div class="tm-hero-slider owl-carousel tm-dots1" id="tm-hero-slider">
            <img src="assets/img/slide-01.jpg" alt="slide-01">
            <img src="assets/img/slide-02.jpg" alt="slide-02">
            <img src="assets/img/slide-03.jpg" alt="slide-03">
        </div>
        <div class="hero-overlay"></div>
        <img src="assets/img/sweet-shap.png" alt="Sweet Shap" class="sweet-shap">
    </section>
    <!-- End Hero Section -->

    <!-- Start  -->
    <section>
        <div class="empty-space col-md-b100 col-xs-b40"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4" >
                    <div class="empty-space col-md-b0 col-xs-b30"></div>
                    <div class="tm-icon-box">
                        <div class="tm-icon"><i class="fa fa-user-md"></i></div>
                        <h2 class="tm-icon-box-title">Qualified Doctors</h2>
                        <p class="tm-icon-box-text">Our doctors have a wide range of clinical experience ranging from newly qualified junior doctors to senior consultants.</p>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-4">
                    <div class="empty-space col-md-b0 col-xs-b30"></div>
                    <div class="tm-icon-box">
                        <div class="tm-icon"><i class="fa fa-ambulance"></i></div>
                        <h2 class="tm-icon-box-title">Emergency Care</h2>
                        <p class="tm-icon-box-text">Our centers provide convenient and high-quality care for a variety of common illnesses and injuries.</p>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-4">
                    <div class="empty-space col-md-b0 col-xs-b30"></div>
                    <div class="tm-icon-box">
                        <div class="tm-icon"><i class="fa fa-hospital-o"></i></div>
                        <h2 class="tm-icon-box-title">24 Hours Service</h2>
                        <p class="tm-icon-box-text">Our technical team is available for 24/7, We always prepared any emergency situation with 10 ambulances.</p>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div>
    </section>
    <!-- Start  -->

    <!-- Start About Secton -->
    <section id="about">
        <div class="empty-space col-md-b100 col-xs-b70"></div>
        <div class="tm-section-heading text-center">
            <h2>Who We Are</h2>
            <div class="tm-section-seperator"><span></span></div>
            <div class="empty-space col-md-b60 col-xs-b40"></div>
        </div>
        <div class="tm-relative">
            <div class="tm-half-section-bg left">
                <img src="assets/img/about-hafl-bg.jpg" alt="about hafl bg">
            </div>
            <div class="empty-space col-xs-b60"></div>
            <div class="container">
                <div class="row row-md-reverce">
                    <div class="col-lg-5">
                        <div class="tm-shedule-wrap">
                            <div class="tm-shedule">
                                <h3 class="tm-shedule-title">Opening Hours</h3>
                                <ul class="tm-shedule-list">
                                    <li>
                                        <span>Monday - Friday</span>
                                        <span>8:00 - 18:00</span>
                                    </li>
                                    <li>
                                        <span>Saturday</span>
                                        <span>9.00 - 18.00</span>
                                    </li>
                                    <li>
                                        <span>Sunday</span>
                                        <span>Closed</span>
                                    </li>
                                </ul>
                            </div><!-- .tm-shedule -->
                            <div class="empty-space col-md-b40 col-xs-b30"></div>
                            <div class="tm-shedule">
                                <h3 class="tm-shedule-title">Visitors Hours</h3>
                                <ul class="tm-shedule-list">
                                    <li>
                                        <span>Monday - Friday</span>
                                        <span>8:00 - 18:00</span>
                                    </li>
                                    <li>
                                        <span>Saturday</span>
                                        <span>9.00 - 18.00</span>
                                    </li>
                                    <li>
                                        <span>Sunday</span>
                                        <span>Closed</span>
                                    </li>
                                </ul>
                            </div><!-- .tm-shedule -->
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-7">
                        <div class="empty-space col-md-b30 col-xs-b0"></div>
                        <div class="tm-about-wrap tm-hf-hide">
                            <div class="tm-about tm-gray-bg wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.1s">
                                <h3 class="tm-about-title">Why People Choose Our <span>Hospital</span>?</h3>
                                <div class="tm-about-text">
                                    <p>We provide the best service all over the country. People chose our hospital because of the following advantages. </p>
                                    <p>We have a list of associated doctors, Every Department Specialists are availability, Available ambulance facilities, OT/ICU, trauma care is best as always, Our pharmacy is opend 24/7, Our cost is affordable.  </p>
                                </div>
                                <div class="empty-space col-xs-b25"></div>
                                <div class="tm-about-btn">
                                    <a href="#" class="tm-btn1">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="empty-space col-xs-b30"></div>
                    </div><!-- .col -->
                </div>
            </div>
            <div class="empty-space col-xs-b60"></div>
        </div>
    </section>
    <!-- End About Secton -->

    <!-- Start Department Section -->
    <section class="tm-gray-bg" id="department">
        <div class="empty-space col-md-b100 col-xs-b70"></div>
        <div class="tm-section-heading text-center">
            <h2>Our Department</h2>
            <div class="tm-section-seperator"><span></span></div>
            <div class="empty-space col-md-b60 col-xs-b40"></div>
        </div>
        <div class="container">
            <div class="tm-tab-wrap">
                <div class="tm-tabs-wrap">
                    <ul class="tabs">
                        <li><i class="icofont icofont-tooth"></i>DENTAL CARE</li>
                        <li><i class="icofont icofont-brain"></i>NEUROLOGY</li>
                        <li><i class="icofont icofont-crutches"></i>CRUTCHES</li>
                        <li><i class="icofont icofont-pulse"></i>CARDIOLOGY</li>
                        <li><i class="icofont icofont-lungs"></i>PULMONARY</li>
                        <li><i class="icofont icofont-xray"></i>X-RAY</li>
                    </ul> <!-- .tabs -->
                </div>
                <div class="empty-space col-md-b60 col-xs-b40"></div>
                <div class="tm-tab-content">
                    <div class="tm-tabs-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tm-dept-img"><img src="assets/img/1.dental.jpg" alt=""></div>
                            </div><!-- .col -->
                            <div class="col-lg-6">
                                <div class="tm-dept-details-wrap">
                                    <div class="tm-about tm-gray-bg">
                                        <h3 class="tm-about-title">Welcome to our <span>DENTAL CARE</span></h3>
                                        <div class="tm-about-text">
                                            <p>More than 15 years, The Dental Health Care Center has practiced with one goal: to ensure our patients achieve a high level of oral health with as much comfort as possible.</p>
                                            <p>We don’t just provide great dentistry, we make sure you understand all facets of your oral health.</p>
                                        </div>
                                        <div class="empty-space col-xs-b25"></div>
                                        <div class="tm-about-btn">
                                            <a href="#" class="tm-btn1">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div>
                    </div> <!-- .tabs_item -->
                    <div class="tm-tabs-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tm-dept-img"><img src="assets/img/2.neurology.jpg" alt=""></div>
                            </div><!-- .col -->
                            <div class="col-lg-6">
                                <div class="tm-dept-details-wrap">
                                    <div class="tm-about tm-gray-bg">
                                        <h3 class="tm-about-title">Welcome to our <span>NEUROLOGY</span></h3>
                                        <div class="tm-about-text">
                                            <p>Our Neurology deparment of Trustlife Hospital serves as the receiving point for the most seriously injured people from across the country and treats patients with brain and spine.</p>
                                            <p>In addition to being a centre of excellence, the Neurology deparment aims to be an asset to national and international communities.</p>
                                        </div>
                                        <div class="empty-space col-xs-b25"></div>
                                        <div class="tm-about-btn">
                                            <a href="#" class="tm-btn1">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div>
                    </div> <!-- .tabs_item -->
                    <div class="tm-tabs-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tm-dept-img"><img src="assets/img/3.crutches.jpg" alt=""></div>
                            </div><!-- .col -->
                            <div class="col-lg-6">
                                <div class="tm-dept-details-wrap">
                                    <div class="tm-about tm-gray-bg">
                                        <h3 class="tm-about-title">Welcome to our <span>CRUTCHES</span></h3>
                                        <div class="tm-about-text">
                                            <p>It is important to start walking as soon as you can after your surgery. But you will need support for walking while your leg heals. Trustlife may be a good choice after a leg injury or surgery if you only need a little help with balance and stability. </p>
                                            <p>Crutches are also useful when your leg is only a little weak or painful.</p>
                                        </div>
                                        <div class="empty-space col-xs-b25"></div>
                                        <div class="tm-about-btn">
                                            <a href="#" class="tm-btn1">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div>
                    </div> <!-- .tabs_item -->
                    <div class="tm-tabs-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tm-dept-img"><img src="assets/img/4.cardiology.jpg" alt=""></div>
                            </div><!-- .col -->
                            <div class="col-lg-6">
                                <div class="tm-dept-details-wrap">
                                    <div class="tm-about tm-gray-bg">
                                        <h3 class="tm-about-title">Welcome to our <span>CARDIOLOGY</span></h3>
                                        <div class="tm-about-text">
                                            <p>Cardiology department is served dedicately 24/7 and it is the only hospital of Kanada where emergency angioplasty can be carried out round the clock.</p>
                                            <p>Cardiology department is operated by a strong and dedicated team of 3 cardiologists, And they has more then 20 years of expericnce.</p>
                                        </div>
                                        <div class="empty-space col-xs-b25"></div>
                                        <div class="tm-about-btn">
                                            <a href="#" class="tm-btn1">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div>
                    </div> <!-- .tabs_item -->
                    <div class="tm-tabs-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tm-dept-img"><img src="assets/img/5.pulmones.jpg" alt=""></div>
                            </div><!-- .col -->
                            <div class="col-lg-6">
                                <div class="tm-dept-details-wrap">
                                    <div class="tm-about tm-gray-bg">
                                        <h3 class="tm-about-title">Welcome to our <span>PULMONARY</span></h3>
                                        <div class="tm-about-text">
                                            <p>More than 15 years ago, we pioneered the first hospitals in the nation to specialize in pulmonary treatment, so you can feel confident when your loved one is under our care.</p>
                                            <p>Today, our expertise continues to be pulmonary disease management and providing quality treatment based on the latest protocols. </p>
                                        </div>
                                        <div class="empty-space col-xs-b25"></div>
                                        <div class="tm-about-btn">
                                            <a href="#" class="tm-btn1">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div>
                    </div> <!-- .tabs_item -->
                    <div class="tm-tabs-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tm-dept-img"><img src="assets/img/6.xray.jpg" alt=""></div>
                            </div><!-- .col -->
                            <div class="col-lg-6">
                                <div class="tm-dept-details-wrap">
                                    <div class="tm-about tm-gray-bg">
                                        <h3 class="tm-about-title">Welcome to our <span>X-RAY</span></h3>
                                        <div class="tm-about-text">
                                            <p>We have the high-quality x-ray machine and our technique is so much experienced. We delivered x-ray report within one hour.</p>
                                            <p>After handover x-ray report we give initial advice of an experienced doctor and suggest related experienced doctor.</p>
                                        </div>
                                        <div class="empty-space col-xs-b25"></div>
                                        <div class="tm-about-btn">
                                            <a href="#" class="tm-btn1">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div>
                    </div> <!-- .tabs_item -->

                </div> <!-- .tm-tab-content -->
            </div> <!-- .tab -->
        </div>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
    </section>
    <!-- End Department Section -->

    <!-- Start Appointment Section -->
    <section class="tm-relative" id="appointment">
        <div class="tm-half-section-bg right">
            <img src="assets/img/appointment-bg.jpg" alt="about hafl bg">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 tm-hf-hide">
                    <div class="empty-space col-md-b0 col-xs-b70"></div>
                    <div class="tm-appointment-heading tm-gray-bg wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="tm-section-heading text-center">
                            <h2>MAKE AN APPOINTMENT</h2>
                            <div class="tm-section-seperator"><span></span></div>
                            <p>If you wont to make an appointment with any specialist just fill up the form with valid data and we will contact you via phone for confirmation.</p>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-5">
                    <div class="empty-space col-md-b60 col-xs-b40"></div>
                    <form method="POST" action="assets/php/appointment.php" class="tm-appointment-form" id="appointment-form">
                        <div id="tm-alert1"></div>
                        <div class="tm-form-field">
                            <input type="text" id="uname" name="uname" placeholder="Full Name" required>
                            <span class="bar"></span>
                        </div>
                        <div class="tm-form-field">
                            <input type="text" id="uemail" name="uemail" placeholder="Email Address" required>
                            <span class="bar"></span>
                        </div>
                        <div class="tm-form-field">
                            <input type="text" id="unumber" name="unumber" placeholder="Phone Number" required>
                            <span class="bar"></span>
                        </div>
                        <div class="tm-form-field">
                            <input name="udate" type="text" id="udate" placeholder="Booking Date">
                            <span class="bar"></span>
                            <div class="date-icon"><i class="fa fa-calendar"></i></div>
                        </div>
                        <div class="tm-form-field">
                            <div class="tm-custom-select-wrap">
                                <select name="udepartment" class="tm-custom-select" id="udepartment">
                                    <option value="department">Department</option>
                                    <option value="dental-care">Dental Care</option>
                                    <option value="neurology">Neurology</option>
                                    <option value="crutches">Crutches</option>
                                    <option value="cardiology">Cardiology</option>
                                    <option value="pulmonary">Pulmonary</option>
                                    <option value="x-ray">X-Ray</option>
                                </select>
                            </div>
                        </div>
                        <div class="tm-form-field">
                            <div class="tm-custom-select-wrap">
                                <select name="udoctor" class="tm-custom-select" id="udoctor">
                                    <option value="doctor">Doctor</option>
                                    <option value="jhon-doe">Dr. Jhon Doe</option>
                                    <option value="mak-rushi">Dr. Mak Roshi</option>
                                    <option value="mohoshin-kabir">Dr. Mohoshin Kabir</option>
                                    <option value="nayon-borua">Dr. Nayon Borua</option>
                                    <option value="rasel-islam">Dr. Rasel Islam</option>
                                    <option value="mahid-islam">Dr. Mahid Islam</option>
                                </select>
                            </div>
                        </div>
                        <div class="tm-form-field">
                            <textarea cols="30" rows="10" id="umsg" name="umsg" placeholder="Your Message"></textarea>
                            <span class="bar"></span>
                        </div>
                        <div class="empty-space col-xs-b10"></div>
                        <div class="tm-form-field">
                            <button class="tm-btn1 tm-reverse" type="submit" id="appointment-submit" name="submit">BOOK APPOINTMENT</button>
                        </div>
                    </form>
                    <div class="empty-space col-md-b60 col-xs-b70"></div>
                </div><!-- .col -->
            </div>
        </div>
    </section>
    <!-- End Appointment Section -->

    <!-- Start Team Member -->
    <section id="doctor">
        <div class="empty-space col-md-b100 col-xs-b70"></div>
        <div class="tm-section-heading text-center">
            <h2>Our Experienced doctors</h2>
            <div class="tm-section-seperator"><span></span></div>
            <div class="empty-space col-md-b60 col-xs-b40"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tm-member-carousel owl-carousel tm-nam-tm-style1  tm-dots1">
                        <div class="tm-team-member">
                            <div class="tm-member-hover">
                                <a href="#" class="tm-member-thumb">
                                    <img src="assets/img/doctor-01.jpg" alt="">
                                </a>
                                <div class="tm-member-social-btn-wrap">
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-facebook-square"></i>
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-twitter-square"></i>
                                            <i class="fa fa-twitter-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-linkedin-square"></i>
                                            <i class="fa fa-linkedin-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-skype"></i>
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </div>
                                </div><!-- .tm-member-social-btn-wrap -->
                            </div>
                            <div class="tm-member-meta tm-gray-bg text-center">
                                <h3 class="tm-member-name"><a href="#">Dr. Willie Crowley</a></h3>
                                <span class="tm-member-speciality">Cardiologist</span>
                            </div>
                        </div><!-- .tm-team-member -->
                        <div class="tm-team-member">
                            <div class="tm-member-hover">
                                <a href="#" class="tm-member-thumb">
                                    <img src="assets/img/doctor-02.jpg" alt="">
                                </a>
                                <div class="tm-member-social-btn-wrap">
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-facebook-square"></i>
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-twitter-square"></i>
                                            <i class="fa fa-twitter-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-linkedin-square"></i>
                                            <i class="fa fa-linkedin-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-skype"></i>
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </div>
                                </div><!-- .tm-member-social-btn-wrap -->
                            </div>
                            <div class="tm-member-meta tm-gray-bg text-center">
                                <h3 class="tm-member-name"><a href="#">Dr. Jay Swanson</a></h3>
                                <span class="tm-member-speciality">Gynecologist</span>
                            </div>
                        </div><!-- .tm-team-member -->
                        <div class="tm-team-member">
                            <div class="tm-member-hover">
                                <a href="#" class="tm-member-thumb">
                                    <img src="assets/img/doctor-03.jpg" alt="">
                                </a>
                                <div class="tm-member-social-btn-wrap">
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-facebook-square"></i>
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-twitter-square"></i>
                                            <i class="fa fa-twitter-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-linkedin-square"></i>
                                            <i class="fa fa-linkedin-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-skype"></i>
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </div>
                                </div><!-- .tm-member-social-btn-wrap -->
                            </div>
                            <div class="tm-member-meta tm-gray-bg text-center">
                                <h3 class="tm-member-name"><a href="#">Dr. Alex Abbott</a></h3>
                                <span class="tm-member-speciality">Neurology</span>
                            </div>
                        </div><!-- .tm-team-member -->
                        <div class="tm-team-member">
                            <div class="tm-member-hover">
                                <a href="#" class="tm-member-thumb">
                                    <img src="assets/img/doctor-04.jpg" alt="">
                                </a>
                                <div class="tm-member-social-btn-wrap">
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-facebook-square"></i>
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-twitter-square"></i>
                                            <i class="fa fa-twitter-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-linkedin-square"></i>
                                            <i class="fa fa-linkedin-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-skype"></i>
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </div>
                                </div><!-- .tm-member-social-btn-wrap -->
                            </div>
                            <div class="tm-member-meta tm-gray-bg text-center">
                                <h3 class="tm-member-name"><a href="#">Dr. Kay Conley</a></h3>
                                <span class="tm-member-speciality">Diagnosis</span>
                            </div>
                        </div><!-- .tm-team-member -->
                        <div class="tm-team-member">
                            <div class="tm-member-hover">
                                <a href="#" class="tm-member-thumb">
                                    <img src="assets/img/doctor-01.jpg" alt="">
                                </a>
                                <div class="tm-member-social-btn-wrap">
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-facebook-square"></i>
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-twitter-square"></i>
                                            <i class="fa fa-twitter-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-linkedin-square"></i>
                                            <i class="fa fa-linkedin-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-skype"></i>
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </div>
                                </div><!-- .tm-member-social-btn-wrap -->
                            </div>
                            <div class="tm-member-meta tm-gray-bg text-center">
                                <h3 class="tm-member-name"><a href="#">Dr. Willie Crowley</a></h3>
                                <span class="tm-member-speciality">Cardiologist</span>
                            </div>
                        </div><!-- .tm-team-member -->
                        <div class="tm-team-member">
                            <div class="tm-member-hover">
                                <a href="#" class="tm-member-thumb">
                                    <img src="assets/img/doctor-02.jpg" alt="">
                                </a>
                                <div class="tm-member-social-btn-wrap">
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-facebook-square"></i>
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-twitter-square"></i>
                                            <i class="fa fa-twitter-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-linkedin-square"></i>
                                            <i class="fa fa-linkedin-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-skype"></i>
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </div>
                                </div><!-- .tm-member-social-btn-wrap -->
                            </div>
                            <div class="tm-member-meta tm-gray-bg text-center">
                                <h3 class="tm-member-name"><a href="#">Dr. Jay Swanson</a></h3>
                                <span class="tm-member-speciality">Gynecologist</span>
                            </div>
                        </div><!-- .tm-team-member -->
                        <div class="tm-team-member">
                            <div class="tm-member-hover">
                                <a href="#" class="tm-member-thumb">
                                    <img src="assets/img/doctor-03.jpg" alt="">
                                </a>
                                <div class="tm-member-social-btn-wrap">
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-facebook-square"></i>
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-twitter-square"></i>
                                            <i class="fa fa-twitter-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-linkedin-square"></i>
                                            <i class="fa fa-linkedin-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-skype"></i>
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </div>
                                </div><!-- .tm-member-social-btn-wrap -->
                            </div>
                            <div class="tm-member-meta tm-gray-bg text-center">
                                <h3 class="tm-member-name"><a href="#">Dr. Alex Abbott</a></h3>
                                <span class="tm-member-speciality">Neurology</span>
                            </div>
                        </div><!-- .tm-team-member -->
                        <div class="tm-team-member">
                            <div class="tm-member-hover">
                                <a href="#" class="tm-member-thumb">
                                    <img src="assets/img/doctor-04.jpg" alt="">
                                </a>
                                <div class="tm-member-social-btn-wrap">
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-facebook-square"></i>
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-twitter-square"></i>
                                            <i class="fa fa-twitter-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-linkedin-square"></i>
                                            <i class="fa fa-linkedin-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-skype"></i>
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </div>
                                </div><!-- .tm-member-social-btn-wrap -->
                            </div>
                            <div class="tm-member-meta tm-gray-bg text-center">
                                <h3 class="tm-member-name"><a href="#">Dr. Kay Conley</a></h3>
                                <span class="tm-member-speciality">Diagnosis</span>
                            </div>
                        </div><!-- .tm-team-member -->
                    </div><!-- .member-carousel -->
                </div><!-- .col -->
            </div>
        </div>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
    </section>
    <!-- End Team Member -->

    <!-- Start Before & After Section -->
    <section class="tm-gray-bg">
        <div class="empty-space col-md-b100 col-xs-b70"></div>
        <div class="tm-section-heading text-center">
            <h2>Before After Gallery</h2>
            <div class="tm-section-seperator"><span></span></div>
            <div class="empty-space col-md-b60 col-xs-b40"></div>
        </div>
        <div class="container">
            <div class="before-after-gallery-slider owl-carousel tm-nam-tm-style1">
                <div class="teeth-beforeafter">
                    <img src="assets/img/teeth-before-image.jpg" alt="teeth before">
                    <img src="assets/img/teeth-after-image.jpg" alt="teeth after">
                </div>
                <div class="teeth-beforeafter">
                    <img src="assets/img/face-before-image.jpg" alt="teeth before">
                    <img src="assets/img/face-after-image.jpg" alt="teeth after">
                </div>
                <div class="teeth-beforeafter">
                    <img src="assets/img/teeth-before-image.jpg" alt="teeth before">
                    <img src="assets/img/teeth-after-image.jpg" alt="teeth after">
                </div>
                <div class="teeth-beforeafter">
                    <img src="assets/img/face-before-image.jpg" alt="teeth before">
                    <img src="assets/img/face-after-image.jpg" alt="teeth after">
                </div>
            </div>
        </div>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
    </section>
    <!-- End Before & After Section -->

    <!-- Start Gallery Section -->
    <section id="gallery">
        <div class="empty-space col-md-b100 col-xs-b70"></div>
        <div class="tm-section-heading text-center">
            <h2>View our Gallery</h2>
            <div class="tm-section-seperator"><span></span></div>
            <div class="empty-space col-md-b60 col-xs-b40"></div>
        </div>
        <div class="tm-portfolio-filter text-center">
            <ul>
                <li class="active"><a href="#" data-filter="*">ALL</a></li>
                <li><a href="#" data-filter=".cardiology">CARDIOLOGY</a></li>
                <li><a href="#" data-filter=".neurology">NEUROLOGY</a></li>
                <li><a href="#" data-filter=".urology">UROLOGY</a></li>
                <li><a href="#" data-filter=".pulmonary">PULMONARY</a></li>
                <li><a href="#" data-filter=".traumatology">TRAUMATOLOGY</a></li>
            </ul>
        </div><!-- .tm-portfolio-filter-area -->
        <div class="tm-portfolio zoom-gallery tm-gutter-less">
            <div class="tm-grid-sizer"></div>
            <div class="tm-portfolio-item neurology">
                <a href="assets/img/portfolio-01-lg.jpg"  class="item-inner">
                    <img src="assets/img/portfolio-01.jpg" alt="portfolio-01">
                    <div class="tm-zoom-btn"></div>
                    <i class="tm-zoom-icon icofont icofont-drag1"></i>
                </a>
            </div><!-- .tm-portfolio-item -->
            <div class="tm-portfolio-item urology traumatology">
                <a href="assets/img/portfolio-02-lg.jpg"  class="item-inner">
                    <img src="assets/img/portfolio-02.jpg" alt="portfolio-02">
                    <div class="tm-zoom-btn"></div>
                    <i class="tm-zoom-icon icofont icofont-drag1"></i>
                </a>
            </div><!-- .tm-portfolio-item -->
            <div class="tm-portfolio-item cardiology pulmonary">
                <a href="assets/img/portfolio-03-lg.jpg"  class="item-inner">
                    <img src="assets/img/portfolio-03.jpg" alt="portfolio-03">
                    <div class="tm-zoom-btn"></div>
                    <i class="tm-zoom-icon icofont icofont-drag1"></i>
                </a>
            </div><!-- .tm-portfolio-item -->
            <div class="tm-portfolio-item neurology traumatology">
                <a href="assets/img/portfolio-04-lg.jpg"  class="item-inner">
                    <img src="assets/img/portfolio-04.jpg" alt="portfolio-04">
                    <div class="tm-zoom-btn"></div>
                    <i class="tm-zoom-icon icofont icofont-drag1"></i>
                </a>
            </div><!-- .tm-portfolio-item -->
            <div class="tm-portfolio-item urology">
                <a href="assets/img/portfolio-05-lg.jpg"  class="item-inner">
                    <img src="assets/img/portfolio-05.jpg" alt="portfolio-05">
                    <div class="tm-zoom-btn"></div>
                    <i class="tm-zoom-icon icofont icofont-drag1"></i>
                </a>
            </div><!-- .tm-portfolio-item -->
            <div class="tm-portfolio-item cardiology neurology pulmonary">
                <a href="assets/img/portfolio-06-lg.jpg"  class="item-inner">
                    <img src="assets/img/portfolio-06.jpg" alt="portfolio-06">
                    <div class="tm-zoom-btn"></div>
                    <i class="tm-zoom-icon icofont icofont-drag1"></i>
                </a>
            </div><!-- .tm-portfolio-item -->
            <div class="tm-portfolio-item urology pulmonary">
                <a href="assets/img/portfolio-07-lg.jpg"  class="item-inner">
                    <img src="assets/img/portfolio-07.jpg" alt="portfolio-07">
                    <div class="tm-zoom-btn"></div>
                    <i class="tm-zoom-icon icofont icofont-drag1"></i>
                </a>
            </div><!-- .tm-portfolio-item -->
            <div class="tm-portfolio-item cardiology traumatology">
                <a href="assets/img/portfolio-08-lg.jpg"  class="item-inner">
                    <img src="assets/img/portfolio-08.jpg" alt="portfolio-08">
                    <div class="tm-zoom-btn"></div>
                    <i class="tm-zoom-icon icofont icofont-drag1"></i>
                </a>
            </div><!-- .tm-portfolio-item -->
        </div><!-- .portfolio -->
    </section>
    <!-- End Gallery Section -->

    <!-- Start Testimonial Section -->
    <section>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
        <div class="tm-section-heading text-center">
            <h2>Patients say about us</h2>
            <div class="tm-section-seperator"><span></span></div>
            <div class="empty-space col-md-b60 col-xs-b40"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="owl-carousel tm-testimonial tm-testimonial-1 tm-dots1">
                        <div class="tm-single-testimonial">
                            <div class="tm-testimonial-thumb"><img src="assets/img/test-01.jpg" alt=""></div>
                            <div class="tm-testimonial-text">
                                <i class="fa fa-quote-right"></i>
                                <blockquote>They saved my life. They didn't give up, and they pushed for a treatment that would put me in remission. They continue to have some of the best staffing I've ever had. </blockquote>
                                <div class="tm-testimonial-meta">
                                    <h3>Alex Bieniek</h3>
                                    <span>Student</span>
                                </div>
                            </div>
                        </div><!-- testimonail slide -->
                        <div class="tm-single-testimonial">
                            <div class="tm-testimonial-thumb"><img src="assets/img/test-02.jpg" alt=""></div>
                            <div class="tm-testimonial-text">
                                <i class="fa fa-quote-right"></i>
                                <blockquote>Nothing but the best. Team medicine with top notched specialists. Worth the drive to come here especially if it involves your health or the health of a loved one.</blockquote>
                                <div class="tm-testimonial-meta">
                                    <h3>Sheri Coburn</h3>
                                    <span>Teacher</span>
                                </div>
                            </div>
                        </div><!-- testimonail slide -->
                        <div class="tm-single-testimonial">
                            <div class="tm-testimonial-thumb"><img src="assets/img/test-03.jpg" alt=""></div>
                            <div class="tm-testimonial-text">
                                <i class="fa fa-quote-right"></i>
                                <blockquote>I love this hospital, I definetly think its the best in Kanada, I had both of my children there, their staff is really nice, and they definelty took care of me.</blockquote>
                                <div class="tm-testimonial-meta">
                                    <h3>Martha m.</h3>
                                    <span>Professor</span>
                                </div>
                            </div>
                        </div><!-- testimonail slide -->
                    </div>
                </div>
            </div>
        </div>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
    </section>
    <!-- End Testimonial Section -->

    <!-- Start Fun Fact Section -->
    <section class="tm-fun-fact-wrap tm-bg">
        <div class="empty-space col-md-b100 col-xs-b70"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="tm-fun-fact text-center">
                        <i class="icofont icofont-briefcase-alt-2 wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="2s"></i>
                        <h2 class="tm-counter">25</h2>
                        <h3>Years of experience</h3>
                    </div>
                    <div class="empty-space col-xs-b30"></div>
                </div><!-- .col -->
                <div class="col-lg-3 col-md-6">
                    <div class="tm-fun-fact text-center">
                        <i class="icofont icofont-emo-simple-smile wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="2s"></i>
                        <h2 class="tm-counter">2500</h2>
                        <h3>Happy Patients</h3>
                    </div>
                    <div class="empty-space col-xs-b30"></div>
                </div><!-- .col -->
                <div class="col-lg-3 col-md-6">
                    <div class="tm-fun-fact text-center">
                        <i class="icofont icofont-doctor wow fadeInDown" data-wow-delay="0.6s" data-wow-duration="2s"></i>
                        <h2 class="tm-counter">150</h2>
                        <h3>Number of Doctors</h3>
                    </div>
                    <div class="empty-space col-xs-b30"></div>
                </div><!-- .col -->
                <div class="col-lg-3 col-md-6">
                    <div class="tm-fun-fact text-center">
                        <i class="icofont icofont-users-social wow fadeInDown" data-wow-delay="0.8s" data-wow-duration="2s"></i>
                        <h2 class="tm-counter">250</h2>
                        <h3>Number of Staffs</h3>
                    </div>
                    <div class="empty-space col-xs-b30"></div>
                </div><!-- .col -->
            </div>
        </div>
        <div class="empty-space col-lg-b70 col-xs-b40"></div>
    </section>
    <!-- End Fun Fact Section -->

    <!-- Start Pricing Seciton -->
    <section id="price">
        <div class="empty-space col-md-b100 col-xs-b70"></div>
        <div class="tm-section-heading text-center">
            <h2>PRICING PLANS</h2>
            <div class="tm-section-seperator"><span></span></div>
            <div class="empty-space col-md-b60 col-xs-b40"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tm-pricing-carousel owl-carousel tm-nam-tm-style1 tm-dots1">
                        <div class="tm-price-list tm-gray-bg">
                            <div class="tm-price">
                                <h3>$25</h3>
                            </div>
                            <h2 class="tm-pricing-heading">Blood Test</h2>
                            <ul class="tm-test-list">
                                <li>First Description</li>
                                <li>Second Description</li>
                                <li>Third Description</li>
                                <li>Fourth Description</li>
                                <li>Fifth Description</li>
                            </ul>
                            <a href="#" class="tm-btn1">CONTACT NOW</a>
                        </div><!-- .tm-price-list -->
                        <div class="tm-price-list tm-gray-bg">
                            <div class="tm-price">
                                <h3>$30</h3>
                            </div>
                            <h2 class="tm-pricing-heading">Hemoglobin Test</h2>
                            <ul class="tm-test-list">
                                <li>First Description</li>
                                <li>Second Description</li>
                                <li>Third Description</li>
                                <li>Fourth Description</li>
                                <li>Fifth Description</li>
                            </ul>
                            <a href="#" class="tm-btn1">CONTACT NOW</a>
                        </div><!-- .tm-price-list -->
                        <div class="tm-price-list tm-gray-bg">
                            <div class="tm-price">
                                <h3>$70</h3>
                            </div>
                            <h2 class="tm-pricing-heading">Homocysteine</h2>
                            <ul class="tm-test-list">
                                <li>First Description</li>
                                <li>Second Description</li>
                                <li>Third Description</li>
                                <li>Fourth Description</li>
                                <li>Fifth Description</li>
                            </ul>
                            <a href="#" class="tm-btn1">CONTACT NOW</a>
                        </div><!-- .tm-price-list -->
                        <div class="tm-price-list tm-gray-bg">
                            <div class="tm-price">
                                <h3>$24</h3>
                            </div>
                            <div class="pricing-shap"></div>
                            <h2 class="tm-pricing-heading">X-Ray</h2>
                            <ul class="tm-test-list">
                                <li>First Description</li>
                                <li>Second Description</li>
                                <li>Third Description</li>
                                <li>Fourth Description</li>
                                <li>Fifth Description</li>
                            </ul>
                            <a href="#" class="tm-btn1">CONTACT NOW</a>
                        </div><!-- .tm-price-list -->
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
    </section>
    <!-- End Pricing Seciton -->

    <!-- Start FAQ Section -->
    <section class="tm-gray-bg tm-overflow-hide">
        <div class="row">
            <div class="col-lg-6">
                <!-- For Vimeo Video -->
                <div class="tm-about-video">
                    <img src="assets/img/video-bg.jpg" alt="">
                    <div class="tm-video-button" data-video-id='63636954' data-channel="vimeo">
                        <i class="icofont icofont-play-alt-3"></i>
                        <span class="tm-video-animaiton"><span></span></span>
                    </div>
                </div>
                <!-- For Youtube Video -->
                <!-- <div class="tm-about-video tm-video-button" data-video-id='nImFZRtGeAQ'>
                    <img src="assets/img/tm-about-video-bg.jpg" alt="">
                    <i class="video-icon"></i>
                </div> -->
            </div><!-- .col -->
            <div class="col-lg-6">
                <div class="empty-space col-md-b60 col-xs-b65"></div>
                <div class="accordian-wrapper">
                    <h2 class="accordian-heading">Frequently Asked Questions</h2>
                    <div class="accordian">
                        <div class="single-accordian">
                            <h3 class="accordian-head">What is dental care?</h3>
                            <div class="accordian-body">Tooth valuable resources, dental care should take us regularly to stay healthy. Oral Health Overview. Good dental or oral care is important to maintaining healthy teeth, gums, and tongue. Oral problems, including bad breath, dry mouth, canker or cold sores, TMD, tooth decay, or thrush are all treatable with proper diagnosis and care.</div>
                        </div><!-- .single-accordian -->
                        <div class="single-accordian">
                            <h3 class="accordian-head">Does offer emergency care?</h3>
                            <div class="accordian-body">Urgent care centers are a relatively new addition to the healthcare industry that have helped to benefit both community medical services and patients. As a fast, affordable alternative to emergency room care for patients with non-life-threatening conditions, urgent care medical clinics offer people a convenient treatment option.</div>
                        </div><!-- .single-accordian -->
                        <div class="single-accordian">
                            <h3 class="accordian-head">Online live support</h3>
                            <div class="accordian-body">Neurology is a branch of medical science that is concerned with disorders and diseases of the nervous system. The term neurology comes from a combination of two words - "neuron" meaning nerve and "logia" meaning "the study of".There are around a hundred billion neurons in the brain, capable of generating their own impulses and of receiving and transmitting impulses from neighboring cells.</div>
                        </div><!-- .single-accordian -->
                    </div>
                </div>
                <div class="empty-space col-md-b60 col-xs-b70"></div>
            </div><!-- .col -->
        </div>
    </section>
    <!-- End FAQ Section -->

    <!-- Start Blog Section -->
    <section id="blog">
        <div class="empty-space col-md-b100 col-xs-b70"></div>
        <div class="tm-section-heading text-center">
            <h2>LATEST NEWS</h2>
            <div class="tm-section-seperator"><span></span></div>
            <div class="empty-space col-md-b60 col-xs-b40"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="tm-left-post">
                        <div class="tm-post tm-style1">
                            <div class="tm-post-thumb">
                                <a href="#" class="tm-link-block">
                                    <img src="assets/img/blog-01.jpg" alt="blog-01">
                                    <div class="tm-blog-hover">
                                        <span class="tm-blog-shap"></span>
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="empty-space col-xs-b25"></div>
                            <div class="tm-blog-body">
                                <h2 class="tm-blog-heading">
                                    <a href="#" class="tm-link-block">Scary Thing That You Don’t Get Enough Sleep</a>
                                </h2>
                                <div class="empty-space col-xs-b15"></div>
                                <div class="tm-blog-meta">
                                    <span><a href="#" class="bar-link"><i class="fa fa-user"></i>Admin</a></span>
                                    <span><i class="fa fa-calendar"></i>Jan 10, 2018</span>
                                </div>
                                <div class="empty-space col-xs-b20"></div>
                                <div class="tm-blog-separator"></div>
                                <div class="tm-entry-content">
                                    <p>If you're tossing and turning every night, there's some bad news. Your brain could be in big trouble! Turns out, there are some pretty scary side effects to sleep loss, all around. (By the way, getting too much sleep...</p>
                                    <div class="empty-space col-xs-b30"></div>
                                    <a href="#" class="tm-btn1">READ MORE</a>
                                </div>
                            </div>
                        </div><!-- .tm-post -->
                    </div><!-- .tm-left-post -->
                    <div class="empty-space col-xs-b30"></div>
                </div><!-- .col -->
                <div class="col-xl-6">
                    <div class="tm-right-post">
                        <div class="tm-post tm-style2">
                            <div class="tm-post-thumb">
                                <a href="#" class="tm-link-block">
                                    <img src="assets/img/blog-02.jpg" alt="blog-02">
                                    <div class="tm-blog-hover small">
                                        <span class="tm-blog-shap"></span>
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="empty-space col-xs-b25"></div>
                            <div class="tm-blog-body">
                                <h2 class="tm-blog-heading">
                                    <a href="#" class="tm-link-block">Doctors and Nurses Reveal...</a>
                                </h2>
                                <div class="empty-space col-xs-b10"></div>
                                <div class="tm-blog-meta">
                                    <span><a href="#" class="bar-link"><i class="fa fa-user"></i>Admin</a></span>
                                    <span><i class="fa fa-calendar"></i>Feb 13, 2018</span>
                                </div>
                                <div class="empty-space col-xs-b20"></div>
                                <div class="tm-blog-separator"></div>
                                <div class="tm-entry-content">
                                    <p>These tips might just save your life (or at least make it a little healthier). When it comes to your...</p>
                                </div>
                            </div>
                        </div><!-- .tm-post -->
                        <div class="tm-post tm-style2">
                            <div class="tm-post-thumb">
                                <a href="#" class="tm-link-block">
                                    <img src="assets/img/blog-03.jpg" alt="blog-03">
                                    <div class="tm-blog-hover small">
                                        <span class="tm-blog-shap"></span>
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="empty-space col-xs-b25"></div>
                            <div class="tm-blog-body">
                                <h2 class="tm-blog-heading">
                                    <a href="#" class="tm-link-block">7 Ways to market helth...</a>
                                </h2>
                                <div class="empty-space col-xs-b10"></div>
                                <div class="tm-blog-meta">
                                    <span><a href="#" class="bar-link"><i class="fa fa-user"></i>Admin</a></span>
                                    <span><i class="fa fa-calendar"></i>Mar 09, 2018</span>
                                </div>
                                <div class="empty-space col-xs-b20"></div>
                                <div class="tm-blog-separator"></div>
                                <div class="tm-entry-content">
                                    <p>Health care in the United States is provided by many distinct organizations...</p>
                                </div>
                            </div>
                        </div><!-- .tm-post -->
                        <div class="tm-post tm-style2">
                            <div class="tm-post-thumb">
                                <a href="#" class="tm-link-block">
                                    <img src="assets/img/blog-04.jpg" alt="blog-04">
                                    <div class="tm-blog-hover small">
                                        <span class="tm-blog-shap"></span>
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="empty-space col-xs-b25"></div>
                            <div class="tm-blog-body">
                                <h2 class="tm-blog-heading">
                                    <a href="#" class="tm-link-block">How to Market to Medicare...</a>
                                </h2>
                                <div class="empty-space col-xs-b10"></div>
                                <div class="tm-blog-meta">
                                    <span><a href="#" class="bar-link"><i class="fa fa-user"></i>Admin</a></span>
                                    <span><i class="fa fa-calendar"></i>Mar 19, 2018</span>
                                </div>
                                <div class="empty-space col-xs-b20"></div>
                                <div class="tm-blog-separator"></div>
                                <div class="tm-entry-content">
                                    <p>Medicare influences most of the healthcare decisions of patients 65 and up. Unfortunately, original...</p>
                                </div>
                            </div>
                        </div><!-- .tm-post -->
                    </div><!-- .tm-right-post -->
                    <div class="empty-space col-xs-b30"></div>
                </div><!-- .col -->
            </div>
        </div>
        <div class="empty-space col-md-b70 col-xs-b40"></div>
    </section>
    <!-- End Blog Section -->

    <!-- Start News Letter Section -->
    <div class="tm-newsletter tm-bg">
        <div class="tm-nl-overlay"></div>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
        <div class="container">
            <form class="mailchimp" action="https://storerepublic.us12.list-manage.com/subscribe/post?u=d227d8d335060b093084903d0&amp;id=9ba078ceb0">
                <div class="tm-form-field">
                    <input type="email" name="subscribe" id="subscriber-email" placeholder="Enter your Email Address">
                    <span class="bar"></span>
                </div>
                <button type="submit" id="subscribe-button" class="tm-btn1 tm-reverse"><span><i class="icofont icofont-location-arrow"></i>SUBSCRIBE NOW</span></button>
                <!-- SUBSCRIPTION SUCCESSFUL OR ERROR MESSAGES -->
                <h5 class="subscription-success"> .</h5>
                <h5 class="subscription-error"> .</h5>
                <label class="subscription-label" for="subscriber-email"></label>
            </form>
        </div>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
    </div>
    <!-- End News Letter Section -->

    <!-- Start Contact Section -->
    <section id="contact">
        <div class="empty-space col-md-b100 col-xs-b70"></div>
        <div class="tm-section-heading text-center">
            <h2>Get In Touch</h2>
            <div class="tm-section-seperator"><span></span></div>
            <div class="empty-space col-md-b60 col-xs-b40"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div id="tm-alert"></div>
                    <form action="assets/php/mail.php" class="row tm-contact-form" method="post"  id="contact-form">
                        <div class="col-lg-6">
                            <div class="tm-form-field">
                                <input type="text" id="name" name="name" required>
                                <label>Full Name</label>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-6">
                            <div class="tm-form-field">
                              <input type="text" id="email" name="email" required>
                              <label>Email Address</label>
                          </div>
                        </div><!-- .col -->
                        <div class="col-lg-6">
                            <div class="tm-form-field">
                                <input type="text" id="subject" name="subject" required>
                                <label>Subject</label>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-6">
                            <div class="tm-form-field">
                                <input type="text" id="phone" name="phone" required>
                                <label>Phone</label>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-12">
                            <div class="tm-form-field">
                                <textarea cols="30" rows="10" id="msg" name="msg" required></textarea>
                                <label>Your Message</label>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-12">
                            <button class="tm-btn1" type="submit" id="submit" name="submit"><span>SEND MESSAGE</span></button>
                            <div class="empty-space col-lg-b30"></div>
                        </div><!-- .col -->
                    </form>
                </div><!-- .col -->
                <div class="col-lg-4">
                    <div class="empty-space col-md-b0 col-xs-b40"></div>
                    <div class="tm-contact-info">
                        <div class="tm-single-contact">
                            <i class="fa fa-map-marker"></i>
                            <h3>Address</h3>
                            <p>2855 Speer Blvd, Denver, CO 80211, USA</p>
                        </div>
                        <div class="empty-space col-xs-b25"></div>
                        <div class="tm-single-contact">
                            <i class="fa fa-phone"></i>
                            <h3>Phone</h3>
                            <p>1-800-915-6270 <br>
                               1-800-915-6272</p>
                        </div>
                        <div class="empty-space col-xs-b25"></div>
                        <div class="tm-single-contact">
                            <i class="fa fa-envelope"></i>
                            <h3>Email</h3>
                            <p>info@trustlife.com <br>
                            Skype: example</p>
                        </div>
                        <div class="empty-space col-xs-b25"></div>
                    </div>
                </div><!-- .col -->
            </div>
        </div>
        <div class="empty-space col-md-b70 col-xs-b40"></div>
    </section>
    <!-- End Contact Section -->

    <!-- Start Map Section -->
    <div id="tm-map">
	    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96652.27317354927!2d-74.33557928194516!3d40.79756494697628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3a82f1352d0dd%3A0x81d4f72c4435aab5!2sTroy+Meadows+Wetlands!5e0!3m2!1sen!2sbd!4v1563075599994!5m2!1sen!2sbd"
        allowfullscreen></iframe>
	</div>
    <!-- End Map Section -->

    <!-- Start Clients Section -->
    <div class="tm-clients-wrap">
        <div class="empty-space col-md-b100 col-xs-b70"></div>
        <div class="container">
            <div class="tm-clients-curosor owl-carousel">
                <div class="tm-client"><img src="assets/img/client-logo-01.png" alt=""></div>
                <div class="tm-client"><img src="assets/img/client-logo-02.png" alt=""></div>
                <div class="tm-client"><img src="assets/img/client-logo-03.png" alt=""></div>
                <div class="tm-client"><img src="assets/img/client-logo-04.png" alt=""></div>
                <div class="tm-client"><img src="assets/img/client-logo-05.png" alt=""></div>
                <div class="tm-client"><img src="assets/img/client-logo-06.png" alt=""></div>
            </div>
        </div>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
    </div>
    <!-- End Clients Section -->

    <!-- Start Footer -->
    <footer class="tm-overflow-hidden">
        <div class="tm-gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="tm-footer-social">
                            <h2>Follow Us</h2>
                            <div class="tm-footer-social-list">
                                <a href="#" class="tm-social-btn blue">
                                    <i class="fa fa-facebook-square"></i>
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="#" class="tm-social-btn blue">
                                    <i class="fa fa-google-plus-square"></i>
                                    <i class="fa fa-google-plus-square"></i>
                                </a>
                                <a href="#" class="tm-social-btn blue">
                                    <i class="fa fa-twitter-square"></i>
                                    <i class="fa fa-twitter-square"></i>
                                </a>
                                <a href="#" class="tm-social-btn blue">
                                    <i class="fa fa-linkedin-square"></i>
                                    <i class="fa fa-linkedin-square"></i>
                                </a>
                                <a href="#" class="tm-social-btn blue">
                                    <i class="fa fa-skype"></i>
                                    <i class="fa fa-skype"></i>
                                </a>
                            </div>
                        </div>
                    </div><!-- .col -->
                </div>
            </div>
        </div>
        <div class="tm-site-footer">
            <div class="container"><!-- row-md-reverce -->
                <div class="row row-sm-reverce">
                    <div class="col-md-7 col-lg-8">
                        <p class="tm-copyright">Copyright © 2018 TRUSTLIFE. Designed by thememarch </p>
                    </div><!-- .col -->
                    <div class="col-md-5 col-lg-4">
                        <div class="tm-footer-hotline">
                            <div class="tm-footer-hotline-in">
                                <div class="tm-phone-icon"><i class="fa fa-mobile"></i></div>
                                <h3>Toll Free</h3>
                                <p>1-800-915-6270</p>
                            </div>
                        </div>
                    </div><!-- .col -->
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

	<!-- Scroll Up -->
  <div id='scrollup'></div>

	<!-- Scripts -->
	<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
	<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>
