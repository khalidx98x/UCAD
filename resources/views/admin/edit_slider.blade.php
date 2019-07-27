@extends('admin.index')
@section('pages')









    <div class="row">

        <div class="col-lg-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Crate items</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">

                    @csrf

                    <div class="box-body">
                        <div class="form-group ">

                            <div class="col-md-12">
                                <label for="name">Select image</label>
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                                    <div>

                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new btn btn-primary"> Select image </span>
                                                                <span class="fileinput-exists btn btn-default"> Change </span>

                                                                <!-- food image -->
                                                                <input type="file" name="image"> </span>
                                        <a href="javascript:;" class="btn red fileinput-exists btn btn-danger" data-dismiss="fileinput"> Remove </a>

                                        <!-- validation image the erorr in controller-->
                                        <span class="error"></span>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="  name">
                        </div>

                        <div class="form-group">
                            <label for="content">content</label>
                            <input type="text" class="form-control" name="content" id="content" placeholder="  content">
                        </div>




                        <div class="form-group">
                            <label for="start_date">start date</label>
                            <input type="date" class="form-control" name="start_date" id="start_date " placeholder=" start date">
                        </div>

                        <div class="form-start_date">
                            <label for="end_date">end date</label>
                            <input type="date" class="form-control" name="end_date" id="end_date " placeholder="end date">
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">ارسال</button>
                    </div>
                </form>
            </div>

        </div>

    </div>



@endsection
