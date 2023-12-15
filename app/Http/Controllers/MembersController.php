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
        if ($request->id == "teste" && $request->senha == "123") {
            return Inertia::render('Members/Home');
        } else {
            return response()->json('Credenciais inválidas.');
        }
    }
}
