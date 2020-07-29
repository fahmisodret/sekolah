<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Iklan;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\iklan\IklanCreateRequest;
use App\Http\Requests\Admin\iklan\IklanUpdateRequest;
use Storage;

class IklanController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $iklan = Iklan::where('title', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('url', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $iklan = Iklan::latest()->paginate($perPage);
        }

        return view('admin.iklan.index', compact('iklan'));
    }

    public function create()
    {
        return view('admin.iklan.create');
    }

    public function store(IklanCreateRequest $request)
    {
        Iklan::create($request->getValidRequest());

        return redirect('admin/iklan')->with('flash_message', 'Iklan added!');
    }

    public function show($id)
    {
        $data['iklan'] = Iklan::findOrFail($id);

        return view('admin.iklan.show', $data);
    }

    public function edit($id)
    {
        $data['iklan'] = Iklan::findOrFail($id);

        return view('admin.iklan.edit', $data);
    }

    public function update(IklanUpdateRequest $request, $id)
    {
        $iklan = Iklan::findOrFail($id);
        if($request->hasFile('image')){
            Storage::delete('/public/upload/iklan/'.$iklan->image);
        }
        $iklan->update($request->getValidRequest());

        return redirect('admin/iklan')->with('flash_message', 'Iklan updated!');
    }

    public function destroy($id)
    {
        $data = Iklan::find($id);
        Storage::delete('/public/upload/iklan/'.$data->image);
        Iklan::destroy($id);

        return redirect('admin/iklan')->with('flash_message', 'Iklan deleted!');
    }
}
