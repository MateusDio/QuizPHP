<?php
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Qual é o seu Perfil Geek?</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Qual é o seu Perfil Geek?</h1>

<?php
if(isset($_COOKIE['jogador'])){
    echo "<p>Bem-vindo de volta, ".$_COOKIE['jogador']."!</p>";
}
?>

<p>Responda o quiz e descubra qual é a sua verdadeira identidade no mundo da tecnologia.</p>

<a href="quiz.php">
<button>Começar Quiz</button>
</a>

</body>
</html>