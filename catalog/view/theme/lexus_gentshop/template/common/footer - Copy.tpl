<?php 
  /*
  * @package Framework for Opencart 2.0
  * @version 2.0
  * @author http://www.pavothemes.com
  * @copyright Copyright (C) Feb 2013 PavoThemes.com <@emai:pavothemes@gmail.com>.All rights reserved.
  * @license   GNU General Public License version 2
  */
  require_once(DIR_SYSTEM . 'pavothemes/loader.php');
  $config = $this->registry->get('config'); 
  $helper = ThemeControlHelper::getInstance( $this->registry, $config->get('config_template') );
  $layoutID = 1 ;
  $helper->loadFooterModules();
   
?>
 
<!-- 
  $ospans: allow overrides width of columns base on thiers indexs. format array( column-index=>span number ), example array( 1=> 3 )[value from 1->12]
 -->

<?php if( !($helper->getConfig('enable_pagebuilder') && $helper->isHomepage())  ){ ?>

<?php
  $blockid = 'mass_bottom';
  $blockcls = '';
  $modules = $helper->getModulesByPosition( $blockid ); 
  $ospans = array();
  require( ThemeControlHelper::getLayoutPath( 'common/block-cols.tpl' ) );
?>

<?php } ?>
 
<footer id="footer">
  
  <!--<?php
    $blockid = 'footer_top';
    $blockcls = '';
    $ospans = array();
    require( ThemeControlHelper::getLayoutPath( 'common/block-footcols.tpl' ) );
    if(count($modules) <=0){
      require( ThemeControlHelper::getLayoutPath( 'common/footer/footer_top.tpl' ) );
    }
  ?>-->

<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif;  width:500px;}
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//thenos.us12.list-manage.com/subscribe/post?u=5eb1381680bd287484d910209&amp;id=5d96275964" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5eb1381680bd287484d910209_5d96275964" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

  <?php

    $blockid = 'footer_center';
    $blockcls = '';
    $ospans = array();
    require( ThemeControlHelper::getLayoutPath( 'common/block-footcols.tpl' ) );
    if(count($modules) <=0){
      require( ThemeControlHelper::getLayoutPath( 'common/footer/footer_center.tpl' ) );
    }
  ?>

  <?php
    $blockid = 'footer_bottom';
    $blockcls = '';
    $ospans = array();
    require( ThemeControlHelper::getLayoutPath( 'common/block-footcols-full.tpl' ) );
    if(count($modules) <=0){
      require( ThemeControlHelper::getLayoutPath( 'common/footer/footer_bottom.tpl' ) );
    }
  ?>
</footer>

<div id="powered">
  <div class="container">
    <div class="inner">
      <div class="copyright pull-left">
        <?php if( $helper->getConfig('enable_custom_copyright', 0) ) { ?>
          <?php echo $helper->getConfig('copyright'); ?>
        <?php } else { ?>
          <?php echo $powered; ?>. 
        <?php } ?>
      </div>  

      <?php if( $content=$helper->getLangConfig('widget_paypal') ) {?>
        <div class="paypal pull-right">
          <?php echo $content; ?>
        </div>
      <?php } ?>
      </div>
  </div>
</div>


<?php if( $helper->getConfig('enable_paneltool',0) ){  ?>
  <?php  echo $helper->renderAddon( 'panel' );?>
<?php } ?>

</div>
<?php  echo $helper->renderAddon( 'offcanvas' );?>  

</div></div>

<!--<script type="text/javascript">$(document).ready(function() { display('grid'); });</script>-->
</body></html>