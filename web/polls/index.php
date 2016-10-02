<?php 
// note leading dot in '.yourdomain.com': 
setcookie('poll', 1, time() + 365*24*60*60, '/'); 
if(!empty($_COOKIE['poll_results.php'])) 
{ 
   header('Location: poll_results.php'); 
   exit; 
} 
<?php require_once('header.php'); ?>

<h1>Welcome To My Poll</h1>
	<p>Please choose a detination</p>
		<a href= "https://shrouded-shore-88291.herokuapp.com/polls/ballot.php">Take Poll</a>
		<a href= "https://shrouded-shore-88291.herokuapp.com/polls/poll_results.php">See Poll Results</a>
<?php require_once('footer.php'); ?>

?>