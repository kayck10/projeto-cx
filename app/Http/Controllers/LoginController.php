<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
   public function login() {
    return view('auth.login');
   }

   public function auth(Request $request) {

      Session::flash('mensagem.falha', 'Cpf Inválido');
      if (auth()->attempt(['cpf' => $request->cpf, 'password' => $request->password])){
         return to_route('conta');
      }
      else {
         return redirect()->back()
         ->with('mensagem.falha', 'Cpf Inválido');
      }
   }

}
