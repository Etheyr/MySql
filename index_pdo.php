<?php
require 'vendor/j4mie/idiorm/idiorm.php';

ORM::configure('mysql:host=localhost;dbname=mon_armoire');
ORM::configure('username', 'root');
ORM::configure('password', 'SIMPLONCO');

$id = ORM::for_table('mes_chaussettes')->where('id')->find_many();
$donnees = ORM::for_table('mes_chaussettes')->find_many();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
</head>
<body>
	<h1>Mes données :</h1>

	<table class="ui table">

		<?php foreach($donnees as $id):?>

			<tr>
				<td><?php echo $id['id'];?></td>
			</tr>

		<?php endforeach;?>

	</table>

</body>
</html>