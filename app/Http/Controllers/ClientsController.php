<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = User::with('cprofile')->where("type", "client")->get();
        for ($i = 0; $i < count($clients); $i++) {
            $clients[$i]->idd = $i + 1;
        }
        return view("client.all", ["clients" => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("client.add");
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
            "email" => 'required|unique:users',
            "company" => 'required',
            "caddress" => 'required',
        ]);


        $user = User::create([
            "first_name" => $request->firstname,
            "last_name" => $request->lastname,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "type" => 'client',
        ]);


        Client::create([
            'phone' => $request->phone,
            'company' => $request->company,
            'address' => $request->caddress,
            'user_id' => $user->id
        ]);
        return redirect("/admin/clients");
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
        $client = User::with('cprofile')->where("id", $id)->first();

        return view("client.edit", ["client" => $client]);
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
            "company" => 'required',
            "caddress" => 'required',
        ]);
        $client = User::with('cprofile')->where("id", $id)->first();
        $client->last_name = $request->lastname;
        $client->first_name = $request->firstname;
        $client->email = $request->email;
        if ($request->password && !empty($request->password)) {
            if ($request->password == $request->password_confirmation) {
                $client->password = Hash::make($request->password);
            } else {
                return redirect("/admin/client/edit/" . $client->id)->with("message", "Password not match!");
            }
        }

        $client->cprofile->phone = $request->phone;
        $client->cprofile->company = $request->company;
        $client->cprofile->address = $request->caddress;
        $client->cprofile->save();
        $client->save();
        return redirect("/admin/clients");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $cProfile = Client::where("user_id", $id)->first();
        if ($cProfile) {
            $cProfile->delete();
        }
        $client = User::where("id", $id)->first();
        $client->delete();
        return redirect("/admin/clients");
    }
}
