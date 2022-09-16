<?php

namespace App\Http\Controllers;

use App\Models\Igrac;
use Illuminate\Http\Request;
use App\Http\Resources\IgracResource;
use Illuminate\Support\Facades\Validator;

class IgracController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $igraci = Igrac::all();
        return IgracResource::collection($igraci);
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
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string',
            'prezime' => 'required|string',
            'summoner_name' => 'required|string',
            'pozicija' => 'required|string',
            'tim_id' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([$validator->errors()]);
        }

        $igrac = Igrac::create([
            'ime' => $request->ime,
            'prezime' => $request->prezime,
            'summoner_name' => $request->summoner_name,
            'pozicija' => $request->pozicija,
            'tim_id' => $request->tim_id,
        ]);

        return response()->json(['Igrac je sacuvan!.', new IgracResource($igrac)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Igrac  $igrac
     * @return \Illuminate\Http\Response
     */
    public function show(Igrac $igrac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Igrac  $igrac
     * @return \Illuminate\Http\Response
     */
    public function edit(Igrac $igrac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Igrac  $igrac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Igrac $igrac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Igrac  $igrac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Igrac $igrac)
    {
        $igrac->delete();
        return response()->json(['Igrac je obrisan', new IgracResource($igrac)]);
    }
}
