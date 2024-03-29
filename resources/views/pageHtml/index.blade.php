@include("pageHtml.menu.entete")

@include('pageHtml.menu.menu')

<!-- Start Hero Section -->
<section class="hero ripple-version" id="home" style="background: url({{ asset('assets/img/slide-01.jpg') }});">
    <div class="container">
        <div class="slider-text">
            <h1 class="fw-bold mt-lg-0 mt-sm-3 mt-4 py-0"
                style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                <span class="text-danger" style="font-size: 7rem;">C</span><span style="font-size: 7rem;">I</span><span
                    class="text-danger" style="font-size: 7rem;">K</span>
                <div class="badge badge-warning"> @lang("info.slide1.t1") 24h/24 </div>
            </h1>
            <div class="empty-space col-sm-b20 col-xs-b10"></div>
            <h2 class="tm-headline letters tm-rotate-text">

                @lang('info.slide1.t2')
                <span class="tm-words-wrapper">
                    <b class="is-visible"> @lang('info.offres.c1') </b>
                    <b>@lang("info.offres.c2")</b>
                    <b> @lang("info.offres.c3") </b>
                    <b> @lang("info.offres.c4") </b>
                    <b> @lang("info.offres.c5") </b>
                    <b> @lang("info.offres.c6") </b>
                    <b> @lang("info.offres.c7") </b>
                    <b> @lang("info.offres.c8") </b>
                    <b> @lang("info.offres.c9") </b>
                    <b>  @lang("info.offres.c10")</b>
                    <b>  @lang("info.offres.c11")</b>
                </span>
            </h2>
            <p class="fs-5">@lang('info.slide1.t3')</p>
            <div class="empty-space col-md-b55 col-sm-b35 col-xs-b25"></div>
            <div class="tm-hero-btn tm-hero-video-btn">
                {{-- <div class="tm-video-button tm-color1" data-video-id="hgstalns_wo" data-channel="youtube">
                    <i class="icofont icofont-play-alt-3"></i>
                    <span class="tm-video-animaiton"><span></span></span>
                </div> --}}
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
            {{-- <div class="col-lg-4">
                <div class="empty-space col-md-b0 col-xs-b30"></div>
                <div class="tm-icon-box">
                    <div class="tm-icon"><i class="fa fa-user-md"></i></div>
                    <h2 class="tm-icon-box-title"> @lang('info.slide2.t4') </h2>
                    <p class="tm-icon-box-text">@lang('info.slide2.t5')</p>
                </div>
            </div> --}}
            <!-- .col -->
            <div class="col-lg-6">
                <div class="empty-space col-md-b0 col-xs-b30"></div>
                <div class="tm-icon-box">
                    <div class="tm-icon"><i class="fa fa-ambulance"></i></div>
                    <h2 class="tm-icon-box-title">@lang('info.slide2.t4')</h2>
                    <p class="tm-icon-box-text">@lang('info.slide2.t5')</p>
                </div>
            </div><!-- .col -->
            <div class="col-lg-6">
                <div class="empty-space col-md-b0 col-xs-b30"></div>
                <div class="tm-icon-box">
                    <div class="tm-icon"><i class="fa fa-hospital-o"></i></div>
                    <h2 class="tm-icon-box-title">@lang('info.slide2.t6')</h2>
                    <p class="tm-icon-box-text">@lang('info.slide2.t7')</p>
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
        <h2>@lang("info.slide3.t8")</h2>
        <div class="tm-section-seperator"><span></span></div>
        <div class="empty-space col-md-b60 col-xs-b40"></div>
    </div>
    <div class="tm-relative">
        <div class="tm-half-section-bg left">
            <img src="{{ asset('assets/img/doctors/about.jpg') }}" alt="about hafl bg">
        </div>
        <div class="empty-space col-xs-b60"></div>
        <div class="container">
            <div class="row row-md-reverce">
                <div class="col-lg-5">
                    <div class="tm-shedule-wrap">
                        <div class="tm-shedule">
                            <h3 class="tm-shedule-title">@lang("info.slide3,1.t16") </h3>
                            <ul class="tm-shedule-list">
                                <li>
                                    <span>@lang("info.slide3,1.t17")</span>
                                    <span>@lang("info.slide3,1.t18")</span>
                                </li>
                                <li>
                                    <span>@lang("info.slide3,1.t19")</span>
                                    <span>@lang("info.slide3,1.t20")</span>
                                </li>

                            </ul>
                        </div><!-- .tm-shedule -->
                        <div class="empty-space col-md-b40 col-xs-b30"></div>
                        <div class="tm-shedule">
                            <h3 class="tm-shedule-title">@lang("info.slide3,1.t21")</h3>
                            <ul class="tm-shedule-list">
                                <li>
                                    <span>@lang("info.slide3,1.t22")</span>
                                    <span>@lang("info.slide3,1.t23")</span>
                                </li>
                                <li>
                                    <span></span>
                                    <span>@lang("info.slide3,1.t24")</span>
                                </li>
                                <li>
                                    <span></span>
                                    <span>@lang("info.slide3,1.t25")</span>
                                </li>
                            </ul>
                        </div><!-- .tm-shedule -->
                    </div>
                </div><!-- .col -->
                <div class="col-lg-7">
                    <div class="empty-space col-md-b30 col-xs-b0"></div>
                    <div class="tm-about-wrap tm-hf-hide">
                        <div class="tm-about tm-gray-bg wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h3 class="tm-about-title">@lang("info.slide3.t9") <span>CIK</span>?</h3>
                            <div class="tm-about-text">
                                <p>@lang("info.slide3.t10") ; <br>
                                @lang("info.slide3.t11") ;<br>
                                @lang("info.slide3.t12") ;<br>
                                @lang("info.slide3.t13") ;<br>
                                @lang("info.slide3.t14")
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
        <h2>@lang("info.departement.services")</h2>
        <div class="tm-section-seperator"><span></span></div>
        <div class="empty-space col-md-b60 col-xs-b40"></div>
    </div>
    <div class="container">
        <div class="tm-tab-wrap">
            <div class="tm-tabs-wrap">
                <ul class="tabs">
                    <li><i class="icofont icofont-prescription"></i>@lang("info.departement.d1")</li>
                    <li><i class="icofont icofont-heartbeat"></i>@lang("info.departement.d2") </li>
                    <li><i class="icofont icofont-surgeon"></i>@lang("info.departement.d3")</li>
                    <li><i class="icofont icofont-icu"></i>@lang("info.departement.d4")</li>
                    <li><i class="icofont icofont-xray"></i>@lang("info.departement.d5")</li>
                    <li><i class="icofont icofont-laboratory"></i>@lang("info.departement.d6")</li>
                </ul> <!-- .tabs -->
            </div>
            <div class="empty-space col-md-b60 col-xs-b40"></div>
            <div class="tm-tab-content">
                <div class="tm-tabs-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="tm-dept-img"><img src="{{ asset('assets/img/services/8.jpg') }}" alt=""></div>
                        </div><!-- .col -->
                        <div class="col-lg-6">
                            <div class="tm-dept-details-wrap">
                                <div class="tm-about tm-gray-bg">
                                    <h3 class="tm-about-title">@lang("info.departement.d1")</span></h3>
                                    <div class="tm-about-text">
                                        <p>
                                        @lang("info.departement.t31")
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
                            <div class="tm-dept-img"><img src="{{ asset('assets/img/services/5.jpg') }}" alt=""></div>
                        </div><!-- .col -->
                        <div class="col-lg-6">
                            <div class="tm-dept-details-wrap">
                                <div class="tm-about tm-gray-bg">
                                    <h3 class="tm-about-title">@lang("info.departement.d2")</span></h3>
                                    <div class="tm-about-text">
                                        <p>@lang("info.departement.t32")</p>
                                    </div>

                                </div>
                            </div>
                        </div><!-- .col -->
                    </div>
                </div> <!-- .tabs_item -->
                <div class="tm-tabs-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="tm-dept-img"><img src="{{ asset('assets/img/services/9.jpg')}}" alt=""></div>
                        </div><!-- .col -->
                        <div class="col-lg-6">
                            <div class="tm-dept-details-wrap">
                                <div class="tm-about tm-gray-bg">
                                    <h3 class="tm-about-title"><span>@lang("info.departement.d3")</span></h3>
                                    <div class="tm-about-text">
                                        <p>@lang("info.departement.t33")</p>
                                    </div>

                                </div>
                            </div>
                        </div><!-- .col -->
                    </div>
                </div> <!-- .tabs_item -->
                <div class="tm-tabs-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="tm-dept-img"><img src="{{asset('assets/img/services/3.jpg')}}" alt=""></div>
                        </div><!-- .col -->
                        <div class="col-lg-6">
                            <div class="tm-dept-details-wrap">
                                <div class="tm-about tm-gray-bg">
                                    <h3 class="tm-about-title"><span>@lang("info.departement.d4")</span></h3>
                                    <div class="tm-about-text">
                                        <p>@lang("info.departement.t34")</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->
                    </div>
                </div> <!-- .tabs_item -->
                <div class="tm-tabs-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="tm-dept-img"><img src="{{asset('assets/img/services/4.jpg')}}" alt=""></div>
                        </div><!-- .col -->
                        <div class="col-lg-6">
                            <div class="tm-dept-details-wrap">
                                <div class="tm-about tm-gray-bg">
                                    <h3 class="tm-about-title"><span>@lang("info.departement.d5")</span></h3>
                                    <div class="tm-about-text">
                                        <p>@lang("info.departement.t35")</p>
                                    </div>

                                </div>
                            </div>
                        </div><!-- .col -->
                    </div>
                </div> <!-- .tabs_item -->
                <div class="tm-tabs-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="tm-dept-img"><img src="{{asset('assets/img/services/10.jpg')}}" alt=""></div>
                        </div><!-- .col -->
                        <div class="col-lg-6">
                            <div class="tm-dept-details-wrap">
                                <div class="tm-about tm-gray-bg">
                                    <h3 class="tm-about-title"><span>@lang("info.departement.d6")</span></h3>
                                    <div class="tm-about-text">
                                        <p>@lang("info.departement.t36")</p>
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
        <img src="{{ asset('assets/img/doctors/cl.jpg') }}" alt="about hafl bg">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 tm-hf-hide">
                <div class="empty-space col-md-b0 col-xs-b70"></div>
                <div class="tm-appointment-heading tm-gray-bg wow fadeInLeft" data-wow-duration="1s"
                    data-wow-delay="0.1s">
                    <div class="tm-section-heading text-center">
                        <h2>@lang("info.slide5.rdv")</h2>
                        <div class="tm-section-seperator"><span></span></div>
                        <p>@lang("info.slide5.rdv-text")</div>
                </div>
            </div><!-- .col -->
            <div class="col-lg-5">
                <div class="empty-space col-md-b60 col-xs-b40"></div>
                <form method="POST" action="{{ route('reservation') }}" class="tm-appointment-form" id="appointment-form">
                    @csrf
                    <div id="tm-alert1"></div>
                    <div class="tm-form-field">
                        <input type="text" id="uname" name="uname" placeholder='@lang("info.slide5.nom complet")' required>
                        <span class="bar"></span>
                    </div>
                    <div class="tm-form-field">
                        <input type="text" id="uemail" name="uemail" placeholder='@lang("info.slide5.adresse mail")' required>
                        <span class="bar"></span>
                    </div>
                    <div class="tm-form-field">
                        <input type="text" id="unumber" name="unumber" placeholder='@lang("info.slide5.telephone")' required>
                        <span class="bar"></span>
                    </div>
                    <div class="tm-form-field">
                        <input name="udate" type="text" id="udate" placeholder='@lang("info.slide5.date reserve")'>
                        <span class="bar"></span>
                        <div class="date-icon"><i class="fa fa-calendar"></i></div>
                    </div>
                    <div class="tm-form-field">
                        <div class="tm-custom-select-wrap">
                            <select name="udepartment" class="tm-custom-select" id="udepartment">
                                <option value="department"> @lang("info.slide5.departement")</option>
                                <option value="dental-care">@lang("info.slide5.d1")</option>
                                <option value="neurology">@lang("info.slide5.d2")</option>
                                <option value="crutches">@lang("info.slide5.d3")</option>
                                <option value="cardiology">@lang("info.slide5.d4")</option>
                                <option value="pulmonary">@lang("info.slide5.d5")</option>
                                <option value="x-ray">@lang("info.slide5.d6")</option>
                            </select>
                        </div>
                    </div>
                    <div class="tm-form-field">
                        <div class="tm-custom-select-wrap">
                            <select name="udoctor" class="tm-custom-select" id="udoctor">
                                <option value="doctor">@lang("info.slide5.docteur")</option>
                                <option value="1">Dr. ILUNG KABUYI (@lang("info.equipe.speciality1"))</option>
                                <option value="2">Dr. SiTU GUYILAIN (@lang("info.equipe.speciality2"))</option>
                                <option value="3">Dr. Mohoshin Kabir (@lang("info.equipe.speciality2"))</option>
                                <option value="4">Dr. LUFUNGULA TRESOR (@lang("info.equipe.speciality2"))</option>
                                <option value="5">Dr. KANKWASHI TINCKLAUT(@lang("info.equipe.speciality2"))</option>
                                <option value="6">Dr. NSIAMUNU BAKU (@lang("info.equipe.speciality2"))</option>
                                <option value="7">Dr. LAURENCE DISU (@lang("info.equipe.speciality7"))</option>
                                <option value="8">Dr. GLORIA PUATI (@lang("info.equipe.speciality2"))</option>
                                <option value="9">Dr. LEONIE BOWA (@lang("info.equipe.speciality8"))</option>
                                <option value="10">Dr. LUTULA JOELLE (@lang("info.equipe.speciality2"))</option>
                            </select>
                        </div>
                    </div>
                    <div class="tm-form-field">
                        <textarea cols="30" rows="10" id="umsg" name="umsg" placeholder="@lang("info.slide5.message")"></textarea>
                        <span class="bar"></span>
                    </div>
                    <div class="empty-space col-xs-b10"></div>
                    <div class="tm-form-field">
                        <button class="tm-btn1 tm-reverse" type="submit" id="appointment-submit" name="submit">@lang("info.slide5.rdv-btn")
                            </button>
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
        <h2>@lang("info.equipe.docteurs")</h2>
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
                            <h3 class="tm-member-name"><a href="#">Dr. Ilunga Kabuyi</a></h3>
                            <span class="tm-member-speciality">@lang("info.equipe.speciality1")</span>
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
                            <h3 class="tm-member-name"><a href="#">Dr. Situ Guylain</a></h3>
                            <span class="tm-member-speciality">@lang("info.equipe.speciality2")</span>
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
                            <h3 class="tm-member-name"><a href="#">Dr. Lufungula Tresor</a></h3>
                            <span class="tm-member-speciality">@lang("info.equipe.speciality3")</span>
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
                            <h3 class="tm-member-name"><a href="#">Dr. Kankwashi Tincklaut </a></h3>
                            <span class="tm-member-speciality">@lang("info.equipe.speciality4")</span>
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
                            <h3 class="tm-member-name"><a href="#">Dr. Nsiamunu Baku</a></h3>
                            <span class="tm-member-speciality">@lang("info.equipe.speciality5")</span>
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
                            <h3 class="tm-member-name"><a href="#">Dr. Laurence Disu</a></h3>
                            <span class="tm-member-speciality">@lang("info.equipe.speciality6")</span>
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
                            <h3 class="tm-member-name"><a href="#">Dr.Gloria Puati</a></h3>
                            <span class="tm-member-speciality">@lang("info.equipe.speciality7")</span>
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
                            <h3 class="tm-member-name"><a href="#">Dr. Léonie Bowa</a></h3>
                            <span class="tm-member-speciality">@lang("info.equipe.speciality8")</span>
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
                            <h3 class="tm-member-name"><a href="#">Dr.Lutula Joelle</a></h3>
                            <span class="tm-member-speciality">@lang("info.equipe.speciality9")</span>
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
        <h2>@lang("info.gallerie.voir")</h2>
        <div class="tm-section-seperator"><span></span></div>
        <div class="empty-space col-md-b60 col-xs-b40"></div>
    </div>
    <div class="tm-portfolio-filter text-center">
        <ul>
            <li class="active"><a href="#" data-filter="*">@lang("info.gallerie.tout")</a></li>
            <li><a href="#" data-filter=".staff">@lang("info.gallerie.personnel")</a></li>
            <li><a href="#" data-filter=".locals">@lang("info.gallerie.locaux")</a></li>
            <li><a href="#" data-filter=".materials">@lang("info.gallerie.materiels")</a></li>
        </ul>
    </div><!-- .tm-portfolio-filter-area -->
    <div class="tm-portfolio zoom-gallery tm-gutter-less">
        <div class="tm-grid-sizer"></div>
        <div class="tm-portfolio-item staff pulmonary">
            <a href="{{ asset('assets/img/galery/IMG_0060.jpg') }}" class="item-inner">
                <img src="{{ asset('assets/img/galery/IMG_0060.jpg') }}" alt="portfolio-06">
                <div class="tm-zoom-btn"></div>
                <i class="tm-zoom-icon icofont icofont-drag1"></i>
            </a>
        </div><!-- .tm-portfolio-item -->
        <div class="tm-portfolio-item locals">
            <a href="{{ asset('assets/img/galery/IMG_0090.jpg') }}" class="item-inner">
                <img src="{{ asset('assets/img/galery/IMG_0090.jpg') }}" alt="portfolio-01">
                <div class="tm-zoom-btn"></div>
                <i class="tm-zoom-icon icofont icofont-drag1"></i>
            </a>
        </div><!-- .tm-portfolio-item -->
        <div class="tm-portfolio-item materials traumatology">
            <a href="{{ asset('assets/img/galery/salle_d.jpg') }}" class="item-inner">
                <img src="{{ asset('assets/img/galery/salle_d.jpg') }}" alt="portfolio-02">
                <div class="tm-zoom-btn"></div>
                <i class="tm-zoom-icon icofont icofont-drag1"></i>
            </a>
        </div><!-- .tm-portfolio-item -->
        <div class="tm-portfolio-item staff pulmonary">
            <a href="{{ asset('assets/img/galery/HW7B9775.jpg') }}" class="item-inner">
                <img src="{{ asset('assets/img/galery/HW7B9775.jpg') }}" alt="portfolio-03">
                <div class="tm-zoom-btn"></div>
                <i class="tm-zoom-icon icofont icofont-drag1"></i>
            </a>
        </div><!-- .tm-portfolio-item -->
        <div class="tm-portfolio-item locals traumatology">
            <a href="{{ asset('assets/img/galery/IMG_0137.jpg') }}" class="item-inner">
                <img src="{{ asset('assets/img/galery/IMG_0137.jpg') }}" alt="portfolio-04">
                <div class="tm-zoom-btn"></div>
                <i class="tm-zoom-icon icofont icofont-drag1"></i>
            </a>
        </div><!-- .tm-portfolio-item -->
        <div class="tm-portfolio-item materials">
            <a href="{{ asset('assets/img/galery/Salle_kine7.jpg') }}" class="item-inner">
                <img src="{{ asset('assets/img/galery/Salle_kine7.jpg') }}" alt="portfolio-05">
                <div class="tm-zoom-btn"></div>
                <i class="tm-zoom-icon icofont icofont-drag1"></i>
            </a>
        </div><!-- .tm-portfolio-item -->
        <div class="tm-portfolio-item staff pulmonary">
            <a href="{{ asset('assets/img/HW7B9715-min.jpg') }}" class="item-inner">
                <img src="{{ asset('assets/img/HW7B9715-min.jpg') }}" alt="portfolio-05">
                <div class="tm-zoom-btn"></div>
                <i class="tm-zoom-icon icofont icofont-drag1"></i>
            </a>
        </div><!-- .tm-portfolio-item -->
        <div class="tm-portfolio-item staff pulmonary">
            <a href="{{ asset('assets/img/HW7B9765-min.jpg') }}" class="item-inner">
                <img src="{{ asset('assets/img/HW7B9765-min.jpg') }}" alt="portfolio-05">
                <div class="tm-zoom-btn"></div>
                <i class="tm-zoom-icon icofont icofont-drag1"></i>
            </a>
        </div><!-- .tm-portfolio-item -->
        <div class="tm-portfolio-item locals">
            <a href="{{ asset('assets/img/IMG_0107-min.jpg') }}" class="item-inner">
                <img src="{{ asset('assets/img/IMG_0107-min.jpg') }}" alt="portfolio-05">
                <div class="tm-zoom-btn"></div>
                <i class="tm-zoom-icon icofont icofont-drag1"></i>
            </a>
        </div><!-- .tm-portfolio-item -->
        <div class="tm-portfolio-item locals">
            <a href="{{ asset('assets/img/IMG_0139-min.jpg') }}" class="item-inner">
                <img src="{{ asset('assets/img/IMG_0139-min.jpg') }}" alt="portfolio-05">
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
        <h2>@lang("info.patients.disent")</h2>
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
                            <blockquote>@lang("info.patients.test1")</blockquote>
                            <div class="tm-testimonial-meta">
                                <h3>Alex Bieniek</h3>
                                <span>@lang("info.patients.proffession1")</span>
                            </div>
                        </div>
                    </div><!-- testimonail slide -->
                    <div class="tm-single-testimonial">
                        <div class="tm-testimonial-thumb"><img src="{{ asset('assets/img/test-02.jpg') }}" alt=""></div>
                        <div class="tm-testimonial-text">
                            <i class="fa fa-quote-right"></i>
                            <blockquote>@lang("info.patients.test2")
                            </blockquote>
                            <div class="tm-testimonial-meta">
                                <h3>Sheri Coburn</h3>
                                <span>@lang("info.patients.proffession2")</span>
                            </div>
                        </div>
                    </div><!-- testimonail slide -->
                    <div class="tm-single-testimonial">
                        <div class="tm-testimonial-thumb"><img src="{{ asset('assets/img/test-03.jpg') }}" alt=""></div>
                        <div class="tm-testimonial-text">
                            <i class="fa fa-quote-right"></i>
                            <blockquote>@lang("info.patients.test3")</blockquote>
                            <div class="tm-testimonial-meta">
                                <h3>Martha m.</h3>
                                <span>@lang("info.patients.proffession3") </span>
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
                    <h3>@lang("info.tableau chiffres.annees")</h3>
                </div>
                <div class="empty-space col-xs-b30"></div>
            </div><!-- .col -->
            <div class="col-lg-3 col-md-6">
                <div class="tm-fun-fact text-center">
                    <i class="icofont icofont-emo-simple-smile"></i>
                    <h2 class="tm-counter">+3000</h2>
                    <h3>@lang("info.tableau chiffres.patients")</h3>
                </div>
                <div class="empty-space col-xs-b30"></div>
            </div><!-- .col -->
            <div class="col-lg-3 col-md-6">
                <div class="tm-fun-fact text-center">
                    <i class="icofont icofont-doctor"></i>
                    <h2 class="tm-counter">+15</h2>
                    <h3>@lang("info.tableau chiffres.docteurs")</h3>
                </div>
                <div class="empty-space col-xs-b30"></div>
            </div><!-- .col -->
            <div class="col-lg-3 col-md-6">
                <div class="tm-fun-fact text-center">
                    <i class="icofont icofont-users-social"></i>
                    <h2 class="tm-counter">80</h2>
                    <h3>@lang("info.tableau chiffres.staff")</h3>
                </div>
                <div class="empty-space col-xs-b30"></div>
            </div><!-- .col -->
        </div>
    </div>
    <div class="empty-space col-lg-b70 col-xs-b40"></div>
