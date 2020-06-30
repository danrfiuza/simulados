<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class VerificarAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        if ($request->user()->is_admin != ) {
//            return redirect()->action('ProvaController@create', ['id' => $request->user()->id]);
//        }
        return $next($request);
    }
}
