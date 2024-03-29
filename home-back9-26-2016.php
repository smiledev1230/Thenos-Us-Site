<?php
if($_GET['click']!='model'){$home=true;}
include("includes/header.php");
?>
<?
if($_GET['click']!='model'){
?>
<link rel="stylesheet" href="css/app.css">
<section id="home1" class="home" >

    <main role="main" class="main col-sm-12">
          
      <div class="row" style="padding-top:20px;">
        <div class="flexslider">
            <ul class="slides">
                <li class="flex-active-slide">
                    <div class="img-area yt-video-section" data-yt-video="KYqv_5TN-VM">
                    	<div class="mailbgplaybox">
                        <img alt="playbox" src="/images/mainbg.jpg" draggable="false">
                        </div>
                        
                        <div class="tubular-container" id="tubular-container-0">
                        <iframe frameborder="0" class="tubular-player" id="tubular-player-0" allowfullscreen="1" title="YouTube video player" src="https://www.youtube.com/embed/S0M978Z1M0o?version=3&amp;autoplay=0&amp;controls=0&amp;showinfo=0&amp;modestbranding=1&amp;wmode=transparent&amp;rel=0&amp;loop=1&amp;enablejsapi=1"  ></iframe>
                        </div>
                        <div class="tubular-shield" id="tubular-shield-0"></div>
                    
                    </div>
                    
                    <div class="flex-caption caption-right">
                    <h2>the</h2>
                        <h1>PlayBox<sup style="font-size:14px !important;vertical-align:top; top:0px">TM</sup> </h1>
                        <h2>by thenos - wall-box for the Sonos® Play:1™</h2>
                        <p>
                            <a class="btn btn-primaryvideo nohover" href="http://www.thenos.us/index.php?route=product/category&path=59">SHOP NOW</a> 
                            <a class="play-button" href="http://www.thenos.us/home.php#vid">Watch Video 
                                <span class="glyphicon glyphicon-play glyphicon-align-right" aria-hidden="true"></span>
                            </a> 
                        </p>
                    </div>
                    
                </li>
            </ul>
        </div>
    </div>
    
      </main>


      
</section><!--end-->
        

<script>
var bgImageArray = ["4.jpg","1.jpg", "2.jpg", "8.jpg"],
base = "http://www.thenos.us/image/",
secs = 4;
bgImageArray.forEach(function(img){
    new Image().src = base + img; 
    // caches images, avoiding white flash between background replacements
});

function backgroundSequence() {
	window.clearTimeout();
	var k = 0;
	for (i = 0; i < bgImageArray.length; i++) {
		setTimeout(function(){ 
			document.getElementById("home").style.background = "url(" + base + bgImageArray[k] + ") no-repeat center center fixed";
			document.getElementById("home").style.backgroundSize ="cover";
		if ((k + 1) === bgImageArray.length) { setTimeout(function() { backgroundSequence() }, (secs * 1000))} else { k++; }			
		}, (secs * 1000) * i)	
	}
}
backgroundSequence();
</script>
            <section id="home" class="home" >
            
		              <div class="surface-wrap"><!-- <div id="surface"></div>--></div>
                <div class="canvas-wrap"><!--<canvas id="canvas"></canvas>--></div>
                <div class="overlay">

                    <div class="container slider-container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="home-intro-half st-2nd-half">
                                    <!--Header text -->
                                    <h1><strong>meet the PlayBox<sup>&trade;</sup> by thenos</strong></h1>
                              <h3><strong> the original and only wall-box for the Sonos<sup>&reg;</sup> Play:1<sup>&trade;</sup></strong> 
take your Play:1<sup>&trade;</sup> from tabletop to in-wall and get rid of 

unsightly cords...   </h3>

                                    <!--DOWNLOAD BUTTON -->
                                    <div class="download-button">
                                    	 <a href="#features" class="btn download-btnhome">features</a>
                                        <a href="http://www.thenos.us/commercial.php" class="btn download-btnhome">commercial model</a>

                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="home-intro-2nd-half st-half">
                                    <img src="images/homeblackwhite.png" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
 


      
        </section><!--end-->
        
<?
}
//hide if goto models section
?>
            <!-- Feature Section-->



            <section id="features" class="sections">
                <div class="container">
                    <div class="row">
                        <br />
