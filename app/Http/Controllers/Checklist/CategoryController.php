<?php

namespace App\Http\Controllers\Checklist;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Checklist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function create_category(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'icon' => 'required|image|max: 255'
        ]);

        $category = $request->except('token');

        $category['icon'] = $request->icon->store('img/category_images');

        $category = Category::create($category);
        return redirect()->route('dashboard');
    }

    public function edit_category(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'icon' => 'required|string',
            'img_icon' => 'nullable|image|max: 2500'
        ]);

        $category = $request->except('token');

        if (Storage::exists($category['icon'])) {
            Storage::delete($category['icon']);
            $category['icon'] = $request->img_icon->store('img/category_images');
        }

        Category::findOrFail($category['id'])->update($category);

        return redirect()->route('dashboard')->with('status', 'Dados da categoria editados com sucesso!');
    }

    public function delete_category(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ], [
            'id' => ['required' => 'Algo deu errado! Reporte este erro!']
        ]);

        $checklists = Checklist::where('category_id', $request->id)->get();

        if ($checklists->count() > 0) {
            $errors =  "Categoria não deletada, pois está sendo usada por alguma checklist!";

            return redirect()->route('dashboard')->withErrors($errors);
        }

        $category = Category::findOrFail($request->id);

        if (Storage::exists($category->icon)) {
            Storage::delete($category->icon);
        } else {
            $errors = "Temos um erro em deletar a imagem";
            return redirect()->route('dashboard')->withErrors($errors);
        }

        Category::findOrFail($request->id)->delete();

        return redirect()->route('dashboard')->with('status', 'Categoria deletada com sucesso!');
    }
}
