<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Thai Hands Massage Therapy - Thai Massage in Pearland</title>
        <meta name="description" content="Thai message is an ancient practice of healing of Thai society. It combines the acupressure, assisted yoga postures, and the Indian Ayurvedic approach to heal." />
        <meta name="keywords" content="massage pearland, thai massage pearland" />

        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        {{--<link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">--}}
        <link href="{{URL::asset('assets/css/new.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{URL::asset('assets/css/font-awesome.min.css')}}">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-target="#navbar-example">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar-example">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#header">Home</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#intro">Intro</a></li>
                        <li><a href="#benefit">Benefit</a></li>
                        <li><a href="#treatments">Treatments</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        {{--<li><a>Reservation</a></li>--}}
                        {{--<li><a>Gift Certificate</a></li>--}}
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <section class="header" id="header">
            <header>
                <div class="container">
                    <div class="header-logo">
                        <img src="{{ URL::to('/assets/imgs/mekkara.png') }}" />
                    </div>
                    <div class="hero">
                        <h3 class="text-center hero-heading">
                            Sunshine Thai Massage Therapy
                        </h3>
                        {{--<h4 class="text-center hero-subheading">--}}
                            {{--www.thaimassagepearland.com--}}
                        {{--</h4>--}}
                        {{--<p class="text-center hero-label">--}}
                            {{--Thai Traditional Massage is a very holistic therapy where the human being is seen and treated as an ever-changing network of physical, mental, emotional and spiritual aspects that all influence each other.--}}
                        {{--</p>--}}
                    </div>
                    <div class="jumbobuttons">
                        {{--<button class="btn btn-lg btn-block header-reserve">Reserve</button>--}}
                        <a class="shedul-embed-button-link btn btn-lg btn-block header-reserve" href="https://app.shedul.com/online_bookings/22414/link">Book Now</a>
                    </div>
                </div>
            </header>
        </section>

        <section class="intro" id="intro">
            <div class="container-fluid intro-container">
                <div class="flex-row">
                    <div class="col-xs-12 col-md-6 intro-text">
                        <h2 class="text-center intro-head">Hands Massage</h2>
                        <p class="text-center intro-p">The practitioner uses his or her thumbs, palms, elbows, knees and feet to apply a combination of acupressure, gentle rocking and twisting, joint and spine mobilizations and assisted yoga stretches. With the therapist using bodyweight instead of strength and a steady and meditative rhythm.</p>
                    </div>
                    <div class="col-xs-12 col-md-6 intro-img">
                        {{--<img src="{{ URL::to('/assets/gallery/new/intro.jpg') }}" class="pull-left">--}}
                    </div>
                </div>
            </div>
        </section>
        <section class="benefit" id="benefit">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="text-center benefit-head">
                            Benefit
                            <br>
                            <span class="dot-hr"></span>
                        </h2>
                        <p class="text-center benefit-p">The benefits of Thai Traditional Massage are countless. By freeing the flow of vital energy in the body, Thai Massage can improve posture, breathing, flexibility, digestion and circulation. Muscles are stretched, inner organs toned and emotional and nervous tension is reduced. Often a deep sense of peace can be experienced during and after a treatment.</p>
                    </div>
                    <div class="col-xs-12">
                        <img src="{{ URL::to('/assets/gallery/new/IMG_0326_1.jpg') }}" class="pull-left" style="width: 100%;">
                    </div>
                </div>
            </div>
        </section>
        <section class="treatment" id="treatments">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="text-center treatment-head">
                            Treatments
                            <br>
                            <span class="dot-hr"></span>
                        </h2>
                        <div class="treatment-choice">
                            <div class="col-xs-12 col-md-6 col-lg-4">
                                <h3 class="text-center treatment-choice-head">Deep Tissue Massage</h3>
                                <p class="treatment-choice-desc">
                                    Deep tissue massage is a type of therapy similar to Swedish massage, but the deeper pressure focuses on realigning deeper layers of muscles and connective tissue. It is especially helpful for chronic aches and pains and contracted areas such as stiff neck and upper back, low back pain, leg muscle tightness, and sore shoulders.
                                </p>
                                <div class="text-center treatment-price">
                                    <span class="treatment-price-60"><strong>$75</strong> / 60 mins</span>
                                    <span class="treatment-price-90"><strong>$100</strong> / 90 mins</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6 col-lg-4">
                                <h3 class="text-center treatment-choice-head">Thai Traditional Massage</h3>
                                <p class="treatment-choice-desc">
                                    Thai massage uses passive stretching and gentle pressure along the body’s energy lines to increase flexibility, relieve muscle and joint tension and balance the body’s energy systems. Thai massage is both deeply relaxing and energizing.
                                </p>
                                <div class="text-center treatment-price">
                                    <span class="treatment-price-60"><strong>$75</strong> / 60 mins</span>
                                    <span class="treatment-price-90"><strong>$100</strong> / 90 mins</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6 col-lg-4">
                                <h3 class="text-center treatment-choice-head">Reflexology</h3>
                                <p class="treatment-choice-desc">
                                    Reflexology, although it's often combined with massage, is technically not a form of massage. It's a separate practice that applies pressure to reflex zones on your feet, hands or outer ears to affect your entire body.
                                </p>
                                <div class="text-center treatment-price">
                                    <span class="treatment-price-60"><strong>$75</strong> / 60 mins</span>
                                    <span class="treatment-price-90"><strong>$100</strong> / 90 mins</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6 col-lg-4">
                                <h3 class="text-center treatment-choice-head">Sports Massage</h3>
                                <p class="treatment-choice-desc">
                                    Sports massage emphasizes prevention and healing of injuries to the muscles and tendons. But you don't have to be an athlete to benefit from sports massage. Sports massage is also good for people with injuries, chronic pain or restricted range of motion.
                                </p>
                                <div class="text-center treatment-price">
                                    <span class="treatment-price-60"><strong>$75</strong> / 60 mins</span>
                                    <span class="treatment-price-90"><strong>$100</strong> / 90 mins</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6 col-lg-4">
                                <h3 class="text-center treatment-choice-head">Swedish Massage</h3>
                                <p class="treatment-choice-desc">
                                    The term "Swedish Massage" refers to a variety of techniques specifically designed to relax muscles by applying pressure to them against deeper muscles and bones, and rubbing in the same direction as the flow of blood returning to the heart.
                                </p>
                                <div class="text-center treatment-price">
                                    <span class="treatment-price-60"><strong>$75</strong> / 60 mins</span>
                                    <span class="treatment-price-90"><strong>$100</strong> / 90 mins</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6 col-lg-4">
                                <h3 class="text-center treatment-choice-head">Hot Stone Therapy</h3>
                                <p class="treatment-choice-desc">
                                    Hot stone massage therapy session promotes deeper muscle relaxation through the placement of smooth, water-heated stones at key points on the body.
                                </p>
                                <div class="text-center treatment-price">
                                    <span class="treatment-price-60"><strong>$75</strong> / 60 mins</span>
                                    <span class="treatment-price-90"><strong>$100</strong> / 90 mins</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4 col-md-offset-4 well">
                        <div class="treatment-couples text-center">
                            <p>Couples</p>
                            <div class="text-center treatment-price-couple">
                                <span class="treatment-price-60"><strong>$140</strong> / 60 mins</span>
                                <span class="treatment-price-90"><strong>$190</strong> / 90 mins</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery" id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="text-center gallery-head">
                            Gallery
                            <br>
                            <span class="dot-hr"></span>
                        </h2>
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="{{URL::asset('assets/gallery/new/IMG_0326_1.jpg')}}">
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="text-center contact-head">
                            Contact Us
                            <br>
                            <span class="dot-hr"></span>
                        </h2>
                        <div class="contact-info">
                            <div class="col-xs-6 col-md-3">
                                <h3 class="text-center contact-info-head"><i class="fa fa-clock-o" aria-hidden="true"></i> Open hours</h3>
                                <p class="text-center contact-info-p"> Mon-Sat 10:00am - 8:00pm</p>
                                <p class="text-center contact-info-p">Sun 10:00am - 7:00pm</p>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <h3 class="text-center contact-info-head"><i class="fa fa-location-arrow" aria-hidden="true"></i>
                                     Address</h3>
                                <p class="text-center contact-info-p"> 3246 E Broadway Pearland, TX 77581</p>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <h3 class="text-center contact-info-head"><i class="fa fa-phone" aria-hidden="true"></i> Phone</h3>
                                <p class="text-center contact-info-p"> <a href="callto:8327818415">(832) 781-8415</a></p>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <h3 class="text-center contact-info-head"><i class="fa fa-envelope" aria-hidden="true"></i>
                                     E-mail</h3>
                                <p class="text-center contact-info-p"> <a href="mailto:thaihandsmt@att.net">thaihandsmt@att.net</a></p>
                            </div>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1735.2589248247132!2d-95.27296860481543!3d29.559532473675247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDMzJzMzLjQiTiA5NcKwMTYnMjQuNiJX!5e0!3m2!1sen!2sth!4v1423637280519" width="100%" height="400" frameborder="0" style="border:0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="text-right">
            <div class="container">
                © 2016 Thai Hands Massage Therapy. All rights reserved.
            </div>
        </footer>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        {{--<script src="{{URL::asset('/assets/js/bootstrap.min.js')}}"></script>--}}
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/1.4.3/jquery.scrollTo.min.js"></script>

        {{--<script>!function(e){var t="shedul-embed-button-loader",d="https:"===e.location.protocol?"https":"http",n=e.getElementsByTagName("head")[0];if(!e.getElementById(t)){var o=e.createElement("script"),p=e.createElement("style");o.id=t,o.src="https://app.shedul.com/embed_button.js".replace(/^\w+/,d),p.type="text/css",p.innerHTML=".shedul-widget-open { position: fixed; overflow:hidden; }",n.appendChild(o),n.appendChild(p)}}(document);</script>--}}

        <script>
            $(window).scroll(function() {
                if  ($(window).scrollTop() > 25) {
                    $("nav").addClass("navbar-sticky");
                    $('.navbar-default').css({
                        margin: '0px auto'
                    });
                } else {
                    $("nav").removeClass("navbar-sticky");
                    $('.navbar-default').css({
                        margin: '25px auto'
                    });
                }
            });
            $(function() {
                $('nav').bind('click', 'ul li a', function(event) {
                    event.preventDefault();
                    $.scrollTo(event.target.hash, 750);
                });
            });
        </script>
    </body>
</html>
