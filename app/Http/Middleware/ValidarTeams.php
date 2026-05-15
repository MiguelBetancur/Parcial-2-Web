<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Team;

class ValidarTeams
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $total = Team::count();
        $activos = Team::where('is_active', true)->count();
        $posteriores = Team::where('created_date', '>', '2004-07-01')->count();

        if ($total > 25 && $activos >= 10 && $posteriores >= 10) {
            return $next($request);
        }

        return response()->json(['mensaje' => 'Acceso bloqueado'], 403);
    }
}
