<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Verificar que esté autenticado y sea admin
        if (Auth::check() && Auth::user()->rol === 'admin') {
            return $next($request);
        }

        // Si no es admin, redirigir con mensaje de error
        abort(403, 'No tienes permisos para acceder a esta página.');
    }
}