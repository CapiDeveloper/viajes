<?php

$db = mysqli_connect('localhost','root','root','agenciaViajes');
mysqli_set_charset($db, 'utf8'); // Para formto en json

if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}