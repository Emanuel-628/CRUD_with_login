
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/empleado') }}" method="post" enctype = "multipart/form-data">
@csrf <!-- Clave de seguridad de laravel-->

@include('empleado.form',['modo'=>'Crear']);

</form>
</div>
@endsection