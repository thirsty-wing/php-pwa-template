<?php

require 'document-root/classes/loc-db-accessor.php';

$db = LocDBAccessor::connect(__DIR__ . '../../database.sqlite');

$ins_account_stmt = $db->prepare("INSERT INTO account_tbl (name) VALUES (:name)");

$ins_user_stmt = $db->prepare("
INSERT INTO user_tbl (
  name,
  preferred_name,
  account_id,
  role,
  email
) values (
  :name,
  :preferred_name,
  :account_id,
  :role,
  :email
)
");


// set up account with users
$ins_account_stmt->execute(["name" => "Industrial Supply Co."]);

$ins_id = $db->lastInsertId();

$ins_user_stmt->execute([
  "name" => "Samuel D. Clawson",
  "preferred_name" => "Sam",
  "account_id" => $ins_id,
  "role" => "administrator",
  "email" => "samuel@isc.example.com"
]);

$ins_user_stmt->execute([
  "name" => "Angela Wendy Anderson",
  "preferred_name" => "Angela",
  "account_id" => $ins_id,
  "role" => "account-manager",
  "email" => "angela@isc.example.com"
]);

$ins_user_stmt->execute([
  "name" => "Tyson Garth Fowkes",
  "preferred_name" => "Tyson",
  "account_id" => $ins_id,
  "role" => "basic",
  "email" => "tyson@isc.example.com"
]);
