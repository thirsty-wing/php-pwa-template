<?php if (count($argv) < 2): ?>
Take heed to supply a command.

commands:
  
<?php exit(); endif;

echo "You said $argv[1]";
exit();

switch ($argv[1]) {
  case 'locale':

}
