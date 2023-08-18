<?php 

require 'functions.php';
require 'router.php'; 
require 'Database.php';

$config = require('config.php');

$db = new Database($config['database']);


$id = 1;
$query = "SELECT * FROM posts WHERE id >= ?";
$posts = $db->query($query, [$id])->fetchALL();

dd($posts);