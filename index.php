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
if (isset($_GET["query"])){
  $file ='search_results.php';
}
else{
  $file = $map[$page];
}  
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
      <form class="search" action="?page=search_results" method="get">
        <input type="search" name="query" autocomplete="off" placeholder="Busca productos"> 
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
        <iframe src="http://snapwidget.com/in/?u=bXVlYmxlcmlhc3VlY2F8aW58MTI4fDN8Mnx8bm98NXxub25lfG9uU3RhcnR8bm98bm8=&ve=010316" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:399px; height:266px"></iframe>
        <!-- <a class="instagram_pic" href="https://www.instagram.com/muebleriasueca/">
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
        </a> -->

      </div>
      <div class="footer_foot">
        <p><small>Snickrad av Henrik Andersson, 2016</small></p>
      </div> 
    </div> 
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
</body>
</html>