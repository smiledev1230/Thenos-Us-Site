<div id="chat_messages">
	
	<input type="hidden" name="token" value="<?php echo generate_token('form'); ?>">
	
	<div class="queue">
		<span><?php translate('Thank you for contacting us, an operator will be with you shortly.'); ?></span>
	</div>
	
	<div class="messages">
		<div class="message_content">
		</div>
	</div>
	
	<div class="chat_options pull_left">
		<a href="#" style="color:<?php get_option('color_2'); ?>;" class="musichetta"><i class="fa fa-volume-up fa-lg"></i></a>
	</div>
	
	<div class="operator_typing pull_right">
		<span>awesome thenos rep is typing now...</span>
	</div>
	<div class="clearfix"></div>
	
	<textarea class="form-control utente_area" id="message" name="message"></textarea>
	<p>
		<button class="btn_default utente_send" type="button" id="send_message" style="background-color: <?php get_option('background_color_3'); ?>; color: <?php get_option('color_3'); ?>;">SEND</button>
		<span style="float:right"><button class="btn_default" type="button" id="stop_chat" style="background-color: <?php get_option('background_color_3'); ?>; color: <?php get_option('color_3'); ?>;">End chat</button></span>
	</p>
	
</div>
