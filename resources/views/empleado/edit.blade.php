


<form method="post" enctype="multipart/form-data" action="{{  url('/empleado/'.$empleado->id) }}">
    @csrf
    {{ method_field('PATCH') }}
    @include('empleado.form')   
</form>

