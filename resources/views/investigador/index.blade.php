@extends('layouts.app')

@section('content')
<div class="container">
    
@if(Session::has('mensaje'))
{{ Session::get('mensaje')}}
@endif



<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Numero de Identificacion</th>
            <th>Teléfono</th>
            <th>Correo Institucional</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($investigadors as $investigador)
        <tr>
            <td>{{ $investigador->id}}</td>
            <td>{{ $investigador->Nombres}}</td>
            <td>{{ $investigador->Apellidos}}</td>
            <td>{{ $investigador->NumeroIdentificacion}}</td>
            <td>{{ $investigador->Telefono}}</td>
            <td>{{ $investigador->CorreoInstitucional}}</td>
            <td>
            
            <a href="{{url('/investigador/'.$investigador->id.'/edit')}}"class="btn btn-warning">
                Editar 
            </a>
            <form action="{{url('/investigador/'.$investigador->id)}}" class="d-inline" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input class="btn btn-danger"type="submit" onclick="return confirm('¿Quieres borrar?')"value="Borrar">

            </form>
            
        </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{url('investigador/create')}}" class="btn btn-success"> Registrar un Investigador</a>
</div>
@endsection