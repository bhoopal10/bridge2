<?php include('components/header.php') ?>
<body class="body-nav-fixed-menu-top">
  <div class="wrapper-body">

    <!-- NAVBAR -->
    <!--===============================================================-->
    <?php include('components/navbar.php'); ?>
    <!-- NAVBAR END -->

    <!-- SECTION INTRO SLIDER -->
    <!--===============================================================-->
    <div class="section-intro-index section-slider">
      <div class="layer-intro layer-intro-index">
        <!-- SLIDER -->
        <div class="onload-class" id="intro-slider-wrapper">
          <div class="carousel slide carousel-intro" id="carousel-intro" data-ride="carousel" data-interval="7500">
            <div class="wrapper-preloader">
              <div class="display-none" id="preloader"></div>
            </div>
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li class="active" data-target="#carousel-intro" data-slide-to="0" class=""></li>
              <li  data-target="#carousel-intro" data-slide-to="1"></li>
              <li class="" data-target="#carousel-intro" data-slide-to="2"></li>
              <li class="" data-target="#carousel-intro" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <!-- first slide -->
              <div class="item item-theme-first active">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-6 col-md-6 col-md-offset-1">
                      <h1 class="text-theme title-xl mt-40 animation an-delay-05 an-duration-04 fadeInLeftSlider">Account Reactivation</h1>
                      <ul class="list-unstyled list-md text-theme">
                        <li class="animation an-delay-09 an-duration-04 fadeInLeftSlider"><i class="fa fa-check fa-round"></i>Over 250 Suspended Seller account Reinstated and still counting..</li>
                        <li class="animation an-delay-11 an-duration-04 fadeInLeftSlider"><i class="fa fa-check fa-round"></i> No Advance Payment</li>
                      </ul>
                      <a class="text-theme btn btn-primary btn-lg animation an-delay-13 an-duration-04 fadeInRightSlider" href="#account-reactivation">Read More</a>
                    </div>
                    <div class="col-sm-5 hidden-xs">
                      <img class="pull-right animation an-delay-19 an-duration-04 fadeInUpSlider" src="public/images/business-01.png" alt="theme-img">
                    </div>
                  </div>
                </div>
              </div>
              <!-- second slide -->
              <div class="item item-theme">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-6 col-md-6 col-md-offset-1">
                      <h1 class="text-theme title-xl mt-40 animation an-delay-05 an-duration-04 fadeInUpSlider">Suspension Prevention</h1>
                      <ul class="list-unstyled list-md text-theme">
                        <li class="animation an-delay-09 an-duration-04 fadeInLeftSlider"><i class="fa fa-check fa-round"></i>Managing more than 100 active accounts</li>
                        <li class="animation an-delay-11 an-duration-04 fadeInLeftSlider"><i class="fa fa-check fa-round"></i>95% of reactive accounts have "Good Health"</li>
                      </ul>
                      <a class="text-theme btn btn-primary btn-lg animation an-delay-13 an-duration-04 fadeInRightSlider" href="#suspension-prevention">Read More</a>
                    </div>
                    <div class="col-sm-5 hidden-xs">
                      <img class="img-responsive img-slide-2 pull-right mt-20 animation an-delay-18 an-duration-04 fadeInUpSlider" src="public/images/business-02.png" alt="theme-img">
                    </div>
                  </div>
                </div>
              </div>
              <!-- third slide -->
              <div class="item item-theme">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-5 hidden-xs">
                      <img class="img-responsive img-slide-3 pull-right mt-30 animation an-delay-05 an-duration-04 fadeInLeftSlider" src="public/images/business-03.png" alt="theme-img">
                    </div>
                    <div class="col-sm-6 col-sm-offset-1">
                      <h1 class="text-theme title-xl mt-40 animation an-delay-08 an-duration-04 fadeInRightSlider">Listing Cataloguing</h1>
                      <ul class="list-unstyled list-md text-theme">
                        <li class="animation an-delay-14 an-duration-04 fadeInRightSlider"><i class="fa fa-check fa-round"></i>Experience of listing over 1 lakh items</li>
                        <li class="animation an-delay-16 an-duration-04 fadeInRightSlider"><i class="fa fa-check fa-round"></i> TAT (Turn around) = 2 days </li>
                      </ul>
                      <a class="text-theme btn btn-primary btn-lg animation an-delay-13 an-duration-04 fadeInRightSlider" href="#listing-cataloguing">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- fourth slide -->
              <div class="item item-theme">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-5 col-md-5 col-md-offset-2">
                      <h1 class="text-theme title-xl mt-40 animation an-delay-05 an-duration-04 fadeInUpSlider">Launch</h1>
                      <ul class="list-unstyled list-md text-theme">
                        <li class="animation an-delay-09 an-duration-04 fadeInLeftSlider"><i class="fa fa-check fa-round"></i> More than 50 Non Accounts Launched</li>
                        <li class="animation an-delay-11 an-duration-04 fadeInLeftSlider"><i class="fa fa-check fa-round"></i>No Advanced</li>
                      </ul>
                      <a class="text-theme btn btn-primary btn-lg animation an-delay-13 an-duration-04 fadeInRightSlider" href="#launch">Read More</a>
                    </div>
                    <div class="col-md-3 col-md-offset-1 hidden-xs">
                      <img class="img-responsive img-slide-2 pull-right mt-20 animation an-delay-18 an-duration-04 fadeInUpSlider" src="public/images/business-04.png" alt="theme-img">
                    </div>
                  </div>
                </div>
              </div>
              <!-- end slides -->
            </div>
          </div>
        </div>
        <!-- SLIDER END-->
      </div>
      <!-- Controls -->
      <a href="#carousel-intro" role="button" data-slide="prev">
        <i class="fa fa-angle-left fa-2x btn-prev-intro"></i>
      </a>
      <a href="#carousel-intro" role="button" data-slide="next">
        <i class="fa fa-angle-right fa-2x btn-next-intro"></i>
      </a>
    </div>

    <!-- SECTION CALL-TO -->
    <!--===============================================================-->
    <div class="section section-xs section-both section-primary section-call-to">
      <div class="container">
        <div class="row text-center-xs">
          <div class="col-sm-12">
            <h3 class="title-md text-center">Welcome to Get Back in Business!</h3>
          </div>
          
        </div>
      </div>
    </div>

    <!-- SEECTION FEATURES -->
    <!--===============================================================-->
    <div class="section section-sm section-both">
      <div class="container">
        <div class="row">
          <!-- FEATURES -->
          <div class="col-sm-3">
            <div class="icon-box">
              <i class="fa fa-bar-chart-o fa-round fa-4x text-theme"></i>
              <h3 class="title-sm text-theme-sm text-theme">Account Reactivation</h3>
              <p class="text-theme-sm text-justify">Introduce you to our Account Reactivation and Management services</p>
              <a href="#account-reactivation" style="float:left">Take a look <i class="fa fa-angle-double-right"></i></a>
              
            </div>
          </div>
          <!-- FEATURES -->
          <div class="col-sm-3">
            <div class="icon-box">
              <i class="fa fa-list fa-round fa-4x text-theme"></i>
              <h3 class="title-sm text-theme-sm text-theme">Listing & Cataloguing</h3>
              <p class="text-theme-sm text-justify"><b>our professional cataloguing and listing services</b>&nbsp;which can help expand your online product portfolio  </p>
              <a href="#listing-cataloguing" style="float:left">Take a look <i class="fa fa-angle-double-right"></i></a>
              
            </div>
          </div>
          <!-- FEATURES -->
          <div class="col-sm-3">
            <div class="icon-box">
              <i class="fa fa-unlink fa-round fa-4x text-theme"></i>
              <h3 class="title-sm text-theme-sm text-theme">Suspension Prevention</h3>
              <p class="text-theme-sm text-justify">Introduce you to our&nbsp;<b>Suspension Prevention services</b>&nbsp;helps&nbsp;<b>you avoid getting suspended</b></p>
               <a href="#suspension-prevention" style="float:left">Take a look <i class="fa fa-angle-double-right"></i></a>
              
            </div>
          </div>
          <!-- FEATURES -->
          <div class="col-sm-3">
            <div class="icon-box">
              <i class="fa fa-paper-plane  fa-round  fa-4x text-theme"></i>
              <h3 class="title-sm text-theme-sm text-theme">Launch</h3>
              <p class="text-theme-sm text-justify">More than 50 Non Accounts Launched, No Advanced 
              </p>
              <a href="#launch" style="float:left">Take a look <i class="fa fa-angle-double-right"></i></a>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- SECTION DARK -->
    <!--===============================================================-->
 <!--    <div class="section section-both section-sm section-dark">
      <div class="container">
        <div class="row">
          <div class="col-sm-5">
            <img class="img-responsive" src="index_files/imacs.png" alt="theme-img">
          </div>
          <div class="col-sm-6 col-sm-offset-1">
            <h3 class="text-theme title-lg">Unlimited Color Options</h3>
            <p class="text-theme">Aliquam nec ultricies dolor. Aliquam ornare posuere purus, sed gravida magna venenatis eu.</p>
            <ul class="text-theme list-unstyled list-md">
              <li><i class="fa fa-check colored"></i>Fast Service</li>
              <li><i class="fa fa-check colored"></i>7/24 Customer Support</li>
              <li><i class="fa fa-check colored"></i>Experienced Team</li>
              <li><i class="fa fa-check colored"></i>Joyful Experience</li>
            </ul>
            <a href="#" class="text-theme btn btn-lg btn-primary"><i class="fa fa-rocket"></i>Rocket Fast</a>
          </div>
        </div>
      </div>
    </div> -->
    <!-- SECTION -->
    <!--===============================================================-->
