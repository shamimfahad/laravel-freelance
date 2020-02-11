<?php

namespace App\Http\Controllers;

use App\ratings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $rate = new ratings();
        $rate->user_id = $request->freelancer;

        $rate->project_id = $request->project_id;
        $rate->rate = $request->rating;
        $rate->remarks = $request->feedback;


        $rate->save();
        return redirect()->route('home');
    }

    public function test(Request $request)
    {
        /*dd( $request->all());*/
        return "you successfully rated the user";
    }
    public function update(Request $request, $id){

    }
}
