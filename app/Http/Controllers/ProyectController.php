<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyect;

class ProyectController extends Controller {
    
    public function create() {
        
        return view('auth.proyect');
    }

    public function store() {

        $this->validate(request(), [
            'name' => 'required',
            'descripcion' => 'required|email',
            'inicio' => 'inicio'
            'usuario' => 'confirmed'
        ]);
/**/
        $user = Proyect::create(request(['name', 'descripcion', 'inicio','usuario']));

       /* auth()->login($user);*/
        return redirect()->to('/');
    }
}