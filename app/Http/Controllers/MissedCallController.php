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
        $missedCalls = missedCalls::latest()->simplePaginate(15);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        missedCalls::create($this->validateRequest($request, true));
        return redirect(route('missedCalls.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\missedCalls $missedCalls
     * @return \Illuminate\Http\Response
     */
    public function show(missedCalls $missedCall)
    {
        return view('missedCalls.show', compact('missedCall'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\missedCalls $missedCalls
     * @return \Illuminate\Http\Response
     */
    public function edit(missedCalls $missedCall)
    {
        return view('missedCalls.edit', compact('missedCall'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\missedCalls $missedCalls
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, missedCalls $missedCall)
    {
        $missedCall->update($this->validateRequest($request, false));
        return redirect(route('missedCalls.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\missedCalls $missedCalls
     * @return \Illuminate\Http\Response
     */
    public function destroy(missedCalls $missedCalls)
    {
        //
    }

    /*
     * Validates the request using different criteria.
     * $Create determines if the request is coming from a create request, set accordingly.
     * When true, the validation will check that the phone no. is unique within the database.
     * When false, it will not.
     */
    private function validateRequest(Request $request, $create): array
    {
        if($create) {
            $unique = 'unique:App\Models\missedCalls,phoneNumber';
        } else {
            $unique = '';
        }

        return $request->validate(
            [
                'phoneNumber' => [
                    'required',
                    $unique,
                    'regex:/^([0-9\s\-\+\(\)]*)$/',
                    'min:10'
                ],
                'firstName' => [
                    'required',
                    'min:2'
                    ],
                'lastName' => [
                    'required',
                    'min:2'
                    ],
                'region' => [
                    'required',
                    'min:2'
                ]
            ],
            // Custom messages!
            [
                'phoneNumber.regex' => 'Phone Number must only contain numbers and the ( ) + - symbols.'
            ]
        );
    }
}
