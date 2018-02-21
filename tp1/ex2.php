<a href="ex2.php?size=15&color=red&message=Bonjour chez vous">Lien 1</a>
<a href="ex2.php?size=30&color=green&message=C'est nul à chier">Lien 2</a>
<a href="ex2.php?size=50&color=blue&message=Ca me saoule">Lien 3</a>

<?php
$size = $_GET["size"];
$color = $_GET["color"];
$message = $_GET["message"];
echo "<div style='font-size: {$size}; color: {$color};'>{$message}</div>";
?>

<form method="GET">
    <label for="size">Size : </label>
    <input type="number" value="" name="size" id="size">
    <input type="submit" value="Valider">
</form>