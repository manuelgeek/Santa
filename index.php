<?php
// session_start();
require_once('class.user.php');
$user = new USER();
    if(isset($_GET['message']) and $_GET['message'] != null){
        $string = $_GET['message'];
    }else{
        $string = 'hyv4ghcg5u';
    }
    $stmt = $user->runQuery("SELECT * FROM christmas WHERE  string=:umail");
    $stmt->execute(array(':umail'=>$string));
    if($stmt->rowCount() > 0){
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        extract($row);
    } else {
        $user->redirect('index.php');
    }

?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <meta name="description" content="App:Lab KE wishes you a Merry Christmas and a Prosperous Happy New Year 2018" />
    <meta name="keywords" content="Festive Season, Christmas, New Year" />
    <meta name="author" content="Apps:Lab"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">

	<title>App:Lab | Greetings from <?php echo $name; ?> </title>
	  <!-- ===========================
    FAVICONS
    =========================== -->
	<link rel="icon" href="img/favicon.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-ipad-retina.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-iphone-retina.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-iphone.png" />
	 <!-- ===========================
    STYLESHEETS
    =========================== --> 
    <link rel="stylesheet" href="font/css/font-awesome.min.css">
        <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">    
    <link rel="stylesheet" type="text/css" href="css/index.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,600|Pacifico' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>

<body>
    <!-- ===========================
    HERO SECTION
    =========================== -->
   <!--  <audio autoplay>
    <source src="merry.mp3" type="audio/mpeg">
    <source src="merry.ogg" type="audio/ogg">
    audio not supported, use updated browser.
    </audio> -->

<!-- buttons -->
 <div class="zoom">
    <a  class="zoom-fab zoom-btn-large" id="zoomBtn"><i class="fa fa-share"></i></a>
    <ul class="zoom-menu">
      <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=Apps:Lab Feative Greetings ,<?php echo $_SERVER['REQUEST_URI']; ?>" class="zoom-fab zoom-btn-sm zoom-btn-report scale-transition scale-out"><i class="fa fa-facebook"></i></a></li>
      <!-- <li><a target="_blank"  class="zoom-fab zoom-btn-sm zoom-btn-feedback scale-transition scale-out"><i class="fa fa-instagram"></i></a></li> -->
      <li><a target="_blank"  href="whatsapp://send?text=Apps:Lab Feative Greetings ,<?php echo $_SERVER['REQUEST_URI']; ?>" class="zoom-fab zoom-btn-sm zoom-btn-tangram scale-transition scale-out"><i class="fa fa-whatsapp"></i></a></li>
      <li><a target="_blank"  href="https://twitter.com/home?status=Apps:Lab Festive Greetings <?php echo $_SERVER['REQUEST_URI']; ?> @AppsLab_KE" class="zoom-fab zoom-btn-sm zoom-btn-report scale-transition scale-out"><i class="fa fa-twitter"></i></a></li>
      <!-- <li><a class="zoom-fab zoom-btn-sm zoom-btn-feedback scale-transition scale-out"><i class="fa fa-bell"></i></a></li> -->
    </ul>
   <!--  <div class="zoom-card scale-transition scale-out">
      <ul class="zoom-card-content">
      <li>Content</li>
      <li>Content</li>
      <li>Content</li>
      <li>Content</li>
      <li>Content</li>
      </ul>
    </div> -->
  </div>
   
<section>
    <div id="hero">
        <div class="redoverlay">
            <div class="container">
                <div class="row">
                    <div class="herotext">
                        <h2 class="wow zoomInDown texxters" data-wow-duration="3s"><span style="color:purple;">{{</span> <span style="color:#56768f">\Carbon</span><span style="color:cyan;">::isHoliday('</span>festive<span style="color:cyan;">')</span> <span style="color:#a8dae2;">==</span> <span style="color:#78201e;">true</span> <span style="color:#a8dae2;"> ?</span> <span style="color:#45a081;">Smile.Celebrate.Repeat()</span> <span style="color:#a8dae2;">:</span> <span style="color:#45a081;"> Code.Coffee.Repeat()</span>;<span style="color:purple;">}}</span></h2> 

                        <h1 class="wow flipInY"><span style="color:#00B4FA;">Apps</span><span style="color:#7F8484;">:Lab</span></h1>
                        <div style="padding: 1px;" class="clearfix"></div>
                        <h4 class="wow flipInY" style="color:#00B4FA; margin-top: 10px!important;">Heart of Tech, Creativity and Innovation</h4>

                        
                            <h3 class="white typed">A Happy Merry Chritmas and Prosperous Happy New year </h3><span class="typed-cursor"><b>Wishes</b></span>    
                                              
                       <!--#NOTE: texts inside the OPTIONAL tag above would be hidden on smaller mobile screens -->
                        <h2 class="wow zoomInUp"><span style="font-size: 16px; margin-top: -30px!important; padding: 0px!important;"> from</span> <?php echo $name; ?></h2>
                        <p style="font-size: 17px;" class="wow fadeInUp" data-wow-duration="2s">Taking Tech in Eldoret<br> To the next level</p>

                        <img class="bigbell wow tada infinite" data-wow-duration="30s" src="img/bell.png" alt="">
                    </div>

                    <div class="santa wow bounceInDown" data-wow-duration="2s">
                        <img src="img/santa.png" alt="">
                    </div>
                    <div class="santa wow bounceInUp pull-left sant" data-wow-duration="2s">
                        <img src="images/<?php echo $photo; ?>"  alt="image"><!-- width='100px' height=100px -->
                    </div>
                </div>
            </div>
        
    </div>

