@extends('plantilla')

@section('seccion')
    <h1 style="margin-top: 30px">Mercadería</h1>

    @if (session('mensaje'))
      <div class="alert alert-success">{{ session('mensaje') }}</div>
    @endif

    <form action="{{ route('mercaderia.crear') }} " method="POST">
      @csrf
      <input type="text" name="Nombre" placeholder="Producto" class="form-control mb-2">
      <input type="text" name="Stock" placeholder="Stock" class="form-control mb-2">
      <input type="text" name="Precio" placeholder="Precio" class="form-control mb-2">
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
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
                @foreach($mercaderia as $item)
                    <tr>
                        <th scope="row">{{$item->id_mercaderia}}</th>
                        <td>{{$item->Nombre}}</td>
                        <td>{{$item->Stock}}</td>
                        <td>${{$item->Precio}}</td>
                        <td>@mdo</td>
                    </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
@endsection