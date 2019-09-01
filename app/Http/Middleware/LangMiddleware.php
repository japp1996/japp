<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Carbon\Carbon;

class LangMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $lang = "es";
        if ($request->cookie('JappLang') != null) {
            $lang = \Crypt::decrypt($request->cookie('JappLang'));
        }
        App::setLocale($lang);
        Carbon::setLocale($lang);
        return $next($request);
    }
}
