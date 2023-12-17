<?php
    error_reporting(0);

include('config/config.php');

?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<title>Lagerverwaltung v.<?php echo $version; ?> - Artikel Suchen</title>
<link href="./css/style.css" rel="stylesheet">
</head>
<body>


<h1>Artikelsuche:</h1>
<form action="suche.php" method="post">



<p>Scannen Sie den Barcode : <input autofocus name="gescant" maxlength="9"></p>

<input type="submit" value="Suche starten">

</form>
<?php




$eingabe = $_POST["gescant"];


$abfrage = "SELECT * FROM material WHERE barcode='$eingabe'";


$result = mysqli_query($connect, $abfrage);


echo  "<h1>Auflistung des Artikels</h1>";
while($dsatz = mysqli_fetch_assoc($result)) {
	
	echo "<table>";
	echo "<tr><td>Name des Artikels:</td><td><b>" . $dsatz["artikel"] . "</b></td>  </tr>";
    echo "<tr><td>Wo liegt der Artikel:</td><td>" . $dsatz["lager_schrank"] . " - " . $dsatz["lagerplatz"] .  "</td></tr>";
    echo "<tr><td>Es gibt noch </td><td>" . $dsatz["lagerbestand"] . " "  . $dsatz["einheit"] . "</td><tr>" ;
    echo "<table>";
}


mysqli_close($connect);

?>
<br>

<br>
<input type=button onClick="parent.location='index.php'" value='Zurück'>
</body></html>
