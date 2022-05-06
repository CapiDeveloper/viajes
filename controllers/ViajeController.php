<?php
namespace Controllers;

use MVC\Router;
use Model\Viajes;
use Model\Testimoniales;

class ViajeController{
    public static function index(Router $router){
        $viajes = new Viajes;
        $viajesSeleccionados = $viajes->viajesLimite();
        $testimoniales = new Testimoniales();
        $testimonialesSeleccionados = $testimoniales->testimonialesLimite();
        $router->render('inicio',[
            'pagina'=> 'inicio',
            'clase'=>'home',
            'viajes'=>$viajesSeleccionados,
            'testimoniales'=>$testimonialesSeleccionados
        ]);
    }
    public static function nosotros(Router $router){
        $router->render('nosotros',[
            'pagina'=> 'nosotros'
        ]);
    }
    public static function testimoniales(Router $router){
        $testimoniales = Testimoniales::all();
        $alertas = '';
        $nombre = '';
        $email = '';
        $mensaje = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $mensaje = $_POST['mensaje'];
            
            if ($nombre === ''|| $email===''|| $mensaje ==='') {
                $alertas = 'Todos los campos son obligatorios';
            }else{
                $viaje = new Testimoniales($_POST);
                $viaje->guardar();
                header('location: /testimoniales');
            }
        }
        $router->render('testimoniales',[
            'pagina'=> 'testimoniales',
            'alertas'=>$alertas,
            'nombre'=>$nombre,
            'email'=>$email,
            'mensaje'=>$mensaje,
            'testimoniales'=>$testimoniales
        ]);
    }
    public static function viajes(Router $router){
        $viaje = new Viajes;
        $viajes = $viaje->all();
        $router->render('viajes',[
            'pagina'=> 'viajes',
            'viajes'=>$viajes
        
        ]);
    }
    public static function viaje(Router $router){
        $id = validarORedireccionar();
        $viaje = new Viajes();
        $destino =  $viaje->find($id);
        $router->render('viaje',[
            'destino'=>$destino,
            'pagina'=>'Informacion de viaje'
        ]);
    }
}