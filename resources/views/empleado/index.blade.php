@extends('layouts.app')

@section('content')
<div class="container">


@if (Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
    {{Session::get('mensaje')}}

</div>
@endif



<h3>
<a href="{{url('empleado/create')}}" class="btn btn-success" type="button">Registrar un nuevo empleado</button></a>
</h3>
</br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Foto</th>
            <th class="text-center">Nombre</th>
            <th class="text-center">Apellido Paterno</th>
            <th class="text-center">Apellido Materno</th>
            <th class="text-center" >Correo</th>
            <th class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($empleados as $empleado)
        <tr>
            <td>{{$empleado->id}}</td>

            <td>
            <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" width=200 alt="">
            </td>
            
            <td class="align-middle">{{$empleado->Nombre}}</td>
            <td class="align-middle">{{$empleado->ApellidoPaterno}}</td>
            <td class="align-middle">{{$empleado->ApellidoMaterno}}</td>
            <td class="align-middle">{{$empleado->Correo}}</td>
            <td class="align-middle"> 
            
            <a href="{{ url('/empleado/'.$empleado->id.'/edit/') }}" class="align-self-center">
                <button class="btn btn-warning">
                    Editar
                </button> 
            </a>

            <form action="{{ url('/empleado/'.$empleado->id) }}" class="d-inline" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('¿Estas seguro?')" class="btn btn-danger" value="Borrar">
            </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! $empleados->links() !!}

</div>
@endsection