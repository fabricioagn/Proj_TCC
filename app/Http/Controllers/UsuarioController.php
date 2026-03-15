<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function index()
    {
        return view('usuarios.index');
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function show($id)
    {
        return "Mostrando usuário " . $id;
    }

    public function edit($id)
    {
        return "Editar usuário " . $id;
    }

    public function update(Request $request, $id)
    {
        return "Usuário atualizado";
    }

    public function destroy($id)
    {
        return "Usuário deletado";
    }

    public function registrar()
    {
        return view('registrar');
    }

    public function store(Request $request)
    {

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect('/login');

    }

    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect('/home');
        }

        return back()->withErrors([
            'email' => 'Email ou senha inválidos'
        ]);
    }

    public function home()
    {
        return view('home');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

}
