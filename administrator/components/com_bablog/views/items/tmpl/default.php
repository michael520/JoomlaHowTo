<?php
/*
 * view for items
 */
?>
<h1>view for items</h1>
<table class="table table-bordered">
	<thead>
	<tr>
		<th>
			CreateTime
		</th>
		<th>
			Title
		</th>
		<th>
			Id
		</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($this->items as $i => $item): ?>
		<tr>
			<td>
				<?php echo $item->createtime; ?>
			</td>
			<td>
				<a href="<?php echo JRoute::_('index.php?option=com_bablog&task=item.edit&id=' . $item->id); ?>">
					<?php echo $this->escape($item->title); ?>
				</a>
			</td>
			<td>
				<?php echo $item->id; ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
