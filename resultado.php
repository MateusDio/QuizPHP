<?php

$nome = $_POST['nome'];

$respostas = [
$_POST['p1'],
$_POST['p2'],
$_POST['p3'],
$_POST['p4'],
$_POST['p5'],
$_POST['p6'],
$_POST['p7'],
$_POST['p8'],
$_POST['p9'],
$_POST['p10']
];

$design=0;
$logica=0;
$games=0;
$robotica=0;

foreach($respostas as $r){

if($r=="design") $design++;
if($r=="logica") $logica++;
if($r=="games") $games++;
if($r=="robotica") $robotica++;

}

if($design >= $logica && $design >= $games && $design >= $robotica){
$perfil="Mestre do Design";
$img = "img/designer.png";
}

elseif($logica >= $design && $logica >= $games && $logica >= $robotica){
$perfil="Hacker da Lógica";
$img = "img/hacker.png";
}
elseif($games >= $design && $games >= $logica && $games >= $robotica){
$perfil="Criador de Games";
$img = "img/jogo.png";
}

elseif($robotica >= $design && $robotica >= $logica && $robotica >= $games){
$perfil="Engenheiro de Robótica";
$img = "img/robotica.png";

}

else{
$perfil="Explorador da Tecnologia";
}

setcookie("jogador",$nome,time()+3600);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<title>Resultado</title>
<link rel="stylesheet" href="style1.css">
</head>

<body>
<div class="quiz">
<h1>Resultado do Quiz</h1>

<p>Jogador: <?php echo $nome; ?></p>

<h2>Seu perfil é: <?php echo $perfil; ?></h2>
<img src="<?php echo $img; ?>" alt="Resultado">


<a href="index.php" class="btn">Jogar novamente</a>
</a>
</div>
</body>
</html>