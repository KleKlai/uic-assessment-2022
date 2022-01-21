<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Form;

class DashboardController extends Controller
{
    public function index()
    {

        //Check authenticated user status
        // if(Auth()->user()->status == 'Pending')
        // {
        //     return view('account.pending');
        // }

        $users = User::orderBy('id', 'desc')->get();

        if(Auth()->user()->hasRole('admin')){
            return view('dashboard', compact('users'));
        }

        return redirect()->route('form.lto');
    }
}
