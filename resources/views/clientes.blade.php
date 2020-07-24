@extends('plantilla')

@section('seccion')
    <h1 style="margin-top: 30px">Clientes</h1>
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
                @foreach($cliente as $item)
                    <tr>
                        <th scope="row">{{$item->rutC}}</th>
                        <td>{{$item->Nombre}}</td>
                        <td>{{$item->Apellido}}</td>
                        <td>@mdo</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection