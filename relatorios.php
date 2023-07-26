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
    $produtos = array("guardanapo", "bobina", "papelToalha", "fosforo", "gelRechaud", 
    "esponja","bombril","detergente","perfex","sacoLixo","pano","desinfetante","aguaSanitaria","alcool","sabao",
    "leite","ovos","pizza","paoNormal","paoIntegral","paoGluten","manteigaSache","melSache","geleiaSache","adocanteSache","acucarSache","salSache",
    "sucoMa","oleo","farinhaTrigo","acucar","acucarDemerara","milho","molhoTomate","molhoBranco","sucrilhos","achocolatado","leiteCoco","gelatina","fermento",
    "fermentoBio","cha","cafe","doceLeite","pessego","goiabada","leiteCondensado","cremeLeite","bolachaOreo","adocanteLiquido","aveia","granola","bolacha","chantilly","cocoRalado","amendoim","granulado","suspiro",
    "melancia","melao","abacaxi","mamao","manga","morango","banana","limao","maracuja","laranja","tomate","kiwi","hortela","manjericao","salsinha",
    "salsicha","ricota","calabresa","peitoFrango","iogurte","queijo","presunto","lombo","margarina","requeijao","paoQueijo","salgados","sassami","sucoLaranja","sucoUva"
    );
    $hoteis = array("Favareto", "Pietra", "Express", "Praia Brava", "Entremares");
    $hoteisRelatorio = array("compras_favareto", "compras_pietra", "compras_express", "compras_praiaBrava", "compras_entremares");
    //------------

    $con = mysqli_connect('localhost', 'root', '', 'compras_cafe');

    //Cliente escolhe hotel e mês desejado para o relatõrio
    $hotelRelatorio = $_POST['hotelRelatorio'];
    $numeroMes = $_POST['numeroMes'];


    $resultado = mysqli_query($con, "SELECT SUM(guardanapo) as guardanapo, SUM(bobina) as bobina FROM compras_favareto WHERE MONTH(dataHoje) = $numeroMes and nomeHotel = '$hotelRelatorio'");

    echo '<table border="1" cellspacing="2" cellpadding="2">
        <caption>Favareto</caption>
        <tr>
            <td> <font face ="Arial">Valor 1</font> </td>
            <td> <font face ="Arial">Valor 2</font> </td>
        </tr>';

    $linha = mysqli_fetch_array ($resultado);
    $i = 0;
    $soma = array_fill(0,2,0);
    while($i < 2)
    {
        $soma[$i] = $linha[$produtos[$i]];
        $i++;
    }
        echo '<tr>
                <td>'.$soma[0].'</td>
                <td>'.$soma[1].'</td>
            </tr>';

//------------------------------------------------------

$resultado = mysqli_query($con, "SELECT SUM(guardanapo) as guardanapo, SUM(bobina) as bobina FROM compras_favareto WHERE MONTH(dataHoje) = $numeroMes and nomeHotel = 'compras_pietra'");
    echo '<table border="1" cellspacing="2" cellpadding="2">
    <caption>Pietra</caption>
    <tr>
        <td> <font face ="Arial">Valor 1</font> </td>
        <td> <font face ="Arial">Valor 2</font> </td>
    </tr>';

    $linha = mysqli_fetch_array ($resultado);
    $i = 0;
    $soma = array_fill(0,2,0);
    while($i < 2)
    {
        $soma[$i] = $linha[$produtos[$i]];
        $i++;
    }
        echo '<tr>
                <td>'.$soma[0].'</td>
                <td>'.$soma[1].'</td>
            </tr>';

    
    //TESTE TESTE TESTE----------------------------------
?>
    
    
    <main class="apresentacao">
        <div>
            <h1>Somatório do mês <?php echo $numeroMes?></h1>

        </div>
    </main>
 
    <footer>
        <p class="rodape">Desenvolvido por Gabriel Nogueira</p>
    </footer>
    
    
</body>

</html>