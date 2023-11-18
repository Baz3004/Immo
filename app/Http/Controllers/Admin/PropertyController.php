<?php

namespace App\Http\Controllers\Admin;

use App\Models\property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PropertyRequest;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.properties.index', [
            'properties' => property::orderBy('created_at', 'desc')->paginate(2)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $property = new property();
        $property->title= 'baz';
        
        return view('admin.properties.form',[
            'property' => $property
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyRequest $request)
    {
        $property = property::create($request->validated());
        return to_route('admin.property.index')->with('success','Bien ajoute avec sucssessss');
    }

    
    /**
     * Show the form for editing the specified resource
     */
    public function edit(property $property)
    {
        return view('admin.properties.form',[
            'property' => $property
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(property $property)
    {
        $property->delete();
        return view('admin.property.index');
    }
}
