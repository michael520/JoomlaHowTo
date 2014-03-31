<?php
/*
 * view for items
 */
$orderCol = $this->state->get('list.ordering');
$orderDir = $this->state->get('list.direction');
$filterSearch = $this->state->get('filter.search');
?>
<form action="<?php echo JRoute::_('index.php'); ?>"
	method="post"
	name="adminForm"
	id="adminForm">
	<div class="pull-left">
		<div class="btn-group">
			<input type="text" value="<?php echo $filterSearch; ?>" name="filter_search"
				placeholder="<?php echo JText::_('JSEARCH_FILTER'); ?>" />
		</div>

		<div class="input-prepend input-append">
			<button type="submit" class="btn hasTooltip" title="<?php echo JHtml::tooltipText('JSEARCH_FILTER_SUBMIT'); ?>">
				<i class="icon-search"></i>
			</button>
			<button id="btn-clear-filters" type="button" class="btn hasTooltip" title="<?php echo JHtml::tooltipText('JSEARCH_FILTER_CLEAR'); ?>">
				<i class="icon-remove"></i>
			</button>
		</div>
	</div>
	<div>
		<div class="pull-right">
			<?php echo $this->pagination->getLimitBox(); ?>
		</div>
		<div class="clearfix"></div>
	</div>
	<h1>view for items</h1>
		<table class="table table-bordered">
			<thead>
			<tr>
				<th width="1%">
					<?php echo JHtml::_('grid.checkall'); ?>
				</th>
				<th>

					<?php echo JHtml::_('grid.sort', 'CreateTime', 'a.createtime', $orderDir, $orderCol); ?>
				</th>
				<th>
					<?php echo JHtml::_('grid.sort', 'Title', 'a.title', $orderDir, $orderCol); ?>
				</th>
				<th>
					<?php echo JHtml::_('grid.sort', 'Id', 'a.id', $orderDir, $orderCol); ?>
				</th>
			</tr>
			</thead>
			<tfoot>
			<tr>
				<td colspan="4">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
			</tfoot>
			<tbody>
			<?php foreach ($this->items as $i => $item): ?>
				<tr>
					<td>
						<?php echo JHtml::_('grid.id', $i, $item->id); ?>
					</td>
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
	<input type="hidden" name="option" value="com_bablog"/>
	<input type="hidden" name="task" value=""/>
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="filter_order" value="<?php echo $orderCol; ?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $orderDir; ?>" />
	<?php echo JHtml::_('form.token'); ?>
</form>
