<a href="{{ url('empleado/') }} ">Listado de empleados</a>
<br>
<br>
<h1>{{$modo}}</h1>
<br>


<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" name="Nombre" id="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:'' }}">
<br>

<label for="ApellidoPaterno">ApellidoPaterno</label>
<input type="text" name="ApellidoPaterno" name="ApellidoPaterno" id="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:'' }}">
<br>

<label for="ApellidoMaterno">ApellidoMaterno</label>
<input type="text" name="ApellidoMaterno" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:'' }}">
<br>

<label for="Correo">Correo</label>
<input type="text" name="Correo" name="Correo" id="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:'' }}">
<br>

<label for="Foto">Foto</label>
<br>
<img src="{{ isset($empleado->Foto)?asset('storage').'/'.$empleado -> Foto:'' }}" width="100" alt="">
<br>
<input type="file" name="Foto" name="Foto" id="Foto" value="{{ isset($empleado->Foto)?$empleado->Foto:'' }}" >
<br>
<br>
<input type="submit" name="Enviar"  value="{{ $modo }} empleado">