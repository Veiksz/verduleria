@extends('plantilla')

@section('seccion')
    <h1 style="margin-top: 30px">Distribuidor</h1>

    @if (session('mensaje'))
      <div class="alert alert-success">{{ session('mensaje') }}</div>
    @endif

    <form action="{{ route('distribuidor.crear') }} " method="POST">
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

      <input type="text" name="rutD" placeholder="Rut (sin digito verificador)" class="form-control mb-2" value='{{old('rutD')}}'>
      <input type="text" name="razonSocial" placeholder="Razón social" class="form-control mb-2" value='{{old('razonSocial')}}'>
      <input type="text" name="Direccion" placeholder="Dirección" class="form-control mb-2" value='{{old('Direccion')}}'>
      <button class="btn btn-success btn-block" type="submit">Agregar</button>
    </form>

    <div class='container my-4'>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Rut</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
                @foreach($distribuidor as $item)
                    <tr>
                        <th scope="row">{{$item->rutD}}</th>
                        <td>{{$item->razonSocial}}</td>
                        <td>{{$item->Direccion}}</td>
                        <td>
                          <a href="{{ route('distribuidor.editar', $item->rutD) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('distribuidor.eliminar', $item->rutD) }}" class="d-inline" method="POST">
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