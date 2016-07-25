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
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Home</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a>Treatments</a></li>
                        <li><a>Gallery</a></li>
                        <li><a>Reservation</a></li>
                        <li><a>Gift Certificate</a></li>
                        <li><a>Contact Us</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <section class="header">
            <header>
                <div class="container">
                    <div class="header-logo">
                        <img src="{{ URL::to('/assets/imgs/logo1.png') }}" />
                    </div>
                    <div class="hero">
                        <h3 class="text-center hero-heading">
                            Thai Hands Massage Therapy
                        </h3>
                        <h4 class="text-center hero-subheading">
                            www.thaimassagepearland.com
                        </h4>
                        <p class="text-center hero-label">
                            Thai Traditional Massage is a very holistic therapy where the human being is seen and treated as an ever-changing network of physical, mental, emotional and spiritual aspects that all influence each other.
                        </p>
                    </div>
                    <div class="jumbobuttons">
                        {{--<button class="btn btn-lg btn-block header-reserve">Reserve</button>--}}
                        <a class="shedul-embed-button-link btn btn-lg btn-block header-reserve" href="https://app.shedul.com/online_bookings/22414/link">Book Now</a>
                    </div>
                </div>
            </header>
        </section>

        <section class="intro">
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
        <section class="benefit">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="text-center benefit-head">Benefit</h2>
                        <p class="text-center benefit-p">The benefits of Thai Traditional Massage are countless. By freeing the flow of vital energy in the body, Thai Massage can improve posture, breathing, flexibility, digestion and circulation. Muscles are stretched, inner organs toned and emotional and nervous tension is reduced. Often a deep sense of peace can be experienced during and after a treatment.</p>
                    </div>
                    <div class="col-xs-12">
                        <img src="{{ URL::to('/assets/gallery/new/IMG_0326_1.jpg') }}" class="pull-left" style="width: 100%;">
                    </div>
                </div>
            </div>
        </section>
        <section class="treatment">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="text-center treatment-head">Treatments</h2>
                        <div class=" treatment-choice">
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
            </div>
        </section>
        <section class="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="text-center gallery-head">Gallery</h2>
                    </div>
                </div>
            </div>
        </section>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        {{--<script src="{{URL::asset('/assets/js/bootstrap.min.js')}}"></script>--}}
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        {{--<script>!function(e){var t="shedul-embed-button-loader",d="https:"===e.location.protocol?"https":"http",n=e.getElementsByTagName("head")[0];if(!e.getElementById(t)){var o=e.createElement("script"),p=e.createElement("style");o.id=t,o.src="https://app.shedul.com/embed_button.js".replace(/^\w+/,d),p.type="text/css",p.innerHTML=".shedul-widget-open { position: fixed; overflow:hidden; }",n.appendChild(o),n.appendChild(p)}}(document);</script>--}}
    </body>
</html>
