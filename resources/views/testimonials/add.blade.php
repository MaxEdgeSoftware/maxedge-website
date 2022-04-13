@extends("layouts/admin")

@section("mainSection")

<div class="card border-0 rounded shadow p-4 mt-4" style="margin-top: 60px !important">
    <h5 class="mb-0">Add Testimonial :</h5>

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
    <form action="{{route('addTestimonial')}}" method="POST">
        @csrf
        <div class="row mt-4">

            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Client Name :</label>
                    <div class="form-icon position-relative">
                        <i data-feather="brush" class="fea icon-sm icons"></i>
                        <input name="name" id="project_name" type="text" class="form-control ps-5" placeholder="Project Name :">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="mb-3">
                    <label class="form-label">Message :</label>
                    <i data-feather="beginner" class="fea icon-sm icons"></i>
                    <div class="form-icon position-relative">
                        <textarea name="message" id="project_description" cols="30" rows="5" class="ps-5 form-control"></textarea>
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