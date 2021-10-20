<?php
error_reporting(E_PARSE);
include '../library/configServer.php';
include '../library/consulSQL.php';
session_start();
$suma = 0;
if(isset($_GET['precio'])){
    $_SESSION['producto'][$_SESSION['contador']] = $_GET['precio'];
    $_SESSION['contador']++;
}

echo '<table class="table table-bordered">';
for($i = 0;$i< $_SESSION['contador'];$i++){
    $consulta=ejecutarSQL::consultar("select * from producto where CodigoProd='".$_SESSION['producto'][$i]."'");
    while($fila = mysql_fetch_array($consulta)) {
            echo "<tr><td>".$fila['NombreProd']."</td><td> ".$fila['Precio']."</td></tr>";
    $suma += $fila['Precio'];
    }
}
echo "<tr><td>Subtotal</td><td>$".number_format($suma,2)."</td></tr>";
echo "</table>";
echo ' <li role="presentation" class="dropdown active">
<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false">Método de envio <span class="caret"></span></a>
<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
  <!-- ==================== Lista categorias =============== -->
 
            <li>
                
                <a href="#">DHL
                </a>
                <a href="#" >FeedEx
                </a>
                <a href="#" >UPS
                </a>
                <a href="#" >Correos de México
                </a>
               
            </li>
  <!-- ==================== Fin lista categorias =============== -->
</ul>
</li>';
$_SESSION['sumaTotal']=$suma;