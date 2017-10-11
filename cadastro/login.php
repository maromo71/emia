<?php
require_once 'init.php';
// pega os dados do formuário
$user = isset($_POST['user']) ? $_POST['user'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
// validação (bem simples, só pra evitar dados vazios)
if (empty($user) || empty($password)) {
    ?>
    <a href="form-login.php">Volte e preencha os campos</a>
    <?php
    exit;
}
// busca usuário no banco
$PDO = db_connect();
$sql = "SELECT user, password "
        . "FROM login where user=:user";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':user', $user);
$encrypt = md5($password);
if ($stmt->execute()) {
    if ($users = $stmt->fetch(PDO::FETCH_ASSOC)) {
        if ($users['password'] == $encrypt) {
            setcookie("userName", $user);
            header('Location: index.php');
        } else {
            echo "Senha não confere<br />";
            echo "<a href='form-login.php'>Efetuar Login</a>";
        }
    } else {
        echo "Usuário não encontrado<br />";
        echo "<a href='form-login.php'>Efetuar Login</a>";
    }
}
