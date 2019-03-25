<?php

namespace App\Http\Controllers;

use App\Project;
use App\Service;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    public function show()
    {
        $projects = Project::all();

        return view('platform',compact('projects'));
    }
}
