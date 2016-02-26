<?php
  $page = isset($_GET["page"]) ? $_GET["page"] : "home";
  $map = [
    'about' => 'about.php',
    'home'  => 'home.php',
    'catalog' => 'catalog.php',
    'floors' => 'floors.php',
    'offers' => 'offers.php',
    'showroom' => 'showroom.php',
    'solutions' => 'solutions.php',
    'product' => 'product.php'
  ];
  
  $file = $map[$page];
    
  # Fallback
  if(!$file) {
    $file = 'home.php';
  }
?>
<!doctype html>
<html lang="es-PY">
  <head>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <title>Muebleria Sueca</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
      <div class="content">
        <a class="logo" href="?page=home">
          <img src="logo.png" alt="Mueblería Sueca" >
        </a>
        <form class="search">
          <input type="search" name="search" placeholder="Busca productos"> 
        </form>
        <ul class="main_nav">
          <li><a href="?page=catalog">Catálogo</a></li>
          <li><a href="?page=offers">Ofertas</a></li>
          <li><a href="?page=solutions">Soluciones completos</a></li>
          <li><a href="?page=floors">Especial de suelos</a></li>
          <li><a href="?page=showroom">Showroom</a></li>
        </ul>
      </div>
    </header>
    
    <main>
      <div class="content">  
        <?php include $file; ?>
      </div>  
    </main>
    
    <footer>
      <div class="content">
        <div>
          <h1>Contáctenos</h1>
          <p>
            Lun- Vie 10-19, Sab 10-16 <br>
            Cruz del Chaco 272  c/ Quesada<br>
            Mcal Lopez, Asunción - Paraguay<br>
            <br>
            Teléfono: 0986-764-414<br>
            WhatsApp: 0986-764-414<br>
            E-mail: sales@bitsnbytes.com.py
          </p>
          <a class="soc_media_link" href="https://www.facebook.com/Muebleria-Sueca-Paraguay-801967969840543/">
            <img src="facebook.png" alt="Enlace a página de Facebook" >
          </a>
          <a class="soc_media_link" href="https://www.instagram.com/muebleriasueca/">
            <img src="instagram.png" alt="Enlace a página de Instagram" >
          </a>
        </div>
        <div>
          <h1>Newsletter</h1>
          <p>
            Subscríbete a nuestro newsletter para recibir promociones exclusivos
          </p>
          <form class="subscribe_form">
            <input  class="subscribe_field" type="email" name="subscribe" placeholder="Ingresa tu Email">
            <input class="subscribe_submit" type="submit" value="Enviar"> 
          </form>
        </div>
        <div>  
          <h1>Instagram</h1>
          <a class="instagram_pic" href="https://www.instagram.com/muebleriasueca/">
            <img src="http://placehold.it/128x128" alt="Foto de la página de Instagram" >
          </a>
          <a class="instagram_pic" href="https://www.instagram.com/muebleriasueca/">
            <img src="http://placehold.it/128x128" alt="Foto de la página de Instagram" >
          </a>
          <a class="instagram_pic" href="https://www.instagram.com/muebleriasueca/">
            <img src="http://placehold.it/128x128" alt="Foto de la página de Instagram" >
          </a>
          <br>
          <a class="instagram_pic" href="https://www.instagram.com/muebleriasueca/">
            <img src="http://placehold.it/128x128" alt="Foto de la página de Instagram" >
          </a>
          <a class="instagram_pic" href="https://www.instagram.com/muebleriasueca/">
            <img src="http://placehold.it/128x128" alt="Foto de la página de Instagram" >
          </a>
          <a class="instagram_pic" href="https://www.instagram.com/muebleriasueca/">
            <img src="http://placehold.it/128x128" alt="Foto de la página de Instagram" >
          </a>

        </div>
        <div class="footer_foot">
          <p><small>Snickrad av Henrik Andersson, 2016</small></p>
        </div> 
      </div> 
    </footer>
  </body>
</html>