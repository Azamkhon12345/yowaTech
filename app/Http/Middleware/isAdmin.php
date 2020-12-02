<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class isAdmin
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
        $user = Auth::user();
        if($user==NULL){
            session()->flash('warning','Please log in');
            return redirect('/');

        }
        if ($user->isAdmin() == true){
            session()->flash('warning','У вас нет прав администратора');
            return redirect('/');
        }
        return $next($request);
    }
}
