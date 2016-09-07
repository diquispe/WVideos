<tr>
    <th scope="row">{{ $user->id }}</th>
    <td><a href="/user/{{ $user->id }}/edit">{{ $user->name }}</a></td>
    <td>{{ $user->level }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->created_at }}</td>
    <td>{{ $user->updated_at }}</td>
    <td><a href="/user/{{ $user->id }}/edit" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> EDITAR</a>
        <a href="/user/{{ $user->id }}/destroy" onclick="return confirm('Estás seguro que deseas eliminar el registro?');"  class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> ELIMINAR</a>
        </td>
</tr>