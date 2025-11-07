<?php
    session_start();
    include "../config/db.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $email = $_POST['senha'];

    $sql = " select * from usuarios";

    if ($conn->query($sql) === true) {
        
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
    }
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <main>
        <form action="" method="POST">
            <label for="nome"></label>
            <input type="text" name="nome" id="nome" placeholder="usuário">
            <br>
            <br>
            <label for="senha"></label>
            <input type="password" name="email" id="email" placeholder="senha">
            <br>
            <br>
            <button type="submit" value="Login">Login</button>
        </form>
    </main>
</body>
</html>