
<div class="widget-html <?php echo $addition_cls ?>  <?php if( isset($stylecls)&&$stylecls ) { ?>box-<?php echo $stylecls;?><?php } ?>">
	<?php if( $show_title ) { ?>
		
		<h3 class="widget-title"><span><?php echo $heading_title?></span></h3>
		
	<?php } ?>
	<div class="widget-inner clearfix">
		 <?php echo htmlspecialchars_decode( $html ); ?>
	</div>
</div>
