<?php
// Work in progress


$commands = "commands:\n" .
"  make migration [migration name]\n" .
"  do migration\n" .
"  undo migration\n";

if (count($argv) < 3) {
  echo $commands;
  exit(1);
}


switch ("$argv[1] $argv[2]") {
  case 'make migration':
    echo "u say make migration!";
    break;
  default:
    echo $commands;
}
