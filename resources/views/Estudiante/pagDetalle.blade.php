@extends('PagPlantilla')

@section('titulo')
    <h1 class="display-4">Pagina de lista</h1>
@endsection

@section('seccion')
    <h3> DETALLE ESTUDIANTE </h3>
    

    <p> Id:         {{ $xDetAlumnos->id }} </p>
    <p> praMod1:     {{ $xDetAlumnos->praMod1 }} </p>
    <p> praMod2:    {{ $xDetAlumnos->praMod2 }} </p>
    <p> praMod3:    {{ $xDetAlumnos->praMod3 }} </p>
    <p> udMod1:      {{ $xDetAlumnos->udMod1 }} </p>
    <p> udMod2:   {{ $xDetAlumnos->udMod2 }} </p>
    <p> udMod3:   {{ $xDetAlumnos->udMod3 }} </p>
    <p> ceridi:   {{ $xDetAlumnos->ceridi }} </p>
    <p> modTit   {{ $xDetAlumnos->modTit }} </p>
    <p> fecDet:   {{ $xDetAlumnos->fecDet }} </p>
    <p> estDet   {{ $xDetAlumnos->estDet }} </p>

@endsection