<div>
    <table>
        <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Nome
                </th>
                <th>
                    E-mail
                </th>
                <th>
                    CPF
                </th>
                <th>
                    Telefone
                </th>
                <th>
                    Data de Nasc
                </th>
                <th>
                    Editar
                </th>
                <th>
                    Remover
                </th>
            </tr>
        </thead>
        <tbody>
            @isset($users)
                @foreach($users as $user)
                <tr>
                    <td>
                        {{ $user->id }}
                    </td>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td>
                        {{ $user->cpf }}
                    </td>
                    <td>
                        {{ $user->phone }}
                    </td>
                    <td>
                        {{ $user->birthdate }}
                    </td>
                    <td>
                        <form action="{{ route('edit', $user->id) }}">
                            @csrf
                            <input type="submit" value="editar">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="remover">
                        </form>
                    </td>
                </tr>
                @endforeach
            @endisset
        </tbody>
    </table>
    <div>
        <a href="{{ url('users/create') }}">Adicionar</a>
    </div>
</div>
