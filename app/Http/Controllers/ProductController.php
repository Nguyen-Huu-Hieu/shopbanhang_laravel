<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ProductBrand;
use App\Models\Product;

class ProductController extends Controller
{
    public function addProduct()
    {
        $category_product = Category::all();
        $product_brand = ProductBrand::all();
        return view('product.add_product', compact('category_product', 'product_brand'));
    }

    public function listProduct()
    {
        $products = Product::all();
        return view('product.list_product', compact('products'));
    }

    public function saveProduct(Request $request)
    {
        $product_name = $request->input('product_name');
        $category_product = $request->input('category_product');
        $product_brand = $request->input('product_brand');
        $category_product_desc = $request->input('category_product_desc');
        $product_content = $request->input('product_content');
        $product_image = $request->input('product_image');
        $product_price = $request->input('product_price');
        $product_status = $request->input('product_status');

        $product = new Product;
        $product->product_name = $product_name;
        $product->category_id = $category_product;
        $product->brand_id = $product_brand;
        $product->product_desc = $category_product_desc;
        $product->product_content = $product_content;
        $product->product_image = $product_image;
        $product->product_price = $product_price;
        $product->product_status = $product_status;
        
        $product_image = $request->file('product_image');
        $filename = uniqid() .time() . '.' . $request->file('product_image')->extension();
        $destinationPath = public_path() . '/images/';
        $request->file('product_image')->move($destinationPath, $filename);
        $product->product_image = $filename;
        $product->save();
        return redirect()->route('listProduct');

    }
}
