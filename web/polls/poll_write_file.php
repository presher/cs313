<?php


//chmod("poll_results.txt",0600);
//file_put_contents("poll_results.txt", $_POST['polls'], FILE_APPEND) ;
$filename = "poll_results.php";
$data = $_POST['polls'];
function file_put_contents($filename, $data, FILE_APPEND) 
{ 
  if( $file = fopen($filename, 'w') ) 
  { 
    $bytes = fwrite($file, is_array($data) ? implode('', $data) : $data); 
    fclose($file); return $bytes; // return the number of bytes written to the file 
  } 
}   
                   
  

?>
