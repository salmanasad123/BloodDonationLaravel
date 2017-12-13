<?php

namespace App\Http\Controllers;

use App\Donor;
use App\Http\Requests\DonorRequest;
use App\Http\Resources\DonorResource;
use Illuminate\Http\Request;


class DonorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except('index','show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Donor::all();
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
    public function store(DonorRequest $request)
    {
        $donor = new Donor;
        $donor->first_name = $request->first_name;
        $donor->last_name = $request->last_name;
        $donor->phone_number = $request->phone_number;
        $donor->age = $request->age;
        $donor->email = $request->email;
        $donor->blood_group = $request->blood_group;
        $donor->save();
        return response([
            'data' => new DonorResource($donor)

        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function show(Donor $donor)
    {

        return new DonorResource($donor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function edit(Donor $donor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donor $donor)
    {
        $donor->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donor $donor)
    {
        //
    }

    public function getBloodGroup()
    {
        return Donor::all();
    }

}

