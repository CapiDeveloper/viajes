<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

// Función que revisa que el usuario este autenticado
function isAuth() : void {
    if(!isset($_SESSION['login'])) {
        header('Location: /');
    }
}
function validarORedireccionar(){
    $id = $_GET['id'];
    $id = filter_var($id,FILTER_VALIDATE_INT);
        if(!$id){
            header('location: /');
        }
    return $id;
}