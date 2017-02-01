<?php
require_once 'index.php';
require_once 'vendor/j4mie/idiorm/idiorm.php';

ORM::configure('mysql:host=localhost;dbname=my_blog');
ORM::configure('username', 'root');
ORM::configure('password', 'SIMPLONCO');

$new = ORM::for_table('my_posts')->create();
$author = $_POST['author'];
$new->title = $_POST['title'];
$new->author = $_POST['author'];
$new->content = $_POST['content'];

$new->save();

header('Location:index.php');

?>