<!--     <div class="section section-sm section-both">
      <div class="container">
        <div class="row">
          <div class="col-sm-7">
            <h3 class="text-theme title-lg">Great Tools to Start With</h3>
            <p class="text-theme">Lorem ipsum dolor sit amet, 
consectetur adipiscing elit. Nam consectetur auctor. Aliquam nec 
ultricies dolor. Aliquam ornare posuere purus, sed gravida magna 
venenatis eu.</p>
            <ul class="text-theme list-unstyled list-xl">
              <li><i class="fa fa-cogs fa-2x fa-round bg"></i><span>Easily customizable, made for developers</span></li>
              <li><i class="fa fa-code fa-2x fa-round bg"></i><span>7/24 Customer Support</span></li>
              <li><i class="fa fa-cloud-download fa-2x fa-round bg"></i><span>Experienced Team</span></li>
              <li><i class="fa fa-bolt fa-2x fa-round bg"></i><span>Joyful Experience</span></li>
              <li><i class="fa fa-rocket fa-2x fa-round bg"></i><span>Rocket Fast</span></li>
              <li><i class="fa fa-paypal fa-2x fa-round bg"></i><span>Rocket Fast</span></li>
            </ul>
          </div>
          <div class="col-sm-5">
            <img class="img-responsive pull-right" src="index_files/imac.png" alt="theme-img">
          </div>
        </div>
      </div>
    </div> -->
    <!-- SECTION COUNT -->
    <!--===============================================================-->
     <div class="section-polygonal-black section-arrow-bottom">
      <div class="opacity-layer section section-both section-lg">
        <div class="container">
          <div id="count-wrapper" class="row">
            <div class="col-sm-3">
              <div class="icon-box">
                <i class="fa fa-coffee fa-4x text-theme-sm"></i>
                <h3 class="title-count title-lg text-theme-sm hr" data-from="25" data-speed="1400" data-refresh-interval="50" data-to="1000">1000</h3>
                <h3 class="title-md text-theme-sm">Accounts Reactivation</h3>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="icon-box">
                <i class="fa fa-code fa-4x text-theme-sm"></i>
                <h3 class="title-count title-lg text-theme-sm hr" data-from="25" data-speed="1400" data-refresh-interval="50" data-to="4228">4228</h3>
                <h3 class="title-md text-theme-sm">Listing & Cataloguing</h3>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="icon-box">
                <i class="fa fa-cloud-download fa-4x text-theme-sm"></i>
                <h3 class="title-count title-lg text-theme-sm hr" data-from="25" data-speed="1400" data-refresh-interval="50" data-to="110">110</h3>
                <h3 class="title-md text-theme-sm">Suspension Prevention</h3>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="icon-box">
                <i class="fa fa-rocket fa-4x text-theme-sm"></i>
                <h3 class="title-count title-lg text-theme-sm hr" data-from="25" data-speed="1400" data-refresh-interval="50" data-to="201">201</h3>
                <h3 class="title-md text-theme-sm">Launch</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <!-- SECTION WORK AND CLIENTS -->
    <!--===============================================================-->
      <div class="section section-lg section-both " style="padding: 20px 0px!important;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h3 class="text-theme title-xl title-section text-uppercase hr">Our Services</h3>
          </div>
        </div>
      </div>
    </div> 
    <div class="section section-both section-sm " id="account-reactivation" style="border:none!important;padding-top:75px">
  <div class="container">
    <div class="row">
    <div class="col-sm-5">
        <img class="img-responsive" src="public/images/step-reactivation.png" alt="theme-img">
      </div>
      <div class="col-sm-7">
        <h3 class="text-theme title-lg">Account Reactivation</h3>
        <p class="text-theme">With this mail, we are pleased to introduce you to our Account Reactivation and Management services which can not only help you get your business back on Amazon but which will also ensure that it doesn't get suspended ever again. </p>
        <ul class="text-theme list-unstyled list-md">
          <li><i class="fa fa-check colored"></i>Flexible pricing- Fixed and variable both options available</li>
          <li><i class="fa fa-check colored"></i>No advance payment. Payment only after the account gets reinstated!</li>
          <li><i class="fa fa-check colored"></i>TAT (Turnaround Time) = 4-5 days</li>
          <li><i class="fa fa-check colored"></i>More than 100 active accounts being currently managed by us on Amazon</li>
          <li><i class="fa fa-check colored"></i>95% of the reactivated accounts being managed by us have a 'Good' Account Health now!</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="section section-both section-sm section-dark" id="listing-cataloguing">
  <div class="container">
    <div class="row">
      <div class="col-sm-7">
        <h3 class="text-theme title-lg">Listing & Cataloguing</h3>
        <p class="text-theme">With this mail, we are pleased to offer our professional cataloguing and listing services which can help expand your online product portfolio and enhance your customer experience and sales on all e-Commerce platforms.</p>
        <ul class="text-theme list-unstyled list-md">
          <li><i class="fa fa-check colored"></i>Cataloguing at Rs 15-20/- per item only. Variations at just Rs 5/- per item</li>
          <li><i class="fa fa-check colored"></i>Listing at Rs 5/- per item (per platform)</li>
          <li><i class="fa fa-check colored"></i>Volume based discounts</li>
          <li><i class="fa fa-check colored"></i>Over 200 suspended seller accounts reinstated by our PoA experts so far</li>
          <li><i class="fa fa-check colored"></i>No advance payment. All payments after the products are live!</li>
          <li><i class="fa fa-check colored"></i>We won't just share the catalogue excel sheet with you. We'll make your products live and stand out!</li>
          <li><i class="fa fa-check colored"></i>TAT (Turnaround Time) = 2 days</li>
          <li><i class="fa fa-check colored"></i>Experience of listing over 1 lakh items</li>
          
        </ul>
      </div>
      <div class="col-sm-5">
        <img class="img-responsive" src="public/images/catalogue.png" alt="theme-img">
      </div>
    </div>
  </div>
