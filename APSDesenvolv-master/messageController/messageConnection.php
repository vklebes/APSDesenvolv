<?php
define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASSWORD', "");
define('DB', 'messgae');

$connection = mysqli_connect(HOST, USER, PASSWORD, DB) or die ('Nao foi possivel conectar ao banco de dados'); 