<br />

                          <!--  Heading-->
                        <div class="heading" >
                            <div class="title text-center"><h1>PlayBox<sup>&trade;</sup> overview</h1></div>
                            <div class="subtitle text-center "><h5>the PlayBox<sup>&trade;</sup> by thenos - wall-box for the Sonos<sup>&reg;</sup> Play:1<sup>&trade;</sup></h5></div>
                            <div class="separator text-center"></div>
                        </div>
                        <div class="featuers-lists">
                            <!-- FEATURES LEFT -->
                            <div class="col-sm-4">
                                <ul class="features-list text-right " style="visibility: visible;">
                                    <li class="features-list-item">
                                        <h4>invented by installers</h4>
                                        <p>created by installers, every aspect of the PlayBox<sup>&trade;</sup> was designed 

with custom installation in mind
</p>
                                    </li>
                                    <li class="features-list-item">
                                        <h4>showcase it, don't cover it</h4>
                                        <p>taking inspiration from a diamond in a 
jewelry box the PlayBox<sup>&trade;</sup> is designed to 

neatly nest and showcase the Sonos<sup>&reg;</sup> Play:1<sup>&trade;</sup></p>
                                    </li>
                                    <li class="features-list-item">
                                        <h4>color options</h4>
                                        <p>available in two colors: arctic white or stealth black to match the Play:1<sup>&trade;</sup></p>
                                    </li>
                                </ul>
                            </div>

                            <!-- PHONE IMAGE -->
                            <div class="col-sm-4 text-center">
                                <div class="features-img"style="visibility: visible;">
                                    <img src="images/PlayBox-Overview3.png" alt="App Feature Image" style="border-radius: 0px; border: 1px none rgb(86, 86, 86);">
                                </div>
                            </div>

                            <!-- FEATURES RIGHT -->
                            <div class="col-sm-4">
                                <ul class="features-list "  style="visibility: visible;">
                                    <li class="features-list-item">
                                        <h4>customize away</h4>
                                        <p></p><div>
	the faceplate to the PlayBox<sup>&trade;</sup> is easily 
	custom painted or even vinyl wrapped 
	to allow for a designer touch<br>
</div><p></p>
                                    </li>
                                    <li class="features-list-item">
                                        <h4>power options</h4>
                                        <p>an integrated recessed outlet is designed into the PlayBox<sup>&trade;</sup> and provides hidden power for the Play:1<sup>&trade;</sup>, a power relocation kit is also available<br></p>
                                    </li>
                                    <li class="features-list-item">
                                        <h4><span style="color:#4C9EDA">NEW!</span> hide those cords</h4>
                                        <p>a smart cable management system takes the standard Play:1<sup>&trade;</sup> cable and  neatly conceals it away while still meeting code requirements</p>
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </section><!--end-->

            <!-- DOWNLOAD Section-->
            <section id="download" class="download-bg-img">
                <div class="overlay-img">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="download-full-width white-text">

                                    <!--  Heading-->
                                    <div class="heading wow fadeIn " data-wow-offset="120" data-wow-duration="1.5s">
                                        <div class="title text-center"><h1>yep, it's invented by installers</h1></div>
                                        <div class="subtitle text-center "><h5>the PlayBox<sup>&trade;</sup> was born of expertise from both product design and the custom installation field</h5></div>
                                        <div class="separator-min-height text-center"></div>
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-2 wow fadeIn " data-wow-offset="120" data-wow-duration="1.5s">
                                        
                                        <p></p>
                                        <div class="download-button only-button wow fadeIn " data-wow-offset="120" data-wow-duration="1.5s">
                                            <a href="http://www.thenos.us/index.php?route=product/category&path=59" class="btn download-btnhome">shop</a>
                                            <a href="#faq" class="btn download-btnhome">FAQs</a>
