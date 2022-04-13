@extends("layouts/client")

@section("mainSection")
<div class="table-responsive shadow rounded-bottom px-lg-4" data-simplebar style="height: 550px; margin-top: 80px !important">
    <h5 class="my-5">All Projects :</h5>
    <table class="table table-center bg-white mb-0">
        <thead>
            <tr>
                <th class="border-bottom p-3">No.</th>
                <th class="border-bottom p-3" style="min-width: 220px;">Project</th>
                <th class="text-center border-bottom p-3">Description</th>
                <th class="text-center border-bottom p-3">Client</th>
                <th class="text-center border-bottom p-3">Company</th>
                <th class="text-center border-bottom p-3">Status</th>
                <th class="text-center border-bottom p-3">Duration</th>
                <th class="text-center border-bottom p-3">Added By</th>
                <th class="text-end border-bottom p-3" style="min-width: 100px;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <!-- Start -->
            <tr>
                <th class="p-3">#1</th>
                <td class="text-center p-3">{{$project->project_name}}</td>
                <td class="text-center p-3">{{$project->project_description}}</td>
                <td class="text-center p-3">{{$project->Client->first_name}} {{$project->Client->first_name}}</td>
                <td class="text-center p-3">{{$project->Client->cprofile->company}}</td>
                <td class="text-center p-3"> <span class="badge {{$project->project_status}}">{{$project->project_status}}</span></td>
                <td class="text-center p-3">{{$project->project_duration}}</td>
                <td class="text-center p-3">{{$project->Staff->first_name}}</td>
                <td class="text-center p-3"> <a class="btn btn-sm px-3 btn-secondary" href="/client/project/show/{{$project->id}}">View</a></td>
            </tr>
            <!-- End -->
            @endforeach

            <!-- Start -->


        </tbody>
    </table>
</div>


@endSection