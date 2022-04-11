
    <h1>{{$modo}}</h1>

    @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
        <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
        </div>
    @endif

    <div class="form-group">
    <label for="Nombre">Introduzca su Nombre</label>
    <input class="form-control" type="text" name="Nombre"
    value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" id="Nombre">
    </div>

    <div class="form-group">
    <label for="ApellidoPaterno">Introduzca Primer Apellido</label>
    <input class="form-control" type="text" name="ApellidoPaterno"
    value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno') }}" id="ApellidoPaterno">
    </div>

    <div class="form-group">
    <label for="ApellidoMaterno">Introduzca Segundo Apellido</label>
    <input class="form-control" type="text" name="ApellidoMaterno"
    value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno') }}" id="ApellidoMaterno">
    </div>

    <div class="form-group">
    <label for="Correo">Introduzca su Direccion de Correo</label>
    <input class="form-control" type="text" name="Correo"
    value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}" id="Correo">
    </div>
    
    <div class="form-group">
    <label for="Foto">Seleccione la Fotografia</label></br>
    <input type="file" name="Foto" value="" id="Foto">
    @if (isset($empleado->Foto))
</br>
        <img src="{{ asset('storage').'/'.$empleado->Foto }}" width=200 alt="">    
    @endif
    </div>

    </br>
    <input type="submit" value="{{$modo}} Datos" class="btn btn-success">
    <a href="{{url('empleado/')}}" class="btn btn-primary" type="button">Regresar a Lista de Empleados</a>
    
