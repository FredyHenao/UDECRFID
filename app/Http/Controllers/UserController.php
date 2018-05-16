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
      $usuario = User::find($request->id);
      $listens = Listen::activos()->orderByRaw('RAND()')->limit(5)->get();

      return view('access-control.detalle_usuario')->with([
        'usuario' => $usuario,
        'listens' => $listens
      ]);

    }

    public function guardarGenerar(CarnetFormRequest $request)
    {
      $validar = Listen::where('FK_UsuarioId', $request->usuario_id)->count();

      if($validar == 0)
      {
        $listen = Listen::where('PK_IdListen', $request->select)->update([
          'FK_UsuarioId' => $request->usuario_id
        ]);
        return response()->json('Todo ok', 200);
      }else{
        return response()->json('Error', 400);
      }
    }

    public function generarCarnet($id)
    {
      $user = User::find($id);
      $pdf = PDF::loadView('pdf.carnet', compact('user'));
      return $pdf->download('carnet.pdf');
    }


}
