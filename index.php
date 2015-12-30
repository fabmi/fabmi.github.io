<?php
//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}

	//Check to make sure that the phone field is not empty
	if(trim($_POST['phone']) == '') {
		$hasError = true;
	} else {
		$phone = trim($_POST['phone']);
	}

	//Check to make sure that the subject field is not empty
	if(trim($_POST['subject']) == '') {
		$hasError = true;
	} else {
		$subject = trim($_POST['subject']);
	}

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!filter_var( trim($_POST['email'], FILTER_VALIDATE_EMAIL ))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'multicomak@gmail.com'; // Put your own email address here
		$body = "Name: $name \n\nEmail: $email \n\nPhone Number: $phone \n\nSubject: $subject \n\nComments:\n $comments";
		$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>
<!DOCTYPE html>
<html>
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0, minimum-scale=1, user-scalable=yes, minimal-ui">
        <meta name="HandheldFriendly" content="true" />
        <meta name="MobileOptimized" content="width" />
        <meta name="apple-mobile-web-app-title" content="Fabmi-Fabulous">
        <meta name="mobile-web-app-title" content="Fabmi-Fabulous">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=yes">
        <meta name="format-detection" content="date=no">
        <meta name="format-detection" content="address=yes">
        <meta name="format-detection" content="email=yes">
        <title>Fabmi-Fabulous</title>
        <link rel="icon" sizes="72x72" href="icon/Icon.png" />
        <link rel="icon" sizes="192x192" href="icon/Icon@3x.png">
        <link rel="icon" sizes="72x72" href="icon/Icon.png" />
        <link rel="shortcut icon" href="icon/some.ico" />
        <link rel="apple-touch-icon" sizes="57x57" href="icon/Icon.png"/>
        <link rel="apple-touch-icon" sizes="72x72" href="icon/Icon@2x.png"/>
        <link rel="apple-touch-icon" sizes="114x114" href="icon/Icon@2x.png"/>
        <link rel="apple-touch-icon" sizes="1192x192" href="icon/Icon@3x.png"/>
        <link rel="apple-touch-startup-image" href="ios/Icon.png" />
        <link href="css_n/bootstrap.css" rel="stylesheet">
        <link href="css_n/screen.css" rel="stylesheet">
        <link href="icon/flaticon.css" rel="stylesheet">
        <link href="css_n/ripples.min.css" rel="stylesheet">
        <link href="css_n/form-one-touch-function.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-60782677-1', 'auto');
          ga('require', 'linkid', 'linkid.js');
          ga('send', 'pageview');


        </script>
        </head>
        <body data-spy="scroll" data-target=".navbar" data-offset="70">
<header class="navbar navbar-dark motion" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
          <div class="container-fluid"> <a  class="navbar-toggler navbar-toggleable-sm pull-left " data-toggle="collapse" data-target=".navbar-toggleable"> <i class="flaticon-lines7"></i></a> <a class="navbar-brand pull-left motion" href="" title="Fabmi -Fabulous"> </a>
    <ul class="nav navbar-nav hidden-sm-down">
              <li><a href="#howitwork" class=""> <span>HOW IT WORKS</span> <i class="flaticon-triptych1 hidden-md-up"></i> </a></li>
              <li><a href="#whyfab"> <span>WHY FABMI</span> <i class="flaticon-favorite36 hidden-md-up"></i> </a></li>
              <li><a href="#testimanl"> <span>TESTIMONIALS</span> <i class="flaticon-user295 hidden-md-up"></i> </a></li>
              <li><a href="#contctus"> CONTACT US <i class="flaticon-pin133 hidden-md-up"></i></a></li>
            </ul>
    <ul class="nav pull-right nav-toolbar">
              <li class="hidden-md-down"><a class="btn btn-lets pull-right btn-secondary bordered" href="letsconnect.html"><span class="">LETS START</span> </a></li>
              <li class="hidden-lg-up"><a class="btn btn-round bordered" href="letsconnect.html"><i class="flaticon-write15"></i> </a></li>
            </ul>
  </div>
        </header>
