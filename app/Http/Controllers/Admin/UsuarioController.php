<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Mostrar lista paginada de usuarios
     */
    public function index(Request $request)
    {
        $usuarios = Usuario::paginate(10); // Puedes ajustar la cantidad
        return view('admin.usuarios.index')->with('usuarios', $usuarios);
    }

    /**
     * Mostrar formulario para crear usuario
     */
    public function create()
    {
        return view('admin.usuarios.create');
    }

    /**
     * Guardar un nuevo usuario en la base de datos
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'       => 'required|string|max:50',
            'email'        => 'required|email|unique:Usuarios,email',
            'contrasena'   => 'required|string|min:6',
            'tipoUsuario'  => 'required|in:administrador,medico,paciente',
            'estadoCuenta' => 'required|in:activo,inactivo'
        ]);

        $usuario = new Usuario();
        $usuario->nombre          = $request->nombre;
        $usuario->apellido        = $request->apellido;
        $usuario->email           = $request->email; // ✅ cambiado de correo → email
        $usuario->contrasena      = bcrypt($request->contrasena);
        $usuario->fechaNacimiento = $request->fechaNacimiento;
        $usuario->sexo            = $request->sexo;
        $usuario->telefono        = $request->telefono;
        $usuario->tipoUsuario     = $request->tipoUsuario;
        $usuario->estadoCuenta    = $request->estadoCuenta;
        $usuario->save();

        return redirect()
            ->route('admin.usuarios.index')
            ->with('success', 'Usuario registrado correctamente.');
    }

    /**
     * Mostrar formulario de edición de usuario
     */
    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('admin.usuarios.edit', compact('usuario'));
    }

    /**
     * Actualizar usuario existente
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);

        $request->validate([
            'nombre'       => 'required|string|max:50',
            'email'        => 'required|email|unique:Usuarios,email,' . $usuario->idUsuario . ',idUsuario', // ✅ actualizado
            'tipoUsuario'  => 'required|in:administrador,medico,paciente',
            'estadoCuenta' => 'required|in:activo,inactivo'
        ]);

        $usuario->update([
            'nombre'          => $request->nombre,
            'apellido'        => $request->apellido,
            'email'           => $request->email, // ✅ actualizado
            'fechaNacimiento' => $request->fechaNacimiento,
            'sexo'            => $request->sexo,
            'telefono'        => $request->telefono,
            'tipoUsuario'     => $request->tipoUsuario,
            'estadoCuenta'    => $request->estadoCuenta,
        ]);

        // Si el usuario envía una nueva contraseña
        if ($request->filled('contrasena')) {
            $usuario->contrasena = bcrypt($request->contrasena);
            $usuario->save();
        }

        return redirect()
            ->route('admin.usuarios.index')
            ->with('success', 'Usuario actualizado correctamente.');
    }

    /**
     * Mostrar detalles de un usuario
     */
    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('admin.usuarios.show', compact('usuario'));
    }

    /**
     * Eliminar un usuario
     */
    public function destroy($id)
    {
        Usuario::destroy($id);
        return redirect()
            ->route('admin.usuarios.index')
            ->with('success', 'Usuario eliminado correctamente.');
    }
}
