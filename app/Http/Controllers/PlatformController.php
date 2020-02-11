<?php

namespace App\Http\Controllers;

use App\Project;
use App\Bid;
use App\Category;
use App\Service;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    public function show()
    {
        $projects = Project::all();
        $services = Service::all();
        $categories = Category::all();

        return view('platform',compact('projects','categories','services'));
    }
}
