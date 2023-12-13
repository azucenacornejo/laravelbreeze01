@extends('PagPlantilla')

@section('titulo')
    <h1 class="display-4">PAGINA SEGUIMIENTO</h1>
@endsection

@section('seccion')
    @if(session('msj'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('msj') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
        </div>
    @endif

    <form action="{{ route('Estudiante.xRegistar') }}" method="post" class="d-grid gap-2">
        @csrf

        @error('codEst')
            <div class="alert alert-danger">
                El codigo es requerido
            </div>
        @enderror

       
        <input type="text" name="idEst" placeholder="Codigo" value="{{ old('idEst') }}" class="form-control mb-2">
      
        <select name="turMat" class="form-control mb-2">
            <option value="">Seleccione trabaja actualmente?..</option>
            <option value="1">SI</option>
            <option value="2">NO</option>
        </select>
       
        <select name="semMat" class="form-control mb-2">
            <option value="">Seleccione oficio actual</option>
            @for($i=0; $i < 12; $i++)
                <option value="{{$i}}"> {{$i}} cp</option>
            @endfor
        </select>
        <input type="date" name="fnaEst" placeholder="fecha" value="{{ old('fnaEst') }}" class="form-control mb-2">
        <select name="semMat" class="form-control mb-2">
            <option value="">Seleccione satisfaccion estudiantil</option>
            <option value="0">No esta satisfecho</option>
            <option value="1">Regular</option>
            <option value="2">Bueno</option>
            <option value="3">Muy bueno</option>
        </select>
        
        <button class="btn btn-primary" type="submit">Agregar</button>
    </form>
    <br/>

    <div class="btn btn-dark fs-3 fw-bold d-grid">Lista de siguimiento</div>
    <table class="table">
    </table>

    





    <h3>Lista</h3>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Trabaja Actualmente</th>
                <th scope="col">Oficio Actual</th>
                <th scope="col">Fecha</th>
                <th scope="col">satisfaccion estudiantil</th>
                <th scope="col">Modificar</th>

            </tr>
        </thead>
        <tbody>
            @foreach($xAlumnos as $item)
            <tr>
                <th scope="row"> {{ $item->id }}</th>
                <td>{{ $item->idSeg }}</td>
                <td>
                    <a href="{{ route('Estudiante.xDetalle', $item->id ) }}">
                        {{ $item->idEst }}, {{ $item->idEst }}
                    </a>
                </td>
                <td>{{ $item->traAct }} </td>   
                <td>{{ $item->ofiAct }} </td>
                <td>
                    <button type="submit" class="btn btn-danger btn-sn">x</button>
                    </form>
                    <a class="btn btn-warning btn-sm" >
                    ...A
                    </a>
                </td>
            </tr>
            @endforeach
        </body>
    </table>

    





    
    
@endsection 

