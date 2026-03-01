<?php

namespace App\Http\Controllers;

use App\Models\Colocataire;
use App\Models\Colocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DetaileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = Auth::user();
       $detaille_coloc = $this->selectColocation($request->colocation_id);
       $members_colocation =$this->selectmember($request->colocation_id);
    //    echo $membercolocation;exit;    
        return view('front/colocations/detaile',compact('user','detaille_coloc','members_colocation'));
    }

    public function selectColocation($colocation_id)
    {
        $colocation = Colocation::find($colocation_id);
        return $colocation;
    }

    public function selectmember($colocation_id)
    {
        $membercolocation = Colocation::join('colocataires','colocataires.colocation_id','=','colocations.id')
                                       ->join('users','users.id','=','colocataires.user_id')
                                       ->where('colocations.id','=',$colocation_id)
                                       ->get();
    
        return $membercolocation;
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
