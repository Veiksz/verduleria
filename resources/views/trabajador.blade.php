@extends('plantilla', ['title' => 'Trabajador'])

@section('seccion')
    <h1 style="margin-top: 30px">Trabajador</h1>

    @if (session('mensaje'))
      <div class="alert alert-success">{{ session('mensaje') }}</div>
    @endif

    <form action="{{ route('vendedor.crear') }} " method="POST">
      @csrf

      @error('Rut')
          <div class="alert alert-danger">Rut obligatorio</div>
      @enderror

      @error('Nombre')
          <div class="alert alert-danger">Nombre obligatorio</div>
      @enderror

      @error('Apellido')
          <div class="alert alert-danger">Apellido obligatorio</div>
      @enderror

      <input type="text" name="rutV" placeholder="Rut (sin digito verificador)" class="form-control mb-2" value='{{old('rutV')}}'>
      <input type="text" name="Nombre" placeholder="Nombre" class="form-control mb-2" value='{{old('Nombre')}}'>
      <input type="text" name="Apellido" placeholder="Apellido" class="form-control mb-2" value='{{old('Apellido')}}'>
      <button class="btn btn-success btn-block" type="submit">Agregar</button>
    </form>

    <div class='container my-4'>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Rut</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach($vendedor as $item)
                    <tr>
                        <th scope="row">{{$item->rutV}}</th>
                        <td>{{$item->Nombre}}</td>
                        <td>{{$item->Apellido}}</td>
                        <td>
                          <a href="{{ route('vendedor.editar', $item->rutV) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('vendedor.eliminar', $item->rutV) }}" class="d-inline" method="POST">
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