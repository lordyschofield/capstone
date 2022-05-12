<?php

namespace App\Http\Controllers;
use App\Models\Activities;
use Illuminate\Http\Request;

class SearchActivitiesController extends Controller
{
    
    public function index(Request $request)
    {
        $request->validate([
            'query'=> 'required',
        ]);

        $query= $request->input('query');
        // dd($query);
        $activities = Activities::where('activity_type','LIKE',"%$query%")->orWhere('subject','LIKE',"%$query%")
        ->orWhere('status','LIKE',"%$query%")->orWhere('date','LIKE',"%$query%")->orWhere('time','LIKE',"%$query%")
        ->orWhere('priority','LIKE',"%$query%")->orWhere('activity_owner','LIKE',"%$query%")
        ->paginate(6);
        
        return view('results/searched-activities',compact('activities'));

    }

    
}
