@extends ('fabricante.master')

@section ('titulopagina')


LISTADO GENERAL DE FABRICANTES
@endsection



@section('contenido')
@if(session('Éxito'))
<div class="table table-success">
    {{session('Éxito')}}
</div>
@endif
<table class="table">
    <thead class="table table-primary">
        <tr>
            <th scope="col">Razón Social</th>
            <th scope="col">Dirección</th>
            <th scope="col">Teléfono</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @forelse ($fabricantes as $fabricante)
        <tr>
            <td> {{$fabricante->rs}}</td>
            <td> {{$fabricante->direccion}}</td>
            <td> {{$fabricante->telefono}}</td>
            <td><a class="btn btn-primary" type="submit" href="/fabricantes/{{$fabricante->id}}"> Mostrar </a></td>
@cannot('isUser')
<td><a class="btn btn-primary" type="submit" href="/fabricantes/{{$fabricante->id}}/edit"> Editar </a> </td>
 <td>
    <form action="{{route('fabricantes.destroy',$fabricante->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button name="borrar" class="btn btn-danger" onclick="return confirm('¿Deseas borrar este fabricante?');" Type="submit" >borrar </button>
    @endcan
    </form>


        </tr>

        @empty
        <div class="alert alert-danger">
            No se han encontrado fabricantes
        </div>
        @endforelse
    </tbody>
</table>
@endsection