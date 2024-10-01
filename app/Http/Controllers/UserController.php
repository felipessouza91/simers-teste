<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
    *   Lista todos os usuários
    */
    public function show()
    {
        $data['users'] = User::all();

        return view('show', $data);
    }

    /**
    *   Exibe cadastro de usuário
    */
    public function create()
    {
        return view('create');
    }

    /**
    *   Exibe edição de usuário
    */
    public function edit($id)
    {
        $data['user'] = User::findOrFail($id);

        $data['user']['birthdate'] = Carbon::parse( $data['user']['birthdate']  )->format('d/m/Y');

        return view('edit', $data);
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
            "birthdate" => "required"
        ]);

        $form['birthdate'] = Carbon::createFromFormat('d/m/Y', $form['birthdate'])->format('Y-m-d');

        $password = Hash::make($request->password);

        $form['password'] = $password;

        DB::transaction(function() use ($form) {
            User::create($form);
        });

        flash('Usuário adicionado com sucesso!', 'alert alert-success');

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
            "birthdate" => "required"
        ]);

        $form['birthdate'] = Carbon::createFromFormat('d/m/Y', $form['birthdate'])->format('Y-m-d');

        $form['password'] = Hash::make($form['password']);

        $user->update($form);

        flash('Usuário atualizado com sucesso!', 'alert alert-success');

        return redirect()->route('list');
    }

    /**
    *   Remove usuário
    */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete($id);

        flash('Usuário excluído!', 'alert alert');

        return redirect()->route('list');
    }

}
