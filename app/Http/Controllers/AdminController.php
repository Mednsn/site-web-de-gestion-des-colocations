<?php

namespace App\Http\Controllers;

use App\Models\Colocation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $admin = Auth::user();
        // return view('back.adminDashboard',compact('users','admin')); public function index()
    
        $colocations = Colocation::all();
        return view('back.adminDashboard', compact('users','admin','colocations'));
    }

    public function ban($id)
    {
        $user = User::find($id);
        $user->status = !$user->status;
        $user->save();
        return redirect()->back();
    }

    public function promote($id)
    {
        $user = User::find($id);
        if ($user->isAdmin()) {
            $user->role_id = 2;
        } else {
            $user->role_id = 1;
        }
        $user->save();
        return redirect()->back();
    }
}
