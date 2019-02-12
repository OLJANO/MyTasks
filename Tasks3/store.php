<?php
require 'database/QueryBuilder.php';
$db = new QueryBuilder;
$task = $db->addTask($data);