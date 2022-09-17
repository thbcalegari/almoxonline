<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manufactorer\RequestCreate;
use App\Http\Requests\Manufactorer\RequestUpdate;
use App\Models\Manufactorer;
use Illuminate\Http\Request;

class ManufactorerController extends Controller
{

    public function index()
    {
        $manufactorers = Manufactorer::paginate(20);

        return view('admin.product.manufactorer.index', ['manufactorers' => $manufactorers]);
    }

    public function create()
    {
        return view('admin.product.manufactorer.create');
    }

    public function store(RequestCreate $request)
    {
        $data = $request->validated();

        Manufactorer::create($data);

        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit(Manufactorer $manufactorer)
    {
        return view('admin.product.manufactorer.edit', ['manufactorer' => $manufactorer]);
    }

    public function update(RequestUpdate $request, Manufactorer $manufactorer)
    {
        $data = $request->validated();

        $manufactorer->update($data);

        return redirect()->route('admin.manufactorers.index');
    }

    public function destroy(Manufactorer $manufactorer)
    {
        $manufactorer->delete();

        return back();
    }
}