</section>
<!--HERO SECTION END-->
<section>
 <div class="cut cut-top"></div>
    <div class="container mainer">
        <div class="row">
            <div class="sectionhead">            
                    
                    <h2> <span class="highlight"><?php echo $name; ?></span> Season greatings.</h2>
                    <p><?php echo $message; ?></p>  
                    <h2>AppLab <span class="highlight">heart of tech, creativity and innovation</span> </h2>
                    <p>Extended wishes from CEO Marvin, JEvans, Kelvin, Joeshem, Emmanuel, Humprey, Silali, Harun, Gloria, Marggie, Brayo, Gikonyo, Joseph, Ndung'u, Denis, Salcie, Bonface, Eric, Cyril, Hamara, Jeff ,Steve, Sammy, Gavin, Gloria, Paula, Lynn, Bedah Apps:Lab community.</p>    
                </div><!--SECTIONHEAD END--> 
        </div>
        
    </div> <div class="cut cut-bottom"></div>
</section>
     <!-- ===========================
    SUBSCRIBE SECTION
    =========================== -->
      <div id="subscribe">
        <div class="darkoverlay">
            <div class="container text-center">
                <img class="santaicon wow tada infinite" data-wow-duration="20s" src="img/santa-sm.png" alt="">
                <div class="sectionhead">            
                    <h2>Don’t miss the <span class="highlight">upcoming events and activities</span> next year</h2>
                    
                    <div class="col-md-12">
                        <p class="col-md-9 col-sm-9 ">Appslab brings you the best experience in and around Moi University and Eldoret. The Geeks Talk Thursday, chain of meet ups, the trainings and so much more. We thank those who made these a success in 2017, expect more than these experiences come 2017. 
                            Join the community<br>
                        <a  href="https://goo.gl/J4obZv" title="Geeks Talk Thursday" target="_blank">Geeks Talk Thursday WhatsApp Group.</a></p><br>
                        <!-- Upcoming Incubation Programme in 2017 February, click link below for more info -->
                      <!--  <a href="https://www.eventbrite.com/e/appslab-tech-incubation-2017-tickets-30568510237" title="Incubation" target="_blank">2017 Incubation Programme info and application.</a>  -->
                      <p class="col-md-3 col-sm-3 "><img src="img/qr.jpeg"  width="100px" ></p>
                    </div>
                </div><!--SECTIONHEAD END-->    

<footer>
        <div class="container">
             
            <div class="row bottom-footer text-center-mobile">
            <div class="col-sm-8 col-sm-offset-4 col-md-8 col-md-offset-2">
                   <address>
                        <p><?php echo $email; ?><br>
                        emashmagak@appslab.co.ke<br>
                         marvin@appslab.co.ke<br>
                       
                            </p>  </address>
                </div>
                <div class="col-sm-8">
                    
                     <p>&copy; <?php echo date('Y'); ?>  <a href="https://www.appslab.co.ke"><b>Apps:Lab </b></a> Design by<a href="https://manuel.appslab.co.ke"><b> Manu El</b></p>
                     
                       
                </div>
                <div class="col-sm-4  text-center-mobile">
                    <ul class="social-footer">
                        <li><a href="https://www.facebook.com/appslabmoi/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/AppsLab_KE"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/appslab_moi/"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/manuel-magak-90441a116"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
               
               </div><!--SUBSCRIBE CONTAINER END-->
        </div><!--OVERLAY END-->
    </div><!--SUBSCRIBE SECTION END-->        	
	
		<script src="js/jquery2.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		 <script src="js/evenfly.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/snowstorm-min.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/typewriter.js"></script>
     <script src="js/main.js"></script>
    <script>new WOW().init();</script>  
    <script type="text/javascript">
        // Typing Intro Init
        $(".typed").typewriter({
            speed: 70
        });
    </script> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.0/velocity.min.js"></script>
  <script src="js/index.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	</body>
</html>