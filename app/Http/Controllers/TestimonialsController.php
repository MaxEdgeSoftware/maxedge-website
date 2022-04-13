<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
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
        $testimonials = Testimonial::all();
        for ($i = 0; $i < count($testimonials); $i++) {
            $testimonials[$i]->idd = $i + 1;
        }
        return view("testimonials.all", ["testimonials" => $testimonials]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("testimonials.add");
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
            "name" => "required",
            "message" => "required",
        ]);

        Testimonial::create([
            "name" => $request->name,
            "message" => $request->message,
            "added_by" => auth()->user()->id,
        ]);
        return redirect("/admin/testimonials");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::where("id", $id)->first();
        return view("testimonials.edit", ["testimonial" => $testimonial]);
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
        $testimonial = Testimonial::where("id", $id)->first();
        $testimonial->name = $request->name;
        $testimonial->message = $request->message;
        $testimonial->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::where("id", $id)->first();
        $testimonial->delete();
        return redirect()->back();
        // deleteTestimonial
    }
}
