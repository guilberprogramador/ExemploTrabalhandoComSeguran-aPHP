<?php

$id = (isset($_GET["id"]))?$_GET["id"]:1;
$conn = mysqli("localhost", "root", "root", "dbphp7");


$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

?>