<?php
include("includes/header.php");
$subject=$_GET['sb'];
$menu="contact";
?>


            <!--contact Section-->
            <section id="contact" class="sections" style="padding-bottom:35px">
                <div class="container" style="margin-top:40px">
                    <div class="row contact-2">

                        <div class="heading wow fadeIn">
                            <div class="title text-center"><h1>contact us</h1></div>
                            <div class="subtitle text-center"><h5>we're happy to hear from you, unless its bad news...</h5></div>
                            <div class="separator text-center" style="margin-bottom: 25px;"></div>
                        </div>

                        <!--address-->
                        <div class="col-md-4">
                            <div class="contact-address">
                                <h4 style="font-size:1.0em"><br>

thenos - makers of the PlayBox<sup>&trade;</sup></h4>

                            </div>
                            <hr>
                            <p>let us know how we can help or feel free to reach us directly with the contact info listed below.<br>
<br>
<a href="dealer.php" class="btn btn-default download-btnsmall">for reseller inquiries click here</a>
<br><br></p>
                      </div>

                        <div class="col-md-8 ">
                            <!-- CONTACT FORM -->
                            <div data-wow-offset="10"  class="wow rollIn  contact-form">
<script type="text/javascript" src="https://form.jotform.com/jsform/61110974256150"></script>
                            </div>
                        </div>

                    </div>
                </div>
            </section><!--end-->


           

            <!--contact form-->
            <section id="contact" class="sections"  style="padding-top:35px;padding-bottom:35px">
                <div class="container">
                    <div class="row">
                        <div class="contact-4  text-center wow fadeInUp ">
                            <div class="col-sm-4">
                                <i class="fa fa-map-marker"></i>
                                <h4 class="slide-bottom" style="font-size:1.0em;margin-bottom:5px">headquarters</h4>

                                <p class="slide-bottom">Dallas, TX</p>
                            </div><!-- end col -->

                            <div class="col-sm-4">
                                <i class="slide-bottom fa fa-phone"></i>
                                <h4 class="slide-bottom" style="font-size:1.0em;margin-bottom:5px">give us a ring</h4>
                                <p class="slide-bottom">(972) 426-9200</p>
                            </div><!-- end col -->

                            <div class="col-sm-4">
                                <i class="slide-bottom fa fa-envelope"></i>
                                <h4 class="slide-bottom" style="font-size:1.0em;margin-bottom:5px">email</h4>
                                <p class="slide-bottom">general:  <a href="mailto:info@thenos.us">info@thenos.us</a><br>
media inquiries:  <a href="mailto:press@thenos.us">press@thenos.us</a></p>
                            </div><!-- end col -->

                        </div>
                    </div>

                </div>
            </section>
            
             <!-- DOWNLOAD Section-->
            <section id="download" class="download-bg-img">
                <div class="overlay-img" style="padding:175px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="download-full-width white-text">

                                    <!--  Heading-->
                                    <div class="heading wow fadeIn " data-wow-offset="120" data-wow-duration="1.5s">
                                        <div class="title text-center"><h1>pre-order your PlayBox<sup>&trade;</sup>(s) today</h1></div>
                                        <div class="separator-min-height text-center"></div>
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-2 wow fadeIn " data-wow-offset="120" data-wow-duration="1.5s">
                                        
                                        <div class="download-button only-button wow fadeIn " data-wow-offset="120" data-wow-duration="1.5s">
                                            <a href="http://www.thenos.us/index.php?route=product/category&path=59" class="btn btn-default download-btn" style="padding-top:5px;padding-bottom:5px">order</a>
                                             <span class="video-link demo-link" data-video-id="a4RY7-tatqA" style="z-index:9999999"><a href="#" class="btn btn-default download-btn" style="padding-top:5px;padding-bottom:5px">watch video</a></span>

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
 
<?php
include("includes/footer.php");
?>