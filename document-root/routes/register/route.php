<?php

$method = $_SERVER["REQUEST_METHOD"];

if ($method !== "GET" && $method !== "POST") {
    header('HTTP/1.1 405 Method Not Allowed');
    exit;
}

if ($method === "POST") {
  $data = [];
  $errors = [];

  $filters = [
    "name" => [
      "filter" => FILTER_VALIDATE_REGEXP,
      "options" => [ "regexp" => "/^.{3,}$/" ]
    ],
    "preferred-name" => [
      "filter" => FILTER_VALIDATE_REGEXP,
      "options" => [ "regexp" => "/^.{3,}$/" ]
    ],
    "email" => FILTER_VALIDATE_EMAIL,
    "password" => [
      "filter" => FILTER_VALIDATE_REGEXP,
      "options" => [ "regexp" => "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/" ]
    ],
    "confirm-password" => FILTER_UNSAFE_RAW,
  ];

  $data = filter_input_array(INPUT_POST, $filters, add_empty: true);

  var_dump($data);

  if (!isset($data["name"])) {
    array_push($errors, _("Invalid name"));
  }

  if (!isset($data["preferred-name"])) {
    array_push($errors, _("Invalid preferred name"));
  }

  if ($data["email"] === false) {
    $error = gettext("Invalid email");
    array_push($errors, $error);
    echo "hieelo\n";
    //array_push($errors, "heeeo");
  }
  /*

  if (!isset($data["password"])) {
    array_push($errors, _("Invalid password"));
  }

  if (!isset($data["confirm-password"])) {
    array_push($errors, _("Password confirmation is absent"));
  }

  $password = $data["password"];
  $confirm_password = $data["confirm-password"];

  if($password !== $confirm_password) {
    array_push($errors, _("Passwords do not match"));
  }
  */



  print_r($errors);

  if(empty($errors)) {
    // check if password is in use?
    // do the insert, 
    // success!!

  }
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
      <?php if (!empty($errors)): ?>
      <div style="background-color:red">
        <p>Some Errors Occurred.</p>
        <?php foreach($errors as $error): ?>
        <p><?=$error?></p>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
      <form class="form-display" method="POST">
        <label class="input-label">
          <?=_("Full Name")?><span class="requiredstar">*</span>
          <span class="description"><?=_("at least three characters")?></span>
          <input
            class="text-input"
            name="name"
            required
            pattern="^.{3,}$"
            placeholder="Johnathan Doe"
            <?php if (isset($_POST["name"])) : ?>value="<?=htmlspecialchars($_POST["name"])?>"<?php endif; ?>
          />
        </label>
        <label class="input-label">
          <?=_("What should we call you?")?><span class="requiredstar">*</span>
          <span class="description"><?=_("at least three characters")?></span>
          <input
            class="text-input"
            name="preferred-name"
            required
            pattern="^.{3,}$"
            placeholder="John"
            <?php if (isset($_POST["preferred-name"])) : ?>value="<?=htmlspecialchars($_POST["preferred-name"])?>"<?php endif; ?>
          />
        </label>
        <label class="input-label">
          <?=_("Email")?><span class="requiredstar">*</span>
          <input
            class="text-input"
            name="email"
            <?php if (isset($_POST["email"])) : ?>value="<?=htmlspecialchars($_POST["email"])?>"<?php endif; ?>
          />
        </label>
        <label class="input-label">
          <?=_("Password")?><span class="requiredstar">*</span>
          <span class="description"><?=_("1 upper-case, 1 lower-case, 1 digit, 8 or more total characters")?></span>
          <input
            class="text-input"
            type="password"
            name="password"
            required
            pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$"
            <?php if (isset($_POST["password"])): ?>value="<?=htmlspecialchars($_POST["password"])?>"<?php endif; ?>
          />
        </label>
        <label class="input-label">
          <?=_("Confirm Password")?><span class="requiredstar">*</span>
          <input
            class="text-input"
            type="password"
            name="confirm-password"
            required
          />
        </label>
        <div>
          <input class="text-button"  type="submit" value="<?=_("Register")?>"/>
        </div>
      </form>
      <p>
        <?=_("Already have an account?")?> <a href="/<?=$locale?>/login"><?=_("Login")?></a>
      </p>
    </main>
  </body>
</html>

