<?php

namespace NxTMateriaalbeheer\Http\Controllers;

use Illuminate\Http\Request;
use NxTMateriaalbeheer\Material;

class MaterialController extends Controller
{
    public function index(){

        return view('admin.materials_all', ['materials' => Material::all()] );
    }

    public function show($id){
        $material = Material::find($id);
        return view("admin.materials_show", compact("material"));
    }

    //show form to create new material
    //way to create multiple materials of same kind at once
    //probably use something like dslr_01 dslr_02 dslr_03
    public function create(){

    }

    public function update(){

    }

    public function edit(){

    }

    public function store(){

    }

    public function destroy(){

    }
}
