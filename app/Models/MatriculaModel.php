<?php

namespace App\Models;

use CodeIgniter\Model;

class MatriculaModel extends Model
{
    public function listar_clientes()
    {
        // creamos nuestra consulta sql
        $sql = "select nombre as nombre_alumno, ape_paterno, ape_materno, estado from matricula ;"; 

        // ejecutamos la consulta
        $query = $this->db->query($sql);

        // retornamos los resultados
        return $query->getResult();
    }
}
