<script type="text/javascript">
setInterval(get_chat_status, 5000);
</script>

<div id="client_chat">
	<div id="client_testata" style="background-color: <?php get_option('background_color_1'); ?>; color: <?php get_option('color_1'); ?>;">
		<span class="pull_left">&nbsp;</span>
			<span class="pull_right">&#x25B2;</span>
		<div class="clearfix"></div>
	</div>
	
	<div id="client_content" style="background-color: <?php get_option('background_color_2'); ?>; color: <?php get_option('color_2'); ?>;">
		
		<div class="loading">
			<div class="loading_opacity"></div>
			</div>
		
		<form id="<?php echo $form_1; ?>"></form>
		<form id="<?php echo $form_2; ?>"></form>
		
	</div>

</div>
