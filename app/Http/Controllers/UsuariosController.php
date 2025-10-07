<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsuariosRequest;
use App\Http\Requests\UpdateUsuariosRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\UsuariosRepository;
use Illuminate\Http\Request;
use Flash;

class UsuariosController extends AppBaseController
{
    /** @var UsuariosRepository $usuariosRepository*/
    private $usuariosRepository;

    public function __construct(UsuariosRepository $usuariosRepo)
    {
        $this->usuariosRepository = $usuariosRepo;
    }

    /**
     * Display a listing of the Usuarios.
     */
    public function index(Request $request)
    {
        $usuarios = $this->usuariosRepository->paginate(10);

        return view('usuarios.index')
            ->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new Usuarios.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created Usuarios in storage.
     */
    public function store(CreateUsuariosRequest $request)
    {
        $input = $request->all();

        $usuarios = $this->usuariosRepository->create($input);

        Flash::success('Usuarios saved successfully.');

        return redirect(route('usuarios.index'));
    }

    /**
     * Display the specified Usuarios.
     */
    public function show($id)
    {
        $usuarios = $this->usuariosRepository->find($id);

        if (empty($usuarios)) {
            Flash::error('Usuarios not found');

            return redirect(route('usuarios.index'));
        }

        return view('usuarios.show')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for editing the specified Usuarios.
     */
    public function edit($id)
    {
        $usuario = \App\Models\Usuario::findOrFail($id);
        return view('admin.usuarios.edit', compact('usuario'));
    }


    /**
     * Update the specified Usuarios in storage.
     */
    public function update($id, UpdateUsuariosRequest $request)
    {
        $usuarios = $this->usuariosRepository->find($id);

        if (empty($usuarios)) {
            Flash::error('Usuarios not found');

            return redirect(route('usuarios.index'));
        }

        $usuarios = $this->usuariosRepository->update($request->all(), $id);

        Flash::success('Usuarios updated successfully.');

        return redirect(route('usuarios.index'));
    }

    /**
     * Remove the specified Usuarios from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $usuarios = $this->usuariosRepository->find($id);

        if (empty($usuarios)) {
            Flash::error('Usuarios not found');

            return redirect(route('usuarios.index'));
        }

        $this->usuariosRepository->delete($id);

        Flash::success('Usuarios deleted successfully.');

        return redirect(route('usuarios.index'));
    }
}
