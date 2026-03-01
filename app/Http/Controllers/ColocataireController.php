<?php

namespace App\Http\Controllers;

use App\Models\Colocataire;
use Illuminate\Http\Request;

class ColocataireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Colocataire $colocataire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Colocataire $colocataire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Colocataire $colocataire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Colocataire $colocataire)
    {
        echo "est deleted mais faut des condition";exit;
        $colocataire->delete();
    }
}
