<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Project;
use App\Category;
use App\Bid;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(5);
        $categories = Category::all();

        return view('projects',compact('projects','categories'));
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
            //'project_deadline' => 'required',
        ]);

        // Create New Project
        $finishdate = $request->input('project_deadline');
        $deadline = \Carbon\Carbon::parse($finishdate)->format('d/m/Y');

        $project = new Project;
        $project->user_id = Auth::id();
        $project->name = $request->input('project_name');
        $project->description = $request->input('project_description');
        $project->budget = $request->input('project_budget');
        $project->skills = $request->input('skills');
        $project->project_deadline = $deadline;

        //Save Project

        $project->save();

        return redirect('/')->with('success','Project Posted');

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
        $project = Project::find($id);
        $user_id = $project->user->id;


        if (Auth::check()) {
            $user_id = Auth::user()->id;
        }
        $bids = Bid::where([
            ['user_id',$user_id],
            ['project_id', $id]
        ])->first();

        $me = Auth::user();

        $bidder = Bid::where('project_id',$id)->get();

        $count = Bid::where('project_id',$id)->count();


        return view('project_description')->with('project', $project)
            ->with('bids', $bids)
            ->with('bidder',$bidder)
            ->with('users',$me)
            ->with('count',$count);
    }

    public function individualProject(){
        $user = Auth::user();
        /*if (Auth::check()) {
            $uid = Auth::user()->id;
        }*/
        $uid = Auth::id();
        $projects = Project::where([
            ['user_id',$uid]
        ])->get();

        //$projects = Project::find($id);
        /*dd($user);*/
        /*dd($projects);*/
        return view('my-projects')->with('user', $user)->with('projects', $projects);
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
        $project = Project::find($id);

    }


    public function done($id)
    {
        $project = Project::find($id);
        $client = $project->user_id;
        /*if (Auth::check()) {
            $client = Auth::user()->id;
        }*/

//        $bid = Bid::where([
//            ['project_id', $id],
//            ['accepted', 1]
//        ])->get();

        $bid = Bid::where('project_id',$id)->where('accepted',1)->first();
        $freelancer_id = $bid->user_id;

        $balance = $bid->amount;

        $per = ($balance*95)/100;
        $freelancer = User::find($freelancer_id);
        $freelancer->balance = $per;
        $project->completed = '1';

        $project->save();
        $freelancer->save();

        return view('ratings')->with('projects', $project)
            ->with('bids', $bid)
            ->with('freelancer',$freelancer)
            ->with('users',$client);

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
