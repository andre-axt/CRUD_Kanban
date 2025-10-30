<?php
    include '../config/db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $descricao = $_POST['descricao'];
    $nome_setor = $_POST['nome_setor'];
    $prioridade = $_POST['prioridade'];
    $data = $_POST['data'];
    $prioridade_tarefa = $_POST['prioridade_tarefa'];

    $sql = " INSERT INTO tarefas (nome_usuario,email_usuario) VALUE ('$nome','$email')";

    if ($conn->query($sql) === true) {
        echo "Novo registro criado com sucesso.";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();

};

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <header>
        <a href="index.php">Cadastrar usuário</a>
        <a href="cadastro_tarefas">Cadastrar Tarefas</a>
        <a href="gerenciar_tarefas">Gerenciar Tarefas</a>

    </header>
    <main>
        <form action="index.php" method="POST">
            <label for="nome">:</label>
            <input type="text" name="nome" id="nome">
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <br>
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>