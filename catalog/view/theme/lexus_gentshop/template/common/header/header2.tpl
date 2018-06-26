<?php
	//call by framework Auto Search
	// $configsearch = $this->config->get('pavautosearch_module');
	// $autosearch = empty($configsearch)?'':$helper->renderModule( 'module/pavautosearch' );
	//$autosearch = null;

	// $verticalmenu = $this->config->get('pavverticalmenu_module');
	// $verticalmenu = empty($configsearch)?'':$helper->renderModule( 'module/pavverticalmenu' );
	$this->language( 'module/themecontrol' );
	$objlang = $this->registry->get('language');
	$megamenu = $helper->renderModule('pavmegamenu');

?>
<div id="header-top">	
	<header class="main-menu mainnav-v4">		
		<div class="container"> <div class="row">
			<div class="col-md-2 col-sm-6 col-xs-4 logo inner cols">					
				<?php if( $logoType=='logo-theme'){ ?>
				<div id="logo-theme" class="logo-store">
					<a href="<?php echo $home; ?>">
						<img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" class="img-responsive" />
					</a>
				</div>
				<?php } elseif ($logo) { ?>
				<div id="logo" class="logo-store">
					<a href="<?php echo $home; ?>">
						<img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" class="img-responsive" />
					</a>
				</div>
				<?php } ?> 
			</div>	
			<div id="pav-mainnav" class="col-md-10 col-sm-6 col-xs-8 cols">
				<div class="quick-action pull-right">
					
					<div class="btn-group">
  						<div class="btn-theme-normal">
                            <i class="fa fa-cog"></i>	 
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="dropdown-menu">
                        	<?php echo $language; ?>
                        	<?php echo $currency; ?>
                        </div>
                    </div>
                    <div class="btn-group">
  						<div class="btn-theme-normal">
                            <i class="fa fa-user"></i>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="dropdown-menu">
	  						<ul class="links-account">
			  					<li><a href="<?php echo $wishlist; ?>"><i class="fa-fw fa fa-heart"></i><?php echo $text_wishlist; ?></a></li>
			  					<li><a href="<?php echo $account; ?>"><i class="fa-fw fa fa-user"></i><?php echo $text_account; ?></a></li>
			  					<li><a href="<?php echo $shopping_cart; ?>"><i class="fa-fw fa fa-shopping-cart"></i><?php echo $text_shopping_cart;; ?></a></li>
			  					<li><a href="<?php echo $checkout; ?>"><i class="fa-fw fa fa-file"></i><?php echo $text_checkout; ?></a></li>
			  				</ul>
	  					</div>
  					</div>
					<?php echo $cart; ?>
				</div>
				<div class="pav-megamenu pull-right">			
					<button data-toggle="offcanvas" class="canvas-menu hidden-lg hidden-md" type="button"><span class="fa fa-bars"></span> Menu</button>
					<?php
					/**
					 * Main Menu modules: as default if do not put megamenu, the theme will use categories menu for main menu
					 */
					$modules = $helper->renderModule('pavmegamenu');

					if (count($modules) && !empty($modules)) { ?>

					    
					<?php echo $modules; ?>
					 

					<?php } elseif ($categories) { ?>

				    <div class="navbar navbar-default"> 
				        <nav id="mainmenutop" class="megamenu" role="navigation"> 
				            <div class="navbar-header">
					            <div class="collapse navbar-collapse navbar-ex1-collapse hidden-sm hidden-xs">
					                <ul class="nav navbar-nav megamenu">
					                    <li><a href="<?php echo $home; ?>" title="<?php echo $objlang->get('text_home'); ?>"><?php echo $objlang->get('text_home'); ?></a></li>
						                    <?php foreach ($categories as $category) { ?>
						                        <?php if ($category['children']) { ?>			
						                            <li class="parent dropdown deeper ">
						                                <a href="<?php echo $category['href']; ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $category['name']; ?>
						                                    <span class="caret"></span>
						                                </a>
						                            <?php } else { ?>
						                            <li>
						                                <a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a>
						                            <?php } ?>
						                            <?php if ($category['children']) { ?>
						                                <ul class="dropdown-menu">
						                                    <?php for ($i = 0; $i < count($category['children']);) { ?>
						                                        <?php $j = $i + ceil(count($category['children']) / $category['column']); ?>
						                                        <?php for (; $i < $j; $i++) { ?>
						                                            <?php if (isset($category['children'][$i])) { ?>
						                                                <li><a href="<?php echo $category['children'][$i]['href']; ?>"><?php echo $category['children'][$i]['name']; ?></a></li>
						                                            <?php } ?>
						                                        <?php } ?>
						                                    <?php } ?>
						                                </ul>
						                            <?php } ?>
						                        </li>
						                    <?php } ?>		                    
					                </ul>
					            </div>	
				            </div>
				        </nav>
				    </div>   
				<?php } ?>
				</div>
			</div>		
		</div></div>
	</header>
	<!-- menu -->  
	<div class="nav-search visible">
		<?php echo $search; ?>
	</div>
</div>		  
	

