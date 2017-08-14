<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth; //ต้องใส่ด้วย



class Admin
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

                if(Auth::check())
                {


                        if(Auth::user()->isAdmin()){


                          //  echo "DDDD";
                          //      echo "<br><br>";

                          //      var_dump(Auth::user()->isAdmin());

                           return $next($request);

                        }



                }
                    return redirect()->intended('/');
    }
}
