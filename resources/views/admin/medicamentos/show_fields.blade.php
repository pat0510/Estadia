<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $medicamentos->nombre }}</p>
</div>

<!-- Presentacion Field -->
<div class="col-sm-12">
    {!! Form::label('presentacion', 'Presentacion:') !!}
    <p>{{ $medicamentos->presentacion }}</p>
</div>

<!-- Indicaciones Field -->
<div class="col-sm-12">
    {!! Form::label('indicaciones', 'Indicaciones:') !!}
    <p>{{ $medicamentos->indicaciones }}</p>
</div>

<!-- Efectossecundarios Field -->
<div class="col-sm-12">
    {!! Form::label('efectosSecundarios', 'Efectossecundarios:') !!}
    <p>{{ $medicamentos->efectosSecundarios }}</p>
</div>

<!-- Imagenmedicamento Field -->
<div class="col-sm-12">
    {!! Form::label('imagenMedicamento', 'Imagenmedicamento:') !!}
    <p>{{ $medicamentos->imagenMedicamento }}</p>
</div>

