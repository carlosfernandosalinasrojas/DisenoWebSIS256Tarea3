<head>
	<h1>Sus linas y columnas generadas son:</h1>
</head>
<?php
$filas=$_GET['filas'];
$columna=$_GET['columnas'];
 ?>
 <table border="1">
 <?php	
 for($i=0;$i<=$filas-1;$i++){
 	echo '<tr>';
	for ($j=0;$j<=$columna-1;$j++){
	?>	
	<td style=" border: 2px solid red; width: 50px; height: 50px;" ><?php echo " " ?></td>
	<?php	
	}
	echo "</tr>";
}
?>
</table>
		  