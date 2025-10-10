<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Usuario; // ✅ Modelo real
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Muestra la vista de registro
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Maneja una solicitud de registro entrante
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:50'],
            'apellido' => ['nullable', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:usuarios,email'],
            'contrasena' => ['required', 'confirmed', Rules\Password::defaults()],
            'fechaNacimiento' => ['nullable', 'date'],
            'sexo' => ['nullable', 'in:masculino,femenino,otro'],
            'telefono' => ['nullable', 'string', 'max:20'],
            'tipoUsuario' => ['required', 'in:administrador,medico,paciente'],
        ]);

        // ✅ Crea el usuario en tu tabla real
        $usuario = Usuario::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email' => $request->email, // 👈 coincide con tu base de datos
            'contrasena' => Hash::make($request->contrasena), // 🔒 encriptado
            'fechaNacimiento' => $request->fechaNacimiento,
            'sexo' => $request->sexo,
            'telefono' => $request->telefono,
            'tipoUsuario' => $request->tipoUsuario,
            'estadoCuenta' => 'activo',
        ]);

        // ✅ Evento y login automáticos
        event(new Registered($usuario));
        Auth::login($usuario);

        return redirect(RouteServiceProvider::HOME);
    }
}
