<?php

namespace App\Http\Controllers;

use App\Models\Colocataire;
use App\Models\Colocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Mailer\Transport\Dsn;

class ColocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $user = Auth::user();

        $colocations = Colocation::whereHas('users', function ($query) use ($user) {
            $query->where('users.id',  $user->id);
        })->with('users')->get();
        $nbr_colocation_active = $this->selectUserColocation();
        $isOwner=0;
        foreach ($colocations as $colocation) {
            foreach ($colocation->users as $member) {
                if ($member->id == $user->id) {

                    if ($member->colocataires->is_owner == 1) {
                        $isOwner = 1;
                    } else {
                        $isOwner = 0;
                    };
                };
            };
        };
        return view('front/colocations/index', compact('user', 'isOwner', 'colocations', 'nbr_colocation_active'));
    }

    public function selectUserColocation()
    {
        $Colocation_avtive = DB::table('colocataires')
            ->join('colocations', 'colocataires.colocation_id', '=', 'colocations.id')
            ->where('colocataires.user_id', Auth::id())
            ->where('colocations.status', '=', 'active')
            ->select('colocations.*', 'colocataires.is_owner')
            ->get();
        $nbr_Colocation_avtive = count($Colocation_avtive);
        return $nbr_Colocation_avtive;
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
        $user = Auth::user();
        return view('front/colocations/edit', compact('user', 'colocation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Colocation $colocation)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $colocation->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect(route('detaille.index', $colocation));
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
