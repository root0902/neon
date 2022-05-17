<?php
ini_set('php_value upload_max_filesize','1000M');
ini_set('php_value post_max_size','2000M');
ini_set('php_value memory_limit', '3000M');
ini_set('php_value max_execution_time', '180');
ini_set('php_value max_input_time' ,'180');
ini_set('php_value display_errors' ,'On');
ini_set('php_value upload_max_filesize', '10M');

 $bitrate = $_POST["bitrate"];
 exec("ffmpeg.exe");
 exec("ffmpeg -i php/files/sample.mp4 -vcodec libx265 -crf 28 output.mp4");
 echo $bitrate;
?>
