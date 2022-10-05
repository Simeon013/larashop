<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Models\Category as ModelsCategory;

class CategoryController extends Controller
{
    //
    public function addcategory(){
        return view('admin.ajoutercategorie');
    }

    public function savecategory(Request $request){

        $this->validate($request, ['category_name' => 'required']);

        $categorie = new ModelsCategory();

        $categorie->category_name = $request->input('category_name');

        $categorie->save();

        return redirect('/addcategory')->with('status', 'La catégorie ' . $categorie->category_name . ' a été ajoutée avec succès. ');
    }

    public function categories(){

        $categories = ModelsCategory::get();
        return view('admin.categories')-> with('categories', $categories);
    }
}
