<?php
include("includes/header.php");
?>

<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
<script>
var bgImageArray = ["lonely.jpg", "uluwatu.jpg", "carezza-lake.jpg", "batu-bolong-temple.jpg"],
base = "https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/full-",
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
                                    <h1><strong>meet the PlayBox&trade; by thenos :)</strong><br>
invented by installers
<br></h1>
                                    <h3><strong>the original and only wall-box for the Sonos&reg; Play:1</strong> 
take your Play:1 from tabletop to in-wall and 
get rid of unsightly cords...</h3>

                                    <!--DOWNLOAD BUTTON -->
                                    <div class="download-button">
                                        <a href="#" class="btn btn-default download-btn">features</a>
                                        <a href="#" class="btn btn-default download-btn">pre-order</a>

                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="home-intro-2nd-half st-half">
                                    <img src="images/uploads/PlayBox-home-halfB.png" alt="">
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
 


      
        </section><!--end-->
        


            <!-- Feature Section-->



            <section id="features" class="sections">
                <div class="container">
                    <div class="row">
                        
                          <!--  Heading-->
                        <div class="heading wow fadeIn " data-wow-offset="120" data-wow-duration="1.5s">
                            <div class="title text-center"><h1>PlayBox&trade; overview</h1></div>
                            <div class="subtitle text-center "><h5>the PlayBox&trade; by thenos - wall-box for the Sonos&reg; Play:1</h5></div>
                            <div class="separator text-center"></div>
                        </div>
                        <div class="featuers-lists">
                            <!-- FEATURES LEFT -->
                            <div class="col-sm-4">
                                <ul class="features-list text-right wow fadeInLeft " data-wow-duration="1s" style="visibility: visible; -webkit-animation: fadeInLeft 1s;">
                                    <li class="features-list-item">
                                        <h4>invented by installers</h4>
                                        <p>created by installers, every aspect of the PlayBox&trade; was designed 

with custom installation in mind
</p>
                                    </li>
                                    <li class="features-list-item">
                                        <h4>showcase it, don't cover it</h4>
                                        <p>taking inspiration from a diamond in a 
jewelry box the PlayBox&trade; is designed to 

neatly nest and showcase the Sonos&reg; Play:1</p>
                                    </li>
                                    <li class="features-list-item">
                                        <h4>color options</h4>
                                        <p>available in two colors: artic white or stealth black to match the Play:1</p>
                                    </li>
                                </ul>
                            </div>

                            <!-- PHONE IMAGE -->
                            <div class="col-sm-4 text-center">
                                <div class="features-img wow bounceIn  " data-wow-offset="120" data-wow-duration="1.5s" style="visibility: visible;-webkit-animation-duration: 1.5s; -moz-animation-duration: 1.5s; animation-duration: 1.5s;">
                                    <img src="images/uploads/PlayBox High Res EM Version3B smaller1.png" alt="App Feature Image" style="border-radius: 0px; border: 1px none rgb(86, 86, 86);">
                                </div>
                            </div>

                            <!-- FEATURES RIGHT -->
                            <div class="col-sm-4">
                                <ul class="features-list wow fadeInRight " data-wow-duration="1s" style="visibility: visible; -webkit-animation: fadeInRight 1s;">
                                    <li class="features-list-item">
                                        <h4>customize away</h4>
                                        <p></p><div>
	the faceplate to the PlayBox&trade; is easily 
	custom painted or even vinyl wrapped 
	to allow for a designer touch<br>
</div><p></p>
                                    </li>
                                    <li class="features-list-item">
                                        <h4>power options</h4>
                                        <p>an integrated recessed outlet is designed into the PlayBox&trade; and provides hidden power for the Play:1, a power relocation kit is also available<br></p>
                                    </li>
                                    <li class="features-list-item">
                                        <h4><span style="color:#4C9EDA">NEW!</span> hide those cords</h4>
                                        <p>a smart cable management system takes the standard Play:1 cable and  neatly conceals it away while still meeting code requirements</p>
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
                                        <div class="subtitle text-center "><h5>the PlayBox&trade; was born of expertise from both product design and the custom installation field</h5></div>
                                        <div class="separator-min-height text-center"></div>
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-2 wow fadeIn " data-wow-offset="120" data-wow-duration="1.5s">
                                        
                                        <p></p>
                                        <div class="download-button only-button wow fadeIn " data-wow-offset="120" data-wow-duration="1.5s">
                                            <a href="#" class="btn btn-default download-btn">pre-order</a>
                                            <a href="#faq" class="btn btn-default download-btn">FAQs</a>
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
                                <div class="title-half"><h1>what is a PlayBox&trade;?</h1></div>
                                <div class="subtitle-half"><h5>it’s like having your cake while eating more delicious cake</h5></div>
                                <div class="separator-left"></div>
                            </div>


                            <div class="describe-details wow fadeInLeft " data-wow-offset="10" data-wow-duration="1.5s">
                                <p>
                                    
