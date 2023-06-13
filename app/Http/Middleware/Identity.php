<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Nilai;
use App\Models\Indicator;
use App\Models\Identity as identitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Identity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $indikator = Indicator::count();
        $nilai = Nilai::get();
        $identitas = identitas::get();

        if (empty($identitas->where('user_id', Auth::user()->id)->first())) {
            return redirect()->route('user.identitas');
        } else if ($nilai->where('user_id', Auth::user()->id)->count() >= $indikator && $nilai->where('user_id', Auth::user()->id)->count() == 0) {
            return redirect()->route('user.soal');
        }
        return $next($request);
    }
}