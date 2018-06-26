<?php
include("includes/header.php");
?>
 
<script>
var bgImageArray = ["c1.jpg", "c3.jpg",   "c5.jpg",  "c7.jpg","c2.jpg", "c6.jpg",   "c8.jpg"],
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
<style>
	label{font-weight:normal!important}
    .home-intro-subscribe{
        padding-top: 80px;
    }
    @media(max-width: 767px){
        .home-intro-subscribe{
            padding-top:65px;
        }
    }
</style>
            <section id="home" class="home" style="background: url(images/homed.jpg) no-repeat center center fixed;-moz-background-size:cover;-moz-background-size:cover;-webkit-background-size:cover;-o-background-size:cover;background-size:cover;width:100%;overflow: hidden;background-size: cover;background-blend-mode: darken;transition: 3s;">
                <div class="surface-wrap"><!-- <div id="surface"></div>--></div>
                <div class="canvas-wrap"><!--<canvas id="canvas"></canvas>--></div>
                <div class="overlay">

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="home-intro-half">
                                  <h1>the <strong>PlayBox</strong> for the <br>
business environment</h1>
                                    <h3 style="color: rgb(255, 255, 255); font-size: 18px; background-color: rgba(0, 0, 0, 0);">imagine full, robust and warm sound in a commercial audio system with no need to run wiring and/or locate expensive centralized equipment - yep, meet the amp-less sound system via the PlayBox<sup>&trade;</sup> by thenos.</h3>
                                 <div class="subscribe-form3">
                               
                                
                                        <a href="http://www.thenos.us/index.php?route=product/product&path=59&product_id=53" class="btn btn-default download-btnblue">details/order</a>
                            </div><br>
<br>

                                    <h6 class="subscription-success" style="color:#fff"></h6>
                                    <h6 class="subscription-error" style="color:#fff"></h6>
                            </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="home-intro-2nd-half">
                                    <img src="images/ebook.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--end-->

            <!-- Describe Section-->
            <section id="describe" class="sections colorsbg">
                <div class="container">
                    <div class="row">
                        <div class="details-full-width">
                            <div class="text-center">

                                <!--  Heading-->
                                <div class="heading wow fadeIn " data-wow-offset="120" data-wow-duration="1.5s">
                                    <div class="title"><h2>business owners: the smart amp-less sound system has arrived…</h2></div>
                                    <div class="subtitle"><h5>PB1-COM (available in white or black)</h5></div>
                                </div>
                                <p class=" wow fadeInUp " data-wow-offset="10" data-wow-duration="1.5s"><strong>Install one speaker or one hundred</strong>:  whether you want to create a simple single zone music system or multi-zone distributed audio the PlayBox is your solution. The PlayBox is the new (smart) way to create a commercial audio system solution.
                                <br>
<br>

                                <strong>Applications:</strong>
<br><br>



• Single-Zone Music Sys<Br />
• Multi-Zone Music Sys<Br />
• Restaurant &amp; Bar<Br />
• Retail<Br />
• Office/Corporate<Br />
• Medical Ofc/Hospitality<Br />
<br>

