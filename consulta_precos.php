<?php
    $con = mysqli_connect('localhost', 'root', '', 'compras_cafe');
    $resultado = mysqli_query($con, "SELECT * FROM precos_produtos ORDER BY id DESC LIMIT 1");
    $produto = mysqli_fetch_assoc($resultado);
    echo $produto;
