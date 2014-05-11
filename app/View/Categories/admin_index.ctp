<?php echo $this->Html->link(__('Add'), array('controller' => 'categories', 'action' => 'add')); ?>
<table class="table table-bordered table-hover table-striped table-sorter">
	<thead>
		<th><?php echo __('Name') ?></th>
		<th><?php echo __('Num Quotes') ?></th>
		<th><?php echo __('Created') ?></th>
		<th><?php echo __('Modified') ?></th>
		<th><?php echo __('Actions') ?></th>
	</thead>
	<tbody>
		<?php foreach ($data as $d): ?>
		<tr>
			<td>
				<?php if(!is_null($d['AttachmentImage']['model'])): ?>
				<?php echo $this->Attach->image($d['AttachmentImage'], 'thumb') ?>
			<?php endif ?>
				<?php echo $d['Category']['name']?></td>
			<td><?php echo $d['Category']['quote_count']?></td>
			<td><?php echo $this->Time->format($d['Category']['created'], '%d/%m/%Y %H:%M:%S') ?></td>
			<td><?php echo $this->Time->format($d['Category']['modified'], '%d/%m/%Y %H:%M:%S') ?></td>
			<td>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'categories', 'action' => 'edit', $d['Category']['id'])); ?>
				<?php echo $this->Html->link(__('Delete'), array('controller' => 'categories', 'action' => 'delete', $d['Category']['id'])); ?>
			</td>
		</tr>
	<?php endforeach ?>
	</tbody>
</table>