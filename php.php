<?php

$variable = "hola mundo";

$alumnos = ['cristobal' => 5.2,
            'jorge' => 5.5, 
            'camilo' => 5.5, 
            'hernan' => 5.5 ];









?>
 
<!DOCTYPE html>
<html lang=""en>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
 <h1><?php echo $variable; ?></h1>

 <?php

   for($i=0; $i < 5; $i++){

   echo "<h1>".$variable."</h1>";
}
   ?>
   <table style="border:solid 1px #000;">
   	<tr>
   		<td>alumno</td>
   		<td>nota</td>
   	</tr>
   	<?php foreach ($alumnos as $key => $value):?>
<tr>
	<td><?php echo $key; ?></td>
	<td><?php echo $value; ?></td>
</tr>
   		 <?php endforeach ?>
   </table>
</body>
</html>