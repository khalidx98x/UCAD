<h2>الطالب : طالب جديد طالب مستجد, أكمل تعبئة البيانات لاتمام التحاقك بالكلية</h2>

<!-- progressbar -->

<!-- fieldsets -->

<fieldset>


    <ul id="progressbar">
        <li class="active">البيانات الشخصية</li>
        <li>البيانات الشخصية</li>
        <li>بيانات الثانوية العامة</li>
        <li>بيانات التجسير</li>
    </ul>

    <h2 class="fs-title">البيانات الشخصية</h2>
    <h3 class="fs-subtitle">طلب التحاق خطوة 1 من 4 </h3>

    <hr style="  border: 1px solid gray; ">

    {{--Form Begin--}}
    <div class="col-md-4">
    {{--<div class="box box-primary">--}}
    <!-- /.box-header -->
        <div class="box-body">
            <div class="form-group">
                <label>رقم هويتك</label>

                <input value="{{isset(auth()->user()->studentpersonal)?auth()->user()->studentpersonal->ssn :'' }}"
                       required name="ssn" type="text"
                       class="form-control"
                       placeholder="أدخل رقم هويتك ( 9 أرقام )">
            </div>

            <div class="form-group">
                <label>الديانة</label>
                <select name="religion_id" class="form-control select2 select2-hidden-accessible"
                        style="width: 100%;"
                        tabindex="-1" aria-hidden="true">
                    <option selected="selected"
                            value="0">{{isset(auth()->user()->studentpersonal)?auth()->user()->studentpersonal->religion_id : old('religion_id')}}</option>
                    <option value="0">مسلم</option>
                    {{--<option>مسلم</option>--}}
                    {{--<option disabled="disabled">California (disabled)</option>--}}
                    <option value="1">مسيحي</option>

                </select>
                {{--<span class="select2 select2-container select2-container--default select2-container--above select2-container--focus" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-9027-container"><span class="select2-selection__rendered" id="select2-9027-container" title="Delaware">Delaware</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
            </div>

            <div class="form-group">
                <label>اسمك الأول</label>
                <input value="{{isset(auth()->user()->studentpersonal)?auth()->user()->studentpersonal->first_name_en : old('first_name_en')}} "
                       required name="first_name_en"
                       type="text"
                       class="form-control" placeholder="اسمك الأول">
            </div>
        </div>
        <!-- /.box-body -->
    </div>

    <div class="col-md-4">
    {{--<div class="box box-primary">--}}
    <!-- /.box-header -->
        <div class="box-body">
            <div class="form-group">
                <label>أدخل رقم الجوال </label>
                <input value="{{isset(auth()->user()->studentpersonal)?auth()->user()->studentpersonal->mobile : old('mobile')}}"
                       required
                       name="mobile" class="form-control"
                       type="text"
                       placeholder="أدخل رقم الجوال (10 أرقام)">
            </div>
            <div class="form-group">
                <label>الجنسية</label>
                <select name="nationality" class="form-control select2 select2-hidden-accessible"
                        style="width: 100%;"
                        tabindex="-1" aria-hidden="true">
                    <option selected="selected"
                            value="0">{{isset(auth()->user()->studentpersonal)?auth()->user()->studentpersonal->nationality : old('nationality')}}</option>
                    <option value="0">مسلم</option>
                    {{--<option>مسلم</option>--}}
                    {{--<option disabled="disabled">California (disabled)</option>--}}
                    <option value="1">مسيحي</option>

                </select>
                {{--<span class="select2 select2-container select2-container--default select2-container--above select2-container--focus" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-9027-container"><span class="select2-selection__rendered" id="select2-9027-container" title="Delaware">Delaware</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
            </div>

            <div class="form-group">
                <label>أول حرف من اسم الأب</label>
                <input value="{{isset(auth()->user()->studentpersonal)?auth()->user()->studentpersonal->second_name_en : old('second_name_en')}} "
                       required name="second_name_en"
                       type="text"
                       class="form-control"

                       placeholder="أول حرف من اسم الأب">
            </div>
        </div>
        <!-- /.box-body -->

    </div>

    <div class="col-md-4">

        <!-- /.box-header -->
        <div class="box-body">
            <div class="form-group">
                <label>أدخل بريدك الالكتروني </label>
                <input value="{{isset(auth()->user()->email)?auth()->user()->email : old('email')}} " required
                       name="email" type="email"
                       class="form-control"
                       placeholder=" أدخل بريدك الالكتروني">
            </div>
            <div class="form-group">
                <label>الحالة الاجتماعية</label>
                <select name="socialstatus_id" class="form-control select2 select2-hidden-accessible"
                        style="width: 100%;"
                        tabindex="-1" aria-hidden="true">
                    <option selected="selected"
                            value="0">{{isset(auth()->user()->studentpersonal)?auth()->user()->studentpersonal->socialstatus_id : old('socialstatus_id')}}</option>
                    <option value="0">مسلم</option>
                    {{--<option>مسلم</option>--}}
                    {{--<option disabled="disabled">California (disabled)</option>--}}
                    <option value="1">مسيحي</option>

                </select>
                {{--<span class="select2 select2-container select2-container--default select2-container--above select2-container--focus" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-9027-container"><span class="select2-selection__rendered" id="select2-9027-container" title="Delaware">Delaware</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
            </div>
            <div class="form-group">
                <label>أول حرف من اسم الجد</label>
                <input value="{{isset(auth()->user()->studentpersonal)?auth()->user()->studentpersonal->third_name_en : old('third_name_en')}} "
                       required name="third_name_en"
                       type="text"
                       class="form-control"

                       placeholder="أول حرف من اسم الجد">
            </div>


            <!-- /.box-body -->
        </div>

    </div>

    <div class="col-md-4">
        <div class="box-body">

            <div class="form-group">
                <label>اسم العائلة </label>
                <input value="{{isset(auth()->user()->studentpersonal)?auth()->user()->studentpersonal->fourth_name_en : old('fourth_name_en')}} "
                       required name="fourth_name_en"
                       type="text"
                       class="form-control"
                       placeholder=" اسم العائلة ">
            </div>
        </div>

    </div>

    {{--White Space --}}
    <div class="col-md-4">
    </div>

    <div class="col-md-4">

        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-4">


                <div class="fileinput fileinput-new" data-provides="fileinput">

                    <div class="fileinput-preview thumbnail"
                         data-trigger="fileinput"
                         style="width: 200px; height: 150px;">
                        <img src="" id="profile-img-tag"/>

                    </div>


                    <div>


                        <span class="btn red btn-outline btn-file">
                                            <input type="file" name="image" id="profile-img">

                            <span class="btn btn-block btn-danger btn-xs">
            حذف </span>
            <span class="btn btn-block btn-primary btn-xs-new"
                  style="width:200px;">
            اضغط لاختيار صورة </span>
            <span class="btn btn-block btn-primary btn-xs-exists">
            تغيير </span>
            </span>
                        <a href="javascript:;" class="btn red fileinput-exists"
                           data-dismiss="fileinput"> </a>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <input type="button" name="next" class="next action-button" value="التالي"/>

</fieldset>

{{--end first step --}}


<fieldset>

    <ul id="progressbar">
        <li class="active">البيانات الشخصية</li>
        <li class="active">البيانات الشخصية</li>
        <li>بيانات الثانوية العامة</li>
        <li>بيانات التجسير</li>
    </ul>
    <h2 class="fs-title">البيانات الشخصية</h2>
    <h3 class="fs-subtitle">طلب التحاق خطوة 2 من 4 </h3>

    <hr style="  border: 1px solid gray; ">


    <div class="col-md-4">
    {{--<div class="box box-primary">--}}
    <!-- /.box-header -->
        <div class="box-body">

            <div class="form-group">
                <label>مكان االمبلاد</label>
                <select name="country_id" class="form-control select2 select2-hidden-accessible"
                        style="width: 100%;"
                        tabindex="-1" aria-hidden="true">
                    <option selected="selected"
                            value="0">{{isset(auth()->user()->studentpersonal)?auth()->user()->studentpersonal->country_id : old('country_id')}}</option>
                    <option value="0">مسلم</option>
                    {{--<option>مسلم</option>--}}
                    {{--<option disabled="disabled">California (disabled)</option>--}}
                    <option value="1">مسيحي</option>

                </select>
                {{--<span class="select2 select2-container select2-container--default select2-container--above select2-container--focus" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-9027-container"><span class="select2-selection__rendered" id="select2-9027-container" title="Delaware">Delaware</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
            </div>

            <div class="form-group">
                <label>اسم ولي الأمر</label>
                <input value="{{isset(auth()->user()->studentpersonal)?auth()->user()->studentpersonal->guardian : old('guardian')}} "
                       required
                       name="guardian" type="text"
                       class="form-control"
                       placeholder="اسم ولي الأمر">
            </div>

            <div class="form-group">
                <label>المدينة</label>
                <select name="city_id" class="form-control select2 select2-hidden-accessible"
                        style="width: 100%;"
                        tabindex="-1" aria-hidden="true">
                    <option selected="selected"
                            value="0">{{isset(auth()->user()->studentpersonal)?auth()->user()->studentpersonal->city_id : old('city_id')}}</option>
                    <option value="0">مسلم</option>
                    {{--<option>مسلم</option>--}}
                    {{--<option disabled="disabled">California (disabled)</option>--}}
                    <option value="1">مسيحي</option>

                </select>
            </div>

            <div class="form-group">
                <label>الجنس</label>
                <select name="gender" class="form-control select2 select2-hidden-accessible"
                        style="width: 100%;"
                        tabindex="-1" aria-hidden="true">
                    <option value="1">{{isset(auth()->user()->studentpersonal)?auth()->user()->studentpersonal->gender : old('gender')}}</option>
                    <option selected="selected" value="1">ذكر</option>

                    <option value="2">انثى</option>

                </select>
            </div>
        </div>
    </div>


    <div class="col-md-4">

        <div class="box-body">

            <div class="form-group">
                <label>مثال 05-09-1997</label>
                <input value="{{isset(auth()->user()->studentpersonal)?auth()->user()->studentpersonal->dob : old('dob')}} "
                       required
                       name="dob" type="date"
                       class="form-control"
                       placeholder="مثال 05-09-1997">
            </div>


            <div class="form-group">
                <label>صلة القرابة: أب, أم, أخ, عم ..</label>
                <input value="{{isset(auth()->user()->studentpersonal)?auth()->user()->studentpersonal->guardian_type : old('guardian_type')}} "
                       required name="guardian_type"
                       type="text"
                       class="form-control"
                       placeholder="صلة القرابة: أب, أم, أخ, عم ..">
            </div>

            <div class="form-group">
                <label>المنطقة</label>
                <select name="region_id" class="form-control select2 select2-hidden-accessible"
                        style="width: 100%;"
                        tabindex="-1" aria-hidden="true">
                    <option selected="selected"
                            value="0">{{isset(auth()->user()->studentpersonal)?auth()->user()->studentpersonal->region_id : old('region_id')}} </option>
                    <option value="2">مسلم</option>

                    <option value="1">مسيحي</option>

                </select>
            </div>


            <div class="form-group">
                <label>الحالة الصحية </label>
                <select name="healthstatus_id" class="form-control select2 select2-hidden-accessible"
                        style="width: 100%;"
                        tabindex="-1" aria-hidden="true">
                    <option selected="selected"
                            value="0">{{isset(auth()->user()->studentpersonal)?auth()->user()->studentpersonal->healthstatus_id : old('healthstatus_id')}}</option>
                    <option value="2">مسلم</option>

                    <option value="1">مسيحي</option>

                </select>
            </div>


        </div>
        <!-- /.box-body -->
    </div>


    <div class="col-md-4">
    {{--<div class="box box-primary">--}}
    <!-- /.box-header -->
        <div class="box-body">


            <div class="form-group">
                <label>أدخل رقم هاتفك </label>
                <input value="{{isset(auth()->user()->studentpersonal)?auth()->user()->studentpersonal->home_phone : old('home_phone')}} "
                       required
                       name="home_phone" type="text"
                       class="form-control"
                       placeholder="أدخل رقم هاتفك (7 أرقام )">
            </div>


            <div class="form-group">
                <label>رقم جوال ولي الأمر </label>
                <input value="{{isset(auth()->user()->studentpersonal)?auth()->user()->studentpersonal->guardian_mobile : old('guardian_mobile')}} "
                       required name="guardian_mobile"
                       type="text"
                       class="form-control"
                       placeholder="رقم الجوال (10 أرقام)">
            </div>

            <div class="form-group">
                <label>الشارع</label>
                <input value="{{isset(auth()->user()->studentpersonal)?auth()->user()->studentpersonal->street : old('street')}} "
                       required
                       name="street" type="text"
                       class="form-control"
                       placeholder="الشارع">
            </div>

            <div class="form-group">
                <label>احتياج خاص</label>
                <select name="specialneed_id" class="form-control select2 select2-hidden-accessible"
                        style="width: 100%;"
                        tabindex="-1" aria-hidden="true">
                    <option selected="selected"
                            value="0">{{isset(auth()->user()->studentpersonal)?auth()->user()->studentpersonal->specialneed_id : old('specialneed_id')}}</option>
                    <option value="2">مسلم</option>

                    <option value="1">مسيحي</option>

                </select>
            </div>


        </div>
        <!-- /.box-body -->
    </div>


    <input required type="button" name="previous" class="previous action-button" value="السابق"/>
    <input type="button" name="next" class="next action-button" value="التالي"/>

</fieldset>


{{--end second --}}


<fieldset>

    <ul id="progressbar">
        <li class="active">البيانات الشخصية</li>
        <li class="active">البيانات الشخصية</li>
        <li class="active">بيانات الثانوية العامة</li>
        <li>بيانات التجسير</li>
    </ul>

    <h2 class="fs-title">بيانات الثانوية العامة</h2>
    <h3 class="fs-subtitle">طلب التحاق خطوة 3 من 4 </h3>

    <hr style="  border: 1px solid gray; ">

    <div class="row">
        <div class="col-md-3">
        {{--<div class="box box-primary">--}}
        <!-- /.box-header -->
            <div class="box-body">

                <div class="form-group">
                    <label>المديرية</label>
                    <select name="Directorate" id="Directorate"
                            class="form-control select2 select2-hidden-accessible"
                            tabindex="-1" aria-hidden="true">
                        <option selected disabled>اختر المديرية</option>
                        <option value="0">شمال غزة</option>
                        <option value="1">شرق غزة</option>
                        <option value="2">غرب غزة</option>
                        <option value="3">الوسطى</option>
                        <option value="4">خانيونس</option>
                        <option value="5">شرق خانيونس</option>
                        <option value="6">رفح</option>
                    </select>
                </div>

            </div>
        </div>

        <div class="col-md-3">
        {{--<div class="box box-primary">--}}
        <!-- /.box-header -->
            <div class="box-body">

                <div class="form-group">
                    <label>مدرسة الثانوية العامة</label>
                    <select id="schools" name="high_school_name"
                            class="form-control select2 select2-hidden-accessible"
                            tabindex="-1" aria-hidden="true">
                        <option value="{{isset(auth()->user()->studenthighschool)?auth()->user()->studenthighschool->high_school_name : old('high_school_name')}}">
                            {{isset(auth()->user()->studenthighschool)?auth()->user()->studenthighschool->high_school_name : old('high_school_name')}}</option>
                    </select>
                </div>

            </div>
        </div>

        <div class="col-md-3">
        {{--<div class="box box-primary">--}}
        <!-- /.box-header -->
            <div class="box-body">

                <div class="form-group">
                    <label>رقم الجلوس في الثانوية العامة</label>
                    <input value="{{isset(auth()->user()->studenthighschool)?auth()->user()->studenthighschool->high_school_number : old('high_school_number')}} "
                           required
                           name="high_school_number"
                           type="text" class="form-control"
                           placeholder="رقم الجلوس في الثانوية العامة">
                </div>

            </div>
        </div>

        <div class="col-md-3">
        {{--<div class="box box-primary">--}}
        <!-- /.box-header -->
            <div class="box-body">

                <div class="form-group">
                    <label>سنة الثانوية العامة</label>
                    <input value="{{isset(auth()->user()->studenthighschool)?auth()->user()->studenthighschool->high_school_year : old('high_school_year') }} "
                           required
                           name="high_school_year"
                           type="text" class="form-control"
                           placeholder="سنة الثانوية العامة">
                </div>

            </div>
        </div>


        <div class="col-md-3">
            <div class="box-body">

                <div class="form-group">
                    <label>نوع الثانوية العامة </label>
                    <select name="highschoolbranch_id"
                            class="form-control select2 select2-hidden-accessible"
                            tabindex="-1" aria-hidden="true">
                        <option selected="selected">{{isset(auth()->user()->studenthighschool)?auth()->user()->studenthighschool->highschoolbranch_id : old('highschoolbranch_id') }}</option>
                        <option value="0">مسلم</option>
                        {{--<option>مسلم</option>--}}
                        {{--<option disabled="disabled">California (disabled)</option>--}}
                        <option value="1">مسيحي</option>

                    </select>
                    {{--<span class="select2 select2-container select2-container--default select2-container--above select2-container--focus" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-9027-container"><span class="select2-selection__rendered" id="select2-9027-container" title="Delaware">Delaware</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
                </div>
            </div>

        </div>
    </div>


    <div class="row">

        <hr>

        <div class="col-md-4">
            <div class="form-group">
                <label>القسم الذي ترغب بالاتحاق
                    به؟</label>
                <select name="department_id" class="form-control select2 select2-hidden-accessible"
                        style="width: 100%;"
                        tabindex="-1" aria-hidden="true">
                    <option selected="selected"
                            value="0">{{isset(auth()->user()->studenthighschool)?auth()->user()->studenthighschool->department_id : old('department_id') }}</option>
                    <option value="2">مسلم</option>
                    {{--<option>مسلم</option>--}}
                    {{--<option disabled="disabled">California (disabled)</option>--}}
                    <option value="1">مسيحي</option>

                </select>
                {{--<span class="select2 select2-container select2-container--default select2-container--above select2-container--focus" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-9027-container"><span class="select2-selection__rendered" id="select2-9027-container" title="Delaware">Delaware</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
            </div>

        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label>كيف عرفت عنا؟ </label>
                <select name="knowabout_id" class="form-control select2 select2-hidden-accessible"
                        style="width: 100%;"
                        tabindex="-1" aria-hidden="true">
                    <option selected="selected"
                            value="0">{{isset(auth()->user()->studentpersonal)?auth()->user()->studentpersonal->knowabout_id : old('knowabout_id')}}</option>
                    <option value="0">مسلم</option>
                    {{--<option>مسلم</option>--}}
                    {{--<option disabled="disabled">California (disabled)</option>--}}
                    <option value="1">مسيحي</option>

                </select>
                {{--<span class="select2 select2-container select2-container--default select2-container--above select2-container--focus" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-9027-container"><span class="select2-selection__rendered" id="select2-9027-container" title="Delaware">Delaware</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
            </div>

        </div>
    </div>
    <hr>

    <input type="button" name="previous" class="previous action-button" value="السابق"/>
    <input type="button" name="next" class="next action-button" value="التالي"/>
</fieldset>


{{--end thired step--}}

<fieldset>

    <ul id="progressbar">
        <li class="active">البيانات الشخصية</li>
        <li class="active">البيانات الشخصية</li>
        <li class="active">بيانات الثانوية العامة</li>
        <li class="active">بيانات التجسير</li>
    </ul>

    <h2 class="fs-title">بيانات التجسير</h2>
    <h3 class="fs-subtitle">طلب التحاق خطوة 4 من 4 </h3>

    <hr style="border: 1px solid gray; ">
    <div class="row">
        <div class="box-body">


            <div class="col-md-3">
                هل انت طالب تجسير ؟
            </div>

        </div>
    </div>

    <div class="row">
        <div class="box-body">

            {{--<div class="col-md-1">--}}
            {{--<label>--}}
            {{--نعم--}}
            {{--</label>--}}
            {{--</div>--}}


            <div class="col-md-1">

                <div class="box-body">
                    <div class="checkbox" style="float:right;">
                        <label>
                            نعم <input type="checkbox" name="isBridging" value="checkBridging">

                        </label>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="control-group" id="content" hidden>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <div class="box-body">

                    <div class="form-group">
                        <label>اسم الجامعة السابقة</label>
                        <input value="{{isset(auth()->user()->studentbridging)?auth()->user()->studentbridging->university_name : old('university_name') }} "
                               name="university_name"
                               type="text" class="form-control"
                               placeholder="اسم الجامعة السابقة">
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="box-body">

                    <div class="form-group">
                        <label>الكلية السابقة</label>
                        <input value="{{isset(auth()->user()->studentbridging)?auth()->user()->studentbridging->college : old('college')}} "
                               name="college" type="text"
                               class="form-control"
                               placeholder="الكلية السابقة">
                    </div>

                </div>
            </div>

            <div class="col-md-4">
            {{--<div class="box box-primary">--}}
            <!-- /.box-header -->
                <div class="box-body">

                    <div class="form-group">
                        <label>القسم السابق</label>
                        <input value="{{isset(auth()->user()->studentbridging)?auth()->user()->studentbridging->department : old('department')}} "
                               name="department"
                               type="text"
                               class="form-control"
                               placeholder="القسم السابق">
                    </div>

                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-md-4">
            {{--<div class="box box-primary">--}}
            <!-- /.box-header -->
                <div class="box-body">

                    <div class="form-group">
                        <label>عام التخرج</label>
                        <input value="{{isset(auth()->user()->studentbridging)?auth()->user()->studentbridging->graduate_year : old('graduate_year')}} "
                               name="graduate_year"
                               type="text" class="form-control"
                               placeholder="عام التخرج">
                    </div>

                </div>
            </div>

            <div class="col-md-4">
            {{--<div class="box box-primary">--}}
            <!-- /.box-header -->
                <div class="box-body">

                    <div class="form-group">
                        <label>معدل التخرج</label>
                        <input value="{{isset(auth()->user()->studentbridging)?auth()->user()->studentbridging->gpa : old('gpa')}} "
                               name="gpa" type="text"
                               class="form-control"
                               placeholder="معدل التخرج">
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="box-body">

                    <div class="form-group">
                        <label>تقدير الشامل </label>
                        <select name="com_exam" class="form-control select2 select2-hidden-accessible"
                                style="width: 100%;"
                                tabindex="-1" aria-hidden="true">
                            <option selected>{{isset(auth()->user()->studentbridging)?auth()->user()->studentbridging->com_exam : old('com_exam')}}</option>
                            <option value="0">مسلم</option>
                            {{--<option>مسلم</option>--}}
                            {{--<option disabled="disabled">California (disabled)</option>--}}
                            <option value="1">مسيحي</option>

                        </select>
                        {{--<span class="select2 select2-container select2-container--default select2-container--above select2-container--focus" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-9027-container"><span class="select2-selection__rendered" id="select2-9027-container" title="Delaware">Delaware</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
                    </div>
                </div>

            </div>

        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-2">
            <div class="form-group form-md-line-input has-info">
                <div class="md-checkbox">
                    <input name="conf" type="checkbox" id="checkbox33" class="md-check" required>
                    <span></span>
                    <p for="checkbox33">
                        أتعهد بصحة البيانات المُدخـلة
                        <span></span>
                        <span class="check"></span>
                        <span class="box"></span></p>

                </div>
            </div>
        </div>
    </div>

    <input type="button" name="previous" class="previous action-button" value="السابق"/>
    <input type="submit" name="submit" class="submit action-button" value="حفظ"/>

</fieldset>


{{--end forth step--}}


{{--new copy END--}}
