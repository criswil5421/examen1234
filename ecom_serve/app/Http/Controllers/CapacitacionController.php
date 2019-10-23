<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Capacitacion;
class CapacitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $capacitaciones = Capacitacion::all(); 
        return response()->json($capacitaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Capacitacion::create($request->all());
        return response()->json(['success' => true]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $capacitacion= Capacitacion::findOrFail($id);
        
        return response()->json($capacitacion);
    }

    public function update(Request $request, $id)
    {
        //
        Capacitacion::findOrFail($id)->update($request->all());
            return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Capacitacion::findOrFail($id)->delete();
        return response()->json(['success' => true]);
    }
}
