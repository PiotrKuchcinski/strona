<html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
</head>
<body>
Podaj marke: 
<form action="wyszukaj.php" method="POST">
<?php
$serwer='localhost';
$user='root';
$pass='';
$baza = 'baza123';
$con = mysqli_connect($serwer,$user,$pass,$baza);
$q_marka="SELECT DISTINCT(marka) FROM `auto`;";
$res_marka=mysqli_query($con,$q_marka);
echo '<select name="marka">';
while($option=mysqli_fetch_assoc($res_marka))
    echo '<option>'.$option['marka'].'</option>';
echo '</select>';
echo '</br>';
echo 'Podaj model: <br />';
@$marka=$_POST['marka'];
$q_model="SELECT model FROM `auto`;";
$res_model=mysqli_query($con,$q_model);
echo '<select name="model">';
while($option=mysqli_fetch_assoc($res_model))
    echo '<option>'.$option['model'].'</option>';
echo '</select>';
echo '</br>';
?>
czerwony<input type="radio" name="kolor" value="czerwony"><br />
niebieski<input type="radio" name="kolor" value="niebieski"><br />
srebrny<input type="radio" name="kolor" value="srebrny"><br />
rok od <input type="text" name="od"> do <input type="text" name="do"><br />
<input type="submit" value="OK" />
<input type="reset" value="reset" /><br />
</form>
<?php
@$marka=$_POST['marka'];
@$model=$_POST['model'];
@$kolor=$_POST['kolor'];
@$od=$_POST['od'];
@$do=$_POST['do'];
$zapytanie="SELECT * FROM `auto` WHERE marka like '$marka' AND model like '$model' AND kolor like '$kolor'AND rok BETWEEN '$od' AND '$do'";
$odpowiedz=mysqli_query($con,$zapytanie);
echo '<table border="1">
      <tr>
         <td>marka</td><td>model</td><td>kolor</td><td>VIN</td><td>rok</td>
       </tr>';
			 while($sam = mysqli_fetch_assoc($odpowiedz))
{      echo '<tr><td> '.$sam['marka'].'</td>
						 <td> '.$sam['model'].'</td>
						 <td> '.$sam['kolor'].'</td>
						 <td> '.$sam['VIN'].'</td>
						 <td> '.$sam['rok'].'</td>
						 </tr>';
}
?>
</body>
</html>