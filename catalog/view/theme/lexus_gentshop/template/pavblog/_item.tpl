<div class="blog-item box">
<?php if( $config->get('cat_show_title') ) { ?>
	
	<div class="box-content">
		<div class="blog-body image">
			<?php if( $blog['thumb'] && $config->get('cat_show_image') )  { ?>
			<img class="img-responsive" src="<?php echo $blog['thumb'];?>" title="<?php echo $blog['title'];?>"/>
			<?php } ?>
			
		</div>
		<div class="blog-header clearfix">
			<?php if( $config->get('cat_show_created') ) { ?>
				<span class="created">
					<span class="day"><?php echo date("d",strtotime($blog['created']));?></span>
					<span class="month"><?php echo date("M",strtotime($blog['created']));?></span> /
					<span class="month"><?php echo date("Y",strtotime($blog['created']));?></span>
				</span>
			<?php } ?>
			<h4 class="blog-title">	<a href="<?php echo $blog['link'];?>" title="<?php echo $blog['title'];?>"><?php echo $blog['title'];?></a></h4>
			<div class="blog-meta">
				<?php if( $config->get('cat_show_author') ) { ?>
				<span class="author"><i class="fa fa-pencil"></i><span><?php echo $objlang->get("text_write_by");?></span> <?php echo $blog['author'];?></span>
				<?php } ?>
				<?php if( $config->get('cat_show_category') ) { ?>
				<span class="publishin">
					<i class="fa fa-thumb-tack"></i>
					<span><?php echo $objlang->get("text_published_in");?></span>
					<a href="<?php echo $blog['category_link'];?>" title="<?php echo $blog['category_title'];?>"><?php echo $blog['category_title'];?></a>
				</span>
				<?php } ?>
				
				<?php if( $config->get('cat_show_hits') ) { ?>
				<span class="hits"><i class="fa fa-insert-template"></i><span><?php echo $objlang->get("text_hits");?></span> <?php echo $blog['hits'];?></span>
				<?php } ?>
				<?php if( $config->get('cat_show_comment_counter') ) { ?>
				<span class="comment_count"><i class="fa fa-comment"></i><span><?php echo $objlang->get("text_comment_count");?></span> <?php echo $blog['comment_count'];?></span>
				<?php } ?>
			</div>			
		</div>
		<?php } ?>
		<footer>			
			<div class="blog-body">		
				<?php if( $config->get('cat_show_description') ) {?>
				<div class="description">
					<?php echo $blog['description'];?>
				</div>
				<?php } ?>
				<?php if( $config->get('cat_show_readmore') ) { ?>
				<div class="btn-more-link main-column">
					<a href="<?php echo $blog['link'];?>" class="readmore btn btn-default"><?php echo $objlang->get('text_readmore');?></a>
				</div>
				<?php } ?>
			</div>
		</footer>
	</div>	
</div>