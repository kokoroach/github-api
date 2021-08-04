<?php

namespace App\Http\Controllers;

use App\Username;
use Illuminate\Http\Request;

class UsernameController extends Controller
{
    public function showOneUsername($username)
    {
        $resp = null
        $resp_code = 200
        
        try
        {
            $username = Username::findOrFail($username);
        }
        catch(ModelNotFoundException $e)
        {
            $resp = 'Username not found';
        }
        return response()->json($response, $resp_code);
    }

    public function showUsernames(Request $request)
    {
        $username = Username::create($request->all());

        // return response()->json($username, 201);
        return response()->json(null, 201);
    }
}

try
{
    $user = User::findOrFail($id);
}
// catch(Exception $e) catch any exception
catch(ModelNotFoundException $e)
{
    dd(get_class_methods($e)); // lists all available methods for exception object
    dd($e);
}