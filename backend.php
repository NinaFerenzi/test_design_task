<?php
$request = $_POST;
$template = array(
   	'admin' => 0,
'disabled' => 0,
'activated' => 0
);
$new_user = array_merge($request, $template);
/* 😋 */ 
$query = "INSERT INTO 'user' (email, password, name, phone, country, domain, admin, disabled, activated, registration_date) VALUES ($new_user["email"],$new_user["password"], $new_user["name"], , $new_user["phone"], $new_user["country"], $new_user["domain"], $new_user["admin"], $new_user["disabled"], $new_user["activated"], now());

$this->_db->query($query);
?>
