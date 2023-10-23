<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class Login extends BaseController
{
    public function index()
    {
        session()->remove('user');
        return view('login');
    }

    public function store()
    {

        $validated = $this->validate(
            [
                'email' => 'required|valid_email',
                'password' => 'required'
            ],
            [
                'email' => [
                    'required' => 'O email é obrigatório!',
                    'valid_email' => 'O email tem que ser válido!'
                ],
                'password' => [
                    'required' => 'A senha é obrigatória!'
                ]
            ]
        );

        if (!$validated) {

            // redireciona para a pagina de login com dados de para sessao
            return redirect()->route('login')->with('errors', $this->validator->getErrors());
        }
        $user = new User();
        $userFound = $user->select(
            'id,firstName,lastName,email,password'
        )->where('email', $this->request->getPost('email'))->first();

        if (!$userFound || !password_verify($this->request->getPost('password'), $userFound->password)) {
            //$this->validator->setError('email', 'Usuario nao encontrado!');
            return redirect()->route('login')->with('message_error', 'Email ou senha incorretos!');
        }
        unset($userFound->password);
        session()->set('user', $userFound);
        return redirect()->route('home');
    }

    public function destroy()
    {
        session()->destroy();
        return redirect()->route('login');
    }
}
