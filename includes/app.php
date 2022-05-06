<?php 
require __DIR__ . '/../vendor/autoload.php';

require 'funciones.php';
require 'database.php';

// Conectarnos a la base de datos

use Model\Testimoniales;
use Model\Viajes;

Viajes::conectarDB($db);
Testimoniales::conectarDB($db);