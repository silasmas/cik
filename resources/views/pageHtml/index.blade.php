
@include("pageHtml.menu.entete")

@include('pageHtml.menu.menu')

    <!-- Start Hero Section -->
    <section class="hero ripple-version" id="home" style="background: url({{ asset('assets/img/slide-01.jpg') }});">
        <div class="container">
            <div class="slider-text">
                <h2 class="tm-headline letters tm-rotate-text">

                    @lang('info.home.slide')
                    <span class="tm-words-wrapper">
                        <b class="is-visible">médecine générale</b>
                        <b>médecine interne</b>
                        <b>chirurgie</b>
                        <b>pédiatrie</b>
                        <b>dentisterie</b>
                        <b>ophtalmologie</b>
                        <b>dermatologie</b>
                        <b>oto-rhino-laryngologie</b>
                        <b>kinésithérapie</b>
                        <b>laboratoire complet</b>
                        <b>radiologie</b>
                    </span>
                </h2>
                <div class="empty-space col-sm-b20 col-xs-b10"></div>
                <p>@lang('info.home.slideDesciprion')</p>
                <div class="empty-space col-md-b55 col-sm-b35 col-xs-b25"></div>
                <div class="tm-hero-btn tm-hero-video-btn">
                    <div class="tm-video-button tm-color1" data-video-id="63636954" data-channel="vimeo">
                        <i class="icofont icofont-play-alt-3"></i>
                        <span class="tm-video-animaiton"><span></span></span>
                    </div>
                    {{-- <span class="tm-video-text">@lang('info.home.slideBtVideo')</span> --}}
                </div>
            </div>
        </div><!-- .container -->
        <div class="hero-overlay"></div>
    </section>
    <!-- End Hero Section -->

    <!-- Start  -->
    <section>
        <div class="empty-space col-md-b100 col-xs-b40"></div>
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-4" >
                    <div class="empty-space col-md-b0 col-xs-b30"></div>
                    <div class="tm-icon-box">
                        <div class="tm-icon"><i class="fa fa-user-md"></i></div>
                        <h2 class="tm-icon-box-title">@lang('info.home.t1')</h2>
                        <p class="tm-icon-box-text">@lang('info.home.desc1')</p>
                    </div>
                </div> --}}
                <!-- .col -->
                <div class="col-lg-6">
                    <div class="empty-space col-md-b0 col-xs-b30"></div>
                    <div class="tm-icon-box">
                        <div class="tm-icon"><i class="fa fa-ambulance"></i></div>
                        <h2 class="tm-icon-box-title">@lang('info.home.t2')</h2>
                        <p class="tm-icon-box-text">@lang('info.home.desc2')</p>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-6">
                    <div class="empty-space col-md-b0 col-xs-b30"></div>
                    <div class="tm-icon-box">
                        <div class="tm-icon"><i class="fa fa-hospital-o"></i></div>
                        <h2 class="tm-icon-box-title">@lang('info.home.t3')</h2>
                        <p class="tm-icon-box-text">@lang('info.home.desc3')</p>
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
            <h2>Qui sommes-nous</h2>
            <div class="tm-section-seperator"><span></span></div>
            <div class="empty-space col-md-b60 col-xs-b40"></div>
        </div>
        <div class="tm-relative">
            <div class="tm-half-section-bg left">
                <img src="{{ asset('assets/img/about-hafl-bg.jpg') }}" alt="about hafl bg">
            </div>
            <div class="empty-space col-xs-b60"></div>
            <div class="container">
                <div class="row row-md-reverce">
                    <div class="col-lg-5">
                        <div class="tm-shedule-wrap">
                            <div class="tm-shedule">
                                <h3 class="tm-shedule-title">Horaires d'ouvertures à l’unité du jour </h3>
                                <ul class="tm-shedule-list">
                                    <li>
                                        <span>Lundi - Vendredi</span>
                                        <span>7:30' - 16:30'</span>
                                    </li>
                                    <li>
                                        <span>Samedi et dimanche</span>
                                        <span>7:30' - 14.30'</span>
                                    </li>

                                </ul>
                            </div><!-- .tm-shedule -->
                            <div class="empty-space col-md-b40 col-xs-b30"></div>
                            <div class="tm-shedule">
                                <h3 class="tm-shedule-title">Heures des visites en hospitalisation</h3>
                                <ul class="tm-shedule-list">
                                    <li>
                                        <span>Lundi - Dimanche</span>
                                        <span>06:00 - 07:30'</span>
                                        <span>14:00 - 15:30'</span>
                                        <span>17:00 - 19:30'</span>
                                    </li>
                                </ul>
                            </div><!-- .tm-shedule -->
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-7">
                        <div class="empty-space col-md-b30 col-xs-b0"></div>
                        <div class="tm-about-wrap tm-hf-hide">
                            <div class="tm-about tm-gray-bg wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.1s">
                                <h3 class="tm-about-title">Pourquoi les gens choisissent <span>CIK</span>?</h3>
                                <div class="tm-about-text">
                                    <p>Nous fournissons une couverture médicale large généraliste, au meilleurs rapport qualité/ prix ; <br>
                                        Fourniture des intrants de soins de qualités (pharmacie…) ;<br>
                                        Fiabilité des résultats et diagnostiques ;<br>
                                        Sécurité et confidentialité des actes médicaux, des honoraires … ;<br>
                                        Accessibilité aisé 24h/ 24 sur les 3 sites.
                                        </p>

                                </div>
                                <div class="empty-space col-xs-b25"></div>
                                {{-- <div class="tm-about-btn">
                                    <a href="#" class="tm-btn1">READ MORE</a>
                                </div> --}}
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
            <h2>Nos services</h2>
            <div class="tm-section-seperator"><span></span></div>
            <div class="empty-space col-md-b60 col-xs-b40"></div>
        </div>
        <div class="container">
            <div class="tm-tab-wrap">
                <div class="tm-tabs-wrap">
                    <ul class="tabs">
                        <li><i class="icofont icofont-tooth"></i>Médecine générale</li>
                        <li><i class="icofont icofont-brain"></i>Médecine interne </li>
                        <li><i class="icofont icofont-crutches"></i>Chirurgie</li>
                        <li><i class="icofont icofont-pulse"></i>Pédiatrie</li>
                        <li><i class="icofont icofont-lungs"></i>Radiologie</li>
                        <li><i class="icofont icofont-xray"></i>Laboratoire</li>
                    </ul> <!-- .tabs -->
                </div>
                <div class="empty-space col-md-b60 col-xs-b40"></div>
                <div class="tm-tab-content">
                    <div class="tm-tabs-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tm-dept-img"><img src="{{ asset('assets/img/1.dental.jpg') }}" alt=""></div>
                            </div><!-- .col -->
                            <div class="col-lg-6">
                                <div class="tm-dept-details-wrap">
                                    <div class="tm-about tm-gray-bg">
                                        <h3 class="tm-about-title">Médecine <span>générale</span></h3>
                                        <div class="tm-about-text">
                                            <p>
                                                Assuré par des généralistes disponible et efficient dans la prise en charge des infections courantes rencontrée dans notre milieu. <br>
                                                Les spécialistes chacun dans son domaine sont joignable 24h/24 pour venir à la rescousse de nos patients en souffrance en cas de besoin exprimé par les généralistes.
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div>
                    </div> <!-- .tabs_item -->
                    <div class="tm-tabs-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tm-dept-img"><img src="{{ asset('assets/img/2.neurology.jpg') }}" alt=""></div>
                            </div><!-- .col -->
                            <div class="col-lg-6">
                                <div class="tm-dept-details-wrap">
                                    <div class="tm-about tm-gray-bg">
                                        <h3 class="tm-about-title">Meédécine <span>interne</span></h3>
                                        <div class="tm-about-text">
                                            <p>Supervisé par un médecin spécialise en médecine interne avec plus de 30ans d’expériences dans la prise en charge des infections divers accompagné par d’autres spécialistes en cas de besoin.</p>
                                        </div>

                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div>
                    </div> <!-- .tabs_item -->
                    <div class="tm-tabs-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tm-dept-img"><img src="{{ asset('assets/img/3.crutches.jpg') }}" alt=""></div>
                            </div><!-- .col -->
                            <div class="col-lg-6">
                                <div class="tm-dept-details-wrap">
                                    <div class="tm-about tm-gray-bg">
                                        <h3 class="tm-about-title"><span>Chirurgie </span></h3>
                                        <div class="tm-about-text">
                                            <p>Prise en charge par un chirurgien général des affections chirurgicale divers, prise en charge avec ou sans chirurgie en salle d’opération. </p>
                                        </div>

                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div>
                    </div> <!-- .tabs_item -->
                    <div class="tm-tabs-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tm-dept-img"><img src="{{ asset('assets/img/4.cardiology.jpg') }}" alt=""></div>
                            </div><!-- .col -->
                            <div class="col-lg-6">
                                <div class="tm-dept-details-wrap">
                                    <div class="tm-about tm-gray-bg">
                                        <h3 class="tm-about-title"><span>Pédiatrie</span></h3>
                                        <div class="tm-about-text">
                                            <p>Prise en charge de nos jeunes malades par une équipe pédiatrique de qualité en tachant de rendre le séjour hospitalier de ces derniers le moins traumatisant possible.</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div>
                    </div> <!-- .tabs_item -->
                    <div class="tm-tabs-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tm-dept-img"><img src="{{ asset('assets/img/5.pulmones.jpg') }}" alt=""></div>
                            </div><!-- .col -->
                            <div class="col-lg-6">
                                <div class="tm-dept-details-wrap">
                                    <div class="tm-about tm-gray-bg">
                                        <h3 class="tm-about-title"><span>Radiologie</span></h3>
                                        <div class="tm-about-text">
                                            <p>La radio standard et l’échographie sont disponible dans notre centre mère qu’aux heures de service et sur appel en dehors.</p>
                                        </div>

                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div>
                    </div> <!-- .tabs_item -->
                    <div class="tm-tabs-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tm-dept-img"><img src="{{ asset('assets/img/6.xray.jpg') }}" alt=""></div>
                            </div><!-- .col -->
                            <div class="col-lg-6">
                                <div class="tm-dept-details-wrap">
                                    <div class="tm-about tm-gray-bg">
                                        <h3 class="tm-about-title"><span>LABORATOIRE </span></h3>
                                        <div class="tm-about-text">
                                            <p>Hématologie, biochimie, infectio-parasitologie disponible 24h/ 24 dans nos sites. </p>
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
            <img src="{{ asset('assets/img/appointment-bg.jpg') }}" alt="about hafl bg">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 tm-hf-hide">
                    <div class="empty-space col-md-b0 col-xs-b70"></div>
                    <div class="tm-appointment-heading tm-gray-bg wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="tm-section-heading text-center">
                            <h2>PRENDRE RENDEZ-VOUS</h2>
                            <div class="tm-section-seperator"><span></span></div>
                            <p>Si vous souhaitez prendre rendez-vous avec un spécialiste, remplissez simplement le formulaire avec des données valides et nous vous contacterons pour confirmation.</p>
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
                            <button class="tm-btn1 tm-reverse" type="submit" id="appointment-submit" name="submit">PRENDRE RENDEZ-VOUS</button>
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
            <h2>Nos medecin</h2>
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
                                    <img src="{{ asset('assets/img/doctors/ik1.jpg') }}" alt="">
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
                                <h3 class="tm-member-name"><a href="#">Dr. Illunga Kabuyi</a></h3>
                                <span class="tm-member-speciality">Cardiologist</span>
                            </div>
                        </div><!-- .tm-team-member -->
                        <div class="tm-team-member">
                            <div class="tm-member-hover">
                                <a href="#" class="tm-member-thumb">
                                    <img src="{{ asset('assets/img/doctors/1.jpg') }}" alt="">
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
                                    <img src="{{ asset('assets/img/doctors/2.jpg') }}" alt="">
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
                                    <img src="{{ asset('assets/img/doctors/3.jpg') }}" alt="">
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
                                    <img src="{{ asset('assets/img/doctors/4.jpg') }}" alt="">
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
                                    <img src="{{ asset('assets/img/doctors/5.jpg') }}" alt="">
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
                                    <img src="{{ asset('assets/img/doctors/6.jpg') }}" alt="">
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
                                    <img src="{{ asset('assets/img/doctors/7.jpg') }}" alt="">
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
                        </div>
                        <div class="tm-team-member">
                            <div class="tm-member-hover">
                                <a href="#" class="tm-member-thumb">
                                    <img src="{{ asset('assets/img/doctors/8.jpg') }}" alt="">
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
                        </div>

                        <!-- .tm-team-member -->
                    </div><!-- .member-carousel -->
                </div><!-- .col -->
            </div>
        </div>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
    </section>
    <!-- End Team Member -->

    <!-- Start Before & After Section -->
    {{-- <section class="tm-gray-bg">
        <div class="empty-space col-md-b100 col-xs-b70"></div>
        <div class="tm-section-heading text-center">
            <h2>Before After Gallery</h2>
            <div class="tm-section-seperator"><span></span></div>
            <div class="empty-space col-md-b60 col-xs-b40"></div>
        </div>
        <div class="container">
            <div class="before-after-gallery-slider owl-carousel tm-nam-tm-style1">
                <div class="teeth-beforeafter">
                    <img src="{{ asset('assets/img/teeth-before-image.jpg') }}" alt="teeth before">
                    <img src="{{ asset('assets/img/teeth-after-image.jpg') }}" alt="teeth after">
                </div>
                <div class="teeth-beforeafter">
                    <img src="{{ asset('assets/img/face-before-image.jpg') }}" alt="teeth before">
                    <img src="{{ asset('assets/img/face-after-image.jpg') }}" alt="teeth after">
                </div>
                <div class="teeth-beforeafter">
                    <img src="{{ asset('assets/img/teeth-before-image.jpg') }}" alt="teeth before">
                    <img src="{{ asset('assets/img/teeth-after-image.jpg') }}" alt="teeth after">
                </div>
                <div class="teeth-beforeafter">
                    <img src="{{ asset('assets/img/face-before-image.jpg') }}" alt="teeth before">
                    <img src="{{ asset('assets/img/face-after-image.jpg') }}" alt="teeth after">
                </div>
            </div>
        </div>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
    </section> --}}
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
                <a href="{{ asset('assets/img/portfolio-01-lg.jpg') }}"  class="item-inner">
                    <img src="{{ asset('assets/img/portfolio-01.jpg') }}" alt="portfolio-01">
                    <div class="tm-zoom-btn"></div>
                    <i class="tm-zoom-icon icofont icofont-drag1"></i>
                </a>
            </div><!-- .tm-portfolio-item -->
            <div class="tm-portfolio-item urology traumatology">
                <a href="{{ asset('assets/img/portfolio-02-lg.jpg') }}"  class="item-inner">
                    <img src="{{ asset('assets/img/portfolio-02.jpg') }}" alt="portfolio-02">
                    <div class="tm-zoom-btn"></div>
                    <i class="tm-zoom-icon icofont icofont-drag1"></i>
                </a>
            </div><!-- .tm-portfolio-item -->
            <div class="tm-portfolio-item cardiology pulmonary">
                <a href="{{ asset('assets/img/portfolio-03-lg.jpg') }}"  class="item-inner">
                    <img src="{{ asset('assets/img/portfolio-03.jpg') }}" alt="portfolio-03">
                    <div class="tm-zoom-btn"></div>
                    <i class="tm-zoom-icon icofont icofont-drag1"></i>
                </a>
            </div><!-- .tm-portfolio-item -->
            <div class="tm-portfolio-item neurology traumatology">
                <a href="{{ asset('assets/img/portfolio-04-lg.jpg') }}"  class="item-inner">
                    <img src="{{ asset('assets/img/portfolio-04.jpg') }}" alt="portfolio-04">
                    <div class="tm-zoom-btn"></div>
                    <i class="tm-zoom-icon icofont icofont-drag1"></i>
                </a>
            </div><!-- .tm-portfolio-item -->
            <div class="tm-portfolio-item urology">
                <a href="{{ asset('assets/img/portfolio-05-lg.jpg') }}"  class="item-inner">
                    <img src="{{ asset('assets/img/portfolio-05.jpg') }}" alt="portfolio-05">
                    <div class="tm-zoom-btn"></div>
                    <i class="tm-zoom-icon icofont icofont-drag1"></i>
                </a>
            </div><!-- .tm-portfolio-item -->
            <div class="tm-portfolio-item cardiology neurology pulmonary">
                <a href="{{ asset('assets/img/portfolio-06-lg.jpg') }}"  class="item-inner">
                    <img src="{{ asset('assets/img/portfolio-06.jpg') }}" alt="portfolio-06">
                    <div class="tm-zoom-btn"></div>
                    <i class="tm-zoom-icon icofont icofont-drag1"></i>
                </a>
            </div><!-- .tm-portfolio-item -->
            <div class="tm-portfolio-item urology pulmonary">
                <a href="{{ asset('assets/img/portfolio-07-lg.jpg') }}"  class="item-inner">
                    <img src="{{ asset('assets/img/portfolio-07.jpg') }}" alt="portfolio-07">
                    <div class="tm-zoom-btn"></div>
                    <i class="tm-zoom-icon icofont icofont-drag1"></i>
                </a>
            </div><!-- .tm-portfolio-item -->
            <div class="tm-portfolio-item cardiology traumatology">
                <a href="{{ asset('assets/img/portfolio-08-lg.jpg') }}"  class="item-inner">
                    <img src="{{ asset('assets/img/portfolio-08.jpg') }}" alt="portfolio-08">
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
                    <div class="owl-carousel tm-testimonial tm-testimonial-2 tm-dots1">
                        <div class="tm-single-testimonial">
                            <div class="tm-testimonial-thumb"><img src="{{ asset('assets/img/test-01.jpg') }}" alt=""></div>
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
                            <div class="tm-testimonial-thumb"><img src="{{ asset('assets/img/test-02.jpg') }}" alt=""></div>
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
                            <div class="tm-testimonial-thumb"><img src="{{ asset('assets/img/test-03.jpg') }}" alt=""></div>
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
                        <i class="icofont icofont-briefcase-alt-2"></i>
                        <h2 class="tm-counter">24</h2>
                        <h3>Années d'expérience</h3>
                    </div>
                    <div class="empty-space col-xs-b30"></div>
                </div><!-- .col -->
                <div class="col-lg-3 col-md-6">
                    <div class="tm-fun-fact text-center">
                        <i class="icofont icofont-emo-simple-smile"></i>
                        <h2 class="tm-counter">+3000</h2>
                        <h3>Patient satisfait </h3>
                    </div>
                    <div class="empty-space col-xs-b30"></div>
                </div><!-- .col -->
                <div class="col-lg-3 col-md-6">
                    <div class="tm-fun-fact text-center">
                        <i class="icofont icofont-doctor"></i>
                        <h2 class="tm-counter">+15</h2>
                        <h3>Nombre des docteurs</h3>
                    </div>
                    <div class="empty-space col-xs-b30"></div>
                </div><!-- .col -->
                <div class="col-lg-3 col-md-6">
                    <div class="tm-fun-fact text-center">
                        <i class="icofont icofont-users-social"></i>
                        <h2 class="tm-counter">80</h2>
                        <h3>Nombre de staff</h3>
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
        <div class="empty-space col-md-b100 col-xs-b70"></div>
        <div class="container">
            <div class="tm-section-heading text-center">
                <h2>Frequently Asked Questions</h2>
                <div class="tm-section-seperator"><span></span></div>
                <div class="empty-space col-md-b60 col-xs-b40"></div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordian-wrapper tm-style1">
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
                    <div class="empty-space col-xs-b30"></div>
                </div><!-- .col -->
                <div class="col-lg-6">
                    <div class="accordian-wrapper tm-style1">
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
                    <div class="empty-space col-xs-b30"></div>
                </div><!-- .col -->
            </div>
        </div>
        <div class="empty-space col-md-b70 col-xs-b40"></div>
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
                <div class="col-md-4">
                    <div class="tm-post tm-style1 tm-type1">
                        <div class="tm-post-thumb">
                            <a href="#" class="tm-link-block">
                                <img src="{{ asset('assets/img/blog-10.jpg') }}" alt="blog-01">
                                <div class="tm-blog-hover">
                                    <span class="tm-blog-shap"></span>
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="empty-space col-xs-b25"></div>
                        <div class="tm-blog-body">
                            <h2 class="tm-blog-heading">
                                <a href="#" class="tm-link-block">Scary Thing That You Don’t Get</a>
                            </h2>
                            <div class="empty-space col-xs-b15"></div>
                            <div class="tm-blog-meta">
                                <span><a href="#" class="bar-link"><i class="fa fa-user"></i>Admin</a></span>
                                <span><i class="fa fa-calendar"></i>Jan 10, 2018</span>
                            </div>
                            <div class="empty-space col-xs-b20"></div>
                            <div class="tm-blog-separator"></div>
                            <div class="tm-entry-content">
                                <p>If you're tossing and turning every night, there's some bad news. Your brain could be in big trouble! Turns out...</p>
                                <div class="empty-space col-xs-b20"></div>
                                <a href="#" class="tm-btn1">READ MORE</a>
                            </div>
                        </div>
                    </div><!-- .tm-post -->
                    <div class="empty-space col-xs-b30"></div>
                </div><!-- .col -->
                <div class="col-md-4">
                    <div class="tm-post tm-style1 tm-type1">
                        <div class="tm-post-thumb">
                            <a href="#" class="tm-link-block">
                                <img src="{{ asset('assets/img/blog-11.jpg') }}" alt="blog-01">
                                <div class="tm-blog-hover">
                                    <span class="tm-blog-shap"></span>
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="empty-space col-xs-b25"></div>
                        <div class="tm-blog-body">
                            <h2 class="tm-blog-heading">
                                <a href="#" class="tm-link-block">Scary Thing That You Don’t Get</a>
                            </h2>
                            <div class="empty-space col-xs-b15"></div>
                            <div class="tm-blog-meta">
                                <span><a href="#" class="bar-link"><i class="fa fa-user"></i>Admin</a></span>
                                <span><i class="fa fa-calendar"></i>Jan 10, 2018</span>
                            </div>
                            <div class="empty-space col-xs-b20"></div>
                            <div class="tm-blog-separator"></div>
                            <div class="tm-entry-content">
                                <p>If you're tossing and turning every night, there's some bad news. Your brain could be in big trouble! Turns out...</p>
                                <div class="empty-space col-xs-b20"></div>
                                <a href="#" class="tm-btn1">READ MORE</a>
                            </div>
                        </div>
                    </div><!-- .tm-post -->
                    <div class="empty-space col-xs-b30"></div>
                </div><!-- .col -->
                <div class="col-md-4">
                    <div class="tm-post tm-style1 tm-type1">
                        <div class="tm-post-thumb">
                            <a href="#" class="tm-link-block">
                                <img src="{{ asset('assets/img/blog-12.jpg') }}" alt="blog-01">
                                <div class="tm-blog-hover">
                                    <span class="tm-blog-shap"></span>
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="empty-space col-xs-b25"></div>
                        <div class="tm-blog-body">
                            <h2 class="tm-blog-heading">
                                <a href="#" class="tm-link-block">Scary Thing That You Don’t Get</a>
                            </h2>
                            <div class="empty-space col-xs-b15"></div>
                            <div class="tm-blog-meta">
                                <span><a href="#" class="bar-link"><i class="fa fa-user"></i>Admin</a></span>
                                <span><i class="fa fa-calendar"></i>Jan 10, 2018</span>
                            </div>
                            <div class="empty-space col-xs-b20"></div>
                            <div class="tm-blog-separator"></div>
                            <div class="tm-entry-content">
                                <p>If you're tossing and turning every night, there's some bad news. Your brain could be in big trouble! Turns out...</p>
                                <div class="empty-space col-xs-b20"></div>
                                <a href="#" class="tm-btn1">READ MORE</a>
                            </div>
                        </div>
                    </div><!-- .tm-post -->
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
                <div class="col-lg-4">
                    <div class="empty-space col-md-b0 col-xs-b40"></div>
                    <div class="tm-contact-info">
                        <div class="tm-single-contact tm-style1">
                            <i class="fa fa-map-marker"></i>
                            <h3>Address</h3>
                            <p>2855 Speer Blvd, Denver, CO 80211, USA</p>
                        </div>
                        <div class="empty-space col-md-b60 col-xs-b30"></div>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-4">
                    <div class="tm-single-contact tm-style1">
                        <i class="fa fa-phone"></i>
                        <h3>Phone</h3>
                        <p>1-800-915-6270 <br>
                           1-800-915-6272</p>
                    </div>
                    <div class="empty-space col-md-b60 col-xs-b30"></div>
                </div><!-- .col -->
                <div class="col-lg-4">
                    <div class="tm-single-contact tm-style1">
                        <i class="fa fa-envelope"></i>
                        <h3>Email</h3>
                        <p>info@trustlife.com <br>
                        Skype: example</p>
                    </div>
                    <div class="empty-space col-md-b60 col-xs-b30"></div>
                </div><!-- .col -->
                <div class="col-lg-12">
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
                <div class="tm-client"><img src="{{ asset('assets/img/client-logo-01.png') }}" alt=""></div>
                <div class="tm-client"><img src="{{ asset('assets/img/client-logo-02.png') }}" alt=""></div>
                <div class="tm-client"><img src="{{ asset('assets/img/client-logo-03.png') }}" alt=""></div>
                <div class="tm-client"><img src="{{ asset('assets/img/client-logo-04.png') }}" alt=""></div>
                <div class="tm-client"><img src="{{ asset('assets/img/client-logo-05.png') }}" alt=""></div>
                <div class="tm-client"><img src="{{ asset('assets/img/client-logo-06.png') }}" alt=""></div>
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
                            <h2>Suivez-nous :</h2>
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
                        <p class="tm-copyright">Copyright © 2022 CIK. Designed by SILASDEV </p>
                    </div><!-- .col -->
                    <div class="col-md-5 col-lg-4">
                        <div class="tm-footer-hotline">
                            <div class="tm-footer-hotline-in">
                                <div class="tm-phone-icon"><i class="fa fa-mobile"></i></div>
                                <h3>Nous contacter</h3>
                                <p>+243 827839232</p>
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

	@include('pageHtml.menu.pied')
</body>
</html>
