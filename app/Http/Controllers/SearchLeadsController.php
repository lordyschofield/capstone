<?php

namespace App\Http\Controllers;
use App\Models\Leads;
use Illuminate\Http\Request;

class SearchLeadsController extends Controller
{
    
    public function index(Request $request)
    {
        $request->validate([
            'query'=> 'required',
        ]);

        $query= $request->input('query');
        // dd($query);
        $leads = Leads::where('company','LIKE',"%$query%")->orWhere('email','LIKE',"%$query%")
        ->orWhere('phone','LIKE',"%$query%")->orWhere('lead_source','LIKE',"%$query%")->orWhere('lead_owner','LIKE',"%$query%")
        ->orWhere('lead_status','LIKE',"%$query%")
        ->paginate(6);
        
        return view('results/searched-leads',compact('leads'));

    }

    
}
