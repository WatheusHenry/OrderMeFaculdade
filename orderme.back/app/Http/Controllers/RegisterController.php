<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function check(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            return response()->json(['status' => true, 'message' => 'Login bem-sucedido']);
        }

        return response()->json(['status' => false, 'message' => 'Credenciais inválidas'], 401);
    }
}