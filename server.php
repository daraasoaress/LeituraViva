<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$nome = htmlspecialchars($_POST['nome']);
$email = htmlspecialchars($_POST['email']);
$genero = htmlspecialchars($_POST['genero']);
$livro = htmlspecialchars($_POST['livro']);
$telefone = htmlspecialchars($_POST['telefone']);
$data_nascimento = htmlspecialchars($_POST['data_nascimento']);
$cor = htmlspecialchars($_POST['cor']);
$preferencia = htmlspecialchars($_POST['preferencia']);
echo "
<!DOCTYPE html>
<html lang='pt-br'>
<head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>Perfil do Leitor</title>
<link rel='stylesheet' href='style.css'>
</head>
<body>
<header>
<h1>Bem-vindo ao Leitura Viva, $nome!</h1>
<nav>
<ul>
<li><a href='index.html'>Início</a></li>
<li><a href='server.php'>Dados</a></li>
<li><a href='desenvolvedores.html'>Desenvolvedores</a></li>

</ul>
</nav>
</header>
<main>
<h2>Seu Perfil:</h2>
<p><strong>Nome:</strong> $nome</p>
<p><strong>E-mail:</strong> $email</p>
<p><strong>Gênero Literário Favorito:</strong> $genero</p>
<p><strong>Livro Favorito:</strong> $livro</p>
<p><strong>Telefone:</strong> $telefone</p>
<p><strong>Data de Nascimento:</strong> $data_nascimento</p>
<p><strong>Cor Favorita:</strong> $cor</p>
<p><strong>Prefere:</strong> " . ($preferencia == 'livros-fisicos' ? 'Livros Físicos' :
'E-books') . "</p>
</main>
<footer>
<p>IFRN Campus Santa Cruz</p>
<p>Trabalho de Autoria Web</p>
<p>Prof. Marcelo Figueiredo Barbosa Júnior</p>
<p>Grupo: Fátima e Dandara</p>
</footer>
</body>
</html>";
}
?>