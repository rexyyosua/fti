<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.12.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-web-fti-128x128.png" type="image/x-icon">
  <meta name="description" content="">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise-gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">



</head>
<body>
<section id="menu-0">

    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="#top" class="navbar-logo"><img src="assets/images/logo-web-fti-128x128.png" alt="Mobirise"></a>
                        <a class="navbar-caption" href="https://mobirise.com">FTI_UG</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="index.html#msg-box3-2">PROFILE</a></li><li class="nav-item"><a class="nav-link link" href="#gallery1-b">PROGRAM KERJA<br></a></li><li class="nav-item"><a class="nav-link link" href="#contacts2-9">CONTACT US</a></li><li class="nav-item">
                      <a class="nav-link link" <?=anchor('welcome/berita','BERITA')?></a>
                    </li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="engine"><a rel="external" href="https://mobirise.com">https://mobirise.com/</a></section><section class="mbr-slider mbr-section mbr-section__container carousel slide mbr-section-nopadding mbr-after-navbar" data-ride="carousel" data-keyboard="false" data-wrap="true" data-pause="false" data-interval="5000" id="slider-a">
    <div>
        <div>
            <div>
                <ol class="carousel-indicators">
                    <li data-app-prevent-settings="" data-target="#slider-a" data-slide-to="0" class="active"></li>
                    <li data-app-prevent-settings="" data-target="#slider-a" class="" data-slide-to="1"></li>
                    <li data-app-prevent-settings="" data-target="#slider-a" data-slide-to="2"></li>
                    <li data-app-prevent-settings="" data-target="#slider-a" data-slide-to="3"></li>
                    <li data-app-prevent-settings="" data-target="#slider-a" data-slide-to="4"></li>
                    <li data-app-prevent-settings="" data-target="#slider-a" data-slide-to="5"></li>
                    <li data-app-prevent-settings="" data-target="#slider-a" data-slide-to="6"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full active"  style="background-image: url(assets/images/sparklers.jpg">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay" style="opacity: 0.5;"></div>
                            <div class="container-slide container">

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-1">
                                        <h2 class="mbr-section-title display-1">BEM FTI GUNADARMA</h2>
                                        <p class="mbr-section-lead lead">Choose from the large selection of latest pre-made blocks - jumbotrons, hero images, parallax scrolling, video backgrounds, hamburger menu, sticky header and more.</p>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($berita as $a):?>
                    <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full"  style="background-image: url(assets/images/<?=$a->gambar_berita?>">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay" style="opacity: 0.6;"></div>
                            <div class="container-slide container">

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-1">
                                        <h2 class="mbr-section-title display-1"><?=$a->judul_berita?></h2>
                                        <p class="mbr-section-lead lead"><?=substr($a->deskripsi_berita,0,150)?>....</p>
                                        <a class="btn btn-black" <?=anchor('welcome/detail_berita/'.$a->id_berita,'Read More')?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  <?php endforeach ?>
                <a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#slider-a">
                    <span class="icon-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#slider-a">
                    <span class="icon-next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article" id="msg-box3-2" style="background-color: rgb(239, 239, 239); padding-top: 120px; padding-bottom: 0px;">


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">BEM FTI</h3>
                <div class="lead"><p>Mobirise has provided for website developers a growing library of modern blocks which can be used either partially or in full for every website developed through the builder.</p></div>

            </div>
        </div>
    </div>

</section>

<section class="mbr-cards mbr-section mbr-section-nopadding" id="features6-d" style="background-color: rgb(239, 239, 239);">



    <div class="mbr-cards-row row">
        <div class="mbr-cards-col col-xs-12 col-lg-6" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
              <div class="card cart-block">
                  <div class="card-img"><a href="https://mobirise.com" class="mbri-globe mbr-iconfont mbr-iconfont-features3" style="color: rgb(85, 57, 130);"></a></div>
                  <div class="card-block">
                    <h4 class="card-title">MISI</h4>

                    <p class="card-text">Bootstrap 4 has been noted as one of the most reliable and proven frameworks and Mobirise has been equipped to develop websites using this framework.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-6" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img"><a href="https://mobirise.com" class="mbri-idea mbr-iconfont mbr-iconfont-features3" style="color: rgb(85, 57, 130);"></a></div>
                    <div class="card-block">
                        <h4 class="card-title">VISI</h4>

                        <p class="card-text">One of Bootstrap 4's big points is responsiveness and Mobirise makes effective use of this by generating highly responsive website for you.</p>

                    </div>
                </div>
            </div>
        </div>




    </div>
</section>

<section class="mbr-section article" id="msg-box3-h" style="background-color: rgb(242, 242, 242); padding-top: 0px; padding-bottom: 40px;">


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">


                <div><a class="btn btn-black" <?=anchor('welcome/profile/','Read More')?></a></div>
            </div>
        </div>
    </div>

</section>

<section class="mbr-section mbr-section-md-padding mbr-parallax-background" id="social-buttons2-m" style="background-image: url(assets/images/dsc-2000x1125.jpg); padding-top: 90px; padding-bottom: 90px;">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">FOLLOW US</h3>
                <div><a class="btn btn-social" title="Twitter" target="_blank" href="https://twitter.com/mobirise"><i class="socicon socicon-twitter"></i></a> <a class="btn btn-social" title="Facebook" target="_blank" href="https://www.facebook.com/pages/Mobirise/1616226671953247"><i class="socicon socicon-facebook"></i></a> <a class="btn btn-social" title="Google+" target="_blank" href="https://plus.google.com/u/0/+Mobirise/posts"><i class="socicon socicon-googleplus"></i></a> <a class="btn btn-social" title="YouTube" target="_blank" href="https://www.youtube.com/channel/UCt_tncVAetpK5JeM8L-8jyw"><i class="socicon socicon-youtube"></i></a> <a class="btn btn-social" title="Instagram" target="_blank" href="https://instagram.com/mobirise/"><i class="socicon socicon-instagram"></i></a> <a class="btn btn-social" title="Pinterest" target="_blank" href="https://www.pinterest.com/mobirise/"><i class="socicon socicon-pinterest"></i></a> <a class="btn btn-social" title="Tumblr" target="_blank" href="http://mobirise.tumblr.com/"><i class="socicon socicon-tumblr"></i></a> <a class="btn btn-social" title="LinkedIn" target="_blank" href="https://www.linkedin.com/in/mobirise"><i class="socicon socicon-linkedin"></i></a> <a class="btn btn-social" title="VKontakte" target="_blank" href="#"><i class="socicon socicon-vkontakte"></i></a> <a class="btn btn-social" title="Odnoklassniki" target="_blank" href="#"><i class="socicon socicon-odnoklassniki"></i></a> </div>
            </div>
        </div>
    </div>
</section>


<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" id="gallery1-b" data-filter="false" style="background-color: rgb(239, 239, 239); padding-top: 3rem; padding-bottom: 3rem;">
    <!-- Filter -->
<HR>
<BR>
<h3 class="mbr-section-title display-2 text-xs-center">PROGRAM KERJA</h3>
<div class="lead text-xs-center"><p>Mobirise has provided for website developers a growing library of modern blocks which can be used either <br>partially or in full for every website developed through the builder.</p></div>

<BR>
    <!-- Gallery -->
    <div class="mbr-gallery-row">
        <div class=" mbr-gallery-layout-default">
            <div>
                <div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Awesome" data-video-url="false">
                        <div href="#lb-gallery1-b" data-slide-to="0" data-toggle="modal">



                            <img alt="" src="assets/images/bike-small.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Responsive" data-video-url="false">
                        <div href="#lb-gallery1-b" data-slide-to="1" data-toggle="modal">



                            <img alt="" src="assets/images/code-man-small.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Creative" data-video-url="false">
                        <div href="#lb-gallery1-b" data-slide-to="2" data-toggle="modal">



                            <img alt="" src="assets/images/coworkers-small.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Animated" data-video-url="false">
                        <div href="#lb-gallery1-b" data-slide-to="3" data-toggle="modal">



                            <img alt="" src="assets/images/desktop-small.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Awesome" data-video-url="false">
                        <div href="#lb-gallery1-b" data-slide-to="4" data-toggle="modal">



                            <img alt="" src="assets/images/room-laptop-small.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Beautiful" data-video-url="false">
                        <div href="#lb-gallery1-b" data-slide-to="5" data-toggle="modal">



                            <img alt="" src="assets/images/table-small.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Responsive" data-video-url="false">
                        <div href="#lb-gallery1-b" data-slide-to="6" data-toggle="modal">



                            <img alt="" src="assets/images/windows-books-small.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Animated" data-video-url="false">
                        <div href="#lb-gallery1-b" data-slide-to="7" data-toggle="modal">



                            <img alt="" src="assets/images/working-area-small.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Lightbox -->
    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery1-b">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-b" class=" active" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-b" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-b" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-b" data-slide-to="3"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-b" data-slide-to="4"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-b" data-slide-to="5"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-b" data-slide-to="6"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-b" data-slide-to="7"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img alt="" src="assets/images/bike.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/code-man.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/coworkers.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/desktop.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/room-laptop.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/table.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/windows-books.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/working-area.jpg">
                        </div>
                    </div>
                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery1-b">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery1-b">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <a class="close" href="#" role="button" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <center>
    <a class="btn btn-black" <?=anchor('welcome/pk','Read More')?></a>
    <br>
</section>


<section class="mbr-section mbr-section-md-padding mbr-footer footer2" id="contacts2-9" style="background-color: rgb(17, 17, 19); padding-top: 90px; padding-bottom: 90px;">

  <h3 class="mbr-section-title display-2 text-xs-center">CONTACT US</h3>
  <BR>
    <div class="container">
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Address</strong><br>Jl. KOMBES POL M. Jasin,<br>Kelapadua, Cimanggis,<br>Depok, 16451<br>Indonesia<br><br><br>
<strong>Contacts</strong><br>
Email: info@ugbemfti.org<br>
Phone: +1 (0) 000 0000 001<br>
Fax: +1 (0) 000 0000 002</p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3"><p class="mbr-contacts__text"><strong>Links</strong></p><ul><li><a href="http://www.gunadarma.ac.id/">Gunadarma</a></li><li><a href="http://baak.gunadarma.ac.id/">BAAK_Gunadarma</a><a class="text-white" href="http://baak.gunadarma.ac.id/"></a></li><li><a href="http://library.gunadarma.ac.id/">Library Gunadarma</a></li></ul></div>
            <div class="col-xs-12 col-md-6">
                <div class="mbr-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJ_c4nVEfsaS4RhxaHD-5-Tgw" allowfullscreen=""></iframe></div>
            </div>
        </div>
    </div>
</section>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-j" style="background-color: rgb(17, 17, 19);; padding-top: 1.75rem; padding-bottom: 1.75rem;">
<hr>
    <div class="container">
        <p class="text-xs-center">Copyright &copy; 2017 RTA Web Developers.</p>
    </div>
</footer>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/jquery-mb-ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/mobirise-slider-video/script.js"></script>
  <script src="assets/mobirise-gallery/player.min.js"></script>
  <script src="assets/mobirise-gallery/script.js"></script>


  <input name="animation" type="hidden">
  </body>
</html>
