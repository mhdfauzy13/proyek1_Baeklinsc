<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $role)
{
    // Cek apakah pengguna saat ini memiliki peran (role) yang sesuai
    if (auth()->check() && auth()->user()->role == $role) {
        return $next($request);
    }

    // Jika bukan memiliki peran yang sesuai, redirect atau berikan respons sesuai kebutuhan
    return redirect()->route('layanan.index')->with('error', 'Anda tidak memiliki akses sebagai ' . $role);
}

}
