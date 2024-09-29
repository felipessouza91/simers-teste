@extends('layouts.master')

<div class="container py-4">
    <div class="row">
        <div class="col-12">
            <h1>Editar usuário</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('users.update', $user->id) }}" method="post">
                @csrf
                @method('PUT')
                @include('user.form')
                <div class="form-group text-center py-2">
                    <input type="submit" value="Cadastrar" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