<a name="whatis" id="whatis"></a>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end col -->
                        </div>
                    </div>
                </div>
            </section><!--end-->


            <!-- Describe Section-->
            <section id="describe" class="sections describe">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">

                            <!--  Heading-->
                            <div class="heading black-text wow fadeIn " data-wow-offset="120" data-wow-duration="1.5s">
                                <div class="title-half"><h1>what is a PlayBox<sup>&trade;</sup>?</h1></div>
                                <div class="subtitle-half"><h5>a bridge between high-fidelity audio and sharp style</h5></div>
                                <div class="separator-left"></div>
                            </div>


                            <div class="describe-details wow fadeInLeft " data-wow-offset="10" data-wow-duration="1.5s">
                                <p>
                The PlayBox<sup>&trade;</sup> is an in-wall enclosure specifically designed for your Sonos<sup>&reg;</sup> Play:1<sup>&trade;</sup>. The PlayBox<sup>&trade;</sup> preserves that warm, full textured sound that Sonos speakers are known for while allowing for a custom architectural look.  <br>
<br>

It’s a common situation: that rich sounding Sonos<sup>&reg;</sup> Play:1<sup>&trade;</sup> just has no perfect place to live. You place it on a table, credenza, or randomly on a counter but it gets knocked around, accidentally unplugged… and that messy cord! <br>
<br>

Enter the PlayBox<sup>&trade;</sup> by thenos - it’s like having your cake while eating more delicious cake.<br><br>

<a href="#models" class="btn btn-default download-btnblue">models</a>
                                </p>
                            </div>
                        </div><!--end half-->

                        <div class="col-md-6 wow fadeInRight " data-wow-offset="10" data-wow-duration="1.5s">
                            <div class="text-center describe-images">
                                <img src="images/uploads/PlayBox-home-halfB.png" class="text-center" alt="" style="border-radius: 0px; border: 1px none rgb(86, 86, 86);">
                            </div><!--end images-->
                        </div><!--end half-->


                    </div><!--end row-->
                </div><!--end container-->
            </section><!--end section--><!--end-->

            <!-- Describe Section-->
            <section id="describe" class="sections describe">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">

                            <!--  Heading-->
                            <div class="heading black-text wow fadeIn " data-wow-offset="120" data-wow-duration="1.5s">
                                <div class="title-half"><h1>designed for all applications</h1></div>
                                <div class="subtitle-half"><h5>invented by installers, but with everyone in mind</h5></div>
                                <div class="separator-left"></div>
                            </div>


                            <div class="describe-details wow fadeInLeft " data-wow-offset="10" data-wow-duration="1.5s">
                                <p>
                                 We took all the knowledge gained from installing speakers systems within thousands of homes and businesses and created the PlayBox<sup>&trade;</sup>.<br>
<br>
Create a whole home audio system that sounds incredible and also looks amazing or integrate the PlayBox<sup>&trade;</sup> as part of your Sonos surround sound system. Multiple versions will be available for residential and commercial so it’s an easy choice to integrate the PlayBox into your home or business.<br>
<br>

Fit the PlayBox<sup>&trade;</sup> into in any kitchen, living space, media/theater room, bedroom, bathroom (well, you get the idea).
                                </p>
                            </div>
                        </div><!--end half-->

                        <div class="col-md-6 wow fadeInRight " data-wow-offset="10" data-wow-duration="1.5s">
                            <div class="text-center describe-images">
                                <img src="images/apps.png" class="text-center" alt="">
                            </div><!--end images-->
                        </div><!--end half-->


                    </div><!--end row-->
                </div><!--end container-->
            </section><!--end section--><!--/-->
   <!-- Describe Section-->
            <section id="describe" class="sections">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-push-6">


                            <!--  Heading-->
                            <div class="heading black-text wow fadeIn " data-wow-offset="120" data-wow-duration="1.5s">
                                <div class="title-half"><h1> 
sleek, hidden and elegant
</h1></div>
                                <div class="subtitle-half"><h5>no visible cords, no tampering and thus no problems
