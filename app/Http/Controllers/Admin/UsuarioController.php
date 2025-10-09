<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(Request $request)
    {
        // 10 registros por página (puedes ajustar el número)
        $usuarios = Usuario::paginate(10);
        return view('admin.usuarios.index')->with('usuarios', $usuarios);
    }


    public function create()
    {
        return view('admin.usuarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'email' => 'required|email|unique:Usuarios,email',
            'contrasena' => 'required|string|min:6',
            'tipoUsuario' => 'required|in:administrador,medico,paciente',
            'estadoCuenta' => 'required|in:activo,inactivo'
        ]);

        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->email = $request->email;
        $usuario->contrasena = bcrypt($request->contrasena);
        $usuario->fechaNacimiento = $request->fechaNacimiento;
        $usuario->sexo = $request->sexo;
        $usuario->telefono = $request->telefono;
        $usuario->tipoUsuario = $request->tipoUsuario;
        $usuario->estadoCuenta = $request->estadoCuenta;
        $usuario->save();

        return redirect()->route('admin.usuarios.index')->with('success', 'Usuario registrado correctamente.');
    }

    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('admin.usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:50',
            'email' => 'required|email|unique:Usuarios,email,' . $usuario->idUsuario . ',idUsuario',
            'tipoUsuario' => 'required|in:administrador,medico,paciente',
            'estadoCuenta' => 'required|in:activo,inactivo'
        ]);

        $usuario->update([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'fechaNacimiento' => $request->fechaNacimiento,
            'sexo' => $request->sexo,
            'telefono' => $request->telefono,
            'tipoUsuario' => $request->tipoUsuario,
            'estadoCuenta' => $request->estadoCuenta,
        ]);

        if ($request->filled('contrasena')) {
            $usuario->contrasena = bcrypt($request->contrasena);
            $usuario->save();
        }

        return redirect()->route('admin.usuarios.index')->with('success', 'Usuario actualizado correctamente.');
    }

    public function show($id)
    {
        $usuario = \App\Models\Usuario::findOrFail($id); // usa tu PK
        return view('admin.usuarios.show', compact('usuario'));
    }

    public function destroy($id)
    {
        Usuario::destroy($id);
        return redirect()->route('admin.usuarios.index')->with('success', 'Usuario eliminado correctamente.');
    }
}
