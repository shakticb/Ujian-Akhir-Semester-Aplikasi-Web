<?php


include('config/config.php');
?>
<!DOCTYPE html>
<html lang="de">

<head>
<meta charset="utf-8">
<title>Lagerverwaltung v.<?php echo $version; ?> - Artikel l�schen</title>
<link href="./css/style.css" rel="stylesheet">
</head>
<body>
<?php


//Ausgewählte Datensätze löschen:
for($i=1; $i<=999999; $i++){
    if(isset($_POST["auswahl$i"])){
        $deleteAnweisung = "DELETE FROM material WHERE id=$i";
        $result = mysqli_query($connect, $deleteAnweisung);
        echo "Datensatz mit der ID $i wurde gelöscht. <br>";
    }
}
?>

<input type=button onClick="parent.location='index.php'" value='Zurück'>

</body></html>