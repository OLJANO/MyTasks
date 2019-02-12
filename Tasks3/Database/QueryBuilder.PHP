<?p<?php
class QueryBuilder
{
function getAllTasks()
{
$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
$sql = "SELECT*FROM tasks";
$statement = $pdo->prepare($sql);
$result = $statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
return $tasks;
} 
function addTask($data)
{  
$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
$sql ="INSERT INTO tasks (title, content) VALUES (:title, :content)";
$statement = $pdo->prepare($sql);
$statement->execute($data);
}
function getTask($id)
{
$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
$statement = $pdo->prepare("SELECT * FROM tasks WHERE id=:id");
$statement->bindParam(":id", $id);
$statement->execute();
$tasks = $statement->fetch(PDO::FETCH_ASSOC);

return $task;
}
function updateTask($data)
{
$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
$sql ='UPDATE tasks title=:title, content=:content WHERE id=:id';
$statement = $pdo->prepare($sql);
$statement->execute($data);
}
function deleteTask($id)
{
$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
$sql = 'DELETE FROM tasks WHERE id=:id';
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $id);
$statement->execute();
}
}



