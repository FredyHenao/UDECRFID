<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Http\Requests\ImageFormRequest;
use Auth;

class ImagenController extends Controller
{
  public function subir(ImageFormRequest $data)
  {

    // Creamos la imagen y la almacenamos en la carpeta
    $ruta = 'images/temporal/'.Auth::user()->id.'.jpg';
    Image::make($data->file('imagen'))->resize(980, 620, function($con){
      $con->aspectRatio();
    })->save($ruta, 50);

    return '/' . $ruta .'?'.time();

  }

  public function cortar(Request $data)
  {

  $baseFromJavascript = $data->base64;

  $base_to_php = explode(',', $baseFromJavascript);

  $data = base64_decode($base_to_php[1]);

  $filepath = "images/foto_carnet/carnet".time() . Auth::user()->id.".jpg";

  file_put_contents($filepath, $data);

  Image::make($filepath)->resize(590, 310, function($con){
    $con->aspectRatio();
  })->save($filepath, 72);

  return '/' . $filepath.'?'.time();

  }
}
