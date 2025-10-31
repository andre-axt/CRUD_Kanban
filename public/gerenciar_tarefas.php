<?php
    include '../config/db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $usuario = $_POST['usuario'];    
    $descricao = $_POST['descricao'];
    $nome_setor = $_POST['nome_setor'];
    $prioridade = $_POST['prioridade'];
    $prioridade_tarefa = $_POST['prioridade_tarefa'];

    $sql = " INSERT INTO tarefas (fk_usuario , descricao_tarefa, nome_setor, prioridade, prioridade_tarefa) VALUES ('$usuario','$descricao', '$nome_setor', '$prioridade', '$prioridade_tarefa')";

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
        <a href="cadastro_tarefas.php">Cadastrar Tarefas</a>
        <a href="gerenciar_tarefas.php">Gerenciar Tarefas</a>

    </header>
    <main>
        <?php include 'read.php'
        ?>
    </main>
</body>
</html>