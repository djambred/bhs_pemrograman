<?php

namespace App\Http\Middleware;

use Closure;
//use Illuminate\Contracts\Auth\Factory as Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * The authentication guard factory instance.
     *
     * @var \Illuminate\Contracts\Auth\Factory
     */
    protected $auth;

    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Contracts\Auth\Factory  $auth
     * @return void
     */
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    // public function handle($request, Closure $next, $guard = null)
    // {
    //     if ($this->auth->guard($guard)->guest()) {
    //         if($request->header('Authorization')) {
    //             $token = $request->header('password');
    //             if ($token) {
    //                 $check_token = DB::connection('mysql')
    //                     ->table('users')
    //                     ->where('password', $token)
    //                     ->first();
    //                     // echo($check_token);

    //                 if ($check_token === null) {
    //                     $res['success'] = false;
    //                     $res['message'] = 'Permission Not Allowed';
    //                     return response()->json($res, 403);
    //                 }
    //             } else {
    //                 $res['success'] = false;
    //                 $res['message'] = 'Not Authorized';
    //                 return response()->json($res, 401);
    //             }
    //         } else {
    //             //return response($request->header('password'), 401);
    //             $res['success'] = false;
    //             $res['message'] = 'Not Authorized';
    //             return response()->json($res, 401);
    //         }
    //     }

    //     return $next($request);
    // }

    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->header('Authorization')) {
                $token = str_replace('Bearer ', '', $request->header('Authorization'));

                // Fetch the user and check the password hash
                $user = DB::table('users')->where('username', $request->header('username'))->first();

                if ($user && Hash::check($token, $user->password)) {
                    // Optionally, you can set the user to the auth guard
                    Auth::setUser($user);
                } else {
                    $res['success'] = false;
                    $res['message'] = 'Permission Not Allowed';
                    return response()->json($res, 403);
                }
            } else {
                $res['success'] = false;
                $res['message'] = 'Not Authorized';
                return response()->json($res, 401);
            }
        }

        return $next($request);
    }
}
