<?php

namespace App\Http\Controllers\api\v1;
use App\Http\Controllers\Controller;
use App\Http\Requests\api\v1\UserStoreRequest;
use App\Http\Resources\api\v1\UserShowResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{



    public function usersComputers(String $id){
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        // Cargar los computadores relacionados
        $user->load('computers');

        return response()->json(['data' => $user], 200);
    }

    public function usersComputersAll(){
        $users = User::orderBy('name','asc')->with('computers')->get();
        return response()->json(['data'=>$users],200);

    }

    public function usersObservationsAll(){
        $users = User::orderBy('name','asc')->with('observations')->get();
         return response()->json(['data'=>$users],200);
    }

    public function userObservations(string $id){
        $user=User::find($id);
        if(!$user){
            return response()->json(['message'=>'usuario no encontrado'],404);
        }

        $user->load('observations');
        return response()->json(['data'=>$user],200);

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::orderBy('name','asc')->get();
        return response()->json(['data'=>UserShowResource::collection($users)],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
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

        return response()->json(['data'=>new UserShowResource($user)],200);

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
