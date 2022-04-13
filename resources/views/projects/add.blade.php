@extends("layouts/admin")

@section("mainSection")

<div class="card border-0 rounded shadow p-4 mt-4" style="margin-top: 60px !important">
    <h5 class="mb-0">Add Project :</h5>

    @if (Session::has('message'))
    <ul class="text-danger">
        <li>
            {{Session::get('message')}}
        </li>
    </ul>
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
    <form action="{{route('addProject')}}" method="POST">
        @csrf
        <div class="row mt-4">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Client :</label>
                    <div class="form-icon position-relative">
                        <i data-feather="user" class="fea icon-sm icons"></i>
                        <select class="form-control form-select ps-5" name="client" id="client">
                            <option value="">Select Client</option>
                            @foreach ($clients as $client)
                            <option value="{{$client->email}}">{{$client->first_name}} {{$client->last_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Project Name :</label>
                    <div class="form-icon position-relative">
                        <i data-feather="brush" class="fea icon-sm icons"></i>
                        <input name="project_name" id="project_name" type="text" class="form-control ps-5" placeholder="Project Name :">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Status :</label>
                    <div class="form-icon position-relative">
                        <i data-feather="bar-chart" class="fea icon-sm icons"></i>
                        <select name="project_status" class="form-control ps-5" id="project_status">
                            <option value="Initiated">Initiated</option>
                            <option value="On going">On going</option>
                            <option value="Peak">Peak</option>
                            <option value="Completed">Completed</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Duration <small>[weeks]</small> :</label>
                    <div class="form-icon position-relative">
                        <i data-feather="clock" class="fea icon-sm icons"></i>
                        <select name="project_duration" class="form-control form-select ps-5" id="project_status">
                            @foreach ($counter as $number)
                            <option value="{{$number}}">{{$number}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>


            <div class="col-lg-12">
                <div class="mb-3">
                    <label class="form-label">Project Description :</label>
                    <i data-feather="beginner" class="fea icon-sm icons"></i>
                    <div class="form-icon position-relative">
                        <textarea name="project_description" id="project_description" cols="30" rows="5" class="ps-5 form-control"></textarea>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mt-2 mb-0">
                <button class="btn btn-success">Add</button>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </form>
</div>

@endSection