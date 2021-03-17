<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Session;
use DB;

class CategoryController extends Controller
{
    public function addCategoryProduct()
    {
        return view('categoryProduct.add_category_product');
    }

    public function listCategoryProduct(Request $request)
    {
        $keyword = $request->input('keyword');
        $categoryQuery = Category::query();
        if($keyword) {
            $categoryQuery->where('category_name', 'like', "%{$keyword}$");
        }
        // $categories = Category::all()->where();
        $categories = $categoryQuery->paginate(100);
        return view('categoryProduct.list_category_product', compact('categories'));
    }

    public function saveCategoryProduct(Request $request)
    {
        $category_name = $request->input('category_product_name');
        $category_desc = $request->input('category_product_desc');
        $category_status = $request->input('category_product_status');

        $category = new Category();
        $category->category_name = $category_name;
        $category->category_desc = $category_desc;
        $category->category_status = $category_status;
        $category->save();
        Session::put('message', 'Thêm danh mục thành công');
        return Redirect()->route('listCategoryProduct');
    }

    public function editCategoryProduct($category_id)
    {
        $category = Category::where('category_id', $category_id)->first();
        return view('categoryProduct.edit_category_product', compact('category')); 
    }

    public function updateCategoryProduct($category_id, Request $request)
    {
        $category = Category::where('category_id', $category_id)->first();
        $category_name = $request->input('category_product_name');
        $category_desc = $request->input('category_product_desc');
        $category_status = $request->input('category_product_status');

        $category->category_name = $category_name;
        $category->category_desc = $category_desc;
        $category->category_status = $category_status;

        $category->save();
        return Redirect()->route('listCategoryProduct');

    }

    public function deleteCategoryProduct($category_id)
    {
        
        $category = Category::where('category_id', $category_id)->first();
        $category->delete();
        return redirect()->route('listCategoryProduct');

    }
}
