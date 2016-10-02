<?php


chmod("poll_results.txt",0600);
//file_put_contents("poll_results.txt", $_POST['polls'], FILE_APPEND) ;
$filename = "poll_results.txt";
$data = $_POST['polls'];
 file_put_contents($filename, $data, FILE_APPEND); 

                   
  

?>
