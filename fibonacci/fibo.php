<html>
	<body>
    <?php 
		function fibonaci($n)
		{
			$a = 0;
	        $b = 1;
	        for ($i=1;$i<=$n;$i++) {
		        echo $a." - ";
		        $c = $a+$b;
		        $a = $b;
		        $b = $c;
	        }
		}
		$n=$_POST['n'];
		echo fibonaci($n)." > Secuencia fibonacci de ".$n;
		?>

	</body>
</html>