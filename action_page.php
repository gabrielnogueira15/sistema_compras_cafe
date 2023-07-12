<?php

/*echo "Olá " . $_POST["bobina"] . " (email: " . $_POST["acucar"] . ")<br><br>";
echo "Sua mensagem: " . $_POST["guardanapo"];*/


$con = mysqli_connect('localhost', 'root', '', 'compras_cafe');

$hoje = date('Y/m/d');
$sucoMa = $_POST['sucoMa'];
$guardanapo = $_POST['guardanapo'];
$bobina = $_POST['bobina'];
$papelToalha = $_POST['papelToalha'];

$sql = "INSERT INTO compras_favareto (dataHoje, sucoMa, guardanapo, bobina, papelToalha) VALUES ('$hoje', '$sucoMa', '$guardanapo', '$bobina', '$papelToalha')";

$rs = mysqli_query($con, $sql);

if($rs){
    echo "Dados inseridos";
}
else{
    echo "Erro ao inserir dados";
}



?>