<?php

namespace App\Http\Controllers;

use App\Models\Colocataire;
use App\Models\Colocation;
use App\Models\Depense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Colocation $colocation) {}

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
        $request->validate([
            'title' => 'required',
            'montont' => 'required',
            'date' => 'required',
            'payer' => 'required',
            'category' => 'required',
            'colocation_id' => 'required',
        ]);
        Depense::create([
            'title' => $request->title,
            'montont' => $request->montont,
            'date_pose' => $request->date,
            'category_id' => $request->category,
            'user_id' => $request->payer,
            'colocation_id' => $request->colocation_id,
        ]);
        
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Colocation $colocation)
    {
        $user = Auth::user();

        foreach ($colocation->users as $member) {
            if ($member->id == $user->id) {

                if ($member->colocataires->is_owner == 1) {
                    $isOwner = 1;
                } else {
                    $isOwner = 0;
                };
            };
        };

        $colocations = Colocation::with('users', 'depenses', 'categories')->where('colocations.id', $colocation->id)->first();


        return view('front/depenses/depenses', compact('user', 'colocation', 'isOwner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Depense $depense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Depense $depense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Depense $depense)
    {
        $depense->delete();
        return back();
    }
}
