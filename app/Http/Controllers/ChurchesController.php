<?php

namespace App\Http\Controllers;

use App\Models\Iglesia;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ChurchesController extends Controller
{
    public function create() {
        return view('admin.creariglesia');
    }

    public function store(Request $request) {
        try {
            $Iglesia = new Iglesia;
            $nombre = $request->input('nombre');

            $Iglesia->nombre = $nombre;
            $Iglesia->direccion = $request->input('direccion');

            $Iglesia->save();

            return response()->json([
                'title' => 'Registro Exitoso',
                'text'  => 'La Iglesia: '.$nombre.' ha sido registrada correctamente',
                'icon'  => 'success'
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'title' => 'Error',
                'text'  => $th,
                'icon'  => 'error'
            ]);
        }
    }

    public function show() {
        $iglesias = Iglesia::all();
        return view('admin.mostrariglesias', compact('iglesias'));
    }

    public function update(Request $request, $id) {
        try {
            $Iglesia = Iglesia::find($id);
            $nombre = $request->input('nombre');

            $Iglesia->nombre = $nombre;
            $Iglesia->direccion = $request->input('direccion');

            $Iglesia->update();

            return redirect()->back();

        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }

    public function destroy($id) {
        try {
            $Iglesia = Iglesia::find($id);
            $Iglesia->delete();
            return redirect()->back();
            
        } catch (\Throwable $th) {
            return redirect()->back();
        }

    }
}
