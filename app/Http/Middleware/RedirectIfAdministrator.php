<?php

namespace Mooc\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAdministrator
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @param  string|null  $guard
	 * @return mixed
	 */
	public function handle($request, Closure $next, $guard = 'administrator')
	{
	    if (Auth::guard($guard)->check()) {
	        return redirect('administrator/home');
	    }

	    return $next($request);
	}
}
