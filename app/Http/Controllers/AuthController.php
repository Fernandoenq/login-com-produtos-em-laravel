<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function signup(Request $request)//vem com o form
    {
        User::create([ //chamo o create do model user para inserir no BD
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/login');
    }

    public function signin(Request $request)
    {
        $credentials = $request->only('email', 'password');//do formulário que veio lá pego apenas o email e a senha, 
        //assim previno de pegar lixos ou coisas amais de usuários espertinhos
        
        if(auth()->attempt($credentials)){//pega os dados e verifica se bate no BD
            return redirect('/dashboard');
        }
        return redirect('/login');
    }

    public function logout()
    {
        auth()->logout();//faz o logout
        return redirect('/login');
    }

    
}
