<?php
// $sname="Sanowar";
// define("id","4404701");

// $mobile="01928248173";
// $mobile='88'.$mobile;
// echo $mobile;
// $id ="44045701";
// echo $id;
// echo $sname;
// echo id;





?>


<table border="1">
<tr>
	<td>Phone</td>
</tr>
	<?php
	$numbers="01928248173,01548754687,01648754687,01848754687";

$numbers=explode(",",$numbers);


foreach($numbers as $value){?>
<tr>
	<td><?=$value?></td>
</tr>

<?php
}

	

	?>
</table>
