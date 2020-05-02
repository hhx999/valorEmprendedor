<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $cargo)
    {
        $member_role = $request->session()->get('cargo');
        if ($member_role != $cargo) {
            return redirect(url('/'.$member_role)); // página del formulario
        }
        return $next($request);
    }
}
