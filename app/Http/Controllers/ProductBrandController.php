<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductBrand;

class ProductBrandController extends Controller
{
    public function  addProductBrand()
    {
        return view('productBrand.add_product_brand');
    }
    public function listProductBrand()
    {
        $brands = ProductBrand::all();
        return view('productBrand.list_product_brand', compact('brands'));
    }

    public function saveProductBrand(Request $request)
    {
        $brand_name = $request->input('brand_name');
        $product_brand_desc = $request->input('product_brand_desc');
        $productBrand = new ProductBrand;
        $productBrand->brand_name = $brand_name;
        $productBrand->product_brand_desc = $product_brand_desc;
        $productBrand->save();
        return redirect()->route('listProductBrand');
    }

    public function deleteProductBrand($id)
    {
        $brand = ProductBrand::find($id);
        $brand->delete();
        return redirect()->route('listProductBrand');
    }

    public function editProductBrand($id)
    {
        $brand = ProductBrand::find($id);
        return view('productBrand.edit_product_brand', compact('brand'));
    }

    public function updateProductBrand($id, Request $request)
    {
        $productBrand = ProductBrand::find($id);
        $brand_name = $request->input('brand_name');
        $product_brand_desc = $request->input('product_brand_desc');
        
        $productBrand->brand_name = $brand_name;
        $productBrand->product_brand_desc = $product_brand_desc;
        $productBrand->save();
        return redirect()->route('listProductBrand');

    }
}
