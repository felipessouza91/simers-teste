@extends('layouts.master')

<div class="container py-4">
    <div class="row">
        <div class="col-12">
            <h1>Lista de usuários</h1>
        </div>
        <div class="col-12">
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
                                <a href="{{ url('users/edit/'. $user->id) }}" class="btn btn-light">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-light">
                                        <i class="bi bi-trash text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    @endisset
                </tbody>
            </table>
            <div>
                <a href="{{ url('users/create') }}" class="btn btn-primary">Adicionar</a>
            </div>
        </div>
    </div>
</div>
