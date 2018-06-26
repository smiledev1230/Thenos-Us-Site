<?php
include("includes/header.php");
$subject=$_GET['sb'];
$menu="contact";
?>


            <!--contact Section-->
            <section id="contact" class="sections" style="padding-bottom:35px">
                <div class="container" style="margin-top:40px">
                    <div class="row contact-4">

                        <div class="heading wow fadeIn">
                            <div class="title text-center"><h1>Dealer Locator</h1></div>
                           
                            <div class="separator text-center" style="margin-bottom: 25px;"></div>
                           <div id="myInfoDiv" seamless="seamless" scrolling="no" style="width:100%; height: 100%;  line-height:100%; font-size:100%; font-family: sans-serif"><iframe src="http://www.thenos.us/dealerlocator/embed.php" width="100%" height="1300px" scrolling=no frameborder=no allowtransparency="true"></iframe>

 							</div>

                        </div>

                        <!--address-->
                       
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