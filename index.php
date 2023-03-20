<?php

// Create counter.txt file and add these lines at the end of your website page
$file = "counter.txt";

$counter = trim(file_get_contents($file));
$counter++;

// Save website visitor count value to counter.txt file.
// Transfer this value to your database at the end of day if you want
file_put_contents($file, $counter);

?>
