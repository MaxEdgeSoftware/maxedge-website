@extends("layouts/admin")

@section("mainSection")

<div class="card border-0 rounded shadow p-4 mt-4" style="margin-top: 60px !important">
    <div class="row">
        <div class="col-md-6">
            <h5 class="mb-0">View Project : {{$project->project_name}} </h5>
        </div>

        @if (auth()->user()->type == $project->Staff->type || auth()->user()->type == 'super')
        <div class="col-md-6 text-end">
            <a class="btn btn-sm {{$project->project_status}} text-white" href="/admin/project/addpictures/{{$project->id}}">Add Screenshot</a>
            <a class="btn btn-sm {{$project->project_status}} text-white" href="/admin/project/edit/{{$project->id}}">Update</a>
        </div>
        @endif

    </div>

    <div class="table-responsive my-4 shadow rounded-bottom px-lg-4" data-simplebar>
        <table class="table table-center bg-white mb-0">
            <thead>
                <tr>
                    <th class="border-bottom p-3" style="min-width: 220px;">Title</th>
                    <th class="text-end border-bottom p-3">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=" p-3">{{$project->project_name}}</td>
                    <td class="text-end p-3">{{$project->project_description}}</td>
                </tr>
            </tbody>
        </table>
        <table class="table table-center bg-white mb-0">
            <thead>
                <tr>
                    <th class="border-bottom p-3" style="min-width: 220px;">Duration</th>
                    <th class="text-end border-bottom p-3">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=" p-3">{{$project->project_duration}} week(s)</td>
                    <td class="text-end p-3"> <span class="badge {{$project->project_status}}">{{$project->project_status}}</span></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-center bg-white mb-0">
            <thead>
                <tr>
                    <th class="border-bottom p-3" style="min-width: 220px;">Company</th>
                    <th class="text-end border-bottom p-3">Address</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=" p-3">{{$project->Client->cprofile->company}}</td>
                    <td class="text-end p-3"> {{$project->Client->cprofile->address}}</td>
                </tr>
            </tbody>
        </table>

        <table class="table table-center bg-white mb-0">
            <thead>
                <tr>
                    <th class="border-bottom p-3" style="min-width: 220px;">Telephone</th>
                    <th class="text-end border-bottom p-3">Date Added</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=" p-3">
                        {{$project->Client->cprofile->phone}}
                        <a class="btn btn-sm {{$project->project_status}} text-white" href="tel:{{$project->Client->cprofile->phone}}">
                            <i data-feather="phone" class="fea icon-sm icons"></i>
                        </a>
                    </td>
                    <td class="text-end p-3"> {{$project->date_added}}</td>
                </tr>
            </tbody>
        </table>

        <table class="table table-center bg-white mb-0">
            <thead>
                <tr>
                    <th class="border-bottom p-3" style="min-width: 220px;">Completion Date</th>
                    <th class="text-end border-bottom p-3">Supervisor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=" p-3">{{$project->completion_date}}</td>
                    <td class="text-end p-3">
                        <p class="m-0">{{$project->Staff->first_name}}</p>
                        <p class="m-0 d-flex justify-content-end">
                            <a class="btn btn-sm {{$project->project_status}} text-white" href="mailto:{{$project->Staff->email}}">
                                <i data-feather="mail" class="fea icon-sm icons"></i>
                            </a> &nbsp;
                            <a class="btn btn-sm {{$project->project_status}} text-white" href="tel:{{$project->Staff->profile->phone}}">
                                <i data-feather="phone" class="fea icon-sm icons"></i>
                            </a>
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
        @if ($project->notes != '')
        <div class="alert aler-default notes p-3">
            <h6>Note:</h6>
            {{$project->notes}}
        </div>
        @endif
        @if(count($project->Pictures)> 0)
        <div class="my-4 d-flex flex-wrap">
            @foreach($project->Pictures as $pic)
            <div class="card">
                <div class="card-body">
                    <div class="card-image">
                        <img style="height: 100px;" src="/storage/{{$pic->image_link}}" />
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a class="btn" href="/storage/{{$pic->image_link}}" target="_blank" type="submit">View</a>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="card">No reference image</div>
        @endif
    </div>
</div>

@endSection