<nav class="navbar-toggleable hidden-md-up motion"> <a href="#scrrol-down" class=""> <i class="flaticon-triptych1 hidden-md-up"></i> <span>HOW IT WORKS</span> </a> <a href="#whyfab"> <i class="flaticon-favorite36 hidden-md-up"></i> <span>WHY FABMI</span> </a> <a href="#testimanl"><i class="flaticon-user295 hidden-md-up"></i> <span>TESTIMONIALS</span> </a> <a href="#contctus"> <i class="flaticon-pin133 hidden-md-up"></i>CONTACT US </a> </nav>
<div class="carousel motion" >
          <div class="carousel-inner">
    <div class="carousel-item i-1 active" data-type="background" data-speed="3">
              <div class="carousel-caption scrrol-fade  text-center text-uppercase" data-type="content" data-speed="40">
        <div  class="caption-box">
                  <h1 class="display-6"> discover your FAB self</h1>
                  <h4 class="">Connect with a personal stylist to find clothes/look you will l<i class="flaticon-favorite36 text-info"></i>ve. </h4>
                  <div class="lets-start">
            <h5 class="h2"> <strong>Completely FREE</strong></h5>
            <a class="btn  btn-primary btn-lg" href="letsconnect.html">Lets Starts </a> </div>
                </div>
      </div>
            </div>
  </div>
          <a class="btn btn-round btn-down btn-secondary" href="#howitwork" ><i class="flaticon-directional25 h2"></i> </a>
          <div class="sr-only scroll" id="howitwork"></div>
        </div>
<main class="main-content motion">
          <article class="fm-it-work"  data-type="background" data-speed="30">
    <div class="content">
              <div class="container">
        <h1 class="text-xs-left text-sm-center text-primary display-5"> HOW IT WORKS</h1>
        <ul class="nav fm-service">
                  <li>
            <aside class="fm-service-box pull-left text-right">
                      <h3 class="text-right text-primary h2	"><strong>Connect</strong></h3>
                      <p class="lead text-justify"> Complete your style quiz and a personal stylist will get right back in touch. </p>
                    </aside>
            <aside class="fm-service-box pull-right">
                      <figure class="figure pull-left"> <img src="image_n/conncet.jpg"  class="img-responsive"> </figure>
                    </aside>
          </li>
                  <li>
            <aside class="fm-service-box pull-right text-left">
                      <h3 class="text-left text-primary h2"><strong>Select</strong></h3>
                      <p class="lead text-justify"> Your stylist handpicks selections to suit your profile and requirements, and sends you an online preview to select from. </p>
                    </aside>
            <aside class="fm-service-box pull-left">
                      <figure class="figure pull-right text-right"> <img src="image_n/select.jpg"  class="img-responsive"> </figure>
                    </aside>
          </li>
                  <li>
            <aside class="fm-service-box pull-left text-right">
                      <h3 class="text-right text-primary h2"><strong>Buy</strong></h3>
                      <p class="lead text-justify"> Try the clothes at the comfort of your home. Keep what makes you feel FAB! We pick the rest. </p>
                    </aside>
            <aside class="fm-service-box pull-right">
                      <figure class="figure pull-left"> <img src="image_n/buy.jpg"  class="img-responsive"> </figure>
                    </aside>
          </li>
                </ul>
      </div>
            </div>
  </article>
          <article class="fm-benfit">
    <div class="content">
              <div class="container-fluid">
        <h2 class="text-light display-5 ttext-xs-left text-sm-center">BENEFITS</h2>
        <div class="row">
                  <ul class="nav h2 nav-fm-benfit text-xxl-center">
            <li class="col-sm-6 col-sm-4 col-lg-4  col-lg-4 col-xxl-3"><span>Personalised selection</span> </li>
            <li class="col-sm-6 col-sm-4 col-lg-4 col-xxl-3"> <span>Free  shipping, including return</span> </li>
            <li class="col-sm-6 col-sm-4 col-lg-4 col-xxl-3"> <span>On your schedule </span></li>
            <li class="col-sm-6 col-sm-4 col-lg-4 col-xxl-3"> <span>Better every time</span> </li>
          </ul>
                </div>
      </div>
            </div>
  </article>
          <article class="fm-why" id="whyfab" data-type="background" data-speed="30">
    <div class="content">
              <div class="container-fluid">
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-xl-6 pull-right fm-why-box">
                  <h2 class="text-dark display-5">WHY FabMi</h2>
                  <P class="text-justify">Will this look good on me? I have spent so much time deciding what to buy! I hate shopping!! Wish someone help updating my wardrobe! No idea how to create a full outfit.</P>
                  <p class="text-justify"> If you have gone through these thoughts while shopping, you are not alone. Moreover an outfit looking good on model may not necessarily look good on everyone!</p>
                  <p class="text-justify"> Say Hello! to your very best shopping friend/ stylist--FabMi! At FabMi, the stylist handpick fashion styles from leading offline/ online stores to match the customer's requirements, style, size and preferences. With Zero work you end up looking and feeling Fabulous...<I class="flaticon-emoticon85 text-dark"></I></p>
                  <aside class="smile-pls lead text-primary invisible">YOU <I class="flaticon-emoticon85 text-dark"></I> </aside>
                </div>
      </div>
            </div>
  </article>
          <article class="fm-testimonials" id="testimanl" >
    <div class="content">
              <div class="container">
        <h2 class="display-5 text-light  text-xs-left text-sm-center">TESTIMONIALS</h2>
        <div class="fm-testimonial-wrapper">
                  <ul class="nav fm-testimonial">
            <li>
                      <h3 class="h2"> Great Shopping Experience</h3>
                      <p class="lead text-light">This is totally a new and an awesome experience. I have always preferred shopping online because you get to choose from the variety of apparels under one roof. I came across this site recommended by a friend of mine and trust me ever since I am hooked on to it. I can now say I have a personal stylist.</p>
                      <div class="fm-author pull-right">
                <figure class="author-pic pull-right"> <img src="image_n/avatar_1.jpg" class="" alt="Author image"></figure>
                <span class="fm-author-info"> Asha Krishnamurthy </span> </div>
                    </li>
            <li>
                      <h3 class="h2">Right Dress for Me</h3>
                      <p class="lead text-light">I was looking for a dark coloured evening dress for myself and asked FabMi to find one suitable for my body type. Received a mail with a number of options and finally zeroed on one blue colour dress. When the package arrived I was little skeptical whether it would suit me or not but all my doubts were put to rest after I tried the dress as it not only suited me well but also looked very good. Thank you FabMi.</p>
                      <div class="fm-author pull-right">
                <figure class="author-pic pull-right"> <img src="image_n/avatar_2.jpg" alt="Author image"></figure>
                <span class="fm-author-info"> Arti Joshi </span> </div>
                    </li>
            <li>
                      <h3 class="h2"> Busy Schedule</h3>
                      <p class="lead text-light">FabMi came as ultimate saviour for me in resolving my shopping dilemmas added with my busy and hectic schedule.FabMi's personalized styling consulting helped me to finally find my-style. On top of that its doorstep service saved my weekends of standing in long queues of trial room. Thanks FabMi !!</p>
                      <div class="fm-author pull-right">
                <figure class="author-pic pull-right"></figure>
                <span class="fm-author-info"> Bandana Bhalla</span> </div>
                    </li>
          </ul>
                </div>
        <div class="m-x-auto text-center"> <a class="btn btn-round text-gray fm-see-all" data-toggle="tooltip" data-placement="top"  title="All Testimonial"><i class="flaticon-list26"></i> </a> </div>
      </div>
            </div>
  </article>
        </main>
