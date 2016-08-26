<?php
require_once 'lib/twitteroauth.php';
 
define('CONSUMER_KEY', 'Y8ZH5gTUj2F3wacnkEoJAi5QA');
define('CONSUMER_SECRET', 'gHhEx12AONdWIVysJj54acGhIe6sEmaV5AJVz3yAA8zoAjxTUA');
define('ACCESS_TOKEN', '4662142156-eiljGXryMuRgAAktefBiZXFFBEYuRCFQxLlHexg');
define('ACCESS_TOKEN_SECRET', 'I1GDsCPpLCIGygzDenZyHkuQwuxLddmEwC4wuTmN1YKcJ');
 
$toa = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
 
$query = array(
  "q" => "#BankingUninterrupted"
);
 
$results = $toa->get('search/tweets', $query);


require_once('lib/facebook-php-sdk-master/src/facebook.php');

// connect to app
$config = array();
$config['appId'] = '1766640343598105';
$config['secret'] = '8d4bd33d3b3583250073eafab98027d9';
$config['fileUpload'] = false; // optional

// instantiate
$facebook = new Facebook($config);

// set page id
$pageid = "279771168740729";

// now we can access various parts of the graph, starting with the feed
$pagefeed = $facebook->api("/" . $pageid . "/feed");

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Welcome to ICICI</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <!-- Font Awesome CSS -->
        <link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
        <!-- custom scrollbar stylesheet -->
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
        <!-- Scrolling Nav CSS -->
        <link href="css/scrolling-nav.css" rel="stylesheet">
        <!-- FullSlider CSS -->
        <link href="css/full-slider.css" rel="stylesheet">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">

        <!-- Responsive css -->
        <link rel="stylesheet" href="css/responsive.css">

        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Navigation -->
    <header class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="img/logo.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li>
                        <a class="page-scroll" href="#page-top">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#products">Products</a>
                    </li>
                   <!--  <li>
                        <a class="page-scroll" href="#products-story">Videos</a>
                    </li> -->
                    <li>
                        <a class="page-scroll" href="#live-feed">Live Feed</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </header>

    <!-- <div style="height:70px"></div> -->

    <!-- Full Page Image Background Carousel Header -->
    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill">
                    <img src="img/slider/microsite-banner-imobile-final.png">
                    <img src="img/slider/mobile-banner-imobile-final.png" class="mobSlide">
                </div>
               <!--  <div class="carousel-caption">
                </div> -->
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill">
                    <img src="img/slider/banner-(monsoon-microsite)-.gif">
                    <img src="img/slider/mobile-banner-02(monsoon-microsite)-.gif" class="mobSlide">
                </div>
                <!-- <div class="carousel-caption">
                </div> -->
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>
    <!-- Full Page Image Background Carousel Header -->

    <div class="clearfix"></div>

    <!-- product start     -->
    <section id="products" class="product-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 col-centered">
              <h1 class="text-center">Our Products</h1>
              <p class="text-center">
                Our products offer convenience, comfort and ease in all things banking, making sure you have an uninterrupted banking experience! Have a look at our various products to know what we have in store.
              </p>
            </div>   

            <!-- product -->
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-centered">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 product-div">
                    <div class="product">
                        <div class="icon">
                            <span class="overlay"></span>
                            <img src="img/prodcuts/mob.png">
                        </div>
                        <div class="caption">
                            <h6><span class="text-lowercase">i</span>Mobile</h6>
                        </div>
                        <!-- <div class="prod-active">
                            <img src="img/active-arrow.png">
                        </div> -->
                    </div>

                    <div class="prodcut-details">
                        <div class="prod-info mobView"></div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 product-div">
                    <div class="product">
                        <div class="icon">
                            <span class="overlay"></span>
                            <img src="img/prodcuts/pockets.png">
                        </div>
                        <div class="caption">
                            <h6>Pockets by ICICI Bank</h6>
                        </div>
                        <!-- <div class="prod-active">
                            <img src="img/active-arrow.png">
                        </div> -->
                    </div>

                    <div class="prodcut-details">
                        <div class="prod-info mobView"></div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 product-div">
                    <div class="product">
                        <div class="icon">
                            <span class="overlay"></span>
                            <img src="img/prodcuts/online-banking.png">
                        </div>
                        <div class="caption">
                            <h6>Internet Banking</h6>
                        </div>
                        <!-- <div class="prod-active">
                            <img src="img/active-arrow.png">
                        </div> -->
                    </div>

                    <div class="prodcut-details">
                        <div class="prod-info mobView"></div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <!-- product info start -->
                <div class="prodcut-details">

                    <div class="prod-info deskview">
                        <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <img class="prod-img" src="img/mob-info-img.jpg">
                        </div> -->

                          
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-centered">

                            <button class="prod-info-close">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </button>

                            <div class="content" id="examples">
                                <div id="content-1" class="content mCustomScrollbar" style="height:210px">
                                    <h3 class="prod-title"></h3>
                                    <p class="prod-cont"></p>  
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product info end -->

                <div class="clearfix"></div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-sm-offset-2 product-div">
                    <div class="product">
                        <div class="icon">
                            <span class="overlay"></span>
                            <img src="img/prodcuts/EFT.png">
                        </div>
                        <div class="caption">
                            <h6><em><span class="text-lowercase">e</span>ft</em>Cheques</h6>
                        </div>
                        <!-- <div class="prod-active">
                            <img src="img/active-arrow.png">
                        </div> -->
                    </div>
                    <div class="prodcut-details">
                        <div class="prod-info mobView"></div>
                    </div>
                </div>

                <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 product-div">
                    <div class="product">
                        <div class="icon">
                            <img src="img/prodcuts/easy-pay.png">
                        </div>
                        <div class="caption">
                            <h6>Eazy Pay</h6>
                        </div>
                    </div>
                    <div class="prodcut-details">
                        <div class="prod-info mobView"></div>
                    </div>
                </div> -->

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 product-div">
                    <div class="product">
                        <div class="icon">
                            <span class="overlay"></span>
                            <img src="img/prodcuts/tab-banking.png">
                        </div>
                        <div class="caption">
                            <h6>Tab Banking</h6>
                        </div>
                        <!-- <div class="prod-active">
                            <img src="img/active-arrow.png">
                        </div> -->
                    </div>
                    <div class="prodcut-details">
                        <div class="prod-info mobView"></div>
                    </div>
                </div>  
                <!-- product -->
                
                <div class="clearfix"></div>
                
                <!-- product info start -->
                <div class="prodcut-details">
                    <div class="prod-info prod-info2 deskview">
                        <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <img class="prod-img" src="img/mob-info-img.jpg">
                        </div> -->
                        <div class="col-lg-10 col-md-10 col-sm-6 col-xs-12 col-centered">

                           <button class="prod-info-close">
                            <i class="fa fa-times" aria-hidden="true"></i>
                           </button>

                            <div class="content" id="examples">
                                <div id="content-1" class="content mCustomScrollbar" style="height:210px">
                                    <h3 class="prod-title"></h3>
                                    <p class="prod-cont"></p>  
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product info end -->
		
		<div class="clearfix"></div>
                
              </div>
          </div>
        </div>
    </section>
    <!-- product end -->

    <!-- prodcut stories start -->
    <section id="products-story" class="products-story-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 col-centered">
                    <h1 class="text-center">product stories</h1>
                    <p class="text-center">
                        There’s more to us! We have made banking portable for your ease and comfort. The features offer innovative banking solutions like never before! Watch our videos to know how our products make your #BankingUninterrupted this monsoon.
                    </p>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-2 col-xs-12 col-centered">
                    <div id="myCarousel-2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="video">
                                    <iframe width="760" height="400" src="https://www.youtube.com/embed/HoWShz4i9ZE" frameborder="0" allowfullscreen></iframe>
                                </div>
                             </div>

                             <div class="item">
                                <div class="video">
                                    <iframe width="760" height="400" src="https://www.youtube.com/embed/HoWShz4i9ZE" frameborder="0" allowfullscreen></iframe>
                                </div>
                             </div>

                             <div class="item">
                                <div class="video">
                                    <iframe width="760" height="400" src="https://www.youtube.com/embed/HoWShz4i9ZE" frameborder="0" allowfullscreen></iframe>
                                </div>
                             </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel-2" role="button" data-slide="prev">
                          <span class="icon-prev" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel-2" role="button" data-slide="next">
                          <span class="icon-next" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- prodcut stories end -->


    <!-- live feeds start -->
    <section id="live-feed" class="live-feed-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-centered">
                    <h1 class="color-red">Live feed</h1>
                    <p>
                        Check out what people have to say about #BankingUninterrupted. You too can participate, have a conversation and share your opinions! All you need to do is tweet or upload a status with #BankingUninterrupted.
                    </p>

                    <!-- feeds start -->
                    <div class="liveFeeds">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 paddZero twi" style="border-right:1px solid #75a6b4">
                            <div class="thead"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>Twitter</div>
                            <div class="content" id="examples">
                                <div id="content-1" class="content mCustomScrollbar" style="height:450px">
                            <ul>

								<?php
								foreach ($results->statuses as $result) {

									//date("jS M, Y", (strtotime($post['created_time'])))
									?>
									<li>
										<div class="feeds">
											<p><?php echo $result->text; ?></p>
											<div class="user-name">by <?php echo $result->user->screen_name; ?></div>
											<div class="time"><?php echo $result->created_at; ?></div>
										</div>
									</li>
									<?php
								  //echo $result->user->screen_name . ": " . $result->text . "<br><br><br>";
								  //echo $result->text . "<br><br><br>";
								}
								?>

                                <!-- <li>
                                    <div class="feeds">
                                        <p>
                                            <a href="#">#BankingUninterrupted</a> is Lorem ipsu
                                            m dolor sit amet, consectetuer adipi sc
                                            i ng elit @sed diam nonummy nibh eui
                                            smod tincidunt ut laoreet dolore.
                                        </p>
                                        <div class="user-name">by Username</div>
                                        <div class="time">2 Minutes ago</div>
                                    </div>
                                </li>

                                <li>
                                    <div class="feeds">
                                        <p>
                                            <a href="#">#BankingUninterrupted</a> is Lorem ipsu
                                            m dolor sit amet, consectetuer adipi sc
                                            i ng elit @sed diam nonummy nibh eui
                                            smod tincidunt ut laoreet dolore.
                                        </p>
                                        <div class="user-name">by Username</div>
                                        <div class="time">2 Minutes ago</div>
                                    </div>
                                </li>

                                <li>
                                    <div class="feeds">
                                        <p>
                                            <a href="#">#BankingUninterrupted</a> is Lorem ipsu
                                            m dolor sit amet, consectetuer adipi sc
                                            i ng elit @sed diam nonummy nibh eui
                                            smod tincidunt ut laoreet dolore.
                                        </p>
                                        <div class="user-name">by Username</div>
                                        <div class="time">2 Minutes ago</div>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 paddZero fb">
                            <div class="thead"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>Facebook</div>
                            <div class="content" id="examples">
                                <div id="content-1" class="content mCustomScrollbar" style="height:450px">
                            <ul>
								<?php
								$i = 0;
								foreach($pagefeed['data'] as $post) 
								{
								?>
                                <li>
                                    <div class="feeds">
                                        <p>
											<?php
                                            if (empty($post['story']) === false) {
                                echo "<p>" . $post['story'] . "</p>";
                            } elseif (empty($post['message']) === false) {
                                echo "<p>" . $post['message'] . "</p>";
                            }
							?>
                                        </p>
                                        <!-- <div class="user-name">by Username</div> -->
                                        <div class="time"><?php echo date("jS M, Y", (strtotime($post['created_time'])));?></div>
                                    </div>
                                </li>
								<?php } ?>

                                <!-- <li>
                                    <div class="feeds">
                                        <p>
                                            <a href="#">#BankingUninterrupted</a> is Lorem ipsu
                                            m dolor sit amet, consectetuer adipi sc
                                            i ng elit @sed diam nonummy nibh eui
                                            smod tincidunt ut laoreet dolore.
                                        </p>
                                        <div class="user-name">by Username</div>
                                        <div class="time">2 Minutes ago</div>
                                    </div>
                                </li>

                                <li>
                                    <div class="feeds">
                                        <p>
                                            <a href="#">#BankingUninterrupted</a> is Lorem ipsu
                                            m dolor sit amet, consectetuer adipi sc
                                            i ng elit @sed diam nonummy nibh eui
                                            smod tincidunt ut laoreet dolore.
                                        </p>
                                        <div class="user-name">by Username</div>
                                        <div class="time">2 Minutes ago</div>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                        </div>
                    </div>
                    <!-- feeds end -->
                </div>
            </div>
        </div>
    </section>
    <!-- live feeds end -->

    <!-- footer start -->
    <footer>
        <div class="social-cnnct">
            <img src="img/footer-social-bg.png">
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8 paddZero">
                    <p>Copyright Reserved @ICICI Bank Ltd</p>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4 paddZero">
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/icicibank/" target="_blank"></a></li>
                        <li><a href="https://twitter.com/ICICIBank" target="_blank"></a></li>
                        <!-- <li><a href="#"></a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->


    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

     <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

    <!-- custom scrollbar plugin -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: false //changes the speed
    })

    // $('.carousel').carousel({
    //     interval: false //changes the speed
    // })

    </script>
    </body>
    <!-- google analytics start -->
    <script type="text/javascript">
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
     
      ga('create', 'UA-17906056-32', 'auto');
      ga('send', 'pageview');
    </script>
    <!-- google analytics start -->
</html>
