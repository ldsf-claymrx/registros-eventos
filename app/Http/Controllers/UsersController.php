<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UsersController extends Controller
{

    public function create() {
        return view('admin.createusers');
    }

    public function store(Request $request) {

        try {
            $Usuarios = new Usuario;
            $nombre = $request->input('nombre');
            $Usuarios->ape_paterno = $request->input('ape_paterno');
            $Usuarios->ape_materno = $request->input('ape_materno');
            $Usuarios->correo = $request->input('correo');
            $Usuarios->contra = Hash::make($request->input('contra'));

            $id_cargo = $request->input('cargo');
            $activo = $request->input('activo');
            $nivel = $request->input('nivel');

            

            if ($id_cargo == 0) {
                return response()->json([
                    'title' => 'Falta de información',
                    'text'  => 'Es necesario asignar un cargo a este usuario',
                    'icon'  => 'info'
                ]);
            } else if($activo == 0) {
                return response()->json([
                    'title' => 'Falta de información',
                    'text'  => 'Es necesario seleccionar si estará activo o no este usuario',
                    'icon'  => 'info'
                ]);
            } else if($nivel == 0) {
                return response()->json([
                    'title' => 'Falta de información',
                    'text'  => 'Es necesario seleccionar el nivel de permisos que tendrá este usuario',
                    'icon'  => 'info'
                ]);
            } else {

                $Usuarios->nombree = $nombre;
                $Usuarios->id_cargo = $id_cargo;
                $Usuarios->activo = $activo;
                $Usuarios->nivel = $nivel;

                $Usuarios->save();

                return response()->json([
                    'title' => 'Registro Exitoso',
                    'text'  => 'El usuario: '.$nombre.' ha sido agregado correctamente',
                    'icon'  => 'success'
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json(['responseText' => $th]);
        }
    }

    public function show() {
        
    }
}
