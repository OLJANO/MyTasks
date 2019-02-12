<?php

$id = $_GET['id'];

require 'database/QueryBuilder.php';
$db = new QueryBuilder;
$db->deleteTask($id);
header('Location: /');
