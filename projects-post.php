<?php
include 'header.php';
include 'connect.php';

$post = json_decode(trim(file_get_contents("php://input")));

$projectsArr = array(
  'name' => $post->name,
  'pm_name' => $post->pm_name
);

$res = $firebase->push('projects', $projectsArr);
echo $res;
?>
