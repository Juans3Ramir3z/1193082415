<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ComprobarEdad
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        $limitDate = Carbon::create(2004, 7, 1);
        $count = User::where('birthday', '>', $limitDate)->count();

        if ($count > 10) {
            return response()->json([
                'message' => 'Hay más de 10 usuarios nacidos despues del 1 de julio de 2004.'
            ], 403);
        }
        return $next($request);
    }
}
