<?php  
header("Content-disposition: attachment; filename: date.txt");
header("Content-type: MIME");
readfile("date.txt");
?>