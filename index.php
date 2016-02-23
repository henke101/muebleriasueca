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
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <title>Muebleria Sueca</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
      <div class="content">
        <a href="?page=home">
          <img src="logo.png" alt="Mueblería Sueca" >
        </a>
        <form>
          <input type="search" name="search" placeholder="Busca productos"><br> 
        </form>
        <ul>
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
        <h1>Contáctenos</h1>
        <p>
          Lun- Vie 10-19, Sab 10-16
          Cruz del Chaco 272  c/ Quesada
          Mcal Lopez, Asunción - Paraguay
          Teléfono: 0986-764-414
          WhatsApp: 0986-764-414
          E-mail: sales@bitsnbytes.com.py
        </p>
        <a href="https://www.facebook.com/Muebleria-Sueca-Paraguay-801967969840543/">
          <img src="facebook.png" alt="Enlace a página de Facebook" >
        </a>
        <a href="https://www.instagram.com/muebleriasueca/">
          <img src="instagram.png" alt="Enlace a página de Instagram" >
        </a>
        <h1>Newsletter</h1>
        <p>
          Subscríbete a nuestro newsletter para recibir promociones exclusivos
        </p>
        <form>
          <input type="email" name="subscribe">
          <input type="submit"> 
        </form>
        <h1>Instagram</h1>  
      </div> 
    </footer>
  </body>
</html>