It’s a common situation: that sleek, rich sounding Sonos&reg; Play:1 just has no good place to comfortably sit. You can place it on a table, credenza, or randomly on a counter but it gets knocked around, it’s accidentally unplugged… and that cord!
 <br>
<br>

Enter the PlayBox&trade; by thenos. It’s the bridge between high-fidelity, wireless audio and sharp style. The PlayBox&trade; is in-wall enclosure specifically designed for your Sonos&reg; Play:1. The PlayBox&trade; preserves that warm, full textured sound that the Play:1 has become known for while allowing for a custom “architectural” look. Use the PlayBox&trade; in any kitchen, living room, media/theater room, your bedroom, bathroom (you get the idea).
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
            <section id="describe" class="sections">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-push-6">


                            <!--  Heading-->
                            <div class="heading black-text wow fadeIn " data-wow-offset="120" data-wow-duration="1.5s">
                                <div class="title-half"><h1> 
all good things come in pairs  
</h1></div>
                                <div class="subtitle-half"><h5>audiophile sound + aesthetically pleasing = sweet pair
</h5></div>
                                <div class="separator-left"></div>
                            </div>


                            <div class="describe-details wow fadeInRight " data-wow-offset="10" data-wow-duration="1.5s">
                                <p>Sometimes package design can be as beautiful as the product itself; think a vintage Cabernet inside its original wooden crate. A Swiss watch resting in a custom case. A shiny pearl inside an oyster.
 <br>
<br>

So why just get one? Just as you can use the Play:1’s as a stereo pair or as the rear channels in a surround sound system you can pair your PlayBox&trade;es. The PlayBox&trade; is available singular and in pairs. Mount the PlayBox&trade; at ear level for an immersive movie-theater like experience as part for the Sonos&reg; surround sound system or up higher for full-bodied whole home audio, like there has never been before, or even in a dual stereo configuration (four units) within one room for those who crave a concert-like experience.
 
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-pull-6">
                            <div class="text-center describe-images wow fadeInLeft " data-wow-offset="10" data-wow-duration="1.5s">
                                <img src="images/apps.png" class="text-center" alt="">
                            </div><!--end images-->
                        </div>
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
                                <div class="title-half"><h1>
invented by installers</h1></div>
                                <div class="subtitle-half"><h5>but with everyone in mind</h5></div>
                                <div class="separator-left"></div>
                            </div>


                            <div class="describe-details wow fadeInLeft " data-wow-offset="10" data-wow-duration="1.5s">
                                <p>
                                    The PlayBox&trade; was designed by installers, we took into account all the knowledge gained from installing speaker systems within thousands of homes and businesses and created the PlayBox&trade;.<br>
<br>

 
With multiple versions available for residential and commercial it’s easier than ever to integrate your Sonos&reg;-based theater or distributed audio for your home or business without a limitation on imagination.
<br>
<br>
 
