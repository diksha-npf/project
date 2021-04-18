<h1>All clients</h1>
<p><?= $this->Html->link('Add Client', ['action' => 'add']) ?></p>
<table border="1">
<tr>
	<th style="text-align:center;">Id</th>
	<th style="text-align:center;">Client Name</th>
	<th colspan="2"style="text-align:center;">Actions</th>
</tr>

<?php foreach ($clients as $client) 
{ 
?>
	<tr>
	<td style="text-align:center;"><?php echo $client->id; ?></td>
	<td style="text-align:center;">
	<?= $this->Html->link($client->name, ['action' => 'view', $client->id]); ?>
	</td>
	<td style="text-align:center;">
	<?= $this->Form->postLink(
	'Delete',
	['action' => 'delete', $client->id],
	['confirm' => __('Are you sure you want to delete client with id # {0}?',$client->id)]);
	?>
	</td>
	<td style="text-align:center;">
	<?= $this->Html->link('Edit', ['action' => 'edit', $client->id]); ?>
	</td>
	</tr>
<?php
}
?>	
</table>