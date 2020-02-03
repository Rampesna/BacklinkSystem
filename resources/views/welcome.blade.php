<!DOCTYPE html>
<html lang="en">
<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <!-- set the viewport width and initial-scale on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the apple mobile web app capable -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- set the HandheldFriendly -->
    <meta name="HandheldFriendly" content="True">
    <!-- set the apple mobile web app status bar style -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- set the description -->
    <meta name="description" content="EXO | SEO Landing page Template">
    <!-- set the Keyword -->
    <meta name="keywords" content="agency, business, corporate, creative, digital agency, marketing, marketing agency, online marketing, seo, seo agency, seo business, seo company, seo website ">
    <meta name="author" content="EXO | SEO Landing page Template">
    <title>EXO | SEO Landing page Template</title>
    <!-- include the site stylesheet -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700%7COpen+Sans:300,300i,600" rel="stylesheet">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('assets-landing\css\font-awesome.css')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('assets-landing\css\bootstrap.css')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('assets-landing\css\plugins.css')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('assets-landing\style.css')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('assets-landing\css\colors.csss')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('assets-landing\css\responsive.css')}}">
    <!-- include the site stylesheet -->
    <style class="color_css"></style>
</head>
<body>
<!-- main container of all the page elements -->
<div id="wrapper">
    <!-- header of the page -->
    <header id="header" style="background: #27ae60">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- logo of the page -->
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="{{asset('assets-landing\images\logo.png')}}" alt="EXO" class="img-responsive"></a>
                    </div>
                    <!-- logo of the page end -->
                    <!-- nav-holder of the page -->
                    <div class="nav-holder">
                        <a href="#" class="nav-opener"><i class="fa fa-bars"></i><i class="fa fa-times"></i></a>
                        <!-- nav of the page -->
                        <nav id="nav">
                            <ul class="list-unstyled">
                                <li><a href="#" data-scroll-nav="0">ANASAYFA</a></li>
                                <li><a href="#" data-scroll-nav="1">HAKKIMIZDA</a></li>
                                <li><a href="#" data-scroll-nav="2">HİZMETLERİMİZ</a></li>
                                <li><a href="#" data-scroll-nav="3">YORUMLAR</a></li>
                                <li><a href="#" data-scroll-nav="4">PAKETLER</a></li>
                                <li><a href="#" data-scroll-nav="5">İLETİŞİM</a></li>
                            </ul>
                        </nav>
                        <!-- nav of the page end -->
                        <ul class="list-unstyled sign-list">
                            <li><a href="{{route('login')}}">GİRİŞ YAP</a></li>
                            <li><a href="#" class="bg-grey md-round">KAYIT OL</a></li>
                        </ul>
                    </div>
                    <!-- nav-holder of the page end -->
                </div>
            </div>
        </div>
    </header>
    <!-- header of the page end -->
    <!-- main of the page -->
    <main id="main">
        <!-- main slider of the page -->
        <section class="main-slider" data-scroll-index="0">
            <!-- slider of the page -->
            <div class="slide bg-full" style="background-image: url({{asset('assets-landing/images/img01.jpg')}});">
                <div class="holder">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <h1>Web Sayfanız İçin İhtiyacınız Olan <br class="hidden-xs">En Kaliteli Hizmeti Sunuyoruz</h1>
                                <p>SEO Hizmeti İle İşinizi Büyütmenize Yardımcı Olalım.<br class="hidden-xs"> Rakiplerinizin Önüne Geçin!</p>
                                <div class="btn-holder">
                                    <a href="#" class="btn-primary text-center text-uppercase active md-round">sign up</a>
                                    <a href="#" class="btn-primary text-center text-uppercase md-round">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider of the page end -->
        </section>
        <!-- main slider of the page end -->
        <div data-scroll-index="1">
            <!-- service holder of the page -->
            <div class="service-holder container">
                <div class="row holder">
                    <div class="col-xs-12">
                        <!-- service list of the page -->
                        <ul class="list-unstyled service-list">
                            <li class="text-center">
                                <div class="icon"><img src="{{asset('assets-landing\images\icon01.png')}}" alt="Icon" class="img-responsive"></div>
                                <h2 class="heading">Great for analysis</h2>
                                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
                            </li>
                            <li class="text-center">
                                <div class="icon"><img src="{{asset('assets-landing\images\icon02.png')}}" alt="Icon" class="img-responsive"></div>
                                <h2 class="heading">Great for analysis</h2>
                                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
                            </li>
                            <li class="text-center">
                                <div class="icon"><img src="{{asset('assets-landing\images\icon03.png')}}" alt="Icon" class="img-responsive"></div>
                                <h2 class="heading">Great for analysis</h2>
                                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
                            </li>
                        </ul>
                        <!-- service list of the page end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-5">
                        <div class="txt-holder">
                            <h3 class="heading2">Seo Service Generator</h3>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum  zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                            <a href="#" class="btn-primary md-round">Learn more <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7">
                        <div class="img-holder">
                            <img src="{{asset('assets-landing\images\img02.png')}}" alt="image description" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
            <!-- service holder of the page end -->
            <!-- feature sec of the page -->
            <section class="feature-sec bg-full" style="background-image: url({{asset('assets-landing/images/img04.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="img-holder">
                                <img src="{{asset('assets-landing\images\img03.png')}}" alt="image description" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="txt-holder">
                                <h4 class="heading2">Everything that you need <br>for seo service</h4>
                                <p>Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod suspendisse vel, sed quam nulla mauris iaculis. Erat eget vitae malesuada, tincidunt porta lorem lectus.</p>
                                <a href="#" class="btn-primary md-round">Learn more <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- feature sec of the page end -->
        </div>
        <!-- process holder of the page -->
        <div class="process-holder container" data-scroll-index="2">
            <div class="row">
                <header class="col-xs-12 header text-center">
                    <h4>How <span class="clr">Exo</span> works</h4>
                    <p>Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod <br>suspendisse vel, sed quam nulla mauris iaculis.</p>
                </header>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <!-- process list of the page -->
                    <ul class="list-unstyled process-list">
                        <li class="text-center">
                            <span class="num md-round">1</span>
                            <div class="icon"><img src="{{asset('assets-landing\images\icon04.png')}}" alt="image description" class="img-responsive"></div>
                            <h3>Quickest signup</h3>
                            <p>Lorem ipsum dolor sit amet, et <br>fermentum vestibulum.</p>
                        </li>
                        <li class="text-center">
                            <span class="num md-round">2</span>
                            <div class="icon"><img src="{{asset('assets-landing\images\icon05.png')}}" alt="image description" class="img-responsive"></div>
                            <h3>Way to work</h3>
                            <p>Lorem ipsum dolor sit amet, et <br>fermentum vestibulum.</p>
                        </li>
                        <li class="text-center">
                            <span class="num md-round">3</span>
                            <div class="icon"><img src="{{asset('assets-landing\images\icon06.png')}}" alt="image description" class="img-responsive"></div>
                            <h3>Fly to the success</h3>
                            <p>Lorem ipsum dolor sit amet, et <br>fermentum vestibulum.</p>
                        </li>
                    </ul>
                    <!-- process list of the page end -->
                </div>
            </div>
        </div>
        <!-- process holder of the page end -->
        <!-- testimonail sec of the page -->
        <section class="testimonail-sec" data-scroll-index="3">
            <div class="container">
                <div class="row">
                    <header class="col-xs-12 header text-center">
                        <h4>What our <span class="clr">clients</span> say</h4>
                        <p>Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod <br>suspendisse vel, sed quam nulla mauris iaculis.</p>
                    </header>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <!-- testimonail slider of the page -->
                        <div class="testimonail-slider">
                            <!-- slide of the page -->
                            <blockquote class="slide text-center">
                                <div class="img-holder round"><img src="{{asset('assets-landing\images\img05.jpg')}}" alt="image description" class="img-responsive"></div>
                                <cite>
                                    <strong>David Ramon</strong>
                                    <a href="#">www.sitename.com</a>
                                </cite>
                                <q>Lorem ipsum dolor sit amet, duis metus amet in purus, vitae donec vestibulum tincidunt massa sit, convallis ipsum pede quisque arcu, nunc distinctio.</q>
                            </blockquote>
                            <!-- slide of the page end -->
                            <!-- slide of the page -->
                            <blockquote class="slide text-center">
                                <div class="img-holder round"><img src="{{asset('assets-landing\images\img06.jpg')}}" alt="image description" class="img-responsive"></div>
                                <cite>
                                    <strong>Jennifer Duren</strong>
                                    <a href="#">www.sitename.com</a>
                                </cite>
                                <q>Lorem ipsum dolor sit amet, duis metus amet in purus, vitae donec vestibulum tincidunt massa sit, convallis ipsum pede quisque arcu, nunc distinctio.</q>
                            </blockquote>
                            <!-- slide of the page end -->
                            <!-- slide of the page -->
                            <blockquote class="slide text-center">
                                <div class="img-holder round"><img src="{{asset('assets-landing\images\img07.jpg')}}" alt="image description" class="img-responsive"></div>
                                <cite>
                                    <strong>Martin Jones</strong>
                                    <a href="#">www.sitename.com</a>
                                </cite>
                                <q>Lorem ipsum dolor sit amet, duis metus amet in purus, vitae donec vestibulum tincidunt massa sit, convallis ipsum pede quisque arcu, nunc distinctio.</q>
                            </blockquote>
                            <!-- slide of the page end -->
                            <!-- slide of the page -->
                            <blockquote class="slide text-center">
                                <div class="img-holder round"><img src="{{asset('assets-landing\images\img05.jpg')}}" alt="image description" class="img-responsive"></div>
                                <cite>
                                    <strong>David Ramon</strong>
                                    <a href="#">www.sitename.com</a>
                                </cite>
                                <q>Lorem ipsum dolor sit amet, duis metus amet in purus, vitae donec vestibulum tincidunt massa sit, convallis ipsum pede quisque arcu, nunc distinctio.</q>
                            </blockquote>
                            <!-- slide of the page end -->
                            <!-- slide of the page -->
                            <blockquote class="slide text-center">
                                <div class="img-holder round"><img src="{{asset('assets-landing\images\img05.jpg')}}" alt="image description" class="img-responsive"></div>
                                <cite>
                                    <strong>David Ramon</strong>
                                    <a href="#">www.sitename.com</a>
                                </cite>
                                <q>Lorem ipsum dolor sit amet, duis metus amet in purus, vitae donec vestibulum tincidunt massa sit, convallis ipsum pede quisque arcu, nunc distinctio.</q>
                            </blockquote>
                            <!-- slide of the page end -->
                            <!-- slide of the page -->
                            <blockquote class="slide text-center">
                                <div class="img-holder round"><img src="{{asset('assets-landing\images\img06.jpg')}}" alt="image description" class="img-responsive"></div>
                                <cite>
                                    <strong>Jennifer Duren</strong>
                                    <a href="#">www.sitename.com</a>
                                </cite>
                                <q>Lorem ipsum dolor sit amet, duis metus amet in purus, vitae donec vestibulum tincidunt massa sit, convallis ipsum pede quisque arcu, nunc distinctio.</q>
                            </blockquote>
                            <!-- slide of the page end -->
                        </div>
                        <!-- testimonail slider of the page end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonail sec of the page end -->
        <!-- price sec of the page -->
        <section class="price-sec" data-scroll-index="4">
            <div class="container">
                <div class="row">
                    <header class="col-xs-12 header text-center">
                        <h4>Our pricing &amp; plans</h4>
                        <p>Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod <br>suspendisse vel, sed quam nulla mauris iaculis.</p>
                    </header>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <!-- price holder of the page -->
                        <ul class="list-unstyled price-holder text-center md-round">
                            <li class="price">
                                <strong>$10</strong>
                                <span class="text-uppercase">per month</span>
                            </li>
                            <li class="price-heading text-uppercase">basic</li>
                            <li>Limited dashboard features</li>
                            <li>Unlimited keyword research</li>
                            <li>Advanced analytics tool</li>
                            <li class="btns"><a href="#" class="btn-primary text-uppercase md-round">sign up</a></li>
                        </ul>
                        <!-- price holder of the page end -->
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <!-- price holder of the page -->
                        <ul class="list-unstyled price-holder text-center md-round active">
                            <li class="price">
                                <strong>$20</strong>
                                <span class="text-uppercase">per month</span>
                            </li>
                            <li class="price-heading text-uppercase">Professional</li>
                            <li>Limited dashboard features</li>
                            <li>Unlimited keyword research</li>
                            <li>Advanced analytics tool</li>
                            <li class="btns"><a href="#" class="btn-primary text-uppercase md-round">sign up</a></li>
                        </ul>
                        <!-- price holder of the page end -->
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <!-- price holder of the page -->
                        <ul class="list-unstyled price-holder text-center md-round">
                            <li class="price">
                                <strong>$35</strong>
                                <span class="text-uppercase">per month</span>
                            </li>
                            <li class="price-heading text-uppercase">Golden</li>
                            <li>Limited dashboard features</li>
                            <li>Unlimited keyword research</li>
                            <li>Advanced analytics tool</li>
                            <li class="btns"><a href="#" class="btn-primary text-uppercase md-round">sign up</a></li>
                        </ul>
                        <!-- price holder of the page end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- price sec of the page end -->
        <!-- subscriber sec of the page -->
        <section class="subscriber-sec container" data-scroll-index="5">
            <div class="row">
                <header class="col-xs-12 header text-center">
                    <h4>Subscribe to <span class="clr">our newsletter</span></h4>
                    <p>Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod <br>suspendisse vel, sed quam nulla mauris iaculis.</p>
                </header>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <!-- Begin MailChimp Signup Form -->
                    <div id="mc_embed_signup">
                        <form action="//htmlbeans.us11.list-manage.com/subscribe/post?u=cb2d5a07fdf0d86c96f260674&amp;id=8e2ec675d3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate newsletter-form md-round" target="_blank" novalidate="">
                            <fieldset>
                                <div id="mc_embed_signup_scroll">
                                    <div class="mc-field-group">
                                        <!-- <label for="mce-EMAIL">Email Address </label> -->
                                        <input type="email" class="form-control md-round" placeholder="Enter your email address">
                                    </div>
                                    <div id="mce-responses" class="clear">
                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cb2d5a07fdf0d86c96f260674_8e2ec675d3" tabindex="-1" value=""></div>
                                    <div class="clear"><button class="btn-sub md-round" id="mc-embedded-subscribe" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button></div>

                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscriber sec of the page end -->
    </main>
    <!-- main of the page end -->
    <!-- footer of the page -->
    <footer id="footer">
        <!-- footer area of the page -->
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="f-logo">
                            <a href="home.html"><img src="{{asset('assets-landing\images\f-logo.png')}}" alt="EXO" class="img-responsive"></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eui smod tincidunt ut laoreet dolore magna.</p>
                        <!-- socail network of the page -->
                        <ul class="list-unstyled socail-network">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="tumblr"><i class="fa fa-tumblr"></i></a></li>
                            <li><a href="#" class="yelp"><i class="fa fa-yelp"></i></a></li>
                        </ul>
                        <!-- socail network of the page end -->
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <h3 class="heading">Important Links</h3>
                        <!-- f nav of the page -->
                        <ul class="list-unstyled f-nav">
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Privacy &amp; Policy</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">VPN Service</a></li>
                            <li><a href="#">Dedicated Server</a></li>
                        </ul>
                        <!-- f nav of the page end -->
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <h3 class="heading">Our Partners</h3>
                        <!-- f nav of the page -->
                        <ul class="list-unstyled f-nav">
                            <li><a href="#">ThemeForest</a></li>
                            <li><a href="#">GraphicRiver</a></li>
                            <li><a href="#">AudioJungle</a></li>
                            <li><a href="#">3DOcean</a></li>
                            <li><a href="#">CodeCanayon</a></li>
                        </ul>
                        <!-- f nav of the page end -->
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <h3 class="heading">Contact with us</h3>
                        <ul class="list-unstyled contact-list">
                            <li><i class="fa fa-phone"></i> <a href="tel:2145212829">+214-5212-829</a></li>
                            <li><i class="fa fa-envelope"></i> <a href="mailto:support@exo.com">&#115;&#117;&#112;&#112;&#111;&#114;&#116;&#064;&#101;&#120;&#111;&#046;&#099;&#111;&#109;</a></li>
                        </ul>
                        <a href="#popup1" class="btn-primary md-round lightbox text-uppercase">Send us a message</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer area of the page end -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 copyright">
                    <p>© Copyright 2017 Exo, All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer of the page end -->
    <span id="back-top" class="text-center md-round fa fa-angle-up"></span>
    <!-- loader of the page -->
    <div id="loader" class="loader-holder">
        <div class="block"><img src="{{asset('assets-landing\images\svg\bars.svg')}}" width="60" alt="loader"></div>
    </div>
