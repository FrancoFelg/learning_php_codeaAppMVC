<?php
    require_once("layouts/header.php");
?>    

<h1 class="text-center">Nuevo</h1>
<form action="" method="get">
    <input type="text" placeholder="Nombre" name="nombre"><br/>
    <input type="text" placeholder="Precio" name="precio"><br/>
    <input type="submit" class="btn" name="m" value="GUARDAR"><br/>
    <input type="hidden" name="m" value="guardar"> 

</form>

<?php 
    require_once("layouts/footer.php");
?>
    
    
