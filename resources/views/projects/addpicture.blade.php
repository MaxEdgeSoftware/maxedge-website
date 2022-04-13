@extends("layouts/admin")

@section("mainSection")

<div class="card border-0 rounded shadow p-4 mt-4" style="margin-top: 60px !important">
    <h5 class="mb-0">
        <a href="{{route('goback')}}"></a>
    </h5>

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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{route('addProjectPicture', $project->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">Upload Pictures</div>
                    <label for="projectPictures" id="picturelabel" class='btn btn-outline-success w-100'>Select Files</label>
                    <input onchange="filesChanged()" type="file" multiple accept='.jpg, .png, .jpeg' hidden id='projectPictures' name="projectFiles[]" />
                    <div class="text-center">
                        <button type="submit" class="btn btn-link">upload</button>
                    </div>
                </div>
            </form>

            @if ($project->Picture)
            <div class="my-4 d-flex flex-wrap">
                @foreach($project->Pictures as $pic)
                <div class="card">
                    <div class="card-body">
                        <div class="card-image">
                            <img style="height: 100px;" src="/storage/{{$pic->image_link}}" />
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <form action="{{route('deleteProjectPicture', $pic->id)}}" method="POST">
                            @csrf
                            <button class="btn" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
        <!--end row-->


    </div>

    @endSection


    @section("scriptSection")
    <script>
        function filesChanged() {
            var files = document.querySelector("#projectPictures").files
            console.log(files)
            if (files.length > 0) {
                document.querySelector("#picturelabel").textContent = `${files.length} file(s) selected`
            }
        }
    </script>
    @endSection("scriptSection")