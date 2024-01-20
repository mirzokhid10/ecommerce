@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, Ujang!</h2>
            <p class="section-lead">
                Change information about yourself on this page.
            </p>
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form method="post" action="{{route('admin.profile.update')}}" class="needs-validation" novalidate=""
                        enctype="multipart/form-data">
                            @csrf
                            <div class="card-header">
                                <h4>Update Profile</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-12 col-12 row">
                                        <div class="col-md-6 col-6"><img class="rounded-circle" style="width: 35%" src="{{asset(Auth::user()->image)}}" alt=""></div>
                                        <div class="col-md-6 col-6">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control"
                                            value="{{Auth::user()->name}}" required="">
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control"
                                            value="{{Auth::user()->email}}" required="">
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form method="post" action="{{route('admin.password.update')}}" class="needs-validation"
                        enctype="multipart/form-data">
                            @csrf
                            <div class="card-header">
                                <h4>Update Password</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Current Password</label>
                                        <input type="password" name="current_password" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>New Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Confirm Password</label>
                                        <input type="password" name="confirm_password" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
