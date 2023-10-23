<html>
<body>
<p>Usun pojazd:</p>
<p>
 <INPUT TYPE="radio" NAME="usun" onClick="document.getElementById('ukryty').style.display='block';" />Po vin</ br>
</p>
<p>
 <INPUT TYPE="radio" NAME="usun" onClick="document.getElementById('ukryty2').style.display='block';" />Po nazwie modelu</ br>
</p>
<p>
 <INPUT TYPE="radio" NAME="usun" onClick="document.getElementById('ukryty3').style.display='block';" />Po nazwie marki</ br>
</p>
<form action="usun.php" method="POST">

<div style="display: none" id="ukryty">
 <hr />
 <p>
    Podaj VIN:<input type="text" name="vin"></br>
 </p>
 <hr>
</div>

<div style="display: none" id="ukryty2">
 <hr />
 <p>
    Podaj model:<input type="text" name="model"></br>
 </p>
 <hr>
</div>

<div style="display: none" id="ukryty3">
 <hr />
 <p>
    Podaj marke:<input type="text" name="marka"></br>
 </p>
 <hr>
</div>
<input type="submit" value="usun"/>
<input type="reset" value="reset"/>
</form>
<?php
$serwer='localhost';
$user='root';
$pass='';
$baza = 'baza123';
$con= mysqli_connect($serwer,$user,$pass,$baza);

@$vin=$_POST['vin'];
$q_vin="DELETE FROM 'auto' WHERE vin like '$vin';";
$res_q_vin=mysqli_query($con,$q_vin);

@$model=$_POST['model'];
$q_model="DELETE FROM 'auto' WHERE model like '$model;";
@$res_q_model=mysqli_query($con,$q_model);

@$marka=$_POST['marka'];
$q_marka="DELETE FROM 'auto' WHERE marka like '$marka';";
$res_q_marka=mysqli_query($con,$q_marka);

?>
</body>
</html>