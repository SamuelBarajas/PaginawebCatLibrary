<?php
include './library/configServer.php';
include './library/consulSQL.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Productos</title>
    <?php include './inc/link.php'; ?>
</head>
<body>
  <style type="text/css">
    .galeria {
        width: 322px;
        height: 499px;
        padding: 15%;
    }
    
  </style>
    <?php include './inc/navbar.php'; ?>
    <section id="store">
       <br>
        <div class="container">
            <div class="page-header">
              <h1>Tienda</h1>
            </div>
            <br><br>
            <div class="row">
                <div class="col-xs-12">
                    <ul id="store-links" class="nav nav-tabs" role="tablist">
                      <li role="presentation"><a href="#all-product" role="tab" data-toggle="tab" aria-controls="all-product" aria-expanded="false">Todos los productos</a></li>
                      <li role="presentation" class="dropdown active">
                        <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false">Categorías <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                          <!-- ==================== Lista categorias =============== -->
                         
                                    <li>
                                        <a href="product.php">Todos los productos
                                        </a>
                                        <a href="terror.php">Terror
                                        </a>
                                        <a href="aventura.php" >Aventura
                                        </a>
                                        <a href="ficcion.php" >Cencia ficción
                                        </a>
                                        <a href="comedia.php" >Comedia
                                        </a>
                                        <a href="anime.php" >Anime
                                        </a>
                                        <a href="romance.php" >Romance
                                        </a>
                                        <a href="misterio.php" >Misterio
                                        </a>
                                        
                                    </li>
                          <!-- ==================== Fin lista categorias =============== -->
                        </ul>
                      </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                      <div role="tabpanel" class="tab-pane fade" id="all-product" aria-labelledby="all-product-tab">
                          <br><br>
                        <div class="row">
              
                        <div  class="col-xs-12 col-sm-6 col-md-4">
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/harry.jpg">
                                         <div >
                                           <h3>Harry Potter y la piedra filosofal</h3>
                                           <p>por J. K Rowling</p>
                                           <p>$299 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                                  
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/quintillizas.jpg">
                                         <div >
                                           <h3>Quintillizas N.12 Pasta blanda</h3>
                                           <p>por Negi Haruba</p>
                                           <p>$199 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                                   
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/mueren.jpg">
                                         <div >
                                           <h3>AL FINAL MUEREN LOS DOS (MEX)</h3>
                                           <p>por Adam Silvera</p>
                                           <p>$210 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                                   
                     

                                
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/aquiles.jpg">
                                         <div >
                                           <h3>La canción de Aquiles Pasta dura</h3>
                                           <p>por Madeline Miller</p>
                                           <p>$252 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                                   
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/investor.jpg" width="322" height="499">
                                         <div >
                                           <h3>InvestorCoach® - Aprende a Invertir en la Bolsa (Edición para México) Pasta dura</h3>
                                           <p>por Rodrigo Coutiño</p>
                                           <p>$329 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                                  
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/pejelibro.jpg" width="322" height="499">
                                         <div >
                                           <h3>A La Mitad Del Camino Pasta blanda</h3>
                                           <p>por Andrés Manuel López Obrador</p>
                                           <p>$248 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                                
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/principito.jpg">
                                         <div >
                                           <h3>El Principito Pasta dura</h3>
                                           <p>por Antoine De Saint-Exupéry</p>
                                           <p>$55.25 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                                 
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/rent.jpg">
                                         <div >
                                           <h3>Rent-A-Girlfriend N.4 Pasta blanda</h3>
                                           <p>por Reiji Miyajima</p>
                                           <p>$169 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                             
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/chain.jpg">
                                         <div >
                                           <h3>Chain Saw Man N.2 Pasta blanda</h3>
                                           <p>por Tatsuki Fujimoto</p>
                                           <p>$239 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                                       </div>
                        <div  class="col-xs-12 col-sm-6 col-md-4">
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/spy.jpg">
                                         <div >
                                           <h3>Spy X Family N.2 Pasta blanda</h3>
                                           <p>por Tatsuya Endo</p>
                                           <p>$129 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                        
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/pollo.jpg">
                                         <div >
                                           <h3>Rooster Fighter N.1 Pasta blanda</h3>
                                           <p>por Shu Sakuratani</p>
                                           <p>$103 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                          
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/alma.jpg">
                                         <div >
                                           <h3>Alma N.1 Pasta blanda</h3>
                                           <p>por Shinji Mito</p>
                                           <p>$169 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                                
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/goblin.jpg">
                                         <div >
                                           <h3>Goblin Slayer N.3 Pasta blanda</h3>
                                           <p>por Kumo Kagyu</p>
                                           <p>$129 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                            
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/apos.jpg">
                                         <div >
                                           <h3>Aposimz N.7 Pasta blanda</h3>
                                           <p>por Nihei Tsutomu</p>
                                           <p>$103 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                         
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/claymore.jpg">
                                         <div >
                                           <h3>Claymore N.2 Pasta blanda</h3>
                                           <p>por Norihiro Yagi</p>
                                           <p>$119 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                               
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/gigant.jpg">
                                         <div >
                                           <h3>Gigant N.6 Pasta blanda</h3>
                                           <p>por Hiroya Oku</p>
                                           <p>$103 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                        
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/bake.jpg">
                                         <div >
                                           <h3>Bakemonogatari N.3 Pasta blanda</h3>
                                           <p>por Nisiosin</p>
                                           <p>$129 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                             
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/gotico.jpg">
                                         <div >
                                           <h3>Gótico Pasta blanda</h3>
                                           <p>por Silvia Moreno-García</p>
                                           <p>$348 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                              
                                       </div>
                        <div  class="col-xs-12 col-sm-6 col-md-4">
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/despues.jpg">
                                         <div >
                                           <h3>Después Pasta blanda</h3>
                                           <p>por Stephen King</p>
                                           <p>$269 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                     
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/apelacion.jpg">
                                         <div >
                                           <h3>La Apelación Pasta blanda</h3>
                                           <p>por Jo Nesbo</p>
                                           <p>$120 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                           
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/david.jpg">
                                         <div >
                                           <h3>Máximo impacto Pasta blanda</h3>
                                           <p>por David Baldacci</p>
                                           <p>$69 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                          
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/sucios.jpg">
                                         <div >
                                           <h3>Sucios y malvados Pasta blanda</h3>
                                           <p>por Juanjo Braulio</p>
                                           <p>$199 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                 
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/miedo.jpg">
                                         <div >
                                           <h3>No tengas miedo: Isabel luchará con los fantasmas de su pasado</h3>
                                           <p>por DANIELA SACERDOTI</p>
                                           <p>$39 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                            
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/atras.jpg">
                                         <div >
                                           <h3>Sin mirar atrás Pasta blanda</h3>
                                           <p>por Mercedes Guerrero</p>
                                           <p>$69 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                               
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/cuidado.jpg">
                                         <div >
                                           <h3>Cuidado Con Ella Pasta blanda</h3>
                                           <p>por Teresa Toten</p>
                                           <p>$58.68 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                             
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/silber.jpg">
                                         <div >
                                           <h3>Silber: El primer libro de los sueños Pasta blanda</h3>
                                           <p>por KERSTIN GIER</p>
                                           <p>$69 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                             
                                       <div class="thumbnail">
                                         <img class="galeria" src="assets/img/artemisa.jpg">
                                         <div >
                                           <h3>Artemisa Pasta blanda</h3>
                                           <p>por Andy Weir</p>
                                           <p>$229 MXN</p>
                                           <p class="text-center">
                                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                               <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                           </p>

                                         </div>
                                       </div>
                                   </div>     
                        </div> 
                       
                      </div><!-- Fin del contenedor de todos los productos -->
                      
                      <!-- ==================== Contenedores de categorias =============== -->
                      <?php
                        $consultar_categorias= ejecutarSQL::consultar("select * from categoria");
                        while($categ=mysql_fetch_array($consultar_categorias)){
                            echo '<div role="tabpanel" class="tab-pane fade active in" id="'.$categ['CodigoCat'].'" aria-labelledby="'.$categ['CodigoCat'].'-tab"><br>';
                                $consultar_productos= ejecutarSQL::consultar("select * from producto where CodigoCat='".$categ['CodigoCat']."' and Stock > 0");
                                $totalprod = mysql_num_rows($consultar_productos);
                                if($totalprod>0){
                                   while($prod=mysql_fetch_array($consultar_productos)){
                                      echo '
                                        <div class="col-xs-12 col-sm-6 col-md-4">
                                             <div class="thumbnail">
                                               <img src="assets/img-products/'.$prod['Imagen'].'">
                                               <div class="caption">
                                                 <h3>'.$prod['Marca'].'</h3>
                                                 <p>'.$prod['NombreProd'].'</p>
                                                 <p>$'.$prod['Precio'].'</p>
                                                 <p class="text-center">
                                                     <a href="infoProd.php?CodigoProd='.$prod['CodigoProd'].'" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                                     <button value="'.$prod['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                                 </p>

                                               </div>
                                             </div>
                                         </div>     
                                         ';    
                                   } 
                                } else {
                                   echo '<h2>No hay productos en esta categoría</h2>'; 
                                }
                            echo '</div>'; 
                        }
                      ?>
                      <!-- ==================== Fin contenedores de categorias =============== -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include './inc/footer.php'; ?>
    <script>
        $(document).ready(function() {
            $('#store-links a:first').tab('show');
        });
    </script>
</body>
</html>