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
                      <li role="presentation"><a href="#all-product" role="tab" data-toggle="tab" aria-controls="all-product" aria-expanded="false">Libros de ciencia ficción</a></li>
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
                    
                      <!-- ==================== Contenedores de categorias =============== -->
                      
                                        <div class="col-xs-12 col-sm-6 col-md-4">
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
                                         </div> 
                                         
                                         <div class="col-xs-12 col-sm-6 col-md-4">
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
                                         </div>

                                         <div class="col-xs-12 col-sm-6 col-md-4">
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
                                         </div>
                                         
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