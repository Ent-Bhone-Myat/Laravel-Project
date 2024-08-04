<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    //Category Page
    public function page()
    {
        return view('admin.category');
    }

    // Category
    public function create(Request $request)
    {
        // Validation
        $this->vali($request);
        $data = $this->dataArrange($request);
        Category::create($data);
        return back()->with(['success' => 'Category Creation Success']);
    }

    // Category List
    public function list()
    {
        $data = Category::paginate(3);
        return view('admin.categoryList', compact('data'));
    }

    // Category Edit
    public function edit($id)
    {
        $data = Category::where('id', $id)->first();
        return view('admin.categoryEdit', compact('data'));
    }

    // Category Update
    public function update($id, Request $request)
    {
        $this->vali($request);
        $data = $this->dataArrange($request);
        Category::where('id', $id)->update($data);
        return redirect()->route('category.list')->with(['success' => 'Category Update Success']);
    }

    // Category Delete
    public function delete($id){
        Category::where('id', $id)->delete();
        return back()->with(['success' => 'Category Delete Success']);
    }

    // Data Arrange
    private function dataArrange($request)
    {
        return [
            'name' => $request->categoryName,
            'description' => $request->categoryDescription,
        ];
    }

    // Category Validation
    private function vali($request)
    {
        Validator::make($request->all(), [
            'categoryName' => 'required',
            'categoryDescription' => 'required',
        ])->validate();
    }
}
