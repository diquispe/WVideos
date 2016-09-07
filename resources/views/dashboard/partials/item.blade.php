    <tr>
    <th scope="row">{{ $video->id }}</th>
    <td><a target="_blank" href="{{ route('videos.details', $video->url) }}/edit">{{ $video->title }}</a></td>
    <td>{{ $video->status }}</td>
    <td>{{ $video->category_id }}</td>
    <td>{{ $video->duracion }}</td>
    <td>{{ $video->created_at->format('d-m-Y') }}</td>
    <td>{{ $video->updated_at->format('d-m-Y') }}</td>
        <td>
            <a href="/video/{{$video->url}}" target="_blank" title="VER VIDEO" class="btn btn-info btn-xs" ><span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span> VER.</a>
            <a href="{{ route('videos.details', $video->getRouteKey()) }}/edit" title="EDITAR" class="btn btn-success btn-xs" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> EDIT.</a>
            <a href="{{ route('videos.details', $video->getRouteKey()) }}/destroy" title="ELIMINAR"  onclick="return confirm('Estás seguro que deseas eliminar el registro?');" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> ELIM.</a>
        </td>
</tr>

