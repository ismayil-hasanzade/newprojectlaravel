<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.users.index', ['users' => User::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('backend.users.insert_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->is_admin = $request->has('is_admin');
        $user->is_active = $request->has('is_active');
        $user->save();
        return redirect('/users');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('backend.users.update_form', ['user' => $user]);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
        $user = User::query()->find($id);
        $user->fill($request->all());
        $user->save();
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/users');
    }

    public function passwordForm(User $user)
    {
        return view('backend.users.password_form', ['user' => $user]);

    }

    public function changepassword(User $user, UserRequest $request)
    {
        $user->password = $request->get('password');
        $user->save();
        return redirect('/users');
    }
}
