<tr>
    <th scope="row">{{ $anuncio->id }}</th>
    <td><a href="">{{ $anuncio->title }}</a></td>
    <td>{{ $anuncio->status }}</td>
    <td><a href="{{ $anuncio->url }}" target="_blank">ver enlace</a></td>
    <td><a href="/uploads/anuncios/{{ $anuncio->imagen }}" target="_blank">VER IMAGEN</a></td>
    <td>{{ $anuncio->posicion }}</td>
    <td>{{ $anuncio->pais }}</td>
    <td>{{ $anuncio->idioma }}</td>
    <td>{{ $anuncio->created_at->format('d-m-Y') }}</td>
    <td>{{ $anuncio->updated_at->format('d-m-Y') }}</td>
    <td>
        <a href="/anuncio/{{$anuncio->id}}" target="_blank" title="VER ANUNCIO" class="btn btn-info btn-xs" ><span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span> VER.</a>
        <a href="/anuncio/{{$anuncio->id}}/edit" title="EDITAR" class="btn btn-success btn-xs" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> EDIT.</a>
        <a href="/anuncio/{{$anuncio->id}}/destroy" title="ELIMINAR"  onclick="return confirm('Estás seguro que deseas eliminar el registro?');" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> ELIM.</a>
    </td>
</tr>