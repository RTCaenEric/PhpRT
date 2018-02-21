<a href="ex1.php?message=coucou&bille=7&chocolat=noir">Lien 1</a>
<a href="ex1.php?message=fraise&bille=10&chocolat=blanc">Lien 2</a>
<a href="ex1.php?chocolat=au lait&bille=3&message=pomme">Lien 3</a>


<?php
echo $_GET["bille"]." ".$_GET["message"]." ".$_GET["chocolat"]
?>