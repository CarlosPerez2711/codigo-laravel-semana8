@extends('layout')

@section('title','Editar Persona')

@section('content')
<table cellpadding='3' cellspaceing='5'>
<tr>
    <th colspan="4">Editar Persona</th>
</tr>
@include('partials.validation-errors')
<form action="{{ route('personas.update', $persona) }}" method="post">
@method('PATCH')
@include('partials.form',['btnText' => 'Actualizar'])
</form>
</table>
@endsection
