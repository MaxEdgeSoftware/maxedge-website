@extends("layouts/admin")

@section("mainSection")

<div class="card border-0 rounded shadow p-4 mt-4" style="margin-top: 60px !important">
    <h5 class="mb-0">Edit Client : {{$client->first_name}} </h5>
    @if (Session::has('message'))
    <p class="text-danger">{{Session::get('message')}}</p>
    @endif
    @if (Session::has('errors'))
    <ul class="text-danger">
        @foreach (json_decode(Session::get('errors')) as $error)
        @foreach ($error as $err)
        <li>
            {{$err}},
        </li>
        @endforeach
        @endforeach
    </ul>
    @endif
    <form action="{{route('updateClient', $client->id)}}" method="POST">
        @csrf
        <div class="row mt-4">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Firstname :</label>
                    <div class="form-icon position-relative">
                        <i data-feather="user" class="fea icon-sm icons"></i>
                        <input name="firstname" id="firstname" value="{{$client->first_name}}" type="text" class="form-control ps-5" placeholder="Firsname :">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Lastname :</label>
                    <div class="form-icon position-relative">
                        <i data-feather="user" class="fea icon-sm icons"></i>
                        <input name="lastname" id="lastname" type="text" class="form-control ps-5" value="{{$client->last_name}}" placeholder="Firsname :">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Phone No. :</label>
                    <div class="form-icon position-relative">
                        <i data-feather="phone" class="fea icon-sm icons"></i>
                        <input name="phone" id="phone" value="{{$client->cprofile->phone}}" type="number" class="form-control ps-5" placeholder="Phone :">
                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Email Address :</label>
                    <div class="form-icon position-relative">
                        <i data-feather="mail" class="fea icon-sm icons"></i>
                        <input name="email" id="email" type="email" value="{{$client->email}}" class="form-control ps-5" placeholder="Email :">
                    </div>
                </div>
            </div>
            <!--end col-->


            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Company :</label>
                    <div class="form-icon position-relative">
                        <i data-feather="user" class="fea icon-sm icons"></i>
                        <input name="company" id="company" type="text" value="{{$client->cprofile->company}}" class="form-control ps-5" placeholder="Company :">
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Address: </label>
                    <div class="form-icon position-relative">
                        <i data-feather="ring" class="fea icon-sm icons"></i>
                        <input name="caddress" id="caddress" type="text" value="{{$client->cprofile->address}}" class="form-control ps-5" placeholder="Address :">
                    </div>
                </div>
            </div>
            <!--end col-->


            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Password : <span class="text-danger">Leave empty to you are not changing this</span></label>
                    <div class="form-icon position-relative">
                        <i data-feather="lock" class="fea icon-sm icons"></i>
                        <input name="password" id="password" type="password" class="form-control ps-5" placeholder="Password :">
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Confirm Password :</label>
                    <div class="form-icon position-relative">
                        <i data-feather="lock" class="fea icon-sm icons"></i>
                        <input name="password_confirmation" id="password" type="password" class="form-control ps-5" placeholder="Password :">
                    </div>
                </div>
            </div>
            <!--end col-->


            <div class="col-lg-12 mt-2 mb-0">
                <button class="btn btn-success">Update</button>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </form>
</div>

@endSection