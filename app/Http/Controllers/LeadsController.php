<?php

namespace App\Http\Controllers;

use App\Models\Leads;
use Illuminate\Http\Request;

class LeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leads= Leads::all();
        return view ('lead.leads')->with('leads',$leads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lead.create');
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
            'lead_name' => 'required',
            'company' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'lead_source' => 'required',
            'lead_owner' => 'required',
            'lead_status' => 'required'



        ]);

        $leads = new Leads;
        $leads->lead_name=$request->input('lead_name');
        $leads->company=$request->input('company');
        $leads->email=$request->input('email');
        $leads->phone=$request->input('phone');
        $leads->lead_source=$request->input('lead_source');
        $leads->lead_owner=$request->input('lead_owner');
        $leads->lead_status=$request->input('lead_status');
        $leads->save();

        return redirect()->route('leads.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\leads  $leads
     * @return \Illuminate\Http\Response
     */
    public function show(leads $leads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\leads  $leads
     * @return \Illuminate\Http\Response
     */
    public function edit(leads $leads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\leads  $leads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, leads $leads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\leads  $leads
     * @return \Illuminate\Http\Response
     */
    public function destroy(leads $leads)
    {
        //
    }
}
