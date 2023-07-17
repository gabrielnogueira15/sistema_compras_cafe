<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores dos produtos</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <header class="cabecalho">
        <nav class="cabecalho__menu">
            <a class="cabecalho__menu__links" href="index.html">Ínicio</a>
            <a class="cabecalho__menu__links" href="favareto.html">Favareto</a>
            <a class="cabecalho__menu__links" href="favareto.html">Pietra</a>
            <a class="cabecalho__menu__links" href="favareto.html">Express</a>
            <a class="cabecalho__menu__links" href="favareto.html">Praia Brava</a>
            <a class="cabecalho__menu__links" href="favareto.html">Entremares</a>
        </nav>
    </header>

    <?php
    //Arrays de todos os produtos
    $produtosDescartaveis = array("guardanapo", "bobina", "papelToalha", "fosforo", "gelRechaud");
    $produtosDeLimpeza = array("esponja","bombril","detergente","perfex","sacoLixo","pano","desinfetante","aguaSanitaria","alcool","sabao");
    $produtosOutros = array("leite","ovos","pizza","paoNormal","paoIntegral","paoGluten","manteigaSache","melSache","geleiaSache","adocanteSache","acucarSache","salSache");
    $produtosSecos = array("sucoMa","oleo","farinhaTrigo","acucar","acucarDemerara","milho","molhoTomate","molhoBranco","sucrilhos","achocolatado","leiteCoco","gelatina","fermento",
    "fermentoBio","cha","cafe","doceLeite","pessego","goiabada","leiteCondensado","cremeLeite","bolachaOreo","adocanteLiquido","aveia","granola","bolacha","chantilly","cocoRalado","amendoim","granulado","suspiro");
    $hortifruti = array("melancia","melao","abacaxi","mamao","manga","morango","banana","limao","maracuja","laranja","tomate","kiwi","hortela","manjericao","salsinha");
    $produtosGelados = array("salsicha","ricota","calabresa","peitoFrango","iogurte","queijo","presunto","lombo","margarina","requeijao","paoQueijo","salgados","sassami","sucoLaranja","sucoUva");

    //------------
    $con = mysqli_connect('localhost', 'root', '', 'compras_cafe');
    //Soma dos valores dos guardanapos
    $resultado = mysqli_query($con, "SELECT guardanapo FROM precos_produtos");
    while($linha = mysqli_fetch_array ($resultado)) 
       {
        $i =0;
        $soma = $soma + $linha[$i];
        $i++;
       }
    ?>

    <main class="apresentacao">
        <div>
            <p>Oi</p>
        </div>
    </main>

    <footer>
        <p class="rodape">Desenvolvido por Gabriel Nogueira</p>
    </footer>
    
    
</body>

</html>