@extends('PagPlantilla')

@section('titulo')
    <h1 class="display-4">Pagina de lista</h1>
@endsection

@section('seccion')
    <h3> DETALLE  </h3>
    

    <p> idSeg:       {{ $xDetAlumnos->idSeg }} </p>
    <p> idEst:     {{ $xDetAlumnos->idEst }} </p>
    <p> traAct:    {{ $xDetAlumnos->traAct }} </p>
    <p> ofiAct:    {{ $xDetAlumnos->ofiAct}} </p>
    <p> satEst:      {{ $xDetAlumnos->satEst }} </p>
    <p> fecSeg:   {{ $xDetAlumnos->fecSeg }} </p>
    <p> estSeg:   {{ $xDetAlumnos->estSeg }} </p>

@endsection