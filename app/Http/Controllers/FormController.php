<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LTOFormRequest;
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

        $civiL_status = ['Single', 'Married', 'Widowed', 'Separated'];
        $lcas = ['Student-Drivers Permit', 'Drivers License', 'Conductors License'];
        $eas = ['Postgraduate', 'College', 'High School', 'Elementary'];
        $organ_to_donates = ['None', 'All', 'Kidney', 'Heart', 'Cornea', 'Eyes', 'Pancreas', 'Liver', 'Lungs', 'Bones', 'Skin'];

        $vehicle_categories = [
            'MOTORCYCLE',
            'TRICYCLE',
            'M1',
            'M2',
            'LIGHT COMMERCIAL VEHICLES',
            'HEAVY COMMERCIAL VEHICLES',
            'BUSES, COACHES AND OTHER PASSENGER VEHICLES',
            'ARTICULATED PASSENGER CARS',
            'HEAVY ARTICULATED VEHICLES'
        ];

        $vehicle_conditions = [
            'WEAR CORRECTIVE LENSES',
            'DRIVE CUSTOMIZED MOTOR VEHICLE ONLY',
            'DRIVE ONLY W/ SPECIAL EQUIPMENT FOR UPPER LIMBS/LOWER LIMBS',
            'DAYLIGHT DRIVING ONLY',
            'HEARING AID IS REQUIRED'
        ];

        if(Auth::user()->form == null)
        {
            return view('form.index', compact(
                'type_of_applications',
                'civiL_status',
                'lcas',
                'eas',
                'organ_to_donates',
                'vehicle_categories',
                'vehicle_conditions'
            ));
        }

        // if(Auth::user()->form && Auth::user()->form->status == 'Pending') {
        //     return view('form.verification');
        // }

        // if(Auth::user()->form && Auth::user()->form->status == 'Decline')
        // {
        //     return view('form.verification');
        // }

        return view('form.verification');

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
    public function store(LTOFormRequest $request)
    {

        $form = Form::create([
            'user_id'                           => Auth()->user()->id,
            'type_of_application'               => $request->type_of_application,
            'first_name'                        => Auth()->user()->first_name,
            'last_name'                         => Auth()->user()->last_name,
            'present_address'                   => $request->present_address,
            'nationality'                       => $request->nationality,
            'sex'                               => $request->gender[0],
            'birth_date'                        => $request->birth_date,
            'birth_place'                       => $request->birth_place,
            'height'                            => $request->height,
            'weight'                            => $request->weight,
            'civil_status'                      => $request->civil_status,
            'lca'                               => $request->lca,
            'highest_educational_attainment'    => $request->highest_educational_attainment,
            'dl_driving_school'                 => $request->dl_driving_school,
            'dl_driving_school_instructor'      => $request->dl_driving_school_instructor,
            'dl_private_licensed_person'        => $request->dl_private_licensed_person,
            'dl_private_licensed_person_name'   => $request->dl_private_licensed_person_name,
            'dl_tesda'                          => $request->dl_tesda,
            'dl_tesda_instructor'               => $request->dl_tesda_instructor,
            'blood_type'                        => $request->blood_type,
            'organ_to_donate'                   => $request->organ_to_donate,
            'eye_color'                         => $request->eye_color,
            'vehicle_category'                  => $request->vehicle_category,
            'vehicle_conditions'                => $request->vehicle_conditions,
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
