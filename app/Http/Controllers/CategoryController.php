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

        $this->validate($request, ['category_name' => 'required|unique:categories']);

        $categorie = new ModelsCategory();

        $categorie->category_name = $request->input('category_name');

        $categorie->save();

        return redirect('/addcategory')->with('status', 'La catégorie ' . $categorie->category_name . ' a été ajoutée avec succès. ');
    }

    public function categories(){

        $categories = ModelsCategory::get();
        return view('admin.categories')-> with('categories', $categories);
    }

    public function editcategory($id){
        $categorie = ModelsCategory::find($id);

        return view('admin.editcategorie')->with('categorie', $categorie);
    }

    public function updatecategory(Request $request){

        $this->validate($request, ['category_name' => 'required|unique:categories']);

        $categorie = ModelsCategory::find($request->input('id'));

        $categorie->category_name = $request->input('category_name');

        $categorie->update();

        return redirect('/categories')->with('status', 'La catégorie ' . $categorie->category_name . ' a été modifiée avec succès. ');
    }

    public function deletecategory($id){
        $categorie = ModelsCategory::find($id);

        $categorie->delete();

        return redirect('/categories')->with('status', 'La catégorie ' . $categorie->category_name . ' a été supprimée avec succès. ');
    }

}
