<?php
require_once __DIR__.'/../includes/app.php';

use MVC\Router;
use Controllers\ViajeController;

$router = new Router();

$router->get('/',[ViajeController::class,'index']);
$router->get('/nosotros',[ViajeController::class,'nosotros']);
$router->get('/viajes',[ViajeController::class,'viajes']);
$router->get('/viajes/listado',[ViajeController::class,'listadoViajes']);


$router->get('/viaje',[ViajeController::class,'viaje']);

// Formulario
$router->get('/testimoniales',[ViajeController::class,'testimoniales']);
$router->post('/testimoniales',[ViajeController::class,'testimoniales']);

$router->comprobarRutas();