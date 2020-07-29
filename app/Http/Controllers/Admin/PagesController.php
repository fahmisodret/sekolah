<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Page\PageCreateRequest;
use App\Http\Requests\Admin\Page\PageUpdateRequest;

class PagesController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $pages = Page::where('title', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $pages = Page::latest()->paginate($perPage);
        }

        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(PageCreateRequest $request)
    {
        Page::create($request->getValidRequest());

        return redirect('admin/pages')->with('flash_message', 'Page added!');
    }

    public function show($id)
    {
        $page = Page::findOrFail($id);

        return view('admin.pages.show', compact('page'));
    }

    public function edit($id)
    {
        $page = Page::findOrFail($id);

        return view('admin.pages.edit', compact('page'));
    }

    public function update(PageUpdateRequest $request, $id)
    {
        $page = Page::findOrFail($id);
        $page->update($request->getValidRequest());

        return redirect('admin/pages')->with('flash_message', 'Page updated!');
    }

    public function destroy($id)
    {
        Page::destroy($id);

        return redirect('admin/pages')->with('flash_message', 'Page deleted!');
    }
}
