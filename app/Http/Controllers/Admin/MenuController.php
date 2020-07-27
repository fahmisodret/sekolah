<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Request $request, $type='back')
    {
        $menu = Menu::get($type);
        return view('admin.menu.index', compact('menu'));
    }

    public function create()
    {
        return view('admin.menu.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
			'title' => 'required',
			'url' => 'required'
		]);
        $request->merge(['hasSub' => ($request->hasSub)?$request->hasSub:false]);
        $requestData = $request->except('_token', '_method');
        $menu = Menu::create('back', $requestData);

        return redirect('admin.menu')->with('flash_message', 'Menu added!');
    }

    public function edit($id)
    {
        $menu = Menu::get();
        $menu = $menu->menus[0]->items[$id];
        $menu->id = $id;

        return view('admin.menu.edit', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'title' => 'required',
			'url' => 'required'
		]);
        $request->merge(['hasSub' => ($request->hasSub)?$request->hasSub:false]);
        $requestData = $request->except('_token', '_method');
        $menu = Menu::update('back', $requestData, $id);
        return redirect('menu')->with('flash_message', 'Menu updated!');
    }

    public function destroy($id)
    {
        Menu::destroy($id);

        return redirect('menu')->with('flash_message', 'Menu deleted!');
    }
}
