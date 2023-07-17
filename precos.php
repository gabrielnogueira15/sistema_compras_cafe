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

	$i = 0;
    while($i < sizeof($produtosSecos)){
        printf($produtosSecos[$i]."<br>");
		
        $i++;
    }

    //Conexão com banco
    $con = mysqli_connect('localhost', 'root', '', 'compras_cafe');
    $resultado = mysqli_query($con, "SELECT * FROM precos_produtos ORDER BY id DESC LIMIT 1");
    
    //Talvez não vá usar  -- $produto = mysqli_fetch_assoc($resultado);
    //Talvez não vá usar  -- echo $produto;

    //Teste printar preços
    //Produtos descartáveis
        while($obj = mysqli_fetch_assoc($resultado))
        {
            print("Guardanapo: ".$obj["guardanapo"]."\n");

            //Testar se consigo colocar variável dentro do colchetes
            $i = 0;
            print("Guardanapo: ".$obj[produtosDescartaveis[$i]]."\n");
            $i++;

            print("Bobina: ".$obj["bobina"]."\n");
            print("Papel Toalha: ".$obj["papelToalha"]."\n");
            print("Fósforo: ".$obj["fosforo"]."\n");
            print("Gel Rechaud: ".$obj["gelRechaud"]."\n");
       }

       while($linha = mysqli_fetch_array ($resultado) ) 
       {
        $codigo = $linha['codigo_cliente'];
        $item = $linha['nome'];
       }

    ?>

    <main class="apresentacao">
        <div>
            
        </div>


    
        
        

    </main>

    <footer>
        <p class="rodape">Desenvolvido por Gabriel Nogueira</p>
    </footer>
    
    
</body>

</html>