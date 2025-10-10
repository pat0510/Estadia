<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CreateUsuariosRequest;
use App\Http\Requests\UpdateUsuariosRequest;

class UsuarioController extends Controller
{
    public function index(Request $request)
    {
        $usuarios = Usuario::paginate(10);
        return view('admin.usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('admin.usuarios.create');
    }

    /**
     * Guarda un usuario nuevo.
     * - Valida con CreateUsuariosRequest
     * - Fuerza estadoCuenta = activo si no viene
     * - Hashea la contraseña
     */
    public function store(CreateUsuariosRequest $request)
    {
        $data = $request->validated();

        // Asegurar estado por defecto
        $data['estadoCuenta'] = $data['estadoCuenta'] ?? 'activo';

        // Hashear contraseña si viene (en create es required por las rules)
        if (!empty($data['contrasena'])) {
            $data['contrasena'] = Hash::make($data['contrasena']);
        }

        // Crea usando fillable del modelo
        Usuario::create($data);

        return redirect()
            ->route('admin.usuarios.index')
            ->with('success', 'Usuario creado correctamente.');
    }

    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('admin.usuarios.edit', compact('usuario'));
    }

    /**
     * Actualiza un usuario existente.
     * - Valida con UpdateUsuariosRequest (email único ignorando el propio)
     * - La contraseña es opcional; si viene, se hashea
     * - Si no quieres que se edite estadoCuenta desde el form, lo ignoramos
     */
    public function update(UpdateUsuariosRequest $request, $id)
    {
        $usuario = Usuario::findOrFail($id);

        $data = $request->validated();

        // Si no quieres permitir edición del estado desde este form:
        unset($data['estadoCuenta']);

        if (!empty($data['contrasena'])) {
            $data['contrasena'] = Hash::make($data['contrasena']);
        } else {
            unset($data['contrasena']);
        }

        $usuario->update($data);

        return redirect()
            ->route('admin.usuarios.index')
            ->with('success', 'Usuario actualizado correctamente.');
    }

    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('admin.usuarios.show', compact('usuario'));
    }

    public function destroy($id)
    {
        Usuario::destroy($id);
        return redirect()
            ->route('admin.usuarios.index')
            ->with('success', 'Usuario eliminado correctamente.');
    }
}
