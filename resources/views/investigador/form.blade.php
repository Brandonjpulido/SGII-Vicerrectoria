<h1>{{$modo}} investigador</h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
<ul>@foreach($errors->all() as $error)
         <li>{{$error}}</li>
    @endforeach
</ul>
    </div>

    
@endif

<div class="form-group">
<label for="Nombres"> Nombres *</label>
<input type="text" class="form-control" name="Nombres" value="{{ isset($investigador->Nombres) ?$investigador->Nombres:old('Nombres') }}" id="Nombres">
<br>
</div>
<div class="form-group">
<label for="Apellidos"> Apellidos *</label>
<input type="text" class="form-control"name="Apellidos" value="{{ isset($investigador->Apellidos) ?$investigador->Apellidos:old('Apellidos') }}" id="Apellidos">
<br>
</div>
<div class="form-group">
<label for="NumeroIdentificacion"> Numero de Identificación *</label>
<input type="text" class="form-control"name="NumeroIdentificacion" value="{{ isset($investigador->NumeroIdentificacion) ?$investigador->NumeroIdentificacion:old('NumeroIdentificacion') }}" id="NumeroIdentificacion">
<br>
</div>
<div class="form-group">
<label for="Telefono"> Teléfono *</label>
<input type="text" class="form-control"name="Telefono" value="{{ isset($investigador->Telefono) ?$investigador->Telefono:old('Telefono') }}" id="Telefono">
<br>
</div>
<div class="form-group">
<label for="CorreoInstitucional"> Correo Institucional *</label>
<input type="text" class="form-control"name="CorreoInstitucional" value="{{ isset($investigador->CorreoInstitucional) ?$investigador->CorreoInstitucional:old('CorreoInstitucional') }}" id="CorreoInstitucional">
<br>
</div>
<input class="btn btn-warning" type="submit" value="{{$modo}} datos">
<br>
<br>
<a class="btn btn-success" href="{{url('investigador/')}}"> Regresar</a>