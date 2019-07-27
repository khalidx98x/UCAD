@extends('admin.index')
@section('content')


    <div class="row">


        <div class="row">


            <form id="msform" method="post" action="{{route('join.store')}}" enctype="multipart/form-data">


                @csrf


                @include('back-end.join.joinForm')

            </form>


        </div>
    </div>



@endsection


{{--End section--}}