</section>
<!-- End Fun Fact Section -->



<!-- Start FAQ Section -->
<section class="tm-gray-bg tm-overflow-hide">
    <div class="empty-space col-md-b100 col-xs-b70"></div>
    <div class="container">
        <div class="tm-section-heading text-center">
            <h2>@lang("info.tableau questions.faq")</h2>
            <div class="tm-section-seperator"><span></span></div>
            <div class="empty-space col-md-b60 col-xs-b40"></div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="accordian-wrapper tm-style1">
                    <div class="accordian">
                        <div class="single-accordian">
                            <h3 class="accordian-head">@lang("info.tableau questions.q1")</h3>
                            <div class="accordian-body">@lang("info.tableau questions.reponse1")<br>
                                <li>Av/Kwango 3 Q/ Jolie parc C/Ngaliema</li>
                            </div>
                        </div><!-- .single-accordian -->
                        <div class="single-accordian">
                            <h3 class="accordian-head">@lang("info.tableau questions.q2")</h3>
                            <div class="accordian-body">@lang("info.tableau questions.reponse2") </div>
                        </div><!-- .single-accordian -->

                    </div>
                </div>
                <div class="empty-space col-xs-b30"></div>
            </div><!-- .col -->
            <div class="col-lg-6">
                <div class="accordian-wrapper tm-style1">
                    <div class="accordian">
                        <div class="single-accordian">
                            <h3 class="accordian-head">@lang("info.tableau questions.q3")</h3>
                            <div class="accordian-body">@lang("info.tableau questions.reponse3") </div>
                        </div><!-- .single-accordian -->
                        <div class="single-accordian">
                            <h3 class="accordian-head">@lang("info.tableau questions.q4")</h3>
                            <div class="accordian-body"> @lang("info.tableau questions.reponse4")</div>

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
        <h2>@lang("info.blog.mise")</h2>
        <div class="tm-section-seperator"><span></span></div>
        <div class="empty-space col-md-b60 col-xs-b40"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-info">@lang("info.blog.nothing")</h2>
            </div>
            {{-- <div class="col-md-4">
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
                            <a href="#" class="tm-link-block">@lang("info.blog.text")</a>
                        </h2>
                        <div class="empty-space col-xs-b15"></div>
                        <div class="tm-blog-meta">
                            <span><a href="#" class="bar-link"><i class="fa fa-user"></i>Admin</a></span>
                            <span><i class="fa fa-calendar"></i>@lang("info.blog.date")</span>
                        </div>
                        <div class="empty-space col-xs-b20"></div>
                        <div class="tm-blog-separator"></div>
                        <div class="tm-entry-content">
                            <p>@lang("info.blog.text2")</p>
                            <div class="empty-space col-xs-b20"></div>
                            <a href="#" class="tm-btn1">@lang("info.blog.btn")</a>
                        </div>
                    </div>
                </div><!-- .tm-post -->
                <div class="empty-space col-xs-b30"></div>
            </div><!-- .col --> --}}
        </div>
    </div>
    <div class="empty-space col-md-b70 col-xs-b40"></div>
