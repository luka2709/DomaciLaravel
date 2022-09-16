<?php

namespace App\Http\Controllers;

use App\Models\Tim;
use Illuminate\Http\Request;
use App\Http\Resources\TimResource;
use Illuminate\Support\Facades\Validator;

class TimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timovi = Tim::all();
        return TimResource::collection($timovi);
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
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'ime_tima' => 'required|string',
            'region' => 'required|string',
            'drzava' => 'required|string',
            'vlasnik' => 'required|string'
        ]);
        
        if($validator->fails()){
            return response()->json([$validator->errors()]);
        }

        $tim = Tim::create([
            'ime_tima' => $request->ime_tima,
            'region' => $request->region,
            'drzava' => $request->drzava,
            'vlasnik' => $request->vlasnik,
        ]);

        return response()->json(['Tim je sacuvan!.', new TimResource($tim)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tim  $tim
     * @return \Illuminate\Http\Response
     */
    public function show(Tim $tim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tim  $tim
     * @return \Illuminate\Http\Response
     */
    public function edit(Tim $tim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tim  $tim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tim $tim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tim  $tim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tim $tim)
    {
        $tim->delete();
        return response()->json(['Tim je obrisan!', new TimResource($tim)]);
    }
}
