<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    @extends ('fabricante.master')

@section ('titulopagina')
INFORMACIÓN DE FABRICANTE CON NÚMERO DE ID: {{$fabricante->id}}

@endsection

@section('contenido')

<table class="table" >
<thead class="table-dark">
<tr>
<th >Razón Social</th>
<th >Dirección</th>
<th >Número de teléfono</th>
</tr>
</thead>
<tbody>
<tr>
            <td> {{$fabricante->rs}}</td>
            <td> {{$fabricante->direccion}}</td>
            <td> {{$fabricante->telefono}}</td>
</tr>

</tbody>
</table>
@endsection


</div>