<footer class="footer motion" id="contctus">
          <div class="content">
    <div class="container-fluid">
              <h2 class="display-5 text-primary text-center text-xs-left text-sm-center">CONTACT US</h2>
              <h5 class="text-dark text-uppercase text-xs-left text-sm-center">We love to hear from you</h5>
              <div class="row">
        <aside  class="col-xs-12  col-sm-12  col-md-12  col-lg-6 col-xl-6 ">
                  <ul class="nav nav-list">
            <li class="col-100 h2"> <a class="text-dark motion" href="mailto:connect.fabmi@gmail.com"> <i class="flaticon-letter121 display-1"></i> connect.fabmi@gmail.com</a> </li>
            <li class="col-100 h2"> <a class="text-success" href="tel:9686177334"><i class="flaticon-whatsapp display-1"></i> +91 9686177334 </a></li>
          </ul>
                </aside>
        <aside class="col-xs-12  col-sm-12  col-md-12  col-lg-6 col-xl-6 col-xxl-5 pull-right ">
                      <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
            <ul class="nav nav-form row-gutter">
             <?php if(isset($emailSent) && $emailSent == true) {  ?>
            <li class="form-group  col-100 pull-left alert alert-success fade in">
             
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button
                ><p><strong>Message Successfully Sent!</strong></p>
                <p>Thanks for contacting us!  <strong><?php echo $name;?></strong>! </p>

              </li>
            <?php } ?>
                       
                      <li class="form-item form-group  col-100 col-sm-50 pull-left">
                <label class="label-holder" for="edit-ss-email">NAME <span class="form-required" title="This field is required.">*</span></label>
                <input clicktimes="1" type="text" id="contactname" name="contactname" class="form-text">
                <span class="form-text-helper">Please fill out this field</span> </li>
                      <li class="form-item form-require form-group col-100 col-sm-50 pull-right">
                <label class="label-holder" for="edit-ss-email">EMAIL <span class="form-required" title="This field is required.">*</span></label>
                <input clicktimes="1" type="email"  id="email" name="email"  required class="form-text">
                <span class="form-text-helper">Please fill out this field</span> </li>
                      <li class="form-item form-group  col-100 col-sm-50 pull-left">
                <label class="label-holder" for="edit-ss-email">PHONE <span class="form-required" title="This field is required.">*</span></label>
                <input clicktimes="1" type="tel" id="phone" name="phone"  class="form-text">
                <span class="form-text-helper">Please fill out this field</span> </li>
                      <li class="form-item form-group col-100 col-sm-50 pull-right">
                <label class="label-holder" for="edit-ss-email">SUBJECT <span class="form-required" title="This field is required.">*</span></label>
                <input clicktimes="1" type="text"  name="subject" id="subject" class="form-text required">
                <span class="form-text-helper">Please fill out this field</span> </li>
                      <li class="form-item multiline form-group  col-100 pull-left">
                <label class="label-holder" for="edit-ss-email">COMMENT <span class="form-required" title="This field is required.">*</span></label>
                <textarea  class="form-text" id="message" name="message" required></textarea>
                <span class="form-text-helper">Please fill out this field</span> </li>
                      <li class="col-100 col-sm-60 pull-left text-xs-center text-lg-left">
                <div class="g-recaptcha"  data-theme="light"  data-sitekey="6Ld5DxQTAAAAAILZzMEOQh7he4FAzl87gKsJH_HO"></div>
              </li>
                      <li class="col-100 col-sm-40 pull-right text-xs-center text-lg-right">
                <input type="submit" value="Send" name="submit" id="submitButton" class="btn btn-secondary">
              </li>
                    </ul>
          </form>
                </aside>
      </div>
            </div>
  </div>
        </footer>
