<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Collaborator\RequestCreate;
use App\Http\Requests\Collaborator\RequestUpdate;
use App\Models\User;


class CollaboratorController extends Controller
{
    public function __construct(){
        $this->middleware('role:Admin');
    }

    public function index()
    {
        // $users = User::paginate(10);
        $users = User::whereHas('roles', function($query){
            $query->whereNotIn('name', ['Admin']);
        })->paginate(10);
        return view('admin.collaborator.index', ['users' => $users]);
    }

    public function create()
    {
        return view('admin.collaborator.create');
    }

    public function store(RequestCreate $request)
    {
        $data = $request->validated();

        $user = User::create($data);

        $user->roles()->attach(2);

        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit(User $user)
    {
        // $user = User::findOrFail($user);

        return view('admin.collaborator.edit', ['user' => $user]);
    }

    public function update(RequestUpdate $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);

        return redirect()->route('admin.collaborators.index');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.collaborators.index');
    }
}
