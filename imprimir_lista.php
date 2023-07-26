<?php

$con = mysqli_connect('localhost', 'root', '', 'compras_cafe');


$resultado = mysqli_query($con, "SELECT * FROM compras_favareto ORDER BY id DESC LIMIT 1");






?>