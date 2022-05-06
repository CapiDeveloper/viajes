<?php
namespace Model;
class Testimoniales{

    protected static $db;
    
    public static function conectarDB($baseDatos){
        self::$db = $baseDatos;
    }

    public $id;
    public $nombre;
    public $email;
    public $mensaje;
    protected static $columnasDB = ['id','nombre','email','mensaje'];

    public function __construct($args=[])
    {
        $this->id = $args['id'] ?? Null;
        $this->nombre = $args['nombre'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->mensaje = $args['mensaje'] ?? '';
    }

    public function guardar(){
        $atributos = [];
        foreach (self::$columnasDB as $key) {
            if($key === 'id') continue;
            $atributos[$key] = $this->$key;
        }
        $query = " INSERT INTO " . 'testimoniales' . " ( ";
        $query .= join(', ', array_keys($atributos));
        $query .= " ) VALUES (' "; 
        $query .= join("', '", array_values($atributos));
        $query .= " ') ";
        // Resultado de la consulta
        $resultado = self::$db->query($query);

        return [
           'resultado' =>  $resultado,
           'id' => self::$db->insert_id
        ];    
    }

    //Listar 3 viajes
    public function testimonialesLimite(){
        $query = "SELECT *FROM testimoniales LIMIT 3";
        $resultado = self::$db->query($query);

        // Iterar los resultados
        $array = [];
        while($registro = $resultado->fetch_assoc()) {
            $array[] = static::crearObjeto($registro);
        }

        // liberar la memoria
        $resultado->free();

        // retornar los resultados
        return $array;
    }

    public static function all(){
        $query = "SELECT *FROM testimoniales";
        
        $resultado = self::$db->query($query);

        // Iterar los resultados
        $array = [];
        while($registro = $resultado->fetch_assoc()) {
            $array[] = static::crearObjeto($registro);
        }

        // liberar la memoria
        $resultado->free();

        // retornar los resultados
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