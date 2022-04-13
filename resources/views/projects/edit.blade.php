@extends("layouts/admin")

@section("mainSection")

<div class="card border-0 rounded shadow p-4 mt-4" style="margin-top: 60px !important">
    <h5 class="mb-0">Edit Project : {{$project->project_name}} </h5>
    <div>
        <h6 class="badge {{$project->project_status}}">Status: {{$project->project_status}}</h6>
    </div>
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
    <form action="{{route('updateProject', $project->id)}}" method="POST">
        @csrf
        <div class="row mt-4">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Status :</label>
                    <div class="form-icon position-relative">
                        <i data-feather="bar-chart" class="fea icon-sm icons"></i>
                        <select name="project_status" class="form-control ps-5" id="project_status">
                            <option value="{{$project->project_status}}">{{$project->project_status}}</option>
                            <option value="Initiated">Initiated</option>
                            <option value="On going">On going</option>
                            <option value="Peak">Peak</option>
                            <option value="Completed">Completed</option>
                        </select>
                    </div>
                </div>
            </div>

            @if (auth()->user()->type == 'super')
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Duration <small>[weeks]</small> :</label>
                    <div class="form-icon position-relative">
                        <i data-feather="clock" class="fea icon-sm icons"></i>
                        <select name="project_duration" class="form-control form-select ps-5" id="project_status">
                            <option value="{{$project->project_duration}}">{{$project->project_duration}}</option>
                            @foreach ($counter as $number)
                            <option value="{{$number}}">{{$number}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            @endif


            <div class="col-lg-12">
                <div class="mb-3">
                    <label class="form-label">Note :</label>
                    <div class="form-icon position-relative">
                        <i data-feather="clock" class="fea icon-sm icons"></i>
                        <textarea rows="8" name="notes" class="form-control ps-5" id="notes">{{$project->notes}}</textarea>
                    </div>
                </div>
            </div>



            <div class="col-lg-12 mt-2 mb-0">
                <button class="btn btn-success">Update</button>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </form>
</div>

@endSection