<?php

// Get the contents of the JSON file for CONFIGURATION
$strJsonFileContents = file_get_contents('../CONFIGURATIONS/config.json');
$config = json_decode($strJsonFileContents, true);
extract($config);
extract($CONFIGURATION);
extract($MAIL_CONFIGURATION);



include '../submit.php';

?>
