<table class="table">
	<thead>
		<tr>
			<th><?php translate('Name'); ?></th>
			<th><?php translate('IP address'); ?></th>
			<th><?php translate('Status'); ?></th>
			<th><?php translate('Department'); ?></th>
			<th><?php translate('Total time'); ?></th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
	<?php $i = 1; ?>
	<?php foreach ($pending_chat as $value){ ?>
		<tr>

			<td><?php echo $value['username']; ?></td>
			
			<td><?php echo $value['ip_address']; ?></td>

			<?php if ($value['chat_status'] == 0){ ?>
				<td><?php translate('In queue'); ?></td>
			<?php }elseif ($value['chat_status'] == 2){ ?>
				<td><?php translate('In chat'); ?></td>
			<?php } ?>
			
			<td><?php echo $value['department_name']; ?></td>
			<td><?php echo $value['elapsed_time']; ?></td>
			
			<?php if ($value['chat_status'] == 0 && $i++){ ?>
				<td>&nbsp;</td>
				<td><a href="#" class="start_chat btn btn-success btn-sm" data-id="<?php echo $value['chat_id']; ?>"><?php translate('Start chat'); ?></a></td>
			<?php }elseif ($value['chat_status'] == 2 && $i++){ ?>
				<td><a href="#" class="open_chat btn btn-success btn-sm" data-id="<?php echo $value['chat_id']; ?>"><?php translate('Click to chat'); ?></a></td>
				<td><a href="#" class="watch_chat btn btn-primary btn-sm" data-id="<?php echo $value['chat_id']; ?>" title=""><?php translate('Watch the chat'); ?></a></td>
			<?php } ?>
			<?php $i++; ?>
		</tr>
	<?php } ?>
	</tbody>
</table>
<div style="clear:both"></div>