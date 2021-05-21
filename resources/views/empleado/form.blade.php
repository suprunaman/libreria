<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" name="Nombre" id="Nombre" value="{{ $empleado->Nombre}}">
<br>

<label for="ApellidoPaterno">ApellidoPaterno</label>
<input type="text" name="ApellidoPaterno" name="ApellidoPaterno" id="ApellidoPaterno" value="{{ $empleado->ApellidoPaterno}}">
<br>

<label for="ApellidoMaterno">ApellidoMaterno</label>
<input type="text" name="ApellidoMaterno" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ $empleado->ApellidoMaterno}}">
<br>

<label for="Correo">Correo</label>
<input type="text" name="Correo" name="Correo" id="Correo" value="{{ $empleado->Correo}}">
<br>

<label for="Foto">Foto</label>
<img src="{{ asset('storage').'/'.$empleado -> Foto }}" alt="">
<input type="file" name="Foto" name="Foto" id="Foto" value="{{ $empleado->Foto}}" >
<br>

<input type="submit" name="Enviar"  value="Enviar datos">