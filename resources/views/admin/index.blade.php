@extends("layouts.admin")


@section("mainSection")

<div class="container-fluid">
    <div class="layout-specing">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h6 class="text-muted mb-1">Welcome back, {{auth()->user()->first_name}}!</h6>
                <h5 class="mb-0">Dashboard</h5>
            </div>

            <!-- <div class="mb-0  position-relative">
                <select class="form-select form-control" id="dailychart">
                    <option selected="">This Month</option>
                    <option value="aug">August</option>
                    <option value="jul">July</option>
                    <option value="jun">June</option>
                </select>
            </div> -->
        </div>

        <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1">
            <div class="col mt-4">
                <a href="/admin/staffs" class="features feature-primary d-flex justify-content-between align-items-center bg-white rounded shadow p-3">
                    <div class="d-flex align-items-center">
                        <div class="icon text-center rounded-pill">
                            <i class="uil uil-user-circle fs-4 mb-0"></i>
                        </div>
                        <div class="flex-1 ms-3">
                            <h6 class="mb-0 text-muted">Staff</h6>
                            <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="{{count($staff)}}">2</span></p>
                        </div>
                    </div>

                </a>
            </div>
            <!--end col-->

            <div class="col mt-4">
                <a href="/admin/clients" class="features feature-primary d-flex justify-content-between align-items-center bg-white rounded shadow p-3">
                    <div class="d-flex align-items-center">
                        <div class="icon text-center rounded-pill">
                            <i class="ti ti-users fs-4 mb-0"></i>
                        </div>
                        <div class="flex-1 ms-3">
                            <h6 class="mb-0 text-muted">Client</h6>
                            <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="{{count($clients)}}">0</span></p>
                        </div>
                    </div>
                </a>
            </div>
            <!--end col-->

            <div class="col mt-4">
                <a href="/admin/projects" class="features feature-primary d-flex justify-content-between align-items-center bg-white rounded shadow p-3">
                    <div class="d-flex align-items-center">
                        <div class="icon text-center rounded-pill">
                            <i class="ti ti-diamond fs-4 mb-0"></i>
                        </div>
                        <div class="flex-1 ms-3">
                            <h6 class="mb-0 text-muted">Projects</h6>
                            <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="{{count($projects)}}">1</span></p>
                        </div>
                    </div>
                </a>
            </div>
            <!--end col-->

            <div class="col mt-4">
                <a href="/admin/testimonials" class="features feature-primary d-flex justify-content-between align-items-center bg-white rounded shadow p-3">
                    <div class="d-flex align-items-center">
                        <div class="icon text-center rounded-pill">
                            <i class="uil uil-envelope fs-4 mb-0"></i>
                        </div>
                        <div class="flex-1 ms-3">
                            <h6 class="mb-0 text-muted">Testimonials</h6>
                            <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="{{count($testimonials)}}">1</span></p>
                        </div>
                    </div>
                </a>
            </div>
            <!--end col-->

        </div>
        <!--end row-->



        <div class="row">
            <div class="col-12 mt-4">
                <div class="d-flex justify-content-between p-4 bg-white shadow rounded-top">
                    <h6 class="fw-bold mb-0">Projects</h6>

                    <ul class="list-unstyled mb-0">
                        <li class="dropdown dropdown-primary list-inline-item">
                            <a href="/admin/projects" type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0"><i class="ti ti-diamond"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="table-responsive shadow rounded-bottom" data-simplebar style="height: 550px;">
                    <table class="table table-center bg-white mb-0">
                        <thead>
                            <tr>
                                <th class="border-bottom p-3">No.</th>
                                <th class="border-bottom p-3" style="min-width: 220px;">Client Name</th>
                                <th class="text-center border-bottom p-3">Staff</th>
                                <th class="text-center border-bottom p-3" style="min-width: 150px;">Project Title</th>
                                <th class="text-center border-bottom p-3">Duration</th>
                                <th class="text-center border-bottom p-3">Status</th>
                                <th class="text-end border-bottom p-3" style="min-width: 100px;">Preview</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                            <!-- Start -->
                            <tr>
                                <th class="p-3">#d01</th>
                                <td class="p-3">
                                    <a href="#" class="text-primary">
                                        <div class="d-flex align-items-center">
                                            <!-- <img src="/dashboard/assets/images/client/01.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt=""> -->
                                            <span class="ms-2">{{$project->Client->first_name}} {{$project->Client->last_name}}</span>
                                        </div>
                                    </a>
                                </td>
                                <td class="text-center p-3">
                                    {{$project->Staff->first_name}} {{$project->Staff->last_name}}
                                </td>
                                <td class="text-center p-3">
                                    {{$project->project_name}}
                                </td>
                                <td class="text-center p-3">
                                    {{$project->project_duration}} weeks
                                </td>
                                <td class="text-center p-3">
                                    <div class="badge {{$project->project_status}} rounded px-3 py-1">
                                        {{$project->project_status}}
                                    </div>
                                </td>
                                <td class="text-end p-3">
                                    <a href="/admin/project/show/{{$project->id}}" class="btn btn-sm btn-primary">Preview</a>
                                </td>
                            </tr>
                            <!-- End -->
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
</div>
<!--end container-->

@endSection