<footer class="footer-bottom text-light motion">
          <div class="item-box"> <a  href="https://facebook.com/fabmi.in" target="_blank"><i class="flaticon-facebook48"></i></a> </a></div>
          <div class="item-box"><a  href="https://twitter.com/fab_mi" target="_blank"> <i class="flaticon-twitter42"></i></a> </div>
          <div class="item-box"><a  href="mailto:connect.fabmi@gmail.com" target="_blank"> <i class="flaticon-letter121"></i> </a></div>
          <div class="item-box"><small class="text-uppercase text-gray">© 2015 Powered by FabMi™. All Rights Reserved.</small></div>
        </footer>
<div class="fm-testimonial-all">
          <div class="fm-testimonial-all-wrapper">
    <ul class="nav list-item">
              <li class="fm-testimonial-item col-xs-12 col-md-6 col-xl-4">
        <h3 class="h2"> Great Shopping Experience</h3>
        <p class="text-dark">This is totally a new and an awesome experience. I have always preferred shopping online because you get to choose from the variety of apparels under one roof. I came across this site recommended by a friend of mine and trust me ever since I am hooked on to it. I can now say I have a personal stylist.</p>
        <div class="fm-author pull-right">
                  <figure class="author-pic pull-right"> <img src="image_n/avatar_1.jpg" alt="Author image"></figure>
                  <span class="fm-author-info"> Asha Krishnamurthy </span> </div>
      </li>
              <li class="fm-testimonial-item col-xs-12 col-md-6 col-xl-4">
        <h3 class="h2">Right Dress for Me</h3>
        <p class="text-dark">I was looking for a dark coloured evening dress for myself and asked FabMi to find one suitable for my body type. Received a mail with a number of options and finally zeroed on one blue colour dress. When the package arrived I was little skeptical whether it would suit me or not but all my doubts were put to rest after I tried the dress as it not only suited me well but also looked very good. Thank you FabMi.</p>
        <div class="fm-author pull-right">
                  <figure class="author-pic pull-right"> <img src="image_n/avatar_2.jpg" alt="Author image"></figure>
                  <span class="fm-author-info"> Arti Joshi </span> </div>
      </li>
              <li class="fm-testimonial-item col-xs-12 col-md-6 col-xl-4">
        <h3 class="h2"> Busy Schedule</h3>
        <p class="text-dark">FabMi came as ultimate saviour for me in resolving my shopping dilemmas added with my busy and hectic schedule.FabMi's personalized styling consulting helped me to finally find my-style. On top of that its doorstep service saved my weekends of standing in long queues of trial room. Thanks FabMi !!</p>
        <div class="fm-author pull-right">
                  <figure class="author-pic pull-right"> </figure>
                  <span class="fm-author-info"> Bandana Bhalla</span> </div>
      </li>
            </ul>
  </div>
          <!-- fm-testimonial-all-wrapper --> 
          
          <a href="#0" class="close-btn">Close</a> </div>
