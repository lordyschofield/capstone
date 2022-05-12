<?php

namespace App\Http\Controllers;
use App\Models\Contacts;
use Illuminate\Http\Request;

class SearchContactsController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'query'=> 'required',
        ]);

        $query= $request->input('query');
        // dd($query);
        $contacts = Contacts::where('contact_name','LIKE',"%$query%")->orWhere('account','LIKE',"%$query%")
        ->orWhere('email','LIKE',"%$query%")->orWhere('phone','LIKE',"%$query%")->orWhere('type','LIKE',"%$query%")
        ->orWhere('source','LIKE',"%$query%")->orWhere('contact_owner','LIKE',"%$query%")
        ->paginate(6);
        
        return view('results/searched-contacts',compact('contacts'));

    }
    
}
