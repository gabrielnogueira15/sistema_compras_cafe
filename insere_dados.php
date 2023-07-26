<?php

    //Arrays de todos os produtos
    $produtosDescartaveis = array("guardanapo", "bobina", "papelToalha", "fosforo", "gelRechaud");
    $produtosDeLimpeza = array("esponja","bombril","detergente","perfex","sacoLixo","pano","desinfetante","aguaSanitaria","alcool","sabao");
    $produtosOutros = array("leite","ovos","pizza","paoNormal","paoIntegral","paoGluten","manteigaSache","melSache","geleiaSache","adocanteSache","acucarSache","salSache");
    $produtosSecos = array("sucoMa","oleo","farinhaTrigo","acucar","acucarDemerara","milho","molhoTomate","molhoBranco","sucrilhos","achocolatado","leiteCoco","gelatina","fermento",
    "fermentoBio","cha","cafe","doceLeite","pessego","goiabada","leiteCondensado","cremeLeite","bolachaOreo","adocanteLiquido","aveia","granola","bolacha","chantilly","cocoRalado","amendoim","granulado","suspiro");
    $hortifruti = array("melancia","melao","abacaxi","mamao","manga","morango","banana","limao","maracuja","laranja","tomate","kiwi","hortela","manjericao","salsinha");
    $produtosGelados = array("salsicha","ricota","calabresa","peitoFrango","iogurte","queijo","presunto","lombo","margarina","requeijao","paoQueijo","salgados","sassami","sucoLaranja","sucoUva");


    $con = mysqli_connect('localhost', 'root', '', 'compras_cafe');


    $dataHoje = $_POST['dataHoje'];
    $guardanapo =$_POST['guardanapo'];
    $bobina=$_POST['bobina']; 
    $papelToalha=$_POST['papelToalha']; 
    $fosforo=$_POST['fosforo']; 
    $gelRechaud=$_POST['gelRechaud'];
     $esponja=$_POST['esponja']; 
     $bombril=$_POST['bombril'];
     $detergente=$_POST['detergente'];
     $perfex=$_POST['perfex']; 
     $sacoLixo=$_POST['sacoLixo']; 
     $pano=$_POST['pano'];
     $desinfetante=$_POST['desinfetante']; 
     $aguaSanitaria=$_POST['aguaSanitaria']; 
     $alcool=$_POST['alcool'];
     $sabao=$_POST['sabao']; 
     $leite=$_POST['leite'];
     $ovos=$_POST['ovos']; 
     $pizza=$_POST['pizza']; 
     $paoNormal=$_POST['paoNormal']; 
     $paoIntegral=$_POST['paoIntegral'];
     $paoGluten=$_POST['paoGluten']; 
     $manteigaSache=$_POST['manteigaSache']; 
     $melSache=$_POST['melSache']; 
     $geleiaSache=$_POST['geleiaSache']; 
     $adocanteSache=$_POST['adocanteSache']; 
     $acucarSache=$_POST['acucarSache'];
     $salSache=$_POST['salSache']; 
     $sucoMa=$_POST['sucoMa'];
     $oleo=$_POST['oleo'];
     $farinhaTrigo=$_POST['farinhaTrigo']; 
     $acucar=$_POST['acucar'];
     $acucarDemerara=$_POST['acucarDemerara']; 
     $milho=$_POST['milho']; 
     $molhoTomate=$_POST['molhoTomate']; 
     $molhoBranco=$_POST['molhoBranco'];
     $sucrilhos=$_POST['sucrilhos'];
     $achocolatado=$_POST['achocolatado']; 
     $leiteCoco=$_POST['leiteCoco']; 
     $gelatina=$_POST['gelatina']; 
     $fermento=$_POST['fermento'];
    $fermentoBio=$_POST['fermentoBio']; 
    $cha=$_POST['cha']; 
    $cafe=$_POST['cafe']; 
    $doceLeite=$_POST['doceLeite']; 
    $pessego=$_POST['pessego']; 
    $goiabada=$_POST['goiabada']; 
    $leiteCondensado=$_POST['leiteCondensado']; 
    $cremeLeite=$_POST['cremeLeite'];
    $bolachaOreo=$_POST['bolachaOreo']; 
    $adocanteLiquido=$_POST['adocanteLiquido']; 
    $aveia=$_POST['aveia']; 
    $granola=$_POST['granola']; 
    $bolacha=$_POST['bolacha'];  
    $chantilly=$_POST['chantilly']; 
    $cocoRalado=$_POST['cocoRalado']; 
    $amendoim=$_POST['amendoim']; 
    $granulado=$_POST['granulado']; 
    $suspiro=$_POST['suspiro']; 
    $melancia=$_POST['melancia']; 
    $melao=$_POST['melao']; 
    $abacaxi=$_POST['abacaxi']; 
    $mamao=$_POST['mamao'];
    $manga=$_POST['manga']; 
    $morango=$_POST['morango']; 
    $banana=$_POST['banana']; 
    $limao=$_POST['limao']; 
    $maracuja=$_POST['maracuja']; 
    $laranja=$_POST['laranja']; 
    $tomate=$_POST['tomate']; 
    $kiwi=$_POST['kiwi']; 
    $hortela=$_POST['hortela']; 
    $manjericao=$_POST['manjericao']; 
    $salsinha=$_POST['salsinha']; 
    $salsicha=$_POST['salsicha'];
    $ricota=$_POST['ricota']; 
    $calabresa=$_POST['calabresa']; 
    $peitoFrango=$_POST['peitoFrango']; 
    $iogurte=$_POST['iogurte']; 
    $queijo=$_POST['queijo']; 
    $presunto=$_POST['presunto']; 
    $lombo=$_POST['lombo']; 
    $margarina=$_POST['margarina']; 
    $requeijao=$_POST['requeijao']; 
    $paoQueijo=$_POST['paoQueijo']; 
    $salgados=$_POST['salgados']; 
    $sassami=$_POST['sassami']; 
    $sucoLaranja=$_POST['sucoLaranja'];
    $sucoUva=$_POST['sucoUva'];
    
    $nomeHotel = $_POST['nomeHotel'];    

    $sql = "INSERT INTO compras_favareto (nomeHotel, dataHoje, guardanapo, bobina, papelToalha, fosforo, gelRechaud, esponja ,bombril ,detergente ,perfex ,sacoLixo ,pano ,desinfetante ,aguaSanitaria ,alcool ,sabao, leite ,ovos ,pizza ,paoNormal ,paoIntegral ,paoGluten ,manteigaSache ,melSache ,geleiaSache ,adocanteSache ,acucarSache ,salSache, sucoMa ,oleo ,farinhaTrigo ,acucar ,acucarDemerara ,milho ,molhoTomate ,molhoBranco ,sucrilhos ,achocolatado ,leiteCoco ,gelatina ,fermento ,fermentoBio ,cha ,cafe ,doceLeite ,pessego ,goiabada ,leiteCondensado ,cremeLeite ,bolachaOreo ,adocanteLiquido ,aveia ,granola ,bolacha ,chantilly ,cocoRalado ,amendoim ,granulado ,suspiro ,melancia ,melao ,abacaxi ,mamao ,manga ,morango ,banana ,limao ,maracuja ,laranja ,tomate ,kiwi ,hortela ,manjericao ,salsinha ,salsicha ,ricota ,calabresa ,peitoFrango ,iogurte ,queijo ,presunto ,lombo ,margarina ,requeijao ,paoQueijo ,salgados ,sassami ,sucoLaranja ,sucoUva) 
    VALUES ('$nomeHotel', '$dataHoje', '$guardanapo', '$bobina', '$papelToalha','$fosforo', '$gelRechaud','$esponja' ,'$bombril' ,'$detergente' ,'$perfex' ,'$sacoLixo' ,'$pano' ,'$desinfetante' ,'$aguaSanitaria' ,'$alcool' ,'$sabao' ,'$leite' ,'$ovos' ,'$pizza' ,'$paoNormal' ,'$paoIntegral' ,'$paoGluten' ,'$manteigaSache' ,'$melSache' ,'$geleiaSache' ,'$adocanteSache' ,'$acucarSache' ,'$salSache' ,'$sucoMa' ,'$oleo' ,'$farinhaTrigo' ,'$acucar' ,'$acucarDemerara' ,'$milho' ,'$molhoTomate' ,'$molhoBranco' ,'$sucrilhos' ,'$achocolatado' ,'$leiteCoco' ,'$gelatina' ,'$fermento', '$fermentoBio' ,'$cha' ,'$cafe' ,'$doceLeite' ,'$pessego' ,'$goiabada' ,'$leiteCondensado' ,'$cremeLeite' ,'$bolachaOreo' ,'$adocanteLiquido' ,'$aveia' ,'$granola' ,'$bolacha' ,'$chantilly' ,'$cocoRalado' ,'$amendoim' ,'$granulado' ,'$suspiro' ,'$melancia' ,'$melao' ,'$abacaxi' ,'$mamao' ,'$manga' ,'$morango' ,'$banana' ,'$limao' ,'$maracuja' ,'$laranja' ,'$tomate' ,'$kiwi' ,'$hortela' ,'$manjericao' ,'$salsinha' ,'$salsicha' ,'$ricota' ,'$calabresa' ,'$peitoFrango' ,'$iogurte' ,'$queijo' ,'$presunto' ,'$lombo' ,'$margarina' ,'$requeijao' ,'$paoQueijo' ,'$salgados' ,'$sassami' ,'$sucoLaranja' ,'$sucoUva')";

    $rs = mysqli_query($con, $sql);
    if($rs){
        echo "Dados inseridos";
    }
    else{
        echo "Erro ao inserir dados, verifique os campos DATA e HOTEL que são obrigatórios";
    }



?>