Showcase your speakers anywhere in your location and control each with the Sonos&reg; app on any of your devices. Your wireless, amplifier-free soundstage is now here...
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


            <!-- testimonial Section-->
            <section class="testimonial">
                <div class="overlay-img">
                    <div class="container">
                        <div class="row">
                            
                            
                            
                            <div class="testimonials">
                                <div class="testimonial-item">
                                    <!--<div class="testimonial-thumb img-circle">
                                        <img class="img-circle" src="images/testimonial/1.jpg" alt="">
                                    </div>!-->
                                    <div class="testimonial-msg"><i class="fa fa-quote-left"></i>
                                        The aesthetic of the store was very important to me, which is why I chose to sleek look of the PlayBoxes&trade;.  I get compliments on them all of the time!
                                        <i class="fa fa-quote-right pull-right"></i>
                                    </div>

                                    <!--  INFORMATION -->
                                    <div class="testimonial-name">M. Pennington</div>
                                    <div class="testimonial-info">CEO of Mill No. 3 (women's apparel retailer)</div>
                                </div>
                                <div class="testimonial-item">
                                   <!-- <div class="testimonial-thumb img-circle">
                                        <img class="img-circle" src="images/testimonial/1.jpg" alt="">
                                    </div>!-->
                                    <div class="testimonial-msg"><i class="fa fa-quote-left"></i>
                                        The thenos PlayBox(s)&trade; look great in our home and help us keep things looking so elegant.<i class="fa fa-quote-right pull-right"></i>
                                    </div>

                                    <!--  INFORMATION -->
                                    <div class="testimonial-name">N. Silverman </div>
                                    <div class="testimonial-info">Dallas, TX</div>
                                </div>
                                <div class="testimonial-item">
                                    <!--<div class="testimonial-thumb img-circle">
                                        <img class="img-circle" src="images/testimonial/1.jpg" alt="">
                                    </div>!-->
                                    <div class="testimonial-msg"><i class="fa fa-quote-left"></i>
                                        As we continually update and modernize our facility the PlayBox&trade; by thenos makes a great addition to our music system!
                                        <i class="fa fa-quote-right pull-right"></i>
                                    </div>

                                    <!--  INFORMATION -->
                                    <div class="testimonial-name">Dr. Fleming</div>
                                    <div class="testimonial-info">Richardson Dentistry Richardson, TX</div>
                                </div>
                                   <div class="testimonial-item">
                                    <!--<div class="testimonial-thumb img-circle">
                                        <img class="img-circle" src="images/testimonial/1.jpg" alt="">
                                    </div>!-->
                                    <div class="testimonial-msg"><i class="fa fa-quote-left"></i>
                                        We planned on pre-wiring a 1700 sq ft space for 6-10 pendant speakers that wired back to an amplifier, with hardlined sources then we heard about the PlayBox&trade;. We installed two of them in the space. Man! The sound is incredible, it fills the entire room with volume to spare (even when full of noisy room chatter). The PlayBox(s)&trade; make the Sonos speakers look so sleek and blend right into the wall.
                                        <i class="fa fa-quote-right pull-right"></i>
                                    </div>

                                    <!--  INFORMATION -->
                                    <div class="testimonial-name">CEO of Top Rated Custom Integrator </div>
                                    <div class="testimonial-info">Dallas/Ft Worth, TX</div>
                                </div>
                            </div>
                            </div>
                            
                             
                            
                            
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial Section End--><!--/-->

            
            <!-- Service Section-->
            <section id="service" class="sections colorsbg">
                <div class="container">
                    <div class="row">
                        <div class="heading wow fadeIn " data-wow-offset="120" data-wow-duration="1.5s">
                                        <div class="title text-center"><h1>models</h1></div>
                                        <div class="separator-min-height text-center" style="background-color: #fff;"></div>
                                    </div>
                        <div class="col-sm-4">
                            <div class="service text-center  wow fadeInLeft " data-wow-offset="120" data-wow-duration="1.5s">
                                <img src="images/uploads/PlayBox-Models-PB1-PRO.png" />
                                <h4>PlayBox&trade; PRO: PB1-PRO</h4>
                                <p>designed for direct wiring<br>

utilizing the nearest<br>

residential electrical source

</p>
                            </div>
                        </div><!--end 4 col-->

                        <div class="col-sm-4">

                            <div class="service text-center  wow fadeIn " data-wow-offset="120" data-wow-duration="1.5s">
                               <img src="images/uploads/PlayBox-Models-PB1-EZ.png" />
                                <h4>PlayBox&trade; EZ: PB1-EZ</h4>
                                <p>same as PRO model but includes a power relocation kit, 
safely wire your PlayBox electrical knowledge or experience
</p>
                            </div>
                        </div><!--end 4 col-->

                        <div class="col-sm-4">
                            <div class="service text-center  wow fadeInRight " data-wow-offset="120" data-wow-duration="1.5s">
                                 <img src="images/uploads/PlayBox-Models-PB1-COM.png" />
                                <h4>PlayBox&trade; BIZ: commercial</h4>
                                <p>the PlayBox that is designed for the commercial environment: restaurant/bar, retail, office, you decide... put button positions even on models section shrink buttons text change color, swap color</p>
                            </div>
                        </div><!--end 4 col-->
                    </div><!--end row-->
                    <div class="row">
                    	
                        <div class="col-sm-4">
                        	<div class="text-center ">
                                        <a href="#" class="btn btn-default download-btn">details</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                        	<div class="text-center ">
                                        <a href="#" class="btn btn-default download-btn">details</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                        	<div class="text-center ">
                                        <a href="contact us.html" class="btn btn-default download-btn">i'm interested </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--end-->


            <!-- FAQ Section-->
            <section id="faq" class="sections" >
                <div class="container" style="margin-top:20px">
                    <div class="row">

                        <!--  Heading-->
                        <div class="heading wow fadeIn " data-wow-offset="120" data-wow-duration="1.5s">
                            <div class="title text-center"><h1>FAQ's</h1></div>
                            <div class="separator text-center"></div>
                        </div>
                        <div class="faqs">
 <button id="collapse-init" class="btn btn-primary">
    Disable accordion behavior
</button>
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
            $(this).text('Enable accordion behavior');
        } else {
            active = true;
            $('.panel-collapse').collapse('hide');
            $('.panel-title').attr('data-toggle', 'collapse');
            $(this).text('Disable accordion behavior');
        }
    });
    
    $('#accordion').on('show.bs.collapse', function () {
        if (active) $('#accordion .in').collapse('hide');
    });

});
});//]]> 

