<?php

namespace App\Http\Controllers\apii\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function usersComputers(){
        $users = User::orderBy('name','asc')->with('computers')->get();
        return response()->json(['data'=>$users],200);

    }

    public function userObservation(){
        $users = User::orderBy('name','asc')->with('observations')->get();
        return response()->json(['data'=>$users],200);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::orderBy('name','asc')->get();
        return response()->json(['data'=>$users],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $user=User::create($request->all());
        return response()->json(['data'=>$user],200);

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //

        return response()->json(['data'=>$user],200);

    }

    /**
     * Update the specified resource in storage.
     */
    //request:datos json que se quieren modificar
    public function update(Request $request, User $user)
    {
        //
        $user->update($request->all());
        return response()->json(['data'=>$user],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        return response()->json(null,204);

    }
}
