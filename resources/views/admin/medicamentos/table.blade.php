<div class="card-body p-0">
  <div class="table-responsive">
    <table class="table table-striped align-middle mb-0">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Presentación</th>
          <th>Indicaciones</th>
          <th>Efectos secundarios</th>
          <th>Imagen</th>
          <th class="text-center" style="width:160px">Acciones</th>
        </tr>
      </thead>
      <tbody>
      @foreach($medicamentos as $medicamento)
        <tr>
          <td>{{ $medicamento->nombre }}</td>
          <td>{{ $medicamento->presentacion }}</td>
          <td class="text-truncate" style="max-width:260px;">{{ $medicamento->indicaciones }}</td>
          <td class="text-truncate" style="max-width:260px;">{{ $medicamento->efectosSecundarios }}</td>
          <td>
            @if($medicamento->imagenMedicamento)
              <img src="{{ asset('storage/'.$medicamento->imagenMedicamento) }}" alt="img"
                   class="img-thumbnail" style="max-width:80px;">
            @else
              <span class="text-muted">—</span>
            @endif
          </td>
          <td class="text-center">
            <div class="btn-group btn-group-sm" role="group">
              <a class="btn btn-outline-info"
                 href="{{ route('admin.medicamentos.show', $medicamento->idMedicamento) }}"
                 title="Ver"><i class="fas fa-eye"></i></a>

              <a class="btn btn-outline-warning"
                 href="{{ route('admin.medicamentos.edit', $medicamento->idMedicamento) }}"
                 title="Editar"><i class="fas fa-edit"></i></a>

              {!! Form::open([
                    'route' => ['admin.medicamentos.destroy', $medicamento->idMedicamento],
                    'method' => 'delete',
                    'class' => 'd-inline form-delete'
                ]) !!}
                <button type="submit" class="btn btn-outline-danger"
                        onclick="return confirm('¿Eliminar este medicamento?')"
                        title="Eliminar">
                  <i class="fas fa-trash-alt"></i>
                </button>
              {!! Form::close() !!}
            </div>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>

  <div class="card-footer">
    {{ $medicamentos->links() }}
  </div>
</div>
