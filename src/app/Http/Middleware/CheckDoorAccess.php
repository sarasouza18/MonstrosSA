<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Door;

class CheckDoorAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $doorId = $request->route('id');
        $door = Door::find($doorId);

        if ($door && $door->is_locked) {
            return response()->json(['message' => 'Access denied'], 403);
        }

        return $next($request);
    }
}