</h5></div>
                                <div class="separator-left"></div>
                            </div>


                            <div class="describe-details wow fadeInRight " data-wow-offset="10" data-wow-duration="1.5s">
                                <p>Sometimes package design can be as beautiful (and useful) as the product itself; think a Vintage Cabernet inside its original crate. A Swiss Watch resting in a custom case. A shiny pearl inside an oyster... <br>
<br>
The PlayBox<sup>&trade;</sup> was designed to take the incredible Play:1<sup>&trade;</sup> by Sonos and place it where a speaker is best suited - in the wall. The minimalist design of the PlayBox<sup>&trade;</sup> elegantly provides the ideal location for one or multiple speakers. <br>
<br>
Now the rich, warm sound that is found within the Play:1 can be beautifully integrated into any environment.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-pull-6">
                            <div class="text-center describe-images wow fadeInLeft " data-wow-offset="10" data-wow-duration="1.5s">
                                <img src="images/oyster-in-a-pearl-reversed2.png" class="text-center" alt="">
                            </div><!--end images-->
                        </div>
                    </div><!--end row-->
                </div><!--end container-->
            </section><!--end section--><!--end-->


         
            <!-- testimonial Section-->
            <section class="testimonial" style="background: url(images/test2.jpg) no-repeat center top fixed;-moz-background-size:cover;background-size:cover;    -webkit-background-size:cover;-o-background-size:cover;width:100%;overflow: hidden;">
                <div class="overlay-img">
                    <div class="container">
                        <div class="row">
                            
                            
                            
                            <div class="testimonials">
                                <div class="testimonial-item">
                                    <!--<div class="testimonial-thumb img-circle">
                                        <img class="img-circle" src="images/testimonial/1.jpg" alt="">
                                    </div>!-->
                                    <div class="testimonial-msg"><i class="fa fa-quote-left"></i>
                                        The aesthetic of the store was very important to me, which is why I chose to sleek look of the PlayBoxes<sup>&trade;</sup>.  I get compliments on them all of the time!
                                        <i class="fa fa-quote-right pull-right"></i>
                                    </div>
 <div class="white-separator"></div>
                                    <!--  INFORMATION -->
                                    <div class="testimonial-name">M. Pennington</div>
                                    <div class="testimonial-info">CEO of Mill No. 3 <br>
