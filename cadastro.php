<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Cadastro - Processamento</title>
</head>
<body>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $curso = $_POST['curso'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $curso_h = $_POST['curso_h'];
        $ch = $_POST['ch'];

        if (empty($nome) || empty($email)) {

            header("Location: falha.php");
            exit;
        } else {
            header("Location: sucesso.php");
            exit;
        }
    } else {
        header("Location: agradecimento.php");
        exit;
    }

        echo "<h1>Dados Recebidos:</h1>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Matricula:</strong> $matricula</p>";
        echo "<p><strong>Curso:</strong> $curso</p>";
        echo "<p><strong>E-mail:</strong> $email</p>";
        echo "<p><strong>Telefone:</strong> $telefone</p>";
        echo "<p><strong>Endereço:</strong> $endereco</p>";
        echo "<p><strong>CEP:</strong> $cep</p>";
        echo "<p><strong>Cidade:</strong> $cidade</p>";
        echo "<p><strong>UF:</strong> $uf</p>";
        echo "<p><strong>Curso para horas complementares:</strong> $curso_h</p>";
        echo "<p><strong>Carga horaria:</strong> $ch</p>";
        ?>
</body>
</html>