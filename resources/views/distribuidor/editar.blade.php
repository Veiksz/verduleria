@extends('plantilla')

@section('seccion')
    <h1 style="margin-top: 30px; margin-bottom: 30px;">Editar distribuidor "{{ $distribuidor->razonSocial }}"</h1>

    @if (session('mensaje'))
        <div class="alert alert-success">{{ session('mensaje') }}</div>
    @endif

    <form action="{{ route('distribuidor.modificar', $distribuidor->rutD) }} " method="POST">
        @method('PUT')
        @csrf
  
        @error('Nombre')
            <div class="alert alert-danger">Razón social obligatoria</div>
        @enderror
  
        @error('Apellido')
            <div class="alert alert-danger">Dirección obligatoria</div>
        @enderror
  
        <input type="text" name="razonSocial" placeholder="Razón social" class="form-control mb-2" value='{{ $distribuidor->razonSocial }}'>
        <input type="text" name="Direccion" placeholder="Dirección" class="form-control mb-2" value='{{ $distribuidor->Direccion }}'>
        <button class="btn btn-warning btn-block" type="submit">Modificar</button>
        <a href="{{ route('distribuidor') }}" class="btn btn-success btn-block">Volver</a>
      </form>

@endsection