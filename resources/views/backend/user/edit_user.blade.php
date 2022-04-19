@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
    <div class="container-full">


        <!-- Main content -->
        <section class="content">

            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Update User</h4>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="{{ route('users.update', $editData->id) }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>User Role <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="user_type" id="select" required="" class="form-control">
                                                                <option value="" selected disabled>Select Role</option>
                                                                <option value="Admin" {{($editData->user_type == "Admin" ? "selected" : "")}}>
                                                                    Admin</option>
                                                                <option value="User" {{($editData->user_type == "User" ? "selected" : "")}}>
                                                                    User</option>

                                                            </select>
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>User Name <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" value="{{ $editData->name }}" name="name" class="form-control" required="">

                                                        </div>

                                                    </div>

                                                </div>
                                            </div> <!-- End Row -->

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>User Email <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="email" name="email" value="{{ $editData->email }}"" class=" form-control" required="">

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">

                                                    <!-- <div class="form-group">
                                                        <h5>User Password <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="password" name="password" class="form-control"
                                                                required="">

                                                        </div> -->
                                                </div>
                                            </div><!-- End Row -->
                                        </div>
                                    </div>

                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
                                    </div>
                                </form>

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </section>
        </section>
        <!-- /.content -->

    </div>
</div>

@endsection