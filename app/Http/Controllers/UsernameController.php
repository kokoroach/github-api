<?php

namespace App\Http\Controllers;

use App\Username;
use Illuminate\Http\Request;

class UsernameController extends Controller
{
    public function showOneUsername($username)
    {
        try
        {
            $username = Username::findOrFail($username)
            return response()->json($username, 200);
        }
        catch(ModelNotFoundException $e)
        {
            return response('Username not found', 400);
        }
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