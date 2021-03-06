@extends('plantilla')

@section('seccion')
    <h1 style="margin-top: 30px; margin-bottom: 30px;">Editar Cliente "{{ $cliente->Nombre }} {{ $cliente->Apellido }}"</h1>

    @if (session('mensaje'))
        <div class="alert alert-success">{{ session('mensaje') }}</div>
    @endif

    <form action="{{ route('clientes.modificar', $cliente->rutC) }} " method="POST">
        @method('PUT')
        @csrf
  
        @error('Nombre')
            <div class="alert alert-danger">Nombre obligatorio</div>
        @enderror
  
        @error('Apellido')
            <div class="alert alert-danger">Apellido obligatorio</div>
        @enderror
  
        <input type="text" name="Nombre" placeholder="Nombre" class="form-control mb-2" value='{{ $cliente->Nombre }}'>
        <input type="text" name="Apellido" placeholder="Apellido" class="form-control mb-2" value='{{ $cliente->Apellido }}'>
        <button class="btn btn-warning btn-block" type="submit">Modificar</button>
        <a href="{{ route('clientes') }}" class="btn btn-success btn-block">Volver</a>
      </form>

@endsection