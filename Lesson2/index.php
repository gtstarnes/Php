<?php 

require 'functions.php';
require 'router.php'; 
require 'Database.php';

$config = require('config.php');

$db = new Database($config['database']);
$posts = $db->query("SELECT * FROM posts")->fetchALL();

foreach ($posts as $post) {
    echo "<li>" . $post['Title'] . "</li>";
} 