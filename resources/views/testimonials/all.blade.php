@extends("layouts/admin")

@section("mainSection")
<div class="table-responsive shadow rounded-bottom px-lg-4" data-simplebar style="height: 550px; margin-top: 80px !important">
    <h5 class="my-5">Testimonials :</h5>
    <table class="table table-center bg-white mb-0">
        <thead>
            <tr>
                <th class="border-bottom p-3" style="min-width: 20px;">#</th>
                <th class="text-center border-bottom p-3">Name</th>
                <th class="text-center border-bottom p-3">Message</th>
                <th class="text-center border-bottom p-3">Added By</th>
                <th class="text-end border-bottom p-3" style="min-width: 100px;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testimonials as $testimonial)
            <!-- Start -->
            <tr>
                <th class="p-3">{{$testimonial->idd}}</th>
                <td class="text-center p-3">{{$testimonial->name}}</td>
                <td class="text-center p-3">{{$testimonial->message}}</td>
                <td class="text-center p-3">{{$testimonial->By->first_name}} {{$testimonial->By->last_name}}</td>

                @if (auth()->user()->type == "super" || auth()->user()->type== $testimonial->added_by)
                <td class="text-center p-3 d-flex justify-content-end">
                    <a class="btn btn-sm px-3 btn-secondary" href="/admin/testimonials/edit/{{$testimonial->id}}">Update</a>
                    <form action="{{route('deleteTestimonial', $testimonial->id)}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">&times;</button>
                    </form>
                </td>
                @else
                <td></td>
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
            window.location.href = `/admin/project/destroy/${id}`
        }
    }
</script>
@endSection