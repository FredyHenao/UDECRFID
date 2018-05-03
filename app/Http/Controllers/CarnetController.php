<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CarnetFormRequest;
use App\carnet\Carnet;

class CarnetController extends Controller
{
    public function guardar(CarnetFormRequest $data)
    {

      $carnet = new Carnet();
      $carnet->nombre = $data->nombre;
      $carnet->programa = $data->programa;
      $carnet->codigo = $data->codigo;
      $carnet->imagen= $data->imagen;
      $carnet->save();

      // Retornamos la lista de carnets
      return response()->json('Registrado', 200);

    }

    public function lista()
    {
      return Carnet::orderBy('id', 'desc')->get();
    }


    public function eliminar(Request $data)
    {
      $carnet = Carnet::find($data->id);
      $carnet->delete();
    }
}
