<?php


chmod("poll_results.txt",0600);
file_put_contents("poll_results.txt", $_POST['polls'], FILE_APPEND) ;


?>
