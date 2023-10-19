<?php

namespace App\Http\Controllers\apii\v1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::orderBy('type','asc')->get();
        return response()->json(['data'=>$categories],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $category=Category::create($request->all());
        return response()->json(['data'=>$category],200);

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //

        return response()->json(['data'=>$category],200);

    }

    /**
     * Update the specified resource in storage.
     */
    //request:datos json que se quieren modificar
    public function update(Request $request, Category $category)
    {
        //
        $category->update($request->all());
        return response()->json(['data'=>$category],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return response()->json(null,204);

    }
}
