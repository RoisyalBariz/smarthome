<?php

namespace App\Http\Controllers;

use App\Models\Join;
use App\Http\Requests\StoreJoinRequest;
use App\Http\Requests\UpdateJoinRequest;

class JoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('joinus');
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
     * @param  \App\Http\Requests\StoreJoinRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJoinRequest $request)
    {
        $validatedData = $request->validate(
            [
                'nama' => 'required|max:255',
                'address' => 'required',
                'phonenumber' => 'required',
                'email' => 'required|email',
                'companyname' => 'required',
                'CollaborationCategory' => 'required',
                'reasontobeinterested' => 'required'
            ]
            );

        Join::create($validatedData);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Join  $join
     * @return \Illuminate\Http\Response
     */
    public function show(Join $join)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Join  $join
     * @return \Illuminate\Http\Response
     */
    public function edit(Join $join)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJoinRequest  $request
     * @param  \App\Models\Join  $join
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJoinRequest $request, Join $join)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Join  $join
     * @return \Illuminate\Http\Response
     */
    public function destroy(Join $join)
    {
        //
    }
}