</section>
<!-- End Blog Section -->

<!-- Start News Letter Section -->
<div class="tm-newsletter tm-bg">
    <div class="tm-nl-overlay"></div>
    <div class="empty-space col-md-b100 col-xs-b70"></div>
    <div id="tm-alertN"></div>
    <div class="container">
        <form class="mailchimp" action="" id="newsletter-form">
@csrf
            <div class="tm-form-field">
                {{-- <input type="text" name="subscribe" id="subscriber-email" placeholder="Nom"> --}}
                <input type="email" name="email" id="subscriber-email" placeholder= '@lang("info.blog.email")'>
                <span class="bar"></span>
            </div>
            <button type="submit" id="subscribe-button" class="tm-btn1 tm-reverse"><span><i
                    class="icofont icofont-location-arrow"></i>@lang("info.blog.btn2")</span></button>
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
        <h2>@lang("info.tableau contact.contactez")</h2>
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
                        <h3>@lang("info.tableau contact.adresse")</h3>
                        <p>@lang("info.tableau contact.location")</p>
                    </div>
                    <div class="empty-space col-md-b60 col-xs-b30"></div>
                </div>
            </div><!-- .col -->
            <div class="col-lg-4">
                <div class="tm-single-contact tm-style1">
                    <i class="fa fa-phone"></i>
                    <h3>@lang("info.tableau contact.telephone-contact")</h3>
                    <p>@lang("info.tableau contact.numero")</p>
                </div>
                <div class="empty-space col-md-b60 col-xs-b30"></div>
            </div><!-- .col -->
            <div class="col-lg-4">
                <div class="tm-single-contact tm-style1">
                    <i class="fa fa-envelope"></i>
                    <h3>@lang("info.tableau contact.mail")</h3>
                    <p>@lang("info.tableau contact.adresse mail")<br>
                    </p>
                </div>
                <div class="empty-space col-md-b60 col-xs-b30"></div>
            </div><!-- .col -->
            <div class="col-lg-12">
                <div id="tm-alert"></div>
                <form action="assets/php/mail.php" class="row tm-contact-form" method="post" id="contact-form">
                   @csrf
                    <div class="col-lg-6">
                        <div class="tm-form-field">
                            <input type="text" id="name" name="name" required>
                            <label>@lang("info.slide5.nom complet")</label>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-6">
                        <div class="tm-form-field">
                            <input type="text" id="email" name="email" required>
                            <label>@lang("info.slide5.adresse mail")</label>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-6">
                        <div class="tm-form-field">
                            <input type="text" id="subject" name="subject" required>
                            <label>@lang("info.tableau contact.sujet")</label>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-6">
                        <div class="tm-form-field">
                            <input type="text" id="phone" name="phone" required>
                            <label>@lang("info.slide5.telephone")</label>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-12">
                        <div class="tm-form-field">
                            <textarea cols="30" rows="10" id="msg" name="msg" required></textarea>
                            <label>@lang("info.tableau contact.message")</label>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-12">
                        <button class="tm-btn1" type="submit" id="submit" name="submit"><span> @lang("info.tableau contact.btn")
                            </span></button>
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

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7956.8035238812045!2d15.249551832675932!3d-4.335431055500141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a31a328634543%3A0x315d85fe85866769!2sClinique%20IK%20(CIK)!5e0!3m2!1sfr!2scd!4v1701702548740!5m2!1sfr!2scd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- End Map Section -->

{{--
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
<!-- End Clients Section --> --}}

<!-- Start Footer -->
<footer class="tm-overflow-hidden">
    <div class="tm-gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tm-footer-social">
                        {{-- <h2>Suivez-nous :</h2>
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
                        </div> --}}
                    </div>
                </div><!-- .col -->
            </div>
        </div>
    </div>
    <div class="tm-site-footer">
        <div class="container">
            <!-- row-md-reverce -->
            <div class="row row-sm-reverce">
                <div class="col-md-7 col-lg-8">
                    <p class="tm-copyright">Copyright © 2022 CIK. Designed by SILASDEV </p>
                </div><!-- .col -->
                <div class="col-md-5 col-lg-4">
                    <div class="tm-footer-hotline">
                        <div class="tm-footer-hotline-in">
                            <div class="tm-phone-icon"><i class="fa fa-mobile"></i></div>
                            <h3>Nous contacter</h3>
                            <p>+243 857000908</p>
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
