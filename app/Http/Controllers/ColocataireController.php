<?php

namespace App\Http\Controllers;

use App\Models\Colocataire;
use App\Models\Colocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $colocation = Colocation::whereHas('invitations', function ($query) use ($request) {
            $query->where('token', $request->token);
        })->first();

        if (!$colocation) {
            return redirect()->route('register')->with('error', 'colocation non trouve.');
        }

        $colocation = Colocation::with('users')->find($colocation->id);

        $isExist = $colocation->users->contains('id', Auth::id());

        if ($isExist) {
            return redirect()->route('detaille.index', $colocation->id);
        }
        Colocataire::create([
            'is_owner' => false,
            'is_active' => true,
            'user_id' => Auth::id(),
            'colocation_id' => $colocation->id,
        ]);
        return redirect()->route('detaille.index', $colocation->id);
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
        $coloc = Colocation::find($colocataire->colocation_id);
        foreach ($coloc->users as $user) {
            if ($user->id == Auth::id()) {
                if ($user->colocataires->is_owner == 1) {
                    $colocataire->delete();
                    return back();
                }
            }
        }
        return back();
    }
}
