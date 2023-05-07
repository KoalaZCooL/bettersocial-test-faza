<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

/**
 * 
 */
class RegisterController extends Controller
{
    /**
     * 
     */
    public function index()
    {
        return view('register');
    }

    /**
     * Create a new user.
     */
    public function create(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
          'username' => 'required|alpha_num|unique:users|max:255'
        ]);

        if($validator->fails()){
          return response()->json(["status"=>"error", "messages" => $validator->errors()], Response::HTTP_BAD_REQUEST);
        }

        $user = new User;
 
        $user->username = $request->username;
 
        $user->save();

        return response()->json(["status"=>"success", "messages" => ["$request->username created as a username"] ], Response::HTTP_OK);
    }

}
