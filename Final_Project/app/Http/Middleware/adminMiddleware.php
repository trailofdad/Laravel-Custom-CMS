<?php namespace App\Http\Middleware;

use Closure;
use Auth;
use Redirect;
use URL;

class adminMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if (!Auth::guest()) {

            $user = $request ->user();
            $url = $request ->path();
            dd ($user->permissions);
            if ($url == 'users' && $user -> isAdministration()) {
                return $next($request);

            }   elseif ($url != 'articles' && $url != 'users' && $user ->isEditor()) {
                return $next($request); }
                elseif ($url == 'articles' && ($user->isWriter() || $user ->isEditor())) {
                return $next($request);}
            else {
                return Redirect::to(URL::previous());

            }
        }
        return redirect('auth/login');
	}

}
