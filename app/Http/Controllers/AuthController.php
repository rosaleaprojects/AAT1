<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
 
class AuthController extends Controller
{
    //Mostrar un formulario de autenticación
    public function showLoginForm()
    {
        return view ('login');
    }
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
 
            if(Auth::user()->role === 'admin'){
                return redirect('/productos');
            }
            return redirect('/user');
        }
        return back()->withErrors([
            'email' => 'Credenciales incorrectas.',
        ]) -> onlyInput('email');
    }
    //cerrar sesión
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}