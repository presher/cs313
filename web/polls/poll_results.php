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
			<td><?php echo get_form_request('favoriteBook'); ?></td>
			<td><?php echo get_form_request('visit'); ?></td>
			<td><?php echo get_form_request('favoriteSeason'); ?></td>
			<td><?php echo get_form_request('favoriteTree'); ?></td>
		</tr>
	</tbody>
</table>
<a href="https://shrouded-shore-88291.herokuapp.com/polls/index.php">Home</a>
<?php require_once('footer.php');?>