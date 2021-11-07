<?php 
// echo 123;
include "src/autoload.php";

use Model\PdoDb;

$db = new PdoDb("mysql:dbname=product;host=127.0.0.1","root","");
// $db->selectAll('product');
var_dump($db);
var_dump($db->selectAll('product'));
$db->delete('product',10,11,12);
var_dump($db->selectAll('product'));
// var_dump($db->insert('product',['name'=>'ndnd','price'=>6,'type_id'=>2]));