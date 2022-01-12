<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->form && Auth::user()->form->status == 'Pending') {
            return view('form.verification');
        }

        $type_of_applications = [
            'NEW',
            'RENEWAL',
            'CONVERSION OF FOREIGN DL',
            'ADDITIONAL CODE OR CATEGORY',
            'CHANGE OF DL CLASSIFICATION',
            'EXPIRED DL WITH VALID FDL',
            'DUPLICATE',
            'REVISION OF RECORDS',
            'ENHANCEMENT OF DL',
            'CHANGE OF CLUTCH TYPE'
        ];

        return view('form.index', compact('type_of_applications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Form::create([
            'type_of_application'   => $request->type_of_application,
            'user_id'           => Auth::user()->id,
            'name'              => $request->name,
            'present_address'   => $request->present_address,
            'nationality'       => $request->nationality,
            'sex'               => $request->sex,
            'birth_date'        => $request->birth_date,
            'height'            => $request->height,
            'weight'            => $request->weight,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        return view('form.view', compact('form'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        dd('test');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }

    public function approved(Form $form)
    {
        $form->update([
            'status' => 'Approved'
        ]);

        return back();
    }

    public function decline(Form $form)
    {
        $form->update([
            'status' => 'Decline'
        ]);

        return back();
    }
}
