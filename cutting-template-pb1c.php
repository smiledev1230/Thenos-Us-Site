<?php
include("includes/header2.php");
$subject=$_GET['sb'];
$menu="contact";
?>

<link rel="stylesheet" href="css/home.css">

            <!--contact Section-->
            <section id="contact" class="sections" style="padding-bottom:35px">
                <div class="container" style="margin-top:40px">
                    <div class="row contact-2">

                        <div class="heading wow fadeIn"><br>
<br>

                            <div class="subtitle text-center"><h5>This resource is currently not available, <br>
<br>
Please call or contact us for support:

972-426-9200 or <a href="mailto:support@thenos.us">support@thenos.us</a></h5></div>
                            <div class="separator text-center" style="margin-bottom: 25px;"></div>
                        </div>

                       

                    </div>
                </div>
            </section><!--end-->


            
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