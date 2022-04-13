<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImages;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accountsController = new AccountsController();
        $current = $accountsController->redirectUser();
        if ($current == "login") {
            return redirect("/login");
        } elseif ($current == "client") {
            return redirect("/client");
        }
        $projects = Project::with(["Client", "Staff"])->get();
        return view("projects.all", [
            "projects" => $projects,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staff = User::where("type", "staff")->get();
        $clients = User::where("type", "client")->get();
        $counter = [];
        for ($i = 1; $i < 53; $i++) {
            array_push($counter, $i);
        }
        return view("projects.add", [
            "staff" => $staff,
            "clients" => $clients,
            "counter" => $counter,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accountsController = new AccountsController();
        $current = $accountsController->redirectUser();
        if ($current == "login") {
            return redirect("/login");
        } elseif ($current == "client") {
            return redirect("/client");
        }
        $this->validate($request, [
            "client" => "required",
            "project_name" => "required",
            "project_status" => "required",
            "project_duration" => "required",
            "project_description" => "required",
        ]);


        $project = Project::create([
            "project_name" => $request->project_name,
            "project_status" => $request->project_status,
            "project_duration" => $request->project_duration,
            "project_description" => $request->project_description,
            "client_id" => $request->client,
            "added_by" => auth()->user()->email,
        ]);


        if (!$project) {
            return redirect("/admin/project/add")->with("message", "something went wrong");
        }
        return redirect("/admin/project/addpictures/" . $project->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::with(["Client", "Staff", "Pictures"])->where("id", $id)->first();
        $project->date_added = Carbon::create($project->created_at)->diffForHumans();
        $project->completion_date = Carbon::create($project->created_at)->addWeeks($project->project_duration)->ceilDays();
        return view("projects.show", ["project" => $project]);
    }

    public function addPicture($id)
    {
        $project = Project::with(["Client", "Staff", "Pictures"])->where("id", $id)->first();
        // dd($project);
        return view("projects.addpicture", ["project" => $project]);
    }


    public function addProjectPicture(Request $request, $id)
    {
        $project = Project::with(["Client", "Staff"])->where("id", $id)->first();
        $files = $request->file('projectFiles');
        foreach ($files as $file) {
            $path = $file->store("project", "public");
            ProjectImages::create([
                "project_id" => $id,
                "image_link" => $path,
            ]);
        }

        return redirect()->back();
    }

    public function deleteProjectPicture($id)
    {
        $image = ProjectImages::where("id", $id)->first();

        if ($image) {
            $image->delete();
        }



        return redirect()->back();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::with(["Client", "Staff"])->where("id", $id)->first();
        $project->date_added = Carbon::create($project->created_at)->diffForHumans();
        $project->completion_date = Carbon::create($project->created_at)->addWeeks($project->project_duration)->ceilDays();


        $authUser = auth()->user()->email;
        if ($authUser != $project->added_by) {
            return redirect("/admin/");
        }

        $counter = [];
        for ($i = 1; $i < 53; $i++) {
            array_push($counter, $i);
        }


        return view("projects.edit", ["project" => $project, "counter" => $counter]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::where("id", $id)->first();
        $project->project_status = $request->project_status;
        $project->project_duration = $request->project_duration ? $request->project_duration : $project->project_duration;
        $project->notes = $request->notes;
        $project->save();

        return redirect("/admin/project/show/" . $project->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
