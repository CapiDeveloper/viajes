<?php
namespace Model;
class Viajes{

    protected static $db;
    
    public static function conectarDB($baseDatos){
        self::$db = $baseDatos;
    }

    public function __construct()
    {

    }
    //Lista todas las propiedades
    public static function all(){
        $query = "SELECT * FROM viajes";
        
        $resultado=self::consultarSQL($query);
        return $resultado;
    }
    //Listar 3 viajes
    public function viajesLimite(){
        $query = "SELECT *FROM viajes LIMIT 3";
        $resultado = self::consultarSQL($query);
        return $resultado;
    }
    public static function find($id){
        $query = "SELECT *FROM viajes where id=${id}";
        $resultado = self::consultarSQL($query);
        return array_shift($resultado);
    } 
    public static function consultarSQL($query){
        //Cosultar base de datos
        $resultado = self::$db->query($query);
        //Iterar  los resultados
        $array=[];
        while ($registro = $resultado->fetch_assoc()) {
            $array[] = static::crearObjeto($registro);
        }
        //liberar la memoria - forma orientada objetos para liberar memoria
        $resultado->free();
        return $array;
    }
    protected static function crearObjeto($registro){
        $objeto = new static;
        foreach($registro as $key => $value){
            $objeto->$key=$value;
        }
        return $objeto;
    }
}