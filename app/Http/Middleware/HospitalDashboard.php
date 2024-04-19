<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Hospital;
// use Illuminate\Support\Facades\Auth;

class HospitalDashboard
{
    public function handle($request, Closure $next)
    {
        $hospital = $request->route('hospital'); // استرداد كائن المستشفى من الطلب
        $sessionHospitalId = session('hospital_id');
        if (!$sessionHospitalId || $sessionHospitalId !== $hospital->id) {
            abort(403); // الوصول غير المصرح به
        }

        return $next($request);
    }
}
