<div id="title_def"><?php $lang('admin_rooms_title'); ?></div>
<?php $display('layout/adminmenu'); ?>
<div id="admin_content">
	<?php $display('layout/messages'); ?>
	<?php $display('layout/paginator', array('data' => $paginator)); ?>
	<?php if(empty($rooms)): ?>
		<i><?php $lang('no_rooms'); ?></i>
	<?php else: ?>
		<table class="data_table" cellspacing="0" cellpadding="0">
			<tr>
				<th><?php $lang('room_name'); ?></th>
				<th><?php $lang('actions'); ?></th>
			</tr>
			<?php foreach($rooms as $room): ?>
				<tr>
					<td><?php $esc($room['name']); ?></td>
					<td><a href="#" data-href="admin_edit_room&room_id=<?php echo $room['id']; ?>"><?php $lang('edit'); ?></a></td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>
</div>