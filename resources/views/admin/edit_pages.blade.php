@extends('admin.index')
@section('pages')



    <!--  show  menu name  -->

    <!--   code -->


    <!-- create new items for this menu -->
    <div class="row">

        <div class="col-lg-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ trans('admin.edit_page') }}</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">

                    @csrf

                    <div class="box-body">
                        <div class="form-group ">

                            <div class="col-md-12">
                                <label for="name">{{ trans('admin.Select_image') }}</label>
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                                    <div>

                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new btn btn-primary">  {{ trans('admin.Select_image') }} </span>
                                                                <span class="fileinput-exists btn btn-default"> {{ trans('admin.Change') }} </span>

                                                                <!-- food image -->
                                                                <input type="file" name="image"> </span>
                                        <a href="javascript:;" class="btn red fileinput-exists btn btn-danger" data-dismiss="fileinput"> {{ trans('admin.Remove') }} </a>

                                        <!-- validation image the erorr in controller-->
                                        <span class="error"></span>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="form-group">
                            <label for="name">{{ trans('admin.name') }}</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="  name">
                        </div>

                        <div class="form-group">
                            <label for="content">{{ trans('admin.content') }}</label>
                            <input type="text" class="form-control" name="content" id="content" placeholder="  content">
                        </div>

                        <div class="form-group">
                            <label for="type">{{ trans('admin.type') }}</label>
                            <select name="type">
                                <option value="volvo">{{ trans('admin.Articles') }}</option>
                                <option value="saab">{{ trans('admin.Advertisement') }}</option>
                                <option value="audi">{{ trans('admin.News') }}</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="key_words">{{ trans('admin.key_words') }}</label>
                            <input type="text" class="form-control" name="key_words" id="key_words" placeholder=" key words">
                        </div>

                        <div class="form-group">
                            <label for="meta_desc">{{ trans('admin.meta_desc') }}</label>
                            <input type="text" class="form-control" name="meta_desc" id="meta_desc" placeholder="meta desc">
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
