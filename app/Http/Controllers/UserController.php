<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function updateUser(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|min:4|max:200',
        ]);

        Auth::user()->update([
            'name' => $validated['name'],
        ]);

        return response()->json([
            'Perfil do usuario atualizado',
        ], Response::HTTP_ACCEPTED);
    }
}
