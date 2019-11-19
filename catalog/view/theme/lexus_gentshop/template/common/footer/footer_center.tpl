<div class="<?php echo str_replace('_','-',$blockid); ?> <?php echo $blockcls;?>" id="pavo-<?php echo str_replace('_','-',$blockid); ?>">
	<div class="container"><div class="inner">
		<?php if( count($modules) <=0 ) { ?>  
        <div class="row">
          	<div class="col-md-3 col-sm-6 hidden-xs">
	          	<?php
		            if($content=$helper->getLangConfig('widget_logo')){
		              echo $content;
		            }
		          ?>
          	</div>
          	<div class="col-md-3 col-sm-6 col-xs-12">
	          	<?php
		            if($content=$helper->getLangConfig('widget_aboutus')){
		              echo $content;
		            }
		          ?>
          	</div>
          	<?php if ($informations) { ?>
          	<div class="col-md-2 col-sm-6 col-xs-12">
          		<div class="box">
	            	<div class="box-heading"><?php echo $text_information; ?></div>
		            <ul class="list">
		              <?php foreach ($informations as $information) { ?>
		              <li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
		              <?php } ?>
                      
	             <!-- <li><a href="<?php echo $affiliate; ?>"><?php echo $text_affiliate; ?></a></li>-->
		            </ul>
	          	</div>
          	</div>
          	<?php } ?>
          	<div class="col-md-2 col-sm-6 col-xs-12">
	          	<div class="box">
	            <div class="box-heading"><?php echo $text_account; ?></div>
	            <ul class="list">
	              <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
	              <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
	              <li><a href="<?php echo $wishlist; ?>"><?php echo $text_wishlist; ?></a></li>
	              <li><a href="<?php echo $newsletter; ?>"><?php echo $text_newsletter; ?></a></li>
	            </ul>
	        </div>
          </div>
        </div>
  		<?php } ?> 
	</div></div>
</div>