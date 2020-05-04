<?php 
namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;

class Session
{
	/**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

	public function handle(Request $request, Closure $next)
	{
		session_start();
		
		if(empty($_SESSION)){
			return redirect('login');
		};

		return $next($request);	
	}
}
?>