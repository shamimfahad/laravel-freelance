<?php

namespace App\Http\Controllers;
use App\Project;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        /*$this->validate($request, [
            'project_name' => 'required',
            'project_description' => 'required'
            ]
        )*/

        $validatedData = $request->validate([
            'project_name' => 'required',
            'project_description' => 'required',
            'project_budget' => 'required',
            'skills' => 'required',
            //'datepicker' => 'required',
        ]);

        // Create New Project

        $project = new Project;
        $project->user_id = Auth::id();
        $project->name = $request->input('project_name');
        $project->description = $request->input('project_description');
        $project->budget = $request->input('project_budget');
        $project->skills = $request->input('skills');
        //$project->project_deadline = $request->input('project_deadline');

        //Save Project

        $project->save();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //return "OK";
        //dd($id);
        $projects = Project::find($id);


        return view('project_description')->with('projects', $projects);
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
