<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class VerifyUser
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
        //dd($request);
        if (Auth::check()) {
            $id = Auth::user()->id;
            $currentuser = User::find($id);
           // dd($currentuser->user_type);
            if ($currentuser->user_type == 1)
                return $next($request);
            }
        return $next($request);
    }
}
