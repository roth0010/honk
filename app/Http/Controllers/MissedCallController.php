<?php

namespace App\Http\Controllers;

use App\Models\missedCalls;
use Illuminate\Http\Request;

class MissedCallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $missedCalls = missedCalls::simplePaginate(15);
//        dd($missedCalls);
        return view('missedCalls.index', compact('missedCalls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('missedCalls.create');
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
     * @param  \App\Models\missedCalls  $missedCalls
     * @return \Illuminate\Http\Response
     */
    public function show(missedCalls $missedCall)
    {
        return view('missedCalls.show', compact('missedCall'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\missedCalls  $missedCalls
     * @return \Illuminate\Http\Response
     */
    public function edit(missedCalls $missedCalls)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\missedCalls  $missedCalls
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, missedCalls $missedCalls)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\missedCalls  $missedCalls
     * @return \Illuminate\Http\Response
     */
    public function destroy(missedCalls $missedCalls)
    {
        //
    }
}
