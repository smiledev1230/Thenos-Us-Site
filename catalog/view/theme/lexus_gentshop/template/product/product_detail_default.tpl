<?php 
    
    $mode = 'horizontal';
    $cols = array( 'default' => array(5,7),
                   'horizontal' => array(5,7)
    ); 
    $cols = $cols[$mode];  
    $olang = $this->registry->get('language'); 
    $button_compare = $olang->get("Add to Compare");   
?>


<div class="product-info">    
    <div class="row">
    <?php require( ThemeControlHelper::getLayoutPath( 'common/detail/'.$mode.'.tpl' ) );  ?> 
   
	<div class="product-view col-xs-12 col-sm-6 col-md-<?php echo $cols[1]; ?>">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="title-product"><?php echo $heading_title; ?></h1>
                <!-- rating -->
                <?php if ($review_status) { ?>
                    <span class="rating">
                        <?php for ($i = 1; $i <= 5; $i++) { ?>
                            <?php if ($rating < $i) { ?>
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                            <?php } else { ?>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                            <?php } ?>
                        <?php } ?>                        
                    </span>
                    <a href="#review-form" class="popup-with-form" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;" ><?php echo $reviews; ?></a> / <a href="#review-form"  class="popup-with-form" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;" ><?php echo $text_write; ?></a>
                <?php } ?>
                 

                <div class="description">
                    <?php if ($manufacturer) { ?>
                        <p><i class="fa fa-chevron-down"></i><b><?php echo $text_manufacturer; ?></b> <a href="<?php echo $manufacturers; ?>"><?php echo $manufacturer; ?></a></p>
                    <?php } ?>
                    <p><i class="fa fa-chevron-down"></i><b><?php echo $text_model; ?></b> <?php echo $model; ?></p>
                    <?php if ($reward) { ?>
                        <p><i class="fa fa-chevron-down"></i><b><?php echo $text_reward; ?></b> <?php echo $reward; ?></p>
                    <?php } ?>
                    <?php if ($points) { ?>
                        <p><i class="fa fa-chevron-down"></i><b><?php echo $text_points; ?></b> <?php echo $points; ?></p>
                    <?php } ?>
                    <p><i class="fa fa-chevron-down"></i><b class="availability"><?php echo $text_stock; ?></b> <span class="stockstatus"><?php echo $stock; ?></span></p>
					<p><i class="fa fa-chevron-down"></i><b><a href="/image/UPS Transit Map.jpg" target="_blank" style="color:blue;text-decoration:underline">View Ground Transit Times</a></b></p>
                </div>
                <?php if ($price) { ?>
                    <div class="price">
                        <ul class="list-unstyled">
                            <?php if (!$special) { ?>
                                <li class="price-gruop">
                                    <span class="text-price"> <?php echo $price; ?> </span>
                                </li>
                            <?php } else { ?>

                                <li class="price-gruop"> <span class="text-price"> <?php echo $special; ?> </span> <span class="price-old" style="text-decoration: line-through;"><?php echo $price; ?></span> </li>
                            <?php } ?>
                            <?php if ($tax) { ?>
                                <li class="price-tax"><?php echo $text_tax; ?> <?php echo $tax; ?></li>
                            <?php } ?>

                            <?php if ($discounts) { ?>
                                <li>
                                </li>
                                <?php foreach ($discounts as $discount) { ?>
                                    <li class="discount"><?php echo $discount['quantity']; ?><?php echo $text_discount; ?><?php echo $discount['price']; ?></li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
                
            </div>    
            <div id="product" class="col-lg-6">
                <div class="product-extra">
                    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" /> 
                    
                    <div class="action">                    
                        <div class="">  
                            <a class="wishlist btn" title="<?php echo $button_wishlist; ?>" onclick="wishlist.addwishlist('<?php echo $product_id; ?>');"><?php echo $button_wishlist; ?></a>
                        </div>
                        <div class="">
                            <a class="compare btn" title="<?php echo $button_compare; ?>" onclick="compare.addcompare('<?php echo $product_id; ?>');"><?php echo $button_compare; ?></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <?php if ($minimum > 1) { ?>
                        <div class="alert alert-info"><i class="fa fa-info-circle"></i> <?php echo $text_minimum; ?></div>
                    <?php } ?>
                    <div class="clearfix"></div>
                   


                    <?php if ($options) { ?>
                    <h3><?php echo $text_option; ?></h3>
                    <?php foreach ($options as $option) { ?>
                        <?php if ($option['type'] == 'select') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
                                <select name="option[<?php echo $option['product_option_id']; ?>]" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control">
                                    <option value=""><?php echo $text_select; ?></option>
                                    <?php foreach ($option['product_option_value'] as $option_value) { ?>
                                        <option data-ciopimage="<?php echo $option_value['ciopimage']['image']; ?>" data-ciopimagepopup="<?php echo $option_value['ciopimage']['popup']; ?>" value="<?php echo $option_value['product_option_value_id']; ?>"><?php echo $option_value['name']; ?>
                                            <?php if ($option_value['price']) { ?>
                                                (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
                                            <?php } ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        <?php } ?>
                        <?php if ($option['type'] == 'radio') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <label class="control-label"><?php echo $option['name']; ?>: </label>
                                <div id="input-option<?php echo $option['product_option_id']; ?>">
                                    <?php foreach ($option['product_option_value'] as $option_value) { ?>
                                        <div class="radio">
                                            <label>
                                                <input data-ciopimage="<?php echo $option_value['ciopimage']['image']; ?>" data-ciopimagepopup="<?php echo $option_value['ciopimage']['popup']; ?>" type="radio" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option_value['product_option_value_id']; ?>" />
                                                <?php if(!empty($option_value['ciopimage']['thumb'])) { ?>
                                                <img src="<?php echo $option_value['ciopimage']['thumb']; ?>" alt="<?php echo $option_value['name']; ?>" class="img-thumbnail" />
                                                <?php } ?>
                                                <?php echo $option_value['name']; ?>
                                                <?php if ($option_value['price']) { ?>
                                                    (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
                                                <?php } ?>
                                            </label>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if ($option['type'] == 'checkbox') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <label class="control-label"><?php echo $option['name']; ?></label>
                                <div id="input-option<?php echo $option['product_option_id']; ?>">
                                    <?php foreach ($option['product_option_value'] as $option_value) { ?>
                                        <div class="checkbox">
                                            <label>
                                                <input data-ciopimage="<?php echo $option_value['ciopimage']['image']; ?>" data-ciopimagepopup="<?php echo $option_value['ciopimage']['popup']; ?>" type="checkbox" name="option[<?php echo $option['product_option_id']; ?>][]" value="<?php echo $option_value['product_option_value_id']; ?>" />
                                                <?php if(!empty($option_value['ciopimage']['thumb'])) { ?>
                                                <img src="<?php echo $option_value['ciopimage']['thumb']; ?>" alt="<?php echo $option_value['name']; ?>" class="img-thumbnail" />
                                                <?php } ?>
                                                <?php echo $option_value['name']; ?>
                                                <?php if ($option_value['price']) { ?>
                                                    (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
                                                <?php } ?>
                                            </label>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if ($option['type'] == 'image') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <label class="control-label"><?php echo $option['name']; ?>:</label>
                                <div id="input-option<?php echo $option['product_option_id']; ?>">
                                    <?php foreach ($option['product_option_value'] as $option_value) { ?>
                                        <div class="radio">
                                            <label>
                                                <input data-zoom-image="<?php echo $option_value['ciopimage']['popup']; ?>" data-ciopimage="<?php echo $option_value['ciopimage']['image']; ?>" data-ciopimagepopup="<?php echo $option_value['ciopimage']['popup']; ?>" type="radio" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option_value['product_option_value_id']; ?>" />
                                                <?php if(!empty($option_value['ciopimage']['thumb'])) { ?>
                                                <img src="<?php echo $option_value['ciopimage']['thumb']; ?>" alt="<?php echo $option_value['name']; ?>" class="product-image-zoom img-thumbnail" data-zoom-image="<?php echo $option_value['ciopimage']['popup']; ?>" />
                                                <?php } else{ ?>
                                                <img src="<?php echo $option_value['image']; ?>" alt="<?php echo $option_value['name'] . ($option_value['price'] ? ' ' . $option_value['price_prefix'] . $option_value['price'] : ''); ?>" class="img-thumbnail" /> 
                                                <?php } ?>
                                                <?php echo $option_value['name']; ?>
                                                <?php if ($option_value['price']) { ?>
                                                    (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
                                                <?php } ?>
                                            </label>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if ($option['type'] == 'text') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
                                <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['value']; ?>" placeholder="<?php echo $option['name']; ?>" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control" />
                            </div>
                        <?php } ?>
                        <?php if ($option['type'] == 'textarea') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
                                <textarea name="option[<?php echo $option['product_option_id']; ?>]" rows="5" placeholder="<?php echo $option['name']; ?>" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control"><?php echo $option['value']; ?></textarea>
                            </div>
                        <?php } ?>
                        <?php if ($option['type'] == 'file') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <label class="control-label"><?php echo $option['name']; ?></label>
                                <button type="button" id="button-upload<?php echo $option['product_option_id']; ?>" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-default"><i class="fa fa-upload"></i> <?php echo $button_upload; ?></button>
                                <input type="hidden" name="option[<?php echo $option['product_option_id']; ?>]" value="" id="input-option<?php echo $option['product_option_id']; ?>" />
                            </div>
                        <?php } ?>
                        <?php if ($option['type'] == 'date') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
                                <div class="input-group date">
                                    <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['value']; ?>" data-format="YYYY-MM-DD" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control" />
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span></div>
                            </div>
                        <?php } ?>
                        <?php if ($option['type'] == 'datetime') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
                                <div class="input-group datetime">
                                    <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['value']; ?>" data-format="YYYY-MM-DD HH:mm" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control" />
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                                    </span></div>
                            </div>
                        <?php } ?>
                        <?php if ($option['type'] == 'time') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
                                <div class="input-group time">
                                    <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['value']; ?>" data-format="HH:mm" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control" />
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                                    </span></div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
                <?php if ($recurrings) { ?>
                    <hr>
                    <h3><?php echo $text_payment_recurring ?></h3>
                    <div class="form-group required">
                        <select name="recurring_id" class="form-control">
                            <option value=""><?php echo $text_select; ?></option>
                            <?php foreach ($recurrings as $recurring) { ?>
                                <option value="<?php echo $recurring['recurring_id'] ?>"><?php echo $recurring['name'] ?></option>
                            <?php } ?>
                        </select>
                        <div class="help-block" id="recurring-description"></div>
                    </div>
                <?php } ?>
					<div class="stocktext" style="padding-bottom:10px"></div>
                    <div class="pbcshipping" style="display:none;font-weight: bold; color: #51afe3; background-color: #32475f; padding: 10px;clear:both;margin-bottom:10px">PB1-C PREORDER:<br>

Order now in order to <br>

receive the 

Ceiling PlayBox <br>
by 12-28-18</div>
                    <div class="quantity-adder" style="clear:both">
                        <div class="quantity-number pull-left">
                            <span class="pull-left"><?php echo $olang->get('entry_qty'); ?></span> 
                            <input class="form-control" type="text" name="quantity" id="input-quantity" size="2" value="<?php echo $minimum; ?>" />
                        </div>
                        <div class="quantity-wrapper pull-left">
                            <span class="add-up add-action fa fa-plus"></span> 
                            <span class="add-down add-action fa fa-minus"></span>
                        </div>                                    
                    </div>
                <div class="cart ">
                        <button type="button" id="button-cart" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-shopping-cart btn-outline-default">
                            <?php echo $button_cart; ?></button>
                    </div>
					<p style="text-align:center;color:#6cabd5"><img src="image/truck.png" style="margin:0 auto;width:50px;padding-top:15px;padding-bottom:10px"><BR>To estimate shipping, choose your options then click Add to Cart/Buy<br>
<br>
<a href="/image/UPS Transit Map.jpg" target="_blank" style="color:blue;text-decoration:underline;font-weight:bold">View Ground Transit Times</a> </p>
 <!-- AddThis Button BEGIN -->
                    <div class="addthis_toolbox addthis_default_style"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>
                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script> 
                    <!-- AddThis Button END -->
              
                </div>

            </div> 
        </div>
	</div> 
 <b class="product-note2" style="visibility:none;display:none;padding-top:10px;clear:both"><span style="color:#3C78D8">NOTICE:</span> The model PB1-C is compatible with Sonos One &amp; Play:1, Sonos speakers not included. The PB1-C is suited for Installation within North America. This product features high-voltage electrical components. Observe all federal, state and local codes when installing and consult a licensed professional.*</b>
           
</div>
<b class="product-note">NOTE: SONOS SPEAKERS SOLD SEPERATELY. THIS MODEL IS ONLY SUITABLE FOR RESIDENTIAL INSTALLATION WITHIN NORTH AMERICA.*</b>

</div>
<div class="tabs-group box">
    <div id="tabs" class="tabnav">
        <ul class="nav nav-theme noborder clearfix">
            <li class="active"><a href="#tab-description" data-toggle="tab"><?php echo $tab_description; ?></a></li>
            <?php if ($attribute_groups) { ?>
                <li><a href="#tab-specification" data-toggle="tab"><?php echo $tab_attribute; ?></a></li>
            <?php } ?>
            <?php if ($review_status) { ?>
                <li><a href="#tab-review" data-toggle="tab"><?php echo $tab_review; ?></a></li>
            <?php } ?>
            <?php if( $productConfig['enable_product_customtab'] && isset($productConfig['product_customtab_name'][$languageID]) ) { ?>
            <li><a href="#tab-customtab" data-toggle="tab"><?php echo $productConfig['product_customtab_name'][$languageID]; ?><span class="triangle-bottomright"></span></a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane active" id="tab-description"><?php echo $description; ?></div>
        <?php if ($attribute_groups) { ?>
            <div class="tab-pane table-responsive" id="tab-specification">
                <table class="table table-bordered">
                    <?php foreach ($attribute_groups as $attribute_group) { ?>
                        <thead>
                            <tr>
                                <td colspan="2"><strong><?php echo $attribute_group['name']; ?></strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($attribute_group['attribute'] as $attribute) { ?>
                                <tr>
                                    <td><?php echo $attribute['name']; ?></td>
                                    <td><?php echo $attribute['text']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        <?php } ?>
        <?php if ($review_status) { ?>
            <div class="tab-pane" id="tab-review">
                <div id="review"></div>
            <p> <a href="#review-form"  class="popup-with-form btn btn-sm btn-danger" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;" ><?php echo $text_write; ?></a></p>

           <div class="hide"> <div id="review-form" class="panel review-form-width"><div class="review-form panel-body">
            <form class="form-horizontal">
                    <h2><?php echo $text_write; ?></h2>
                    <div class="form-group required">
                        <div class="col-sm-12">
                            <label class="control-label" for="input-name"><?php echo $entry_name; ?></label>
                            <input type="text" name="name" value="" id="input-name" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group required">
                        <div class="col-sm-12">
                            <label class="control-label" for="input-review"><?php echo $entry_review; ?></label>
                            <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                            <div class="help-block"><?php echo $text_note; ?></div>
                        </div>
                    </div>
                    <div class="form-group required">
                        <div class="col-sm-12">
                            <label class="control-label"><?php echo $entry_rating; ?></label>
                            &nbsp;&nbsp;&nbsp; <?php echo $entry_bad; ?>&nbsp;
                            <input type="radio" name="rating" value="1" />
                            &nbsp;
                            <input type="radio" name="rating" value="2" />
                            &nbsp;
                            <input type="radio" name="rating" value="3" />
                            &nbsp;
                            <input type="radio" name="rating" value="4" />
                            &nbsp;
                            <input type="radio" name="rating" value="5" />
                            &nbsp;<?php echo $entry_good; ?></div>
                    </div>
                    <?php if ($site_key) { ?>
                  <div class="form-group required">
                    <div class="col-sm-12">
                      <div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>"></div>
                    </div>
                  </div>
                <?php } ?>
                    <div class="buttons">
                        <div class="pull-right">
                            <button type="button" id="button-review" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-default"><?php echo $button_continue; ?></button>
                        </div>
                    </div>
                 </form></div></div></div>
            </div>
        <?php } ?>
        <!-- customtab -->
        <?php if( $productConfig['enable_product_customtab'] && isset($productConfig['product_customtab_content'][$languageID]) ) { ?>
            <div id="tab-customtab" class="tab-content tab-pane custom-tab">
                <div class="inner">
                    <?php echo html_entity_decode( $productConfig['product_customtab_content'][$languageID], ENT_QUOTES, 'UTF-8'); ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

