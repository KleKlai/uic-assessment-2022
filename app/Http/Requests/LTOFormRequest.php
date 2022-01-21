<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LTOFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return (Auth()->user()->hasRole('guest') ? true : false);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type_of_application'               => 'required',
            'present_address'                   => 'required',
            'nationality'                       => 'required',
            'gender'                            => 'required',
            'birth_date'                        => 'required|date',
            'birth_place'                       => 'required',
            'height'                            => 'required|numeric',
            'weight'                            => 'required|numeric',
            'civil_status'                      => 'required',
            'lca'                               => 'required',
            'highest_educational_attainment'    => 'required',
            'dl_driving_school'                 => 'nullable',
            'dl_driving_school_instructor'      => 'nullable',
            'dl_private_licensed_person'        => 'nullable',
            'dl_private_licensed_person_name'   => 'nullable',
            'dl_tesda'                          => 'nullable',
            'dl_tesda_instructor'               => 'nullable',
            'blood_type'                        => 'required',
            'organ_to_donate'                   => 'required',
            'eye_color'                         => 'required',
            'vehicle_category'                  => 'required',
            'vehicle_conditions'                => 'required',
            'fathers_name'                      => 'required',
            'mothers_name'                      => 'required',
            'spouse_name'                       => 'required',
        ];
    }
}
