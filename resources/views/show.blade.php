@extends('layout')
@section('title', 'Persona ' . $persona->cPerNombre . ' ' . $persona->cPerApellido)

@section('content')
<style>
.action-buttons {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
}

.action-button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Botón de edición en tono anaranjado */
.action-button.edit-button {
    background-color: #FFA500; /* Color anaranjado */
}

.action-button.edit-button:hover {
    background-color: #FF8C00; /* Tono más oscuro al pasar el mouse */
}

/* Botón de eliminación en tono anaranjado */
.action-button.delete-button {
    background-color: #FF4500; /* Color anaranjado rojizo */
}

.action-button.delete-button:hover {
    background-color: #FF6347; /* Tono más oscuro al pasar el mouse */
}

</style>


<div class="action-buttons">
    <h2>Persona </h2>
        <a href="{{ route('personas.edit', ['nPerCodigo' => $persona->nPerCodigo]) }}" class="action-button edit-button">Editar</a>
        <form action="{{ route('personas.destroy', ['nPerCodigo' => $persona->nPerCodigo]) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="action-button delete-button">Eliminar</button>
        </form>
    </div>

<table class="table">
    <tbody>
        <tr>
            <th>Código:</th>
            <td>{{ $persona->nPerCodigo }}</td>
        </tr>
        <tr>
            <th>Nombre:</th>
            <td>{{ $persona->cPerNombre }}</td>
        </tr>
        <tr>
            <th>Apellido:</th>
            <td>{{ $persona->cPerApellido }}</td>
        </tr>
        <tr>
            <th>Dirección:</th>
            <td>{{ $persona->cPerDireccion }}</td>
        </tr>
        <tr>
            <th>Fecha de Nacimiento:</th>
            <td>{{ $persona->dPerFecNac }}</td>
        </tr>
        <tr>
            <th>Edad:</th>
            <td>{{ $persona->nPerEdad }} años</td>
        </tr>
        <tr>
            <th>Sexo:</th>
            <td>{{ $persona->cPerSexo == 'Masculino' ? 'Masculino' : 'Femenino' }}</td>
        </tr>
        <tr>
            <th>Sueldo:</th>
            <td>${{ number_format($persona->nPerSueldo, 2) }}</td>
        </tr>
        <tr>
            <th>Código Aleatorio:</th>
            <td>{{ $persona->cPerRnd }}</td>
        </tr>
        <tr>
            <th>Estado:</th>
            <td>{{ $persona->nPerEstado == 1 ? '1' : '2' }}</td>
        </tr>
        <tr>
            <th>Creado:</th>
            <td>{{ $persona->created_at->diffForHumans() }}</td>
        </tr>
    </tbody>
</table>
@endsection
