<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Observation;
use Illuminate\Http\Request;
use App\Http\Requests\api\v1\ObservationStoreRequest;
use App\Http\Requests\api\v1\ObservationUpdateRequest;
use App\Http\Resources\api\v1\ObservationResource;


class ObservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function index()
    {
        //
        $observation = Observation::orderBy('id','asc')->get();
        return response()->json(['data'=>ObservationResource::collection($observation)],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ObservationStoreRequest $request)
    {
        //
        $observation=Observation::create($request->all());
        return response()->json(['data'=>$observation],200);

    }

    /**
     * Display the specified resource.
     */
    public function show(Observation $observation)
    {
        //

        return response()->json(['data'=>ObservationResource($observation)],200);

    }

    /**
     * Update the specified resource in storage.
     */
    //request:datos json que se quieren modificar
    public function update(ObservationUpdateRequest $request, Observation $observation)
    {
        //
        $observation->update($request->all());
        return response()->json(['data'=>$observation],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Observation $observation)
    {
        //
        $observation->delete();
        return response()->json(null,204);

    }
}
