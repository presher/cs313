<?php

date_default_timezone_set('America/Denver');
/**
 * Writes an array of data to a given point in a file.
 */
function write_request_to_file(&$file_ptr, $request) {
    foreach ($request as $key => $val) {
        if (!is_array($val)) {
            if (substr($key, 0, 1) !== '_') {
                $file_ptr .= $key . ': ' . $val . "\n";
            }
        } else {
            write_request_to_file($file_ptr, $val);
        }
    }
}
$file = 'poll_results.txt';
$today = date("F j, Y, g:i a");
$current = file_get_contents($file);
$current .= $today . "\n\n";
write_request_to_file($current, get_full_form_request());
$current .= "\n";
file_put_contents($file, $current);

$myfile = fopen("poll_results.txt", "w") or die("Unable to open file!");

$txt = "hello";
fwrite($myfile, $txt);
fclose($myfile);
?>