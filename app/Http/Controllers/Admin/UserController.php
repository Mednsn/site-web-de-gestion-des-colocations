<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Colocation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $nbr_coloc = Colocation::where('status', '=', "active")->count();
        $admin = Auth::user();
        $colocations = Colocation::all();
        return view('back.adminDashboard', compact('nbr_coloc', 'users', 'admin', 'colocations'));
    }

    public function ban(User $user)
    {
        if ($user->id != 1) {
            if ($user->is_banned == false) {
                $user->is_banned = true;
                $user->save();
                return back();
            } else {
                $user->is_banned = false;
                $user->save();
                return back();
            }
        }
        return back();
    }
}
