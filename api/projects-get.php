<?php
include 'header.php';
include 'connect.php';

$projectsJson = $firebase->get('projects');

echo $projectsJson;

?>
