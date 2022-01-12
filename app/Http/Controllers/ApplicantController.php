<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\User;

class ApplicantController extends Controller
{
    public function index()
    {

        $forms = Form::with('user')->get();
        // dd($forms);
        return view('applicants.index', compact('forms'));
    }

    public function search()
    {
        dd("Search Function Here");
    }
}