(women's apparel retailer)</div>
                                </div>
                                <div class="testimonial-item">
                                   <!-- <div class="testimonial-thumb img-circle">
                                        <img class="img-circle" src="images/testimonial/1.jpg" alt="">
                                    </div>!-->
                                    <div class="testimonial-msg"><i class="fa fa-quote-left"></i>
                                        The thenos PlayBox(s)<sup>&trade;</sup> look great in our home and help us keep things looking so elegant.<i class="fa fa-quote-right pull-right"></i>
                                    </div>
 <div class="white-separator"></div>
                                    <!--  INFORMATION -->
                                    <div class="testimonial-name">N. Silverman </div>
                                    <div class="testimonial-info">Dallas, TX</div>
                                </div>
                                <div class="testimonial-item">
                                    <!--<div class="testimonial-thumb img-circle">
                                        <img class="img-circle" src="images/testimonial/1.jpg" alt="">
                                    </div>!-->
                                    <div class="testimonial-msg"><i class="fa fa-quote-left"></i>
                                        As we continually update and modernize our facility the PlayBox<sup>&trade;</sup> by thenos makes a great addition to our music system!
                                        <i class="fa fa-quote-right pull-right"></i>
                                    </div>
 <div class="white-separator"></div>
                                    <!--  INFORMATION -->
                                    <div class="testimonial-name">Dr. Fleming</div>
                                    <div class="testimonial-info">Richardson Dentistry<br>
Richardson, TX</div>
                                </div>
                                   <div class="testimonial-item">
                                    <!--<div class="testimonial-thumb img-circle">
                                        <img class="img-circle" src="images/testimonial/1.jpg" alt="">
                                    </div>!-->
                                    <div class="testimonial-msg"><i class="fa fa-quote-left"></i>
                                        We planned on pre-wiring a 1700 sq ft space for 6-10 pendant speakers that wired back to an amplifier, with hardlined sources then we heard about the PlayBox<sup>&trade;</sup>. We installed two of them in the space. Man! The sound is incredible, it fills the entire room with volume to spare (even when full of noisy room chatter). The PlayBox(s)<sup>&trade;</sup> make the Sonos speakers look so sleek and blend right into the wall.
                                        <i class="fa fa-quote-right pull-right"></i>
                                    </div>
 <div class="white-separator"></div>
                                    <!--  INFORMATION -->

                                    <div class="testimonial-name">CEO of Top Rated Custom Integrator </div>
                                    <div class="testimonial-info">Dallas/Ft Worth, TX</div>
                                </div>
                            </div>
                            </div>
                            
                             
                        
                             <span class="anchormodel" id="model1"></span>
                            <a name="models" id="models"></a>   
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial Section End--><!--/-->

            <!-- Service Section-->
            <section id="service" class="sections colorsbg">
                <div class="container">
                    <div class="row">
                        <div class="heading">
                                        <div class="title text-center"><h1>models</h1></div>
                                        <div class="separator-min-height text-center" style="background-color: #fff;"></div>
                                        <p class="text-center"><a href="/Thenos PlayBox Spec Sheet 2016.pdf" target="_blank"  style="color:white"><img src="/image/catalog/brochure.png" width="20px" />  view brochure</a><br /><br />

</p>
                                    </div>
                        <div class="col-sm-4">
                        
                            <div class="service text-center" data-wow-offset="120" data-wow-duration="1.5s">
                               <a href="http://www.thenos.us/index.php?route=product/product&path=59&product_id=50" style="color:white"> <img src="images/uploads/PlayBox-Models-PB1-PRO.png" /></a>
                                <h4>PlayBox<sup>&trade;</sup> PRO<br>
Model #: <strong>PB1-PRO</strong></h4>
                                <p>Designed for direct wiring <br>
utilizing the nearest <br>
residential electrical source</p>

                            </div>
                        	<div class="text-center ">
                                        <a href="http://www.thenos.us/index.php?route=product/product&path=59&product_id=50" class="btn download-btn">details/order</a>
                            </div>
                        </div><!--end 4 col-->

                        <div class="col-sm-4">

                            <div class="service text-center " data-wow-offset="120" data-wow-duration="1.5s">
                              <a href="http://www.thenos.us/index.php?route=product/product&path=59&product_id=51" style="color:white"> <img src="images/uploads/PlayBox-Models-PB1-EZ.png" />
                                <h4>PlayBox<sup>&trade;</sup> EZ<br>

                                Model #: <strong>PB1-EZ</strong></h4>
                                <p>
Same as our PRO model with the addition of a power relocation kit. Safely and easily wire the PlayBox<sup>&trade;</sup> then simply plug into the nearest electrcial outlet. 
 
</p></a>
                            </div>
                        	<div class="text-center ">
                                        <a href="http://www.thenos.us/index.php?route=product/product&path=59&product_id=51" class="btn download-btn">details/order</a>
                            </div>
                        </div><!--end 4 col-->

                        <div class="col-sm-4">
                            <div class="service text-center" data-wow-offset="120" data-wow-duration="1.5s">
                             <a href="commercial.php"  style="color:white">    <img src="images/uploads/PlayBox-Models-PB1-COM.png" />
                                <h4>PlayBox<sup>&trade;</sup> COM<br>
Model #: <strong>PB1-COM</strong></h4>
                                <p>The PlayBox<sup>&trade;</sup> that is designed for the commercial environment: restaurant/bar, retail, office, you decide...</p></a>
                            </div>
                            
                        	<div class="text-center ">
                                        <a href="commercial.php" class="btn download-btn">learn more</a>  <a href="http://www.thenos.us/index.php?route=product/product&path=59&product_id=53" class="btn download-btn">pre-order</a>
                            </div>
                        </div><!--end 4 col-->
                    </div><!--end row-->
                </div>
            </section><!--end-->


            <!-- FAQ Section-->
            <section id="faq" class="sections" >
                <div class="container" style="margin-top:20px">
                    <div class="row">

                        <!--  Heading-->
                        <div class="heading wow fadeIn " data-wow-offset="120" data-wow-duration="1.5s">
                            <div class="title text-center"><h1>FAQ's</h1></div>
                            <div class="subtitle text-center "><h5>questions, questions, questions...</h5></div>
                            <div class="separator text-center"></div>
                        </div>
                        <div class="faqs">
                        <div align="center">
 <button id="collapse-init" class="btn btn-primary" style="font-size:small">
    show all
</button> &nbsp; &nbsp;<a href="contact.php" class="btn btn-primary"  style="font-size:small">I have a question</a> 
</div>
<br/><br/> 
    


<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$(function () {

    var active = true;

    $('#collapse-init').click(function () {
        if (active) {
            active = false;
            $('.panel-collapse').collapse('show');
            $('.panel-title').attr('data-toggle', '');
            $(this).text('hide all');
        } else {
            active = true;
            $('.panel-collapse').collapse('hide');
            $('.panel-title').attr('data-toggle', 'collapse');
            $(this).text('show all');
        }
    });
    
    $('#accordion').on('show.bs.collapse', function () {
        if (active) $('#accordion .in').collapse('hide');
    });

});
});//]]> 

