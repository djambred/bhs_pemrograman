<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::connection('mysql')->table('users')->get();
	    return response()->json($query, 200);
    }

    public function get_user(Request $request, $id) {
        $data = User::where('id', $id)->get();
        if($data){
            $res['status'] = true;
            $res['message'] = $data;
            return response($res);
        } else {
            $res['status'] = false;
            $res['message'] = "Can't Find User";
            return response($res);
        }
    }
}
