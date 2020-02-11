<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Service;
use App\Category;
use App\Likes;
Use Illuminate\Database;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::paginate(4);
        $categories = Category::all();

        return view('services',compact('services','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('post_service',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'service_name' => 'required',
            'service_description' => 'required',
            'service_rate' => 'required',
            'category' => 'required',
            //'datepicker' => 'required',
        ]);

        // Create New Service
        $filenamewithExt = $request->file('imageUpload')->getClientOriginalName();
        $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
        $extension = $request->file('imageUpload')->getClientOriginalExtension();
        $filenameToStore = $filename.'_'.time().'.'.$extension;
        $image = $request->file('imageUpload');
        $path = public_path('/images');
        $image->move($path,$filenameToStore);

        $service = new Service;
        $service->user_id = Auth::id();
        $service->name = $request->input('service_name');
        $service->description = $request->input('service_description');
        $service->budget = $request->input('service_rate');
        $service->category = $request->input('category');
        $service->finish_time = $request->input('service_finish_time');
        $service->image = $filenameToStore;


        //Save Service

        $service->save();

        return redirect('/')->with('success','Service Posted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $service = Service::find($id);
        $user_id = $service->user->id;

        if (Auth::check()) {
            $user_id = Auth::user()->id;
        }

        $currentUser = Auth::id();

        $alreadyLiked = Likes::where([
            ['user_id',$user_id],
            ['service_id', $id]
        ])->first();

        return view('service_description')
                    ->with('service', $service)
                    ->with('alreadyLiked', $alreadyLiked);
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
    public function like($id)
    {
        $service = Service::find($id);
        $user = Auth::id();

        $likes = new Likes();
        $likes->user_id = Auth::id();
        $likes->service_id = $service->id;

        $service->increment('likes');

        $likes->save();
        $service->save();

        return redirect()->back()
            ->with('liked','You liked this service. ');
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
