<!DOCTYPE html>
<html>

<head>
<title>CHUMPHON WEB SITE</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">

<!-- STYLESHEET CSS FILES -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/templatemo-style.css">

<!-- Useful for styles with static names...-->
<link href="//chumphon.github.io/Chumphon/v1.2/" rel="stylesheet">

<!-- CSS media query on a link element -->
<link rel="stylesheet" href="css/example.css" />


<!-- navigation section -->
<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container-fluid">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>
      <FONT FACE="Proxima"><a href="index.html" class="navbar-brand"><div class="active">CHUMPHON</div></a></FONT>
    </div>
    <div class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right nav-pills">
  <li role="presentation"><a href="place.html" style="text-decoration:none" class="smoothScroll">สถานที่่ท่องเที่ยว</a></li>
  <li role="presentation"><a href="restaurant.html" style="text-decoration:none" class="smoothScroll">ร้านอาหาร</a></li>
  <li role="presentation"><a href="hotels.html" style="text-decoration:none" class="smoothScroll">ที่พัก</a></li>
  <li role="presentation"><a href="souvenirs.html" style="text-decoration:none" class="smoothScroll">ของฝาก</a></li>
  <li role="presentation"><a href="festival.html" style="text-decoration:none" class="smoothScroll">FESTIVAL</a></li>
  <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" class="active">
     รีวิว <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      <li><a href="reviews-search.html">ค้นหารีวิว</a></li>
      <li class="divider"></li>
      <li><a href="review-write.html">เขียนรีวิว</a></li>
    </ul>
  </li>
  <li role="presentation"><a href="web_board.html" style="text-decoration:none" class="smoothScroll">เว็บบอร์ด</a></li>
</ul>
    </div>
  </div>
  </div>
</nav>
</head>



    <body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
    <!-- preloader section -->
    <div class="preloader">
      <div class="sk-spinner sk-spinner-rotating-plane"></div>
    </div>

    <!--start section 2-->
        <section id="intro" class="home-slide text-light">
          <!--start slide-->
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

              <div class="item active">
                <img src="./images/b1.jpg" alt="..." width="100%">
                <div class="carousel-caption">
                  <h3>หาดลังกาจิว</h3>
              <p>จุ้บๆ จุ้บๆ</p>
                </div>
              </div>


              <div class="item">
                <img src="./images/b2.jpg" alt="..." width="100%">
                <div class="carousel-caption">
                  <h3>หาดลังกาจิว</h3>
              <p>จุ้บๆ จุ้บๆ</p>
                </div>
              </div>

              <div class="item">
                <img src="./images/b3.jpg" alt="..." width="100%">
                <div class="carousel-caption">
                  <h3>หาดลังกาจิว</h3>
              <p>จุ้บๆ จุ้บๆ</p>
                </div>
              </div>

              ...
            </div>

          </div>
          <!--end  slide-->
      </section>
    <!--end Section 2-->




    <h1 class="page-header"><?= $title ?></h1>

        <div class="page-content">
          <div class="wrapper">
            <?= $content ?>
          </div>
        </div>


    <!-- footer section html -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <h2 class="wow fadeIn" data-wow-delay="0.9s">ABOUT US</h2>
            <ul class="social-icon">
              <li><a href="#" class="fa fa-facebook wow bounceIn" data-wow-delay="0.3s"></a></li>
              <li><a href="#" class="fa fa-twitter wow bounceIn" data-wow-delay="0.6s"></a></li>
              <li><a href="#" class="fa fa-github wow bounceIn" data-wow-delay="0.9s"></a></li>
              <li><a href="#" class="fa fa-envelope wow bounceIn" data-wow-delay="0.3s"></a></li>
              <li><a href="#" class="fa fa-phone wow bounceIn" data-wow-delay="0.3s"></a></li>
            </ul>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 copyright">
            <p> Thanks you for visiting. Enjoy our website.</p>
            <p>&copy; CHUMPHON, THAILAND 2016. | Design: <a target="_blank" rel="nofollow" href="http://www.templatemo.com">template mo</a></p>
          </div>
        </div>
      </div>
    </footer>

  </body>

</html>

<!-- JAVASCRIPT JS FILES -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
<script src="https://use.fonticons.com/d04f2eaa.js"></script>