<!-- fm-testimonial-all --> 
<script src="js_n/jquery-1.10.2.min.js"></script> 
<script src="js_n/bootstrap.min.js"></script> 
<script type="text/javascript">
	$(document).ready(function(){
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 56) 
		{
             $(".navbar-dark").addClass("navbar-fixed-top");			 	
        }

		else {
             $(".navbar-dark").removeClass("navbar-fixed-top");
			  $(".navbar-dark").removeClass("navbar-light");
			  $(".nav-toolbar .btn-lets").addClass("btn-secondary").removeClass("btn-primary");
        }
    });
  });		
      
$(document).ready(function(){
    $(".navbar-toggler").click(function(){
        $("body").toggleClass("nav-slide-left");
    });
});
$(document).ready(function(){
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 500) 
		{
             $(".navbar-dark").addClass("navbar-light");
			 $(".nav-toolbar .btn-lets").addClass("btn-primary").removeClass("btn-secondary");
	 	
        }	
    });
  });		
 $(window).scroll(function(){var topWindow=$(window).scrollTop();var topWindow=topWindow*1.8;var windowHeight=$(window).height();var position=topWindow/windowHeight;position=1-position;$('.carousel-caption').css('opacity',position);});
 
$(function(){$("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var t=$(this.hash);if(t=t.length?t:$("[name="+this.hash.slice(1)+"]"),t.length)return $("html,body").animate({scrollTop:t.offset().top},1e3),!1}})});

$(document).ready(function() {  
	//On Click Event
	$(".navbar-nav a").click(function() {
		$(".navbar-nav a").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
	});

});


$(document).ready(function () {
window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
    });
}, 4000);
 
});

</script> 
<script src="js_n/ripples.min.js"></script> 
<script src="js_n/material.min.js"></script> 
<script>
  
            $(document).ready(function() {
                // This command is used to initialize some elements and make them work properly
                $.material.init();
            });
        
  
  </script> 
<script>
// makes the parallax elements
function parallaxIt() {

  // create variables
  var $fwindow = $(window);
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  // on window scroll event
  $fwindow.on('scroll resize', function() {
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  }); 
  $('[data-type="content"]').each(function (index, e) {
    var $contentObj = $(this);
    var fgOffset = parseInt($contentObj.offset().top);
    var yPos;
    var speed = ($contentObj.data('speed') || 1 );

    $fwindow.on('scroll resize', function (){
      yPos = fgOffset - scrollTop / speed; 

      $contentObj.css('top', yPos);
    });
  });
  $('[data-type="background"]').each(function(){
    var $backgroundObj = $(this);
    var bgOffset = parseInt($backgroundObj.offset().top);
    var yPos;
    var coords;
    var speed = ($backgroundObj.data('speed') || 0 );

    $fwindow.on('scroll resize', function() {
      yPos = - ((scrollTop - bgOffset) / speed); 
      coords = '50% '+ yPos + 'px';

      $backgroundObj.css({ backgroundPosition: coords });
    }); 
  }); 
  $fwindow.trigger('scroll');
};

parallaxIt();
 </script> 
<script src="js_n/validation.js"></script> 
<script src="js_n/jquery.flexslider-min.js"></script> 
<script src="js_n/main.js"></script> 
<script src="js_n/nprogress.js"></script> 
<script>	
	$(function(){

 NProgress.start();
    setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 2000);
 
});

</script>
</body>
</html>
