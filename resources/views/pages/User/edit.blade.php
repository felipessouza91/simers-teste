@extends('layouts.default')

<div class="container py-4">
    <div class="row pb-2">
        <div class="col-8">
            <h1>Editar usuário</h1>
        </div>
        <div class="col-4 text-end m-auto">
           <a href="{{ url()->previous() }}" class="btn btn-light">Voltar</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('users.update', $user->id) }}" method="post">
                @csrf
                @method('PUT')
                @include('pages.user.form')
                <div class="form-group text-center py-2">
                    <input type="submit" value="Cadastrar" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
