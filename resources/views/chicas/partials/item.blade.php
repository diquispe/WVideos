<tr>
    <th scope="row">{{ $chica->id }}</th>
    <td><a href="">{{ $chica->name }} - {{ $chica->lastname }}</a></td>
    <td>{{ $chica->nickname }}</td>
    <td>{{ $chica->pais }}</td>
    <td>{{ $chica->created_at }}</td>
    <td>{{ $chica->updated_at }}</td>
    <td>
        <a href="/chica/{{$chica->id}}" target="_blank" title="VER CHICA" class="btn btn-info btn-xs" ><span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span> VER.</a>
        <a href="/chica/{{$chica->id}}/edit" title="EDITAR" class="btn btn-success btn-xs" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> EDIT.</a>
        <a href="/chica/{{$chica->id}}/destroy" title="ELIMINAR"  onclick="return confirm('Estás seguro que deseas eliminar el registro?');" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> ELIM.</a>
    </td>
</tr>