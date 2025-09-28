<?php

namespace App\Controllers;

use App\Models\MatriculaModel;

class MatriculaController extends BaseController
{
    public function index()
    {

        $modelo = new MatriculaModel();
        $datos['matriculas'] = $modelo->listar_clientes();
        return view('lista', $datos);
    }
}
