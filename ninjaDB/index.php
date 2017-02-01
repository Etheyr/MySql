<?php
require 'vendor/j4mie/idiorm/idiorm.php';

ORM::configure('mysql:host=localhost;dbname=my_blog');
ORM::configure('username', 'root');
ORM::configure('password', 'SIMPLONCO');

$donnees = ORM::for_table('my_posts')->find_many();
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

	<h1 class="ui huge marged centered header">Mon Blog</h1>

	<div class="ui marged centered container">
		<a href="form.php"><input class="ui red button" type="submit" name="submit" value="New post"></a>
	</div>

	<br>
	<div class="ui marged centered container">
		<div class="ui fourteen wide column grid">

			<?php foreach($donnees as $all):?>


				<div class="ui cards">
					<div class="card">
						<div class="content">
							<div class="header">
								<?php echo $all['title'];?>
								<?php echo $all['author'];?>
							</div>
						</div>
						<?php echo $all['content'];?>
						<?php echo $all['created_at'];?>
						<?php echo $all['update_at'];?>
						<a href="form.php">
							<input class="ui red attached button" type="submit" name="submit" value="Edit">
						</a>
					</div>
				</div>

			<?php endforeach;?>

			<br>
		</div>
	</div>


</body>
</html>