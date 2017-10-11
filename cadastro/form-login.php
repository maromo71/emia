<?php
require 'init.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login do Usuário</title>
    </head>
    <body>
        <h1>Sistema de Cadastro</h1>
        <h2>Login do Usuário</h2>
        <form action="login.php" method="post">
            <label for="user">Usuário: </label>
            <br>
            <input type="text" name="user" id="user">
            <br><br>
            <label for="password">Senha: </label>
            <br>
            <input type="password" name="password" id="password">
            <br><br>
            
            <input type="submit" value="Efetuar Login">
        </form>
    </body>
</html>
