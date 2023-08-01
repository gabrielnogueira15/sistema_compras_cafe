
    <?php
    $produtos = array("guardanapo", "bobina", "papelToalha", "fosforo", "gelRechaud", 
    "esponja","bombril","detergente","perfex","sacoLixo","pano","desinfetante","aguaSanitaria","alcool","sabao",
    "leite","ovos","pizza","paoNormal","paoIntegral","paoGluten","manteigaSache","melSache","geleiaSache","adocanteSache","acucarSache","salSache",
    "sucoMa","oleo","farinhaTrigo","acucar","acucarDemerara","milho","molhoTomate","molhoBranco","sucrilhos","achocolatado","leiteCoco","gelatina","fermento",
    "fermentoBio","cha","cafe","doceLeite","pessego","goiabada","leiteCondensado","cremeLeite","bolachaOreo","adocanteLiquido","aveia","granola","bolacha","chantilly","cocoRalado","amendoim","granulado","suspiro",
    "melancia","melao","abacaxi","mamao","manga","morango","banana","limao","maracuja","laranja","tomate","kiwi","hortela","manjericao","salsinha",
    "salsicha","ricota","calabresa","peitoFrango","iogurte","queijo","presunto","lombo","margarina","requeijao","paoQueijo","salgados","sassami","sucoLaranja","sucoUva"
    );

    $hotelRelatorio = $_POST['hotelRelatorio'];
    $numeroMes = $_POST['numeroMes'];

    $con = mysqli_connect('localhost', 'root', '', 'compras_cafe');

    $resultado = mysqli_query($con, "SELECT SUM(guardanapo) as guardanapo, SUM(bobina) as bobina,  SUM(papelToalha) as papelToalha,
    SUM(fosforo) as fosforo, SUM(gelRechaud) as gelRechaud, SUM(esponja) as esponja, SUM(bombril) as bombril, SUM(detergente) as detergente,
    SUM(perfex) as perfex, SUM(sacoLixo) as sacoLixo, SUM(pano) as pano, SUM(desinfetante) as desinfetante, SUM(aguaSanitaria) as aguaSanitaria,
    SUM(alcool) as alcool, SUM(sabao) as sabao, SUM(leite) as leite, SUM(ovos) as ovos, SUM(pizza) as pizza, SUM(paoNormal) as paoNormal, 
    SUM(paoIntegral) as paoIntegral, SUM(paoGluten) as paoGluten, SUM(manteigaSache) as manteigaSache, SUM(melSache) as melSache, 
    SUM(geleiaSache) as geleiaSache, SUM(adocanteSache) as adocanteSache, SUM(acucarSache) as acucarSache, SUM(leite) as leite, SUM(salSache) as salSache, 
    SUM(sucoMa) as sucoMa, SUM(oleo) as oleo, SUM(farinhaTrigo) as farinhaTrigo, SUM(acucar) as acucar, SUM(acucarDemerara) as acucarDemerara,
    SUM(milho) as milho, SUM(molhoTomate) as molhoTomate, SUM(molhoBranco) as molhoBranco, SUM(sucrilhos) as sucrilhos, SUM(achocolatado) as achocolatado, 
    SUM(leiteCoco) as leiteCoco, SUM(gelatina) as gelatina, SUM(fermento) as fermento, SUM(fermentoBio) as fermentoBio, SUM(cha) as cha,
    SUM(cafe) as cafe, SUM(doceLeite) as doceLeite, SUM(pessego) as pessego, SUM(goiabada) as goiabada, SUM(leiteCondensado) as leiteCondensado,
    SUM(cremeLeite) as cremeLeite, SUM(bolachaOreo) as bolachaOreo, SUM(adocanteLiquido) as adocanteLiquido, SUM(aveia) as aveia, SUM(granola) as granola,
    SUM(bolacha) as bolacha, SUM(chantilly) as chantilly, SUM(cocoRalado) as cocoRalado, SUM(amendoim) as amendoim, SUM(granulado) as granulado,
    SUM(suspiro) as suspiro, SUM(melancia) as melancia, SUM(melao) as melao, SUM(abacaxi) as abacaxi, SUM(mamao) as mamao, SUM(manga) as manga,
    SUM(morango) as morango, SUM(banana) as banana, SUM(limao) as limao, SUM(maracuja) as maracuja, SUM(laranja) as laranja, SUM(tomate) as tomate,
    SUM(kiwi) as kiwi, SUM(hortela) as hortela, SUM(manjericao) as manjericao, SUM(salsinha) as salsinha,  SUM(salsicha) as salsicha, SUM(ricota) as ricota,
    SUM(calabresa) as calabresa, SUM(peitoFrango) as peitoFrango, SUM(iogurte) as iogurte, SUM(queijo) as queijo, SUM(presunto) as presunto,
    SUM(lombo) as lombo, SUM(margarina) as margarina, SUM(requeijao) as requeijao, SUM(paoQueijo) as paoQueijo, SUM(salgados) as salgados,
    SUM(sassami) as sassami, SUM(sucoLaranja) as sucoLaranja, SUM(sucoUva) as sucoUva
    FROM compras_favareto WHERE MONTH(dataHoje) = $numeroMes and nomeHotel = '$hotelRelatorio'");
    $linha = mysqli_fetch_array($resultado);
    $i = 0;
    $soma = [];


    //Gerador de PDF - variavel $arquivoRelatorio
    use Dompdf\Dompdf;
    require_once 'dompdf/autoload.inc.php';
    $dompdf = new Dompdf();

    if($resultado->num_rows > 0){

        $arquivoRelatorio ='<div style="position:relative">';
        $arquivoRelatorio .='<h1 style="text-align:center;">'.'Somatório do mês '.$numeroMes.' do hotel '.$hotelRelatorio.'</h1>';
        $arquivoRelatorio .='<div style="position:absolute; left:0pt; width: 192pt;">';
        $arquivoRelatorio .= '<table border="1" cellspacing="2" cellpadding="2">';
        while($i < count($produtos)){
            $soma[$i] = $linha[$produtos[$i]];
            $arquivoRelatorio .= '<tr style="text-transform:capitalize;"><td>'.$produtos[$i].'</td>';
            $arquivoRelatorio .= '<td>'.$soma[$i].'</td></tr>';
            
            if($i == 30 ){$arquivoRelatorio .='</div><div style="position:absolute; left:200pt; width: 192pt;"><table border="1" cellspacing="2" cellpadding="2">';}
            if($i == 61 ){$arquivoRelatorio .='</div><div style="margin-left:400pt;"><table border="1" cellspacing="2" cellpadding="2">';}
            $i++;
        }
        $arquivoRelatorio .='</div></div>';
    }else{
        $arquivoRelatorio = "Nenhum dado encontrado";
    }

    $dompdf->loadHtml($arquivoRelatorio);
    $dompdf->set_option('defaultFont', 'sans');
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream(); 


    ?>
  