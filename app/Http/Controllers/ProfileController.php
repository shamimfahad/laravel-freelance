<?php

namespace App\Http\Controllers;


use App\Project;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*public function __construct()
    {
        $this->middleware('auth');
    }*/
    public function index($id)
    {
        $user = User::find($id);
        $projects = Project::where([
            ['user_id',$id]
            ])->paginate(4);
        $services = Service::where([
            ['user_id',$id]
            ])->paginate(4);

        return view('profile')
            ->with('user', $user)
            ->with('projects', $projects)
            ->with('services', $services);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth::user();

        $projects = Project::where([
            ['user_id',Auth::id()]
        ])->paginate(4);
        $services = Service::where([
            ['user_id',Auth::id()]
        ])->paginate(4);

        return view('profile')
            ->with('user', $user)
            ->with('projects', $projects)
            ->with('services', $services);
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
        $name = $request->input('name');
        $description = $request->input('description');
        $title = $request->input('title');

        $filenamewithExt = $request->file('profilePic')->getClientOriginalName();
        $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
        $extension = $request->file('profilePic')->getClientOriginalExtension();
        $filenameToStore = $filename.'_'.time().'.'.$extension;
        $image = $request->file('profilePic');
        $path = public_path('/images');
        $image->move($path,$filenameToStore);

        $filenamewithExt1 = $request->file('profileCover')->getClientOriginalName();
        $filename1 = pathinfo($filenamewithExt1, PATHINFO_FILENAME);
        $extension1 = $request->file('profileCover')->getClientOriginalExtension();
        $filenameToStore1 = $filename1.'_'.time().'.'.$extension1;
        $image1 = $request->file('profileCover');
        $image1->move($path,$filenameToStore1);

        $user = User::find($id);

        $user->name = $name /*? $name : $user->name*/;
        $user->title = $title /*? $title : $user->title*/;
        $user->description = $description /*? $description : $user->description*/;
        $user->profilePic = $filenameToStore;
        $user->profileCover = $filenameToStore1;

        $user->save();

        return redirect()->back()
            ->with('updated','You profile has been updated. ');

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
