<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

class Conexion
{
    public function conectar()
    {
        try {
            $servidor = 'localhost';

            $bd = 'notas';
            $puerto = '27017';

            $cadenaConexion = 'mongodb://' .
                $servidor . ':' .
                $puerto . '/' .
                $bd;
            $nota = new MongoDB\Client($cadenaConexion);
            return $nota->selectDatabase($bd);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
