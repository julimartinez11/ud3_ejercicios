<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    // 1. GET /api/alumnos
    public function index()
    {
        return Alumno::all();
    }
    // 2. GET /api/alumnos/{id}
    public function show($id)
    {
        return Alumno::findOrFail($id);
    }
    // 3. POST /api/alumnos
    public function store(Request $request)
    {
        $alumno = Alumno::create([
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email')
        ]);
        return response()->json($alumno, 201);
    }
    // 4. PUT /api/alumnos/{id}
    public function update(Request $request, $id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->update($request->all());
        return response()->json($alumno, 200);
    }
    // 5. DELETE /api/alumnos/{id}
    public function destroy($id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->delete();
        return response()->json(null, 204); 
    }
}