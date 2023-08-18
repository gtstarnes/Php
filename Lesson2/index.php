<?php 

require 'functions.php';
require 'router.php'; 

$dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";
$pdo = new PDO($dsn);

$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();

$posts = $statement->fetchALL(PDO::FETCH_ASSOC);


foreach ($posts as $post) {
    echo "<li>" . $post['Title'] . "</li>";
} 