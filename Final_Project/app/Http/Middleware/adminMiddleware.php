<?php namespace App\Http\Middleware;

use Closure;
use Auth;
use Redirect;
use URL;

class adminMiddleware {

//    realized that we may need to build the methods to show the relationships in permissions to users but can't think how to do it
// right now.
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

            $user = $request->user();
            $url = $request->path();
            if ($url == 'users' && $user-> isAdministration()) {
                return $next($request);
            }
            elseif ($url != 'articles' && $url != 'users' && $user ->isEditor())
            //access to areas that are not users
            {
                return $next($request);
            }
            elseif (0=== strpos($url, 'article') && ($user->isWriter() || $user ->isEditor()))
            {
                return $next($request);
            }
            else {
                return Redirect::to(URL::previous());
            }
        }
        return redirect('auth/login');
	}

}