<strong>Benefits:</strong><br>
<br>
• No amplifier or equipment/rack taking up space<Br />
• No low-voltage wiring required<Br />
• No sources to be tampered with<Br />
• Provides all the music on earth thru the Sonos® app<Br />
• Provides super rich and warm audio (vs. traditional 70v systems)<Br />
• Provides choice between soft background audio or a club-like atmosphere 

 </p>

                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/-->
            
           
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
                            
                             
                            
                            
                            <a name="models" id="models"></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial Section End--><!--/-->
            <!-- Team Section-->
        <section id="team" class="team sections">
            <div class="container">

                <!-- Team Heading-->
                <div class="heading wow fadeIn " data-wow-offset="120" data-wow-duration="1.5s">
                    <div class="title text-center"><h1>applications</h1></div>
                    <div class="subtitle text-center "><h5>uses for the commercial PlayBox, just to name a few...</h5></div>
                    <div class="separator text-center"></div>
                </div>


                <div class="row">
                    <div class="col-sm-3">
                        <div class="team-member team-bg wow fadeInLeft " data-wow-offset="120" data-wow-duration="1.5s">
                            <img src="images/team/team1.jpg" class="img-circle" alt="Team Member">
                            <h2 src="images/team/team1.jpg" style="color: rgb(26, 198, 255); font-size: 28px; background-color: rgba(0, 0, 0, 0);">restaurant &amp; bar</h2>
                            
                           
                            <p class="space-top-small">coffee shop, cafe, full service, quick serve, fast casual, watering hole, diner, greasy spoon... whatever the venue the PlayBox<sup>&trade;</sup> allows you to pair the deep richness of a Sonos Play:1<sup>&trade;</sup> with a permanent installation.</p>
                            <ul class="list-inline">
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>

                            </ul>
                        </div><!--end team member-->
                    </div>

                    <div class="col-sm-3">
                        <div class="team-member team-bg wow fadeIn " data-wow-offset="120" data-wow-duration="1.5s">
                            <img src="images/team/team2.jpg" class="img-circle" alt="Team Member">
                            <h2 src="images/team/team1.jpg" style="color: rgb(26, 198, 255); font-size: 28px; background-color: rgba(0, 0, 0, 0);">retail</h2>
                            
                           
                            <p class="space-top-small">control all the music on earth from a phone, tablet or computer via the free Sonos app. No need to connect to physical sources and have audio equipment located in a back office accessible to damage or mis-configuration.</p>
                            <ul class="list-inline">
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>

                            </ul>
                        </div><!--end team member-->
                    </div>

                    <div class="col-sm-3">
                        <div class="team-member team-bg wow fadeIn " data-wow-offset="120" data-wow-duration="1.5s">
                            <img src="images/team/team3.jpg" class="img-circle" alt="Team Member">
                            <h2 src="images/team/team1.jpg" style="color: rgb(26, 198, 255); font-size: 28px; background-color: rgba(0, 0, 0, 0);">office &amp; corporate</h2>
                            
                           
                            <p class="space-top-small">although the PlayBox<sup>&trade;</sup> may appear discrete insert the Play:1<sup>&trade;</sup> and hear/feel the punch, allowing every vocal and instrument to be heard with greater detail over current commercial sound systems, especially those with far greater price tags.</p>
                            <ul class="list-inline">
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>

                            </ul>
                        </div><!--end team member-->
                    </div>
                    
                    
                    <div class="col-sm-3">
                        <div class="team-member team-bg wow fadeInRight " data-wow-offset="120" data-wow-duration="1.5s">
                            <img src="images/team/team4.jpg" class="img-circle" alt="Team Member">
                            <h2 src="images/team/team1.jpg" style="color: rgb(26, 198, 255); font-size: 28px; background-color: rgba(0, 0, 0, 0);">dream it</h2>
                            
                            
                            <p class="space-top-small">the PlayBox<sup>&trade;</sup> (paired with the Sonos Play:1<sup>&trade;</sup>) is great for soft clear background music or always ready to instantly transform into a rich, powerful audio system. We want to hear your ideas for the PlayBox<sup>&trade;</sup> for business: <br>
<a href="contact.php?sb=Commercial" target="_blank"  class="under">Contact Us</a></p>
                            <ul class="list-inline">
                                <li style=""></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>

                            </ul>
                        </div><!--end team member-->
                    </div>

                </div><!--end row-->
            </div><!--end container-->
        </section><!--/-->


            <section id="home" class="home1">
                <div class="surface-wrap"><!-- <div id="surface"></div>--></div>
                <div class="canvas-wrap"><!--<canvas id="canvas"></canvas>--></div>
                <div class="overlay"  style="min-height:500px">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="home-intro-subscribe">
                                    <div class="">
                                        
                                        <!-- Begin MailChimp Signup Form -->
                                        <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                                        <style type="text/css">
                                            #mc_embed_signup{margin-top: 0px;color:#fff;background:#4c9eda; clear:left; font:14px Helvetica,Arial,sans-serif;border-radius: 3px;padding: 10px; }
                                            .subscribe-form3 form {
                                                margin-top: 30px;
                                                color: #fff;
                                            }
                                            .subscribe-form3 form a {
                                                color: #ffa500;
                                            }
                                            #mc-embedded-subscribe {
                                                margin: 0;
                                            }


                                        </style>
                                        <div id="mc_embed_signup">
                                        <div class="title text-center"><h1>I'm interested, keep me informed</h1></div>
                                        <p class="white-text">We will keep you updated on the latest commercial related thenos products. No spam (we pinky swear).</p>
                                        <form action="//thenos.us12.list-manage.com/subscribe/post?u=5eb1381680bd287484d910209&amp;id=63739df084" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                            <div id="mc_embed_signup_scroll">
                                                <div class="mc-field-group input-group text-center">
                                                    <strong>User Type</strong>
                                                    <ul>
                                                        <li><input type="radio" value="End User" name="MMERGE3" checked="" id="mce-MMERGE3-0"><label for="mce-MMERGE3-0"> End-User: “I will us thenos products in my home or business”</label></li>
                                                        <li><input type="radio" value="Reseller" name="MMERGE3" id="mce-MMERGE3-1"><label for="mce-MMERGE3-1"> Reseller: “I install or resell thenos products”</label></li>
                                                    </ul>
                                                </div>
                                                <div class="mc-field-group">
                                                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter your email">
                                                </div>
                                        
                                                <div id="mce-responses" class="clear">
                                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5eb1381680bd287484d910209_63739df084" tabindex="-1" value=""></div>
                                            <div class="clear"><center><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-success"></center></div>
                                            </div>
                                        </form>
                                        </div>
                                        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='MMERGE3';ftypes[3]='radio';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section></div>

<?php
include("includes/footer.php");
?>