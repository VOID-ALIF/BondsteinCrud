<?php
namespace Acme\CrudGenerator\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product; // Assuming you have a Product model

class ProductController extends Controller
{
    public function index()
    {
        // Your index method logic here...
        return view('products.index');
    }

    public function create()
    {
        // Your create method logic here...
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Your store method logic here...
        // Example: Create a new product in the database
        Product::create($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        // Your show method logic here...
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        // Your edit method logic here...
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        // Your update method logic here...
        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        // Your destroy method logic here...
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully.');
    }
}
