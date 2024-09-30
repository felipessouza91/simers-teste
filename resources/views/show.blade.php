@extends('layouts.default')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-12 text-center">
            @if(flash()->message)
                <div class="{{ flash()->class }}">
                    {{ flash()->message }}
                </div>
            @endif
        </div>
    </div>
    <div class="row pb-2">
        <div class="col-8">
            <h1>Lista de usuários</h1>
        </div>
        <div class="col-4 text-end m-auto">
            <button type="button" class="btn btn-light" onclick="window.location.reload()">
                <i class="bi bi-arrow-clockwise"></i>
            </button>
            <a href="{{ url('users/create') }}" class="btn btn-primary">Adicionar</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @if(isset($users) && $users->isNotEmpty())
            <table class="table">
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

                        @foreach($users as $user)
                        <tr>
                            <th>
                                {{ $user->id }}
                            </th>
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
                                <a href="{{ url('users/edit/'. $user->id) }}" class="btn btn-light">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                            <td>
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#confirm-remove">
                                    <i class="bi bi-trash text-danger"></i>
                                </button>
                            </td>
                            <div class="modal fade" id="confirm-remove" tabindex="-1" aria-labelledby="confirmRemove" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Confirme remover</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Remover usuário?</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Confirmar</button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </tr>
                        @endforeach
                </tbody>
            </table>
            @else
                <div class="row">
                    <div class="col-12 py-4">
                        Nenhum usuário cadastrado
                    </div>
                </div>
            @endif

        </div>
    </div>
</div>
@endsection
