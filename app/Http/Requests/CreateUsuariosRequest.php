<?php

namespace App\Http\Requests;

use App\Models\Usuarios;
use Illuminate\Foundation\Http\FormRequest;

class CreateUsuariosRequest extends FormRequest
{
    
     public function authorize() { return true; }
     

    public function rules()
    {
        return [
            'nombre'          => ['bail','required','string','max:50','regex:/^[\p{L}\s\'\-áéíóúÁÉÍÓÚñÑ]+$/u'],
            'apellido'        => ['bail','required','string','max:50','regex:/^[\p{L}\s\'\-áéíóúÁÉÍÓÚñÑ]+$/u'],
            'email'           => ['bail','required','email','max:100','unique:Usuarios,email'],
            'contrasena'      => ['bail','required','string','min:8',
                                  'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\w\s]).{8,}$/',
                                  'confirmed'],
            'fechaNacimiento' => ['nullable','date','before_or_equal:today'],
            'telefono'        => ['nullable','regex:/^\d{10}$/'],
            // DESPUÉS (en minúsculas; debe coincidir con los values del <select>)
            'sexo'        => ['required','in:masculino,femenino,otro'],
            'tipoUsuario' => ['required','in:administrador,medico,paciente'],

            'estadoCuenta'    => ['sometimes','in:activo,inactivo'],
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'   => 'El nombre es obligatorio.',
            'nombre.regex'      => 'El nombre solo puede contener letras, espacios, apóstrofo y guiones.',
            'apellido.required' => 'El apellido es obligatorio.',
            'apellido.regex'    => 'El apellido solo puede contener letras, espacios, apóstrofo y guiones.',

            'email.required'    => 'El email es obligatorio.',
            'email.email'       => 'Proporciona un email válido.',
            'email.unique'      => 'Este email ya está registrado.',

            'contrasena.required' => 'La contraseña es obligatoria.',
            'contrasena.min'      => 'La contraseña debe tener al menos 8 caracteres.',
            'contrasena.regex'    => 'La contraseña debe incluir mayúsculas, minúsculas, números y un símbolo.',
            'contrasena.confirmed'=> 'Las contraseñas no coinciden.',

            'fechaNacimiento.date'              => 'La fecha de nacimiento no es válida.',
            'fechaNacimiento.before_or_equal'   => 'La fecha de nacimiento no puede ser futura.',

            'sexo.required'   => 'Selecciona el sexo.',
            'sexo.in'         => 'Valor de sexo inválido.',

            'telefono.regex'  => 'El teléfono debe tener exactamente 10 dígitos.',

            'tipoUsuario.required' => 'Selecciona el tipo de usuario.',
            'tipoUsuario.in'       => 'Tipo de usuario inválido.',
        ];
    }

    public function attributes()
    {
        return [
            'contrasena'      => 'contraseña',
            'fechaNacimiento' => 'fecha de nacimiento',
            'tipoUsuario'     => 'tipo de usuario',
        ];
    }
    
}

