<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsHospitalAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $id = $request->route('hospital_id')->id;
        // $hospitalId = $request->route('hospital_id')->id;   
        $hospitalId = $request->route('hospital_id');   
        // dd($hospitalId);     
        if ($hospitalId && // تأكد من أن معرف المشفى موجود
        auth()->user() && 
        auth()->user()->is_admin == 2 && 
        auth()->user()->hospital_id == $hospitalId){
            return $next($request);
        }
        return redirect('home')->with('error','You have not hospital admin access.');
    }
    
}
