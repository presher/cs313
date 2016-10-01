<?php require_once('header.php');

?>
<h1>Poll Results</h1>

<table>
	<thead>
		<tr>
			<th>Favorite Book</th>
			<th>Place you would like to visit</th>
			<th>Favorite Season</th>
			<th>Favorite Tree</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo get_form_request('favorite_book') ?></td>
			<td><?php echo get_form_request('visit') ?></td>
			<td><?php echo get_form_request('favrite_Season') ?></td>
			<td><?php echo get_form_request('favorite_Tree') ?></td>
		</tr>
	</tbody>
</table>

<?php require_once('footer.php');?>