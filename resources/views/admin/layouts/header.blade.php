<!DOCTYPE html>

<head>

    {{--Start  KHALID STYLE--}}

    <style>
        /*custom font*/
        @import url(https://fonts.googleapis.com/css?family=Montserrat);

        /*!*basic reset*!*/
        /** {*/
        /*margin: 0;*/
        /*padding: 0;*/
        /*}*/

        /*html {*/
        /*height: 100%;*/
        /*!*Image only BG fallback*!*/

        /*!*background=  gradient + image pattern combo;*!*/
        /*background: linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));*/
        /*}*/

        /*body {*/
        /*font-family: montserrat, arial, verdana;*/
        /*}*/


        /* BOX , form styles*/


        #msform {
            /*padding: 200px;*/
            width: 1200px;
            /*margin: 50px auto;*/
            margin-top: 10px;
            /*margin-right: 200px;*/

            text-align: center;
            position: relative;
        }


        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 3px;
            box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
            padding: 20px 30px;
            box-sizing: border-box;
            width: 80%;
            margin: 0 10%;

            /*stacking fieldsets above each other*/
            position: relative;
        }

        /*Hide all except first fieldset*/
        #msform fieldset:not(:first-of-type) {
            display: none;
        }

        /*inputs  */
        #msform input, textarea {
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        . margin-bottom: 10 px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            font-size: 13px;
        }

        #msform label {
            float: right;
            font-family: montserrat;
            color: darkgrey;
            font-size: 13px;
        }

        /*spans  */
        #number span .number {
            display: inline-block;

            /*margin-right: 4px;*/
            float: right;
            color: revert;
            /*width: 20%;*/
            font-family: montserrat;
            font-size: 13px;
            font-weight: bold;
        }

        /*buttons*/
        #msform .action-button {
            width: 100px;
            background: #27AE60;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 1px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        #msform .action-button:hover, #msform .action-button:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
        }

        /*headings*/
        .fs-title {
            font-size: 20px;
            text-transform: uppercase;
            color: #2C3E50;
            margin-bottom: 10px;
        }

        .fs-subtitle {
            font-weight: normal;
            font-size: 13px;
            color: #666;
            margin-bottom: 20px;
        }


        /*progressbar*/

        #progressbar {
            counter-reset: step;
        }

        #progressbar li {
            list-style-type: none;
            width: 25%;
            padding: 40px;
            float: right;
            font-size: 16px;
            font-style: revert;
            position: relative;
            text-align: center;
            text-transform: uppercase;
            color: #7d7d7d;
        }

        #progressbar li:before {
            width: 30px;
            height: 30px;
            content: counter(step);
            counter-increment: step;
            line-height: 30px;
            border: 2px solid #7d7d7d;
            display: block;
            text-align: center;
            margin: 0 auto 10px auto;
            border-radius: 50%;
            background-color: white;


        }


        #progressbar li:first-child:after {
            content: none;
        }

        #progressbar li.active {
            color: green;
        }

        #progressbar li.active:before {
            border-color: #55b776;
        }

        #progressbar li.active + li:after {
            background-color: #55b776;
        }

    </style>

 {{--END  KHALID STYLE--}}



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ !empty($title)?$title:trans('admin.adminpanel') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ url('/') }}/design/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('/') }}/design/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url('/') }}/design/adminlte/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    @if(direction() == 'ltr')

        <link rel="stylesheet" href="{{ url('/') }}/design/adminlte/dist/css/AdminLTE.min.css">
    @else
        <link rel="stylesheet" href="{{ url('/') }}/design/adminlte/dist/css/rtl/AdminLTE.min.css">
        <link rel="stylesheet" href="{{ url('/') }}/design/adminlte/dist/css/rtl/bootstrap-rtl.min.css">
        <link rel="stylesheet" href="{{ url('/') }}/design/adminlte/dist/css/rtl/rtl.css">
        <link href="https://fonts.googleapis.com/css?family=Cairo:300,400&amp;subset=arabic,latin-ext" rel="stylesheet">
        <style type="text/css">
            html, body, h1, h2, h3, h4, h5, h6 {
                font-family: 'Cairo', sans-serif;
            }


        </style>
@endif
<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ url('/') }}/design/adminlte/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ url('/') }}/design/adminlte/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ url('/') }}/design/adminlte/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet"
          href="{{ url('/') }}/design/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet"
          href="{{ url('/') }}/design/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet"
          href="{{ url('/') }}/design/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/design/adminlte/jstree/themes/default/style.css">


    <script src="{{ url('/design/adminlte/dist/js/myfunctions.js') }}"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
</div>

