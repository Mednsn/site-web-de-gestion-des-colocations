<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Colocation;
use App\Models\Depense;
use App\Models\Paiement;
use App\Models\User;

class BallancesController extends Controller
{


    /**
     * Index - Visualisation des dettes
     */
    public function index(Colocation $colocation)
    {
        if (!Auth::check()) {
            abort(403);
        }
        $user = Auth::user();
        $mesDettes = [];

        $colocation = Colocation::with('users')->findOrFail($colocation->id);
        $membersCount = $colocation->users->count();

        $depenses = Depense::where('colocation_id', $colocation->id)->get();

        foreach ($depenses as $depense) {
            $part = $depense->montont / $membersCount;
            if ($depense->user_id != $user->id) {
                $member = User::find($depense->user_id);

                $paiement = Paiement::firstOrCreate(
                    [
                        'depense_id' => $depense->id,
                        'user_id' => $user->id,
                    ],
                    [
                        'montont' => $part,
                        'status' => 'pending',
                    ]
                );
                $mesDettes[] = [
                    'paiement_id' => $paiement->id,
                    'user_firstname' => $member->firstname,
                    'user_lastname' => $member->lastname,
                    'depense_titre' => $depense->title,
                    'montant' => $part,
                    'status' => $paiement->status,

                ];
            }
        }

        return view('front.ballances.ballance', compact('mesDettes', 'user'));
    }

    /**
     * Payer - mettre à jour le paiement
     */
    public function pay($paiement_id)
    {
        dd("etgdc");
        $paiement = Paiement::findOrFail($paiement_id);

        // Security: vérifier que c'est bien le user qui doit payer
        if ($paiement->user_id !== Auth::id()) {
            abort(403);
        }

        $paiement->status = 'paid';
        $paiement->save();

        return back()->with('success', 'Paiement effectue avec succse ');
    }
}
