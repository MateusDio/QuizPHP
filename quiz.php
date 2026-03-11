<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Quiz Geek</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Quiz Geek</h1>

<form method="POST" action="resultado.php">

<label>Nome do jogador:</label><br>
<input type="text" name="nome" required>

<h3>1. O que você mais gosta de fazer no computador?</h3>
<input type="radio" name="p1" value="design" required> Criar páginas<br>
<input type="radio" name="p1" value="logica"> Resolver problemas<br>
<input type="radio" name="p1" value="games"> Jogar<br>
<input type="radio" name="p1" value="robotica"> Automatizar coisas<br>

<h3>2. Qual matéria você mais gosta?</h3>
<input type="radio" name="p2" value="design" required> Artes<br>
<input type="radio" name="p2" value="logica"> Matemática<br>
<input type="radio" name="p2" value="games"> Informática<br>
<input type="radio" name="p2" value="robotica"> Física<br>

<h3>3. O que você prefere criar?</h3>
<input type="radio" name="p3" value="design" required> Sites bonitos<br>
<input type="radio" name="p3" value="logica"> Algoritmos<br>
<input type="radio" name="p3" value="games"> Jogos<br>
<input type="radio" name="p3" value="robotica"> Robôs<br>

<h3>4. Qual atividade parece mais divertida?</h3>
<input type="radio" name="p4" value="design" required> Desenhar layouts<br>
<input type="radio" name="p4" value="logica"> Resolver desafios<br>
<input type="radio" name="p4" value="games"> Criar personagens<br>
<input type="radio" name="p4" value="robotica"> Montar circuitos<br>

<h3>5. Qual área mais te chama atenção?</h3>
<input type="radio" name="p5" value="design" required> Design digital<br>
<input type="radio" name="p5" value="logica"> Programação<br>
<input type="radio" name="p5" value="games"> Desenvolvimento de jogos<br>
<input type="radio" name="p5" value="robotica"> Robótica<br>

<h3>6. O que você gostaria de aprender mais?</h3>
<input type="radio" name="p6" value="design" required> Criar interfaces bonitas<br>
<input type="radio" name="p6" value="logica"> Criar sistemas inteligentes<br>
<input type="radio" name="p6" value="games"> Criar mundos virtuais<br>
<input type="radio" name="p6" value="robotica"> Controlar máquinas<br>

<h3>7. Qual profissão parece mais interessante?</h3>
<input type="radio" name="p7" value="design" required> Web Designer<br>
<input type="radio" name="p7" value="logica"> Programador<br>
<input type="radio" name="p7" value="games"> Desenvolvedor de Jogos<br>
<input type="radio" name="p7" value="robotica"> Engenheiro de Robótica<br>

<h3>8. O que você prefere fazer em um projeto?</h3>
<input type="radio" name="p8" value="design" required> Cuidar da aparência<br>
<input type="radio" name="p8" value="logica"> Resolver a lógica<br>
<input type="radio" name="p8" value="games"> Criar mecânicas divertidas<br>
<input type="radio" name="p8" value="robotica"> Fazer coisas se moverem<br>

<h3>9. Qual ferramenta parece mais interessante?</h3>
<input type="radio" name="p9" value="design" required> Figma<br>
<input type="radio" name="p9" value="logica"> Linguagens de programação<br>
<input type="radio" name="p9" value="games"> Motores de jogo<br>
<input type="radio" name="p9" value="robotica"> Arduino<br>

<h3>10. Qual resultado te deixaria mais orgulhoso?</h3>
<input type="radio" name="p10" value="design" required> Um site bonito<br>
<input type="radio" name="p10" value="logica"> Um sistema funcionando<br>
<input type="radio" name="p10" value="games"> Um jogo divertido<br>
<input type="radio" name="p10" value="robotica"> Um robô funcionando<br>

<br><br>

<button type="submit">Descobrir meu perfil</button>

</form>

</body>
</html>