<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class MembersController extends Controller
{
    public function index()
    {
        return Inertia::render('Members/Login');
    }

    public function home(Request $request)
    {
        // validação
        if ($request->id == "teste" && $request->senha == "123") {
            return to_route('members.home');
        } else {
             return response()->json('Credenciais inválidas.');
        }
    }

    public function members() {
        return Inertia::render('Members/Home');
    }

    public function create() {
        return Inertia::render('Members/Register');
    }

    public function store() {
        // logica pra cadastro no bd
    }

    public function info() {
        return Inertia::render('Members/Info');
    }

    public function calendar() {
        return Inertia::render('Members/Calendar');
    }
    
    public function treasury() {
        return Inertia::render('Members/Treasury');
    }
}
