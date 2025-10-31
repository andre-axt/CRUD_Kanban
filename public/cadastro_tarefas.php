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
        
        <form action="cadastro_tarefas.php" method="post">
            <label for="usuario">usuario:</label>
            <select name="usuario" id="usuario">
                <?php
                    $sql = "SELECT id_usuario, nome_usuario FROM usuarios ORDER BY nome_usuario";
                    $result = $conn->query($sql);
                    if($result > 0){
                        while($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row["id_usuario"] . "'>" . $row["nome_usuario"] . "</option>";
                        }
                    }
                
                
                ?>
            </select>
            <br>
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" id="descricao">
            <br>
            <label for="nome_setor">Nome do setor:</label>
            <input type="text" name="nome_setor" id="nome_setor">
            <br>
            <label for="prioridade">Prioridade:</label>
            <select name="prioridade" id="prioridade">
                <option value='baixa'>baixa</option>
                <option value='média'>média</option>
                <option value='alta'>alta</option>
            </select>
            <br>
            <label for="prioridade_tarefa">Status:</label>
            <select name="prioridade_tarefa" id="prioridade_tarefa">
                <option VALUE='a fazer'>a fazer</option>
                <option VALUE='fazendo'>fazendo</option>
                <option VALUE='feito'>feito</option>
            </select>
            <br>
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>