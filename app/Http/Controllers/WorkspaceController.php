<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Bid;
use App\Project;
use App\Workspace;
class WorkspaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
        /*$workspace = Workspace::where('id',$id)->get();
        return view('workspace')
            ->with('workspace',$workspace);*/
    }

    public function users(){
        return User::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id)
    {

    }
    public function preLanding()
    {
        return view('bid_accepted')->with('workspace',$workspace);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $bid = Bid::find($id)->first();
        $bid->accepted = 1;
        $bid->save();

        $pid = $bid->project_id;
        $project = Project::find($pid);
        $client_id = $project->user_id;
        $freelancer_id = $bid->user_id;

        $days = $bid->finish_time;
        $deadlinestart = new Carbon();
        $deadline = $deadlinestart->copy()->addDays($days);
        /*$deadline = \Carbon\Carbon::parse($deadline)->format('d/m/Y');*/

        $workspace = new Workspace();
        $workspace->user_id = $client_id;
        $workspace->freelancer_id = $freelancer_id;
        $workspace->bid_id = $id;
        $workspace->project_id = $pid;
        $workspace->deadline = $deadline;

        $workspace->save();



       return  view('bid_accepted')->with('bid',$bid);
    }

    public function accepted(){
        $bids = Bid::all();

        return view('bid_accepted')->with('bids',$bids);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $workspace = Workspace::where('bid_id',$id)->first();
        $dline = $workspace->deadline;
        $deadline = \Carbon\Carbon::parse($dline)->format('d/m/Y');
        $users = User::where('id',$workspace->freelancer_id)->get();

        return view('workspace', compact('workspace','deadline','users'))
            /*->with('workspace',$workspace)
            ->with('deadline',$deadline)*/;
    }
    public function increaseDeadline(Request $request,$id)
    {
        $workspace = Workspace::find($id);

        $deadlineInput = $request->input('updated_deadline');
        $deadline = \Carbon\Carbon::parse($deadlineInput)->format('Y-m-d H:i:s');


        $workspace->deadline = $deadline;
        $workspace->save();

        return redirect()->back()
            ->with('workspace',$workspace)
            ->with('editDeadline','Deadline Updated');
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
