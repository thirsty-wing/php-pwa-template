<?php
  require_once 'classes/loc-locale.php';

  $locale = explode('/', $_SERVER['REQUEST_URI'])[1];
  LocLocale::prepareGettext($locale);
?>
<!doctype html>
<html lang="<?=$locale?>">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="/assets/styles.css"/>
  </head>
  <body style="margin:0">
    <main class="main-content">
      <p>icon</p>
      <p>icon</p>
      <p>icon</p>
      <p>icon</p>
      <p>icon</p>
      <p>icon</p>
      <p>icon</p>
      <p>icon</p>
      <p>icon</p>
      <p>icon</p>
      <p>icon</p>
    </main>
  </body>
</html>
