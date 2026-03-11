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
$descricao = "Você tem uma mente criativa e gosta de transformar ideias em coisas visuais. Design, interfaces e estética são áreas onde você pode brilhar.";
}

elseif($logica >= $design && $logica >= $games && $logica >= $robotica){
$perfil="Hacker da Lógica";
$img = "img/hacker.png";
$descricao = "Você gosta de resolver problemas e pensar de forma estratégica. Programação, algoritmos e desafios de lógica combinam muito com você.";
}

elseif($games >= $design && $games >= $logica && $games >= $robotica){
$perfil="Criador de Games";
$img = "img/jogo.png";
$descricao = "Você tem imaginação e gosta de criar experiências divertidas. Desenvolver jogos e mundos interativos pode ser seu caminho.";
}

elseif($robotica >= $design && $robotica >= $logica && $robotica >= $games){
$perfil="Engenheiro de Robótica";
$img = "img/robotica.png";
$descricao = "Você gosta de tecnologia prática e de construir coisas que funcionam no mundo real. Robôs, eletrônica e automação são sua praia.";
}

else{
$perfil="Explorador da Tecnologia";
$descricao = "Você tem interesse em várias áreas da tecnologia e gosta de experimentar coisas novas.";
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

<p class="descricao"><?php echo $descricao; ?></p>

<a href="index.php" class="btn">Jogar novamente</a>
</div>
</body>
</html>