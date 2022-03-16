<?php

namespace App\Http\Controllers;

use App\Models\Deals;
use Illuminate\Http\Request;

class DealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deals= Deals::all();
        return view ('deal.deals')->with('deals',$deals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deal.create');
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
            'deal_name'=>'required',
            'deal_owner'=>'required',
            'deal_progress'=>'required',
            'dealContractNo'=>'required',
            'deal_value'=>'required',
            'dealOpenDate'=>'required',
            'deal_CloseDate'=>'required',
            'dealClosed'=>'required'



        ]);

        $deals = new Deals;
        $deals->deal_name=$request->input('deal_name');
        $deals->deal_owner=$request->input('deal_owner');
        $deals->deal_progress=$request->input('deal_progress');
        $deals->dealContractNo=$request->input('dealContractNo');
        $deals->deal_value=$request->input('deal_value');
        $deals->dealOpenDate=$request->input('dealOpenDate');
        $deals->deal_CloseDate=$request->input('deal_CloseDate');
        $deals->dealClosed=$request->input('dealClosed');
        $deals->save();

        return redirect()->route('deals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deals  $deals
     * @return \Illuminate\Http\Response
     */
    public function show(Deals $deals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deals  $deals
     * @return \Illuminate\Http\Response
     */
    public function edit(Deals $deals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deals  $deals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deals $deals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deals  $deals
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deals $deals)
    {
        //
    }
}
