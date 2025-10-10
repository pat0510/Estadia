<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $medicamento->nombre }}</p>
</div>

<!-- Presentacion Field -->
<div class="col-sm-12">
    {!! Form::label('presentacion', 'Presentación:') !!}
    <p>{{ $medicamento->presentacion }}</p>
</div>

<!-- Indicaciones Field -->
<div class="col-sm-12">
    {!! Form::label('indicaciones', 'Indicaciones:') !!}
    <p>{{ $medicamento->indicaciones }}</p>
</div>

<!-- Efectossecundarios Field -->
<div class="col-sm-12">
    {!! Form::label('efectosSecundarios', 'Efectos secundarios:') !!}
    <p>{{ $medicamento->efectosSecundarios }}</p>
</div>

<!-- Imagenmedicamento Field -->
<div class="col-sm-12">
    {!! Form::label('imagenMedicamento', 'Imagen del medicamento:') !!}
    @if($medicamento->imagenMedicamento)
        <div>
            <img src="{{ asset('storage/' . $medicamento->imagenMedicamento) }}" 
                 alt="Imagen del medicamento" 
                 style="max-width: 250px; border-radius: 10px; margin-top:10px;">
        </div>
    @else
        <p>No se ha subido ninguna imagen.</p>
    @endif
</div>

