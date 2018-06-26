<?php
include("includes/header.php");
?>


            <!--contact Section-->
            <section id="contact" class="sections">
                <div class="container" style="margin-top:20px">
                    <div class="row contact-2">

                        <div class="heading wow fadeIn " style="margin-bottom:0">
                            <div class="title text-center"><h1 style="font-size:1.3em;line-height: 1.5rem;">contact us</h1></div>
                            <div class="subtitle text-center  style="font-size:0.5em;line-height: 1.0rem;""><h5>we're happy to hear from you, unless its bad news...</h5></div>
                            <div class="separator text-center"></div>
                        </div>

                        <!--address-->
                        <div class="col-md-4">
                            <div class="contact-address">
                                <h4><br>
thenos - makers of the PlayBox</h4>

                            </div>
                            <hr>
                            <p>To send us a note use the form and we'll get back to you real quick or feel free to call or email us directly using the contact info listed below.<br>
<br>
<a href="dealer.php" class="btn btn-default download-btnsmall">for reseller inquiries click cere</a>
<br><br></p>
                      </div>

                        <div class="col-md-8 ">
                            <!-- CONTACT FORM -->
                            <div data-wow-offset="10"  class="wow rollIn  contact-form">


                                <div id="message"></div>
                                <form method="post" action="scripts/contact.php" name="contactform" id="contactform">
                                    <fieldset>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control " name="name" id="name" placeholder="Name">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control " name="email" id="email" placeholder="Email">
                                            </div>
                                            <div class="col-md-12">
                                                <input class="form-control " id="subject" type="text" name="subject" placeholder="Subject">
                                                <textarea class="form-control " id="msg" rows="5" placeholder="Message"></textarea>
                                                <button class="btn btn-primary btn-lg" type="submit" id="submit" name="submit" data-loading-text="Loading..."><i class="fa fa-send"></i> Send Message</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </section><!--end-->


           

            <!--contact form-->
            <section id="contact" class="sections">
                <div class="container">
                    <div class="row">
                        <div class="contact-4  text-center wow fadeInUp ">
                            <div class="col-sm-4">
                                <i class="fa fa-map-marker"></i>
                                <h4 class="slide-bottom">headquarters</h4>

                                <p class="slide-bottom">655 N. Glenville Dr, Suite 155<br>
Richardson TX 75081</p>
                            </div><!-- end col -->

                            <div class="col-sm-4">
                                <i class="slide-bottom fa fa-phone"></i>
                                <h4 class="slide-bottom">give us a ring</h4>
                                <p class="slide-bottom">(972) 426-9200</p>
                            </div><!-- end col -->

                            <div class="col-sm-4">
                                <i class="slide-bottom fa fa-envelope"></i>
                                <h4 class="slide-bottom">email</h4>
                                <p class="slide-bottom">general:  info@thenos.us<br>
media inquiries:  press@thenos.us</p>
                            </div><!-- end col -->

                        </div>
                    </div>

                </div>
            </section>
            
             <!-- DOWNLOAD Section-->
            <section id="download" class="download-bg-img">
                <div class="overlay-img">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="download-full-width white-text">

                                    <!--  Heading-->
                                    <div class="heading wow fadeIn " data-wow-offset="120" data-wow-duration="1.5s">
                                        <div class="title text-center"><h1>pre-order your PlayBox(s) today</h1></div>
                                        <div class="subtitle text-center "><h5></h5></div>
                                        <div class="separator-min-height text-center"></div>
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-2 wow fadeIn " data-wow-offset="120" data-wow-duration="1.5s">
                                        
                                        <p></p>
                                        <div class="download-button only-button wow fadeIn " data-wow-offset="120" data-wow-duration="1.5s">
                                            <a href="http://thenos.us/index.php?route=product/category&path=59" class="btn btn-default download-btn">order</a>
                                             <span class="video-link demo-link" data-video-id="a4RY7-tatqA" style="z-index:9999999"><a href="#" class="btn btn-default download-btn">watch video</a></span>

                                        </div>
                                    </div>
                                </div>

                            </div><!-- end col -->
                        </div>
                    </div>
                </div>
            </section><!--/-->
            </div>


<script src="lightbox/javascripts/scale.fix.js"></script>
<script src="lightbox/javascripts/jquery.min.js"></script>
<script src="lightbox/javascripts/videoLightning.js"></script>
<script src="lightbox/javascripts/jqvl-page.js"></script>
<script>
  videoLightning({
    elements: [
      {
        ".video-link": {
          autoplay: 1,
          easeOut: 1000,
          bdColor: "#000",
          bdOpacity: 0.6,
          glow:60,
          width: "560px",
          height: "315px",
          glowColor: "#fff"
        }
      },
      {
        "#bare-iframe-link": {
          id: 'f-images/JqueryVideoLightningIconPurple144.png',
          frameColor: '#555',
          frameBorder: '3px solid #3A0372',
          bdOpacity: 0.9,
          glow: 0,
          xBgColor: '#3A0372',
          xColor: '#f5f5f5',
          xBorder: '3px solid #555'
        }
      }
    ]
  });
  $(function () {
      $(".video-link6").jqueryVideoLightning({
          autoplay: 1,
          controls: 0,
          width: "560px",
          height: "315px",
          popover: 1,
          peek: 1
      });
  });
</script>

            <!-- FOOTER Section-->

            <footer id="footer" class="footer-3">
                <div class="container">
                    <div class="row v-center">
                        <div class="col-sm-2">
                        <p>
                        <img src="images/logo.jpg" height="70px" hspace=5 alt="thenos" align="left"/> makers of the PlayBox<sup>&trade;</sup>
						</p></div>
                       
                        <div class="col-sm-7">
                            <div class="additional-links text-center  editContent"><p>thenos and PlayBox<sup>&trade;</sup> are registered trademarks of thenos, LLC. <br>
Sonos<sup>&reg;</sup> &amp; Play:1<sup>&trade;</sup> are registered trademarks of Sonos<sup>&reg;</sup>, Inc.</p></div>
                        </div>
                        <div class="col-sm-3  ">
                            <h6 class="editContent">Designed in Dallas, TX</h6>
                            <div class="address editContent" style=""><p>
	phone: 972.426.9200<br>
	email: <a href="mailto:info@thenos.us" target="_blank">info@thenos.us</a>
</p></div>
                            <div class="social-btns">
                                <a href="https://www.facebook.com/thenosPlayBox&trade;?_rdr=p" style="font-size:30px"><i class="fa fa-facebook"></i></a>
                                <a href="contact.php" style="font-size:30px"><i class="fa fa-envelope-o"></i></a>
                                <a href="https://www.youtube.com/channel/UC34NzXbvOsMO6cb89BTZZtw" style="font-size:30px"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer></div>



        <!--        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->

        <script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script src="js/plugins.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.wow.min.js"></script>
        <script src="js/jquery-contact.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="js/jquery.easypiechart.min.js"></script>
        <script src="js/main.js"></script>

        <script src="js/canvas/surface.js"></script>
        <script src="js/canvas/surface1.js"></script>


        <script src="js/canvas/canvas.js"></script>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--        <script>
                    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                    e.src='//www.google-analytics.com/analytics.js';
                    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
                    ga('create','UA-XXXXX-X');ga('send','pageview');
                </script>-->
    

</body></html>