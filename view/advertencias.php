<?php

require_once("../controller/AdvertenciasController.class.php");

$advController = new AdvertenciasController();

$advertencias = $advController->getAdvertenciasDB();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Advertencias - Diretor <?php echo $_SESSION['nome']; ?></title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<td>ID</td>
				<td>Motivo</td>
				<td>Pontos</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				for ($i=0; $i < sizeof($advertencias) ; $i++) {
					echo "<tr>";
					echo "<td>".$advertencias[$i]['id']."</td>";
					echo "<td>".$advertencias[$i]['motivo']."</td>";
					echo "<td>".$advertencias[$i]['pontos']."</td>";
					echo "</tr>";					
				}
			?>
		</tbody>
	</table>
</body>
</html>
