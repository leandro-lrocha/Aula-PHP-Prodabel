<?php


echo "<br>";
echo "------- Array -------";
echo "<br>";

$passaros  = array(
	'Alma-de-gato (Piaya cayana)',
	'Águia-pescadora (Pandion haliaetus)',
	'Ananaí (Amazonetta brasiliensis)',
	'Anu-branco (Guira guira)',
	'Anu-preto (Crotophaga ani)',
	'Arapaçu-do-cerrado (Lepidocolaptes angustirostris)',
	'Ariramba-de-cauda-ruiva (Galbula ruficauda)',
	'Arredio-pálido (Cranioleuca pallida)',
	'Andorinha-do-rio (Tachycineta albiventer)',
	'Andorinha-pequena-de-casa (Pygochelidon cyanoleuca)',
	'Beija-flor-de-fronte-violeta (Thalurania glaucopis)',
	'Beija-flor-tesoura (Eupetomena macroura)',
	'Beija-flor-preto (Florisuga fusca)',
	'Bem-te-vi (Pitangus sulphuratus)',
	'Bem-te-vi-rajado (Myiodynastes maculatus)',
	'Besourinho-de-bico-vermelho (Chlorostilbon lucidus)',
	'Bico-de-prata (Ramphocelus carbo)',
	'Bigodinho (Sporophila lineola)',
	'Biguá (Phalacrocorax brasilianus)',
	'Biguatinga (Anhinga anhinga)',
	'Cabeça-seca (Mycteria americana)',
	'Cambacica (Coereba flaveola)',
	'Canário-da-terra (Sicalis flaveola)',
	'Carcará (Caracara plancus)',
	'Carrapateiro (Milvago chimachima)',
	'Catirumbava (Orthogonys chloricterus)',
	'Choca-barrada (Thamnophilus doliatus)',
	'Chopim (Molothrus bonariensis)',
	'Cochicho (Anumbius annumbi)',
	'Coleirinho (Sporophila caerulescens)',
	'Coró-coró (Mesembrinis cayennensis)',
	'Corruíra (Troglodytes musculus)',
	'Corucão (Chordeiles nacunda)',
	'Coruja-buraqueira (Athene cunicularia)',
	'Corujinha-do-mato (Megascops choliba)',
	'Curicaca (Theristicus caudatus)',
	'Curutié (Certhiaxis cinnamomeus)',
	'Ferreirinho-relógio (Todirostrum cinereum)',
	'Frango-d’água-comum (Gallinula galeata)',
	'Freirinha (Arundinicola leucocephala)',
	'Garça-branca-grande (Ardea alba)',
	'Garça-branca-pequena (Eggreta thula)',
	'Garça-moura (Ardea cocoi)',
	'Garça-vaqueira (Bubulcus ibis)',
	'Garibaldi (Chrysomus ruficapillus)',
	'Gavião-carijó (Rupornis magnirostris)',
	'Gavião-peneira (Elanus leucurus)',
	'Gaviãozinho (Gampsonyx swainsonii)',
	'Guaxe (Cacicus haemorrhous)',
	'Irerê (Dendrocygna viduata)',
	'Jaçanã (Jacana jacana)',
	'Jacuaçu (Penelope obscura)',
	'João-de-barro (Furnarius rufus)',
	'Juruviara (Vireo olivaceus)',
	'Lavadeira-mascarada (Fluvicola nengeta)',
	'Maria-cavaleira (Myiarchus ferox)',
	'Maria-cavaleira-de-rabo-enferrujado (Myiarchus tyrannulus)',
	'Maria-leque-de-sudeste (Onychorhynchus swainsoni)',
	'Mergulhão-pequeno (Tachybaptus dominicus)',
	'Mocho-dos-banhados (Asio flammeus)',
	'Neinei (Megarhynchus pitangua)',
	'Pardal (Passer domesticus)',
	'Periquito-rico (Brotogeris tirica)',
	'Pica-pau-de-banda-branca (Dryocopus  lineatus)',
	'Pica-pau-verde-barrado (Colaptes melanochloros)',
	'Pitiguari (Cyclarhis gujanensis)',
	'Pomba-de-bando (Zenaira auriculata)',
	'Pombão (Patagioenas picazuro)',
	'Pombo-doméstico (Columba livia)',
	'Primavera (Xolmis cinereus)',
	'Quero-quero (Vanellus chilensis)',
	'Quiriquiri (Falco sparverius)',
	'Rolinha (Columbina talpacoti)',
	'Sabiá-barranco (Turdus leucomelas)',
	'Sabiá-do-campo (Mimus saturninus)',
	'Sabiá-laranjeira (Turdus rufiventris)',
	'Saí-azul (Dacnis cayana)',
	'Saí-canário (Thlypopsis sordida)',
	'Saíra-amarela (Tangara cayana)',
	'Sanhaço-cinzento (Tangara sayaca)',
	'Sanhaço-de-coleira (Schistochlamys melanopis)',
	'Sanhaço-do-coqueiro (Tangara palmarum)',
	'Sanhaço-de-encontro-amarelo (Tangara ornata)',
	'Sanhaço-de-encontro-azul (Tangara cyanoptera)',
	'Saracura-do-mato (Aramides saracura)',
	'Seriema (Cariama cristata)',
	'Socó-boi (Tigrisoma lineatum)',
	'Socó-dorminhoco (Nycticorax nycticorax)',
	'Socozinho (Butorides striata)',
	'Soldadinho (Antilophia galeata)',
	'Suiriri (Tyrannus melancholicus)',
	'Suiriri-cavaleiro (Machetornis rixosa)',
	'Tecelão (Cacicus chrysopterus)',
	'Teque-teque (Todirostrum poliocephalum)',
	'Tesourinha (Tyrannus savana)',
	'Tico-tico (Zonotrichia capensis)',
	'Tico-tico-de-bico-amarelo (Arremon flavirostris)',
	'Tico-tico-do-campo (Ammodramus humeralis)',
	'Tiê-de-topete (Trichothraupis melanops)',
	'Tiê-preto (Tachyphonus coronatus)',
	'Tiriba-de-testa-vermelha (Pyrrhura frontalis)',
	'Tucano (Ramphastos toco)',
	'Tuim (Forpus xanthopterygius)',
	'Urubu-de-cabeça-preta (Coragyps atratus)',
	'Viuvinha (Colonia colonus)'
);

