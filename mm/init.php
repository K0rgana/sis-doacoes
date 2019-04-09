<?php
session_start();
function get($idx) {
    return $_GET[$idx] ?? false;
}
function post($idx) {
    return $_POST[$idx];
}
function juntar($arr) {
    return join(',', $arr);
}
function login($name, $email) {
    $_SESSION['logado'] = true;
    $_SESSION['usuario'] = $name;
    $_SESSION['email'] = $email;
}
function logout() {
    $_SESSION['logado'] = false;
    unset($_SESSION['usuario']);
    unset($_SESSION['email']);
}
function is_logged() {
    return $_SESSION['logado'] ?? false;
}
define('TITLE', 'Sistema de Doações');
?>