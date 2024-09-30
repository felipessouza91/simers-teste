<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
    *   Lista todos os usuários
    */
    public function show()
    {
        $data['users'] = User::all();

        return view('pages.user.show', $data);
    }

    /**
    *   Exibe cadastro de usuário
    */
    public function create()
    {
        return view('pages.user.create');
    }

    /**
    *   Exibe edição de usuário
    */
    public function edit($id)
    {
        $data['user'] = User::findOrFail($id);

        return view('pages.user.edit', $data);
    }


    /**
    *   Registra usuário
    */
    public function store(Request $request)
    {
        $form = $request->validate([
            "name"      => "required|string|min:4|max:20",
            "email"     => "required|string|email|unique:users",
            "password"  => "required|string|min:6",
            "cpf"       => "required|string|unique:users",
            "phone"     => "required|string",
            "birthdate" => "required|date"
        ]);

        $password = Hash::make($request->password);

        $form['password'] = $password;

        DB::transaction(function() use ($form) {
            User::create($form);
        });

        flash('Usuário adicionado com sucesso!', 'p-2 bg-success text-white');

        return redirect()->route('list');
    }

    /**
    *   Atualiza usuário
    */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $form = $request->validate([
            "name"      => "required|string|min:4|max:20",
            "email"     => "required|string|email",
            "password"  => "required|string|min:6",
            "cpf"       => "required|string",
            "phone"     => "required|string",
            "birthdate" => "required|date"
        ]);

        $form['password'] = Hash::make($form['password']);

        $user->update($form);

        flash('Usuário atualizado com sucesso!', 'p-2 bg-success text-white');

        return redirect()->route('list');
    }

    /**
    *   Remove usuário
    */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete($id);

        flash('Usuário excluído!', 'p-2 bg-danger text-white');

        return redirect()->route('list');
    }

}