//var_dump($passaros);

$indice = 0;	
$tamanhoarray = count($passaros);


echo '### Percorrendo o Array com Whille';
echo '<br>';
echo '<br>';

$indice = 0;

 while($indice < $tamanhoarray) {
   echo 'O conteudo na posição '.$indice.' é ' . $passaros[$indice];
   echo '<br>';
   $indice++;

}

echo"<br>";
echo"<br>";

echo '### Percorrendo o Array com Do Whille';

$indice = 0; // zerando novamente o indice para o Do While
echo"<br>";
echo"<br>";
do {
   echo 'O conteudo na posição '.$indice.' é ' . $passaros[$indice];
   echo '<br>';
   $indice++;
  
}
 while($indice < $tamanhoarray) ;

/*
	um exemplo de erro na utilização do Do Whille, ele executa o bloco antes do teste (while), o que pode gerar erros na execução.
*/

echo '<br>';
echo '<br>';

$indice = 200; // inserindo um valor no indice que não existe, o maximo é 104.

do {
   echo 'DO WHILE - O conteudo na posição '.$indice.' é ' . $passaros[$indice];
   echo '<br>';
   $indice++;
  
}
 while($indice < $tamanhoarray) ;


 // O While irá testar antes de executar, evitando o erro de execução

 $indice = 200;

 while($indice < $tamanhoarray) {
   echo 'WHILE - O conteudo na posição '.$indice.' é ' . $passaros[$indice];
   echo '<br>';
   $indice++;

}

echo"<br>";
echo"<br>";

echo '### Percorrendo o Array com FOR';

//$indice = 0; // zerando novamente o indice para o FOR, não é necessário foi dentro do bloco de validação do for já temos a primeira condição.
echo"<br>";
echo"<br>";


for($indice = 0 ; $indice < $tamanhoarray ; $indice++ )
    {
        echo "O valor do meu indice é: " . ($indice + 1);
        echo " - Valor do array: " . $passaros[$indice];
        //echo $lista[$indice];
        echo "<br>";
    }


echo"<br>";
echo"<br>";

echo '### Percorrendo o Array com FOREACH';

echo"<br>";
echo"<br>";


foreach ($passaros as $nomepassaro) {
	echo "O conteúdo do array é: $nomepassaro<br>";
	}
?>