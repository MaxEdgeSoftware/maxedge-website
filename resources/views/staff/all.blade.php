@extends("layouts/admin")

@section("mainSection")
<div class="table-responsive shadow rounded-bottom px-lg-4" data-simplebar style="height: 550px; margin-top: 80px !important">
    <h5 class="my-5">All Staff :</h5>
    <table class="table table-center bg-white mb-0">
        <thead>
            <tr>
                <th class="border-bottom p-3">No.</th>
                <th class="border-bottom p-3" style="min-width: 220px;">Staff Name</th>
                <th class="text-center border-bottom p-3">Phone</th>
                <th class="text-center border-bottom p-3" style="min-width: 150px;">Email</th>
                @if (auth()->user()->type == 'super')
                <th class="text-end border-bottom p-3" style="min-width: 100px;">Action</th>
                @endif
            </tr>
        </thead>
        <tbody>

            @foreach ($staff as $team)
            <!-- Start -->
            <tr>
                <th class="p-3">#{{$team->idd}}</th>
                <td class="p-3">
                    <a href="#" class="text-primary">
                        <div class="d-flex align-items-center">
                            <img src="/dashboard/assets/images/client/01.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt="">
                            <span class="ms-2">{{$team->first_name}} {{$team->last_name}}</span>
                        </div>
                    </a>
                </td>
                <td class="text-center p-3">{{$team->profile->phone}}</td>
                <td class="text-center p-3">{{$team->email}}</td>
                @if (auth()->user()->type == 'super')
                <td class="text-end p-3">
                    <a href="/admin/staff/edit/{{$team->id}}" class="btn btn-sm btn-primary">Update</a>
                    <a onclick="checkFirst('{{$team->id}}')" class="btn btn-sm btn-danger">&times;</a>
                </td>
                @endif
            </tr>
            <!-- End -->
            @endforeach

            <!-- Start -->


        </tbody>
    </table>
</div>

<script>
    function checkFirst(id) {
        if (confirm(' Are you sure to delete this record?')) {
            window.location.href = `/admin/staff/destroy/${id}`
        }
    }
</script>
@endSection