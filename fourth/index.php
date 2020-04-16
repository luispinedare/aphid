<?php

// Get the contents of the JSON file for CONFIGURATION
$strJsonFileContents = file_get_contents('../CONFIGURATIONS/config.json');
$config = json_decode($strJsonFileContents, true);
extract($config);
extract($CONFIGURATION);


// Get the contents of the JSON file for CONTENT
$strJsonFileContents = file_get_contents('../CONTENTS/'.basename(__DIR__).'.json');
$content = json_decode($strJsonFileContents, true);
extract($content);
extract($METADATA);


// Get the contents of the JSON file for MENU
$strJsonFileContents = file_get_contents('../CONFIGURATIONS/menu.json');
$menu = json_decode($strJsonFileContents, true);


include '../functions.php';
include '../main.php';

?>
