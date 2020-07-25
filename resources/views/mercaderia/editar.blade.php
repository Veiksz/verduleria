@extends('plantilla')

@section('seccion')
    <h1 style="margin-top: 30px; margin-bottom: 30px;">Editar producto {{ $mercaderia->idm }}</h1>

    @if (session('mensaje'))
        <div class="alert alert-success">{{ session('mensaje') }}</div>
    @endif

    <form action="{{ route('mercaderia.modificar', $mercaderia->idm) }} " method="POST">
        @method('PUT')
        @csrf
  
        @error('Nombre')
            <div class="alert alert-danger">Nombre obligatorio</div>
        @enderror
  
        @error('Stock')
            <div class="alert alert-danger">Stock obligatorio</div>
        @enderror
  
        @error('Precio')
            <div class="alert alert-danger">Precio obligatorio</div>
        @enderror
  
        <input type="text" name="Nombre" placeholder="Producto" class="form-control mb-2" value='{{ $mercaderia->Nombre }}'>
        <input type="text" name="Stock" placeholder="Stock" class="form-control mb-2" value='{{ $mercaderia->Stock }}'>
        <input type="text" name="Precio" placeholder="Precio" class="form-control mb-2" value='{{ $mercaderia->Precio }}'>
        <button class="btn btn-warning btn-block" type="submit">Modificar</button>
        <a href="{{ route('mercaderia') }}" class="btn btn-success btn-block">Volver</a>
      </form>

@endsection