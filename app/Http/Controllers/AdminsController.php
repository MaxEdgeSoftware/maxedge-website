<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminsController extends Controller
{
    public function index()
    {
        $accountsController = new AccountsController();
        $current = $accountsController->redirectUser();
        if ($current == "login") {
            return redirect("/login");
        } elseif ($current == "client") {
            return redirect("/client");
        }

        $staff = User::where("type", "staff")->get();
        $clients = User::where("type", "client")->get();
        $projects = Project::with(["Client", "Staff"])->get()->take(10);
        $testimonials = Testimonial::all();
        $data = [
            "staff" => $staff,
            "clients" => $clients,
            "projects" => $projects,
            "testimonials" => $testimonials,
        ];
        return view("admin.index", $data);
    }


    public function profile()
    {
        $accountsController = new AccountsController();
        $current = $accountsController->redirectUser();
        if ($current == "login") {
            return redirect("/login");
        } elseif ($current == "client") {
            return redirect("/client");
        }

        $user = User::with(["cprofile", "profile"])->where("id", auth()->user()->id)->first();
        $data = [
            "user" => $user,
        ];
        return view("admin.profile", $data);
    }

    public function updateProfile(Request $request)
    {
        $oldpassword = $request->oldpassword;
        $newpassword = $request->newpassword;

        $user = User::where("id", auth()->user()->id)->first();
        if (Hash::check($oldpassword, $user->password)) {
            $hashNew = Hash::make($oldpassword);
            $user->password = $hashNew;
            $user->save();
            return redirect()->back()->with("success", "Password changed successfully");
        }

        return redirect()->back()->with("oldpassword", "Incorrect current password");
        // oldpassword, newpassword
    }
    public function uploadPhoto(Request $request)
    {
        $user = User::where("id", auth()->user()->id)->first();
        $path = $request->file("profilephoto")->store("profile", "public");
        $user->photo = $path;
        $user->save();
        return redirect()->back();
        // oldpassword, newpassword
    }
    public function about()
    {
        $accountsController = new AccountsController();
        $current = $accountsController->redirectUser();
        if ($current == "login") {
            return redirect("/login");
        } elseif ($current == "client") {
            return redirect("/client");
        }

        return view("admin.about");
    }
}
