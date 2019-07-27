@extends('admin.index')
@section('contact_massages')




    <div class="row">

        <div class="col-lg-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ trans('admin.edit_massages') }}</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">{{ trans('admin.name') }}</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" name">
                        </div>


                        <div class="form-group">
                            <label for="email">{{ trans('admin.email') }} </label>
                            <input type="email" class="form-control" id="email" placeholder=" email">
                        </div>


                        <div class="form-group">
                            <label for="subject"> {{ trans('admin.subject') }}</label>
                            <input type="text" class="form-control" id="subject" placeholder="subject">
                        </div>


                        <div class="form-group">
                            <label for="body">{{ trans('admin.body') }} </label>
                            <input type="text" class="form-control" id="body" placeholder=" body">
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
