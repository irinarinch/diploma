<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Hall;
use App\Http\Requests\StoreHallRequest;
use App\Http\Requests\UpdateHallRequest;
use App\Models\Chair;

class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
    
    public function index()
    {
        return Hall::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHallRequest $request)
    {        
        return Hall::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Hall $hall)
    {
        return Chair::where('hall_id', $hall->id)->get(); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHallRequest $request, Hall $hall)
    {
        $hall->update($request->all());
        return $hall;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hall $hall)
    {
        $hall->delete();
        return response()->json([
            'message' => 'Hall removed'
        ]);
        
    }


}
