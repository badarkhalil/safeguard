<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display a listing of the products
    public function index()
    {
        try {
            $products = Product::all();
            return view('Admin.product.index', compact('products'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Unable to load products.');
        }
    }

    // Show the form for creating a new product
    public function create()
    {
        try {
            return view('Admin.product.create');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Unable to load create form.');
        }
    }

    // Store a newly created product in storage
    public function store(Request $request)
    {
        try {
            $request->validate([
                'product_name' => 'required|string|max:255',
                'product_description' => 'required|string',
                'qr_number' => 'required',
                'product_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);

            if($request->hasFile('product_image')) {
                $filename = ImageHelper::addImage($request->product_image, 'product_images');
            } else {
                $filename = null;
            }

            Product::create([
                'product_name' => $request->product_name,
                'product_description' => $request->product_description,
                'qr_number' => $request->qr_number,
                'product_image' => $filename,
            ]);

            return redirect()->back()->with('success', 'Product created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create product.');
        }
    }

    // Show the form for editing the specified product
    public function edit($id)
    {
        try {
            $product = Product::findOrFail($id);
            return view('Admin.product.edit', compact('product'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Unable to load edit form.');
        }
    }

    // Update the specified product in storage
    public function update(Request $request, $id)
    {
        try {
            $product = Product::findOrFail($id);

            $request->validate([
                'product_name' => 'required|string|max:255',
                'product_description' => 'required|string',
                'qr_number' => 'required|numeric',
                'product_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);

            if($request->hasFile('product_image')) {
                $filename = ImageHelper::addImage($request->product_image, 'product_images');
            } else {
                $filename = $product->product_image;
            }

            $product->update([
                'product_name' => $request->product_name,
                'product_description' => $request->product_description,
                'qr_number' => $request->qr_number,
                'product_image' => $filename,
            ]);

            return redirect()->back()->with('success', 'Product updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update product.');
        }
    }

    // Remove the specified product from storage
    public function destroy($id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->delete();
            return redirect()->back()->with('success', 'Product deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete product.');
        }
    }
}
