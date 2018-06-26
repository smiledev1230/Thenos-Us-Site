<?php 

$gcol = floor(12/$cols);
$module = rand(0,9);
$ourl = $this->registry->get('url');
$config = $this->registry->get('config'); 
$themeConfig = (array)$config->get('themecontrol');
$theme  = $config->get('config_template');
$listingConfig = array(
    'category_pzoom'                     => 1,
    'quickview'                          => 0,
    'product_layout'           => 'default',
  );

  $listingConfig     = array_merge($listingConfig, $themeConfig );
  $categoryPzoom      = $listingConfig['category_pzoom'];
  $quickview          = $listingConfig['quickview'];
  $categoryPzoom = isset($themeConfig['category_pzoom']) ? $themeConfig['category_pzoom']:0;
?>
<?php foreach( $megaproducts as $product ) { ?>
        				<!-- A GALLERY ENTRY -->
        		<div  data-category="transition" class="element-item col-lg-<?php echo $gcol; ?> col-md-<?php echo $gcol; ?> col-sm-6 col-xs-12 megacatid-<?php echo $product['category_id']; ?> cat-all mega-bg-1" data-src="<?php echo $product['thumb']; ?>" data-width="577" data-height="700" >
        				       <div class="product-block" itemtype="http://schema.org/Product" itemscope> 
                        <div class="block-img">
                          <?php if ($product['thumb']) {    ?>
                            <div class="image">
                              <?php if( $product['special'] ) {   ?>
                              <span class="product-label product-label-special"><span><?php echo $lang->get( 'text_sale' ); ?></span></span>
                              <?php } ?>
                              <a class="img" href="<?php echo $product['href']; ?>">
                                <img class="img-responsive" src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" /></a>   
                              <!-- price -->
                              <?php if ($product['price']) { ?>
                              <div class="price-quick price clearfix text-center" itemtype="http://schema.org/Offer" itemscope itemprop="offers">
                                <?php if (!$product['special']) {  ?>
                                  <span class="special-price"><?php echo $product['price']; ?></span>
                                  <?php if( preg_match( '#(\d+).?(\d+)#',  $product['price'], $p ) ) { ?> 
                                  <meta content="<?php echo $p[0]; ?>" itemprop="price">
                                  <?php } ?>
                                <?php } else { ?>
                                  <span class="price-new"><?php echo $product['special']; ?></span>
                                  <span class="price-old"><?php echo $product['price']; ?></span> 
                                  <?php if( preg_match( '#(\d+).?(\d+)#',  $product['special'], $p ) ) { ?> 
                                  <meta content="<?php echo $p[0]; ?>" itemprop="price">
                                  <?php } ?>
                                <?php } ?>
                                <meta content="<?php // echo $this->currency->getCode(); ?>" itemprop="priceCurrency">
                              </div>
                              <?php } ?>
                              <!-- end price -->
                              <div class="right">
                                <div class="action hidden-xs">
                                  <div>
                                    <div class="quick-view col-lg-6 col-md-3 col-xs-3">
                                      <?php if ( isset($quickview) && $quickview ) { ?>
                                        <div class="quick-view">
                                          <a class="iframe-link" href="<?php echo $ourl->link('themecontrol/product','product_id='.$product['product_id']);?>" title="<?php echo $lang->get('quick_view'); ?>">
                                            <span class="hidden-md hidden-sm hidden-xs"><?php echo $lang->get('quick_view'); ?></span>
                                          </a>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="col-lg-6 col-md-9 col-xs-9 btn-action">
                                      <!-- zoom image-->
                                        <?php if( isset($categoryPzoom) && $categoryPzoom ) { $zimage = str_replace( "cache/","", preg_replace("#-\d+x\d+#", "",  $product['thumb'] ));  ?>
                                        <div class="zoom">
                                          <a href="<?php echo $zimage;?>" class="product-zoom" title="<?php echo $product['name']; ?>"></a>
                                        </div>
                                        <?php } ?>
                                      <!-- zoom image-->
                                      <div class="compare">     
                                        <a onclick="compare.addcompare('<?php echo $product['product_id']; ?>');" title="<?php echo $lang->get("button_compare"); ?>">
                                          <span><?php echo $lang->get("button_compare"); ?></span>
                                        </a>  
                                      </div>
                                      <!--end compare-->
                                      <div class="wishlist">
                                        <a onclick="wishlist.addwishlist('<?php echo $product['product_id']; ?>');" title="<?php echo $lang->get("button_wishlist"); ?>" >
                                          <span><?php echo $lang->get("button_wishlist"); ?></span>
                                        </a>  
                                      </div>
                                      <!-- end wishlist-->
                                    </div>
                                  </div>
                                </div>
                              </div> <!-- end right -->
                            </div> <!-- end image -->
                          <?php } ?>
                          </div>         
                          <div class="product-meta">
                            <?php if ( isset($product['rating']) ) { ?>
                              <div class="rating">
                                <?php for ($is = 1; $is <= 5; $is++) { ?>
                                <?php if ($product['rating'] < $is) { ?>
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <?php } else { ?>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
                                </span>
                                <?php } ?>
                                <?php } ?>
                              </div>
                            <?php } ?>    
                            <!-- end rating --> 
                            <h3 class="name" itemprop="name"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h3>
                            <!-- end name -->
                            <?php if( isset($product['description']) ){ ?> 
                              <p class="description" itemprop="description"><?php echo utf8_substr( strip_tags($product['description']),0,220);?>...</p>
                              <?php } ?>
                              <!-- end description -->

                            <div class="bottom">  
                              <div class="wrap-hover">                                
                                <!-- price -->
                                  <?php if ($product['price']) { ?>
                                  <div class="price clearfix text-center" itemtype="http://schema.org/Offer" itemscope itemprop="offers">
                                    <?php if (!$product['special']) {  ?>
                                      <span class="special-price"><?php echo $product['price']; ?></span>
                                      <?php if( preg_match( '#(\d+).?(\d+)#',  $product['price'], $p ) ) { ?> 
                                      <meta content="<?php echo $p[0]; ?>" itemprop="price">
                                      <?php } ?>
                                    <?php } else { ?>
                                      <span class="price-new"><?php echo $product['special']; ?></span>
                                      <span class="price-old"><?php echo $product['price']; ?></span> 
                                      <?php if( preg_match( '#(\d+).?(\d+)#',  $product['special'], $p ) ) { ?> 
                                      <meta content="<?php echo $p[0]; ?>" itemprop="price">
                                      <?php } ?>
                                    <?php } ?>
                                    <meta content="<?php // echo $this->currency->getCode(); ?>" itemprop="priceCurrency">
                                  </div>
                                <?php } ?>
                                <?php if( !isset($listingConfig['catalog_mode']) || !$listingConfig['catalog_mode'] ) { ?>
                                <div class="cart">
                                  <button data-loading-text="Loading..." type="button" value="<?php echo $button_cart; ?>" onclick="cart.addcart('<?php echo $product['product_id']; ?>');" class="btn btn-shopping-cart btn-outline-default">
                                    <span class="hidden-lg "><i class="fa-fw fa fa-shopping-cart"></i></span>
                                    <span><?php echo $lang->get("button_cart"); ?></span>
                                  </button>   
                                </div>
                                <?php } ?>
                                <!-- end cart -->
                              </div>
                            </div>  
                          </div>     
                        </div> <!-- end product-block -->

        		</div>
        		<?php } ?>