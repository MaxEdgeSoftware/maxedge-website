<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view("main.index", ["testimonials" => $testimonials]);
    }

    public function contact()
    {
        return view("main.contact");
    }

    public function whyus()
    {
        return view("main.whyus");
    }

    public function website()
    {
        return view("main.website");
    }
    public function services()
    {
        return view("main.Services");
    }

    public function mobile()
    {
        return view("main.mobile");
    }
    public function datascience()
    {
        return view("main.datascience");
    }
    public function team()
    {
        return view("main.team");
    }
}
