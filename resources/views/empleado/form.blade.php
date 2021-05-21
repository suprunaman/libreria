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
<img src="{{ isset($empleado->Foto)?asset('storage').'/'.$empleado -> Foto:'' }}" width="100" alt="">
{{ isset($empleado->Foto)?$empleado->Foto:'' }}
<input type="file" name="Foto" name="Foto" id="Foto" value="{{ isset($empleado->Foto)?$empleado->Foto:'' }}" >
<br>

<input type="submit" name="Enviar"  value="Enviar datos">