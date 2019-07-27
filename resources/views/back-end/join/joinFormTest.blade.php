{{--<!DOCTYPE html>--}}
{{--<html lang="AR" dir="rtl">--}}
{{--<head>--}}
{{--<meta charset="utf-8"/>--}}
{{--<title>طلب الالتحاق</title>--}}
{{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--<meta name="csrf-token" content="{{ csrf_token() }}" />--}}
{{--<meta content="width=device-width, initial-scale=1.0" name="viewport"/>--}}
{{--<meta http-equiv="Content-type" content="text/html; charset=utf-8">--}}
{{--<meta content="" name="description"/>--}}
{{--<meta content="" name="author"/>--}}
{{--<!-- BEGIN GLOBAL MANDATORY STYLES -->--}}
{{--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>--}}
{{--<link href="{{ URL::asset("assets/global/plugins/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css"/>--}}
{{--<link href="{{URL::asset("assets/global/plugins/simple-line-icons/simple-line-icons.min.css")}}" rel="stylesheet" type="text/css"/>--}}
{{--<link href="{{ URL::asset("assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css") }}" type="text/css"  rel="stylesheet" >--}}
{{--<link href="{{ URL::asset("assets/global/plugins/uniform/css/uniform.default.css")}}"  rel="stylesheet" type="text/css"/>--}}
{{--<link href="{{ URL::asset("assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css") }}" rel="stylesheet" type="text/css"/>--}}
{{--<!-- END GLOBAL MANDATORY STYLES -->--}}
{{--<!-- BEGIN THEME STYLES -->--}}
{{--<link rel="stylesheet" type="text/css" href="{{ URL::asset("assets/global/plugins/bootstrap-datepicker/css/datepicker3.css")}}"/>--}}
{{--<link rel="stylesheet" type="text/css" href="{{ URL::asset("assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css")}}"/>--}}
{{--<link rel="stylesheet" type="text/css" href="{{ URL::asset("assets/global/plugins/bootstrap-select/bootstrap-select-rtl.min.css")}}"/>--}}
{{--<link rel="stylesheet" type="text/css" href="{{ URL::asset("assets/global/plugins/select2/select2.css")}}"/>--}}
{{--<link rel="stylesheet" type="text/css" href="{{ URL::asset("assets/global/plugins/jquery-multi-select/css/multi-select-rtl.css")}}"/>--}}
{{--<link href="{{ URL::asset("assets/global/css/components-md-rtl.css")}}"  id="style_components" rel="stylesheet" type="text/css"/>--}}
{{--<link href="{{ URL::asset("assets/global/css/plugins-md-rtl.css")}}" rel="stylesheet" type="text/css"/>--}}
{{--<link href="{{ URL::asset("assets/admin/layout/css/layout-rtl.css")}}" rel="stylesheet" type="text/css"/>--}}
{{--<link id="style_color" href="{{ URL::asset("assets/admin/layout/css/themes/darkblue-rtl.css")}}" rel="stylesheet" type="text/css"/>--}}
{{--<link rel="stylesheet" type="text/css" href="{{ URL::asset("assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css")}}"/>--}}
{{--<link href="{{ URL::asset("assets/admin/layout/css/custom-rtl.css")}}" rel="stylesheet" type="text/css"/>--}}
{{--<!-- END THEME STYLES -->--}}
{{--<link rel="shortcut icon" href="favicon.ico"/>--}}
{{--<!-- Edit - font -->--}}
{{--<link href="{{ URL::asset("assets/admin/layout/css/new.css")}}" rel="stylesheet" type="text/css"/>--}}
{{--<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>--}}
{{--<script>--}}
{{--window.Laravel = <?php echo json_encode([--}}
{{--'csrfToken' => csrf_token(),--}}
{{--]); ?>--}}
{{--</script>--}}
{{--</head>--}}
{{--<body class="page-md page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo ">--}}
<!-- BEGIN HEADER -->

@extends('admin.index')
@section('create_menus')


    <div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <img src={{asset("logo.png")}} alt="logo" class="logo-default" width="150" height="45">
                <div class="menu-toggler sidebar-toggler hide">
                    <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                </div>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="#" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <i class="fa fa-user"></i>
                            <span class="username username-hide-on-mobile">
                        {{--{{Auth::user()->first_name}}--}}
                                {{--{{Auth::user()->fourth_name}}--}}
                    </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="{{ url('student/logout') }}"
                                   onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                    <i class="icon-key"></i> تسجيل خروج
                                </a>

                                <form id="logout-form" action="{{ url('student/logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->
    <div class="clearfix">
    </div>
    <!-- BEGIN CONTAINER -->


    <div class="page-container">

        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <div class="page-content">

                <!-- BEGIN PAGE HEADER-->
                <h5 class="page-title">
                    {{--الطالب :  {{Auth::user()->first_name}}  {{Auth::user()->second_name}}  {{Auth::user()->third_name}}--}}
                    {{--{{Auth::user()->fourth_name}} , أكمل تعبئة البيانات لاتمام التحاقك بالكلية.--}}
                </h5>
                <!-- END PAGE HEADER-->
                <!-- BEGIN PAGE CONTENT-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet box blue" id="form_wizard_1">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i> طلب الالتحاق - <span class="step-title">
								خطوة 1 من 4 </span>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                {!! Form::open(array('files' => true, 'enctype'=>'multipart/form-data', 'class'=>'margin-bottom-40',
                                {{--'id' => 'submit_form', 'method' => 'POST')) !!} --}}
                                <div class="form-wizard">
                                    <div class="form-body">
                                        <ul class="nav nav-pills nav-justified steps">
                                            <li>
                                                <a href="#tab1" data-toggle="tab" class="step">
												<span class="number">
												1 </span>
                                                    <span class="desc">
												<i class="fa fa-check"></i>البيانات الشخصية</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab2" data-toggle="tab" class="step">
												<span class="number">
												2 </span>
                                                    <span class="desc">
                                                    <i class="fa fa-check"></i>البيانات الشخصية</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab3" data-toggle="tab" class="step active">
												<span class="number">
												3 </span>
                                                    <span class="desc">
												<i class="fa fa-check"></i>بيانات الثانوية العامة</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab4" data-toggle="tab" class="step">
												<span class="number">
												4 </span>
                                                    <span class="desc">
												<i class="fa fa-check"></i>بيانات التجسير</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div id="bar" class="progress progress-striped" role="progressbar">
                                            <div class="progress-bar progress-bar-success">
                                            </div>
                                        </div>
                                        <div class="tab-content">
                                            <div class="alert alert-danger display-none">
                                                <button class="close" data-dismiss="alert"></button>
                                                يوجد بعض الاخطاء في البيانات.
                                            </div>
                                            <div class="alert alert-success display-none">
                                                <button class="close" data-dismiss="alert"></button>
                                                تم الحفظ بنجاح.
                                            </div>
                                            @if (count($errors) > 0)
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif


                                            {{--inputs starts--}}

                                            <div class="tab-pane active" id="tab1">
                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-md-line-input">
                                                            {{Form::number('ssn',isset(\Auth::user()->studentpersonal)? \Auth::user()->studentpersonal->ssn : '', array('placeholder'=>'رقم الهوية', 'class' =>'form-control'))}}
                                                            <span class="help-block">أدخل رقم هويتك ( 9 أرقام )</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-md-line-input">
                                                            {{Form::number('mobile',isset(\Auth::user()->studentpersonal)?"0".\Auth::user()->studentpersonal->mobile:'', array('placeholder'=>'رقم الجوال', 'class' =>'form-control'))}}
                                                            <span class="help-block">أدخل رقم الجوال (10 أرقام)</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group form-md-line-input">
                                                            {{Form::text('email',\Auth::user()->email, array('placeholder'=>'البريد الالكتروني', 'class' =>'form-control'))}}
                                                            <span class="help-block">أدخل بريدك الالكتروني</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"></div>
                                                </div>
                                                <br><br>
                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-md-line-input has-info">
                                                            {!! Form::select('religion_id', $Religion, isset(\Auth::user()->studentpersonal)?Auth::user()->studentpersonal->religion_id:'', ['class' => 'form-control'] ) !!}
                                                            <label for="form_control_1">الديانة</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-md-line-input has-info">
                                                            {!! Form::select('nationality', $Country, isset(\Auth::user()->studentpersonal)?\Auth::user()->studentpersonal->nationality:'', ['class' => 'form-control'] ) !!}
                                                            <label for="form_control_1">الجنسية</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-md-line-input has-info">
                                                            {!! Form::select('socialstatus_id', $Socialstatus, isset(\Auth::user()->studentpersonal)?\Auth::user()->studentpersonal->socialstatus_id:'', ['class' => 'form-control'] ) !!}
                                                            <label for="form_control_1">الحالة الاجتماعية</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"></div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <label class="control-label col-md-3">الاسم باللغة
                                                        الانجيزية </label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-md-line-input">
                                                            {{Form::text('first_name_en',isset(\Auth::user()->studentpersonal)?\Auth::user()->studentpersonal->first_name_en:'', array('placeholder'=>'الاسم الأول', 'class' =>'form-control'))}}
                                                            <span class="help-block">اسمك الأول</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group form-md-line-input">
                                                            {{Form::text('second_name_en',isset(\Auth::user()->studentpersonal)?\Auth::user()->studentpersonal->second_name_en:'', array('placeholder'=>'اسم الأب', 'class' =>'form-control', 'maxlength' => '1'))}}
                                                            <span class="help-block">أول حرف من اسم الأب</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group form-md-line-input">
                                                            {{Form::text('third_name_en',isset(\Auth::user()->studentpersonal)?\Auth::user()->studentpersonal->third_name_en:'', array('placeholder'=>'اسم الجد', 'class' =>'form-control', 'maxlength' => '1'))}}
                                                            <span class="help-block">أول حرف من اسم الجد</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-md-line-input">
                                                            {{Form::text('fourth_name_en',isset(\Auth::user()->studentpersonal)?\Auth::user()->studentpersonal->fourth_name_en : '', array('placeholder'=>'اسم العائلة', 'class' =>'form-control'))}}
                                                            <span class="help-block">اسم العائلة</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"></div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-4">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-preview thumbnail"
                                                                 data-trigger="fileinput"
                                                                 style="width: 200px; height: 150px;">
                                                                {{--@if (isset(\Auth::user()->studentpersonal))--}}
                                                                {{--<img src="{{asset('images/students_photos/'.\Auth::user()->studentpersonal->image)}}" alt=""/>--}}
                                                                {{ Form::hidden('image', \Auth::user()->studentpersonal->image ) }}
                                                                {{--@endif--}}
                                                            </div>
                                                            <div>
																<span class="btn default btn-file">
																<span class="fileinput-new">
																اضغط لاختيار صورة </span>
																<span class="fileinput-exists">
																تغيير </span>
																{{ Form::file('image', array('class' => 'form-control')) }}
																</span>
                                                                <a href="javascript:;" class="btn red fileinput-exists"
                                                                   data-dismiss="fileinput">
                                                                    حذف </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            {{--end first--}}



                                            <div class="tab-pane" id="tab2">
                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-md-line-input has-info">
                                                            {!! Form::select('country_id', $Country, isset(\Auth::user()->studentpersonal)?\Auth::user()->studentpersonal->country_id : '', ['class' => 'form-control'] ) !!}
                                                            <label for="form_control_1">مكان الميلاد</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-md-line-input">
                                                            {{Form::text('dob', isset(\Auth::user()->studentpersonal)? \Auth::user()->studentpersonal->dob : '', array('placeholder'=>'تاريخ ميلادك', 'class' =>'form-control mask_date'))}}
                                                            <span class="help-block">مثال 05-09-1997</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-md-line-input">
                                                            															{{Form::number('home_phone',isset(\Auth::user()->studentpersonal)? \Auth::user()->studentpersonal->home_phone :'', array('placeholder'=>'رقم الهاتف', 'class' =>'form-control'))}}
                                                            <span class="help-block">أدخل رقم هاتفك (7 أرقام )</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"></div>

                                                </div>


                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-md-line-input">
                                                            															{{Form::text('guardian',isset(\Auth::user()->studentpersonal)?\Auth::user()->studentpersonal->guardian:'', array('placeholder'=>'ولي الأمر', 'class' =>'form-control'))}}
                                                            <span class="help-block">اسم ولي الأمر</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-md-line-input">
                                                            															{{Form::text('guardian_type',isset(\Auth::user()->studentpersonal)?\Auth::user()->studentpersonal->guardian_type:'', array('placeholder'=>'القرابة', 'class' =>'form-control'))}}
                                                            <span class="help-block">صلة القرابة: أب, أم, أخ, عم ..</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-md-line-input">
                                                            															{{Form::number('guardian_mobile',isset(\Auth::user()->studentpersonal)?"0".\Auth::user()->studentpersonal->guardian_mobile:'', array('placeholder'=>'جوال ولي الأمر', 'class' =>'form-control'))}}
                                                            <span class="help-block">رقم الجوال (10 أرقام)</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"></div>
                                                </div>


                                                <br><br>


                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-md-line-input has-info">
                                                            															{!! Form::select('city_id', $City, isset(\Auth::user()->studentpersonal)?\Auth::user()->studentpersonal->city_id:'', ['class' => 'form-control'] ) !!}
                                                            <label for="form_control_1">المدينة</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-md-line-input has-info">
                                                            															{!! Form::select('region_id', $Region, isset(\Auth::user()->studentpersonal)?\Auth::user()->studentpersonal->region_id:'', ['class' => 'form-control'] ) !!}
                                                            <label for="form_control_1">المنطقة</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-md-line-input">
                                                            															{{Form::text('street', isset(\Auth::user()->studentpersonal)?\Auth::user()->studentpersonal->street : '', array('placeholder'=>'الشارع', 'class' =>'form-control'))}}
                                                            <span class="help-block">الشارع</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"></div>
                                                </div>


                                                <br><br>


                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-md-line-input has-info">
                                                            															{!! Form::select('gender', ['0' => 'ذكر', '1' => 'أنثى'] , isset(\Auth::user()->studentpersonal)?\Auth::user()->studentpersonal->gender : '', ['class' => 'form-control'] ) !!}
                                                            <label for="form_control_1">الجنس</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-md-line-input has-info">
                                                            															{!! Form::select('healthstatus_id', $Healthstatus, isset(\Auth::user()->studentpersonal)?\Auth::user()->studentpersonal->healthstatus_id :'', ['class' => 'form-control'] ) !!}
                                                            <label for="form_control_1">الحالة الصحية</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-md-line-input has-info">
                                                            															{!! Form::select('specialneed_id', $Specialneed, isset(\Auth::user()->studentpersonal)?\Auth::user()->studentpersonal->specialneed_id:'', ['class' => 'form-control'] ) !!}
                                                            <label for="form_control_1">احتياج خاص</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"></div>
                                                </div>
                                            </div>

                                            {{--end seconed --}}

                                            <div class="tab-pane" id="tab3">
                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <label class="control-label col-md-3">بيانات الثانوية العامة</label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-md-line-input">
                                                            															{{Form::text('high_school_name',isset(\Auth::user()->studenthighschool)?\Auth::user()->studenthighschool->high_school_name:'', array('placeholder'=>'اسم المدرسة', 'class' =>'form-control'))}}
                                                            <span class="help-block">مدرسة الثانوية العامة</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-md-line-input">
                                                            															{{Form::number('high_school_number',isset(\Auth::user()->studenthighschool) ? \Auth::user()->studenthighschool->high_school_number : '', array('placeholder'=>'رقم الجلوس', 'class' =>'form-control'))}}
                                                            <span class="help-block">رقم الجلوس في الثانوية العامة</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group form-md-line-input">
                                                            															{{Form::number('high_school_year',isset(\Auth::user()->studenthighschool)?\Auth::user()->studenthighschool->high_school_year:'', array('placeholder'=>'العام', 'class' =>'form-control'))}}
                                                            <span class="help-block">سنة الثانوية العامة</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group form-md-line-input has-info">
                                                            															{!! Form::select('highschoolbranch_id', $Highschoolbranch, isset(\Auth::user()->studenthighschool)?\Auth::user()->studenthighschool->highschoolbranch_id:'', ['class' => 'form-control'] ) !!}
                                                            <label for="form_control_1">نوع الثانوية العامة</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <br>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-4">
                                                        <div class="form-group form-md-line-input has-info">
                                                            															{!! Form::select('department_id', $Department, isset(\Auth::user()->studentacademic)?\Auth::user()->studentacademic->department_id:'', ['class' => 'form-control'] ) !!}
                                                            <label for="form_control_1">القسم الذي ترغب بالاتحاق
                                                                به؟</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-4">
                                                        <div class="form-group form-md-line-input has-info">
                                                            															{!! Form::select('knowabout_id', $Knowabout, isset(\Auth::user()->studentpersonal)?\Auth::user()->studentpersonal->knowabout_id:'', ['class' => 'form-control'] ) !!}
                                                            <label for="form_control_1">كيف عرفت عنا؟</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{--end thired--}}

                                            <div class="tab-pane" id="tab4">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-md-radios">
                                                            <div class="md-radio-inline">
                                                                <div class="md-radio">
                                                                    <label>هل أنت طالب تجسير؟</label>
                                                                </div>
                                                                <div class="md-radio">
                                                                    <input type="radio" id="radio6" value="1"
                                                                           name="radio2"
                                                                           class="md-radiobtn" {{isset(\Auth::user()->studentbridging->id)?'checked':''}}>
                                                                    <label for="radio6">
                                                                        <span></span>
                                                                        <span class="check"></span>
                                                                        <span class="box"></span>
                                                                        نعم </label>
                                                                </div>
                                                                <div class="md-radio">
                                                                    <input type="radio" id="radio7" name="radio2"
                                                                           value="0"
                                                                           class="md-radiobtn" {{isset(\Auth::user()->studentbridging->id)?'':'checked'}}>
                                                                    <label for="radio7">
                                                                        <span></span>
                                                                        <span class="check"></span>
                                                                        <span class="box"></span>
                                                                        لا </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{--end forth--}}

                                                <div id="bridging"
                                                     style="display:{{isset(\Auth::user()->studentbridging->id)?'block':'none'}};">
                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-3">
                                                            <div class="form-group form-md-line-input">
                                                                																{{Form::text('university_name',isset(\Auth::user()->studentbridging)? \Auth::user()->studentbridging->university_name : '' , array('placeholder'=>'اسم الجامعة', 'class' =>'form-control'))}}
                                                                <span class="help-block">اسم الجامعة السابقة</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group form-md-line-input">
                                                                																{{Form::text('college',isset(\Auth::user()->studentbridging)? \Auth::user()->studentbridging->college : '' , array('placeholder'=>'الكلية', 'class' =>'form-control'))}}
                                                                <span class="help-block">الكلية السابقة</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group form-md-line-input">
                                                                																{{Form::text('department',isset(\Auth::user()->studentbridging)? \Auth::user()->studentbridging->department : '' , array('placeholder'=>'القسم', 'class' =>'form-control'))}}
                                                                <span class="help-block">القسم السابق</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-3">
                                                            <div class="form-group form-md-line-input">
                                                                																{{Form::number('graduate_year',isset(\Auth::user()->studentbridging)? \Auth::user()->studentbridging->graduate_year : '' , array('placeholder'=>'عام التخرج', 'class' =>'form-control'))}}
                                                                <span class="help-block">عام التخرج</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group form-md-line-input">
                                                                																{{Form::number('gpa',isset(\Auth::user()->studentbridging)? \Auth::user()->studentbridging->gpa : '' , array('placeholder'=>'معدل التخرج', 'class' =>'form-control', 'min' => '50', 'max' => '99.99', 'step' => '0.01'))}}
                                                                <span class="help-block">معدل التخرج</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group form-md-line-input has-info">
                                                                																{!! Form::select('com_exam', ['0' => 'جيد', '1' => 'جيد جدًا', '2'=>'ممتاز'] , isset(\Auth::user()->studentbridging)?\Auth::user()->studentbridging->com_exam : '', ['class' => 'form-control'] ) !!}
                                                                <label for="form_control_1">تقدير الشامل</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                                <hr>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-8">
                                                        <div class="form-group form-md-line-input has-info">
                                                            <div class="md-checkbox">
                                                                <input name="conf" type="checkbox" id="checkbox33"
                                                                       class="md-check">
                                                                <span></span>
                                                                <label for="checkbox33">
                                                                    أتعهد بصحة البيانات المُدخـلة
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> </label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <a href="javascript:;" class="btn default button-previous">
                                                    <i class="m-icon-swapright"></i> السابق </a>
                                                <a href="javascript:;" class="btn blue button-next">
                                                    التالي <i class="m-icon-swapleft m-icon-white"></i>
                                                </a>
                                                <button class="btn green button-submit">
                                                    حفظ <i class="m-icon-swapright m-icon-white"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                							{!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PAGE CONTENT-->
            </div>
        </div>
        <!-- END CONTENT -->

    </div>


    @@endsection


<!-- END CONTAINER -->
{{--<!-- BEGIN FOOTER -->--}}
{{--<div class="page-footer">--}}
{{--<div class="page-footer-inner">--}}
{{--2016 &copy; UCAD --}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- END FOOTER -->--}}
{{--<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->--}}
{{--<script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/global/plugins/jquery-migrate.min.js')}}"  type="text/javascript"></script>--}}
{{--<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->--}}
{{--<script src="{{asset('assets/global/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>--}}
{{--<script type="text/javascript" src="{{asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}"></script>--}}
{{--<script src="{{asset('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/global/plugins/jquery.cokie.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/global/plugins/bootbox/bootbox.min.js')}}" type="text/javascript"></script>--}}
{{--<!-- END CORE PLUGINS -->--}}
{{--<!-- BEGIN PAGE LEVEL PLUGINS -->--}}
{{--<script src="{{asset('assets/global/plugins/jquery.pulsate.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/global/plugins/jquery-bootpag/jquery.bootpag.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/global/plugins/holder.js')}}" type="text/javascript"></script>--}}
{{--<!-- END PAGE LEVEL PLUGINS -->--}}
{{--<!-- BEGIN PAGE LEVEL SCRIPTS -->--}}
{{--<script type="text/javascript" src="{{asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/admin/pages/scripts/components-pickers.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('assets/global/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('assets/global/plugins/select2/select2.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js')}}"></script>--}}
{{--<script src="{{asset('assets/admin/pages/scripts/components-dropdowns.js')}}"></script>--}}
{{--<script src="{{asset('assets/global/scripts/metronic.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/admin/layout/scripts/layout.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/admin/layout/scripts/quick-sidebar.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/admin/layout/scripts/demo.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/admin/pages/scripts/ui-general.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/global/scripts/myjs.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/admin/pages/scripts/form-validation.js')}}"></script>--}}

{{--<script type="text/javascript" src="{{asset('assets/global/plugins/jquery-validation/js/jquery.validate.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('assets/global/plugins/jquery-validation/js/localization/messages_ar.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/global/scripts/jquery.validate.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>--}}
{{--<script type="text/javascript" src="{{asset('assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/admin/pages/scripts/form-wizard.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js')}}"></script>--}}
{{--<!-- END PAGE LEVEL SCRIPTS -->--}}
{{--<script>--}}
{{--jQuery(document).ready(function() {       --}}
{{--// initiate layout and plugins--}}
{{--Metronic.init(); // init metronic core components--}}
{{--Layout.init(); // init current layout--}}
{{--QuickSidebar.init(); // init quick sidebar--}}
{{--Demo.init(); // init demo features--}}
{{--UIGeneral.init();--}}
{{--ComponentsDropdowns.init();--}}
{{--ComponentsPickers.init();--}}
{{--FormValidation.init();--}}
{{--FormWizard.init();--}}

{{--});--}}
{{--</script>--}}

{{--<script>--}}
{{--$('div.alert').not('.alert-important').delay(3000).slideUp(300);--}}
{{--$(".mask_date").inputmask("yyyy-mm-dd", {--}}
{{--autoUnmask: true--}}
{{--});--}}
{{--$("#radio6").click(function () {--}}
{{--document.getElementById('bridging').style.display = "block";--}}
{{--});--}}
{{--$("#radio7").click(function () {--}}
{{--document.getElementById('bridging').style.display = "none";--}}
{{--});--}}
{{--$(".button-submit").click(function () {--}}
{{--$( "#submit_form" ).submit();--}}
{{--});--}}
{{----}}
{{--</script>--}}
{{--<!-- END JAVASCRIPTS -->--}}
{{--</body>--}}
{{--<!-- END BODY -->--}}
{{--</html>--}}