<?php



class Note extends Conexion
{

    public function save($datos)
    {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->nota;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function update($id,$datos)
    {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->nota;
            $respuesta = $coleccion->updateOne(['_id' =>new MongoDB\BSon\ObjectId($id)],
                ['$set'=>$datos]);
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function get()
    {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->nota;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function getOnce($id)
    {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->nota;
            $respuesta = $coleccion->findOne(
                array(
                    '_id'=>new MongoDB\BSon\ObjectId($id)
                )
            );
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

}

