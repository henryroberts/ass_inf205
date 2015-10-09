<?php
include_once 'lib/product.php';
$product = new product();
echo $id_san_pham = $_GET['id'];
$product->set_id_sp($id_san_pham);
$product->del_sp();
header('location:products.php');