</div>

<div class="section section-both section-sm section-dark" id="suspension-prevention">
  <div class="container">
    <div class="row">
    <div class="col-sm-5">
        <img class="img-responsive" src="public/images/suspenstion.png" alt="theme-img">
      </div>
      <div class="col-sm-7">
        <h3 class="text-theme title-lg">Suspension Prevention</h3>
          <p class="text-theme">With this mail, we are pleased to introduce you to our Suspension Prevention services which can not only help you avoid getting suspended on Amazon but which will also ensure that you are among the best rated sellers in your category.</p>
        <ul class="text-theme list-unstyled list-md">
         <li><i class="fa fa-check colored"></i>Having reinstated over 250 suspended seller accounts so far, we know the subject in & out!</li>
        <li><i class="fa fa-check colored"></i>More than 100 active accounts being currently managed by us on Amazon</li>
        <li><i class="fa fa-check colored"></i>95% of the reactivated accounts being managed by us have a 'Good' Account Health now!</li>
        <li><i class="fa fa-check colored"></i>We'll take care of parameters such as Negative Feedback, A-Z claims etc. that affect your seller performance metrics</li>
        <li><i class="fa fa-check colored"></i>Complete customer care support over email and as well as phone- even on Sundays and Holidays!</li>
        <li><i class="fa fa-check colored"></i>Understand where claims of "counterfeit" and "not as described" really come from and fix your vulnerabilities</li>
        <li><i class="fa fa-check colored"></i>We'll track and respond appropriately to Amazon Policy Notifications / Warnings</li>
        <li><i class="fa fa-check colored"></i>No advance payment</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="section section-both section-sm section-dark" id="launch">
  <div class="container">
    <div class="row">
    
      <div class="col-sm-7">
        <h3 class="text-theme title-lg">Launch</h3>
          <p class="text-theme">With this mail, we are pleased to introduce you to our Suspension Prevention services which can not only help you avoid getting suspended on Amazon but which will also ensure that you are among the best rated sellers in your category.</p>
        <ul class="text-theme list-unstyled list-md">
         <li><i class="fa fa-check colored"></i> More than 50 Non Accounts Launched</b></li>
        <li><i class="fa fa-check colored"></i>No Advance Payment</b></li>
        </ul>
      </div>
      <div class="col-sm-5">
        <img class="img-responsive" src="public/images/launch.png" alt="theme-img">
      </div>
    </div>
  </div>
</div>
    <!-- SECTION CEO -->
    <!--===============================================================-->
    <div class="section-ceo section section-sm section-top " style="margin-bottom:80px">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 cl-md-12 text-center">
            <h3 class="text-theme title-lg">our customers says, </h3>
            <p class="text-theme lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
          </div>
        </div>
      </div>
    </div> 
    <div class="clearfix">&nbsp;</div>
    <!-- SECTION FOOTER -->
    <!--===============================================================-->
    <!--SECTION FOOTER BOTTOM -->
    <!--===============================================================-->
  <?php include('components/footer.php') ?>