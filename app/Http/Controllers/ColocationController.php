<?php

namespace App\Http\Controllers;

use App\Models\Colocataire;
use App\Models\Colocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ColocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        return view('front/colocations/index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view('front/colocations/create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $colocation = Colocation::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' => 'active',
        ]);
        
        Colocataire::create([
            'is_owner' => true,
            'is_active' => true,
            'user_id' => Auth::id(),
            'colocation_id' => $colocation->id,
        ]);
        return redirect(('colocation'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Colocation $colocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Colocation $colocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Colocation $colocation)
    {
        $validated = $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);
        Colocation::updated($validated);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Colocation $colocation)
    {
        $colocation->delete();
        return back();
    }
}
