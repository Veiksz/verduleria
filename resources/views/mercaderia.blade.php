@extends('plantilla')

@section('seccion')
    <h1 style="margin-top: 30px">Mercadería</h1>

    @if (session('mensaje'))
      <div class="alert alert-success">{{ session('mensaje') }}</div>
    @endif

    <form action="{{ route('mercaderia.crear') }} " method="POST">
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

      <input type="text" name="Nombre" placeholder="Producto" class="form-control mb-2" value='{{old('Nombre')}}'>
      <input type="text" name="Stock" placeholder="Stock" class="form-control mb-2" value='{{old('Stock')}}'>
      <input type="text" name="Precio" placeholder="Precio" class="form-control mb-2" value='{{old('Precio')}}'>
      <button class="btn btn-success btn-block" type="submit">Agregar</button>
    </form>

    <div class='container my-4'>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Código</th>
                <th scope="col">Nombre</th>
                <th scope="col">Stock</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach($mercaderia as $item)
                    <tr>
                        <th scope="row">{{$item->idm}}</th>
                        <td>{{$item->Nombre}}</td>
                        <td>{{$item->Stock}}</td>
                        <td>${{$item->Precio}}</td>
                        <td>
                          <a href="{{ route('mercaderia.editar', $item->idm) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('mercaderia.eliminar', $item->idm) }}" class="d-inline" method="POST">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
@endsection