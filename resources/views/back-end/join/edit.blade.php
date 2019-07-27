@extends('admin.index')
@section('content')


    <div class="row">


        <div class="row">

            <form id="msform" method="post" action="{{route('join.update')}}"
                  enctype="multipart/form-data">


                @csrf
                @include('back-end.join.joinForm')

            </form>


        </div>
    </div>



@endsection


{{--End section--}}


{{--@push('css')--}}

{{--<style>--}}
{{--/*custom font*/--}}
{{--@import url(https://fonts.googleapis.com/css?family=Montserrat);--}}

{{--/*!*basic reset*!*/--}}
{{--/** {*/--}}
{{--/*margin: 0;*/--}}
{{--/*padding: 0;*/--}}
{{--/*}*/--}}

{{--/*html {*/--}}
{{--/*height: 100%;*/--}}
{{--/*!*Image only BG fallback*!*/--}}

{{--/*!*background=  gradient + image pattern combo;*!*/--}}
{{--/*background: linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));*/--}}
{{--/*}*/--}}

{{--/*body {*/--}}
{{--/*font-family: montserrat, arial, verdana;*/--}}
{{--/*}*/--}}


{{--/* BOX , form styles*/--}}


{{--#msform {--}}
{{--/*padding: 200px;*/--}}
{{--width: 1200px;--}}
{{--/*margin: 50px auto;*/--}}
{{--margin-top: 10px;--}}
{{--/*margin-right: 200px;*/--}}

{{--text-align: center;--}}
{{--position: relative;--}}
{{--}--}}


{{--#msform fieldset {--}}
{{--background: white;--}}
{{--border: 0 none;--}}
{{--border-radius: 3px;--}}
{{--box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);--}}
{{--padding: 20px 30px;--}}
{{--box-sizing: border-box;--}}
{{--width: 80%;--}}
{{--margin: 0 10%;--}}

{{--/*stacking fieldsets above each other*/--}}
{{--position: relative;--}}
{{--}--}}

{{--/*Hide all except first fieldset*/--}}
{{--#msform fieldset:not(:first-of-type) {--}}
{{--display: none;--}}
{{--}--}}

{{--/*inputs  */--}}
{{--#msform input, textarea {--}}
{{--padding: 15px;--}}
{{--border: 1px solid #ccc;--}}
{{--border-radius: 3px;--}}
{{--. margin-bottom: 10 px;--}}
{{--width: 100%;--}}
{{--box-sizing: border-box;--}}
{{--font-family: montserrat;--}}
{{--color: #2C3E50;--}}
{{--font-size: 13px;--}}
{{--}--}}

{{--#msform label {--}}
{{--float: right;--}}
{{--font-family: montserrat;--}}
{{--color: darkgrey;--}}
{{--font-size: 13px;--}}
{{--}--}}

{{--/*spans  */--}}
{{--#number span .number {--}}
{{--display: inline-block;--}}

{{--/*margin-right: 4px;*/--}}
{{--float: right;--}}
{{--color: revert;--}}
{{--/*width: 20%;*/--}}
{{--font-family: montserrat;--}}
{{--font-size: 13px;--}}
{{--font-weight: bold;--}}
{{--}--}}

{{--/*buttons*/--}}
{{--#msform .action-button {--}}
{{--width: 100px;--}}
{{--background: #27AE60;--}}
{{--font-weight: bold;--}}
{{--color: white;--}}
{{--border: 0 none;--}}
{{--border-radius: 1px;--}}
{{--cursor: pointer;--}}
{{--padding: 10px 5px;--}}
{{--margin: 10px 5px;--}}
{{--}--}}

{{--#msform .action-button:hover, #msform .action-button:focus {--}}
{{--box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;--}}
{{--}--}}

{{--/*headings*/--}}
{{--.fs-title {--}}
{{--font-size: 20px;--}}
{{--text-transform: uppercase;--}}
{{--color: #2C3E50;--}}
{{--margin-bottom: 10px;--}}
{{--}--}}

{{--.fs-subtitle {--}}
{{--font-weight: normal;--}}
{{--font-size: 13px;--}}
{{--color: #666;--}}
{{--margin-bottom: 20px;--}}
{{--}--}}


{{--/*progressbar*/--}}

{{--#progressbar {--}}
{{--counter-reset: step;--}}
{{--}--}}

{{--#progressbar li {--}}
{{--list-style-type: none;--}}
{{--width: 25%;--}}
{{--padding: 40px;--}}
{{--float: right;--}}
{{--font-size: 16px;--}}
{{--font-style: revert;--}}
{{--position: relative;--}}
{{--text-align: center;--}}
{{--text-transform: uppercase;--}}
{{--color: #7d7d7d;--}}
{{--}--}}

{{--#progressbar li:before {--}}
{{--width: 30px;--}}
{{--height: 30px;--}}
{{--content: counter(step);--}}
{{--counter-increment: step;--}}
{{--line-height: 30px;--}}
{{--border: 2px solid #7d7d7d;--}}
{{--display: block;--}}
{{--text-align: center;--}}
{{--margin: 0 auto 10px auto;--}}
{{--border-radius: 50%;--}}
{{--background-color: white;--}}


{{--}--}}


{{--#progressbar li:first-child:after {--}}
{{--content: none;--}}
{{--}--}}

{{--#progressbar li.active {--}}
{{--color: green;--}}
{{--}--}}

{{--#progressbar li.active:before {--}}
{{--border-color: #55b776;--}}
{{--}--}}

{{--#progressbar li.active + li:after {--}}
{{--background-color: #55b776;--}}
{{--}--}}

{{--</style>--}}

{{--@endpush--}}

{{--@push('js')--}}

{{--<script>--}}
{{--//jQuery time--}}
{{--var current_fs, next_fs, previous_fs; //fieldsets--}}
{{--var left, opacity, scale; //fieldset properties which we will animate--}}
{{--var animating; //flag to prevent quick multi-click glitches--}}

{{--$(".next").click(function () {--}}
{{--if (animating) return false;--}}
{{--animating = true;--}}

{{--current_fs = $(this).parent();--}}
{{--next_fs = $(this).parent().next();--}}

{{--//activate next step on progressbar using the index of next_fs--}}
{{--$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");--}}

{{--//show the next fieldset--}}
{{--next_fs.show();--}}
{{--//hide the current fieldset with style--}}
{{--current_fs.animate({opacity: 0}, {--}}
{{--step: function (now, mx) {--}}
{{--//as the opacity of current_fs reduces to 0 - stored in "now"--}}
{{--//1. scale current_fs down to 80%--}}
{{--scale = 1 - (1 - now) * 0.2;--}}
{{--//2. bring next_fs from the right(50%)--}}
{{--left = (now * 50) + "%";--}}
{{--//3. increase opacity of next_fs to 1 as it moves in--}}
{{--opacity = 1 - now;--}}
{{--current_fs.css({--}}
{{--'transform': 'scale(' + scale + ')',--}}
{{--'position': 'absolute'--}}
{{--});--}}
{{--next_fs.css({'left': left, 'opacity': opacity});--}}
{{--},--}}
{{--duration: 800,--}}
{{--complete: function () {--}}
{{--current_fs.hide();--}}
{{--animating = false;--}}
{{--},--}}
{{--//this comes from the custom easing plugin--}}
{{--easing: 'easeInOutBack'--}}
{{--});--}}
{{--});--}}

{{--$(".previous").click(function () {--}}
{{--if (animating) return false;--}}
{{--animating = true;--}}

{{--current_fs = $(this).parent();--}}
{{--previous_fs = $(this).parent().prev();--}}

{{--//de-activate current step on progressbar--}}
{{--$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");--}}

{{--//show the previous fieldset--}}
{{--previous_fs.show();--}}
{{--//hide the current fieldset with style--}}
{{--current_fs.animate({opacity: 0}, {--}}
{{--step: function (now, mx) {--}}
{{--//as the opacity of current_fs reduces to 0 - stored in "now"--}}
{{--//1. scale previous_fs from 80% to 100%--}}
{{--scale = 0.8 + (1 - now) * 0.2;--}}
{{--//2. take current_fs to the right(50%) - from 0%--}}
{{--left = ((1 - now) * 50) + "%";--}}
{{--//3. increase opacity of previous_fs to 1 as it moves in--}}
{{--opacity = 1 - now;--}}
{{--current_fs.css({'left': left});--}}
{{--previous_fs.css({'transform': 'scale(' + scale + ')', 'opacity': opacity});--}}
{{--},--}}
{{--duration: 800,--}}
{{--complete: function () {--}}
{{--current_fs.hide();--}}
{{--animating = false;--}}
{{--},--}}
{{--//this comes from the custom easing plugin--}}
{{--easing: 'easeInOutBack'--}}
{{--});--}}
{{--});--}}


{{--// Show and hide contents for bridging--}}
{{--$("input[value='checkBridging']").click(function () {--}}
{{--if ($(this).is(":checked")) {--}}
{{--$("#content").show();--}}
{{--} else--}}
{{--$("#content").hide();--}}

{{--});--}}


{{--///for image--}}
{{--function readURL(input) {--}}
{{--if (input.files && input.files[0]) {--}}
{{--var reader = new FileReader();--}}

{{--reader.onload = function (e) {--}}
{{--$('#profile-img-tag').attr('src', e.target.result);--}}
{{--}--}}
{{--reader.readAsDataURL(input.files[0]);--}}
{{--}--}}
{{--}--}}

{{--$("#profile-img").change(function () {--}}
{{--readURL(this);--}}
{{--});--}}

{{--///////////////////////////////////////////////////////////////--}}
{{--///select inputs--}}

{{--$("#Directorate").change(function () {--}}
{{--var type = $(this).val();--}}
{{--console.log(type);--}}
{{--getSchools(type);--}}


{{--// Get items from API--}}
{{--function getSchools(type) {--}}
{{--$.ajax({--}}
{{--url: 'http://localhost:8000/join/schools/' + type--}}
{{--}).done(function (schools) {--}}
{{--let output = '';--}}
{{--$.each(schools, function (key, school) {--}}
{{--output += `--}}
{{--<option value="${school.name}" >${school.name} </option>--}}
{{--`;--}}
{{--});--}}
{{--$('#schools').empty().append(output);--}}
{{--});--}}
{{--}--}}
{{--})--}}


{{--</script>--}}

{{--@endpush--}}