</script>                      
                 				
<div class="panel-group" id="accordion"> <div class="col-md-6">
                                <div class="panel">
                                    <a class="panel-heading collapsed" data-toggle="collapse" href="#faq1">what is PlayBox&trade;?</a> 
                                    <div id="faq1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                        The PlayBox&trade; by thenos is an specially designed enclosure that allows you to take your Sonos&reg; Play:1 speaker and recess it in the wall.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <a class="panel-heading collapsed" data-toggle="collapse" href="#faq2">what is Sonos&reg;?</a>
                                    <div id="faq2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Sonos&reg; is the smart speaker system that delivers all the music on earth, in every room, with pure, immersive sound. Sonos&reg; unites your digital music collection and services in one simple app that you control from any smart device.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <a class="panel-heading collapsed" data-toggle="collapse" href="#faq3">
what is a Play:1?
</a>
                                    <div id="faq3" class="panel-collapse collapse">
                                        <div class="panel-body">The Play:1 is a compact tabletop wireless smart speaker by Sonos&reg;. The Play:1 can be sued singular or as a stereo pair. The Play:1 is the most widely sold of the Play series of speakers by Sonos&reg;. The Play: 1 has achieved a cult like following for its super rich, full-bodied sound that’s crystal clear at any volume. 
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="panel">
                                    <a class="panel-heading collapsed" data-toggle="collapse" href="#faq9">is the PlayBox&trade; suitable for residential and commercial installs?</a>
                                    <div id="faq9" class="panel-collapse collapse">
                                        <div class="panel-body">Currently the residential version(s) of the PlayBox&trade; are the first to be available. We do plan on rolling out the commercial version of the PlayBox&trade; for Restaurant/Bar, Retail, Office/Corporate, etc. soon.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <a class="panel-heading collapsed" data-toggle="collapse" href="#faq6">do you make something to cover the speaker? </a>
                                    <div id="faq6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                           No. And the reason is simple: we don’t want to hide the Play:1, quite the opposite actually… Sonos&reg; users are proud of their choice to become apart of the Sonos&reg; community and the idea behind the PlayBox&trade; design was to showcase the speaker and “cradle it like a diamond in a jewelry box”.
                                        </div>
                                    </div>
                                </div>
                           	</div>
                            <div class="col-md-6">
                            
                              
                                <div class="panel">
                                    <a class="panel-heading collapsed" data-toggle="collapse" href="#faq4">who is thenos?</a> 
                                    <div id="faq4" class="panel-collapse collapse">
                                        <div class="panel-body">thenos, LLC is an American company based in Dallas, Texas and is the designer and maker of the PlayBox&trade;. The company was founded by installers with the mission of creating the most unique products in the audio/video market. Read More
                                        </div>
                                    </div>
                                </div>  
                                
                                <div class="panel">
                                    <a class="panel-heading collapsed" data-toggle="collapse" href="#faq5">does thenos make other products?</a>
                                    <div id="faq5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                           Currently the PlayBox&trade; for the Sonos&reg; Play:1 is the debut product from thenos. However other products are already in the design stages. Stay Tuned
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <a class="panel-heading collapsed" data-toggle="collapse" href="#faq7">why not just use in-ceiling/wall speakers instead of the PlayBox&trade;?</a>
                                    <div id="faq7" class="panel-collapse collapse">
                                        <div class="panel-body">The PlayBox&trade; does not aim to replace the market for architectural speakers; “we simply sought to provide a solution where there was none”. For those who already own or insist on a Sonos&reg; Play:1 but yet could do without messy cords and/or need back valuable counter space, or simply have none to spare, are a perfect fit for the PlayBox&trade;.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <a class="panel-heading collapsed" data-toggle="collapse" href="#faq8">what colors/finishes are available?</a>
                                    <div id="faq8" class="panel-collapse collapse">
                                        <div class="panel-body">
                                           Currently the PlayBox&trade; is available in two colors: Artic White and Stealth Black. The faceplate can be painted and or wrapped to make it blend or even stand out among its surroundings!
                                        </div>
                                    </div>
                                </div>	
                                <div class="panel">
                                    <a class="panel-heading collapsed" data-toggle="collapse" href="#faq10">do I need a license to install the PlayBox&trade;? </a>
                                    <div id="faq10" class="panel-collapse collapse">
                                        <div class="panel-body">
                                           Home Owners:<br>

