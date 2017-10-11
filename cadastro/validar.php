<?php
if(!isset($_COOKIE["userName"])){
    echo "Necessário efetuar o login<br />";
    echo "<a href='form-login.php'>Efetuar Login</a>";
    exit;
}