</div>
<!-- main container of all the page elements end -->
<!-- popup-holder of the page start here -->
<div class="popup-holder">
    <div id="popup1" class="lightbox">
        <!-- newsletter-block of the page start here -->
        <div class="newsletter-block">
            <h2>Join EXO</h2>
            <p>Join the thousands of people on EXO that get updated on the latest release of free design files and articles.</p>
            <div class="sign-form">
                <form id="contactForm" data-toggle="validator">
                    <fieldset>
                        <div class="form-group">
                            <input type="text" id="name" class="form-control lg-round" placeholder="Your Name" required="" data-error="NEW ERROR MESSAGE">
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" class="form-control lg-round" placeholder="Your Email" required="" data-error="NEW ERROR MESSAGE">
                        </div>
                        <div class="form-group">
                            <input type="text" id="subject" class="form-control lg-round" placeholder="Subject" required="" data-error="NEW ERROR MESSAGE">
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Message" id="message" required="" data-error="NEW ERROR MESSAGE"></textarea>
                        </div>
                        <div id="msgSubmit" class="form-message hidden"></div>
                        <button type="submit" class="btn-sub lg-round text-center" id="form-submit">Join Now</button>
                    </fieldset>
                </form>
            </div>
            <div class="text-center">
                <span class="txt">* We don’t spam customers. Check our <a href="#">Privacy Policy</a> to learn more.</span>
            </div>
        </div>
        <!-- newsletter-block of the page end here -->
    </div>
</div>
<!-- popup-holder of the page end here -->
<!-- include jQuery -->
<script src="{{asset('assets-landing\js\jquery.js')}}"></script>
<!-- include jQuery -->
<script src="{{asset('assets-landing\js\plugins.js')}}"></script>
<!-- include jQuery -->
<script src="{{asset('assets-landing\js\jquery.main.js')}}"></script>

</body>
</html>
