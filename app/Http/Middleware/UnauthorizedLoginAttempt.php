<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\UnauthorizedLoginAttemptMail;

class UnauthorizedLoginAttempt
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Incrementa el contador de intentos de inicio de sesión
        $attempts = session('login_attempts', 0);
        session(['login_attempts' => $attempts + 1]);

        // Verifica si los intentos superan el límite
        if (session('login_attempts') > 3) {
            // Envía un correo al administrador
            Mail::to('admin@triage-system.com')->send(new UnauthorizedLoginAttemptMail($request->email));
        }

        return $next($request);
    }
}
