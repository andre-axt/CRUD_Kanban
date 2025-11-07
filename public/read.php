<?php

include '../config/db.php';

$sql = "SELECT id_tarefa, nome_usuario, descricao_tarefa, nome_setor, prioridade, data_cadastro, prioridade_tarefa FROM tarefas  INNER JOIN usuarios on fk_usuario = id_usuario where prioridade_tarefa = 'a fazer'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table border ='1'>
        <tr>
            <th> Nome do usuário </th>
            <th> Descrição </th>
            <th> Nome do setor </th>
            <th> Prioridade </th>
            <th> Data </th>
            <th> Status </th>
        </tr>
         ";

    while ($row = $result->fetch_assoc()) {

        echo "<tr>
                <td> {$row['nome_usuario']} </td>
                <td> {$row['descricao_tarefa']} </td>
                <td> {$row['nome_setor']} </td>
                <td> {$row['prioridade']} </td>
                <td> {$row['data_cadastro']} </td>
                <td> {$row['prioridade_tarefa']} </td>
                <td> 
                    <a href='cadastro_tarefas.php?id={$row['id_tarefa']}'>Editar<a>
                    <a href='delete.php?id={$row['id_tarefa']}'>Excluir<a>
                
                </td>
              </tr>   
        ";
    }
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

$sql = "SELECT id_tarefa, nome_usuario, descricao_tarefa, nome_setor, prioridade, data_cadastro, prioridade_tarefa FROM tarefas INNER JOIN usuarios on fk_usuario = id_usuario where prioridade_tarefa = 'fazendo'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table border ='1'>
        <tr>
            <th> Nome do usuário </th>
            <th> Descrição </th>
            <th> Nome do setor </th>
            <th> Prioridade </th>
            <th> Data </th>
            <th> Status </th>
        </tr>
         ";

    while ($row = $result->fetch_assoc()) {

        echo "<tr>
                <td> {$row['nome_usuario']} </td>
                <td> {$row['descricao_tarefa']} </td>
                <td> {$row['nome_setor']} </td>
                <td> {$row['prioridade']} </td>
                <td> {$row['data_cadastro']} </td>
                <td> {$row['prioridade_tarefa']} </td>
                <td> 
                    <a href='cadastro_tarefas.php?id={$row['id_tarefa']}'>Editar<a>
                    <a href='delete.php?id={$row['id_tarefa']}'>Excluir<a>
                
                </td>
              </tr>   
        ";
    }
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

$sql = "SELECT id_tarefa, nome_usuario, descricao_tarefa, nome_setor, prioridade, data_cadastro, prioridade_tarefa FROM tarefas INNER JOIN usuarios on fk_usuario = id_usuario where prioridade_tarefa = 'feito'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table border ='1'>
        <tr>
            <th> Nome do usuário </th>
            <th> Descrição </th>
            <th> Nome do setor </th>
            <th> Prioridade </th>
            <th> Data </th>
            <th> Status </th>
        </tr>
         ";

    while ($row = $result->fetch_assoc()) {

        echo "<tr>
                <td> {$row['nome_usuario']} </td>
                <td> {$row['descricao_tarefa']} </td>
                <td> {$row['nome_setor']} </td>
                <td> {$row['prioridade']} </td>
                <td> {$row['data_cadastro']} </td>
                <td> {$row['prioridade_tarefa']} </td>
                <td> 
                    <a href='cadastro_tarefas.php?id={$row['id_tarefa']}'>Editar<a>
                    <a href='delete.php?id={$row['id_tarefa']}'>Excluir<a>
                
                </td>
              </tr>   
        ";
    }
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

$conn -> close();
