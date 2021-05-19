<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\UserCollection;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return new UserCollection(User::all());
    }

    public function show($id)
    {
        return new UserResource(User::findOrFail($id));
    }

    public function store(Request $request)
    {


       $user = User::create($request->all());

       return (new UserResource($user))->response()->setStatusCode(201);
    }

    public function update(Request $request,$id){

        User::find($id)->update([
            'fname' => $request->get('fname'),
            'lname' => $request->get('lname'),
            'email' => $request->get('email')
        ]);       

        return response()->json([
            'error' => false,
            'code'  => 202,
            'message' => 'User was Udated!'
        ],202);
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json([
            'error' => false,
            'code'  => 204,
            'message' => 'User was deleted!'
        ],202);
    }
}
