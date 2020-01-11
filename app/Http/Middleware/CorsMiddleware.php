<?php

namespace App\Http\Middleware;

use Closure;

class CorsMiddleware
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
    $allowedOrigins = ['http://miapi.local:8080', 'http://localhost:8080', 'http://localhost:8081'];
        
    if(isset($_SERVER['HTTP_ORIGIN'])) {
      $origin = $_SERVER['HTTP_ORIGIN'];

      if(in_array($origin, $allowedOrigins)) {
        return $next($request)
            ->header('Access-Control-Allow-Origin', $origin)
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE')
            ->header('Access-Control-Allow-Headers', 'Content-Type');
      }
    }

    return $next($request);
  }
}
