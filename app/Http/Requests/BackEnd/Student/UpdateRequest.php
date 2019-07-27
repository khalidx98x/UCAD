<?php

namespace App\Http\Requests\BackEnd\Student;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {


        $rules = [
            'ssn' => ['required'],
            'mobile' => ['required'],
            'email' => ['required '],
            'religion_id' => ['required '],/***/
            'nationality' => ['required '],/***/
            'socialstatus_id' => ['required '],/***/
            //
            'first_name_en' => ['required '],
            'second_name_en' => ['required '],
            'third_name_en' => ['required '],
            'fourth_name_en' => ['required '],
            'image' => 'nullable | image',//the rule is working but the upload is not
            //
            'country_id' => ['required '],/***/
            'dob' => ['required '],
            'home_phone' => ['required '],
            'guardian' => ['required '],
            'guardian_type' => ['required '],
            'guardian_mobile' => ['required '],
            'city_id' => ['required '],/***/
            'region_id' => ['required '],/***/
            'street' => ['required '],
            'gender' => ['required '],/***/
            'healthstatus_id' => ['required'],/***/
            'specialneed_id' => ['required '],/***/
            'high_school_number' => ['required'],
            'highschoolbranch_id' => ['required'],/***/
            'department_id' => ['required'],/***/
            'knowabout_id' => ['required'],/***/
            'conf' => ['required'],
//            Bridging rules
            'university_name' => 'required_if:isBridging,checkBridging',
            'college' => 'required_if:required_if:isBridging,checkBridging',
            'department' => 'required_if:required_if:isBridging,checkBridging',
            'graduate_year' => 'required_if:required_if:isBridging,checkBridging',
            'gpa' => 'required_if:required_if:isBridging,checkBridging',
            'com_exam' => 'required_if:required_if:isBridging,checkBridging'

        ];


        return $rules;


    }
}
