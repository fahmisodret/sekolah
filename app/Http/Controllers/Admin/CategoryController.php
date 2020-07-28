<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Category\CategoryCreateRequest;
use App\Http\Requests\Admin\Category\CategoryUpdateRequest;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $category = Category::where('title', 'LIKE', "%$keyword%")
                ->orWhere('slug', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $category = Category::latest()->paginate($perPage);
        }

        return view('admin.category.index', compact('category'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryCreateRequest $request)
    {
        Category::create($request->getValidRequest());

        return redirect('admin/category')->with('flash_message', 'Category added!');
    }

    public function show($id)
    {
        $data['category'] = Category::findOrFail($id);

        return view('admin.category.show', $data);
    }

    public function edit($id)
    {
        $data['category'] = Category::findOrFail($id);

        return view('admin.category.edit', $data);
    }

    public function update(CategoryUpdateRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        if($request->hasFile('image')){
            Storage::delete('path to folder'.$category->image);
        }
        $category->update($request->getValidRequest());

        return redirect('admin/category')->with('flash_message', 'Category updated!');
    }

    public function destroy($id)
    {
        // $data = Category::find($id);
        // Storage::delete('path to folder'.$data->image);
        Category::destroy($id);

        return redirect('admin/category')->with('flash_message', 'Category deleted!');
    }
}
