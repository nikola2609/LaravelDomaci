<?php

namespace App\Http\Controllers;

use App\Models\Prijava;
use Illuminate\Http\Request;
use App\Http\Resources\PrijavaResource;
use Illuminate\Support\Facades\Validator;

class PrijavaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prijave=Prijava::all();
        return PrijavaResource::collection($prijave);
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
            'student_id' => 'required|string|max:100',
            'ispit_id' => 'required|string|max:100',
            'ispitni_rok' => 'required|string',
            'datum_prijave' => 'required|date',
            
        ]);

        if ($validator->fails()) {
            return response()->json([$validator->errors()]);
        }

        $prijava = Prijava::create([
            'student_id' => $request->student_id,
            'ispit_id' => $request->ispit_id,
            'ispitni_rok' => $request->ispitni_rok,
            'datum_prijave' => $request->datum_prijave,
        ]);

        return response()->json(['Prijava je sačuvana!.', new PrijavaResource($prijava)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prijava  $prijava
     * @return \Illuminate\Http\Response
     */
    public function show(Prijava $prijava)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prijava  $prijava
     * @return \Illuminate\Http\Response
     */
    public function edit(Prijava $prijava)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prijava  $prijava
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prijava $prijava)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prijava  $prijava
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prijava $prijava)
    {
        $prijava->delete();
        return response()->json(['Prijava je obrisana!', new PrijavaResource($prijava)]);
    }
}
