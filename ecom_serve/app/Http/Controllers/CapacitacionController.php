<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Capacitacion;
class CapacitacionController extends Controller
{
    public function index()
    {
        
        $capacitaciones = Capacitacion::all(); 
        return response()->json($capacitaciones);
    }
    public function create(Request $request)
    {
        Capacitacion::create($request->all());
        return response()->json(['success' => true]);
    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        $capacitacion= Capacitacion::findOrFail($id);
        
        return response()->json($capacitacion);
    }

    public function update(Request  $request, $id)
    {
        
        Capacitacion::findOrFail($id)->update($request->all());
            return response()->json(['success' => true]);
    }

    public function destroy($id)
    {
        Capacitacion::findOrFail($id)->delete();
        return response()->json(['success' => true]);
    }
}
