<?php $Aarray=array('1st'=>'Mumbai','2nd'=>'Chennai','3rd'=>'Banglore','4th'=>'Delhi');

?>

<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
		<ul>
			<?php foreach($Aarray as $v)
			{  ?>
		<li><?php echo $v ?></li>
	<?php }  ?>	
		</ul>
</body>
</html>