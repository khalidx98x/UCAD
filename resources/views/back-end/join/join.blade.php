<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>طلب الاالتحاق</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../build/css/custom.min.css">
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <style>
        * {
            font-family: 'Droid Arabic Kufi', sans-serif;
            font-size: 12px ! important;
        }

        .control-label {
            font-size: 20px;
        }

        .step_descr {
            font-size: 16px;
            font-weight: bold;
        }

        .btn1 {
            font-size: 17px;
            font-weight: bold;
        }
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }
        input[type=number] {
         -moz-appearance:textfield;
        }
        .item .alert::after {
            border-color: transparent  transparent transparent #CE5454;
            left: auto;
            right: -13px;
        }
    </style>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- page content -->
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <div class="col-middle">
                    <div class="text-center text-center">
                        <div class="x_panel">
                            <div class="x_title">
                                <label style="font-weight: bold;font-size:22px;" class="pull-right"> اسم الطالب رباعي</label>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content col-md-12">
                                {!! Form::open(array('action' => 'joinController@store' , 'files' => true)) !!} 
                                {!! csrf_field() !!}

                             
                               
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)

                                         <li>{{ $error }}</li>

                                        @endforeach
                                    </ul>
                                </div>
                             
                                <div id="wizard" class="form_wizard wizard_horizontal ">
                                    <ul class="wizard_steps ">
                                        <li class="pull-right">
                                            <a href="#step-1">
                                                <span class="step_no">1</span>
                                                <span class="step_descr">&emsp;&emsp;&emsp;البيانات الشخصية&emsp;&emsp;&emsp;</span>
                                            </a>
                                        </li>
                                        <li class="pull-right">
                                            <a href="#step-2">
                                                <span class="step_no">2</span>
                                                <span class="step_descr">&emsp;&emsp;&emsp;البيانات الشخصية&emsp;&emsp;&emsp;</span>
                                            </a>
                                        </li>
                                        <li class="pull-right">
                                            <a href="#step-3">
                                                <span class="step_no">3</span>
                                                <span class="step_descr">&emsp;&emsp;&emsp;الثانوية العامة &emsp;&emsp;&emsp;</span>
                                            </a>
                                        </li>
                                        <li class="pull-right">
                                            <a href="#step-4">
                                                <span class="step_no">4</span>
                                                <span class="step_descr">&emsp;&emsp;&emsp;التجسير&emsp;&emsp;&emsp;</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div id="step-1" class="form-horizontal form-label-right" style="height: 595px;">
                                        <div class="form-group item">
                                            {!! Form::label('الجنس', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div dir="rtl" class="radio col-md-2  pull-right">
                                                <label class="control-label pull-right">

                                                    {!! Form::radio('gender', '1') !!}&emsp;&emsp;ذكر

                                                </label>
                                            </div>
                                            <div dir="rtl" class="radio col-md-2  pull-right">
                                                <label class=" control-label pull-right">
                                                    {!! Form::radio('gender', '2') !!}&emsp;&emsp;أنثى

                                                </label>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            {!! Form::label('رقم الهوية', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-4 pull-right">

                                                {{ Form::number('ssn','', array('placeholder'=>'رقم الهوية', 'class' =>'form-control',  'required' => 'required', 'data-validate-length-range' => '9,9')) }}

                                            </div>
                                        </div>
                                        <div class="form-group item">
                                            {!! Form::label('رقم الجوال', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-4 pull-right">
                                                {{ Form::number('mobile','', array('placeholder'=>'رقم الجوال ', 'class' =>'form-control', 'required' => 'required',
                                                'data-validate-length-range' => '10,10')) }}
                                            </div>
                                        </div>
                                        <div class="form-group item">
                                            {!! Form::label('البريد الالكتروني', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-4 pull-right">
                                                {{ Form::email('email','', array('placeholder'=>'someone@example.com', 'class' =>'form-control', 'required' => 'required')) }}
                                            </div>
                                        </div>
                                        <div class="form-group item">
                                            {!! Form::label('الديانة', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-4 pull-right">
                                                {!! Form::select('religion', $Religion, null, ['class' => 'col-sm-10 control-label form-control'] ) !!}
                                            </div>
                                        </div>

                                          <div class="form-group">
                                            {!! Form::label('الجنسية', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-4 pull-right">
                                                {!! Form::select('nationality', $Country,null, ['class' => 'col-sm-10 control-label form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('الحالة الاجتماعية', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-4 pull-right">
                                                {!! Form::select('social_state', $Socialstatus,null, ['class' => 'col-sm-10 control-label form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('الحالة الصحية', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-4 pull-right">
                                                {!! Form::select('health_state', $Healthstatus ,null, ['class' => 'col-sm-10 control-label form-control'] ) !!}
                                            </div>
                                        </div>
                                        {!! Form::label('الاسم باللغة الانجليزية', '', array('class' => 'control-label col-md-2 pull-righ')) !!}

                                        <div class="form-group item">
                                            {!! Form::label('الاسم الأول', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-2 pull-right">

                                                {{ Form::text('first_name_en','', array('placeholder'=>'الاسم الأول', 'class' =>'form-control', 'pattern' => 'alpha', 'required' => 'required')) }}
                                            </div>
                                        </div>
                                        <label class="control-label col-md-2  pull-right"></label>
                                        <div class="form-group item">
                                            {!! Form::label('اسم الأب', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-1 pull-right">
                                                {{ Form::text('second_name_en','', array('placeholder'=>'اسم الأب', 'class' =>'form-control', 'pattern' => 'alpha', 'required' => 'required', 'maxlength' => '1')) }}
                                            </div>
                                        </div>
                                        <label class="control-label col-md-2  pull-right"></label>
                                        <div class="form-group item">
                                            {!! Form::label('اسم الجد', '', array('class' => 'control-label col-md-2 pull-righ')) !!}

                                            <div class="col-md-1 pull-right">
                                                {{ Form::text('third_name_en','', array('placeholder'=>'اسم الجد', 'class' =>'form-control', 'pattern' => 'alpha', 'required' => 'required',  'maxlength' => '1')) }}
                                            </div>
                                        </div>
                                        <label class="control-label col-md-2  pull-right"></label>
                                        <div class="form-group item">
                                            {!! Form::label('اسم العائلة', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-2 pull-right">
                                                {{ Form::text('fourth_name_en','', array('placeholder'=>'اسم العائلة', 'class' =>'form-control', 'pattern' => 'alpha', 'required' => 'required')) }}

                                            </div>
                                        </div>
                                        <div class="form-group item">
                                            {!! Form::label('الصورة الشخصية', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-4 pull-right">

                                                {!! Form::file('image', array('class' => 'form-control', 'required' => 'required')) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-2" class="form-horizontal form-label-right" style="height: 500px;">
                                        <div class="form-group item">
                                            {!! Form::label('مكان الميلاد', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-4 pull-right">
                                                {!! Form::select('bob', $Country,null, ['class' => 'col-sm-10 control-label form-control', 'required' => 'required'] ) !!}
                                            </div>
                                        </div>
                                        <div class="form-group item">
                                            {!! Form::label('تاريخ الميلاد', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-4 pull-right">
                                                {{ Form::text('dob','', array('class' =>'req form-control', 'data-inputmask' => "'alias': 'dd-mm-yyyy'", 'data-mask' ,  'required' => 'required')) }}

                                            </div>
                                        </div>
                                        <div class="form-group item">
                                            {!! Form::label('اسم ولي الأمر', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-4 pull-right">
                                                {{ Form::text('guardian','', array('placeholder'=>' اسم ولي الأمر', 'class' =>'form-control', 'pattern' => 'arabic',  'required' => 'required', 'dir' => 'rtl')) }}

                                            </div>
                                        </div>
                                        <div class="form-group item">
                                            {!! Form::label('قرابة ولي الأمر', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-4 pull-right">
                                                {{ Form::text('guardian_type','', array('placeholder'=>' قرابة ولي الأمر', 'class' =>'form-control', 'pattern' => 'arabic',  'required' => 'required', 'dir' => 'rtl')) }}

                                            </div>
                                        </div>
                                        <div class="form-group item">
                                            {!! Form::label('جوال ولي الأمر', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-4 pull-right">
                                                {{ Form::number('guardian_mobile','', array('placeholder'=>' جوال ولي الأمر', 'class' =>'form-control', 'required' => 'required',                                'data-validate-length-range' => '10,10', 'dir' => 'rtl')) }}

                                            </div>
                                        </div>
                                        <div class="form-group item">
                                            {!! Form::label('تلفون المنزل', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-4 pull-right">
                                                {{ Form::number('home_phone','', array('placeholder'=>' تلفون المنزل', 'class' =>'form-control', 'required' => 'required', 'data-validate-length-range' => '7,7', 'dir' => 'rtl')) }}

                                            </div>
                                        </div>
                                        <div class="form-group item">
                                            {!! Form::label('المدينة', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-4 pull-right">
                                                {!! Form::select('city', $City, null, ['class' => 'col-sm-10 control-label form-control', 'required' => 'required'] ) !!}
                                            </div>
                                        </div>
                                        <div class="form-group item">
                                            {!! Form::label('المنطقة', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-4 pull-right">
                                                {!! Form::select('region', $Region, null, ['class' => 'col-sm-10 control-label form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="form-group item">
                                            {!! Form::label('الشارع', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-4 pull-right">
                                                {{ Form::text('street','', array('placeholder'=>'  الشارع', 'class' =>'form-control', 'pattern' => 'arabicnumeric',  'required' => 'required', 'dir' => 'rtl')) }}

                                            </div>
                                        </div>


                                        <div class="form-group item">
                                            {!! Form::label('احتياج خاص', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div dir="rtl" class="radio col-md-2  pull-right">
                                                <label class="control-label pull-right">

                                                    {!! Form::radio('specialneed', '0' , false, array('id' => 'specialneedDetails0')) !!}&emsp;&emsp;نعم

                                                </label>
                                            </div>
                                            <div dir="rtl" class="radio col-md-2  pull-right">
                                                <label class=" control-label pull-right">
                                                    {!! Form::radio('specialneed', '1', true, array('id' => 'specialneedDetails1')) !!}&emsp;&emsp;لا

                                                </label>
                                            </div>
                                        </div>
                                        <div  class="form-group item" id="specialneedDetails" style="display:none;">
                                            <div class="form-group item">
                                                {!! Form::label('نوع الاحتياج', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                                <div class="col-md-4 pull-right">
                                                     {!! Form::select('specialneeddetails', $Specialneed, null, ['class' => 'col-sm-10 control-label form-control', 'required' => 'required' ] ) !!}

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div id="step-3" class="form-horizontal form-label-right" style="height: 420px;">
                                        <div class="form-group item">
                                            {!! Form::label('رقم الجلوس ', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-4 pull-right">
                                                {{ Form::number('high_school_id','', array('placeholder'=>' رقم الجلوس', 'class' =>'form-control', 'required' => 'required', 'data-validate-length-range' => '8,8', 'dir' => 'rtl')) }}

                                            </div>
                                        </div>
                                        <div class="form-group item">
                                            {!! Form::label('اسم المدرسة ', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-4 pull-right">
                                                {{ Form::text('high_school_name','', array('placeholder'=>' اسم المدرسة', 'class' =>'form-control', 'pattern' => 'arabic',  'required' => 'required', 'dir' => 'rtl')) }}

                                            </div>
                                        </div>
                                        <div class="form-group item">
                                            {!! Form::label(' نوع الثانوية العامة', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-4 pull-right">
                                                {!! Form::select('high_school_branch', $Highschoolbranch, null, ['class' => 'col-sm-10 control-label form-control', 'required' => 'required'] ) !!}

                                            </div>
                                        </div>
                                        <div class="form-group item">
                                            {!! Form::label('معدل الثانوية العامة ', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-4 pull-right">
                                                {{ Form::number('high_school_gpa','', array('placeholder'=>' معدل الثانوية العامة ', 'class' =>'form-control',  'required' => 'required', 'data-validate-length-range' => '4,4', 'dir' => 'rtl')) }}

                                            </div>
                                        </div>
                                        <div class="form-group item">
                                            {!! Form::label(' سنة الثانوية العامة', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-4 pull-right">
                                                {{ Form::number('high_school_year','', array('placeholder'=>' سنة الثانوية العامة ', 'class' =>'form-control', 'required' => 'required', 'data-validate-length-range' => '4,4', 'dir' => 'rtl')) }}

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group item">
                                        {!! Form::label('القسم الذي ترغب باللتحاق به', '', array('class' => 'control-label col-md-4 pull-righ')) !!}
                                        </div>
                                        <div class="form-group item">
                                            {!! Form::label('الرغبة', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-4 pull-right">
                                                 {!! Form::select('department', $Department, null, ['class' => 'col-sm-10 control-label form-control', 'required' => 'required' ] ) !!}
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group item">
                                            {!! Form::label('كيف عرفت عنا؟', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div class="col-md-4 pull-right">
                                                 {!! Form::select('knowabout',$Knowabout, null, ['class' => 'col-sm-10 control-label form-control', 'required' => 'required' ] ) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-4" class="form-horizontal form-label-right" style="height: 360px;">
                                        <div class="form-group item">
                                            {!! Form::label('هل أنت طالب تجسير؟', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                            <div dir="rtl" class="radio col-md-2  pull-right">
                                                <label class="control-label pull-right">

                                                    {!! Form::radio('bridging', '0' , false, array('id' => 'bridging0')) !!}&emsp;&emsp;نعم

                                                </label>
                                            </div>
                                            <div dir="rtl" class="radio col-md-2  pull-right">
                                                <label class=" control-label pull-right">
                                                    {!! Form::radio('bridging', '1', true, array('id' => 'bridging1')) !!}&emsp;&emsp;لا

                                                </label>
                                            </div>
                                        </div>
                                        <div  class="form-group item" id="bridging" style="display:none;">
                                            <div class="form-group item">
                                                {!! Form::label('اسم الجامعة ', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                                <div class="col-md-4 pull-right">
                                                    {{ Form::text('university_name_old','', array('placeholder'=>' اسم الجامعة ', 'class' =>'form-control',  'pattern' => 'arabic',  'required' => 'required', 'dir' => 'rtl')) }}
                                                </div>
                                            </div>
                                            <div class="form-group item">
                                                {!! Form::label(' سنة التخرج', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                                <div class="col-md-4 pull-right">
                                                    {{ Form::number('graduate_year_old','', array('placeholder'=>' سنة التخرج ', 'class' =>'form-control', 'required' => 'required', 'data-validate-length-range' => '4,4', 'dir' => 'rtl')) }}

                                                </div>
                                            </div>
                                            <div class="form-group item">
                                                {!! Form::label(' الكلية', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                                <div class="col-md-4 pull-right">
                                                    {{ Form::text('college_old','', array('placeholder'=>' الكلية ', 'class' =>'form-control', 'pattern' => 'arabic',  'required' => 'required', 'dir' => 'rtl')) }}
                                                </div>
                                            </div>
                                            <div class="form-group item">
                                                {!! Form::label('القسم ', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                                <div class="col-md-4 pull-right">
                                                    {{ Form::text('department_old','', array('placeholder'=>' القسم ', 'class' =>'form-control', 'pattern' => 'arabic',  'required' => 'required', 'dir' => 'rtl')) }}

                                                </div>
                                            </div>
                                            <div class="form-group item">
                                                {!! Form::label('معدل الجامعة ', '', array('class' => 'control-label col-md-2 pull-righ')) !!}
                                                <div class="col-md-4 pull-right">
                                                    {{ Form::number('gpa_old','', array('placeholder'=>' معدل الجامعة ', 'class' =>'form-control', 'required' => 'required', 'data-validate-length-range' => '4,4', 'dir' => 'rtl')) }}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {!! Form::close() !!}
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
    <script src="../plugins/fastclick/fastclick.js"></script>
    <script src="../plugins/select2/select2.full.min.js"></script>
    <script src="../plugins/input-mask/jquery.inputmask.js"></script>
    <script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="../nprogress/nprogress.js"></script>
    <script src="../jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <script src="../build/js/custom.min.js"></script>
    <script src="../plugins/validator/validator.js"></script>
    <script>
        $(document).ready(function () {
            $('#wizard').smartWizard();

            $('#wizard_verticle').smartWizard({
                transitionEffect: 'slide'
            });

            $('.buttonNext').addClass('btn btn-success btn1');
            $('.buttonPrevious').addClass('btn btn-primary btn1');
            $('.buttonFinish').addClass('btn btn-default btn1');
        });
    </script>
    <script>
        $(function () {
            //Initialize Select2 Elements
            $(".select2").select2();

            //Datemask dd/mm/yyyy
            $("#datemask").inputmask("dd-mm-yyyy", {
                "placeholder": "dd-mm-yyyy"
            });
            //Datemask2 mm/dd/yyyy
            $("#datemask2").inputmask("mm-dd-yyyy", {
                "placeholder": "mm-dd-yyyy"
            });
            //Money Euro
            $("[data-mask]").inputmask();
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#specialneedDetails0").click(function () {
                 document.getElementById('specialneedDetails').style.display = "block";
            });
            $("#specialneedDetails1").click(function () {
                 document.getElementById('specialneedDetails').style.display = "none";
            });
            $("#bridging0").click(function () {
                 document.getElementById('bridging').style.display = "block";
            });
            $("#bridging1").click(function () {
                 document.getElementById('bridging').style.display = "none";
            });
        });
    </script>
<!-- validator -->
    <script>
      // initialize the validator function
      validator.message.date = 'not a real date';

      // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
      $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

      $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

      $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
          submit = false;
        }

        if (submit)
          this.submit();

        return false;
      });
    </script>
    <!-- /validator -->

</body>

</html>
