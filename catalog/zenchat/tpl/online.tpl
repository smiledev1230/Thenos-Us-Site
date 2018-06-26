<p><?php translate('Please fill out the form below and representative will be with you shortly.'); ?></p>
<input type="hidden" name="token" value="<?php echo generate_token('form'); ?>">

<label for="username"><?php translate('Name'); ?></label>
<input class="zen_username form-control" type="text" name="username" id="username" placeholder="<?php translate('Required'); ?>">

<label for="email"><?php translate('Email'); ?></label>
<input class="zen_email form-control" type="text" name="email" id="email" placeholder="<?php translate('Required'); ?>">
<div style="display:none">
<label for="department_id"><?php translate('Department'); ?></label>
<select class="form-control" name="department_id" id ="department_id">
	<?php foreach ($departments as $value){ ?>

		<?php if ($value['total'] == 0){ ?>
		
			<option disabled="disabled" value="<?php echo $value['department_id']; ?>"><?php echo $value['department_name']; ?> - <?php translate('(Offline)'); ?></option>
		<?php }else{ ?>
			<option value="<?php echo $value['department_id']; ?>"><?php echo $value['department_name']; ?></option>
		<?php } ?>
	<?php } ?>
</select>
</div>
<label for="message"><?php translate('Message'); ?></label>
<textarea class="zen_nachricht form-control" name="message" id="message" rows="4" placeholder="<?php translate('Required'); ?>"></textarea>
<p><button class="btn_default" type="button" id="start_chat" style="background-color: <?php get_option('background_color_3'); ?>; color: <?php get_option('color_3'); ?>;"><?php translate('Start chat'); ?></button></p>