You may install the PlayBox&trade; in your own home: The PlayBox&trade; features an integrated power supply that requires a high-voltage connection - just like a standard home electrical socket. So the same state/city codes apply just as if you were installing your own ceiling fan or wall socket. Check with your city for local codes and guidelines.
<br>
<br>
<small><strong>
*If you do not feel comfortable or do not posses the electrical knowledge/skill DO NOT ATTEMPT SELF INSTALLATION, consult an electrician or professional installer.</strong>
</small><br>
<br>
Professional Installers:
<br>
thenos offers a wire directly unit, the PlayBox&trade; PRO, for wiring into the nearest electrical junction. We also a offer the PlayBox&trade; EZ which features a power relocation kit, the PlayBox&trade; EZ ships with a male power inlet which allow those without electrical licensing to safely install a PlayBox&trade; and then plug it into a nearby 110v outlet.

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

           
            <section class="call-to-action-img">
                <div class="overlay-img">
                    <div class="container">
                        <div class="row">
                            <form lpformnum="1">
                                <div class="col-sm-12">
                                    <div class="title text-center"><h1 style="color:#fff">videos</h1></div>
                            <div class="separator text-center"></div>
                                </div>
                                <div class="col-sm-12">
<link rel="stylesheet" type="text/css" href="http://thenos.us/temp/dopts/assets/gui/css/jquery.dop.ThumbnailScroller.css" />
<script type="text/JavaScript" src="http://thenos.us/temp/dopts/assets/js/jquery.dop.ThumbnailScroller.js"></script>
<script type="text/JavaScript">
    $(document).ready(function(){
        $('#DOPThumbnailScrollerContainer1').DOPThumbnailScroller({'URL': 'http://thenos.us/temp/', 'SettingsFilePath': 'http://thenos.us/temp/dopts/data/settings1.json', 'ContentFilePath': 'http://thenos.us/temp/dopts/data/content1.json'});
    });
</script>
<div id="DOPThumbnailScrollerContainer1" style="height"260px"></div>
                                </div>
                            </form>
                        </div>
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
                                    <div class="title-half"><h1>early adopters rejoice; pre-order</h1></div>
                                    <div class="subtitle-half"><h5>be among the first to receive the one-of-a-kind PlayBox&trade;</h5></div>
                                    <div class="separator-left"></div>
                                </div>

                                <p>
                               



                               The PRO & EZ versions of the PlayBox&trade; are designated for 
wide release by end of 1st the QTR. Order your PlayBox&trade; 
by thenos today for only $129:<br><br>

                                        <a href="#" class="btn btn-default download-btnsmall">pre-order</a>
                                        <a href="#" class="btn btn-default download-btnsmall">commercial</a>
                                        <a href="#" class="btn btn-default download-btnsmall">resellers</a>
                            </div>
                        </div> <!--end half-->


                        <div class="col-md-6 subscribe-img">

                            <div class="subscribe-form3">
                                <h2 class="text-center white-text">stay informed:</h2>
                                <p class="white-text">get updates related to thenos and the PlayBox&trade;</p>
                                <form id="mailchimp" class="subscribe_form subscribe_form3" role="form" novalidate>
                                    <h6 class="subscription-success"></h6>
                                    <h6 class="subscription-error"></h6>
                                    <div class="input-group">
                                        <input class="form-control" type="email" name="EMAIL" id="subscribe_email" placeholder="Enter your email">
                                        <div class="input-group-btn">
                                            <button class="btn" type="submit" id="subscribe_submit"><i class="fa fa-envelope"></i></button>
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
                                <a href="contact us.html"><button class="btn btn-primary btn-lg  text-center" type="submit">contact us</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </section><!--/-->


<?php
include("includes/footer.php");
?>