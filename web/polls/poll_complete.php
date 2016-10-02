<?php 
$_SESSION["visit"] = get_form_request('visit');
$_SESSION["favoriteBook"] = get_form_request('favoriteBook');
$_SESSION["favoriteSeason"] = get_form_request;
$_SESSION["favoriteTree"] = get_form_request;
?>
<?php require_once('header.php'); ?>

<div class="container">

<h1>Poll Complete</h1>
	<div class="row">
        <div class="col-md-12">
            <div class="boxed">

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
			<td><?php echo $_SESSION["favoriteBook"]; ?></td>
			<td><?php echo get_form_request('visit'); ?></td>
			<td><?php echo get_form_request('favoriteSeason'); ?></td>
			<td><?php echo get_form_request('favoriteTree'); ?></td>
		</tr>
	</tbody>
</table>
			</div>
		</div>
	</div>
</div>
<a href="https://shrouded-shore-88291.herokuapp.com/polls/index.php">Home</a>
<?php require_once('footer.php');?>