<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create-account');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|min:2|max:200',
            'email' => 'required|min:5|max:200|email',
            'password' => 'required|min:2|max:200'
        ]);

        try{
            if ($user->where('email', $validated['email'])->exists()){
                return 'Usuário já foi cadastrado!';
            } else {
                $user = $user->fill($validated);
                $user->password = Hash::make($validated['password']);
                $user->save();

                return 'usuário cadastrado com sucesso!';
            }
        } catch(\Exception $ex) {
            //$ex->getMessage();
            return "Ocorreu algum problema ao realizar a inserção!";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}