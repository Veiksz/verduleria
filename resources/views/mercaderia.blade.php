@extends('plantilla')

@section('seccion')
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
                        <td>{{$item->Precio}}</td>
                        <td>@mdo</td>
                    </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
@endsection