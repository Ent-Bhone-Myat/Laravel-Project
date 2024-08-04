<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    //Product Page
    public function page()
    {
        $data = Category::get();
        return view('admin.product', compact('data'));
    }

    // Product Create
    public function create(Request $request)
    {
        $this->vali($request);
        $data = $this->dataArrange($request);
        if ($request->hasFile('productImage')) {
            $imageName = uniqid() . $request->file('productImage')->getClientOriginalName();
            $request->file('productImage')->storeAs('public/products', $imageName);
            $data['image'] = $imageName;
        }
        Product::create($data);
        return back()->with(['success' => 'product creation success']);
    }

    // Product List
    public function list()
    {
        $data = Product::select('products.*', 'categories.name as category_name')
            ->leftJoin('categories', 'categories.id', 'products.category_id')
            ->paginate(5);
        return view('admin.productList', compact('data'));
    }

    //Product Deatil
    public function detail($id)
    {
        $data = Product::where('products.id', $id)
            ->select('products.*', 'categories.name as category_name')
            ->leftJoin('categories', 'categories.id', 'products.category_id')
            ->first();
        return view('admin.productDetail', compact('data'));
    }

    // Product Edit
    public function edit($id)
    {
        $productData = Product::where('id', $id)->first();
        $categoryData = Category::get();
        return view('admin.productEdit', compact('productData', 'categoryData'));
    }

    // Product Update
    public function update($id, Request $request)
    {
        $this->vali($request);
        $data = $this->dataArrange($request);

        // Product Image Store
        if ($request->hasFile('productImage')) {
            $dbImage = Product::where('id', $id)->value('image');
            // Delete old image from storage folder
            if ($dbImage != NULL) {
                Storage::delete('public/products/' . $dbImage);
            }
            $imageName = uniqid() . $request->file('productImage')->getClientOriginalName();
            $request->file('productImage')->storeAs('public/products', $imageName);

            $data['image'] = $imageName;

            Product::where('id', $id)->update($data);
            return back()->with(['success' => 'Product update success']);
        }
    }

    // Product Delete
    public function delete($id)
    {
        $dbImage = Product::where('id', $id)->value('image');
        if($dbImage != NULL){
            Storage::delete('public/products/' . $dbImage);
        }
        Product::where('id', $id)->delete();
        return back()->with(['success' => 'Product delete success']);
    }

    // Private Function for Arrange
    private function dataArrange($request)
    {
        return [
            'name' => $request->productName,
            'series' => $request->productSeries,
            'category_id' => $request->categoryId,
            'description' => $request->productDescription,
            'price' => $request->productPrice,
        ];
    }

    // Private Function for Validation
    private function vali($request)
    {
        $rules = [
            'productName' => 'required',
            'productSeries' => 'required',
            'categoryId' => 'required',
            'productDescription' => 'required',
            'productPrice' => 'required',
            'productImage' => 'image | mimes:jpeg,jpg,png',

        ];
        Validator::make($request->all(), $rules)->validate();
    }
}
