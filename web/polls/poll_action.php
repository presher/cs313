<?php if (!isset($_SESSION)){
	include('ballot.php');
	return;
}else { include('poll_results.php');}?>