<?php if ($thumb || $images) { ?>
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 image-container">
        <div class="img-thumb col-lg-2 col-xs-3 col-sm-3">
    <?php if ($images) { ?>
    <div class="image-additional slide carousel vertical" id="image-additional">
        <div id="image-additional-carousel" class="carousel-inner">
            <?php 
            if( $productConfig['product_zoomgallery'] == 'slider' && $thumb ) {  
                $eimages = array( 0=> array( 'popup'=>$popup,'thumb'=> $thumb )  ); 
                $images = array_merge( $eimages, $images );
            }
            $icols = 4; $i= 0;
            foreach ($images as  $image) { ?>
                <?php if( (++$i)%$icols == 1 ) { ?>
                <div class="item clearfix">
                <?php } ?>
                <div style="thumbimg">
                    <a href="<?php echo $image['popup']; ?>" title="<?php echo $heading_title; ?>" class="" data-zoom-image="<?php echo $image['popup']; ?>" data-image="<?php echo $image['popup']; ?>">
                        <img src="<?php echo $image['thumb']; ?>" style="max-width:75px;"  title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" data-zoom-image="<?php echo $image['popup']; ?>" class="product-image-zoom img-responsive" />
                    </a>
                 </div>
                <?php if( $i%$icols == 0 || $i==count($images) ) { ?>
                </div>
              <?php } ?>
            <?php } ?>      
        </div>

        <!-- Controls -->
        <?php
        if(count($images)>4){
        ?>
        <a class="carousel-control left" href="#image-additional" data-slide="next">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control right" href="#image-additional" data-slide="prev">
            <i class="fa fa-angle-right"></i>
        </a>
        <?php } ?>
    </div>          
    <script type="text/javascript">
        $('#image-additional .item:first').addClass('active');
        $('#image-additional').carousel({interval:false})
    </script>
    <?php } ?> 
	</div>
	<?php if ($thumb) { ?>
    <div class="image col-lg-10 col-sm-8 col-xs-8">

        <?php if( isset($date_available) && $date_available == date('Y-m-d')) {   ?>            
        <span class="product-label product-label-new">
            <span><?php echo 'New'; ?></span>  
        </span>                                             
        <?php } ?>  
        <?php if( $special )  { ?>          
            <span class="product-label product-label-new">
                <span><?php echo 'Sale'; ?></span>
            </span>
        <?php } ?>

        <a href="<?php echo $popup; ?>" data-ciophref="<?php echo $popup; ?>"  title="<?php echo $heading_title; ?>" class="info_colorbox">
            <img itemprop="image" src="<?php echo $thumb; ?>" src="<?php echo $thumb; ?>" data-ciopsrc="<?php echo $thumb; ?>" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" id="image"  data-zoom-image="<?php echo $popup; ?>" class="product-image-zoom img-responsive"/>
        </a>

    </div>
    <?php } ?> 
       
</div>      
<?php } ?>