

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mi lista de libros') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("¡Estás dentro! Felicidades, estos son los libros") }}
                </div>
            </div>
        </div>
    </div>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <table class="table" >
<thead class="table table-primary">
<tr>
<th scope="col">Titulo</th>
<th scope="col">Autor </th>
<th scope="col">Fecha Publicacion</th>
<th></th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
@forelse ($books as $book)
<tr>
<td> {{$book->titulo}}</td>
<td> {{$book->autor}}</td>
<td> {{$book->fechapub}}</td>
<td><a class="btn btn-primary" type="submit" href="/books/{{$book->id}}"> Mostrar </a></td>
<td><a class="btn btn-primary" type="submit" href="/books/{{$book->id}}/edit"> Editar </a> </td>
 <td>
    <form action="{{route('books.destroy',$book->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button name="borrar" class="btn btn-danger" onclick="return confirm('Deseas borrarlo?');" Type="submit" >borrar </button>
    </form>
    <!--<a class="btn btn-primary" type="submit" href="{{route('books.destroy',$book->id)}}"> Borrar </a> --></td> 


</tr>

@empty
<div class= "alert alert-danger">
    No se han encontrado libros
</div>
@endforelse
</tbody>
</table>

</x-app-layout>


