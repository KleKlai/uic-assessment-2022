<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\User;

class ApplicantController extends Controller
{
    public function index()
    {

        $forms = Form::with('user')->orderBy('id', 'desc')->get();

        return view('applicants.index', compact('forms'));
    }

    public function search()
    {
        $type_of_applications = [
            'ALL',
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

        return view('applicants.search', compact('type_of_applications'));
    }

    public function show(Request $request)
    {
        $type_of_applications = [
            'ALL',
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

        $applicant_name = ucwords($request->applicant_name);

        if($request->type == 'ALL')
        {
            $result = Form::where('first_name', $applicant_name)->orWhere('last_name', $applicant_name)->get();

            if ($result->isEmpty()){
                return view ('applicants.search', compact('type_of_applications'))->withMessage($applicant_name);
            }

            return view('applicants.search', compact('type_of_applications'))->withDetails($result)->withQuery($request->applicant_name);
        }

        $result = Form::where('first_name', $applicant_name)->orWhere('last_name', $applicant_name)->orwhere('type_of_application', $request->type)->get();

        return view('applicants.search', compact('type_of_applications'))->withDetails($result)->withQuery($request->applicant_name);
    }
}
