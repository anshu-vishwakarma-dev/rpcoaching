<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ApiController extends Controller
{
    //
    public function getUsers(Request $request)
    {
        $users = User::all();
        return response()->json([
            'status' => 'true',
            'data' => $users
        ]);
    }
}
