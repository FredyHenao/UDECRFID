<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarnetFormRequest;
use App\Listen;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function detalle(Request $request)
    {
      $usuario = \App\Container\Users\Src\User::find($request->id);
      $listens = Listen::activos()->orderByRaw('RAND()')->limit(5)->get();

      return view('access-control.detalle_usuario')->with([
        'usuario' => $usuario,
        'listens' => $listens
      ]);

    }

    public function guardarGenerar(CarnetFormRequest $request)
    {
      $usuario = User::find($request->usuario_id);

      // Verificamos que el usuario no tenga asignado un codigo
      if(empty($usuario->card_code))
      {
        // Consultamos el listen que contiene el codigo
        $listen = Listen::where('PK_IdListen', $request->select)->first();

        // Asignamos el codigo al usuario
        $usuario->card_code = $listen->LI_Codigo;
        $usuario->update();

        // Eliminamos el codigo de listen
        $listen->delete();

        return response()->json('Todo ok', 200);
      }else{
        return response()->json('Error', 400);
      }
    }

    public function generarCarnet($id)
    {
      $user = \App\Container\Users\Src\User::find($id);
      $pdf = PDF::loadView('pdf.carnet', compact('user'));
      return $pdf->download('carnet.pdf');
    }


}