</script>                      
                 				
<div class="panel-group" id="accordion"> <div class="col-sm-6 col-md-5 col-lg-6">
                                <div class="panel">
                                    <a class="panel-heading collapsed" data-toggle="collapse" href="#faq1">what is PlayBox<sup>&trade;</sup>?</a> 
                                    <div id="faq1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                        The PlayBox<sup>&trade;</sup> by thenos is a specially designed enclosure that allows you to take your Sonos<sup>&reg;</sup> Play:1<sup>&trade;</sup> speaker and recess it in the wall.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <a class="panel-heading collapsed" data-toggle="collapse" href="#faq2">what is Sonos<sup>&reg;</sup>?</a>
                                    <div id="faq2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Sonos<sup>&reg;</sup> is the smart speaker system that delivers all the music on earth, in every room, with pure, immersive sound. Sonos<sup>&reg;</sup> unites your digital music collection and services in one simple app that you control from any smart device.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <a class="panel-heading collapsed" data-toggle="collapse" href="#faq3">
what is a Play:1<sup>&trade;</sup>?
</a>
                                    <div id="faq3" class="panel-collapse collapse">
                                        <div class="panel-body">The Play:1<sup>&trade;</sup> is a compact tabletop wireless smart speaker by Sonos<sup>&reg;</sup>. The Play:1<sup>&trade;</sup> can be used singular or as a stereo pair. The Play:1<sup>&trade;</sup> is the most widely sold of the Play series of speakers by Sonos<sup>&reg;</sup>. The Play: 1 has achieved a cult like following for its super rich, full-bodied sound that’s crystal clear at any volume. 
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="panel">
                                    <a class="panel-heading collapsed" data-toggle="collapse" href="#faq9">is the PlayBox<sup>&trade;</sup> suitable for residential and commercial installs?</a>
                                    <div id="faq9" class="panel-collapse collapse">
                                        <div class="panel-body">Currently the residential version(s) of the PlayBox<sup>&trade;</sup> are the first to be available. The commercial version of the PlayBox<sup>&trade;</sup>, ideal for Restaurant/Bar, Retail, Office/Corporate will be available soon. <a href="commercial.php" class="btn btn-primary"  style="font-size:small">Tell me more</a>  
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <a class="panel-heading collapsed" data-toggle="collapse" href="#faq6">do you offer something to cover the front of the Play:1 speaker? </a>
                                    <div id="faq6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                           No. And the reason is simple: we don’t want to hide the Play:1<sup>&trade;</sup>, quite the opposite actually… Sonos<sup>&reg;</sup> users are proud of their choice to become apart of the Sonos<sup>&reg;</sup> community and the idea behind the PlayBox<sup>&trade;</sup> design was to showcase the speaker and “cradle it like a diamond in a jewelry box”.
                                        </div>
                                    </div>
                                </div>
                           	</div>
                            <div class="col-sm-6 col-md-5 col-lg-6 faqmobile">
                            
                              
                                <div class="panel">
                                    <a class="panel-heading collapsed" data-toggle="collapse" href="#faq4">who is thenos?</a> 
                                    <div id="faq4" class="panel-collapse collapse">
                                        <div class="panel-body">thenos, LLC is an American company based in Dallas, Texas and is the designer and maker of the PlayBox<sup>&trade;</sup>. The company was founded by installers with the mission of creating the most unique products in the audio/video market. <br>
