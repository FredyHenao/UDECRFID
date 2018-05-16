<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class UserActivo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      $validar = User::find($request->id);
      if(empty($validar)){
        return redirect()->route('users.index');
      }else{
        return $next($request);
      }
    }
}
