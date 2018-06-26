 
<?php if( !empty($blogs) ) { ?>
<div class="widget-blogs box <?php $addition_cls?> <?php if ( isset($stylecls)&&$stylecls) { ?>box-<?php echo $stylecls; ?><?php } ?>">
	<?php if( $show_title ) { ?>
	<h3 class="widget-title"><?php echo $heading_title?></h3>
	<?php } ?>
	<div class="widget-inner">	 
		<div class="pavblog-latest row">
			<?php foreach( $blogs as $key => $blog ) { $key = $key + 1;?>
			<div class="col-lg-<?php echo floor(12/$cols);?> col-md-<?php echo floor(12/$cols);?> col-sm-<?php echo floor(12/$cols);?>">
				<div class="blog-item">					
					<div class="blog-body">
						<?php if( $blog['thumb']  )  { ?>
							<div class="image">
								<img src="<?php echo $blog['thumb'];?>" title="<?php echo $blog['title'];?>" alt="<?php echo $blog['title'];?>" class="img-responsive"/>
							</div>
						<?php } ?>
						<br/>
						<div class="create-date">
							<div class="created">
								<span class="day"><?php echo date("d",strtotime($blog['created']));?></span>
								<span class="month"><?php echo date("M",strtotime($blog['created']));?></span> 								
							</div>
						</div>
						<div class="create-info">
							<div class="inner">
								<div class="blog-header">
									<h6 class="blog-title" style="font-weight: bold;">
										<a href="<?php echo $blog['link'];?>" title="<?php echo $blog['title'];?>"><?php echo $blog['title'];?></a>
									</h6>
								</div>
								<div class="description">
									<?php $blog['description'] = strip_tags($blog['description']); ?>
									<?php echo utf8_substr( $blog['description'],0, 80);?>...
								</div>
							</div>							
						</div>						
					</div>						
				</div>
			</div>
			<?php if( ( $key%$cols==0 || $key == count($blogs)) ){  ?>
			<?php } ?>
			<?php } ?>
		</div>
	</div>
</div>
<?php } ?>