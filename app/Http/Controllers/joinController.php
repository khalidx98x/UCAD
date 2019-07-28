<?php

namespace App\Http\Controllers;


use App\Http\Requests\BackEnd\Student\StoreRequest;
use App\Http\Requests\BackEnd\Student\UpdateRequest;
use App\Schools;


use Illuminate\Http\Request;
use App\Studenthighschool;
use App\Studentbridging;
use App\Studentpersonal;
use App\Studentacademic;
use App\Department;
use App\Major;
use App\Plan;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class joinController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        $Healthstatus = Healthstatus::pluck('name', 'id');
//        $Religion = Religion::pluck('n ame', 'id');
//        $Country = Country::pluck('name_ar', 'id');
//        $Socialstatus = Socialstatus::pluck('name', 'id');
//        $City = City::pluck('name_ar', 'id');
//        $Region = Region::pluck('name_ar', 'id');
//        $Specialneed = Specialneed::pluck('name', 'id');
//        $Highschoolbranch = Highschoolbranch::pluck('name', 'id');
//        $Department = Department::where('active',1)->pluck('department_name', 'id');
//        $Knowabout = Knowabout::pluck('name', 'id');
//        return view('back-end.join.joinForm', compact('Healthstatus',
//                                                 'Religion',
//                                                 'Country',
//                                                 'Socialstatus',
//                                                 'City',
//                                                 'Region',
//                                                 'Specialneed',
//                                                 'Highschoolbranch',
//                                                 'Department',
//                                                 'Knowabout'));
//        return view('back-end.join.joinForm');
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showSchools($type)
    {
        $schools = Schools::where('Directorate', $type)->get();
        return response()->json($schools);
    }


    public function create()
    {

        if (isset(auth()->user()->studentpersonal)) {

            return redirect(route('join.edit'));

        }

        return view('back-end.join.create');
    }

    /**
     * @param StoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     *
     */
    public function store(StoreRequest $request)
    {
        //upload image
        $request_data = $request->except(['image']);
        Image::make($request->image)->resize(250, 200)->save(public_path('images/students_photos/' . auth()->user()->id . '_' . $request->file('image')->getClientOriginalName()));
        $request_data['image'] = auth()->user()->id . '_' . $request->file('image')->getClientOriginalName();


        //fill the tables
        $request_data['student_id'] = auth()->user()->id;
        Studentpersonal::create($request_data);
        Studenthighschool::create($request_data);


        $department = $request->department_id;

        if ($request->input('isBridging') === 'checkBridging') {

            Studentbridging::create($request_data);

            $credit = Department::where('id', $department)->pluck('department_credit_tr')->first();

        } else {
            $credit = Department::where('id', $department)->pluck('department_credit_normal')->first();
        }

        $volunteer = Department::where('id', $department)->pluck('department_volunteer')->first();
        $major = Major::where('department_id', $department)->pluck('id')->first();
        $plan = Plan::where('major_id', $major)->where('active', 1)->max('id');

        //student id problem
        Studentacademic::create([
            'student_id' => auth()->user()->id,
            'graduation_id' => '21',
            'department_id' => $department,
            'major_id' => $major,
            'plan_id' => $plan,
            'departmentplan' => '21', //its required to save it !!
            'credit_value' => $credit,
            'volunteer_hours' => $volunteer]);

        //save the email !!
        auth()->user()->update(['email' => $request->email]);


//        alert()->success('تم التسجيل بنجاح', 'Success');
        return redirect()->route('join.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function storeTest(Request $request)
    {


        //validation

        $rules = array(
            'image' => 'required | image',
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }

        //upload image
        $file = $request->file('image');
        $path = 'images/students_photos';
        $filename = $file->getClientOriginalName();
        $file->move($path, $filename);

        //create records
        \Auth::user()->studentpersonal()->updateOrCreate(["student_id" => \Auth::user()->id], $request->only(['first_name_en', 'second_name_en', 'third_name_en', 'fourth_name_en', 'gender', 'ssn', 'mobile', 'guardian', 'guardian_type', 'guardian_mobile', 'home_phone', 'country_id', 'city_id', 'region_id', 'street', 'healthstatus_id', 'socialstatus_id', 'religion_id', 'nationality', 'specialneed_id', 'knowabout_id', 'dob']) + ['image' => $filename]);

        \Auth::user()->studenthighschool()->updateOrCreate(["student_id" => \Auth::user()->id], $request->only(['high_school_number', 'highschoolbranch_id', 'high_school_name', 'high_school_year']));

        if ($request->radio2 == 1) {
            \Auth::user()->studentbridging()->updateOrCreate(["student_id" => \Auth::user()->id], $request->only(['university_name', 'graduate_year', 'college', 'department', 'gpa', 'com_exam']));
        }
        $department = $request->department_id;

        if ($request->radio2 == 1) {
            $credit = Department::where('id', $department)->pluck('department_credit_tr')->first();
        } else {
            $credit = Department::where('id', $department)->pluck('department_credit_normal')->first();
        }
        // إذا عدل حالته من تجسير إلى نظامي، حذف بيانات التجسير وتعديل سعر الساعة
        $volunteer = Department::where('id', $department)->pluck('department_volunteer')->first();
        $major = Major::where('department_id', $department)->pluck('id')->first();
        $plan = Plan::where('major_id', $major)->where('active', 1)->max('id');
        \Auth::user()->studentacademic()->updateOrCreate(["student_id" => \Auth::user()->id], ['department_id' => $department, 'major_id' => $major, 'plan_id' => $plan, 'departmentplan' => $plan, 'credit_value' => $credit, 'volunteer_hours' => $volunteer]);

        \Auth::user()->update(['email' => $request->email]);


        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        return (view('back-end.join.edit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request)
    {

//        if  there is an image in the request
        $request_data = $request->all();

        if ($request->has('image')) {
            $request_data = $request->except(['image']);

            Storage::disk('public_uploads')->delete('/students_photos/' . auth()->user()->studentpersonal->image);
            Image::make($request->image)->resize(250, 200)->save(public_path('images/students_photos/' . auth()->user()->id . '_' . $request->file('image')->getClientOriginalName()));
            $request_data['image'] = auth()->user()->id . '_' . $request->file('image')->getClientOriginalName();

        }

        //update
        auth()->user()->studentpersonal->update($request_data);
        auth()->user()->studenthighschool->update($request_data);


        $department = $request->department_id;
        //check the bridging status and pluck the right credit based on his bridging status
        if ($request->input('isBridging') === 'checkBridging') {
            auth()->user()->studentbridging->update($request_data);
            $credit = Department::where('id', $department)->pluck('department_credit_tr')->first();

        } elseif (isset(auth()->user()->studentbridging)) {
            auth()->user()->studentbridging->delete();
            $credit = Department::where('id', $department)->pluck('department_credit_normal')->first();
        } else {
            $credit = Department::where('id', $department)->pluck('department_credit_normal')->first();
        }


        $volunteer = Department::where('id', $department)->pluck('department_volunteer')->first();
        $major = Major::where('department_id', $department)->pluck('id')->first();
        $plan = Plan::where('major_id', $major)->where('active', 1)->max('id');

        //problem on some required inputs
        auth()->user()->studentacademic->update([
            'student_id' => auth()->user()->id,
            'graduation_id' => '21',
            'department_id' => $department,
            'major_id' => $major,
            'plan_id' => $plan,
            'departmentplan' => '21', //its required to save it !!
            'credit_value' => $credit,
            'volunteer_hours' => $volunteer
        ]);

        auth()->user()->update(['email' => $request->email]);

        return redirect()->route('join.create');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
