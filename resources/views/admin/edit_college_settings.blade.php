@extends('admin.index')
@section('college_settings')


    <div class="row">

        <div class="col-lg-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"> {{ trans('admin.edit_college_setting') }}</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="phone_number"> {{ trans('admin.phone_number') }}</label>
                            <input type="text" class="form-control" id="phone_number" placeholder=" phone number">
                        </div>

                        <div class="form-group">
                            <label for="phone_number">{{ trans('admin.phone_number') }}</label>
                            <input type="text" class="form-control" id="phone_number" placeholder=" phone number">
                        </div>


                        <div class="form-group">
                            <label for="email">{{ trans('admin.email') }} </label>
                            <input type="email" class="form-control" id="email" placeholder=" email">
                        </div>


                        <div class="form-group">
                            <label for="location"> {{ trans('admin.location') }}</label>
                            <input type="text" class="form-control" id="location" placeholder="location">
                        </div>


                        <div class="form-group">
                            <label for="facebook">  {{ trans('admin.facebook') }}</label>
                            <input type="text" class="form-control" id="facebook" placeholder=" face book">
                        </div>

                        <div class="form-group">
                            <label for="twitter"> {{ trans('admin.twitter') }} </label>
                            <input type="text" class="form-control" id="twitter" placeholder=" twitter">
                        </div>

                        <div class="form-group">
                            <label for="instagram">  {{ trans('admin.instagram') }}</label>
                            <input type="text" class="form-control" id="instagram" placeholder=" instagram">
                        </div>


                        <div class="form-group">
                            <label for="mobile_number">{{ trans('admin.mobile_number') }}</label>
                            <input type="text" class="form-control" id="mobile_number" placeholder=" mobile number">
                        </div>


                        <div class="form-group">
                            <label for="mobile_number">{{ trans('admin.mobile_number') }}</label>
                            <input type="text" class="form-control" id="mobile_number" placeholder=" mobile number">
                        </div>


                        <div class="form-group">
                            <label for="fax_number">{{ trans('admin.fax_number') }}</label>
                            <input type="text" class="form-control" id="fax_number" placeholder=" fax number">
                        </div>






                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">{{ trans('admin.submit') }}</button>
                    </div>
                </form>
            </div>

        </div>

    </div>



@endsection
