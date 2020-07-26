@extends('plantilla')

@section('seccion')
    <h1 style="margin-top: 30px; margin-bottom: 30px;">Editar Vendedor "{{ $vendedor->Nombre }} {{ $vendedor->Apellido }}"</h1>

    @if (session('mensaje'))
        <div class="alert alert-success">{{ session('mensaje') }}</div>
    @endif

    <form action="{{ route('vendedor.modificar', $vendedor->rutV) }} " method="POST">
        @method('PUT')
        @csrf
  
        @error('Nombre')
            <div class="alert alert-danger">Nombre obligatorio</div>
        @enderror
  
        @error('Apellido')
            <div class="alert alert-danger">Apellido obligatorio</div>
        @enderror
  
        <input type="text" name="Nombre" placeholder="Nombre" class="form-control mb-2" value='{{ $vendedor->Nombre }}'>
        <input type="text" name="Apellido" placeholder="Apellido" class="form-control mb-2" value='{{ $vendedor->Apellido }}'>
        <button class="btn btn-warning btn-block" type="submit">Modificar</button>
        <a href="{{ route('trabajador') }}" class="btn btn-success btn-block">Volver</a>
      </form>

@endsection