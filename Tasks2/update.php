<?php

$data = [

"id" => $_GET['id'],

"title" => $_POST['title'],

"content" => $_POST['content']

];

$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");

$sql ='UPDATE tasks title=:title, content=:content WHERE id=:id';

$statement = $pdo->prepare($sql);

$statement->execute($data);

header("Location: http://localhost/MyNotea0/Tasks2/"); exit;