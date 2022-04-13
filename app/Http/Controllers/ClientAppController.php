<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientAppController extends Controller
{
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
        } elseif ($current == "admin") {
            return redirect("/admin");
        }
        $projects = Project::with(["Client", "Staff"])->where("client_id", auth()->user()->email)->get()->take(10);
        $data = [
            "projects" => $projects,
        ];
        return view("clients.index", $data);
    }

    public function Projects()
    {
        $accountsController = new AccountsController();
        $current = $accountsController->redirectUser();
        if ($current == "login") {
            return redirect("/login");
        } elseif ($current == "admin") {
            return redirect("/admin");
        }
        $projects = Project::with(["Client", "Staff"])->where("client_id", auth()->user()->email)->get();
        return view("clients.projects", [
            "projects" => $projects,
        ]);
    }

    public function ShowProject($id)
    {
        $accountsController = new AccountsController();
        $current = $accountsController->redirectUser();
        if ($current == "login") {
            return redirect("/login");
        } elseif ($current == "admin") {
            return redirect("/admin");
        }
        $project = Project::with(["Client", "Staff"])->where("id", $id)->first();
        $project->date_added = Carbon::create($project->created_at)->diffForHumans();
        $project->completion_date = Carbon::create($project->created_at)->addWeeks($project->project_duration)->ceilDays();
        return view("clients.showproject", ["project" => $project]);
    }


    public function profile()
    {
        $user = User::with(["cprofile", "profile"])->where("id", auth()->user()->id)->first();
        $data = [
            "user" => $user,
        ];
        return view("clients.profile", $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
