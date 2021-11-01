@extends('admin.layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Settings</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Settings</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-edit"></i>
                    Settings form
                </h3>
            </div>
            <div class="card-body">
                {{-- <h4>Left Sided</h4> --}}
                <div class="row">
                    <div class="col-5 col-sm-3">
                        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="vert-tabs-general-tab" data-toggle="pill" href="#vert-tabs-general" role="tab" aria-controls="vert-tabs-general" aria-selected="true">General</a>
                            <a class="nav-link" id="vert-tabs-email-tab" data-toggle="pill" href="#vert-tabs-email" role="tab" aria-controls="vert-tabs-email" aria-selected="false">Email</a>
                            <a class="nav-link" id="vert-tabs-social-tab" data-toggle="pill" href="#vert-tabs-social" role="tab" aria-controls="vert-tabs-social" aria-selected="false">Social</a>
                        </div>
                    </div>
                    <div class="col-7 col-sm-9">
                        <div class="tab-content" id="vert-tabs-tabContent">
                            <div class="tab-pane text-left fade show active" id="vert-tabs-general" role="tabpanel" aria-labelledby="vert-tabs-general-tab">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">General Settings</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- general form start -->
                                    <form id="general_setting">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="application_name">Application name</label>
                                                <input type="text" name="application_name" class="form-control" id="application_name" placeholder="Application name">
                                            </div>
                                            <div class="form-group">
                                                <label for="application_logo">Application logo</label>
                                                <input type="file" name="application_logo" class="form-control" id="application_logo" title="Application logo" placeholder="Application logo">
                                            </div>
                                            <div class="form-group">
                                                <label for="default_image">Default image</label>
                                                <input type="file" name="default_image" class="form-control" id="default_image" title="Default image" placeholder="Default image">
                                            </div>
                                            <div class="form-group">
                                                <label for="date_format">Date format</label>
                                                <input type="text" name="date_format" class="form-control" id="date_format" placeholder="Y-m-d">
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <button type="button" onclick="formSubmit('general_setting')" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-email" role="tabpanel" aria-labelledby="vert-tabs-email-tab">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Email Settings</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- general form start -->
                                    <form id="general_setting">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="application_name">Application name</label>
                                                <input type="text" name="application_name" class="form-control" id="application_name" placeholder="Application name">
                                            </div>
                                            <div class="form-group">
                                                <label for="application_logo">Application logo</label>
                                                <input type="file" name="application_logo" class="form-control" id="application_logo" title="Application logo" placeholder="Application logo">
                                            </div>
                                            <div class="form-group">
                                                <label for="default_image">Default image</label>
                                                <input type="file" name="default_image" class="form-control" id="default_image" title="Default image" placeholder="Default image">
                                            </div>
                                            <div class="form-group">
                                                <label for="date_format">Date format</label>
                                                <input type="text" name="date_format" class="form-control" id="date_format" placeholder="Y-m-d">
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <button type="button" onclick="formSubmit('general_setting')" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-social" role="tabpanel" aria-labelledby="vert-tabs-social-tab">
                                social
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        @endsection
        