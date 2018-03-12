<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>
    
    <!--
    <a href="http://127.0.0.1/lurton/exo2/exo2.php?size=100&color=red&message=test">Afficher le texte en rougeâtre</a>
    <br>
    <a href="http://127.0.0.1/lurton/exo2/exo2.php?size=100&color=blue&message=test">Afficher le texte en bleu</a>
    <br>
    <a href="http://127.0.0.1/lurton/exo2/exo2.php?size=100&color=red&message=$uicideboy$">Afficher $uicideboy$ </a>
    <br>
    <a href="http://127.0.0.1/lurton/exo2/exo2.php?size=1000&color=red&message=test">Afficher le texte avec 1000px</a>
    <br>
    <a href="http://127.0.0.1/lurton/exo2/exo2.php?size=200&color=green&message=Vive l'alcool">Afficher le texte en vert 200px</a>
    <br>
    <a href="http://127.0.0.1/lurton/exo2/exo2.php?size=250&color=yellow&message=black & yellow">Afficher le texte en jaune</a>
    -->
    
   
    
    <form method="GET">
    <label for="size">Size : </label>
    <input type="number" value="" name="size" id="size">
    
   
        
 
    <label for="color">Color : </label>
    <input type="string" value="" name="color" id="color">
   
   
    <label for="message">Message : </label>
    <input type="string" value="" name="message" id="message">
    <input type="submit" value="Valider">
    </form>
    
    <?php
    $size = $_GET["size"];
    $message =$_GET["message"];
    $color = $_GET["color"];
    echo "<p style='color:{$color}'><span style=font-size:{$size}px>{$message}</span><p>";
     ?>
   
</body>
</html>