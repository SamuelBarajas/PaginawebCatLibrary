<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <?php include './inc/link.php'; ?>
</head>
<body>
    <?php include './inc/navbar.php'; ?>
    <div class="jumbotron" id="jumbotron-index">
      <h1><span class="tittles-pages-logo">Cat Library</span> </h1>
      <p>
          Bienvenido a nuestra tienda en linea, aquí encontrara una gran variedad de libros.
      </p>
    </div>
    <section id="new-prod-index">
         <div class="container">
            <div class="page-header">
                <h1>Novedades</h1>
            </div>
           
            <div class="col-xs-12 col-sm-6 col-md-4">
                                       <div class="thumbnail">
                                         <img src="assets/img/harry.jpg">
                                         <div class="caption">
                                           <h3>Harry Potter y la piedra filosofal</h3>
                                           <p>por J. K Rowling</p>
                                           <p>$299 MXN</p>
                                           

                                         </div>
                                       </div>
                                   </div>   
            
            
            <div class="col-xs-12 col-sm-6 col-md-4">
                                       <div class="thumbnail">
                                         <img src="assets/img/quintillizas.jpg">
                                         <div class="caption">
                                           <h3>Quintillizas N.12 Pasta blanda</h3>
                                           <p>por Negi Haruba</p>
                                           <p>$199 MXN</p>
                                           

                                         </div>
                                       </div>
                                   </div>       
            
                                   <div class="col-xs-12 col-sm-6 col-md-4">
                                       <div class="thumbnail">
                                         <img src="assets/img/mueren.jpg">
                                         <div class="caption">
                                           <h3>AL FINAL MUEREN LOS DOS (MEX)</h3>
                                           <p>por Adam Silvera</p>
                                           <p>$210 MXN</p>
                                           

                                         </div>
                                       </div>
                                   </div>
                                   
            
         
    </section>
    <section id="reg-info-index">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 text-center">
                   <article style="margin-top:20%;">
                        <p><i class="fa fa-users fa-4x"></i></p>
                        <h3>Registrate</h3>
                        <p>Registrese y hagase cliente de <span class="tittles-pages-logo">Cat Library</span> para recibir las mejores ofertas y descuentos especiales de nuestros productos.</p>
                        <p><a href="registration.php" class="btn btn-info btn-block">Registrarse</a></p>   
                   </article>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <img src="assets/img/libros.jpg" alt="Libreria" class="img-responsive">
                </div>
            </div>
        </div>
    </section>
    <section id="distribuidores-index">
        <div class="container">
            <div class="col-xs-12 col-sm-6">

            </div>
            <div class="col-xs-12 col-sm-6">

            </div>
            <div class="col-xs-12">
                <div class="page-header">
                  <h1>Nuestras Marcas</h1>
                </div>
                <br><br>
                <img src="assets/img/logos.jpg" alt="logos-marcas" class="img-responsive">
            </div>
        </div>
    </section>
    <?php include './inc/footer.php'; ?>
</body>
</html>