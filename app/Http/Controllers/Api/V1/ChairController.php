<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Chair;
use App\Models\Hall;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChairController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Chair::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
       
        
        return Chair::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Chair $chair)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chair $chair)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chair $chair)
    {
        $data = $request->validate([
            'hall_id' => 'integer', 
            'hall_row' => 'integer',
            'place' => 'integer',
            'type' => 'string',
        ]);
        $chair->update($data);

        return $chair;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chair $chair)
    {
        $chair->delete();

        return response()->json([
            'message' => 'Chair deleted successfully'
        ]);
    }
}
