<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html>
<head>
</head>
<body>
<form action="dodaj.php" method="POST">
Podaj marke: <input type="text" name="marka"> <br />
Podaj model: <input type="text" name="model"> <br />
Podaj kolor: <input type="text" name="kolor"> <br />
Podaj VIN:   <input type="text" name="vin"> <br />
Podaj rok:   <input type="text" name="rok"> <br />
<input type="submit" value="dodaj"/>
<input type="reset" value="reset"/>
</form>
<?php
$serwer='localhost';
$user='root';
$pass='';
$baza = 'baza123';
$con= mysqli_connect($serwer,$user,$pass,$baza);
echo "<br />";
@$marka=$_POST['marka'];
@$model=$_POST['model'];
@$kolor=$_POST['kolor'];
@$vin=$_POST['vin'];
@$rok=$_POST['rok'];
echo "Dodano: ";
echo "$marka $model $kolor $vin $rok";
@$zap="INSERT INTO auto(marka,model,VIN,rok,kolor) VALUES ('$marka','$model','$vin','$rok','$kolor');";
$res_zap=mysqli_query($con,$zap);
mysqli_close($con);
?>

</body>
</html>