<!--<a href="about.php" class="btn btn-primary"  style="font-size:small">Read More</a>-->
                                        </div>
                                    </div>
                                </div>  
                                
                                <div class="panel">
                                    <a class="panel-heading collapsed" data-toggle="collapse" href="#faq5">does thenos make other products?</a>
                                    <div id="faq5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                           Currently the PlayBox<sup>&trade;</sup> for the Sonos<sup>&reg;</sup> Play:1<sup>&trade;</sup> is the debut product from thenos. However other products are already in the design stages. Stay Tuned...
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <a class="panel-heading collapsed" data-toggle="collapse" href="#faq7">why not just use in-ceiling/wall speakers instead of the PlayBox<sup>&trade;</sup>?</a>
                                    <div id="faq7" class="panel-collapse collapse">
                                        <div class="panel-body">The PlayBox<sup>&trade;</sup> is perfect fit for those who already own, or insist on a Sonos Play:1 but yet could do without the messy cords. The PlayBox<sup>&trade;</sup> allows you to gain back valuable counter space.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <a class="panel-heading collapsed" data-toggle="collapse" href="#faq8">what colors/finishes are available?</a>
                                    <div id="faq8" class="panel-collapse collapse">
                                        <div class="panel-body">
                                           Currently the PlayBox<sup>&trade;</sup> is available in two colors: Arctic White and Stealth Black. The faceplate can be painted and or wrapped to blend in or even stand out among its surroundings!

                                        </div>
                                    </div>
                                </div>	
                                <div class="panel">
                                    <a class="panel-heading collapsed" data-toggle="collapse" href="#faq10">do I need a license to install the PlayBox<sup>&trade;</sup>? </a>
                                    <div id="faq10" class="panel-collapse collapse">
                                        <div class="panel-body">
                                           Home Owners:<br>

You may install the PlayBox<sup>&trade;</sup> in your own home: The PlayBox<sup>&trade;</sup> features an integrated power supply that requires a high-voltage connection - just like a standard home electrical socket. So the same state/city codes apply just as if you were installing your own ceiling fan or wall socket. Check with your city for local codes and guidelines.
<br>
<br>
<small><strong>
*If you do not feel comfortable or do not posses the electrical knowledge/skill DO NOT ATTEMPT SELF INSTALLATION, consult an electrician or professional installer.</strong>
</small><br>
<br>
Professional Installers:
<br>
thenos offers a wire directly unit, the PlayBox<sup>&trade;</sup> PRO, for wiring into the nearest electrical junction. We also a offer the PlayBox<sup>&trade;</sup> EZ which features a power relocation kit, the PlayBox<sup>&trade;</sup> EZ ships with a male power inlet which allow those without electrical licensing to safely install a PlayBox<sup>&trade;</sup> and then plug it into a nearby 110v outlet.

                                        </div>
                                    </div>
                                </div>
</div>                           
                            </div>
                        </div>
                    </div>
<a name="screenshot" id="screenshot"></a>
                </div>
            </section><div class="padding-twenty"></div><!--/-->


            <!-- Screenshot Section-->
