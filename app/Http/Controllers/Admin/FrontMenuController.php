<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Menu;
use Illuminate\Http\Request;

class FrontMenuController extends Controller
{
    public function index(Request $request)
    {
        $menu = Menu::get('front');
        return view('admin.frontmenu.index', compact('menu'));
    }

    public function create()
    {
        return view('admin.frontmenu.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'url' => 'required'
        ]);
        $request->merge(['hasSub' => ($request->hasSub)?$request->hasSub:false]);
        $requestData = $request->except('_token', '_method');
        $menu = Menu::create('front', $requestData);

        return redirect('admin/front/menu')->with('flash_message', 'Menu added!');
    }

    public function edit($id)
    {
        $menu = Menu::get('front');
        $menu = $menu->menus[0]->items[$id];
        $menu->id = $id;

        return view('admin.frontmenu.edit', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'url' => 'required'
        ]);
        $request->merge(['hasSub' => ($request->hasSub)?$request->hasSub:false]);
        $requestData = $request->except('_token', '_method');
        $menu = Menu::update('front', $requestData, $id);
        return redirect('admin/front/menu')->with('flash_message', 'Menu updated!');
    }

    public function destroy($id)
    {
        Menu::destroy($id);

        return redirect('admin/front/menu')->with('flash_message', 'Menu deleted!');
    }
}
