<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeInfo;
use App\Models\About;
use App\Models\Service;
use App\Models\Category;
use App\Models\Post;
use App\Models\WhyChooseUs;
use App\Models\User;
use App\Models\Price;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'home_info' => HomeInfo::first(),
            'abouts' => About::all(),
            'services' => Service::all(),
            'categories' => Category::all(),
            'blogs' => Post::with('users')->get(),
            'users' => User::with('social_network')->limit(config('parameters.home.our_team_limit'))->get(),
            'choose_us' => WhyChooseUs::first(),
            'prices' => Price::all(),
        ];
        $hhh =  "jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjj jjjjjjjjjjjjjjj  jjjjjjjjjjjjjjjjj jjjjjjjjj";

        return response()->json($data);
    }
}
