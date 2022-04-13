<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StaffsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = User::with('profile')->where("type", "staff")->get();
        for ($i = 0; $i < count($staff); $i++) {
            $staff[$i]->idd = $i + 1;
        }
        return view("staff.all", ["staff" => $staff]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("staff.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "password" => 'required|confirmed|min:8',
            "lastname" => 'required',
            "firstname" => 'required',
            "phone" => 'required',
            "email" => 'required',
        ]);


        $user = User::create([
            "first_name" => $request->firstname,
            "last_name" => $request->lastname,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "type" => 'staff',
        ]);


        Staff::create([
            'phone' => $request->phone,
            'user_id' => $user->id
        ]);
        return redirect("/admin/staffs");
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
        $staff = User::with('profile')->where("id", $id)->first();

        return view("staff.edit", ["staff" => $staff]);
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
        $this->validate($request, [
            "lastname" => 'required',
            "firstname" => 'required',
            "phone" => 'required',
            "email" => 'required',
        ]);
        $staff = User::with('profile')->where("id", $id)->first();
        $staff->last_name = $request->lastname;
        $staff->first_name = $request->firstname;
        $staff->email = $request->email;
        if ($request->password && !empty($request->password)) {
            if ($request->password == $request->password_confirmation) {
                $staff->password = Hash::make($request->password);
            } else {
                return redirect("/admin/staff/edit/" . $staff->id)->with("message", "Password not match!");
            }
        }

        $staff->profile->phone = $request->phone;
        $staff->profile->save();
        $staff->save();
        return redirect("/admin/staffs");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Staff::where("user_id", $id)->first();
        if ($profile) {
            $profile->delete();
        }
        $staff = User::where("id", $id)->first();
        $staff->delete();
        return redirect("/admin/staffs");
    }
}
