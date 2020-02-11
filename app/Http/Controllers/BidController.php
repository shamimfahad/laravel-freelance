<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Bid;
use App\Workspace;
use phpDocumentor\Reflection\Project;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


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
        if (Auth::check()) {
            $freelancer_id = Auth::user()->id;

            $validatedData = $request->validate([
                'bidamount' => 'required',
                'finishtime' => 'required',
            ]);

            $bid = new Bid;
            $bid->user_id = $freelancer_id;
            $bid->project_id = $request->input('project_id');
            $bid->amount = $request->input('bidamount');
            $bid->finish_time = $request->input('finishtime');
            $bid->accepted =  "0";
            //$bid->project_deadline = $request->input('project_deadline');

            //Save Project

            $bid->save();


            return "You Bid On This Prject";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bid = Bid::find($id);

        $pid = $bid->project_id;

        $pid2 = \App\Project::find($pid);

        $bidder = Bid::where('project_id',$pid)->get();

        return view('workspace')
            ->with('bid',$bid)
            ->with('projects',$pid2)
            ->with('users',Auth::user())
            ->with('bidder',$bidder);
    }

    public function bid(){

    }
    public function accept(Request $request,$id){
        $bid= Bid::find($id);

        $bid->accepted = 1;

        $bid->save();




        return view('workspace')->with('bid',$bid);
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
