<?php

$method = $_SERVER["REQUEST_METHOD"];

if ($method !== "GET" && $method !== "POST") {
    header('HTTP/1.1 405 Method Not Allowed');
    exit;
}

require_once 'classes/loc-locale.php';

$locale = explode('/', $_SERVER['REQUEST_URI'])[1];
LocLocale::prepareGettext($locale);

// will need to get the inputs later
?>
<!doctype html>
<html lang="<?=$locale?>">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="/assets/styles.css"/>
  </head>
  <body class="login-body">
    <main class="login-main">
      <h1>PHP PWA Template</h1>
      <form class="form-display">
        <label class="input-label">
          <?=_("Email")?><span class="requiredstar">*</span>
          <input class="text-input" type="email" name="email" required/>
        </label>
        <label class="input-label">
          <?=_("Password")?><span class="requiredstar">*</span>
          <input class="text-input" type="password" name="password" required/>
        </label>
        <div>
          <input class="text-button"  type="submit" value="<?=_("Login")?>"/>
        </div>
      </form>
      <p>
        <?=_("Logging in for the first time?")?> <a href="/<?=$locale?>/register"><?=_("Register")?></a>
      </p>
    </main>

  </body>
</html>

