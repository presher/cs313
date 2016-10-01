<?php 
 if (!isset($_SESSION)) session_start();?>
 <?php require_once('form_action.php');?>
 <?php require_once('header.php');?>
 <?php require_once('poll_write_file.php') ?>
    <h1>CS 313 03.6 - Individual Activity</h1>
		<h2>Thank you for your Participation!</h2>
    <div class="name">
        <strong>Name:</strong> <?php echo $_POST['name']; ?>
    </div>
    <div class="email">
        <strong>Email:</strong> <?php echo '<a href="mailto:' . $_POST['email'] . '">' . $_POST['email'] . '</a>'; ?>
    </div>
    <div class="favoriteBook">
        <strong>Favorite Book:</strong> <?php echo $_POST['favoriteBook']; ?>
    </div>
    <div class="visit">
        <strong>Place you would like to visit:</strong> <br>
        <?php
            $visit = $_POST['visit'];
            foreach ($visit as $place) {
                echo "$place<br>";
            }
        ?>
    </div>
	<div class="favoriteSeason">
		<strong>Favorite Season:</strong> 
		<?php echo $_POST['favoriteSeason'];?>
	</div>
	<div class="favoriteTree">
		<strong>Favorite Tree:</strong> <?php echo $_POST['favoriteTree'];?>
    <div class="comments">
        <strong>Comments:</strong> <?php echo $_POST['comments']; ?>
    </div>
	<a href= "https://shrouded-shore-88291.herokuapp.com/polls/poll_results.php">See Poll Results</a>
<?php require_once('footer.php');?>