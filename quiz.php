<?php
require_once 'resultado.php';
session_start();



if(isset($_POST["etapa"])){
    $etapa = $_POST["etapa"];
}

if(isset($_POST["nome"])){
    $_SESSION["nome"] = $_POST["nome"];
}

for($i=1;$i<=10;$i++){
    if(isset($_POST["p".$i])){
        $_SESSION["p".$i] = $_POST["p".$i];
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
<title>Quiz</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<?php if($etapa == 0){ ?>

<section class="nome">
<h2>Campo obrigatório:</h2>

<form method="post">
<label>Nome do jogador:</label>
<input type="text" name="nome" required>

<input type="hidden" name="etapa" value="1">
<br><br>
<input type="submit" value="Começar">
</form>

</section>

<?php } ?>

<?php if($etapa == 1){ ?>

<section class="p1">
<form method="post">

<h3>Pergunta 1</h3>
<h2>O que você mais gosta de fazer no computador?</h2>

<input type="radio" name="p1" value="design" required> Criar páginas
<input type="radio" name="p1" value="logica"> Resolver problemas
<input type="radio" name="p1" value="games"> Jogar
<input type="radio" name="p1" value="robotica"> Automatizar coisas

<input type="hidden" name="etapa" value="2">

<br><br>
<input type="submit" value="Próxima">

</form>
</section>

<?php } ?>

<?php if($etapa == 2){ ?>

<section>
<form method="post">

<h3>Pergunta 2</h3>
<h2>Qual matéria você mais gosta?</h2>

<input type="radio" name="p2" value="design" required> Artes
<input type="radio" name="p2" value="logica"> Matemática
<input type="radio" name="p2" value="games"> Informática
<input type="radio" name="p2" value="robotica"> Física

<input type="hidden" name="etapa" value="3">

<br><br>
<input type="submit" value="Próxima">

</form>
</section>

<?php } ?>

<?php if($etapa == 3){ ?>

<section>
<form method="post">

<h3>Pergunta 3</h3>
<h2>O que você prefere criar?</h2>

<input type="radio" name="p3" value="design" required> Sites bonitos
<input type="radio" name="p3" value="logica"> Algoritmos
<input type="radio" name="p3" value="games"> Jogos
<input type="radio" name="p3" value="robotica"> Robôs

<input type="hidden" name="etapa" value="4">

<br><br>
<input type="submit" value="Próxima">

</form>
</section>

<?php } ?>

<?php if($etapa == 4){ ?>

<section>
<form method="post">

<h3>Pergunta 4</h3>
<h2>Qual atividade parece mais divertida?</h2>

<input type="radio" name="p4" value="design" required> Desenhar layouts
<input type="radio" name="p4" value="logica"> Resolver desafios de lógica
<input type="radio" name="p4" value="games"> Testar jogos
<input type="radio" name="p4" value="robotica"> Montar circuitos

<input type="hidden" name="etapa" value="5">

<br><br>
<input type="submit" value="Próxima">

</form>
</section>

<?php } ?>

<?php if($etapa == 5){ ?>

<section>
<form method="post">

<h3>Pergunta 5</h3>
<h2>Qual dessas áreas mais te chama atenção?</h2>

<input type="radio" name="p5" value="design" required> Design digital
<input type="radio" name="p5" value="logica"> Programação
<input type="radio" name="p5" value="games"> Desenvolvimento de jogos
<input type="radio" name="p5" value="robotica"> Robótica

<input type="hidden" name="etapa" value="6">

<br><br>
<input type="submit" value="Próxima">

</form>
</section>

<?php } ?>

<?php if($etapa == 6){ ?>

<section>
<form method="post">

<h3>Pergunta 6</h3>
<h2>O que você gostaria de aprender mais?</h2>

<input type="radio" name="p6" value="design" required> Criar interfaces bonitas
<input type="radio" name="p6" value="logica"> Criar sistemas inteligentes
<input type="radio" name="p6" value="games"> Criar mundos virtuais
<input type="radio" name="p6" value="robotica"> Controlar máquinas

<input type="hidden" name="etapa" value="7">

<br><br>
<input type="submit" value="Próxima">

</form>
</section>

<?php } ?>

<?php if($etapa == 7){ ?>

<section>
<form method="post">

<h3>Pergunta 7</h3>
<h2>Qual dessas profissões parece mais interessante?</h2>

<input type="radio" name="p7" value="design" required> Web Designer
<input type="radio" name="p7" value="logica"> Programador
<input type="radio" name="p7" value="games"> Desenvolvedor de Jogos
<input type="radio" name="p7" value="robotica"> Engenheiro de Robótica

<input type="hidden" name="etapa" value="8">

<br><br>
<input type="submit" value="Próxima">

</form>
</section>

<?php } ?>

<?php if($etapa == 8){ ?>

<section>
<form method="post">

<h3>Pergunta 8</h3>
<h2>O que você prefere fazer em um projeto?</h2>

<input type="radio" name="p8" value="design" required> Cuidar da aparência
<input type="radio" name="p8" value="logica"> Resolver a lógica do sistema
<input type="radio" name="p8" value="games"> Criar mecânicas divertidas
<input type="radio" name="p8" value="robotica"> Fazer coisas se moverem

<input type="hidden" name="etapa" value="9">

<br><br>
<input type="submit" value="Próxima">

</form>
</section>

<?php } ?>

<?php if($etapa == 9){ ?>

<section>
<form method="post">

<h3>Pergunta 9</h3>
<h2>Qual ferramenta parece mais interessante?</h2>

<input type="radio" name="p9" value="design" required> Figma
<input type="radio" name="p9" value="logica"> Linguagens de programação
<input type="radio" name="p9" value="games"> Motores de jogo
<input type="radio" name="p9" value="robotica"> Arduino

<input type="hidden" name="etapa" value="10">

<br><br>
<input type="submit" value="Próxima">

</form>
</section>

<?php } ?>

<?php if($etapa == 10){ ?>

<section>
<form method="post">

<h3>Pergunta 10</h3>
<h2>Qual resultado te deixaria mais orgulhoso?</h2>

<input type="radio" name="p10" value="design" required> Um site bonito
<input type="radio" name="p10" value="logica"> Um sistema funcionando
<input type="radio" name="p10" value="games"> Um jogo divertido
<input type="radio" name="p10" value="robotica"> Um robô funcionando

<input type="hidden" name="etapa" value="resultado">

<br><br>
<input type="submit" value="Finalizar">

</form>
</section>

<?php } ?>

<?php
if($etapa == "resultado"){

$design=0;
$logica=0;
$games=0;
$robotica=0;

for($i=1;$i<=10;$i++){

$resposta = $_SESSION["p".$i];

if($resposta == "design") $design++;
if($resposta == "logica") $logica++;
if($resposta == "games") $games++;
if($resposta == "robotica") $robotica++;

}

echo "<h1>Resultado</h1>";
echo "<h2>Jogador: ".$_SESSION["nome"]."</h2>";

if($design >= $logica && $design >= $games && $design >= $robotica){
echo "<h3>Seu perfil é DESIGN</h3>";
echo "<button> <a href='index.php'>Jogar novamente</a> </button>";
}


else if($logica >= $design && $logica >= $games && $logica >= $robotica){
echo "<h3>Seu perfil é LÓGICA</h3>";
echo "<button> <a href='index.php'>Jogar novamente</a> </button>";
}

else if($games >= $design && $games >= $logica && $games >= $robotica){
echo "<h3>Seu perfil é GAMES</h3>";
echo "<button> <a href='index.php'>Jogar novamente</a> </button>";
}

else{
echo "<h3>Seu perfil é ROBÓTICA</h3>";
echo "<button> <a href='index.php'>Jogar novamente</a> </button>";
}

session_destroy();
}

?>

</body>
</html>