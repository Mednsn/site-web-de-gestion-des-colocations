<?php

namespace App\Http\Controllers;

use App\Models\Paiement;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function checkout($paiement_id)
    {
        $paiement = Paiement::find($paiement_id);
        $montant = number_format(($paiement->montont),2);
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'mad',
                    'product_data' => [
                        'name' =>'chambre # ',
                    ],
                    'unit_amount' =>  $montant*100,
                ],
                'quantity' => 1,
            ]],
            "mode" => 'payment',
            "success_url" => route('paiement.pay', [$paiement_id], true),
            "cancel_url"  =>  route('paiement.cancel', [], true)
        ]);

        return redirect($session->url);
    }



    /**
     * Display the specified resource.
     */
    public function cancel()
    {
        return back();
    }
    public function pay($paiement_id)
    {
        return redirect()->route('ballances.index')->with('success' ,'payment success');
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
    public function show(Paiement $paiement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paiement $paiement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paiement $paiement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paiement $paiement)
    {
        //
    }
}
