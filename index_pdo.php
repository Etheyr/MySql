<?php
$bdd = new PDO('mysql:host=localhost;dbname=mon_armoire;charset=utf8','root','SIMPLONCO');
$response = $bdd->query("SELECT * FROM mes_chaussettes;");
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

		<?php while($donnees = $response->fetch()):?>

			<tr>
			<td></td>
				<td><?php echo $donnees['id'];?></td>
				<td><?php echo $donnees['couleur'];?></td>
				<td><?php echo $donnees['pointure'];?></td>
				<td><?php echo $donnees['temp_lavage'];?></td>
				<td><?php echo $donnees['date_lavage'];?></td>
			</tr>

		<?php endwhile;?>

	</table>

</body>
</html>