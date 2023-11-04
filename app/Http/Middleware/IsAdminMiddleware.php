<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->user() || !auth()->user()->admin) {
            return back()->with(
                'alerts', [
                    'title'           => 'Erro de Permissão',
                    'recommendations' => 'Caso o erro persista, procure o administrador do sistema.',
                    'type'     => 'danger',
                    'messages' => [
                        'É necessário ter acesso de Administrador para o recurso solicitado.'
                    ]
                ]
            )->withInput();
        }

        return $next($request);
    }
}
