<?php
  require_once 'classes/loc-locale.php';

  $locale = explode('/', $_SERVER['REQUEST_URI'])[1];
  LocLocale::prepareGettext($locale);
?>
<!doctype html>
<html style="background-color: silver">
  <head>
<title><?=_("Not Found")?></title>
  </head>
  <body>
    <h1>404 - <?=_("not found")?></h1>
    <p><?=_("I cannot find it!")?></p>
  </body>
</html>
