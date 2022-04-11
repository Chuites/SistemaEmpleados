@extends('layouts.app')

@section('content')
<div class="container">

<h3>Agregar nuevo empleado</h3>

<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
    @csrf
    
    @include('empleado.form',['modo'=>'Crear']);

</form>
</div>
@endsection
