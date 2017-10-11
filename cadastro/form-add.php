<?php
require 'init.php';
require 'validar.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Usuário</title>
    </head>
    <body>
        <h1>Sistema de Cadastro</h1>
        <h2>Cadastro de Usuário</h2>
        <form action="add.php" method="post">
            <label for="name">Nome: </label>
            <br>
            <input type="text" name="name" id="name">
            <br><br>
            <label for="email">Email: </label>
            <br>
            <input type="text" name="email" id="email">
            <br><br>
            Gênero:
            <br>
            <input type="radio" name="gender" id="gener_m" value="M">
            <label for="gener_m">Masculino </label>
            <input type="radio" name="gender" id="gener_f" value="F">
            <label for="gener_f">Feminino </label>
            <br><br>
            <label for="birthdate">Data de Nascimento: </label>
            <br>
            <input type="text" name="birthdate" id="birthdate" placeholder="dd/mm/YYYY">
            <br><br>
            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>
