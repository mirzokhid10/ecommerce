@extends('vendor.layouts.master')

@section('title')
{{-- {{$settings->site_name}} || Shop Profile --}}
Shop Profile
@endsection

@section('content')
  <!--=============================
    DASHBOARD START
  ==============================-->
  <section id="wsus__dashboard">
    <div class="container-fluid">
        @include('vendor.layouts.sidebar')

      <div class="row">
        <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
          <div class="dashboard_content mt-2 mt-md-0">
            <h3><i class="far fa-user"></i> Shop profile</h3>
            <div class="wsus__dashboard_profile">
              <div class="wsus__dash_pro_area">

                <form action="{{route('vendor.shop-profile.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group wsus__input">
                        <label>Preview</label>
                        <br>
                        <img width="200px" src="{{asset($profile->banner)}}" alt="">
                    </div>
                    <div class="form-group wsus__input">
                        <label>Banner</label>
                        <input type="file" class="form-control" name="banner">
                    </div>

                    <div class="form-group wsus__input">
                        <label>Shop Name</label>
                        <input type="text" class="form-control" value="{{$profile->shop_name}}" name="shop_name" >
                    </div>

                    <div class="form-group wsus__input">
                        <label>Phone</label>
                        <input type="text" class="form-control" value="{{$profile->phone}}" name="phone" >
                    </div>
                    <div class="form-group wsus__input">
                        <label>Email</label>
                        <input type="text" class="form-control" value="{{$profile->email}}" name="email"  >
                    </div>
                    <div class="form-group wsus__input">
                        <label>Address</label>
                        <input type="text" class="form-control" value="{{$profile->address}}" name="address" >
                    </div>
                    <div class="form-group wsus__input">
                        <label>Description</label>
                        <textarea class="summernote" name="description">{{$profile->description}}</textarea>
                    </div>
                    <div class="form-group wsus__input">
                        <label>Facebook</label>
                        <input type="text" class="form-control" name="fb_link" value="{{$profile->fb_link}}" >
                    </div>
                    <div class="form-group wsus__input">
                        <label>Twitter</label>
                        <input type="text" class="form-control" name="tw_link" value="{{$profile->tw_link}}" >
                    </div>
                    <div class="form-group wsus__input">
                        <label>Instagram</label>
                        <input type="text" class="form-control" name="insta_link"  value="{{$profile->insta_link}}">
                    </div>
                    <br>
                    <button type="submmit" class="btn btn-primary">Update</button>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=============================
    DASHBOARD START
  ==============================-->
@endsection