<a name="vid" id="vid"></a>
           
            <section id="videos" class="call-to-action-img">
                <div class="overlay-img">
                    <div class="container">
                        <div class="row">
                            <form lpformnum="1">
                                <div class="col-sm-12">
                                    <div class="title text-center"><h1 style="color:#fff">videos/photos</h1></div>
                            <div class="separator text-center"></div>
                                </div>
                                <div class="col-sm-12">
<link rel="stylesheet" type="text/css" href="http://www.thenos.us/dopts/assets/gui/css/jquery.dop.ThumbnailScroller.css" />
<script type="text/JavaScript" src="http://www.thenos.us/dopts/assets/js/jquery.dop.ThumbnailScroller.js"></script>
<?php
include("carousel.html");
?>

<script type="text/JavaScript">
$(document).ready(function(){
$('#DOPThumbnailScrollerContainer3').DOPThumbnailScroller({'URL': 'http://www.thenos.us/', 'SettingsFilePath': 'http://www.thenos.us/dopts/data/settings3.json', 'ContentFilePath': 'http://www.thenos.us/dopts/data/content3.json'});
});
</script>
<div id="DOPThumbnailScrollerContainer3" style="display: none;"></div>

                                </div>
                            </form>
                            <br>
                        </div>
 <a href="javascript:void(0)" id="vgallery" class="btn download-btnhome">view photos</a>
 
                    </div>
                </div>
            </section>



            <!-- subscription Section-->
            <section id="subscription" class="sections">
                <div class="container">
                    <div class="row">


                        <div class="describe-videos">
                            <div class="col-md-6">

                                <!-- Team Heading-->
                                <div class="heading black-text wow fadeIn  animated animated animated animated animated" data-wow-offset="120" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s;">
                                
   <div class="title-half"><h1>beautiful sound meets a beautiful aesthetic</h1></div>
                                    <div class="subtitle-half"><h5>order the one-of-a-kind PlayBox<sup>&trade;</sup> today!</h5></div>
                                    <div class="separator-left"></div>
                                </div>

                                <p>
                               



                              The residential <a href="http://www.thenos.us/index.php?route=product/product&path=59&product_id=50">PRO</a> &amp; <a href="http://www.thenos.us/index.php?route=product/product&path=59&product_id=51">EZ</a> models of the PlayBox™ are now available. The commercial version of the PlayBox is designated for release <br>
by end of 2nd QTR 2016.<br><br>

                                        <a href="http://www.thenos.us/index.php?route=product/category&path=59" class="btn btn-default download-btnblue">shop</a>
                                        <a href="commercial.php" class="btn btn-default download-btnblue">PlayBox<sup>&trade;</sup> for commercial</a>
                                        <a href="dealer.php" class="btn btn-default download-btnblue">resellers</a>
                            </div>
                        </div> <!--end half-->


                        <div class="col-md-6 subscribe-img">

                            <div class="subscribe-form3">
                                <h2 class="text-center white-text">stay informed:</h2>
                                <p class="white-text">get updates related to thenos and the PlayBox<sup>&trade;</sup></p>
                                <form id="mailchimp" class="subscribe_form subscribe_form3" role="form" novalidate>
                                    <h6 class="subscription-success"></h6>
                                    <h6 class="subscription-error"></h6>
                                    <div class="input-group">
                                        <input class="form-control" type="email" name="EMAIL" id="subscribe_email" placeholder="Enter your email">
                                        <div class="input-group-btn">
                                            <button class="btn" type="submit" id="subscribe_submit"><i class="fa fa-envelope" style="color:#fff"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div><!--end half-->
                    </div>
                </div>

            </section><!--call to action-->
            <section class="call-to-action call-to-action2">
                <div class="container">
                    <div class="row">
                        <form>
                            <div class="col-sm-12">
                                <h1 class="white-text text-center">go ahead, bug us, we dont mind:</h1>
                            </div>
                            <div class="col-sm-12">
                            
                                        <a href="contact.php" class="btn btn-default download-btn" >contact us</a>
                            </div>
                        </form>
                    </div>
                </div>
            </section><!--/-->


<?php
include("includes/footer.php");
?>