<?php
	//call by framework Auto Search
	// $configsearch = $this->config->get('pavautosearch_module');
	// $autosearch = empty($configsearch)?'':$helper->renderModule( 'module/pavautosearch' );
	//$autosearch = null;

	// $verticalmenu = $this->config->get('pavverticalmenu_module');
	// $verticalmenu = empty($configsearch)?'':$helper->renderModule( 'module/pavverticalmenu' );
	$this->language( 'module/themecontrol' );
	$objlang = $this->registry->get('language');
 	
	$autosearch = $helper->renderModule( 'pavautosearch' );
	$megamenu = $helper->renderModule('pavmegamenu');

?>
<div id="header-top">
<nav id="topbar" class="topbar-v1">
  <div class="container">
  	<div class="inner">
  		<div class="row">
  			<div class="show-desktop col-xs-12">
	  			<div class="quick-access pull-left">
	  				<div class="login links">
	  					<?php if ($logged) { ?>
							<a href="<?php echo $logout; ?>"><?php echo $text_logout; ?></a>
						<?php } else { ?>
							<a href="<?php echo $register; ?>"><?php echo $text_register; ?></a> or
							<a href="<?php echo $login; ?>"><?php echo $text_login; ?></a>		
	    				<?php } ?>					
					</div>
					<!--<div class="btn-group">
  						<div data-toggle="dropdown" class="dropdown-toggle btn-theme-normal">
                            <i class="fa fa-cog"></i>	                                     
                            <span class="text-label"><?php echo $objlang->get("text_setting"); ?></span>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="dropdown-menu">
                        	<?php echo $language; ?>
                        	<?php echo $currency; ?>
                        </div>
                    </div>    -->
                    <div class="btn-group">
  						<div data-toggle="dropdown" class="dropdown-toggle btn-theme-normal">
                            <i class="fa fa-user"></i>	                                     
                            <span class="text-label"><?php echo $text_account; ?></span>
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
	  			</div>
	  			<div class="quick-action pull-right">
	  				<div class="shopping-cart">
						<?php echo $cart; ?>
					</div>			
	  			</div>	  			
	  		</div>
	    </div>
	</div> <!-- end inner -->	
  </div>
</nav>

<header class="main-menu mainnav-v1">
	<div class="nav-search visible">
		<?php echo $search; ?>
	</div>	
	<div class="container"> <div class="row">
		<div class="logo inner navbar-header">					
			<?php if( $logoType=='logo-theme'){ ?>
			<a href="/home.php" class="navbar-brand top-logo">
				<img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" class="circlelogo" />
			</a>
			<?php } elseif ($logo) { ?>
			<a href="/home.php" class="navbar-brand top-logo">
				<img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" class="circlelogo" />
			</a>
			<?php } ?> 
		</div>	
		<div id="pav-mainnav" class="col-md-12">
			<div class="pav-megamenu">			
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
				                            <li class="parent dropdown">
				                                <a href="<?php echo $category['href']; ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $category['name']; ?>
				                                    <span class="caret"></span>
				                                </a>
				                            </li>
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
</div>		  
	
