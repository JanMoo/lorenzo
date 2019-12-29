<?php

namespace NxTMateriaalbeheer\Http\Controllers;

use Illuminate\Http\Request;
use NxTMateriaalbeheer\Category;

class CategoryController extends Controller
{
    public function index(){

        return view('admin.categories_all', ['categories' => Category::all()] );
    }

    //show form to create a new category
    public function create(){
        return view('admin.categories_new');
    }

    public function store(){
        request()->validate([
            'category_title' => ['required', 'string', 'max:255'],
            'category_description' => ['required', 'string'],
            ]);

        $category = new Category();
        $category->category_title= request("category_title");
        $category->category_description= request("category_description");
        $category->save();

        return redirect()->route('categories.index');
    }


    public function show($id){
        $category = Category::find($id);
        return view('admin.categories_edit', compact($category));
    }

    public function update($id){
        request()->validate([
            'category_title' => ['required', 'string', 'max:255'],
            'category_description' => ['required', 'string'],
            ]);

        $category = Category::find($id);
        $category->category_title= request("category_title");
        $category->category_description= request("category_description");
        $category->save();

        return redirect()->route('categories.index');
    }

    public function edit(){

    }



    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        $category->save();
    }
}
