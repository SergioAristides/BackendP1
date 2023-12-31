<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Computer;
use App\Models\Observation;

use App\Http\Requests\api\v1\ComputerStoreRequest;
use App\Http\Requests\api\v1\ComputerUpdateRequest;
use Illuminate\Http\Request;
use App\Http\Resources\api\v1\ComputerResource;


class ComputerController extends Controller
{


    public function computersObservations(){
        $computers = Computer::orderBy('name','asc')->with('observations')->get();
        return response()->json(['data'=>$computers],200);
    }
    public function index()
    {
        //
        $computers = Computer::orderBy('id','asc')->get();
        return response()->json(['data'=>ComputerResource::collection($computers)],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComputerStoreRequest $request)
    {
        $computer=Computer::create($request->all());
        return response()->json(['data'=>$computer],200);

    }

    /**
     * Display the specified resource.
     */
    public function show(Computer $computer)
    {
        //

        return response()->json(['data'=>new ComputerResource($computer)],200);

    }

    /**
     * Update the specified resource in storage.
     */
    //request:datos json que se quieren modificar
    public function update(ComputerUpdateRequest $request, Computer $computer)
    {
        //
        $computer->update($request->all());
        return response()->json(['data'=>$computer],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Computer $computer)
    {
        //
        $computer->delete();
        return response()->json(null,204);

    }
}
