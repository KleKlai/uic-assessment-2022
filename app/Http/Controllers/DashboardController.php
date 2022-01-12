<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Form;

class DashboardController extends Controller
{
    public function index()
    {
        $forms = Form::all();

        if(Auth()->user()->hasRole('admin')){
            return view('dashboard', compact('forms'));
        }

        return redirect()->route('form.lto');
    }
}
