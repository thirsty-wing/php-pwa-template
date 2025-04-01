<?php
  require_once 'classes/loc-locale.php';

  $uri = $_SERVER["REQUEST_URI"];
  $path = parse_url($uri, PHP_URL_PATH);
  $file_path = __DIR__ . $path;
  $method = $_SERVER["REQUEST_METHOD"];

  if('GET' === $method && preg_match("/^\/public\/.*/", $path)) { return false; }

  // redirect to locale
  if (!preg_match('/^\/(en|es)(\/|$)/', $path)) {
    $locale = LocLocale::getLocale();
    $path_arr = [$locale];
    if ($path && $path !== '/') {
      array_push($path_arr, $path);
    }

    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /" . implode('/', $path_arr));
    exit;
  }


  $method_specific_route = "routes/" . substr($path, 3) . '/' . strtolower($method) . '.php';
  if (file_exists($method_specific_route)) {
    require $method_specific_route;
    exit;
  }

  $general_route = "routes/" . substr($path, 3) . "/route.php";
  if (file_exists($general_route)) {
    require $general_route;
    exit;
  }

  require '404.html';
