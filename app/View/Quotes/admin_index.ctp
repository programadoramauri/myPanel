<?php echo $this->Html->link(__('Add'), array('controller' => 'quotes', 'action' => 'add')); ?>

<table>
	<thead>
		<tr>
			<th><?php echo __('Author'); ?></th>
			<th><?php echo __('Category'); ?></th>
			<th><?php echo __('Quote'); ?></th>
			<th><?php echo __('Created') ?></th>
			<th><?php echo __('Modified') ?></th>
			<th><?php echo __('Actions'); ?>
	</thead>
	<tbody>
		<?php foreach($data as $d): ?>
			<tr>
				<td><?php echo $d['Author']['name']?></td>
				<td><?php echo $d['Category']['name']?></td>
				<td><?php echo $d['Quote']['quote']?></td>
				<td><?php echo $this->Time->format($d['Quote']['created'], '%d/%m/%Y %H:%M:%S') ?></td>
				<td><?php echo $this->Time->format($d['Quote']['modified'], '%d/%m/%Y %H:%M:%S') ?></td>
				<td>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'quotes', 'action' => 'edit', $d['Quote']['id'])); ?>
					<?php echo $this->Html->link(__('Delete'), array('controller' => 'quotes', 'action' => 'delete', $d['Quote']['id'])); ?>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>