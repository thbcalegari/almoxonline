<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\RequestCreate;
use App\Http\Requests\Product\RequestUpdate;
use App\Models\Category;
use App\Models\Measure_unit;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::paginate(50);

        return view('admin.product.index', ['products' => $products]);
    }

    public function create()
    {
        $categories = Category::all();
        $measure_units = Measure_unit::all(); 

        return view('admin.product.create', ['categories' => $categories, 'measure_units' => $measure_units]);
    }

 
    public function store(RequestCreate $request)
    {
        $data = $request->validated();

        if ($request->hasFile('photo')) {            
            $fileName = Str::slug($data['name'], '_'). '.' . $data['photo']->extension();
            $data['photo'] = $request->photo->storeAs('products', $fileName, 'public');
        }

        Product::create($data);
        return back();
    }

    public function show($id)
    {
        //
    }


    public function edit(Product $product)
    {
        $categories = Category::all();
        $measure_units = Measure_unit::all(); 
        return view('admin.product.edit', ['categories' => $categories, 'measure_units' => $measure_units, 'product' =>$product]);
    }

    public function update(RequestUpdate $request, Product $product)
    {
        $data = $request->validated();

        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete($product->photo);
            $fileName = Str::slug($data['name'], '_'). '.' . $data['photo']->extension();
            $data['photo'] = $request->photo->storeAs('products', $fileName, 'public');
        }

        $product->update($data);

        return redirect()->route('admin.products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return back();
    }
}
