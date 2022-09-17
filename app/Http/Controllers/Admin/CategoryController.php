<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\RequestCreate;
use App\Http\Requests\Category\RequestUpdate;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::paginate(10);
        return view('admin.product.category.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('admin.product.category.create');
    }

    public function store(RequestCreate $request)
    {
        $data = $request->validated();

        Category::create($data);

        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('admin.product.category.edit', ['category' => $category]);
    }

    public function update(RequestUpdate $request, Category $category)
    {
        $data = $request->validated();

        $category->update($data);

        return redirect()->route('admin.categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return back();
    }
}
