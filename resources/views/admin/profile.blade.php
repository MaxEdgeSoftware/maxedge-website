@extends("layouts.admin")


@section("mainSection")

<div class="container my-5">
    <br>
    <div class="my-4 row">
        <div class="col-md-6">
            <div>
                <h3>Profile</h3>
            </div>
            <form class="form row gy-4 gx-3 card flex-row p-2 my-4 pb-5" method="post">
                <div class="col-6 form-group">
                    <label for="">Lastname</label>
                    <input type="text" disabled name="firstname" class="form-control disabled" value="{{auth()->user()->first_name}}">
                </div>

                <div class="col-6 form-group">
                    <label for="">Lastname</label>
                    <input type="text" disabled name="lastname" class="form-control disabled" value="{{auth()->user()->last_name}}">
                </div>

                <div class="col-6 form-group">
                    <label for="">Email</label>
                    <input type="text" disabled name="email" class="form-control disabled" value="{{auth()->user()->email}}">
                </div>

                @if (auth()->user()->profile)
                <div class="col-6 form-group">
                    <label for="">Phone</label>
                    <input type="text" disabled name="phone" class="form-control disabled" value="{{auth()->user()->profile->phone}}">
                </div>
                @endif

                @if (auth()->user()->cprofile)
                <div class="col-6 form-group">
                    <label for="">Phone</label>
                    <input type="text" disabled name="phone" class="form-control disabled" value="{{auth()->user()->cprofile->phone}}">
                </div>

                <div class="col-6 form-group">
                    <label for="">Company</label>
                    <input type="text" disabled name="company" class="form-control disabled" value="{{auth()->user()->cprofile->company}}">
                </div>

                <div class="col-6 form-group">
                    <label for="">Address</label>
                    <input type="text" disabled name="address" class="form-control disabled" value="{{auth()->user()->cprofile->address}}">
                </div>
                @endif
            </form>
        </div>


        <div class="col-md-6">
            <div>
                <h3>Change Password</h3>
            </div>

            <ul>
                @if (Session::has('oldpassword'))
                <li class="text-danger">{{@Session::get('oldpassword')}}</li>
                @endif
            </ul>

            <ul>
                @if (Session::has('success'))
                <li class="text-success">{{@Session::get('success')}}</li>
                @endif
            </ul>

            <form action="{{route('updateProfile')}}" class="form" method="POST">
                @csrf
                <div class="col-12 form-group">
                    <label for="">Current Password</label>
                    <input type="password" require name="oldpassword" class="form-control">
                </div>
                <div class="col-12 form-group">
                    <label for="">New Password</label>
                    <input type="password" require name="newpassword" class="form-control">
                </div>
                <div class="col-6 form-group my-3">
                    <button type="submit" class="btn btn-dark">Change Password</button>
                </div>
            </form>
        </div>

    </div>
    <div class="d-flex justify-content-center align-items-center flex-column">
        <div class="card" style="height: 150px; width: 150px;">
            @if (auth()->user()->photo == '')
            <img src="{{auth()->user()->photo == '' ? '/dashboard/assets/images/client/05.jpg' : env('APP_CDN').'/'.auth()->user()->photo}}" style="height: 150px;" class="img-fluid  rounded-pill" alt="">
            @else
            <img src="{{env('APP_CDN')}}/{{auth()->user()->photo}}" style="height: 150px;" class="img-fluid  rounded-pill" alt="">
            @endif
        </div>
        <form action="{{route('uploadPhoto')}}" class="form text-center my-2" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" require name="profilephoto" class="form-control input-sm" />
            <button class="btn btn-success" type="submit">change</button>
        </form>
    </div>
</div>
<!--end container-->

@endSection