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
    public function index()
    {
        $data['users'] = User::all();
        return view('user.index', $data);
    }

    /**
    *   Exibe cadastro de usuário
    */
    public function create()
    {
        return view('user.create');
    }

    /**
    *   Exibe edição de usuário
    */
    public function edit($id)
    {
        $data['user'] = User::findOrFail($id);
        return view('user.edit', $data);
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
        return redirect()->route('list')->with('success');
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

        return redirect()->route('list')->with('success');
    }

    /**
    *   Remove usuário
    */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete($id);
        return redirect()->route('list')->with('success');
    }

    public function showLogin()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $form = $request->validate([
            "email" => "required|email",
            "password" => "required|min:6"
        ]);

        $password = $form['password'];

        $user = User::where('email', $form['email'])->first();

        if( $user && Hash::check($password, $user->password) ) {
            return response()->json(["Logged" => true]);
        } else {
            return response()->json(["Logged" => false]);
        }
    }
}
