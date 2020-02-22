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
    <meta name="description" content="{{$landingSettings->description}}">
    <!-- set the Keyword -->
    <meta name="keywords" content="{{$landingSettings->keywords}}">
    <meta name="author" content="EXO | SEO Landing page Template">
    <title>{{$landingSettings->title}}</title>
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
                        <a href="{{route('home')}}"><img style="width: 300px;height: auto" src="{{asset('assets-landing\images\logo.png')}}" alt="EXOx" class="img-responsive"></a>
                    </div>
                    <!-- logo of the page end -->
                    <!-- nav-holder of the page -->
                    <div class="nav-holder">
                        <a href="#" class="nav-opener"><i class="fa fa-bars"></i><i class="fa fa-times"></i></a>
                        <!-- nav of the page -->
                        <nav id="nav">
                            <ul class="list-unstyled">
                                <li><a href="#" data-scroll-nav="0">ANASAYFA</a></li>
                                <li><a href="#" data-scroll-nav="1">HİZMETLER</a></li>
                                <li><a href="#" data-scroll-nav="2">NASIL ÇALIŞIR?</a></li>
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
                                <h1>Web Sayfanız İçin İhtiyacınız Olan <br class="hidden-xs">En Kaliteli SEO Hizmetini Sunuyoruz</h1>
                                <p>SEO Hizmeti İle İşinizi Büyütmenize Yardımcı Olalım.<br class="hidden-xs"> Rakiplerinizin Önüne Geçin!</p>
                                <div class="btn-holder">
                                    <a href="{{route('index')}}" class="btn-primary text-center text-uppercase active md-round">SİSTEME GİRİŞ YAP</a>
                                    <a href="#" class="btn-primary text-center text-uppercase md-round" data-scroll-nav="1">DAHA FAZLASINI ÖĞREN</a>
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
                                <h2 class="heading">Arayın</h2>
                                <p>Sistemdeki Kayıtlı Linkleri İnceleyip İhtiyacınız Olan Siteyi Bulun</p>
                            </li>
                            <li class="text-center">
                                <div class="icon"><img src="{{asset('assets-landing\images\icon02.png')}}" alt="Icon" class="img-responsive"></div>
                                <h2 class="heading">Analiz Edin</h2>
                                <p>Hoşunuza Giden Site İle İlgili Detaylı Analizlere Bakarak Değerlendirmelerde Bulunun</p>
                            </li>
                            <li class="text-center">
                                <div class="icon"><img src="{{asset('assets-landing\images\icon03.png')}}" alt="Icon" class="img-responsive"></div>
                                <h2 class="heading">Güvenle Satın Alın</h2>
                                <p>Linkinizi Güvenli Bir Şekilde Satın Alarak Etkilerini Anında Görün</p>
                            </li>
                        </ul>
                        <!-- service list of the page end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-5">
                        <div class="txt-holder">
                            <h3 class="heading2">Akıllı Yönetim Paneli</h3>
                            <p>Sizin İçin Profesynel Bir Şekilde Oluşturduğumuz Yönetim Paneli İle Sitelerinizi ve Linklerinizi İstediğiniz Gibi
                            İstediğiniz Zaman Düzeleyip İnceleyebilirsiniz. Site Analiz Araçlarından Baklink Sistemlerine Birçok Farklı Yapıyı
                            Kolay Bir Şekilde Kullanın.</p>
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
                                <h4 class="heading2">Premium İle Fazlasını Keşfedin</h4>
                                <p>Premium Hesaba Geçiş Yaptığınızda Normal Kullanıcılara Göre Çok Daha Fazla Yönetilebilir Seçeneklere Erişiminiz Olacaktır.
                                Google, Alexa ve Moz Gibi Sistemlerin Api Entegrasyonları Sayesinde Geliştirilmiş Sistemimiz İle Hiçbir Yerde Bulamayacağınız
                                Site Yönetim Hizmetlerini Sizlere Sunuyoruz.</p>

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
                    <h4><span class="clr">Nasıl</span> Çalışıyoruz?</h4>
                </header>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <!-- process list of the page -->
                    <ul class="list-unstyled process-list">
                        <li class="text-center">
                            <span class="num md-round">1</span>
                            <div class="icon"><img src="{{asset('assets-landing\images\icon04.png')}}" alt="image description" class="img-responsive"></div>
                            <h3>Üye Olun</h3>
                            <p>Sistemi Kullanabilmek İçin<br>Hızlıca Kayıt Olun.</p>
                        </li>
                        <li class="text-center">
                            <span class="num md-round">2</span>
                            <div class="icon"><img src="{{asset('assets-landing\images\icon05.png')}}" alt="image description" class="img-responsive"></div>
                            <h3>Site(leri)nizi Ekleyin</h3>
                            <p>Kendi Sitelerinizi<br>Sisteme Ekleyerek İşe Başlayın</p>
                        </li>
                        <li class="text-center">
                            <span class="num md-round">3</span>
                            <div class="icon"><img src="{{asset('assets-landing\images\icon06.png')}}" alt="image description" class="img-responsive"></div>
                            <h3>Link Satın Alın</h3>
                            <p>Sistemdeki Linkleri<br>Siteleriniz İçin Satın Alın.</p>
                        </li>
                    </ul>
                    <!-- process list of the page end -->
                </div>
            </div>
        </div>


        <section class="subscriber-sec container" data-scroll-index="5">
            <div class="row">
                <header class="col-xs-12 header text-center">
                    <h4>Mail Bültenimize <span class="clr">Abone Olun</span></h4>
                    <p>Mail Bültenine Abone Olarak Son Gelişmelerden ve Güncellemelerden Anında Haberdar Olabilirsiniz.</p>
                </header>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <!-- Begin MailChimp Signup Form -->
                    <div id="mc_embed_signup">
                        <div id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate newsletter-form md-round" target="_blank" novalidate="">
                            {{csrf_field()}}
                            <fieldset>
                                <div id="mc_embed_signup_scroll">
                                    <div class="mc-field-group">
                                        <!-- <label for="mce-EMAIL">Email Address </label> -->
                                        <input required type="email" class="form-control md-round" placeholder="E-posta Adresiniz">
                                    </div>
                                    <div id="mce-responses" class="clear">
                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div>
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"></div>
                                    <div class="clear">
                                        <button class="btn-sub md-round" id="mc-embedded-subscribe" type="submit">
                                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                        </button>
                                    </div>

                                </div>
                            </fieldset>
                        </div>
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
{{--        <div class="footer-area">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xs-12 col-sm-6 col-md-3">--}}
{{--                        <div class="f-logo">--}}
{{--                            <a href="home.html"><img src="{{asset('assets-landing\images\f-logo.png')}}" alt="EXO" class="img-responsive"></a>--}}
{{--                        </div>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eui smod tincidunt ut laoreet dolore magna.</p>--}}
{{--                        <!-- socail network of the page -->--}}
{{--                        <ul class="list-unstyled socail-network">--}}
{{--                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>--}}
{{--                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>--}}
{{--                            <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>--}}
{{--                            <li><a href="#" class="tumblr"><i class="fa fa-tumblr"></i></a></li>--}}
{{--                            <li><a href="#" class="yelp"><i class="fa fa-yelp"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <!-- socail network of the page end -->--}}
{{--                    </div>--}}
{{--                    <div class="col-xs-12 col-sm-6 col-md-3">--}}
{{--                        <h3 class="heading">Important Links</h3>--}}
{{--                        <!-- f nav of the page -->--}}
{{--                        <ul class="list-unstyled f-nav">--}}
{{--                            <li><a href="#">Support</a></li>--}}
{{--                            <li><a href="#">Privacy &amp; Policy</a></li>--}}
{{--                            <li><a href="#">Terms &amp; Conditions</a></li>--}}
{{--                            <li><a href="#">VPN Service</a></li>--}}
{{--                            <li><a href="#">Dedicated Server</a></li>--}}
{{--                        </ul>--}}
{{--                        <!-- f nav of the page end -->--}}
{{--                    </div>--}}
{{--                    <div class="col-xs-12 col-sm-6 col-md-3">--}}
{{--                        <h3 class="heading">Our Partners</h3>--}}
{{--                        <!-- f nav of the page -->--}}
{{--                        <ul class="list-unstyled f-nav">--}}
{{--                            <li><a href="#">ThemeForest</a></li>--}}
{{--                            <li><a href="#">GraphicRiver</a></li>--}}
{{--                            <li><a href="#">AudioJungle</a></li>--}}
{{--                            <li><a href="#">3DOcean</a></li>--}}
{{--                            <li><a href="#">CodeCanayon</a></li>--}}
{{--                        </ul>--}}
{{--                        <!-- f nav of the page end -->--}}
{{--                    </div>--}}
{{--                    <div class="col-xs-12 col-sm-6 col-md-3">--}}
{{--                        <h3 class="heading">Contact with us</h3>--}}
{{--                        <ul class="list-unstyled contact-list">--}}
{{--                            <li><i class="fa fa-phone"></i> <a href="tel:2145212829">+214-5212-829</a></li>--}}
{{--                            <li><i class="fa fa-envelope"></i> <a href="mailto:support@exo.com">&#115;&#117;&#112;&#112;&#111;&#114;&#116;&#064;&#101;&#120;&#111;&#046;&#099;&#111;&#109;</a></li>--}}
{{--                        </ul>--}}
{{--                        <a href="#popup1" class="btn-primary md-round lightbox text-uppercase">Send us a message</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- footer area of the page end -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 copyright">
                    <p><a style="color: white" href="https://www.backlinksatisi.com" title="backlink">Backlinksatisi.com</a> © Copyright - 2019 , Tüm Hakları Saklıdır</p>
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
