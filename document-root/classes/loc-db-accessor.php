<?php
class LocDBAccessor {
  public static function connect($db_name): PDO {
    $db = new PDO("sqlite:$db_name");
    $db->exec('PRAGMA foreign_keys = ON');
    return $db;
  }
}
