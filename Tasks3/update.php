<?php

$data = [

"id" => $_GET['id'],

"title" => $_POST['title'],

"content" => $_POST['content']

];

require 'database/QueryBuilder.php';
$db = new QueryBuilder;
$task = $db->updateTask($data);

header("Location: http://localhost/MyNotea0/Tasks2/"); exit;