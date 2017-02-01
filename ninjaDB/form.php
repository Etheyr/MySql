<?php
require_once 'vendor/j4mie/idiorm/idiorm.php';

ORM::configure('mysql:host=localhost;dbname=my_blog');
ORM::configure('username', 'root');
ORM::configure('password', 'SIMPLONCO');

$new = ORM::for_table('my_posts')->find_one(5);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
</head>
<body>
	<br>
	<div class="ui marged centered container">
		<form action="submit_post.php" method="POST">
			<div class="ui form">
				<div class="six wide field">
					<div class="two fields">
						<div class="field">
							<label>Author</label>
							<input placeholder="Author" type="text" name="author">
						</div>
						<div class="field">
							<label>Title</label>
							<input placeholder="Title" type="text" name="title">
						</div>
					</div>
					<div class="field">
						<label>Content</label>
						<textarea name="content"></textarea>
					</div>
				</div>
			</div>
			<input class="ui green button" type="submit">
		</form>
	</div>

	<br>


</body>
</html>