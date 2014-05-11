<?php echo $this->Html->link(__('Add'), array('controller' => 'authors', 'action' => 'add')); ?>
<table>
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
				<?php echo $d['Author']['name']?>
			</td>
			<td><?php echo $d['Author']['quote_count']?></td>
			<td><?php echo $this->Time->format($d['Author']['created'], '%d/%m/%Y %H:%M:%S') ?></td>
			<td><?php echo $this->Time->format($d['Author']['modified'],  '%d/%m/%Y %H:%M:%S')?></td>
			<td>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'authors', 'action' => 'edit', $d['Author']['id'])); ?>
				<?php echo $this->Html->link(__('Delete'), array('controller' => 'authors', 'action' => 'delete', $d['Author']['id'])); ?>
			</td>
		</tr>
	<?php endforeach ?>
	</tbody>
</table>